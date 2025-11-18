#Requires -Version 5.1
<#
.SYNOPSIS
    Main deployment script for MGRNZ WordPress site
    
.DESCRIPTION
    Comprehensive deployment script that performs pre-deployment checks, creates backups,
    uploads files to production, and verifies deployment. Includes safety features like
    change summary display, confirmation prompts, and dry-run mode.
    
.PARAMETER Environment
    Target environment to deploy to (production or staging)
    
.PARAMETER DryRun
    Show what would be deployed without actually making changes
    
.PARAMETER SkipBackup
    Skip creating backup of production files before deployment (NOT RECOMMENDED)
    
.PARAMETER SkipChecks
    Skip pre-deployment checks (NOT RECOMMENDED)
    
.PARAMETER Force
    Skip confirmation prompts (use with caution)
    
.PARAMETER ThemesOnly
    Only deploy themes directory
    
.PARAMETER PluginsOnly
    Only deploy plugins directory
    
.PARAMETER MuPluginsOnly
    Only deploy mu-plugins directory
    
.PARAMETER ChangedOnly
    Only deploy files that have been modified (based on timestamp)
    
.EXAMPLE
    .\scripts\deploy.ps1 -Environment production
    
.EXAMPLE
    .\scripts\deploy.ps1 -Environment production -DryRun
    
.EXAMPLE
    .\scripts\deploy.ps1 -Environment production -ThemesOnly
    
.NOTES
    Requirements:
    - SSH/SCP access to production server
    - .deploy-credentials.json configured
    - Git repository (for uncommitted changes check)
    
    This script performs comprehensive pre-deployment checks and creates
    automatic backups before making any changes to production.
#>

param(
    [Parameter(Mandatory=$false)]
    [ValidateSet("production", "staging")]
    [string]$Environment = "production",
    
    [switch]$DryRun,
    [switch]$SkipBackup,
    [switch]$SkipChecks,
    [switch]$Force,
    [switch]$ThemesOnly,
    [switch]$PluginsOnly,
    [switch]$MuPluginsOnly,
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
$LogFile = Join-Path $LogDir "deploy-$Timestamp.log"

# Import modules
Import-Module (Join-Path $ScriptDir "DeploymentCredentials.psm1") -Force
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize enhanced logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "deploy-$Timestamp.log" -LogLevel "INFO"

# Deployment tracking
$script:HasErrors = $false
$script:ErrorDetails = @()
$script:WarningDetails = @()
$script:DeploymentStartTime = Get-Date
$script:PreChecksPassed = $false
$script:BackupCreated = $false
$script:FilesDeployed = $false
$script:DeploymentVerified = $false

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
    Write-Host "    [OK] $Message" -ForegroundColor Green
    Write-Log $Message "SUCCESS"
}

function Write-Error-Message {
    param([string]$Message)
    Write-Host "    [ERROR] $Message" -ForegroundColor Red
    Write-Log $Message "ERROR"
    $script:HasErrors = $true
    $script:ErrorDetails += $Message
}

function Write-Warning-Message {
    param([string]$Message)
    Write-Host "    [WARN] $Message" -ForegroundColor Yellow
    Write-Log $Message "WARNING"
    $script:WarningDetails += $Message
}

function Write-Danger {
    param([string]$Message)
    Write-Host "`n!!! $Message" -ForegroundColor Red -BackgroundColor Black
    Write-Log $Message "DANGER"
}

