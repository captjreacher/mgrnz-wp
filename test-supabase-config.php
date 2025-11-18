<?php
/**
 * Supabase Configuration Test Script
 * 
 * This script verifies that WordPress is properly configured for local Supabase testing.
 * Run this from your WordPress root directory or access via browser.
 * 
 * Usage:
 *   php test-supabase-config.php
 *   OR
 *   http://mgrnz.local/test-supabase-config.php
 */

// Load WordPress if not already loaded
if (!defined('ABSPATH')) {
    require_once __DIR__ . '/wp-config-local.php';
}

// Output as plain text
header('Content-Type: text/plain; charset=utf-8');

echo "===========================================\n";
echo "WordPress + Supabase Configuration Test\n";
echo "===========================================\n\n";

// Test 1: Environment Variables
echo "1. Environment Variables\n";
echo "   -----------------------\n";

$env_vars = [
    'WP_ENVIRONMENT' => getenv('WP_ENVIRONMENT'),
    'WP_HOME' => getenv('WP_HOME'),
    'SUPABASE_URL' => getenv('SUPABASE_URL'),
    'SUPABASE_ANON_KEY' => getenv('SUPABASE_ANON_KEY') ? substr(getenv('SUPABASE_ANON_KEY'), 0, 20) . '...' : null,
    'SUPABASE_SERVICE_ROLE_KEY' => getenv('SUPABASE_SERVICE_ROLE_KEY') ? substr(getenv('SUPABASE_SERVICE_ROLE_KEY'), 0, 20) . '...' : null,
    'MGRNZ_WEBHOOK_URL' => getenv('MGRNZ_WEBHOOK_URL'),
    'MGRNZ_WEBHOOK_SECRET' => getenv('MGRNZ_WEBHOOK_SECRET') ? '***' . substr(getenv('MGRNZ_WEBHOOK_SECRET'), -4) : null,
];

foreach ($env_vars as $key => $value) {
    $status = $value ? '✓' : '✗';
    $display = $value ?: '(not set)';
    echo "   $status $key: $display\n";
}

// Test 2: WordPress Constants
echo "\n2. WordPress Constants\n";
echo "   --------------------\n";

$constants = [
    'SUPABASE_URL',
    'SUPABASE_ANON_KEY',
    'SUPABASE_SERVICE_ROLE_KEY',
    'MGRNZ_WEBHOOK_URL',
    'MGRNZ_WEBHOOK_SECRET',
    'MGRNZ_ALLOWED_ORIGINS',
];

foreach ($constants as $const) {
    if (defined($const)) {
        $value = constant($const);
        // Mask sensitive values
        if (strpos($const, 'KEY') !== false || strpos($const, 'SECRET') !== false) {
            $display = substr($value, 0, 20) . '...';
        } else {
            $display = $value;
        }
        echo "   ✓ $const: $display\n";
    } else {
        echo "   ✗ $const: (not defined)\n";
    }
}

// Test 3: Supabase Connectivity
echo "\n3. Supabase Connectivity\n";
echo "   ----------------------\n";

if (defined('SUPABASE_URL')) {
    $supabase_url = constant('SUPABASE_URL');
    echo "   Testing connection to: $supabase_url\n";
    
    // Test basic connectivity
    $response = @file_get_contents($supabase_url . '/rest/v1/', false, stream_context_create([
        'http' => [
            'timeout' => 5,
            'ignore_errors' => true,
        ]
    ]));
    
    if ($response !== false) {
        echo "   ✓ Supabase is reachable\n";
    } else {
        echo "   ✗ Cannot reach Supabase (is it running?)\n";
        echo "   Hint: Run 'supabase start' to start local Supabase\n";
    }
} else {
    echo "   ✗ SUPABASE_URL not defined\n";
}

// Test 4: Webhook Endpoint
echo "\n4. Webhook Endpoint\n";
echo "   -----------------\n";

