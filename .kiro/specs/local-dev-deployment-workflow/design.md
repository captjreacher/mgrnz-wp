# Design Document: Local Development & Deployment Workflow

## Overview

This design establishes a comprehensive local development and deployment workflow for the MGRNZ WordPress site hosted on Spaceship.com. The solution enables developers to work safely in a local environment with the ability to synchronize content and deploy changes to production without disrupting the live site.

The architecture leverages existing tools (Local by Flywheel or similar), WP-CLI, SFTP/FTP for file transfers, and environment-specific configurations to maintain separation between local and production environments while ensuring smooth deployment workflows.

## Architecture

### High-Level Architecture

```
┌─────────────────────────────────────────────────────────────┐
│                    Developer Workstation                     │
│                                                              │
│  ┌────────────────┐         ┌──────────────────┐           │
│  │ Local WordPress│◄────────┤  WP-CLI Tools    │           │
│  │   + Database   │         └──────────────────┘           │
│  └────────┬───────┘                                         │
│           │                                                  │
│           │         ┌──────────────────┐                    │
│           └────────►│ Deployment       │                    │
│                     │ Scripts          │                    │
│                     └────────┬─────────┘                    │
│                              │                               │
└──────────────────────────────┼───────────────────────────────┘
                               │
                               │ SFTP/FTP
                               │
                ┌──────────────▼──────────────┐
                │                             │
                │   Spaceship Hosting         │
                │   (mgrnz.com)               │
                │                             │
                │  ┌──────────────────────┐   │
                │  │ WordPress Production │   │
                │  │    + MySQL DB        │   │
                │  └──────────┬───────────┘   │
                │             │                │
                └─────────────┼────────────────┘
                              │
                              │ Webhooks
                              │
                ┌─────────────▼────────────────┐
                │                              │
                │   Supabase Edge Functions    │
                │   - ai-intake                │
                │   - wp-sync                  │
                │   - ml-to-hugo               │
                │   - mailerlite-webhook       │
                │                              │
                └──────────────────────────────┘
```

### Environment Separation Strategy

**Local Environment:**
- WordPress running on localhost (via Local by Flywheel, XAMPP, or Docker)
- Local MySQL database
- Local domain: `mgrnz.local` or `localhost:8000`
- Supabase edge functions: optional local testing via Supabase CLI + Docker
- Environment file: `.env.local`

**Production Environment:**
- WordPress hosted on Spaceship.com
- Production MySQL database
- Domain: `mgrnz.com`
- Supabase edge functions: production endpoints
- Environment configuration: server environment variables or `.env.production`

## Components and Interfaces

### 1. Local WordPress Setup

**Component:** Local WordPress Installation

**Purpose:** Provide a complete WordPress environment for development and testing

**Implementation:**
- Use Local by Flywheel (recommended for Windows) or Docker-based solution
- Install WordPress with same version as production (WP ≥6.4)
- PHP ≥8.2 to match production requirements
- MySQL 8.0+ or MariaDB 10.6+

**Configuration Files:**
- `wp-config-local.php` - Local database credentials and settings
- `.env.local` - Environment-specific variables
- `.gitignore` - Exclude local config from version control

**Key Settings:**
```php
// wp-config-local.php
define('DB_NAME', 'mgrnz_local');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('WP_HOME', 'http://mgrnz.local');
define('WP_SITEURL', 'http://mgrnz.local');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_ENVIRONMENT_TYPE', 'local');
```

### 2. Database Synchronization

**Component:** Database Pull/Push Scripts

**Purpose:** Synchronize database content between local and production

**Tools:**
- WP-CLI for database export/import
- SSH/SFTP for file transfer
- Search-Replace-DB script or WP-CLI search-replace for URL updates

**Pull Workflow (Production → Local):**
```bash
# 1. Export production database via SSH
ssh spaceship-user@mgrnz.com "wp db export - --path=/path/to/wordpress" > prod-backup.sql

# 2. Import to local
wp db import prod-backup.sql

# 3. Search-replace URLs
wp search-replace 'https://mgrnz.com' 'http://mgrnz.local' --all-tables

# 4. Update admin credentials for local access
wp user update admin --user_pass=localpassword
```

