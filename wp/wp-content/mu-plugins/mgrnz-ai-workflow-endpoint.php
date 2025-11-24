<?php
/**
 * Plugin Name: MGRNZ AI Workflow Endpoint
 * Description: Receives wizard submissions from /start-using-ai and logs/returns JSON.
 * Author: MGRNZ
 * Version: 1.0.0
 */

// Load required classes
require_once __DIR__ . '/includes/class-error-logger.php';
require_once __DIR__ . '/includes/class-submission-cpt.php';
require_once __DIR__ . '/includes/class-ai-service.php';
require_once __DIR__ . '/includes/class-email-service.php';
require_once __DIR__ . '/includes/class-ai-settings.php';
require_once __DIR__ . '/includes/class-blueprint-cache.php';
require_once __DIR__ . '/includes/class-conversation-manager.php';
require_once __DIR__ . '/includes/class-pdf-generator.php';
require_once __DIR__ . '/includes/class-conversation-analytics.php';
require_once __DIR__ . '/includes/class-analytics-dashboard.php';

// Initialize settings page
new MGRNZ_AI_Settings();

/**
 * Register REST API endpoints
 */
add_action('rest_api_init', function () {
    // Main workflow submission endpoint (public access with rate limiting)
    register_rest_route('mgrnz/v1', '/ai-workflow', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint, protected by rate limiting
        'callback' => 'mgrnz_handle_ai_workflow_submission',
    ]);
    
    // Newsletter subscription endpoint
    register_rest_route('mgrnz/v1', '/subscribe', [
        'methods'  => 'POST',
        'permission_callback' => 'mgrnz_verify_nonce',
        'callback' => 'mgrnz_handle_subscription',
    ]);
    
    // Chat message endpoint
    register_rest_route('mgrnz/v1', '/chat-message', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_chat_message',
    ]);
    
    // Generate estimate endpoint
    register_rest_route('mgrnz/v1', '/generate-estimate', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_generate_estimate',
    ]);
    
    // Request quote endpoint
    register_rest_route('mgrnz/v1', '/request-quote', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_request_quote',
    ]);
    
    // Blueprint subscription endpoint
    register_rest_route('mgrnz/v1', '/subscribe-blueprint', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_subscribe_blueprint',
    ]);
    
    // Download blueprint endpoint
    register_rest_route('mgrnz/v1', '/download-blueprint', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_download_blueprint',
    ]);
    
    // State transition endpoint
    register_rest_route('mgrnz/v1', '/transition-state', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_state_transition',
    ]);
    
    // Upsell action endpoints
    register_rest_route('mgrnz/v1', '/track-consultation', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_track_consultation',
    ]);
    
    register_rest_route('mgrnz/v1', '/track-additional-workflow', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_track_additional_workflow',
    ]);
    
    // GDPR data deletion endpoint
    register_rest_route('mgrnz/v1', '/delete-session-data', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with validation
        'callback' => 'mgrnz_handle_delete_session_data',
    ]);
    
    // Generic event tracking endpoint
    register_rest_route('mgrnz/v1', '/track-event', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_track_event',
    ]);
    
    // Wizard completion flow endpoints
    register_rest_route('mgrnz/v1', '/wizard-subscribe', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_wizard_subscribe',
    ]);
    
    register_rest_route('mgrnz/v1', '/wizard-request-quote', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // Public endpoint with rate limiting
        'callback' => 'mgrnz_handle_wizard_request_quote',
    ]);
    
    // Cache management endpoints (admin only)
    register_rest_route('mgrnz/v1', '/ai-workflow/cache/stats', [
        'methods'  => 'GET',
        'permission_callback' => function() {
            return current_user_can('manage_options');
        },
        'callback' => 'mgrnz_get_cache_stats',
    ]);
    
    register_rest_route('mgrnz/v1', '/ai-workflow/cache/clear', [
        'methods'  => 'POST',
        'permission_callback' => function() {
            return current_user_can('manage_options');
        },
        'callback' => 'mgrnz_clear_cache',
    ]);
});

/**
 * Verify nonce for REST API requests
 *
 * @param WP_REST_Request $request
 * @return bool True if nonce is valid
 */
function mgrnz_verify_nonce($request) {
    // Get nonce from header or parameter
    $nonce = $request->get_header('X-WP-Nonce');
    
    if (empty($nonce)) {
        $nonce = $request->get_param('_wpnonce');
    }
    
    // Verify nonce
    if (empty($nonce) || !wp_verify_nonce($nonce, 'wp_rest')) {
        return new WP_Error(
            'invalid_nonce',
            'Security verification failed. Please refresh the page and try again.',
            ['status' => 403]
        );
    }
    
    return true;
}

/**
 * Handle AI workflow submission
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_ai_workflow_submission($request) {
    // Ensure database tables exist (create if missing)
    MGRNZ_Error_Logger::create_table();
    MGRNZ_Conversation_Manager::create_tables();
    MGRNZ_Conversation_Analytics::create_table();
    
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    $start_time = microtime(true);
    
    // Increase execution time limit for AI generation
    if (function_exists('set_time_limit')) {
        set_time_limit(120);
    }
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP for rate limiting
    $ip_address = mgrnz_get_client_ip();
    
    // Check rate limiting
    if (!mgrnz_check_rate_limit($ip_address)) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_RATE_LIMIT,
            'Rate limit exceeded',
            ['ip_address' => $ip_address]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Too many requests. Please try again in a few minutes.',
            'code' => 'rate_limit_exceeded'
        ], 429);
    }
    
    // Get and validate submission data
    $data = $request->get_json_params();
    $validated_data = mgrnz_validate_submission_data($data);
    
    if (is_wp_error($validated_data)) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Validation failed: ' . $validated_data->get_error_message(),
            ['ip_address' => $ip_address, 'error_code' => $validated_data->get_error_code()]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => $validated_data->get_error_message(),
            'code' => $validated_data->get_error_code()
        ], 400);
    }
    
    // Add metadata
    $validated_data['ip_address'] = $ip_address;
    $validated_data['user_agent'] = isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field($_SERVER['HTTP_USER_AGENT']) : '';
    $validated_data['submission_date'] = current_time('mysql');
    
    // Initialize cache service
    $cache_service = new MGRNZ_Blueprint_Cache();
    
    // Check cache first
    $blueprint = $cache_service->get_cached_blueprint($validated_data);
    $from_cache = false;
    
    if ($blueprint !== false) {
        // Blueprint found in cache
        $from_cache = true;
    } else {
        // Validate API key is configured before attempting to generate blueprint
        if (!mgrnz_validate_ai_api_key()) {
            $logger->log_error(
                MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
                'AI API key not configured',
                ['ip_address' => $ip_address]
            );
            
            return new WP_REST_Response([
                'status' => 'error',
                'message' => 'AI service is not configured. Please contact support.',
                'code' => 'ai_not_configured'
            ], 500);
        }
        
        // Generate blueprint using AI service
        try {
            $ai_service = new MGRNZ_AI_Service();
            $blueprint = $ai_service->generate_blueprint($validated_data);
            
            if (is_wp_error($blueprint)) {
                $logger->log_error(
                    MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
                    'AI service error: ' . $blueprint->get_error_message(),
                    [
                        'ip_address' => $ip_address,
                        'error_code' => $blueprint->get_error_code(),
                        'email' => $validated_data['email'] ?? 'none'
                    ]
                );
                
                // Return fallback response with manual review offer
                return new WP_REST_Response([
                    'status' => 'error',
                    'message' => 'We\'re experiencing technical difficulties generating your blueprint. Our team has been notified and will manually review your request. We\'ll email you the blueprint within 24 hours.',
                    'code' => 'ai_service_error',
                    'fallback' => true,
                    'manual_review' => true
                ], 500);
            }
            
            // Cache the newly generated blueprint
            $cache_service->cache_blueprint($validated_data, $blueprint);
            
        } catch (Exception $e) {
            $logger->log_error(
                MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
                'AI service exception: ' . $e->getMessage(),
                [
                    'ip_address' => $ip_address,
                    'exception_trace' => $e->getTraceAsString(),
                    'email' => $validated_data['email'] ?? 'none',
                    'exception_file' => $e->getFile(),
                    'exception_line' => $e->getLine()
                ]
            );
            
            // Log to WordPress error log
            error_log(sprintf(
                '[AI Workflow Blueprint Error] IP: %s | Email: %s | Error: %s | File: %s:%d',
                $ip_address,
                $validated_data['email'] ?? 'none',
                $e->getMessage(),
                $e->getFile(),
                $e->getLine()
            ));
            
            // Return fallback response with manual review offer
            return new WP_REST_Response([
                'status' => 'error',
                'message' => 'We\'re experiencing technical difficulties generating your blueprint. Our team has been notified and will manually review your request. We\'ll email you the blueprint within 24 hours.',
                'code' => 'ai_service_error',
                'fallback' => true,
                'manual_review' => true
            ], 500);
        }
    }
    
    // Create conversation session for chat interface
    try {
        $conversation_manager = new MGRNZ_Conversation_Manager(null, $validated_data);
        $session_id = $conversation_manager->get_session_id();
        $assistant_name = $conversation_manager->get_assistant_name();
        
        // Track wizard completion
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_WIZARD_COMPLETED,
            $session_id,
            [
                'has_email' => !empty($validated_data['email']),
                'from_cache' => $from_cache
            ]
        );
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Failed to create conversation session: ' . $e->getMessage(),
            ['ip_address' => $ip_address]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to create assistant session. Please try again.',
            'code' => 'session_error'
        ], 500);
    }
    
    // Save submission to database
    $submission_id = mgrnz_save_submission($validated_data, $blueprint);
    
    if (is_wp_error($submission_id)) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Failed to save submission: ' . $submission_id->get_error_message(),
            [
                'ip_address' => $ip_address,
                'email' => $validated_data['email'] ?? 'none'
            ]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to save submission. Please try again.',
            'code' => 'save_error'
        ], 500);
    }
    
    // Schedule async email if provided
    $email_scheduled = false;
    if (!empty($validated_data['email'])) {
        try {
            $email_service = new MGRNZ_Email_Service();
            $email_scheduled = $email_service->schedule_blueprint_email(
                $validated_data['email'], 
                $blueprint, 
                $submission_id
            );
            
            if (!$email_scheduled) {
                $logger->log_warning(
                    MGRNZ_Error_Logger::CATEGORY_EMAIL,
                    'Email scheduling failed',
                    [
                        'submission_id' => $submission_id,
                        'email' => $validated_data['email']
                    ],
                    $submission_id
                );
            }
        } catch (Exception $e) {
            $logger->log_warning(
                MGRNZ_Error_Logger::CATEGORY_EMAIL,
                'Email scheduling exception: ' . $e->getMessage(),
                [
                    'submission_id' => $submission_id,
                    'email' => $validated_data['email']
                ],
                $submission_id
            );
        }
    }
    
    // Calculate processing time
    $processing_time = microtime(true) - $start_time;
    
    // Log success with metrics
    $logger->log_success(
        MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
        'Blueprint generated successfully',
        [
            'email' => $validated_data['email'] ?? 'none',
            'email_scheduled' => $email_scheduled,
            'from_cache' => $from_cache,
            'processing_time' => round($processing_time, 2),
            'tokens_used' => $blueprint['tokens_used'] ?? 0,
            'ai_model' => $blueprint['ai_model'] ?? 'unknown'
        ],
        $submission_id
    );
    
    // Convert markdown to HTML for frontend display
    try {
        $email_service = new MGRNZ_Email_Service();
        $blueprint_html = $email_service->convert_markdown_to_html($blueprint['content']);
    } catch (Exception $e) {
        // Fallback to raw content if conversion fails
        $blueprint_html = '<pre>' . esc_html($blueprint['content']) . '</pre>';
    }
    
    // Return success response with session data for chat interface
    return new WP_REST_Response([
        'success' => true,
        'status' => 'success',
        'submission_id' => $submission_id,
        'session_id' => $session_id,
        'assistant_name' => $assistant_name,
        'blueprint' => $blueprint_html,
        'blueprint_content' => $blueprint['content'] ?? '',
        'diagram' => $blueprint['diagram'] ?? null,
        'email_scheduled' => $email_scheduled,
        'from_cache' => $from_cache
    ], 200);
}

/**
 * Validate and sanitize submission data
 *
 * @param array $data Raw submission data
 * @return array|WP_Error Validated data or error
 */
