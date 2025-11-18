# WordPress + Supabase Local Testing Guide

This guide explains how to test the WordPress and Supabase integration locally.

## Prerequisites

Before testing, ensure you have:

1. **Local WordPress running** at http://mgrnz.local (or your configured URL)
2. **Local Supabase running** via `supabase start`
3. **Edge functions deployed** via `supabase functions deploy`
4. **Environment variables configured** in both `.env.local` and `supabase/.env.local`

## Quick Setup Checklist

- [ ] Docker Desktop is running
- [ ] Supabase is started: `supabase start`
- [ ] Edge functions are deployed: `supabase functions deploy`
- [ ] Functions server is running: `supabase functions serve`
- [ ] WordPress is running at http://mgrnz.local
- [ ] `.env.local` has correct Supabase URL and keys
- [ ] `supabase/.env.local` has required API keys

## Testing Webhook Integration

### Test 1: Post Publish Webhook

This tests the WordPress → Supabase webhook when publishing a post.

**Steps:**

1. **Start monitoring edge function logs:**
   ```powershell
   supabase functions logs wp-sync --follow
   ```

2. **In WordPress admin:**
   - Go to Posts → Add New
   - Create a test post with title "Test Post for Webhook"
   - Click "Publish"

3. **Check the logs:**
   - You should see a POST request to `/wp-sync`
   - Verify the payload contains:
     - `event: "post_publish"`
     - `post_id: <number>`
     - `slug: "test-post-for-webhook"`
     - `status: "publish"`

**Expected Result:**
```
POST /wp-sync
{
  "event": "post_publish",
  "post_id": 123,
  "slug": "test-post-for-webhook",
  "status": "publish",
  "origin_site": "mgrnz.local",
  "sync_origin": "mgrnz.com",
  "modified_gmt": "2025-11-18T12:34:56+00:00",
  "acf": {...},
  "featured_media": null
}
```

### Test 2: Post Update Webhook

This tests the webhook when updating an existing post.

**Steps:**

1. **Edit the test post:**
   - Change the title or content
   - Click "Update"

2. **Check the logs:**
   - You should see `event: "post_update"`
   - Verify the `modified_gmt` timestamp is updated

### Test 3: Post Delete Webhook

This tests the webhook when deleting a post.

**Steps:**

1. **Delete the test post:**
   - Move post to trash or permanently delete

2. **Check the logs:**
   - You should see `event: "post_delete"`
   - Verify `status: "deleted"`

## Testing Edge Functions Directly

### Test wp-sync Function

Test the edge function directly without WordPress:

```powershell
curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "Content-Type: application/json" `
  -H "X-Webhook-Secret: local-test-secret" `
  -d '{
    \"event\": \"post_publish\",
    \"post_id\": 999,
    \"slug\": \"test-direct-call\",
    \"status\": \"publish\",
    \"origin_site\": \"mgrnz.local\",
    \"sync_origin\": \"mgrnz.com\",
    \"modified_gmt\": \"2025-11-18T12:00:00+00:00\"
  }'
```

**Expected Response:**
```json
{
  "success": true,
  "message": "Webhook processed successfully"
}
```

### Test ai-intake Function

Test the AI intake form submission:

```powershell
curl -X POST http://localhost:54321/functions/v1/ai-intake `
  -H "Content-Type: application/json" `
  -H "Authorization: Bearer YOUR_ANON_KEY" `
  -d '{
    \"name\": \"Test User\",
    \"email\": \"test@example.com\",
    \"company\": \"Test Company\",
    \"message\": \"This is a test message for AI intake\"
  }'
```

## Debugging Common Issues

### Issue: Webhook Not Received

**Symptoms:**
- Post published in WordPress
- No logs appear in `supabase functions logs`

**Troubleshooting:**

1. **Check if functions server is running:**
   ```powershell
   supabase status
   ```
   Look for "Functions" status.

2. **Verify webhook URL in WordPress:**
   - Check `.env.local` has: `MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync`
   - Restart WordPress to reload environment variables

3. **Check WordPress debug log:**
   ```powershell
   type wp-content\debug.log
   ```
   Look for errors related to `wp_remote_post`

4. **Test connectivity from WordPress:**
   Add this to a test PHP file:
   ```php
   <?php
   $response = wp_remote_post('http://localhost:54321/functions/v1/wp-sync', [
       'headers' => [
           'Content-Type' => 'application/json',
           'X-Webhook-Secret' => 'local-test-secret'
       ],
       'body' => json_encode(['event' => 'test'])
   ]);
   var_dump($response);
   ```

### Issue: Authentication Failed

**Symptoms:**
- Webhook received but returns 401 or 403 error

**Troubleshooting:**

1. **Verify webhook secret matches:**
   - `.env.local`: `MGRNZ_WEBHOOK_SECRET=local-test-secret`
   - `supabase/.env.local`: `MGRNZ_WEBHOOK_SECRET=local-test-secret`

2. **Check edge function code:**
   - Verify it's reading the secret correctly
   - Check header name matches: `X-Webhook-Secret`

3. **Test with curl:**
   ```powershell
   # With correct secret
   curl -X POST http://localhost:54321/functions/v1/wp-sync `
     -H "X-Webhook-Secret: local-test-secret" `
     -d '{\"event\":\"test\"}'
   
   # With wrong secret (should fail)
   curl -X POST http://localhost:54321/functions/v1/wp-sync `
     -H "X-Webhook-Secret: wrong-secret" `
     -d '{\"event\":\"test\"}'
   ```

