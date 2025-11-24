# AI Workflow Wizard Plugin Structure

## Overview

The AI Workflow Wizard is a complete WordPress plugin system that provides AI-powered workflow analysis through a multi-step wizard interface.

## Plugin Architecture

### Main Plugin File
- **`mgrnz-ai-workflow-wizard.php`** - Main plugin initialization file
  - Defines plugin constants and metadata
  - Loads all dependencies
  - Initializes all components
  - Registers activation/deactivation hooks
  - Manages plugin lifecycle

### Core Components

#### 1. AI Service (`includes/class-ai-service.php`)
- Handles communication with AI providers (OpenAI, Anthropic)
- Generates workflow blueprints from user input
- Manages API authentication and error handling
- Implements retry logic for transient failures

#### 2. Email Service (`includes/class-email-service.php`)
- Sends blueprint emails to users
- Manages async email delivery via WordPress cron
- Provides HTML email templates
- Handles email retry logic on failures

#### 3. Submission CPT (`includes/class-submission-cpt.php`)
- Registers custom post type for submissions
- Provides admin UI for viewing submissions
- Implements custom columns and search functionality
- Stores all submission metadata

#### 4. Settings Page (`includes/class-ai-settings.php`)
- WordPress admin settings interface
- Configures AI provider and API credentials
- Manages performance and caching options
- Provides connection testing functionality

#### 5. Blueprint Cache (`includes/class-blueprint-cache.php`)
- Caches AI-generated blueprints
- Reduces API costs and improves response time
- Uses WordPress transients with 7-day expiration
- Provides cache management tools

#### 6. REST API Endpoint (`mgrnz-ai-workflow-endpoint.php`)
- Handles wizard form submissions
- Validates and sanitizes user input
- Orchestrates AI generation and email delivery
- Implements rate limiting and security measures

### Configuration

#### Config File (`config/ai-workflow-config.php`)
- Environment-based configuration
- Default settings and constants
- Can be customized per environment

### Frontend Integration

The plugin works with the theme's wizard interface:
- **JavaScript**: `themes/mgrnz-theme/assets/js/wizard-controller.js`
- **Page Template**: Wizard form on `/start-using-ai` page
- **Enqueuing**: Handled in `themes/mgrnz-theme/functions.php`

## Plugin Lifecycle

### Activation
1. Registers custom post type
2. Flushes rewrite rules
3. Sets default options
4. Shows admin notice with setup instructions

### Initialization
1. Loads all class files
2. Initializes service instances
3. Registers REST API routes
4. Sets up WordPress hooks

### Deactivation
1. Flushes rewrite rules
2. Clears scheduled cron events
3. Logs deactivation

## Data Flow

```
User fills wizard form
    ↓
JavaScript validates and submits to REST API
    ↓
REST endpoint validates input
    ↓
Check cache for existing blueprint
    ↓
If not cached: Call AI service to generate blueprint
    ↓
Save submission to database (custom post type)
    ↓
Schedule async email delivery (if email provided)
    ↓
Return blueprint to user
    ↓
WordPress cron sends email in background
```

## Security Features

1. **Nonce Verification**: All REST requests verified
2. **Input Validation**: Strict validation and sanitization
3. **Rate Limiting**: 3 submissions per hour per IP
4. **CORS Headers**: Restricts endpoint access
5. **API Key Protection**: Stored securely in WordPress options
6. **Length Limits**: Prevents abuse with field length restrictions

## Performance Optimizations

1. **Blueprint Caching**: Identical submissions return cached results
2. **Async Email**: Non-blocking email delivery via cron
3. **Retry Logic**: Automatic retry for transient failures
4. **Conditional Loading**: Classes loaded only when needed

## Admin Features

### Settings Page
- Location: Settings → AI Workflow
- Configure AI provider (OpenAI/Anthropic)
- Set API credentials
- Manage caching options
- Test connection
- View cache statistics

### Submissions Management
- Location: AI Submissions menu
- View all submissions
- Search and filter
- See email delivery status
- Export data (future enhancement)

## Environment Variables

The plugin supports environment-based configuration:

```
MGRNZ_AI_PROVIDER=openai
MGRNZ_AI_API_KEY=sk-...
MGRNZ_AI_MODEL=gpt-4o-mini
MGRNZ_AI_MAX_TOKENS=2000
MGRNZ_AI_TEMPERATURE=0.7
MGRNZ_ENABLE_CACHE=true
MGRNZ_BYPASS_CACHE=false
```

## Logging

All major events are logged to WordPress error log:

- Plugin activation/deactivation
- Submission success/failure
- AI API calls and responses
- Email delivery status
- Cache hits/misses
- Error conditions

## Dependencies

### Required
- WordPress 5.0+
- PHP 7.4+

### Optional
- ACF (for custom fields)
- MailerLite (for newsletter integration)
- Calendly (for consultation bookings)

## File Structure

```
mu-plugins/
├── mgrnz-ai-workflow-wizard.php    # Main plugin file
├── mgrnz-ai-workflow-endpoint.php  # REST API handler
├── config/
│   └── ai-workflow-config.php      # Configuration
├── includes/
│   ├── class-ai-service.php        # AI integration
│   ├── class-email-service.php     # Email delivery
│   ├── class-submission-cpt.php    # Custom post type
│   ├── class-ai-settings.php       # Settings page
│   └── class-blueprint-cache.php   # Caching system
└── AI-WORKFLOW-PLUGIN-STRUCTURE.md # This file
```

## Integration Points

### With Theme
- Wizard JavaScript controller
- Page templates
- CSS styling

### With WordPress
- Custom post type
- REST API
- Cron system
- Options API
- Transients API

### With External Services
- OpenAI API
- Anthropic API
- MailerLite API (optional)
- Calendly (optional)

## Future Enhancements

See `tasks.md` for optional tasks:
- Error logging dashboard
- Admin analytics
- Comprehensive documentation
- PDF export
- Multi-language support
