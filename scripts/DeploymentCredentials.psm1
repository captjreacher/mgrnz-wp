#Requires -Version 5.1
<#
.SYNOPSIS
    Deployment credentials management module
    
.DESCRIPTION
    Provides functions for loading, validating, and managing deployment credentials
    for SFTP/SSH connections to production and staging environments.
#>

# ============================================
# Credential Loading Functions
# ============================================

function Get-DeploymentCredentials {
    <#
    .SYNOPSIS
        Load deployment credentials from .deploy-credentials.json
        
    .PARAMETER Environment
        Target environment (production, staging)
        
    .PARAMETER CredentialsPath
        Path to credentials file (default: .deploy-credentials.json in root)
        
    .EXAMPLE
        $creds = Get-DeploymentCredentials -Environment "production"
    #>
    param(
        [Parameter(Mandatory=$true)]
        [ValidateSet("production", "staging")]
        [string]$Environment,
        
        [string]$CredentialsPath = ""
    )
    
    # Determine credentials file path
    if (-not $CredentialsPath) {
        $scriptRoot = Split-Path -Parent $PSScriptRoot
        $CredentialsPath = Join-Path $scriptRoot ".deploy-credentials.json"
    }
    
    # Check if credentials file exists
    if (-not (Test-Path $CredentialsPath)) {
        Write-Error "Credentials file not found: $CredentialsPath"
        Write-Host "`nTo create credentials file:" -ForegroundColor Yellow
        Write-Host "  1. Copy .deploy-credentials.json.example to .deploy-credentials.json" -ForegroundColor White
        Write-Host "  2. Edit the file with your SFTP/SSH credentials" -ForegroundColor White
        Write-Host "  3. Ensure the file is in .gitignore (already configured)" -ForegroundColor White
        return $null
    }
    
    try {
        # Load and parse JSON
        $credentialsJson = Get-Content $CredentialsPath -Raw | ConvertFrom-Json
        
        # Get environment-specific credentials
        $envCreds = $credentialsJson.$Environment
        
        if (-not $envCreds) {
            Write-Error "No credentials found for environment: $Environment"
            Write-Host "`nAvailable environments in credentials file:" -ForegroundColor Yellow
            $credentialsJson.PSObject.Properties.Name | ForEach-Object {
                Write-Host "  • $_" -ForegroundColor White
            }
            return $null
        }
        
        return $envCreds
    }
    catch {
        Write-Error "Failed to load credentials: $_"
        Write-Host "`nPlease verify that .deploy-credentials.json is valid JSON" -ForegroundColor Yellow
        return $null
    }
}

function Test-DeploymentCredentials {
    <#
    .SYNOPSIS
        Validate deployment credentials structure and required fields
        
    .PARAMETER Credentials
        Credentials object to validate
        
    .PARAMETER Environment
        Environment name (for error messages)
        
    .EXAMPLE
        $isValid = Test-DeploymentCredentials -Credentials $creds -Environment "production"
    #>
    param(
        [Parameter(Mandatory=$true)]
        [PSCustomObject]$Credentials,
        
        [string]$Environment = "unknown"
    )
    
    $isValid = $true
    $errors = @()
    
    # Required fields
    $requiredFields = @("host", "port", "username", "remotePath")
    
    foreach ($field in $requiredFields) {
        if (-not $Credentials.PSObject.Properties.Name.Contains($field)) {
            $errors += "Missing required field: $field"
            $isValid = $false
        }
        elseif ([string]::IsNullOrWhiteSpace($Credentials.$field)) {
            $errors += "Field '$field' is empty"
            $isValid = $false
        }
    }
    
    # Validate port is numeric
    if ($Credentials.PSObject.Properties.Name.Contains("port")) {
        try {
            $portNum = [int]$Credentials.port
            if ($portNum -lt 1 -or $portNum -gt 65535) {
                $errors += "Port must be between 1 and 65535"
                $isValid = $false
            }
        }
        catch {
            $errors += "Port must be a valid number"
            $isValid = $false
        }
    }
    
    # Validate authentication method
    $hasPassword = -not [string]::IsNullOrWhiteSpace($Credentials.password)
    $hasPrivateKey = -not [string]::IsNullOrWhiteSpace($Credentials.privateKeyPath)
    $useKeyAuth = $Credentials.PSObject.Properties.Name.Contains("useKeyAuth") -and $Credentials.useKeyAuth
    
    if (-not $hasPassword -and -not $hasPrivateKey -and -not $useKeyAuth) {
        $errors += "No authentication method specified (password, privateKeyPath, or useKeyAuth)"
        $isValid = $false
    }
    
    # Validate private key file exists if specified
    if ($hasPrivateKey) {
        if (-not (Test-Path $Credentials.privateKeyPath)) {
            $errors += "Private key file not found: $($Credentials.privateKeyPath)"
            $isValid = $false
        }
    }
    
    # Display validation results
    if (-not $isValid) {
        Write-Host "`n✗ Credential validation failed for environment: $Environment" -ForegroundColor Red
        Write-Host "`nErrors:" -ForegroundColor Yellow
        foreach ($error in $errors) {
            Write-Host "  • $error" -ForegroundColor Red
        }
        Write-Host "`nPlease update .deploy-credentials.json with correct values" -ForegroundColor Yellow
    }
    
    return $isValid
}

