#Requires -Version 5.1
<#
.SYNOPSIS
    Test SSH connection to production server and locate WordPress installation
#>

param(
    [string]$Hostname = "66.29.148.18",
    [string]$Username = "hdmqglfetq",
    [int]$Port = 21098
)

Write-Host ""
Write-Host "=== Testing SSH Connection to Production ===" -ForegroundColor Cyan
Write-Host ""

# Test basic SSH connection
Write-Host "Testing SSH connection to $Username@$Hostname..." -ForegroundColor Yellow
Write-Host ""
Write-Host "You will be prompted for your SSH password." -ForegroundColor Gray
Write-Host ""

# Try to connect and run basic commands
$sshCommand = @"
echo '=== Connection Successful ==='
echo ''
echo 'Current Directory:'
pwd
echo ''
echo 'Home Directory Contents:'
ls -la ~
echo ''
echo 'Looking for WordPress installations...'
find ~ -maxdepth 3 -name 'wp-config.php' 2>/dev/null
echo ''
echo 'Checking for public_html:'
ls -la ~/public_html 2>/dev/null || echo 'No public_html directory'
echo ''
echo 'Checking for www:'
ls -la ~/www 2>/dev/null || echo 'No www directory'
echo ''
echo 'Checking for htdocs:'
ls -la ~/htdocs 2>/dev/null || echo 'No htdocs directory'
echo ''
echo 'Testing WP-CLI:'
which wp
wp --version 2>/dev/null || echo 'WP-CLI not found in PATH'
"@

Write-Host "Connecting on port $Port..." -ForegroundColor Gray
ssh -p $Port "$Username@$Hostname" $sshCommand

if ($LASTEXITCODE -eq 0) {
    Write-Host ""
    Write-Host "=== SSH Connection Test Complete ===" -ForegroundColor Green
    Write-Host ""
    Write-Host "Next Steps:" -ForegroundColor Cyan
    Write-Host "1. Review the output above to find your WordPress installation path" -ForegroundColor White
    Write-Host "2. Look for the path containing 'wp-config.php'" -ForegroundColor White
    Write-Host "3. Note the WordPress path for the database pull script" -ForegroundColor White
    Write-Host ""
} else {
    Write-Host ""
    Write-Host "=== SSH Connection Failed ===" -ForegroundColor Red
    Write-Host ""
    Write-Host "Possible issues:" -ForegroundColor Yellow
    Write-Host "- Incorrect password" -ForegroundColor White
    Write-Host "- SSH not enabled on hosting account" -ForegroundColor White
    Write-Host "- Firewall blocking connection" -ForegroundColor White
    Write-Host "- Wrong hostname or username" -ForegroundColor White
    Write-Host ""
    Write-Host "Please check your Spaceship hosting panel for SSH access details." -ForegroundColor Gray
    Write-Host ""
}
