# Developer Documentation: Extending Conversation Features

## Overview

This document provides developers with comprehensive guidance on extending and customizing the AI Workflow Wizard Enhancement system. It covers architecture, APIs, hooks, filters, and best practices for adding new features.

## Architecture Overview

### System Components

```
┌─────────────────────────────────────────────────────────┐
│                    Frontend Layer                        │
│  - Progress Animation (progress-animation.js)           │
│  - Chat Interface (chat-interface.js)                   │
│  - Blueprint Display (blueprint-display.js)             │
│  - Subscription Modal (subscription-modal.js)           │
│  - API Integration (chat-api-integration.js)            │
└─────────────────────────────────────────────────────────┘
                            ↕
┌─────────────────────────────────────────────────────────┐
│                    REST API Layer                        │
│  - Chat Message Endpoint                                │
│  - Estimate Generation Endpoint                         │
│  - Quote Request Endpoint                               │
│  - Blueprint Subscription Endpoint                      │
└─────────────────────────────────────────────────────────┘
                            ↕
┌─────────────────────────────────────────────────────────┐
│                    Business Logic Layer                  │
│  - Conversation Manager                                 │
│  - AI Service                                           │
│  - Diagram Generator                                    │
│  - PDF Generator                                        │
│  - Email Service                                        │
└─────────────────────────────────────────────────────────┘
                            ↕
┌─────────────────────────────────────────────────────────┐
│                    Data Layer                            │
│  - Conversation Sessions                                │
│  - Chat Messages                                        │
│  - Quote Requests                                       │
│  - Subscriptions                                        │
└─────────────────────────────────────────────────────────┘
```

### File Structure

```
mu-plugins/
├── includes/
│   ├── class-conversation-manager.php      # Core conversation logic
│   ├── class-conversation-session.php      # Session data model
│   ├── class-chat-message.php              # Message data model
│   ├── class-ai-service.php                # AI integration
│   ├── class-diagram-generator.php         # Diagram generation
│   ├── class-pdf-generator.php             # PDF creation
│   ├── class-email-service.php             # Email handling
│   └── class-conversation-analytics.php    # Analytics tracking
├── mgrnz-ai-workflow-endpoint.php          # REST API endpoints
└── mgrnz-ai-workflow-wizard.php            # Main plugin file

themes/mgrnz-theme/assets/
├── js/
│   ├── progress-animation.js               # Progress UI
│   ├── chat-interface.js                   # Chat UI
│   ├── chat-api-integration.js             # API client
│   ├── blueprint-display.js                # Blueprint UI
│   └── subscription-modal.js               # Subscription UI
└── css/
    ├── chat-interface.css                  # Chat styles
    ├── blueprint-display.css               # Blueprint styles
    └── subscription-modal.css              # Modal styles
```

## Extending Conversation Manager

### Adding New Conversation States

**1. Define the new state:**

```php
// In class-conversation-manager.php

class Conversation_Manager {
    const STATE_CLARIFICATION = 'CLARIFICATION';
    const STATE_UPSELL = 'UPSELL';
    const STATE_BLUEPRINT_GENERATION = 'BLUEPRINT_GENERATION';
    const STATE_BLUEPRINT_PRESENTATION = 'BLUEPRINT_PRESENTATION';
    const STATE_CUSTOM_REVIEW = 'CUSTOM_REVIEW'; // New state
    const STATE_COMPLETE = 'COMPLETE';
    
    private function get_allowed_transitions() {
        return [
            self::STATE_CLARIFICATION => [
                self::STATE_UPSELL,
                self::STATE_BLUEPRINT_GENERATION
            ],
            self::STATE_UPSELL => [
                self::STATE_BLUEPRINT_GENERATION
            ],
            self::STATE_BLUEPRINT_GENERATION => [
                self::STATE_BLUEPRINT_PRESENTATION,
                self::STATE_CLARIFICATION
            ],
            self::STATE_BLUEPRINT_PRESENTATION => [
                self::STATE_CUSTOM_REVIEW, // Add transition
                self::STATE_COMPLETE,
                self::STATE_BLUEPRINT_GENERATION
            ],
            self::STATE_CUSTOM_REVIEW => [ // New state transitions
                self::STATE_COMPLETE,
                self::STATE_BLUEPRINT_GENERATION
            ],
            self::STATE_COMPLETE => []
        ];
    }
}
```

