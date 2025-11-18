#Requires -Version 5.1
<#
.SYNOPSIS
    Manually import a production database export into local environment
    
.DESCRIPTION
    This script imports a manually exported SQL file from production,
    performs URL search-replace, and resets admin credentials.
    
.PARAMETER SqlFile
    Path to the SQL file exported from production
    
.PARAMETER SkipBackup
    Skip creating a backup of the local database before import
    
.PARAMETER LocalAdminPassword
    Password to set for the local admin user (default: admin)
    
.EXAMPLE
    .\scripts\manual-db-import.ps1 -SqlFile "C:\Downloads\production-export.sql"
    
.EXAMPLE
    .\scripts\manual-db-import.ps1 -SqlFile ".\backups\prod.sql" -LocalAdminPassword "mypassword"
#>

param(
    [Parameter(Mandatory=$true)]
    [string]$SqlFile,
    [switch]$SkipBackup,
    [string]$LocalAdminPassword = "admin"
)

$ErrorActionPreference = "Stop"
$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$RootDir = Split-Path -Parent $ScriptDir
$BackupDir = Join-Path $RootDir "backups"
$Timestamp = Get-Date -Format "yyyyMMdd-HHmmss"

Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Manual Database Import                              ║
║        Production → Local                                  ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Cyan

# Validate SQL file exists
if (-not (Test-Path $SqlFile)) {
    Write-Host "ERROR: SQL file not found: $SqlFile" -ForegroundColor Red
    exit 1
}

$sqlFileInfo = Get-Item $SqlFile
$fileSize = [math]::Round($sqlFileInfo.Length / 1MB, 2)
Write-Host "SQL File: $SqlFile" -ForegroundColor Gray
Write-Host "File Size: ${fileSize}MB" -ForegroundColor Gray
Write-Host ""

# Load environment files
Write-Host "Loading environment configuration..." -ForegroundColor Cyan

$localEnvPath = Join-Path $RootDir ".env.local"
if (-not (Test-Path $localEnvPath)) {
    Write-Host "ERROR: .env.local not found" -ForegroundColor Red
    exit 1
}

$prodEnvPath = Join-Path $RootDir ".env.production"
if (-not (Test-Path $prodEnvPath)) {
    Write-Host "ERROR: .env.production not found" -ForegroundColor Red
    exit 1
}

# Parse environment files
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
$prodEnv = Load-EnvFile $prodEnvPath

$localUrl = $localEnv['WP_HOME']
$prodUrl = $prodEnv['WP_HOME']

Write-Host "OK Configuration loaded" -ForegroundColor Green
Write-Host "  Local URL: $localUrl" -ForegroundColor Gray
Write-Host "  Production URL: $prodUrl" -ForegroundColor Gray
Write-Host ""

# Determine WordPress path
$wpPath = Join-Path $RootDir "wp"
if (-not (Test-Path $wpPath)) {
    $wpPath = $RootDir
}

# Check for Local by Flywheel installation
$localSitePath = "$env:USERPROFILE\Local Sites\mgrnz\app\public"
if (Test-Path $localSitePath) {
    $wpPath = $localSitePath
    Write-Host "Detected Local by Flywheel installation" -ForegroundColor Gray
    Write-Host "  WordPress Path: $wpPath" -ForegroundColor Gray
    Write-Host ""
}

# Create backup directory
if (-not (Test-Path $BackupDir)) {
    New-Item -ItemType Directory -Path $BackupDir -Force | Out-Null
}

# Backup local database
if (-not $SkipBackup) {
    Write-Host "Backing up local database..." -ForegroundColor Cyan
    
    $localBackupFile = Join-Path $BackupDir "local-backup-$Timestamp.sql"
    
    # Try using Local's MySQL
    $localMysqlPaths = @(
        "C:\Program Files\Local\resources\extraResources\lightning-services\mysql-8.0.16+3\bin\win64\bin\mysqldump.exe",
        "C:\Program Files (x86)\Local\resources\extraResources\lightning-services\mysql-8.0.16+3\bin\win64\bin\mysqldump.exe"
    )
    
    $mysqldumpPath = $null
    foreach ($path in $localMysqlPaths) {
        if (Test-Path $path) {
            $mysqldumpPath = $path
            break
        }
    }
    
    if ($mysqldumpPath) {
        $dbName = $localEnv['DB_NAME']
        $dbUser = $localEnv['DB_USER']
        $dbPassword = $localEnv['DB_PASSWORD']
        $dbHost = $localEnv['DB_HOST']
        
        & $mysqldumpPath -u $dbUser -p$dbPassword -h $dbHost $dbName > $localBackupFile 2>&1
        
        if ($LASTEXITCODE -eq 0 -and (Test-Path $localBackupFile)) {
            $backupSize = [math]::Round((Get-Item $localBackupFile).Length / 1MB, 2)
            Write-Host "OK Local database backed up: ${backupSize}MB" -ForegroundColor Green
            Write-Host "  Backup: $localBackupFile" -ForegroundColor Gray
        } else {
            Write-Host "WARNING: Could not backup local database" -ForegroundColor Yellow
            Write-Host "  Continuing without backup..." -ForegroundColor Gray
        }
    } else {
        Write-Host "WARNING: mysqldump not found, skipping backup" -ForegroundColor Yellow
    }
    Write-Host ""
}

# Import database
Write-Host "Importing production database..." -ForegroundColor Cyan

