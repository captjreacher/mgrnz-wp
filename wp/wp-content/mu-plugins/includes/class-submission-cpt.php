<?php
/**
 * AI Workflow Submission Custom Post Type
 * 
 * Handles registration and admin UI for AI workflow submissions
 * 
 * @package MGRNZ
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Submission_CPT {
    
    /**
     * Post type slug
     */
    const POST_TYPE = 'ai_workflow_sub';
    
    /**
     * Meta field keys
     */
    const META_GOAL = '_mgrnz_goal';
    const META_WORKFLOW = '_mgrnz_workflow_description';
    const META_TOOLS = '_mgrnz_tools';
    const META_PAIN_POINTS = '_mgrnz_pain_points';
    const META_EMAIL = '_mgrnz_email';
    const META_BLUEPRINT_SUMMARY = '_mgrnz_blueprint_summary';
    const META_BLUEPRINT_CONTENT = '_mgrnz_blueprint_content';
    const META_SUBMISSION_DATE = '_mgrnz_submission_date';
    const META_EMAIL_SENT = '_mgrnz_email_sent';
    
    /**
     * Initialize the class
     */
    public function __construct() {
        add_action('init', array($this, 'register_post_type'));
        add_action('init', array($this, 'register_meta_fields'));
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_filter('manage_' . self::POST_TYPE . '_posts_columns', array($this, 'set_custom_columns'));
        add_action('manage_' . self::POST_TYPE . '_posts_custom_column', array($this, 'custom_column_content'), 10, 2);
        add_filter('manage_edit-' . self::POST_TYPE . '_sortable_columns', array($this, 'sortable_columns'));
        add_action('pre_get_posts', array($this, 'custom_orderby'));
        add_filter('posts_search', array($this, 'custom_search'), 10, 2);
    }
    
    /**
     * Register the custom post type
     */
    public function register_post_type() {
        $labels = array(
            'name'                  => _x('AI Workflow Submissions', 'Post type general name', 'mgrnz'),
            'singular_name'         => _x('Submission', 'Post type singular name', 'mgrnz'),
            'menu_name'             => _x('AI Submissions', 'Admin Menu text', 'mgrnz'),
            'name_admin_bar'        => _x('Submission', 'Add New on Toolbar', 'mgrnz'),
            'add_new'               => __('Add New', 'mgrnz'),
            'add_new_item'          => __('Add New Submission', 'mgrnz'),
            'new_item'              => __('New Submission', 'mgrnz'),
            'edit_item'             => __('Edit Submission', 'mgrnz'),
            'view_item'             => __('View Submission', 'mgrnz'),
            'all_items'             => __('All Submissions', 'mgrnz'),
            'search_items'          => __('Search Submissions', 'mgrnz'),
            'parent_item_colon'     => __('Parent Submissions:', 'mgrnz'),
            'not_found'             => __('No submissions found.', 'mgrnz'),
            'not_found_in_trash'    => __('No submissions found in Trash.', 'mgrnz'),
            'archives'              => _x('Submission archives', 'The post type archive label used in nav menus.', 'mgrnz'),
            'insert_into_item'      => _x('Insert into submission', 'Overrides the "Insert into post"/"Insert into page" phrase', 'mgrnz'),
            'uploaded_to_this_item' => _x('Uploaded to this submission', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase', 'mgrnz'),
            'filter_items_list'     => _x('Filter submissions list', 'Screen reader text for the filter links heading on the post type listing screen.', 'mgrnz'),
            'items_list_navigation' => _x('Submissions list navigation', 'Screen reader text for the pagination heading on the post type listing screen.', 'mgrnz'),
            'items_list'            => _x('Submissions list', 'Screen reader text for the items list heading on the post type listing screen.', 'mgrnz'),
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => false,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => false,
            'rewrite'            => false,
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => 25,
            'menu_icon'          => 'dashicons-analytics',
            'supports'           => array('title', 'custom-fields'),
            'show_in_rest'       => false,
        );
        
        register_post_type(self::POST_TYPE, $args);
    }
    
    /**
     * Register custom meta fields
     */
    public function register_meta_fields() {
        $meta_fields = array(
            self::META_GOAL => array(
                'type'         => 'string',
                'description'  => 'User\'s workflow goal',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_WORKFLOW => array(
                'type'         => 'string',
                'description'  => 'Current workflow description',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_TOOLS => array(
                'type'         => 'string',
                'description'  => 'Tools currently used',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_PAIN_POINTS => array(
                'type'         => 'string',
                'description'  => 'Workflow pain points',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_EMAIL => array(
                'type'         => 'string',
                'description'  => 'User email address',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_BLUEPRINT_SUMMARY => array(
                'type'         => 'string',
                'description'  => 'Blueprint summary',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_BLUEPRINT_CONTENT => array(
                'type'         => 'string',
                'description'  => 'Full blueprint content',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_SUBMISSION_DATE => array(
                'type'         => 'string',
                'description'  => 'Submission date and time',
                'single'       => true,
                'show_in_rest' => false,
            ),
            self::META_EMAIL_SENT => array(
                'type'         => 'boolean',
                'description'  => 'Whether email was sent',
                'single'       => true,
                'show_in_rest' => false,
            ),
        );
        
        foreach ($meta_fields as $key => $args) {
            register_post_meta(self::POST_TYPE, $key, $args);
        }
    }
    
    /**
     * Add meta boxes for submission details
     */
    public function add_meta_boxes() {
        add_meta_box(
            'mgrnz_submission_details',
            __('Submission Details', 'mgrnz'),
            array($this, 'render_submission_details_meta_box'),
            self::POST_TYPE,
            'normal',
            'high'
        );
        
        add_meta_box(
            'mgrnz_blueprint_details',
            __('Generated Blueprint', 'mgrnz'),
            array($this, 'render_blueprint_meta_box'),
            self::POST_TYPE,
            'normal',
            'high'
        );
    }
    
    /**
     * Render submission details meta box
     */
    public function render_submission_details_meta_box($post) {
        $goal = get_post_meta($post->ID, self::META_GOAL, true);
        $workflow = get_post_meta($post->ID, self::META_WORKFLOW, true);
        $tools = get_post_meta($post->ID, self::META_TOOLS, true);
        $pain_points = get_post_meta($post->ID, self::META_PAIN_POINTS, true);
        $email = get_post_meta($post->ID, self::META_EMAIL, true);
        $submission_date = get_post_meta($post->ID, self::META_SUBMISSION_DATE, true);
        $email_sent = get_post_meta($post->ID, self::META_EMAIL_SENT, true);
        $email_status = get_post_meta($post->ID, '_mgrnz_email_status', true);
        $email_queued_at = get_post_meta($post->ID, '_mgrnz_email_queued_at', true);
        $email_sent_at = get_post_meta($post->ID, '_mgrnz_email_sent_at', true);
        $email_failed_at = get_post_meta($post->ID, '_mgrnz_email_failed_at', true);
        $retry_count = get_post_meta($post->ID, '_mgrnz_email_retry_count', true);
        
        ?>
        <style>
            .mgrnz-meta-field { margin-bottom: 20px; }
            .mgrnz-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1d2327; }
            .mgrnz-meta-field .value { padding: 10px; background: #f6f7f7; border-left: 3px solid #2271b1; }
            .mgrnz-meta-field .value p { margin: 0; line-height: 1.6; }
            .mgrnz-meta-status { display: inline-block; padding: 3px 8px; border-radius: 3px; font-size: 12px; font-weight: 600; margin-left: 10px; }
            .mgrnz-meta-status.sent { background: #00a32a; color: #fff; }
            .mgrnz-meta-status.queued { background: #2271b1; color: #fff; }
            .mgrnz-meta-status.processing { background: #2271b1; color: #fff; }
            .mgrnz-meta-status.failed { background: #d63638; color: #fff; }
            .mgrnz-meta-status.retry { background: #dba617; color: #fff; }
            .mgrnz-email-timeline { margin-top: 10px; padding: 10px; background: #fff; border: 1px solid #c3c4c7; border-radius: 3px; }
            .mgrnz-email-timeline-item { padding: 5px 0; font-size: 13px; color: #50575e; }
        </style>
        
        <div class="mgrnz-submission-meta">
            <?php if ($submission_date): ?>
            <div class="mgrnz-meta-field">
                <label><?php _e('Submission Date:', 'mgrnz'); ?></label>
                <div class="value">
                    <p><?php echo esc_html(date('F j, Y g:i a', strtotime($submission_date))); ?></p>
                </div>
            </div>
            <?php endif; ?>
            
            <?php if ($email): ?>
            <div class="mgrnz-meta-field">
                <label><?php _e('Email Address:', 'mgrnz'); ?></label>
                <div class="value">
                    <p>
                        <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                        <?php
                        // Display status badge
                        $status_class = '';
                        $status_text = '';
                        
                        switch ($email_status) {
                            case 'sent':
                                $status_class = 'sent';
                                $status_text = __('Sent', 'mgrnz');
                                break;
                            case 'queued':
                                $status_class = 'queued';
                                $status_text = __('Queued', 'mgrnz');
                                break;
                            case 'processing':
                                $status_class = 'processing';
                                $status_text = __('Sending', 'mgrnz');
                                break;
                            case 'failed':
                            case 'failed_permanent':
                                $status_class = 'failed';
                                $status_text = __('Failed', 'mgrnz');
                                break;
                            case 'retry_scheduled':
                                $status_class = 'retry';
                                $status_text = __('Retrying', 'mgrnz');
                                break;
                            default:
                                if ($email_sent) {
                                    $status_class = 'sent';
                                    $status_text = __('Sent', 'mgrnz');
                                }
                                break;
                        }
                        
                        if ($status_text) {
                            echo '<span class="mgrnz-meta-status ' . esc_attr($status_class) . '">' . esc_html($status_text) . '</span>';
                        }
                        ?>
                    </p>
                    
                    <?php if ($email_status): ?>
                    <div class="mgrnz-email-timeline">
                        <strong><?php _e('Email Delivery Timeline:', 'mgrnz'); ?></strong>
                        
                        <?php if ($email_queued_at): ?>
                        <div class="mgrnz-email-timeline-item">
                            ⏱ <?php _e('Queued:', 'mgrnz'); ?> <?php echo esc_html(date('M j, Y g:i a', strtotime($email_queued_at))); ?>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($email_sent_at): ?>
                        <div class="mgrnz-email-timeline-item">
                            ✓ <?php _e('Sent:', 'mgrnz'); ?> <?php echo esc_html(date('M j, Y g:i a', strtotime($email_sent_at))); ?>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($email_failed_at): ?>
                        <div class="mgrnz-email-timeline-item">
                            ✗ <?php _e('Failed:', 'mgrnz'); ?> <?php echo esc_html(date('M j, Y g:i a', strtotime($email_failed_at))); ?>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($retry_count): ?>
                        <div class="mgrnz-email-timeline-item">
                            ↻ <?php printf(__('Retry attempts: %d', 'mgrnz'), $retry_count); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="mgrnz-meta-field">
                <label><?php _e('Goal:', 'mgrnz'); ?></label>
                <div class="value">
                    <p><?php echo esc_html($goal); ?></p>
                </div>
            </div>
            
            <div class="mgrnz-meta-field">
                <label><?php _e('Current Workflow:', 'mgrnz'); ?></label>
                <div class="value">
                    <p><?php echo nl2br(esc_html($workflow)); ?></p>
                </div>
            </div>
            
            <div class="mgrnz-meta-field">
                <label><?php _e('Tools Used:', 'mgrnz'); ?></label>
                <div class="value">
                    <p><?php echo esc_html($tools); ?></p>
                </div>
            </div>
            
            <div class="mgrnz-meta-field">
                <label><?php _e('Pain Points:', 'mgrnz'); ?></label>
                <div class="value">
                    <p><?php echo nl2br(esc_html($pain_points)); ?></p>
                </div>
            </div>
        </div>
        <?php
    }
    
    /**
     * Render blueprint meta box
     */
    public function render_blueprint_meta_box($post) {
        $summary = get_post_meta($post->ID, self::META_BLUEPRINT_SUMMARY, true);
        $content = get_post_meta($post->ID, self::META_BLUEPRINT_CONTENT, true);
        
        ?>
        <style>
            .mgrnz-blueprint-content { padding: 15px; background: #fff; border: 1px solid #c3c4c7; }
            .mgrnz-blueprint-content h3 { margin-top: 0; color: #1d2327; }
            .mgrnz-blueprint-content pre { background: #f6f7f7; padding: 15px; overflow-x: auto; white-space: pre-wrap; word-wrap: break-word; }
        </style>
        
        <div class="mgrnz-blueprint-content">
            <?php if ($summary): ?>
                <h3><?php _e('Summary', 'mgrnz'); ?></h3>
                <p><?php echo esc_html($summary); ?></p>
            <?php endif; ?>
            
            <?php if ($content): ?>
                <h3><?php _e('Full Blueprint', 'mgrnz'); ?></h3>
                <pre><?php echo esc_html($content); ?></pre>
            <?php else: ?>
                <p><em><?php _e('No blueprint generated yet.', 'mgrnz'); ?></em></p>
            <?php endif; ?>
        </div>
        <?php
    }
    
    /**
     * Set custom admin columns
     */
    public function set_custom_columns($columns) {
        // Remove default columns
        unset($columns['date']);
        
        // Add custom columns
        $new_columns = array(
            'cb' => $columns['cb'],
            'title' => $columns['title'],
            'submission_date' => __('Submission Date', 'mgrnz'),
            'email' => __('Email', 'mgrnz'),
            'goal' => __('Goal', 'mgrnz'),
            'email_sent' => __('Email Status', 'mgrnz'),
        );
        
        return $new_columns;
    }
    
    /**
     * Display custom column content
     */
    public function custom_column_content($column, $post_id) {
        switch ($column) {
            case 'submission_date':
                $date = get_post_meta($post_id, self::META_SUBMISSION_DATE, true);
                if ($date) {
                    echo esc_html(date('M j, Y g:i a', strtotime($date)));
                } else {
                    echo '—';
                }
                break;
                
            case 'email':
                $email = get_post_meta($post_id, self::META_EMAIL, true);
                if ($email) {
                    echo '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>';
                } else {
                    echo '<em>' . __('No email provided', 'mgrnz') . '</em>';
                }
                break;
                
            case 'goal':
                $goal = get_post_meta($post_id, self::META_GOAL, true);
                if ($goal) {
                    // Truncate to 60 characters
                    $truncated = strlen($goal) > 60 ? substr($goal, 0, 60) . '...' : $goal;
                    echo '<span title="' . esc_attr($goal) . '">' . esc_html($truncated) . '</span>';
                } else {
                    echo '—';
                }
                break;
                
            case 'email_sent':
                $email = get_post_meta($post_id, self::META_EMAIL, true);
                if (empty($email)) {
                    echo '<span style="color: #8c8f94;">—</span>';
                    break;
                }
                
                $email_status = get_post_meta($post_id, '_mgrnz_email_status', true);
                $email_sent = get_post_meta($post_id, self::META_EMAIL_SENT, true);
                
                // Display status based on email_status meta field
                switch ($email_status) {
                    case 'sent':
                        $sent_at = get_post_meta($post_id, '_mgrnz_email_sent_at', true);
                        $title = $sent_at ? 'Sent at: ' . date('M j, Y g:i a', strtotime($sent_at)) : 'Email sent';
                        echo '<span style="color: #00a32a; font-weight: 600;" title="' . esc_attr($title) . '">✓ ' . __('Sent', 'mgrnz') . '</span>';
                        break;
                    case 'queued':
                        echo '<span style="color: #2271b1; font-weight: 600;" title="Email queued for delivery">⏳ ' . __('Queued', 'mgrnz') . '</span>';
                        break;
                    case 'processing':
                        echo '<span style="color: #2271b1; font-weight: 600;" title="Email is being sent">⏳ ' . __('Sending', 'mgrnz') . '</span>';
                        break;
                    case 'failed':
                        $retry_count = get_post_meta($post_id, '_mgrnz_email_retry_count', true);
                        $title = $retry_count ? 'Failed (Retry #' . $retry_count . ')' : 'Email delivery failed';
                        echo '<span style="color: #d63638; font-weight: 600;" title="' . esc_attr($title) . '">✗ ' . __('Failed', 'mgrnz') . '</span>';
                        break;
                    case 'retry_scheduled':
                        $retry_count = get_post_meta($post_id, '_mgrnz_email_retry_count', true);
                        echo '<span style="color: #dba617; font-weight: 600;" title="Retry #' . esc_attr($retry_count) . ' scheduled">↻ ' . __('Retrying', 'mgrnz') . '</span>';
                        break;
                    case 'failed_permanent':
                        echo '<span style="color: #d63638; font-weight: 600;" title="Email delivery failed permanently after 3 retries">✗ ' . __('Failed (Permanent)', 'mgrnz') . '</span>';
                        break;
                    case 'schedule_failed':
                        echo '<span style="color: #d63638; font-weight: 600;" title="Failed to schedule email">✗ ' . __('Schedule Failed', 'mgrnz') . '</span>';
                        break;
                    default:
                        // Fallback to old email_sent field
                        if ($email_sent) {
                            echo '<span style="color: #00a32a; font-weight: 600;">✓ ' . __('Sent', 'mgrnz') . '</span>';
                        } else {
                            echo '<span style="color: #8c8f94; font-weight: 600;">○ ' . __('Pending', 'mgrnz') . '</span>';
                        }
                        break;
                }
                break;
        }
    }
    
    /**
     * Make custom columns sortable
     */
    public function sortable_columns($columns) {
        $columns['submission_date'] = 'submission_date';
        $columns['email'] = 'email';
        $columns['email_sent'] = 'email_sent';
        
        return $columns;
    }
    
    /**
     * Handle custom column sorting
     */
    public function custom_orderby($query) {
        if (!is_admin() || !$query->is_main_query()) {
            return;
        }
        
        if ($query->get('post_type') !== self::POST_TYPE) {
            return;
        }
        
        $orderby = $query->get('orderby');
        
        switch ($orderby) {
            case 'submission_date':
                $query->set('meta_key', self::META_SUBMISSION_DATE);
                $query->set('orderby', 'meta_value');
                break;
                
            case 'email':
                $query->set('meta_key', self::META_EMAIL);
                $query->set('orderby', 'meta_value');
                break;
                
            case 'email_sent':
                $query->set('meta_key', self::META_EMAIL_SENT);
                $query->set('orderby', 'meta_value');
                break;
        }
    }
    
    /**
     * Add custom search functionality
     */
    public function custom_search($search, $query) {
        global $wpdb;
        
        if (!is_admin() || !$query->is_main_query() || !$query->is_search()) {
            return $search;
        }
        
        if ($query->get('post_type') !== self::POST_TYPE) {
            return $search;
        }
        
        $search_term = $query->get('s');
        if (empty($search_term)) {
            return $search;
        }
        
        // Search in meta fields
        $meta_keys = array(
            self::META_GOAL,
            self::META_WORKFLOW,
            self::META_TOOLS,
            self::META_PAIN_POINTS,
            self::META_EMAIL,
        );
        
        $meta_query = array();
        foreach ($meta_keys as $key) {
            $meta_query[] = $wpdb->prepare(
                "(pm.meta_key = %s AND pm.meta_value LIKE %s)",
                $key,
                '%' . $wpdb->esc_like($search_term) . '%'
            );
        }
        
        $meta_search = implode(' OR ', $meta_query);
        
        // Combine with default search
        $search = " AND (
            ({$wpdb->posts}.post_title LIKE '%" . $wpdb->esc_like($search_term) . "%')
            OR {$wpdb->posts}.ID IN (
                SELECT DISTINCT post_id 
                FROM {$wpdb->postmeta} pm 
                WHERE {$meta_search}
            )
        )";
        
        return $search;
    }
}

// Initialize the class
new MGRNZ_Submission_CPT();
