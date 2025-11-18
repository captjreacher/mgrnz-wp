<?php
/**
 * WordPress Environment Configuration Loader
 * 
 * This file handles loading environment-specific configuration for WordPress.
 * It detects the current environment (local vs production) and loads the appropriate
 * configuration file (.env.local or .env.production).
 * 
 * Features:
 * - Automatic environment detection
 * - Support for vlucas/phpdotenv (if installed via Composer)
 * - Fallback to manual .env parsing (if Composer not available)
 * - Helper functions for accessing environment variables
 * 
 * @package MGRNZ
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH') && !defined('WP_INSTALLING')) {
    // Allow loading before ABSPATH is defined during wp-config.php execution
    if (basename($_SERVER['SCRIPT_FILENAME']) !== 'wp-config.php') {
        die('Direct access not permitted.');
    }
}

/**
 * Detect the current environment
 * 
 * Detection logic (in order of priority):
 * 1. WP_ENVIRONMENT_TYPE constant (if already defined)
 * 2. WP_ENVIRONMENT environment variable
 * 3. Presence of .env.local file (indicates local environment)
 * 4. Server hostname detection (localhost, .local domain)
 * 5. Default to 'production' if unable to determine
 * 
 * @return string Environment type: 'local' or 'production'
 */
function mgrnz_detect_environment() {
    // Check if environment is already defined
    if (defined('WP_ENVIRONMENT_TYPE')) {
        return WP_ENVIRONMENT_TYPE;
    }
    
    // Check environment variable
    $env = getenv('WP_ENVIRONMENT');
    if ($env !== false && in_array($env, ['local', 'production', 'development', 'staging'])) {
        return $env === 'development' ? 'local' : $env;
    }
    
    // Check for .env.local file (indicates local environment)
    $rootDir = dirname(__FILE__);
    if (file_exists($rootDir . '/.env.local')) {
        return 'local';
    }
    
    // Check server hostname
    $hostname = gethostname();
    $serverName = $_SERVER['SERVER_NAME'] ?? $_SERVER['HTTP_HOST'] ?? '';
    
    // Local environment indicators
    $localIndicators = [
        'localhost',
        '127.0.0.1',
        '.local',
        '.test',
        '.dev',
        'mgrnz.local'
    ];
    
    foreach ($localIndicators as $indicator) {
        if (stripos($hostname, $indicator) !== false || stripos($serverName, $indicator) !== false) {
            return 'local';
        }
    }
    
    // Default to production for safety
    return 'production';
}

/**
 * Load environment variables from .env file
 * 
 * This function attempts to load environment variables using vlucas/phpdotenv
 * if available (installed via Composer). If not available, it falls back to
 * manual parsing of the .env file.
 * 
 * @param string $envFile The environment file to load (.env.local or .env.production)
 * @return bool True if loaded successfully, false otherwise
 */
function mgrnz_load_env_file($envFile) {
    $rootDir = dirname(__FILE__);
    $envPath = $rootDir . '/' . $envFile;
    
    // Check if file exists
    if (!file_exists($envPath)) {
        return false;
    }
    
    // Try to use vlucas/phpdotenv if available
    if (class_exists('Dotenv\Dotenv')) {
        try {
            $dotenv = Dotenv\Dotenv::createImmutable($rootDir, $envFile);
            $dotenv->load();
            return true;
        } catch (Exception $e) {
            // Fall through to manual parsing
            error_log('Dotenv loading failed: ' . $e->getMessage());
        }
    }
    
    // Fallback: Manual parsing of .env file
    return mgrnz_parse_env_file($envPath);
}

/**
 * Manually parse .env file and set environment variables
 * 
 * This is a fallback method when vlucas/phpdotenv is not available.
 * It reads the .env file line by line and sets environment variables.
 * 
 * @param string $envPath Full path to the .env file
 * @return bool True if parsed successfully, false otherwise
 */
function mgrnz_parse_env_file($envPath) {
    if (!is_readable($envPath)) {
        return false;
    }
    
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        return false;
    }
    
    foreach ($lines as $line) {
        // Skip comments
        $line = trim($line);
        if (empty($line) || strpos($line, '#') === 0) {
            continue;
        }
        
        // Parse KEY=VALUE
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            
            // Remove quotes from value if present
            if ((substr($value, 0, 1) === '"' && substr($value, -1) === '"') ||
                (substr($value, 0, 1) === "'" && substr($value, -1) === "'")) {
                $value = substr($value, 1, -1);
            }
            
            // Only set if not already defined
            if (!empty($key) && getenv($key) === false) {
                putenv("$key=$value");
                $_ENV[$key] = $value;
                $_SERVER[$key] = $value;
            }
        }
    }
    
    return true;
}

/**
 * Helper function to get environment variables with fallback
 * 
 * This function retrieves environment variables and provides type conversion
 * for common values (true/false, null).
 * 
 * @param string $key The environment variable key
 * @param mixed $default Default value if variable is not set
 * @return mixed The environment variable value or default
 */
function mgrnz_env($key, $default = null) {
    $value = getenv($key);
    
    if ($value === false) {
        return $default;
    }
    
    // Convert string representations to actual types
    $lower = strtolower($value);
    
    if ($lower === 'true' || $lower === '(true)') {
        return true;
    }
    
    if ($lower === 'false' || $lower === '(false)') {
        return false;
    }
    
    if ($lower === 'null' || $lower === '(null)') {
        return null;
    }
    
    if ($lower === 'empty' || $lower === '(empty)') {
        return '';
    }
    
    return $value;
}

/**
 * Initialize environment configuration
 * 
 * This is the main entry point that:
 * 1. Detects the current environment
 * 2. Loads the appropriate .env file
 * 3. Sets up the environment for WordPress
 * 
 * @return string The detected environment type
 */
function mgrnz_init_environment() {
    // Detect environment
    $environment = mgrnz_detect_environment();
    
    // Determine which .env file to load
    $envFile = ($environment === 'local') ? '.env.local' : '.env.production';
    
    // Load environment variables
    $loaded = mgrnz_load_env_file($envFile);
    
    // Log environment detection (only in debug mode)
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log(sprintf(
            'MGRNZ Environment: %s | Config file: %s | Loaded: %s',
            $environment,
            $envFile,
            $loaded ? 'Yes' : 'No'
        ));
    }
    
    return $environment;
}

// Auto-initialize when this file is loaded
$GLOBALS['mgrnz_environment'] = mgrnz_init_environment();

// Make helper function available globally as 'env' if not already defined
if (!function_exists('env')) {
    function env($key, $default = null) {
        return mgrnz_env($key, $default);
    }
}