**2. Implement state entry actions:**

```php
private function execute_state_entry_actions($state) {
    switch ($state) {
        case self::STATE_CUSTOM_REVIEW:
            $this->handle_custom_review_entry();
            break;
        // ... other states
    }
}

private function handle_custom_review_entry() {
    // Custom logic for new state
    $message = "Let me review your specific requirements...";
    $this->add_assistant_message($message);
    
    // Trigger custom processing
    do_action('mgrnz_custom_review_started', $this->session_id);
}
```

**3. Add state-specific message handling:**

```php
public function process_user_response($message) {
    // ... existing code
    
    if ($this->conversation_state === self::STATE_CUSTOM_REVIEW) {
        return $this->handle_custom_review_response($message);
    }
    
    // ... rest of code
}

private function handle_custom_review_response($message) {
    // Process user response in custom review state
    $analysis = $this->analyze_custom_requirements($message);
    
    if ($analysis['complete']) {
        $this->transition_to(self::STATE_COMPLETE);
    }
    
    return [
        'success' => true,
        'response' => $analysis['response'],
        'state' => $this->conversation_state
    ];
}
```

### Adding Custom Conversation Paths

**1. Define the path:**

```php
// In class-conversation-manager.php

private function get_predetermined_paths() {
    return apply_filters('mgrnz_conversation_paths', [
        'no_response' => [
            'timeout' => 60000,
            'action' => 'continueWithDefaults',
            'message' => 'I haven\'t heard from you...'
        ],
        'custom_path' => [ // New path
            'trigger' => 'keyword_match',
            'keywords' => ['urgent', 'asap', 'immediately'],
            'action' => 'expedite_process',
            'message' => 'I understand this is urgent. Let me prioritize your request.'
        ]
    ]);
}
```

**2. Implement path handler:**

```php
private function handle_predetermined_path($path_name, $context = []) {
    $paths = $this->get_predetermined_paths();
    $path = $paths[$path_name] ?? null;
    
    if (!$path) {
        return false;
    }
    
    switch ($path['action']) {
        case 'expedite_process':
            return $this->expedite_process($context);
        // ... other actions
    }
}

private function expedite_process($context) {
    // Mark session as priority
    $this->session->set_priority(true);
    
    // Skip optional steps
    $this->transition_to(self::STATE_BLUEPRINT_GENERATION);
    
    // Notify admin
    do_action('mgrnz_expedited_request', $this->session_id);
    
    return [
        'success' => true,
        'message' => 'Your request has been prioritized.',
        'state' => $this->conversation_state
    ];
}
```

### Adding Custom Message Types

**1. Define message type:**

```php
// In class-chat-message.php

class Chat_Message {
    const TYPE_TEXT = 'text';
    const TYPE_SYSTEM = 'system';
    const TYPE_UPSELL = 'upsell';
    const TYPE_BLUEPRINT = 'blueprint';
    const TYPE_CUSTOM_CARD = 'custom_card'; // New type
    
    public function __construct($data) {
        $this->message_id = $data['message_id'] ?? null;
        $this->session_id = $data['session_id'];
        $this->sender = $data['sender'];
        $this->content = $data['content'];
        $this->type = $data['type'] ?? self::TYPE_TEXT;
        $this->metadata = $data['metadata'] ?? [];
        $this->timestamp = $data['timestamp'] ?? current_time('mysql');
    }
}
```

**2. Handle in frontend:**

```javascript
// In chat-interface.js

class ChatInterface {
    addMessage(content, sender, type = 'text', metadata = {}) {
        const messageEl = this.createMessageElement(content, sender, type, metadata);
        this.messagesContainer.appendChild(messageEl);
        this.scrollToBottom();
    }
    
    createMessageElement(content, sender, type, metadata) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `chat-message ${sender}-message ${type}-message`;
        
        switch (type) {
            case 'custom_card':
                messageDiv.innerHTML = this.renderCustomCard(content, metadata);
                break;
            // ... other types
            default:
                messageDiv.innerHTML = this.renderTextMessage(content);
        }
        
        return messageDiv;
    }
    
    renderCustomCard(content, metadata) {
        return `
            <div class="custom-card">
                <div class="card-header">${metadata.title || 'Information'}</div>
                <div class="card-body">${content}</div>
                <div class="card-actions">
                    ${this.renderCardActions(metadata.actions || [])}
                </div>
            </div>
        `;
    }
}
```

