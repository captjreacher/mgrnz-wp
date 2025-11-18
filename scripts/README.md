# MGRNZ Deployment Scripts

This directory contains PowerShell scripts for managing database synchronization between local and production environments.

## Configuration

The deployment scripts use a centralized configuration file (`deployment-config.json`) in the project root. This file defines:

- **Environment settings** - Production and staging configurations
- **Remote paths** - WordPress installation paths on remote servers
- **Exclusion patterns** - Files and directories to skip during sync
- **Backup settings** - Retention policies and compression options
- **Transfer options** - Retry logic, timeouts, and connection settings
- **Safety checks** - Pre-deployment verification and confirmation requirements

See [DEPLOYMENT_CONFIG.md](../DEPLOYMENT_CONFIG.md) for complete configuration documentation.

### Quick Configuration

1. Review `deployment-config.json` in the project root
2. Update environment-specific paths and URLs
3. Customize exclusion patterns as needed
4. Configure backup retention policies
5. Set up deployment credentials in `.deploy-credentials.json`

## Logging

All deployment scripts include comprehensive logging with:
- Timestamped log entries with millisecond precision
- Multiple log levels (DEBUG, INFO, SUCCESS, WARNING, ERROR, CRITICAL)
- Error logging with full PowerShell stack traces
- Transfer operation metrics (file count, size, duration)
- Automatic log rotation (keeps 30 most recent logs)

See [LOGGING.md](LOGGING.md) for detailed documentation on the logging system.

Log files are stored in the `logs/` directory with timestamps:
- `deploy-YYYYMMDD-HHMMSS.log` - Main deployment logs
- `file-push-YYYYMMDD-HHMMSS.log` - File upload logs
- `file-pull-YYYYMMDD-HHMMSS.log` - File download logs
- `db-push-YYYYMMDD-HHMMSS.log` - Database push logs
- `db-pull-YYYYMMDD-HHMMSS.log` - Database pull logs

## Prerequisites

Before using these scripts, ensure you have:

1. **WP-CLI** installed locally and on production server
   - Download: https://wp-cli.org/#installing
   - Verify: `wp --version`

2. **SSH access** to production server
   - OpenSSH (Windows 10+) or Git Bash
   - SSH key or password authentication configured

3. **Environment files** configured
   - `.env.local` - Local environment configuration
   - `.env.production` - Production environment configuration

4. **Production server details**
   - Hostname/IP address
   - SSH username
   - WordPress installation path

## Scripts

### rollback.ps1

Restore production from backups.

**What it does:**
- Lists all available backups on production server
- Allows selection of specific backup timestamp or latest
- Restores files and/or database from backup
- Creates backup of current state before rollback
- Verifies production site after restoration

**Usage:**

```powershell
# List all available backups
.\scripts\rollback.ps1 -ListBackups

# Restore latest backup (files and database)
.\scripts\rollback.ps1 -BackupTimestamp "latest"

# Restore specific backup
.\scripts\rollback.ps1 -BackupTimestamp "20251118-143022"

# Restore only files
.\scripts\rollback.ps1 -BackupTimestamp "latest" -FilesOnly

# Restore only database
.\scripts\rollback.ps1 -BackupTimestamp "latest" -DatabaseOnly

# Dry run (show what would be restored)
.\scripts\rollback.ps1 -BackupTimestamp "latest" -DryRun

# Skip confirmation prompts (use with caution)
.\scripts\rollback.ps1 -BackupTimestamp "latest" -Force
```

**Parameters:**
- `-BackupTimestamp` - Specific backup timestamp or "latest"
- `-ListBackups` - List all available backups without performing rollback
- `-FilesOnly` - Only restore files, skip database restoration
- `-DatabaseOnly` - Only restore database, skip file restoration
- `-Force` - Skip confirmation prompts (use with caution)
- `-DryRun` - Show what would be restored without making changes

**Example:**

```powershell
PS> .\scripts\rollback.ps1 -ListBackups

╔════════════════════════════════════════════════════════════╗
║                    Available Backups                       ║
╚════════════════════════════════════════════════════════════╝

Timestamp: 20251118-143022
  Date: 2025-11-18 14:30:22
  [DATABASE] pre-deploy-20251118-143022.sql (15.3 MB)
  [FILES] wp-content-20251118-143022.zip (42.7 MB)

Timestamp: 20251117-091545
  Date: 2025-11-17 09:15:45
  [DATABASE] pre-deploy-20251117-091545.sql (14.8 MB)
  [FILES] wp-content-20251117-091545.zip (41.2 MB)

To restore a backup, use:
  .\scripts\rollback.ps1 -BackupTimestamp "20251118-143022"
  .\scripts\rollback.ps1 -BackupTimestamp "latest"
```