function Test-SFTPConnection {
    <#
    .SYNOPSIS
        Test SFTP/SSH connection to remote server
        
    .PARAMETER Credentials
        Credentials object with connection details
        
    .PARAMETER Environment
        Environment name (for display purposes)
        
    .PARAMETER Timeout
        Connection timeout in seconds (default: 10)
        
    .EXAMPLE
        $connected = Test-SFTPConnection -Credentials $creds -Environment "production"
    #>
    param(
        [Parameter(Mandatory=$true)]
        [PSCustomObject]$Credentials,
        
        [string]$Environment = "unknown",
        
        [int]$Timeout = 10
    )
    
    Write-Host "`nTesting connection to $Environment..." -ForegroundColor Cyan
    Write-Host "  Host: $($Credentials.host):$($Credentials.port)" -ForegroundColor Gray
    Write-Host "  User: $($Credentials.username)" -ForegroundColor Gray
    
    try {
        # Build SSH command
        $sshCommand = "ssh"
        $sshArgs = @(
            "-o", "ConnectTimeout=$Timeout",
            "-o", "StrictHostKeyChecking=no",
            "-o", "BatchMode=yes",
            "-p", $Credentials.port
        )
        
        # Add private key if specified
        if (-not [string]::IsNullOrWhiteSpace($Credentials.privateKeyPath)) {
            $sshArgs += @("-i", $Credentials.privateKeyPath)
        }
        
        # Add user@host
        $sshArgs += "$($Credentials.username)@$($Credentials.host)"
        
        # Test command
        $sshArgs += "echo 'Connection successful'"
        
        # Execute test
        $result = & $sshCommand $sshArgs 2>&1
        $exitCode = $LASTEXITCODE
        
        if ($exitCode -eq 0 -and $result -match "Connection successful") {
            Write-Host "  [OK] Connection successful" -ForegroundColor Green
            return $true
        }
        else {
            Write-Host "  [FAIL] Connection failed" -ForegroundColor Red
            Write-Host "  Error: $result" -ForegroundColor Red
            return $false
        }
    }
    catch {
        Write-Host "  [FAIL] Connection test failed: $_" -ForegroundColor Red
        return $false
    }
}

function Get-SFTPConnectionString {
    <#
    .SYNOPSIS
        Build SFTP connection string from credentials
        
    .PARAMETER Credentials
        Credentials object
        
    .EXAMPLE
        $connStr = Get-SFTPConnectionString -Credentials $creds
        # Returns: "username@host:port"
    #>
    param(
        [Parameter(Mandatory=$true)]
        [PSCustomObject]$Credentials
    )
    
    return "$($Credentials.username)@$($Credentials.host)"
}

function Get-SSHCommandArgs {
    <#
    .SYNOPSIS
        Build SSH command arguments array from credentials
        
    .PARAMETER Credentials
        Credentials object
        
    .PARAMETER Command
        Command to execute on remote server
        
    .EXAMPLE
        $args = Get-SSHCommandArgs -Credentials $creds -Command "ls -la"
    #>
    param(
        [Parameter(Mandatory=$true)]
        [PSCustomObject]$Credentials,
        
        [string]$Command = ""
    )
    
    $args = @(
        "-o", "StrictHostKeyChecking=no",
        "-p", $Credentials.port
    )
    
    # Add private key if specified
    if (-not [string]::IsNullOrWhiteSpace($Credentials.privateKeyPath)) {
        $args += @("-i", $Credentials.privateKeyPath)
    }
    
    # Add user@host
    $args += "$($Credentials.username)@$($Credentials.host)"
    
    # Add command if provided
    if ($Command) {
        $args += $Command
    }
    
    return $args
}