# Try using Local's MySQL
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
    Write-Host "ERROR: MySQL client not found" -ForegroundColor Red
    Write-Host ""
    Write-Host "Local by Flywheel's MySQL client is not in the expected location." -ForegroundColor Yellow
    Write-Host "Please use Local's built-in database import feature:" -ForegroundColor Yellow
    Write-Host "  1. Open Local app" -ForegroundColor White
    Write-Host "  2. Click on your 'mgrnz' site" -ForegroundColor White
    Write-Host "  3. Go to 'Database' tab" -ForegroundColor White
    Write-Host "  4. Click 'Import' and select your SQL file" -ForegroundColor White
    Write-Host ""
    exit 1
}

$dbName = $localEnv['DB_NAME']
$dbUser = $localEnv['DB_USER']
$dbPassword = $localEnv['DB_PASSWORD']
$dbHost = $localEnv['DB_HOST']

Write-Host "  Dropping existing tables..." -ForegroundColor Gray
$dropQuery = "DROP DATABASE IF EXISTS $dbName; CREATE DATABASE $dbName;"
$dropResult = echo $dropQuery | & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost 2>&1

Write-Host "  Importing SQL file (this may take a moment)..." -ForegroundColor Gray
$importResult = Get-Content $SqlFile | & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost $dbName 2>&1

if ($LASTEXITCODE -eq 0) {
    Write-Host "OK Database imported successfully" -ForegroundColor Green
    Write-Host ""
} else {
    Write-Host "ERROR: Database import failed" -ForegroundColor Red
    Write-Host $importResult
    exit 1
}

# Verify import
Write-Host "Verifying import..." -ForegroundColor Cyan
$verifyQuery = "SELECT COUNT(*) as table_count FROM information_schema.tables WHERE table_schema = '$dbName';"
$tableCount = & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $verifyQuery -N 2>&1

if ($LASTEXITCODE -eq 0) {
    Write-Host "OK Database has $tableCount tables" -ForegroundColor Green
    Write-Host ""
} else {
    Write-Host "WARNING: Could not verify database" -ForegroundColor Yellow
    Write-Host ""
}

# Search-Replace URLs
Write-Host "Replacing URLs ($prodUrl -> $localUrl)..." -ForegroundColor Cyan

# Build search-replace queries
$tables = & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e "SHOW TABLES;" -N $dbName 2>&1

$replaceCount = 0
foreach ($table in $tables) {
    if ($table -match '^\w+$') {
        # Get columns
        $columns = & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e "SHOW COLUMNS FROM $table;" -N $dbName 2>&1
        
        foreach ($column in $columns) {
            $columnName = ($column -split '\t')[0]
            $columnType = ($column -split '\t')[1]
            
            # Only update text columns
            if ($columnType -match 'char|text|blob') {
                $updateQuery = "UPDATE $table SET $columnName = REPLACE($columnName, '$prodUrl', '$localUrl') WHERE $columnName LIKE '%$prodUrl%';"
                & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $updateQuery $dbName 2>&1 | Out-Null
                if ($LASTEXITCODE -eq 0) {
                    $replaceCount++
                }
            }
        }
    }
}

Write-Host "OK URLs replaced in $replaceCount locations" -ForegroundColor Green
Write-Host ""

# Reset admin password
Write-Host "Resetting admin credentials..." -ForegroundColor Cyan

$adminQuery = "SELECT user_login FROM wp_users WHERE ID = 1;"
$adminUser = & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $adminQuery -N $dbName 2>&1

if ($adminUser) {
    $passwordHash = [System.Web.Security.Membership]::GeneratePassword(16, 4)
    # Use MD5 for simplicity (WordPress will upgrade on first login)
    $md5 = New-Object -TypeName System.Security.Cryptography.MD5CryptoServiceProvider
    $utf8 = New-Object -TypeName System.Text.UTF8Encoding
    $hash = [System.BitConverter]::ToString($md5.ComputeHash($utf8.GetBytes($LocalAdminPassword)))
    $hash = $hash.Replace("-", "").ToLower()
    
    $updatePasswordQuery = "UPDATE wp_users SET user_pass = MD5('$LocalAdminPassword') WHERE ID = 1;"
    & $mysqlPath -u $dbUser -p$dbPassword -h $dbHost -e $updatePasswordQuery $dbName 2>&1 | Out-Null
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host "OK Admin password reset" -ForegroundColor Green
        Write-Host "  Username: $adminUser" -ForegroundColor Gray
        Write-Host "  Password: $LocalAdminPassword" -ForegroundColor Gray
    } else {
        Write-Host "WARNING: Could not reset admin password" -ForegroundColor Yellow
    }
} else {
    Write-Host "WARNING: Could not find admin user" -ForegroundColor Yellow
}

Write-Host ""

# Summary
Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Import Complete!                                    ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Green

Write-Host "Summary:" -ForegroundColor Cyan
Write-Host "  • Production database imported" -ForegroundColor White
Write-Host "  • URLs replaced: $prodUrl -> $localUrl" -ForegroundColor White
Write-Host "  • Admin credentials reset" -ForegroundColor White

Write-Host ""
Write-Host "You can now access your local site at:" -ForegroundColor Cyan
Write-Host "  $localUrl" -ForegroundColor White
Write-Host "  Username: $adminUser" -ForegroundColor White
Write-Host "  Password: $LocalAdminPassword" -ForegroundColor White
Write-Host ""
