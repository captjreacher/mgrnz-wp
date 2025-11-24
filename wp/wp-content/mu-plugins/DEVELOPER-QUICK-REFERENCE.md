# Developer Quick Reference Guide
## AI Workflow Wizard System

Quick reference for developers working with the AI Workflow Wizard codebase.

---

## File Structure

```
mu-plugins/
├── mgrnz-ai-workflow-wizard.php          # Main plugin file
├── mgrnz-ai-workflow-endpoint.php        # REST API endpoint
├── config/
│   └── ai-workflow-config.php            # Configuration settings
├── includes/
│   ├── class-ai-service.php              # AI API integration
│   ├── class-email-service.php           # Email delivery
│   ├── class-submission-cpt.php          # Custom post type
│   ├── class-ai-settings.php             # Admin settings
│   ├── class-blueprint-cache.php         # Caching system
│   ├── class-error-logger.php            # Error logging
│   └── class-submission-dashboard.php    # Analytics dashboard
├── assets/
│   ├── css/
│   │   ├── logs-admin.css                # Error logs styling
│   │   └── dashboard-admin.css           # Dashboard styling
│   └── js/
│       ├── logs-admin.js                 # Error logs functionality
│       └── dashboard-admin.js            # Dashboard functionality
└── views/
    └── logs-admin.php                    # Error logs template

themes/mgrnz-theme/
└── assets/
    └── js/
        └── wizard-controller.js          # Frontend wizard logic
```

---

## Key Classes

### MGRNZ_AI_Service

**Purpose:** Handles AI API communication

**Key Methods:**
```php
// Generate blueprint from user data
public function generate_blueprint($workflow_data): array

// Test API connection
public function test_connection(): array

// Build prompt from workflow data
private function build_prompt($workflow_data): string

// Call OpenAI API
private function call_openai_api($prompt): array

// Call Anthropic API
private function call_anthropic_api($prompt): array

// Parse AI response
private function parse_response($raw_response): array
```

**Usage Example:**
```php
$ai_service = new MGRNZ_AI_Service();
$blueprint = $ai_service->generate_blueprint([
    'goal' => 'Automate customer support',
    'workflow_description' => 'Manual email responses',
    'tools' => 'Gmail, Zendesk',
    'pain_points' => 'Time-consuming, repetitive'
]);
```

---

### MGRNZ_Email_Service

**Purpose:** Handles email delivery

**Key Methods:**
```php
// Send blueprint email to user
public function send_blueprint_email($to, $blueprint): bool

// Send subscription confirmation
public function send_subscription_confirmation($email): bool

// Get email template
private function get_email_template(): string

// Replace template variables
private function replace_template_variables($template, $data): string
```

**Usage Example:**
```php
$email_service = new MGRNZ_Email_Service();
$result = $email_service->send_blueprint_email(
    'user@example.com',
    $blueprint
);
```

---

### MGRNZ_Submission_CPT

**Purpose:** Manages submission custom post type

**Key Methods:**
```php
// Register custom post type
public function register_post_type(): void

// Register meta fields
public function register_meta_fields(): void

// Add admin columns
public function add_admin_columns($columns): array

// Render admin column content
public function render_admin_columns($column, $post_id): void

// Add meta boxes
public function add_meta_boxes(): void
```

**Usage Example:**
```php
$submission_cpt = new MGRNZ_Submission_CPT();
// Automatically registers on init
```

---

### MGRNZ_Blueprint_Cache

**Purpose:** Caches generated blueprints

**Key Methods:**
```php
// Get cached blueprint
public function get($data_hash): ?array

// Store blueprint in cache
public function set($data_hash, $blueprint): bool

// Generate hash from submission data
public function generate_hash($data): string

// Clear cache
public function clear($data_hash = null): bool

// Check if caching is enabled
public function is_enabled(): bool
```

**Usage Example:**
```php
$cache = new MGRNZ_Blueprint_Cache();
$hash = $cache->generate_hash($submission_data);

// Try to get from cache
$blueprint = $cache->get($hash);

if (!$blueprint) {
    // Generate new blueprint
    $blueprint = $ai_service->generate_blueprint($submission_data);
    
    // Store in cache
    $cache->set($hash, $blueprint);
}
```

---

### MGRNZ_Error_Logger

**Purpose:** Logs errors and events

**Key Methods:**
```php
// Log error
public static function log_error($type, $message, $context = []): void

// Log success
public static function log_success($message, $context = []): void

// Get recent logs
public static function get_logs($args = []): array

// Clear logs
public static function clear_logs($before_date = null): bool

// Export logs
public static function export_logs($args = []): string
```