if (defined('MGRNZ_WEBHOOK_URL')) {
    $webhook_url = constant('MGRNZ_WEBHOOK_URL');
    echo "   Webhook URL: $webhook_url\n";
    
    // Test webhook endpoint
    $test_payload = json_encode([
        'event' => 'test',
        'message' => 'Configuration test from WordPress'
    ]);
    
    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => [
                'Content-Type: application/json',
                'X-Webhook-Secret: ' . (defined('MGRNZ_WEBHOOK_SECRET') ? constant('MGRNZ_WEBHOOK_SECRET') : '')
            ],
            'content' => $test_payload,
            'timeout' => 5,
            'ignore_errors' => true,
        ]
    ]);
    
    $response = @file_get_contents($webhook_url, false, $context);
    
    if ($response !== false) {
        echo "   ✓ Webhook endpoint is reachable\n";
        echo "   Response: " . substr($response, 0, 100) . "\n";
    } else {
        echo "   ✗ Cannot reach webhook endpoint\n";
        echo "   Hint: Run 'supabase functions serve' to start edge functions\n";
    }
} else {
    echo "   ✗ MGRNZ_WEBHOOK_URL not defined\n";
}

// Test 5: Must-Use Plugin
echo "\n5. Must-Use Plugin (mgrnz-core.php)\n";
echo "   ----------------------------------\n";

$mu_plugin_path = WP_CONTENT_DIR . '/mu-plugins/mgrnz-core.php';
if (file_exists($mu_plugin_path)) {
    echo "   ✓ mgrnz-core.php found\n";
    
    // Check if functions are defined
    if (function_exists('mgrnz__webhook_url')) {
        echo "   ✓ Webhook functions are loaded\n";
        echo "   Webhook URL from plugin: " . mgrnz__webhook_url() . "\n";
    } else {
        echo "   ✗ Webhook functions not loaded\n";
    }
} else {
    echo "   ✗ mgrnz-core.php not found at: $mu_plugin_path\n";
}

// Test 6: WordPress Environment
echo "\n6. WordPress Environment\n";
echo "   ----------------------\n";

echo "   WordPress Version: " . (defined('WP_VERSION') ? WP_VERSION : 'Unknown') . "\n";
echo "   PHP Version: " . PHP_VERSION . "\n";
echo "   Debug Mode: " . (defined('WP_DEBUG') && WP_DEBUG ? 'Enabled' : 'Disabled') . "\n";
echo "   Debug Log: " . (defined('WP_DEBUG_LOG') && WP_DEBUG_LOG ? 'Enabled' : 'Disabled') . "\n";

// Summary
echo "\n===========================================\n";
echo "Configuration Summary\n";
echo "===========================================\n\n";

$all_good = true;

// Check critical items
$critical_checks = [
    'SUPABASE_URL defined' => defined('SUPABASE_URL'),
    'SUPABASE_ANON_KEY defined' => defined('SUPABASE_ANON_KEY'),
    'MGRNZ_WEBHOOK_URL defined' => defined('MGRNZ_WEBHOOK_URL'),
    'MGRNZ_WEBHOOK_SECRET defined' => defined('MGRNZ_WEBHOOK_SECRET'),
    'mgrnz-core.php exists' => file_exists($mu_plugin_path),
];

foreach ($critical_checks as $check => $passed) {
    $status = $passed ? '✓' : '✗';
    echo "$status $check\n";
    if (!$passed) {
        $all_good = false;
    }
}

echo "\n";

if ($all_good) {
    echo "✓ All critical checks passed!\n";
    echo "Your WordPress is properly configured for local Supabase testing.\n\n";
    echo "Next steps:\n";
    echo "1. Ensure Supabase is running: supabase start\n";
    echo "2. Start edge functions: supabase functions serve\n";
    echo "3. Test by publishing a post in WordPress\n";
    echo "4. Monitor logs: supabase functions logs --follow\n";
} else {
    echo "✗ Some checks failed!\n";
    echo "Please review the errors above and fix the configuration.\n\n";
    echo "Troubleshooting:\n";
    echo "1. Check .env.local has all required variables\n";
    echo "2. Restart WordPress to reload environment variables\n";
    echo "3. Verify wp-config-local.php is being loaded\n";
    echo "4. See SUPABASE_TESTING_GUIDE.md for detailed help\n";
}

echo "\n===========================================\n";
echo "For more information, see:\n";
echo "- supabase/LOCAL_DEVELOPMENT.md\n";
echo "- SUPABASE_TESTING_GUIDE.md\n";
echo "===========================================\n";
