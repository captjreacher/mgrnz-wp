#Requires -Version 5.1
<#
.SYNOPSIS
    Push local database to production environment
    
.DESCRIPTION
    This script exports the local WordPress database, performs URL search-replace
    for production, creates a backup of the production database, and imports the
    local database to production. Includes safety confirmation prompts.
    
    WARNING: This operation will overwrite the production database!
    Use with extreme caution and only when you're certain about the changes.
    
.PARAMETER SkipBackup
    Skip creating a backup of the production database before import (NOT RECOMMENDED)
    
.PARAMETER Force
    Skip confirmation prompts (use with caution)
    
.PARAMETER ProductionHost
    Production server hostname (default: from .env.production)
    
.PARAMETER ProductionUser
    SSH username for production server
    
.PARAMETER ProductionPath
    Path to WordPress installation on production server
    
.EXAMPLE
    .\scripts\db-push.ps1
    
.EXAMPLE
    .\scripts\db-push.ps1 -Force
    
.NOTES
    Requirements:
    - SSH access to production server
    - WP-CLI installed on production server
    - WP-CLI installed locally
    - .env.local and .env.production files configured
    
    IMPORTANT: This script will OVERWRITE the production database!
    Always ensure you have a recent backup before proceeding.
#>

param(
    [switch]$SkipBackup,
    [switch]$Force,
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
$LogFile = Join-Path $LogDir "db-push-$Timestamp.log"

# Import enhanced logging module
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize enhanced logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "db-push-$Timestamp.log" -LogLevel "INFO"

# Error tracking
$script:HasErrors = $false
$script:ErrorDetails = @()
$script:ProductionBackupPath = $null
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

function Write-Danger {
    param([string]$Message)
    Write-Host "`n⚠️  $Message" -ForegroundColor Red -BackgroundColor Black
    Write-Log $Message "DANGER"
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

function Invoke-ProductionRollback {
    param(
        [string]$Reason,
        [string]$BackupPath
    )
    
    Write-Host "`n╔════════════════════════════════════════════════════════════╗" -ForegroundColor Yellow
    Write-Host "║              INITIATING PRODUCTION ROLLBACK                ║" -ForegroundColor Yellow
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Yellow
    
    Write-Log "Initiating production rollback: $Reason" "ROLLBACK"
    Write-Host "`nReason: $Reason" -ForegroundColor Yellow
    
    if (-not $BackupPath) {
        Write-Error-Message "No backup path provided for rollback"
        return $false
    }
    
    Write-Step "Restoring production database from backup..."
    Write-Host "    Backup: $BackupPath" -ForegroundColor Gray
    
    try {
        # Verify backup exists on production
        $backupExists = ssh "$ProductionUser@$ProductionHost" "test -f $BackupPath && echo 'exists'" 2>&1
        
        if ($backupExists -notmatch "exists") {
            Write-Error-Message "Backup file not found on production server: $BackupPath"
            Write-Log "Rollback failed: Backup not found at $BackupPath" "ERROR"
            return $false
        }
        
        Write-Host "    Importing backup to production..." -ForegroundColor Gray
        $restoreResult = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp db import $BackupPath" 2>&1
        
        if ($LASTEXITCODE -eq 0) {
            Write-Success "Production database restored successfully"
            Write-Log "Production database restored from backup: $BackupPath" "ROLLBACK"
            
            # Flush cache
            Write-Host "    Flushing cache..." -ForegroundColor Gray
            ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp cache flush" 2>&1 | Out-Null
            
            return $true
        } else {
            Write-Error-Message "Failed to restore production database from backup"
            Write-Host "    Error: $restoreResult" -ForegroundColor Red
            Write-Log "Rollback failed: $restoreResult" "ERROR"
            return $false
        }
    } catch {
        Write-Error-Message "Exception during production rollback: $_"
        Write-Log "Rollback exception: $_" "ERROR"
        return $false
    }
}

function Test-ProductionDatabaseIntegrity {
    Write-Log "Testing production database integrity" "INFO"
    
    try {
        # Check if database is accessible
        $dbCheck = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp db check" 2>&1
        $dbCheckExitCode = $LASTEXITCODE
        
        # Count tables
        $tableCount = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp db query 'SHOW TABLES;' --skip-column-names | wc -l" 2>&1
        
        # Check for core WordPress tables
        $coreTablesCheck = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp db query \"SHOW TABLES LIKE 'wp_%';\" --skip-column-names | wc -l" 2>&1
        
        $integrity = @{
            IsAccessible = ($dbCheckExitCode -eq 0)
            TableCount = [int]$tableCount
            HasCoreTables = ([int]$coreTablesCheck -gt 0)
            CheckOutput = $dbCheck
        }
        
        Write-Log "Production database integrity: Accessible=$($integrity.IsAccessible), Tables=$($integrity.TableCount), CoreTables=$($integrity.HasCoreTables)" "INFO"
        
        return $integrity
    } catch {
        Write-Log "Production database integrity check failed: $_" "ERROR"
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
                $value = $value -replace '^["'']|["'']$', ''
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

function Confirm-Action {
    param(
        [string]$Message,
        [string]$ConfirmText = "yes"
    )
    
    if ($Force) {
        return $true
    }
    
    Write-Host "`n$Message" -ForegroundColor Yellow
    $response = Read-Host "Type '$ConfirmText' to continue"
    
    return ($response -eq $ConfirmText)
}

# ============================================
# Main Script
# ============================================

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ Database Push Script                          ║
║        Local → Production                                  ║
║                                                            ║
║        ⚠️  WARNING: THIS WILL OVERWRITE PRODUCTION! ⚠️      ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Red

Write-Danger "This script will REPLACE the production database with your local database!"
Write-Danger "Make sure you understand the implications before proceeding."

if (-not $Force) {
    Write-Host "`nPress Ctrl+C now to cancel, or" -ForegroundColor Yellow
    Read-Host "Press Enter to continue"
}

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
# Step 3: Test Production Connection
# ============================================

Write-Step "Testing production server connection..."

try {
    $testResult = ssh -o ConnectTimeout=10 "$ProductionUser@$ProductionHost" "echo 'Connection successful'" 2>&1
    
    if ($LASTEXITCODE -ne 0) {
        Write-Error-Message "Cannot connect to production server"
        Write-Host "    Error: $testResult" -ForegroundColor Red
        exit 1
    }
    
    Write-Success "Production server is accessible"
} catch {
    Write-Error-Message "SSH connection test failed: $_"
    exit 1
}

# ============================================
# Step 4: Verify Production WordPress
# ============================================

Write-Step "Verifying production WordPress installation..."

try {
    $wpCheck = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp core version" 2>&1
    
    if ($LASTEXITCODE -ne 0) {
        Write-Error-Message "Cannot access WordPress on production server"
        Write-Host "    Error: $wpCheck" -ForegroundColor Red
        Write-Host "`nPlease verify:" -ForegroundColor Yellow
        Write-Host "  1. WP-CLI is installed on production server" -ForegroundColor Yellow
        Write-Host "  2. WordPress path is correct: $ProductionPath" -ForegroundColor Yellow
        exit 1
    }
    
    Write-Success "Production WordPress found (version: $wpCheck)"
} catch {
    Write-Error-Message "Failed to verify production WordPress: $_"
    exit 1
}

# ============================================
# Step 5: Export Local Database
# ============================================

Write-Step "Exporting local database..."

$localExportFile = Join-Path $TempDir "local-export-$Timestamp.sql"

try {
    $wpPath = Join-Path $RootDir "wp"
    if (-not (Test-Path $wpPath)) {
        $wpPath = $RootDir
    }
    
    Push-Location $wpPath
    wp db export $localExportFile --add-drop-table 2>&1 | Out-Null
    Pop-Location
    
    if (Test-Path $localExportFile) {
        $fileSize = (Get-Item $localExportFile).Length / 1MB
        Write-Success "Local database exported: $localExportFile ($([math]::Round($fileSize, 2)) MB)"
    } else {
        Write-Error-Message "Export file not created"
        exit 1
    }
} catch {
    Write-Error-Message "Failed to export local database: $_"
    if (Test-Path variable:wpPath) {
        Pop-Location
    }
    exit 1
}

# ============================================
# Step 6: Search-Replace URLs for Production
# ============================================

Write-Step "Preparing database for production (${localUrl} → ${prodUrl})..."

$prodReadyFile = Join-Path $TempDir "prod-ready-$Timestamp.sql"

try {
    # Read the SQL file
    $sqlContent = Get-Content $localExportFile -Raw
    
    # Replace URLs
    $sqlContent = $sqlContent -replace [regex]::Escape($localUrl), $prodUrl
    
    # Save to new file
    $sqlContent | Set-Content $prodReadyFile -Encoding UTF8
    
    if (Test-Path $prodReadyFile) {
        Write-Success "Database prepared for production"
    } else {
        Write-Error-Message "Failed to create production-ready database file"
        exit 1
    }
} catch {
    Write-Error-Message "Failed to prepare database for production: $_"
    exit 1
}

# ============================================
# Step 7: Display Summary and Confirm
# ============================================

Write-Step "Database Push Summary"

Write-Host "`n  Source:" -ForegroundColor Cyan
Write-Host "    • Local database from: $localUrl" -ForegroundColor White
Write-Host "    • Export size: $([math]::Round((Get-Item $localExportFile).Length / 1MB, 2)) MB" -ForegroundColor White

Write-Host "`n  Destination:" -ForegroundColor Cyan
Write-Host "    • Production server: $ProductionHost" -ForegroundColor White
Write-Host "    • Production URL: $prodUrl" -ForegroundColor White
Write-Host "    • WordPress path: $ProductionPath" -ForegroundColor White

Write-Host "`n  Actions:" -ForegroundColor Cyan
if (-not $SkipBackup) {
    Write-Host "    • Create production database backup" -ForegroundColor White
}
Write-Host "    • Upload local database to production" -ForegroundColor White
Write-Host "    • Import database (WILL OVERWRITE PRODUCTION)" -ForegroundColor Red

Write-Danger "THIS WILL REPLACE ALL PRODUCTION DATABASE CONTENT!"

if (-not (Confirm-Action "Are you absolutely sure you want to proceed?" "yes")) {
    Write-Host "`nOperation cancelled by user." -ForegroundColor Yellow
    
    # Cleanup
    if (Test-Path $localExportFile) { Remove-Item $localExportFile -Force }
    if (Test-Path $prodReadyFile) { Remove-Item $prodReadyFile -Force }
    
    exit 0
}

# ============================================
# Step 8: Backup Production Database
# ============================================

if (-not $SkipBackup) {
    Write-Step "Creating production database backup..."
    
    $prodBackupFile = "prod-backup-$Timestamp.sql"
    $script:ProductionBackupPath = "$ProductionPath/backups/$prodBackupFile"
    
    try {
        # Check production database integrity before backup
        $preBackupIntegrity = Test-ProductionDatabaseIntegrity
        
        if (-not $preBackupIntegrity.IsAccessible) {
            Write-Warning-Message "Production database accessibility check failed"
            Write-Host "    This may indicate a problem with the production database" -ForegroundColor Yellow
            
            if (-not (Confirm-Action "Continue with backup attempt?" "yes")) {
                Write-Host "`nOperation cancelled." -ForegroundColor Yellow
                exit 0
            }
        } else {
            Write-Host "    Production database has $($preBackupIntegrity.TableCount) tables" -ForegroundColor Gray
        }
        
        # Create backups directory on production
        ssh "$ProductionUser@$ProductionHost" "mkdir -p $ProductionPath/backups" 2>&1 | Out-Null
        
        # Export production database
        Write-Host "    Exporting production database..." -ForegroundColor Gray
        $backupResult = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp db export backups/$prodBackupFile --add-drop-table" 2>&1
        $backupExitCode = $LASTEXITCODE
        
        if ($backupExitCode -ne 0) {
            Write-Critical-Error `
                -Message "Failed to backup production database" `
                -Details "Exit Code: $backupExitCode`nOutput: $backupResult" `
                -Recovery "Cannot proceed without a backup"
            
            $script:ProductionBackupPath = $null
            
            if (-not (Confirm-Action "Continue without backup? (NOT RECOMMENDED)" "yes")) {
                Write-Host "`nOperation cancelled." -ForegroundColor Yellow
                exit 1
            }
        } else {
            # Verify backup file was created
            $backupVerify = ssh "$ProductionUser@$ProductionHost" "test -f $script:ProductionBackupPath && stat -f%z $script:ProductionBackupPath 2>/dev/null || stat -c%s $script:ProductionBackupPath 2>/dev/null" 2>&1
            
            if ($LASTEXITCODE -eq 0 -and $backupVerify -gt 0) {
                $backupSizeMB = [math]::Round([int]$backupVerify / 1MB, 2)
                Write-Success "Production database backed up: $script:ProductionBackupPath ($backupSizeMB MB)"
                Write-Log "Production backup created: $script:ProductionBackupPath ($backupSizeMB MB)" "INFO"
            } else {
                Write-Warning-Message "Backup file verification failed"
                $script:ProductionBackupPath = $null
            }
            
            # Download backup to local machine as well
            if ($script:ProductionBackupPath) {
                $localProdBackup = Join-Path $BackupDir $prodBackupFile
                Write-Host "    Downloading backup to local machine..." -ForegroundColor Gray
                scp "$ProductionUser@${ProductionHost}:$script:ProductionBackupPath" $localProdBackup 2>&1 | Out-Null
                
                if (Test-Path $localProdBackup) {
                    Write-Success "Backup also saved locally: $localProdBackup"
                    Write-Log "Local copy of production backup: $localProdBackup" "INFO"
                } else {
                    Write-Warning-Message "Failed to download backup locally"
                }
            }
        }
    } catch {
        Write-Critical-Error `
            -Message "Exception during production backup" `
            -Details $_.Exception.Message `
            -Recovery "Cannot proceed without a backup"
        
        $script:ProductionBackupPath = $null
        
        if (-not (Confirm-Action "Continue without backup? (NOT RECOMMENDED)" "yes")) {
            Write-Host "`nOperation cancelled." -ForegroundColor Yellow
            exit 1
        }
    }
} else {
    Write-Warning-Message "Skipping production database backup (--SkipBackup flag used)"
    Write-Danger "NO BACKUP WILL BE CREATED!"
    Write-Log "Production backup skipped by user" "WARNING"
    
    if (-not (Confirm-Action "Continue without backup?" "yes")) {
        Write-Host "`nOperation cancelled." -ForegroundColor Yellow
        exit 0
    }
}

# ============================================
# Step 9: Upload Database to Production
# ============================================

Write-Step "Uploading database to production server..."

$remoteTempPath = "/tmp/mgrnz-import-$Timestamp.sql"

try {
    scp $prodReadyFile "$ProductionUser@${ProductionHost}:$remoteTempPath" 2>&1 | Out-Null
    
    if ($LASTEXITCODE -ne 0) {
        Write-Error-Message "Failed to upload database to production"
        exit 1
    }
    
    Write-Success "Database uploaded to production server"
} catch {
    Write-Error-Message "SCP upload failed: $_"
    exit 1
}

# ============================================
# Step 10: Import Database on Production
# ============================================

Write-Step "Importing database on production server..."

Write-Danger "FINAL WARNING: About to overwrite production database!"

if (-not (Confirm-Action "Type 'IMPORT' to proceed with database import" "IMPORT")) {
    Write-Host "`nOperation cancelled by user." -ForegroundColor Yellow
    Write-Log "Import cancelled by user" "INFO"
    
    # Cleanup remote file
    ssh "$ProductionUser@$ProductionHost" "rm -f $remoteTempPath" 2>&1 | Out-Null
    
    exit 0
}

$script:ImportStarted = $true

try {
    # Validate SQL file on production before import
    Write-Host "    Validating SQL file on production..." -ForegroundColor Gray
    $fileSize = ssh "$ProductionUser@$ProductionHost" "stat -f%z $remoteTempPath 2>/dev/null || stat -c%s $remoteTempPath 2>/dev/null" 2>&1
    
    if ($LASTEXITCODE -ne 0 -or [int]$fileSize -eq 0) {
        Write-Critical-Error `
            -Message "SQL file validation failed on production" `
            -Details "File may be empty or not uploaded correctly" `
            -Recovery "Production database unchanged"
        
        ssh "$ProductionUser@$ProductionHost" "rm -f $remoteTempPath" 2>&1 | Out-Null
        exit 1
    }
    
    Write-Success "SQL file validation passed ($([math]::Round([int]$fileSize / 1MB, 2)) MB)"
    
    Write-Host "    Importing database (this may take a moment)..." -ForegroundColor Gray
    $importResult = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp db import $remoteTempPath" 2>&1
    $importExitCode = $LASTEXITCODE
    
    if ($importExitCode -ne 0) {
        Write-Critical-Error `
            -Message "Database import failed on production!" `
            -Details "Exit Code: $importExitCode`nOutput: $importResult" `
            -Recovery "Attempting automatic rollback..."
        
        # Attempt automatic rollback
        if ($script:ProductionBackupPath) {
            Write-Host "`n" -NoNewline
            $rollbackSuccess = Invoke-ProductionRollback `
                -Reason "Import failed with exit code $importExitCode" `
                -BackupPath $script:ProductionBackupPath
            
            if ($rollbackSuccess) {
                Write-Host "`n✓ Production database has been restored from backup" -ForegroundColor Green
                Write-Host "  The production site should be operational" -ForegroundColor Green
            } else {
                Write-Host "`n✗ Automatic rollback failed!" -ForegroundColor Red
                Write-Host "`n⚠️  MANUAL INTERVENTION REQUIRED!" -ForegroundColor Red -BackgroundColor Black
                Write-Host "`nManual recovery steps:" -ForegroundColor Yellow
                Write-Host "  1. SSH to production: ssh $ProductionUser@$ProductionHost" -ForegroundColor White
                Write-Host "  2. Navigate to WordPress: cd $ProductionPath" -ForegroundColor White
                Write-Host "  3. Restore backup: wp db import $script:ProductionBackupPath" -ForegroundColor White
                Write-Host "  4. Verify site: wp db check" -ForegroundColor White
            }
        } else {
            Write-Host "`n⚠️  NO BACKUP AVAILABLE FOR ROLLBACK!" -ForegroundColor Red -BackgroundColor Black
            Write-Host "  Production database may be in an inconsistent state" -ForegroundColor Red
            Write-Host "  Manual restoration from external backup required" -ForegroundColor Yellow
        }
        
        exit 1
    }
    
    Write-Success "Database imported successfully"
    Write-Log "Production database import successful" "SUCCESS"
    
    # Verify import integrity
    Write-Host "    Verifying import integrity..." -ForegroundColor Gray
    $postImportIntegrity = Test-ProductionDatabaseIntegrity
    
    if (-not $postImportIntegrity.IsAccessible) {
        Write-Critical-Error `
            -Message "Production database is not accessible after import!" `
            -Details $postImportIntegrity.CheckOutput `
            -Recovery "Attempting automatic rollback..."
        
        if ($script:ProductionBackupPath) {
            $rollbackSuccess = Invoke-ProductionRollback `
                -Reason "Database not accessible after import" `
                -BackupPath $script:ProductionBackupPath
            
            if ($rollbackSuccess) {
                Write-Host "`n✓ Production database has been restored from backup" -ForegroundColor Green
            }
        }
        
        exit 1
    }
    
    if ($postImportIntegrity.TableCount -eq 0) {
        Write-Critical-Error `
            -Message "Production database has zero tables after import!" `
            -Details "This indicates a critical import failure" `
            -Recovery "Attempting automatic rollback..."
        
        if ($script:ProductionBackupPath) {
            $rollbackSuccess = Invoke-ProductionRollback `
                -Reason "No tables found after import" `
                -BackupPath $script:ProductionBackupPath
            
            if ($rollbackSuccess) {
                Write-Host "`n✓ Production database has been restored from backup" -ForegroundColor Green
            }
        }
        
        exit 1
    }
    
    if (-not $postImportIntegrity.HasCoreTables) {
        Write-Warning-Message "WordPress core tables not detected after import"
        Write-Host "    This may indicate an incomplete import" -ForegroundColor Yellow
    } else {
        Write-Success "Import integrity verified ($($postImportIntegrity.TableCount) tables)"
    }
    
} catch {
    Write-Critical-Error `
        -Message "Exception during database import on production" `
        -Details $_.Exception.Message `
        -Recovery "Attempting automatic rollback..."
    
    # Log exception with stack trace
    Write-LogEntry -Message "Critical exception during database import" -Level "CRITICAL" -Exception $_.Exception
    
    # Attempt automatic rollback
    if ($script:ImportStarted -and $script:ProductionBackupPath) {
        $rollbackSuccess = Invoke-ProductionRollback `
            -Reason "Exception during import: $($_.Exception.Message)" `
            -BackupPath $script:ProductionBackupPath
        
        if ($rollbackSuccess) {
            Write-Host "`n✓ Production database has been restored from backup" -ForegroundColor Green
        }
    }
    
    exit 1
}