function Get-SCPCommandArgs {
    <#
    .SYNOPSIS
        Build SCP command arguments array from credentials
        
    .PARAMETER Credentials
        Credentials object
        
    .PARAMETER Source
        Source file path
        
    .PARAMETER Destination
        Destination file path
        
    .PARAMETER Upload
        If true, upload from local to remote. If false, download from remote to local.
        
    .EXAMPLE
        $args = Get-SCPCommandArgs -Credentials $creds -Source "local.txt" -Destination "/remote/path/file.txt" -Upload
    #>
    param(
        [Parameter(Mandatory=$true)]
        [PSCustomObject]$Credentials,
        
        [Parameter(Mandatory=$true)]
        [string]$Source,
        
        [Parameter(Mandatory=$true)]
        [string]$Destination,
        
        [switch]$Upload
    )
    
    $args = @(
        "-o", "StrictHostKeyChecking=no",
        "-P", $Credentials.port
    )
    
    # Add private key if specified
    if (-not [string]::IsNullOrWhiteSpace($Credentials.privateKeyPath)) {
        $args += @("-i", $Credentials.privateKeyPath)
    }
    
    # Build source and destination with remote prefix
    if ($Upload) {
        $args += $Source
        $args += "$($Credentials.username)@$($Credentials.host):$Destination"
    }
    else {
        $args += "$($Credentials.username)@$($Credentials.host):$Source"
        $args += $Destination
    }
    
    return $args
}

function Show-CredentialsSetupHelp {
    <#
    .SYNOPSIS
        Display help for setting up deployment credentials
    #>
    
    Write-Host @"

╔════════════════════════════════════════════════════════════╗
║                                                            ║
║        Deployment Credentials Setup                        ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝

"@ -ForegroundColor Cyan

    Write-Host "To set up deployment credentials:" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "1. Copy the example file:" -ForegroundColor White
    Write-Host "   Copy-Item .deploy-credentials.json.example .deploy-credentials.json" -ForegroundColor Gray
    Write-Host ""
    Write-Host "2. Edit .deploy-credentials.json with your credentials:" -ForegroundColor White
    Write-Host "   • host: Your server hostname or IP address" -ForegroundColor Gray
    Write-Host "   • port: SSH port (usually 22)" -ForegroundColor Gray
    Write-Host "   • username: Your SSH username" -ForegroundColor Gray
    Write-Host "   • password: Your password (or leave empty for key auth)" -ForegroundColor Gray
    Write-Host "   • privateKeyPath: Path to SSH private key (optional)" -ForegroundColor Gray
    Write-Host "   • remotePath: Path to WordPress on remote server" -ForegroundColor Gray
    Write-Host "   • useKeyAuth: Set to true for SSH key authentication" -ForegroundColor Gray
    Write-Host ""
    Write-Host "3. The file is already in .gitignore and won't be committed" -ForegroundColor White
    Write-Host ""
    Write-Host "4. Test your connection:" -ForegroundColor White
    Write-Host "   .\scripts\test-connection.ps1 -Environment production" -ForegroundColor Gray
    Write-Host ""
    Write-Host "Authentication Methods:" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "  Password Authentication:" -ForegroundColor White
    Write-Host "    Set 'password' field and leave 'privateKeyPath' empty" -ForegroundColor Gray
    Write-Host ""
    Write-Host "  SSH Key Authentication (Recommended):" -ForegroundColor White
    Write-Host "    Set 'privateKeyPath' to your private key file" -ForegroundColor Gray
    Write-Host "    Set 'useKeyAuth' to true" -ForegroundColor Gray
    Write-Host "    Leave 'password' empty" -ForegroundColor Gray
    Write-Host ""
    Write-Host "  Default SSH Key:" -ForegroundColor White
    Write-Host "    Set 'useKeyAuth' to true" -ForegroundColor Gray
    Write-Host "    Leave both 'password' and 'privateKeyPath' empty" -ForegroundColor Gray
    Write-Host "    SSH will use your default key (~/.ssh/id_rsa)" -ForegroundColor Gray
    Write-Host ""
}

# Export module functions
Export-ModuleMember -Function @(
    'Get-DeploymentCredentials',
    'Test-DeploymentCredentials',
    'Test-SFTPConnection',
    'Get-SFTPConnectionString',
    'Get-SSHCommandArgs',
    'Get-SCPCommandArgs',
    'Show-CredentialsSetupHelp'
)
