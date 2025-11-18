#Requires -Version 5.1
<#
.SYNOPSIS
    Pull production database to local environment
    
.DESCRIPTION
    This script exports the production WordPress database via SSH/WP-CLI,
    downloads it to the local machine, imports it into the local database,
    performs URL search-replace, and resets admin credentials for local access.
    
.PARAMETER SkipBackup
    Skip creating a backup of the local database before import
    
.PARAMETER LocalAdminPassword
    Password to set for the local admin user (default: admin)
    
.PARAMETER ProductionHost
    Production server hostname (default: from .env.production)
    
.PARAMETER ProductionUser
    SSH username for production server
    
.PARAMETER ProductionPath
    Path to WordPress installation on production server
    
.EXAMPLE
    .\scripts\db-pull.ps1
    
.EXAMPLE
    .\scripts\db-pull.ps1 -SkipBackup -LocalAdminPassword "mypassword"
    
.NOTES
    Requirements:
    - SSH access to production server
    - WP-CLI installed on production server
    - WP-CLI installed locally
    - .env.local and .env.production files configured
#>

param(
    [switch]$SkipBackup,
    [string]$LocalAdminPassword = "admin",
    [string]$ProductionHost = "",
    [string]$ProductionUser = "",
    [string]$ProductionPath = ""
)

# ============================================
# Configuration
# ============================================

$ErrorActionPreference = "Stop"
$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$RootDir = Split-Path -Parent $ScriptDir
$BackupDir = Join-Path $RootDir "backups"
$TempDir = Join-Path $RootDir "temp"
$LogDir = Join-Path $RootDir "logs"
$Timestamp = Get-Date -Format "yyyyMMdd-HHmmss"
$LogFile = Join-Path $LogDir "db-pull-$Timestamp.log"

# Import enhanced logging module
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize enhanced logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "db-pull-$Timestamp.log" -LogLevel "INFO"

# Error tracking
$script:HasErrors = $false
$script:ErrorDetails = @()
$script:LocalBackupFile = $null
$script:ImportStarted = $false
$script:OperationStartTime = Get-Date

# ============================================
# Helper Functions
# ============================================

function Write-Log {
    param(
        [string]$Message,
        [string]$Level = "INFO"
    )
    
    # Use enhanced logging module
    Write-LogEntry -Message $Message -Level $Level
}

function Write-Step {
    param([string]$Message)
    Write-Host "`n==> $Message" -ForegroundColor Cyan
    Write-Log $Message "STEP"
}

function Write-Success {
    param([string]$Message)
    Write-Host "    ✓ $Message" -ForegroundColor Green
    Write-Log $Message "SUCCESS"
}

function Write-Error-Message {
    param([string]$Message)
    Write-Host "    ✗ $Message" -ForegroundColor Red
    Write-Log $Message "ERROR"
    $script:HasErrors = $true
    $script:ErrorDetails += $Message
}

function Write-Warning-Message {
    param([string]$Message)
    Write-Host "    ! $Message" -ForegroundColor Yellow
    Write-Log $Message "WARNING"
}

function Write-Critical-Error {
    param(
        [string]$Message,
        [string]$Details = "",
        [string]$Recovery = ""
    )
    
    Write-Host "`n╔════════════════════════════════════════════════════════════╗" -ForegroundColor Red
    Write-Host "║                    CRITICAL ERROR                          ║" -ForegroundColor Red
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Red
    Write-Host "`n$Message" -ForegroundColor Red
    
    if ($Details) {
        Write-Host "`nDetails:" -ForegroundColor Yellow
        Write-Host $Details -ForegroundColor Gray
    }
    
    if ($Recovery) {
        Write-Host "`nRecovery:" -ForegroundColor Cyan
        Write-Host $Recovery -ForegroundColor White
    }
    
    Write-Log "CRITICAL ERROR: $Message | Details: $Details" "CRITICAL"
    $script:HasErrors = $true
    $script:ErrorDetails += "CRITICAL: $Message"
}

