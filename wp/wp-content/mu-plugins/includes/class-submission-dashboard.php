<?php
/**
 * AI Workflow Submission Dashboard
 * 
 * Provides analytics and management interface for AI workflow submissions
 * 
 * @package MGRNZ
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Submission_Dashboard {
    
    /**
     * Initialize the class
     */
    public function __construct() {
        add_action('admin_menu', array($this, 'add_dashboard_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_dashboard_assets'));
        add_action('admin_post_mgrnz_export_submissions', array($this, 'handle_export'));
    }
    
    /**
     * Add dashboard menu page
     */
    public function add_dashboard_menu() {
        add_submenu_page(
            'edit.php?post_type=ai_workflow_sub',
            __('Dashboard & Analytics', 'mgrnz'),
            __('Dashboard', 'mgrnz'),
            'manage_options',
            'mgrnz-submission-dashboard',
            array($this, 'render_dashboard_page')
        );
    }
    
    /**
     * Enqueue dashboard assets
     */
    public function enqueue_dashboard_assets($hook) {
        if ($hook !== 'ai_workflow_sub_page_mgrnz-submission-dashboard') {
            return;
        }
        
        wp_enqueue_style(
            'mgrnz-dashboard',
            plugins_url('assets/css/dashboard-admin.css', dirname(__FILE__)),
            array(),
            '1.0.0'
        );
        
        wp_enqueue_script(
            'mgrnz-dashboard',
            plugins_url('assets/js/dashboard-admin.js', dirname(__FILE__)),
            array('jquery'),
            '1.0.0',
            true
        );
    }
    
    /**
     * Render dashboard page
     */
    public function render_dashboard_page() {
        // Get date range from query params
        $date_range = isset($_GET['date_range']) ? sanitize_text_field($_GET['date_range']) : '30';
        
        // Calculate date range
        $end_date = current_time('mysql');
        $start_date = date('Y-m-d H:i:s', strtotime("-{$date_range} days", strtotime($end_date)));
        
        // Get analytics data
        $stats = $this->get_submission_stats($start_date, $end_date);
        $common_pain_points = $this->get_common_pain_points($start_date, $end_date);
        $common_tools = $this->get_common_tools($start_date, $end_date);
        $api_usage = $this->get_api_usage_stats($start_date, $end_date);
        $daily_submissions = $this->get_daily_submissions($start_date, $end_date);
        
        ?>
        <div class="wrap mgrnz-dashboard">
            <h1><?php _e('AI Workflow Submissions Dashboard', 'mgrnz'); ?></h1>
            
            <!-- Date Range Filter -->
            <div class="mgrnz-dashboard-filters">
                <form method="get" action="">
                    <input type="hidden" name="post_type" value="ai_workflow_sub">
                    <input type="hidden" name="page" value="mgrnz-submission-dashboard">
                    
                    <label for="date_range"><?php _e('Date Range:', 'mgrnz'); ?></label>
                    <select name="date_range" id="date_range" onchange="this.form.submit()">
                        <option value="7" <?php selected($date_range, '7'); ?>><?php _e('Last 7 days', 'mgrnz'); ?></option>
                        <option value="30" <?php selected($date_range, '30'); ?>><?php _e('Last 30 days', 'mgrnz'); ?></option>
                        <option value="90" <?php selected($date_range, '90'); ?>><?php _e('Last 90 days', 'mgrnz'); ?></option>
                        <option value="365" <?php selected($date_range, '365'); ?>><?php _e('Last year', 'mgrnz'); ?></option>
                        <option value="all" <?php selected($date_range, 'all'); ?>><?php _e('All time', 'mgrnz'); ?></option>
                    </select>
                    
                    <form method="post" action="<?php echo admin_url('admin-post.php'); ?>" style="display: inline-block; margin-left: 20px;">
                        <input type="hidden" name="action" value="mgrnz_export_submissions">
                        <input type="hidden" name="date_range" value="<?php echo esc_attr($date_range); ?>">
                        <?php wp_nonce_field('mgrnz_export_submissions', 'mgrnz_export_nonce'); ?>
                        <button type="submit" class="button button-secondary">
                            <span class="dashicons dashicons-download"></span>
                            <?php _e('Export to CSV', 'mgrnz'); ?>
                        </button>
                    </form>
                </form>
            </div>
            
            <!-- Summary Stats -->
            <div class="mgrnz-dashboard-stats">
                <div class="mgrnz-stat-card">
                    <div class="mgrnz-stat-icon">
                        <span class="dashicons dashicons-forms"></span>
                    </div>
                    <div class="mgrnz-stat-content">
                        <div class="mgrnz-stat-value"><?php echo number_format($stats['total_submissions']); ?></div>
                        <div class="mgrnz-stat-label"><?php _e('Total Submissions', 'mgrnz'); ?></div>
                    </div>
                </div>
                
                <div class="mgrnz-stat-card">
                    <div class="mgrnz-stat-icon">
                        <span class="dashicons dashicons-email"></span>
                    </div>
                    <div class="mgrnz-stat-content">
                        <div class="mgrnz-stat-value"><?php echo number_format($stats['with_email']); ?></div>
                        <div class="mgrnz-stat-label"><?php _e('With Email', 'mgrnz'); ?></div>
                        <div class="mgrnz-stat-meta">
                            <?php 
                            $email_percentage = $stats['total_submissions'] > 0 
                                ? round(($stats['with_email'] / $stats['total_submissions']) * 100) 
                                : 0;
                            printf(__('%d%% of total', 'mgrnz'), $email_percentage);
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="mgrnz-stat-card">
                    <div class="mgrnz-stat-icon">
                        <span class="dashicons dashicons-yes-alt"></span>
                    </div>
                    <div class="mgrnz-stat-content">
                        <div class="mgrnz-stat-value"><?php echo number_format($stats['emails_sent']); ?></div>
                        <div class="mgrnz-stat-label"><?php _e('Emails Sent', 'mgrnz'); ?></div>
                        <div class="mgrnz-stat-meta">
                            <?php 
                            $sent_percentage = $stats['with_email'] > 0 
                                ? round(($stats['emails_sent'] / $stats['with_email']) * 100) 
                                : 0;
                            printf(__('%d%% success rate', 'mgrnz'), $sent_percentage);
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="mgrnz-stat-card">
                    <div class="mgrnz-stat-icon">
                        <span class="dashicons dashicons-chart-line"></span>
                    </div>
                    <div class="mgrnz-stat-content">
                        <div class="mgrnz-stat-value"><?php echo number_format($stats['avg_per_day'], 1); ?></div>
                        <div class="mgrnz-stat-label"><?php _e('Avg. Per Day', 'mgrnz'); ?></div>
                    </div>
                </div>
            </div>
            
            <!-- Daily Submissions Chart -->
            <div class="mgrnz-dashboard-section">
                <h2><?php _e('Submissions Over Time', 'mgrnz'); ?></h2>
                <div class="mgrnz-chart-container">
                    <canvas id="mgrnz-submissions-chart"></canvas>
                </div>
                <script>
                    var submissionsChartData = <?php echo json_encode($daily_submissions); ?>;
                </script>
            </div>
            
            <!-- Two Column Layout -->
            <div class="mgrnz-dashboard-row">
                <!-- Common Pain Points -->
                <div class="mgrnz-dashboard-column">
                    <div class="mgrnz-dashboard-section">
                        <h2><?php _e('Common Pain Points', 'mgrnz'); ?></h2>
                        <?php if (!empty($common_pain_points)): ?>
                            <div class="mgrnz-word-cloud">
                                <?php foreach ($common_pain_points as $item): ?>
                                    <div class="mgrnz-word-item">
                                        <span class="mgrnz-word-text"><?php echo esc_html($item['word']); ?></span>
                                        <span class="mgrnz-word-count"><?php echo number_format($item['count']); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <p class="mgrnz-no-data"><?php _e('No data available for this period.', 'mgrnz'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Common Tools -->
                <div class="mgrnz-dashboard-column">
                    <div class="mgrnz-dashboard-section">
                        <h2><?php _e('Most Mentioned Tools', 'mgrnz'); ?></h2>
                        <?php if (!empty($common_tools)): ?>
                            <div class="mgrnz-word-cloud">
                                <?php foreach ($common_tools as $item): ?>
                                    <div class="mgrnz-word-item">
                                        <span class="mgrnz-word-text"><?php echo esc_html($item['word']); ?></span>
                                        <span class="mgrnz-word-count"><?php echo number_format($item['count']); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <p class="mgrnz-no-data"><?php _e('No data available for this period.', 'mgrnz'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- AI API Usage Stats -->
            <div class="mgrnz-dashboard-section">
                <h2><?php _e('AI API Usage Statistics', 'mgrnz'); ?></h2>
                <div class="mgrnz-api-stats">
                    <div class="mgrnz-api-stat-item">
                        <div class="mgrnz-api-stat-label"><?php _e('Total API Calls', 'mgrnz'); ?></div>
                        <div class="mgrnz-api-stat-value"><?php echo number_format($api_usage['total_calls']); ?></div>
                    </div>
                    
                    <div class="mgrnz-api-stat-item">
                        <div class="mgrnz-api-stat-label"><?php _e('Total Tokens Used', 'mgrnz'); ?></div>
                        <div class="mgrnz-api-stat-value"><?php echo number_format($api_usage['total_tokens']); ?></div>
                    </div>
                    
                    <div class="mgrnz-api-stat-item">
                        <div class="mgrnz-api-stat-label"><?php _e('Avg. Tokens Per Call', 'mgrnz'); ?></div>
                        <div class="mgrnz-api-stat-value"><?php echo number_format($api_usage['avg_tokens']); ?></div>
                    </div>
                    
                    <div class="mgrnz-api-stat-item">
                        <div class="mgrnz-api-stat-label"><?php _e('Estimated Cost', 'mgrnz'); ?></div>
                        <div class="mgrnz-api-stat-value">$<?php echo number_format($api_usage['estimated_cost'], 2); ?></div>
                        <div class="mgrnz-api-stat-note">
                            <?php _e('Based on GPT-4 pricing ($0.03/1K tokens)', 'mgrnz'); ?>
                        </div>
                    </div>
                    
                    <div class="mgrnz-api-stat-item">
                        <div class="mgrnz-api-stat-label"><?php _e('Cache Hit Rate', 'mgrnz'); ?></div>
                        <div class="mgrnz-api-stat-value"><?php echo number_format($api_usage['cache_hit_rate'], 1); ?>%</div>
                        <div class="mgrnz-api-stat-note">
                            <?php printf(__('%d cached / %d total', 'mgrnz'), $api_usage['cached_blueprints'], $stats['total_submissions']); ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php
    }
    
    /**
     * Get submission statistics
     */
    private function get_submission_stats($start_date, $end_date) {
        global $wpdb;
        
        $post_type = 'ai_workflow_sub';
        
        // Build date query
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND p.post_date BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Total submissions
        $total_submissions = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->posts} p 
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            {$date_query}",
            $post_type
        ));
        
        // Submissions with email
        $with_email = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT p.ID) FROM {$wpdb->posts} p
            INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            AND pm.meta_key = '_mgrnz_email'
            AND pm.meta_value != ''
            {$date_query}",
            $post_type
        ));
        
        // Emails sent successfully
        $emails_sent = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT p.ID) FROM {$wpdb->posts} p
            INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            AND pm.meta_key = '_mgrnz_email_sent'
            AND pm.meta_value = '1'
            {$date_query}",
            $post_type
        ));
        
        // Calculate average per day
        $days = 1;
        if ($start_date && $end_date) {
            $start = new DateTime($start_date);
            $end = new DateTime($end_date);
            $days = max(1, $end->diff($start)->days);
        }
        $avg_per_day = $total_submissions / $days;
        
        return array(
            'total_submissions' => (int) $total_submissions,
            'with_email' => (int) $with_email,
            'emails_sent' => (int) $emails_sent,
            'avg_per_day' => $avg_per_day,
        );
    }
    
    /**
     * Get common pain points
     */
    private function get_common_pain_points($start_date, $end_date, $limit = 20) {
        global $wpdb;
        
        $post_type = 'ai_workflow_sub';
        
        // Build date query
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND p.post_date BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Get all pain points
        $pain_points = $wpdb->get_col($wpdb->prepare(
            "SELECT pm.meta_value FROM {$wpdb->posts} p
            INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            AND pm.meta_key = '_mgrnz_pain_points'
            AND pm.meta_value != ''
            {$date_query}",
            $post_type
        ));
        
        if (empty($pain_points)) {
            return array();
        }
        
        // Extract and count keywords
        $word_counts = $this->extract_keywords($pain_points);
        
        // Sort by count and limit
        arsort($word_counts);
        $word_counts = array_slice($word_counts, 0, $limit, true);
        
        // Format for display
        $result = array();
        foreach ($word_counts as $word => $count) {
            $result[] = array(
                'word' => $word,
                'count' => $count,
            );
        }
        
        return $result;
    }
    
    /**
     * Get common tools
     */
    private function get_common_tools($start_date, $end_date, $limit = 20) {
        global $wpdb;
        
        $post_type = 'ai_workflow_sub';
        
        // Build date query
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND p.post_date BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Get all tools
        $tools = $wpdb->get_col($wpdb->prepare(
            "SELECT pm.meta_value FROM {$wpdb->posts} p
            INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            AND pm.meta_key = '_mgrnz_tools'
            AND pm.meta_value != ''
            {$date_query}",
            $post_type
        ));
        
        if (empty($tools)) {
            return array();
        }
        
        // Extract and count keywords
        $word_counts = $this->extract_keywords($tools);
        
        // Sort by count and limit
        arsort($word_counts);
        $word_counts = array_slice($word_counts, 0, $limit, true);
        
        // Format for display
        $result = array();
        foreach ($word_counts as $word => $count) {
            $result[] = array(
                'word' => $word,
                'count' => $count,
            );
        }
        
        return $result;
    }
    
    /**
     * Extract keywords from text array
     */
    private function extract_keywords($texts) {
        // Common stop words to exclude
        $stop_words = array(
            'the', 'a', 'an', 'and', 'or', 'but', 'in', 'on', 'at', 'to', 'for',
            'of', 'with', 'by', 'from', 'as', 'is', 'was', 'are', 'were', 'been',
            'be', 'have', 'has', 'had', 'do', 'does', 'did', 'will', 'would',
            'could', 'should', 'may', 'might', 'must', 'can', 'this', 'that',
            'these', 'those', 'i', 'you', 'he', 'she', 'it', 'we', 'they',
            'my', 'your', 'his', 'her', 'its', 'our', 'their', 'me', 'him',
            'us', 'them', 'what', 'which', 'who', 'when', 'where', 'why', 'how',
            'all', 'each', 'every', 'both', 'few', 'more', 'most', 'other',
            'some', 'such', 'no', 'nor', 'not', 'only', 'own', 'same', 'so',
            'than', 'too', 'very', 'just', 'dont', 'im', 'ive', 'cant', 'wont',
        );
        
        $word_counts = array();
        
        foreach ($texts as $text) {
            // Convert to lowercase and remove special characters
            $text = strtolower($text);
            $text = preg_replace('/[^a-z0-9\s-]/', ' ', $text);
            
            // Split into words
            $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
            
            foreach ($words as $word) {
                // Skip short words and stop words
                if (strlen($word) < 3 || in_array($word, $stop_words)) {
                    continue;
                }
                
                // Count the word
                if (!isset($word_counts[$word])) {
                    $word_counts[$word] = 0;
                }
                $word_counts[$word]++;
            }
        }
        
        return $word_counts;
    }
    
    /**
     * Get AI API usage statistics
     */
    private function get_api_usage_stats($start_date, $end_date) {
        global $wpdb;
        
        $post_type = 'ai_workflow_sub';
        
        // Build date query
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND p.post_date BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Get total API calls (submissions with blueprints)
        $total_calls = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT p.ID) FROM {$wpdb->posts} p
            INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            AND pm.meta_key = '_mgrnz_blueprint_content'
            AND pm.meta_value != ''
            {$date_query}",
            $post_type
        ));
        
        // Get tokens used (if stored)
        $tokens_data = $wpdb->get_results($wpdb->prepare(
            "SELECT pm.meta_value FROM {$wpdb->posts} p
            INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            AND pm.meta_key = '_mgrnz_tokens_used'
            AND pm.meta_value != ''
            {$date_query}",
            $post_type
        ));
        
        $total_tokens = 0;
        foreach ($tokens_data as $row) {
            $total_tokens += (int) $row->meta_value;
        }
        
        // Calculate average tokens
        $avg_tokens = $total_calls > 0 ? $total_tokens / $total_calls : 0;
        
        // Estimate cost (GPT-4 pricing: $0.03 per 1K tokens)
        $estimated_cost = ($total_tokens / 1000) * 0.03;
        
        // Get cached blueprints count
        $cached_blueprints = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT p.ID) FROM {$wpdb->posts} p
            INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            AND pm.meta_key = '_mgrnz_blueprint_cached'
            AND pm.meta_value = '1'
            {$date_query}",
            $post_type
        ));
        
        // Calculate cache hit rate
        $total_submissions = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->posts} p 
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            {$date_query}",
            $post_type
        ));
        
        $cache_hit_rate = $total_submissions > 0 ? ($cached_blueprints / $total_submissions) * 100 : 0;
        
        return array(
            'total_calls' => (int) $total_calls,
            'total_tokens' => (int) $total_tokens,
            'avg_tokens' => (int) $avg_tokens,
            'estimated_cost' => $estimated_cost,
            'cached_blueprints' => (int) $cached_blueprints,
            'cache_hit_rate' => $cache_hit_rate,
        );
    }
    
    /**
     * Get daily submissions for chart
     */
    private function get_daily_submissions($start_date, $end_date) {
        global $wpdb;
        
        $post_type = 'ai_workflow_sub';
        
        // Build date query
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND p.post_date BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Get daily counts
        $results = $wpdb->get_results($wpdb->prepare(
            "SELECT DATE(p.post_date) as date, COUNT(*) as count
            FROM {$wpdb->posts} p
            WHERE p.post_type = %s 
            AND p.post_status = 'publish'
            {$date_query}
            GROUP BY DATE(p.post_date)
            ORDER BY date ASC",
            $post_type
        ));
        
        // Format for chart
        $chart_data = array(
            'labels' => array(),
            'data' => array(),
        );
        
        foreach ($results as $row) {
            $chart_data['labels'][] = date('M j', strtotime($row->date));
            $chart_data['data'][] = (int) $row->count;
        }
        
        return $chart_data;
    }
    
    /**
     * Handle CSV export
     */
    public function handle_export() {
        // Check permissions
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have permission to export submissions.', 'mgrnz'));
        }
        
        // Verify nonce
        if (!isset($_POST['mgrnz_export_nonce']) || !wp_verify_nonce($_POST['mgrnz_export_nonce'], 'mgrnz_export_submissions')) {
            wp_die(__('Security check failed.', 'mgrnz'));
        }
        
        // Get date range
        $date_range = isset($_POST['date_range']) ? sanitize_text_field($_POST['date_range']) : '30';
        
        // Calculate dates
        if ($date_range === 'all') {
            $start_date = null;
            $end_date = null;
        } else {
            $end_date = current_time('mysql');
            $start_date = date('Y-m-d H:i:s', strtotime("-{$date_range} days", strtotime($end_date)));
        }
        
        // Get submissions
        $args = array(
            'post_type' => 'ai_workflow_sub',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        
        if ($start_date && $end_date) {
            $args['date_query'] = array(
                array(
                    'after' => $start_date,
                    'before' => $end_date,
                    'inclusive' => true,
                ),
            );
        }
        
        $submissions = get_posts($args);
        
        // Set headers for CSV download
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=ai-workflow-submissions-' . date('Y-m-d') . '.csv');
        header('Pragma: no-cache');
        header('Expires: 0');
        
        // Open output stream
        $output = fopen('php://output', 'w');
        
        // Add BOM for Excel UTF-8 support
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Write CSV headers
        fputcsv($output, array(
            'Submission ID',
            'Submission Date',
            'Email',
            'Email Sent',
            'Goal',
            'Workflow Description',
            'Tools',
            'Pain Points',
            'Blueprint Summary',
            'Tokens Used',
            'Cached',
        ));
        
        // Write data rows
        foreach ($submissions as $submission) {
            $row = array(
                $submission->ID,
                get_post_meta($submission->ID, '_mgrnz_submission_date', true),
                get_post_meta($submission->ID, '_mgrnz_email', true),
                get_post_meta($submission->ID, '_mgrnz_email_sent', true) ? 'Yes' : 'No',
                get_post_meta($submission->ID, '_mgrnz_goal', true),
                get_post_meta($submission->ID, '_mgrnz_workflow_description', true),
                get_post_meta($submission->ID, '_mgrnz_tools', true),
                get_post_meta($submission->ID, '_mgrnz_pain_points', true),
                get_post_meta($submission->ID, '_mgrnz_blueprint_summary', true),
                get_post_meta($submission->ID, '_mgrnz_tokens_used', true),
                get_post_meta($submission->ID, '_mgrnz_blueprint_cached', true) ? 'Yes' : 'No',
            );
            
            fputcsv($output, $row);
        }
        
        fclose($output);
        exit;
    }
}

// Initialize the class
new MGRNZ_Submission_Dashboard();