function Write-Info {
    param([string]$Message)
    Write-Host "    $Message" -ForegroundColor Gray
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
# Pre-Deployment Check Functions
# ============================================

function Test-ProductionAccessibility {
    param([string]$ProductionUrl)
    
    Write-Info "Testing production site accessibility..."
    Write-Log "Testing production URL: $ProductionUrl" "INFO"
    
    try {
        $response = Invoke-WebRequest -Uri $ProductionUrl -Method Head -TimeoutSec 10 -UseBasicParsing -ErrorAction Stop
        
        if ($response.StatusCode -eq 200) {
            Write-Success "Production site is accessible (HTTP $($response.StatusCode))"
            Write-Log "Production site accessible: HTTP $($response.StatusCode)" "SUCCESS"
            return $true
        }
        else {
            Write-Warning-Message "Production site returned HTTP $($response.StatusCode)"
            Write-Log "Production site returned HTTP $($response.StatusCode)" "WARNING"
            return $false
        }
    }
    catch {
        Write-Warning-Message "Cannot reach production site: $_"
        Write-Log "Production site not accessible: $_" "WARNING"
        return $false
    }
}

function Test-LocalFiles {
    param([string]$WpContentPath)
    
    Write-Info "Validating local files..."
    Write-Log "Validating local wp-content path: $WpContentPath" "INFO"
    
    $requiredDirs = @("themes", "plugins", "mu-plugins")
    $missingDirs = @()
    $emptyDirs = @()
    
    foreach ($dir in $requiredDirs) {
        $dirPath = Join-Path $WpContentPath $dir
        
        if (-not (Test-Path $dirPath)) {
            $missingDirs += $dir
            Write-Warning-Message "Missing directory: $dir"
        }
        else {
            $fileCount = (Get-ChildItem -Path $dirPath -Recurse -File -ErrorAction SilentlyContinue).Count
            
            if ($fileCount -eq 0) {
                $emptyDirs += $dir
                Write-Warning-Message "Empty directory: $dir"
            }
            else {
                Write-Info "$dir - $fileCount files"
            }
        }
    }
    
    if ($missingDirs.Count -gt 0) {
        Write-Error-Message "Missing required directories: $($missingDirs -join ', ')"
        Write-Log "Missing directories: $($missingDirs -join ', ')" "ERROR"
        return $false
    }
    
    if ($emptyDirs.Count -gt 0) {
        Write-Warning-Message "Empty directories found: $($emptyDirs -join ', ')"
        Write-Log "Empty directories: $($emptyDirs -join ', ')" "WARNING"
    }
    
    Write-Success "Local file validation passed"
    Write-Log "Local file validation successful" "SUCCESS"
    return $true
}

function Test-GitStatus {
    Write-Info "Checking Git status..."
    Write-Log "Checking for uncommitted changes" "INFO"
    
    try {
        $null = Get-Command git -ErrorAction Stop
    }
    catch {
        Write-Warning-Message "Git not found - skipping Git status check"
        Write-Log "Git not available, skipping check" "WARNING"
        return $true
    }
    
    Push-Location $RootDir
    try {
        $gitStatus = git status --porcelain 2>&1
        $gitExitCode = $LASTEXITCODE
        
        if ($gitExitCode -ne 0) {
            Write-Warning-Message "Not a Git repository or Git error"
            Write-Log "Git status check failed: $gitStatus" "WARNING"
            Pop-Location
            return $true
        }
        
        if ([string]::IsNullOrWhiteSpace($gitStatus)) {
            Write-Success "No uncommitted changes"
            Write-Log "Git working directory clean" "SUCCESS"
            Pop-Location
            return $true
        }
        else {
            $changedFiles = ($gitStatus -split "`n").Count
            Write-Warning-Message "Found $changedFiles uncommitted changes"
            Write-Log "Uncommitted changes: $changedFiles files" "WARNING"
            
            $gitStatus -split "`n" | Select-Object -First 5 | ForEach-Object {
                Write-Info "  $_"
            }
            
            if ($changedFiles -gt 5) {
                Write-Info "  ... and $($changedFiles - 5) more"
            }
            
            Pop-Location
            return $false
        }
    }
    catch {
        Write-Warning-Message "Git status check failed: $_"
        Write-Log "Git status exception: $_" "WARNING"
        Pop-Location
        return $true
    }
}

function Get-DeploymentReadinessReport {
    param(
        [PSCustomObject]$Credentials,
        [string]$WpContentPath,
        [string]$ProductionUrl,
        [hashtable]$CheckResults
    )
    
    Write-Host "`n================================================================" -ForegroundColor Cyan
    Write-Host "              Deployment Readiness Report" -ForegroundColor Cyan
    Write-Host "================================================================" -ForegroundColor Cyan
    
    Write-Host "`nEnvironment: $Environment" -ForegroundColor White
    Write-Host "Target: $($Credentials.host)" -ForegroundColor White
    Write-Host "Timestamp: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')" -ForegroundColor White
    
    Write-Host "`nPre-Deployment Checks:" -ForegroundColor Cyan
    
    if ($CheckResults.ProductionAccessible) {
        Write-Host "  [OK] Production site is accessible" -ForegroundColor Green
    }
    else {
        Write-Host "  [FAIL] Production site is not accessible" -ForegroundColor Red
    }
    
    if ($CheckResults.LocalFilesValid) {
        Write-Host "  [OK] Local files validated" -ForegroundColor Green
    }
    else {
        Write-Host "  [FAIL] Local file validation failed" -ForegroundColor Red
    }
    
    if ($CheckResults.GitClean) {
        Write-Host "  [OK] No uncommitted changes" -ForegroundColor Green
    }
    else {
        Write-Host "  [WARN] Uncommitted changes detected" -ForegroundColor Yellow
    }
    
    if ($CheckResults.SshConnected) {
        Write-Host "  [OK] SSH connection successful" -ForegroundColor Green
    }
    else {
        Write-Host "  [FAIL] SSH connection failed" -ForegroundColor Red
    }
    
    $criticalChecksPassed = $CheckResults.LocalFilesValid -and $CheckResults.SshConnected
    
    Write-Host "`nOverall Status: " -NoNewline
    if ($criticalChecksPassed) {
        Write-Host "READY FOR DEPLOYMENT" -ForegroundColor Green
    }
    else {
        Write-Host "NOT READY - CRITICAL CHECKS FAILED" -ForegroundColor Red
    }
    
    if ($script:WarningDetails.Count -gt 0) {
        Write-Host "`nWarnings:" -ForegroundColor Yellow
        foreach ($warning in $script:WarningDetails) {
            Write-Host "  - $warning" -ForegroundColor Yellow
        }
    }
    
    Write-Log "Deployment readiness: CriticalPassed=$criticalChecksPassed, Warnings=$($script:WarningDetails.Count)" "INFO"
    
    return $criticalChecksPassed
}

# ============================================
# Main Script
# ============================================

Write-Host @"

================================================================
              MGRNZ Deployment Script
              Local -> Production
================================================================

"@ -ForegroundColor Cyan

if ($DryRun) {
    Write-Host "DRY RUN MODE - No changes will be made" -ForegroundColor Yellow
    Write-Host ""
}

Write-Log "Deployment started. Environment=$Environment, DryRun=$DryRun" "INFO"

# Log operation start with parameters
Write-OperationStart -OperationName "Deployment" -Parameters @{
    Environment = $Environment
    DryRun = $DryRun
    SkipBackup = $SkipBackup
    SkipChecks = $SkipChecks
    Force = $Force
    ThemesOnly = $ThemesOnly
    PluginsOnly = $PluginsOnly
    MuPluginsOnly = $MuPluginsOnly
    ChangedOnly = $ChangedOnly
}

# ============================================
# Step 1: Load and Validate Credentials
# ============================================

Write-Step "[1/6] Loading deployment credentials..."

$credentials = Get-DeploymentCredentials -Environment $Environment

if (-not $credentials) {
    Write-Error-Message "Failed to load credentials for environment: $Environment"
    Write-Host "`nRun: .\scripts\test-connection.ps1 -ShowHelp" -ForegroundColor Yellow
    exit 1
}

Write-Success "Credentials loaded for $Environment"

if (-not (Test-DeploymentCredentials -Credentials $credentials -Environment $Environment)) {
    Write-Error-Message "Credential validation failed"
    exit 1
}

Write-Success "Credentials validated"

# Load production URL from environment
$prodEnvPath = Join-Path $RootDir ".env.production"
$productionUrl = "https://$($credentials.host)"

if (Test-Path $prodEnvPath) {
    $prodEnvContent = Get-Content $prodEnvPath
    $urlLine = $prodEnvContent | Where-Object { $_ -match '^WP_HOME=' }
    if ($urlLine) {
        $productionUrl = ($urlLine -split '=')[1].Trim().Trim('"').Trim("'")
    }
}

Write-Info "Production URL: $productionUrl"

# ============================================
# Step 2: Pre-Deployment Checks
# ============================================

if (-not $SkipChecks) {
    Write-Step "[2/6] Running pre-deployment checks..."
    
    $checkResults = @{
        ProductionAccessible = $false
        LocalFilesValid = $false
        GitClean = $false
        SshConnected = $false
    }
    
    $checkResults.ProductionAccessible = Test-ProductionAccessibility -ProductionUrl $productionUrl
    
    $localWpContent = Join-Path $RootDir "wp\wp-content"
    if (-not (Test-Path $localWpContent)) {
        $localWpContent = Join-Path $RootDir "wp-content"
    }
    
    $checkResults.LocalFilesValid = Test-LocalFiles -WpContentPath $localWpContent
    $checkResults.GitClean = Test-GitStatus
    
    Write-Info "Testing SSH connection..."
    $checkResults.SshConnected = Test-SFTPConnection -Credentials $credentials -Environment $Environment
    
    $script:PreChecksPassed = Get-DeploymentReadinessReport `
        -Credentials $credentials `
        -WpContentPath $localWpContent `
        -ProductionUrl $productionUrl `
        -CheckResults $checkResults
    
    if (-not $script:PreChecksPassed) {
        Write-Host "`n" -NoNewline
        Write-Danger "Pre-deployment checks failed!"
        Write-Host "`nCritical issues must be resolved before deployment." -ForegroundColor Red
        
        if (-not (Confirm-Action "Do you want to continue anyway? (NOT RECOMMENDED)" "yes")) {
            Write-Host "`nDeployment cancelled." -ForegroundColor Yellow
            Write-Log "Deployment cancelled: Pre-checks failed" "INFO"
            exit 1
        }
    }
}
else {
    Write-Step "[2/6] Skipping pre-deployment checks (--SkipChecks flag)"
    Write-Warning-Message "Pre-deployment checks skipped"
    Write-Log "Pre-deployment checks skipped by user" "WARNING"
}

# ============================================
# Step 3: Display Deployment Summary
# ============================================

Write-Step "[3/6] Deployment Summary"

Write-Host "`nTarget Environment: $Environment" -ForegroundColor White
Write-Host "Production Host: $($credentials.host)" -ForegroundColor White
Write-Host "Remote Path: $($credentials.remotePath)" -ForegroundColor White

$deployArgs = @(
    "-Environment", $Environment
)

if ($DryRun) { $deployArgs += "-DryRun" }
if ($SkipBackup) { $deployArgs += "-SkipBackup" }
if ($Force) { $deployArgs += "-Force" }
if ($ThemesOnly) { $deployArgs += "-ThemesOnly" }
if ($PluginsOnly) { $deployArgs += "-PluginsOnly" }
if ($MuPluginsOnly) { $deployArgs += "-MuPluginsOnly" }
if ($ChangedOnly) { $deployArgs += "-ChangedOnly" }

Write-Host "`nDeployment Options:" -ForegroundColor Cyan
if ($ThemesOnly) { Write-Host "  - Themes only" -ForegroundColor White }
elseif ($PluginsOnly) { Write-Host "  - Plugins only" -ForegroundColor White }
elseif ($MuPluginsOnly) { Write-Host "  - MU-Plugins only" -ForegroundColor White }
else { Write-Host "  - All directories (themes, plugins, mu-plugins)" -ForegroundColor White }

if ($ChangedOnly) { Write-Host "  - Changed files only" -ForegroundColor White }
if ($SkipBackup) { Write-Host "  - Skip backup (NOT RECOMMENDED)" -ForegroundColor Yellow }
if ($DryRun) { Write-Host "  - Dry run mode" -ForegroundColor Yellow }

# ============================================
# Step 4: Confirmation
# ============================================

if (-not $DryRun) {
    Write-Host "`n" -NoNewline
    Write-Danger "This will deploy files to production!"
    Write-Danger "Production files will be overwritten!"
    
    if (-not (Confirm-Action "Are you sure you want to proceed?" "yes")) {
        Write-Host "`nDeployment cancelled by user." -ForegroundColor Yellow
        Write-Log "Deployment cancelled by user" "INFO"
        exit 0
    }
}

# ============================================
# Step 5: Execute Deployment via file-push.ps1
# ============================================

Write-Step "[4/6] Executing deployment..."

Write-Info "Calling file-push.ps1 with deployment parameters..."
Write-Log "Executing: .\scripts\file-push.ps1 $($deployArgs -join ' ')" "INFO"

try {
    $filePushScript = Join-Path $ScriptDir "file-push.ps1"
    
    & $filePushScript @deployArgs
    
    $deployExitCode = $LASTEXITCODE
    
    if ($deployExitCode -eq 0) {
        Write-Success "Deployment completed successfully"
        Write-Log "file-push.ps1 completed with exit code 0" "SUCCESS"
        $script:FilesDeployed = $true
    }
    else {
        Write-Error-Message "Deployment failed with exit code $deployExitCode"
        Write-Log "file-push.ps1 failed with exit code $deployExitCode" "ERROR"
        $script:HasErrors = $true
    }
}
catch {
    Write-Error-Message "Exception during deployment: $_"
    Write-LogEntry -Message "Deployment exception: $_" -Level "ERROR" -Exception $_.Exception
    $script:HasErrors = $true
}

# ============================================
# Step 6: Post-Deployment Verification
# ============================================

if (-not $DryRun -and $script:FilesDeployed) {
    Write-Step "[5/6] Post-deployment verification..."
    
    Write-Info "Verifying production site accessibility..."
    
    try {
        $response = Invoke-WebRequest -Uri $productionUrl -Method Head -TimeoutSec 10 -UseBasicParsing -ErrorAction Stop
        
        if ($response.StatusCode -eq 200) {
            Write-Success "Production site is accessible (HTTP $($response.StatusCode))"
            Write-Log "Post-deployment: Site accessible (HTTP $($response.StatusCode))" "SUCCESS"
            $script:DeploymentVerified = $true
        }
        else {
            Write-Warning-Message "Production site returned HTTP $($response.StatusCode)"
            Write-Log "Post-deployment: Site returned HTTP $($response.StatusCode)" "WARNING"
        }
    }
    catch {
        Write-Warning-Message "Cannot reach production site: $_"
        Write-Log "Post-deployment: Site not accessible - $_" "WARNING"
    }
}
else {
    Write-Step "[5/6] Skipping verification (dry run or deployment failed)"
}

# ============================================
# Final Summary
# ============================================

Write-Step "[6/6] Deployment Summary"

$deploymentDuration = (Get-Date) - $script:DeploymentStartTime
$durationMinutes = [math]::Round($deploymentDuration.TotalMinutes, 2)

Write-Host "`n"

if ($DryRun) {
    Write-Host "================================================================" -ForegroundColor Yellow
    Write-Host "                  Dry Run Complete" -ForegroundColor Yellow
    Write-Host "================================================================" -ForegroundColor Yellow
    
    Write-Host "`nNo changes were made to production." -ForegroundColor White
    Write-Host "Run without -DryRun flag to perform actual deployment." -ForegroundColor Yellow
}
elseif ($script:HasErrors) {
    Write-Host "================================================================" -ForegroundColor Yellow
    Write-Host "          Deployment Completed with Errors" -ForegroundColor Yellow
    Write-Host "================================================================" -ForegroundColor Yellow
    
    Write-Host "`nDeployment encountered errors. Please review the log file." -ForegroundColor Red
    Write-Host "Duration: $durationMinutes minutes" -ForegroundColor White
    
    if ($script:ErrorDetails.Count -gt 0) {
        Write-Host "`nErrors:" -ForegroundColor Red
        foreach ($error in $script:ErrorDetails) {
            Write-Host "  - $error" -ForegroundColor Red
        }
    }
}
else {
    Write-Host "================================================================" -ForegroundColor Green
    Write-Host "              Deployment Successful!" -ForegroundColor Green
    Write-Host "================================================================" -ForegroundColor Green
    
    Write-Host "`nDeployment completed successfully." -ForegroundColor White
    Write-Host "Duration: $durationMinutes minutes" -ForegroundColor White
    
    if ($script:DeploymentVerified) {
        Write-Host "`n[OK] Post-deployment verification passed" -ForegroundColor Green
    }
    
    Write-Host "`n!!! Important: Test your production site thoroughly!" -ForegroundColor Yellow
}

Write-Host "`nLog file:" -ForegroundColor Cyan
Write-Host "  $LogFile" -ForegroundColor Gray

Write-Host "`n"

Write-Log "Deployment completed. HasErrors=$script:HasErrors, Duration=$durationMinutes min" "INFO"

# Log operation end with summary
Write-OperationEnd -OperationName "Deployment" -Success (-not $script:HasErrors) -DurationSeconds ($deploymentDuration.TotalSeconds) -Summary @{
    Environment = $Environment
    PreChecksPassed = $script:PreChecksPassed
    BackupCreated = $script:BackupCreated
    FilesDeployed = $script:FilesDeployed
    DeploymentVerified = $script:DeploymentVerified
    ErrorCount = $script:ErrorDetails.Count
    WarningCount = $script:WarningDetails.Count
    DurationMinutes = $durationMinutes
}
