# Deployment Logging System

## Overview

The MGRNZ deployment workflow includes a comprehensive logging system that captures all deployment actions, results, and errors with detailed stack traces. This ensures full traceability and aids in troubleshooting deployment issues.

## Features

### 1. Timestamped Log Entries
All log entries include millisecond-precision timestamps for accurate event sequencing:
```
[2025-11-18 14:32:15.123] [INFO] Deployment started
```

### 2. Multiple Log Levels
- **DEBUG**: Detailed diagnostic information
- **INFO**: General informational messages
- **SUCCESS**: Successful operation completion
- **WARNING**: Warning messages for non-critical issues
- **ERROR**: Error messages for failures
- **CRITICAL**: Critical errors requiring immediate attention

### 3. Error Logging with Stack Traces
When exceptions occur, the logging system captures:
- Exception type and message
- Inner exceptions (if present)
- .NET stack trace
- PowerShell script stack trace
- Script name, line number, and command that caused the error

Example:
```
[2025-11-18 14:32:15.456] [EXCEPTION] Exception Type: System.Net.WebException
[2025-11-18 14:32:15.456] [EXCEPTION] Exception Message: Unable to connect to remote server
[2025-11-18 14:32:15.456] [STACK_TRACE] Stack Trace:
[2025-11-18 14:32:15.456] [STACK_TRACE]   at System.Net.HttpWebRequest.GetResponse()
[2025-11-18 14:32:15.456] [INVOCATION] Script: C:\scripts\file-push.ps1
[2025-11-18 14:32:15.456] [INVOCATION] Line: 245
[2025-11-18 14:32:15.456] [INVOCATION] Command: $response = Invoke-WebRequest -Uri $url
```

### 4. Transfer Operation Logging
File transfer operations are logged with detailed metrics:
- Operation type (UPLOAD, DOWNLOAD, SYNC)
- Source and destination paths
- Status (SUCCESS, FAILED, PARTIAL)
- File count and size transferred
- Duration in seconds

Example:
```
[2025-11-18 14:35:22.789] [TRANSFER] Operation=UPLOAD | Status=SUCCESS | Source=local/themes | Destination=remote/themes | Files=150 | SizeMB=5.24 | DurationSec=12.5
```

### 5. Operation Start/End Markers
Major operations are bracketed with start and end markers including parameters and summary:
```
================================================================================
[2025-11-18 14:32:15.123] [OPERATION_START] Deployment
[2025-11-18 14:32:15.123] [PARAMETERS] Operation Parameters:
[2025-11-18 14:32:15.123] [PARAMETERS]   Environment = production
[2025-11-18 14:32:15.123] [PARAMETERS]   DryRun = False
================================================================================

... deployment actions ...

================================================================================
[2025-11-18 14:35:45.678] [OPERATION_END] Deployment - SUCCESS
[2025-11-18 14:35:45.678] [OPERATION_END] Duration: 210.55 seconds
[2025-11-18 14:35:45.678] [SUMMARY] Operation Summary:
[2025-11-18 14:35:45.678] [SUMMARY]   FilesUploaded = 150
[2025-11-18 14:35:45.678] [SUMMARY]   ErrorCount = 0
================================================================================
```

### 6. Automatic Log Rotation
The logging system automatically manages log files:
- Keeps the most recent 30 log files
- Removes older log files to prevent disk space issues
- Warns when current log file exceeds 10 MB

## Log File Locations

All log files are stored in the `logs/` directory at the project root:

```
logs/
├── deploy-20251118-143215.log       # Main deployment script
├── file-push-20251118-143220.log    # File upload operations
├── file-pull-20251118-120530.log    # File download operations
├── db-push-20251118-101245.log      # Database push operations
└── db-pull-20251118-095530.log      # Database pull operations
```

## Usage

### For Script Developers

The logging module is automatically imported and initialized by all deployment scripts. To use it in your scripts:

```powershell
# Import the logging module
Import-Module (Join-Path $ScriptDir "DeploymentLogging.psm1") -Force

# Initialize logging
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "my-script-$Timestamp.log" -LogLevel "INFO"

# Write log entries
Write-LogEntry -Message "Operation started" -Level "INFO"
Write-LogEntry -Message "Operation completed" -Level "SUCCESS"

# Log errors with stack traces
try {
    # Your code here
}
catch {
    Write-LogEntry -Message "Operation failed" -Level "ERROR" -Exception $_.Exception
}

# Log transfer operations
Write-TransferLog `
    -Operation "UPLOAD" `
    -Source "local/path" `
    -Destination "remote/path" `
    -Status "SUCCESS" `
    -FileCount 100 `
    -BytesTransferred 5242880 `
    -DurationSeconds 15.5

