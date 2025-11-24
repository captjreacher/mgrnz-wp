<?php
/**
 * AI Service Integration Class
 * 
 * Handles communication with external AI APIs (OpenAI, Anthropic)
 * to generate workflow blueprints based on user input.
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/class-diagram-generator.php';

class MGRNZ_AI_Service {
    
    /**
     * AI provider API key
     * @var string
     */
    private $api_key;
    
    /**
     * AI provider (openai or anthropic)
     * @var string
     */
    private $provider;
    
    /**
     * AI model to use
     * @var string
     */
    private $model;
    
    /**
     * Maximum tokens for response
     * @var int
     */
    private $max_tokens;
    
    /**
     * Temperature for AI generation
     * @var float
     */
    private $temperature;
    
    /**
     * Request timeout in seconds
     * @var int
     */
    private $timeout;
    
    /**
     * Maximum retry attempts
     * @var int
     */
    private $max_retries;
    
    /**
     * Constructor - loads API credentials and configuration
     */
    public function __construct() {
        // Load from environment variables first, then WordPress options
        $this->provider = getenv('MGRNZ_AI_PROVIDER') ?: get_option('mgrnz_ai_provider', 'openai');
        $this->api_key = getenv('MGRNZ_AI_API_KEY') ?: get_option('mgrnz_ai_api_key', '');
        $this->model = getenv('MGRNZ_AI_MODEL') ?: get_option('mgrnz_ai_model', $this->get_default_model());
        $this->max_tokens = (int) (getenv('MGRNZ_AI_MAX_TOKENS') ?: get_option('mgrnz_ai_max_tokens', 2000));
        $this->temperature = (float) (getenv('MGRNZ_AI_TEMPERATURE') ?: get_option('mgrnz_ai_temperature', 0.7));
        $this->timeout = 60;
        $this->max_retries = 2;
    }
    
    /**
     * Get default model based on provider
     * 
     * @return string
     */
    private function get_default_model() {
        return $this->provider === 'anthropic' ? 'claude-3-5-sonnet-20241022' : 'gpt-4o-mini';
    }
    
    /**
     * Generate blueprint from workflow data
     * 
     * @param array $workflow_data User workflow information
     * @return array Blueprint data with summary and content
     * @throws Exception If generation fails
     */
    public function generate_blueprint($workflow_data) {
        // Validate API key
        if (empty($this->api_key)) {
            $this->handle_blueprint_failure('AI API key not configured', $workflow_data);
            throw new Exception('AI API key not configured');
        }
        
        // Build the prompt
        $prompt = $this->build_prompt($workflow_data);
        
        // Call appropriate AI service with retry logic
        $retries = 0;
        $last_error = null;
        
        while ($retries < $this->max_retries) {
            try {
                if ($this->provider === 'anthropic') {
                    $raw_response = $this->call_anthropic_api($prompt);
                } else {
                    $raw_response = $this->call_openai_api($prompt);
                }
                
                // Parse and return the response
                return $this->parse_response($raw_response);
                
            } catch (Exception $e) {
                $last_error = $e;
                $retries++;
                
                // Log each retry attempt
                error_log(sprintf(
                    '[AI Service] Blueprint generation attempt %d/%d failed: %s',
                    $retries,
                    $this->max_retries,
                    $e->getMessage()
                ));
                
                // Only retry on transient failures (timeout, 5xx errors)
                if (!$this->is_retryable_error($e)) {
                    break;
                }
                
                // Wait before retry (exponential backoff)
                if ($retries < $this->max_retries) {
                    sleep(pow(2, $retries));
                }
            }
        }
        
        // All retries failed - handle the failure
        $this->handle_blueprint_failure($last_error->getMessage(), $workflow_data, $last_error);
        
        // Throw the error to be caught by the endpoint
        throw $last_error;
    }
    
    /**
     * Handle blueprint generation failure
     * 
     * @param string $error_message Error message
     * @param array $workflow_data User workflow data
     * @param Exception|null $exception Optional exception object
     * @return void
     */
    private function handle_blueprint_failure($error_message, $workflow_data, $exception = null) {
        // Log detailed error information
        error_log(sprintf(
            '[AI Service] Blueprint generation failed | Provider: %s | Model: %s | Error: %s | Time: %s',
            $this->provider,
            $this->model,
            $error_message,
            current_time('mysql')
        ));
        
        // Store failed request for manual processing
        $failed_request_id = wp_insert_post([
            'post_type' => 'ai_workflow_failed',
            'post_title' => 'Failed Blueprint - ' . substr($workflow_data['goal'] ?? 'Unknown', 0, 50),
            'post_status' => 'publish',
            'post_content' => $error_message
        ]);
        
        if (!is_wp_error($failed_request_id)) {
            // Save workflow data for manual review
            update_post_meta($failed_request_id, '_mgrnz_failed_goal', $workflow_data['goal'] ?? '');
            update_post_meta($failed_request_id, '_mgrnz_failed_workflow', $workflow_data['workflow_description'] ?? '');
            update_post_meta($failed_request_id, '_mgrnz_failed_tools', $workflow_data['tools'] ?? '');
            update_post_meta($failed_request_id, '_mgrnz_failed_pain_points', $workflow_data['pain_points'] ?? '');
            update_post_meta($failed_request_id, '_mgrnz_failed_email', $workflow_data['email'] ?? '');
            update_post_meta($failed_request_id, '_mgrnz_failed_error', $error_message);
            update_post_meta($failed_request_id, '_mgrnz_failed_provider', $this->provider);
            update_post_meta($failed_request_id, '_mgrnz_failed_model', $this->model);
            update_post_meta($failed_request_id, '_mgrnz_failed_at', current_time('mysql'));
            
            if ($exception) {
                update_post_meta($failed_request_id, '_mgrnz_failed_trace', $exception->getTraceAsString());
            }
        }
        
        // Send notification to admin email
        $this->send_failure_notification($workflow_data, $error_message, $failed_request_id);
    }
    
    /**
     * Send failure notification to admin
     * 
     * @param array $workflow_data User workflow data
     * @param string $error_message Error message
     * @param int|WP_Error $failed_request_id Failed request post ID
     * @return void
     */
    private function send_failure_notification($workflow_data, $error_message, $failed_request_id) {
        $admin_email = get_option('admin_email');
        
        if (empty($admin_email)) {
            return;
        }
        
        $subject = '[AI Workflow] Blueprint Generation Failed';
        
        $message = "A blueprint generation request has failed and requires manual review.\n\n";
        $message .= "ERROR DETAILS:\n";
        $message .= "Error: {$error_message}\n";
        $message .= "Provider: {$this->provider}\n";
        $message .= "Model: {$this->model}\n";
        $message .= "Time: " . current_time('mysql') . "\n\n";
        
        $message .= "USER INFORMATION:\n";
        $message .= "Goal: " . ($workflow_data['goal'] ?? 'N/A') . "\n";
        $message .= "Email: " . ($workflow_data['email'] ?? 'N/A') . "\n\n";
        
        $message .= "WORKFLOW DETAILS:\n";
        $message .= "Workflow: " . substr($workflow_data['workflow_description'] ?? 'N/A', 0, 200) . "...\n";
        $message .= "Tools: " . ($workflow_data['tools'] ?? 'N/A') . "\n";
        $message .= "Pain Points: " . substr($workflow_data['pain_points'] ?? 'N/A', 0, 200) . "...\n\n";
        
        if (!is_wp_error($failed_request_id)) {
            $message .= "View in dashboard: " . admin_url('post.php?post=' . $failed_request_id . '&action=edit') . "\n";
        }
        
        $message .= "\nPlease review and process this request manually.";
        
        // Send email
        wp_mail($admin_email, $subject, $message);
    }

    
    /**
     * Build structured prompt from workflow data
     * 
     * @param array $workflow_data User workflow information
     * @return string Formatted prompt
     */
    private function build_prompt($workflow_data) {
        $goal = $workflow_data['goal'] ?? '';
        $workflow = $workflow_data['workflow_description'] ?? '';
        $tools = $workflow_data['tools'] ?? '';
        $pain_points = $workflow_data['pain_points'] ?? '';
        
        $prompt = "You are an AI workflow consultant. Based on the following information about a user's workflow, generate a detailed AI-enabled workflow blueprint.\n\n";
        $prompt .= "USER INFORMATION:\n";
        $prompt .= "- Goal: {$goal}\n";
        $prompt .= "- Current Workflow: {$workflow}\n";
        $prompt .= "- Tools: {$tools}\n";
        $prompt .= "- Pain Points: {$pain_points}\n\n";
        $prompt .= "Generate a blueprint with the following sections:\n\n";
        $prompt .= "1. WORKFLOW ANALYSIS\n";
        $prompt .= "   - Summary of current state\n";
        $prompt .= "   - Key inefficiencies identified\n\n";
        $prompt .= "2. AI-ENABLED SOLUTION\n";
        $prompt .= "   - Specific AI tools and techniques to apply\n";
        $prompt .= "   - How they address the pain points\n\n";
        $prompt .= "3. IMPLEMENTATION ROADMAP\n";
        $prompt .= "   - Step-by-step action plan\n";
        $prompt .= "   - Quick wins (can implement immediately)\n";
        $prompt .= "   - Long-term improvements\n\n";
        $prompt .= "4. TOOL RECOMMENDATIONS\n";
        $prompt .= "   - Specific AI tools to use\n";
        $prompt .= "   - Integration suggestions with existing tools\n\n";
        $prompt .= "Format the response in clean markdown with clear headings and bullet points.";
        
        return $prompt;
    }
    
    /**
     * Call OpenAI API
     * 
     * @param string $prompt The prompt to send
     * @return array Raw API response
     * @throws Exception On API error
     */
    private function call_openai_api($prompt) {
        $url = 'https://api.openai.com/v1/chat/completions';
        
        $body = json_encode([
            'model' => $this->model,
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $prompt
                ]
            ],
            'max_tokens' => $this->max_tokens,
            'temperature' => $this->temperature
        ]);
        
        $args = [
            'method' => 'POST',
            'timeout' => $this->timeout,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->api_key
            ],
            'body' => $body
        ];
        
        $response = wp_remote_post($url, $args);
        
        if (is_wp_error($response)) {
            $this->handle_api_error($response->get_error_message(), 'openai');
        }
        
        $status_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        if ($status_code !== 200) {
            $error_message = $data['error']['message'] ?? 'Unknown error';
            $this->handle_api_error($error_message, 'openai', $status_code);
        }
        
        return $data;
    }
    
    /**
     * Call Anthropic API
     * 
     * @param string $prompt The prompt to send
     * @return array Raw API response
     * @throws Exception On API error
     */
    private function call_anthropic_api($prompt) {
        $url = 'https://api.anthropic.com/v1/messages';
        
        $body = json_encode([
            'model' => $this->model,
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $prompt
                ]
            ],
            'max_tokens' => $this->max_tokens,
            'temperature' => $this->temperature
        ]);
        
        $args = [
            'method' => 'POST',
            'timeout' => $this->timeout,
            'headers' => [
                'Content-Type' => 'application/json',
                'x-api-key' => $this->api_key,
                'anthropic-version' => '2023-06-01'
            ],
            'body' => $body
        ];
        
        $response = wp_remote_post($url, $args);
        
        if (is_wp_error($response)) {
            $this->handle_api_error($response->get_error_message(), 'anthropic');
        }
        
        $status_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        if ($status_code !== 200) {
            $error_message = $data['error']['message'] ?? 'Unknown error';
            $this->handle_api_error($error_message, 'anthropic', $status_code);
        }
        
        return $data;
    }

    
    /**
     * Parse AI response and extract blueprint
     * 
     * @param array $raw_response Raw API response
     * @return array Formatted blueprint with summary and content
     */
    private function parse_response($raw_response) {
        $content = '';
        $tokens_used = 0;
        
        // Extract content based on provider
        if ($this->provider === 'anthropic') {
            if (isset($raw_response['content'][0]['text'])) {
                $content = $raw_response['content'][0]['text'];
            }
            $tokens_used = $raw_response['usage']['output_tokens'] ?? 0;
        } else {
            // OpenAI
            if (isset($raw_response['choices'][0]['message']['content'])) {
                $content = $raw_response['choices'][0]['message']['content'];
            }
            $tokens_used = $raw_response['usage']['completion_tokens'] ?? 0;
        }
        
        if (empty($content)) {
            throw new Exception('Empty response from AI service');
        }
        
        // Extract summary (first paragraph or first 200 chars)
        $summary = $this->extract_summary($content);
        
        // Generate diagram from blueprint content
        $diagram_generator = new MGRNZ_Diagram_Generator();
        $diagram_data = $diagram_generator->generate_from_blueprint($content);
        
        return [
            'summary' => $summary,
            'content' => $content,
            'generated_at' => current_time('mysql'),
            'ai_model' => $this->model,
            'tokens_used' => $tokens_used,
            'diagram' => $diagram_data
        ];
    }
    
    /**
     * Extract summary from blueprint content
     * 
     * @param string $content Full blueprint content
     * @return string Summary text
     */
    private function extract_summary($content) {
        // Remove markdown headers
        $text = preg_replace('/^#+\s+/m', '', $content);
        
        // Get first paragraph
        $paragraphs = preg_split('/\n\n+/', trim($text));
        $first_paragraph = $paragraphs[0] ?? '';
        
        // Limit to 200 characters
        if (strlen($first_paragraph) > 200) {
            $first_paragraph = substr($first_paragraph, 0, 197) . '...';
        }
        
        return $first_paragraph;
    }
    
    /**
     * Handle API errors with logging and user-friendly messages
     * 
     * @param string $error_message Error message from API
     * @param string $provider AI provider name
     * @param int $status_code HTTP status code
     * @throws Exception Always throws with user-friendly message
     */
    private function handle_api_error($error_message, $provider, $status_code = 0) {
        // Log the detailed error
        error_log(sprintf(
            '[AI WORKFLOW ERROR] Provider: %s | Status: %d | Error: %s | Time: %s',
            $provider,
            $status_code,
            $error_message,
            current_time('mysql')
        ));
        
        // Determine user-friendly message based on error type
        $user_message = 'Unable to generate blueprint. Please try again.';
        
        if ($status_code === 401 || $status_code === 403) {
            $user_message = 'AI service authentication failed. Please contact support.';
        } elseif ($status_code === 429) {
            $user_message = 'AI service rate limit reached. Please try again in a few minutes.';
        } elseif ($status_code >= 500) {
            $user_message = 'AI service is temporarily unavailable. Please try again later.';
        } elseif (strpos($error_message, 'timeout') !== false || strpos($error_message, 'timed out') !== false) {
            $user_message = 'Request timed out. Please try again.';
        }
        
        throw new Exception($user_message, $status_code);
    }
    
    /**
     * Check if error is retryable
     * 
     * @param Exception $error The error to check
     * @return bool True if error is retryable
     */
    private function is_retryable_error($error) {
        $code = $error->getCode();
        $message = $error->getMessage();
        
        // Retry on timeout errors
        if (strpos($message, 'timeout') !== false || strpos($message, 'timed out') !== false) {
            return true;
        }
        
        // Retry on 5xx server errors
        if ($code >= 500 && $code < 600) {
            return true;
        }
        
        // Retry on 429 rate limit (with backoff)
        if ($code === 429) {
            return true;
        }
        
        return false;
    }
    
    /**
     * Generate cost estimate based on workflow complexity
     * 
     * @param array $workflow_data User workflow information
     * @return array Estimate with setup cost, monthly cost, timeline, and disclaimer
     * @throws Exception If generation fails
     */
    public function generate_cost_estimate($workflow_data) {
        // Validate API key
        if (empty($this->api_key)) {
            throw new Exception('AI API key not configured');
        }
        
        // Build the estimate prompt
        $prompt = $this->build_estimate_prompt($workflow_data);
        
        try {
            // Call AI service
            if ($this->provider === 'anthropic') {
                $raw_response = $this->call_anthropic_api($prompt);
                $content = $raw_response['content'][0]['text'] ?? '';
            } else {
                $raw_response = $this->call_openai_api($prompt);
                $content = $raw_response['choices'][0]['message']['content'] ?? '';
            }
            
            if (empty($content)) {
                throw new Exception('Empty response from AI service');
            }
            
            // Parse the estimate from the response
            return $this->parse_estimate_response($content);
            
        } catch (Exception $e) {
            error_log('[AI Service] Cost estimate generation failed: ' . $e->getMessage());
            throw $e;
        }
    }
    
    /**
     * Build prompt for cost estimate generation
     * 
     * @param array $workflow_data User workflow information
     * @return string Formatted prompt
     */
    private function build_estimate_prompt($workflow_data) {
        $goal = $workflow_data['goal'] ?? '';
        $workflow = $workflow_data['workflow_description'] ?? '';
        $tools = $workflow_data['tools'] ?? '';
        $pain_points = $workflow_data['pain_points'] ?? '';
        
        $prompt = "You are an AI workflow automation cost estimator. Based on the following workflow information, provide an indicative cost estimate.\n\n";
        $prompt .= "WORKFLOW INFORMATION:\n";
        $prompt .= "- Goal: {$goal}\n";
        $prompt .= "- Current Workflow: {$workflow}\n";
        $prompt .= "- Tools: {$tools}\n";
        $prompt .= "- Pain Points: {$pain_points}\n\n";
        $prompt .= "Provide an estimate in the following format:\n\n";
        $prompt .= "SETUP_COST: [range like $2,500 - $4,000]\n";
        $prompt .= "MONTHLY_COST: [range like $150 - $300]\n";
        $prompt .= "TIMELINE: [like 2-3 weeks]\n";
        $prompt .= "COMPLEXITY: [Low/Medium/High]\n";
        $prompt .= "EXPLANATION: [2-3 sentences explaining the estimate]\n\n";
        $prompt .= "Base your estimate on:\n";
        $prompt .= "- Number of integration points\n";
        $prompt .= "- Complexity of automation logic\n";
        $prompt .= "- Custom development needs\n";
        $prompt .= "- Ongoing maintenance requirements\n\n";
        $prompt .= "Provide realistic ranges. Be conservative but fair.";
        
        return $prompt;
    }
    
    /**
     * Parse estimate response from AI
     * 
     * @param string $content AI response content
     * @return array Parsed estimate data
     */
    private function parse_estimate_response($content) {
        // Extract values using regex
        $setup_cost = '';
        $monthly_cost = '';
        $timeline = '';
        $complexity = 'Medium';
        $explanation = '';
        
        if (preg_match('/SETUP_COST:\s*(.+)/i', $content, $matches)) {
            $setup_cost = trim($matches[1]);
        }
        
        if (preg_match('/MONTHLY_COST:\s*(.+)/i', $content, $matches)) {
            $monthly_cost = trim($matches[1]);
        }
        
        if (preg_match('/TIMELINE:\s*(.+)/i', $content, $matches)) {
            $timeline = trim($matches[1]);
        }
        
        if (preg_match('/COMPLEXITY:\s*(.+)/i', $content, $matches)) {
            $complexity = trim($matches[1]);
        }
        
        if (preg_match('/EXPLANATION:\s*(.+)/is', $content, $matches)) {
            $explanation = trim($matches[1]);
        }
        
        // Fallback to defaults if parsing fails
        if (empty($setup_cost)) {
            $setup_cost = '$2,000 - $5,000';
        }
        if (empty($monthly_cost)) {
            $monthly_cost = '$100 - $500';
        }
        if (empty($timeline)) {
            $timeline = '2-4 weeks';
        }
        if (empty($explanation)) {
            $explanation = 'This estimate is based on the complexity of your workflow and typical automation project costs.';
        }
        
        return [
            'setup_cost' => $setup_cost,
            'monthly_cost' => $monthly_cost,
            'timeline' => $timeline,
            'complexity' => $complexity,
            'explanation' => $explanation,
            'disclaimer' => 'This is an indicative estimate only. Final pricing will be provided in a formal quote after detailed analysis.'
        ];
    }
    
    /**
     * Generate clarifying questions based on wizard data
     * 
     * @param array $wizard_data User workflow information
     * @return array Array of 2-5 clarifying questions
     * @throws Exception If generation fails
     */
    public function generate_clarifying_questions($wizard_data) {
        // Validate API key
        if (empty($this->api_key)) {
            throw new Exception('AI API key not configured');
        }
        
        // Build the prompt for clarifying questions
        $prompt = $this->build_clarification_questions_prompt($wizard_data);
        
        try {
            // Call AI service
            if ($this->provider === 'anthropic') {
                $raw_response = $this->call_anthropic_api($prompt);
                $content = $raw_response['content'][0]['text'] ?? '';
            } else {
                $raw_response = $this->call_openai_api($prompt);
                $content = $raw_response['choices'][0]['message']['content'] ?? '';
            }
            
            if (empty($content)) {
                throw new Exception('Empty response from AI service');
            }
            
            // Parse the questions from the response
            return $this->parse_clarifying_questions($content);
            
        } catch (Exception $e) {
            error_log('[AI Service] Clarifying questions generation failed: ' . $e->getMessage());
            throw $e;
        }
    }
    
    /**
     * Build prompt for clarifying questions generation
     * 
     * @param array $wizard_data User workflow information
     * @return string Formatted prompt
     */
    private function build_clarification_questions_prompt($wizard_data) {
        $goal = $wizard_data['goal'] ?? '';
        $workflow = $wizard_data['workflow_description'] ?? '';
        $tools = $wizard_data['tools'] ?? '';
        $pain_points = $wizard_data['pain_points'] ?? '';
        
        $prompt = "You are an AI workflow automation consultant. The user has submitted the following information:\n\n";
        $prompt .= "- Goal: {$goal}\n";
        $prompt .= "- Current Workflow: {$workflow}\n";
        $prompt .= "- Tools: {$tools}\n";
        $prompt .= "- Pain Points: {$pain_points}\n\n";
        $prompt .= "Your task:\n";
        $prompt .= "1. Generate 2-5 clarifying questions to better understand their needs\n";
        $prompt .= "2. Be conversational and friendly\n";
        $prompt .= "3. Focus on understanding automation opportunities\n";
        $prompt .= "4. Keep questions specific and actionable\n";
        $prompt .= "5. Ask about time spent, specific pain points, integration requirements, and success criteria\n\n";
        $prompt .= "Format your response as a friendly message with the questions. Start with a brief acknowledgment, then list the questions naturally in the conversation.\n\n";
        $prompt .= "Example format:\n";
        $prompt .= "Thanks for sharing your workflow details! I'd like to understand a bit more:\n\n";
        $prompt .= "1. [First question]\n";
        $prompt .= "2. [Second question]\n";
        $prompt .= "3. [Third question]\n\n";
        $prompt .= "Generate the clarifying questions now:";
        
        return $prompt;
    }
    
    /**
     * Parse clarifying questions from AI response
     * 
     * @param string $content AI response content
     * @return array Parsed questions data with message and question list
     */
    private function parse_clarifying_questions($content) {
        // Extract numbered questions using regex
        $questions = [];
        if (preg_match_all('/\d+\.\s*(.+?)(?=\n\d+\.|\n\n|$)/s', $content, $matches)) {
            $questions = array_map('trim', $matches[1]);
        }
        
        // If no numbered questions found, return the whole content as a single message
        if (empty($questions)) {
            return [
                'message' => trim($content),
                'questions' => [],
                'count' => 0
            ];
        }
        
        return [
            'message' => trim($content),
            'questions' => $questions,
            'count' => count($questions)
        ];
    }
    
    /**
     * Test connection to AI service
     * 
     * @return array Result with success status and message/error
     */
    public function test_connection() {
        if (empty($this->api_key)) {
            return [
                'success' => false,
                'error' => 'API key is not configured'
            ];
        }
        
        try {
            // Send a minimal test request
            $test_prompt = "Respond with 'OK' if you can read this message.";
            
            if ($this->provider === 'anthropic') {
                $url = 'https://api.anthropic.com/v1/messages';
                
                $body = json_encode([
                    'model' => $this->model,
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => $test_prompt
                        ]
                    ],
                    'max_tokens' => 10
                ]);
                
                $args = [
                    'method' => 'POST',
                    'timeout' => 10,
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'x-api-key' => $this->api_key,
                        'anthropic-version' => '2023-06-01'
                    ],
                    'body' => $body
                ];
            } else {
                // OpenAI
                $url = 'https://api.openai.com/v1/chat/completions';
                
                $body = json_encode([
                    'model' => $this->model,
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => $test_prompt
                        ]
                    ],
                    'max_tokens' => 10
                ]);
                
                $args = [
                    'method' => 'POST',
                    'timeout' => 10,
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Authorization' => 'Bearer ' . $this->api_key
                    ],
                    'body' => $body
                ];
            }
            
            $response = wp_remote_post($url, $args);
            
            if (is_wp_error($response)) {
                return [
                    'success' => false,
                    'error' => $response->get_error_message()
                ];
            }
            
            $status_code = wp_remote_retrieve_response_code($response);
            
            if ($status_code === 200) {
                return [
                    'success' => true,
                    'message' => 'Connection successful'
                ];
            } else {
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                $error_message = $data['error']['message'] ?? 'HTTP ' . $status_code;
                
                return [
                    'success' => false,
                    'error' => $error_message
                ];
            }
            
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}
