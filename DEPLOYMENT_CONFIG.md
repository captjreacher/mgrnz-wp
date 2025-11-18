# Deployment Configuration Documentation

This document describes the `deployment-config.json` configuration file used by the MGRNZ deployment scripts.

## Overview

The `deployment-config.json` file centralizes all deployment settings, including:
- Environment-specific configurations (production, staging)
- Remote and local path definitions
- File exclusion patterns
- Backup settings
- Transfer options
- Safety checks
- Logging configuration

## File Structure

### Top-Level Properties

| Property | Type | Description |
|----------|------|-------------|
| `$schema` | string | JSON schema reference for validation |
| `version` | string | Configuration file version |
| `description` | string | Brief description of the configuration |
| `environments` | object | Environment-specific configurations |
| `local` | object | Local environment settings |
| `exclusions` | object | File and directory exclusion patterns |
| `transfer` | object | File transfer settings |
| `safety` | object | Safety and validation settings |
| `logging` | object | Logging configuration |
| `notifications` | object | Notification settings (optional) |
| `database` | object | Database sync settings |
| `performance` | object | Performance optimization settings |
| `hooks` | object | Pre/post deployment hook scripts |

## Environments Configuration

Define multiple deployment targets (production, staging, etc.) with environment-specific settings.

### Environment Properties

```json
{
  "environments": {
    "production": {
      "name": "production",
      "description": "Live production environment",
      "enabled": true,
      "url": "https://mgrnz.com",
      "paths": { ... },
      "sync": { ... },
      "backup": { ... },
      "verification": { ... }
    }
  }
}
```

#### Paths

| Property | Type | Description | Example |
|----------|------|-------------|---------|
| `remotePath` | string | Root path on remote server | `/home/username/public_html` |
| `wpContent` | string | WordPress content directory | `wp-content` |
| `themes` | string | Themes directory | `wp-content/themes` |
| `plugins` | string | Plugins directory | `wp-content/plugins` |
| `muPlugins` | string | Must-use plugins directory | `wp-content/mu-plugins` |
| `uploads` | string | Uploads directory | `wp-content/uploads` |
| `backups` | string | Backup directory | `backups` |

#### Sync Options

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `includeUploads` | boolean | `false` | Include uploads directory in sync |
| `changedFilesOnly` | boolean | `false` | Only sync modified files |
| `preserveTimestamps` | boolean | `true` | Preserve file modification times |
| `followSymlinks` | boolean | `false` | Follow symbolic links |

#### Backup Settings

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `enabled` | boolean | `true` | Enable backup creation |
| `createBeforeDeploy` | boolean | `true` | Create backup before deployment |
| `createBeforePull` | boolean | `false` | Create backup before pulling files |
| `retentionDays` | number | `7` | Days to keep backups |
| `maxBackups` | number | `10` | Maximum number of backups to retain |
| `compressionLevel` | string | `"fast"` | Compression level: `"fast"`, `"normal"`, `"best"` |

#### Verification Settings

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `testConnectionBeforeDeploy` | boolean | `true` | Test SSH connection before deployment |
| `verifySiteAccessibility` | boolean | `true` | Verify site is accessible via HTTP |
| `checkDiskSpace` | boolean | `true` | Check available disk space |
| `requireConfirmation` | boolean | `true` | Require user confirmation before deployment |

## Local Configuration

Settings for the local development environment.

```json
{
  "local": {
    "paths": {
      "root": ".",
      "wpPath": "wp",
      "wpContent": "wp/wp-content",
      "backups": "backups",
      "logs": "logs",
      "scripts": "scripts"
    },
    "backup": {
      "enabled": true,
      "createBeforePull": true,
      "retentionDays": 7,
      "maxBackups": 10,
      "compressionLevel": "fast"
    }
  }
}
```

## Exclusions

Define patterns for files and directories to exclude from sync operations.

### Exclusion Categories

| Category | Description | Examples |
|----------|-------------|----------|
| `global` | Excluded from all operations | `.git`, `node_modules`, `.env` |
| `wpContent` | WordPress-specific exclusions | `wp-config.php`, `.htaccess` |
| `cache` | Cache directories | `cache/**`, `*.cache` |
| `uploads` | Upload directory exclusions | `uploads/cache/**`, `*.tmp` |
| `themes` | Theme-specific exclusions | `*/node_modules/**`, `*.map` |
| `plugins` | Plugin-specific exclusions | `*/tests/**`, `*.map` |

