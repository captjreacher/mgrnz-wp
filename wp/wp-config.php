<?php
/**
 * The base configuration for WordPress
 *
 * This file now uses environment-specific configuration loading.
 * It automatically detects whether you're running in local or production
 * and loads the appropriate settings from .env.local or .env.production
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// Load Composer autoloader if available (for vlucas/phpdotenv)
if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
}

// Load environment configuration system
require_once dirname(__DIR__) . '/wp-config-loader.php';

// Helper function for environment variables (if not already defined by loader)
if (!function_exists('env')) {
    function env($key, $default = null) {
        $value = getenv($key);
        if ($value === false) {
            return $default;
        }
        // Convert string booleans to actual booleans
        $lower = strtolower($value);
        if ($lower === 'true') return true;
        if ($lower === 'false') return false;
        if ($lower === 'null') return null;
        return $value;
    }
}

// ============================================
// Database Configuration
// ============================================
define('DB_NAME', env('DB_NAME', 'MGRNZ'));
define('DB_USER', env('DB_USER', 'Admin'));
define('DB_PASSWORD', env('DB_PASSWORD', 'Sixtynine1969!'));
define('DB_HOST', env('DB_HOST', 'localhost'));
define('DB_CHARSET', env('DB_CHARSET', 'utf8mb4'));
define('DB_COLLATE', env('DB_COLLATE', ''));

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         env('AUTH_KEY', 'wMa,y[bUG+E4_:/-~x)=8G-L-de<3>Kql&@e>RI>1@1v)Vt7;E33mH/Th9f?[6zs'));
define('SECURE_AUTH_KEY',  env('SECURE_AUTH_KEY', 'u2ywE{GVi8YIn9-4ij)Pfv@ .)#&@~[50]XB:UB[jO:?|u+TjE)pkSPx1|m+Jq(O'));
define('LOGGED_IN_KEY',    env('LOGGED_IN_KEY', 'F;pyBGfw7&xPQy8Y|O+~&jJV+6Fh{]D_% |wE, z>}>z(4bKYs|Rc-VzJ~Q2zU!|'));
define('NONCE_KEY',        env('NONCE_KEY', 'AzZ3z/):e>d}|E9om{/pJeT@bBxmucYVJh(TxLqa(;3g-q-!K{Y<)MpGEkJ5TcT@'));
define('AUTH_SALT',        env('AUTH_SALT', '9:FW:]1/cD,y<rr*73fd*i:k`ah}Kc=@msnh;(aPDAG[8CqX/a~$UwUDusr6xiTw'));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT', '/W817Alh5#KDjD2XBU(f6r_m+..r6HVy#S#OE}0)kSpCq-T3nS,P2MC9(?B~aq6w'));
define('LOGGED_IN_SALT',   env('LOGGED_IN_SALT', 'H~/StWvUDksP%x0VO+Mf|K/]NVFac-I=?y&=lFze+ExY[Kb[&iZ!.&V^a+%Kzu@p'));
define('NONCE_SALT',       env('NONCE_SALT', 't+f3|e|+BK,Q^bIdS_#}8W/8m8u:ZNqedc]X)%noKM_]LU*2mqLNiD7;}tW?kRT#'));
/**#@-*/

// ============================================
// WordPress Database Table Prefix
// ============================================
$table_prefix = env('TABLE_PREFIX', 'wp_');

// ============================================
// WordPress URLs
// ============================================
define('WP_HOME', env('WP_HOME', 'https://mgrnz.com'));
define('WP_SITEURL', env('WP_SITEURL', 'https://mgrnz.com'));

// ============================================
// Debug Settings
// ============================================
define('WP_DEBUG', env('WP_DEBUG', false));
define('WP_DEBUG_LOG', env('WP_DEBUG_LOG', false));
define('WP_DEBUG_DISPLAY', env('WP_DEBUG_DISPLAY', false));
define('SCRIPT_DEBUG', env('SCRIPT_DEBUG', false));

// ============================================
// Environment Type
// ============================================
// This is set by the environment loader, but we define it here for clarity
if (!defined('WP_ENVIRONMENT_TYPE')) {
    define('WP_ENVIRONMENT_TYPE', env('WP_ENVIRONMENT', 'production'));
}

// ============================================
// MGRNZ / Maximised AI Integration Settings
// ============================================
// Supabase Configuration
define('SUPABASE_URL', env('SUPABASE_URL', 'https://jqfodlzcsgfocyuawzyx.supabase.co'));
define('SUPABASE_ANON_KEY', env('SUPABASE_ANON_KEY', ''));

// Webhook Configuration
putenv('MGRNZ_WEBHOOK_URL=' . env('MGRNZ_WEBHOOK_URL', 'https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1/wp-sync'));
putenv('MGRNZ_WEBHOOK_SECRET=' . env('MGRNZ_WEBHOOK_SECRET', 'aD7x@pK1tV9z#qM4nY6b!rE2cW8j^sH5'));

// CORS Configuration
putenv('MGRNZ_ALLOWED_ORIGIN=' . env('MGRNZ_ALLOWED_ORIGIN', 'https://maximisedai.com'));

// WordPress REST API Credentials (used by Supabase edge functions)
putenv('WP_API_BASE=' . env('WP_API_BASE', 'https://mgrnz.com/wp'));
putenv('WP_USER=' . env('WP_USER', 'agent@mgrnz.com'));
putenv('WP_APP_PASSWORD=' . env('WP_APP_PASSWORD', 'hu86dnk@i*5snk!fgmk952vmmlj'));

// ============================================
// Third-Party Integration Settings
// ============================================
define('MAILERLITE_API_KEY', env('MAILERLITE_API_KEY', ''));
define('ML_INTAKE_GROUP_ID', env('ML_INTAKE_GROUP_ID', '169187608401807007'));
define('GITHUB_TOKEN', env('GITHUB_TOKEN', ''));
define('GITHUB_OWNER', env('GITHUB_OWNER', ''));
define('GITHUB_REPO', env('GITHUB_REPO', ''));

// ============================================
// WordPress Settings
// ============================================
// Caching
define('WP_CACHE', env('WP_CACHE', false));

// Automatic Updates
define('AUTOMATIC_UPDATER_DISABLED', env('AUTOMATIC_UPDATER_DISABLED', false));

// Memory Limits
define('WP_MEMORY_LIMIT', env('WP_MEMORY_LIMIT', '256M'));
define('WP_MAX_MEMORY_LIMIT', env('WP_MAX_MEMORY_LIMIT', '512M'));

// Post Revisions
define('WP_POST_REVISIONS', env('WP_POST_REVISIONS', 5));

// Autosave Interval (in seconds)
define('AUTOSAVE_INTERVAL', env('AUTOSAVE_INTERVAL', 160));

// ============================================
// SSL Settings
// ============================================
define('FORCE_SSL_ADMIN', env('FORCE_SSL_ADMIN', false));

// ============================================
// File Editing
// ============================================
// Disable file editing in production for security
if (WP_ENVIRONMENT_TYPE === 'production') {
    define('DISALLOW_FILE_EDIT', env('DISALLOW_FILE_EDIT', true));
} else {
    define('DISALLOW_FILE_EDIT', env('DISALLOW_FILE_EDIT', false));
}

// ============================================
// File Permissions
// ============================================
define('FS_CHMOD_DIR', (0755 & ~umask()));
define('FS_CHMOD_FILE', (0644 & ~umask()));

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
