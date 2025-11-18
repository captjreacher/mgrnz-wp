#Requires -Version 5.1
<#
.SYNOPSIS
    Fix URLs after importing production database to local
#>

param(
    [string]$LocalAdminPassword = "admin"
)

Write-Host ""
Write-Host "=== Fixing URLs for Local Environment ===" -ForegroundColor Cyan
Write-Host ""

# Find Local's MySQL client
$localMysqlPaths = @(
    "C:\Program Files\Local\resources\extraResources\lightning-services\mysql-8.0.16+3\bin\win64\bin\mysql.exe",
    "C:\Program Files (x86)\Local\resources\extraResources\lightning-services\mysql-8.0.16+3\bin\win64\bin\mysql.exe"
)

$mysqlPath = $null
foreach ($path in $localMysqlPaths) {
    if (Test-Path $path) {
        $mysqlPath = $path
        break
    }
}

if (-not $mysqlPath) {
    Write-Host "MySQL client not found. Using manual SQL commands instead..." -ForegroundColor Yellow
    Write-Host ""
    Write-Host "Please run these commands in Local's Adminer:" -ForegroundColor Cyan
    Write-Host ""
    Write-Host "1. Open Local app -> mgrnz site -> Database tab -> ADMINER" -ForegroundColor White
    Write-Host "2. Click 'SQL command' in the left menu" -ForegroundColor White
    Write-Host "3. Copy and paste these commands:" -ForegroundColor White
    Write-Host ""
    Write-Host "-- Replace URLs" -ForegroundColor Gray
    Write-Host "UPDATE wp_options SET option_value = REPLACE(option_value, 'https://mgrnz.com', 'http://mgrnz.local');" -ForegroundColor Yellow
    Write-Host "UPDATE wp_posts SET post_content = REPLACE(post_content, 'https://mgrnz.com', 'http://mgrnz.local');" -ForegroundColor Yellow
    Write-Host "UPDATE wp_posts SET guid = REPLACE(guid, 'https://mgrnz.com', 'http://mgrnz.local');" -ForegroundColor Yellow
    Write-Host "UPDATE wp_postmeta SET meta_value = REPLACE(meta_value, 'https://mgrnz.com', 'http://mgrnz.local');" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "-- Reset admin password" -ForegroundColor Gray
    Write-Host "UPDATE wp_users SET user_pass = MD5('$LocalAdminPassword') WHERE ID = 1;" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "4. Click 'Execute'" -ForegroundColor White
    Write-Host ""
    exit 0
}

# Load environment
$rootDir = Split-Path -Parent $PSScriptRoot
$localEnvPath = Join-Path $rootDir ".env.local"

function Load-EnvFile {
    param([string]$FilePath)
    $envVars = @{}
    Get-Content $FilePath | ForEach-Object {
        $line = $_.Trim()
        if ($line -and -not $line.StartsWith('#')) {
            if ($line -match '^([^=]+)=(.*)$') {
                $key = $matches[1].Trim()
                $value = $matches[2].Trim() -replace '^["`'']|["`'']$', ''
                $envVars[$key] = $value
            }
        }
    }
    return $envVars
}

$localEnv = Load-EnvFile $localEnvPath
$dbName = $localEnv['DB_NAME']
$dbUser = $localEnv['DB_USER']
$dbPassword = $localEnv['DB_PASSWORD']
$dbHost = $localEnv['DB_HOST']

Write-Host "Database: $dbName" -ForegroundColor Gray
Write-Host ""

# Replace URLs in wp_options
Write-Host "1. Fixing URLs in wp_options..." -ForegroundColor Yellow
$query1 = "UPDATE wp_options SET option_value = REPLACE(option_value, 'https://mgrnz.com', 'http://mgrnz.local');"
& $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $query1 $dbName 2>&1 | Out-Null
if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK wp_options updated" -ForegroundColor Green
}

# Replace URLs in wp_posts content
Write-Host "2. Fixing URLs in wp_posts..." -ForegroundColor Yellow
$query2 = "UPDATE wp_posts SET post_content = REPLACE(post_content, 'https://mgrnz.com', 'http://mgrnz.local');"
& $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $query2 $dbName 2>&1 | Out-Null
if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK wp_posts content updated" -ForegroundColor Green
}

# Replace URLs in wp_posts guid
Write-Host "3. Fixing GUIDs in wp_posts..." -ForegroundColor Yellow
$query3 = "UPDATE wp_posts SET guid = REPLACE(guid, 'https://mgrnz.com', 'http://mgrnz.local');"
& $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $query3 $dbName 2>&1 | Out-Null
if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK wp_posts GUIDs updated" -ForegroundColor Green
}

# Replace URLs in wp_postmeta
Write-Host "4. Fixing URLs in wp_postmeta..." -ForegroundColor Yellow
$query4 = "UPDATE wp_postmeta SET meta_value = REPLACE(meta_value, 'https://mgrnz.com', 'http://mgrnz.local');"
& $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $query4 $dbName 2>&1 | Out-Null
if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK wp_postmeta updated" -ForegroundColor Green
}

# Reset admin password
Write-Host "5. Resetting admin password..." -ForegroundColor Yellow
$query5 = "UPDATE wp_users SET user_pass = MD5('$LocalAdminPassword') WHERE ID = 1;"
& $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $query5 $dbName 2>&1 | Out-Null
if ($LASTEXITCODE -eq 0) {
    Write-Host "   OK Admin password reset to: $LocalAdminPassword" -ForegroundColor Green
}

Write-Host ""
Write-Host "=== URL Fix Complete! ===" -ForegroundColor Green
Write-Host ""
Write-Host "Your local site is ready:" -ForegroundColor Cyan
Write-Host "  URL: http://mgrnz.local" -ForegroundColor White
Write-Host "  Admin: http://mgrnz.local/wp-admin" -ForegroundColor White
Write-Host "  Password: $LocalAdminPassword" -ForegroundColor White
Write-Host ""
Write-Host "Try accessing your site now!" -ForegroundColor Yellow
Write-Host ""
