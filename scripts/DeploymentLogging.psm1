#Requires -Version 5.1
<#
.SYNOPSIS
    Centralized deployment logging module for MGRNZ deployment scripts
    
.DESCRIPTION
    Provides comprehensive logging functionality with support for:
    - Timestamped log entries
    - Multiple log levels (INFO, SUCCESS, WARNING, ERROR, CRITICAL)
    - Error logging with PowerShell stack traces
    - Transfer operation logging
    - Log file rotation and management
    
.NOTES
    This module is imported by all deployment scripts to ensure consistent
    logging across the deployment workflow.
#>

# Module-level variables
$script:LogDir = $null
$script:LogFile = $null
$script:LogLevel = "INFO"
$script:MaxLogSizeMB = 10
$script:MaxLogFiles = 30

# ============================================
# Core Logging Functions
# ============================================

function Initialize-DeploymentLog {
    <#
    .SYNOPSIS
        Initialize the deployment logging system
    
    .PARAMETER LogDirectory
        Directory where log files will be stored
    
    .PARAMETER LogFileName
        Name of the log file (without path)
    
    .PARAMETER LogLevel
        Minimum log level to record (DEBUG, INFO, WARNING, ERROR, CRITICAL)
    
    .EXAMPLE
        Initialize-DeploymentLog -LogDirectory "C:\logs" -LogFileName "deploy-20251118.log"
    #>
    param(
        [Parameter(Mandatory=$true)]
        [string]$LogDirectory,
        
        [Parameter(Mandatory=$true)]
        [string]$LogFileName,
        
        [Parameter(Mandatory=$false)]
        [ValidateSet("DEBUG", "INFO", "WARNING", "ERROR", "CRITICAL")]
        [string]$LogLevel = "INFO"
    )
    
    $script:LogDir = $LogDirectory
    $script:LogFile = Join-Path $LogDirectory $LogFileName
    $script:LogLevel = $LogLevel
    
    # Ensure log directory exists
    if (-not (Test-Path $LogDirectory)) {
        New-Item -ItemType Directory -Path $LogDirectory -Force | Out-Null
    }
    
    # Write initialization entry
    $initMessage = "=" * 80
    Add-Content -Path $script:LogFile -Value $initMessage -ErrorAction SilentlyContinue
    Write-LogEntry -Message "Deployment logging initialized" -Level "INFO"
    Write-LogEntry -Message "Log file: $script:LogFile" -Level "INFO"
    Write-LogEntry -Message "Log level: $LogLevel" -Level "INFO"
    Add-Content -Path $script:LogFile -Value $initMessage -ErrorAction SilentlyContinue
    
    # Perform log rotation if needed
    Invoke-LogRotation
}

function Write-LogEntry {
    <#
    .SYNOPSIS
        Write a log entry to the deployment log file
    
    .PARAMETER Message
        The message to log
    
    .PARAMETER Level
        Log level (DEBUG, INFO, SUCCESS, WARNING, ERROR, CRITICAL)
    
    .PARAMETER Exception
        Optional exception object to log with stack trace
    
    .PARAMETER AdditionalData
        Optional hashtable of additional data to include in the log
    
    .EXAMPLE
        Write-LogEntry -Message "Deployment started" -Level "INFO"
    
    .EXAMPLE
        Write-LogEntry -Message "Connection failed" -Level "ERROR" -Exception $_.Exception
    #>
    param(
        [Parameter(Mandatory=$true)]
        [string]$Message,
        
        [Parameter(Mandatory=$false)]
        [ValidateSet("DEBUG", "INFO", "SUCCESS", "WARNING", "ERROR", "CRITICAL")]
        [string]$Level = "INFO",
        
        [Parameter(Mandatory=$false)]
        [System.Exception]$Exception = $null,
        
        [Parameter(Mandatory=$false)]
        [hashtable]$AdditionalData = @{}
    )
    
    if (-not $script:LogFile) {
        Write-Warning "Logging not initialized. Call Initialize-DeploymentLog first."
        return
    }
    
    # Check if this level should be logged
    $levelPriority = @{
        "DEBUG" = 0
        "INFO" = 1
        "SUCCESS" = 1
        "WARNING" = 2
        "ERROR" = 3
        "CRITICAL" = 4
    }
    
    if ($levelPriority[$Level] -lt $levelPriority[$script:LogLevel]) {
        return
    }
    
    $timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss.fff"
    $logMessage = "[$timestamp] [$Level] $Message"
    
    # Add additional data if provided
    if ($AdditionalData.Count -gt 0) {
        $dataString = ($AdditionalData.GetEnumerator() | ForEach-Object { "$($_.Key)=$($_.Value)" }) -join ", "
        $logMessage += " | $dataString"
    }
    
    # Write main log entry
    try {
        Add-Content -Path $script:LogFile -Value $logMessage -ErrorAction Stop
    }
    catch {
        Write-Warning "Failed to write to log file: $_"
        return
    }
    
    # Log exception details if provided
    if ($Exception) {
        Write-ExceptionDetails -Exception $Exception
    }
}