**Safety Features:**
- Lists available backups before restoration
- Creates backup of current state before rollback
- Requires explicit confirmation before proceeding
- Verifies production site after restoration
- Supports dry-run mode for testing

---

### db-pull.ps1

Pull production database to local environment.

**What it does:**
- Exports production database via SSH/WP-CLI
- Downloads database to local machine
- Backs up local database (optional)
- Imports production data into local database
- Replaces production URLs with local URLs
- Resets admin credentials for local access

**Usage:**

```powershell
# Basic usage (with prompts)
.\scripts\db-pull.ps1

# Skip local database backup
.\scripts\db-pull.ps1 -SkipBackup

# Set custom admin password
.\scripts\db-pull.ps1 -LocalAdminPassword "mypassword"

# Provide server details via parameters
.\scripts\db-pull.ps1 -ProductionHost "mgrnz.com" -ProductionUser "sshuser" -ProductionPath "/home/user/public_html"
```

**Parameters:**
- `-SkipBackup` - Skip creating backup of local database
- `-LocalAdminPassword` - Password for local admin user (default: "admin")
- `-ProductionHost` - Production server hostname
- `-ProductionUser` - SSH username
- `-ProductionPath` - Path to WordPress on production server

**Example:**

```powershell
PS> .\scripts\db-pull.ps1

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ Database Pull Script                          ║
║        Production → Local                                  ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

==> Running pre-flight checks...
    ✓ WP-CLI is installed
    ✓ SSH is available

==> Loading environment configuration...
    ✓ Loaded .env.local
    ✓ Loaded .env.production
    ✓ Configuration loaded
    Local URL: http://mgrnz.local
    Production URL: https://mgrnz.com

[... continues with database pull process ...]
```

---

### db-push.ps1

Push local database to production environment.

**⚠️ WARNING:** This script will **OVERWRITE** the production database! Use with extreme caution.

**What it does:**
- Exports local database
- Replaces local URLs with production URLs
- Creates backup of production database
- Uploads local database to production
- Imports database on production server
- Includes multiple safety confirmation prompts

**Usage:**

```powershell
# Basic usage (with safety prompts)
.\scripts\db-push.ps1

# Skip confirmation prompts (dangerous!)
.\scripts\db-push.ps1 -Force

# Skip production backup (NOT RECOMMENDED)
.\scripts\db-push.ps1 -SkipBackup

# Provide server details via parameters
.\scripts\db-push.ps1 -ProductionHost "mgrnz.com" -ProductionUser "sshuser" -ProductionPath "/home/user/public_html"
```

**Parameters:**
- `-SkipBackup` - Skip creating backup of production database (NOT RECOMMENDED)
- `-Force` - Skip confirmation prompts (use with extreme caution)
- `-ProductionHost` - Production server hostname
- `-ProductionUser` - SSH username
- `-ProductionPath` - Path to WordPress on production server

**Safety Features:**
- Multiple confirmation prompts
- Production database backup before import
- Connection verification before proceeding
- Clear warnings about data overwrite
- Backup downloaded to local machine

**Example:**

```powershell
PS> .\scripts\db-push.ps1

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ Database Push Script                          ║
║        Local → Production                                  ║
║                                                            ║
║        ⚠️  WARNING: THIS WILL OVERWRITE PRODUCTION! ⚠️      ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

⚠️  This script will REPLACE the production database with your local database!
⚠️  Make sure you understand the implications before proceeding.

Press Ctrl+C now to cancel, or
Press Enter to continue:

[... continues with safety checks and confirmations ...]
```

---

## Common Workflows

### Initial Local Setup

When setting up local development for the first time:

```powershell
# 1. Pull production database
.\scripts\db-pull.ps1

# 2. Access local site
# URL: http://mgrnz.local
# Username: admin (or first admin user)
# Password: admin (or custom password you set)
```

### Weekly Content Sync

Keep local environment updated with production content:

```powershell
# Pull latest production data
.\scripts\db-pull.ps1
```

### Deploying Database Changes

When you need to push local database changes to production:

```powershell
# ⚠️ Use with extreme caution!
# Only do this when you're certain about the changes

# 1. Review what will be pushed
# 2. Ensure you have a recent production backup
# 3. Run the push script
.\scripts\db-push.ps1

# 4. Test production site thoroughly
# 5. If issues occur, restore from backup
.\scripts\rollback.ps1 -BackupTimestamp "latest"
```

### Rolling Back a Deployment

If a deployment causes issues on production:

```powershell
# 1. List available backups
.\scripts\rollback.ps1 -ListBackups

# 2. Restore from the most recent backup
.\scripts\rollback.ps1 -BackupTimestamp "latest"

# Or restore from a specific backup
.\scripts\rollback.ps1 -BackupTimestamp "20251118-143022"

# 3. Verify production site is working
# 4. Investigate the issue locally
# 5. Fix and redeploy when ready
```

---

## Troubleshooting

### "WP-CLI is not installed"

**Solution:** Install WP-CLI
- Windows: Download from https://wp-cli.org/#installing
- Add to PATH or use full path to wp.phar

### "SSH is not installed"

**Solution:** Install OpenSSH
- Windows 10+: Settings → Apps → Optional Features → OpenSSH Client
- Or install Git Bash: https://git-scm.com/downloads

### "Cannot connect to production server"

**Solutions:**
1. Verify SSH credentials: `ssh username@hostname`
2. Check if server is accessible: `ping hostname`
3. Verify SSH key is configured
4. Check firewall settings

### "Failed to export production database"

**Solutions:**
1. Verify WP-CLI is installed on production: `ssh user@host "wp --version"`
2. Check WordPress path is correct
3. Verify database permissions
4. Check disk space on production server

### "Database import failed"

**Solutions:**
1. Check local database credentials in `.env.local`
2. Verify local MySQL/MariaDB is running
3. Check disk space on local machine
4. Review error message for SQL syntax issues

### "URL replacement not working"

**Solutions:**
1. Verify URLs in `.env.local` and `.env.production` are correct
2. Check for serialized data in database (WP-CLI handles this automatically)
3. Manually run: `wp search-replace 'old-url' 'new-url' --all-tables`

---

## Directory Structure

```
scripts/
├── README.md                    # This file
├── LOGGING.md                   # Logging system documentation
├── DeploymentCredentials.psm1   # Credential management module
├── DeploymentLogging.psm1       # Enhanced logging module
├── db-pull.ps1                  # Pull production database to local
├── db-push.ps1                  # Push local database to production
├── file-pull.ps1                # Pull production files to local
├── file-push.ps1                # Push local files to production
├── deploy.ps1                   # Main deployment script
├── rollback.ps1                 # Restore from production backups
└── test-connection.ps1          # Test SFTP/SSH connection

backups/               # Created automatically
├── local-backup-*.sql           # Local database backups
├── prod-backup-*.sql            # Production database backups
├── files-*.zip                  # File backups
└── pre-rollback-*.sql           # Pre-rollback backups

logs/                  # Created automatically
├── deploy-*.log                 # Deployment logs
├── file-push-*.log              # File upload logs
├── file-pull-*.log              # File download logs
├── db-push-*.log                # Database push logs
├── db-pull-*.log                # Database pull logs
└── rollback-*.log               # Rollback operation logs

temp/                  # Created automatically
└── *.sql                        # Temporary export files (cleaned up after use)
```

---

## Security Notes

1. **Never commit credentials** to version control
   - `.env.local` and `.env.production` are in `.gitignore`
   - Keep SSH keys secure

2. **Production backups** are created automatically
   - Stored on production server in `backups/` directory
   - Also downloaded to local `backups/` directory
   - Keep backups for at least 7 days

3. **Database push is dangerous**
   - Only use when absolutely necessary
   - Prefer deploying code/files instead of database
   - Always test locally first
   - Have a rollback plan ready

4. **SSH access**
   - Use SSH keys instead of passwords when possible
   - Restrict SSH access to specific IP addresses if possible
   - Use strong passwords if keys aren't available

---

## Best Practices