function mgrnz_validate_submission_data($data) {
    if (empty($data) || !is_array($data)) {
        return new WP_Error('invalid_data', 'Invalid submission data');
    }
    
    // Validate required fields (accept both 'workflow' and 'workflow_description')
    $required_fields = ['goal', 'tools', 'pain_points'];
    foreach ($required_fields as $field) {
        if (empty($data[$field]) || !is_string($data[$field])) {
            return new WP_Error('validation_failed', sprintf('Please fill in all required fields: %s', $field));
        }
    }
    
    // Check workflow field (accept either name)
    if (empty($data['workflow']) && empty($data['workflow_description'])) {
        return new WP_Error('validation_failed', 'Please fill in all required fields: workflow');
    }
    
    // Sanitize and validate field lengths
    $validated = [];
    
    // Goal (max 500 chars)
    $validated['goal'] = sanitize_textarea_field($data['goal']);
    if (strlen($validated['goal']) > 500) {
        return new WP_Error('validation_failed', 'Goal must be 500 characters or less');
    }
    if (strlen($validated['goal']) < 10) {
        return new WP_Error('validation_failed', 'Goal must be at least 10 characters');
    }
    
    // Workflow description (max 2000 chars) - accept both field names
    $workflow_value = !empty($data['workflow']) ? $data['workflow'] : $data['workflow_description'];
    $validated['workflow_description'] = sanitize_textarea_field($workflow_value);
    if (strlen($validated['workflow_description']) > 2000) {
        return new WP_Error('validation_failed', 'Workflow description must be 2000 characters or less');
    }
    if (strlen($validated['workflow_description']) < 20) {
        return new WP_Error('validation_failed', 'Workflow description must be at least 20 characters');
    }
    
    // Tools (max 500 chars)
    $validated['tools'] = sanitize_text_field($data['tools']);
    if (strlen($validated['tools']) > 500) {
        return new WP_Error('validation_failed', 'Tools must be 500 characters or less');
    }
    if (strlen($validated['tools']) < 3) {
        return new WP_Error('validation_failed', 'Tools must be at least 3 characters');
    }
    
    // Pain points (max 1000 chars)
    $validated['pain_points'] = sanitize_textarea_field($data['pain_points']);
    if (strlen($validated['pain_points']) > 1000) {
        return new WP_Error('validation_failed', 'Pain points must be 1000 characters or less');
    }
    if (strlen($validated['pain_points']) < 10) {
        return new WP_Error('validation_failed', 'Pain points must be at least 10 characters');
    }
    
    // Email (optional but must be valid if provided)
    if (!empty($data['email'])) {
        $validated['email'] = sanitize_email($data['email']);
        if (!is_email($validated['email'])) {
            return new WP_Error('validation_failed', 'Please provide a valid email address');
        }
    } else {
        $validated['email'] = '';
    }
    
    return $validated;
}

/**
 * Save submission to database as custom post
 *
 * @param array $data Validated submission data
 * @param array $blueprint Generated blueprint
 * @return int|WP_Error Post ID or error
 */
function mgrnz_save_submission($data, $blueprint) {
    // Create post title from goal (truncated)
    $post_title = substr($data['goal'], 0, 100);
    if (strlen($data['goal']) > 100) {
        $post_title .= '...';
    }
    
    // Create the post
    $post_id = wp_insert_post([
        'post_type' => 'ai_workflow_sub',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'post_content' => $data['workflow_description'],
    ]);
    
    if (is_wp_error($post_id)) {
        return $post_id;
    }
    
    // Save all metadata
    update_post_meta($post_id, '_mgrnz_goal', $data['goal']);
    update_post_meta($post_id, '_mgrnz_workflow_description', $data['workflow_description']);
    update_post_meta($post_id, '_mgrnz_tools', $data['tools']);
    update_post_meta($post_id, '_mgrnz_pain_points', $data['pain_points']);
    update_post_meta($post_id, '_mgrnz_email', $data['email']);
    update_post_meta($post_id, '_mgrnz_blueprint_summary', $blueprint['summary'] ?? '');
    update_post_meta($post_id, '_mgrnz_blueprint_content', $blueprint['content'] ?? '');
    update_post_meta($post_id, '_mgrnz_submission_date', $data['submission_date']);
    update_post_meta($post_id, '_mgrnz_ip_address', $data['ip_address']);
    update_post_meta($post_id, '_mgrnz_user_agent', $data['user_agent']);
    update_post_meta($post_id, '_mgrnz_email_sent', false);
    
    // Store AI metadata if available
    if (isset($blueprint['ai_model'])) {
        update_post_meta($post_id, '_mgrnz_ai_model', $blueprint['ai_model']);
    }
    if (isset($blueprint['tokens_used'])) {
        update_post_meta($post_id, '_mgrnz_tokens_used', $blueprint['tokens_used']);
    }
    if (isset($blueprint['generated_at'])) {
        update_post_meta($post_id, '_mgrnz_generated_at', $blueprint['generated_at']);
    }
    
    // Store diagram data if available
    if (isset($blueprint['diagram'])) {
        update_post_meta($post_id, '_mgrnz_diagram_data', json_encode($blueprint['diagram']));
    }
    
    return $post_id;
}

/**
 * Check rate limiting for IP address
 *
 * @param string $ip_address Client IP
 * @return bool True if allowed, false if rate limited
 */
