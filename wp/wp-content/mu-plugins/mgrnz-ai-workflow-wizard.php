<?php
/**
 * Plugin Name: MGRNZ AI Workflow Wizard
 * Plugin URI: https://mgrnz.com
 * Description: Complete AI-powered workflow analysis system with wizard interface, AI integration, data persistence, and email delivery.
 * Version: 1.0.0
 * Author: MGRNZ
 * Author URI: https://mgrnz.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mgrnz
 * 
 * @package MGRNZ_AI_Workflow
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('MGRNZ_AI_WORKFLOW_VERSION', '1.0.0');
define('MGRNZ_AI_WORKFLOW_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('MGRNZ_AI_WORKFLOW_PLUGIN_URL', plugin_dir_url(__FILE__));
define('MGRNZ_AI_WORKFLOW_INCLUDES_DIR', MGRNZ_AI_WORKFLOW_PLUGIN_DIR . 'includes/');

/**
 * Main plugin class
 */
class MGRNZ_AI_Workflow_Wizard {
    
    /**
     * Single instance of the class
     * 
     * @var MGRNZ_AI_Workflow_Wizard
     */
    private static $instance = null;
    
    /**
     * AI Service instance
     * 
     * @var MGRNZ_AI_Service
     */
    public $ai_service;
    
    /**
     * Email Service instance
     * 
     * @var MGRNZ_Email_Service
     */
    public $email_service;
    
    /**
     * Submission CPT instance
     * 
     * @var MGRNZ_Submission_CPT
     */
    public $submission_cpt;
    
    /**
     * Settings instance
     * 
     * @var MGRNZ_AI_Settings
     */
    public $settings;
    
    /**
     * Cache Service instance
     * 
     * @var MGRNZ_Blueprint_Cache
     */
    public $cache_service;
    
    /**
     * Error Logger instance
     * 
     * @var MGRNZ_Error_Logger
     */
    public $error_logger;
    
    /**
     * Submission Dashboard instance
     * 
     * @var MGRNZ_Submission_Dashboard
     */
    public $submission_dashboard;
    
    /**
     * Get single instance of the class
     * 
     * @return MGRNZ_AI_Workflow_Wizard
     */
    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Constructor - initialize the plugin
     */
    private function __construct() {
        // Load dependencies
        $this->load_dependencies();
        
        // Initialize components
        $this->init_components();
        
        // Register hooks
        $this->register_hooks();
        
        // Log plugin initialization
        $this->log_initialization();
    }
    
    /**
     * Load required files
     */
    private function load_dependencies() {
        // Load configuration
        if (file_exists(MGRNZ_AI_WORKFLOW_PLUGIN_DIR . 'config/ai-workflow-config.php')) {
            require_once MGRNZ_AI_WORKFLOW_PLUGIN_DIR . 'config/ai-workflow-config.php';
        }
        
        // Load class files (only if not already loaded by endpoint file)
        if (!class_exists('MGRNZ_AI_Service')) {
            require_once MGRNZ_AI_WORKFLOW_INCLUDES_DIR . 'class-ai-service.php';
        }
        if (!class_exists('MGRNZ_Email_Service')) {
            require_once MGRNZ_AI_WORKFLOW_INCLUDES_DIR . 'class-email-service.php';
        }
        if (!class_exists('MGRNZ_Submission_CPT')) {
            require_once MGRNZ_AI_WORKFLOW_INCLUDES_DIR . 'class-submission-cpt.php';
        }
        if (!class_exists('MGRNZ_AI_Settings')) {
            require_once MGRNZ_AI_WORKFLOW_INCLUDES_DIR . 'class-ai-settings.php';
        }
        if (!class_exists('MGRNZ_Blueprint_Cache')) {
            require_once MGRNZ_AI_WORKFLOW_INCLUDES_DIR . 'class-blueprint-cache.php';
        }
        if (!class_exists('MGRNZ_Error_Logger')) {
            require_once MGRNZ_AI_WORKFLOW_INCLUDES_DIR . 'class-error-logger.php';
        }
        if (!class_exists('MGRNZ_Submission_Dashboard')) {
            require_once MGRNZ_AI_WORKFLOW_INCLUDES_DIR . 'class-submission-dashboard.php';
        }
        
        // Note: REST API endpoint handler (mgrnz-ai-workflow-endpoint.php) is loaded
        // separately as a mu-plugin and handles its own dependencies
    }
    