**Push Workflow (Local → Production):**
```bash
# 1. Export local database
wp db export local-export.sql

# 2. Search-replace URLs for production
wp search-replace 'http://mgrnz.local' 'https://mgrnz.com' local-export.sql --export=prod-ready.sql

# 3. Backup production database first
ssh spaceship-user@mgrnz.com "wp db export /backups/pre-deploy-$(date +%Y%m%d-%H%M%S).sql --path=/path/to/wordpress"

# 4. Upload and import (with caution)
scp prod-ready.sql spaceship-user@mgrnz.com:/tmp/
ssh spaceship-user@mgrnz.com "wp db import /tmp/prod-ready.sql --path=/path/to/wordpress"
```

**Safety Considerations:**
- Always create timestamped backups before database push
- Database push should be rare; typically only deploy code/files
- Consider using WP Migrate DB Pro for safer database migrations

### 3. File Synchronization

**Component:** SFTP/FTP Sync Scripts

**Purpose:** Transfer WordPress files between local and production

**Tools:**
- WinSCP (Windows GUI)
- lftp (command-line)
- rsync over SSH (if available)
- Custom PowerShell scripts

**Directories to Sync:**
- `/wp-content/themes/` - Custom themes
- `/wp-content/plugins/` - Custom plugins
- `/wp-content/mu-plugins/` - Must-use plugins (mgrnz-core.php)
- `/wp-content/uploads/` - Media files (optional, can be large)

**Directories to Exclude:**
- `/wp-content/cache/`
- `/wp-content/upgrade/`
- `/wp-config.php` (environment-specific)
- `/.env*` files

**Pull Workflow (Production → Local):**
```powershell
# Using WinSCP scripting
winscp.com /script=pull-from-production.txt

# pull-from-production.txt content:
open sftp://username:password@mgrnz.com
lcd "C:\Local Sites\mgrnz\app\public\wp-content"
cd /public_html/wp-content
get -filemask="*.php|*.css|*.js" themes/
get -filemask="*.php" plugins/
get mu-plugins/
close
exit
```

**Push Workflow (Local → Production):**
```powershell
# Using WinSCP scripting with selective upload
winscp.com /script=push-to-production.txt

# push-to-production.txt content:
open sftp://username:password@mgrnz.com
lcd "C:\Local Sites\mgrnz\app\public\wp-content"
cd /public_html/wp-content
# Backup first
call mkdir -p /backups/wp-content-$(date +%Y%m%d-%H%M%S)
# Upload changed files
put -filemask="*.php|*.css|*.js" themes/
put -filemask="*.php" plugins/
put mu-plugins/
close
exit
```

### 4. Environment Configuration Management

**Component:** Environment Variable System

**Purpose:** Manage environment-specific settings without hardcoding

**Implementation:**

**Local Environment (.env.local):**
```env
# WordPress
WP_ENVIRONMENT=local
WP_HOME=http://mgrnz.local
WP_SITEURL=http://mgrnz.local
WP_DEBUG=true
WP_DEBUG_LOG=true

# Database
DB_NAME=mgrnz_local
DB_USER=root
DB_PASSWORD=root
DB_HOST=localhost

# Supabase (local or test project)
SUPABASE_URL=http://localhost:54321
SUPABASE_ANON_KEY=test-key-local
MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync
MGRNZ_WEBHOOK_SECRET=local-test-secret

# Third-party (test credentials)
MAILERLITE_API_KEY=test-key
ML_INTAKE_GROUP_ID=test-group
```

**Production Environment (.env.production or server env vars):**
```env
# WordPress
WP_ENVIRONMENT=production
WP_HOME=https://mgrnz.com
WP_SITEURL=https://mgrnz.com
WP_DEBUG=false

# Database (managed by Spaceship)
DB_NAME=MGRNZ
DB_USER=Admin
DB_HOST=localhost

# Supabase (production)
SUPABASE_URL=https://jqfodlzcsgfocyuawzyx.supabase.co
MGRNZ_WEBHOOK_URL=https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1/wp-sync
MGRNZ_WEBHOOK_SECRET=aD7x@pK1tV9z#qM4nY6b!rE2cW8j^sH5

# Third-party (production credentials)
MAILERLITE_API_KEY=<production-key>
ML_INTAKE_GROUP_ID=169187608401807007
```

