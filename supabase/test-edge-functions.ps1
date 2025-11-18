# Edge Function Testing Script
# This script provides commands to test all Supabase edge functions locally or in production

param(
    [Parameter(Mandatory=$false)]
    [ValidateSet("local", "production")]
    [string]$Environment = "local",
    
    [Parameter(Mandatory=$false)]
    [ValidateSet("ai-intake", "ai-intake-decision", "ml-to-hugo", "wp-sync", "all")]
    [string]$Function = "all",
    
    [Parameter(Mandatory=$false)]
    [switch]$ShowLogs
)

# Color output functions
function Write-Success { param($msg) Write-Host $msg -ForegroundColor Green }
function Write-Info { param($msg) Write-Host $msg -ForegroundColor Cyan }
function Write-Warning { param($msg) Write-Host $msg -ForegroundColor Yellow }
function Write-Error { param($msg) Write-Host $msg -ForegroundColor Red }

# Configuration
$localBaseUrl = "http://localhost:54321/functions/v1"
$prodBaseUrl = "https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1"

$baseUrl = if ($Environment -eq "local") { $localBaseUrl } else { $prodBaseUrl }

Write-Info "=== Supabase Edge Function Testing ==="
Write-Info "Environment: $Environment"
Write-Info "Base URL: $baseUrl"
Write-Info ""

# Load environment variables
if ($Environment -eq "local") {
    if (Test-Path "supabase/.env.local") {
        Write-Info "Loading local environment variables..."
        Get-Content "supabase/.env.local" | ForEach-Object {
            if ($_ -match '^([^=]+)=(.*)$') {
                [System.Environment]::SetEnvironmentVariable($matches[1], $matches[2], "Process")
            }
        }
    } else {
        Write-Warning "Local .env file not found at supabase/.env.local"
    }
}

# Test functions
function Test-AiIntake {
    Write-Info "`n--- Testing ai-intake function ---"
    
    $payload = @{
        goal = "Automate customer onboarding process"
        workflow_description = "Currently manually sending welcome emails and setting up accounts. Takes 30 minutes per customer."
        tools = "Gmail, Google Sheets, Stripe"
        pain_points = "Time-consuming, prone to errors, inconsistent experience"
        email = "test@example.com"
        meta = @{
            source = "test-script"
            timestamp = (Get-Date).ToString("o")
        }
    } | ConvertTo-Json -Depth 10

    Write-Host "Payload:" -ForegroundColor Gray
    Write-Host $payload -ForegroundColor Gray
    Write-Host ""

    $headers = @{
        "Content-Type" = "application/json"
    }

    try {
        $response = Invoke-WebRequest -Uri "$baseUrl/ai-intake" `
            -Method POST `
            -Headers $headers `
            -Body $payload `
            -UseBasicParsing

        Write-Success "✓ Status: $($response.StatusCode)"
        Write-Host "Response:" -ForegroundColor Gray
        $response.Content | ConvertFrom-Json | ConvertTo-Json -Depth 10
    } catch {
        Write-Error "✗ Request failed: $($_.Exception.Message)"
        if ($_.Exception.Response) {
            $reader = New-Object System.IO.StreamReader($_.Exception.Response.GetResponseStream())
            $responseBody = $reader.ReadToEnd()
            Write-Host "Error Response: $responseBody" -ForegroundColor Red
        }
    }
}

function Test-AiIntakeDecision {
    Write-Info "`n--- Testing ai-intake-decision function ---"
    
    # Note: You'll need a valid intake_id from a previous ai-intake call
    Write-Warning "Note: Replace 'YOUR_INTAKE_ID' with an actual intake ID from the database"
    
    $payload = @{
        intake_id = "YOUR_INTAKE_ID"
        decision = "subscribe"  # or "consult"
    } | ConvertTo-Json

    Write-Host "Payload:" -ForegroundColor Gray
    Write-Host $payload -ForegroundColor Gray
    Write-Host ""

    $headers = @{
        "Content-Type" = "application/json"
    }

    try {
        $response = Invoke-WebRequest -Uri "$baseUrl/ai-intake-decision" `
            -Method POST `
            -Headers $headers `
            -Body $payload `
            -UseBasicParsing

        Write-Success "✓ Status: $($response.StatusCode)"
        Write-Host "Response:" -ForegroundColor Gray
        $response.Content | ConvertFrom-Json | ConvertTo-Json -Depth 10
    } catch {
        Write-Error "✗ Request failed: $($_.Exception.Message)"
        if ($_.Exception.Response) {
            $reader = New-Object System.IO.StreamReader($_.Exception.Response.GetResponseStream())
            $responseBody = $reader.ReadToEnd()
            Write-Host "Error Response: $responseBody" -ForegroundColor Red
        }
    }
}