function Invoke-Rollback {
    param([string]$Reason)
    
    Write-Host "`n╔════════════════════════════════════════════════════════════╗" -ForegroundColor Yellow
    Write-Host "║                    INITIATING ROLLBACK                     ║" -ForegroundColor Yellow
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Yellow
    
    Write-Log "Initiating rollback: $Reason" "ROLLBACK"
    Write-Host "`nReason: $Reason" -ForegroundColor Yellow
    
    if ($script:LocalBackupFile -and (Test-Path $script:LocalBackupFile)) {
        Write-Step "Restoring local database from backup..."
        
        try {
            $wpPath = Join-Path $RootDir "wp"
            if (-not (Test-Path $wpPath)) {
                $wpPath = $RootDir
            }
            
            Push-Location $wpPath
            
            # Reset database
            Write-Host "    Resetting database..." -ForegroundColor Gray
            wp db reset --yes 2>&1 | Out-Null
            
            # Import backup
            Write-Host "    Importing backup..." -ForegroundColor Gray
            $importResult = wp db import $script:LocalBackupFile 2>&1
            
            if ($LASTEXITCODE -eq 0) {
                Write-Success "Local database restored successfully"
                Write-Log "Database restored from backup: $script:LocalBackupFile" "ROLLBACK"
                Pop-Location
                return $true
            } else {
                Write-Error-Message "Failed to restore database from backup"
                Write-Host "    Error: $importResult" -ForegroundColor Red
                Write-Log "Rollback failed: $importResult" "ERROR"
                Pop-Location
                return $false
            }
        } catch {
            Write-Error-Message "Exception during rollback: $_"
            Write-Log "Rollback exception: $_" "ERROR"
            if (Test-Path variable:wpPath) {
                Pop-Location
            }
            return $false
        }
    } else {
        Write-Warning-Message "No backup file available for rollback"
        Write-Host "    Your local database may be in an inconsistent state." -ForegroundColor Yellow
        Write-Host "    You may need to manually restore from a previous backup." -ForegroundColor Yellow
        Write-Log "No backup available for rollback" "WARNING"
        return $false
    }
}

function Test-DatabaseIntegrity {
    param([string]$WpPath)
    
    Write-Log "Testing database integrity" "INFO"
    
    try {
        Push-Location $WpPath
        
        # Check if database is accessible
        $dbCheck = wp db check 2>&1
        $dbCheckExitCode = $LASTEXITCODE
        
        # Count tables
        $tableCount = wp db query 'SHOW TABLES;' --skip-column-names 2>&1 | Measure-Object -Line | Select-Object -ExpandProperty Lines
        
        # Check for core WordPress tables
        $coreTablesCheck = wp db query 'SHOW TABLES LIKE "wp_%";' --skip-column-names 2>&1 | Measure-Object -Line | Select-Object -ExpandProperty Lines
        
        Pop-Location
        
        $integrity = @{
            IsAccessible = ($dbCheckExitCode -eq 0)
            TableCount = $tableCount
            HasCoreTables = ($coreTablesCheck -gt 0)
            CheckOutput = $dbCheck
        }
        
        Write-Log "Database integrity check: Accessible=$($integrity.IsAccessible), Tables=$($integrity.TableCount), CoreTables=$($integrity.HasCoreTables)" "INFO"
        
        return $integrity
    } catch {
        Write-Log "Database integrity check failed: $_" "ERROR"
        Pop-Location
        return @{
            IsAccessible = $false
            TableCount = 0
            HasCoreTables = $false
            CheckOutput = $_.Exception.Message
        }
    }
}

function Load-EnvFile {
    param([string]$FilePath)
    
    if (-not (Test-Path $FilePath)) {
        Write-Error-Message "Environment file not found: $FilePath"
        return $false
    }
    
    $envVars = @{}
    Get-Content $FilePath | ForEach-Object {
        $line = $_.Trim()
        # Skip comments and empty lines
        if ($line -and -not $line.StartsWith('#')) {
            if ($line -match '^([^=]+)=(.*)$') {
                $key = $matches[1].Trim()
                $value = $matches[2].Trim()
                # Remove quotes if present
                $value = $value -replace '^["`'']|["`'']$', ''
                $envVars[$key] = $value
            }
        }
    }
    
    return $envVars
}

function Test-Command {
    param([string]$Command)
    
    try {
        $null = Get-Command $Command -ErrorAction Stop
        return $true
    } catch {
        return $false
    }
}

# ============================================
# Main Script
# ============================================

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ Database Pull Script                          ║
║        Production → Local                                  ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Cyan

# ============================================
# Step 1: Pre-flight Checks
# ============================================