**wp-config.php Integration:**
```php
// Load environment-specific config
if (file_exists(__DIR__ . '/.env.local')) {
    // Local environment
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env.local');
    $dotenv->load();
} elseif (file_exists(__DIR__ . '/.env.production')) {
    // Production environment
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env.production');
    $dotenv->load();
}

// Use environment variables
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));
define('WP_DEBUG', getenv('WP_DEBUG') === 'true');
```

### 5. Deployment Scripts

**Component:** Automated Deployment System

**Purpose:** Streamline and standardize deployment process with safety checks

**Scripts:**

**deploy.ps1 (Main Deployment Script):**
```powershell
# PowerShell deployment script
param(
    [switch]$DryRun,
    [switch]$SkipBackup,
    [string]$Target = "production"
)

# Configuration
$localPath = "C:\Local Sites\mgrnz\app\public"
$remotePath = "/public_html"
$backupPath = "/backups"

# Load credentials from secure storage
$credentials = Get-Content ".deploy-credentials.json" | ConvertFrom-Json

Write-Host "=== MGRNZ Deployment Script ===" -ForegroundColor Cyan
Write-Host "Target: $Target" -ForegroundColor Yellow

# Pre-deployment checks
Write-Host "`n[1/6] Running pre-deployment checks..." -ForegroundColor Green
# Check if production is accessible
# Verify local files are ready
# Check for uncommitted changes

# Create backup
if (-not $SkipBackup) {
    Write-Host "`n[2/6] Creating production backup..." -ForegroundColor Green
    # SSH command to backup files and database
}

# Display changes
Write-Host "`n[3/6] Files to be deployed:" -ForegroundColor Green
# List changed files

# Confirmation
if (-not $DryRun) {
    $confirm = Read-Host "`nProceed with deployment? (yes/no)"
    if ($confirm -ne "yes") {
        Write-Host "Deployment cancelled." -ForegroundColor Red
        exit
    }
}

# Deploy files
Write-Host "`n[4/6] Deploying files..." -ForegroundColor Green
# SFTP upload

# Run post-deployment tasks
Write-Host "`n[5/6] Running post-deployment tasks..." -ForegroundColor Green
# Clear cache, update permalinks, etc.

# Verify deployment
Write-Host "`n[6/6] Verifying deployment..." -ForegroundColor Green
# Check if site is accessible
# Verify key files are present

Write-Host "`nDeployment complete!" -ForegroundColor Cyan
```

**pull-from-production.ps1:**
```powershell
# Pull latest content from production
param(
    [switch]$SkipDatabase,
    [switch]$SkipFiles,
    [switch]$SkipUploads
)

Write-Host "=== Pulling from Production ===" -ForegroundColor Cyan

# Backup local environment first
Write-Host "`n[1/4] Backing up local environment..." -ForegroundColor Green

# Pull database
if (-not $SkipDatabase) {
    Write-Host "`n[2/4] Pulling database..." -ForegroundColor Green
    # Export from production, import locally, search-replace URLs
}

# Pull files
if (-not $SkipFiles) {
    Write-Host "`n[3/4] Pulling files..." -ForegroundColor Green
    # Download themes, plugins, mu-plugins
}

# Pull uploads (optional)
if (-not $SkipUploads) {
    Write-Host "`n[4/4] Pulling uploads..." -ForegroundColor Green
    # Download media files
}

Write-Host "`nPull complete!" -ForegroundColor Cyan
```

### 6. Supabase Edge Function Testing

**Component:** Local Supabase Development Environment

**Purpose:** Test edge functions locally before deploying

**Setup:**

**Option 1: Docker-based Local Development (Recommended)**
```bash
# Install Supabase CLI
npm install -g supabase