## Extending AI Service

### Adding Custom AI Prompts

**1. Register prompt template:**

```php
// In class-ai-service.php

class AI_Service {
    private function get_prompt_templates() {
        return apply_filters('mgrnz_ai_prompt_templates', [
            'clarification' => $this->get_clarification_prompt(),
            'blueprint' => $this->get_blueprint_prompt(),
            'estimate' => $this->get_estimate_prompt(),
            'custom_analysis' => $this->get_custom_analysis_prompt() // New
        ]);
    }
    
    private function get_custom_analysis_prompt() {
        return "You are analyzing a workflow for custom requirements.\n\n" .
               "Context: {context}\n" .
               "User input: {user_input}\n\n" .
               "Provide detailed analysis focusing on:\n" .
               "1. Technical feasibility\n" .
               "2. Resource requirements\n" .
               "3. Timeline estimation\n" .
               "4. Risk assessment\n";
    }
}
```

**2. Use custom prompt:**

```php
public function generate_custom_analysis($context, $user_input) {
    $templates = $this->get_prompt_templates();
    $prompt = $templates['custom_analysis'];
    
    // Replace placeholders
    $prompt = str_replace('{context}', json_encode($context), $prompt);
    $prompt = str_replace('{user_input}', $user_input, $prompt);
    
    // Call AI service
    $response = $this->call_ai_api($prompt);
    
    return $this->parse_analysis_response($response);
}
```

### Adding Custom AI Response Parsers

```php
private function parse_analysis_response($response) {
    // Extract structured data from AI response
    $analysis = [
        'feasibility' => $this->extract_section($response, 'Technical feasibility'),
        'resources' => $this->extract_section($response, 'Resource requirements'),
        'timeline' => $this->extract_section($response, 'Timeline estimation'),
        'risks' => $this->extract_section($response, 'Risk assessment')
    ];
    
    // Apply custom filters
    return apply_filters('mgrnz_custom_analysis_parsed', $analysis, $response);
}

private function extract_section($text, $section_name) {
    // Use regex or string parsing to extract section
    $pattern = "/{$section_name}:?\s*(.+?)(?=\n\n|\z)/is";
    preg_match($pattern, $text, $matches);
    return trim($matches[1] ?? '');
}
```

## Creating Custom REST API Endpoints

### Register New Endpoint

```php
// In mgrnz-ai-workflow-endpoint.php

add_action('rest_api_init', function() {
    register_rest_route('mgrnz/v1', '/custom-action', [
        'methods' => 'POST',
        'callback' => 'mgrnz_handle_custom_action',
        'permission_callback' => 'mgrnz_verify_session',
        'args' => [
            'session_id' => [
                'required' => true,
                'type' => 'string',
                'validate_callback' => 'mgrnz_validate_session_id'
            ],
            'action_data' => [
                'required' => true,
                'type' => 'object'
            ]
        ]
    ]);
});

function mgrnz_handle_custom_action($request) {
    $session_id = $request->get_param('session_id');
    $action_data = $request->get_param('action_data');
    
    try {
        // Load conversation manager
        $session = Conversation_Session::load($session_id);
        $manager = new Conversation_Manager($session);
        
        // Process custom action
        $result = $manager->process_custom_action($action_data);
        
        return new WP_REST_Response([
            'success' => true,
            'data' => $result
        ], 200);
        
    } catch (Exception $e) {
        return new WP_REST_Response([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}
```

### Call from Frontend

```javascript
// In custom-integration.js

async function performCustomAction(sessionId, actionData) {
    try {
        const response = await fetch('/wp-json/mgrnz/v1/custom-action', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': wpApiSettings.nonce
            },
            body: JSON.stringify({
                session_id: sessionId,
                action_data: actionData
            })
        });
        
        if (!response.ok) {
            throw new Error('API request failed');
        }
        
        const data = await response.json();
        return data;
        
    } catch (error) {
        console.error('Custom action failed:', error);
        throw error;
    }
}
```

## WordPress Hooks and Filters

