<?php
/**
 * Email Service Class
 * 
 * Handles all email communications for the AI Workflow Wizard,
 * including blueprint delivery and subscription confirmations.
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Email_Service {
    
    /**
     * Site name for email headers
     * @var string
     */
    private $site_name;
    
    /**
     * From email address
     * @var string
     */
    private $from_email;
    
    /**
     * From name
     * @var string
     */
    private $from_name;
    
    /**
     * Constructor - initializes email settings
     */
    public function __construct() {
        $this->site_name = get_bloginfo('name');
        $this->from_email = get_option('admin_email');
        $this->from_name = $this->site_name;
        
        // Allow customization via WordPress options
        $custom_from_email = get_option('mgrnz_email_from_address');
        if (!empty($custom_from_email) && is_email($custom_from_email)) {
            $this->from_email = $custom_from_email;
        }
        
        $custom_from_name = get_option('mgrnz_email_from_name');
        if (!empty($custom_from_name)) {
            $this->from_name = $custom_from_name;
        }
        
        // Register cron action for async email processing
        add_action('mgrnz_send_blueprint_email', [$this, 'process_async_blueprint_email'], 10, 3);
    }
    
    /**
     * Schedule async blueprint email delivery
     * 
     * @param string $to Recipient email address
     * @param array $blueprint Blueprint data with summary and content
     * @param int $submission_id Submission post ID for status tracking
     * @return bool True if scheduled successfully
     */
    public function schedule_blueprint_email($to, $blueprint, $submission_id) {
        // Validate email address
        if (!is_email($to)) {
            $this->log_error('Invalid email address for scheduling: ' . $to);
            return false;
        }
        
        // Update submission metadata to indicate email is queued
        update_post_meta($submission_id, '_mgrnz_email_status', 'queued');
        update_post_meta($submission_id, '_mgrnz_email_queued_at', current_time('mysql'));
        
        // Schedule the email to be sent asynchronously
        $scheduled = wp_schedule_single_event(
            time() + 5, // Send 5 seconds from now to avoid blocking
            'mgrnz_send_blueprint_email',
            [$to, $blueprint, $submission_id]
        );
        
        if ($scheduled === false) {
            $this->log_error('Failed to schedule email for: ' . $to);
            update_post_meta($submission_id, '_mgrnz_email_status', 'schedule_failed');
            return false;
        }
        
        $this->log_success('Blueprint email scheduled for: ' . $to . ' (Submission ID: ' . $submission_id . ')');
        return true;
    }
    
    /**
     * Process async blueprint email (cron handler)
     * 
     * @param string $to Recipient email address
     * @param array $blueprint Blueprint data with summary and content
     * @param int $submission_id Submission post ID for status tracking
     * @return void
     */
    public function process_async_blueprint_email($to, $blueprint, $submission_id) {
        // Update status to processing
        update_post_meta($submission_id, '_mgrnz_email_status', 'processing');
        update_post_meta($submission_id, '_mgrnz_email_processing_at', current_time('mysql'));
        
        // Attempt to send the email
        $sent = $this->send_blueprint_email($to, $blueprint, ['submission_id' => $submission_id]);
        
        // Update submission metadata with result
        if ($sent) {
            update_post_meta($submission_id, '_mgrnz_email_status', 'sent');
            update_post_meta($submission_id, '_mgrnz_email_sent', true);
            update_post_meta($submission_id, '_mgrnz_email_sent_at', current_time('mysql'));
            $this->log_success('Async blueprint email sent successfully to: ' . $to . ' (Submission ID: ' . $submission_id . ')');
        } else {
            update_post_meta($submission_id, '_mgrnz_email_status', 'failed');
            update_post_meta($submission_id, '_mgrnz_email_failed_at', current_time('mysql'));
            $this->log_error('Async blueprint email failed for: ' . $to . ' (Submission ID: ' . $submission_id . ')');
            
            // Schedule a retry in 5 minutes
            $this->schedule_email_retry($to, $blueprint, $submission_id);
        }
    }
    
    /**
     * Schedule email retry after failure
     * 
     * @param string $to Recipient email address
     * @param array $blueprint Blueprint data
     * @param int $submission_id Submission post ID
     * @return void
     */
    private function schedule_email_retry($to, $blueprint, $submission_id) {
        // Get current retry count
        $retry_count = (int) get_post_meta($submission_id, '_mgrnz_email_retry_count', true);
        
        // Maximum 3 retries
        if ($retry_count >= 3) {
            update_post_meta($submission_id, '_mgrnz_email_status', 'failed_permanent');
            $this->log_error('Email retry limit reached for submission ID: ' . $submission_id);
            return;
        }
        
        // Increment retry count
        $retry_count++;
        update_post_meta($submission_id, '_mgrnz_email_retry_count', $retry_count);
        update_post_meta($submission_id, '_mgrnz_email_status', 'retry_scheduled');
        
        // Schedule retry with exponential backoff (5 min, 15 min, 30 min)
        $retry_delay = 300 * $retry_count; // 5 minutes * retry count
        
        wp_schedule_single_event(
            time() + $retry_delay,
            'mgrnz_send_blueprint_email',
            [$to, $blueprint, $submission_id]
        );
        
        $this->log_success('Email retry #' . $retry_count . ' scheduled for submission ID: ' . $submission_id);
    }
    
    /**
     * Send blueprint email to user
     * 
     * @param string $to Recipient email address
     * @param array $blueprint Blueprint data with summary and content
     * @param array $user_data Optional user data for personalization (name, submission_id, etc.)
     * @return bool True on success, false on failure
     */
    public function send_blueprint_email($to, $blueprint, $user_data = []) {
        // Validate email address
        if (!is_email($to)) {
            $this->log_error('Invalid email address: ' . $to);
            return false;
        }
        
        // Validate blueprint data
        if (empty($blueprint['content'])) {
            $this->log_error('Empty blueprint content for email: ' . $to);
            return false;
        }
        
        try {
            // Prepare email data
            $subject = 'Your AI Workflow Blueprint - ' . $this->site_name;
            $template = $this->get_email_template('blueprint');
            
            // Build consult link with submission ID if available
            $consult_link = home_url('/book-consultation/');
            if (!empty($user_data['submission_id'])) {
                $consult_link = add_query_arg('submission_id', $user_data['submission_id'], $consult_link);
            }
            
            // Prepare template variables
            $variables = [
                'SITE_NAME' => $this->site_name,
                'SITE_URL' => home_url(),
                'BLUEPRINT_CONTENT' => $this->format_blueprint_for_email($blueprint['content']),
                'BLUEPRINT_SUMMARY' => $blueprint['summary'] ?? '',
                'USER_NAME' => $user_data['name'] ?? '',
                'CONSULT_LINK' => $consult_link,
                'SUBSCRIBE_LINK' => home_url('/newsletter/'),
                'CURRENT_YEAR' => date('Y')
            ];
            
            // Replace variables in template
            $message = $this->replace_template_variables($template, $variables);
            
            // Set email headers
            $headers = $this->get_email_headers();
            
            // Send email
            $sent = wp_mail($to, $subject, $message, $headers);
            
            if ($sent) {
                $this->log_success('Blueprint email sent to: ' . $to);
            } else {
                $this->log_error('Failed to send blueprint email to: ' . $to);
            }
            
            return $sent;
            
        } catch (Exception $e) {
            $this->log_error('Exception sending blueprint email: ' . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Send subscription confirmation email
     * 
     * @param string $email Subscriber email address
     * @param array $options Optional configuration (name, source, etc.)
     * @return bool True on success, false on failure
     */
    public function send_subscription_confirmation($email, $options = []) {
        // Validate email address
        if (!is_email($email)) {
            $this->log_error('Invalid subscription email address: ' . $email);
            return false;
        }
        
        try {
            // Prepare email data
            $subject = 'Welcome to ' . $this->site_name . ' Newsletter';
            $template = $this->get_email_template('subscription');
            
            // Prepare template variables
            $variables = [
                'SITE_NAME' => $this->site_name,
                'SITE_URL' => home_url(),
                'USER_NAME' => $options['name'] ?? '',
                'UNSUBSCRIBE_LINK' => home_url('/unsubscribe/?email=' . urlencode($email)),
                'PREFERENCES_LINK' => home_url('/email-preferences/?email=' . urlencode($email)),
                'CURRENT_YEAR' => date('Y')
            ];
            
            // Replace variables in template
            $message = $this->replace_template_variables($template, $variables);
            
            // Set email headers
            $headers = $this->get_email_headers();
            
            // Send email
            $sent = wp_mail($email, $subject, $message, $headers);
            
            if ($sent) {
                $this->log_success('Subscription confirmation sent to: ' . $email);
            } else {
                $this->log_error('Failed to send subscription confirmation to: ' . $email);
            }
            
            return $sent;
            
        } catch (Exception $e) {
            $this->log_error('Exception sending subscription confirmation: ' . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Get email template by type
     * 
     * @param string $type Template type (blueprint, subscription)
     * @return string HTML email template
     */
    private function get_email_template($type) {
        switch ($type) {
            case 'blueprint':
                return $this->get_blueprint_template();
            case 'subscription':
                return $this->get_subscription_template();
            default:
                return $this->get_default_template();
        }
    }
    
    /**
     * Get blueprint email template
     * 
     * @return string HTML template
     */
    private function get_blueprint_template() {
        return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your AI Workflow Blueprint</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f5f5;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .header p {
            margin: 10px 0 0 0;
            font-size: 16px;
            opacity: 0.9;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #1e293b;
        }
        .intro {
            font-size: 16px;
            margin-bottom: 30px;
            color: #475569;
        }
        .blueprint-section {
            background-color: #f8fafc;
            border-left: 4px solid #ff4f00;
            padding: 25px;
            margin: 30px 0;
            border-radius: 4px;
        }
        .blueprint-section h2 {
            margin-top: 0;
            color: #0f172a;
            font-size: 20px;
        }
        .blueprint-section h3 {
            color: #1e293b;
            font-size: 18px;
            margin-top: 20px;
        }
        .blueprint-section ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        .blueprint-section li {
            margin: 8px 0;
            color: #475569;
        }
        .blueprint-section p {
            color: #475569;
            margin: 10px 0;
        }
        .cta-container {
            text-align: center;
            margin: 40px 0;
        }
        .cta-button {
            display: inline-block;
            background-color: #ff4f00;
            color: #ffffff !important;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            margin: 10px;
        }
        .cta-button-secondary {
            background-color: #0f172a;
        }
        .footer {
            background-color: #f8fafc;
            padding: 30px;
            text-align: center;
            font-size: 14px;
            color: #64748b;
            border-top: 1px solid #e2e8f0;
        }
        .footer a {
            color: #ff4f00;
            text-decoration: none;
        }
        .divider {
            height: 1px;
            background-color: #e2e8f0;
            margin: 30px 0;
        }
        @media only screen and (max-width: 600px) {
            .content {
                padding: 30px 20px;
            }
            .header {
                padding: 30px 20px;
            }
            .header h1 {
                font-size: 24px;
            }
            .cta-button {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>🎯 Your AI Workflow Blueprint</h1>
            <p>Personalized recommendations for your workflow</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                Hi{{USER_NAME}},
            </div>
            
            <div class="intro">
                Thank you for using the AI Workflow Wizard! We\'ve analyzed your workflow and created a personalized blueprint to help you integrate AI into your processes.
            </div>
            
            <div class="blueprint-section">
                {{BLUEPRINT_CONTENT}}
            </div>
            
            <div class="divider"></div>
            
            <p style="font-size: 16px; color: #475569; text-align: center;">
                Ready to take the next step? Let\'s work together to implement these recommendations.
            </p>
            
            <div class="cta-container">
                <a href="{{CONSULT_LINK}}" class="cta-button">Book an AI Consultation</a>
                <a href="{{SUBSCRIBE_LINK}}" class="cta-button cta-button-secondary">Get More AI Tips</a>
            </div>
            
            <div class="divider"></div>
            
            <p style="font-size: 14px; color: #64748b;">
                Questions about your blueprint? Reply to this email and we\'ll be happy to help clarify any recommendations.
            </p>
        </div>
        
        <div class="footer">
            <p><strong>{{SITE_NAME}}</strong></p>
            <p>
                <a href="{{SITE_URL}}">Visit our website</a> | 
                <a href="{{SITE_URL}}/contact/">Contact us</a>
            </p>
            <p style="margin-top: 20px;">
                &copy; {{CURRENT_YEAR}} {{SITE_NAME}}. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>';
    }
    
    /**
     * Get subscription confirmation template
     * 
     * @return string HTML template
     */
    private function get_subscription_template() {
        return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Newsletter</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f5f5;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .header p {
            margin: 10px 0 0 0;
            font-size: 16px;
            opacity: 0.9;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #1e293b;
        }
        .message {
            font-size: 16px;
            margin-bottom: 20px;
            color: #475569;
        }
        .benefits {
            background-color: #f8fafc;
            border-left: 4px solid #ff4f00;
            padding: 25px;
            margin: 30px 0;
            border-radius: 4px;
        }
        .benefits h2 {
            margin-top: 0;
            color: #0f172a;
            font-size: 20px;
        }
        .benefits ul {
            margin: 15px 0;
            padding-left: 20px;
        }
        .benefits li {
            margin: 10px 0;
            color: #475569;
        }
        .cta-container {
            text-align: center;
            margin: 40px 0;
        }
        .cta-button {
            display: inline-block;
            background-color: #ff4f00;
            color: #ffffff !important;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
        }
        .footer {
            background-color: #f8fafc;
            padding: 30px;
            text-align: center;
            font-size: 14px;
            color: #64748b;
            border-top: 1px solid #e2e8f0;
        }
        .footer a {
            color: #ff4f00;
            text-decoration: none;
        }
        @media only screen and (max-width: 600px) {
            .content {
                padding: 30px 20px;
            }
            .header {
                padding: 30px 20px;
            }
            .header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>✨ Welcome!</h1>
            <p>You\'re now subscribed to {{SITE_NAME}}</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                Hi{{USER_NAME}},
            </div>
            
            <div class="message">
                Thank you for subscribing to our newsletter! We\'re excited to share valuable insights, tips, and updates about AI-powered workflows with you.
            </div>
            
            <div class="benefits">
                <h2>What to expect:</h2>
                <ul>
                    <li>🚀 Practical AI implementation strategies</li>
                    <li>💡 Weekly workflow optimization tips</li>
                    <li>🔧 Tool recommendations and tutorials</li>
                    <li>📊 Case studies and success stories</li>
                    <li>🎯 Exclusive resources and early access</li>
                </ul>
            </div>
            
            <div class="message">
                We respect your inbox and will only send you valuable content. No spam, ever.
            </div>
            
            <div class="cta-container">
                <a href="{{SITE_URL}}" class="cta-button">Explore Our Resources</a>
            </div>
            
            <div class="message" style="font-size: 14px; color: #64748b; margin-top: 40px;">
                Want to customize your email preferences? 
                <a href="{{PREFERENCES_LINK}}" style="color: #ff4f00; text-decoration: none;">Update your settings</a>
            </div>
        </div>
        
        <div class="footer">
            <p><strong>{{SITE_NAME}}</strong></p>
            <p>
                <a href="{{SITE_URL}}">Visit our website</a> | 
                <a href="{{PREFERENCES_LINK}}">Email preferences</a> | 
                <a href="{{UNSUBSCRIBE_LINK}}">Unsubscribe</a>
            </p>
            <p style="margin-top: 20px;">
                &copy; {{CURRENT_YEAR}} {{SITE_NAME}}. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>';
    }
    
    /**
     * Get default email template
     * 
     * @return string HTML template
     */
    private function get_default_template() {
        return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        {{CONTENT}}
    </div>
</body>
</html>';
    }
    
    /**
     * Replace template variables with actual values
     * 
     * @param string $template Email template with placeholders
     * @param array $variables Key-value pairs for replacement
     * @return string Template with variables replaced
     */
    private function replace_template_variables($template, $variables) {
        foreach ($variables as $key => $value) {
            // Handle user name specially - add space if present, empty if not
            if ($key === 'USER_NAME' && !empty($value)) {
                $value = ' ' . esc_html($value);
            } elseif ($key === 'USER_NAME') {
                $value = '';
            }
            
            // Replace placeholder with value
            $placeholder = '{{' . $key . '}}';
            $template = str_replace($placeholder, $value, $template);
        }
        
        return $template;
    }
    
    /**
     * Format blueprint content for email display
     * 
     * @param string $markdown_content Blueprint content in markdown
     * @return string HTML formatted content
     */
    private function format_blueprint_for_email($markdown_content) {
        // Convert markdown to HTML
        $html = $this->markdown_to_html($markdown_content);
        
        // Apply email-safe styling
        $html = $this->apply_email_styles($html);
        
        return $html;
    }
    
    /**
     * Convert markdown to HTML (public method for API use)
     * 
     * @param string $markdown Markdown content
     * @return string HTML content
     */
    public function convert_markdown_to_html($markdown) {
        return $this->markdown_to_html($markdown);
    }
    
    /**
     * Convert markdown to HTML
     * 
     * @param string $markdown Markdown content
     * @return string HTML content
     */
    private function markdown_to_html($markdown) {
        // Convert headers
        $html = preg_replace('/^#### (.+)$/m', '<h4>$1</h4>', $markdown);
        $html = preg_replace('/^### (.+)$/m', '<h3>$1</h3>', $html);
        $html = preg_replace('/^## (.+)$/m', '<h2>$1</h2>', $html);
        $html = preg_replace('/^# (.+)$/m', '<h1>$1</h1>', $html);
        
        // Convert bold
        $html = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', $html);
        
        // Convert italic
        $html = preg_replace('/\*(.+?)\*/', '<em>$1</em>', $html);
        
        // Convert unordered lists
        $html = preg_replace_callback('/^(\s*)[-*+] (.+)$/m', function($matches) {
            $indent = strlen($matches[1]);
            $content = $matches[2];
            return str_repeat('  ', $indent) . '<li>' . $content . '</li>';
        }, $html);
        
        // Wrap list items in ul tags
        $html = preg_replace('/(<li>.*<\/li>)/s', '<ul>$1</ul>', $html);
        
        // Convert paragraphs (double line breaks)
        $html = preg_replace('/\n\n+/', '</p><p>', $html);
        $html = '<p>' . $html . '</p>';
        
        // Clean up empty paragraphs
        $html = preg_replace('/<p>\s*<\/p>/', '', $html);
        
        // Clean up paragraphs around headers and lists
        $html = preg_replace('/<p>(<h[1-4]>)/', '$1', $html);
        $html = preg_replace('/(<\/h[1-4]>)<\/p>/', '$1', $html);
        $html = preg_replace('/<p>(<ul>)/', '$1', $html);
        $html = preg_replace('/(<\/ul>)<\/p>/', '$1', $html);
        
        return $html;
    }
    
    /**
     * Apply email-safe inline styles to HTML
     * 
     * @param string $html HTML content
     * @return string HTML with inline styles
     */
    private function apply_email_styles($html) {
        // Add inline styles for email compatibility
        $html = str_replace('<h1>', '<h1 style="color: #0f172a; font-size: 24px; margin: 20px 0 10px 0;">', $html);
        $html = str_replace('<h2>', '<h2 style="color: #0f172a; font-size: 22px; margin: 20px 0 10px 0;">', $html);
        $html = str_replace('<h3>', '<h3 style="color: #1e293b; font-size: 18px; margin: 18px 0 8px 0;">', $html);
        $html = str_replace('<h4>', '<h4 style="color: #1e293b; font-size: 16px; margin: 16px 0 8px 0;">', $html);
        $html = str_replace('<p>', '<p style="color: #475569; margin: 10px 0; line-height: 1.6;">', $html);
        $html = str_replace('<ul>', '<ul style="margin: 10px 0; padding-left: 20px;">', $html);
        $html = str_replace('<li>', '<li style="color: #475569; margin: 8px 0;">', $html);
        $html = str_replace('<strong>', '<strong style="color: #0f172a;">', $html);
        
        return $html;
    }
    
    /**
     * Get email headers
     * 
     * @return array Email headers
     */
    private function get_email_headers() {
        $headers = [];
        
        // Set From header
        $headers[] = 'From: ' . $this->from_name . ' <' . $this->from_email . '>';
        
        // Set Reply-To header
        $headers[] = 'Reply-To: ' . $this->from_email;
        
        // Set Content-Type for HTML email
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        
        return $headers;
    }
    
    /**
     * Log successful email delivery
     * 
     * @param string $message Log message
     */
    private function log_success($message) {
        error_log(sprintf(
            '[AI WORKFLOW EMAIL SUCCESS] %s | Time: %s',
            $message,
            current_time('mysql')
        ));
    }
    
    /**
     * Log email delivery error
     * 
     * @param string $message Error message
     */
    private function log_error($message) {
        error_log(sprintf(
            '[AI WORKFLOW EMAIL ERROR] %s | Time: %s',
            $message,
            current_time('mysql')
        ));
    }
}