# Start local Supabase
supabase start

# Deploy functions locally
supabase functions serve

# Test webhook locally
curl -X POST http://localhost:54321/functions/v1/wp-sync \
  -H "Content-Type: application/json" \
  -H "X-Webhook-Secret: local-test-secret" \
  -d '{"event":"post_publish","post_id":123}'
```

**Option 2: Cloud-based Testing (No Docker)**
- Create a separate Supabase project for development/staging
- Deploy functions to staging project
- Point local WordPress to staging edge functions
- Test without affecting production

**WordPress Configuration for Local Testing:**
```php
// In wp-config-local.php or .env.local
putenv('MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync');
putenv('MGRNZ_WEBHOOK_SECRET=local-test-secret');
```

## Data Models

### Deployment Configuration

```json
{
  "deployment": {
    "name": "mgrnz-production",
    "type": "sftp",
    "host": "mgrnz.com",
    "port": 22,
    "username": "${SFTP_USERNAME}",
    "password": "${SFTP_PASSWORD}",
    "remotePath": "/public_html",
    "localPath": "C:/Local Sites/mgrnz/app/public",
    "exclude": [
      "wp-config.php",
      ".env*",
      "wp-content/cache/**",
      "wp-content/upgrade/**",
      ".git/**",
      "node_modules/**"
    ],
    "backup": {
      "enabled": true,
      "path": "/backups",
      "retention": 7
    }
  }
}
```

### Environment Configuration Schema

```json
{
  "environment": {
    "name": "local|production",
    "wordpress": {
      "home": "string",
      "siteurl": "string",
      "debug": "boolean",
      "debugLog": "boolean"
    },
    "database": {
      "name": "string",
      "user": "string",
      "password": "string",
      "host": "string",
      "port": "number"
    },
    "supabase": {
      "url": "string",
      "anonKey": "string",
      "webhookUrl": "string",
      "webhookSecret": "string"
    },
    "integrations": {
      "mailerlite": {
        "apiKey": "string",
        "groupId": "string"
      },
      "github": {
        "token": "string",
        "owner": "string",
        "repo": "string"
      }
    }
  }
}
```

## Error Handling

### Deployment Failures

**Scenario:** File upload fails mid-deployment

**Handling:**
1. Script detects upload failure via SFTP error code
2. Halt deployment immediately
3. Display error message with failed file path
4. Provide rollback instructions
5. Preserve backup for manual restoration

**Recovery:**
```powershell
# Rollback script
.\rollback.ps1 -BackupTimestamp "20251118-143022"
```

### Database Sync Failures

**Scenario:** Database import fails due to syntax error or size limit

**Handling:**
1. Detect import error via WP-CLI exit code
2. Preserve existing local database (no changes applied)
3. Display error log excerpt
4. Suggest troubleshooting steps (check SQL syntax, increase limits)

**Recovery:**
- Local database remains unchanged
- User can fix SQL file and retry import
- No production impact

### Connection Failures

**Scenario:** Cannot connect to Spaceship hosting via SFTP

**Handling:**
1. Test connection before starting deployment
2. Display clear error message: "Cannot connect to mgrnz.com:22"
3. Verify credentials are correct
4. Check if host is accessible (ping test)
5. Provide troubleshooting checklist

**Troubleshooting Steps:**
- Verify SFTP credentials in `.deploy-credentials.json`
- Check if Spaceship hosting is online
- Verify firewall/network settings
- Test connection with WinSCP manually

### Webhook Testing Failures

**Scenario:** Local WordPress cannot reach local Supabase edge functions

**Handling:**
1. Verify Supabase CLI is running (`supabase status`)
2. Check if Docker is running (for local Supabase)
3. Verify webhook URL in wp-config-local.php
4. Test edge function directly with curl
5. Check edge function logs for errors

**Fallback:**
- Use cloud-based staging Supabase project instead of local
- Update webhook URL to staging endpoint

## Testing Strategy

### Unit Testing

**Scope:** Individual deployment script functions

**Tests:**
- Credential validation
- File path resolution
- Backup creation
- URL search-replace accuracy
- Environment variable loading

**Tools:**
- Pester (PowerShell testing framework)
- PHPUnit (for WordPress plugin code)

### Integration Testing

**Scope:** End-to-end deployment workflows

**Test Scenarios:**

1. **Full Deployment Test**
   - Start with clean local environment
   - Make changes to theme files
   - Run deployment script
   - Verify files uploaded to production
   - Verify site still functions

2. **Database Pull Test**
   - Pull production database
   - Verify import successful
   - Verify URLs replaced correctly
   - Verify local site loads with production content

3. **Rollback Test**
   - Deploy changes
   - Trigger rollback
   - Verify production restored to previous state

4. **Webhook Test**
   - Publish post in local WordPress
   - Verify webhook sent to local Supabase
   - Verify edge function receives correct payload
   - Check edge function logs

### Manual Testing Checklist

**Pre-Deployment:**
- [ ] Local site loads without errors
- [ ] All plugins activated
- [ ] Theme displays correctly
- [ ] Admin panel accessible
- [ ] Database backup created

**Post-Deployment:**
- [ ] Production site loads without errors
- [ ] Homepage displays correctly
- [ ] Admin panel accessible
- [ ] Test post creation
- [ ] Verify webhook triggers
- [ ] Check error logs

**Rollback Test:**
- [ ] Backup restoration works
- [ ] Site returns to previous state
- [ ] No data loss

### Performance Testing

**Metrics:**
- Deployment time (target: < 5 minutes for typical changes)
- Database pull time (target: < 2 minutes)
- File sync time (target: < 3 minutes)
- Backup creation time (target: < 1 minute)

**Optimization:**
- Use incremental file sync (only changed files)
- Compress database exports
- Parallel file uploads where possible
- Skip uploads directory unless needed

## Security Considerations

### Credential Management

**Storage:**
- Store SFTP credentials in `.deploy-credentials.json` (gitignored)
- Use Windows Credential Manager for sensitive data
- Never commit credentials to version control

**Format:**
```json
{
  "production": {
    "host": "mgrnz.com",
    "username": "spaceship-user",
    "password": "encrypted-or-reference",
    "privateKeyPath": "C:/Users/Mike/.ssh/mgrnz_rsa"
  }
}
```

### Backup Security

**Requirements:**
- Encrypt database backups containing sensitive data
- Store backups in secure location (not web-accessible)
- Implement backup retention policy (7 days)
- Restrict backup access to authorized users only

### Environment Isolation

**Measures:**
- Separate database credentials for local and production
- Different Supabase projects for local/staging/production
- Test API keys for local development
- Production secrets never stored in local environment

### Deployment Safety

**Safeguards:**
- Require explicit confirmation before deployment
- Display summary of changes before proceeding
- Create automatic backups before any production changes
- Implement dry-run mode for testing
- Log all deployment activities with timestamps

## Deployment Workflow Summary

### Daily Development Workflow

1. **Start Local Environment**
   ```bash
   # Start Local by Flywheel or Docker
   # Access http://mgrnz.local
   ```

2. **Make Changes**
   - Edit theme files
   - Modify plugins
   - Test locally

3. **Commit Changes**
   ```bash
   git add .
   git commit -m "Feature: description"
   git push origin main
   ```

4. **Deploy to Production** (when ready)
   ```powershell
   .\deploy.ps1
   ```

### Weekly Sync Workflow

1. **Pull Latest Production Content**
   ```powershell
   .\pull-from-production.ps1 -SkipUploads
   ```

2. **Verify Local Environment**
   - Test with production data
   - Identify any issues

3. **Continue Development**

### Emergency Rollback Workflow

1. **Identify Issue**
   - Production site has errors after deployment

2. **Execute Rollback**
   ```powershell
   .\rollback.ps1 -BackupTimestamp "latest"
   ```

3. **Verify Restoration**
   - Check production site
   - Verify functionality restored

4. **Investigate and Fix**
   - Debug issue locally
   - Test thoroughly
   - Redeploy when ready
