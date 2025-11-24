# AI Workflow Wizard - Complete Documentation

## Table of Contents

1. [Overview](#overview)
2. [Setup Instructions](#setup-instructions)
3. [Configuration](#configuration)
4. [WordPress Admin Guide](#wordpress-admin-guide)
5. [Troubleshooting](#troubleshooting)
6. [API Reference](#api-reference)
7. [Development Guide](#development-guide)

---

## Overview

The AI Workflow Wizard is a comprehensive system that helps website visitors analyze their workflows and receive AI-generated recommendations. The system consists of:

- **Frontend Wizard**: A 5-step form that collects user workflow information
- **AI Integration**: Connects to OpenAI or Anthropic to generate personalized blueprints
- **Data Persistence**: Stores all submissions in WordPress custom post types
- **Email Delivery**: Sends blueprints to users via email
- **Admin Dashboard**: Provides analytics and submission management

### System Requirements

- WordPress 5.8 or higher
- PHP 7.4 or higher
- Active theme with JavaScript support
- OpenAI or Anthropic API account
- SMTP configured for email delivery (recommended)

---

## Setup Instructions

### 1. Initial Installation

The AI Workflow Wizard is installed as a must-use plugin. All files should be in the `wp-content/mu-plugins/` directory.

**Required Files:**
```
mu-plugins/
├── mgrnz-ai-workflow-wizard.php (main plugin file)
├── mgrnz-ai-workflow-endpoint.php (REST API)
├── config/
│   └── ai-workflow-config.php
├── includes/
│   ├── class-ai-service.php
│   ├── class-email-service.php
│   ├── class-submission-cpt.php
│   ├── class-ai-settings.php
│   ├── class-blueprint-cache.php
│   ├── class-error-logger.php
│   └── class-submission-dashboard.php
├── assets/
│   ├── css/
│   │   ├── logs-admin.css
│   │   └── dashboard-admin.css
│   └── js/
│       ├── logs-admin.js
│       └── dashboard-admin.js
└── views/
    └── logs-admin.php
```

### 2. AI API Key Setup

#### Option A: Using wp-config.php (Recommended)

Add your API key to `wp-config.php`:

```php
// OpenAI Configuration
define('MGRNZ_AI_PROVIDER', 'openai');
define('MGRNZ_AI_API_KEY', 'sk-your-openai-api-key-here');
define('MGRNZ_AI_MODEL', 'gpt-4');

// OR Anthropic Configuration
define('MGRNZ_AI_PROVIDER', 'anthropic');
define('MGRNZ_AI_API_KEY', 'sk-ant-your-anthropic-api-key-here');
define('MGRNZ_AI_MODEL', 'claude-3-opus-20240229');
```

#### Option B: Using WordPress Admin Settings

1. Navigate to **Settings > AI Workflow Settings** in WordPress admin
2. Select your AI provider (OpenAI or Anthropic)
3. Enter your API key
4. Choose your preferred model
5. Click **Save Changes**

**Note:** Settings in `wp-config.php` take precedence over admin settings for security.

### 3. Environment Variables (Optional)

For advanced configurations, you can use environment variables:

```bash
# .env file or server environment
MGRNZ_AI_PROVIDER=openai
MGRNZ_AI_API_KEY=sk-your-api-key
MGRNZ_AI_MODEL=gpt-4
MGRNZ_AI_MAX_TOKENS=2000
MGRNZ_AI_TEMPERATURE=0.7
MGRNZ_ENABLE_CACHE=true
MGRNZ_ENABLE_EMAILS=true
MGRNZ_RATE_LIMIT=3
```

### 4. Email Configuration

For reliable email delivery, configure SMTP:

**Recommended Plugins:**
- WP Mail SMTP
- Easy WP SMTP
- Post SMTP

**Configuration Steps:**
1. Install an SMTP plugin
2. Configure with your email provider (Gmail, SendGrid, Mailgun, etc.)
3. Test email delivery from the plugin settings
4. Verify blueprint emails are being sent

### 5. Frontend Integration

The wizard JavaScript is automatically enqueued on the page with slug `start-using-ai`.

**Verify Integration:**
1. Create or edit a page with slug: `start-using-ai`
2. Add the wizard HTML (should already exist in your theme)
3. Visit the page and test the wizard functionality

---

## Configuration

### AI Provider Settings

#### OpenAI Configuration

```php
// In wp-config.php or admin settings
AI Provider: openai
API Key: sk-...
Model Options:
  - gpt-4 (recommended for best quality)
  - gpt-4-turbo (faster, lower cost)
  - gpt-3.5-turbo (fastest, lowest cost)
Max Tokens: 2000 (default)
Temperature: 0.7 (default, range 0-1)
```

**Cost Estimates (as of 2024):**
- GPT-4: ~$0.06 per blueprint
- GPT-4 Turbo: ~$0.02 per blueprint
- GPT-3.5 Turbo: ~$0.004 per blueprint

#### Anthropic Configuration

```php
// In wp-config.php or admin settings
AI Provider: anthropic
API Key: sk-ant-...
Model Options:
  - claude-3-opus-20240229 (highest quality)
  - claude-3-sonnet-20240229 (balanced)
  - claude-3-haiku-20240307 (fastest)
Max Tokens: 2000 (default)
Temperature: 0.7 (default, range 0-1)
```

### Caching Configuration

Blueprint caching reduces AI API calls and costs:

```php
// In config/ai-workflow-config.php
'enable_caching' => true,  // Enable/disable caching
'cache_duration' => 7 * DAY_IN_SECONDS,  // 7 days default
```

**How Caching Works:**
- Identical submissions (same goal, workflow, tools, pain points) return cached blueprints
- Cache key is generated from MD5 hash of submission data
- Cached blueprints expire after 7 days
- Admin users can bypass cache for testing

### Rate Limiting

Prevent abuse with rate limiting:

```php
// In config/ai-workflow-config.php
'rate_limit' => 3,  // Max submissions per hour per IP
'rate_limit_duration' => HOUR_IN_SECONDS,
```

### Email Templates

Customize email templates in `includes/class-email-service.php`:

```php
// Email subject
$subject = 'Your AI Workflow Blueprint from MGRNZ';

// Customize HTML template
private function get_email_template() {
    // Modify HTML structure and styling
}
```

---

## WordPress Admin Guide

### Viewing Submissions

1. Navigate to **AI Workflow Submissions** in the WordPress admin menu
2. View list of all submissions with:
   - Submission date
   - User email
   - Goal preview
   - Email sent status

### Viewing Individual Submissions

Click on any submission to view:
- Complete user input (goal, workflow, tools, pain points)
- Generated blueprint
- Submission metadata (date, IP, user agent)
- Email delivery status

### Searching and Filtering

Use the admin list view to:
- Search by email or goal keywords
- Filter by date range
- Sort by submission date
- Export data (if export functionality is enabled)

### AI Workflow Settings

Access via **Settings > AI Workflow Settings**:

1. **AI Provider**: Choose OpenAI or Anthropic
2. **API Key**: Enter your API key (masked for security)
3. **Model**: Select AI model
4. **Advanced Settings**:
   - Max Tokens: Control response length
   - Temperature: Adjust creativity (0 = focused, 1 = creative)
5. **Test Connection**: Verify API credentials work

### Error Logs

View system errors and API issues:

1. Navigate to **AI Workflow > Error Logs**
2. View recent errors with:
   - Timestamp
   - Error type
   - Error message
   - Context (user email, submission ID)
3. Filter by error type or date range
4. Clear old logs to maintain performance

### Analytics Dashboard

View submission analytics:

1. Navigate to **AI Workflow > Dashboard**
2. See metrics:
   - Total submissions
   - Submissions by date range
   - Common pain points
   - Popular tools mentioned
   - AI API usage statistics
3. Export data for further analysis

---

## Troubleshooting

### Common Issues and Solutions

#### 1. Wizard Form Not Submitting

**Symptoms:**
- Submit button does nothing
- No loading indicator appears
- Console shows JavaScript errors

**Solutions:**

```javascript
// Check browser console for errors
// Common fixes:

// A. Verify REST API is accessible
fetch('/wp-json/mgrnz/v1/ai-workflow')
  .then(r => r.json())
  .then(console.log);

// B. Check if wizard-controller.js is loaded
console.log(typeof WizardController);

// C. Verify page slug is 'start-using-ai'
// The script only loads on this specific page
```

**WordPress Admin Checks:**
- Go to **Settings > Permalinks** and click "Save Changes" to flush rewrite rules
- Verify the page slug is exactly `start-using-ai`
- Check if JavaScript file exists: `themes/mgrnz-theme/assets/js/wizard-controller.js`

#### 2. AI API Errors

**Symptoms:**
- "Unable to generate blueprint" error message
- Submissions saved but no blueprint generated
- Error logs show API failures

**Solutions:**

**Check API Key:**
```php
// In wp-config.php, verify:
define('MGRNZ_AI_API_KEY', 'sk-...');  // Must start with sk-

// Test API key manually:
// Go to Settings > AI Workflow Settings
// Click "Test Connection" button
```

**Check API Quota:**
- OpenAI: Visit https://platform.openai.com/usage
- Anthropic: Visit https://console.anthropic.com/settings/usage
- Verify you have available credits

**Check Error Logs:**
```php
// View detailed error in WordPress admin
// AI Workflow > Error Logs

// Common errors:
// - "Invalid API key" → Check key format and validity
// - "Rate limit exceeded" → Wait or upgrade API plan
// - "Timeout" → Increase timeout or try different model
```

#### 3. Emails Not Sending

**Symptoms:**
- Blueprint displays on website but email not received
- Email sent status shows "false" in admin
- No email errors in logs

**Solutions:**

**Test WordPress Email:**
```php
// Add to functions.php temporarily:
wp_mail('your-email@example.com', 'Test', 'Testing email delivery');

// If this fails, WordPress email is not configured
```

**Configure SMTP:**
1. Install WP Mail SMTP plugin
2. Configure with your email provider
3. Test email delivery
4. Retry wizard submission

**Check Spam Folder:**
- Blueprint emails may be marked as spam
- Add sending domain to safe senders list

**Check Email Service Logs:**
```php
// View in AI Workflow > Error Logs
// Filter by type: "email_error"
```

#### 4. Rate Limiting Issues

**Symptoms:**
- "Too many requests" error
- Users blocked from submitting
- Rate limit errors in logs

**Solutions:**

**Adjust Rate Limit:**
```php
// In config/ai-workflow-config.php
'rate_limit' => 5,  // Increase from 3 to 5

// Or disable for testing:
'rate_limit' => 999,
```

**Clear Rate Limit for Specific IP:**
```php
// In WordPress admin, run in PHP console or add to functions.php:
$ip = '123.456.789.0';  // User's IP
delete_transient('ai_workflow_rate_' . md5($ip));
```

#### 5. Caching Issues

**Symptoms:**
- Same blueprint returned for different inputs
- Changes to prompts not reflected
- Stale data displayed

**Solutions:**

**Clear Blueprint Cache:**
```php
// In WordPress admin, run in PHP console:
global $wpdb;
$wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE '_transient_blueprint_%'");

// Or disable caching temporarily:
// In config/ai-workflow-config.php
'enable_caching' => false,
```

**Clear Specific Cache:**
```php
// If you know the submission data:
$cache_key = md5(json_encode($submission_data));
delete_transient('blueprint_' . $cache_key);
```

#### 6. JavaScript Console Errors

**Common Errors and Fixes:**

```javascript
// Error: "WizardController is not defined"
// Fix: Check if script is enqueued on correct page
// Verify page slug is 'start-using-ai'

// Error: "Failed to fetch"
// Fix: Check REST API endpoint is accessible
// Verify permalinks are set correctly

// Error: "Unexpected token < in JSON"
// Fix: PHP error is being returned instead of JSON
// Check error logs for PHP errors

// Error: "Cannot read property 'value' of null"
// Fix: Form field IDs don't match JavaScript selectors
// Verify HTML field IDs match wizard-controller.js
```

### Debug Mode

Enable debug mode for detailed logging:

```php
// In wp-config.php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

// Add custom debug flag
define('MGRNZ_AI_DEBUG', true);
```

View debug logs:
- File: `wp-content/debug.log`
- Or use Error Logs admin page

### Performance Issues

**Slow Blueprint Generation:**

```php
// Check AI API response time in logs
// If consistently slow:

// 1. Switch to faster model
'ai_model' => 'gpt-3.5-turbo',  // Instead of gpt-4

// 2. Reduce max tokens
'ai_max_tokens' => 1500,  // Instead of 2000

// 3. Enable caching
'enable_caching' => true,
```

**High Memory Usage:**

```php
// Increase PHP memory limit in wp-config.php
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');
```

---

## API Reference

### REST Endpoint

**Endpoint:** `POST /wp-json/mgrnz/v1/ai-workflow`

**Request Headers:**
```
Content-Type: application/json
X-WP-Nonce: {nonce}  // Optional but recommended
```

**Request Body:**
```json
{
  "goal": "Automate customer support responses",
  "workflow_description": "Currently manually responding to 50+ emails daily",
  "tools": "Gmail, Zendesk, Slack",
  "pain_points": "Time-consuming, repetitive questions, slow response time",
  "email": "user@example.com"
}
```

**Success Response (200):**
```json
{
  "status": "success",
  "submission_id": 123,
  "blueprint": {
    "summary": "AI-powered customer support automation strategy",
    "content": "# Workflow Analysis\n\n..."
  },
  "email_sent": true,
  "cached": false
}
```

**Error Response (400):**
```json
{
  "status": "error",
  "message": "Please fill in all required fields",
  "code": "validation_failed",
  "field": "goal"
}
```

**Error Response (429):**
```json
{
  "status": "error",
  "message": "Too many requests. Please try again in 45 minutes.",
  "code": "rate_limit_exceeded",
  "retry_after": 2700
}
```

**Error Response (500):**
```json
{
  "status": "error",
  "message": "Unable to generate blueprint. Please try again.",
  "code": "ai_service_error"
}
```

### Field Validation Rules

| Field | Required | Max Length | Validation |
|-------|----------|------------|------------|
| goal | Yes | 500 chars | Non-empty string |
| workflow_description | Yes | 2000 chars | Non-empty string |
| tools | Yes | 500 chars | Non-empty string |
| pain_points | Yes | 1000 chars | Non-empty string |
| email | No | 254 chars | Valid email format |

---

## Development Guide

### Adding Custom Prompt Templates

Modify the AI prompt in `includes/class-ai-service.php`:

```php
private function build_prompt($workflow_data) {
    // Customize the prompt structure
    $prompt = "You are an AI workflow consultant...\n\n";
    
    // Add custom sections
    $prompt .= "INDUSTRY CONTEXT:\n";
    $prompt .= "- Industry: " . $workflow_data['industry'] . "\n\n";
    
    // Modify output format
    $prompt .= "Generate a blueprint with these sections:\n";
    $prompt .= "1. Executive Summary\n";
    $prompt .= "2. Current State Analysis\n";
    // ... add more sections
    
    return $prompt;
}
```

### Customizing Email Templates

Edit `includes/class-email-service.php`:

```php
private function get_email_template() {
    ob_start();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            /* Add your custom styles */
            .custom-header { background: #your-color; }
        </style>
    </head>
    <body>
        <!-- Customize HTML structure -->
    </body>
    </html>
    <?php
    return ob_get_clean();
}
```

### Adding Custom Meta Fields

Extend submission data in `includes/class-submission-cpt.php`:

```php
// Register new meta field
register_post_meta('ai_workflow_sub', '_mgrnz_industry', [
    'type' => 'string',
    'single' => true,
    'show_in_rest' => true,
]);

// Save custom field
update_post_meta($post_id, '_mgrnz_industry', $industry);

// Display in admin
add_meta_box('industry_meta', 'Industry', 'render_industry_meta', 'ai_workflow_sub');
```

### Extending the Dashboard

Add custom analytics in `includes/class-submission-dashboard.php`:

```php
public function get_custom_metric() {
    global $wpdb;
    
    // Query custom data
    $results = $wpdb->get_results("
        SELECT meta_value, COUNT(*) as count
        FROM {$wpdb->postmeta}
        WHERE meta_key = '_mgrnz_custom_field'
        GROUP BY meta_value
        ORDER BY count DESC
        LIMIT 10
    ");
    
    return $results;
}
```

### Hooks and Filters

Available WordPress hooks:

```php
// Before blueprint generation
do_action('mgrnz_before_blueprint_generation', $submission_data);

// After blueprint generation
do_action('mgrnz_after_blueprint_generation', $submission_id, $blueprint);

// Before email send
do_action('mgrnz_before_email_send', $email, $blueprint);

// After email send
do_action('mgrnz_after_email_send', $email, $success);

// Modify AI prompt
$prompt = apply_filters('mgrnz_ai_prompt', $prompt, $workflow_data);

// Modify blueprint before saving
$blueprint = apply_filters('mgrnz_blueprint_content', $blueprint, $submission_data);
```

### Testing

Run manual tests:

```php
// Test AI service
$ai_service = new MGRNZ_AI_Service();
$test_data = [
    'goal' => 'Test goal',
    'workflow_description' => 'Test workflow',
    'tools' => 'Test tools',
    'pain_points' => 'Test pain points'
];
$blueprint = $ai_service->generate_blueprint($test_data);
var_dump($blueprint);

// Test email service
$email_service = new MGRNZ_Email_Service();
$result = $email_service->send_blueprint_email('test@example.com', $blueprint);
var_dump($result);
```

---

## Support and Resources

### Documentation Files

- `AI-WORKFLOW-PLUGIN-STRUCTURE.md` - Plugin architecture overview
- `AI-WORKFLOW-SETTINGS.md` - Settings configuration guide
- `CACHING-SYSTEM.md` - Caching implementation details
- `ERROR-LOGGING-SYSTEM.md` - Error logging documentation
- `LOGGING-QUICK-REFERENCE.md` - Quick logging reference
- `POST-SUBMISSION-ACTIONS.md` - Post-submission flow documentation
- `TASK-13-IMPLEMENTATION-SUMMARY.md` - Error logging implementation
- `TASK-14-DASHBOARD-SUMMARY.md` - Dashboard implementation

### External Resources

- **OpenAI Documentation**: https://platform.openai.com/docs
- **Anthropic Documentation**: https://docs.anthropic.com
- **WordPress REST API**: https://developer.wordpress.org/rest-api/
- **WordPress Custom Post Types**: https://developer.wordpress.org/plugins/post-types/

### Getting Help

1. Check error logs in WordPress admin
2. Review this documentation
3. Check browser console for JavaScript errors
4. Enable debug mode for detailed logging
5. Contact system administrator or developer

---

## Changelog

### Version 1.0.0 (Current)
- Initial release
- OpenAI and Anthropic integration
- Blueprint caching system
- Email delivery
- Admin dashboard
- Error logging
- Rate limiting
- Custom post type for submissions

---

## License

This plugin is proprietary software developed for MGRNZ. All rights reserved.
