# Edge Function Testing Guide

This guide provides comprehensive instructions for testing Supabase edge functions locally and in production.

## Overview

The MGRNZ project includes four edge functions:

1. **wp-sync** - Receives webhooks from WordPress when posts are published
2. **ml-to-hugo** - Processes MailerLite webhook events for newsletter subscriptions
3. **ai-intake** - Handles AI workflow intake form submissions
4. **ai-intake-decision** - Processes user decisions on AI workflow blueprints

## Prerequisites

### For Local Testing

- Supabase CLI installed (`npm install -g supabase`)
- Docker Desktop running (for local Supabase)
- Local Supabase instance started (`supabase start`)
- Environment variables configured in `supabase/.env.local`

### For Production Testing

- Supabase project credentials
- Production environment variables
- API keys (OpenAI, MailerLite, etc.)

## Testing Methods

### Method 1: PowerShell Script (Windows)

The PowerShell script provides a comprehensive testing interface with colored output and error handling.

#### Basic Usage

```powershell
# Test all functions locally
.\supabase\test-edge-functions.ps1 -Environment local -Function all

# Test specific function
.\supabase\test-edge-functions.ps1 -Environment local -Function wp-sync

# Test with logs
.\supabase\test-edge-functions.ps1 -Environment local -Function wp-sync -ShowLogs

# Test in production
.\supabase\test-edge-functions.ps1 -Environment production -Function ai-intake
```

#### Parameters

- `-Environment` - Target environment: `local` or `production` (default: `local`)
- `-Function` - Function to test: `wp-sync`, `ml-to-hugo`, `ai-intake`, `ai-intake-decision`, or `all` (default: `all`)
- `-ShowLogs` - Display function logs after testing

### Method 2: Bash/Curl Script (Cross-platform)

The bash script uses curl and works on Linux, macOS, and Windows (Git Bash/WSL).

#### Basic Usage

```bash
# Make script executable (first time only)
chmod +x supabase/test-curl.sh

# Test all functions locally
./supabase/test-curl.sh local all

# Test specific function
./supabase/test-curl.sh local wp-sync

# View logs
./supabase/test-curl.sh local logs wp-sync

# Test in production
./supabase/test-curl.sh production ai-intake
```

### Method 3: Direct Curl Commands

For manual testing or CI/CD integration, use curl directly.

#### wp-sync Function

```bash
# Local
curl -X POST http://localhost:54321/functions/v1/wp-sync \
  -H "Content-Type: application/json" \
  -H "X-Webhook-Secret: local-test-secret" \
  -d @supabase/test-payloads/wp-sync.json

# Production
curl -X POST https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1/wp-sync \
  -H "Content-Type: application/json" \
  -H "X-Webhook-Secret: YOUR_WEBHOOK_SECRET" \
  -d @supabase/test-payloads/wp-sync.json
```

#### ml-to-hugo Function

```bash
# Local
curl -X POST http://localhost:54321/functions/v1/ml-to-hugo \
  -H "Content-Type: application/json" \
  -d @supabase/test-payloads/ml-to-hugo.json

# Production
curl -X POST https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1/ml-to-hugo \
  -H "Content-Type: application/json" \
  -d @supabase/test-payloads/ml-to-hugo.json
```

#### ai-intake Function

```bash
# Local
curl -X POST http://localhost:54321/functions/v1/ai-intake \
  -H "Content-Type: application/json" \
  -d @supabase/test-payloads/ai-intake.json

# Production
curl -X POST https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1/ai-intake \
  -H "Content-Type: application/json" \
  -d @supabase/test-payloads/ai-intake.json
```

#### ai-intake-decision Function

```bash
# First, get an intake_id from ai-intake response or database
# Update supabase/test-payloads/ai-intake-decision.json with the intake_id

# Local
curl -X POST http://localhost:54321/functions/v1/ai-intake-decision \
  -H "Content-Type: application/json" \
  -d @supabase/test-payloads/ai-intake-decision.json

# Production
curl -X POST https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1/ai-intake-decision \
  -H "Content-Type: application/json" \
  -d @supabase/test-payloads/ai-intake-decision.json
```

## Test Payloads

Test payload files are located in `supabase/test-payloads/`:

- `wp-sync.json` - WordPress post publish event
- `ml-to-hugo.json` - MailerLite subscriber webhook
- `ai-intake.json` - AI workflow intake form submission
- `ai-intake-decision.json` - User decision on AI blueprint

### Customizing Test Payloads

Edit the JSON files to test different scenarios:

```json
// wp-sync.json - Test different post events
{
  "event": "post_update",  // or "post_publish", "post_delete"
  "post_id": 456,
  "slug": "updated-post",
  "status": "draft"  // or "publish", "pending"
}
```

```json
// ml-to-hugo.json - Test different subscriber events
{
  "type": "subscriber.unsubscribed",  // or "subscriber.created", "subscriber.updated"
  "data": {
    "email": "unsubscribe@example.com",
    "status": "unsubscribed"
  }
}
```

