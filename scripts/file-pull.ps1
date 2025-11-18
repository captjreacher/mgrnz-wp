#Requires -Version 5.1
<#
.SYNOPSIS
    Pull WordPress files from production to local environment
    
.DESCRIPTION
    Downloads WordPress themes, plugins, and mu-plugins from production server
    via SFTP/SCP. Implements selective directory sync with exclusion logic for
    cache and temporary files. Preserves local wp-config.php during sync.
    
.PARAMETER Environment
    Target environment to pull from (production or staging)
    
.PARAMETER IncludeUploads
    Include wp-content/uploads directory (can be large)
    
.PARAMETER ThemesOnly
    Only sync themes directory
    
.PARAMETER PluginsOnly
    Only sync plugins directory
    
.PARAMETER MuPluginsOnly
    Only sync mu-plugins directory
    
.PARAMETER SkipBackup
    Skip creating backup of local files before sync
    
.PARAMETER DryRun
    Show what would be synced without actually downloading files
    
.EXAMPLE
    .\scripts\file-pull.ps1 -Environment production
    
.EXAMPLE
    .\scripts\file-pull.ps1 -Environment production -IncludeUploads
    
.EXAMPLE
    .\scripts\file-pull.ps1 -Environment production -ThemesOnly -DryRun
    
.NOTES
    Requirements:
    - SSH/SCP access to production server
    - .deploy-credentials.json configured
    - Sufficient disk space for file downloads
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
$LogFile = Join-Path $LogDir "file-pull-$Timestamp.log"

# Import modules
Import-Module (Join-Path $ScriptDir "DeploymentCredentials.psm1") -Force
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize enhanced logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "file-pull-$Timestamp.log" -LogLevel "INFO"

# Error tracking
$script:HasErrors = $false
$script:ErrorDetails = @()
$script:FilesDownloaded = 0
$script:TotalSize = 0
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

function Backup-LocalFiles {
    param(
        [string]$SourcePath,
        [string]$BackupName
    )
    
    if (-not (Test-Path $SourcePath)) {
        Write-Warning-Message "Source path does not exist: $SourcePath"
        return $null
    }
    
    try {
        $backupPath = Join-Path $BackupDir "files-$BackupName-$Timestamp.zip"
        
        Write-Info "Creating backup: $BackupName"
        
        # Use Compress-Archive to create zip
        Compress-Archive -Path $SourcePath -DestinationPath $backupPath -CompressionLevel Fastest -Force
        
        if (Test-Path $backupPath) {
            $sizeMB = [math]::Round((Get-Item $backupPath).Length / 1MB, 2)
            Write-Success "Backup created: $backupPath ($sizeMB MB)"
            Write-Log "Backup created: $backupPath ($sizeMB MB)" "INFO"
            return $backupPath
        }
        else {
            Write-Warning-Message "Backup file not created"
            return $null
        }
    }
    catch {
        Write-Warning-Message "Failed to create backup: $_"
        Write-Log "Backup failed: $_" "ERROR"
        return $null
    }
}