Write-Step "Running pre-flight checks..."

# Check if WP-CLI is installed locally
if (-not (Test-Command "wp")) {
    Write-Error-Message "WP-CLI is not installed or not in PATH"
    Write-Host "`nPlease install WP-CLI: https://wp-cli.org/#installing" -ForegroundColor Yellow
    exit 1
}
Write-Success "WP-CLI is installed"

# Check if SSH is available
if (-not (Test-Command "ssh")) {
    Write-Error-Message "SSH is not installed or not in PATH"
    Write-Host "`nPlease install OpenSSH or Git Bash" -ForegroundColor Yellow
    exit 1
}
Write-Success "SSH is available"

# Load environment files
Write-Step "Loading environment configuration..."

$localEnvPath = Join-Path $RootDir ".env.local"
$prodEnvPath = Join-Path $RootDir ".env.production"

$localEnv = Load-EnvFile $localEnvPath
if (-not $localEnv) {
    Write-Error-Message "Failed to load .env.local"
    exit 1
}
Write-Success "Loaded .env.local"

$prodEnv = Load-EnvFile $prodEnvPath
if (-not $prodEnv) {
    Write-Error-Message "Failed to load .env.production"
    exit 1
}
Write-Success "Loaded .env.production"

# Extract configuration
$localDbName = $localEnv['DB_NAME']
$localDbUser = $localEnv['DB_USER']
$localDbPassword = $localEnv['DB_PASSWORD']
$localDbHost = $localEnv['DB_HOST']
$localUrl = $localEnv['WP_HOME']

$prodUrl = $prodEnv['WP_HOME']

# Get production server details
if (-not $ProductionHost) {
    $ProductionHost = Read-Host "Enter production server hostname (e.g., mgrnz.com or IP address)"
}

if (-not $ProductionUser) {
    $ProductionUser = Read-Host "Enter SSH username for production server"
}

if (-not $ProductionPath) {
    $ProductionPath = Read-Host "Enter path to WordPress on production server (e.g., /home/user/public_html)"
}

Write-Success "Configuration loaded"
Write-Host "    Local URL: $localUrl" -ForegroundColor Gray
Write-Host "    Production URL: $prodUrl" -ForegroundColor Gray
Write-Host "    Production Host: $ProductionHost" -ForegroundColor Gray

# ============================================
# Step 2: Create Directories
# ============================================

Write-Step "Preparing directories..."

if (-not (Test-Path $BackupDir)) {
    New-Item -ItemType Directory -Path $BackupDir -Force | Out-Null
}
Write-Success "Backup directory ready: $BackupDir"

if (-not (Test-Path $TempDir)) {
    New-Item -ItemType Directory -Path $TempDir -Force | Out-Null
}
Write-Success "Temp directory ready: $TempDir"

# ============================================
# Step 3: Backup Local Database
# ============================================

if (-not $SkipBackup) {
    Write-Step "Backing up local database..."
    
    $script:LocalBackupFile = Join-Path $BackupDir "local-backup-$Timestamp.sql"
    
    try {
        $wpPath = Join-Path $RootDir "wp"
        if (-not (Test-Path $wpPath)) {
            $wpPath = $RootDir
        }
        
        # Check database integrity before backup
        $preBackupIntegrity = Test-DatabaseIntegrity $wpPath
        
        if (-not $preBackupIntegrity.IsAccessible) {
            Write-Warning-Message "Local database is not accessible or may be empty"
            Write-Host "    This is normal for a fresh installation" -ForegroundColor Gray
        } else {
            Write-Host "    Current database has $($preBackupIntegrity.TableCount) tables" -ForegroundColor Gray
        }
        
        Push-Location $wpPath
        $backupOutput = wp db export $script:LocalBackupFile 2>&1
        $backupExitCode = $LASTEXITCODE
        Pop-Location
        
        if ($backupExitCode -eq 0 -and (Test-Path $script:LocalBackupFile)) {
            $fileSize = (Get-Item $script:LocalBackupFile).Length / 1MB
            Write-Success "Local database backed up: $script:LocalBackupFile ($([math]::Round($fileSize, 2)) MB)"
        } else {
            Write-Warning-Message "Backup file not created"
            Write-Host "    Output: $backupOutput" -ForegroundColor Gray
            Write-Host "    Continuing without backup (risky)..." -ForegroundColor Yellow
            $script:LocalBackupFile = $null
        }
    } catch {
        Write-Warning-Message "Failed to backup local database: $_"
        Write-Host "    Continuing without backup (risky)..." -ForegroundColor Yellow
        $script:LocalBackupFile = $null
        if (Test-Path variable:wpPath) {
            Pop-Location
        }
    }
} else {
    Write-Warning-Message "Skipping local database backup (--SkipBackup flag used)"
    Write-Host "    ⚠️  No rollback will be possible if import fails!" -ForegroundColor Red
}