**Usage Example:**
```php
// Log error
MGRNZ_Error_Logger::log_error(
    'ai_service_error',
    'Failed to generate blueprint',
    [
        'email' => $user_email,
        'error' => $exception->getMessage()
    ]
);

// Log success
MGRNZ_Error_Logger::log_success(
    'Blueprint generated successfully',
    [
        'submission_id' => $post_id,
        'tokens_used' => $tokens,
        'processing_time' => $time
    ]
);
```

---

## REST API Endpoint

### Endpoint Details

**URL:** `/wp-json/mgrnz/v1/ai-workflow`

**Method:** `POST`

**Handler Function:** `mgrnz_handle_ai_workflow_submission()`

**File:** `mu-plugins/mgrnz-ai-workflow-endpoint.php`

### Request Format

```json
{
  "goal": "string (required, max 500 chars)",
  "workflow_description": "string (required, max 2000 chars)",
  "tools": "string (required, max 500 chars)",
  "pain_points": "string (required, max 1000 chars)",
  "email": "string (optional, valid email)"
}
```

### Response Format

**Success (200):**
```json
{
  "status": "success",
  "submission_id": 123,
  "blueprint": {
    "summary": "Brief overview",
    "content": "Full markdown content",
    "generated_at": "2024-11-20 10:30:00",
    "ai_model": "gpt-4",
    "tokens_used": 1500
  },
  "email_sent": true,
  "cached": false
}
```

**Error (400/429/500):**
```json
{
  "status": "error",
  "message": "Error description",
  "code": "error_code"
}
```

### Error Codes

- `validation_failed` - Invalid input data
- `rate_limit_exceeded` - Too many requests
- `ai_service_error` - AI API failure
- `email_error` - Email delivery failure
- `database_error` - Database operation failure

---

## Configuration

### Environment Variables

```bash
# AI Provider Configuration
MGRNZ_AI_PROVIDER=openai              # or 'anthropic'
MGRNZ_AI_API_KEY=sk-...               # API key
MGRNZ_AI_MODEL=gpt-4                  # Model name
MGRNZ_AI_MAX_TOKENS=2000              # Max response length
MGRNZ_AI_TEMPERATURE=0.7              # Creativity (0-1)

# System Configuration
MGRNZ_ENABLE_CACHE=true               # Enable caching
MGRNZ_ENABLE_EMAILS=true              # Enable email sending
MGRNZ_RATE_LIMIT=3                    # Submissions per hour per IP
MGRNZ_DEBUG=false                     # Debug mode
```

### wp-config.php Constants

```php
// AI Configuration
define('MGRNZ_AI_PROVIDER', 'openai');
define('MGRNZ_AI_API_KEY', 'sk-...');
define('MGRNZ_AI_MODEL', 'gpt-4');

// System Configuration
define('MGRNZ_ENABLE_CACHE', true);
define('MGRNZ_ENABLE_EMAILS', true);
define('MGRNZ_RATE_LIMIT', 3);
define('MGRNZ_AI_DEBUG', false);
```

### WordPress Options

```php
// Get configuration value
$provider = get_option('mgrnz_ai_provider', 'openai');
$api_key = get_option('mgrnz_ai_api_key', '');
$model = get_option('mgrnz_ai_model', 'gpt-4');

// Update configuration
update_option('mgrnz_ai_provider', 'anthropic');
update_option('mgrnz_ai_api_key', 'sk-ant-...');
update_option('mgrnz_ai_model', 'claude-3-opus-20240229');
```

---

## Database Schema

### Custom Post Type: ai_workflow_sub

**Post Fields:**
- `ID` - Post ID
- `post_title` - Auto-generated title
- `post_content` - Blueprint content
- `post_date` - Submission date
- `post_status` - Always 'publish'

**Meta Fields:**
- `_mgrnz_goal` - User's goal
- `_mgrnz_workflow_description` - Workflow details
- `_mgrnz_tools` - Tools being used
- `_mgrnz_pain_points` - Challenges
- `_mgrnz_email` - User email
- `_mgrnz_blueprint_summary` - Blueprint summary
- `_mgrnz_blueprint_content` - Full blueprint
- `_mgrnz_generated_at` - Generation timestamp
- `_mgrnz_ai_model` - AI model used
- `_mgrnz_tokens_used` - Token count
- `_mgrnz_email_sent` - Email status (boolean)
- `_mgrnz_ip_address` - User IP
- `_mgrnz_user_agent` - Browser info

### Transients

**Blueprint Cache:**
- Key: `blueprint_{hash}`
- Value: Blueprint array
- Expiration: 7 days

**Rate Limiting:**
- Key: `ai_workflow_rate_{ip_hash}`
- Value: Submission count
- Expiration: 1 hour

---

## WordPress Hooks

