# Edge Function Testing - Quick Reference

## Quick Start

```powershell
# Windows PowerShell - Test all functions locally
.\supabase\test-edge-functions.ps1

# Linux/Mac/Git Bash - Test all functions locally
./supabase/test-curl.sh local all
```

## PowerShell Commands

```powershell
# Test specific function
.\supabase\test-edge-functions.ps1 -Function wp-sync
.\supabase\test-edge-functions.ps1 -Function ml-to-hugo
.\supabase\test-edge-functions.ps1 -Function ai-intake

# Test with logs
.\supabase\test-edge-functions.ps1 -Function wp-sync -ShowLogs

# Test production
.\supabase\test-edge-functions.ps1 -Environment production -Function wp-sync
```

## Bash/Curl Commands

```bash
# Test specific function
./supabase/test-curl.sh local wp-sync
./supabase/test-curl.sh local ml-to-hugo
./supabase/test-curl.sh local ai-intake

# View logs
./supabase/test-curl.sh local logs wp-sync

# Test production
./supabase/test-curl.sh production wp-sync
```

## Direct Curl Commands

### wp-sync (WordPress webhook)

```bash
curl -X POST http://localhost:54321/functions/v1/wp-sync \
  -H "Content-Type: application/json" \
  -H "X-Webhook-Secret: local-test-secret" \
  -d '{"event":"post_publish","post_id":123,"slug":"test-post"}'
```

### ml-to-hugo (MailerLite webhook)

```bash
curl -X POST http://localhost:54321/functions/v1/ml-to-hugo \
  -H "Content-Type: application/json" \
  -d '{"type":"subscriber.created","data":{"email":"test@example.com","id":"123"}}'
```

### ai-intake (AI workflow form)

```bash
curl -X POST http://localhost:54321/functions/v1/ai-intake \
  -H "Content-Type: application/json" \
  -d '{"goal":"Automate onboarding","workflow_description":"Manual process","email":"test@example.com"}'
```

## Log Commands

```bash
# View local logs
supabase functions logs wp-sync
supabase functions logs ml-to-hugo
supabase functions logs ai-intake

# Follow logs in real-time
supabase functions logs wp-sync --follow

# View production logs
supabase functions logs wp-sync --project-ref jqfodlzcsgfocyuawzyx
```

## Supabase Management

```bash
# Start local Supabase
supabase start

# Check status
supabase status

# Stop Supabase
supabase stop

# List functions
supabase functions list

# Deploy function
supabase functions deploy wp-sync

# View database
supabase db query "SELECT * FROM newsletter_subscribers LIMIT 5"
```

## Common Test Scenarios

### Test WordPress Post Publish

```powershell
.\supabase\test-edge-functions.ps1 -Function wp-sync -ShowLogs
```

### Test Newsletter Subscription

```powershell
.\supabase\test-edge-functions.ps1 -Function ml-to-hugo
# Then check database
supabase db query "SELECT * FROM newsletter_subscribers ORDER BY created_at DESC LIMIT 1"
```

### Test AI Workflow

```powershell
# 1. Submit intake
.\supabase\test-edge-functions.ps1 -Function ai-intake

# 2. Get intake_id from response
# 3. Update test-payloads/ai-intake-decision.json
# 4. Submit decision
.\supabase\test-edge-functions.ps1 -Function ai-intake-decision
```

## Troubleshooting

| Error | Solution |
|-------|----------|
| 404 Not Found | Run `supabase start` and verify function exists |
| 401 Unauthorized | Check webhook secret matches |
| 400 Invalid JSON | Validate JSON syntax in payload |
| Timeout | Check Docker is running, verify API keys |
| Missing env vars | Check `.env.local` file exists and is loaded |

## File Locations

- Test scripts: `supabase/test-edge-functions.ps1`, `supabase/test-curl.sh`
- Test payloads: `supabase/test-payloads/*.json`
- Functions: `supabase/functions/*/index.ts`
- Environment: `supabase/.env.local`
- Documentation: `supabase/TESTING_EDGE_FUNCTIONS.md`

## Environment Variables

### Local (.env.local)

```env
WEBHOOK_SECRET=local-test-secret
OPENAI_API_KEY=sk-...
MAILERLITE_WEBHOOK_SECRET=optional
SUPABASE_URL=http://localhost:54321
SUPABASE_SERVICE_ROLE_KEY=...
```

### Production

Set in Supabase dashboard under Project Settings > Edge Functions > Secrets
