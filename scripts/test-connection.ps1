#Requires -Version 5.1
<#
.SYNOPSIS
    Test SFTP/SSH connection to deployment server
    
.DESCRIPTION
    Validates deployment credentials and tests connectivity to the specified environment.
    Useful for verifying credentials before attempting deployment operations.
    
.PARAMETER Environment
    Target environment to test (production or staging)
    
.PARAMETER ShowHelp
    Display credentials setup help
    
.EXAMPLE
    .\scripts\test-connection.ps1 -Environment production
    
.EXAMPLE
    .\scripts\test-connection.ps1 -ShowHelp
#>

param(
    [Parameter(Mandatory=$false)]
    [ValidateSet("production", "staging")]
    [string]$Environment = "production",
    
    [switch]$ShowHelp
)

$ErrorActionPreference = "Stop"
$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$RootDir = Split-Path -Parent $ScriptDir

# Import credentials module
Import-Module (Join-Path $ScriptDir "DeploymentCredentials.psm1") -Force

# ============================================
# Main Script
# ============================================

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        SFTP/SSH Connection Test                            ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Cyan

if ($ShowHelp) {
    Show-CredentialsSetupHelp
    exit 0
}

Write-Host "Testing connection to: $Environment" -ForegroundColor Yellow
Write-Host ""

# Step 1: Load credentials
Write-Host "==> Loading credentials..." -ForegroundColor Cyan

$credentials = Get-DeploymentCredentials -Environment $Environment

if (-not $credentials) {
    Write-Host "`n✗ Failed to load credentials" -ForegroundColor Red
    Write-Host "`nRun with -ShowHelp flag for setup instructions:" -ForegroundColor Yellow
    Write-Host "  .\scripts\test-connection.ps1 -ShowHelp" -ForegroundColor Gray
    exit 1
}

Write-Host "  ✓ Credentials loaded" -ForegroundColor Green

# Step 2: Validate credentials
Write-Host "`n==> Validating credentials..." -ForegroundColor Cyan

$isValid = Test-DeploymentCredentials -Credentials $credentials -Environment $Environment

if (-not $isValid) {
    Write-Host "`n✗ Credential validation failed" -ForegroundColor Red
    exit 1
}

Write-Host "  ✓ Credentials are valid" -ForegroundColor Green

# Step 3: Test connection
Write-Host "`n==> Testing connection..." -ForegroundColor Cyan

$connected = Test-SFTPConnection -Credentials $credentials -Environment $Environment -Timeout 15

if (-not $connected) {
    Write-Host "`n╔════════════════════════════════════════════════════════════╗" -ForegroundColor Red
    Write-Host "║                  Connection Failed                         ║" -ForegroundColor Red
    Write-Host "╚════════════════════════════════════════════════════════════╝" -ForegroundColor Red
    
    Write-Host "`nTroubleshooting steps:" -ForegroundColor Yellow
    Write-Host "  1. Verify host is accessible: ping $($credentials.host)" -ForegroundColor White
    Write-Host "  2. Check SSH port is correct (usually 22)" -ForegroundColor White
    Write-Host "  3. Verify username and password/key are correct" -ForegroundColor White
    Write-Host "  4. Ensure firewall allows SSH connections" -ForegroundColor White
    Write-Host "  5. Test manually: ssh -p $($credentials.port) $($credentials.username)@$($credentials.host)" -ForegroundColor White
    Write-Host ""
    
    exit 1
}

# Step 4: Test remote path
Write-Host "`n==> Verifying remote path..." -ForegroundColor Cyan

try {
    $remotePath = $credentials.remotePath
    $testCommand = 'test -d ' + $remotePath + ' && echo exists || echo notfound'
    $sshArgs = Get-SSHCommandArgs -Credentials $credentials -Command $testCommand
    $result = & ssh $sshArgs 2>&1
    
    if ($result -match "exists") {
        Write-Host "  ✓ Remote path exists: $($credentials.remotePath)" -ForegroundColor Green
    }
    else {
        Write-Host "  ⚠ Remote path may not exist: $($credentials.remotePath)" -ForegroundColor Yellow
        Write-Host "    Please verify the path is correct" -ForegroundColor Yellow
    }
}
catch {
    Write-Host "  ⚠ Could not verify remote path: $_" -ForegroundColor Yellow
}

# Step 5: Test WP-CLI availability
Write-Host "`n==> Checking WP-CLI on remote server..." -ForegroundColor Cyan

try {
    $remotePath = $credentials.remotePath
    $wpCommand = 'cd ' + $remotePath + ' && wp --version 2>&1'
    $sshArgs = Get-SSHCommandArgs -Credentials $credentials -Command $wpCommand
    $result = & ssh $sshArgs 2>&1
    
    if ($result -match "WP-CLI") {
        Write-Host "  ✓ WP-CLI is available: $result" -ForegroundColor Green
    }
    else {
        Write-Host "  ⚠ WP-CLI may not be installed on remote server" -ForegroundColor Yellow
        Write-Host "    Some deployment operations may not work" -ForegroundColor Yellow
    }
}
catch {
    Write-Host "  ⚠ Could not check WP-CLI: $_" -ForegroundColor Yellow
}

# Success summary
Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Connection Test Successful!                         ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Green

Write-Host "Connection Details:" -ForegroundColor Cyan
Write-Host "  Environment: $Environment" -ForegroundColor White
Write-Host "  Host: $($credentials.host):$($credentials.port)" -ForegroundColor White
Write-Host "  User: $($credentials.username)" -ForegroundColor White
Write-Host "  Remote Path: $($credentials.remotePath)" -ForegroundColor White

Write-Host "`nYou can now use deployment scripts with this environment." -ForegroundColor Green
Write-Host ""

exit 0
