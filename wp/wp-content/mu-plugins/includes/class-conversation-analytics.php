<?php
/**
 * Conversation Analytics Tracker
 * 
 * Tracks and logs key metrics for wizard completion, chat engagement,
 * upsell conversions, and blueprint downloads
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Conversation_Analytics {
    
    /**
     * Event types
     */
    const EVENT_WIZARD_COMPLETED = 'wizard_completed';
    const EVENT_CHAT_STARTED = 'chat_started';
    const EVENT_CHAT_MESSAGE_SENT = 'chat_message_sent';
    const EVENT_CHAT_MESSAGE_RECEIVED = 'chat_message_received';
    const EVENT_STATE_TRANSITION = 'state_transition';
    const EVENT_CONSULTATION_OFFERED = 'consultation_offered';
    const EVENT_CONSULTATION_CLICKED = 'consultation_clicked';
    const EVENT_ESTIMATE_OFFERED = 'estimate_offered';
    const EVENT_ESTIMATE_GENERATED = 'estimate_generated';
    const EVENT_QUOTE_OFFERED = 'quote_offered';
    const EVENT_QUOTE_REQUESTED = 'quote_requested';
    const EVENT_ADDITIONAL_WORKFLOW_OFFERED = 'additional_workflow_offered';
    const EVENT_ADDITIONAL_WORKFLOW_CLICKED = 'additional_workflow_clicked';
    const EVENT_BLUEPRINT_GENERATED = 'blueprint_generated';
    const EVENT_BLUEPRINT_PRESENTED = 'blueprint_presented';
    const EVENT_BLUEPRINT_DOWNLOAD_ATTEMPTED = 'blueprint_download_attempted';
    const EVENT_BLUEPRINT_DOWNLOADED = 'blueprint_downloaded';
    const EVENT_SESSION_TIMEOUT = 'session_timeout';
    const EVENT_SESSION_COMPLETED = 'session_completed';
    
    /**
     * Track an analytics event
     * 
     * @param string $event_type Event type constant
     * @param string $session_id Session ID
     * @param array $metadata Additional event data
     * @return int|false Event ID or false on failure
     */
    public static function track_event($event_type, $session_id, $metadata = []) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_analytics';
        
        $data = [
            'event_type' => $event_type,
            'session_id' => $session_id,
            'event_timestamp' => current_time('mysql'),
            'metadata' => json_encode($metadata),
            'ip_address' => self::get_client_ip(),
            'user_agent' => isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field($_SERVER['HTTP_USER_AGENT']) : ''
        ];
        
        $result = $wpdb->insert($table_name, $data, ['%s', '%s', '%s', '%s', '%s', '%s']);
        
        if ($result === false) {
            error_log('[Analytics] Failed to track event: ' . $event_type . ' for session: ' . $session_id);
            return false;
        }
        
        return $wpdb->insert_id;
    }
    
    /**
     * Get wizard completion rate
     * 
     * @param string $start_date Start date (Y-m-d H:i:s)
     * @param string $end_date End date (Y-m-d H:i:s)
     * @return array Completion rate data
     */
    public static function get_wizard_completion_rate($start_date = null, $end_date = null) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_analytics';
        
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND event_timestamp BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Count wizard completions
        $completed = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_WIZARD_COMPLETED
        ));
        
        // Count chat sessions started
        $started = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_CHAT_STARTED
        ));
        
        $rate = $started > 0 ? ($completed / $started) * 100 : 0;
        
        return [
            'completed' => (int) $completed,
            'started' => (int) $started,
            'rate' => round($rate, 2)
        ];
    }
    
    /**
     * Get chat engagement metrics
     * 
     * @param string $start_date Start date (Y-m-d H:i:s)
     * @param string $end_date End date (Y-m-d H:i:s)
     * @return array Engagement metrics
     */
    public static function get_chat_engagement($start_date = null, $end_date = null) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_analytics';
        
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND event_timestamp BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Total sessions with chat
        $total_sessions = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_CHAT_STARTED
        ));
        
        // Total messages sent by users
        $total_messages = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_CHAT_MESSAGE_SENT
        ));
        
        // Average messages per session
        $avg_messages = $total_sessions > 0 ? $total_messages / $total_sessions : 0;
        
        // Get message distribution
        $message_distribution = $wpdb->get_results($wpdb->prepare(
            "SELECT session_id, COUNT(*) as message_count 
            FROM {$table_name} 
            WHERE event_type = %s {$date_query}
            GROUP BY session_id",
            self::EVENT_CHAT_MESSAGE_SENT
        ));
        
        // Calculate engagement levels
        $high_engagement = 0; // 5+ messages
        $medium_engagement = 0; // 2-4 messages
        $low_engagement = 0; // 1 message
        
        foreach ($message_distribution as $row) {
            if ($row->message_count >= 5) {
                $high_engagement++;
            } elseif ($row->message_count >= 2) {
                $medium_engagement++;
            } else {
                $low_engagement++;
            }
        }
        
        return [
            'total_sessions' => (int) $total_sessions,
            'total_messages' => (int) $total_messages,
            'avg_messages_per_session' => round($avg_messages, 2),
            'engagement_levels' => [
                'high' => $high_engagement,
                'medium' => $medium_engagement,
                'low' => $low_engagement
            ]
        ];
    }
    
    /**
     * Get upsell conversion metrics
     * 
     * @param string $start_date Start date (Y-m-d H:i:s)
     * @param string $end_date End date (Y-m-d H:i:s)
     * @return array Upsell conversion data
     */
    public static function get_upsell_conversions($start_date = null, $end_date = null) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_analytics';
        
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND event_timestamp BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Consultation metrics
        $consultation_offered = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_CONSULTATION_OFFERED
        ));
        
        $consultation_clicked = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_CONSULTATION_CLICKED
        ));
        
        $consultation_rate = $consultation_offered > 0 ? ($consultation_clicked / $consultation_offered) * 100 : 0;
        
        // Estimate metrics
        $estimate_offered = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_ESTIMATE_OFFERED
        ));
        
        $estimate_generated = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_ESTIMATE_GENERATED
        ));
        
        $estimate_rate = $estimate_offered > 0 ? ($estimate_generated / $estimate_offered) * 100 : 0;
        
        // Quote metrics
        $quote_offered = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_QUOTE_OFFERED
        ));
        
        $quote_requested = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_QUOTE_REQUESTED
        ));
        
        $quote_rate = $quote_offered > 0 ? ($quote_requested / $quote_offered) * 100 : 0;
        
        // Additional workflow metrics
        $additional_offered = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_ADDITIONAL_WORKFLOW_OFFERED
        ));
        
        $additional_clicked = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_ADDITIONAL_WORKFLOW_CLICKED
        ));
        
        $additional_rate = $additional_offered > 0 ? ($additional_clicked / $additional_offered) * 100 : 0;
        
        return [
            'consultation' => [
                'offered' => (int) $consultation_offered,
                'clicked' => (int) $consultation_clicked,
                'conversion_rate' => round($consultation_rate, 2)
            ],
            'estimate' => [
                'offered' => (int) $estimate_offered,
                'generated' => (int) $estimate_generated,
                'conversion_rate' => round($estimate_rate, 2)
            ],
            'quote' => [
                'offered' => (int) $quote_offered,
                'requested' => (int) $quote_requested,
                'conversion_rate' => round($quote_rate, 2)
            ],
            'additional_workflow' => [
                'offered' => (int) $additional_offered,
                'clicked' => (int) $additional_clicked,
                'conversion_rate' => round($additional_rate, 2)
            ]
        ];
    }
    
    /**
     * Get blueprint download metrics
     * 
     * @param string $start_date Start date (Y-m-d H:i:s)
     * @param string $end_date End date (Y-m-d H:i:s)
     * @return array Blueprint download data
     */
    public static function get_blueprint_downloads($start_date = null, $end_date = null) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_analytics';
        
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND event_timestamp BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        // Blueprints presented
        $presented = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_BLUEPRINT_PRESENTED
        ));
        
        // Download attempts (modal opened)
        $attempted = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_BLUEPRINT_DOWNLOAD_ATTEMPTED
        ));
        
        // Successful downloads
        $downloaded = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT session_id) FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_BLUEPRINT_DOWNLOADED
        ));
        
        $attempt_rate = $presented > 0 ? ($attempted / $presented) * 100 : 0;
        $download_rate = $attempted > 0 ? ($downloaded / $attempted) * 100 : 0;
        $overall_rate = $presented > 0 ? ($downloaded / $presented) * 100 : 0;
        
        return [
            'presented' => (int) $presented,
            'download_attempted' => (int) $attempted,
            'downloaded' => (int) $downloaded,
            'attempt_rate' => round($attempt_rate, 2),
            'download_completion_rate' => round($download_rate, 2),
            'overall_download_rate' => round($overall_rate, 2)
        ];
    }
    
    /**
     * Get session duration statistics
     * 
     * @param string $start_date Start date (Y-m-d H:i:s)
     * @param string $end_date End date (Y-m-d H:i:s)
     * @return array Session duration data
     */
    public static function get_session_durations($start_date = null, $end_date = null) {
        global $wpdb;
        $sessions_table = $wpdb->prefix . 'mgrnz_conversation_sessions';
        
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " WHERE created_at BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        $results = $wpdb->get_results(
            "SELECT 
                session_id,
                created_at,
                updated_at,
                TIMESTAMPDIFF(SECOND, created_at, updated_at) as duration_seconds
            FROM {$sessions_table}
            {$date_query}
            ORDER BY duration_seconds DESC"
        );
        
        if (empty($results)) {
            return [
                'total_sessions' => 0,
                'avg_duration_seconds' => 0,
                'avg_duration_minutes' => 0,
                'median_duration_seconds' => 0,
                'min_duration_seconds' => 0,
                'max_duration_seconds' => 0
            ];
        }
        
        $durations = array_map(function($row) {
            return (int) $row->duration_seconds;
        }, $results);
        
        $total = count($durations);
        $sum = array_sum($durations);
        $avg = $sum / $total;
        
        sort($durations);
        $median = $durations[floor($total / 2)];
        
        return [
            'total_sessions' => $total,
            'avg_duration_seconds' => round($avg, 2),
            'avg_duration_minutes' => round($avg / 60, 2),
            'median_duration_seconds' => $median,
            'median_duration_minutes' => round($median / 60, 2),
            'min_duration_seconds' => min($durations),
            'max_duration_seconds' => max($durations)
        ];
    }
    
    /**
     * Get state transition analytics
     * 
     * @param string $start_date Start date (Y-m-d H:i:s)
     * @param string $end_date End date (Y-m-d H:i:s)
     * @return array State transition data
     */
    public static function get_state_transitions($start_date = null, $end_date = null) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_analytics';
        
        $date_query = '';
        if ($start_date && $end_date) {
            $date_query = $wpdb->prepare(
                " AND event_timestamp BETWEEN %s AND %s",
                $start_date,
                $end_date
            );
        }
        
        $results = $wpdb->get_results($wpdb->prepare(
            "SELECT metadata FROM {$table_name} 
            WHERE event_type = %s {$date_query}",
            self::EVENT_STATE_TRANSITION
        ));
        
        $state_counts = [];
        
        foreach ($results as $row) {
            $metadata = json_decode($row->metadata, true);
            $state = $metadata['new_state'] ?? 'unknown';
            
            if (!isset($state_counts[$state])) {
                $state_counts[$state] = 0;
            }
            $state_counts[$state]++;
        }
        
        return $state_counts;
    }
    
    /**
     * Get comprehensive analytics dashboard data
     * 
     * @param string $start_date Start date (Y-m-d H:i:s)
     * @param string $end_date End date (Y-m-d H:i:s)
     * @return array Complete analytics data
     */
    public static function get_dashboard_data($start_date = null, $end_date = null) {
        return [
            'wizard_completion' => self::get_wizard_completion_rate($start_date, $end_date),
            'chat_engagement' => self::get_chat_engagement($start_date, $end_date),
            'upsell_conversions' => self::get_upsell_conversions($start_date, $end_date),
            'blueprint_downloads' => self::get_blueprint_downloads($start_date, $end_date),
            'session_durations' => self::get_session_durations($start_date, $end_date),
            'state_transitions' => self::get_state_transitions($start_date, $end_date)
        ];
    }
    
    /**
     * Create analytics database table
     */
    public static function create_table() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_analytics';
        $charset_collate = $wpdb->get_charset_collate();
        
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            event_id bigint(20) NOT NULL AUTO_INCREMENT,
            event_type varchar(50) NOT NULL,
            session_id varchar(100) NOT NULL,
            event_timestamp datetime NOT NULL,
            metadata longtext,
            ip_address varchar(45),
            user_agent text,
            PRIMARY KEY  (event_id),
            KEY event_type (event_type),
            KEY session_id (session_id),
            KEY event_timestamp (event_timestamp)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
    
    /**
     * Get client IP address
     * 
     * @return string Client IP
     */
    private static function get_client_ip() {
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
}
