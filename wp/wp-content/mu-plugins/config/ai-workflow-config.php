<?php
/**
 * AI Workflow Configuration
 * 
 * Environment-based configuration for AI service integration.
 * Supports both environment variables and WordPress options.
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    // AI Provider Configuration
    'ai_provider' => getenv('MGRNZ_AI_PROVIDER') ?: get_option('mgrnz_ai_provider', 'openai'),
    'ai_api_key' => getenv('MGRNZ_AI_API_KEY') ?: get_option('mgrnz_ai_api_key', ''),
    'ai_model' => getenv('MGRNZ_AI_MODEL') ?: get_option('mgrnz_ai_model', 'gpt-4'),
    'ai_max_tokens' => (int) (getenv('MGRNZ_AI_MAX_TOKENS') ?: get_option('mgrnz_ai_max_tokens', 2000)),
    'ai_temperature' => (float) (getenv('MGRNZ_AI_TEMPERATURE') ?: get_option('mgrnz_ai_temperature', 0.7)),
    
    // Feature Flags
    'enable_caching' => getenv('MGRNZ_ENABLE_CACHE') !== 'false',
    'enable_emails' => getenv('MGRNZ_ENABLE_EMAILS') !== 'false',
    
    // Rate Limiting
    'rate_limit' => (int) (getenv('MGRNZ_RATE_LIMIT') ?: 3),
    'rate_limit_window' => HOUR_IN_SECONDS,
    
    // Timeouts
    'ai_timeout' => 30, // seconds
    'email_timeout' => 60, // seconds
    
    // Cache Settings
    'cache_duration' => 7 * DAY_IN_SECONDS,
];
