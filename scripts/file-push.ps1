#Requires -Version 5.1
<#
.SYNOPSIS
    Push WordPress files from local to production environment
    
.DESCRIPTION
    Uploads WordPress themes, plugins, and mu-plugins from local to production server
    via SFTP/SCP. Creates production backup before upload, implements changed-files-only
    detection to minimize upload time, and includes dry-run mode for testing.
    
    WARNING: This operation will overwrite production files!
    Use with caution and always create backups.
    
.PARAMETER Environment
    Target environment to push to (production or staging)
    
.PARAMETER IncludeUploads
    Include wp-content/uploads directory (can be large)
    
.PARAMETER ThemesOnly
    Only push themes directory
    
.PARAMETER PluginsOnly
    Only push plugins directory
    
.PARAMETER MuPluginsOnly
    Only push mu-plugins directory
    
.PARAMETER SkipBackup
    Skip creating backup of production files before upload (NOT RECOMMENDED)
    
.PARAMETER Force
    Skip confirmation prompts (use with caution)
    
.PARAMETER DryRun
    Show what would be uploaded without actually pushing files
    
.PARAMETER ChangedOnly
    Only upload files that have been modified (based on timestamp)
    
.EXAMPLE
    .\scripts\file-push.ps1 -Environment production
    
.EXAMPLE
    .\scripts\file-push.ps1 -Environment production -ThemesOnly -DryRun
    
.EXAMPLE
    .\scripts\file-push.ps1 -Environment production -ChangedOnly
    
.NOTES
    Requirements:
    - SSH/SCP access to production server
    - .deploy-credentials.json configured
    - WP-CLI on production server (for backups)
    
    IMPORTANT: This script will OVERWRITE production files!
    Always ensure you have a recent backup before proceeding.
#>

