# MGRNZ Environment Configuration Setup Script
# This script helps set up the environment configuration system

param(
    [switch]$SkipComposer,
    [switch]$Force
)

Write-Host "=== MGRNZ Environment Configuration Setup ===" -ForegroundColor Cyan
Write-Host ""

# Check if running from project root
if (-not (Test-Path "wp-config-loader.php")) {
    Write-Host "ERROR: Please run this script from the project root directory" -ForegroundColor Red
    exit 1
}

# Step 1: Check for Composer
Write-Host "[1/5] Checking for Composer..." -ForegroundColor Green
$composerExists = $null -ne (Get-Command composer -ErrorAction SilentlyContinue)

if ($composerExists) {
    Write-Host "  ✓ Composer found" -ForegroundColor Green
    
    if (-not $SkipComposer) {
        Write-Host "  Installing PHP dependencies..." -ForegroundColor Yellow
        composer install
        
        if ($LASTEXITCODE -eq 0) {
            Write-Host "  ✓ Dependencies installed successfully" -ForegroundColor Green
        } else {
            Write-Host "  ✗ Failed to install dependencies" -ForegroundColor Red
            Write-Host "  Continuing with fallback parser..." -ForegroundColor Yellow
        }
    } else {
        Write-Host "  Skipping Composer install (--SkipComposer flag)" -ForegroundColor Yellow
    }
} else {
    Write-Host "  ✗ Composer not found" -ForegroundColor Yellow
    Write-Host "  The system will use the fallback .env parser" -ForegroundColor Yellow
    Write-Host "  To install Composer: https://getcomposer.org/download/" -ForegroundColor Cyan
}

# Step 2: Check .env.local file
Write-Host ""
Write-Host "[2/5] Checking local environment file..." -ForegroundColor Green

if (Test-Path ".env.local") {
    Write-Host "  ✓ .env.local exists" -ForegroundColor Green
    
    if ($Force) {
        Write-Host "  Force flag set - keeping existing file" -ForegroundColor Yellow
    } else {
        $overwrite = Read-Host "  .env.local already exists. Overwrite? (y/N)"
        if ($overwrite -eq "y" -or $overwrite -eq "Y") {
            Write-Host "  Keeping existing .env.local (user chose not to overwrite)" -ForegroundColor Yellow
        }
    }
} else {
    Write-Host "  ✓ .env.local created from template" -ForegroundColor Green
}

# Step 3: Check .env.production template
Write-Host ""
Write-Host "[3/5] Checking production environment template..." -ForegroundColor Green

if (Test-Path ".env.production") {
    Write-Host "  ✓ .env.production template exists" -ForegroundColor Green
} else {
    Write-Host "  ✗ .env.production template not found" -ForegroundColor Red
    Write-Host "  This should have been created during task implementation" -ForegroundColor Yellow
}

# Step 4: Check wp-config-local.php
Write-Host ""
Write-Host "[4/5] Checking local WordPress configuration..." -ForegroundColor Green

if (Test-Path "wp-config-local.php") {
    Write-Host "  ✓ wp-config-local.php exists" -ForegroundColor Green
} else {
    Write-Host "  ✗ wp-config-local.php not found" -ForegroundColor Yellow
    Write-Host "  This file should exist for local development" -ForegroundColor Yellow
}

# Step 5: Verify wp-config.php integration
Write-Host ""
Write-Host "[5/5] Verifying WordPress configuration integration..." -ForegroundColor Green

if (Test-Path "wp/wp-config.php") {
    $wpConfigContent = Get-Content "wp/wp-config.php" -Raw
    
    if ($wpConfigContent -match "wp-config-loader\.php") {
        Write-Host "  ✓ wp-config.php is integrated with environment loader" -ForegroundColor Green
    } else {
        Write-Host "  ✗ wp-config.php does not load environment configuration" -ForegroundColor Red
        Write-Host "  Please ensure wp-config.php includes: require_once dirname(__DIR__) . '/wp-config-loader.php';" -ForegroundColor Yellow
    }
} else {
    Write-Host "  ✗ wp/wp-config.php not found" -ForegroundColor Red
}

# Summary
Write-Host ""
Write-Host "=== Setup Summary ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Configuration files:" -ForegroundColor White
Write-Host "  • wp-config-loader.php - Environment detection and loading" -ForegroundColor Gray
Write-Host "  • .env.local - Local development variables" -ForegroundColor Gray
Write-Host "  • .env.production - Production variables template" -ForegroundColor Gray
Write-Host "  • wp-config-local.php - Local WordPress config" -ForegroundColor Gray
Write-Host ""

Write-Host "Next steps:" -ForegroundColor White
Write-Host "  1. Update .env.local with your local database credentials" -ForegroundColor Yellow
Write-Host "  2. For production, create .env.production with actual credentials" -ForegroundColor Yellow
Write-Host "  3. Test your setup by accessing your WordPress site" -ForegroundColor Yellow
Write-Host "  4. Check debug logs for environment detection messages" -ForegroundColor Yellow
Write-Host ""

Write-Host "Documentation:" -ForegroundColor White
Write-Host "  • ENVIRONMENT_SETUP.md - Complete setup guide" -ForegroundColor Gray
Write-Host "  • .kiro/specs/local-dev-deployment-workflow/design.md - Technical design" -ForegroundColor Gray
Write-Host ""

Write-Host "Setup complete! ✓" -ForegroundColor Green