## Viewing Function Logs

### Local Logs

```bash
# View logs for specific function
supabase functions logs wp-sync

# Follow logs in real-time
supabase functions logs wp-sync --follow

# View logs with timestamp
supabase functions logs wp-sync --timestamps
```

### Production Logs

```bash
# View production logs
supabase functions logs wp-sync --project-ref jqfodlzcsgfocyuawzyx

# Follow production logs
supabase functions logs wp-sync --project-ref jqfodlzcsgfocyuawzyx --follow

# View last 100 lines
supabase functions logs wp-sync --project-ref jqfodlzcsgfocyuawzyx --limit 100
```

### Using the Scripts

```powershell
# PowerShell - View logs after test
.\supabase\test-edge-functions.ps1 -Function wp-sync -ShowLogs
```

```bash
# Bash - View logs
./supabase/test-curl.sh local logs wp-sync
```

## Common Testing Scenarios

### 1. Test WordPress Integration

```powershell
# Start local Supabase
supabase start

# Test wp-sync endpoint
.\supabase\test-edge-functions.ps1 -Function wp-sync -Environment local

# Check logs for received webhook
supabase functions logs wp-sync
```

### 2. Test MailerLite Integration

```powershell
# Test ml-to-hugo with subscriber data
.\supabase\test-edge-functions.ps1 -Function ml-to-hugo -Environment local

# Verify subscriber was added to database
supabase db query "SELECT * FROM newsletter_subscribers ORDER BY created_at DESC LIMIT 1"
```

### 3. Test AI Workflow

```powershell
# Test ai-intake (requires OpenAI API key)
.\supabase\test-edge-functions.ps1 -Function ai-intake -Environment local

# Get the intake_id from response
# Update test-payloads/ai-intake-decision.json with intake_id

# Test decision endpoint
.\supabase\test-edge-functions.ps1 -Function ai-intake-decision -Environment local
```

### 4. End-to-End Testing

```bash
# Test complete workflow
./supabase/test-curl.sh local all

# Verify all functions responded successfully
# Check database for created records
supabase db query "SELECT * FROM ai_intake_requests ORDER BY created_at DESC LIMIT 1"
supabase db query "SELECT * FROM newsletter_subscribers ORDER BY created_at DESC LIMIT 1"
```

## Troubleshooting

### Function Not Found (404)

**Problem:** `curl: (404) Not Found`

**Solutions:**
- Verify Supabase is running: `supabase status`
- Check function is deployed: `supabase functions list`
- Verify URL is correct (local vs production)

### Unauthorized (401)

**Problem:** `Unauthorized` response

**Solutions:**
- Check webhook secret is correct
- Verify `X-Webhook-Secret` header is included
- For local testing, use `local-test-secret`
- For production, use actual secret from environment

### Invalid JSON (400)

**Problem:** `invalid_json` error

**Solutions:**
- Validate JSON payload syntax
- Ensure Content-Type header is set
- Check for trailing commas in JSON

### Function Timeout

**Problem:** Request hangs or times out

**Solutions:**
- Check Docker is running (for local Supabase)
- Verify external API keys (OpenAI, MailerLite)
- Check function logs for errors
- Increase timeout in function configuration

### Missing Environment Variables

**Problem:** Function fails with missing config

**Solutions:**
- Verify `.env.local` exists and is loaded
- Check required variables are set:
  - `WEBHOOK_SECRET` for wp-sync
  - `OPENAI_API_KEY` for ai-intake
  - `MAILERLITE_WEBHOOK_SECRET` for ml-to-hugo (optional)
- Restart Supabase after updating env vars

## CI/CD Integration

### GitHub Actions Example

```yaml
name: Test Edge Functions

on: [push, pull_request]

jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      
      - name: Setup Supabase CLI
        run: npm install -g supabase
      
      - name: Start Supabase
        run: supabase start
      
      - name: Test Functions
        run: |
          chmod +x supabase/test-curl.sh
          ./supabase/test-curl.sh local all
      
      - name: View Logs
        if: failure()
        run: |
          supabase functions logs wp-sync
          supabase functions logs ml-to-hugo
```

## Best Practices

1. **Always test locally first** before deploying to production
2. **Use test data** - Don't use real customer emails or sensitive data
3. **Check logs** after each test to verify function behavior
4. **Test error cases** - Try invalid payloads to verify error handling
5. **Monitor production** - Set up alerts for function failures
6. **Version control** - Keep test payloads in git for reproducibility
7. **Document changes** - Update test payloads when function signatures change

## Additional Resources

- [Supabase Edge Functions Documentation](https://supabase.com/docs/guides/functions)
- [Supabase CLI Reference](https://supabase.com/docs/reference/cli)
- [Local Development Guide](./LOCAL_DEVELOPMENT.md)
- [Deployment Guide](../scripts/README.md)