1. **Pull frequently** - Keep local environment in sync with production
2. **Push rarely** - Database pushes should be exceptional, not routine
3. **Test thoroughly** - Always test changes locally before pushing
4. **Backup always** - Never skip production backups
5. **Document changes** - Keep notes on what database changes were made
6. **Use version control** - Commit code changes, not database changes
7. **Communicate** - Let team know before pushing database changes

---

## Support

For issues or questions:
1. Check troubleshooting section above
2. Review script output for error messages
3. Verify environment configuration files
4. Test SSH connection manually
5. Check WP-CLI functionality: `wp cli info`

---

## Related Documentation

- [Environment Setup Guide](../ENVIRONMENT_SETUP.md)
- [Environment Quick Start](../ENVIRONMENT_QUICK_START.md)
- [Deployment Documentation](../DEPLOYMENT.md)
- [WP-CLI Documentation](https://wp-cli.org/)

---

## Error Handling & Recovery

Both scripts now include comprehensive error handling with automatic rollback capabilities to protect your data.

### Automatic Error Detection

The scripts detect and handle various failure scenarios:

- **Empty or corrupted SQL files** - Validates file content before import
- **Failed database imports** - Detects import failures via exit codes
- **Database integrity issues** - Verifies table count and accessibility
- **Connection failures** - Tests SSH/database connections before operations
- **Missing backups** - Warns when backups cannot be created

### Automatic Rollback (db-pull.ps1)

If a local database import fails, the script will automatically:

1. Detect the failure immediately
2. Display a critical error message with details
3. Restore the local database from the backup
4. Verify the restoration was successful
5. Provide manual recovery steps if automatic rollback fails

**Example rollback scenario:**

```
CRITICAL ERROR: Database import failed
Details: Exit Code: 1
Output: ERROR 1064: Syntax error in SQL

╔════════════════════════════════════════════════════════════╗
║                    INITIATING ROLLBACK                     ║
╚════════════════════════════════════════════════════════════╝

Reason: Database import failed with exit code 1

==> Restoring local database from backup...
    Resetting database...
    Importing backup...
    ✓ Local database restored successfully

✓ Local database has been restored to its previous state
```

### Automatic Rollback (db-push.ps1)

If a production database import fails, the script will automatically:

1. Detect the failure immediately
2. Display a critical error message with details
3. Restore the production database from the backup
4. Verify the restoration was successful
5. Provide manual recovery steps if automatic rollback fails

**This protects your production site from being left in a broken state.**

**Example rollback scenario:**

```
CRITICAL ERROR: Database import failed on production!
Details: Exit Code: 1
Output: ERROR 1064: Syntax error in SQL

╔════════════════════════════════════════════════════════════╗
║              INITIATING PRODUCTION ROLLBACK                ║
╚════════════════════════════════════════════════════════════╝

Reason: Import failed with exit code 1

==> Restoring production database from backup...
    Backup: /home/user/public_html/backups/prod-backup-20251118-143022.sql
    Importing backup to production...
    ✓ Production database restored successfully
    Flushing cache...

✓ Production database has been restored from backup
  The production site should be operational
```

### Detailed Logging

All operations are logged to timestamped log files in the `logs/` directory:

- `db-pull-YYYYMMDD-HHMMSS.log` - Local database pull operations
- `db-push-YYYYMMDD-HHMMSS.log` - Production database push operations

**Log entries include:**
- Timestamps for all operations
- Success/failure status
- Error details and stack traces
- Rollback attempts and results

**View logs:**

```powershell
# View latest pull log
Get-Content .\logs\db-pull-*.log | Select-Object -Last 50

# View latest push log
Get-Content .\logs\db-push-*.log | Select-Object -Last 50

# Search for errors in logs
Select-String -Path .\logs\*.log -Pattern "ERROR|CRITICAL"
```

### Database Integrity Checks

Both scripts perform integrity checks at multiple stages:

**Before operations:**
- Verifies database is accessible
- Counts existing tables
- Checks for WordPress core tables

**After operations:**
- Validates import was successful
- Verifies table count is non-zero
- Confirms WordPress core tables exist
- Tests database accessibility

**Example integrity check output:**

```
==> Importing database into local environment...
    Validating SQL file...
    ✓ SQL file validation passed
    Dropping existing tables...
    Importing database (this may take a moment)...
    ✓ Database imported successfully
    Verifying import integrity...
    ✓ Import integrity verified (47 tables)
```

### Error Recovery Workflow

**For db-pull.ps1 (Local):**

1. Script creates local backup automatically (unless `-SkipBackup` is used)
2. If import fails, automatic rollback restores local database
3. If rollback fails, manual recovery steps are provided:

```powershell
# Manual recovery for local database
cd wp
wp db import ..\backups\local-backup-YYYYMMDD-HHMMSS.sql
wp db check
```

**For db-push.ps1 (Production):**

1. Script creates production backup automatically (both remote and local copy)
2. If import fails, automatic rollback restores production database
3. If rollback fails, manual recovery steps are provided:

```bash
# Manual recovery for production database
ssh user@production-host
cd /path/to/wordpress
wp db import backups/prod-backup-YYYYMMDD-HHMMSS.sql
wp db check
wp cache flush
```

### Enhanced Safety Features

Both scripts include multiple safety layers:

- **Pre-flight checks** - Validates environment before starting
- **Automatic backups** - Creates timestamped backups (unless explicitly skipped)
- **SQL validation** - Checks file size and basic content before import
- **Confirmation prompts** - Requires explicit user confirmation for dangerous operations
- **Rollback on failure** - Automatically restores database if import fails
- **Detailed error messages** - Provides context and recovery instructions
- **Operation logging** - Records all actions for audit and debugging
- **Integrity verification** - Validates database state after operations

### Backup Management

Backups are stored in the `backups/` directory with timestamps:

- **Local backups**: `local-backup-YYYYMMDD-HHMMSS.sql`
- **Production backups**: `prod-backup-YYYYMMDD-HHMMSS.sql`

**Backup retention recommendations:**
- Keep backups for at least 7 days
- Store critical backups off-site
- Test backup restoration periodically

**Clean old backups:**

```powershell
# Remove backups older than 7 days
Get-ChildItem .\backups\*-backup-*.sql | 
    Where-Object { $_.LastWriteTime -lt (Get-Date).AddDays(-7) } | 
    Remove-Item

# List all backups with sizes
Get-ChildItem .\backups\*.sql | 
    Select-Object Name, @{Name="SizeMB";Expression={[math]::Round($_.Length/1MB,2)}}, LastWriteTime | 
    Sort-Object LastWriteTime -Descending
```

**Restore from backup manually:**

```powershell
# Restore local database
cd wp
wp db import ..\backups\local-backup-YYYYMMDD-HHMMSS.sql

# Restore production database
ssh user@host "cd /path/to/wordpress && wp db import backups/prod-backup-YYYYMMDD-HHMMSS.sql"
```

### Additional Troubleshooting

#### Rollback Failures

If automatic rollback fails:

1. **Locate the backup file** in the `backups/` directory
2. **Check the log file** for details on why rollback failed
3. **Manually restore** using WP-CLI:
   ```powershell
   wp db import backups\backup-file.sql
   ```
4. **Verify restoration**:
   ```powershell
   wp db check
   wp db query "SHOW TABLES;"
   ```

#### Empty or Corrupted SQL Files

If you encounter SQL file validation errors:

1. **Check network connection** during export/download
2. **Verify production database** is accessible and not empty
3. **Check disk space** on both local and production servers
4. **Review export output** in the log file
5. **Try the operation again** - may be a temporary network issue

#### Database Integrity Failures

If integrity checks fail after import:

1. **Review the log file** for specific error details
2. **Check database credentials** in environment files
3. **Verify MySQL/MariaDB is running** and accessible
4. **Check for table prefix mismatches** (should be `wp_`)
5. **Restore from backup** if database is corrupted

### Error Handling Best Practices

1. **Never use `-SkipBackup` for production** - Always create backups
2. **Review log files after operations** - Check for warnings or errors
3. **Test rollback procedures** in a safe environment periodically
4. **Monitor disk space** in backups and logs directories
5. **Keep multiple backup generations** - Don't rely on just one backup
6. **Verify production site immediately** after database push
7. **Have a communication plan** - Alert team if production rollback occurs
8. **Document incidents** - Note what went wrong and how it was resolved

---

## Log Files

The `logs/` directory contains detailed operation logs:

```
logs/
├── db-pull-20251118-143022.log    # Database pull operation
├── db-push-20251118-150315.log    # Database push operation
└── ...
```

**Log file format:**

```
[2025-11-18 14:30:22] [STEP] Running pre-flight checks...
[2025-11-18 14:30:23] [SUCCESS] WP-CLI is installed
[2025-11-18 14:30:23] [SUCCESS] SSH is available
[2025-11-18 14:30:24] [STEP] Loading environment configuration...
[2025-11-18 14:30:24] [SUCCESS] Loaded .env.local
[2025-11-18 14:30:24] [SUCCESS] Loaded .env.production
[2025-11-18 14:30:25] [INFO] Database integrity check: Accessible=True, Tables=47, CoreTables=True
...
```

**Useful log queries:**

```powershell
# Find all errors
Select-String -Path .\logs\*.log -Pattern "ERROR|CRITICAL"

# View specific operation
Get-Content .\logs\db-pull-20251118-143022.log

# Count operations by type
Get-ChildItem .\logs\*.log | Group-Object { $_.Name -replace '-\d{8}-\d{6}\.log$','' }

# Find rollback attempts
Select-String -Path .\logs\*.log -Pattern "ROLLBACK"
```



---

## Deployment Credentials Setup

For file synchronization operations (coming soon), you'll need to configure SFTP/SSH credentials.

### Initial Setup

1. **Copy the example credentials file:**

```powershell
Copy-Item .deploy-credentials.json.example .deploy-credentials.json
```

2. **Edit `.deploy-credentials.json` with your server details:**

```json
{
  "production": {
    "host": "mgrnz.com",
    "port": 22,
    "username": "your-ssh-username",
    "password": "your-password-or-leave-empty-for-key-auth",
    "privateKeyPath": "",
    "remotePath": "/home/username/public_html",
    "useKeyAuth": false
  }
}
```

3. **The file is automatically excluded from version control** (already in `.gitignore`)

### Authentication Methods

#### Password Authentication

```json
{
  "production": {
    "host": "mgrnz.com",
    "port": 22,
    "username": "myuser",
    "password": "mypassword",
    "privateKeyPath": "",
    "remotePath": "/home/myuser/public_html",
    "useKeyAuth": false
  }
}
```

#### SSH Key Authentication (Recommended)

```json
{
  "production": {
    "host": "mgrnz.com",
    "port": 22,
    "username": "myuser",
    "password": "",
    "privateKeyPath": "C:/Users/Mike/.ssh/id_rsa",
    "remotePath": "/home/myuser/public_html",
    "useKeyAuth": true
  }
}
```

#### Default SSH Key

```json
{
  "production": {
    "host": "mgrnz.com",
    "port": 22,
    "username": "myuser",
    "password": "",
    "privateKeyPath": "",
    "remotePath": "/home/myuser/public_html",
    "useKeyAuth": true
  }
}
```

### Testing Connection

Test your credentials before using deployment scripts:

```powershell
# Test production connection
.\scripts\test-connection.ps1 -Environment production

# Test staging connection
.\scripts\test-connection.ps1 -Environment staging

# Show setup help
.\scripts\test-connection.ps1 -ShowHelp
```

**Example output:**

```
╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        SFTP/SSH Connection Test                            ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

Testing connection to: production

==> Loading credentials...
  ✓ Credentials loaded

==> Validating credentials...
  ✓ Credentials are valid

==> Testing connection...
  Host: mgrnz.com:22
  User: myuser
  ✓ Connection successful

==> Verifying remote path...
  ✓ Remote path exists: /home/myuser/public_html

==> Checking WP-CLI on remote server...
  ✓ WP-CLI is available: WP-CLI 2.9.0

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Connection Test Successful!                         ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝
```

### Credential Fields

| Field | Required | Description |
|-------|----------|-------------|
| `host` | Yes | Server hostname or IP address |
| `port` | Yes | SSH port (usually 22) |
| `username` | Yes | SSH username |
| `password` | No | Password (leave empty for key auth) |
| `privateKeyPath` | No | Path to SSH private key file |
| `remotePath` | Yes | Path to WordPress on remote server |
| `useKeyAuth` | No | Set to `true` for SSH key authentication |

### Security Best Practices

1. **Use SSH keys instead of passwords** - More secure and convenient
2. **Never commit `.deploy-credentials.json`** - Already in `.gitignore`
3. **Restrict file permissions** - Only you should be able to read the file
4. **Use different credentials for staging and production** - Limit blast radius
5. **Rotate credentials periodically** - Update passwords/keys regularly
6. **Use strong passwords** - If you must use password authentication

### Troubleshooting Credentials

#### "Credentials file not found"

**Solution:**
```powershell
# Copy the example file
Copy-Item .deploy-credentials.json.example .deploy-credentials.json

# Edit with your details
notepad .deploy-credentials.json
```

#### "Connection failed"

**Solutions:**
1. Verify host is accessible: `ping mgrnz.com`
2. Test SSH manually: `ssh -p 22 username@mgrnz.com`
3. Check firewall settings
4. Verify username and password/key are correct
5. Ensure SSH service is running on server

#### "Private key file not found"

**Solutions:**
1. Verify the path to your private key is correct
2. Use forward slashes in path: `C:/Users/Mike/.ssh/id_rsa`
3. Ensure the key file exists and is readable
4. Check file permissions on the key

#### "Remote path does not exist"

**Solutions:**
1. Verify the path on the server: `ssh user@host "ls -la /path/to/wordpress"`
2. Check for typos in the path
3. Ensure you have permissions to access the directory
4. Use absolute path, not relative

### Multiple Environments

You can configure multiple environments in the same file:

```json
{
  "production": {
    "host": "mgrnz.com",
    "port": 22,
    "username": "produser",
    "password": "",
    "privateKeyPath": "C:/Users/Mike/.ssh/prod_key",
    "remotePath": "/home/produser/public_html",
    "useKeyAuth": true
  },
  "staging": {
    "host": "staging.mgrnz.com",
    "port": 22,
    "username": "staginguser",
    "password": "",
    "privateKeyPath": "C:/Users/Mike/.ssh/staging_key",
    "remotePath": "/home/staginguser/public_html",
    "useKeyAuth": true
  }
}
```

Then specify the environment when running scripts:

```powershell
# Test staging
.\scripts\test-connection.ps1 -Environment staging

# Test production
.\scripts\test-connection.ps1 -Environment production
```

---

## Deployment Credentials Module

The `DeploymentCredentials.psm1` module provides reusable functions for credential management.

### Available Functions

#### Get-DeploymentCredentials

Load credentials for a specific environment:

```powershell
Import-Module .\scripts\DeploymentCredentials.psm1

$creds = Get-DeploymentCredentials -Environment "production"
```

#### Test-DeploymentCredentials

Validate credential structure and required fields:

```powershell
$isValid = Test-DeploymentCredentials -Credentials $creds -Environment "production"
```

#### Test-SFTPConnection

Test actual connection to remote server:

```powershell
$connected = Test-SFTPConnection -Credentials $creds -Environment "production" -Timeout 15
```

#### Get-SSHCommandArgs

Build SSH command arguments array:

```powershell
$args = Get-SSHCommandArgs -Credentials $creds -Command "ls -la"
& ssh $args
```

#### Get-SCPCommandArgs

Build SCP command arguments array:

```powershell
# Upload file
$args = Get-SCPCommandArgs -Credentials $creds -Source "local.txt" -Destination "/remote/path/file.txt" -Upload
& scp $args

# Download file
$args = Get-SCPCommandArgs -Credentials $creds -Source "/remote/path/file.txt" -Destination "local.txt"
& scp $args
```

#### Show-CredentialsSetupHelp

Display setup instructions:

```powershell
Show-CredentialsSetupHelp
```

### Using in Custom Scripts

You can import and use the credentials module in your own scripts:

```powershell
#Requires -Version 5.1

# Import the module
Import-Module (Join-Path $PSScriptRoot "DeploymentCredentials.psm1") -Force

# Load credentials
$creds = Get-DeploymentCredentials -Environment "production"

if (-not $creds) {
    Write-Error "Failed to load credentials"
    exit 1
}

# Validate credentials
if (-not (Test-DeploymentCredentials -Credentials $creds -Environment "production")) {
    Write-Error "Invalid credentials"
    exit 1
}

# Test connection
if (-not (Test-SFTPConnection -Credentials $creds -Environment "production")) {
    Write-Error "Connection failed"
    exit 1
}

# Use credentials for operations
$sshArgs = Get-SSHCommandArgs -Credentials $creds -Command "wp --version"
$result = & ssh $sshArgs

Write-Host "WP-CLI version: $result"
```

---