    /**
     * Initialize plugin components
     */
    private function init_components() {
        // Initialize error logger first (other components may use it)
        $this->error_logger = new MGRNZ_Error_Logger();
        
        // Initialize services
        $this->ai_service = new MGRNZ_AI_Service();
        $this->email_service = new MGRNZ_Email_Service();
        $this->cache_service = new MGRNZ_Blueprint_Cache();
        
        // Initialize custom post type
        $this->submission_cpt = new MGRNZ_Submission_CPT();
        
        // Initialize settings page
        $this->settings = new MGRNZ_AI_Settings();
        
        // Initialize submission dashboard
        $this->submission_dashboard = new MGRNZ_Submission_Dashboard();
    }
    
    /**
     * Register WordPress hooks
     */
    private function register_hooks() {
        // Activation hook
        register_activation_hook(__FILE__, [$this, 'activate']);
        
        // Deactivation hook
        register_deactivation_hook(__FILE__, [$this, 'deactivate']);
        
        // Admin notices
        add_action('admin_notices', [$this, 'admin_notices']);
        
        // Add settings link to plugins page
        add_filter('plugin_action_links_' . plugin_basename(__FILE__), [$this, 'add_settings_link']);
    }
    
    /**
     * Plugin activation
     */
    public function activate() {
        // Create error logs database table
        MGRNZ_Error_Logger::create_table();

        // Create wizard tables
        $this->create_tables();
        
        // Flush rewrite rules to register custom post type
        flush_rewrite_rules();
        
        // Set default options if not already set
        $this->set_default_options();
        
        // Log activation
        error_log(sprintf(
            '[AI WORKFLOW PLUGIN] Activated | Version: %s | Time: %s',
            MGRNZ_AI_WORKFLOW_VERSION,
            current_time('mysql')
        ));
        
        // Set activation flag for admin notice
        set_transient('mgrnz_ai_workflow_activated', true, 60);
    }

    /**
     * Create custom database tables
     */
    public function create_tables() {
        global $wpdb;
        
        $charset_collate = $wpdb->get_charset_collate();
        
        // Table 1: Blueprint Subscriptions
        $table_name_subs = $wpdb->prefix . 'mgrnz_blueprint_subscriptions';
        $sql_subs = "CREATE TABLE $table_name_subs (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            name varchar(100) NOT NULL,
            email varchar(100) NOT NULL,
            subscription_type varchar(50) DEFAULT 'blueprint_download' NOT NULL,
            blueprint_id bigint(20) UNSIGNED NOT NULL,
            subscribed_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            download_count int(11) DEFAULT 0 NOT NULL,
            last_download_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            PRIMARY KEY  (id),
            KEY email (email),
            KEY blueprint_id (blueprint_id)
        ) $charset_collate;";
        
