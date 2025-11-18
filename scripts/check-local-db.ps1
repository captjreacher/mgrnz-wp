#Requires -Version 5.1
<#
.SYNOPSIS
    Check local database status and content
#>

$ErrorActionPreference = "Stop"

Write-Host ""
Write-Host "=== Local Database Diagnostic ===" -ForegroundColor Cyan

# Check if running in Local by Flywheel environment
$localSitePath = "$env:USERPROFILE\Local Sites\mgrnz"
$wpPath = "$localSitePath\app\public"

if (-not (Test-Path $wpPath)) {
    Write-Host "X Local site not found at: $wpPath" -ForegroundColor Red
    exit 1
}

Write-Host "OK Local site found at: $wpPath" -ForegroundColor Green

# Load environment variables
$rootDir = Split-Path -Parent $PSScriptRoot
$envPath = Join-Path $rootDir ".env.local"
if (-not (Test-Path $envPath)) {
    Write-Host "X .env.local not found" -ForegroundColor Red
    exit 1
}

Write-Host "OK .env.local found" -ForegroundColor Green

# Parse .env.local
$envVars = @{}
Get-Content $envPath | ForEach-Object {
    $line = $_.Trim()
    if ($line -and -not $line.StartsWith('#')) {
        if ($line -match '^([^=]+)=(.*)$') {
            $key = $matches[1].Trim()
            $value = $matches[2].Trim() -replace '^["`'']|["`'']$', ''
            $envVars[$key] = $value
        }
    }
}

$dbName = $envVars['DB_NAME']
$dbUser = $envVars['DB_USER']
$dbPassword = $envVars['DB_PASSWORD']
$dbHost = $envVars['DB_HOST']

Write-Host ""
Write-Host "Database Configuration:" -ForegroundColor Cyan
Write-Host "  DB_NAME: $dbName"
Write-Host "  DB_USER: $dbUser"
Write-Host "  DB_HOST: $dbHost"

# Try to connect using mysql command (if available in Local)
Write-Host ""
Write-Host "Attempting to query database..." -ForegroundColor Cyan

# Local by Flywheel typically uses these paths
$possibleMysqlPaths = @(
    "C:\Program Files\Local\resources\extraResources\lightning-services\mysql-8.0.16+3\bin\win64\bin\mysql.exe",
    "C:\Program Files (x86)\Local\resources\extraResources\lightning-services\mysql-8.0.16+3\bin\win64\bin\mysql.exe"
)

$mysqlPath = $null
foreach ($path in $possibleMysqlPaths) {
    if (Test-Path $path) {
        $mysqlPath = $path
        break
    }
}

if ($mysqlPath) {
    Write-Host "OK Found MySQL at: $mysqlPath" -ForegroundColor Green
    
    # Query table count
    $query = "SELECT COUNT(*) as table_count FROM information_schema.tables WHERE table_schema = '$dbName';"
    $result = & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $query 2>&1
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host ""
        Write-Host "Query Result:" -ForegroundColor Green
        Write-Host $result
        
        # Query for WordPress posts
        $postQuery = "SELECT COUNT(*) as post_count FROM ${dbName}.wp_posts WHERE post_type = 'post' AND post_status = 'publish';"
        $postResult = & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $postQuery 2>&1
        
        if ($LASTEXITCODE -eq 0) {
            Write-Host ""
            Write-Host "Published Posts:" -ForegroundColor Green
            Write-Host $postResult
        }
    } else {
        Write-Host "X Failed to query database" -ForegroundColor Red
        Write-Host $result
    }
} else {
    Write-Host "X MySQL client not found in Local installation" -ForegroundColor Yellow
    Write-Host "  You may need to use Local built-in database tools" -ForegroundColor Gray
}

# Check for recent backups
$backupDir = Join-Path $rootDir "backups"
if (Test-Path $backupDir) {
    Write-Host ""
    Write-Host "Recent Backups:" -ForegroundColor Cyan
    Get-ChildItem $backupDir -Filter "*.sql" | 
        Sort-Object LastWriteTime -Descending | 
        Select-Object -First 5 | 
        ForEach-Object {
            $size = [math]::Round($_.Length / 1MB, 2)
            Write-Host "  $($_.Name) - ${size}MB - $($_.LastWriteTime)" -ForegroundColor Gray
        }
} else {
    Write-Host ""
    Write-Host "! No backups directory found" -ForegroundColor Yellow
}

# Check for recent database pulls
$logDir = Join-Path $rootDir "logs"
if (Test-Path $logDir) {
    Write-Host ""
    Write-Host "Recent Database Pull Logs:" -ForegroundColor Cyan
    Get-ChildItem $logDir -Filter "db-pull-*.log" | 
        Sort-Object LastWriteTime -Descending | 
        Select-Object -First 3 | 
        ForEach-Object {
            Write-Host "  $($_.Name) - $($_.LastWriteTime)" -ForegroundColor Gray
        }
}

Write-Host ""
Write-Host "=== Diagnostic Complete ===" -ForegroundColor Cyan
Write-Host ""