# Log operation boundaries
Write-OperationStart -OperationName "My Operation" -Parameters @{Param1="Value1"}
# ... operation code ...
Write-OperationEnd -OperationName "My Operation" -Success $true -DurationSeconds 30.5 -Summary @{Result="Success"}
```

### For Users

#### Viewing Logs

To view the most recent deployment log:
```powershell
Get-Content logs\deploy-*.log | Select-Object -Last 50
```

To view all errors in a log:
```powershell
Get-Content logs\deploy-20251118-143215.log | Select-String -Pattern "\[ERROR\]|\[CRITICAL\]"
```

To view stack traces:
```powershell
Get-Content logs\deploy-20251118-143215.log | Select-String -Pattern "\[STACK_TRACE\]" -Context 5
```

#### Finding Specific Operations

To find all transfer operations:
```powershell
Get-Content logs\file-push-20251118-143220.log | Select-String -Pattern "\[TRANSFER\]"
```

To find operation summaries:
```powershell
Get-Content logs\deploy-20251118-143215.log | Select-String -Pattern "\[OPERATION_END\]|\[SUMMARY\]"
```

## Log Levels

You can set the minimum log level when initializing:

```powershell
# Log everything including debug messages
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "script.log" -LogLevel "DEBUG"

# Log only warnings and errors
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "script.log" -LogLevel "WARNING"

# Log only errors and critical issues
Initialize-DeploymentLog -LogDirectory $LogDir -LogFileName "script.log" -LogLevel "ERROR"
```

## Troubleshooting

### Log File Not Created

If log files are not being created:
1. Check that the `logs/` directory exists and is writable
2. Verify that `Initialize-DeploymentLog` is called before any logging operations
3. Check for permission issues on the logs directory

### Missing Stack Traces

Stack traces are only captured when:
1. An exception is passed to `Write-LogEntry` using the `-Exception` parameter
2. The exception object contains stack trace information
3. PowerShell error records are available in `$global:Error`

### Log Files Growing Too Large

The logging system automatically rotates logs, but if you need to manually clean up:
```powershell
# Remove logs older than 30 days
Get-ChildItem logs\*.log | Where-Object { $_.CreationTime -lt (Get-Date).AddDays(-30) } | Remove-Item
```

## Best Practices

1. **Always log operation start and end**: Use `Write-OperationStart` and `Write-OperationEnd` for major operations
2. **Include context in error messages**: Provide enough information to understand what failed
3. **Log exceptions with stack traces**: Always pass the exception object when logging errors
4. **Use appropriate log levels**: Don't log everything as ERROR; use INFO, WARNING, etc.
5. **Include metrics**: Log file counts, sizes, and durations for transfer operations
6. **Review logs after deployments**: Check logs even for successful deployments to catch warnings

## Integration with Existing Scripts

All deployment scripts have been updated to use the enhanced logging system:

- **deploy.ps1**: Main deployment orchestration with operation tracking
- **file-push.ps1**: File upload operations with transfer logging
- **file-pull.ps1**: File download operations with transfer logging
- **db-push.ps1**: Database push with critical error tracking
- **db-pull.ps1**: Database pull with rollback logging

Each script automatically:
- Initializes logging with a timestamped log file
- Logs operation start with parameters
- Captures exceptions with stack traces
- Logs operation end with summary metrics
- Performs automatic log rotation

## Example Log Output

Here's an example of what a complete deployment log looks like:

```
================================================================================
[2025-11-18 14:32:15.123] [INFO] Deployment logging initialized
[2025-11-18 14:32:15.123] [INFO] Log file: C:\project\logs\deploy-20251118-143215.log
[2025-11-18 14:32:15.123] [INFO] Log level: INFO
================================================================================
================================================================================
[2025-11-18 14:32:15.234] [OPERATION_START] Deployment
[2025-11-18 14:32:15.234] [PARAMETERS] Operation Parameters:
[2025-11-18 14:32:15.234] [PARAMETERS]   Environment = production
[2025-11-18 14:32:15.234] [PARAMETERS]   DryRun = False
[2025-11-18 14:32:15.234] [PARAMETERS]   SkipBackup = False
================================================================================
[2025-11-18 14:32:15.345] [STEP] Loading deployment credentials...
[2025-11-18 14:32:15.456] [SUCCESS] Credentials loaded for production
[2025-11-18 14:32:15.567] [STEP] Running pre-deployment checks...
[2025-11-18 14:32:16.123] [SUCCESS] Production site is accessible (HTTP 200)
[2025-11-18 14:32:16.234] [SUCCESS] Local file validation passed
[2025-11-18 14:32:16.345] [STEP] Executing deployment...
[2025-11-18 14:32:20.123] [TRANSFER] Operation=UPLOAD | Status=SUCCESS | Source=local/themes | Destination=remote/themes | Files=150 | SizeMB=5.24 | DurationSec=12.5
[2025-11-18 14:32:35.456] [SUCCESS] Deployment completed successfully
================================================================================
[2025-11-18 14:32:35.567] [OPERATION_END] Deployment - SUCCESS
[2025-11-18 14:32:35.567] [OPERATION_END] Duration: 20.33 seconds
[2025-11-18 14:32:35.567] [SUMMARY] Operation Summary:
[2025-11-18 14:32:35.567] [SUMMARY]   FilesUploaded = 150
[2025-11-18 14:32:35.567] [SUMMARY]   ErrorCount = 0
[2025-11-18 14:32:35.567] [SUMMARY]   WarningCount = 0
================================================================================
```

## Support

For issues or questions about the logging system:
1. Check this documentation
2. Review the `DeploymentLogging.psm1` module source code
3. Examine existing log files for examples
4. Contact the development team
