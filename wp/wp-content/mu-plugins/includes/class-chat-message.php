<?php
/**
 * Chat Message Data Model
 * 
 * Represents an individual message in a conversation between user and AI assistant
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Chat_Message {
    
    /**
     * Message ID
     * @var int
     */
    public $message_id;
    
    /**
     * Session ID this message belongs to
     * @var string
     */
    public $session_id;
    
    /**
     * Message sender ('user' or 'assistant')
     * @var string
     */
    public $sender;
    
    /**
     * Message content
     * @var string
     */
    public $content;
    
    /**
     * Message timestamp
     * @var string
     */
    public $timestamp;
    
    /**
     * Additional metadata (upsell type, action triggers, etc.)
     * @var array
     */
    public $metadata;
    
    /**
     * Constructor
     * 
     * @param array $data Message data
     */
    public function __construct($data = []) {
        $this->message_id = $data['message_id'] ?? null;
        $this->session_id = $data['session_id'] ?? '';
        $this->sender = $data['sender'] ?? 'user';
        $this->content = $data['content'] ?? '';
        $this->timestamp = $data['timestamp'] ?? current_time('mysql');
        $this->metadata = $data['metadata'] ?? [];
        
        // Decode metadata if it's a JSON string
        if (is_string($this->metadata)) {
            $this->metadata = json_decode($this->metadata, true) ?: [];
        }
    }
    
    /**
     * Save message to database
     * 
     * @return int|false Message ID on success, false on failure
     */
    public function save() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_chat_messages';
        
        $data = [
            'session_id' => $this->session_id,
            'sender' => $this->sender,
            'content' => $this->content,
            'timestamp' => $this->timestamp,
            'metadata' => json_encode($this->metadata)
        ];
        
        $format = ['%s', '%s', '%s', '%s', '%s'];
        
        if ($this->message_id) {
            // Update existing message
            $result = $wpdb->update(
                $table_name,
                $data,
                ['message_id' => $this->message_id],
                $format,
                ['%d']
            );
            
            return $result !== false ? $this->message_id : false;
        } else {
            // Insert new message
            $result = $wpdb->insert($table_name, $data, $format);
            
            if ($result) {
                $this->message_id = $wpdb->insert_id;
                return $this->message_id;
            }
            
            return false;
        }
    }
    
    /**
     * Load message from database by ID
     * 
     * @param int $message_id Message ID
     * @return MGRNZ_Chat_Message|null Message object or null if not found
     */
    public static function load($message_id) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_chat_messages';
        
        $data = $wpdb->get_row(
            $wpdb->prepare(
                "SELECT * FROM {$table_name} WHERE message_id = %d",
                $message_id
            ),
            ARRAY_A
        );
        
        return $data ? new self($data) : null;
    }
    
    /**
     * Get all messages for a session
     * 
     * @param string $session_id Session ID
     * @param int $limit Maximum number of messages to retrieve
     * @return array Array of MGRNZ_Chat_Message objects
     */
    public static function get_by_session($session_id, $limit = 100) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_chat_messages';
        
        $results = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * FROM {$table_name} 
                 WHERE session_id = %s 
                 ORDER BY timestamp ASC 
                 LIMIT %d",
                $session_id,
                $limit
            ),
            ARRAY_A
        );
        
        $messages = [];
        foreach ($results as $data) {
            $messages[] = new self($data);
        }
        
        return $messages;
    }
    
    /**
     * Delete message from database
     * 
     * @return bool True on success, false on failure
     */
    public function delete() {
        if (!$this->message_id) {
            return false;
        }
        
        global $wpdb;
        $table_name = $wpdb->prefix . 'mgrnz_chat_messages';
        
        $result = $wpdb->delete(
            $table_name,
            ['message_id' => $this->message_id],
            ['%d']
        );
        
        return $result !== false;
    }
    
    /**
     * Convert message to array
     * 
     * @param bool $escape Whether to escape content for output (default: false)
     * @return array Message data as array
     */
    public function to_array($escape = false) {
        $content = $this->content;
        
        // Escape content for safe output if requested
        if ($escape) {
            $content = esc_html($content);
        }
        
        return [
            'message_id' => $this->message_id,
            'session_id' => $this->session_id,
            'sender' => $this->sender,
            'content' => $content,
            'timestamp' => $this->timestamp,
            'metadata' => $this->metadata
        ];
    }
    
    /**
     * Get sanitized content for safe output
     * 
     * @return string Escaped content
     */
    public function get_safe_content() {
        return esc_html($this->content);
    }
    
    /**
     * Validate message data
     * 
     * @return bool|WP_Error True if valid, WP_Error if invalid
     */
    public function validate() {
        if (empty($this->session_id)) {
            return new WP_Error('invalid_session', 'Session ID is required');
        }
        
        if (!in_array($this->sender, ['user', 'assistant', 'system'])) {
            return new WP_Error('invalid_sender', 'Sender must be user, assistant, or system');
        }
        
        if (empty($this->content)) {
            return new WP_Error('invalid_content', 'Message content is required');
        }
        
        if (strlen($this->content) > 10000) {
            return new WP_Error('content_too_long', 'Message content exceeds maximum length');
        }
        
        return true;
    }
}