### Actions

```php
// Before blueprint generation
do_action('mgrnz_before_blueprint_generation', $submission_data);

// After blueprint generation
do_action('mgrnz_after_blueprint_generation', $submission_id, $blueprint);

// Before email send
do_action('mgrnz_before_email_send', $email, $blueprint);

// After email send
do_action('mgrnz_after_email_send', $email, $success);

// On submission save
do_action('mgrnz_submission_saved', $post_id, $submission_data);

// On error
do_action('mgrnz_error_logged', $type, $message, $context);
```

### Filters

```php
// Modify AI prompt
$prompt = apply_filters('mgrnz_ai_prompt', $prompt, $workflow_data);

// Modify blueprint before saving
$blueprint = apply_filters('mgrnz_blueprint_content', $blueprint, $submission_data);

// Modify email subject
$subject = apply_filters('mgrnz_email_subject', $subject, $blueprint);

// Modify email template
$template = apply_filters('mgrnz_email_template', $template, $blueprint);

// Modify rate limit
$limit = apply_filters('mgrnz_rate_limit', 3, $ip_address);

// Modify cache duration
$duration = apply_filters('mgrnz_cache_duration', 7 * DAY_IN_SECONDS);
```

### Usage Examples

```php
// Add custom data to blueprint
add_filter('mgrnz_blueprint_content', function($blueprint, $data) {
    $blueprint['custom_field'] = 'custom value';
    return $blueprint;
}, 10, 2);

// Modify email subject
add_filter('mgrnz_email_subject', function($subject) {
    return '[MGRNZ] ' . $subject;
});

// Log all submissions
add_action('mgrnz_submission_saved', function($post_id, $data) {
    error_log('New submission: ' . $post_id);
}, 10, 2);

// Increase rate limit for specific IPs
add_filter('mgrnz_rate_limit', function($limit, $ip) {
    $whitelist = ['123.456.789.0'];
    if (in_array($ip, $whitelist)) {
        return 999; // Unlimited
    }
    return $limit;
}, 10, 2);
```

---

## JavaScript API

### WizardController Class

**File:** `themes/mgrnz-theme/assets/js/wizard-controller.js`

**Constructor:**
```javascript
const wizard = new WizardController(formElement);
```

**Public Methods:**
```javascript
// Navigate to next step
wizard.nextStep();

// Navigate to previous step
wizard.previousStep();

// Go to specific step
wizard.goToStep(3);

// Validate current step
const isValid = wizard.validateCurrentStep();

// Submit wizard
wizard.submitWizard();

// Show error message
wizard.showError('Error message');

// Clear errors
wizard.clearErrors();

// Render blueprint
wizard.renderBlueprint(blueprintData);
```

**Events:**
```javascript
// Listen for wizard events
document.addEventListener('wizard:step-changed', (e) => {
    console.log('Step changed to:', e.detail.step);
});

document.addEventListener('wizard:submitted', (e) => {
    console.log('Wizard submitted:', e.detail.data);
});

document.addEventListener('wizard:error', (e) => {
    console.log('Wizard error:', e.detail.message);
});
```

---

## Common Tasks

### Add Custom Validation

```php
// In mgrnz-ai-workflow-endpoint.php
function mgrnz_validate_submission_data($data) {
    $errors = [];
    
    // Add custom validation
    if (strlen($data['goal']) < 10) {
        $errors['goal'] = 'Goal must be at least 10 characters';
    }
    
    // Custom business logic
    if (strpos($data['email'], '@competitor.com') !== false) {
        $errors['email'] = 'Invalid email domain';
    }
    
    if (!empty($errors)) {
        return new WP_Error('validation_failed', 'Validation failed', $errors);
    }
    
    return $data;
}
```

### Customize AI Prompt

```php
// In includes/class-ai-service.php
private function build_prompt($workflow_data) {
    $prompt = "You are an AI workflow consultant.\n\n";
    
    // Add custom instructions
    $prompt .= "IMPORTANT GUIDELINES:\n";
    $prompt .= "- Focus on practical, actionable advice\n";
    $prompt .= "- Recommend specific tools by name\n";
    $prompt .= "- Include cost estimates where relevant\n";
    $prompt .= "- Prioritize quick wins\n\n";
    
    // Add user data
    $prompt .= "USER INFORMATION:\n";
    $prompt .= "- Goal: {$workflow_data['goal']}\n";
    // ... rest of prompt
    
    return $prompt;
}
```

### Add Custom Meta Field

