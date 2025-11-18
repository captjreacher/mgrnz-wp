#Requires -Version 5.1
<#
.SYNOPSIS
    Check available methods to access production data
#>

Write-Host ""
Write-Host "=== Production Access Diagnostic ===" -ForegroundColor Cyan
Write-Host ""

# Check if we can reach the production site
Write-Host "1. Testing production site accessibility..." -ForegroundColor Yellow
try {
    $response = Invoke-WebRequest -Uri "https://mgrnz.com" -Method Head -TimeoutSec 10 -UseBasicParsing
    Write-Host "   OK Production site is accessible (Status: $($response.StatusCode))" -ForegroundColor Green
} catch {
    Write-Host "   WARNING: Could not reach production site" -ForegroundColor Red
    Write-Host "   Error: $($_.Exception.Message)" -ForegroundColor Gray
}
Write-Host ""

# Check for WordPress REST API
Write-Host "2. Testing WordPress REST API..." -ForegroundColor Yellow
try {
    $apiResponse = Invoke-RestMethod -Uri "https://mgrnz.com/wp-json/wp/v2" -TimeoutSec 10
    Write-Host "   OK WordPress REST API is accessible" -ForegroundColor Green
    Write-Host "   API Namespace: $($apiResponse.namespace)" -ForegroundColor Gray
} catch {
    Write-Host "   WARNING: REST API not accessible or blocked" -ForegroundColor Yellow
    Write-Host "   Error: $($_.Exception.Message)" -ForegroundColor Gray
}
Write-Host ""

# Check for common backup/migration plugin endpoints
Write-Host "3. Checking for migration plugins..." -ForegroundColor Yellow

$pluginEndpoints = @{
    "All-in-One WP Migration" = "https://mgrnz.com/wp-content/plugins/all-in-one-wp-migration"
    "Duplicator" = "https://mgrnz.com/wp-content/plugins/duplicator"
    "WP Migrate DB" = "https://mgrnz.com/wp-content/plugins/wp-migrate-db"
    "UpdraftPlus" = "https://mgrnz.com/wp-content/plugins/updraftplus"
}

foreach ($plugin in $pluginEndpoints.GetEnumerator()) {
    try {
        $pluginCheck = Invoke-WebRequest -Uri $plugin.Value -Method Head -TimeoutSec 5 -UseBasicParsing -ErrorAction SilentlyContinue
        if ($pluginCheck.StatusCode -eq 200 -or $pluginCheck.StatusCode -eq 403) {
            Write-Host "   FOUND: $($plugin.Key)" -ForegroundColor Green
        }
    } catch {
        Write-Host "   Not found: $($plugin.Key)" -ForegroundColor Gray
    }
}
Write-Host ""

# Check SSH with different ports
Write-Host "4. Testing SSH on common ports..." -ForegroundColor Yellow

$sshPorts = @(22, 2222, 2200, 22000)
$hostname = "mgrnz.com"

foreach ($port in $sshPorts) {
    Write-Host "   Testing port $port..." -ForegroundColor Gray
    $tcpClient = New-Object System.Net.Sockets.TcpClient
    try {
        $tcpClient.Connect($hostname, $port)
        if ($tcpClient.Connected) {
            Write-Host "   FOUND: SSH responding on port $port" -ForegroundColor Green
            $tcpClient.Close()
            break
        }
    } catch {
        Write-Host "   Port ${port}: Not accessible" -ForegroundColor Gray
    } finally {
        $tcpClient.Dispose()
    }
}
Write-Host ""

# Check for phpMyAdmin
Write-Host "5. Checking for phpMyAdmin..." -ForegroundColor Yellow
$phpmyadminUrls = @(
    "https://mgrnz.com/phpmyadmin",
    "https://mgrnz.com/phpMyAdmin",
    "https://mgrnz.com/pma",
    "https://mgrnz.com/mysql"
)

foreach ($url in $phpmyadminUrls) {
    try {
        $pmaCheck = Invoke-WebRequest -Uri $url -Method Head -TimeoutSec 5 -UseBasicParsing -ErrorAction SilentlyContinue
        if ($pmaCheck.StatusCode -eq 200 -or $pmaCheck.StatusCode -eq 401) {
            Write-Host "   FOUND: phpMyAdmin at $url" -ForegroundColor Green
            break
        }
    } catch {
        # Silent fail
    }
}
Write-Host "   Note: phpMyAdmin is usually accessed through hosting control panel" -ForegroundColor Gray
Write-Host ""

# Summary
Write-Host "=== Recommendations ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Based on the diagnostic, here are your options:" -ForegroundColor White
Write-Host ""
Write-Host "Option 1: Manual Export via Hosting Panel (EASIEST)" -ForegroundColor Green
Write-Host "  1. Log into Spaceship hosting control panel" -ForegroundColor White
Write-Host "  2. Find phpMyAdmin in the database section" -ForegroundColor White
Write-Host "  3. Export the database as SQL" -ForegroundColor White
Write-Host "  4. Run: .\scripts\manual-db-import.ps1 -SqlFile 'path\to\export.sql'" -ForegroundColor White
Write-Host ""

Write-Host "Option 2: Install Migration Plugin" -ForegroundColor Yellow
Write-Host "  1. Log into WordPress admin at https://mgrnz.com/wp-admin" -ForegroundColor White
Write-Host "  2. Install 'All-in-One WP Migration' plugin" -ForegroundColor White
Write-Host "  3. Export database only" -ForegroundColor White
Write-Host "  4. Download and import locally" -ForegroundColor White
Write-Host ""

Write-Host "Option 3: Enable SSH Access" -ForegroundColor Yellow
Write-Host "  1. Check Spaceship control panel for SSH settings" -ForegroundColor White
Write-Host "  2. Enable SSH access if available" -ForegroundColor White
Write-Host "  3. Note the correct hostname and port" -ForegroundColor White
Write-Host "  4. Run: .\scripts\db-pull.ps1" -ForegroundColor White
Write-Host ""

Write-Host "=== Next Steps ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Which option would you like to try?" -ForegroundColor White
Write-Host ""
