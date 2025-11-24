<?php
/**
 * Blueprint Cache Service
 * 
 * Handles caching of AI-generated blueprints to reduce API calls and improve performance.
 * Uses WordPress transients for storage with 7-day expiration.
 *
 * @package MGRNZ_AI_Workflow
 * @since 1.0.0
 */

class MGRNZ_Blueprint_Cache {
    
    /**
     * Cache expiration time in seconds (7 days)
     */
    const CACHE_EXPIRATION = 7 * DAY_IN_SECONDS;
    
    /**
     * Cache key prefix
     */
    const CACHE_PREFIX = 'mgrnz_blueprint_';
    
    /**
     * Get cached blueprint based on submission data hash
     *
     * @param array $submission_data The validated submission data
     * @return array|false Blueprint data if cached, false otherwise
     */
    public function get_cached_blueprint($submission_data) {
        // Check if caching is bypassed
        if ($this->should_bypass_cache()) {
            return false;
        }
        
        // Generate hash for the submission data
        $cache_key = $this->generate_cache_key($submission_data);
        
        // Attempt to retrieve from cache
        $cached_blueprint = get_transient($cache_key);
        
        if ($cached_blueprint !== false) {
            // Log cache hit
            error_log(sprintf(
                '[AI WORKFLOW CACHE HIT] Key: %s | Time: %s',
                $cache_key,
                date('Y-m-d H:i:s')
            ));
            
            return $cached_blueprint;
        }
        
        // Log cache miss
        error_log(sprintf(
            '[AI WORKFLOW CACHE MISS] Key: %s | Time: %s',
            $cache_key,
            date('Y-m-d H:i:s')
        ));
        
        return false;
    }
    
    /**
     * Cache a generated blueprint
     *
     * @param array $submission_data The validated submission data
     * @param array $blueprint The generated blueprint to cache
     * @return bool True if cached successfully, false otherwise
     */
    public function cache_blueprint($submission_data, $blueprint) {
        // Don't cache if bypass is enabled
        if ($this->should_bypass_cache()) {
            return false;
        }
        
        // Generate hash for the submission data
        $cache_key = $this->generate_cache_key($submission_data);
        
        // Store in transient with 7-day expiration
        $result = set_transient($cache_key, $blueprint, self::CACHE_EXPIRATION);
        
        if ($result) {
            error_log(sprintf(
                '[AI WORKFLOW CACHE STORED] Key: %s | Expiration: %d days | Time: %s',
                $cache_key,
                self::CACHE_EXPIRATION / DAY_IN_SECONDS,
                date('Y-m-d H:i:s')
            ));
        }
        
        return $result;
    }
    
    /**
     * Generate a unique cache key based on submission data
     *
     * Creates a hash from the core submission fields to identify identical requests.
     * Only uses fields that affect blueprint generation (excludes email, IP, etc.)
     *
     * @param array $submission_data The validated submission data
     * @return string The cache key
     */
    private function generate_cache_key($submission_data) {
        // Extract only the fields that affect blueprint generation
        $cache_data = [
            'goal' => $submission_data['goal'] ?? '',
            'workflow_description' => $submission_data['workflow_description'] ?? '',
            'tools' => $submission_data['tools'] ?? '',
            'pain_points' => $submission_data['pain_points'] ?? '',
        ];
        
        // Normalize data (trim whitespace, lowercase for consistency)
        $normalized_data = array_map(function($value) {
            return strtolower(trim($value));
        }, $cache_data);
        
        // Create hash from normalized data
        $data_string = implode('|', $normalized_data);
        $hash = md5($data_string);
        
        return self::CACHE_PREFIX . $hash;
    }
    
    /**
     * Check if cache should be bypassed
     *
     * Cache is bypassed for:
     * - Admin users (for testing)
     * - When MGRNZ_BYPASS_CACHE constant is defined
     * - When bypass_cache query parameter is present (admin only)
     *
     * @return bool True if cache should be bypassed
     */
    private function should_bypass_cache() {
        // Check for constant
        if (defined('MGRNZ_BYPASS_CACHE') && MGRNZ_BYPASS_CACHE === true) {
            return true;
        }
        
        // Check for environment variable
        if (getenv('MGRNZ_BYPASS_CACHE') === 'true') {
            return true;
        }
        
        // Check if caching is disabled in settings
        $enable_caching = get_option('mgrnz_enable_cache', true);
        if ($enable_caching === false || $enable_caching === 'false') {
            return true;
        }
        
        // Check for admin user with bypass parameter
        if (current_user_can('manage_options')) {
            // Check query parameter
            if (isset($_GET['bypass_cache']) || isset($_POST['bypass_cache'])) {
                return true;
            }
            
            // Check request header
            if (isset($_SERVER['HTTP_X_BYPASS_CACHE']) && $_SERVER['HTTP_X_BYPASS_CACHE'] === 'true') {
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * Clear all cached blueprints
     *
     * Useful for testing or when AI model/prompts are updated.
     * Only accessible to admin users.
     *
     * @return int Number of cache entries cleared
     */
    public function clear_all_cache() {
        global $wpdb;
        
        // Only allow admins to clear cache
        if (!current_user_can('manage_options')) {
            return 0;
        }
        
        // Delete all transients with our prefix
        $prefix = self::CACHE_PREFIX;
        $sql = $wpdb->prepare(
            "DELETE FROM {$wpdb->options} WHERE option_name LIKE %s OR option_name LIKE %s",
            $wpdb->esc_like('_transient_' . $prefix) . '%',
            $wpdb->esc_like('_transient_timeout_' . $prefix) . '%'
        );
        
        $deleted = $wpdb->query($sql);
        
        error_log(sprintf(
            '[AI WORKFLOW CACHE CLEARED] Entries deleted: %d | Time: %s',
            $deleted,
            date('Y-m-d H:i:s')
        ));
        
        return $deleted;
    }
    
    /**
     * Get cache statistics
     *
     * Returns information about cached blueprints.
     * Only accessible to admin users.
     *
     * @return array Cache statistics
     */
    public function get_cache_stats() {
        global $wpdb;
        
        // Only allow admins to view stats
        if (!current_user_can('manage_options')) {
            return [];
        }
        
        $prefix = self::CACHE_PREFIX;
        
        // Count cached blueprints
        $count = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->options} WHERE option_name LIKE %s AND option_name NOT LIKE %s",
            $wpdb->esc_like('_transient_' . $prefix) . '%',
            $wpdb->esc_like('_transient_timeout_') . '%'
        ));
        
        return [
            'cached_blueprints' => (int) $count,
            'cache_expiration_days' => self::CACHE_EXPIRATION / DAY_IN_SECONDS,
            'cache_enabled' => !$this->should_bypass_cache(),
        ];
    }
}
