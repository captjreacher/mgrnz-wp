# Error Logging and Monitoring System

## Overview

The AI Workflow Wizard includes a comprehensive error logging and monitoring system that tracks all errors, warnings, successes, and informational events throughout the application lifecycle.

## Features

### 1. Comprehensive Logging
- **Error Logging**: Captures all errors with full context
- **Warning Logging**: Tracks non-critical issues
- **Success Logging**: Records successful operations with metrics
- **Info Logging**: General informational events

### 2. Database Storage
All logs are stored in a custom database table (`wp_mgrnz_ai_workflow_logs`) with the following fields:
- `id`: Unique log entry ID
- `log_level`: error, warning, success, info
- `category`: ai_service, email, submission, cache, rate_limit, validation, system
- `message`: Human-readable log message
- `context`: JSON-encoded additional data
- `submission_id`: Related submission ID (if applicable)
- `ip_address`: Client IP address
- `user_agent`: Client user agent
- `created_at`: Timestamp

### 3. Admin Interface
Access the logs through WordPress admin:
- Navigate to: **AI Workflow Submissions > Error Logs**
- Features:
  - Real-time statistics dashboard
  - Filter by level, category, date range
  - Search functionality
  - View detailed log entries
  - Export logs to CSV
  - Clear old logs (30+ days)

### 4. Critical Error Notifications
- Automatic email notifications for critical errors
- Configurable notification email address
- Throttled to prevent spam (max 1 notification per hour per error type)
- Critical errors include:
  - AI API failures
  - Authentication errors
  - Rate limit exceeded
  - System errors

### 5. Performance Metrics
Success logs include performance metrics:
- `processing_time`: Total request processing time
- `tokens_used`: AI tokens consumed
- `ai_model`: AI model used
- `from_cache`: Whether result was cached

## Usage

### Basic Logging

```php
// Initialize logger
$logger = new MGRNZ_Error_Logger();

// Log an error
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
    'Failed to connect to AI service',
    ['error_code' => 500, 'provider' => 'openai'],
    $submission_id // optional
);

// Log a warning
$logger->log_warning(
    MGRNZ_Error_Logger::CATEGORY_EMAIL,
    'Email delivery delayed',
    ['email' => 'user@example.com'],
    $submission_id
);

// Log success with metrics
$logger->log_success(
    MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
    'Blueprint generated successfully',
    [
        'processing_time' => 2.5,
        'tokens_used' => 1500,
        'from_cache' => false
    ],
    $submission_id
);

// Log info
$logger->log_info(
    MGRNZ_Error_Logger::CATEGORY_CACHE,
    'Cache cleared',
    ['entries_cleared' => 25]
);
```

### Log Categories

Use predefined constants for consistency:

```php
MGRNZ_Error_Logger::CATEGORY_AI_SERVICE   // AI API interactions
MGRNZ_Error_Logger::CATEGORY_EMAIL        // Email operations
MGRNZ_Error_Logger::CATEGORY_SUBMISSION   // Form submissions
MGRNZ_Error_Logger::CATEGORY_CACHE        // Cache operations
MGRNZ_Error_Logger::CATEGORY_RATE_LIMIT   // Rate limiting
MGRNZ_Error_Logger::CATEGORY_VALIDATION   // Input validation
MGRNZ_Error_Logger::CATEGORY_SYSTEM       // System-level events
```

### Log Levels

```php
MGRNZ_Error_Logger::LEVEL_ERROR    // Critical errors
MGRNZ_Error_Logger::LEVEL_WARNING  // Non-critical issues
MGRNZ_Error_Logger::LEVEL_SUCCESS  // Successful operations
MGRNZ_Error_Logger::LEVEL_INFO     // Informational events
```

### Querying Logs

```php
$logger = new MGRNZ_Error_Logger();

// Get logs with filters
$result = $logger->get_logs([
    'level' => 'error',
    'category' => 'ai_service',
    'date_from' => '2025-01-01',
    'date_to' => '2025-01-31',
    'search' => 'timeout',
    'per_page' => 50,
    'page' => 1
]);

// Access logs
foreach ($result['logs'] as $log) {
    echo $log['message'];
    print_r($log['context']);
}

// Get statistics
$stats = $logger->get_statistics('today'); // today, week, month, all
print_r($stats['level_counts']);
print_r($stats['category_counts']);
```

### Clearing Old Logs

```php
$logger = new MGRNZ_Error_Logger();

// Clear logs older than 30 days
$deleted = $logger->clear_old_logs(30);
echo "Deleted {$deleted} log entries";
```

## Configuration

### Email Notifications

Configure in WordPress admin or via options:

```php
// Enable/disable notifications
update_option('mgrnz_enable_error_notifications', true);

// Set notification email
update_option('mgrnz_error_notification_email', 'admin@example.com');
```

### Automatic Cleanup

Set up a WordPress cron job to automatically clear old logs:

```php
// Schedule daily cleanup (add to plugin activation)
if (!wp_next_scheduled('mgrnz_cleanup_old_logs')) {
    wp_schedule_event(time(), 'daily', 'mgrnz_cleanup_old_logs');
}

// Add cron handler
add_action('mgrnz_cleanup_old_logs', function() {
    $logger = new MGRNZ_Error_Logger();
    $logger->clear_old_logs(30); // Keep 30 days
});
```

## Integration Points

The error logger is integrated throughout the system:

### 1. REST API Endpoint (`mgrnz-ai-workflow-endpoint.php`)
- Validation errors
- Rate limit violations
- AI service errors
- Submission save errors
- Email scheduling issues
- Success metrics

### 2. AI Service (`class-ai-service.php`)
- API connection errors
- Authentication failures
- Timeout errors
- Response parsing errors

### 3. Email Service (`class-email-service.php`)
- Email delivery failures
- Template rendering errors
- Async processing issues

### 4. Cache Service (`class-blueprint-cache.php`)
- Cache hits/misses
- Cache clearing operations

## Admin Interface Features

### Statistics Dashboard
- Error count by level (error, warning, success, info)
- Top categories by volume
- Recent critical errors
- Hourly error rate chart

### Filtering
- Filter by log level
- Filter by category
- Date range filtering
- Full-text search

### Actions
- View detailed log entry (modal)
- Export filtered logs to CSV
- Clear old logs (30+ days)
- Real-time refresh

### Pagination
- 50 logs per page
- Previous/Next navigation
- Page counter

## Best Practices

### 1. Always Include Context
```php
// Good
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
    'API request failed',
    [
        'provider' => 'openai',
        'model' => 'gpt-4',
        'status_code' => 500,
        'response' => $error_response
    ]
);

// Bad
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
    'API request failed'
);
```

### 2. Use Appropriate Log Levels
- **Error**: Something failed and requires attention
- **Warning**: Something unexpected but not critical
- **Success**: Operation completed successfully (with metrics)
- **Info**: General informational event

### 3. Include Submission ID When Available
```php
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_EMAIL,
    'Email delivery failed',
    ['email' => $email],
    $submission_id // Links log to submission
);
```

### 4. Log Performance Metrics
```php
$start_time = microtime(true);
// ... perform operation ...
$processing_time = microtime(true) - $start_time;

$logger->log_success(
    MGRNZ_Error_Logger::CATEGORY_SUBMISSION,
    'Operation completed',
    [
        'processing_time' => round($processing_time, 2),
        'items_processed' => $count
    ]
);
```

### 5. Don't Log Sensitive Data
```php
// Good
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
    'API authentication failed',
    ['provider' => 'openai']
);

// Bad - exposes API key
$logger->log_error(
    MGRNZ_Error_Logger::CATEGORY_AI_SERVICE,
    'API authentication failed',
    ['api_key' => $api_key] // DON'T DO THIS
);
```

## Troubleshooting

### Logs Not Appearing
1. Check if database table exists: `wp_mgrnz_ai_workflow_logs`
2. Run plugin activation to create table
3. Check WordPress debug log for errors

### Email Notifications Not Sending
1. Verify `mgrnz_enable_error_notifications` is true
2. Check `mgrnz_error_notification_email` is set
3. Verify WordPress can send emails (test with wp_mail)
4. Check if notification is throttled (1 per hour per error type)

### Admin Page Not Loading
1. Check user has `manage_options` capability
2. Verify JavaScript/CSS files exist in `mu-plugins/assets/`
3. Check browser console for JavaScript errors

### Performance Issues
1. Clear old logs regularly (30+ days)
2. Add database indexes if needed
3. Limit log retention period
4. Consider archiving old logs to external storage

## Database Maintenance

### Manual Cleanup
```sql
-- Delete logs older than 30 days
DELETE FROM wp_mgrnz_ai_workflow_logs 
WHERE created_at < DATE_SUB(NOW(), INTERVAL 30 DAY);

-- Delete all logs (use with caution)
TRUNCATE TABLE wp_mgrnz_ai_workflow_logs;
```

### Optimize Table
```sql
OPTIMIZE TABLE wp_mgrnz_ai_workflow_logs;
```

### Check Table Size
```sql
SELECT 
    table_name,
    ROUND(((data_length + index_length) / 1024 / 1024), 2) AS size_mb
FROM information_schema.TABLES
WHERE table_name = 'wp_mgrnz_ai_workflow_logs';
```

## Security Considerations

1. **Access Control**: Only administrators can view logs
2. **Data Sanitization**: All log data is sanitized before storage
3. **SQL Injection**: All queries use prepared statements
4. **XSS Prevention**: All output is escaped in admin interface
5. **CSRF Protection**: AJAX requests use WordPress nonces

## Future Enhancements

Potential improvements for future versions:
- Real-time log streaming (WebSocket)
- Advanced analytics and reporting
- Log aggregation and correlation
- Integration with external monitoring services (Sentry, Datadog)
- Automated alerting rules
- Log archiving to S3/external storage
- Performance profiling and APM integration