param(
    [Parameter(Mandatory=$false)]
    [ValidateSet("production", "staging")]
    [string]$Environment = "production",
    
    [switch]$IncludeUploads,
    [switch]$ThemesOnly,
    [switch]$PluginsOnly,
    [switch]$MuPluginsOnly,
    [switch]$SkipBackup,
    [switch]$Force,
    [switch]$DryRun,
    [switch]$ChangedOnly
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
$LogFile = Join-Path $LogDir "file-push-$Timestamp.log"

# Import modules
Import-Module (Join-Path $ScriptDir "DeploymentCredentials.psm1") -Force
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize enhanced logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "file-push-$Timestamp.log" -LogLevel "INFO"

# Error tracking
$script:HasErrors = $false
$script:ErrorDetails = @()
$script:FilesUploaded = 0
$script:TotalSize = 0
$script:ProductionBackupPath = $null
$script:FailedOperations = @()
$script:RetryCount = 0
$script:MaxRetries = 3
$script:RetryDelaySeconds = 5
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

function Write-Info {
    param([string]$Message)
    Write-Host "    $Message" -ForegroundColor Gray
}

function Write-TransferLog {
    param(
        [string]$Operation,
        [string]$Source,
        [string]$Destination,
        [string]$Status,
        [string]$Details = "",
        [int]$FileCount = 0,
        [long]$BytesTransferred = 0
    )
    
    $logEntry = @{
        Timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss"
        Operation = $Operation
        Source = $Source
        Destination = $Destination
        Status = $Status
        Details = $Details
        FileCount = $FileCount
        BytesTransferred = $BytesTransferred
        SizeMB = [math]::Round($BytesTransferred / 1MB, 2)
    }
    
    $logMessage = "[$($logEntry.Timestamp)] $Operation | $Status | $Source -> $Destination"
    if ($FileCount -gt 0) {
        $logMessage += " | Files: $FileCount"
    }
    if ($BytesTransferred -gt 0) {
        $logMessage += " | Size: $($logEntry.SizeMB) MB"
    }
    if ($Details) {
        $logMessage += " | $Details"
    }
    
    Write-Log $logMessage "TRANSFER"
    
    return $logEntry
}

function Test-ConnectionWithRetry {
    param(
        [PSCustomObject]$Credentials,
        [string]$Environment,
        [int]$MaxAttempts = 3,
        [int]$DelaySeconds = 5
    )
    
    for ($attempt = 1; $attempt -le $MaxAttempts; $attempt++) {
        Write-Info "Connection attempt $attempt of $MaxAttempts..."
        
        if (Test-SFTPConnection -Credentials $Credentials -Environment $Environment) {
            Write-Success "Connection established"
            return $true
        }
        
        if ($attempt -lt $MaxAttempts) {
            Write-Warning-Message "Connection failed, retrying in $DelaySeconds seconds..."
            Write-Log "Connection attempt $attempt failed, retrying..." "WARNING"
            Start-Sleep -Seconds $DelaySeconds
        }
    }
    
    Write-Error-Message "Connection failed after $MaxAttempts attempts"
    Write-Log "Connection failed after $MaxAttempts attempts" "ERROR"
    
    # Log detailed connection failure
    Write-TransferLog `
        -Operation "CONNECTION_TEST" `
        -Source "Local" `
        -Destination "$($Credentials.host):$($Credentials.port)" `
        -Status "FAILED" `
        -Details "Failed after $MaxAttempts attempts"
    
    return $false
}

function Invoke-SCPWithRetry {
    param(
        [string[]]$Arguments,
        [string]$Operation,
        [string]$Source,
        [string]$Destination,
        [int]$MaxRetries = 3,
        [int]$DelaySeconds = 5
    )
    
    for ($attempt = 1; $attempt -le $MaxRetries; $attempt++) {
        try {
            Write-Log "SCP attempt $attempt of $MaxRetries: $Operation" "INFO"
            
            $result = & scp $Arguments 2>&1
            $exitCode = $LASTEXITCODE
            
            if ($exitCode -eq 0) {
                Write-Log "SCP successful: $Operation" "SUCCESS"
                
                Write-TransferLog `
                    -Operation $Operation `
                    -Source $Source `
                    -Destination $Destination `
                    -Status "SUCCESS" `
                    -Details "Completed on attempt $attempt"
                
                return @{
                    Success = $true
                    ExitCode = $exitCode
                    Output = $result
                    Attempt = $attempt
                }
            }
            
            # Check for specific error types
            $errorType = "UNKNOWN"
            $errorDetails = $result -join " "
            
            if ($errorDetails -match "Connection refused|Connection timed out|No route to host") {
                $errorType = "CONNECTION_ERROR"
            }
            elseif ($errorDetails -match "Permission denied|Authentication failed") {
                $errorType = "AUTH_ERROR"
            }
            elseif ($errorDetails -match "No such file|cannot stat") {
                $errorType = "FILE_NOT_FOUND"
            }
            elseif ($errorDetails -match "Disk quota exceeded|No space left") {
                $errorType = "DISK_SPACE_ERROR"
            }
            
            Write-Log "SCP failed (attempt $attempt): $errorType - $errorDetails" "ERROR"
            
            # Don't retry for certain error types
            if ($errorType -in @("AUTH_ERROR", "FILE_NOT_FOUND", "DISK_SPACE_ERROR")) {
                Write-Warning-Message "Non-retryable error: $errorType"
                Write-Log "Non-retryable error detected: $errorType" "ERROR"
                
                Write-TransferLog `
                    -Operation $Operation `
                    -Source $Source `
                    -Destination $Destination `
                    -Status "FAILED" `
                    -Details "$errorType - $errorDetails"
                
                return @{
                    Success = $false
                    ExitCode = $exitCode
                    Output = $result
                    ErrorType = $errorType
                    Attempt = $attempt
                }
            }
            
            if ($attempt -lt $MaxRetries) {
                Write-Warning-Message "Transfer failed ($errorType), retrying in $DelaySeconds seconds..."
                Write-Log "Retrying after $DelaySeconds seconds..." "INFO"
                Start-Sleep -Seconds $DelaySeconds
            }
        }
        catch {
            Write-Log "SCP exception (attempt $attempt): $_" "ERROR"
            
            if ($attempt -lt $MaxRetries) {
                Write-Warning-Message "Exception occurred, retrying in $DelaySeconds seconds..."
                Start-Sleep -Seconds $DelaySeconds
            }
        }
    }
    
    # All retries exhausted
    Write-Error-Message "Transfer failed after $MaxRetries attempts"
    Write-Log "Transfer failed after $MaxRetries attempts: $Operation" "ERROR"
    
    Write-TransferLog `
        -Operation $Operation `
        -Source $Source `
        -Destination $Destination `
        -Status "FAILED" `
        -Details "Failed after $MaxRetries retry attempts"
    
    $script:FailedOperations += @{
        Operation = $Operation
        Source = $Source
        Destination = $Destination
        Attempts = $MaxRetries
        LastError = $result -join " "
    }
    
    return @{
        Success = $false
        ExitCode = $LASTEXITCODE
        Output = $result
        Attempt = $MaxRetries
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

function Get-LocalWpContentPath {
    # Determine local wp-content path
    $wpPath = Join-Path $RootDir "wp"
    
    if (Test-Path (Join-Path $wpPath "wp-content")) {
        return Join-Path $wpPath "wp-content"
    }
    elseif (Test-Path (Join-Path $RootDir "wp-content")) {
        return Join-Path $RootDir "wp-content"
    }
    else {
        Write-Error-Message "Could not find wp-content directory"
        return $null
    }
}

function Backup-ProductionFiles {
    param(
        [PSCustomObject]$Credentials,
        [string]$RemoteDir,
        [string]$BackupName
    )
    
    Write-Info "Creating backup of $BackupName on production..."
    
    try {
        $remotePath = "$($Credentials.remotePath)/$RemoteDir"
        $backupFileName = "files-$BackupName-$Timestamp.tar.gz"
        $backupPath = "$($Credentials.remotePath)/backups/$backupFileName"
        
        # Create backups directory on production
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command "mkdir -p $($Credentials.remotePath)/backups"
        & ssh $sshArgs 2>&1 | Out-Null
        
        # Create tar.gz backup
        $tarCommand = 'cd ' + $Credentials.remotePath + ' && tar -czf backups/' + $backupFileName + ' ' + $RemoteDir + ' 2>/dev/null'
        $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $tarCommand
        $result = & ssh $sshArgs 2>&1
        
        if ($LASTEXITCODE -eq 0) {
            # Verify backup was created
            $statCommand = 'stat -f%z ' + $backupPath + ' 2>/dev/null || stat -c%s ' + $backupPath + ' 2>/dev/null'
            $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $statCommand
            $backupSize = & ssh $sshArgs 2>&1
            
            if ($LASTEXITCODE -eq 0 -and $backupSize -gt 0) {
                $sizeMB = [math]::Round([int]$backupSize / 1MB, 2)
                Write-Success "Production backup created: $backupPath ($sizeMB MB)"
                Write-Log "Production backup: $backupPath ($sizeMB MB)" "INFO"
                return $backupPath
            }
            else {
                Write-Warning-Message "Backup verification failed for $BackupName"
                return $null
            }
        }
        else {
            Write-Warning-Message "Failed to create backup for $BackupName"
            Write-Info "Error: $result"
            return $null
        }
    }
    catch {
        Write-Warning-Message "Exception during backup of $BackupName: $_"
        Write-Log "Backup exception: $_" "ERROR"
        return $null
    }
}

function Get-ChangedFiles {
    param(
        [string]$LocalDir,
        [datetime]$SinceDate
    )
    
    if (-not (Test-Path $LocalDir)) {
        return @()
    }
    
    $changedFiles = Get-ChildItem -Path $LocalDir -Recurse -File | 
        Where-Object { $_.LastWriteTime -gt $SinceDate }
    
    return $changedFiles
}

function Push-Directory {
    param(
        [PSCustomObject]$Credentials,
        [string]$LocalDir,
        [string]$RemoteDir,
        [string]$DirectoryName,
        [switch]$ChangedOnly,
        [datetime]$SinceDate
    )
    
    Write-Step "Pushing $DirectoryName..."
    
    if (-not (Test-Path $LocalDir)) {
        Write-Warning-Message "Local directory does not exist: $LocalDir"
        Write-Log "Local directory not found: $LocalDir" "ERROR"
        
        Write-TransferLog `
            -Operation "PUSH_DIRECTORY" `
            -Source $LocalDir `
            -Destination $RemoteDir `
            -Status "FAILED" `
            -Details "Local directory not found"
        
        return $false
    }
    
    # Count files to upload
    if ($ChangedOnly) {
        $filesToUpload = Get-ChangedFiles -LocalDir $LocalDir -SinceDate $SinceDate
        $fileCount = $filesToUpload.Count
        
        if ($fileCount -eq 0) {
            Write-Info "No changed files to upload in $DirectoryName"
            Write-Log "No changed files in $DirectoryName" "INFO"
            
            Write-TransferLog `
                -Operation "PUSH_DIRECTORY" `
                -Source $LocalDir `
                -Destination $RemoteDir `
                -Status "SKIPPED" `
                -Details "No changed files"
            
            return $true
        }
        
        Write-Info "Found $fileCount changed files since $($SinceDate.ToString('yyyy-MM-dd HH:mm:ss'))"
    }
    else {
        $fileCount = (Get-ChildItem -Path $LocalDir -Recurse -File -ErrorAction SilentlyContinue).Count
        Write-Info "Will upload $fileCount files"
    }
    
    if ($DryRun) {
        Write-Info "DRY RUN: Would upload from $LocalDir to $RemoteDir"
        
        Write-TransferLog `
            -Operation "PUSH_DIRECTORY" `
            -Source $LocalDir `
            -Destination $RemoteDir `
            -Status "DRY_RUN" `
            -Details "Directory: $DirectoryName" `
            -FileCount $fileCount
        
        return $true
    }
    
    try {
        # Build remote path
        $remotePath = "$($Credentials.remotePath)/$RemoteDir"
        
        Write-Info "Local: $LocalDir"
        Write-Info "Remote: $remotePath"
        Write-Info "Uploading files with retry logic..."
        
        # Build SCP arguments
        $scpArgs = @(
            "-o", "StrictHostKeyChecking=no",
            "-P", $Credentials.port,
            "-r"
        )
        
        # Add private key if specified
        if (-not [string]::IsNullOrWhiteSpace($Credentials.privateKeyPath)) {
            $scpArgs += @("-i", $Credentials.privateKeyPath)
        }
        
        if ($ChangedOnly -and $filesToUpload.Count -gt 0) {
            # Upload only changed files with retry logic
            $uploadedCount = 0
            $failedFiles = @()
            
            foreach ($file in $filesToUpload) {
                $relativePath = $file.FullName.Substring($LocalDir.Length + 1)
                $remoteFilePath = "$remotePath/$($relativePath -replace '\\', '/')"
                $remoteFileDir = Split-Path -Parent $remoteFilePath
                
                # Ensure remote directory exists
                $mkdirCommand = "mkdir -p $remoteFileDir"
                $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $mkdirCommand
                & ssh $sshArgs 2>&1 | Out-Null
                
                # Build file-specific SCP arguments
                $fileScpArgs = @(
                    "-o", "StrictHostKeyChecking=no",
                    "-P", $Credentials.port
                )
                
                if (-not [string]::IsNullOrWhiteSpace($Credentials.privateKeyPath)) {
                    $fileScpArgs += @("-i", $Credentials.privateKeyPath)
                }
                
                $fileScpArgs += $file.FullName
                $fileScpArgs += "$($Credentials.username)@$($Credentials.host):$remoteFilePath"
                
                # Use retry logic for individual file upload
                $uploadResult = Invoke-SCPWithRetry `
                    -Arguments $fileScpArgs `
                    -Operation "UPLOAD_FILE_$($file.Name)" `
                    -Source $file.FullName `
                    -Destination $remoteFilePath `
                    -MaxRetries $script:MaxRetries `
                    -DelaySeconds $script:RetryDelaySeconds
                
                if ($uploadResult.Success) {
                    $uploadedCount++
                    $script:FilesUploaded++
                    $script:TotalSize += $file.Length
                    
                    if ($uploadResult.Attempt -gt 1) {
                        $script:RetryCount += ($uploadResult.Attempt - 1)
                        Write-Info "Uploaded $relativePath (attempt $($uploadResult.Attempt))"
                    }
                }
                else {
                    Write-Warning-Message "Failed to upload: $relativePath"
                    $failedFiles += $relativePath
                }
            }
            
            $sizeMB = [math]::Round($script:TotalSize / 1MB, 2)
            
            if ($failedFiles.Count -eq 0) {
                Write-Success "$DirectoryName pushed ($uploadedCount files, $sizeMB MB)"
                Write-Log "$DirectoryName pushed: $uploadedCount files, $sizeMB MB" "SUCCESS"
                
                Write-TransferLog `
                    -Operation "PUSH_DIRECTORY" `
                    -Source $LocalDir `
                    -Destination $remotePath `
                    -Status "SUCCESS" `
                    -Details "Directory: $DirectoryName (changed files only)" `
                    -FileCount $uploadedCount `
                    -BytesTransferred $script:TotalSize
            }
            else {
                Write-Warning-Message "$DirectoryName partially pushed ($uploadedCount/$fileCount files, $failedFiles.Count failed)"
                Write-Log "$DirectoryName partially pushed: $uploadedCount/$fileCount files" "WARNING"
                
                Write-TransferLog `
                    -Operation "PUSH_DIRECTORY" `
                    -Source $LocalDir `
                    -Destination $remotePath `
                    -Status "PARTIAL" `
                    -Details "Uploaded: $uploadedCount, Failed: $($failedFiles.Count)" `
                    -FileCount $uploadedCount `
                    -BytesTransferred $script:TotalSize
                
                return $false
            }
        }
        else {
            # Upload entire directory with retry logic
            $scpArgs += "$LocalDir/*"
            $scpArgs += "$($Credentials.username)@$($Credentials.host):$remotePath/"
            
            $scpResult = Invoke-SCPWithRetry `
                -Arguments $scpArgs `
                -Operation "UPLOAD_$DirectoryName" `
                -Source $LocalDir `
                -Destination $remotePath `
                -MaxRetries $script:MaxRetries `
                -DelaySeconds $script:RetryDelaySeconds
            
            if (-not $scpResult.Success) {
                Write-Error-Message "Failed to upload $DirectoryName after $($scpResult.Attempt) attempts"
                
                if ($scpResult.ErrorType) {
                    Write-Info "Error type: $($scpResult.ErrorType)"
                }
                
                if ($scpResult.Output) {
                    Write-Info "Error details: $($scpResult.Output -join ' ')"
                }
                
                return $false
            }
            
            if ($scpResult.Attempt -gt 1) {
                Write-Success "Upload succeeded on attempt $($scpResult.Attempt)"
                $script:RetryCount += ($scpResult.Attempt - 1)
            }
            
            # Calculate size
            $dirSize = (Get-ChildItem -Path $LocalDir -Recurse -File -ErrorAction SilentlyContinue | Measure-Object -Property Length -Sum).Sum
            $script:FilesUploaded += $fileCount
            $script:TotalSize += $dirSize
            $sizeMB = [math]::Round($dirSize / 1MB, 2)
            
            Write-Success "$DirectoryName pushed ($fileCount files, $sizeMB MB)"
            Write-Log "$DirectoryName pushed: $fileCount files, $sizeMB MB" "SUCCESS"
            
            Write-TransferLog `
                -Operation "PUSH_DIRECTORY" `
                -Source $LocalDir `
                -Destination $remotePath `
                -Status "SUCCESS" `
                -Details "Directory: $DirectoryName" `
                -FileCount $fileCount `
                -BytesTransferred $dirSize
        }
        
        return $true
    }
    catch {
        Write-Error-Message "Exception during $DirectoryName push: $_"
        Write-LogEntry -Message "Push exception for $DirectoryName" -Level "ERROR" -Exception $_.Exception
        
        Write-TransferLog `
            -Operation "PUSH_DIRECTORY" `
            -Source $LocalDir `
            -Destination $RemoteDir `
            -Status "EXCEPTION" `
            -Details "Exception: $_"
        
        return $false
    }
}

# ============================================
# Main Script
# ============================================

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ File Push Script                              ║
║        Local → Production                                  ║
║                                                            ║
║        ⚠️  WARNING: THIS WILL OVERWRITE PRODUCTION! ⚠️      ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Red

if ($DryRun) {
    Write-Host "DRY RUN MODE - No files will be uploaded" -ForegroundColor Yellow
    Write-Host ""
}
else {
    Write-Danger "This script will REPLACE production files with your local files!"
    Write-Danger "Make sure you understand the implications before proceeding."
    
    if (-not $Force) {
        Write-Host "`nPress Ctrl+C now to cancel, or" -ForegroundColor Yellow
        Read-Host "Press Enter to continue"
    }
}

# ============================================
# Step 1: Load and Validate Credentials
# ============================================

Write-Step "Loading deployment credentials..."

$credentials = Get-DeploymentCredentials -Environment $Environment

if (-not $credentials) {
    Write-Error-Message "Failed to load credentials for environment: $Environment"
    Write-Host "`nRun test-connection.ps1 -ShowHelp for setup instructions" -ForegroundColor Yellow
    exit 1
}

Write-Success "Credentials loaded for $Environment"

# Validate credentials
if (-not (Test-DeploymentCredentials -Credentials $credentials -Environment $Environment)) {
    Write-Error-Message "Credential validation failed"
    exit 1
}

Write-Success "Credentials validated"

# ============================================
# Step 2: Test Connection
# ============================================

Write-Step "Testing connection to $Environment..."

if (-not (Test-ConnectionWithRetry -Credentials $credentials -Environment $Environment -MaxAttempts 3 -DelaySeconds 5)) {
    Write-Error-Message "Connection test failed after multiple attempts"
    Write-Host "`nTroubleshooting steps:" -ForegroundColor Yellow
    Write-Host "  1. Verify your internet connection" -ForegroundColor Gray
    Write-Host "  2. Check if the remote server is accessible" -ForegroundColor Gray
    Write-Host "  3. Verify credentials in .deploy-credentials.json" -ForegroundColor Gray
    Write-Host "  4. Run: .\scripts\test-connection.ps1 -Environment $Environment" -ForegroundColor Gray
    exit 1
}

Write-Success "Connection successful"

# ============================================
# Step 3: Determine Local Paths
# ============================================

Write-Step "Determining local paths..."

$localWpContent = Get-LocalWpContentPath

if (-not $localWpContent) {
    Write-Error-Message "Could not determine local wp-content path"
    exit 1
}

Write-Success "Local wp-content: $localWpContent"

# Define push targets
$pushTargets = @()

if ($ThemesOnly) {
    $pushTargets += @{
        Name = "Themes"
        LocalDir = Join-Path $localWpContent "themes"
        RemoteDir = "wp-content/themes"
    }
}
elseif ($PluginsOnly) {
    $pushTargets += @{
        Name = "Plugins"
        LocalDir = Join-Path $localWpContent "plugins"
        RemoteDir = "wp-content/plugins"
    }
}
elseif ($MuPluginsOnly) {
    $pushTargets += @{
        Name = "MU-Plugins"
        LocalDir = Join-Path $localWpContent "mu-plugins"
        RemoteDir = "wp-content/mu-plugins"
    }
}
else {
    # Push all by default
    $pushTargets += @{
        Name = "Themes"
        LocalDir = Join-Path $localWpContent "themes"
        RemoteDir = "wp-content/themes"
    }
    
    $pushTargets += @{
        Name = "Plugins"
        LocalDir = Join-Path $localWpContent "plugins"
        RemoteDir = "wp-content/plugins"
    }
    
    $pushTargets += @{
        Name = "MU-Plugins"
        LocalDir = Join-Path $localWpContent "mu-plugins"
        RemoteDir = "wp-content/mu-plugins"
    }
    
    if ($IncludeUploads) {
        $pushTargets += @{
            Name = "Uploads"
            LocalDir = Join-Path $localWpContent "uploads"
            RemoteDir = "wp-content/uploads"
        }
    }
}

Write-Info "Will push $($pushTargets.Count) directories"

# Verify local directories exist
$missingDirs = @()
foreach ($target in $pushTargets) {
    if (-not (Test-Path $target.LocalDir)) {
        $missingDirs += $target.Name
    }
}

if ($missingDirs.Count -gt 0) {
    Write-Error-Message "Missing local directories: $($missingDirs -join ', ')"
    exit 1
}

Write-Success "All local directories exist"

# ============================================
# Step 4: Calculate Changed Files
# ============================================

$sinceDate = (Get-Date).AddDays(-7)  # Default: files changed in last 7 days

if ($ChangedOnly) {
    Write-Step "Analyzing changed files..."
    
    $totalChangedFiles = 0
    foreach ($target in $pushTargets) {
        $changedFiles = Get-ChangedFiles -LocalDir $target.LocalDir -SinceDate $sinceDate
        $totalChangedFiles += $changedFiles.Count
        Write-Info "$($target.Name): $($changedFiles.Count) changed files"
    }
    
    if ($totalChangedFiles -eq 0) {
        Write-Host "`nNo changed files found. Nothing to upload." -ForegroundColor Yellow
        exit 0
    }
    
    Write-Success "Found $totalChangedFiles changed files total"
}

# ============================================
# Step 5: Display Summary and Confirm
# ============================================

Write-Step "File Push Summary"

Write-Host "`n  Source:" -ForegroundColor Cyan
Write-Host "    • Local wp-content: $localWpContent" -ForegroundColor White

Write-Host "`n  Destination:" -ForegroundColor Cyan
Write-Host "    • Environment: $Environment" -ForegroundColor White
Write-Host "    • Host: $($credentials.host)" -ForegroundColor White
Write-Host "    • Remote path: $($credentials.remotePath)" -ForegroundColor White

Write-Host "`n  Directories to push:" -ForegroundColor Cyan
foreach ($target in $pushTargets) {
    $fileCount = (Get-ChildItem -Path $target.LocalDir -Recurse -File -ErrorAction SilentlyContinue).Count
    Write-Host "    • $($target.Name): $fileCount files" -ForegroundColor White
}

Write-Host "`n  Actions:" -ForegroundColor Cyan
if (-not $SkipBackup -and -not $DryRun) {
    Write-Host "    • Create production file backups" -ForegroundColor White
}
Write-Host "    • Upload local files to production" -ForegroundColor White
Write-Host "    • Overwrite existing production files" -ForegroundColor Red

if ($ChangedOnly) {
    Write-Host "`n  Mode: Changed files only (last 7 days)" -ForegroundColor Yellow
}

if (-not $DryRun) {
    Write-Danger "THIS WILL REPLACE PRODUCTION FILES!"
    
    if (-not (Confirm-Action "Are you sure you want to proceed?" "yes")) {
        Write-Host "`nOperation cancelled by user." -ForegroundColor Yellow
        exit 0
    }
}

# ============================================
# Step 6: Backup Production Files
# ============================================

if (-not $SkipBackup -and -not $DryRun) {
    Write-Step "Creating production file backups..."
    
    $backupPaths = @()
    
    foreach ($target in $pushTargets) {
        $backupPath = Backup-ProductionFiles `
            -Credentials $credentials `
            -RemoteDir $target.RemoteDir `
            -BackupName $target.Name.ToLower()
        
        if ($backupPath) {
            $backupPaths += $backupPath
        }
    }
    
    if ($backupPaths.Count -eq 0) {
        Write-Warning-Message "No backups were created"
        
        if (-not (Confirm-Action "Continue without backups? (NOT RECOMMENDED)" "yes")) {
            Write-Host "`nOperation cancelled." -ForegroundColor Yellow
            exit 0
        }
    }
    else {
        Write-Success "Created $($backupPaths.Count) production backups"
        $script:ProductionBackupPath = $backupPaths[0]  # Store first backup path
    }
}
elseif ($SkipBackup) {
    Write-Warning-Message "Skipping production file backups (--SkipBackup flag used)"
    Write-Danger "NO BACKUPS WILL BE CREATED!"
    Write-Log "Production backup skipped by user" "WARNING"
    
    if (-not $DryRun -and -not (Confirm-Action "Continue without backups?" "yes")) {
        Write-Host "`nOperation cancelled." -ForegroundColor Yellow
        exit 0
    }
}

# ============================================
# Step 7: Push Files
# ============================================

if (-not $DryRun) {
    Write-Danger "FINAL WARNING: About to overwrite production files!"
    
    if (-not (Confirm-Action "Type 'PUSH' to proceed with file upload" "PUSH")) {
        Write-Host "`nOperation cancelled by user." -ForegroundColor Yellow
        Write-Log "Push cancelled by user" "INFO"
        exit 0
    }
}

Write-Step "Starting file upload..."

$successCount = 0

foreach ($target in $pushTargets) {
    $success = Push-Directory `
        -Credentials $credentials `
        -LocalDir $target.LocalDir `
        -RemoteDir $target.RemoteDir `
        -DirectoryName $target.Name `
        -ChangedOnly:$ChangedOnly `
        -SinceDate $sinceDate
    
    if ($success) {
        $successCount++
    }
}

# ============================================
# Step 8: Verify Upload
# ============================================

if (-not $DryRun) {
    Write-Step "Verifying uploaded files..."
    
    foreach ($target in $pushTargets) {
        $remotePath = "$($credentials.remotePath)/$($target.RemoteDir)"
        $sshArgs = Get-SSHCommandArgs -Credentials $credentials -Command "find $remotePath -type f | wc -l"
        $remoteFileCount = & ssh $sshArgs 2>&1
        
        if ($LASTEXITCODE -eq 0) {
            Write-Info "$($target.Name): $remoteFileCount files on production"
        }
        else {
            Write-Warning-Message "Could not verify $($target.Name) on production"
        }
    }
}

# ============================================
# Summary
# ============================================

if ($DryRun) {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Dry Run Complete                                    ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Yellow
    
    Write-Host "Summary:" -ForegroundColor Cyan
    Write-Host "  • Would push $($pushTargets.Count) directories to $Environment" -ForegroundColor White
    Write-Host "  • No files were actually uploaded" -ForegroundColor White
    Write-Host "`nRun without -DryRun flag to perform actual push" -ForegroundColor Yellow
}
elseif ($script:HasErrors) {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        File Push Completed with Errors                     ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Yellow
    
    Write-Host "`nErrors encountered:" -ForegroundColor Red
    foreach ($error in $script:ErrorDetails) {
        Write-Host "  • $error" -ForegroundColor Red
    }
    
    Write-Host "`nSuccessfully pushed: $successCount / $($pushTargets.Count) directories" -ForegroundColor Yellow
    
    if ($script:RetryCount -gt 0) {
        Write-Host "`nRetry statistics:" -ForegroundColor Cyan
        Write-Host "  • Total retries: $script:RetryCount" -ForegroundColor White
    }
    
    if ($script:FailedOperations.Count -gt 0) {
        Write-Host "`nFailed operations:" -ForegroundColor Red
        foreach ($failed in $script:FailedOperations) {
            Write-Host "  • $($failed.Operation): $($failed.Source)" -ForegroundColor Red
            Write-Host "    Attempts: $($failed.Attempts)" -ForegroundColor Gray
            if ($failed.LastError) {
                Write-Host "    Error: $($failed.LastError)" -ForegroundColor Gray
            }
        }
    }
    
    if ($script:ProductionBackupPath) {
        Write-Host "`nProduction backups available at:" -ForegroundColor Cyan
        Write-Host "  $($credentials.remotePath)/backups/" -ForegroundColor Gray
    }
    
    Write-Host "`nLog file:" -ForegroundColor Cyan
    Write-Host "  $LogFile" -ForegroundColor Gray
}
else {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        File Push Complete!                                 ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Green

    Write-Host "Summary:" -ForegroundColor Cyan
    Write-Host "  • Pushed $successCount directories to $Environment" -ForegroundColor White
    Write-Host "  • Uploaded $script:FilesUploaded files" -ForegroundColor White
    Write-Host "  • Total size: $([math]::Round($script:TotalSize / 1MB, 2)) MB" -ForegroundColor White
    
    if ($script:RetryCount -gt 0) {
        Write-Host "  • Successful retries: $script:RetryCount" -ForegroundColor Yellow
    }
    
    if (-not $SkipBackup) {
        Write-Host "`nProduction backups saved to:" -ForegroundColor Cyan
        Write-Host "  $($credentials.remotePath)/backups/" -ForegroundColor Gray
    }
    
    Write-Host "`nPushed directories:" -ForegroundColor Cyan
    foreach ($target in $pushTargets) {
        Write-Host "  • $($target.Name): $($target.RemoteDir)" -ForegroundColor White
    }
    
    Write-Host "`n⚠️  Important: Test your production site thoroughly!" -ForegroundColor Yellow
    Write-Host "    If issues occur, you can restore from the backups." -ForegroundColor Yellow
}

Write-Host "`nLog file:" -ForegroundColor Cyan
Write-Host "  $LogFile" -ForegroundColor Gray

Write-Host "`n"

Write-Log "File push script completed. HasErrors: $script:HasErrors, FilesUploaded: $script:FilesUploaded" "INFO"

# Log operation end with summary
$operationDuration = (Get-Date) - $script:OperationStartTime
Write-OperationEnd -OperationName "File Push" -Success (-not $script:HasErrors) -DurationSeconds ($operationDuration.TotalSeconds) -Summary @{
    Environment = $Environment
    FilesUploaded = $script:FilesUploaded
    TotalSizeMB = [math]::Round($script:TotalSize / 1MB, 2)
    RetryCount = $script:RetryCount
    FailedOperations = $script:FailedOperations.Count
    ErrorCount = $script:ErrorDetails.Count
}