### Available Actions

```php
// Conversation lifecycle
do_action('mgrnz_conversation_started', $session_id, $wizard_data);
do_action('mgrnz_conversation_state_changed', $session_id, $old_state, $new_state);
do_action('mgrnz_conversation_completed', $session_id, $outcome);

// Message events
do_action('mgrnz_message_sent', $message_id, $session_id, $content);
do_action('mgrnz_message_received', $message_id, $session_id, $content);

// Blueprint events
do_action('mgrnz_blueprint_generation_started', $session_id);
do_action('mgrnz_blueprint_generated', $session_id, $blueprint_id);
do_action('mgrnz_blueprint_downloaded', $session_id, $blueprint_id, $user_email);

// Upsell events
do_action('mgrnz_upsell_presented', $session_id, $upsell_type);
do_action('mgrnz_upsell_accepted', $session_id, $upsell_type);
do_action('mgrnz_upsell_declined', $session_id, $upsell_type);

// Quote events
do_action('mgrnz_quote_requested', $quote_id, $session_id, $contact_details);
do_action('mgrnz_quote_completed', $quote_id);

// Error events
do_action('mgrnz_conversation_error', $session_id, $error_message, $error_code);
do_action('mgrnz_blueprint_generation_failed', $session_id, $error);
```

### Available Filters

```php
// Conversation customization
apply_filters('mgrnz_conversation_paths', $paths);
apply_filters('mgrnz_timeout_duration', $duration, $session_id);
apply_filters('mgrnz_assistant_name', $name, $wizard_data);

// Message customization
apply_filters('mgrnz_clarification_questions', $questions, $wizard_data);
apply_filters('mgrnz_upsell_messages', $messages, $session_id);
apply_filters('mgrnz_assistant_response', $response, $user_message, $session_id);

// Blueprint customization
apply_filters('mgrnz_blueprint_content', $content, $wizard_data, $clarifications);
apply_filters('mgrnz_diagram_style', $style, $blueprint_data);
apply_filters('mgrnz_pdf_template', $template, $blueprint_id);

// Estimate customization
apply_filters('mgrnz_estimate_calculation', $estimate, $blueprint_data);
apply_filters('mgrnz_estimate_format', $formatted_estimate, $raw_estimate);

// UI customization
apply_filters('mgrnz_progress_messages', $messages, $assistant_name);
apply_filters('mgrnz_chat_interface_config', $config);
apply_filters('mgrnz_subscription_form_fields', $fields);
```

### Example: Custom Hook Usage

**Add custom analytics tracking:**

```php
// In your custom plugin or theme functions.php

add_action('mgrnz_conversation_completed', 'track_conversation_completion', 10, 2);

function track_conversation_completion($session_id, $outcome) {
    // Send to custom analytics service
    $session = Conversation_Session::load($session_id);
    
    $analytics_data = [
        'session_id' => $session_id,
        'duration' => $session->get_duration(),
        'message_count' => count($session->message_history),
        'outcome' => $outcome,
        'upsells_accepted' => $session->get_upsell_count(),
        'blueprint_downloaded' => $session->blueprint_downloaded
    ];
    
    // Send to your analytics platform
    send_to_analytics_platform($analytics_data);
}
```

**Customize clarification questions:**

```php
add_filter('mgrnz_clarification_questions', 'add_industry_specific_questions', 10, 2);

function add_industry_specific_questions($questions, $wizard_data) {
    // Detect industry from wizard data
    $industry = detect_industry($wizard_data['workflow']);
    
    // Add industry-specific questions
    if ($industry === 'ecommerce') {
        $questions[] = "What's your average order volume per day?";
        $questions[] = "Which payment gateways do you use?";
    } elseif ($industry === 'healthcare') {
        $questions[] = "Do you need HIPAA compliance?";
        $questions[] = "What patient management system do you use?";
    }
    
    return $questions;
}
```

## Extending Frontend Components

### Custom Chat Interface Plugins