# ============================================
# Step 11: Cleanup Remote File
# ============================================

Write-Step "Cleaning up temporary files..."

try {
    ssh "$ProductionUser@$ProductionHost" "rm -f $remoteTempPath" 2>&1 | Out-Null
    Write-Success "Remote temporary file removed"
} catch {
    Write-Warning-Message "Failed to clean up remote file: $_"
}

# Cleanup local files
try {
    if (Test-Path $localExportFile) { Remove-Item $localExportFile -Force }
    if (Test-Path $prodReadyFile) { Remove-Item $prodReadyFile -Force }
    Write-Success "Local temporary files removed"
} catch {
    Write-Warning-Message "Failed to clean up local files: $_"
}

# ============================================
# Step 12: Verification
# ============================================

Write-Step "Verifying production database..."

try {
    $tableCount = ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp db query 'SHOW TABLES;' --skip-column-names | wc -l" 2>&1
    
    if ($tableCount -gt 0) {
        Write-Success "Database verification passed ($tableCount tables found)"
    } else {
        Write-Warning-Message "Database may be empty"
    }
} catch {
    Write-Warning-Message "Could not verify database"
}

# ============================================
# Step 13: Flush Cache
# ============================================

Write-Step "Flushing production cache..."

try {
    ssh "$ProductionUser@$ProductionHost" "cd $ProductionPath && wp cache flush" 2>&1 | Out-Null
    Write-Success "Cache flushed"
} catch {
    Write-Warning-Message "Could not flush cache (may not be critical)"
}

