#Requires -Version 5.1
<#
.SYNOPSIS
    Simple database pull from production using SSH port 21098
#>

param(
    [switch]$SkipBackup,
    [string]$LocalAdminPassword = "admin"
)

$ErrorActionPreference = "Stop"
$Timestamp = Get-Date -Format "yyyyMMdd-HHmmss"

# Configuration
$ProductionHost = "66.29.148.18"
$ProductionUser = "hdmqglfetq"
$ProductionPath = "/home/hdmqglfetq/mgrnz.com/wp"
$SSHPort = 21098

Write-Host ""
Write-Host "=== Database Pull from Production ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Host: ${ProductionHost}:${SSHPort}" -ForegroundColor Gray
Write-Host "User: $ProductionUser" -ForegroundColor Gray
Write-Host "Path: $ProductionPath" -ForegroundColor Gray
Write-Host ""

# Export database on production
Write-Host "Step 1: Exporting production database..." -ForegroundColor Yellow
$prodExportFile = "mgrnz-prod-$Timestamp.sql"
$prodExportPath = "/tmp/$prodExportFile"

$exportCmd = "cd $ProductionPath && wp db export $prodExportPath --add-drop-table"
Write-Host "Running: $exportCmd" -ForegroundColor Gray

ssh -p $SSHPort "$ProductionUser@$ProductionHost" $exportCmd

if ($LASTEXITCODE -ne 0) {
    Write-Host "ERROR: Failed to export database" -ForegroundColor Red
    exit 1
}

Write-Host "OK Database exported" -ForegroundColor Green
Write-Host ""

# Download database
Write-Host "Step 2: Downloading database..." -ForegroundColor Yellow
$localDownloadPath = ".\backups\$prodExportFile"

if (-not (Test-Path ".\backups")) {
    New-Item -ItemType Directory -Path ".\backups" | Out-Null
}

scp -P $SSHPort "${ProductionUser}@${ProductionHost}:$prodExportPath" $localDownloadPath

if ($LASTEXITCODE -ne 0) {
    Write-Host "ERROR: Failed to download database" -ForegroundColor Red
    exit 1
}

$fileSize = [math]::Round((Get-Item $localDownloadPath).Length / 1MB, 2)
Write-Host "OK Downloaded ${fileSize}MB" -ForegroundColor Green
Write-Host ""

# Clean up remote file
ssh -p $SSHPort "$ProductionUser@$ProductionHost" "rm -f $prodExportPath"

# Import to local
Write-Host "Step 3: Importing to local database..." -ForegroundColor Yellow
Write-Host "Using manual import script..." -ForegroundColor Gray
Write-Host ""

.\scripts\manual-db-import.ps1 -SqlFile $localDownloadPath -LocalAdminPassword $LocalAdminPassword

Write-Host ""
Write-Host "=== Database Pull Complete ===" -ForegroundColor Green
Write-Host ""
Write-Host "Production data is now in your local environment!" -ForegroundColor White
Write-Host "Access your site at: http://mgrnz.local" -ForegroundColor Cyan
Write-Host ""