```javascript
// Create a plugin for chat interface

class ChatInterfacePlugin {
    constructor(chatInterface) {
        this.chatInterface = chatInterface;
        this.init();
    }
    
    init() {
        // Hook into chat events
        this.chatInterface.on('message:sent', this.onMessageSent.bind(this));
        this.chatInterface.on('message:received', this.onMessageReceived.bind(this));
    }
    
    onMessageSent(message) {
        // Custom logic when user sends message
        console.log('User sent:', message);
    }
    
    onMessageReceived(message) {
        // Custom logic when assistant responds
        console.log('Assistant responded:', message);
    }
}

// Register plugin
ChatInterface.registerPlugin('customPlugin', ChatInterfacePlugin);

// Use in initialization
const chat = new ChatInterface('#chat-container', 'Assistant Name');
chat.usePlugin('customPlugin');
```

### Custom Message Renderers

```javascript
// Register custom message renderer

ChatInterface.registerMessageRenderer('product_card', function(content, metadata) {
    return `
        <div class="product-card">
            <img src="${metadata.image}" alt="${metadata.name}">
            <h4>${metadata.name}</h4>
            <p>${content}</p>
            <div class="price">${metadata.price}</div>
            <button onclick="addToCart('${metadata.id}')">Add to Cart</button>
        </div>
    `;
});

// Use in message
chatInterface.addMessage(
    'Check out this automation package',
    'assistant',
    'product_card',
    {
        name: 'Premium Automation',
        image: '/path/to/image.jpg',
        price: '$2,999',
        id: 'prod_123'
    }
);
```

## Database Schema Extensions

### Adding Custom Tables

```php
// In your custom plugin activation

function create_custom_conversation_tables() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE {$wpdb->prefix}mgrnz_custom_data (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        session_id varchar(255) NOT NULL,
        data_type varchar(50) NOT NULL,
        data_value longtext NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY session_id (session_id),
        KEY data_type (data_type)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'create_custom_conversation_tables');
```

### Adding Custom Session Data

```php
// Extend Conversation_Session class

class Extended_Conversation_Session extends Conversation_Session {
    public $custom_data = [];
    
    public function set_custom_data($key, $value) {
        $this->custom_data[$key] = $value;
        $this->save_custom_data();
    }
    
    public function get_custom_data($key, $default = null) {
        return $this->custom_data[$key] ?? $default;
    }
    
    private function save_custom_data() {
        global $wpdb;
        
        foreach ($this->custom_data as $key => $value) {
            $wpdb->replace(
                $wpdb->prefix . 'mgrnz_custom_data',
                [
                    'session_id' => $this->session_id,
                    'data_type' => $key,
                    'data_value' => maybe_serialize($value)
                ],
                ['%s', '%s', '%s']
            );
        }
    }
}
```

## Testing Custom Extensions

### Unit Testing

```php
// tests/test-custom-conversation-path.php

class Test_Custom_Conversation_Path extends WP_UnitTestCase {
    public function test_expedited_path_triggers() {
        // Create test session
        $session = $this->create_test_session();
        $manager = new Conversation_Manager($session);
        
        // Send message with urgent keyword
        $response = $manager->process_user_response('This is urgent!');
        
        // Assert expedited path was triggered
        $this->assertTrue($session->get_priority());
        $this->assertEquals('BLUEPRINT_GENERATION', $manager->get_state());
    }
    
    private function create_test_session() {
        return Conversation_Session::create([
            'wizard_data' => [
                'goal' => 'Test goal',
                'workflow' => 'Test workflow'
            ]
        ]);
    }
}
```

### Integration Testing

```javascript
// tests/integration/test-custom-endpoint.js

describe('Custom Action Endpoint', () => {
    it('should process custom action successfully', async () => {
        const sessionId = await createTestSession();
        
        const response = await fetch('/wp-json/mgrnz/v1/custom-action', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                session_id: sessionId,
                action_data: { test: 'data' }
            })
        });
        
        expect(response.ok).toBe(true);
        const data = await response.json();
        expect(data.success).toBe(true);
    });
});
```

## Performance Optimization

### Caching Strategies

```php
// Cache AI responses

class AI_Service {
    private function get_cached_response($prompt_hash) {
        return wp_cache_get($prompt_hash, 'mgrnz_ai_responses');
    }
    
    private function cache_response($prompt_hash, $response) {
        wp_cache_set(
            $prompt_hash,
            $response,
            'mgrnz_ai_responses',
            HOUR_IN_SECONDS
        );
    }
    
    public function generate_response($prompt) {
        $prompt_hash = md5($prompt);
        
        // Check cache first
        $cached = $this->get_cached_response($prompt_hash);
        if ($cached !== false) {
            return $cached;
        }
        
        // Generate new response
        $response = $this->call_ai_api($prompt);
        
        // Cache for future use
        $this->cache_response($prompt_hash, $response);
        
        return $response;
    }
}
```