# ============================================
# Step 4: Export Production Database
# ============================================

Write-Step "Exporting production database via SSH..."

$prodExportFile = "mgrnz-prod-export-$Timestamp.sql"
$prodExportPath = "/tmp/$prodExportFile"
$localDownloadPath = Join-Path $TempDir $prodExportFile

Write-Host "    Connecting to $ProductionUser@$ProductionHost..." -ForegroundColor Gray

try {
    # Export database on production server
    $sshCommand = "cd $ProductionPath && wp db export $prodExportPath --add-drop-table"
    Write-Host "    Running: $sshCommand" -ForegroundColor Gray
    
    $result = ssh "$ProductionUser@$ProductionHost" $sshCommand 2>&1
    
    if ($LASTEXITCODE -ne 0) {
        Write-Error-Message "Failed to export production database"
        Write-Host "    SSH Output: $result" -ForegroundColor Red
        exit 1
    }
    
    Write-Success "Production database exported to $prodExportPath"
} catch {
    Write-Error-Message "SSH connection failed: $_"
    exit 1
}

# ============================================
# Step 5: Download Database Export
# ============================================

Write-Step "Downloading database export from production..."

try {
    scp "$ProductionUser@${ProductionHost}:$prodExportPath" $localDownloadPath 2>&1 | Out-Null
    
    if ($LASTEXITCODE -ne 0) {
        Write-Error-Message "Failed to download database export"
        exit 1
    }
    
    if (Test-Path $localDownloadPath) {
        $fileSize = (Get-Item $localDownloadPath).Length / 1MB
        Write-Success "Database downloaded: $localDownloadPath ($([math]::Round($fileSize, 2)) MB)"
    } else {
        Write-Error-Message "Downloaded file not found"
        exit 1
    }
} catch {
    Write-Error-Message "SCP download failed: $_"
    exit 1
}

# Clean up remote file
Write-Host "    Cleaning up remote file..." -ForegroundColor Gray
ssh "$ProductionUser@$ProductionHost" "rm -f $prodExportPath" 2>&1 | Out-Null

# ============================================
# Step 6: Import Database Locally
# ============================================

Write-Step "Importing database into local environment..."

$script:ImportStarted = $true

