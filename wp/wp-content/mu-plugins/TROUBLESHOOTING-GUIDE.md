# AI Workflow Wizard - Troubleshooting Guide

This guide provides detailed solutions for common issues you may encounter with the AI Workflow Wizard system.

---

## Table of Contents

1. [Frontend Issues](#frontend-issues)
2. [API and Backend Issues](#api-and-backend-issues)
3. [Email Delivery Issues](#email-delivery-issues)
4. [AI Service Issues](#ai-service-issues)
5. [Performance Issues](#performance-issues)
6. [Database Issues](#database-issues)
7. [Configuration Issues](#configuration-issues)
8. [Security Issues](#security-issues)

---

## Frontend Issues

### Issue: Wizard Form Not Appearing

**Symptoms:**
- Page loads but wizard form is missing
- Blank space where wizard should be
- No JavaScript errors in console

**Diagnosis:**
```javascript
// Open browser console and check:
console.log(document.getElementById('ai-wizard-form'));
// Should return the form element, not null
```

**Solutions:**

1. **Check page slug:**
   - Go to WordPress admin > Pages
   - Find the wizard page
   - Verify slug is exactly `start-using-ai`
   - Edit and update if needed

2. **Check theme template:**
   - Verify page template includes wizard HTML
   - Check `page-start-using-ai.php` or similar
   - Ensure wizard markup is present

3. **Check for theme conflicts:**
   ```php
   // Temporarily switch to default theme
   // If wizard works, theme conflict exists
   ```

4. **Clear cache:**
   - Clear WordPress cache
   - Clear browser cache
   - Clear CDN cache if applicable

---

### Issue: Next Button Not Working

**Symptoms:**
- Clicking "Next" does nothing
- No validation errors shown
- Console shows JavaScript errors

**Diagnosis:**
```javascript
// Check if WizardController is loaded:
console.log(typeof WizardController);
// Should return 'function', not 'undefined'

// Check if wizard is initialized:
console.log(window.wizardInstance);
// Should return WizardController instance
```

**Solutions:**

1. **Verify JavaScript is loaded:**
   ```html
   <!-- View page source and look for: -->
   <script src=".../wizard-controller.js"></script>
   ```

2. **Check for JavaScript errors:**
   - Open browser console (F12)
   - Look for red error messages
   - Fix any syntax errors in wizard-controller.js

3. **Check button selectors:**
   ```javascript
   // In wizard-controller.js, verify:
   this.nextButtons = document.querySelectorAll('.wizard-next');
   // Ensure buttons have class 'wizard-next'
   ```

4. **Verify event listeners:**
   ```javascript
   // Add debug logging to init():
   console.log('Next buttons found:', this.nextButtons.length);
   ```

---

### Issue: Validation Not Working

**Symptoms:**
- Can proceed to next step with empty fields
- No error messages displayed
- Form submits with invalid data

**Diagnosis:**
```javascript
// Test validation manually:
const wizard = window.wizardInstance;
const isValid = wizard.validateCurrentStep();
console.log('Validation result:', isValid);
```

**Solutions:**

1. **Check validation logic:**
   ```javascript
   // In validateCurrentStep(), ensure:
   // - Required fields are checked
   // - Error messages are displayed
   // - Return false if validation fails
   ```

2. **Verify field IDs:**
   ```javascript
   // Field IDs must match JavaScript selectors:
   document.getElementById('goal')  // Must exist
   document.getElementById('workflow')  // Must exist
   document.getElementById('tools')  // Must exist
   document.getElementById('pain_points')  // Must exist
   ```

3. **Check error display:**
   ```javascript
   // Ensure showError() method works:
   wizard.showError('Test error message');
   // Should display error on page
   ```

---

### Issue: Form Submission Fails

**Symptoms:**
- Submit button clicked but nothing happens
- Loading indicator appears then disappears
- No blueprint displayed
- Console shows network errors

**Diagnosis:**
```javascript
// Check REST API endpoint:
fetch('/wp-json/mgrnz/v1/ai-workflow')
  .then(r => r.json())
  .then(data => console.log('API response:', data))
  .catch(err => console.error('API error:', err));
```

**Solutions:**

1. **Verify REST API is accessible:**
   - Visit: `https://yoursite.com/wp-json/mgrnz/v1/ai-workflow`
   - Should return JSON (not 404)
   - If 404, flush permalinks:
     - Go to Settings > Permalinks
     - Click "Save Changes"

2. **Check CORS issues:**
   ```javascript
   // If cross-origin error, add to wp-config.php:
   header('Access-Control-Allow-Origin: *');
   ```

3. **Verify nonce (if used):**
   ```javascript
   // Check nonce is passed correctly:
   console.log(mgrnzWizard.nonce);
   // Should be a string, not undefined
   ```

4. **Check request format:**
   ```javascript
   // Ensure Content-Type is set:
   headers: {
     'Content-Type': 'application/json'
   }
   ```

---

### Issue: Blueprint Not Displaying

**Symptoms:**
- Form submits successfully
- API returns blueprint
- Blueprint section doesn't show
- Form doesn't hide

**Diagnosis:**
```javascript
// Check if blueprint section exists:
console.log(document.querySelector('.blueprint-section'));
// Should return element, not null

// Check if renderBlueprint is called:
// Add logging to renderBlueprint() method
```

**Solutions:**

1. **Verify blueprint HTML exists:**
   ```html
   <!-- Page must have: -->
   <div class="blueprint-section" style="display: none;">
     <div class="blueprint-content"></div>
   </div>
   ```

2. **Check CSS display:**
   ```css
   /* Ensure no conflicting styles: */
   .blueprint-section {
     display: none; /* Initially hidden */
   }
   .blueprint-section.active {
     display: block; /* Shown after submission */
   }
   ```

3. **Verify markdown rendering:**
   ```javascript
   // If using markdown library, ensure it's loaded:
   console.log(typeof marked);  // If using marked.js
   ```

4. **Check for JavaScript errors:**
   - Open console during submission
   - Look for errors in renderBlueprint()
   - Fix any undefined variables

---

## API and Backend Issues

### Issue: REST Endpoint Returns 404

**Symptoms:**
- API calls fail with 404 error
- Console shows: "Failed to fetch"
- Network tab shows 404 status

**Diagnosis:**
```bash
# Test endpoint directly:
curl https://yoursite.com/wp-json/mgrnz/v1/ai-workflow
```

**Solutions:**

1. **Flush permalinks:**
   - Go to Settings > Permalinks
   - Click "Save Changes" (don't change anything)
   - Test endpoint again

2. **Verify endpoint registration:**
   ```php
   // In mgrnz-ai-workflow-endpoint.php, ensure:
   add_action('rest_api_init', 'mgrnz_register_ai_workflow_endpoint');
   ```

3. **Check .htaccess:**
   ```apache
   # Ensure WordPress rewrite rules exist:
   # BEGIN WordPress
   <IfModule mod_rewrite.c>
   RewriteEngine On
   RewriteBase /
   RewriteRule ^index\.php$ - [L]
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteRule . /index.php [L]
   </IfModule>
   # END WordPress
   ```

4. **Verify plugin is loaded:**
   ```php
   // Check mu-plugins/mgrnz-ai-workflow-wizard.php exists
   // Check it's being loaded (add debug line):
   error_log('AI Workflow plugin loaded');
   ```

---

### Issue: REST Endpoint Returns 500 Error

**Symptoms:**
- API calls fail with 500 error
- Error logs show PHP errors
- Submissions not saved

**Diagnosis:**
```php
// Enable debug mode in wp-config.php:
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

// Check wp-content/debug.log for errors
```

**Solutions:**

1. **Check PHP errors:**
   - View debug.log
   - Look for fatal errors, warnings
   - Fix syntax errors or missing functions

2. **Verify required classes exist:**
   ```php
   // Ensure all classes are loaded:
   if (!class_exists('MGRNZ_AI_Service')) {
       error_log('MGRNZ_AI_Service class not found');
   }
   ```

3. **Check database connection:**
   ```php
   // Test database:
   global $wpdb;
   $result = $wpdb->get_var("SELECT 1");
   if ($result !== '1') {
       error_log('Database connection failed');
   }
   ```

4. **Increase PHP memory:**
   ```php
   // In wp-config.php:
   define('WP_MEMORY_LIMIT', '256M');
   define('WP_MAX_MEMORY_LIMIT', '512M');
   ```

---

### Issue: Validation Errors Not Specific

**Symptoms:**
- Generic "validation failed" error
- No indication which field is invalid
- User doesn't know what to fix

**Diagnosis:**
```php
// Check validation function returns specific errors:
$errors = validate_submission_data($data);
error_log('Validation errors: ' . print_r($errors, true));
```

**Solutions:**

1. **Enhance validation function:**
   ```php
   function validate_submission_data($data) {
       $errors = [];
       
       if (empty($data['goal'])) {
           $errors['goal'] = 'Goal is required';
       }
       
       if (empty($data['workflow_description'])) {
           $errors['workflow_description'] = 'Workflow description is required';
       }
       
       // Return specific errors
       if (!empty($errors)) {
           return new WP_Error('validation_failed', 'Validation failed', $errors);
       }
       
       return $data;
   }
   ```

2. **Return field-specific errors:**
   ```php
   // In endpoint handler:
   if (is_wp_error($validated_data)) {
       return new WP_REST_Response([
           'status' => 'error',
           'message' => $validated_data->get_error_message(),
           'errors' => $validated_data->get_error_data()
       ], 400);
   }
   ```

3. **Display specific errors in frontend:**
   ```javascript
   // In wizard-controller.js:
   if (response.errors) {
       Object.keys(response.errors).forEach(field => {
           this.showFieldError(field, response.errors[field]);
       });
   }
   ```

---

## Email Delivery Issues

### Issue: Emails Not Sending

**Symptoms:**
- Blueprint displays but email not received
- Email sent status shows "false"
- No errors in logs

**Diagnosis:**
```php
// Test WordPress email:
$result = wp_mail(
    'test@example.com',
    'Test Email',
    'This is a test email from WordPress'
);

if (!$result) {
    error_log('WordPress email failed');
} else {
    error_log('WordPress email sent successfully');
}
```

**Solutions:**

1. **Configure SMTP:**
   - Install WP Mail SMTP plugin
   - Configure with email provider:
     - Gmail
     - SendGrid
     - Mailgun
     - Amazon SES
   - Test email delivery

2. **Check email service logs:**
   ```php
   // In class-email-service.php, add logging:
   error_log('Attempting to send email to: ' . $to);
   $result = wp_mail($to, $subject, $message, $headers);
   error_log('Email send result: ' . ($result ? 'success' : 'failed'));
   ```

3. **Verify email format:**
   ```php
   // Ensure valid email address:
   if (!is_email($email)) {
       error_log('Invalid email format: ' . $email);
       return false;
   }
   ```

4. **Check spam folder:**
   - Blueprint emails may be marked as spam
   - Add sending domain to safe senders
   - Improve email content (less spammy)

---

### Issue: Emails Going to Spam

**Symptoms:**
- Emails send successfully
- Users don't receive them
- Found in spam folder

**Solutions:**

1. **Configure SPF record:**
   ```dns
   # Add to DNS:
   v=spf1 include:_spf.google.com ~all
   ```

2. **Configure DKIM:**
   - Set up DKIM in email provider
   - Add DKIM record to DNS
   - Verify with email testing tool

3. **Improve email content:**
   ```php
   // Avoid spam triggers:
   // - Don't use ALL CAPS
   // - Avoid excessive exclamation marks!!!
   // - Include unsubscribe link
   // - Use proper HTML structure
   // - Include plain text version
   ```

4. **Use reputable SMTP:**
   - Use SendGrid, Mailgun, or similar
   - Avoid shared hosting email
   - Use dedicated IP if high volume

---

### Issue: Email Template Not Rendering

**Symptoms:**
- Email sends but looks broken
- HTML not rendering
- Styles not applied

**Solutions:**

1. **Use inline CSS:**
   ```html
   <!-- Email clients don't support external CSS -->
   <div style="background: #f5f5f5; padding: 20px;">
     <h1 style="color: #333; font-size: 24px;">Title</h1>
   </div>
   ```

2. **Test email template:**
   - Use Litmus or Email on Acid
   - Test in multiple email clients
   - Fix rendering issues

3. **Use email-safe HTML:**
   ```html
   <!-- Use tables for layout (yes, really) -->
   <table width="100%" cellpadding="0" cellspacing="0">
     <tr>
       <td>Content here</td>
     </tr>
   </table>
   ```

4. **Include plain text version:**
   ```php
   // In send_blueprint_email():
   $headers[] = 'Content-Type: text/html; charset=UTF-8';
   
   // Also send plain text alternative
   add_filter('wp_mail_content_type', function() {
       return 'multipart/alternative';
   });
   ```

---

## AI Service Issues

### Issue: AI API Returns Authentication Error

**Symptoms:**
- "Invalid API key" error
- 401 or 403 status code
- Blueprint generation fails

**Diagnosis:**
```php
// Test API key manually:
$ai_service = new MGRNZ_AI_Service();
$result = $ai_service->test_connection();
var_dump($result);
```

**Solutions:**

1. **Verify API key format:**
   ```php
   // OpenAI keys start with: sk-
   // Anthropic keys start with: sk-ant-
   
   $key = get_option('mgrnz_ai_api_key');
   error_log('API key prefix: ' . substr($key, 0, 7));
   ```

2. **Check API key is active:**
   - Log into OpenAI or Anthropic dashboard
   - Verify key exists and is active
   - Check key hasn't been revoked
   - Generate new key if needed

3. **Verify key has credits:**
   - Check account balance
   - Add payment method if needed
   - Upgrade plan if quota exceeded

4. **Update configuration:**
   ```php
   // In wp-config.php:
   define('MGRNZ_AI_API_KEY', 'sk-your-new-key-here');
   
   // Or in admin:
   // Settings > AI Workflow Settings
   // Update API key and save
   ```

---

### Issue: AI API Rate Limit Exceeded

**Symptoms:**
- "Rate limit exceeded" error
- 429 status code
- Intermittent failures

**Diagnosis:**
```php
// Check rate limit status:
// OpenAI: https://platform.openai.com/usage
// Anthropic: https://console.anthropic.com/settings/usage
```

**Solutions:**

1. **Enable caching:**
   ```php
   // In config/ai-workflow-config.php:
   'enable_caching' => true,
   'cache_duration' => 7 * DAY_IN_SECONDS,
   ```

2. **Upgrade API plan:**
   - Increase rate limits
   - Get higher tier plan
   - Contact provider for enterprise limits

3. **Implement request queuing:**
   ```php
   // Add delay between requests:
   if (get_transient('last_ai_request')) {
       sleep(1);  // Wait 1 second
   }
   set_transient('last_ai_request', time(), 60);
   ```

4. **Use different model:**
   ```php
   // Switch to model with higher limits:
   'ai_model' => 'gpt-3.5-turbo',  // Higher limits than gpt-4
   ```

---

### Issue: AI Responses Are Low Quality

**Symptoms:**
- Blueprints are generic
- Not addressing user's specific needs
- Missing important details

**Solutions:**

1. **Improve prompt:**
   ```php
   // In build_prompt(), add more context:
   $prompt .= "IMPORTANT: Provide specific, actionable recommendations.\n";
   $prompt .= "Focus on the user's exact pain points.\n";
   $prompt .= "Include concrete examples and tool names.\n";
   ```

2. **Increase max tokens:**
   ```php
   // Allow longer responses:
   'ai_max_tokens' => 3000,  // Instead of 2000
   ```

3. **Adjust temperature:**
   ```php
   // For more focused responses:
   'ai_temperature' => 0.5,  // Instead of 0.7
   
   // For more creative responses:
   'ai_temperature' => 0.9,
   ```

4. **Use better model:**
   ```php
   // Switch to higher quality model:
   'ai_model' => 'gpt-4',  // Instead of gpt-3.5-turbo
   // or
   'ai_model' => 'claude-3-opus-20240229',  // Instead of haiku
   ```

---

### Issue: AI API Timeout

**Symptoms:**
- "Request timed out" error
- Takes longer than 30 seconds
- Inconsistent failures

**Solutions:**

1. **Increase timeout:**
   ```php
   // In class-ai-service.php:
   $this->timeout = 60;  // Increase from 30 to 60 seconds
   ```

2. **Reduce max tokens:**
   ```php
   // Shorter responses = faster generation:
   'ai_max_tokens' => 1500,  // Instead of 2000
   ```

3. **Use faster model:**
   ```php
   // OpenAI:
   'ai_model' => 'gpt-3.5-turbo',  // Faster than gpt-4
   
   // Anthropic:
   'ai_model' => 'claude-3-haiku-20240307',  // Faster than opus
   ```

4. **Implement retry logic:**
   ```php
   // Already implemented in generate_blueprint()
   // Verify max_retries is set:
   $this->max_retries = 3;  // Try up to 3 times
   ```

---

## Performance Issues

### Issue: Slow Page Load

**Symptoms:**
- Wizard page takes long to load
- JavaScript loads slowly
- Poor user experience

**Solutions:**

1. **Minify JavaScript:**
   ```bash
   # Use minification tool:
   npm install -g uglify-js
   uglifyjs wizard-controller.js -o wizard-controller.min.js
   ```

2. **Enable caching:**
   - Use WordPress caching plugin
   - Enable browser caching
   - Use CDN for assets

3. **Optimize images:**
   - Compress images
   - Use appropriate formats (WebP)
   - Lazy load images

4. **Defer JavaScript:**
   ```php
   // In functions.php:
   wp_enqueue_script('mgrnz-wizard', $url, [], '1.0.0', true);
   // Last parameter 'true' loads in footer
   ```

---

### Issue: High Database Load

**Symptoms:**
- Slow queries
- Database timeouts
- High CPU usage

**Solutions:**

1. **Add database indexes:**
   ```sql
   -- Add index on submission date:
   ALTER TABLE wp_postmeta 
   ADD INDEX idx_submission_date (meta_key, meta_value(20));
   ```

2. **Optimize queries:**
   ```php
   // Use WP_Query efficiently:
   $args = [
       'post_type' => 'ai_workflow_sub',
       'posts_per_page' => 20,  // Limit results
       'no_found_rows' => true,  // Skip counting
       'update_post_meta_cache' => false,  // Skip meta cache
       'update_post_term_cache' => false,  // Skip term cache
   ];
   ```

3. **Clean up old data:**
   ```php
   // Delete old submissions:
   $old_posts = get_posts([
       'post_type' => 'ai_workflow_sub',
       'date_query' => [
           'before' => '6 months ago'
       ],
       'posts_per_page' => -1
   ]);
   
   foreach ($old_posts as $post) {
       wp_delete_post($post->ID, true);
   }
   ```

4. **Use object caching:**
   - Install Redis or Memcached
   - Configure WordPress object cache
   - Cache expensive queries

---

### Issue: High Memory Usage

**Symptoms:**
- PHP memory limit errors
- Fatal errors during submission
- Server crashes

**Solutions:**

1. **Increase PHP memory:**
   ```php
   // In wp-config.php:
   define('WP_MEMORY_LIMIT', '256M');
   define('WP_MAX_MEMORY_LIMIT', '512M');
   ```

2. **Optimize code:**
   ```php
   // Don't load all submissions at once:
   // Use pagination instead
   $args = [
       'posts_per_page' => 20,  // Not -1
       'paged' => $paged
   ];
   ```

3. **Clean up variables:**
   ```php
   // Unset large variables when done:
   unset($large_array);
   gc_collect_cycles();  // Force garbage collection
   ```

4. **Use streaming for exports:**
   ```php
   // Don't load all data into memory:
   // Stream CSV output directly
   header('Content-Type: text/csv');
   $output = fopen('php://output', 'w');
   // Write rows one at a time
   ```

---

## Database Issues

### Issue: Submissions Not Saving

**Symptoms:**
- Form submits successfully
- No error messages
- Submission doesn't appear in admin

**Diagnosis:**
```php
// Test post creation:
$post_id = wp_insert_post([
    'post_type' => 'ai_workflow_sub',
    'post_title' => 'Test Submission',
    'post_status' => 'publish'
]);

if (is_wp_error($post_id)) {
    error_log('Post creation failed: ' . $post_id->get_error_message());
} else {
    error_log('Post created successfully: ' . $post_id);
}
```

**Solutions:**

1. **Verify custom post type is registered:**
   ```php
   // Check if post type exists:
   if (!post_type_exists('ai_workflow_sub')) {
       error_log('Custom post type not registered');
   }
   ```

2. **Check database permissions:**
   ```php
   // Verify user can create posts:
   if (!current_user_can('edit_posts')) {
       error_log('User lacks permission to create posts');
   }
   ```

3. **Check for database errors:**
   ```php
   global $wpdb;
   if ($wpdb->last_error) {
       error_log('Database error: ' . $wpdb->last_error);
   }
   ```

4. **Verify meta data is saving:**
   ```php
   // Test meta update:
   $result = update_post_meta($post_id, '_mgrnz_goal', 'Test goal');
   if (!$result) {
       error_log('Meta update failed');
   }
   ```

---

### Issue: Meta Data Not Displaying

**Symptoms:**
- Submissions save successfully
- Meta fields are empty in admin
- Data not showing in list view

**Solutions:**

1. **Verify meta keys:**
   ```php
   // Check meta exists:
   $goal = get_post_meta($post_id, '_mgrnz_goal', true);
   if (empty($goal)) {
       error_log('Goal meta not found for post ' . $post_id);
   }
   ```

2. **Check meta registration:**
   ```php
   // Ensure meta is registered:
   register_post_meta('ai_workflow_sub', '_mgrnz_goal', [
       'type' => 'string',
       'single' => true,
       'show_in_rest' => true,
   ]);
   ```

3. **Verify admin columns:**
   ```php
   // Check column callback is working:
   add_filter('manage_ai_workflow_sub_posts_columns', function($columns) {
       error_log('Columns filter called');
       return $columns;
   });
   ```

---

## Configuration Issues

### Issue: Settings Not Loading

**Symptoms:**
- Admin settings page is blank
- Settings don't save
- Default values always used

**Solutions:**

1. **Check settings registration:**
   ```php
   // Verify settings are registered:
   $settings = get_registered_settings();
   if (!isset($settings['mgrnz_ai_provider'])) {
       error_log('Settings not registered');
   }
   ```

2. **Verify options exist:**
   ```php
   // Check if options are in database:
   $provider = get_option('mgrnz_ai_provider');
   if ($provider === false) {
       error_log('Provider option not found');
       // Set default:
       update_option('mgrnz_ai_provider', 'openai');
   }
   ```

3. **Check user permissions:**
   ```php
   // Verify user can manage options:
   if (!current_user_can('manage_options')) {
       error_log('User lacks permission to manage settings');
   }
   ```

---

### Issue: Environment Variables Not Loading

**Symptoms:**
- Settings in .env not working
- wp-config.php defines not working
- Always using database values

**Solutions:**

1. **Verify environment variables:**
   ```php
   // Check if env var is set:
   $api_key = getenv('MGRNZ_AI_API_KEY');
   if ($api_key === false) {
       error_log('Environment variable not set');
   }
   ```

2. **Check wp-config.php:**
   ```php
   // Verify constant is defined:
   if (!defined('MGRNZ_AI_API_KEY')) {
       error_log('Constant not defined in wp-config.php');
   }
   ```

3. **Check load order:**
   ```php
   // Environment variables should be checked first:
   $this->api_key = getenv('MGRNZ_AI_API_KEY') 
       ?: (defined('MGRNZ_AI_API_KEY') ? MGRNZ_AI_API_KEY : '')
       ?: get_option('mgrnz_ai_api_key', '');
   ```

---

## Security Issues

### Issue: Rate Limiting Not Working

**Symptoms:**
- Users can submit unlimited times
- No rate limit errors
- Potential for abuse

**Solutions:**

1. **Verify rate limit check:**
   ```php
   // In endpoint handler:
   $ip = $_SERVER['REMOTE_ADDR'];
   if (!check_rate_limit($ip)) {
       return new WP_REST_Response([
           'status' => 'error',
           'message' => 'Rate limit exceeded',
           'code' => 'rate_limit_exceeded'
       ], 429);
   }
   ```

2. **Check transient storage:**
   ```php
   // Test transient:
   $key = 'ai_workflow_rate_' . md5($ip);
   $count = get_transient($key);
   error_log('Current rate limit count: ' . $count);
   ```

3. **Verify IP detection:**
   ```php
   // Check if behind proxy:
   $ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
   error_log('Detected IP: ' . $ip);
   ```

---

### Issue: API Keys Exposed

**Symptoms:**
- API keys visible in page source
- Keys in JavaScript
- Keys in error messages

**Solutions:**

1. **Never expose keys in frontend:**
   ```javascript
   // WRONG:
   const apiKey = 'sk-...';
   
   // RIGHT:
   // Keys should only exist in PHP backend
   ```

2. **Use wp-config.php:**
   ```php
   // Store keys securely:
   define('MGRNZ_AI_API_KEY', 'sk-...');
   
   // Not in database or JavaScript
   ```

3. **Sanitize error messages:**
   ```php
   // Don't expose keys in errors:
   // WRONG:
   throw new Exception('API key sk-... is invalid');
   
   // RIGHT:
   throw new Exception('API authentication failed');
   ```

---

## Getting Additional Help

If issues persist after trying these solutions:

1. **Enable debug mode:**
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   define('WP_DEBUG_DISPLAY', false);
   define('MGRNZ_AI_DEBUG', true);
   ```

2. **Collect information:**
   - Error messages from logs
   - Steps to reproduce
   - Browser console errors
   - Network tab responses
   - PHP version
   - WordPress version
   - Plugin versions

3. **Check documentation:**
   - AI-WORKFLOW-WIZARD-README.md
   - WORDPRESS-ADMIN-USER-GUIDE.md
   - Provider documentation (OpenAI, Anthropic)

4. **Contact support:**
   - Provide error logs
   - Describe what you've tried
   - Include system information
   - Share relevant code snippets

---

*Last Updated: November 2024*
*Version: 1.0.0*
