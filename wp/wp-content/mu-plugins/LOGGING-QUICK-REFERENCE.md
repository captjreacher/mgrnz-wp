# Error Logging System - Quick Reference

## Quick Start

### Initialize Logger
```php
$logger = new MGRNZ_Error_Logger();
```

### Log an Error
```php
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
    'Error message here',
    ['key' => 'value'], // context
    $submission_id      // optional
);
```

### Log a Warning
```php
$logger->log_warning(
    MGRNZ_Error_Logger::CATEGORY_EMAIL,
    'Warning message here',
    ['email' => 'user@example.com'],
    $submission_id
);
```

### Log Success with Metrics
```php
$logger->log_success(
    MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
    'Operation successful',
    [
        'processing_time' => 2.5,
        'tokens_used' => 1500
    ],
    $submission_id
);
```

### Log Info
```php
$logger->log_info(
    MGRNZ_Error_Logger::CATEGORY_CACHE,
    'Cache cleared',
    ['entries' => 25]
);
```

## Categories

```php
MGRNZ_Error_Logger::CATEGORY_AI_SERVICE   // AI API operations
MGRNZ_Error_Logger::CATEGORY_EMAIL        // Email operations
MGRNZ_Error_Logger::CATEGORY_SUBMISSION   // Form submissions
MGRNZ_Error_Logger::CATEGORY_CACHE        // Cache operations
MGRNZ_Error_Logger::CATEGORY_RATE_LIMIT   // Rate limiting
MGRNZ_Error_Logger::CATEGORY_VALIDATION   // Input validation
MGRNZ_Error_Logger::CATEGORY_SYSTEM       // System events
```

## Log Levels

```php
MGRNZ_Error_Logger::LEVEL_ERROR    // Critical errors
MGRNZ_Error_Logger::LEVEL_WARNING  // Non-critical issues
MGRNZ_Error_Logger::LEVEL_SUCCESS  // Successful operations
MGRNZ_Error_Logger::LEVEL_INFO     // Informational events
```

## Query Logs

```php
$result = $logger->get_logs([
    'level' => 'error',              // Filter by level
    'category' => 'ai_service',      // Filter by category
    'date_from' => '2025-01-01',     // Start date
    'date_to' => '2025-01-31',       // End date
    'search' => 'timeout',           // Search term
    'per_page' => 50,                // Results per page
    'page' => 1                      // Page number
]);

// Access results
foreach ($result['logs'] as $log) {
    echo $log['message'];
}
```

## Get Statistics

```php
$stats = $logger->get_statistics('today'); // today, week, month, all

// Access stats
print_r($stats['level_counts']);
print_r($stats['category_counts']);
print_r($stats['critical_errors']);
```

## Clear Old Logs

```php
$deleted = $logger->clear_old_logs(30); // Delete logs older than 30 days
```

## Admin Interface

**Access**: WordPress Admin > AI Workflow Submissions > Error Logs

**Features**:
- Statistics dashboard
- Filter by level, category, date
- Search logs
- View detailed log entries
- Export to CSV
- Clear old logs

## Critical Error Notifications

Automatic email notifications sent for:
- AI API failures
- Authentication errors
- Rate limit exceeded
- System errors

**Configure**:
```php
update_option('mgrnz_enable_error_notifications', true);
update_option('mgrnz_error_notification_email', 'admin@example.com');
```

## Best Practices

### ✅ DO
- Include context data
- Link to submission ID when available
- Log performance metrics
- Use appropriate log levels
- Include error codes

### ❌ DON'T
- Log sensitive data (API keys, passwords)
- Log excessive data
- Use wrong log levels
- Forget to include context

## Common Patterns

### Track Processing Time
```php
$start = microtime(true);
// ... operation ...
$time = microtime(true) - $start;

$logger->log_success(
    MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
    'Operation completed',
    ['processing_time' => round($time, 2)]
);
```

### Log API Errors
```php
try {
    $result = $api->call();
} catch (Exception $e) {
    $logger->log_error(
        MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
        'API call failed: ' . $e->getMessage(),
        [
            'provider' => 'openai',
            'status_code' => $e->getCode()
        ]
    );
}
```

### Log with Submission Context
```php
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_EMAIL,
    'Email delivery failed',
    [
        'email' => $email,
        'error' => $error_message
    ],
    $submission_id // Links to submission
);
```

## Troubleshooting

### Logs Not Appearing
1. Check database table exists: `wp_mgrnz_ai_workflow_logs`
2. Run plugin activation
3. Check WordPress debug log

### Notifications Not Sending
1. Verify `mgrnz_enable_error_notifications` is true
2. Check `mgrnz_error_notification_email` is set
3. Test WordPress email with wp_mail()

### Admin Page Issues
1. Check user has `manage_options` capability
2. Verify asset files exist
3. Check browser console for errors

## Database Table

**Table**: `wp_mgrnz_ai_workflow_logs`

**Columns**:
- `id` - Unique log ID
- `log_level` - error, warning, success, info
- `category` - Log category
- `message` - Log message
- `context` - JSON context data
- `submission_id` - Related submission
- `ip_address` - Client IP
- `user_agent` - Client user agent
- `created_at` - Timestamp

## Performance Tips

1. Clear old logs regularly (30+ days)
2. Use appropriate log levels
3. Don't log in tight loops
4. Include only necessary context
5. Monitor table size

## Security

- Only admins can view logs
- All queries use prepared statements
- Output is escaped
- AJAX uses nonces
- No sensitive data logged

## Support

For issues or questions:
1. Check ERROR-LOGGING-SYSTEM.md for detailed docs
2. Review TASK-13-IMPLEMENTATION-SUMMARY.md
3. Check WordPress debug log
4. Contact development team