function Write-ExceptionDetails {
    <#
    .SYNOPSIS
        Write detailed exception information including stack trace
    
    .PARAMETER Exception
        The exception object to log
    
    .EXAMPLE
        Write-ExceptionDetails -Exception $_.Exception
    #>
    param(
        [Parameter(Mandatory=$true)]
        [System.Exception]$Exception
    )
    
    if (-not $script:LogFile) {
        return
    }
    
    $timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss.fff"
    
    try {
        # Log exception type and message
        $exceptionLog = @"
[$timestamp] [EXCEPTION] Exception Type: $($Exception.GetType().FullName)
[$timestamp] [EXCEPTION] Exception Message: $($Exception.Message)
"@
        Add-Content -Path $script:LogFile -Value $exceptionLog -ErrorAction Stop
        
        # Log inner exception if present
        if ($Exception.InnerException) {
            $innerLog = "[$timestamp] [EXCEPTION] Inner Exception: $($Exception.InnerException.Message)"
            Add-Content -Path $script:LogFile -Value $innerLog -ErrorAction Stop
        }
        
        # Log stack trace
        if ($Exception.StackTrace) {
            $stackLog = "[$timestamp] [STACK_TRACE] Stack Trace:"
            Add-Content -Path $script:LogFile -Value $stackLog -ErrorAction Stop
            
            # Format stack trace for readability
            $stackLines = $Exception.StackTrace -split "`n"
            foreach ($line in $stackLines) {
                $formattedLine = "[$timestamp] [STACK_TRACE]   $($line.Trim())"
                Add-Content -Path $script:LogFile -Value $formattedLine -ErrorAction Stop
            }
        }
        
        # Log PowerShell error record if available
        if ($global:Error.Count -gt 0) {
            $errorRecord = $global:Error[0]
            
            if ($errorRecord.InvocationInfo) {
                $invocationLog = @"
[$timestamp] [INVOCATION] Script: $($errorRecord.InvocationInfo.ScriptName)
[$timestamp] [INVOCATION] Line: $($errorRecord.InvocationInfo.ScriptLineNumber)
[$timestamp] [INVOCATION] Command: $($errorRecord.InvocationInfo.Line.Trim())
"@
                Add-Content -Path $script:LogFile -Value $invocationLog -ErrorAction Stop
            }
            
            if ($errorRecord.ScriptStackTrace) {
                $psStackLog = "[$timestamp] [PS_STACK_TRACE] PowerShell Stack Trace:"
                Add-Content -Path $script:LogFile -Value $psStackLog -ErrorAction Stop
                
                $psStackLines = $errorRecord.ScriptStackTrace -split "`n"
                foreach ($line in $psStackLines) {
                    $formattedLine = "[$timestamp] [PS_STACK_TRACE]   $($line.Trim())"
                    Add-Content -Path $script:LogFile -Value $formattedLine -ErrorAction Stop
                }
            }
        }
        
        # Add separator
        Add-Content -Path $script:LogFile -Value "[$timestamp] [EXCEPTION] " + ("-" * 70) -ErrorAction Stop
    }
    catch {
        Write-Warning "Failed to write exception details to log: $_"
    }
}

