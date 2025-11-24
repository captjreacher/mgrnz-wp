<?php
/**
 * Conversation Analytics Dashboard
 * 
 * Provides admin interface for viewing conversation analytics
 * 
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/class-conversation-analytics.php';

class MGRNZ_Analytics_Dashboard {
    
    /**
     * Initialize the class
     */
    public function __construct() {
        add_action('admin_menu', array($this, 'add_analytics_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_analytics_assets'));
    }
    
    /**
     * Add analytics menu page
     */
    public function add_analytics_menu() {
        add_submenu_page(
            'edit.php?post_type=ai_workflow_sub',
            __('Conversation Analytics', 'mgrnz'),
            __('Analytics', 'mgrnz'),
            'manage_options',
            'mgrnz-conversation-analytics',
            array($this, 'render_analytics_page')
        );
    }
    
    /**
     * Enqueue analytics assets
     */
    public function enqueue_analytics_assets($hook) {
        if ($hook !== 'ai_workflow_sub_page_mgrnz-conversation-analytics') {
            return;
        }
        
        wp_enqueue_style(
            'mgrnz-analytics',
            plugins_url('assets/css/analytics-admin.css', dirname(__FILE__)),
            array(),
            '1.0.0'
        );
        
        wp_enqueue_script(
            'chart-js',
            'https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js',
            array(),
            '4.4.0',
            true
        );
        
        wp_enqueue_script(
            'mgrnz-analytics',
            plugins_url('assets/js/analytics-admin.js', dirname(__FILE__)),
            array('jquery', 'chart-js'),
            '1.0.0',
            true
        );
    }
    
    /**
     * Render analytics page
     */
    public function render_analytics_page() {
        // Get date range from query params
        $date_range = isset($_GET['date_range']) ? sanitize_text_field($_GET['date_range']) : '30';
        
        // Calculate date range
        if ($date_range === 'all') {
            $start_date = null;
            $end_date = null;
        } else {
            $end_date = current_time('mysql');
            $start_date = date('Y-m-d H:i:s', strtotime("-{$date_range} days", strtotime($end_date)));
        }
        
        // Get analytics data
        $analytics = MGRNZ_Conversation_Analytics::get_dashboard_data($start_date, $end_date);
        
        ?>
        <div class="wrap mgrnz-analytics-dashboard">
            <h1><?php _e('Conversation Analytics', 'mgrnz'); ?></h1>
            
            <!-- Date Range Filter -->
            <div class="mgrnz-analytics-filters">
                <form method="get" action="">
                    <input type="hidden" name="post_type" value="ai_workflow_sub">
                    <input type="hidden" name="page" value="mgrnz-conversation-analytics">
                    
                    <label for="date_range"><?php _e('Date Range:', 'mgrnz'); ?></label>
                    <select name="date_range" id="date_range" onchange="this.form.submit()">
                        <option value="7" <?php selected($date_range, '7'); ?>><?php _e('Last 7 days', 'mgrnz'); ?></option>
                        <option value="30" <?php selected($date_range, '30'); ?>><?php _e('Last 30 days', 'mgrnz'); ?></option>
                        <option value="90" <?php selected($date_range, '90'); ?>><?php _e('Last 90 days', 'mgrnz'); ?></option>
                        <option value="365" <?php selected($date_range, '365'); ?>><?php _e('Last year', 'mgrnz'); ?></option>
                        <option value="all" <?php selected($date_range, 'all'); ?>><?php _e('All time', 'mgrnz'); ?></option>
                    </select>
                </form>
            </div>
            
            <!-- Wizard Completion Stats -->
            <div class="mgrnz-analytics-section">
                <h2><?php _e('Wizard Completion', 'mgrnz'); ?></h2>
                <div class="mgrnz-analytics-stats">
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-forms"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['wizard_completion']['completed']); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Wizards Completed', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-admin-comments"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['wizard_completion']['started']); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Chat Sessions Started', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-chart-line"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['wizard_completion']['rate'], 1); ?>%</div>
                            <div class="mgrnz-stat-label"><?php _e('Completion Rate', 'mgrnz'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Chat Engagement Stats -->
            <div class="mgrnz-analytics-section">
                <h2><?php _e('Chat Engagement', 'mgrnz'); ?></h2>
                <div class="mgrnz-analytics-stats">
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-format-chat"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['chat_engagement']['total_sessions']); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Total Chat Sessions', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-email-alt"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['chat_engagement']['total_messages']); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Total Messages Sent', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-chart-bar"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['chat_engagement']['avg_messages_per_session'], 1); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Avg. Messages/Session', 'mgrnz'); ?></div>
                        </div>
                    </div>
                </div>
                
                <!-- Engagement Levels -->
                <div class="mgrnz-engagement-levels">
                    <h3><?php _e('Engagement Levels', 'mgrnz'); ?></h3>
                    <div class="mgrnz-engagement-bars">
                        <div class="mgrnz-engagement-bar">
                            <div class="mgrnz-engagement-label"><?php _e('High (5+ messages)', 'mgrnz'); ?></div>
                            <div class="mgrnz-engagement-progress">
                                <div class="mgrnz-engagement-fill mgrnz-high" style="width: <?php echo $analytics['chat_engagement']['total_sessions'] > 0 ? ($analytics['chat_engagement']['engagement_levels']['high'] / $analytics['chat_engagement']['total_sessions'] * 100) : 0; ?>%"></div>
                            </div>
                            <div class="mgrnz-engagement-count"><?php echo number_format($analytics['chat_engagement']['engagement_levels']['high']); ?></div>
                        </div>
                        
                        <div class="mgrnz-engagement-bar">
                            <div class="mgrnz-engagement-label"><?php _e('Medium (2-4 messages)', 'mgrnz'); ?></div>
                            <div class="mgrnz-engagement-progress">
                                <div class="mgrnz-engagement-fill mgrnz-medium" style="width: <?php echo $analytics['chat_engagement']['total_sessions'] > 0 ? ($analytics['chat_engagement']['engagement_levels']['medium'] / $analytics['chat_engagement']['total_sessions'] * 100) : 0; ?>%"></div>
                            </div>
                            <div class="mgrnz-engagement-count"><?php echo number_format($analytics['chat_engagement']['engagement_levels']['medium']); ?></div>
                        </div>
                        
                        <div class="mgrnz-engagement-bar">
                            <div class="mgrnz-engagement-label"><?php _e('Low (1 message)', 'mgrnz'); ?></div>
                            <div class="mgrnz-engagement-progress">
                                <div class="mgrnz-engagement-fill mgrnz-low" style="width: <?php echo $analytics['chat_engagement']['total_sessions'] > 0 ? ($analytics['chat_engagement']['engagement_levels']['low'] / $analytics['chat_engagement']['total_sessions'] * 100) : 0; ?>%"></div>
                            </div>
                            <div class="mgrnz-engagement-count"><?php echo number_format($analytics['chat_engagement']['engagement_levels']['low']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Upsell Conversions -->
            <div class="mgrnz-analytics-section">
                <h2><?php _e('Upsell Conversions', 'mgrnz'); ?></h2>
                
                <div class="mgrnz-conversion-grid">
                    <!-- Consultation -->
                    <div class="mgrnz-conversion-card">
                        <h3><?php _e('Consultation Booking', 'mgrnz'); ?></h3>
                        <div class="mgrnz-conversion-stats">
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Offered:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['consultation']['offered']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Clicked:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['consultation']['clicked']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-rate">
                                <span class="mgrnz-conversion-percentage"><?php echo number_format($analytics['upsell_conversions']['consultation']['conversion_rate'], 1); ?>%</span>
                                <span class="mgrnz-conversion-label"><?php _e('Conversion Rate', 'mgrnz'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cost Estimate -->
                    <div class="mgrnz-conversion-card">
                        <h3><?php _e('Cost Estimate', 'mgrnz'); ?></h3>
                        <div class="mgrnz-conversion-stats">
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Offered:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['estimate']['offered']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Generated:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['estimate']['generated']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-rate">
                                <span class="mgrnz-conversion-percentage"><?php echo number_format($analytics['upsell_conversions']['estimate']['conversion_rate'], 1); ?>%</span>
                                <span class="mgrnz-conversion-label"><?php _e('Conversion Rate', 'mgrnz'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Formal Quote -->
                    <div class="mgrnz-conversion-card">
                        <h3><?php _e('Formal Quote', 'mgrnz'); ?></h3>
                        <div class="mgrnz-conversion-stats">
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Offered:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['quote']['offered']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Requested:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['quote']['requested']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-rate">
                                <span class="mgrnz-conversion-percentage"><?php echo number_format($analytics['upsell_conversions']['quote']['conversion_rate'], 1); ?>%</span>
                                <span class="mgrnz-conversion-label"><?php _e('Conversion Rate', 'mgrnz'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Workflow -->
                    <div class="mgrnz-conversion-card">
                        <h3><?php _e('Additional Workflow', 'mgrnz'); ?></h3>
                        <div class="mgrnz-conversion-stats">
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Offered:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['additional_workflow']['offered']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-stat">
                                <span class="mgrnz-conversion-label"><?php _e('Clicked:', 'mgrnz'); ?></span>
                                <span class="mgrnz-conversion-value"><?php echo number_format($analytics['upsell_conversions']['additional_workflow']['clicked']); ?></span>
                            </div>
                            <div class="mgrnz-conversion-rate">
                                <span class="mgrnz-conversion-percentage"><?php echo number_format($analytics['upsell_conversions']['additional_workflow']['conversion_rate'], 1); ?>%</span>
                                <span class="mgrnz-conversion-label"><?php _e('Conversion Rate', 'mgrnz'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Blueprint Downloads -->
            <div class="mgrnz-analytics-section">
                <h2><?php _e('Blueprint Downloads', 'mgrnz'); ?></h2>
                <div class="mgrnz-analytics-stats">
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-media-document"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['blueprint_downloads']['presented']); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Blueprints Presented', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-download"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['blueprint_downloads']['downloaded']); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Downloads Completed', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-chart-pie"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['blueprint_downloads']['overall_download_rate'], 1); ?>%</div>
                            <div class="mgrnz-stat-label"><?php _e('Download Rate', 'mgrnz'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Session Duration Stats -->
            <div class="mgrnz-analytics-section">
                <h2><?php _e('Session Duration', 'mgrnz'); ?></h2>
                <div class="mgrnz-analytics-stats">
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-clock"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['session_durations']['avg_duration_minutes'], 1); ?> min</div>
                            <div class="mgrnz-stat-label"><?php _e('Avg. Session Duration', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-chart-area"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['session_durations']['median_duration_minutes'], 1); ?> min</div>
                            <div class="mgrnz-stat-label"><?php _e('Median Session Duration', 'mgrnz'); ?></div>
                        </div>
                    </div>
                    
                    <div class="mgrnz-stat-card">
                        <div class="mgrnz-stat-icon">
                            <span class="dashicons dashicons-groups"></span>
                        </div>
                        <div class="mgrnz-stat-content">
                            <div class="mgrnz-stat-value"><?php echo number_format($analytics['session_durations']['total_sessions']); ?></div>
                            <div class="mgrnz-stat-label"><?php _e('Total Sessions', 'mgrnz'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- State Transitions -->
            <?php if (!empty($analytics['state_transitions'])): ?>
            <div class="mgrnz-analytics-section">
                <h2><?php _e('Conversation State Transitions', 'mgrnz'); ?></h2>
                <div class="mgrnz-state-transitions">
                    <?php foreach ($analytics['state_transitions'] as $state => $count): ?>
                        <div class="mgrnz-state-item">
                            <span class="mgrnz-state-name"><?php echo esc_html(str_replace('_', ' ', $state)); ?></span>
                            <span class="mgrnz-state-count"><?php echo number_format($count); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
        </div>
        <?php
    }
}

// Initialize the class
new MGRNZ_Analytics_Dashboard();
