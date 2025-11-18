# Supabase Edge Functions

This directory contains Supabase edge functions and configuration for the MGRNZ WordPress site.

## Edge Functions

- **ai-intake** - Processes AI intake form submissions from WordPress
- **ai-intake-decision** - Handles AI decision logic for intake processing
- **wp-sync** - Syncs WordPress content with external systems (GitHub, Hugo)
- **ml-to-hugo** - Converts MailerLite content to Hugo format

## Local Development

### Quick Start

For a quick 5-minute setup, see: [QUICK_START.md](./QUICK_START.md)

### Full Documentation

For comprehensive setup instructions, troubleshooting, and best practices, see: [LOCAL_DEVELOPMENT.md](./LOCAL_DEVELOPMENT.md)

## Files

- **config.toml** - Supabase local configuration
- **functions/** - Edge function source code
- **migrations/** - Database migrations
- **.env.local** - Local environment variables (not committed)
- **.env.local.example** - Template for local environment variables
- **.env.supabase** - Production Supabase credentials (not committed to public repos)

## Getting Started

1. **Install prerequisites:**
   - Docker Desktop
   - Supabase CLI: `npm install -g supabase`

2. **Start Supabase:**
   ```powershell
   supabase start
   ```

3. **Configure environment:**
   ```powershell
   copy .env.local.example .env.local
   # Edit .env.local with your API keys
   ```

4. **Deploy functions:**
   ```powershell
   supabase functions deploy
   supabase functions serve
   ```

## Testing

### Quick Testing

Use the provided test scripts to test all edge functions:

```powershell
# Windows PowerShell - Test all functions
.\supabase\test-edge-functions.ps1

# Linux/Mac/Git Bash - Test all functions
./supabase/test-curl.sh local all
```

### Comprehensive Testing Documentation

- **[TESTING_EDGE_FUNCTIONS.md](./TESTING_EDGE_FUNCTIONS.md)** - Complete testing guide with examples
- **[TESTING_QUICK_REFERENCE.md](./TESTING_QUICK_REFERENCE.md)** - Quick command reference

### Manual Testing

```powershell
# Test wp-sync
curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "Content-Type: application/json" `
  -H "X-Webhook-Secret: local-test-secret" `
  -d '{\"event\":\"post_publish\",\"post_id\":123}'

# View logs
supabase functions logs wp-sync --follow
```

## Deployment

Edge functions are automatically deployed to production via CI/CD or manually:

```powershell
# Link to production project
supabase link --project-ref jqfodlzcsgfocyuawzyx

# Deploy to production
supabase functions deploy
```

## Resources

- [Supabase Documentation](https://supabase.com/docs)
- [Edge Functions Guide](https://supabase.com/docs/guides/functions)
- [Supabase CLI Reference](https://supabase.com/docs/reference/cli)

## Support

For issues or questions:
1. Check [LOCAL_DEVELOPMENT.md](./LOCAL_DEVELOPMENT.md) troubleshooting section
2. Review Supabase documentation
3. Check project documentation in `System-Docs/`
