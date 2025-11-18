# Environment Configuration Quick Start

This is a quick reference guide for the MGRNZ environment configuration system. For detailed documentation, see [ENVIRONMENT_SETUP.md](ENVIRONMENT_SETUP.md).

## What Was Implemented

✅ **Environment-based configuration system** that automatically detects local vs production
✅ **Automatic .env file loading** with support for `.env.local` and `.env.production`
✅ **vlucas/phpdotenv integration** with fallback parser (works without Composer)
✅ **Modified wp-config.php** to use environment variables
✅ **Type conversion** for boolean values (string "true" → boolean true)
✅ **Secure credential management** (all .env files are gitignored)

## Files Created

| File | Purpose |
|------|---------|
| `wp-config-loader.php` | Environment detection and .env loading logic |
| `.env.local` | Local development environment variables |
| `.env.production` | Production environment variables template |
| `composer.json` | PHP dependencies (vlucas/phpdotenv) |
| `test-environment.php` | Test script to verify configuration |
| `setup-environment.ps1` | PowerShell setup script |
| `ENVIRONMENT_SETUP.md` | Complete documentation |

## Quick Setup (3 Steps)

### 1. Install Dependencies (Optional but Recommended)

```bash
composer install
```

If you don't have Composer, the system will use a fallback parser.

### 2. Configure Your Local Environment

Edit `.env.local` with your local database credentials:

```env
DB_NAME=mgrnz_local
DB_USER=root
DB_PASSWORD=root
DB_HOST=localhost
WP_HOME=http://mgrnz.local
WP_SITEURL=http://mgrnz.local
```

### 3. Test Your Setup

```bash
php test-environment.php
```

Expected output:
```
Environment: local
DB_NAME: mgrnz_local
WP_HOME: http://mgrnz.local
System status: ✓ Working
```

## How It Works

### Environment Detection

The system automatically detects your environment:

1. **Local indicators:**
   - `.env.local` file exists
   - Hostname contains: localhost, .local, .test, .dev
   - Server name contains: mgrnz.local

2. **Production:**
   - Everything else defaults to production for safety

### Configuration Loading

```
┌─────────────────────────────────────┐
│  wp-config.php loads                │
│  wp-config-loader.php               │
└──────────────┬──────────────────────┘
               │
               ├─ Detect environment
               │  (local or production)
               │
               ├─ Load appropriate .env file
               │  (.env.local or .env.production)
               │
               └─ Set environment variables
                  (available via env() function)
```

### Using Environment Variables

In your WordPress code:

```php
// Get environment variable with fallback
$apiKey = env('MAILERLITE_API_KEY', 'default-key');

// Boolean values are automatically converted
$debug = env('WP_DEBUG', false); // Returns actual boolean

// Get URLs
$webhookUrl = env('MGRNZ_WEBHOOK_URL');
```

## Common Environment Variables

### WordPress Core
- `WP_HOME` - Site home URL
- `WP_SITEURL` - WordPress installation URL
- `WP_DEBUG` - Enable debug mode (true/false)

### Database
- `DB_NAME` - Database name
- `DB_USER` - Database username
- `DB_PASSWORD` - Database password
- `DB_HOST` - Database host

### Supabase
- `SUPABASE_URL` - Supabase project URL
- `MGRNZ_WEBHOOK_URL` - Webhook endpoint
- `MGRNZ_WEBHOOK_SECRET` - Webhook secret

### Third-Party APIs
- `MAILERLITE_API_KEY` - MailerLite API key
- `GITHUB_TOKEN` - GitHub token
- `WP_APP_PASSWORD` - WordPress app password

## Environment-Specific Behavior

| Setting | Local | Production |
|---------|-------|------------|
| Debug Mode | ✅ Enabled | ❌ Disabled |
| Caching | ❌ Disabled | ✅ Enabled |
| File Editing | ✅ Allowed | ❌ Disabled |
| Auto Updates | ❌ Disabled | ✅ Security Only |
| SSL Admin | ❌ Disabled | ✅ Enabled |

## Troubleshooting

### Environment not detected correctly

Check the debug log:
```bash
tail -f wp-content/debug.log
```

Look for:
```
MGRNZ Environment: local | Config file: .env.local | Loaded: Yes
```

### Variables not loading

1. Verify file exists: `ls -la .env.local`
2. Check file syntax: `cat .env.local`
3. Ensure format is: `KEY=VALUE` (no spaces around =)
4. Run test: `php test-environment.php`

### Composer not available

The system works without Composer using a fallback parser. However, for best results:

```bash
# Install Composer
# Windows: Download from https://getcomposer.org/download/

# Then install dependencies
composer install
```

## Production Deployment

When deploying to production:

1. **Create `.env.production`** with actual credentials
2. **Upload via SFTP** (never commit to git)
3. **Set permissions:** `chmod 600 .env.production`
4. **Verify:** Check that production site loads correctly

## Security Notes

⚠️ **Never commit these files:**
- `.env.local` (gitignored)
- `.env.production` with real credentials (gitignored)
- Any file containing actual passwords or API keys

✅ **Safe to commit:**
- `.env.production` as a template with placeholders
- `wp-config-loader.php`
- `composer.json`

## Requirements Met

This implementation satisfies all requirements from the spec:

- ✅ **5.1** - Local environment loads from `.env.local`
- ✅ **5.2** - Production environment loads from `.env.production`
- ✅ **5.3** - Automatic environment detection and configuration
- ✅ **5.4** - Local environment uses local Supabase URLs
- ✅ **5.5** - Production environment uses production Supabase URLs

## Next Steps

After setting up the environment configuration:

1. **Test locally** - Verify WordPress loads with your local database
2. **Pull production data** - Use database sync scripts (Task 3)
3. **Test Supabase integration** - Verify webhooks work locally (Task 7)
4. **Deploy changes** - Use deployment scripts when ready (Task 5)

## Support

- 📖 Full documentation: [ENVIRONMENT_SETUP.md](ENVIRONMENT_SETUP.md)
- 🎯 Design document: `.kiro/specs/local-dev-deployment-workflow/design.md`
- 📋 Requirements: `.kiro/specs/local-dev-deployment-workflow/requirements.md`
- ✅ Test script: `php test-environment.php`
- 🔧 Setup script: `.\setup-environment.ps1`
