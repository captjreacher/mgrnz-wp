<?php
/**
 * AI Workflow Settings Page
 * 
 * Provides WordPress admin interface for configuring AI service integration.
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_AI_Settings {
    
    private $option_group = 'mgrnz_ai_settings';
    private $page_slug = 'mgrnz-ai-settings';
    
    /**
     * Initialize settings page
     */
    public function __construct() {
        add_action('admin_menu', [$this, 'add_settings_page']);
        add_action('admin_init', [$this, 'register_settings']);
        add_action('wp_ajax_mgrnz_test_ai_connection', [$this, 'test_ai_connection']);
    }
    
    /**
     * Add settings page to WordPress admin menu
     */
    public function add_settings_page() {
        add_options_page(
            'AI Workflow Settings',
            'AI Workflow',
            'manage_options',
            $this->page_slug,
            [$this, 'render_settings_page']
        );
    }
    
    /**
     * Register all settings fields
     */
    public function register_settings() {
        // AI Provider Settings Section
        add_settings_section(
            'mgrnz_ai_provider_section',
            'AI Provider Configuration',
            [$this, 'render_provider_section_description'],
            $this->page_slug
        );
        
        // AI Provider Selection
        register_setting($this->option_group, 'mgrnz_ai_provider', [
            'type' => 'string',
            'sanitize_callback' => [$this, 'sanitize_provider'],
            'default' => 'openai'
        ]);
        
        add_settings_field(
            'mgrnz_ai_provider',
            'AI Provider',
            [$this, 'render_provider_field'],
            $this->page_slug,
            'mgrnz_ai_provider_section'
        );
        
        // API Key
        register_setting($this->option_group, 'mgrnz_ai_api_key', [
            'type' => 'string',
            'sanitize_callback' => [$this, 'sanitize_api_key'],
            'default' => ''
        ]);
        
        add_settings_field(
            'mgrnz_ai_api_key',
            'API Key',
            [$this, 'render_api_key_field'],
            $this->page_slug,
            'mgrnz_ai_provider_section'
        );
        
        // Model Selection
        register_setting($this->option_group, 'mgrnz_ai_model', [
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => 'gpt-4'
        ]);
        
        add_settings_field(
            'mgrnz_ai_model',
            'AI Model',
            [$this, 'render_model_field'],
            $this->page_slug,
            'mgrnz_ai_provider_section'
        );
        
        // Performance Settings Section
        add_settings_section(
            'mgrnz_ai_performance_section',
            'Performance & Caching',
            [$this, 'render_performance_section_description'],
            $this->page_slug
        );
        
        // Enable Cache
        register_setting($this->option_group, 'mgrnz_enable_cache', [
            'type' => 'boolean',
            'sanitize_callback' => [$this, 'sanitize_boolean'],
            'default' => true
        ]);
        
        add_settings_field(
            'mgrnz_enable_cache',
            'Enable Blueprint Caching',
            [$this, 'render_enable_cache_field'],
            $this->page_slug,
            'mgrnz_ai_performance_section'
        );
        
        // MailerLite Settings Section
        add_settings_section(
            'mgrnz_mailerlite_section',
            'MailerLite Integration',
            [$this, 'render_mailerlite_section_description'],
            $this->page_slug
        );
        
        // MailerLite API Key
        register_setting($this->option_group, 'mgrnz_mailerlite_api_key', [
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => ''
        ]);
        
        add_settings_field(
            'mgrnz_mailerlite_api_key',
            'MailerLite API Key',
            [$this, 'render_mailerlite_api_key_field'],
            $this->page_slug,
            'mgrnz_mailerlite_section'
        );
        
        // MailerLite Group ID
        register_setting($this->option_group, 'mgrnz_mailerlite_group_id', [
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => ''
        ]);
        
        add_settings_field(
            'mgrnz_mailerlite_group_id',
            'MailerLite Group ID',
            [$this, 'render_mailerlite_group_id_field'],
            $this->page_slug,
            'mgrnz_mailerlite_section'
        );
        
        // Subscribe URL
        register_setting($this->option_group, 'mgrnz_subscribe_url', [
            'type' => 'string',
            'sanitize_callback' => 'esc_url_raw',
            'default' => ''
        ]);
        
        add_settings_field(
            'mgrnz_subscribe_url',
            'Subscribe Page URL',
            [$this, 'render_subscribe_url_field'],
            $this->page_slug,
            'mgrnz_mailerlite_section'
        );
        
        // Calendly Settings Section
        add_settings_section(
            'mgrnz_calendly_section',
            'Calendly Integration',
            [$this, 'render_calendly_section_description'],
            $this->page_slug
        );
        
        // Calendly URL
        register_setting($this->option_group, 'mgrnz_calendly_url', [
            'type' => 'string',
            'sanitize_callback' => 'esc_url_raw',
            'default' => ''
        ]);
        
        add_settings_field(
            'mgrnz_calendly_url',
            'Calendly Booking URL',
            [$this, 'render_calendly_url_field'],
            $this->page_slug,
            'mgrnz_calendly_section'
        );
        
        // Advanced Settings Section
        add_settings_section(
            'mgrnz_ai_advanced_section',
            'Advanced Settings',
            [$this, 'render_advanced_section_description'],
            $this->page_slug
        );
        
        // Max Tokens
        register_setting($this->option_group, 'mgrnz_ai_max_tokens', [
            'type' => 'integer',
            'sanitize_callback' => [$this, 'sanitize_max_tokens'],
            'default' => 2000
        ]);
        
        add_settings_field(
            'mgrnz_ai_max_tokens',
            'Max Tokens',
            [$this, 'render_max_tokens_field'],
            $this->page_slug,
            'mgrnz_ai_advanced_section'
        );
        
        // Temperature
        register_setting($this->option_group, 'mgrnz_ai_temperature', [
            'type' => 'number',
            'sanitize_callback' => [$this, 'sanitize_temperature'],
            'default' => 0.7
        ]);
        
        add_settings_field(
            'mgrnz_ai_temperature',
            'Temperature',
            [$this, 'render_temperature_field'],
            $this->page_slug,
            'mgrnz_ai_advanced_section'
        );
    }
    
    /**
     * Render settings page
     */
    public function render_settings_page() {
        if (!current_user_can('manage_options')) {
            return;
        }
        
        // Check if settings were saved
        if (isset($_GET['settings-updated'])) {
            add_settings_error(
                'mgrnz_ai_messages',
                'mgrnz_ai_message',
                'Settings saved successfully.',
                'updated'
            );
        }
        
        ?>
        <div class="wrap">
            <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
            
            <?php settings_errors('mgrnz_ai_messages'); ?>
            
            <div class="mgrnz-ai-settings-container">
                <form action="options.php" method="post">
                    <?php
                    settings_fields($this->option_group);
                    do_settings_sections($this->page_slug);
                    submit_button('Save Settings');
                    ?>
                </form>
                
                <div class="mgrnz-test-connection">
                    <h3>Test Connection</h3>
                    <p>Test your AI provider connection to ensure everything is configured correctly.</p>
                    <button type="button" id="mgrnz-test-connection-btn" class="button button-secondary">
                        Test Connection
                    </button>
                    <div id="mgrnz-test-result" style="margin-top: 10px;"></div>
                </div>
            </div>
            
            <style>
                .mgrnz-ai-settings-container {
                    max-width: 800px;
                }
                .mgrnz-test-connection {
                    margin-top: 30px;
                    padding: 20px;
                    background: #f9f9f9;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                }
                .mgrnz-test-result-success {
                    color: #46b450;
                    font-weight: bold;
                }
                .mgrnz-test-result-error {
                    color: #dc3232;
                    font-weight: bold;
                }
                .mgrnz-field-description {
                    color: #666;
                    font-size: 13px;
                    margin-top: 5px;
                }
            </style>
            
            <script>
            jQuery(document).ready(function($) {
                $('#mgrnz-test-connection-btn').on('click', function() {
                    var $btn = $(this);
                    var $result = $('#mgrnz-test-result');
                    
                    $btn.prop('disabled', true).text('Testing...');
                    $result.html('');
                    
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'mgrnz_test_ai_connection',
                            nonce: '<?php echo wp_create_nonce('mgrnz_test_connection'); ?>'
                        },
                        success: function(response) {
                            if (response.success) {
                                $result.html('<span class="mgrnz-test-result-success">✓ ' + response.data.message + '</span>');
                            } else {
                                $result.html('<span class="mgrnz-test-result-error">✗ ' + response.data.message + '</span>');
                            }
                        },
                        error: function() {
                            $result.html('<span class="mgrnz-test-result-error">✗ Connection test failed</span>');
                        },
                        complete: function() {
                            $btn.prop('disabled', false).text('Test Connection');
                        }
                    });
                });
            });
            </script>
        </div>
        <?php
    }
    
    /**
     * Section descriptions
     */
    public function render_provider_section_description() {
        echo '<p>Configure your AI service provider and authentication credentials. API keys are stored securely in the WordPress database.</p>';
    }
    
    public function render_performance_section_description() {
        echo '<p>Optimize performance by caching AI-generated blueprints. Identical submissions will return cached results, reducing API costs and response time.</p>';
        
        // Show cache statistics if caching is enabled
        if (get_option('mgrnz_enable_cache', true)) {
            require_once plugin_dir_path(__FILE__) . 'class-blueprint-cache.php';
            $cache_service = new MGRNZ_Blueprint_Cache();
            $stats = $cache_service->get_cache_stats();
            
            echo '<div style="background: #f0f0f1; padding: 10px; margin-top: 10px; border-radius: 4px;">';
            echo '<strong>Cache Statistics:</strong><br>';
            echo 'Cached Blueprints: ' . esc_html($stats['cached_blueprints']) . '<br>';
            echo 'Cache Expiration: ' . esc_html($stats['cache_expiration_days']) . ' days<br>';
            echo 'Status: ' . ($stats['cache_enabled'] ? '<span style="color: #46b450;">Enabled</span>' : '<span style="color: #dc3232;">Disabled</span>');
            echo '</div>';
        }
    }
    
    public function render_mailerlite_section_description() {
        echo '<p>Configure MailerLite for newsletter subscriptions from the AI workflow wizard. Get your API key from <a href="https://dashboard.mailerlite.com/integrations/api" target="_blank">MailerLite Dashboard</a>.</p>';
    }
    
    public function render_calendly_section_description() {
        echo '<p>Configure Calendly for consultation bookings. Users will be redirected to your Calendly page with pre-filled context from their workflow submission.</p>';
    }
    
    public function render_advanced_section_description() {
        echo '<p>Fine-tune AI generation parameters. Default values work well for most use cases.</p>';
    }
    
    /**
     * Render Enable Cache field
     */
    public function render_enable_cache_field() {
        $value = get_option('mgrnz_enable_cache', true);
        ?>
        <label>
            <input type="checkbox" 
                   name="mgrnz_enable_cache" 
                   id="mgrnz_enable_cache" 
                   value="1"
                   <?php checked($value, true); ?>>
            Enable caching of AI-generated blueprints
        </label>
        <p class="mgrnz-field-description">
            When enabled, identical submissions will return cached blueprints instead of calling the AI API. 
            This reduces costs and improves response time. Cache expires after 7 days.
        </p>
        <?php
        
        // Add clear cache button if caching is enabled
        if ($value) {
            ?>
            <div style="margin-top: 10px;">
                <button type="button" id="mgrnz-clear-cache-btn" class="button button-secondary">
                    Clear All Cached Blueprints
                </button>
                <span id="mgrnz-clear-cache-result" style="margin-left: 10px;"></span>
            </div>
            <script>
            jQuery(document).ready(function($) {
                $('#mgrnz-clear-cache-btn').on('click', function() {
                    if (!confirm('Are you sure you want to clear all cached blueprints?')) {
                        return;
                    }
                    
                    var $btn = $(this);
                    var $result = $('#mgrnz-clear-cache-result');
                    
                    $btn.prop('disabled', true).text('Clearing...');
                    $result.html('');
                    
                    $.ajax({
                        url: '<?php echo rest_url('mgrnz/v1/ai-workflow/cache/clear'); ?>',
                        type: 'POST',
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('X-WP-Nonce', '<?php echo wp_create_nonce('wp_rest'); ?>');
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                $result.html('<span style="color: #46b450;">✓ ' + response.message + '</span>');
                                setTimeout(function() {
                                    location.reload();
                                }, 1500);
                            } else {
                                $result.html('<span style="color: #dc3232;">✗ Failed to clear cache</span>');
                            }
                        },
                        error: function() {
                            $result.html('<span style="color: #dc3232;">✗ Error clearing cache</span>');
                        },
                        complete: function() {
                            $btn.prop('disabled', false).text('Clear All Cached Blueprints');
                        }
                    });
                });
            });
            </script>
            <?php
        }
    }
    
    /**
     * Render AI Provider field
     */
    public function render_provider_field() {
        $value = get_option('mgrnz_ai_provider', 'openai');
        ?>
        <select name="mgrnz_ai_provider" id="mgrnz_ai_provider">
            <option value="openai" <?php selected($value, 'openai'); ?>>OpenAI</option>
            <option value="anthropic" <?php selected($value, 'anthropic'); ?>>Anthropic (Claude)</option>
        </select>
        <p class="mgrnz-field-description">
            Select your preferred AI provider. OpenAI uses GPT models, Anthropic uses Claude models.
        </p>
        <?php
    }
    
    /**
     * Render API Key field
     */
    public function render_api_key_field() {
        $value = get_option('mgrnz_ai_api_key', '');
        $masked_value = !empty($value) ? str_repeat('•', 20) . substr($value, -4) : '';
        ?>
        <input type="password" 
               name="mgrnz_ai_api_key" 
               id="mgrnz_ai_api_key" 
               value="<?php echo esc_attr($value); ?>"
               placeholder="<?php echo esc_attr($masked_value ?: 'Enter your API key'); ?>"
               class="regular-text"
               autocomplete="off">
        <p class="mgrnz-field-description">
            Your API key from <?php echo esc_html(get_option('mgrnz_ai_provider', 'OpenAI')); ?>. 
            Get your key from: 
            <a href="https://platform.openai.com/api-keys" target="_blank">OpenAI</a> | 
            <a href="https://console.anthropic.com/settings/keys" target="_blank">Anthropic</a>
        </p>
        <?php
    }
    
    /**
     * Render Model field
     */
    public function render_model_field() {
        $value = get_option('mgrnz_ai_model', 'gpt-4');
        $provider = get_option('mgrnz_ai_provider', 'openai');
        ?>
        <select name="mgrnz_ai_model" id="mgrnz_ai_model">
            <?php if ($provider === 'openai'): ?>
                <option value="gpt-4" <?php selected($value, 'gpt-4'); ?>>GPT-4</option>
                <option value="gpt-4-turbo" <?php selected($value, 'gpt-4-turbo'); ?>>GPT-4 Turbo</option>
                <option value="gpt-3.5-turbo" <?php selected($value, 'gpt-3.5-turbo'); ?>>GPT-3.5 Turbo</option>
            <?php else: ?>
                <option value="claude-3-opus-20240229" <?php selected($value, 'claude-3-opus-20240229'); ?>>Claude 3 Opus</option>
                <option value="claude-3-sonnet-20240229" <?php selected($value, 'claude-3-sonnet-20240229'); ?>>Claude 3 Sonnet</option>
                <option value="claude-3-haiku-20240307" <?php selected($value, 'claude-3-haiku-20240307'); ?>>Claude 3 Haiku</option>
            <?php endif; ?>
        </select>
        <p class="mgrnz-field-description">
            Select the AI model to use for blueprint generation. More powerful models provide better results but cost more.
        </p>
        <?php
    }
    
    /**
     * Render Max Tokens field
     */
    public function render_max_tokens_field() {
        $value = get_option('mgrnz_ai_max_tokens', 2000);
        ?>
        <input type="number" 
               name="mgrnz_ai_max_tokens" 
               id="mgrnz_ai_max_tokens" 
               value="<?php echo esc_attr($value); ?>"
               min="500"
               max="4000"
               step="100"
               class="small-text">
        <p class="mgrnz-field-description">
            Maximum number of tokens (words) in the generated blueprint. Range: 500-4000. Default: 2000.
        </p>
        <?php
    }
    
    /**
     * Render Temperature field
     */
    public function render_temperature_field() {
        $value = get_option('mgrnz_ai_temperature', 0.7);
        ?>
        <input type="number" 
               name="mgrnz_ai_temperature" 
               id="mgrnz_ai_temperature" 
               value="<?php echo esc_attr($value); ?>"
               min="0"
               max="1"
               step="0.1"
               class="small-text">
        <p class="mgrnz-field-description">
            Controls randomness in AI responses. Lower values (0.3) are more focused, higher values (0.9) are more creative. Range: 0-1. Default: 0.7.
        </p>
        <?php
    }
    
    /**
     * Render MailerLite API Key field
     */
    public function render_mailerlite_api_key_field() {
        $value = get_option('mgrnz_mailerlite_api_key', '');
        ?>
        <input type="password" 
               name="mgrnz_mailerlite_api_key" 
               id="mgrnz_mailerlite_api_key" 
               value="<?php echo esc_attr($value); ?>"
               placeholder="Enter your MailerLite API key"
               class="regular-text"
               autocomplete="off">
        <p class="mgrnz-field-description">
            Your MailerLite API key. Get it from <a href="https://dashboard.mailerlite.com/integrations/api" target="_blank">MailerLite Dashboard → Integrations → API</a>.
        </p>
        <?php
    }
    
    /**
     * Render MailerLite Group ID field
     */
    public function render_mailerlite_group_id_field() {
        $value = get_option('mgrnz_mailerlite_group_id', '');
        ?>
        <input type="text" 
               name="mgrnz_mailerlite_group_id" 
               id="mgrnz_mailerlite_group_id" 
               value="<?php echo esc_attr($value); ?>"
               placeholder="Optional: Group ID"
               class="regular-text">
        <p class="mgrnz-field-description">
            Optional: Add subscribers to a specific MailerLite group. Leave empty to add to your main list.
        </p>
        <?php
    }
    
    /**
     * Render Subscribe URL field
     */
    public function render_subscribe_url_field() {
        $value = get_option('mgrnz_subscribe_url', '');
        $default_url = home_url('/blog');
        ?>
        <input type="url" 
               name="mgrnz_subscribe_url" 
               id="mgrnz_subscribe_url" 
               value="<?php echo esc_attr($value); ?>"
               placeholder="<?php echo esc_attr($default_url); ?>"
               class="regular-text">
        <p class="mgrnz-field-description">
            URL where users will be redirected to subscribe. Can be your blog page with a MailerLite form, or a direct MailerLite form URL. Default: <?php echo esc_html($default_url); ?>
        </p>
        <?php
    }
    
    /**
     * Render Calendly URL field
     */
    public function render_calendly_url_field() {
        $value = get_option('mgrnz_calendly_url', '');
        ?>
        <input type="url" 
               name="mgrnz_calendly_url" 
               id="mgrnz_calendly_url" 
               value="<?php echo esc_attr($value); ?>"
               placeholder="https://calendly.com/your-username/consultation"
               class="regular-text">
        <p class="mgrnz-field-description">
            Your Calendly booking page URL. Example: https://calendly.com/your-username/consultation
        </p>
        <?php
    }
    
    /**
     * Sanitize boolean values
     */
    public function sanitize_boolean($value) {
        return (bool) $value;
    }
    
    /**
     * Sanitize provider selection
     */
    public function sanitize_provider($value) {
        $allowed = ['openai', 'anthropic'];
        return in_array($value, $allowed) ? $value : 'openai';
    }
    
    /**
     * Sanitize API key
     */
    public function sanitize_api_key($value) {
        // Remove whitespace
        $value = trim($value);
        
        // Basic validation - API keys should be alphanumeric with some special chars
        if (!empty($value) && !preg_match('/^[a-zA-Z0-9_\-\.]+$/', $value)) {
            add_settings_error(
                'mgrnz_ai_api_key',
                'invalid_api_key',
                'API key contains invalid characters.',
                'error'
            );
            return get_option('mgrnz_ai_api_key', '');
        }
        
        return $value;
    }
    
    /**
     * Sanitize max tokens
     */
    public function sanitize_max_tokens($value) {
        $value = intval($value);
        
        if ($value < 500) {
            return 500;
        }
        
        if ($value > 4000) {
            return 4000;
        }
        
        return $value;
    }
    
    /**
     * Sanitize temperature
     */
    public function sanitize_temperature($value) {
        $value = floatval($value);
        
        if ($value < 0) {
            return 0;
        }
        
        if ($value > 1) {
            return 1;
        }
        
        return round($value, 1);
    }
    
    /**
     * Test AI connection via AJAX
     */
    public function test_ai_connection() {
        check_ajax_referer('mgrnz_test_connection', 'nonce');
        
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized']);
            return;
        }
        
        $provider = get_option('mgrnz_ai_provider', 'openai');
        $api_key = get_option('mgrnz_ai_api_key', '');
        
        if (empty($api_key)) {
            wp_send_json_error(['message' => 'API key is not configured']);
            return;
        }
        
        // Test the connection
        try {
            $ai_service = new MGRNZ_AI_Service();
            $test_result = $ai_service->test_connection();
            
            if ($test_result['success']) {
                wp_send_json_success([
                    'message' => 'Connection successful! Provider: ' . ucfirst($provider)
                ]);
            } else {
                wp_send_json_error([
                    'message' => 'Connection failed: ' . $test_result['error']
                ]);
            }
        } catch (Exception $e) {
            wp_send_json_error([
                'message' => 'Connection test error: ' . $e->getMessage()
            ]);
        }
    }
}
