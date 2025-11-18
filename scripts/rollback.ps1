#Requires -Version 5.1
<#
.SYNOPSIS
    Rollback production deployment from backups
    
.DESCRIPTION
    Restores production WordPress files and/or database from timestamped backups.
    Provides backup listing and selection, automatic restoration, and post-rollback
    verification to ensure the site is functional after rollback.
    
.PARAMETER BackupTimestamp
    Specific backup timestamp to restore (format: yyyyMMdd-HHmmss)
    Use "latest" to restore the most recent backup
    
.PARAMETER ListBackups
    List all available backups without performing rollback
    
.PARAMETER FilesOnly
    Only restore files, skip database restoration
    
.PARAMETER DatabaseOnly
    Only restore database, skip file restoration
    
.PARAMETER Force
    Skip confirmation prompts (use with caution)
    
.PARAMETER DryRun
    Show what would be restored without actually making changes
    
.EXAMPLE
    .\scripts\rollback.ps1 -ListBackups
    
.EXAMPLE
    .\scripts\rollback.ps1 -BackupTimestamp "latest"
    
.EXAMPLE
    .\scripts\rollback.ps1 -BackupTimestamp "20251118-143022"
    
.EXAMPLE
    .\scripts\rollback.ps1 -BackupTimestamp "latest" -FilesOnly
    
.NOTES
    Requirements:
    - SSH/SCP access to production server
    - .deploy-credentials.json configured
    - Backup files must exist on production server
    
    This script performs rollback operations on the production server.
    Use with caution as it will overwrite current production files/database.
#>

param(
    [Parameter(Mandatory=$false)]
    [string]$BackupTimestamp = "",
    
    [switch]$ListBackups,
    [switch]$FilesOnly,
    [switch]$DatabaseOnly,
    [switch]$Force,
    [switch]$DryRun
)

# ============================================
# Configuration
# ============================================

$ErrorActionPreference = "Stop"
$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$RootDir = Split-Path -Parent $ScriptDir
$LogDir = Join-Path $RootDir "logs"
$Timestamp = Get-Date -Format "yyyyMMdd-HHmmss"
$LogFile = Join-Path $LogDir "rollback-$Timestamp.log"

# Import modules
Import-Module (Join-Path $ScriptDir "DeploymentCredentials.psm1") -Force
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize enhanced logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "rollback-$Timestamp.log" -LogLevel "INFO"

# Rollback tracking
$script:HasErrors = $false
$script:ErrorDetails = @()
$script:WarningDetails = @()
$script:FilesRestored = $false
$script:DatabaseRestored = $false
$script:RollbackStartTime = Get-Date

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
    $script:WarningDetails += $Message
}

function Write-Info {
    param([string]$Message)
    Write-Host "    $Message" -ForegroundColor Gray
}