### Pattern Syntax

- `*` - Matches any characters except `/`
- `**` - Matches any characters including `/` (recursive)
- `*.ext` - Matches files with specific extension
- `dir/**` - Matches all files in directory recursively

### Examples

```json
{
  "exclusions": {
    "global": [
      ".git",
      "node_modules",
      "*.log"
    ],
    "themes": [
      "themes/*/node_modules/**",
      "themes/*/*.map"
    ]
  }
}
```

## Transfer Settings

Configure file transfer behavior.

```json
{
  "transfer": {
    "protocol": "scp",
    "compression": true,
    "retryAttempts": 3,
    "retryDelaySeconds": 5,
    "timeout": 300,
    "batchSize": 100,
    "parallelTransfers": 1,
    "preservePermissions": true,
    "verboseLogging": false
  }
}
```

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `protocol` | string | `"scp"` | Transfer protocol: `"scp"`, `"sftp"`, `"rsync"` |
| `compression` | boolean | `true` | Enable compression during transfer |
| `retryAttempts` | number | `3` | Number of retry attempts on failure |
| `retryDelaySeconds` | number | `5` | Delay between retry attempts |
| `timeout` | number | `300` | Transfer timeout in seconds |
| `batchSize` | number | `100` | Number of files per batch |
| `parallelTransfers` | number | `1` | Number of parallel transfers |
| `preservePermissions` | boolean | `true` | Preserve file permissions |
| `verboseLogging` | boolean | `false` | Enable verbose transfer logging |

## Safety Settings

Configure safety checks and file validation.

```json
{
  "safety": {
    "requireConfirmation": true,
    "dryRunByDefault": false,
    "backupBeforeDeploy": true,
    "verifyBeforeDeploy": true,
    "maxFileSizeMB": 100,
    "maxTotalSizeMB": 1000,
    "allowedFileExtensions": [".php", ".js", ".css"],
    "blockedFileExtensions": [".exe", ".sh", ".bat"]
  }
}
```

| Property | Type | Description |
|----------|------|-------------|
| `requireConfirmation` | boolean | Require user confirmation before deployment |
| `dryRunByDefault` | boolean | Run in dry-run mode by default |
| `backupBeforeDeploy` | boolean | Always create backup before deployment |
| `verifyBeforeDeploy` | boolean | Run verification checks before deployment |
| `maxFileSizeMB` | number | Maximum individual file size in MB |
| `maxTotalSizeMB` | number | Maximum total transfer size in MB |
| `allowedFileExtensions` | array | List of allowed file extensions |
| `blockedFileExtensions` | array | List of blocked file extensions |

## Logging Configuration

Configure deployment logging behavior.

```json
{
  "logging": {
    "enabled": true,
    "level": "INFO",
    "logDirectory": "logs",
    "logFilePrefix": "deployment",
    "logRotation": {
      "enabled": true,
      "maxSizeMB": 10,
      "maxFiles": 20
    },
    "includeTimestamps": true,
    "includeStackTraces": true,
    "logTransfers": true
  }
}
```

### Log Levels

- `DEBUG` - Detailed debugging information
- `INFO` - General informational messages
- `WARNING` - Warning messages
- `ERROR` - Error messages
- `CRITICAL` - Critical errors

## Database Configuration

Settings for database synchronization.

```json
{
  "database": {
    "sync": {
      "enabled": true,
      "backupBeforeImport": true,
      "searchReplace": true,
      "resetLocalAdminPassword": true
    },
    "searchReplace": {
      "production": {
        "from": "https://mgrnz.com",
        "to": "http://mgrnz.local"
      }
    },
    "backup": {
      "retentionDays": 7,
      "maxBackups": 10,
      "compressionEnabled": true
    }
  }
}
```

## Performance Settings

Optimize deployment performance.

```json
{
  "performance": {
    "compression": {
      "enabled": true,
      "level": 6,
      "algorithm": "gzip"
    },
    "optimization": {
      "skipUnchangedFiles": true,
      "useIncrementalSync": true,
      "calculateChecksums": false
    }
  }
}
```

