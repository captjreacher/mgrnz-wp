<?php
/**
 * Error Logger and Monitoring Class
 * 
 * Provides comprehensive error logging, success tracking, and monitoring
 * for the AI Workflow Wizard system with admin interface for viewing logs.
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Error_Logger {
    
    /**
     * Log levels
     */
    const LEVEL_ERROR = 'error';
    const LEVEL_WARNING = 'warning';
    const LEVEL_SUCCESS = 'success';
    const LEVEL_INFO = 'info';
    
    /**
     * Log categories
     */
    const CATEGORY_AI_SERVICE = 'ai_service';
    const CATEGORY_EMAIL = 'email';
    const CATEGORY_SUBMISSION = 'submission';
    const CATEGORY_CACHE = 'cache';
    const CATEGORY_RATE_LIMIT = 'rate_limit';
    const CATEGORY_VALIDATION = 'validation';
    const CATEGORY_SYSTEM = 'system';
    
    /**
     * Custom database table name
     * @var string
     */
    private $table_name;
    
    /**
     * Critical error notification email
     * @var string
     */
    private $notification_email;
    
    /**
     * Whether to send email notifications for critical errors
     * @var bool
     */
    private $enable_notifications;
    
    /**
     * Constructor
     */
    public function __construct() {
        global $wpdb;
        $this->table_name = $wpdb->prefix . 'mgrnz_ai_workflow_logs';
        $this->notification_email = get_option('mgrnz_error_notification_email', get_option('admin_email'));
        $this->enable_notifications = get_option('mgrnz_enable_error_notifications', true);
        
        // Register admin hooks
        add_action('admin_menu', [$this, 'register_admin_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_scripts']);
        
        // Register AJAX handlers
        add_action('wp_ajax_mgrnz_get_logs', [$this, 'ajax_get_logs']);
        add_action('wp_ajax_mgrnz_clear_logs', [$this, 'ajax_clear_logs']);
        add_action('wp_ajax_mgrnz_export_logs', [$this, 'ajax_export_logs']);
    }
    
    /**
     * Create database table for logs
     */
    public static function create_table() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_ai_workflow_logs';
        $charset_collate = $wpdb->get_charset_collate();
        
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            log_level varchar(20) NOT NULL,
            category varchar(50) NOT NULL,
            message text NOT NULL,
            context longtext,
            submission_id bigint(20),
            ip_address varchar(45),
            user_agent text,
            created_at datetime NOT NULL,
            PRIMARY KEY  (id),
            KEY log_level (log_level),
            KEY category (category),
            KEY created_at (created_at),
            KEY submission_id (submission_id)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
    
    /**
     * Log an error
     * 
     * @param string $category Log category
     * @param string $message Error message
     * @param array $context Additional context data
     * @param int|null $submission_id Related submission ID
     * @return int|false Log ID or false on failure
     */
    public function log_error($category, $message, $context = [], $submission_id = null) {
        $log_id = $this->log(self::LEVEL_ERROR, $category, $message, $context, $submission_id);
        
        // Send notification for critical errors
        if ($this->is_critical_error($category, $message)) {
            $this->send_critical_error_notification($category, $message, $context);
        }
        
        // Also log to PHP error log for redundancy
        error_log(sprintf(
            '[AI WORKFLOW ERROR] Category: %s | Message: %s | Context: %s',
            $category,
            $message,
            json_encode($context)
        ));
        
        return $log_id;
    }
    
    /**
     * Log a warning
     * 
     * @param string $category Log category
     * @param string $message Warning message
     * @param array $context Additional context data
     * @param int|null $submission_id Related submission ID
     * @return int|false Log ID or false on failure
     */
    public function log_warning($category, $message, $context = [], $submission_id = null) {
        $log_id = $this->log(self::LEVEL_WARNING, $category, $message, $context, $submission_id);
        
        error_log(sprintf(
            '[AI WORKFLOW WARNING] Category: %s | Message: %s',
            $category,
            $message
        ));
        
        return $log_id;
    }
    
    /**
     * Log a success event
     * 
     * @param string $category Log category
     * @param string $message Success message
     * @param array $context Additional context data (metrics, etc.)
     * @param int|null $submission_id Related submission ID
     * @return int|false Log ID or false on failure
     */
    public function log_success($category, $message, $context = [], $submission_id = null) {
        return $this->log(self::LEVEL_SUCCESS, $category, $message, $context, $submission_id);
    }
    
    /**
     * Log an info event
     * 
     * @param string $category Log category
     * @param string $message Info message
     * @param array $context Additional context data
     * @param int|null $submission_id Related submission ID
     * @return int|false Log ID or false on failure
     */
    public function log_info($category, $message, $context = [], $submission_id = null) {
        return $this->log(self::LEVEL_INFO, $category, $message, $context, $submission_id);
    }
    
    /**
     * Core logging method
     * 
     * @param string $level Log level
     * @param string $category Log category
     * @param string $message Log message
     * @param array $context Additional context data
     * @param int|null $submission_id Related submission ID
     * @return int|false Log ID or false on failure
     */
    private function log($level, $category, $message, $context = [], $submission_id = null) {
        global $wpdb;
        
        // Get client information
        $ip_address = $this->get_client_ip();
        $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field($_SERVER['HTTP_USER_AGENT']) : '';
        
        // Insert log entry
        $result = $wpdb->insert(
            $this->table_name,
            [
                'log_level' => $level,
                'category' => $category,
                'message' => $message,
                'context' => json_encode($context),
                'submission_id' => $submission_id,
                'ip_address' => $ip_address,
                'user_agent' => $user_agent,
                'created_at' => current_time('mysql')
            ],
            [
                '%s', // log_level
                '%s', // category
                '%s', // message
                '%s', // context
                '%d', // submission_id
                '%s', // ip_address
                '%s', // user_agent
                '%s'  // created_at
            ]
        );
        
        if ($result === false) {
            error_log('[AI WORKFLOW] Failed to insert log entry into database');
            return false;
        }
        
        return $wpdb->insert_id;
    }
    
    /**
     * Check if error is critical and requires notification
     * 
     * @param string $category Error category
     * @param string $message Error message
     * @return bool True if critical
     */
    private function is_critical_error($category, $message) {
        // Critical categories
        $critical_categories = [
            self::CATEGORY_AI_SERVICE,
            self::CATEGORY_SYSTEM
        ];
        
        if (in_array($category, $critical_categories)) {
            return true;
        }
        
        // Critical keywords in message
        $critical_keywords = [
            'API key',
            'authentication failed',
            'rate limit exceeded',
            'service unavailable',
            'database error',
            'fatal'
        ];
        
        foreach ($critical_keywords as $keyword) {
            if (stripos($message, $keyword) !== false) {
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * Send email notification for critical errors
     * 
     * @param string $category Error category
     * @param string $message Error message
     * @param array $context Error context
     */
    private function send_critical_error_notification($category, $message, $context) {
        if (!$this->enable_notifications) {
            return;
        }
        
        // Check if we've already sent a notification recently (throttle)
        $throttle_key = 'mgrnz_error_notification_sent_' . md5($category . $message);
        if (get_transient($throttle_key)) {
            return; // Already sent notification for this error recently
        }
        
        // Set throttle (don't send same error notification more than once per hour)
        set_transient($throttle_key, true, HOUR_IN_SECONDS);
        
        // Prepare email
        $subject = '[CRITICAL] AI Workflow Error - ' . get_bloginfo('name');
        
        $body = "A critical error occurred in the AI Workflow Wizard system:\n\n";
        $body .= "Category: " . $category . "\n";
        $body .= "Message: " . $message . "\n";
        $body .= "Time: " . current_time('mysql') . "\n\n";
        
        if (!empty($context)) {
            $body .= "Context:\n";
            $body .= print_r($context, true) . "\n\n";
        }
        
        $body .= "Please check the error logs in WordPress admin for more details.\n";
        $body .= "View logs: " . admin_url('admin.php?page=mgrnz-ai-workflow-logs') . "\n";
        
        // Send email
        wp_mail($this->notification_email, $subject, $body);
        
        // Log that notification was sent
        error_log(sprintf(
            '[AI WORKFLOW] Critical error notification sent to: %s',
            $this->notification_email
        ));
    }
    
    /**
     * Get logs with filtering and pagination
     * 
     * @param array $args Query arguments
     * @return array Logs and pagination info
     */
    public function get_logs($args = []) {
        global $wpdb;
        
        // Default arguments
        $defaults = [
            'level' => '',
            'category' => '',
            'submission_id' => null,
            'date_from' => '',
            'date_to' => '',
            'search' => '',
            'per_page' => 50,
            'page' => 1,
            'orderby' => 'created_at',
            'order' => 'DESC'
        ];
        
        $args = wp_parse_args($args, $defaults);
        
        // Build WHERE clause
        $where = ['1=1'];
        $where_values = [];
        
        if (!empty($args['level'])) {
            $where[] = 'log_level = %s';
            $where_values[] = $args['level'];
        }
        
        if (!empty($args['category'])) {
            $where[] = 'category = %s';
            $where_values[] = $args['category'];
        }
        
        if (!empty($args['submission_id'])) {
            $where[] = 'submission_id = %d';
            $where_values[] = $args['submission_id'];
        }
        
        if (!empty($args['date_from'])) {
            $where[] = 'created_at >= %s';
            $where_values[] = $args['date_from'];
        }
        
        if (!empty($args['date_to'])) {
            $where[] = 'created_at <= %s';
            $where_values[] = $args['date_to'];
        }
        
        if (!empty($args['search'])) {
            $where[] = 'message LIKE %s';
            $where_values[] = '%' . $wpdb->esc_like($args['search']) . '%';
        }
        
        $where_clause = implode(' AND ', $where);
        
        // Get total count
        $count_query = "SELECT COUNT(*) FROM {$this->table_name} WHERE {$where_clause}";
        if (!empty($where_values)) {
            $count_query = $wpdb->prepare($count_query, $where_values);
        }
        $total = $wpdb->get_var($count_query);
        
        // Calculate pagination
        $offset = ($args['page'] - 1) * $args['per_page'];
        $total_pages = ceil($total / $args['per_page']);
        
        // Get logs
        $query = "SELECT * FROM {$this->table_name} 
                  WHERE {$where_clause} 
                  ORDER BY {$args['orderby']} {$args['order']} 
                  LIMIT %d OFFSET %d";
        
        $query_values = array_merge($where_values, [$args['per_page'], $offset]);
        $query = $wpdb->prepare($query, $query_values);
        
        $logs = $wpdb->get_results($query, ARRAY_A);
        
        // Decode context JSON
        foreach ($logs as &$log) {
            $log['context'] = json_decode($log['context'], true);
        }
        
        return [
            'logs' => $logs,
            'total' => $total,
            'page' => $args['page'],
            'per_page' => $args['per_page'],
            'total_pages' => $total_pages
        ];
    }
    
    /**
     * Get log statistics
     * 
     * @param string $period Period for stats (today, week, month, all)
     * @return array Statistics
     */
    public function get_statistics($period = 'today') {
        global $wpdb;
        
        // Determine date range
        $date_from = '';
        switch ($period) {
            case 'today':
                $date_from = date('Y-m-d 00:00:00');
                break;
            case 'week':
                $date_from = date('Y-m-d 00:00:00', strtotime('-7 days'));
                break;
            case 'month':
                $date_from = date('Y-m-d 00:00:00', strtotime('-30 days'));
                break;
            case 'all':
            default:
                $date_from = '1970-01-01 00:00:00';
                break;
        }
        
        $where = $wpdb->prepare('WHERE created_at >= %s', $date_from);
        
        // Get counts by level
        $level_counts = $wpdb->get_results(
            "SELECT log_level, COUNT(*) as count 
             FROM {$this->table_name} 
             {$where} 
             GROUP BY log_level",
            ARRAY_A
        );
        
        // Get counts by category
        $category_counts = $wpdb->get_results(
            "SELECT category, COUNT(*) as count 
             FROM {$this->table_name} 
             {$where} 
             GROUP BY category 
             ORDER BY count DESC 
             LIMIT 10",
            ARRAY_A
        );
        
        // Get error rate over time (last 24 hours)
        $hourly_errors = $wpdb->get_results(
            "SELECT DATE_FORMAT(created_at, '%Y-%m-%d %H:00:00') as hour, 
                    COUNT(*) as count 
             FROM {$this->table_name} 
             WHERE created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR) 
             AND log_level = 'error'
             GROUP BY hour 
             ORDER BY hour ASC",
            ARRAY_A
        );
        
        // Get recent critical errors
        $critical_errors = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * FROM {$this->table_name} 
                 WHERE log_level = 'error' 
                 AND created_at >= %s 
                 ORDER BY created_at DESC 
                 LIMIT 5",
                $date_from
            ),
            ARRAY_A
        );
        
        return [
            'period' => $period,
            'level_counts' => $level_counts,
            'category_counts' => $category_counts,
            'hourly_errors' => $hourly_errors,
            'critical_errors' => $critical_errors
        ];
    }
    
    /**
     * Clear old logs
     * 
     * @param int $days Delete logs older than this many days
     * @return int Number of logs deleted
     */
    public function clear_old_logs($days = 30) {
        global $wpdb;
        
        $date = date('Y-m-d H:i:s', strtotime("-{$days} days"));
        
        $deleted = $wpdb->query(
            $wpdb->prepare(
                "DELETE FROM {$this->table_name} WHERE created_at < %s",
                $date
            )
        );
        
        $this->log_info(
            self::CATEGORY_SYSTEM,
            "Cleared {$deleted} log entries older than {$days} days"
        );
        
        return $deleted;
    }
    
    /**
     * Get client IP address
     * 
     * @return string Client IP
     */
    private function get_client_ip() {
        $ip_keys = [
            'HTTP_CF_CONNECTING_IP',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_REAL_IP',
            'REMOTE_ADDR'
        ];
        
        foreach ($ip_keys as $key) {
            if (isset($_SERVER[$key]) && !empty($_SERVER[$key])) {
                $ip = sanitize_text_field($_SERVER[$key]);
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
     * Register admin menu
     */
    public function register_admin_menu() {
        add_submenu_page(
            'edit.php?post_type=ai_workflow_sub',
            'Error Logs & Monitoring',
            'Error Logs',
            'manage_options',
            'mgrnz-ai-workflow-logs',
            [$this, 'render_admin_page']
        );
    }
    
    /**
     * Enqueue admin scripts and styles
     */
    public function enqueue_admin_scripts($hook) {
        if ($hook !== 'ai_workflow_sub_page_mgrnz-ai-workflow-logs') {
            return;
        }
        
        wp_enqueue_style('mgrnz-logs-admin', plugins_url('assets/css/logs-admin.css', dirname(__FILE__)), [], '1.0.0');
        wp_enqueue_script('mgrnz-logs-admin', plugins_url('assets/js/logs-admin.js', dirname(__FILE__)), ['jquery'], '1.0.0', true);
        
        wp_localize_script('mgrnz-logs-admin', 'mgrnzLogs', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('mgrnz_logs_nonce')
        ]);
    }
    
    /**
     * Render admin page
     */
    public function render_admin_page() {
        if (!current_user_can('manage_options')) {
            wp_die('Unauthorized');
        }
        
        $stats = $this->get_statistics('today');
        
        include dirname(__FILE__) . '/../views/logs-admin.php';
    }
    
    /**
     * AJAX handler to get logs
     */
    public function ajax_get_logs() {
        check_ajax_referer('mgrnz_logs_nonce', 'nonce');
        
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized']);
        }
        
        $args = [
            'level' => isset($_POST['level']) ? sanitize_text_field($_POST['level']) : '',
            'category' => isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '',
            'date_from' => isset($_POST['date_from']) ? sanitize_text_field($_POST['date_from']) : '',
            'date_to' => isset($_POST['date_to']) ? sanitize_text_field($_POST['date_to']) : '',
            'search' => isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '',
            'page' => isset($_POST['page']) ? intval($_POST['page']) : 1,
            'per_page' => isset($_POST['per_page']) ? intval($_POST['per_page']) : 50
        ];
        
        $result = $this->get_logs($args);
        
        wp_send_json_success($result);
    }
    
    /**
     * AJAX handler to clear logs
     */
    public function ajax_clear_logs() {
        check_ajax_referer('mgrnz_logs_nonce', 'nonce');
        
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized']);
        }
        
        $days = isset($_POST['days']) ? intval($_POST['days']) : 30;
        $deleted = $this->clear_old_logs($days);
        
        wp_send_json_success([
            'message' => "Cleared {$deleted} log entries",
            'deleted' => $deleted
        ]);
    }
    
    /**
     * AJAX handler to export logs
     */
    public function ajax_export_logs() {
        check_ajax_referer('mgrnz_logs_nonce', 'nonce');
        
        if (!current_user_can('manage_options')) {
            wp_die('Unauthorized');
        }
        
        $args = [
            'level' => isset($_GET['level']) ? sanitize_text_field($_GET['level']) : '',
            'category' => isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '',
            'date_from' => isset($_GET['date_from']) ? sanitize_text_field($_GET['date_from']) : '',
            'date_to' => isset($_GET['date_to']) ? sanitize_text_field($_GET['date_to']) : '',
            'per_page' => 10000, // Export all matching logs
            'page' => 1
        ];
        
        $result = $this->get_logs($args);
        
        // Generate CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="ai-workflow-logs-' . date('Y-m-d') . '.csv"');
        
        $output = fopen('php://output', 'w');
        
        // CSV headers
        fputcsv($output, ['ID', 'Level', 'Category', 'Message', 'Submission ID', 'IP Address', 'Created At']);
        
        // CSV rows
        foreach ($result['logs'] as $log) {
            fputcsv($output, [
                $log['id'],
                $log['log_level'],
                $log['category'],
                $log['message'],
                $log['submission_id'] ?: '',
                $log['ip_address'],
                $log['created_at']
            ]);
        }
        
        fclose($output);
        exit;
    }
}
