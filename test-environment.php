<?php
/**
 * Environment Configuration Test Script
 * 
 * This script tests the environment configuration system to ensure
 * it's working correctly.
 * 
 * Usage: php test-environment.php
 */

// Load the environment configuration system
require_once __DIR__ . '/wp-config-loader.php';

echo "=== MGRNZ Environment Configuration Test ===\n\n";

// Test 1: Environment Detection
echo "[1] Environment Detection\n";
echo "  Detected Environment: " . $GLOBALS['mgrnz_environment'] . "\n";
echo "  Expected: 'local' (if .env.local exists) or 'production'\n\n";

// Test 2: Environment Variable Loading
echo "[2] Environment Variable Loading\n";
$testVars = [
    'DB_NAME' => 'Database name',
    'DB_USER' => 'Database user',
    'DB_HOST' => 'Database host',
    'WP_HOME' => 'WordPress home URL',
    'WP_SITEURL' => 'WordPress site URL',
    'WP_DEBUG' => 'Debug mode',
    'SUPABASE_URL' => 'Supabase URL',
    'MGRNZ_WEBHOOK_URL' => 'Webhook URL',
];

foreach ($testVars as $key => $description) {
    $value = env($key, 'NOT SET');
    $status = ($value !== 'NOT SET') ? '✓' : '✗';
    echo "  $status $key: $value\n";
}
echo "\n";

// Test 3: Type Conversion
echo "[3] Type Conversion Test\n";
$debugValue = env('WP_DEBUG', false);
$debugType = gettype($debugValue);
echo "  WP_DEBUG value: " . ($debugValue ? 'true' : 'false') . "\n";
echo "  WP_DEBUG type: $debugType\n";
echo "  Expected type: boolean\n";
echo "  Status: " . ($debugType === 'boolean' ? '✓ PASS' : '✗ FAIL') . "\n\n";

// Test 4: Fallback Values
echo "[4] Fallback Value Test\n";
$nonExistent = env('NON_EXISTENT_VAR', 'fallback_value');
echo "  Non-existent variable: $nonExistent\n";
echo "  Expected: 'fallback_value'\n";
echo "  Status: " . ($nonExistent === 'fallback_value' ? '✓ PASS' : '✗ FAIL') . "\n\n";

// Test 5: File Detection
echo "[5] Configuration File Detection\n";
$envLocal = file_exists(__DIR__ . '/.env.local') ? '✓ Found' : '✗ Not found';
$envProd = file_exists(__DIR__ . '/.env.production') ? '✓ Found' : '✗ Not found';
$wpConfigLocal = file_exists(__DIR__ . '/wp-config-local.php') ? '✓ Found' : '✗ Not found';
$wpConfig = file_exists(__DIR__ . '/wp/wp-config.php') ? '✓ Found' : '✗ Not found';

echo "  .env.local: $envLocal\n";
echo "  .env.production: $envProd\n";
echo "  wp-config-local.php: $wpConfigLocal\n";
echo "  wp/wp-config.php: $wpConfig\n\n";

// Test 6: Composer/Dotenv Detection
echo "[6] Dependency Detection\n";
$composerAutoload = file_exists(__DIR__ . '/vendor/autoload.php') ? '✓ Found' : '✗ Not found';
$dotenvClass = class_exists('Dotenv\Dotenv') ? '✓ Available' : '✗ Not available';

echo "  Composer autoload: $composerAutoload\n";
echo "  Dotenv class: $dotenvClass\n";
if (!class_exists('Dotenv\Dotenv')) {
    echo "  Note: Using fallback .env parser (this is OK)\n";
}
echo "\n";

// Summary
echo "=== Test Summary ===\n";
echo "Environment: " . $GLOBALS['mgrnz_environment'] . "\n";
echo "Configuration loaded: " . (env('DB_NAME', null) !== null ? 'Yes' : 'No') . "\n";
echo "System status: " . (env('DB_NAME', null) !== null ? '✓ Working' : '✗ Not working') . "\n";
echo "\nFor detailed setup instructions, see ENVIRONMENT_SETUP.md\n";
