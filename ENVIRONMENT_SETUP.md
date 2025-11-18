# Environment Configuration Setup Guide

This guide explains how to set up and use the environment configuration management system for the MGRNZ WordPress site.

## Overview

The MGRNZ WordPress site uses an environment-based configuration system that automatically detects whether you're running in a local development environment or production, and loads the appropriate settings.

## Architecture

```
Root Directory
├── .env.local              # Local development environment variables (gitignored)
├── .env.production         # Production environment variables template
├── wp-config-loader.php    # Environment detection and loading logic
├── wp-config-local.php     # Local WordPress configuration (gitignored)
├── composer.json           # PHP dependencies (includes vlucas/phpdotenv)
└── wp/
    └── wp-config.php       # Main WordPress config (uses environment loader)
```

## Features

- **Automatic Environment Detection**: Detects local vs production based on hostname, file presence, and environment variables
- **Flexible Loading**: Works with or without Composer (vlucas/phpdotenv)
- **Type Conversion**: Automatically converts string "true"/"false" to boolean values
- **Secure**: Environment files are excluded from version control
- **Fallback Values**: All configuration has sensible defaults

## Installation

### Step 1: Install Composer (if not already installed)

Download and install Composer from [getcomposer.org](https://getcomposer.org/download/)

For Windows, download the installer: [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)

### Step 2: Install PHP Dependencies

```bash
# From the project root directory
composer install
```

This will install `vlucas/phpdotenv` for robust environment variable loading.

**Note**: If Composer is not available, the system will fall back to manual .env file parsing.

### Step 3: Configure Local Environment

1. Copy the `.env.local` file (already created) and update values for your local setup:

```bash
# Database settings for your local WordPress installation
DB_NAME=mgrnz_local
DB_USER=root
DB_PASSWORD=root
DB_HOST=localhost

# Local URLs
WP_HOME=http://mgrnz.local
WP_SITEURL=http://mgrnz.local

# Supabase (use local or test project)
SUPABASE_URL=http://localhost:54321
MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync
```

2. The `wp-config-local.php` file is already configured and will automatically load `.env.local`

### Step 4: Configure Production Environment

1. On your production server, create `.env.production` with actual production credentials:

```bash
# Copy the template
cp .env.production .env.production.actual

# Edit with production values
nano .env.production.actual
```

2. Update the values with your actual production credentials:
   - Database credentials from Spaceship hosting
   - Production Supabase URLs and keys
   - Production API keys (MailerLite, GitHub, etc.)
   - WordPress security keys (generate at https://api.wordpress.org/secret-key/1.1/salt/)

3. **IMPORTANT**: Keep `.env.production` secure and never commit it to version control

## Environment Detection Logic

The system detects your environment using the following priority:

1. **WP_ENVIRONMENT_TYPE constant** (if already defined)
2. **WP_ENVIRONMENT environment variable**
3. **Presence of .env.local file** (indicates local environment)
4. **Server hostname detection** (localhost, .local, .test, .dev domains)
5. **Default to production** (for safety)

### Manual Override

You can manually set the environment by defining it before loading wp-config.php:

```php
// Force local environment
putenv('WP_ENVIRONMENT=local');
```

Or set it as a server environment variable.

## Usage

### Accessing Environment Variables

Use the `env()` helper function throughout your WordPress code:

```php
// Get environment variable with fallback
$apiKey = env('MAILERLITE_API_KEY', 'default-key');

// Get boolean values (automatically converted)
$debug = env('WP_DEBUG', false); // Returns actual boolean

// Get URLs
$webhookUrl = env('MGRNZ_WEBHOOK_URL');
```

### Available Environment Variables

#### WordPress Core
- `WP_HOME` - Site home URL
- `WP_SITEURL` - WordPress installation URL
- `WP_DEBUG` - Enable debug mode
- `WP_DEBUG_LOG` - Log errors to file
- `WP_DEBUG_DISPLAY` - Display errors on screen

#### Database
- `DB_NAME` - Database name
- `DB_USER` - Database username
- `DB_PASSWORD` - Database password
- `DB_HOST` - Database host
- `DB_CHARSET` - Database character set
- `DB_COLLATE` - Database collation

#### Supabase Integration
- `SUPABASE_URL` - Supabase project URL
- `SUPABASE_ANON_KEY` - Supabase anonymous key
- `MGRNZ_WEBHOOK_URL` - Webhook endpoint URL
- `MGRNZ_WEBHOOK_SECRET` - Webhook authentication secret

#### Third-Party APIs
- `MAILERLITE_API_KEY` - MailerLite API key
- `ML_INTAKE_GROUP_ID` - MailerLite group ID
- `GITHUB_TOKEN` - GitHub personal access token
- `GITHUB_OWNER` - GitHub repository owner
- `GITHUB_REPO` - GitHub repository name

#### WordPress REST API
- `WP_API_BASE` - WordPress REST API base URL
- `WP_USER` - WordPress API username
- `WP_APP_PASSWORD` - WordPress application password

## Environment-Specific Behavior

### Local Environment
- Debug mode enabled by default
- Caching disabled
- Automatic updates disabled
- File editing allowed in admin
- Uses local/test Supabase project
- Test API credentials

### Production Environment
- Debug mode disabled
- Caching enabled
- Security-only automatic updates
- File editing disabled in admin
- Uses production Supabase project
- Production API credentials
- SSL forced for admin

## Troubleshooting

### Environment Not Detected Correctly

Check the WordPress debug log for environment detection messages:

```php
// In wp-content/debug.log
MGRNZ Environment: local | Config file: .env.local | Loaded: Yes
```

### Environment Variables Not Loading

1. **Check file exists**: Verify `.env.local` or `.env.production` exists
2. **Check file permissions**: Ensure the file is readable by the web server
3. **Check syntax**: Ensure KEY=VALUE format with no spaces around `=`
4. **Check Composer**: Run `composer install` to ensure phpdotenv is installed
5. **Check fallback**: The system should work even without Composer

### Composer Not Available

The system includes a fallback parser that works without Composer. However, for best results:

1. Install Composer globally
2. Run `composer install` in the project root
3. Verify `vendor/autoload.php` exists

### Wrong Environment Loaded

Force the environment by setting an environment variable:

```bash
# In your server configuration or .htaccess
SetEnv WP_ENVIRONMENT production
```

Or in PHP:
```php
putenv('WP_ENVIRONMENT=production');
```

## Security Best Practices

1. **Never commit environment files with credentials**
   - `.env.local` is gitignored
   - `.env.production` should be gitignored
   - Only commit `.env.production` as a template with placeholder values

2. **Use strong secrets**
   - Generate unique WordPress security keys
   - Use strong webhook secrets
   - Rotate credentials regularly

3. **Restrict file permissions**
   ```bash
   chmod 600 .env.local
   chmod 600 .env.production
   ```

4. **Use environment variables on production**
   - Consider using server environment variables instead of .env files
   - Many hosting providers support environment variables in their control panel

5. **Keep backups secure**
   - Environment files may contain sensitive data
   - Ensure backups are encrypted and access-controlled

## Testing Your Setup

### Verify Environment Detection

Create a test file `test-env.php` in your WordPress root:

```php
<?php
require_once 'wp-config-loader.php';

echo "Environment: " . $GLOBALS['mgrnz_environment'] . "\n";
echo "DB Name: " . env('DB_NAME') . "\n";
echo "WP Home: " . env('WP_HOME') . "\n";
echo "Debug Mode: " . (env('WP_DEBUG') ? 'Enabled' : 'Disabled') . "\n";
```

Run it:
```bash
php test-env.php
```

Expected output (local):
```
Environment: local
DB Name: mgrnz_local
WP Home: http://mgrnz.local
Debug Mode: Enabled
```

### Verify WordPress Integration

1. Access your WordPress admin panel
2. Go to Tools > Site Health
3. Check the "Environment Type" field
4. Should show "Local" or "Production" based on your setup

## Migration Guide

### Moving from Hardcoded Config to Environment Config

If you have existing hardcoded values in `wp-config.php`:

1. **Extract values to .env file**:
   ```bash
   # Old wp-config.php
   define('DB_NAME', 'my_database');
   
   # New .env.local
   DB_NAME=my_database
   ```

2. **Update wp-config.php to use env()**:
   ```php
   define('DB_NAME', env('DB_NAME', 'fallback_value'));
   ```

3. **Test thoroughly** in local environment before deploying

### Deploying to Production

1. **Prepare production .env file** with actual credentials
2. **Upload via SFTP** (not through git)
3. **Set proper permissions**: `chmod 600 .env.production`
4. **Test** by accessing the site
5. **Verify** environment detection in debug logs

## Support

For issues or questions:
1. Check the troubleshooting section above
2. Review WordPress debug logs (`wp-content/debug.log`)
3. Verify file permissions and syntax
4. Consult the design document: `.kiro/specs/local-dev-deployment-workflow/design.md`

## Related Documentation

- [Deployment Workflow](DEPLOYMENT.md)
- [Local Development Setup](README.md)
- [Supabase Integration](System-Docs/02_Specifications/supabase-integration.md)