function Sync-Directory {
    param(
        [PSCustomObject]$Credentials,
        [string]$RemoteDir,
        [string]$LocalDir,
        [string]$DirectoryName,
        [string[]]$ExcludePatterns = @()
    )
    
    Write-Step "Syncing $DirectoryName..."
    
    if ($DryRun) {
        Write-Info "DRY RUN: Would sync from $RemoteDir to $LocalDir"
        Write-Info "Excluded patterns: $($ExcludePatterns -join ', ')"
        
        Write-TransferLog `
            -Operation "SYNC_DIRECTORY" `
            -Source $RemoteDir `
            -Destination $LocalDir `
            -Status "DRY_RUN" `
            -Details "Directory: $DirectoryName"
        
        return $true
    }
    
    try {
        # Ensure local directory exists
        if (-not (Test-Path $LocalDir)) {
            New-Item -ItemType Directory -Path $LocalDir -Force | Out-Null
            Write-Info "Created local directory: $LocalDir"
            Write-Log "Created directory: $LocalDir" "INFO"
        }
        
        # Build remote path
        $remotePath = "$($Credentials.remotePath)/$RemoteDir"
        
        # Check if remote directory exists with retry
        Write-Info "Verifying remote directory..."
        $testCommand = 'test -d ' + $remotePath + ' && echo exists || echo notfound'
        $remoteExists = $false
        
        for ($attempt = 1; $attempt -le 2; $attempt++) {
            try {
                $sshArgs = Get-SSHCommandArgs -Credentials $Credentials -Command $testCommand
                $testResult = & ssh $sshArgs 2>&1
                
                if ($LASTEXITCODE -eq 0 -and $testResult -match "exists") {
                    $remoteExists = $true
                    break
                }
                
                if ($attempt -lt 2) {
                    Write-Warning-Message "Remote directory check failed, retrying..."
                    Start-Sleep -Seconds 2
                }
            }
            catch {
                Write-Log "Remote directory check exception (attempt $attempt): $_" "ERROR"
            }
        }
        
        if (-not $remoteExists) {
            Write-Warning-Message "Remote directory does not exist: $remotePath"
            Write-Log "Remote directory not found: $remotePath" "ERROR"
            
            Write-TransferLog `
                -Operation "SYNC_DIRECTORY" `
                -Source $remotePath `
                -Destination $LocalDir `
                -Status "FAILED" `
                -Details "Remote directory not found"
            
            return $false
        }
        
        Write-Info "Remote: $remotePath"
        Write-Info "Local: $LocalDir"
        
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
        
        # Add source and destination
        $scpArgs += "$($Credentials.username)@$($Credentials.host):$remotePath/*"
        $scpArgs += $LocalDir
        
        Write-Info "Downloading files with retry logic..."
        
        # Use retry logic for SCP
        $scpResult = Invoke-SCPWithRetry `
            -Arguments $scpArgs `
            -Operation "DOWNLOAD_$DirectoryName" `
            -Source $remotePath `
            -Destination $LocalDir `
            -MaxRetries $script:MaxRetries `
            -DelaySeconds $script:RetryDelaySeconds
        
        if (-not $scpResult.Success) {
            Write-Error-Message "Failed to download $DirectoryName after $($scpResult.Attempt) attempts"
            
            if ($scpResult.ErrorType) {
                Write-Info "Error type: $($scpResult.ErrorType)"
            }
            
            if ($scpResult.Output) {
                Write-Info "Error details: $($scpResult.Output -join ' ')"
            }
            
            return $false
        }
        
        if ($scpResult.Attempt -gt 1) {
            Write-Success "Download succeeded on attempt $($scpResult.Attempt)"
            $script:RetryCount += ($scpResult.Attempt - 1)
        }
        
        # Count downloaded files
        $fileCount = (Get-ChildItem -Path $LocalDir -Recurse -File -ErrorAction SilentlyContinue).Count
        $script:FilesDownloaded += $fileCount
        
        # Calculate size
        $dirSize = (Get-ChildItem -Path $LocalDir -Recurse -File -ErrorAction SilentlyContinue | Measure-Object -Property Length -Sum).Sum
        $script:TotalSize += $dirSize
        $sizeMB = [math]::Round($dirSize / 1MB, 2)
        
        Write-Success "$DirectoryName synced ($fileCount files, $sizeMB MB)"
        Write-Log "$DirectoryName synced: $fileCount files, $sizeMB MB" "SUCCESS"
        
        # Log successful transfer
        Write-TransferLog `
            -Operation "SYNC_DIRECTORY" `
            -Source $remotePath `
            -Destination $LocalDir `
            -Status "SUCCESS" `
            -Details "Directory: $DirectoryName" `
            -FileCount $fileCount `
            -BytesTransferred $dirSize
        
        # Clean up excluded files
        if ($ExcludePatterns.Count -gt 0) {
            Write-Info "Cleaning up excluded files..."
            $removedCount = 0
            
            foreach ($pattern in $ExcludePatterns) {
                $filesToRemove = Get-ChildItem -Path $LocalDir -Recurse -Filter $pattern -ErrorAction SilentlyContinue
                
                foreach ($file in $filesToRemove) {
                    try {
                        Remove-Item $file.FullName -Force -Recurse -ErrorAction SilentlyContinue
                        $removedCount++
                        Write-Log "Removed excluded file: $($file.Name)" "INFO"
                    }
                    catch {
                        Write-Log "Failed to remove excluded file: $($file.Name) - $_" "WARNING"
                    }
                }
            }
            
            if ($removedCount -gt 0) {
                Write-Info "Removed $removedCount excluded files"
                Write-Log "Cleaned up $removedCount excluded files" "INFO"
            }
        }
        
        return $true
    }
    catch {
        Write-Error-Message "Exception during $DirectoryName sync: $_"
        Write-LogEntry -Message "Sync exception for $DirectoryName" -Level "ERROR" -Exception $_.Exception
        
        Write-TransferLog `
            -Operation "SYNC_DIRECTORY" `
            -Source $RemoteDir `
            -Destination $LocalDir `
            -Status "EXCEPTION" `
            -Details "Exception: $_"
        
        return $false
    }
}