function Write-Danger {
    param([string]$Message)
    Write-Host "`n!!! $Message" -ForegroundColor Red -BackgroundColor Black
    Write-Log $Message "DANGER"
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

function Get-RemoteBackups {
    param(
        [PSCustomObject]$Credentials,
        [string]$BackupType = "all"
    )
    
    Write-Info "Scanning for backups on production server..."
    Write-Log "Scanning remote backups: Type=$BackupType" "INFO"
    
    try {
        # Build remote backup path
        $remoteBackupPath = "/backups"
        
        # Check if backup directory exists
        $testCommand = "test -d $remoteBackupPath && echo exists || echo notfound"
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $testCommand
        $testResult = & ssh $sshArgs 2>&1
        
        if ($LASTEXITCODE -ne 0 -or $testResult -notmatch "exists") {
            Write-Warning-Message "Backup directory not found on production server: $remoteBackupPath"
            Write-Log "Remote backup directory not found" "WARNING"
            return @()
        }
        
        # List backup files based on type
        $findCommand = switch ($BackupType) {
            "files" { "find $remoteBackupPath -name 'wp-content-*.zip' -o -name 'files-*.zip' | sort -r" }
            "database" { "find $remoteBackupPath -name 'pre-deploy-*.sql' -o -name 'db-backup-*.sql' | sort -r" }
            default { "find $remoteBackupPath -type f \( -name '*.zip' -o -name '*.sql' \) | sort -r" }
        }
        
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $findCommand
        $backupFiles = & ssh $sshArgs 2>&1
        
        if ($LASTEXITCODE -ne 0) {
            Write-Warning-Message "Failed to list backups: $backupFiles"
            Write-Log "Failed to list remote backups: $backupFiles" "ERROR"
            return @()
        }
        
        # Parse backup files
        $backups = @()
        
        foreach ($file in $backupFiles) {
            if ([string]::IsNullOrWhiteSpace($file)) {
                continue
            }
            
            # Extract timestamp from filename
            if ($file -match '(\d{8}-\d{6})') {
                $timestamp = $Matches[1]
                
                # Get file size
                $sizeCommand = "stat -f%z '$file' 2>/dev/null || stat -c%s '$file' 2>/dev/null"
                $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $sizeCommand
                $sizeBytes = & ssh $sshArgs 2>&1
                
                $sizeMB = if ($sizeBytes -match '^\d+$') {
                    [math]::Round([long]$sizeBytes / 1MB, 2)
                } else {
                    0
                }
                
                $backupType = if ($file -match '\.sql$') { "database" } else { "files" }
                
                $backups += [PSCustomObject]@{
                    Timestamp = $timestamp
                    Path = $file
                    Type = $backupType
                    SizeMB = $sizeMB
                    FileName = Split-Path $file -Leaf
                }
            }
        }
        
        Write-Success "Found $($backups.Count) backup files"
        Write-Log "Found $($backups.Count) remote backups" "INFO"
        
        return $backups
    }
    catch {
        Write-Error-Message "Exception while scanning backups: $_"
        Write-LogEntry -Message "Backup scan exception" -Level "ERROR" -Exception $_.Exception
        return @()
    }
}

function Show-BackupList {
    param([array]$Backups)
    
    if ($Backups.Count -eq 0) {
        Write-Host "`nNo backups found on production server." -ForegroundColor Yellow
        Write-Host "Backups are created automatically during deployment." -ForegroundColor Gray
        return
    }
    
    Write-Host "`n╔════════════════════════════════════════════════════════════╗" -ForegroundColor Cyan
    Write-Host "║                    Available Backups                       ║" -ForegroundColor Cyan
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Cyan
    
    # Group by timestamp
    $groupedBackups = $Backups | Group-Object -Property Timestamp | Sort-Object Name -Descending
    
    foreach ($group in $groupedBackups) {
        $timestamp = $group.Name
        $dateTime = [DateTime]::ParseExact($timestamp, "yyyyMMdd-HHmmss", $null)
        
        Write-Host "`nTimestamp: $timestamp" -ForegroundColor White
        Write-Host "  Date: $($dateTime.ToString('yyyy-MM-dd HH:mm:ss'))" -ForegroundColor Gray
        
        foreach ($backup in $group.Group) {
            $typeColor = if ($backup.Type -eq "database") { "Cyan" } else { "Yellow" }
            Write-Host "  [$($backup.Type.ToUpper())] $($backup.FileName) ($($backup.SizeMB) MB)" -ForegroundColor $typeColor
        }
    }
    
    Write-Host "`nTo restore a backup, use:" -ForegroundColor Cyan
    Write-Host "  .\scripts\rollback.ps1 -BackupTimestamp `"$($groupedBackups[0].Name)`"" -ForegroundColor Gray
    Write-Host "  .\scripts\rollback.ps1 -BackupTimestamp `"latest`"" -ForegroundColor Gray
}

function Get-BackupsByTimestamp {
    param(
        [array]$AllBackups,
        [string]$Timestamp
    )
    
    if ($Timestamp -eq "latest") {
        # Get the most recent timestamp
        $latestTimestamp = ($AllBackups | Sort-Object Timestamp -Descending | Select-Object -First 1).Timestamp
        
        if (-not $latestTimestamp) {
            Write-Error-Message "No backups found"
            return $null
        }
        
        Write-Info "Latest backup timestamp: $latestTimestamp"
        $Timestamp = $latestTimestamp
    }
    
    # Find all backups with this timestamp
    $matchingBackups = $AllBackups | Where-Object { $_.Timestamp -eq $Timestamp }
    
    if ($matchingBackups.Count -eq 0) {
        Write-Error-Message "No backups found for timestamp: $Timestamp"
        Write-Host "`nRun with -ListBackups to see available backups" -ForegroundColor Yellow
        return $null
    }
    
    return $matchingBackups
}

function Restore-FilesFromBackup {
    param(
        [PSCustomObject]$Credentials,
        [PSCustomObject]$FileBackup
    )
    
    Write-Step "Restoring files from backup..."
    
    if ($DryRun) {
        Write-Info "DRY RUN: Would restore files from $($FileBackup.FileName)"
        Write-Log "DRY RUN: File restoration skipped" "INFO"
        return $true
    }
    
    try {
        Write-Info "Backup: $($FileBackup.FileName) ($($FileBackup.SizeMB) MB)"
        Write-Info "Remote path: $($FileBackup.Path)"
        Write-Log "Restoring files from: $($FileBackup.Path)" "INFO"
        
        # Build remote restoration command
        $remotePath = $Credentials.remotePath
        $backupPath = $FileBackup.Path
        
        # Create restoration script
        $restoreScript = @"
#!/bin/bash
set -e

echo "Starting file restoration..."

# Backup current state before restoration
CURRENT_BACKUP="/backups/pre-rollback-$Timestamp.zip"
echo "Creating backup of current state..."
cd $remotePath
zip -r \$CURRENT_BACKUP wp-content/themes wp-content/plugins wp-content/mu-plugins -q || true

# Extract backup
echo "Extracting backup archive..."
cd $remotePath
unzip -o $backupPath -d . || exit 1

echo "File restoration complete"
"@
        
        # Upload and execute restoration script
        $tempScriptPath = "/tmp/restore-files-$Timestamp.sh"
        
        Write-Info "Uploading restoration script..."
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command "cat > $tempScriptPath && chmod +x $tempScriptPath"
        $restoreScript | & ssh $sshArgs 2>&1 | Out-Null
        
        if ($LASTEXITCODE -ne 0) {
            Write-Error-Message "Failed to upload restoration script"
            return $false
        }
        
        Write-Info "Executing file restoration on production server..."
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $tempScriptPath
        $restoreOutput = & ssh $sshArgs 2>&1
        
        if ($LASTEXITCODE -ne 0) {
            Write-Error-Message "File restoration failed"
            Write-Host "    Output: $restoreOutput" -ForegroundColor Red
            Write-Log "File restoration failed: $restoreOutput" "ERROR"
            return $false
        }
        
        # Clean up temp script
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command "rm -f $tempScriptPath"
        & ssh $sshArgs 2>&1 | Out-Null
        
        Write-Success "Files restored successfully"
        Write-Log "Files restored from backup: $($FileBackup.FileName)" "SUCCESS"
        $script:FilesRestored = $true
        
        return $true
    }
    catch {
        Write-Error-Message "Exception during file restoration: $_"
        Write-LogEntry -Message "File restoration exception" -Level "ERROR" -Exception $_.Exception
        return $false
    }
}

function Restore-DatabaseFromBackup {
    param(
        [PSCustomObject]$Credentials,
        [PSCustomObject]$DatabaseBackup
    )
    
    Write-Step "Restoring database from backup..."
    
    if ($DryRun) {
        Write-Info "DRY RUN: Would restore database from $($DatabaseBackup.FileName)"
        Write-Log "DRY RUN: Database restoration skipped" "INFO"
        return $true
    }
    
    try {
        Write-Info "Backup: $($DatabaseBackup.FileName) ($($DatabaseBackup.SizeMB) MB)"
        Write-Info "Remote path: $($DatabaseBackup.Path)"
        Write-Log "Restoring database from: $($DatabaseBackup.Path)" "INFO"
        
        # Build remote restoration command
        $remotePath = $Credentials.remotePath
        $backupPath = $DatabaseBackup.Path
        
        # Create restoration script
        $restoreScript = @"
#!/bin/bash
set -e

echo "Starting database restoration..."

# Backup current database before restoration
CURRENT_BACKUP="/backups/pre-rollback-db-$Timestamp.sql"
echo "Creating backup of current database..."
cd $remotePath
wp db export \$CURRENT_BACKUP || true

# Import backup database
echo "Importing backup database..."
wp db import $backupPath || exit 1

echo "Database restoration complete"
"@
        
        # Upload and execute restoration script
        $tempScriptPath = "/tmp/restore-db-$Timestamp.sh"
        
        Write-Info "Uploading restoration script..."
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command "cat > $tempScriptPath && chmod +x $tempScriptPath"
        $restoreScript | & ssh $sshArgs 2>&1 | Out-Null
        
        if ($LASTEXITCODE -ne 0) {
            Write-Error-Message "Failed to upload restoration script"
            return $false
        }
        
        Write-Info "Executing database restoration on production server..."
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $tempScriptPath
        $restoreOutput = & ssh $sshArgs 2>&1
        
        if ($LASTEXITCODE -ne 0) {
            Write-Error-Message "Database restoration failed"
            Write-Host "    Output: $restoreOutput" -ForegroundColor Red
            Write-Log "Database restoration failed: $restoreOutput" "ERROR"
            return $false
        }
        
        # Clean up temp script
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command "rm -f $tempScriptPath"
        & ssh $sshArgs 2>&1 | Out-Null
        
        Write-Success "Database restored successfully"
        Write-Log "Database restored from backup: $($DatabaseBackup.FileName)" "SUCCESS"
        $script:DatabaseRestored = $true
        
        return $true
    }
    catch {
        Write-Error-Message "Exception during database restoration: $_"
        Write-LogEntry -Message "Database restoration exception" -Level "ERROR" -Exception $_.Exception
        return $false
    }
}

function Test-ProductionSite {
    param([PSCustomObject]$Credentials)
    
    Write-Step "Verifying production site..."
    
    try {
        # Build production URL
        $prodEnvPath = Join-Path $RootDir ".env.production"
        $productionUrl = "https://$($Credentials.host)"
        
        if (Test-Path $prodEnvPath) {
            $prodEnvContent = Get-Content $prodEnvPath
            $urlLine = $prodEnvContent | Where-Object { $_ -match '^WP_HOME=' }
            if ($urlLine) {
                $productionUrl = ($urlLine -split '=')[1].Trim().Trim('"').Trim("'")
            }
        }
        
        Write-Info "Testing: $productionUrl"
        
        $response = Invoke-WebRequest -Uri $productionUrl -Method Head -TimeoutSec 10 -UseBasicParsing -ErrorAction Stop
        
        if ($response.StatusCode -eq 200) {
            Write-Success "Production site is accessible (HTTP $($response.StatusCode))"
            Write-Log "Post-rollback verification: Site accessible" "SUCCESS"
            return $true
        }
        else {
            Write-Warning-Message "Production site returned HTTP $($response.StatusCode)"
            Write-Log "Post-rollback verification: HTTP $($response.StatusCode)" "WARNING"
            return $false
        }
    }
    catch {
        Write-Warning-Message "Cannot reach production site: $_"
        Write-Log "Post-rollback verification failed: $_" "WARNING"
        return $false
    }
}

# ============================================
# Main Script
# ============================================

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ Rollback Script                               ║
║        Restore from Production Backups                     ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Cyan

if ($DryRun) {
    Write-Host "DRY RUN MODE - No changes will be made" -ForegroundColor Yellow
    Write-Host ""
}

Write-Log "Rollback script started" "INFO"

# Log operation start
Write-OperationStart -OperationName "Rollback" -Parameters @{
    BackupTimestamp = $BackupTimestamp
    ListBackups = $ListBackups
    FilesOnly = $FilesOnly
    DatabaseOnly = $DatabaseOnly
    Force = $Force
    DryRun = $DryRun
}

# ============================================
# Step 1: Load and Validate Credentials
# ============================================

Write-Step "Loading deployment credentials..."

$credentials = Get-DeploymentCredentials -Environment "production"

if (-not $credentials) {
    Write-Error-Message "Failed to load credentials for production"
    Write-Host "`nRun: .\scripts\test-connection.ps1 -ShowHelp" -ForegroundColor Yellow
    exit 1
}

Write-Success "Credentials loaded for production"

if (-not (Test-DeploymentCredentials -Credentials $credentials -Environment "production")) {
    Write-Error-Message "Credential validation failed"
    exit 1
}

Write-Success "Credentials validated"

# ============================================
# Step 2: Test Connection
# ============================================

Write-Step "Testing connection to production..."

if (-not (Test-SFTPConnection -Credentials $credentials -Environment "production")) {
    Write-Error-Message "Connection test failed"
    Write-Host "`nTroubleshooting steps:" -ForegroundColor Yellow
    Write-Host "  1. Verify your internet connection" -ForegroundColor Gray
    Write-Host "  2. Check if the production server is accessible" -ForegroundColor Gray
    Write-Host "  3. Verify credentials in .deploy-credentials.json" -ForegroundColor Gray
    Write-Host "  4. Run: .\scripts\test-connection.ps1 -Environment production" -ForegroundColor Gray
    exit 1
}

Write-Success "Connection successful"

# ============================================
# Step 3: Scan for Backups
# ============================================

Write-Step "Scanning for available backups..."

$allBackups = Get-RemoteBackups -Credentials $credentials -BackupType "all"

if ($allBackups.Count -eq 0) {
    Write-Host "`nNo backups found on production server." -ForegroundColor Yellow
    Write-Host "Backups are created automatically during deployment." -ForegroundColor Gray
    Write-Host "Ensure you have deployed at least once before attempting rollback." -ForegroundColor Gray
    exit 1
}

# ============================================
# Step 4: List Backups (if requested)
# ============================================

if ($ListBackups) {
    Show-BackupList -Backups $allBackups
    exit 0
}

# ============================================
# Step 5: Validate Backup Timestamp
# ============================================

if ([string]::IsNullOrWhiteSpace($BackupTimestamp)) {
    Write-Host "`nNo backup timestamp specified." -ForegroundColor Yellow
    Write-Host "`nAvailable options:" -ForegroundColor Cyan
    Write-Host "  1. List all backups: .\scripts\rollback.ps1 -ListBackups" -ForegroundColor Gray
    Write-Host "  2. Restore latest: .\scripts\rollback.ps1 -BackupTimestamp `"latest`"" -ForegroundColor Gray
    Write-Host "  3. Restore specific: .\scripts\rollback.ps1 -BackupTimestamp `"yyyyMMdd-HHmmss`"" -ForegroundColor Gray
    exit 1
}

Write-Step "Selecting backup to restore..."

$selectedBackups = Get-BackupsByTimestamp -AllBackups $allBackups -Timestamp $BackupTimestamp

if (-not $selectedBackups) {
    exit 1
}

# Separate file and database backups
$fileBackup = $selectedBackups | Where-Object { $_.Type -eq "files" } | Select-Object -First 1
$databaseBackup = $selectedBackups | Where-Object { $_.Type -eq "database" } | Select-Object -First 1

# Determine what will be restored
$willRestoreFiles = (-not $DatabaseOnly) -and $fileBackup
$willRestoreDatabase = (-not $FilesOnly) -and $databaseBackup

if (-not $willRestoreFiles -and -not $willRestoreDatabase) {
    Write-Error-Message "No backups available for the requested restoration type"
    
    if ($FilesOnly -and -not $fileBackup) {
        Write-Host "`nNo file backup found for timestamp: $BackupTimestamp" -ForegroundColor Yellow
    }
    
    if ($DatabaseOnly -and -not $databaseBackup) {
        Write-Host "`nNo database backup found for timestamp: $BackupTimestamp" -ForegroundColor Yellow
    }
    
    Write-Host "`nRun with -ListBackups to see available backups" -ForegroundColor Yellow
    exit 1
}

# ============================================
# Step 6: Display Rollback Summary
# ============================================

Write-Step "Rollback Summary"

Write-Host "`nBackup Timestamp: $($selectedBackups[0].Timestamp)" -ForegroundColor White

if ($willRestoreFiles) {
    Write-Host "`nFiles to restore:" -ForegroundColor Cyan
    Write-Host "  • $($fileBackup.FileName) ($($fileBackup.SizeMB) MB)" -ForegroundColor White
}

if ($willRestoreDatabase) {
    Write-Host "`nDatabase to restore:" -ForegroundColor Cyan
    Write-Host "  • $($databaseBackup.FileName) ($($databaseBackup.SizeMB) MB)" -ForegroundColor White
}

if ($DryRun) {
    Write-Host "`nDry run mode - no changes will be made" -ForegroundColor Yellow
}

# ============================================
# Step 7: Confirmation
# ============================================

if (-not $DryRun) {
    Write-Host "`n" -NoNewline
    Write-Danger "This will restore production from backup!"
    Write-Danger "Current production files/database will be overwritten!"
    
    Write-Host "`nA backup of the current state will be created before rollback." -ForegroundColor Yellow
    
    if (-not (Confirm-Action "Are you sure you want to proceed with rollback?" "yes")) {
        Write-Host "`nRollback cancelled by user." -ForegroundColor Yellow
        Write-Log "Rollback cancelled by user" "INFO"
        exit 0
    }
}

# ============================================
# Step 8: Perform Rollback
# ============================================

Write-Step "Performing rollback..."

$rollbackSuccess = $true

# Restore files
if ($willRestoreFiles) {
    $filesResult = Restore-FilesFromBackup -Credentials $credentials -FileBackup $fileBackup
    
    if (-not $filesResult) {
        $rollbackSuccess = $false
        Write-Error-Message "File restoration failed"
    }
}

# Restore database
if ($willRestoreDatabase) {
    $databaseResult = Restore-DatabaseFromBackup -Credentials $credentials -DatabaseBackup $databaseBackup
    
    if (-not $databaseResult) {
        $rollbackSuccess = $false
        Write-Error-Message "Database restoration failed"
    }
}

# ============================================
# Step 9: Post-Rollback Verification
# ============================================

if (-not $DryRun -and $rollbackSuccess) {
    $siteAccessible = Test-ProductionSite -Credentials $credentials
    
    if (-not $siteAccessible) {
        Write-Warning-Message "Production site verification failed"
        Write-Host "`nThe rollback completed but the site may not be accessible." -ForegroundColor Yellow
        Write-Host "Please check the production site manually." -ForegroundColor Yellow
    }
}

# ============================================
# Final Summary
# ============================================

Write-Step "Rollback Summary"

$rollbackDuration = (Get-Date) - $script:RollbackStartTime
$durationMinutes = [math]::Round($rollbackDuration.TotalMinutes, 2)

Write-Host "`n"

if ($DryRun) {
    Write-Host "╔════════════════════════════════════════════════════════════╗" -ForegroundColor Yellow
    Write-Host "║                  Dry Run Complete                          ║" -ForegroundColor Yellow
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Yellow
    
    Write-Host "`nNo changes were made to production." -ForegroundColor White
    Write-Host "Run without -DryRun flag to perform actual rollback." -ForegroundColor Yellow
}
elseif ($script:HasErrors -or -not $rollbackSuccess) {
    Write-Host "╔════════════════════════════════════════════════════════════╗" -ForegroundColor Red
    Write-Host "║          Rollback Completed with Errors                    ║" -ForegroundColor Red
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Red
    
    Write-Host "`nRollback encountered errors. Please review the log file." -ForegroundColor Red
    Write-Host "Duration: $durationMinutes minutes" -ForegroundColor White
    
    if ($script:ErrorDetails.Count -gt 0) {
        Write-Host "`nErrors:" -ForegroundColor Red
        foreach ($error in $script:ErrorDetails) {
            Write-Host "  • $error" -ForegroundColor Red
        }
    }
    
    Write-Host "`nManual intervention may be required." -ForegroundColor Yellow
}
else {
    Write-Host "╔════════════════════════════════════════════════════════════╗" -ForegroundColor Green
    Write-Host "║              Rollback Successful!                          ║" -ForegroundColor Green
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Green
    
    Write-Host "`nRollback completed successfully." -ForegroundColor White
    Write-Host "Duration: $durationMinutes minutes" -ForegroundColor White
    
    if ($script:FilesRestored) {
        Write-Host "`n✓ Files restored from backup" -ForegroundColor Green
    }
    
    if ($script:DatabaseRestored) {
        Write-Host "✓ Database restored from backup" -ForegroundColor Green
    }
    
    Write-Host "`n!!! Important: Test your production site thoroughly!" -ForegroundColor Yellow
    Write-Host "Verify that all functionality is working as expected." -ForegroundColor Yellow
}

if ($script:WarningDetails.Count -gt 0) {
    Write-Host "`nWarnings:" -ForegroundColor Yellow
    foreach ($warning in $script:WarningDetails) {
        Write-Host "  • $warning" -ForegroundColor Yellow
    }
}

Write-Host "`nLog file:" -ForegroundColor Cyan
Write-Host "  $LogFile" -ForegroundColor Gray

Write-Host "`n"

Write-Log "Rollback completed. Success=$rollbackSuccess, Duration=$durationMinutes min" "INFO"

# Log operation end with summary
Write-OperationEnd -OperationName "Rollback" -Success $rollbackSuccess -DurationSeconds ($rollbackDuration.TotalSeconds) -Summary @{
    BackupTimestamp = $BackupTimestamp
    FilesRestored = $script:FilesRestored
    DatabaseRestored = $script:DatabaseRestored
    ErrorCount = $script:ErrorDetails.Count
    WarningCount = $script:WarningDetails.Count
    DurationMinutes = $durationMinutes
}

if (-not $rollbackSuccess) {
    exit 1
}