function Test-MlToHugo {
    Write-Info "`n--- Testing ml-to-hugo function ---"
    
    # Simulate MailerLite webhook payload
    $payload = @{
        type = "subscriber.created"
        data = @{
            email = "test@example.com"
            id = "12345678"
            status = "active"
            subscribed_at = (Get-Date).ToString("o")
            fields = @{
                name = "Test User"
                company = "Test Company"
            }
        }
    } | ConvertTo-Json -Depth 10

    Write-Host "Payload:" -ForegroundColor Gray
    Write-Host $payload -ForegroundColor Gray
    Write-Host ""

    $headers = @{
        "Content-Type" = "application/json"
    }

    # Add signature header if secret is configured
    $mlSecret = [System.Environment]::GetEnvironmentVariable("MAILERLITE_WEBHOOK_SECRET")
    if ($mlSecret) {
        Write-Info "Adding webhook signature..."
        # Note: PowerShell HMAC-SHA256 signature generation
        $hmac = New-Object System.Security.Cryptography.HMACSHA256
        $hmac.Key = [Text.Encoding]::UTF8.GetBytes($mlSecret)
        $signature = [BitConverter]::ToString($hmac.ComputeHash([Text.Encoding]::UTF8.GetBytes($payload))).Replace("-", "").ToLower()
        $headers["x-mailerlite-signature"] = $signature
    }

    try {
        $response = Invoke-WebRequest -Uri "$baseUrl/ml-to-hugo" `
            -Method POST `
            -Headers $headers `
            -Body $payload `
            -UseBasicParsing

        Write-Success "✓ Status: $($response.StatusCode)"
        Write-Host "Response:" -ForegroundColor Gray
        $response.Content | ConvertFrom-Json | ConvertTo-Json -Depth 10
    } catch {
        Write-Error "✗ Request failed: $($_.Exception.Message)"
        if ($_.Exception.Response) {
            $reader = New-Object System.IO.StreamReader($_.Exception.Response.GetResponseStream())
            $responseBody = $reader.ReadToEnd()
            Write-Host "Error Response: $responseBody" -ForegroundColor Red
        }
    }
}

function Test-WpSync {
    Write-Info "`n--- Testing wp-sync function ---"
    
    $payload = @{
        event = "post_publish"
        post_id = 123
        slug = "test-post"
        title = "Test Post Title"
        status = "publish"
        author = "admin"
        timestamp = (Get-Date).ToString("o")
    } | ConvertTo-Json

    Write-Host "Payload:" -ForegroundColor Gray
    Write-Host $payload -ForegroundColor Gray
    Write-Host ""

    # Get webhook secret
    $webhookSecret = [System.Environment]::GetEnvironmentVariable("WEBHOOK_SECRET")
    if (-not $webhookSecret) {
        if ($Environment -eq "local") {
            $webhookSecret = "local-test-secret"
            Write-Warning "Using default local webhook secret"
        } else {
            Write-Error "WEBHOOK_SECRET not found in environment"
            return
        }
    }

    $headers = @{
        "Content-Type" = "application/json"
        "X-Webhook-Secret" = $webhookSecret
    }

    try {
        $response = Invoke-WebRequest -Uri "$baseUrl/wp-sync" `
            -Method POST `
            -Headers $headers `
            -Body $payload `
            -UseBasicParsing

        Write-Success "✓ Status: $($response.StatusCode)"
        Write-Host "Response:" -ForegroundColor Gray
        $response.Content | ConvertFrom-Json | ConvertTo-Json -Depth 10
    } catch {
        Write-Error "✗ Request failed: $($_.Exception.Message)"
        if ($_.Exception.Response) {
            $reader = New-Object System.IO.StreamReader($_.Exception.Response.GetResponseStream())
            $responseBody = $reader.ReadToEnd()
            Write-Host "Error Response: $responseBody" -ForegroundColor Red
        }
    }
}

function Show-FunctionLogs {
    param([string]$FunctionName)
    
    Write-Info "`n--- Viewing logs for $FunctionName ---"
    
    if ($Environment -eq "local") {
        Write-Info "Running: supabase functions logs $FunctionName"
        & supabase functions logs $FunctionName
    } else {
        Write-Info "Running: supabase functions logs $FunctionName --project-ref jqfodlzcsgfocyuawzyx"
        & supabase functions logs $FunctionName --project-ref jqfodlzcsgfocyuawzyx
    }
}

# Execute tests based on parameters
switch ($Function) {
    "ai-intake" {
        Test-AiIntake
        if ($ShowLogs) { Show-FunctionLogs "ai-intake" }
    }
    "ai-intake-decision" {
        Test-AiIntakeDecision
        if ($ShowLogs) { Show-FunctionLogs "ai-intake-decision" }
    }
    "ml-to-hugo" {
        Test-MlToHugo
        if ($ShowLogs) { Show-FunctionLogs "ml-to-hugo" }
    }
    "wp-sync" {
        Test-WpSync
        if ($ShowLogs) { Show-FunctionLogs "wp-sync" }
    }
    "all" {
        Test-WpSync
        Test-MlToHugo
        Test-AiIntake
        Write-Info "`nSkipping ai-intake-decision (requires valid intake_id)"
        Write-Info "To test ai-intake-decision, run: .\test-edge-functions.ps1 -Function ai-intake-decision -Environment $Environment"
    }
}

Write-Info "`n=== Testing Complete ==="
Write-Info "`nUsage examples:"
Write-Info "  .\test-edge-functions.ps1 -Function wp-sync -Environment local"
Write-Info "  .\test-edge-functions.ps1 -Function ai-intake -Environment production"
Write-Info "  .\test-edge-functions.ps1 -Function all -Environment local -ShowLogs"
Write-Info "  .\test-edge-functions.ps1 -Function wp-sync -ShowLogs"
