#Requires -Version 5.1
<#
.SYNOPSIS
    Pull WordPress files from production to local
#>

param(
    [switch]$SkipUploads
)

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

# Create wp directory if it doesn't exist
if (-not (Test-Path ".\wp")) {
    New-Item -ItemType Directory -Path ".\wp" | Out-Null
}

# Pull wp-content (themes, plugins, mu-plugins)
Write-Host "1. Pulling wp-content..." -ForegroundColor Yellow

$excludes = @(
    "--exclude=cache/",
    "--exclude=upgrade/",
    "--exclude=backups/",
    "--exclude=*.log"
)

if ($SkipUploads) {
    $excludes += "--exclude=uploads/"
    Write-Host "   (Skipping uploads folder)" -ForegroundColor Gray
}

$rsyncArgs = @(
    "-avz",
    "-e", "ssh -i `"$SSHKey`" -p $SSHPort"
) + $excludes + @(
    "${ProductionUser}@${ProductionHost}:${ProductionPath}/wp-content/",
    ".\wp\wp-content\"
)

& rsync @rsyncArgs

if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK wp-content synced" -ForegroundColor Green
} else {
    Write-Host "   ERROR: Failed to sync wp-content" -ForegroundColor Red
    exit 1
}

# Pull configuration files
Write-Host "2. Pulling configuration files..." -ForegroundColor Yellow

scp -i $SSHKey -P $SSHPort "${ProductionUser}@${ProductionHost}:${ProductionPath}/wp-config.php" ".\wp\" 2>$null

if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK wp-config.php downloaded" -ForegroundColor Green
} else {
    Write-Host "   Note: wp-config.php not found (this is normal)" -ForegroundColor Gray
}

# Pull .htaccess if exists
scp -i $SSHKey -P $SSHPort "${ProductionUser}@${ProductionHost}:${ProductionPath}/.htaccess" ".\" 2>$null

if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK .htaccess downloaded" -ForegroundColor Green
}

Write-Host ""
Write-Host "=== Pull Complete! ===" -ForegroundColor Green
Write-Host ""
Write-Host "Production files are now in your local directory." -ForegroundColor White
Write-Host ""
Write-Host "Next steps:" -ForegroundColor Cyan
Write-Host "1. Review the files" -ForegroundColor White
Write-Host "2. Commit to Git: git add . && git commit -m 'Initial commit from production'" -ForegroundColor White
Write-Host "3. Push to GitHub: git push -u origin main" -ForegroundColor White
Write-Host ""