try {
    $wpPath = Join-Path $RootDir "wp"
    if (-not (Test-Path $wpPath)) {
        $wpPath = $RootDir
    }
    
    Push-Location $wpPath
    
    # Validate SQL file before import
    Write-Host "    Validating SQL file..." -ForegroundColor Gray
    $sqlContent = Get-Content $localDownloadPath -Raw -ErrorAction Stop
    
    if ($sqlContent.Length -eq 0) {
        Write-Critical-Error `
            -Message "Downloaded SQL file is empty" `
            -Details "File: $localDownloadPath" `
            -Recovery "Check production database export and network connection"
        
        Pop-Location
        
        if ($script:LocalBackupFile) {
            Invoke-Rollback "Empty SQL file downloaded"
        }
        
        exit 1
    }
    
    # Check for SQL syntax errors (basic validation)
    if ($sqlContent -notmatch "CREATE TABLE" -and $sqlContent -notmatch "INSERT INTO") {
        Write-Warning-Message "SQL file may not contain valid WordPress data"
        Write-Host "    File size: $([math]::Round((Get-Item $localDownloadPath).Length / 1KB, 2)) KB" -ForegroundColor Gray
    }
    
    Write-Success "SQL file validation passed"
    
    # Drop all tables first (clean import)
    Write-Host "    Dropping existing tables..." -ForegroundColor Gray
    $resetOutput = wp db reset --yes 2>&1
    $resetExitCode = $LASTEXITCODE
    
    if ($resetExitCode -ne 0) {
        Write-Warning-Message "Database reset had issues: $resetOutput"
        Write-Host "    Attempting to continue..." -ForegroundColor Yellow
    }
    
    # Import the database
    Write-Host "    Importing database (this may take a moment)..." -ForegroundColor Gray
    $importOutput = wp db import $localDownloadPath 2>&1
    $importExitCode = $LASTEXITCODE
    
    if ($importExitCode -ne 0) {
        Write-Critical-Error `
            -Message "Database import failed" `
            -Details "Exit Code: $importExitCode`nOutput: $importOutput" `
            -Recovery "Attempting to restore from backup..."
        
        Pop-Location
        
        # Attempt rollback
        $rollbackSuccess = Invoke-Rollback "Database import failed with exit code $importExitCode"
        
        if ($rollbackSuccess) {
            Write-Host "`n✓ Local database has been restored to its previous state" -ForegroundColor Green
            exit 1
        } else {
            Write-Host "`n✗ Rollback failed - manual intervention required" -ForegroundColor Red
            Write-Host "`nManual recovery steps:" -ForegroundColor Yellow
            Write-Host "  1. Check if backup exists: $script:LocalBackupFile" -ForegroundColor White
            Write-Host "  2. Manually import: wp db import $script:LocalBackupFile" -ForegroundColor White
            exit 1
        }
    }
    
    Pop-Location
    Write-Success "Database imported successfully"
    
    # Verify import integrity
    Write-Host "    Verifying import integrity..." -ForegroundColor Gray
    $postImportIntegrity = Test-DatabaseIntegrity $wpPath
    
    if (-not $postImportIntegrity.IsAccessible) {
        Write-Critical-Error `
            -Message "Database is not accessible after import" `
            -Details $postImportIntegrity.CheckOutput `
            -Recovery "Attempting to restore from backup..."
        
        $rollbackSuccess = Invoke-Rollback "Database not accessible after import"
        
        if ($rollbackSuccess) {
            Write-Host "`n✓ Local database has been restored to its previous state" -ForegroundColor Green
        }
        
        exit 1
    }
    
    if ($postImportIntegrity.TableCount -eq 0) {
        Write-Critical-Error `
            -Message "Database import resulted in zero tables" `
            -Details "Expected WordPress tables but found none" `
            -Recovery "Attempting to restore from backup..."
        
        $rollbackSuccess = Invoke-Rollback "No tables found after import"
        
        if ($rollbackSuccess) {
            Write-Host "`n✓ Local database has been restored to its previous state" -ForegroundColor Green
        }
        
        exit 1
    }
    
    if (-not $postImportIntegrity.HasCoreTables) {
        Write-Warning-Message "WordPress core tables not detected"
        Write-Host "    This may indicate an incomplete import" -ForegroundColor Yellow
    } else {
        $tableCountMsg = $postImportIntegrity.TableCount
        Write-Success "Import integrity verified ($tableCountMsg tables)"
    }
    
} catch {
    Write-Critical-Error `
        -Message "Exception during database import" `
        -Details $_.Exception.Message `
        -Recovery "Attempting to restore from backup..."
    
    # Log exception with stack trace
    Write-LogEntry -Message "Critical exception during database import" -Level "CRITICAL" -Exception $_.Exception
    
    if (Test-Path variable:wpPath) {
        Pop-Location
    }
    
    # Attempt rollback
    if ($script:ImportStarted) {
        $rollbackSuccess = Invoke-Rollback "Exception during import: $($_.Exception.Message)"
        
        if ($rollbackSuccess) {
            Write-Host "`n✓ Local database has been restored to its previous state" -ForegroundColor Green
        }
    }
    
    exit 1
}

# ============================================
# Step 7: Search-Replace URLs
# ============================================

Write-Step "Replacing URLs (${prodUrl} → ${localUrl})..."

try {
    Push-Location $wpPath
    
    $replaceResult = wp search-replace $prodUrl $localUrl --all-tables --report-changed-only 2>&1
    
    if ($LASTEXITCODE -eq 0) {
        Write-Success "URLs replaced successfully"
        if ($replaceResult) {
            Write-Host "    $replaceResult" -ForegroundColor Gray
        }
    } else {
        Write-Warning-Message "URL replacement may have had issues, but continuing..."
    }
    
    Pop-Location
} catch {
    Write-Warning-Message "Failed to replace URLs: $_"
    Write-Host "    You may need to manually update URLs" -ForegroundColor Yellow
    Pop-Location
}

