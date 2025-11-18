#Requires -Version 5.1
<#
.SYNOPSIS
    Pull complete WordPress environment from production to local
    
.DESCRIPTION
    Combines database and file synchronization to pull a complete WordPress
    environment from production to local. Creates backups before pulling,
    provides progress reporting, and supports selective sync options.
    
.PARAMETER Environment
    Target environment to pull from (production or staging)
    
.PARAMETER SkipDatabase
    Skip database pull (only sync files)
    
.PARAMETER SkipFiles
    Skip file sync (only pull database)
    
.PARAMETER SkipUploads
    Skip wp-content/uploads directory (can be large)
    
.PARAMETER SkipBackup
    Skip creating backups before pull (not recommended)
    
.PARAMETER LocalAdminPassword
    Password to set for local admin user (default: admin)
    
.PARAMETER DryRun
    Show what would be pulled without actually downloading
    
.EXAMPLE
    .\scripts\pull-from-production.ps1
    
.EXAMPLE
    .\scripts\pull-from-production.ps1 -Environment production -SkipUploads
    
.EXAMPLE
    .\scripts\pull-from-production.ps1 -SkipDatabase
    
.EXAMPLE
    .\scripts\pull-from-production.ps1 -DryRun
    
.NOTES
    Requirements:
    - SSH/SCP access to production server
    - WP-CLI installed locally and on production
    - .deploy-credentials.json configured
    - .env.local and .env.production files configured
#>

param(
    [Parameter(Mandatory=$false)]
    [ValidateSet("production", "staging")]
    [string]$Environment = "production",
    
    [switch]$SkipDatabase,
    [switch]$SkipFiles,
    [switch]$SkipUploads,
    [switch]$SkipBackup,
    [string]$LocalAdminPassword = "admin",
    [switch]$DryRun
)

# ============================================
# Configuration
# ============================================

$ErrorActionPreference = "Stop"
$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$RootDir = Split-Path -Parent $ScriptDir
$BackupDir = Join-Path $RootDir "backups"
$LogDir = Join-Path $RootDir "logs"
$Timestamp = Get-Date -Format "yyyyMMdd-HHmmss"
$LogFile = Join-Path $LogDir "pull-from-production-$Timestamp.log"

# Import modules
Import-Module (Join-Path $ScriptDir "DeploymentCredentials.psm1") -Force
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize enhanced logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "pull-from-production-$Timestamp.log" -LogLevel "INFO"

# Operation tracking
$script:OperationStartTime = Get-Date
$script:HasErrors = $false
$script:ErrorDetails = @()
$script:DatabasePulled = $false
$script:FilesPulled = $false
$script:FilesDownloaded = 0
$script:TotalSize = 0
$script:DatabaseSizeMB = 0

# ============================================
# Helper Functions
# ============================================

function Write-Log {
    param(
        [string]$Message,
        [string]$Level = "INFO"
    )
    
    Write-LogEntry -Message $Message -Level $Level
}

function Write-Step {
    param([string]$Message)
    Write-Host "`n==> $Message" -ForegroundColor Cyan
    Write-Log $Message "INFO"
}

