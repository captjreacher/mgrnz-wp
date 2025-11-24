<?php
/**
 * Conversation Manager
 * 
 * Manages conversation flow, state transitions, and predetermined paths
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/class-conversation-session.php';
require_once __DIR__ . '/class-chat-message.php';
require_once __DIR__ . '/class-ai-service.php';
require_once __DIR__ . '/class-conversation-analytics.php';

class MGRNZ_Conversation_Manager {
    
    /**
     * Current session
     * @var MGRNZ_Conversation_Session
     */
    private $session;
    
    /**
     * AI service instance
     * @var MGRNZ_AI_Service
     */
    private $ai_service;
    
    /**
     * Predetermined conversation paths
     * @var array
     */
    private $conversation_paths;
    
    /**
     * Constructor
     * 
     * @param string $session_id Session ID
     * @param array $wizard_data Wizard submission data (for new sessions)
     */
    public function __construct($session_id = null, $wizard_data = []) {
        // Load or create session
        if ($session_id) {
            $this->session = MGRNZ_Conversation_Session::load($session_id);
            if (!$this->session) {
                throw new Exception('Session not found');
            }
        } else {
            $this->session = new MGRNZ_Conversation_Session([
                'wizard_data' => $wizard_data
            ]);
            $this->session->save();
        }
        
        $this->ai_service = new MGRNZ_AI_Service();
        $this->init_conversation_paths();
    }
    
    /**
     * Initialize predetermined conversation paths
     */
    private function init_conversation_paths() {
        $this->conversation_paths = [
            'no_response' => [
                'timeout' => 60, // 60 seconds
                'action' => 'continue_with_defaults',
                'message' => "I haven't heard from you. Shall I continue with the information you've provided?"
            ],
            'clarification_complete' => [
                'action' => 'transition_to_upsell',
                'message' => "Great! I have everything I need. While the analysis is running, let me share some ways I can help you further..."
            ],
            'upsell_declined' => [
                'action' => 'proceed_to_blueprint',
                'message' => "No problem! Let me finalize your blueprint..."
            ]
        ];
    }
    
    /**
     * Get session ID
     * 
     * @return string Session ID
     */
    public function get_session_id() {
        return $this->session->session_id;
    }
    
    /**
     * Get assistant name
     * 
     * @return string Assistant name
     */
    public function get_assistant_name() {
        return $this->session->assistant_name;
    }
    
    /**
     * Get initial clarifying questions
     * 
     * @return array Questions and metadata
     */
    public function get_initial_questions() {
        $wizard_data = $this->session->wizard_data;
        
        // Track chat started event
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_CHAT_STARTED,
            $this->session->session_id,
            ['assistant_name' => $this->session->assistant_name]
        );
        
        try {
            // Generate questions using AI service
            $questions_data = $this->ai_service->generate_clarifying_questions($wizard_data);
            
            // Create assistant message with questions
            $message = new MGRNZ_Chat_Message([
                'session_id' => $this->session->session_id,
                'sender' => 'assistant',
                'content' => $questions_data['message'],
                'metadata' => [
                    'type' => 'clarification_questions',
                    'questions' => $questions_data['questions'],
                    'count' => $questions_data['count']
                ]
            ]);
            
            $message_id = $message->save();
            $this->session->add_message($message_id);
            
            // Track assistant message
            MGRNZ_Conversation_Analytics::track_event(
                MGRNZ_Conversation_Analytics::EVENT_CHAT_MESSAGE_RECEIVED,
                $this->session->session_id,
                ['message_type' => 'clarification_questions', 'question_count' => $questions_data['count']]
            );
            
            return [
                'message' => $questions_data['message'],
                'questions' => $questions_data['questions'],
                'state' => $this->session->conversation_state
            ];
            
        } catch (Exception $e) {
            error_log('[Conversation Manager] Failed to generate questions: ' . $e->getMessage());
            
            // Fallback to generic questions
            $fallback_message = "Thanks for sharing your workflow details! I'd like to understand a bit more:\n\n" .
                "1. How much time do you currently spend on this workflow each week?\n" .
                "2. What would be the biggest win for you if we could automate parts of this?\n" .
                "3. Are there any specific tools or platforms you must integrate with?";
            
            $message = new MGRNZ_Chat_Message([
                'session_id' => $this->session->session_id,
                'sender' => 'assistant',
                'content' => $fallback_message,
                'metadata' => ['type' => 'clarification_questions', 'fallback' => true]
            ]);
            
            $message_id = $message->save();
            $this->session->add_message($message_id);
            
            return [
                'message' => $fallback_message,
                'questions' => [
                    'How much time do you currently spend on this workflow each week?',
                    'What would be the biggest win for you if we could automate parts of this?',
                    'Are there any specific tools or platforms you must integrate with?'
                ],
                'state' => $this->session->conversation_state
            ];
        }
    }
    
    /**
     * Call AI service for questions
     * 
     * @param string $prompt Prompt for AI
     * @return string AI response
     */
    private function call_ai_for_questions($prompt) {
        // Use a simplified version of the AI service for chat
        $provider = getenv('MGRNZ_AI_PROVIDER') ?: get_option('mgrnz_ai_provider', 'openai');
        $api_key = getenv('MGRNZ_AI_API_KEY') ?: get_option('mgrnz_ai_api_key', '');
        $model = getenv('MGRNZ_AI_MODEL') ?: get_option('mgrnz_ai_model', 
            $provider === 'anthropic' ? 'claude-3-5-sonnet-20241022' : 'gpt-4o-mini');
        
        if ($provider === 'anthropic') {
            $url = 'https://api.anthropic.com/v1/messages';
            $body = json_encode([
                'model' => $model,
                'messages' => [['role' => 'user', 'content' => $prompt]],
                'max_tokens' => 500,
                'temperature' => 0.7
            ]);
            $args = [
                'method' => 'POST',
                'timeout' => 30,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-api-key' => $api_key,
                    'anthropic-version' => '2023-06-01'
                ],
                'body' => $body
            ];
        } else {
            $url = 'https://api.openai.com/v1/chat/completions';
            $body = json_encode([
                'model' => $model,
                'messages' => [['role' => 'user', 'content' => $prompt]],
                'max_tokens' => 500,
                'temperature' => 0.7
            ]);
            $args = [
                'method' => 'POST',
                'timeout' => 30,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $api_key
                ],
                'body' => $body
            ];
        }
        
        $response = wp_remote_post($url, $args);
        
        if (is_wp_error($response)) {
            throw new Exception($response->get_error_message());
        }
        
        $status_code = wp_remote_retrieve_response_code($response);
        if ($status_code !== 200) {
            throw new Exception('AI service returned status ' . $status_code);
        }
        
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        if ($provider === 'anthropic') {
            return $data['content'][0]['text'] ?? '';
        } else {
            return $data['choices'][0]['message']['content'] ?? '';
        }
    }
    
    /**
     * Process user response
     * 
     * @param string $message User message
     * @return array Response data with assistant message and state
     */
    public function process_user_response($message) {
        // Track user message sent
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_CHAT_MESSAGE_SENT,
            $this->session->session_id,
            ['message_length' => strlen($message), 'state' => $this->session->conversation_state]
        );
        
        // Save user message
        $user_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'user',
            'content' => sanitize_textarea_field($message)
        ]);
        
        $message_id = $user_message->save();
        $this->session->add_message($message_id);
        
        // Generate AI response based on current state
        $assistant_response = $this->generate_response($message);
        
        // Save assistant message
        $assistant_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $assistant_response['message']
        ]);
        
        $message_id = $assistant_message->save();
        $this->session->add_message($message_id);
        
        // Track assistant response
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_CHAT_MESSAGE_RECEIVED,
            $this->session->session_id,
            ['message_length' => strlen($assistant_response['message']), 'state' => $this->session->conversation_state]
        );
        
        // Check if we should transition states
        $next_action = $assistant_response['next_action'] ?? null;
        $transition_result = null;
        
        if ($next_action === 'transition_to_upsell') {
            $transition_result = $this->transition_state(MGRNZ_Conversation_Session::STATE_UPSELL);
        } elseif ($next_action === 'transition_to_blueprint') {
            $transition_result = $this->transition_state(MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION);
        }
        
        return [
            'assistant_response' => $assistant_response['message'],
            'conversation_state' => $this->session->conversation_state,
            'next_action' => $next_action,
            'transition' => $transition_result,
            'progress' => $this->get_progress_percentage()
        ];
    }
    
    /**
     * Generate AI response based on conversation context
     * 
     * @param string $user_message User's message
     * @return array Response with message and optional next action
     */
    private function generate_response($user_message) {
        $messages = $this->session->get_messages();
        $conversation_history = $this->build_conversation_history($messages);
        
        // Build context-aware prompt
        $prompt = $this->build_response_prompt($conversation_history, $user_message);
        
        try {
            $response = $this->call_ai_for_questions($prompt);
            
            // Check if we should transition states
            $next_action = $this->determine_next_action($response, $user_message);
            
            return [
                'message' => $response,
                'next_action' => $next_action
            ];
            
        } catch (Exception $e) {
            error_log('[Conversation Manager] Failed to generate response: ' . $e->getMessage());
            
            return [
                'message' => "I'm having a bit of trouble processing that. Could you rephrase or provide more details?",
                'next_action' => null
            ];
        }
    }
    
    /**
     * Build conversation history for context
     * 
     * @param array $messages Array of MGRNZ_Chat_Message objects
     * @return string Formatted conversation history
     */
    private function build_conversation_history($messages) {
        $history = '';
        foreach ($messages as $msg) {
            $sender = ucfirst($msg->sender);
            $history .= "{$sender}: {$msg->content}\n\n";
        }
        return $history;
    }
    
    /**
     * Build prompt for generating response
     * 
     * @param string $history Conversation history
     * @param string $user_message Latest user message
     * @return string Prompt for AI
     */
    private function build_response_prompt($history, $user_message) {
        $state = $this->session->conversation_state;
        $wizard_data = $this->session->wizard_data;
        
        $prompt = "You are {$this->session->assistant_name}, an AI workflow automation consultant. ";
        $prompt .= "You are having a conversation with a user about their workflow automation needs.\n\n";
        $prompt .= "Original submission:\n";
        $prompt .= "- Goal: " . ($wizard_data['goal'] ?? '') . "\n";
        $prompt .= "- Workflow: " . ($wizard_data['workflow_description'] ?? '') . "\n";
        $prompt .= "- Tools: " . ($wizard_data['tools'] ?? '') . "\n";
        $prompt .= "- Pain Points: " . ($wizard_data['pain_points'] ?? '') . "\n\n";
        $prompt .= "Conversation so far:\n{$history}\n";
        $prompt .= "Current state: {$state}\n\n";
        
        if ($state === MGRNZ_Conversation_Session::STATE_CLARIFICATION) {
            $prompt .= "Continue asking clarifying questions to understand their needs better. ";
            $prompt .= "After 2-3 exchanges, you can transition to presenting service options.\n\n";
        } elseif ($state === MGRNZ_Conversation_Session::STATE_UPSELL) {
            $prompt .= "Present service opportunities naturally: consultation booking, cost estimates, or formal quotes.\n\n";
        }
        
        $prompt .= "Respond to the user's latest message in a friendly, helpful way:";
        
        return $prompt;
    }
    
    /**
     * Determine next action based on conversation flow
     * 
     * @param string $response AI response
     * @param string $user_message User message
     * @return string|null Next action or null
     */
    private function determine_next_action($response, $user_message) {
        // Count messages in current state
        $messages = $this->session->get_messages();
        $state_message_count = 0;
        
        foreach ($messages as $msg) {
            if ($msg->sender === 'user' || $msg->sender === 'assistant') {
                $state_message_count++;
            }
        }
        
        // Transition logic based on state and message count
        if ($this->session->conversation_state === MGRNZ_Conversation_Session::STATE_CLARIFICATION) {
            if ($state_message_count >= 6) { // 3 exchanges (user + assistant)
                return 'transition_to_upsell';
            }
        }
        
        return null;
    }
    
    /**
     * Transition to next conversation state
     * 
     * @param string $target_state Target state to transition to
     * @return array Transition result with message and state
     */
    public function transition_state($target_state) {
        $current_state = $this->session->conversation_state;
        
        // Validate state transition
        if (!$this->is_valid_transition($current_state, $target_state)) {
            error_log("[Conversation Manager] Invalid state transition: {$current_state} -> {$target_state}");
            return [
                'success' => false,
                'error' => 'Invalid state transition'
            ];
        }
        
        // Update state
        $this->session->update_state($target_state);
        
        // Track state transition
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_STATE_TRANSITION,
            $this->session->session_id,
            ['from_state' => $current_state, 'new_state' => $target_state]
        );
        
        // Get transition message
        $message = $this->get_transition_message($target_state);
        
        // Save transition message
        if ($message) {
            $chat_message = new MGRNZ_Chat_Message([
                'session_id' => $this->session->session_id,
                'sender' => 'assistant',
                'content' => $message,
                'metadata' => ['type' => 'state_transition', 'new_state' => $target_state]
            ]);
            
            $message_id = $chat_message->save();
            $this->session->add_message($message_id);
        }
        
        // Trigger state-specific actions
        $this->execute_state_actions($target_state);
        
        return [
            'success' => true,
            'message' => $message,
            'state' => $target_state,
            'actions' => $this->get_state_actions($target_state)
        ];
    }
    
    /**
     * Check if state transition is valid
     * 
     * @param string $from_state Current state
     * @param string $to_state Target state
     * @return bool True if transition is valid
     */
    private function is_valid_transition($from_state, $to_state) {
        $valid_transitions = [
            MGRNZ_Conversation_Session::STATE_CLARIFICATION => [
                MGRNZ_Conversation_Session::STATE_UPSELL,
                MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION
            ],
            MGRNZ_Conversation_Session::STATE_UPSELL => [
                MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION
            ],
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION => [
                MGRNZ_Conversation_Session::STATE_BLUEPRINT_PRESENTATION
            ],
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_PRESENTATION => [
                MGRNZ_Conversation_Session::STATE_COMPLETE,
                MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION // Allow regeneration
            ],
            MGRNZ_Conversation_Session::STATE_COMPLETE => []
        ];
        
        return isset($valid_transitions[$from_state]) && 
               in_array($to_state, $valid_transitions[$from_state]);
    }
    
    /**
     * Get transition message for state
     * 
     * @param string $state Target state
     * @return string Transition message
     */
    private function get_transition_message($state) {
        $messages = [
            MGRNZ_Conversation_Session::STATE_UPSELL => 
                "Great! I have everything I need. While the analysis is running, let me share some ways I can help you further...",
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION => 
                "Perfect! Let me start working on your blueprint. This will take a moment...",
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_PRESENTATION => 
                "I'm pleased to present your workflow blueprint!",
            MGRNZ_Conversation_Session::STATE_COMPLETE => 
                "Thank you for using the AI Workflow Wizard! Feel free to reach out if you need any assistance."
        ];
        
        return $messages[$state] ?? '';
    }
    
    /**
     * Execute actions specific to a state
     * 
     * @param string $state State to execute actions for
     */
    private function execute_state_actions($state) {
        switch ($state) {
            case MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION:
                // Trigger blueprint generation in background
                $this->trigger_blueprint_generation();
                break;
                
            case MGRNZ_Conversation_Session::STATE_UPSELL:
                // Track upsell opportunity
                $this->session->set_metadata('upsell_presented_at', current_time('mysql'));
                $this->session->save();
                break;
                
            case MGRNZ_Conversation_Session::STATE_COMPLETE:
                // Mark completion time
                $this->session->set_metadata('completed_at', current_time('mysql'));
                $this->session->save();
                break;
        }
    }
    
    /**
     * Get available actions for a state
     * 
     * @param string $state State to get actions for
     * @return array Available actions
     */
    private function get_state_actions($state) {
        $actions = [
            MGRNZ_Conversation_Session::STATE_CLARIFICATION => [
                'continue_clarification',
                'skip_to_blueprint'
            ],
            MGRNZ_Conversation_Session::STATE_UPSELL => [
                'book_consultation',
                'request_estimate',
                'request_quote',
                'skip_to_blueprint'
            ],
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION => [
                'check_progress'
            ],
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_PRESENTATION => [
                'download_blueprint',
                'request_changes',
                'book_consultation'
            ],
            MGRNZ_Conversation_Session::STATE_COMPLETE => []
        ];
        
        return $actions[$state] ?? [];
    }
    
    /**
     * Trigger blueprint generation
     */
    private function trigger_blueprint_generation() {
        // This will be called asynchronously or via AJAX
        // For now, just log that it should be triggered
        error_log('[Conversation Manager] Blueprint generation triggered for session: ' . $this->session->session_id);
        
        // Store generation start time
        $this->session->set_metadata('blueprint_generation_started_at', current_time('mysql'));
        $this->session->save();
    }
    
    /**
     * Get current conversation state
     * 
     * @return string Current state
     */
    public function get_current_state() {
        return $this->session->conversation_state;
    }
    
    /**
     * Get conversation progress percentage
     * 
     * @return int Progress percentage (0-100)
     */
    public function get_progress_percentage() {
        $state_progress = [
            MGRNZ_Conversation_Session::STATE_CLARIFICATION => 20,
            MGRNZ_Conversation_Session::STATE_UPSELL => 40,
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_GENERATION => 70,
            MGRNZ_Conversation_Session::STATE_BLUEPRINT_PRESENTATION => 90,
            MGRNZ_Conversation_Session::STATE_COMPLETE => 100
        ];
        
        return $state_progress[$this->session->conversation_state] ?? 0;
    }
    
    /**
     * Handle timeout (user hasn't responded)
     * 
     * @return array Response data
     */
    public function handle_timeout() {
        $path = $this->conversation_paths['no_response'];
        
        // Create system message
        $message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $path['message'],
            'metadata' => ['type' => 'timeout_prompt']
        ]);
        
        $message_id = $message->save();
        $this->session->add_message($message_id);
        
        return [
            'message' => $path['message'],
            'action' => $path['action'],
            'state' => $this->session->conversation_state
        ];
    }
    
    /**
     * Get upsell prompt for specific type
     * 
     * @param string $type Upsell type (consultation, estimate, quote, additional_workflow)
     * @return string Upsell message
     */
    public function get_upsell_prompt($type) {
        $prompts = [
            'consultation' => "Would you like to schedule a free 30-minute consultation to discuss implementation? I can help you book a time that works for you.",
            'estimate' => "I can provide a rough cost estimate for this automation based on the complexity. Would that be helpful?",
            'quote' => "For a detailed quote with exact pricing, I can have our team prepare one within 24 hours. Interested?",
            'additional_workflow' => "Do you have other workflows you'd like to automate? I can help with those too!"
        ];
        
        return $prompts[$type] ?? '';
    }
    
    /**
     * Present consultation booking offer
     * 
     * @return array Message and action data
     */
    public function present_consultation_offer() {
        $message = "While I'm analyzing your workflow, would you like to schedule a free 30-minute consultation with our automation experts? They can discuss implementation details and answer any questions you have.";
        
        // Create assistant message with action metadata
        $chat_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $message,
            'metadata' => [
                'type' => 'upsell_offer',
                'upsell_type' => 'consultation',
                'action' => 'book_consultation'
            ]
        ]);
        
        $message_id = $chat_message->save();
        $this->session->add_message($message_id);
        
        // Track that consultation was offered
        $this->session->set_metadata('consultation_offered_at', current_time('mysql'));
        $this->session->save();
        
        // Track analytics event
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_CONSULTATION_OFFERED,
            $this->session->session_id
        );
        
        return [
            'message' => $message,
            'action' => 'book_consultation',
            'action_data' => [
                'button_text' => 'Book Consultation',
                'calendly_url' => get_option('mgrnz_calendly_url', 'https://calendly.com/your-link')
            ]
        ];
    }
    
    /**
     * Track consultation booking click
     * 
     * @return bool Success status
     */
    public function track_consultation_click() {
        $this->session->set_metadata('consultation_clicked_at', current_time('mysql'));
        $this->session->set_metadata('consultation_clicked', true);
        $this->session->save();
        
        // Track analytics event
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_CONSULTATION_CLICKED,
            $this->session->session_id
        );
        
        // Log the conversion
        error_log('[Conversation Manager] Consultation booking clicked for session: ' . $this->session->session_id);
        
        return true;
    }
    
    /**
     * Continue conversation after consultation booking
     * 
     * @return array Response data
     */
    public function continue_after_consultation() {
        $message = "Great! I'll continue working on your blueprint while you schedule your consultation. Feel free to ask me any questions in the meantime.";
        
        $chat_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $message
        ]);
        
        $message_id = $chat_message->save();
        $this->session->add_message($message_id);
        
        return [
            'message' => $message,
            'state' => $this->session->conversation_state
        ];
    }
    
    /**
     * Present cost estimate offer
     * 
     * @return array Message and action data
     */
    public function present_estimate_offer() {
        $message = "I can provide you with a rough cost estimate for this automation based on the complexity. This will give you an idea of the investment required. Would that be helpful?";
        
        // Create assistant message with action metadata
        $chat_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $message,
            'metadata' => [
                'type' => 'upsell_offer',
                'upsell_type' => 'estimate',
                'action' => 'generate_estimate'
            ]
        ]);
        
        $message_id = $chat_message->save();
        $this->session->add_message($message_id);
        
        // Track that estimate was offered
        $this->session->set_metadata('estimate_offered_at', current_time('mysql'));
        $this->session->save();
        
        // Track analytics event
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_ESTIMATE_OFFERED,
            $this->session->session_id
        );
        
        return [
            'message' => $message,
            'action' => 'generate_estimate',
            'action_data' => [
                'button_text' => 'Get Cost Estimate'
            ]
        ];
    }
    
    /**
     * Generate and present cost estimate
     * 
     * @return array Estimate data and message
     */
    public function generate_and_present_estimate() {
        try {
            // Generate estimate using AI service
            $estimate = $this->ai_service->generate_cost_estimate($this->session->wizard_data);
            
            if (is_wp_error($estimate)) {
                throw new Exception($estimate->get_error_message());
            }
            
            // Format estimate message
            $message = "Based on your workflow requirements, here's an indicative cost estimate:\n\n";
            $message .= "💰 **Setup Cost:** {$estimate['setup_cost']}\n";
            $message .= "📅 **Monthly Cost:** {$estimate['monthly_cost']}\n";
            $message .= "⏱️ **Timeline:** {$estimate['timeline']}\n";
            $message .= "📊 **Complexity:** {$estimate['complexity']}\n\n";
            $message .= "**Explanation:** {$estimate['explanation']}\n\n";
            $message .= "_{$estimate['disclaimer']}_\n\n";
            $message .= "Would you like a detailed formal quote with exact pricing?";
            
            // Save estimate message
            $chat_message = new MGRNZ_Chat_Message([
                'session_id' => $this->session->session_id,
                'sender' => 'assistant',
                'content' => $message,
                'metadata' => [
                    'type' => 'estimate_presentation',
                    'estimate' => $estimate
                ]
            ]);
            
            $message_id = $chat_message->save();
            $this->session->add_message($message_id);
            
            // Track estimate generation
            $this->session->set_metadata('estimate_generated_at', current_time('mysql'));
            $this->session->set_metadata('estimate_data', $estimate);
            $this->session->save();
            
            // Track analytics event
            MGRNZ_Conversation_Analytics::track_event(
                MGRNZ_Conversation_Analytics::EVENT_ESTIMATE_GENERATED,
                $this->session->session_id,
                ['complexity' => $estimate['complexity'] ?? 'unknown']
            );
            
            return [
                'message' => $message,
                'estimate' => $estimate,
                'next_action' => 'offer_quote'
            ];
            
        } catch (Exception $e) {
            error_log('[Conversation Manager] Failed to generate estimate: ' . $e->getMessage());
            
            // Fallback message
            $fallback_message = "I'm having trouble generating the estimate right now. Would you like to request a formal quote instead? Our team can provide detailed pricing within 24 hours.";
            
            $chat_message = new MGRNZ_Chat_Message([
                'session_id' => $this->session->session_id,
                'sender' => 'assistant',
                'content' => $fallback_message
            ]);
            
            $message_id = $chat_message->save();
            $this->session->add_message($message_id);
            
            return [
                'message' => $fallback_message,
                'estimate' => null,
                'next_action' => 'offer_quote',
                'error' => true
            ];
        }
    }
    
    /**
     * Present formal quote offer
     * 
     * @return array Message and action data
     */
    public function present_quote_offer() {
        $message = "For a detailed formal quote with exact pricing and a comprehensive project plan, our team can prepare one for you within 24 hours. We'll need a few details to get started.";
        
        // Create assistant message with action metadata
        $chat_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $message,
            'metadata' => [
                'type' => 'upsell_offer',
                'upsell_type' => 'quote',
                'action' => 'request_quote'
            ]
        ]);
        
        $message_id = $chat_message->save();
        $this->session->add_message($message_id);
        
        // Track that quote was offered
        $this->session->set_metadata('quote_offered_at', current_time('mysql'));
        $this->session->save();
        
        return [
            'message' => $message,
            'action' => 'request_quote',
            'action_data' => [
                'button_text' => 'Request Formal Quote'
            ]
        ];
    }
    
    /**
     * Confirm quote request submission
     * 
     * @param int $quote_id Quote post ID
     * @return array Confirmation message
     */
    public function confirm_quote_request($quote_id) {
        $message = "Perfect! Your quote request has been submitted. Our team will review your requirements and send you a detailed quote within 24 hours. You'll receive it at the email address you provided.\n\nIn the meantime, I'll continue working on your blueprint!";
        
        // Save confirmation message
        $chat_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $message,
            'metadata' => [
                'type' => 'quote_confirmation',
                'quote_id' => $quote_id
            ]
        ]);
        
        $message_id = $chat_message->save();
        $this->session->add_message($message_id);
        
        // Track quote request
        $this->session->set_metadata('quote_requested_at', current_time('mysql'));
        $this->session->set_metadata('quote_id', $quote_id);
        $this->session->save();
        
        return [
            'message' => $message,
            'quote_id' => $quote_id
        ];
    }
    
    /**
     * Present additional workflow offer
     * 
     * @return array Message and action data
     */
    public function present_additional_workflow_offer() {
        $message = "Do you have other workflows you'd like to automate? I can help you create blueprints for additional workflows too! Each workflow gets its own personalized analysis.";
        
        // Create assistant message with action metadata
        $chat_message = new MGRNZ_Chat_Message([
            'session_id' => $this->session->session_id,
            'sender' => 'assistant',
            'content' => $message,
            'metadata' => [
                'type' => 'upsell_offer',
                'upsell_type' => 'additional_workflow',
                'action' => 'start_new_workflow'
            ]
        ]);
        
        $message_id = $chat_message->save();
        $this->session->add_message($message_id);
        
        // Track that additional workflow was offered
        $this->session->set_metadata('additional_workflow_offered_at', current_time('mysql'));
        $this->session->save();
        
        return [
            'message' => $message,
            'action' => 'start_new_workflow',
            'action_data' => [
                'button_text' => 'Create Another Workflow',
                'wizard_url' => home_url('/start-using-ai/')
            ]
        ];
    }
    
    /**
     * Track additional workflow click
     * 
     * @return bool Success status
     */
    public function track_additional_workflow_click() {
        $this->session->set_metadata('additional_workflow_clicked_at', current_time('mysql'));
        $this->session->set_metadata('additional_workflow_clicked', true);
        $this->session->save();
        
        // Log the conversion
        error_log('[Conversation Manager] Additional workflow clicked for session: ' . $this->session->session_id);
        
        return true;
    }
    
    /**
     * Preserve current session for later reference
     * 
     * @return bool Success status
     */
    public function preserve_session() {
        $this->session->set_metadata('preserved_at', current_time('mysql'));
        $this->session->set_metadata('preserved', true);
        $this->session->save();
        
        return true;
    }
    
    /**
     * Check if conversation is complete
     * 
     * @return bool True if complete
     */
    public function is_conversation_complete() {
        return $this->session->conversation_state === MGRNZ_Conversation_Session::STATE_COMPLETE;
    }
    
    /**
     * Get blueprint presentation messages
     * 
     * @return array Presentation sequence
     */
    public function get_blueprint_presentation() {
        return [
            'messages' => [
                "Agent reports Mission Complete...",
                "Assistant Finalising Blueprint...",
                "Assistant completing blueprint...",
                "I'm pleased to present your Blueprint..."
            ],
            'delay' => 2000 // 2 seconds between messages
        ];
    }
    
    /**
     * Create database tables for conversation management
     */
    public static function create_tables() {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        
        // Conversation sessions table
        $sessions_table = $wpdb->prefix . 'mgrnz_conversation_sessions';
        $sessions_sql = "CREATE TABLE IF NOT EXISTS $sessions_table (
            session_id varchar(100) NOT NULL,
            user_id bigint(20) NOT NULL DEFAULT 0,
            assistant_name varchar(50) NOT NULL,
            wizard_data longtext,
            message_history longtext,
            conversation_state varchar(50) NOT NULL,
            created_at datetime NOT NULL,
            updated_at datetime NOT NULL,
            blueprint_id bigint(20),
            metadata longtext,
            PRIMARY KEY  (session_id),
            KEY user_id (user_id),
            KEY conversation_state (conversation_state),
            KEY updated_at (updated_at)
        ) $charset_collate;";
        
        // Chat messages table
        $messages_table = $wpdb->prefix . 'mgrnz_chat_messages';
        $messages_sql = "CREATE TABLE IF NOT EXISTS $messages_table (
            message_id bigint(20) NOT NULL AUTO_INCREMENT,
            session_id varchar(100) NOT NULL,
            sender varchar(20) NOT NULL,
            content longtext NOT NULL,
            timestamp datetime NOT NULL,
            metadata longtext,
            PRIMARY KEY  (message_id),
            KEY session_id (session_id),
            KEY sender (sender),
            KEY timestamp (timestamp)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sessions_sql);
        dbDelta($messages_sql);
    }
}