function Write-TransferLog {
    <#
    .SYNOPSIS
        Log file transfer operations with detailed metrics
    
    .PARAMETER Operation
        Type of operation (UPLOAD, DOWNLOAD, SYNC, etc.)
    
    .PARAMETER Source
        Source path or location
    
    .PARAMETER Destination
        Destination path or location
    
    .PARAMETER Status
        Operation status (SUCCESS, FAILED, PARTIAL, etc.)
    
    .PARAMETER Details
        Additional details about the operation
    
    .PARAMETER FileCount
        Number of files transferred
    
    .PARAMETER BytesTransferred
        Total bytes transferred
    
    .PARAMETER DurationSeconds
        Duration of the operation in seconds
    
    .EXAMPLE
        Write-TransferLog -Operation "UPLOAD" -Source "local/themes" -Destination "remote/themes" -Status "SUCCESS" -FileCount 150 -BytesTransferred 5242880
    #>
    param(
        [Parameter(Mandatory=$true)]
        [string]$Operation,
        
        [Parameter(Mandatory=$true)]
        [string]$Source,
        
        [Parameter(Mandatory=$true)]
        [string]$Destination,
        
        [Parameter(Mandatory=$true)]
        [ValidateSet("SUCCESS", "FAILED", "PARTIAL", "SKIPPED", "DRY_RUN", "IN_PROGRESS")]
        [string]$Status,
        
        [Parameter(Mandatory=$false)]
        [string]$Details = "",
        
        [Parameter(Mandatory=$false)]
        [int]$FileCount = 0,
        
        [Parameter(Mandatory=$false)]
        [long]$BytesTransferred = 0,
        
        [Parameter(Mandatory=$false)]
        [double]$DurationSeconds = 0
    )
    
    $timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss.fff"
    $sizeMB = [math]::Round($BytesTransferred / 1MB, 2)
    
    $transferData = @{
        Operation = $Operation
        Source = $Source
        Destination = $Destination
        Status = $Status
        FileCount = $FileCount
        SizeMB = $sizeMB
        DurationSec = [math]::Round($DurationSeconds, 2)
    }
    
    if ($Details) {
        $transferData["Details"] = $Details
    }
    
    $dataString = ($transferData.GetEnumerator() | ForEach-Object { "$($_.Key)=$($_.Value)" }) -join " | "
    $logMessage = "[$timestamp] [TRANSFER] $dataString"
    
    try {
        Add-Content -Path $script:LogFile -Value $logMessage -ErrorAction Stop
    }
    catch {
        Write-Warning "Failed to write transfer log: $_"
    }
}

function Write-OperationStart {
    <#
    .SYNOPSIS
        Log the start of a major operation
    
    .PARAMETER OperationName
        Name of the operation
    
    .PARAMETER Parameters
        Hashtable of operation parameters
    
    .EXAMPLE
        Write-OperationStart -OperationName "Database Push" -Parameters @{Environment="production"; SkipBackup=$false}
    #>
    param(
        [Parameter(Mandatory=$true)]
        [string]$OperationName,
        
        [Parameter(Mandatory=$false)]
        [hashtable]$Parameters = @{}
    )
    
    $separator = "=" * 80
    $timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss.fff"
    
    try {
        Add-Content -Path $script:LogFile -Value "" -ErrorAction Stop
        Add-Content -Path $script:LogFile -Value $separator -ErrorAction Stop
        Add-Content -Path $script:LogFile -Value "[$timestamp] [OPERATION_START] $OperationName" -ErrorAction Stop
        
        if ($Parameters.Count -gt 0) {
            Add-Content -Path $script:LogFile -Value "[$timestamp] [PARAMETERS] Operation Parameters:" -ErrorAction Stop
            foreach ($param in $Parameters.GetEnumerator()) {
                Add-Content -Path $script:LogFile -Value "[$timestamp] [PARAMETERS]   $($param.Key) = $($param.Value)" -ErrorAction Stop
            }
        }
        
        Add-Content -Path $script:LogFile -Value $separator -ErrorAction Stop
    }
    catch {
        Write-Warning "Failed to write operation start: $_"
    }
}