function Write-Success {
    param([string]$Message)
    Write-Host "    [OK] $Message" -ForegroundColor Green
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

function Write-Info {
    param([string]$Message)
    Write-Host "    $Message" -ForegroundColor Gray
}

function Write-Progress-Header {
    param(
        [string]$Title,
        [int]$Current,
        [int]$Total
    )
    
    Write-Host ""
    Write-Host "===================================================" -ForegroundColor Cyan
    Write-Host " Step $Current of $Total - $Title" -ForegroundColor Cyan
    Write-Host "===================================================" -ForegroundColor Cyan
}

function Backup-LocalEnvironment {
    Write-Step "Creating backup of local environment..."
    
    if ($DryRun) {
        Write-Info "DRY RUN: Would create backup of local environment"
        return $true
    }
    
    try {
        # Ensure backup directory exists
        if (-not (Test-Path $BackupDir)) {
            New-Item -ItemType Directory -Path $BackupDir -Force | Out-Null
        }
        
        $backupSuccess = $true
        
        # Backup local database
        if (-not $SkipDatabase) {
            Write-Info "Backing up local database..."
            
            $wpPath = Join-Path $RootDir "wp"
            if (-not (Test-Path $wpPath)) {
                $wpPath = $RootDir
            }
            
            $dbBackupFile = Join-Path $BackupDir "local-db-backup-$Timestamp.sql"
            
            try {
                Push-Location $wpPath
                $backupOutput = wp db export $dbBackupFile 2>&1
                $backupExitCode = $LASTEXITCODE
                Pop-Location
                
                if ($backupExitCode -eq 0 -and (Test-Path $dbBackupFile)) {
                    $fileSize = (Get-Item $dbBackupFile).Length / 1MB
                    $fileSizeRounded = [math]::Round($fileSize, 2)
                    Write-Success "Database backed up: $fileSizeRounded MB"
                    Write-Log "Local database backed up: $dbBackupFile" "INFO"
                } else {
                    Write-Warning-Message "Database backup may have failed"
                    $backupSuccess = $false
                }
            } catch {
                Write-Warning-Message "Failed to backup database: $_"
                $backupSuccess = $false
                if (Test-Path variable:wpPath) {
                    Pop-Location
                }
            }
        }
        
        # Backup local files
        if (-not $SkipFiles) {
            Write-Info "Backing up local files..."
            
            $wpContentPath = Join-Path $RootDir "wp\wp-content"
            if (-not (Test-Path $wpContentPath)) {
                $wpContentPath = Join-Path $RootDir "wp-content"
            }
            
            if (Test-Path $wpContentPath) {
                $filesBackupPath = Join-Path $BackupDir "local-files-backup-$Timestamp.zip"
                
                try {
                    Compress-Archive -Path $wpContentPath -DestinationPath $filesBackupPath -CompressionLevel Fastest -Force
                    
                    if (Test-Path $filesBackupPath) {
                        $fileSize = (Get-Item $filesBackupPath).Length / 1MB
                        $fileSizeRounded = [math]::Round($fileSize, 2)
                        Write-Success "Files backed up: $fileSizeRounded MB"
                        Write-Log "Local files backed up: $filesBackupPath" "INFO"
                    } else {
                        Write-Warning-Message "Files backup may have failed"
                        $backupSuccess = $false
                    }
                } catch {
                    Write-Warning-Message "Failed to backup files: $_"
                    $backupSuccess = $false
                }
            } else {
                Write-Info "No local wp-content directory found (fresh install)"
            }
        }
        
        if ($backupSuccess) {
            Write-Success "Local environment backup complete"
            Write-Log "Local environment backup completed successfully" "SUCCESS"
        } else {
            Write-Warning-Message "Backup completed with warnings"
            Write-Log "Local environment backup completed with warnings" "WARNING"
        }
        
        return $backupSuccess
    } catch {
        Write-Error-Message "Failed to backup local environment: $_"
        Write-LogEntry -Message "Backup failed" -Level "ERROR" -Exception $_.Exception
        return $false
    }
}

# ============================================
# Main Script
# ============================================

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ Pull from Production                          ║
║        Complete Environment Sync                           ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Cyan

if ($DryRun) {
    Write-Host "DRY RUN MODE - No changes will be made" -ForegroundColor Yellow
    Write-Host ""
}

# Log operation start
Write-OperationStart -OperationName "Pull from Production" -Parameters @{
    Environment = $Environment
    SkipDatabase = $SkipDatabase
    SkipFiles = $SkipFiles
    SkipUploads = $SkipUploads
    SkipBackup = $SkipBackup
    DryRun = $DryRun
}

# Determine what will be pulled
$operations = @()
if (-not $SkipDatabase) { $operations += "Database" }
if (-not $SkipFiles) { $operations += "Files" }

if ($operations.Count -eq 0) {
    Write-Host "Nothing to pull (both -SkipDatabase and -SkipFiles specified)" -ForegroundColor Yellow
    exit 0
}

Write-Host "Environment: $Environment" -ForegroundColor White
Write-Host "Operations: $($operations -join ', ')" -ForegroundColor White

if ($SkipUploads -and -not $SkipFiles) {
    Write-Host "Note: Uploads directory will be skipped" -ForegroundColor Yellow
}

Write-Host ""

# Calculate total steps
$totalSteps = 2  # Pre-flight + Backup
if (-not $SkipDatabase) { $totalSteps++ }
if (-not $SkipFiles) { $totalSteps++ }
$totalSteps++  # Summary

$currentStep = 0

# ============================================
# Step: Pre-flight Checks
# ============================================

$currentStep++
Write-Progress-Header -Title "Pre-flight Checks" -Current $currentStep -Total $totalSteps

Write-Step "Running pre-flight checks..."

# Check WP-CLI
if (-not $SkipDatabase) {
    try {
        $null = Get-Command "wp" -ErrorAction Stop
        Write-Success "WP-CLI is installed"
    } catch {
        Write-Error-Message "WP-CLI is not installed or not in PATH"
        Write-Host "`nPlease install WP-CLI: https://wp-cli.org/#installing" -ForegroundColor Yellow
        exit 1
    }
}

# Check SSH/SCP
try {
    $null = Get-Command "ssh" -ErrorAction Stop
    $null = Get-Command "scp" -ErrorAction Stop
    Write-Success "SSH/SCP tools are available"
} catch {
    Write-Error-Message "SSH/SCP tools are not installed or not in PATH"
    Write-Host "`nPlease install OpenSSH or Git Bash" -ForegroundColor Yellow
    exit 1
}

# Load credentials
Write-Info "Loading deployment credentials..."
$credentials = Get-DeploymentCredentials -Environment $Environment

if (-not $credentials) {
    Write-Error-Message "Failed to load credentials for environment: $Environment"
    Write-Host "`nRun: .\scripts\test-connection.ps1 -ShowHelp" -ForegroundColor Yellow
    exit 1
}

Write-Success "Credentials loaded"

# Validate credentials
if (-not (Test-DeploymentCredentials -Credentials $credentials -Environment $Environment)) {
    Write-Error-Message "Credential validation failed"
    exit 1
}

Write-Success "Credentials validated"

# Test connection
Write-Info "Testing connection to $Environment..."

$connectionTest = Test-SFTPConnection -Credentials $credentials -Environment $Environment -Timeout 10

if (-not $connectionTest) {
    Write-Error-Message "Connection test failed"
    Write-Host "`nTroubleshooting steps:" -ForegroundColor Yellow
    Write-Host "  1. Verify your internet connection" -ForegroundColor Gray
    Write-Host "  2. Check if the remote server is accessible" -ForegroundColor Gray
    Write-Host "  3. Verify credentials in .deploy-credentials.json" -ForegroundColor Gray
    Write-Host "  4. Run: .\scripts\test-connection.ps1 -Environment $Environment" -ForegroundColor Gray
    exit 1
}

Write-Success "Connection successful"
Write-Success "Pre-flight checks complete"

# ============================================
# Step: Backup Local Environment
# ============================================

$currentStep++
Write-Progress-Header -Title "Backup Local Environment" -Current $currentStep -Total $totalSteps

if (-not $SkipBackup) {
    $backupSuccess = Backup-LocalEnvironment
    
    if (-not $backupSuccess -and -not $DryRun) {
        Write-Host "`n⚠️  Backup had issues. Continue anyway? (yes/no)" -ForegroundColor Yellow
        $continue = Read-Host
        
        if ($continue -ne "yes") {
            Write-Host "Operation cancelled by user" -ForegroundColor Red
            exit 1
        }
    }
} else {
    Write-Warning-Message "Skipping local environment backup (--SkipBackup flag used)"
    Write-Host "    ⚠️  No rollback will be possible if pull fails!" -ForegroundColor Red
}

# ============================================
# Step: Pull Database
# ============================================

if (-not $SkipDatabase) {
    $currentStep++
    Write-Progress-Header -Title "Pull Database" -Current $currentStep -Total $totalSteps
    
    Write-Step "Pulling database from $Environment..."
    
    if ($DryRun) {
        Write-Info "DRY RUN: Would pull database from production"
        Write-Info "  • Export production database"
        Write-Info "  • Download to local"
        Write-Info "  • Import into local database"
        Write-Info "  • Replace URLs"
        Write-Info "  • Reset admin credentials"
    } else {
        # Build db-pull.ps1 arguments
        $dbPullArgs = @()
        
        if ($SkipBackup) {
            $dbPullArgs += "-SkipBackup"
        }
        
        if ($LocalAdminPassword -ne "admin") {
            $dbPullArgs += "-LocalAdminPassword"
            $dbPullArgs += $LocalAdminPassword
        }
        
        $dbPullArgs += "-ProductionHost"
        $dbPullArgs += $credentials.host
        
        $dbPullArgs += "-ProductionUser"
        $dbPullArgs += $credentials.username
        
        $dbPullArgs += "-ProductionPath"
        $dbPullArgs += $credentials.remotePath
        
        Write-Info "Executing db-pull.ps1..."
        Write-Log "Executing db-pull.ps1 with args: $($dbPullArgs -join ' ')" "INFO"
        
        try {
            $dbPullScript = Join-Path $ScriptDir "db-pull.ps1"
            
            # Execute db-pull script
            & $dbPullScript @dbPullArgs
            
            if ($LASTEXITCODE -eq 0) {
                Write-Success "Database pull complete"
                $script:DatabasePulled = $true
                Write-Log "Database pull completed successfully" "SUCCESS"
            } else {
                Write-Error-Message "Database pull failed with exit code: $LASTEXITCODE"
                Write-Log "Database pull failed with exit code: $LASTEXITCODE" "ERROR"
            }
        } catch {
            Write-Error-Message "Database pull exception: $_"
            Write-LogEntry -Message "Database pull exception" -Level "ERROR" -Exception $_.Exception
        }
    }
}

# ============================================
# Step: Pull Files
# ============================================

if (-not $SkipFiles) {
    $currentStep++
    Write-Progress-Header -Title "Pull Files" -Current $currentStep -Total $totalSteps
    
    Write-Step "Pulling files from $Environment..."
    
    if ($DryRun) {
        Write-Info "DRY RUN: Would pull files from production"
        Write-Info "  • Sync themes directory"
        Write-Info "  • Sync plugins directory"
        Write-Info "  • Sync mu-plugins directory"
        
        if (-not $SkipUploads) {
            Write-Info "  • Sync uploads directory"
        } else {
            Write-Info "  • Skip uploads directory"
        }
    } else {
        # Build file-pull.ps1 arguments
        $filePullArgs = @(
            "-Environment", $Environment
        )
        
        if ($SkipBackup) {
            $filePullArgs += "-SkipBackup"
        }
        
        if ($SkipUploads) {
            # Don't include uploads
        } else {
            $filePullArgs += "-IncludeUploads"
        }
        
        Write-Info "Executing file-pull.ps1..."
        Write-Log "Executing file-pull.ps1 with args: $($filePullArgs -join ' ')" "INFO"
        
        try {
            $filePullScript = Join-Path $ScriptDir "file-pull.ps1"
            
            # Execute file-pull script
            & $filePullScript @filePullArgs
            
            if ($LASTEXITCODE -eq 0) {
                Write-Success "File pull complete"
                $script:FilesPulled = $true
                Write-Log "File pull completed successfully" "SUCCESS"
            } else {
                Write-Error-Message "File pull failed with exit code: $LASTEXITCODE"
                Write-Log "File pull failed with exit code: $LASTEXITCODE" "ERROR"
            }
        } catch {
            Write-Error-Message "File pull exception: $_"
            Write-LogEntry -Message "File pull exception" -Level "ERROR" -Exception $_.Exception
        }
    }
}

# ============================================
# Step: Summary
# ============================================

$currentStep++
Write-Progress-Header -Title "Summary" -Current $currentStep -Total $totalSteps

$operationDuration = (Get-Date) - $script:OperationStartTime
$durationMinutes = [math]::Round($operationDuration.TotalMinutes, 1)

if ($DryRun) {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Dry Run Complete                                    ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Yellow
    
    Write-Host "Summary:" -ForegroundColor Cyan
    Write-Host "  • Would pull from: $Environment" -ForegroundColor White
    Write-Host "  • Operations: $($operations -join ', ')" -ForegroundColor White
    Write-Host "  • No changes were made" -ForegroundColor White
    Write-Host "`nRun without -DryRun flag to perform actual pull" -ForegroundColor Yellow
}
elseif ($script:HasErrors) {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Pull Completed with Errors                          ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Yellow
    
    Write-Host "`nErrors encountered:" -ForegroundColor Red
    foreach ($error in $script:ErrorDetails) {
        Write-Host "  • $error" -ForegroundColor Red
    }
    
    Write-Host "`nCompleted operations:" -ForegroundColor Cyan
    if ($script:DatabasePulled) {
        Write-Host "  ✓ Database pulled" -ForegroundColor Green
    } elseif (-not $SkipDatabase) {
        Write-Host "  ✗ Database pull failed" -ForegroundColor Red
    }
    
    if ($script:FilesPulled) {
        Write-Host "  ✓ Files pulled" -ForegroundColor Green
    } elseif (-not $SkipFiles) {
        Write-Host "  ✗ File pull failed" -ForegroundColor Red
    }
    
    Write-Host "`nDuration: $durationMinutes minutes" -ForegroundColor Gray
    
    Write-Host "`nLog file:" -ForegroundColor Cyan
    Write-Host "  $LogFile" -ForegroundColor Gray
    
    Write-Host "`nCheck individual operation logs for details:" -ForegroundColor Yellow
    Write-Host "  • Database: $LogDir\db-pull-*.log" -ForegroundColor Gray
    Write-Host "  • Files: $LogDir\file-pull-*.log" -ForegroundColor Gray
}
else {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Pull from Production Complete!                      ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Green

    Write-Host "Summary:" -ForegroundColor Cyan
    Write-Host "  • Environment: $Environment" -ForegroundColor White
    Write-Host "  • Duration: $durationMinutes minutes" -ForegroundColor White
    
    if ($script:DatabasePulled) {
        Write-Host "  • Database: Pulled and imported" -ForegroundColor White
    }
    
    if ($script:FilesPulled) {
        Write-Host "  • Files: Synced successfully" -ForegroundColor White
    }
    
    if (-not $SkipBackup) {
        Write-Host "`nBackups saved to:" -ForegroundColor Cyan
        Write-Host "  $BackupDir" -ForegroundColor Gray
    }
    
    Write-Host "`nYour local environment now matches $Environment" -ForegroundColor Green
    
    # Load local environment URL
    $localEnvPath = Join-Path $RootDir ".env.local"
    if (Test-Path $localEnvPath) {
        $localUrl = (Get-Content $localEnvPath | Where-Object { $_ -match "^WP_HOME=" }) -replace "^WP_HOME=", "" -replace '"', ''
        
        if ($localUrl) {
            Write-Host "`nAccess your local site at:" -ForegroundColor Cyan
            Write-Host "  $localUrl" -ForegroundColor White
            
            if ($script:DatabasePulled) {
                Write-Host "  Username: admin (or first admin user)" -ForegroundColor White
                Write-Host "  Password: $LocalAdminPassword" -ForegroundColor White
            }
        }
    }
}

Write-Host "`nLog file:" -ForegroundColor Cyan
Write-Host "  $LogFile" -ForegroundColor Gray

Write-Host "`n"

# Log operation end
Write-OperationEnd -OperationName "Pull from Production" -Success (-not $script:HasErrors) -DurationSeconds ($operationDuration.TotalSeconds) -Summary @{
    Environment = $Environment
    DatabasePulled = $script:DatabasePulled
    FilesPulled = $script:FilesPulled
    SkipDatabase = $SkipDatabase
    SkipFiles = $SkipFiles
    SkipUploads = $SkipUploads
    SkipBackup = $SkipBackup
    DryRun = $DryRun
    ErrorCount = $script:ErrorDetails.Count
}

Write-Log "Pull from production script completed. HasErrors: $script:HasErrors" "INFO"

# Exit with appropriate code
if ($script:HasErrors) {
    exit 1
} else {
    exit 0
}
