#Requires -Version 5.1
<#
.SYNOPSIS
    Pull WordPress files from production using SCP
#>

$ErrorActionPreference = "Stop"

# Configuration
$ProductionHost = "66.29.148.18"
$ProductionUser = "hdmqglfetq"
$ProductionPath = "/home/hdmqglfetq/mgrnz.com/wp"
$SSHPort = 21098
$SSHKey = "C:\Users\user\.ssh\mgrnz-deploy-20251118-074007"

Write-Host ""
Write-Host "=== Pulling WordPress Files from Production ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "This will download themes and plugins from production." -ForegroundColor Gray
Write-Host ""

# Create directories
if (-not (Test-Path ".\wp\wp-content")) {
    New-Item -ItemType Directory -Path ".\wp\wp-content" -Force | Out-Null
}

# Pull themes
Write-Host "1. Pulling themes..." -ForegroundColor Yellow
scp -i $SSHKey -P $SSHPort -r "${ProductionUser}@${ProductionHost}:${ProductionPath}/wp-content/themes" ".\wp\wp-content\"

if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK Themes downloaded" -ForegroundColor Green
} else {
    Write-Host "   ERROR: Failed to download themes" -ForegroundColor Red
}

# Pull plugins
Write-Host "2. Pulling plugins..." -ForegroundColor Yellow
scp -i $SSHKey -P $SSHPort -r "${ProductionUser}@${ProductionHost}:${ProductionPath}/wp-content/plugins" ".\wp\wp-content\"

if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK Plugins downloaded" -ForegroundColor Green
} else {
    Write-Host "   ERROR: Failed to download plugins" -ForegroundColor Red
}

# Pull mu-plugins if exists
Write-Host "3. Pulling mu-plugins..." -ForegroundColor Yellow
scp -i $SSHKey -P $SSHPort -r "${ProductionUser}@${ProductionHost}:${ProductionPath}/wp-content/mu-plugins" ".\wp\wp-content\" 2>$null

if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK MU-plugins downloaded" -ForegroundColor Green
} else {
    Write-Host "   Note: No mu-plugins found (this is normal)" -ForegroundColor Gray
}

Write-Host ""
Write-Host "=== Pull Complete! ===" -ForegroundColor Green
Write-Host ""
Write-Host "Production WordPress files are now in .\wp\wp-content\" -ForegroundColor White
Write-Host ""
Write-Host "Next steps:" -ForegroundColor Cyan
Write-Host "1. Review the files in .\wp\wp-content\" -ForegroundColor White
Write-Host "2. Initialize Git and commit:" -ForegroundColor White
Write-Host "   git init" -ForegroundColor Gray
Write-Host "   git add ." -ForegroundColor Gray
Write-Host "   git commit -m 'Initial commit from production'" -ForegroundColor Gray
Write-Host "3. Add remote and push:" -ForegroundColor White
Write-Host "   git remote add origin https://github.com/YOUR_USERNAME/mgrnz-wp.git" -ForegroundColor Gray
Write-Host "   git push -u origin main" -ForegroundColor Gray
Write-Host ""