## Hooks

Define scripts to run before/after deployment operations.

```json
{
  "hooks": {
    "preDeployment": {
      "enabled": false,
      "scripts": [
        "scripts/pre-deploy-checks.ps1"
      ]
    },
    "postDeployment": {
      "enabled": false,
      "scripts": [
        "scripts/clear-cache.ps1"
      ]
    }
  }
}
```

### Available Hooks

- `preDeployment` - Run before deployment starts
- `postDeployment` - Run after deployment completes
- `prePull` - Run before pulling files from remote
- `postPull` - Run after pulling files from remote

## Usage Examples

### Basic Deployment

```powershell
# Deploy to production using default settings
.\scripts\deploy.ps1 -Environment production
```

### Custom Configuration

```powershell
# Deploy with custom config file
.\scripts\deploy.ps1 -Environment production -ConfigFile "custom-config.json"
```

### Override Settings

```powershell
# Deploy without backup (overrides config)
.\scripts\deploy.ps1 -Environment production -SkipBackup
```

## Environment-Specific Overrides

You can create environment-specific configuration files:

- `deployment-config.production.json` - Production overrides
- `deployment-config.staging.json` - Staging overrides
- `deployment-config.local.json` - Local overrides (gitignored)

The scripts will merge these files with the base configuration, with more specific files taking precedence.

## Configuration Validation

The deployment scripts validate the configuration file on load. Common validation errors:

### Missing Required Fields

```
Error: Missing required field 'remotePath' in production environment
```

**Solution:** Add the missing field to your configuration.

### Invalid Values

```
Error: Port must be between 1 and 65535
```

**Solution:** Correct the invalid value.

### File Not Found

```
Error: Configuration file not found: deployment-config.json
```

**Solution:** Ensure the configuration file exists in the project root.

## Best Practices

### 1. Version Control

- Commit `deployment-config.json` to version control
- Add environment-specific overrides to `.gitignore`
- Document any custom settings in comments

### 2. Security

- Never commit credentials to the configuration file
- Use `.deploy-credentials.json` for sensitive data
- Keep backup retention reasonable (7-14 days)

### 3. Performance

- Enable compression for faster transfers
- Use `changedFilesOnly` for incremental deployments
- Exclude unnecessary files (node_modules, cache)

### 4. Safety

- Always enable backups for production
- Require confirmation for production deployments
- Test configuration changes in staging first

### 5. Maintenance

- Review and update exclusion patterns regularly
- Clean up old backups periodically
- Monitor log files for errors and warnings

## Troubleshooting

### Configuration Not Loading

**Problem:** Scripts don't recognize configuration changes

**Solution:**
1. Verify JSON syntax is valid
2. Check file is named `deployment-config.json`
3. Ensure file is in project root directory

### Exclusions Not Working

**Problem:** Excluded files are still being synced

**Solution:**
1. Check pattern syntax (use `**` for recursive)
2. Verify pattern matches file paths correctly
3. Test patterns with dry-run mode

### Backup Failures

**Problem:** Backups are not being created

**Solution:**
1. Check `backup.enabled` is `true`
2. Verify backup directory exists and is writable
3. Check available disk space

## Schema Validation

You can validate your configuration file against the JSON schema:

```powershell
# Using a JSON schema validator
npm install -g ajv-cli
ajv validate -s deployment-config.schema.json -d deployment-config.json
```

## Migration Guide

### From Script Parameters to Configuration File

**Before:**
```powershell
.\scripts\deploy.ps1 -Environment production -SkipBackup -ThemesOnly
```

**After:**
```json
{
  "environments": {
    "production": {
      "backup": {
        "enabled": false
      }
    }
  }
}
```

```powershell
.\scripts\deploy.ps1 -Environment production -ThemesOnly
```

## Support

For issues or questions about the deployment configuration:

1. Check this documentation
2. Review example configurations in `deployment-config.json`
3. Run scripts with `-Verbose` flag for detailed output
4. Check log files in `logs/` directory

## Related Documentation

- [Deployment Scripts README](scripts/README.md)
- [Environment Setup Guide](ENVIRONMENT_SETUP.md)
- [Deployment Credentials](scripts/DeploymentCredentials.psm1)
- [Logging Documentation](scripts/LOGGING.md)