        // Table 2: Quote Requests
        $table_name_quotes = $wpdb->prefix . 'mgrnz_quote_requests';
        $sql_quotes = "CREATE TABLE $table_name_quotes (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            blueprint_id bigint(20) UNSIGNED NOT NULL,
            name varchar(100) NOT NULL,
            email varchar(100) NOT NULL,
            phone varchar(50) DEFAULT '',
            notes text DEFAULT '',
            requested_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            status varchar(50) DEFAULT 'new' NOT NULL,
            PRIMARY KEY  (id),
            KEY blueprint_id (blueprint_id),
            KEY status (status)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql_subs);
        dbDelta($sql_quotes);
    }
    
    /**
     * Plugin deactivation
     */
    public function deactivate() {
        // Flush rewrite rules
        flush_rewrite_rules();
        
        // Clear scheduled cron events
        $this->clear_scheduled_events();
        
        // Log deactivation
        error_log(sprintf(
            '[AI WORKFLOW PLUGIN] Deactivated | Time: %s',
            current_time('mysql')
        ));
    }
    
    /**
     * Set default plugin options
     */
    private function set_default_options() {
        // AI Provider settings
        if (get_option('mgrnz_ai_provider') === false) {
            add_option('mgrnz_ai_provider', 'openai');
        }
        
        if (get_option('mgrnz_ai_model') === false) {
            add_option('mgrnz_ai_model', 'gpt-4o-mini');
        }
        
        if (get_option('mgrnz_ai_max_tokens') === false) {
            add_option('mgrnz_ai_max_tokens', 2000);
        }
        
        if (get_option('mgrnz_ai_temperature') === false) {
            add_option('mgrnz_ai_temperature', 0.7);
        }
        
        // Performance settings
        if (get_option('mgrnz_enable_cache') === false) {
            add_option('mgrnz_enable_cache', true);
        }
        
        // Email settings
        if (get_option('mgrnz_email_from_name') === false) {
            add_option('mgrnz_email_from_name', get_bloginfo('name'));
        }
        
        if (get_option('mgrnz_email_from_address') === false) {
            add_option('mgrnz_email_from_address', get_option('admin_email'));
        }
        
        // Error notification settings
        if (get_option('mgrnz_enable_error_notifications') === false) {
            add_option('mgrnz_enable_error_notifications', true);
        }
        
        if (get_option('mgrnz_error_notification_email') === false) {
            add_option('mgrnz_error_notification_email', get_option('admin_email'));
        }
    }
    
    /**
     * Clear all scheduled cron events
     */
    private function clear_scheduled_events() {
        // Get all scheduled blueprint email events
        $cron_array = _get_cron_array();
        
        if (empty($cron_array)) {
            return;
        }
        
        $cleared_count = 0;
        
        foreach ($cron_array as $timestamp => $cron) {
            if (isset($cron['mgrnz_send_blueprint_email'])) {
                foreach ($cron['mgrnz_send_blueprint_email'] as $key => $event) {
                    wp_unschedule_event($timestamp, 'mgrnz_send_blueprint_email', $event['args']);
                    $cleared_count++;
                }
            }
        }
        
        if ($cleared_count > 0) {
            error_log(sprintf(
                '[AI WORKFLOW PLUGIN] Cleared %d scheduled email events',
                $cleared_count
            ));
        }
    }
    
    /**
     * Display admin notices
     */
    public function admin_notices() {
        // Show activation notice
        if (get_transient('mgrnz_ai_workflow_activated')) {
            delete_transient('mgrnz_ai_workflow_activated');
            
            $settings_url = admin_url('options-general.php?page=mgrnz-ai-settings');
            
            echo '<div class="notice notice-success is-dismissible">';
            echo '<p><strong>AI Workflow Wizard activated!</strong> ';
            echo 'Please <a href="' . esc_url($settings_url) . '">configure your AI provider settings</a> to get started.</p>';
            echo '</div>';
        }
        
        // Check if API key is configured
        if (current_user_can('manage_options')) {
            $api_key = get_option('mgrnz_ai_api_key', '');
            
            if (empty($api_key)) {
                $settings_url = admin_url('options-general.php?page=mgrnz-ai-settings');
                
                echo '<div class="notice notice-warning">';
                echo '<p><strong>AI Workflow Wizard:</strong> ';
                echo 'AI API key is not configured. ';
                echo '<a href="' . esc_url($settings_url) . '">Configure settings</a> to enable blueprint generation.</p>';
                echo '</div>';
            }
        }
    }
    
    /**
     * Add settings link to plugins page
     * 
     * @param array $links Existing plugin action links
     * @return array Modified plugin action links
     */
    public function add_settings_link($links) {
        $settings_link = '<a href="' . admin_url('options-general.php?page=mgrnz-ai-settings') . '">Settings</a>';
        array_unshift($links, $settings_link);
        return $links;
    }
    
    /**
     * Log plugin initialization
     */
    private function log_initialization() {
        error_log(sprintf(
            '[AI WORKFLOW PLUGIN] Initialized | Version: %s | PHP: %s | WordPress: %s',
            MGRNZ_AI_WORKFLOW_VERSION,
            PHP_VERSION,
            get_bloginfo('version')
        ));
    }
    
    /**
     * Get plugin version
     * 
     * @return string Plugin version
     */
    public function get_version() {
        return MGRNZ_AI_WORKFLOW_VERSION;
    }
    
    /**
     * Check if plugin is properly configured
     * 
     * @return bool True if configured
     */
    public function is_configured() {
        $api_key = get_option('mgrnz_ai_api_key', '');
        return !empty($api_key);
    }
}

/**
 * Initialize the plugin
 * 
 * @return MGRNZ_AI_Workflow_Wizard
 */
function mgrnz_ai_workflow_wizard() {
    return MGRNZ_AI_Workflow_Wizard::get_instance();
}

// Initialize plugin
mgrnz_ai_workflow_wizard();
