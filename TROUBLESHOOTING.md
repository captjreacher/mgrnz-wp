# Troubleshooting Guide

Complete troubleshooting reference for the MGRNZ local development and deployment workflow.

---

## Table of Contents

1. [Environment Setup Issues](#environment-setup-issues)
2. [Database Issues](#database-issues)
3. [File Sync Issues](#file-sync-issues)
4. [Deployment Issues](#deployment-issues)
5. [Supabase Issues](#supabase-issues)
6. [WordPress Issues](#wordpress-issues)
7. [Network & Connection Issues](#network--connection-issues)
8. [Performance Issues](#performance-issues)

---

## Environment Setup Issues

### Issue: Environment Variables Not Loading

**Symptoms:**
- WordPress shows database connection errors
- Constants are undefined
- Wrong environment detected

**Diagnosis:**

```powershell
# Test environment configuration
php test-environment.php

# Check if .env.local exists
Test-Path .env.local

# Verify file contents
cat .env.local
```

**Solutions:**

1. **Verify .env.local exists and has correct syntax:**
   ```env
   # Correct format (no spaces around =)
   DB_NAME=mgrnz_local
   DB_USER=root
   
   # Incorrect format
   DB_NAME = mgrnz_local  # ❌ Spaces around =
   DB_USER: root          # ❌ Colon instead of =
   ```

2. **Check Composer dependencies:**
   ```powershell
   # Install/reinstall dependencies
   composer install
   
   # Verify vendor directory exists
   Test-Path vendor/autoload.php
   ```

3. **Verify wp-config-loader.php is included:**
   ```php
   // In wp-config.php or wp-config-local.php
   require_once __DIR__ . '/wp-config-loader.php';
   ```

4. **Check file permissions:**
   ```powershell
   # Windows: Ensure file is readable
   Get-Acl .env.local | Format-List
   
   # Linux/Mac:
   chmod 644 .env.local
   ```

### Issue: Wrong Environment Detected

**Symptoms:**
- Local site uses production settings
- Production site uses local settings
- Debug mode enabled in production

**Diagnosis:**

```powershell
# Check environment detection
php -r "require 'wp-config-loader.php'; echo 'Environment: ' . getenv('WP_ENVIRONMENT_TYPE');"

# Check WordPress debug log
tail -f wp-content/debug.log | Select-String "MGRNZ Environment"
```

**Solutions:**

1. **Force environment manually:**
   ```php
   // In wp-config.php (before loading wp-config-loader.php)
   putenv('WP_ENVIRONMENT=local');  // or 'production'
   ```

2. **Check hostname detection:**
   ```powershell
   # Verify local hostname
   hostname
   
   # Should contain: localhost, .local, .test, or .dev
   ```

3. **Verify .env.local exists for local environment:**
   ```powershell
   # Local environment requires .env.local
   Test-Path .env.local
   ```

4. **Check server environment variable:**
   ```powershell
   # Windows
   $env:WP_ENVIRONMENT
   
   # Linux/Mac
   echo $WP_ENVIRONMENT
   ```

### Issue: Composer Not Available

**Symptoms:**
- "composer: command not found"
- PHP dependencies not installed
- vlucas/phpdotenv not available

**Solutions:**

1. **Install Composer:**
   ```powershell
   # Windows: Download installer
   # https://getcomposer.org/Composer-Setup.exe
   
   # Verify installation
   composer --version
   ```

2. **Use fallback parser:**
   - The system includes a fallback .env parser
   - Works without Composer but less robust
   - Install Composer for best results

3. **Add Composer to PATH:**
   ```powershell
   # Windows: Add to system PATH
   # C:\ProgramData\ComposerSetup\bin
   
   # Verify
   $env:PATH -split ';' | Select-String "Composer"
   ```

---

## Database Issues

### Issue: Database Connection Failed

**Symptoms:**
- "Error establishing a database connection"
- WordPress shows database error page
- Cannot access wp-admin

**Diagnosis:**

```powershell
# Test database connection
php test-environment.php

# Check if MySQL is running
# Local by Flywheel: Check app status
# XAMPP: Check control panel
# Docker: docker ps | Select-String "mysql"

# Test connection manually
mysql -u root -p -h localhost
```

**Solutions:**

1. **Verify database credentials:**
   ```env
   # In .env.local
   DB_NAME=mgrnz_local
   DB_USER=root
   DB_PASSWORD=root
   DB_HOST=localhost
   ```

2. **Check database exists:**
   ```powershell
   # Create database if missing
   mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS mgrnz_local;"
   ```

3. **Verify MySQL is running:**
   ```powershell
   # Local by Flywheel: Start site in app
   # XAMPP: Start MySQL in control panel
   # Docker: docker start mysql-container
   ```

4. **Check database host:**
   ```env
   # Try different host values
   DB_HOST=localhost
   DB_HOST=127.0.0.1
   DB_HOST=localhost:3306
   ```

### Issue: Database Import Failed

**Symptoms:**
- "Database import failed with exit code 1"
- SQL syntax errors
- Import hangs or times out

**Diagnosis:**

```powershell
# Check SQL file
Get-Content temp\prod-export.sql | Select-Object -First 20

# Verify file size
Get-Item temp\prod-export.sql | Select-Object Length

# Test import manually
cd wp
wp db import ..\temp\prod-export.sql --debug
```

**Solutions:**

1. **Check SQL file is valid:**
   ```powershell
   # File should start with SQL comments
   # File should not be empty
   # File should not be HTML error page
   
   Get-Content temp\prod-export.sql | Select-Object -First 5
   ```

2. **Increase MySQL limits:**
   ```ini
   # In my.cnf or my.ini
   [mysqld]
   max_allowed_packet=256M
   innodb_buffer_pool_size=512M
   ```

3. **Import in chunks:**
   ```powershell
   # Split large SQL file
   wp db import large-file.sql --skip-optimization
   ```

4. **Check for corrupted data:**
   ```powershell
   # Validate SQL syntax
   mysql -u root -p --execute="source temp/prod-export.sql" 2>&1 | Select-String "ERROR"
   ```

### Issue: URL Replacement Not Working

**Symptoms:**
- Links still point to production
- Images don't load
- Admin redirects to production site

**Diagnosis:**

```powershell
# Check current URLs in database
cd wp
wp option get siteurl
wp option get home

# Search for production URLs
wp db query "SELECT * FROM wp_options WHERE option_value LIKE '%mgrnz.com%' LIMIT 10;"
```

**Solutions:**

1. **Run search-replace manually:**
   ```powershell
   cd wp
   wp search-replace 'https://mgrnz.com' 'http://mgrnz.local' --all-tables --dry-run
   
   # If dry-run looks good, run for real
   wp search-replace 'https://mgrnz.com' 'http://mgrnz.local' --all-tables
   ```

2. **Update WordPress options:**
   ```powershell
   wp option update siteurl 'http://mgrnz.local'
   wp option update home 'http://mgrnz.local'
   ```

3. **Clear WordPress cache:**
   ```powershell
   wp cache flush
   wp rewrite flush
   ```

4. **Check for serialized data:**
   ```powershell
   # WP-CLI handles serialized data automatically
   # But verify with:
   wp db query "SELECT * FROM wp_postmeta WHERE meta_value LIKE '%mgrnz.com%' LIMIT 5;"
   ```

### Issue: Database Rollback Failed

**Symptoms:**
- Automatic rollback didn't restore database
- Backup file not found
- Import errors during rollback

**Diagnosis:**

```powershell
# Check if backup exists
Get-ChildItem backups\*.sql | Sort-Object LastWriteTime -Descending | Select-Object -First 5

# Verify backup file is valid
Get-Content backups\local-backup-*.sql | Select-Object -First 10
```

**Solutions:**

1. **Restore manually from backup:**
   ```powershell
   cd wp
   
   # List available backups
   Get-ChildItem ..\backups\local-backup-*.sql
   
   # Import specific backup
   wp db import ..\backups\local-backup-20251118-143022.sql
   
   # Verify restoration
   wp db check
   ```

2. **Use most recent backup:**
   ```powershell
   $latestBackup = Get-ChildItem backups\local-backup-*.sql | 
                   Sort-Object LastWriteTime -Descending | 
                   Select-Object -First 1
   
   cd wp
   wp db import $latestBackup.FullName
   ```

3. **Check database integrity:**
   ```powershell
   cd wp
   wp db check
   wp db repair
   ```

---

## File Sync Issues

### Issue: SFTP Connection Failed

**Symptoms:**
- "Cannot connect to production server"
- "Connection timed out"
- "Authentication failed"

**Diagnosis:**

```powershell
# Test connection
.\scripts\test-connection.ps1 -Environment production

# Test SSH manually
ssh username@mgrnz.com

# Test with verbose output
ssh -v username@mgrnz.com
```

**Solutions:**

1. **Verify credentials:**
   ```powershell
   # Check .deploy-credentials.json
   Get-Content .deploy-credentials.json | ConvertFrom-Json
   
   # Test with password auth
   ssh username@mgrnz.com
   # Enter password when prompted
   ```

2. **Check SSH key:**
   ```powershell
   # Verify key exists
   Test-Path C:\Users\YourName\.ssh\id_rsa
   
   # Test key authentication
   ssh -i C:\Users\YourName\.ssh\id_rsa username@mgrnz.com
   ```

3. **Check firewall:**
   ```powershell
   # Test if port 22 is accessible
   Test-NetConnection -ComputerName mgrnz.com -Port 22
   
   # Should show: TcpTestSucceeded : True
   ```

4. **Try different authentication:**
   ```json
   // In .deploy-credentials.json
   {
     "production": {
       "useKeyAuth": false,
       "password": "your-password"
     }
   }
   ```

### Issue: Files Not Syncing

**Symptoms:**
- Files uploaded but not visible on production
- Some files missing after sync
- Old files not being replaced

**Diagnosis:**

```powershell
# Check what would be synced (dry run)
.\scripts\file-push.ps1 -Environment production -DryRun

# Check exclusion patterns
Get-Content deployment-config.json | ConvertFrom-Json | 
    Select-Object -ExpandProperty exclusions

# Verify remote path
ssh username@mgrnz.com "ls -la /path/to/wordpress/wp-content"
```

**Solutions:**

1. **Check exclusion patterns:**
   ```json
   // In deployment-config.json
   {
     "exclusions": {
       "global": [
         ".git",
         "node_modules"
       ]
     }
   }
   ```

2. **Verify remote path:**
   ```powershell
   # Test remote path exists
   ssh username@mgrnz.com "cd /path/to/wordpress && pwd"
   ```

3. **Check file permissions:**
   ```powershell
   # Ensure files are readable locally
   Get-ChildItem wp-content\themes -Recurse | 
       Where-Object { -not $_.PSIsContainer } | 
       Select-Object FullName, Attributes
   ```

4. **Force full sync:**
   ```powershell
   # Disable changed-files-only
   .\scripts\file-push.ps1 -Environment production -Force
   ```

### Issue: File Transfer Timeout

**Symptoms:**
- Transfer hangs or times out
- Large files fail to upload
- Connection drops during transfer

**Diagnosis:**

```powershell
# Check file sizes
Get-ChildItem wp-content -Recurse | 
    Where-Object { -not $_.PSIsContainer } | 
    Sort-Object Length -Descending | 
    Select-Object -First 10 Name, @{Name="SizeMB";Expression={[math]::Round($_.Length/1MB,2)}}

# Test connection stability
Test-NetConnection -ComputerName mgrnz.com -Port 22 -InformationLevel Detailed
```

**Solutions:**

1. **Increase timeout:**
   ```json
   // In deployment-config.json
   {
     "transfer": {
       "timeout": 600,  // 10 minutes
       "retryAttempts": 5
     }
   }
   ```

2. **Enable compression:**
   ```json
   {
     "transfer": {
       "compression": true
     }
   }
   ```

3. **Upload in batches:**
   ```powershell
   # Upload themes only
   .\scripts\file-push.ps1 -Environment production -ThemesOnly
   
   # Then upload plugins
   .\scripts\file-push.ps1 -Environment production -PluginsOnly
   ```

4. **Exclude large files:**
   ```json
   {
     "exclusions": {
       "uploads": [
         "*.mp4",
         "*.zip",
         "*.pdf"
       ]
     }
   }
   ```

---

## Deployment Issues

### Issue: Deployment Failed Mid-Process

**Symptoms:**
- Deployment stopped with error
- Some files uploaded, others not
- Production site partially updated

**Diagnosis:**

```powershell
# Check deployment log
Get-Content logs\deploy-*.log | Select-Object -Last 50

# Check production site status
curl https://mgrnz.com -UseBasicParsing | Select-Object StatusCode

# List recent backups
.\scripts\rollback.ps1 -ListBackups
```

**Solutions:**

1. **Rollback to last backup:**
   ```powershell
   .\scripts\rollback.ps1 -BackupTimestamp "latest"
   ```

2. **Resume deployment:**
   ```powershell
   # Retry deployment
   .\scripts\deploy.ps1 -Environment production
   ```

3. **Deploy specific components:**
   ```powershell
   # If themes uploaded but plugins didn't
   .\scripts\file-push.ps1 -Environment production -PluginsOnly
   ```

4. **Check disk space:**
   ```powershell
   # Check local disk space
   Get-PSDrive C | Select-Object Used, Free
   
   # Check remote disk space
   ssh username@mgrnz.com "df -h"
   ```

### Issue: Backup Creation Failed

**Symptoms:**
- "Failed to create backup"
- Backup file is empty or corrupted
- Insufficient disk space

**Diagnosis:**

```powershell
# Check available disk space
Get-PSDrive C | Select-Object @{Name="FreeGB";Expression={[math]::Round($_.Free/1GB,2)}}

# Check backup directory
Get-ChildItem backups | Measure-Object -Property Length -Sum

# Test backup creation manually
cd wp
wp db export ..\backups\test-backup.sql
```

**Solutions:**

1. **Free up disk space:**
   ```powershell
   # Remove old backups
   Get-ChildItem backups\*.sql | 
       Where-Object { $_.LastWriteTime -lt (Get-Date).AddDays(-7) } | 
       Remove-Item
   
   # Remove old logs
   Get-ChildItem logs\*.log | 
       Where-Object { $_.LastWriteTime -lt (Get-Date).AddDays(-30) } | 
       Remove-Item
   ```

2. **Use compression:**
   ```json
   // In deployment-config.json
   {
     "backup": {
       "compressionEnabled": true,
       "compressionLevel": "best"
     }
   }
   ```

3. **Skip backup (emergency only):**
   ```powershell
   .\scripts\deploy.ps1 -Environment production -SkipBackup
   ```

4. **Change backup location:**
   ```json
   {
     "local": {
       "paths": {
         "backups": "D:/backups"  // Different drive
       }
     }
   }
   ```

### Issue: Post-Deployment Verification Failed

**Symptoms:**
- Site returns 500 error after deployment
- White screen of death
- Admin panel inaccessible

**Diagnosis:**

```powershell
# Check site status
curl https://mgrnz.com -UseBasicParsing

# Check PHP errors
ssh username@mgrnz.com "tail -f /path/to/wordpress/wp-content/debug.log"

# Check web server logs
ssh username@mgrnz.com "tail -f /var/log/apache2/error.log"
```

**Solutions:**

1. **Immediate rollback:**
   ```powershell
   .\scripts\rollback.ps1 -BackupTimestamp "latest" -Force
   ```

2. **Check for syntax errors:**
   ```powershell
   # Test PHP syntax locally
   Get-ChildItem wp-content\themes\*.php -Recurse | ForEach-Object {
       php -l $_.FullName
   }
   ```

3. **Disable plugins:**
   ```powershell
   # Via SSH
   ssh username@mgrnz.com "cd /path/to/wordpress && wp plugin deactivate --all"
   ```

4. **Enable debug mode:**
   ```php
   // Temporarily in wp-config.php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   define('WP_DEBUG_DISPLAY', false);
   ```

---

## Supabase Issues

### Issue: Supabase Won't Start

**Symptoms:**
- "supabase start" fails
- Docker errors
- Port conflicts

**Diagnosis:**

```powershell
# Check Docker status
docker ps

# Check if Docker is running
Get-Process | Select-String "Docker"

# Check port availability
Test-NetConnection -ComputerName localhost -Port 54321
```

**Solutions:**

1. **Start Docker Desktop:**
   - Open Docker Desktop application
   - Wait for it to fully start
   - Check system tray for Docker icon

2. **Stop conflicting services:**
   ```powershell
   # Check what's using port 54321
   netstat -ano | Select-String "54321"
   
   # Stop the process (replace PID)
   Stop-Process -Id PID
   ```

3. **Change Supabase ports:**
   ```toml
   # In supabase/config.toml
   [api]
   port = 54321  # Change to different port
   
   [studio]
   port = 54323  # Change to different port
   ```

4. **Reset Supabase:**
   ```powershell
   supabase stop
   supabase db reset
   supabase start
   ```

### Issue: Edge Functions Not Working

**Symptoms:**
- 404 errors on function endpoints
- Functions return errors
- Webhooks not triggering

**Diagnosis:**

```powershell
# Check Supabase status
supabase status

# Check if functions are deployed
supabase functions list

# Test function directly
curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "Content-Type: application/json" `
  -d '{\"test\":\"data\"}'

# Check function logs
supabase functions logs wp-sync
```

**Solutions:**

1. **Deploy functions:**
   ```powershell
   supabase functions deploy
   ```

2. **Serve functions:**
   ```powershell
   supabase functions serve
   ```

3. **Check environment variables:**
   ```powershell
   # Verify supabase/.env.local exists
   Test-Path supabase\.env.local
   
   # Check contents
   cat supabase\.env.local
   ```

4. **Restart Supabase:**
   ```powershell
   supabase stop
   supabase start
   supabase functions serve
   ```

### Issue: Webhook Authentication Failed

**Symptoms:**
- "Unauthorized" response
- "Invalid webhook secret"
- Webhooks rejected

**Diagnosis:**

```powershell
# Check webhook secret in WordPress
cat .env.local | Select-String "WEBHOOK_SECRET"

# Check webhook secret in Supabase
cat supabase\.env.local | Select-String "WEBHOOK_SECRET"

# Test with correct secret
curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "X-Webhook-Secret: local-test-secret" `
  -H "Content-Type: application/json" `
  -d '{\"test\":\"data\"}'
```

**Solutions:**

1. **Sync webhook secrets:**
   ```env
   # In .env.local (WordPress)
   MGRNZ_WEBHOOK_SECRET=local-test-secret
   
   # In supabase/.env.local
   MGRNZ_WEBHOOK_SECRET=local-test-secret
   ```

2. **Restart both services:**
   ```powershell
   # Restart Supabase
   supabase stop
   supabase start
   supabase functions serve
   
   # Restart WordPress
   # (Restart Local by Flywheel or web server)
   ```

3. **Check header format:**
   ```powershell
   # Correct header
   -H "X-Webhook-Secret: local-test-secret"
   
   # Not: Authorization: Bearer ...
   ```

---

## WordPress Issues

### Issue: White Screen of Death

**Symptoms:**
- Blank white page
- No error message
- Site completely unresponsive

**Diagnosis:**

```powershell
# Enable debug mode
# Edit wp-config.php temporarily:
# define('WP_DEBUG', true);
# define('WP_DEBUG_DISPLAY', true);

# Check debug log
tail -f wp-content/debug.log

# Check PHP error log
# Location varies by server
```

**Solutions:**

1. **Disable all plugins:**
   ```powershell
   cd wp
   wp plugin deactivate --all
   ```

2. **Switch to default theme:**
   ```powershell
   wp theme activate twentytwentyfour
   ```

3. **Increase PHP memory:**
   ```php
   // In wp-config.php
   define('WP_MEMORY_LIMIT', '256M');
   ```

4. **Check for fatal errors:**
   ```powershell
   # Test PHP syntax
   php -l wp-config.php
   php -l wp-content/themes/your-theme/functions.php
   ```

### Issue: Plugin Conflicts

**Symptoms:**
- Site breaks after plugin activation
- Admin panel errors
- Features stop working

**Diagnosis:**

```powershell
# List active plugins
cd wp
wp plugin list --status=active

# Check for plugin errors
wp plugin verify-checksums --all
```

**Solutions:**

1. **Deactivate plugins one by one:**
   ```powershell
   wp plugin deactivate plugin-name
   # Test site
   # Repeat until issue is found
   ```

2. **Update plugins:**
   ```powershell
   wp plugin update --all
   ```

3. **Reinstall problematic plugin:**
   ```powershell
   wp plugin uninstall plugin-name
   wp plugin install plugin-name --activate
   ```

### Issue: Permalink Issues

**Symptoms:**
- 404 errors on posts/pages
- Only homepage works
- Admin works but frontend doesn't

**Diagnosis:**

```powershell
# Check permalink structure
cd wp
wp rewrite list

# Check .htaccess
cat .htaccess
```

**Solutions:**

1. **Flush rewrite rules:**
   ```powershell
   wp rewrite flush
   ```

2. **Regenerate .htaccess:**
   ```powershell
   wp rewrite structure '/%postname%/' --hard
   ```

3. **Check web server configuration:**
   ```apache
   # Apache: Ensure mod_rewrite is enabled
   # Nginx: Check location blocks
   ```

---

## Network & Connection Issues

### Issue: Slow Connection to Production

**Symptoms:**
- Deployments take very long
- File transfers timeout
- SSH commands are slow

**Diagnosis:**

```powershell
# Test connection speed
Test-NetConnection -ComputerName mgrnz.com -Port 22 -InformationLevel Detailed

# Ping test
ping mgrnz.com -n 10

# Traceroute
tracert mgrnz.com
```

**Solutions:**

1. **Enable compression:**
   ```json
   {
     "transfer": {
       "compression": true
     }
   }
   ```

2. **Use changed-files-only:**
   ```json
   {
     "sync": {
       "changedFilesOnly": true
     }
   }
   ```

3. **Exclude large files:**
   ```json
   {
     "exclusions": {
       "uploads": ["*.mp4", "*.zip"]
     }
   }
   ```

4. **Deploy during off-peak hours:**
   - Early morning or late evening
   - Avoid peak internet usage times

### Issue: DNS Resolution Failed

**Symptoms:**
- "Could not resolve hostname"
- "Name or service not known"
- Cannot connect to production

**Diagnosis:**

```powershell
# Test DNS resolution
Resolve-DnsName mgrnz.com

# Try different DNS server
Resolve-DnsName mgrnz.com -Server 8.8.8.8
```

**Solutions:**

1. **Use IP address instead:**
   ```json
   {
     "production": {
       "host": "123.456.789.012"  // Use actual IP
     }
   }
   ```

2. **Flush DNS cache:**
   ```powershell
   ipconfig /flushdns
   ```

3. **Change DNS server:**
   - Use Google DNS: 8.8.8.8, 8.8.4.4
   - Use Cloudflare DNS: 1.1.1.1, 1.0.0.1

---

## Performance Issues

### Issue: Slow Local WordPress

**Symptoms:**
- Pages take long to load
- Admin panel is sluggish
- Database queries are slow

**Diagnosis:**

```powershell
# Check database size
cd wp
wp db size --tables

# Check for slow queries
wp db query "SHOW PROCESSLIST;"

# Profile page load
wp profile stage --all
```

**Solutions:**

1. **Optimize database:**
   ```powershell
   wp db optimize
   wp transient delete --all
   ```

2. **Disable unnecessary plugins:**
   ```powershell
   wp plugin deactivate plugin-name
   ```

3. **Increase PHP limits:**
   ```ini
   # In php.ini
   memory_limit = 256M
   max_execution_time = 300
   ```

4. **Use object caching:**
   ```powershell
   wp plugin install redis-cache --activate
   ```

### Issue: Large Backup Files

**Symptoms:**
- Backups take long to create
- Backups consume lots of disk space
- Backup transfers timeout

**Diagnosis:**

```powershell
# Check backup sizes
Get-ChildItem backups\*.sql | 
    Select-Object Name, @{Name="SizeMB";Expression={[math]::Round($_.Length/1MB,2)}} | 
    Sort-Object SizeMB -Descending

# Check database size
cd wp
wp db size
```

**Solutions:**

1. **Enable compression:**
   ```json
   {
     "backup": {
       "compressionEnabled": true,
       "compressionLevel": "best"
     }
   }
   ```

2. **Exclude large tables:**
   ```powershell
   # Backup without logs
   wp db export backup.sql --exclude_tables=wp_actionscheduler_logs
   ```

3. **Clean up database:**
   ```powershell
   wp transient delete --all
   wp post delete $(wp post list --post_type=revision --format=ids)
   ```

4. **Implement backup rotation:**
   ```json
   {
     "backup": {
       "retentionDays": 7,
       "maxBackups": 5
     }
   }
   ```

---

## Getting Additional Help

### Check Logs

```powershell
# WordPress debug log
tail -f wp-content/debug.log

# Deployment logs
Get-Content logs\deploy-*.log | Select-Object -Last 100

# Supabase logs
supabase functions logs --follow

# Web server logs (production)
ssh username@mgrnz.com "tail -f /var/log/apache2/error.log"
```

### Run Diagnostics

```powershell
# Test environment
php test-environment.php

# Test connection
.\scripts\test-connection.ps1 -Environment production

# Test edge functions
.\supabase\test-edge-functions.ps1 -Function all -Environment local

# Check WordPress
cd wp
wp doctor check --all
```

### Review Documentation

- [Local Development Guide](LOCAL_DEV_DEPLOYMENT_GUIDE.md)
- [Environment Setup](ENVIRONMENT_SETUP.md)
- [Scripts README](scripts/README.md)
- [Supabase Testing](supabase/TESTING_EDGE_FUNCTIONS.md)

### Contact Support

1. Check existing documentation
2. Review error logs
3. Run diagnostic scripts
4. Document the issue with:
   - Error messages
   - Steps to reproduce
   - Environment details
   - Log excerpts

---

**Last Updated:** November 2025  
**Version:** 1.0.0

For additional help, consult the main documentation or review the specification documents in `.kiro/specs/local-dev-deployment-workflow/`.