### Issue: Edge Function Errors

**Symptoms:**
- Webhook received but function returns 500 error
- Error in function logs

**Troubleshooting:**

1. **Check function logs:**
   ```powershell
   supabase functions logs wp-sync
   ```

2. **Verify environment variables:**
   ```powershell
   type supabase\.env.local
   ```
   Ensure all required variables are set.

3. **Check for missing dependencies:**
   - Review `supabase/functions/deno.json`
   - Verify imports in function code

4. **Test function logic locally:**
   - Add console.log statements
   - Redeploy: `supabase functions deploy wp-sync`
   - Test again

### Issue: CORS Errors

**Symptoms:**
- Browser console shows CORS error
- Requests from frontend fail

**Troubleshooting:**

1. **Verify CORS configuration in wp-config-local.php:**
   ```php
   define('MGRNZ_ALLOWED_ORIGINS', 'http://mgrnz.local,http://localhost:8000');
   ```

2. **Check mgrnz-core.php is active:**
   - Look for `X-MGRNZ-Core: active` header in response
   - Use browser DevTools → Network tab

3. **Test CORS with curl:**
   ```powershell
   curl -X OPTIONS http://mgrnz.local/wp-json/wp/v2/posts `
     -H "Origin: http://localhost:3000" `
     -H "Access-Control-Request-Method: POST" `
     -v
   ```

## Testing Workflow

### Daily Development Testing

1. **Start services:**
   ```powershell
   # Terminal 1: Start Supabase
   supabase start
   supabase functions serve
   
   # Terminal 2: Monitor logs
   supabase functions logs --follow
   ```

2. **Make changes:**
   - Edit edge function code
   - Functions auto-reload (no need to redeploy)

3. **Test changes:**
   - Trigger from WordPress or use curl
   - Monitor logs for results

4. **Stop services:**
   ```powershell
   supabase stop
   ```

### Pre-Deployment Testing

Before deploying to production, test thoroughly:

1. **Test all webhook events:**
   - [ ] Post publish
   - [ ] Post update
   - [ ] Post delete

2. **Test edge functions:**
   - [ ] ai-intake
   - [ ] ai-intake-decision
   - [ ] wp-sync
   - [ ] ml-to-hugo

3. **Test error handling:**
   - [ ] Invalid webhook secret
   - [ ] Missing required fields
   - [ ] Network failures

4. **Test with production-like data:**
   - [ ] Pull production database
   - [ ] Test with real post content
   - [ ] Verify ACF fields are included

## Automated Testing

### Create Test Scripts

Create a PowerShell script for automated testing:

```powershell
# test-webhooks.ps1

Write-Host "Testing WordPress + Supabase Integration" -ForegroundColor Cyan

# Test 1: wp-sync
Write-Host "`nTest 1: wp-sync function" -ForegroundColor Yellow
$response = curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "Content-Type: application/json" `
  -H "X-Webhook-Secret: local-test-secret" `
  -d '{\"event\":\"test\"}' `
  -s

Write-Host "Response: $response"

# Test 2: ai-intake
Write-Host "`nTest 2: ai-intake function" -ForegroundColor Yellow
$response = curl -X POST http://localhost:54321/functions/v1/ai-intake `
  -H "Content-Type: application/json" `
  -d '{\"name\":\"Test\",\"email\":\"test@example.com\"}' `
  -s

Write-Host "Response: $response"

Write-Host "`nTests complete!" -ForegroundColor Green
```

Run with:
```powershell
.\test-webhooks.ps1
```

## Monitoring and Logging

### View All Logs

```powershell
# All function logs
supabase functions logs

# Specific function
supabase functions logs wp-sync

# Follow logs in real-time
supabase functions logs --follow

# Last 100 lines
supabase functions logs --limit 100
```

### WordPress Debug Logs

Enable debug logging in `.env.local`:
```env
WP_DEBUG=true
WP_DEBUG_LOG=true
WP_DEBUG_DISPLAY=false
```

View logs:
```powershell
type wp-content\debug.log
```

### Supabase Studio

Access the web UI for database inspection:
```powershell
start http://localhost:54323
```

Features:
- View database tables
- Run SQL queries
- Inspect edge function logs
- Test API endpoints

## Best Practices

1. **Always monitor logs** when testing webhooks
2. **Use test data** - don't test with production content
3. **Test error cases** - not just happy paths
4. **Document issues** - keep notes on problems and solutions
5. **Clean up test data** - delete test posts after testing
6. **Version control** - commit working configurations
7. **Separate environments** - never test against production Supabase

## Additional Resources

- [Supabase Local Development Guide](./supabase/LOCAL_DEVELOPMENT.md)
- [Supabase Quick Start](./supabase/QUICK_START.md)
- [Edge Functions Documentation](https://supabase.com/docs/guides/functions)
- [WordPress Hooks Reference](https://developer.wordpress.org/reference/hooks/)

## Getting Help

If you encounter issues:

1. Check this guide's troubleshooting section
2. Review Supabase function logs
3. Check WordPress debug logs
4. Test with curl to isolate the issue
5. Review project documentation in `System-Docs/`