# ============================================
# Summary
# ============================================

if ($script:HasErrors) {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Database Push Completed with Errors                 ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Yellow
    
    Write-Host "`nErrors encountered:" -ForegroundColor Red
    foreach ($error in $script:ErrorDetails) {
        Write-Host "  • $error" -ForegroundColor Red
    }
    
    if ($script:ProductionBackupPath) {
        Write-Host "`nProduction backup available at:" -ForegroundColor Cyan
        Write-Host "  $script:ProductionBackupPath" -ForegroundColor Gray
        Write-Host "`nTo restore manually:" -ForegroundColor Yellow
        Write-Host "  ssh $ProductionUser@$ProductionHost" -ForegroundColor White
        Write-Host "  cd $ProductionPath" -ForegroundColor White
        Write-Host "  wp db import $script:ProductionBackupPath" -ForegroundColor White
    }
    
    Write-Host "`nLog file:" -ForegroundColor Cyan
    Write-Host "  $LogFile" -ForegroundColor Gray
    
} else {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Database Push Complete!                             ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Green

    Write-Host "Summary:" -ForegroundColor Cyan
    Write-Host "  • Local database exported and prepared" -ForegroundColor White
    if (-not $SkipBackup -and $script:ProductionBackupPath) {
        Write-Host "  • Production database backed up" -ForegroundColor White
    }
    Write-Host "  • Database uploaded to production" -ForegroundColor White
    Write-Host "  • Production database updated with local data" -ForegroundColor White
    Write-Host "  • URLs replaced: $localUrl → $prodUrl" -ForegroundColor White

    if (-not $SkipBackup -and $script:ProductionBackupPath) {
        Write-Host "`nProduction backup saved to:" -ForegroundColor Cyan
        Write-Host "  Remote: $script:ProductionBackupPath" -ForegroundColor Gray
        $localProdBackup = Join-Path $BackupDir "prod-backup-$Timestamp.sql"
        if (Test-Path $localProdBackup) {
            Write-Host "  Local: $localProdBackup" -ForegroundColor Gray
        }
    }

    Write-Host "`nProduction site:" -ForegroundColor Cyan
    Write-Host "  $prodUrl" -ForegroundColor White

    Write-Host "`n⚠️  Important: Test your production site thoroughly!" -ForegroundColor Yellow
    Write-Host "    If issues occur, you can restore from the backup." -ForegroundColor Yellow
}

Write-Host "`nLog file:" -ForegroundColor Cyan
Write-Host "  $LogFile" -ForegroundColor Gray

Write-Host "`n"

Write-Log "Database push script completed. HasErrors: $script:HasErrors" "INFO"

# Log operation end with summary
$operationDuration = (Get-Date) - $script:OperationStartTime
Write-OperationEnd -OperationName "Database Push" -Success (-not $script:HasErrors) -DurationSeconds ($operationDuration.TotalSeconds) -Summary @{
    ProductionBackupCreated = ($null -ne $script:ProductionBackupPath)
    ImportStarted = $script:ImportStarted
    ErrorCount = $script:ErrorDetails.Count
}