# ============================================
# Step 8: Reset Admin Credentials
# ============================================

Write-Step "Resetting admin credentials for local access..."

try {
    Push-Location $wpPath
    
    # Get the first admin user
    $adminUser = wp user list --role=administrator --field=user_login --format=csv 2>&1 | Select-Object -First 1
    
    if ($adminUser) {
        Write-Host "    Found admin user: $adminUser" -ForegroundColor Gray
        
        # Update password
        wp user update $adminUser --user_pass=$LocalAdminPassword 2>&1 | Out-Null
        
        if ($LASTEXITCODE -eq 0) {
            Write-Success "Admin password reset"
            Write-Host "    Username: $adminUser" -ForegroundColor Green
            Write-Host "    Password: $LocalAdminPassword" -ForegroundColor Green
        } else {
            Write-Warning-Message "Failed to reset admin password"
        }
    } else {
        Write-Warning-Message "No admin user found"
    }
    
    Pop-Location
} catch {
    Write-Warning-Message "Failed to reset admin credentials: $_"
    Pop-Location
}

# ============================================
# Step 9: Cleanup
# ============================================

Write-Step "Cleaning up temporary files..."

try {
    if (Test-Path $localDownloadPath) {
        Remove-Item $localDownloadPath -Force
        Write-Success "Temporary files removed"
    }
} catch {
    Write-Warning-Message "Failed to clean up temporary files: $_"
}

# ============================================
# Step 10: Verification
# ============================================

Write-Step "Verifying database..."

try {
    Push-Location $wpPath
    
    $tableCount = wp db query "SHOW TABLES;" --skip-column-names 2>&1 | Measure-Object -Line | Select-Object -ExpandProperty Lines
    
    if ($tableCount -gt 0) {
        Write-Success "Database verification passed ($tableCount tables found)"
    } else {
        Write-Warning-Message "Database may be empty"
    }
    
    Pop-Location
} catch {
    Write-Warning-Message "Could not verify database"
    Pop-Location
}

# ============================================
# Summary
# ============================================

if ($script:HasErrors) {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Database Pull Completed with Errors                 ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Yellow
    
    Write-Host "`nErrors encountered:" -ForegroundColor Red
    foreach ($error in $script:ErrorDetails) {
        Write-Host "  • $error" -ForegroundColor Red
    }
    
    Write-Host "`nLog file:" -ForegroundColor Cyan
    Write-Host "  $LogFile" -ForegroundColor Gray
    
} else {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Database Pull Complete!                             ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Green

    Write-Host "Summary:" -ForegroundColor Cyan
    Write-Host "  • Production database exported and downloaded" -ForegroundColor White
    Write-Host "  • Local database updated with production data" -ForegroundColor White
    Write-Host "  • URLs replaced: $prodUrl → $localUrl" -ForegroundColor White
    Write-Host "  • Admin credentials reset for local access" -ForegroundColor White

    if (-not $SkipBackup -and $script:LocalBackupFile) {
        Write-Host "`nLocal backup saved to:" -ForegroundColor Cyan
        Write-Host "  $script:LocalBackupFile" -ForegroundColor Gray
    }

    Write-Host "`nYou can now access your local site at:" -ForegroundColor Cyan
    Write-Host "  $localUrl" -ForegroundColor White
    Write-Host "  Username: admin (or first admin user)" -ForegroundColor White
    Write-Host "  Password: $LocalAdminPassword" -ForegroundColor White
}

Write-Host "`nLog file:" -ForegroundColor Cyan
Write-Host "  $LogFile" -ForegroundColor Gray

Write-Host "`n"

Write-Log "Database pull script completed. HasErrors: $script:HasErrors" "INFO"

# Log operation end with summary
$operationDuration = (Get-Date) - $script:OperationStartTime
Write-OperationEnd -OperationName "Database Pull" -Success (-not $script:HasErrors) -DurationSeconds ($operationDuration.TotalSeconds) -Summary @{
    LocalBackupCreated = ($null -ne $script:LocalBackupFile)
    ImportStarted = $script:ImportStarted
    ErrorCount = $script:ErrorDetails.Count
}
