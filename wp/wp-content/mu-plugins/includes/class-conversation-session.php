<?php
/**
 * Conversation Session Data Model
 * 
 * Stores session data, message history, and conversation state
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Conversation_Session {
    
    /**
     * Conversation states
     */
    const STATE_CLARIFICATION = 'CLARIFICATION';
    const STATE_UPSELL = 'UPSELL';
    const STATE_BLUEPRINT_GENERATION = 'BLUEPRINT_GENERATION';
    const STATE_BLUEPRINT_PRESENTATION = 'BLUEPRINT_PRESENTATION';
    const STATE_COMPLETE = 'COMPLETE';
    
    /**
     * Session ID (unique identifier)
     * @var string
     */
    public $session_id;
    
    /**
     * WordPress user ID (0 for guests)
     * @var int
     */
    public $user_id;
    
    /**
     * Generated assistant name
     * @var string
     */
    public $assistant_name;
    
    /**
     * Original wizard submission data
     * @var array
     */
    public $wizard_data;
    
    /**
     * Message history (array of message IDs)
     * @var array
     */
    public $message_history;
    
    /**
     * Current conversation state
     * @var string
     */
    public $conversation_state;
    
    /**
     * Session created timestamp
     * @var string
     */
    public $created_at;
    
    /**
     * Session last updated timestamp
     * @var string
     */
    public $updated_at;
    
    /**
     * Blueprint ID reference
     * @var int
     */
    public $blueprint_id;
    
    /**
     * Additional session metadata
     * @var array
     */
    public $metadata;
    
    /**
     * Constructor
     * 
     * @param array $data Session data
     */
    public function __construct($data = []) {
        $this->session_id = $data['session_id'] ?? $this->generate_session_id();
        $this->user_id = $data['user_id'] ?? get_current_user_id();
        $this->assistant_name = $data['assistant_name'] ?? $this->generate_assistant_name();
        $this->wizard_data = $data['wizard_data'] ?? [];
        $this->message_history = $data['message_history'] ?? [];
        $this->conversation_state = $data['conversation_state'] ?? self::STATE_CLARIFICATION;
        $this->created_at = $data['created_at'] ?? current_time('mysql');
        $this->updated_at = $data['updated_at'] ?? current_time('mysql');
        $this->blueprint_id = $data['blueprint_id'] ?? null;
        $this->metadata = $data['metadata'] ?? [];
        
        // Decode JSON fields if they're strings
        if (is_string($this->wizard_data)) {
            $this->wizard_data = json_decode($this->wizard_data, true) ?: [];
        }
        if (is_string($this->message_history)) {
            $this->message_history = json_decode($this->message_history, true) ?: [];
        }
        if (is_string($this->metadata)) {
            $this->metadata = json_decode($this->metadata, true) ?: [];
        }
    }
    
    /**
     * Generate unique session ID
     * 
     * @return string Session ID
     */
    private function generate_session_id() {
        return 'sess_' . wp_generate_password(32, false);
    }
    
    /**
     * Generate random assistant name
     * 
     * @return string Assistant name
     */
    private function generate_assistant_name() {
        $names = [
            'Alex', 'Jordan', 'Taylor', 'Morgan', 'Casey',
            'Riley', 'Avery', 'Quinn', 'Sage', 'Rowan',
            'Phoenix', 'River', 'Sky', 'Nova', 'Atlas'
        ];
        
        return $names[array_rand($names)];
    }
    
    /**
     * Save session to database
     * 
     * @return bool True on success, false on failure
     */
    public function save() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_sessions';
        
        $this->updated_at = current_time('mysql');
        
        $data = [
            'session_id' => $this->session_id,
            'user_id' => $this->user_id,
            'assistant_name' => $this->assistant_name,
            'wizard_data' => json_encode($this->wizard_data),
            'message_history' => json_encode($this->message_history),
            'conversation_state' => $this->conversation_state,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'blueprint_id' => $this->blueprint_id,
            'metadata' => json_encode($this->metadata)
        ];
        
        $format = ['%s', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s'];
        
        // Check if session exists
        $exists = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT COUNT(*) FROM {$table_name} WHERE session_id = %s",
                $this->session_id
            )
        );
        
        if ($exists) {
            // Update existing session
            $result = $wpdb->update(
                $table_name,
                $data,
                ['session_id' => $this->session_id],
                $format,
                ['%s']
            );
        } else {
            // Insert new session
            $result = $wpdb->insert($table_name, $data, $format);
        }
        
        return $result !== false;
    }
    
    /**
     * Load session from database by session ID
     * 
     * @param string $session_id Session ID
     * @return MGRNZ_Conversation_Session|null Session object or null if not found
     */
    public static function load($session_id) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_sessions';
        
        $data = $wpdb->get_row(
            $wpdb->prepare(
                "SELECT * FROM {$table_name} WHERE session_id = %s",
                $session_id
            ),
            ARRAY_A
        );
        
        return $data ? new self($data) : null;
    }
    
    /**
     * Delete session from database
     * 
     * @return bool True on success, false on failure
     */
    public function delete() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_conversation_sessions';
        
        $result = $wpdb->delete(
            $table_name,
            ['session_id' => $this->session_id],
            ['%s']
        );
        
        return $result !== false;
    }
    
    /**
     * Add message to session history
     * 
     * @param int $message_id Message ID
     */
    public function add_message($message_id) {
        $this->message_history[] = $message_id;
        $this->save();
    }
    
    /**
     * Get all messages for this session
     * 
     * @return array Array of MGRNZ_Chat_Message objects
     */
    public function get_messages() {
        require_once __DIR__ . '/class-chat-message.php';
        return MGRNZ_Chat_Message::get_by_session($this->session_id);
    }
    
    /**
     * Update conversation state
     * 
     * @param string $new_state New state
     * @return bool True on success, false on failure
     */
    public function update_state($new_state) {
        $valid_states = [
            self::STATE_CLARIFICATION,
            self::STATE_UPSELL,
            self::STATE_BLUEPRINT_GENERATION,
            self::STATE_BLUEPRINT_PRESENTATION,
            self::STATE_COMPLETE
        ];
        
        if (!in_array($new_state, $valid_states)) {
            return false;
        }
        
        $this->conversation_state = $new_state;
        return $this->save();
    }
    
    /**
     * Check if session is expired (older than 24 hours with no activity)
     * 
     * @return bool True if expired
     */
    public function is_expired() {
        $expiry_time = strtotime($this->updated_at) + (24 * HOUR_IN_SECONDS);
        return time() > $expiry_time;
    }
    
    /**
     * Convert session to array
     * 
     * @return array Session data as array
     */
    public function to_array() {
        return [
            'session_id' => $this->session_id,
            'user_id' => $this->user_id,
            'assistant_name' => $this->assistant_name,
            'wizard_data' => $this->wizard_data,
            'message_history' => $this->message_history,
            'conversation_state' => $this->conversation_state,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'blueprint_id' => $this->blueprint_id,
            'metadata' => $this->metadata
        ];
    }
    
    /**
     * Get metadata value
     * 
     * @param string $key Metadata key
     * @param mixed $default Default value if key doesn't exist
     * @return mixed Metadata value
     */
    public function get_metadata($key, $default = null) {
        return $this->metadata[$key] ?? $default;
    }
    
    /**
     * Set metadata value
     * 
     * @param string $key Metadata key
     * @param mixed $value Metadata value
     */
    public function set_metadata($key, $value) {
        $this->metadata[$key] = $value;
    }
    
    /**
     * Clean up expired sessions (called via cron)
     * 
     * @return int Number of sessions deleted
     */
    public static function cleanup_expired_sessions() {
        global $wpdb;
        $sessions_table = $wpdb->prefix . 'mgrnz_conversation_sessions';
        $messages_table = $wpdb->prefix . 'mgrnz_chat_messages';
        
        // Get session IDs that are older than 30 days (data retention policy)
        $expired_sessions = $wpdb->get_col(
            $wpdb->prepare(
                "SELECT session_id FROM {$sessions_table} WHERE updated_at < %s",
                date('Y-m-d H:i:s', strtotime('-30 days'))
            )
        );
        
        if (empty($expired_sessions)) {
            return 0;
        }
        
        // Delete chat messages for expired sessions
        $placeholders = implode(',', array_fill(0, count($expired_sessions), '%s'));
        $wpdb->query(
            $wpdb->prepare(
                "DELETE FROM {$messages_table} WHERE session_id IN ($placeholders)",
                ...$expired_sessions
            )
        );
        
        // Delete expired sessions
        $deleted = $wpdb->query(
            $wpdb->prepare(
                "DELETE FROM {$sessions_table} WHERE updated_at < %s",
                date('Y-m-d H:i:s', strtotime('-30 days'))
            )
        );
        
        return $deleted ?: 0;
    }
}