```php
// In includes/class-submission-cpt.php
public function register_meta_fields() {
    // Existing fields...
    
    // Add custom field
    register_post_meta('ai_workflow_sub', '_mgrnz_industry', [
        'type' => 'string',
        'single' => true,
        'show_in_rest' => true,
        'sanitize_callback' => 'sanitize_text_field'
    ]);
}

// Save custom field
public function save_submission($data) {
    $post_id = wp_insert_post([...]);
    
    // Save custom meta
    update_post_meta($post_id, '_mgrnz_industry', $data['industry']);
    
    return $post_id;
}
```

### Add Custom Admin Column

```php
// In includes/class-submission-cpt.php
public function add_admin_columns($columns) {
    $columns['industry'] = 'Industry';
    return $columns;
}

public function render_admin_columns($column, $post_id) {
    if ($column === 'industry') {
        $industry = get_post_meta($post_id, '_mgrnz_industry', true);
        echo esc_html($industry ?: 'N/A');
    }
}
```

### Customize Email Template

```php
// In includes/class-email-service.php
private function get_email_template() {
    ob_start();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            /* Custom styles */
            .custom-header {
                background: #your-brand-color;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="custom-header">
            <img src="your-logo.png" alt="Logo">
        </div>
        <div class="content">
            {{BLUEPRINT_CONTENT}}
        </div>
        <div class="footer">
            <p>Custom footer text</p>
        </div>
    </body>
    </html>
    <?php
    return ob_get_clean();
}
```

---

## Testing

### Test AI Service

```php
// Test connection
$ai_service = new MGRNZ_AI_Service();
$result = $ai_service->test_connection();
var_dump($result);

// Test blueprint generation
$test_data = [
    'goal' => 'Test goal',
    'workflow_description' => 'Test workflow',
    'tools' => 'Test tools',
    'pain_points' => 'Test pain points'
];
$blueprint = $ai_service->generate_blueprint($test_data);
var_dump($blueprint);
```

### Test Email Service

```php
// Test email sending
$email_service = new MGRNZ_Email_Service();
$result = $email_service->send_blueprint_email(
    'test@example.com',
    [
        'summary' => 'Test summary',
        'content' => 'Test content'
    ]
);
var_dump($result);
```

### Test REST Endpoint

```bash
# Using curl
curl -X POST https://yoursite.com/wp-json/mgrnz/v1/ai-workflow \
  -H "Content-Type: application/json" \
  -d '{
    "goal": "Test goal",
    "workflow_description": "Test workflow",
    "tools": "Test tools",
    "pain_points": "Test pain points",
    "email": "test@example.com"
  }'
```

```javascript
// Using JavaScript
fetch('/wp-json/mgrnz/v1/ai-workflow', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        goal: 'Test goal',
        workflow_description: 'Test workflow',
        tools: 'Test tools',
        pain_points: 'Test pain points',
        email: 'test@example.com'
    })
})
.then(r => r.json())
.then(console.log);
```

---

## Debugging

### Enable Debug Mode

```php
// In wp-config.php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('MGRNZ_AI_DEBUG', true);
```

### Add Debug Logging

```php
// Log to debug.log
error_log('Debug message: ' . print_r($data, true));

// Log with context
MGRNZ_Error_Logger::log_error(
    'debug',
    'Debug message',
    ['data' => $data]
);
```

### Debug JavaScript

```javascript
// Enable verbose logging
console.log('Wizard state:', wizard);
console.log('Form data:', wizard.formData);
console.log('Current step:', wizard.currentStep);

// Debug API calls
fetch(url, options)
    .then(r => {
        console.log('Response status:', r.status);
        return r.json();
    })
    .then(data => {
        console.log('Response data:', data);
    })
    .catch(err => {
        console.error('Request failed:', err);
    });
```

---

## Performance Optimization

### Enable Caching

```php
// In config/ai-workflow-config.php
'enable_caching' => true,
'cache_duration' => 7 * DAY_IN_SECONDS,
```

### Optimize Database Queries

```php
// Use efficient queries
$args = [
    'post_type' => 'ai_workflow_sub',
    'posts_per_page' => 20,
    'no_found_rows' => true,
    'update_post_meta_cache' => false,
    'update_post_term_cache' => false,
];
```

### Minify JavaScript

```bash
# Install uglify-js
npm install -g uglify-js

# Minify wizard controller
uglifyjs wizard-controller.js -o wizard-controller.min.js -c -m
```

---

## Security Best Practices

1. **Never expose API keys in frontend**
2. **Always sanitize user input**
3. **Use nonce verification for AJAX**
4. **Implement rate limiting**
5. **Validate all data server-side**
6. **Use prepared statements for database queries**
7. **Escape output when displaying**
8. **Store sensitive data in wp-config.php**
9. **Use HTTPS for all API calls**
10. **Log security events**

---

*Last Updated: November 2024*
*Version: 1.0.0*