### Database Query Optimization

```php
// Optimize session loading

class Conversation_Session {
    public static function load_with_messages($session_id) {
        global $wpdb;
        
        // Single query to load session and messages
        $query = $wpdb->prepare("
            SELECT 
                s.*,
                GROUP_CONCAT(
                    CONCAT_WS('|', m.message_id, m.sender, m.content, m.timestamp)
                    ORDER BY m.timestamp
                    SEPARATOR '||'
                ) as messages
            FROM {$wpdb->prefix}mgrnz_conversation_sessions s
            LEFT JOIN {$wpdb->prefix}mgrnz_chat_messages m ON s.session_id = m.session_id
            WHERE s.session_id = %s
            GROUP BY s.session_id
        ", $session_id);
        
        $result = $wpdb->get_row($query);
        
        // Parse messages
        $session = new self($result);
        $session->parse_messages($result->messages);
        
        return $session;
    }
}
```

## Security Best Practices

### Input Validation

```php
function mgrnz_validate_custom_input($input) {
    // Sanitize
    $input = sanitize_textarea_field($input);
    
    // Validate length
    if (strlen($input) > 5000) {
        return new WP_Error('input_too_long', 'Input exceeds maximum length');
    }
    
    // Check for malicious content
    if (preg_match('/<script|javascript:/i', $input)) {
        return new WP_Error('invalid_input', 'Invalid input detected');
    }
    
    return $input;
}
```

### Rate Limiting Custom Endpoints

```php
function mgrnz_check_custom_rate_limit($session_id) {
    $key = 'custom_action_' . $session_id;
    $count = (int) get_transient($key);
    
    if ($count >= 10) {
        return new WP_Error('rate_limit', 'Rate limit exceeded');
    }
    
    set_transient($key, $count + 1, MINUTE_IN_SECONDS);
    return true;
}
```

## Debugging and Logging

### Enable Debug Mode

```php
// In wp-config.php
define('MGRNZ_DEBUG', true);
define('MGRNZ_DEBUG_LOG', true);

// In your code
if (defined('MGRNZ_DEBUG') && MGRNZ_DEBUG) {
    error_log('[MGRNZ Debug] Custom action executed: ' . json_encode($data));
}
```

### Custom Logging

```php
class Custom_Logger {
    public static function log($message, $level = 'info', $context = []) {
        if (!defined('MGRNZ_DEBUG_LOG') || !MGRNZ_DEBUG_LOG) {
            return;
        }
        
        $log_entry = sprintf(
            '[%s] [%s] %s %s',
            date('Y-m-d H:i:s'),
            strtoupper($level),
            $message,
            !empty($context) ? json_encode($context) : ''
        );
        
        error_log($log_entry);
        
        // Also store in database for admin viewing
        self::store_log_entry($log_entry, $level);
    }
}
```

## Deployment Checklist

### Before Deploying Extensions

- [ ] Test all custom endpoints
- [ ] Verify database migrations
- [ ] Check for PHP/JavaScript errors
- [ ] Test on staging environment
- [ ] Review security implications
- [ ] Update documentation
- [ ] Create rollback plan
- [ ] Test with real user data
- [ ] Verify performance impact
- [ ] Check mobile responsiveness

### After Deployment

- [ ] Monitor error logs
- [ ] Check analytics for issues
- [ ] Verify custom features working
- [ ] Test user flows end-to-end
- [ ] Monitor performance metrics
- [ ] Gather user feedback
- [ ] Document any issues
- [ ] Plan improvements

## Resources

### Code Examples

Full code examples available in:
- `mu-plugins/examples/` directory
- GitHub repository: [link]
- Developer documentation site: [link]

### Support

- Developer forum: [link]
- Slack channel: #ai-workflow-dev
- Email: dev-support@example.com

### Contributing

See `CONTRIBUTING.md` for guidelines on:
- Code standards
- Pull request process
- Testing requirements
- Documentation requirements