function Protect-LocalConfig {
    param([string]$WpContentPath)
    
    # Ensure wp-config.php is not overwritten
    $wpConfigLocal = Join-Path $RootDir "wp-config-local.php"
    $wpConfig = Join-Path $RootDir "wp-config.php"
    
    if (Test-Path $wpConfigLocal) {
        Write-Info "Local wp-config-local.php is protected"
    }
    
    if (Test-Path $wpConfig) {
        # Check if it's a local config
        $configContent = Get-Content $wpConfig -Raw
        if ($configContent -match "localhost" -or $configContent -match "mgrnz.local") {
            Write-Info "Local wp-config.php is protected"
        }
    }
    
    # Protect .env.local
    $envLocal = Join-Path $RootDir ".env.local"
    if (Test-Path $envLocal) {
        Write-Info "Local .env.local is protected"
    }
}

# ============================================
# Main Script
# ============================================

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        MGRNZ File Pull Script                              ║
║        Production → Local                                  ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Cyan

if ($DryRun) {
    Write-Host "DRY RUN MODE - No files will be downloaded" -ForegroundColor Yellow
    Write-Host ""
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

# Define sync targets
$syncTargets = @()

if ($ThemesOnly) {
    $syncTargets += @{
        Name = "Themes"
        RemoteDir = "wp-content/themes"
        LocalDir = Join-Path $localWpContent "themes"
        Exclude = @("*.log", "*.cache", "node_modules")
    }
}
elseif ($PluginsOnly) {
    $syncTargets += @{
        Name = "Plugins"
        RemoteDir = "wp-content/plugins"
        LocalDir = Join-Path $localWpContent "plugins"
        Exclude = @("*.log", "*.cache", "node_modules")
    }
}
elseif ($MuPluginsOnly) {
    $syncTargets += @{
        Name = "MU-Plugins"
        RemoteDir = "wp-content/mu-plugins"
        LocalDir = Join-Path $localWpContent "mu-plugins"
        Exclude = @("*.log", "*.cache")
    }
}
else {
    # Sync all by default
    $syncTargets += @{
        Name = "Themes"
        RemoteDir = "wp-content/themes"
        LocalDir = Join-Path $localWpContent "themes"
        Exclude = @("*.log", "*.cache", "node_modules")
    }
    
    $syncTargets += @{
        Name = "Plugins"
        RemoteDir = "wp-content/plugins"
        LocalDir = Join-Path $localWpContent "plugins"
        Exclude = @("*.log", "*.cache", "node_modules")
    }
    
    $syncTargets += @{
        Name = "MU-Plugins"
        RemoteDir = "wp-content/mu-plugins"
        LocalDir = Join-Path $localWpContent "mu-plugins"
        Exclude = @("*.log", "*.cache")
    }
    
    if ($IncludeUploads) {
        $syncTargets += @{
            Name = "Uploads"
            RemoteDir = "wp-content/uploads"
            LocalDir = Join-Path $localWpContent "uploads"
            Exclude = @("*.log", "*.cache", "*.tmp")
        }
    }
}

Write-Info "Will sync $($syncTargets.Count) directories"

# ============================================
# Step 4: Create Backups
# ============================================

if (-not $SkipBackup -and -not $DryRun) {
    Write-Step "Creating backups of local files..."
    
    if (-not (Test-Path $BackupDir)) {
        New-Item -ItemType Directory -Path $BackupDir -Force | Out-Null
    }
    
    foreach ($target in $syncTargets) {
        if (Test-Path $target.LocalDir) {
            Backup-LocalFiles -SourcePath $target.LocalDir -BackupName $target.Name.ToLower()
        }
        else {
            Write-Info "$($target.Name) directory does not exist locally (will be created)"
        }
    }
}
elseif ($SkipBackup) {
    Write-Warning-Message "Skipping local file backups (--SkipBackup flag used)"
}

# ============================================
# Step 5: Protect Local Configuration
# ============================================

Write-Step "Protecting local configuration files..."

Protect-LocalConfig -WpContentPath $localWpContent

Write-Success "Local configuration files protected"

# ============================================
# Step 6: Sync Directories
# ============================================

Write-Step "Starting file synchronization..."

$successCount = 0

foreach ($target in $syncTargets) {
    $success = Sync-Directory `
        -Credentials $credentials `
        -RemoteDir $target.RemoteDir `
        -LocalDir $target.LocalDir `
        -DirectoryName $target.Name `
        -ExcludePatterns $target.Exclude
    
    if ($success) {
        $successCount++
    }
}

# ============================================
# Step 7: Verify Sync
# ============================================

if (-not $DryRun) {
    Write-Step "Verifying synchronized files..."
    
    foreach ($target in $syncTargets) {
        if (Test-Path $target.LocalDir) {
            $fileCount = (Get-ChildItem -Path $target.LocalDir -Recurse -File -ErrorAction SilentlyContinue).Count
            Write-Info "$($target.Name): $fileCount files"
        }
        else {
            Write-Warning-Message "$($target.Name) directory not found after sync"
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
    Write-Host "  • Would sync $($syncTargets.Count) directories from $Environment" -ForegroundColor White
    Write-Host "  • No files were actually downloaded" -ForegroundColor White
    Write-Host "`nRun without -DryRun flag to perform actual sync" -ForegroundColor Yellow
}
elseif ($script:HasErrors) {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        File Pull Completed with Errors                     ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Yellow
    
    Write-Host "`nErrors encountered:" -ForegroundColor Red
    foreach ($error in $script:ErrorDetails) {
        Write-Host "  • $error" -ForegroundColor Red
    }
    
    Write-Host "`nSuccessfully synced: $successCount / $($syncTargets.Count) directories" -ForegroundColor Yellow
    
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
    
    Write-Host "`nLog file:" -ForegroundColor Cyan
    Write-Host "  $LogFile" -ForegroundColor Gray
}
else {
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        File Pull Complete!                                 ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Green

    Write-Host "Summary:" -ForegroundColor Cyan
    Write-Host "  • Synced $successCount directories from $Environment" -ForegroundColor White
    Write-Host "  • Downloaded $script:FilesDownloaded files" -ForegroundColor White
    Write-Host "  • Total size: $([math]::Round($script:TotalSize / 1MB, 2)) MB" -ForegroundColor White
    Write-Host "  • Local configuration files preserved" -ForegroundColor White
    
    if ($script:RetryCount -gt 0) {
        Write-Host "  • Successful retries: $script:RetryCount" -ForegroundColor Yellow
    }
    
    if (-not $SkipBackup) {
        Write-Host "`nBackups saved to:" -ForegroundColor Cyan
        Write-Host "  $BackupDir" -ForegroundColor Gray
    }
    
    Write-Host "`nSynced directories:" -ForegroundColor Cyan
    foreach ($target in $syncTargets) {
        Write-Host "  • $($target.Name): $($target.LocalDir)" -ForegroundColor White
    }
}

Write-Host "`nLog file:" -ForegroundColor Cyan
Write-Host "  $LogFile" -ForegroundColor Gray

Write-Host "`n"

Write-Log "File pull script completed. HasErrors: $script:HasErrors, FilesDownloaded: $script:FilesDownloaded" "INFO"

# Log operation end with summary
$operationDuration = (Get-Date) - $script:OperationStartTime
Write-OperationEnd -OperationName "File Pull" -Success (-not $script:HasErrors) -DurationSeconds ($operationDuration.TotalSeconds) -Summary @{
    Environment = $Environment
    FilesDownloaded = $script:FilesDownloaded
    TotalSizeMB = [math]::Round($script:TotalSize / 1MB, 2)
    RetryCount = $script:RetryCount
    FailedOperations = $script:FailedOperations.Count
    ErrorCount = $script:ErrorDetails.Count
}