function Write-OperationEnd {
    <#
    .SYNOPSIS
        Log the end of a major operation
    
    .PARAMETER OperationName
        Name of the operation
    
    .PARAMETER Success
        Whether the operation succeeded
    
    .PARAMETER DurationSeconds
        Duration of the operation in seconds
    
    .PARAMETER Summary
        Summary information about the operation
    
    .EXAMPLE
        Write-OperationEnd -OperationName "Database Push" -Success $true -DurationSeconds 45.3 -Summary @{FilesUploaded=150; Errors=0}
    #>
    param(
        [Parameter(Mandatory=$true)]
        [string]$OperationName,
        
        [Parameter(Mandatory=$true)]
        [bool]$Success,
        
        [Parameter(Mandatory=$false)]
        [double]$DurationSeconds = 0,
        
        [Parameter(Mandatory=$false)]
        [hashtable]$Summary = @{}
    )
    
    $separator = "=" * 80
    $timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss.fff"
    $status = if ($Success) { "SUCCESS" } else { "FAILED" }
    
    try {
        Add-Content -Path $script:LogFile -Value "" -ErrorAction Stop
        Add-Content -Path $script:LogFile -Value $separator -ErrorAction Stop
        Add-Content -Path $script:LogFile -Value "[$timestamp] [OPERATION_END] $OperationName - $status" -ErrorAction Stop
        Add-Content -Path $script:LogFile -Value "[$timestamp] [OPERATION_END] Duration: $([math]::Round($DurationSeconds, 2)) seconds" -ErrorAction Stop
        
        if ($Summary.Count -gt 0) {
            Add-Content -Path $script:LogFile -Value "[$timestamp] [SUMMARY] Operation Summary:" -ErrorAction Stop
            foreach ($item in $Summary.GetEnumerator()) {
                Add-Content -Path $script:LogFile -Value "[$timestamp] [SUMMARY]   $($item.Key) = $($item.Value)" -ErrorAction Stop
            }
        }
        
        Add-Content -Path $script:LogFile -Value $separator -ErrorAction Stop
        Add-Content -Path $script:LogFile -Value "" -ErrorAction Stop
    }
    catch {
        Write-Warning "Failed to write operation end: $_"
    }
}

# ============================================
# Log Management Functions
# ============================================

function Invoke-LogRotation {
    <#
    .SYNOPSIS
        Rotate log files to prevent excessive disk usage
    
    .DESCRIPTION
        Removes old log files keeping only the most recent ones based on MaxLogFiles setting
    #>
    
    if (-not $script:LogDir) {
        return
    }
    
    try {
        # Get all log files sorted by creation time
        $logFiles = Get-ChildItem -Path $script:LogDir -Filter "*.log" -ErrorAction SilentlyContinue |
            Sort-Object CreationTime -Descending
        
        # Remove old log files if we exceed the maximum
        if ($logFiles.Count -gt $script:MaxLogFiles) {
            $filesToRemove = $logFiles | Select-Object -Skip $script:MaxLogFiles
            
            foreach ($file in $filesToRemove) {
                try {
                    Remove-Item $file.FullName -Force -ErrorAction Stop
                    Write-Verbose "Removed old log file: $($file.Name)"
                }
                catch {
                    Write-Warning "Failed to remove old log file $($file.Name): $_"
                }
            }
        }
        
        # Check current log file size
        if ($script:LogFile -and (Test-Path $script:LogFile)) {
            $currentLogSize = (Get-Item $script:LogFile).Length / 1MB
            
            if ($currentLogSize -gt $script:MaxLogSizeMB) {
                Write-Warning "Current log file exceeds maximum size ($currentLogSize MB > $script:MaxLogSizeMB MB)"
            }
        }
    }
    catch {
        Write-Warning "Log rotation failed: $_"
    }
}

function Get-LogFilePath {
    <#
    .SYNOPSIS
        Get the current log file path
    
    .OUTPUTS
        String path to the current log file
    #>
    return $script:LogFile
}

function Set-LogLevel {
    <#
    .SYNOPSIS
        Set the minimum log level
    
    .PARAMETER Level
        Minimum log level (DEBUG, INFO, WARNING, ERROR, CRITICAL)
    #>
    param(
        [Parameter(Mandatory=$true)]
        [ValidateSet("DEBUG", "INFO", "WARNING", "ERROR", "CRITICAL")]
        [string]$Level
    )
    
    $script:LogLevel = $Level
    Write-LogEntry -Message "Log level changed to: $Level" -Level "INFO"
}

# ============================================
# Export Module Members
# ============================================

Export-ModuleMember -Function @(
    'Initialize-DeploymentLog',
    'Write-LogEntry',
    'Write-ExceptionDetails',
    'Write-TransferLog',
    'Write-OperationStart',
    'Write-OperationEnd',
    'Invoke-LogRotation',
    'Get-LogFilePath',
    'Set-LogLevel'
)