function mgrnz_check_rate_limit($ip_address) {
    $transient_key = 'ai_workflow_' . md5($ip_address);
    $submission_count = get_transient($transient_key);
    
    if ($submission_count === false) {
        // First submission in this hour
        set_transient($transient_key, 1, HOUR_IN_SECONDS);
        return true;
    }
    
    if ($submission_count >= 50) {
        // Rate limit exceeded (increased for development)
        return false;
    }
    
    // Increment counter
    set_transient($transient_key, $submission_count + 1, HOUR_IN_SECONDS);
    return true;
}

/**
 * Get client IP address
 *
 * @return string Client IP address
 */
function mgrnz_get_client_ip() {
    $ip_keys = [
        'HTTP_CF_CONNECTING_IP', // Cloudflare
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_REAL_IP',
        'REMOTE_ADDR'
    ];
    
    foreach ($ip_keys as $key) {
        if (isset($_SERVER[$key]) && !empty($_SERVER[$key])) {
            $ip = sanitize_text_field($_SERVER[$key]);
            // Handle comma-separated IPs (X-Forwarded-For)
            if (strpos($ip, ',') !== false) {
                $ip = trim(explode(',', $ip)[0]);
            }
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    
    return '0.0.0.0';
}

/**
 * Add CORS headers to restrict endpoint access
 *
 * @return void
 */
function mgrnz_add_cors_headers() {
    // Get the site URL
    $site_url = get_site_url();
    $origin = isset($_SERVER['HTTP_ORIGIN']) ? esc_url_raw($_SERVER['HTTP_ORIGIN']) : '';
    
    // Only allow requests from the same origin
    if ($origin === $site_url || empty($origin)) {
        header('Access-Control-Allow-Origin: ' . $site_url);
        header('Access-Control-Allow-Methods: POST');
        header('Access-Control-Allow-Headers: Content-Type, X-WP-Nonce');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 3600');
    }
    
    // Add security headers
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
}

/**
 * Validate that AI API key is configured
 *
 * @return bool True if API key is configured
 */
function mgrnz_validate_ai_api_key() {
    // Check environment variable first
    $api_key = getenv('MGRNZ_AI_API_KEY');
    
    // Fall back to WordPress option
    if (empty($api_key)) {
        $api_key = get_option('mgrnz_ai_api_key', '');
    }
    
    // Validate key is not empty and has minimum length
    if (empty($api_key) || strlen($api_key) < 20) {
        return false;
    }
    
    // Basic format validation based on provider
    $provider = getenv('MGRNZ_AI_PROVIDER') ?: get_option('mgrnz_ai_provider', 'openai');
    
    if ($provider === 'openai') {
        // OpenAI keys start with 'sk-'
        if (strpos($api_key, 'sk-') !== 0) {
            return false;
        }
    } elseif ($provider === 'anthropic') {
        // Anthropic keys start with 'sk-ant-'
        if (strpos($api_key, 'sk-ant-') !== 0) {
            return false;
        }
    }
    
    return true;
}

/**
 * Get cache statistics (admin only)
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_get_cache_stats($request) {
    $cache_service = new MGRNZ_Blueprint_Cache();
    $stats = $cache_service->get_cache_stats();
    
    return new WP_REST_Response([
        'status' => 'success',
        'stats' => $stats
    ], 200);
}

/**
 * Clear all cached blueprints (admin only)
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_clear_cache($request) {
    $cache_service = new MGRNZ_Blueprint_Cache();
    $cleared = $cache_service->clear_all_cache();
    
    return new WP_REST_Response([
        'status' => 'success',
        'message' => sprintf('Cleared %d cache entries', $cleared),
        'cleared_count' => $cleared
    ], 200);
}

/**
 * Handle newsletter subscription requests
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_subscription($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['email']) || !is_email($data['email'])) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Invalid email for subscription',
            ['email' => $data['email'] ?? 'empty']
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid email address',
            'code' => 'invalid_email'
        ], 400);
    }
    
    $email = sanitize_email($data['email']);
    $submission_id = isset($data['submission_id']) ? intval($data['submission_id']) : null;
    $source = isset($data['source']) ? sanitize_text_field($data['source']) : 'unknown';
    
    // Get MailerLite API key from settings
    $mailerlite_api_key = get_option('mgrnz_mailerlite_api_key', '');
    $mailerlite_group_id = get_option('mgrnz_mailerlite_group_id', '');
    
    if (empty($mailerlite_api_key)) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_EMAIL,
            'MailerLite not configured',
            [
                'email' => $email,
                'source' => $source,
                'submission_id' => $submission_id
            ],
            $submission_id
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Newsletter service is not configured. Please contact support.',
            'code' => 'service_not_configured'
        ], 500);
    }
    
    // Subscribe to MailerLite
    $result = mgrnz_subscribe_to_mailerlite($email, $mailerlite_api_key, $mailerlite_group_id, [
        'submission_id' => $submission_id,
        'source' => $source
    ]);
    
    if (is_wp_error($result)) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_EMAIL,
            'Subscription failed: ' . $result->get_error_message(),
            [
                'email' => $email,
                'source' => $source
            ],
            $submission_id
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to subscribe. Please try again later.',
            'code' => 'subscription_failed'
        ], 500);
    }
    
    // Log successful subscription
    $logger->log_success(
        MGRNZ_Error_Logger::CATEGORY_EMAIL,
        'Newsletter subscription successful',
        [
            'email' => $email,
            'source' => $source,
            'submission_id' => $submission_id
        ],
        $submission_id
    );
    
    return new WP_REST_Response([
        'status' => 'success',
        'message' => 'Successfully subscribed to newsletter',
        'email' => $email
    ], 200);
}

/**
 * Subscribe email to MailerLite
 *
 * @param string $email Email address
 * @param string $api_key MailerLite API key
 * @param string $group_id MailerLite group ID (optional)
 * @param array $fields Additional fields
 * @return bool|WP_Error True on success, WP_Error on failure
 */
function mgrnz_subscribe_to_mailerlite($email, $api_key, $group_id = '', $fields = []) {
    // MailerLite API endpoint
    $api_url = 'https://connect.mailerlite.com/api/subscribers';
    
    // Prepare subscriber data
    $subscriber_data = [
        'email' => $email,
        'fields' => []
    ];
    
    // Add custom fields if provided
    if (!empty($fields['submission_id'])) {
        $subscriber_data['fields']['submission_id'] = (string) $fields['submission_id'];
    }
    
    if (!empty($fields['source'])) {
        $subscriber_data['fields']['source'] = $fields['source'];
    }
    
    // Add to group if specified
    if (!empty($group_id)) {
        $subscriber_data['groups'] = [$group_id];
    }
    
    // Make API request
    $response = wp_remote_post($api_url, [
        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $api_key,
            'Accept' => 'application/json'
        ],
        'body' => json_encode($subscriber_data),
        'timeout' => 15
    ]);
    
    // Check for errors
    if (is_wp_error($response)) {
        return new WP_Error('api_error', 'Failed to connect to MailerLite: ' . $response->get_error_message());
    }
    
    $response_code = wp_remote_retrieve_response_code($response);
    $response_body = wp_remote_retrieve_body($response);
    
    // MailerLite returns 200 for success, 201 for created
    if ($response_code === 200 || $response_code === 201) {
        return true;
    }
    
    // Handle specific error cases
    if ($response_code === 422) {
        // Validation error - subscriber might already exist
        $error_data = json_decode($response_body, true);
        if (isset($error_data['message']) && strpos($error_data['message'], 'already') !== false) {
            // Subscriber already exists - treat as success
            return true;
        }
    }
    
    // Log error details
    error_log(sprintf(
        '[MAILERLITE ERROR] Response Code: %d | Body: %s',
        $response_code,
        $response_body
    ));
    
    return new WP_Error('subscription_failed', 'Failed to subscribe to MailerLite');
}

/**
 * Handle chat message requests
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_chat_message($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP for rate limiting
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data first to get session_id
    $data = $request->get_json_params();
    
    if (empty($data['session_id']) || empty($data['message'])) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Invalid chat message request',
            ['ip_address' => $ip_address]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID and message are required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Session validation failed',
            ['ip_address' => $ip_address, 'session_id' => $data['session_id']]
        );
        
        return $session_validation['error'];
    }
    
    $session_id = $session_validation['session_id'];
    
    // Check rate limiting (10 messages per minute, 50 per session total)
    $rate_limit_result = mgrnz_check_chat_rate_limit($ip_address, $session_id);
    
    if (!$rate_limit_result['allowed']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_RATE_LIMIT,
            'Chat rate limit exceeded: ' . $rate_limit_result['reason'],
            [
                'ip_address' => $ip_address,
                'session_id' => $session_id,
                'reason' => $rate_limit_result['reason']
            ]
        );
        
        $response = new WP_REST_Response([
            'status' => 'error',
            'message' => $rate_limit_result['message'],
            'code' => 'rate_limit_exceeded',
            'reason' => $rate_limit_result['reason']
        ], 429);
        
        // Add Retry-After header if applicable
        if ($rate_limit_result['retry_after']) {
            $response->header('Retry-After', $rate_limit_result['retry_after']);
        }
        
        return $response;
    }
    
    // Sanitize message - remove all HTML tags and scripts
    $message = sanitize_textarea_field($data['message']);
    $message = wp_kses($message, []); // Strip all HTML tags
    $message = trim($message);
    
    // Validate message is not empty after sanitization
    if (empty($message)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Message cannot be empty',
            'code' => 'empty_message'
        ], 400);
    }
    
    // Validate message length
    if (strlen($message) < 1 || strlen($message) > 2000) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Message must be between 1 and 2000 characters',
            'code' => 'invalid_message_length'
        ], 400);
    }
    
    // Validate message contains at least some alphanumeric characters
    if (!preg_match('/[a-zA-Z0-9]/', $message)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Message must contain at least some text or numbers',
            'code' => 'invalid_message_content'
        ], 400);
    }
    
    try {
        // Load conversation manager
        $conversation_manager = new MGRNZ_Conversation_Manager($session_id);
        
        // Check if this is a request for initial questions
        if ($message === '__INIT__') {
            // Get initial clarifying questions
            $response = $conversation_manager->get_initial_questions();
            
            $logger->log_success(
                MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
                'Initial questions generated successfully',
                [
                    'session_id' => $session_id,
                    'conversation_state' => $response['state']
                ]
            );
            
            return new WP_REST_Response([
                'success' => true,
                'assistant_response' => $response['message'],
                'conversation_state' => $response['state'],
                'next_action' => null
            ], 200);
        }
        
        // Process user message and get AI response
        $response = $conversation_manager->process_user_response($message);
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Chat message processed successfully',
            [
                'session_id' => $session_id,
                'message_length' => strlen($message),
                'conversation_state' => $response['conversation_state']
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'assistant_response' => $response['assistant_response'],
            'conversation_state' => $response['conversation_state'],
            'next_action' => $response['next_action'],
            'transition' => $response['transition'] ?? null,
            'progress' => $response['progress'] ?? 0
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
            'Chat message processing failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'ip_address' => $ip_address,
                'message_length' => strlen($message),
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        // Log to WordPress error log for debugging
        error_log(sprintf(
            '[AI Workflow Chat Error] Session: %s | IP: %s | Error: %s | File: %s:%d',
            $session_id,
            $ip_address,
            $e->getMessage(),
            $e->getFile(),
            $e->getLine()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to process message. Please try again.',
            'code' => 'processing_error'
        ], 500);
    }
}

/**
 * Handle estimate generation requests
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_generate_estimate($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP for rate limiting
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID is required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Session validation failed for estimate generation',
            ['ip_address' => $ip_address, 'session_id' => $data['session_id']]
        );
        
        return $session_validation['error'];
    }
    
    $session_id = $session_validation['session_id'];
    $session = $session_validation['session'];
    
    try {
        // Load conversation manager to get wizard data
        $conversation_manager = new MGRNZ_Conversation_Manager($session_id);
        
        $wizard_data = $session->wizard_data;
        
        // Generate estimate using AI
        $ai_service = new MGRNZ_AI_Service();
        $estimate = $ai_service->generate_cost_estimate($wizard_data);
        
        if (is_wp_error($estimate)) {
            throw new Exception($estimate->get_error_message());
        }
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Cost estimate generated successfully',
            [
                'session_id' => $session_id,
                'complexity' => $estimate['complexity'] ?? 'unknown'
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'estimate' => $estimate
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
            'Estimate generation failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'ip_address' => $ip_address,
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        // Log to WordPress error log for debugging
        error_log(sprintf(
            '[AI Workflow Estimate Error] Session: %s | IP: %s | Error: %s | File: %s:%d',
            $session_id,
            $ip_address,
            $e->getMessage(),
            $e->getFile(),
            $e->getLine()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to generate estimate. Please try again.',
            'code' => 'estimate_error'
        ], 500);
    }
}

/**
 * Handle quote request submissions
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_request_quote($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id']) || empty($data['contact_details'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID and contact details are required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Session validation failed for quote request',
            ['ip_address' => $ip_address, 'session_id' => $data['session_id']]
        );
        
        return $session_validation['error'];
    }
    
    $session_id = $session_validation['session_id'];
    $contact = $data['contact_details'];
    
    // Validate contact details
    if (empty($contact['name']) || empty($contact['email'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name and email are required',
            'code' => 'invalid_contact_details'
        ], 400);
    }
    
    // Sanitize and validate contact details
    $name = sanitize_text_field($contact['name']);
    $name = wp_kses($name, []); // Strip all HTML tags
    $name = trim($name);
    
    $email = sanitize_email($contact['email']);
    $email = trim($email);
    
    $phone = isset($contact['phone']) ? sanitize_text_field($contact['phone']) : '';
    $phone = wp_kses($phone, []); // Strip all HTML tags
    $phone = trim($phone);
    
    $notes = isset($data['additional_notes']) ? sanitize_textarea_field($data['additional_notes']) : '';
    $notes = wp_kses($notes, []); // Strip all HTML tags
    $notes = trim($notes);
    
    // Validate name
    if (empty($name) || strlen($name) < 2) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid name (at least 2 characters)',
            'code' => 'invalid_name'
        ], 400);
    }
    
    if (strlen($name) > 100) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name is too long (maximum 100 characters)',
            'code' => 'name_too_long'
        ], 400);
    }
    
    // Validate email
    if (!is_email($email)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid email address',
            'code' => 'invalid_email'
        ], 400);
    }
    
    // Validate phone if provided
    if (!empty($phone) && strlen($phone) > 50) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Phone number is too long (maximum 50 characters)',
            'code' => 'phone_too_long'
        ], 400);
    }
    
    // Validate notes length
    if (strlen($notes) > 2000) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Additional notes are too long (maximum 2000 characters)',
            'code' => 'notes_too_long'
        ], 400);
    }
    
    try {
        // Load session to get wizard data
        $session = MGRNZ_Conversation_Session::load($session_id);
        
        if (!$session) {
            throw new Exception('Session not found');
        }
        
        $submission_id = $session->get_metadata('submission_id');
        $blueprint_id = $submission_id ? intval($submission_id) : 0;
        
        // Create quote request in database
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_quote_requests';
        
        $result = $wpdb->insert(
            $table_name,
            [
                'blueprint_id' => $blueprint_id,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'notes' => $notes,
                'requested_at' => current_time('mysql'),
                'status' => 'new'
            ],
            ['%d', '%s', '%s', '%s', '%s', '%s', '%s']
        );
        
        if ($result === false) {
            throw new Exception('Failed to create quote request: ' . $wpdb->last_error);
        }
        
        $quote_id = $wpdb->insert_id;
        
        // Send email notification to admin
        $admin_email = get_option('admin_email');
        $subject = 'New Quote Request from ' . $name;
        $message = "New quote request received:\n\n";
        $message .= "Name: {$name}\n";
        $message .= "Email: {$email}\n";
        $message .= "Phone: {$phone}\n";
        $message .= "Notes: {$notes}\n\n";
        $message .= "View in dashboard: " . admin_url('post.php?post=' . $quote_id . '&action=edit');
        
        wp_mail($admin_email, $subject, $message);
        
        // Track quote request analytics
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_QUOTE_REQUESTED,
            $session_id,
            ['quote_id' => $quote_id, 'has_phone' => !empty($phone)]
        );
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Quote request submitted successfully',
            [
                'quote_id' => $quote_id,
                'session_id' => $session_id,
                'email' => $email
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'message' => 'Quote request received. We\'ll send a detailed quote within 24 hours.',
            'quote_id' => $quote_id
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Quote request failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'email' => $email,
                'ip_address' => $ip_address,
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        // Log to WordPress error log for debugging
        error_log(sprintf(
            '[AI Workflow Quote Error] Session: %s | Email: %s | IP: %s | Error: %s | File: %s:%d',
            $session_id,
            $email,
            $ip_address,
            $e->getMessage(),
            $e->getFile(),
            $e->getLine()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to submit quote request. Please try again.',
            'code' => 'quote_error'
        ], 500);
    }
}

/**
 * Handle blueprint subscription and download
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_subscribe_blueprint($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id']) || empty($data['name']) || empty($data['email'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID, name, and email are required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Session validation failed for blueprint subscription',
            ['ip_address' => $ip_address, 'session_id' => $data['session_id']]
        );
        
        return $session_validation['error'];
    }
    
    $session_id = $session_validation['session_id'];
    
    // Sanitize and validate name
    $name = sanitize_text_field($data['name']);
    $name = wp_kses($name, []); // Strip all HTML tags
    $name = trim($name);
    
    // Sanitize and validate email
    $email = sanitize_email($data['email']);
    $email = trim($email);
    
    // Validate session ID
    if (empty($session_id)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Invalid session ID',
            'code' => 'invalid_session'
        ], 400);
    }
    
    // Validate name
    if (empty($name) || strlen($name) < 2) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid name (at least 2 characters)',
            'code' => 'invalid_name'
        ], 400);
    }
    
    if (strlen($name) > 100) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name is too long (maximum 100 characters)',
            'code' => 'name_too_long'
        ], 400);
    }
    
    // Validate email
    if (!is_email($email)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid email address',
            'code' => 'invalid_email'
        ], 400);
    }
    
    try {
        // Load session
        $session = MGRNZ_Conversation_Session::load($session_id);
        
        if (!$session) {
            throw new Exception('Session not found');
        }
        
        // Get blueprint data from session or generate it
        $blueprint_data = $session->get_metadata('blueprint_data');
        
        if (empty($blueprint_data)) {
            // Try to get from submission post
            $submission_id = $session->get_metadata('submission_id');
            if ($submission_id) {
                $blueprint_content = get_post_meta($submission_id, '_mgrnz_blueprint_content', true);
                $diagram_data = get_post_meta($submission_id, '_mgrnz_diagram_data', true);
                
                if (!empty($diagram_data)) {
                    $diagram_data = json_decode($diagram_data, true);
                }
                
                $blueprint_data = [
                    'content' => $blueprint_content,
                    'diagram' => $diagram_data
                ];
            }
        }
        
        // Generate PDF
        require_once __DIR__ . '/includes/class-pdf-generator.php';
        $pdf_generator = new MGRNZ_PDF_Generator();
        
        $user_data = [
            'name' => $name,
            'email' => $email
        ];
        
        $pdf_path = $pdf_generator->generate_blueprint_pdf($blueprint_data, $user_data, $session_id);
        
        if (is_wp_error($pdf_path)) {
            throw new Exception($pdf_path->get_error_message());
        }
        
        // Get download URL
        $download_url = $pdf_generator->get_download_url($pdf_path);
        
        // Get submission ID for blueprint_id
        $submission_id = $session->get_metadata('submission_id');
        $blueprint_id = $submission_id ? intval($submission_id) : 0;
        
        // Create subscription record in database
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_blueprint_subscriptions';
        
        $result = $wpdb->insert(
            $table_name,
            [
                'name' => $name,
                'email' => $email,
                'subscription_type' => 'blueprint_download',
                'blueprint_id' => $blueprint_id,
                'subscribed_at' => current_time('mysql'),
                'download_count' => 0
            ],
            ['%s', '%s', '%s', '%d', '%s', '%d']
        );
        
        if ($result === false) {
            throw new Exception('Failed to create subscription: ' . $wpdb->last_error);
        }
        
        $subscription_id = $wpdb->insert_id;
        
        // Send email with blueprint
        $email_service = new MGRNZ_Email_Service();
        $email_sent = $email_service->send_blueprint_with_attachment($email, $name, $blueprint_data, $pdf_path);
        
        if ($email_sent) {
            // We don't store email_sent in the new table yet, but we could add it or just log it
            // For now, we'll just rely on the log
        }
        
        // Track blueprint download analytics
        MGRNZ_Conversation_Analytics::track_event(
            MGRNZ_Conversation_Analytics::EVENT_BLUEPRINT_DOWNLOADED,
            $session_id,
            ['subscription_id' => $subscription_id, 'email_sent' => $email_sent]
        );
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Blueprint subscription successful',
            [
                'subscription_id' => $subscription_id,
                'session_id' => $session_id,
                'email' => $email,
                'pdf_generated' => true,
                'email_sent' => $email_sent
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'download_url' => $download_url,
            'subscription_id' => $subscription_id
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Blueprint subscription failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'email' => $email,
                'ip_address' => $ip_address,
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        // Log to WordPress error log for debugging
        error_log(sprintf(
            '[AI Workflow Subscription Error] Session: %s | Email: %s | IP: %s | Error: %s | File: %s:%d',
            $session_id,
            $email,
            $ip_address,
            $e->getMessage(),
            $e->getFile(),
            $e->getLine()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to process subscription. Please try again.',
            'code' => 'subscription_error'
        ], 500);
    }
}

/**
 * Handle blueprint download requests
 * Requirements: 6.5, 10.1, 10.2, 10.3, 10.4, 10.5
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_download_blueprint($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id']) || empty($data['name']) || empty($data['email'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID, name, and email are required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Session validation failed for blueprint download',
            ['ip_address' => $ip_address, 'session_id' => $data['session_id']]
        );
        
        return $session_validation['error'];
    }
    
    $session_id = $session_validation['session_id'];
    
    // Sanitize and validate name
    $name = sanitize_text_field($data['name']);
    $name = wp_kses($name, []); // Strip all HTML tags
    $name = trim($name);
    
    // Sanitize and validate email
    $email = sanitize_email($data['email']);
    $email = trim($email);
    
    // Validate name
    if (empty($name) || strlen($name) < 2) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid name (at least 2 characters)',
            'code' => 'invalid_name'
        ], 400);
    }
    
    if (strlen($name) > 100) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name is too long (maximum 100 characters)',
            'code' => 'name_too_long'
        ], 400);
    }
    
    // Validate email
    if (!is_email($email)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid email address',
            'code' => 'invalid_email'
        ], 400);
    }
    
    try {
        // Load session
        $session = MGRNZ_Conversation_Session::load($session_id);
        
        if (!$session) {
            throw new Exception('Session not found');
        }
        
        // Get blueprint data from session
        $blueprint_data = $session->get_metadata('blueprint_data');
        
        if (empty($blueprint_data)) {
            // Try to get from submission post
            $submission_id = $session->get_metadata('submission_id');
            if ($submission_id) {
                $blueprint_content = get_post_meta($submission_id, '_mgrnz_blueprint_content', true);
                $diagram_data = get_post_meta($submission_id, '_mgrnz_diagram_data', true);
                
                if (!empty($diagram_data)) {
                    $diagram_data = json_decode($diagram_data, true);
                }
                
                $blueprint_data = [
                    'content' => $blueprint_content,
                    'diagram' => $diagram_data
                ];
            }
        }
        
        if (empty($blueprint_data) || empty($blueprint_data['content'])) {
            throw new Exception('Blueprint data not found');
        }
        
        // Generate PDF (Requirement 10.1, 10.2, 10.3)
        $pdf_generator = new MGRNZ_PDF_Generator();
        
        $user_data = [
            'name' => $name,
            'email' => $email
        ];
        
        $pdf_path = $pdf_generator->generate_blueprint_pdf($blueprint_data, $user_data, $session_id);
        
        if (is_wp_error($pdf_path)) {
            throw new Exception($pdf_path->get_error_message());
        }
        
        // Get download URL (Requirement 10.4)
        $download_url = $pdf_generator->get_download_url($pdf_path);
        
        // Update download count if subscription exists
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_blueprint_subscriptions';
        
        // Find subscription by email (since we have it) or we could try to find by blueprint_id if we had it
        // Using email is safer here as it validates the user
        $subscription = $wpdb->get_row($wpdb->prepare(
            "SELECT id, download_count FROM $table_name WHERE email = %s ORDER BY id DESC LIMIT 1",
            $email
        ));
        
        if ($subscription) {
            $wpdb->update(
                $table_name,
                [
                    'download_count' => intval($subscription->download_count) + 1,
                    'last_download_at' => current_time('mysql')
                ],
                ['id' => $subscription->id],
                ['%d', '%s'],
                ['%d']
            );
        }
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Blueprint download generated successfully',
            [
                'session_id' => $session_id,
                'email' => $email,
                'pdf_path' => $pdf_path
            ]
        );
        
        // Return download URL (Requirement 10.5)
        return new WP_REST_Response([
            'success' => true,
            'download_url' => $download_url,
            'message' => 'Your blueprint is ready for download'
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Blueprint download failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'email' => $email,
                'ip_address' => $ip_address,
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        // Log to WordPress error log for debugging
        error_log(sprintf(
            '[AI Workflow Download Error] Session: %s | Email: %s | IP: %s | Error: %s | File: %s:%d',
            $session_id,
            $email,
            $ip_address,
            $e->getMessage(),
            $e->getFile(),
            $e->getLine()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to generate download. Please try again.',
            'code' => 'download_error'
        ], 500);
    }
}

/**
 * Validate and sanitize session ID
 *
 * @param string $session_id Session ID to validate
 * @return array Result with 'valid' boolean and optional 'error' response
 */
function mgrnz_validate_session_id($session_id) {
    // Sanitize session ID
    $session_id = sanitize_text_field($session_id);
    $session_id = wp_kses($session_id, []); // Strip all HTML tags
    $session_id = trim($session_id);
    
    // Validate session ID format (should be sess_ followed by 32 alphanumeric characters)
    if (!preg_match('/^sess_[a-zA-Z0-9]{32}$/', $session_id)) {
        return [
            'valid' => false,
            'session_id' => $session_id,
            'error' => new WP_REST_Response([
                'status' => 'error',
                'message' => 'Invalid session ID format',
                'code' => 'invalid_session'
            ], 400)
        ];
    }
    
    // Verify session exists
    $session = MGRNZ_Conversation_Session::load($session_id);
    if (!$session) {
        return [
            'valid' => false,
            'session_id' => $session_id,
            'error' => new WP_REST_Response([
                'status' => 'error',
                'message' => 'Session not found or has expired. Please start a new session.',
                'code' => 'session_not_found'
            ], 404)
        ];
    }
    
    // Check if session is expired
    if ($session->is_expired()) {
        return [
            'valid' => false,
            'session_id' => $session_id,
            'error' => new WP_REST_Response([
                'status' => 'error',
                'message' => 'Your session has expired. Please start a new session.',
                'code' => 'session_expired'
            ], 410)
        ];
    }
    
    return [
        'valid' => true,
        'session_id' => $session_id,
        'session' => $session
    ];
}

/**
 * Check rate limiting for chat messages (10 per minute per session, 50 per session total)
 *
 * @param string $ip_address Client IP
 * @param string $session_id Session ID
 * @return array Rate limit result with status and retry_after
 */
function mgrnz_check_chat_rate_limit($ip_address, $session_id = null) {
    // Check per-minute rate limit (10 messages per minute)
    $minute_key = 'chat_rate_minute_' . md5($ip_address);
    $minute_count = get_transient($minute_key);
    
    if ($minute_count === false) {
        // First message in this minute
        set_transient($minute_key, 1, MINUTE_IN_SECONDS);
    } else if ($minute_count >= 10) {
        // Per-minute rate limit exceeded
        return [
            'allowed' => false,
            'reason' => 'per_minute_limit',
            'retry_after' => 60,
            'message' => 'Too many messages. Please slow down and try again in a minute.'
        ];
    } else {
        // Increment minute counter
        set_transient($minute_key, $minute_count + 1, MINUTE_IN_SECONDS);
    }
    
    // Check per-session total limit (50 messages per session)
    if ($session_id) {
        $session_key = 'chat_rate_session_' . md5($session_id);
        $session_count = get_transient($session_key);
        
        if ($session_count === false) {
            // First message in this session
            set_transient($session_key, 1, 24 * HOUR_IN_SECONDS); // 24 hour expiry
        } else if ($session_count >= 50) {
            // Per-session rate limit exceeded
            return [
                'allowed' => false,
                'reason' => 'per_session_limit',
                'retry_after' => null, // No retry, session limit reached
                'message' => 'You have reached the maximum number of messages for this session (50 messages). Please start a new session.'
            ];
        } else {
            // Increment session counter
            set_transient($session_key, $session_count + 1, 24 * HOUR_IN_SECONDS);
        }
    }
    
    return [
        'allowed' => true,
        'reason' => null,
        'retry_after' => null,
        'message' => null
    ];
}

/**
 * Schedule cron job for cleaning up old conversation sessions (30-day retention policy)
 */
add_action('init', function() {
    if (!wp_next_scheduled('mgrnz_cleanup_old_sessions')) {
        wp_schedule_event(time(), 'daily', 'mgrnz_cleanup_old_sessions');
    }
});

/**
 * Handle scheduled cleanup of old conversation sessions
 */
add_action('mgrnz_cleanup_old_sessions', function() {
    $deleted_count = MGRNZ_Conversation_Session::cleanup_expired_sessions();
    
    // Log cleanup activity
    $logger = new MGRNZ_Error_Logger();
    $logger->log_success(
        MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
        'Cleaned up expired conversation sessions',
        [
            'deleted_count' => $deleted_count,
            'cleanup_date' => current_time('mysql')
        ]
    );
    
    error_log(sprintf(
        '[AI Workflow] Cleaned up %d expired conversation sessions (30-day retention policy)',
        $deleted_count
    ));
});

/**
 * Register custom post types for quotes, subscriptions, and failed requests
 */
add_action('init', function() {
    // Quote Request CPT
    register_post_type('ai_workflow_quote', [
        'labels' => [
            'name' => 'Quote Requests',
            'singular_name' => 'Quote Request',
            'menu_name' => 'Quote Requests',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Quote Request',
            'edit_item' => 'Edit Quote Request',
            'view_item' => 'View Quote Request',
            'all_items' => 'All Quote Requests',
        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'edit.php?post_type=ai_workflow_sub',
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'custom-fields'],
        'menu_icon' => 'dashicons-money-alt',
    ]);
    
    // Blueprint Subscription CPT
    register_post_type('blueprint_sub', [
        'labels' => [
            'name' => 'Blueprint Subscriptions',
            'singular_name' => 'Blueprint Subscription',
            'menu_name' => 'Blueprint Subs',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Subscription',
            'edit_item' => 'Edit Subscription',
            'view_item' => 'View Subscription',
            'all_items' => 'All Subscriptions',
        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'edit.php?post_type=ai_workflow_sub',
        'capability_type' => 'post',
        'supports' => ['title', 'custom-fields'],
        'menu_icon' => 'dashicons-download',
    ]);
    
    // Failed Blueprint Request CPT
    register_post_type('ai_workflow_failed', [
        'labels' => [
            'name' => 'Failed Requests',
            'singular_name' => 'Failed Request',
            'menu_name' => 'Failed Requests',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Failed Request',
            'edit_item' => 'Edit Failed Request',
            'view_item' => 'View Failed Request',
            'all_items' => 'All Failed Requests',
        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'edit.php?post_type=ai_workflow_sub',
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'custom-fields'],
        'menu_icon' => 'dashicons-warning',
    ]);
});

/**
 * Handle state transition requests
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_state_transition($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id']) || empty($data['target_state'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID and target state are required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Session validation failed for state transition',
            ['ip_address' => $ip_address, 'session_id' => $data['session_id']]
        );
        
        return $session_validation['error'];
    }
    
    $session_id = $session_validation['session_id'];
    $target_state = sanitize_text_field($data['target_state']);
    $target_state = wp_kses($target_state, []); // Strip all HTML tags
    $target_state = trim($target_state);
    
    try {
        // Load conversation manager
        $conversation_manager = new MGRNZ_Conversation_Manager($session_id);
        
        // Transition to target state
        $result = $conversation_manager->transition_state($target_state);
        
        if (!$result['success']) {
            throw new Exception($result['error'] ?? 'State transition failed');
        }
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'State transition successful',
            [
                'session_id' => $session_id,
                'target_state' => $target_state,
                'current_state' => $conversation_manager->get_current_state()
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'message' => $result['message'],
            'state' => $result['state'],
            'actions' => $result['actions'],
            'progress' => $conversation_manager->get_progress_percentage()
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'State transition failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'target_state' => $target_state,
                'ip_address' => $ip_address
            ]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to transition state. Please try again.',
            'code' => 'transition_error'
        ], 500);
    }
}

/**
 * Handle consultation booking tracking
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_track_consultation($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID is required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Session validation failed for consultation tracking',
            ['ip_address' => $ip_address, 'session_id' => $data['session_id']]
        );
        
        return $session_validation['error'];
    }
    
    $session_id = $session_validation['session_id'];
    
    try {
        // Load conversation manager
        $conversation_manager = new MGRNZ_Conversation_Manager($session_id);
        
        // Track the consultation click
        $conversation_manager->track_consultation_click();
        
        // Get continuation message
        $response = $conversation_manager->continue_after_consultation();
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Consultation booking tracked',
            [
                'session_id' => $session_id,
                'ip_address' => $ip_address
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'message' => $response['message'],
            'state' => $response['state']
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Consultation tracking failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'ip_address' => $ip_address
            ]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to track consultation. Please try again.',
            'code' => 'tracking_error'
        ], 500);
    }
}

/**
 * Handle additional workflow tracking
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_track_additional_workflow($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID is required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    $session_id = sanitize_text_field($data['session_id']);
    
    try {
        // Load conversation manager
        $conversation_manager = new MGRNZ_Conversation_Manager($session_id);
        
        // Track the additional workflow click
        $conversation_manager->track_additional_workflow_click();
        
        // Preserve current session
        $conversation_manager->preserve_session();
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Additional workflow tracked',
            [
                'session_id' => $session_id,
                'ip_address' => $ip_address
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'message' => 'Session preserved. You can start a new workflow.',
            'wizard_url' => home_url('/start-using-ai/')
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Additional workflow tracking failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'ip_address' => $ip_address
            ]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to track additional workflow. Please try again.',
            'code' => 'tracking_error'
        ], 500);
    }
}

/**
 * Handle GDPR data deletion requests
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_delete_session_data($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP
    $ip_address = mgrnz_get_client_ip();
    
    // Get and validate data
    $data = $request->get_json_params();
    
    if (empty($data['session_id']) || empty($data['email'])) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Session ID and email are required',
            'code' => 'invalid_request'
        ], 400);
    }
    
    // Validate and sanitize session ID
    $session_validation = mgrnz_validate_session_id($data['session_id']);
    
    if (!$session_validation['valid']) {
        // For GDPR requests, we still want to process even if session is expired
        // Just validate the format
        $session_id = sanitize_text_field($data['session_id']);
        $session_id = wp_kses($session_id, []);
        $session_id = trim($session_id);
        
        if (!preg_match('/^sess_[a-zA-Z0-9]{32}$/', $session_id)) {
            return new WP_REST_Response([
                'status' => 'error',
                'message' => 'Invalid session ID format',
                'code' => 'invalid_session'
            ], 400);
        }
    } else {
        $session_id = $session_validation['session_id'];
        $session = $session_validation['session'];
    }
    
    // Sanitize and validate email
    $email = sanitize_email($data['email']);
    $email = trim($email);
    
    if (!is_email($email)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid email address',
            'code' => 'invalid_email'
        ], 400);
    }
    
    try {
        // Load session if not already loaded
        if (!isset($session)) {
            $session = MGRNZ_Conversation_Session::load($session_id);
        }
        
        // Verify email matches session (if session exists)
        if ($session) {
            $wizard_data = $session->wizard_data;
            $session_email = $wizard_data['email'] ?? '';
            
            // Only allow deletion if email matches or if no email was provided in wizard
            if (!empty($session_email) && $session_email !== $email) {
                $logger->log_warning(
                    MGRNZ_Error_Logger::CATEGORY_VALIDATION,
                    'Email mismatch for data deletion request',
                    [
                        'session_id' => $session_id,
                        'requested_email' => $email,
                        'ip_address' => $ip_address
                    ]
                );
                
                return new WP_REST_Response([
                    'status' => 'error',
                    'message' => 'Email does not match session records',
                    'code' => 'email_mismatch'
                ], 403);
            }
        }
        
        // Delete all chat messages for this session
        global $wpdb;
        $messages_table = $wpdb->prefix . 'mgrnz_chat_messages';
        $deleted_messages = $wpdb->delete(
            $messages_table,
            ['session_id' => $session_id],
            ['%s']
        );
        
        // Delete the session
        $session_deleted = false;
        if ($session) {
            $session_deleted = $session->delete();
        }
        
        // Delete any related subscription records
        $subscription_posts = get_posts([
            'post_type' => 'blueprint_sub',
            'meta_key' => '_mgrnz_sub_session_id',
            'meta_value' => $session_id,
            'posts_per_page' => -1
        ]);
        
        $deleted_subscriptions = 0;
        foreach ($subscription_posts as $post) {
            if (wp_delete_post($post->ID, true)) {
                $deleted_subscriptions++;
            }
        }
        
        // Delete any related quote requests
        $quote_posts = get_posts([
            'post_type' => 'ai_workflow_quote',
            'meta_key' => '_mgrnz_quote_session_id',
            'meta_value' => $session_id,
            'posts_per_page' => -1
        ]);
        
        $deleted_quotes = 0;
        foreach ($quote_posts as $post) {
            if (wp_delete_post($post->ID, true)) {
                $deleted_quotes++;
            }
        }
        
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'GDPR data deletion completed',
            [
                'session_id' => $session_id,
                'email' => $email,
                'deleted_messages' => $deleted_messages,
                'deleted_session' => $session_deleted,
                'deleted_subscriptions' => $deleted_subscriptions,
                'deleted_quotes' => $deleted_quotes,
                'ip_address' => $ip_address
            ]
        );
        
        return new WP_REST_Response([
            'success' => true,
            'message' => 'Your data has been successfully deleted from our system.',
            'deleted' => [
                'messages' => $deleted_messages,
                'session' => $session_deleted,
                'subscriptions' => $deleted_subscriptions,
                'quotes' => $deleted_quotes
            ]
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Data deletion failed: ' . $e->getMessage(),
            [
                'session_id' => $session_id,
                'email' => $email,
                'ip_address' => $ip_address,
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        error_log(sprintf(
            '[AI Workflow Data Deletion Error] Session: %s | Email: %s | IP: %s | Error: %s',
            $session_id,
            $email,
            $ip_address,
            $e->getMessage()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to delete data. Please contact support.',
            'code' => 'deletion_error'
        ], 500);
    }
}

/**
 * Handle wizard completion flow subscription
 * Requirements: 7.4, 7.5
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_wizard_subscribe($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP for rate limiting
    $ip_address = mgrnz_get_client_ip();
    
    // Check rate limiting
    if (!mgrnz_check_rate_limit($ip_address)) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_RATE_LIMIT,
            'Rate limit exceeded for wizard subscription',
            ['ip_address' => $ip_address]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Too many requests. Please try again in a few minutes.',
            'code' => 'rate_limit_exceeded'
        ], 429);
    }
    
    // Get and validate data
    $data = $request->get_json_params();
    
    // Validate required fields
    if (empty($data['name']) || empty($data['email'])) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Missing required fields for wizard subscription',
            ['ip_address' => $ip_address]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name and email are required',
            'code' => 'missing_fields'
        ], 400);
    }
    
    // Sanitize and validate name
    $name = sanitize_text_field($data['name']);
    $name = wp_kses($name, []); // Strip all HTML tags
    $name = trim($name);
    
    // Sanitize and validate email
    $email = sanitize_email($data['email']);
    $email = trim($email);
    
    // Validate name
    if (empty($name) || strlen($name) < 2) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid name (at least 2 characters)',
            'code' => 'invalid_name'
        ], 400);
    }
    
    if (strlen($name) > 255) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name is too long (maximum 255 characters)',
            'code' => 'name_too_long'
        ], 400);
    }
    
    // Validate email (Requirement 7.4)
    if (!is_email($email)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid email address',
            'code' => 'invalid_email'
        ], 400);
    }
    
    // Get optional fields
    $subscription_type = isset($data['subscription_type']) ? sanitize_text_field($data['subscription_type']) : 'blog';
    $blueprint_id = isset($data['blueprint_id']) ? sanitize_text_field($data['blueprint_id']) : '';
    
    try {
        // Store subscription in database (Requirement 7.5)
        global $wpdb;
        $table = $wpdb->prefix . 'mgrnz_blueprint_subscriptions';
        
        $insert_result = $wpdb->insert(
            $table,
            [
                'name' => $name,
                'email' => $email,
                'subscription_type' => $subscription_type,
                'blueprint_id' => $blueprint_id,
                'subscribed_at' => current_time('mysql')
            ],
            ['%s', '%s', '%s', '%s', '%s']
        );
        
        if ($insert_result === false) {
            throw new Exception('Failed to store subscription: ' . $wpdb->last_error);
        }
        
        $subscription_id = $wpdb->insert_id;
        
        // Generate download URL for blueprint subscriptions
        $download_url = null;
        if ($subscription_type === 'blueprint_download' && !empty($blueprint_id)) {
            // Generate PDF and get download URL
            $pdf_generator = new MGRNZ_PDF_Generator();
            
            // Get blueprint data from session or database
            $blueprint_data = mgrnz_get_blueprint_data($blueprint_id);
            
            if (!empty($blueprint_data)) {
                $user_data = [
                    'name' => $name,
                    'email' => $email
                ];
                
                $pdf_path = $pdf_generator->generate_blueprint_pdf($blueprint_data, $user_data, $blueprint_id);
                
                if (!is_wp_error($pdf_path)) {
                    $download_url = $pdf_generator->get_download_url($pdf_path);
                    
                    // Update subscription with PDF path
                    $wpdb->update(
                        $table,
                        ['pdf_path' => $pdf_path],
                        ['id' => $subscription_id],
                        ['%s'],
                        ['%d']
                    );
                }
            }
        }
        
        // Log success
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Wizard subscription successful',
            [
                'subscription_id' => $subscription_id,
                'email' => $email,
                'subscription_type' => $subscription_type,
                'has_download_url' => !empty($download_url)
            ]
        );
        
        // Return success response
        $response = [
            'success' => true,
            'message' => 'Successfully subscribed',
            'subscription_id' => $subscription_id
        ];
        
        if ($download_url) {
            $response['download_url'] = $download_url;
        }
        
        return new WP_REST_Response($response, 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Wizard subscription failed: ' . $e->getMessage(),
            [
                'email' => $email,
                'ip_address' => $ip_address,
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        error_log(sprintf(
            '[AI Workflow Wizard Subscribe Error] Email: %s | IP: %s | Error: %s',
            $email,
            $ip_address,
            $e->getMessage()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to process subscription. Please try again.',
            'code' => 'subscription_error'
        ], 500);
    }
}

/**
 * Handle wizard completion flow quote request
 * Requirements: 8.4, 8.5
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_wizard_request_quote($request) {
    // Initialize error logger
    $logger = new MGRNZ_Error_Logger();
    
    // Add CORS headers
    mgrnz_add_cors_headers();
    
    // Get client IP for rate limiting
    $ip_address = mgrnz_get_client_ip();
    
    // Check rate limiting
    if (!mgrnz_check_rate_limit($ip_address)) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_RATE_LIMIT,
            'Rate limit exceeded for wizard quote request',
            ['ip_address' => $ip_address]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Too many requests. Please try again in a few minutes.',
            'code' => 'rate_limit_exceeded'
        ], 429);
    }
    
    // Get and validate data
    $data = $request->get_json_params();
    
    // Validate required fields
    if (empty($data['name']) || empty($data['email'])) {
        $logger->log_warning(
            MGRNZ_Error_Logger::CATEGORY_VALIDATION,
            'Missing required fields for wizard quote request',
            ['ip_address' => $ip_address]
        );
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name and email are required',
            'code' => 'missing_fields'
        ], 400);
    }
    
    // Sanitize and validate name
    $name = sanitize_text_field($data['name']);
    $name = wp_kses($name, []); // Strip all HTML tags
    $name = trim($name);
    
    // Sanitize and validate email
    $email = sanitize_email($data['email']);
    $email = trim($email);
    
    // Sanitize optional fields
    $phone = isset($data['phone']) ? sanitize_text_field($data['phone']) : '';
    $phone = wp_kses($phone, []); // Strip all HTML tags
    $phone = trim($phone);
    
    $notes = isset($data['notes']) ? sanitize_textarea_field($data['notes']) : '';
    $notes = wp_kses($notes, []); // Strip all HTML tags
    $notes = trim($notes);
    
    $blueprint_id = isset($data['blueprint_id']) ? sanitize_text_field($data['blueprint_id']) : '';
    
    // Validate name (Requirement 8.4)
    if (empty($name) || strlen($name) < 2) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid name (at least 2 characters)',
            'code' => 'invalid_name'
        ], 400);
    }
    
    if (strlen($name) > 255) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Name is too long (maximum 255 characters)',
            'code' => 'name_too_long'
        ], 400);
    }
    
    // Validate email (Requirement 8.4)
    if (!is_email($email)) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Please provide a valid email address',
            'code' => 'invalid_email'
        ], 400);
    }
    
    // Validate phone if provided
    if (!empty($phone) && strlen($phone) > 50) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Phone number is too long (maximum 50 characters)',
            'code' => 'phone_too_long'
        ], 400);
    }
    
    // Validate notes length
    if (strlen($notes) > 2000) {
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Notes are too long (maximum 2000 characters)',
            'code' => 'notes_too_long'
        ], 400);
    }
    
    try {
        // Store quote request in database (Requirement 8.4)
        global $wpdb;
        $table = $wpdb->prefix . 'mgrnz_quote_requests';
        
        $insert_result = $wpdb->insert(
            $table,
            [
                'blueprint_id' => $blueprint_id,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'notes' => $notes,
                'requested_at' => current_time('mysql'),
                'status' => 'pending'
            ],
            ['%s', '%s', '%s', '%s', '%s', '%s', '%s']
        );
        
        if ($insert_result === false) {
            throw new Exception('Failed to store quote request: ' . $wpdb->last_error);
        }
        
        $quote_id = $wpdb->insert_id;
        
        // Send email notification to admin (Requirement 8.5)
        $admin_email = get_option('admin_email');
        $subject = 'New Quote Request from ' . $name;
        
        $message = "New quote request received from the AI Workflow Wizard:\n\n";
        $message .= "Quote ID: {$quote_id}\n";
        $message .= "Name: {$name}\n";
        $message .= "Email: {$email}\n";
        
        if (!empty($phone)) {
            $message .= "Phone: {$phone}\n";
        }
        
        if (!empty($blueprint_id)) {
            $message .= "Blueprint ID: {$blueprint_id}\n";
        }
        
        if (!empty($notes)) {
            $message .= "\nAdditional Notes:\n{$notes}\n";
        }
        
        $message .= "\nView in dashboard: " . admin_url('admin.php?page=mgrnz-quotes');
        
        $email_sent = wp_mail($admin_email, $subject, $message);
        
        if (!$email_sent) {
            $logger->log_warning(
                MGRNZ_Error_Logger::CATEGORY_EMAIL,
                'Failed to send quote request email notification',
                [
                    'quote_id' => $quote_id,
                    'admin_email' => $admin_email
                ]
            );
        }
        
        // Log success
        $logger->log_success(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Wizard quote request submitted successfully',
            [
                'quote_id' => $quote_id,
                'email' => $email,
                'has_phone' => !empty($phone),
                'email_sent' => $email_sent
            ]
        );
        
        // Return success confirmation (Requirement 8.5)
        return new WP_REST_Response([
            'success' => true,
            'message' => 'Quote request received. We\'ll send a detailed quote within 24 hours.',
            'quote_id' => $quote_id
        ], 200);
        
    } catch (Exception $e) {
        $logger->log_error(
            MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
            'Wizard quote request failed: ' . $e->getMessage(),
            [
                'email' => $email,
                'ip_address' => $ip_address,
                'exception_trace' => $e->getTraceAsString()
            ]
        );
        
        error_log(sprintf(
            '[AI Workflow Wizard Quote Error] Email: %s | IP: %s | Error: %s',
            $email,
            $ip_address,
            $e->getMessage()
        ));
        
        return new WP_REST_Response([
            'status' => 'error',
            'message' => 'Unable to submit quote request. Please try again.',
            'code' => 'quote_error'
        ], 500);
    }
}

/**
 * Get blueprint data by ID
 *
 * @param string $blueprint_id Blueprint ID (session ID or submission ID)
 * @return array|null Blueprint data or null if not found
 */
function mgrnz_get_blueprint_data($blueprint_id) {
    // Try to load from session first
    if (strpos($blueprint_id, 'sess_') === 0) {
        $session = MGRNZ_Conversation_Session::load($blueprint_id);
        if ($session) {
            $blueprint_data = $session->get_metadata('blueprint_data');
            if (!empty($blueprint_data)) {
                return $blueprint_data;
            }
            
            // Try to get from submission
            $submission_id = $session->get_metadata('submission_id');
            if ($submission_id) {
                $blueprint_id = $submission_id;
            }
        }
    }
    
    // Try to load from submission post
    if (is_numeric($blueprint_id)) {
        $blueprint_content = get_post_meta($blueprint_id, '_mgrnz_blueprint_content', true);
        $diagram_data = get_post_meta($blueprint_id, '_mgrnz_diagram_data', true);
        
        if (!empty($blueprint_content)) {
            if (!empty($diagram_data)) {
                $diagram_data = json_decode($diagram_data, true);
            }
            
            return [
                'content' => $blueprint_content,
                'diagram' => $diagram_data
            ];
        }
    }
    
    return null;
}

/**
 * Initialize database tables on plugin load
 */
add_action('plugins_loaded', function() {
    // Create conversation management tables
    MGRNZ_Conversation_Manager::create_tables();
});

/**
 * Schedule cleanup cron job for expired sessions
 */
add_action('init', function() {
    if (!wp_next_scheduled('mgrnz_cleanup_expired_sessions')) {
        wp_schedule_event(time(), 'daily', 'mgrnz_cleanup_expired_sessions');
    }
});

/**
 * Cleanup expired conversation sessions (cron job)
 */
add_action('mgrnz_cleanup_expired_sessions', function() {
    $deleted = MGRNZ_Conversation_Session::cleanup_expired_sessions();
    error_log("[AI Workflow] Cleaned up {$deleted} expired conversation sessions");
});

/**
 * Generate blueprint PDF wrapper function
 * 
 * @param array $blueprint_data
 * @param array $user_data
 * @param string $session_id
 * @return string|WP_Error Path to PDF
 */
function mgrnz_generate_blueprint_pdf($blueprint_data, $user_data, $session_id) {
    if (!class_exists('MGRNZ_PDF_Generator')) {
        require_once __DIR__ . '/includes/class-pdf-generator.php';
    }
    
    $generator = new MGRNZ_PDF_Generator();
    return $generator->generate_blueprint_pdf($blueprint_data, $user_data, $session_id);
}

/**
 * Handle generic event tracking
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function mgrnz_handle_track_event($request) {
    $data = $request->get_json_params();
    $session_id = isset($data['session_id']) ? sanitize_text_field($data['session_id']) : '';
    $event_type = isset($data['event_type']) ? sanitize_text_field($data['event_type']) : '';
    $metadata = isset($data['metadata']) ? $data['metadata'] : [];
    
    if (empty($session_id) || empty($event_type)) {
        return new WP_REST_Response([
            'success' => false,
            'message' => 'Missing required parameters'
        ], 400);
    }
    
    MGRNZ_Conversation_Analytics::track_event($event_type, $session_id, $metadata);
    
    return new WP_REST_Response([
        'success' => true
    ], 200);
}
