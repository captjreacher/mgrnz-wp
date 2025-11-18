# Supabase Local Development Setup

This guide explains how to set up and test Supabase edge functions locally for the MGRNZ WordPress site.

## Overview

The MGRNZ site uses Supabase edge functions for automation:
- `ai-intake` - Processes AI intake form submissions
- `ai-intake-decision` - Handles AI decision logic
- `wp-sync` - Syncs WordPress content with external systems
- `ml-to-hugo` - Converts MailerLite content to Hugo format

For local development, you have two options:
1. **Local Supabase (Recommended)** - Run Supabase locally using Docker
2. **Cloud Testing** - Use a separate staging Supabase project

## Prerequisites

### Option 1: Local Supabase (Docker-based)

**Required Software:**
- **Docker Desktop** - For running Supabase services locally
  - Download: https://www.docker.com/products/docker-desktop/
  - Minimum version: 20.10+
  - Ensure Docker is running before starting Supabase

- **Supabase CLI** - Command-line tool for managing Supabase
  - Install via npm: `npm install -g supabase`
  - Or via Scoop (Windows): `scoop bucket add supabase https://github.com/supabase/scoop-bucket.git` then `scoop install supabase`
  - Minimum version: 1.0+

- **Git** - For version control
  - Download: https://git-scm.com/downloads

### Option 2: Cloud Testing (No Docker Required)

**Required:**
- A separate Supabase project for testing/staging
- Supabase account (free tier is sufficient)

## Installation Steps

### Option 1: Local Supabase Setup

#### Step 1: Install Docker Desktop

1. Download Docker Desktop from https://www.docker.com/products/docker-desktop/
2. Run the installer and follow the setup wizard
3. Start Docker Desktop
4. Verify installation:
   ```powershell
   docker --version
   docker ps
   ```

#### Step 2: Install Supabase CLI

**Using npm (recommended):**
```powershell
npm install -g supabase
```

**Using Scoop (Windows package manager):**
```powershell
# Install Scoop if not already installed
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser
irm get.scoop.sh | iex

# Add Supabase bucket and install
scoop bucket add supabase https://github.com/supabase/scoop-bucket.git
scoop install supabase
```

**Verify installation:**
```powershell
supabase --version
```

#### Step 3: Initialize Local Supabase

Navigate to your project directory and initialize Supabase:

```powershell
cd path\to\mgrnz-project

# Initialize Supabase (if not already done)
supabase init

# This creates the supabase/ directory with:
# - config.toml (Supabase configuration)
# - functions/ (edge functions)
# - migrations/ (database migrations)
```

#### Step 4: Configure Local Environment Variables

Create or update `supabase/.env.local`:

```env
# OpenAI API Key (for AI functions)
OPENAI_API_KEY=your-openai-api-key

# MailerLite API Key (use test key for local)
MAILERLITE_API_KEY=test-key-local

# GitHub Token (optional for local testing)
GITHUB_TOKEN=your-github-token

# WordPress Webhook Secret
MGRNZ_WEBHOOK_SECRET=local-test-secret

# Other environment variables as needed
```

**Important:** Add `.env.local` to `.gitignore` to prevent committing secrets.

#### Step 5: Start Local Supabase

Start all Supabase services locally:

```powershell
supabase start
```

This command will:
- Pull required Docker images (first time only, ~2-3 GB)
- Start PostgreSQL, PostgREST, GoTrue, Storage, and other services
- Display connection details and credentials

**Expected output:**
```
Started supabase local development setup.

         API URL: http://localhost:54321
          DB URL: postgresql://postgres:postgres@localhost:54322/postgres
      Studio URL: http://localhost:54323
    Inbucket URL: http://localhost:54324
      JWT secret: super-secret-jwt-token-with-at-least-32-characters-long
        anon key: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...
service_role key: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...
```

**Save these credentials** - you'll need them for WordPress configuration.

#### Step 6: Deploy Edge Functions Locally

Deploy your edge functions to the local Supabase instance:

```powershell
# Deploy all functions
supabase functions deploy

# Or deploy specific function
supabase functions deploy ai-intake
supabase functions deploy wp-sync
```

#### Step 7: Serve Edge Functions

Start the edge functions server:

```powershell
supabase functions serve
```

This starts a local server at `http://localhost:54321/functions/v1/`

Your edge functions are now available at:
- `http://localhost:54321/functions/v1/ai-intake`
- `http://localhost:54321/functions/v1/ai-intake-decision`
- `http://localhost:54321/functions/v1/wp-sync`
- `http://localhost:54321/functions/v1/ml-to-hugo`

### Option 2: Cloud Testing Setup

#### Step 1: Create Staging Supabase Project

1. Go to https://supabase.com/dashboard
2. Click "New Project"
3. Name it "mgrnz-staging" or similar
4. Choose a region close to you
5. Set a strong database password
6. Wait for project creation (~2 minutes)

#### Step 2: Deploy Edge Functions to Staging

```powershell
# Link to your staging project
supabase link --project-ref your-staging-project-ref

# Deploy functions
supabase functions deploy
```

#### Step 3: Configure Environment Variables

In Supabase Dashboard:
1. Go to Project Settings > Edge Functions
2. Add environment variables:
   - `OPENAI_API_KEY` - Your OpenAI API key
   - `MAILERLITE_API_KEY` - Test API key
   - `GITHUB_TOKEN` - Your GitHub token
   - `MGRNZ_WEBHOOK_SECRET` - Test webhook secret

#### Step 4: Get Staging Credentials

From Supabase Dashboard > Settings > API:
- Copy the Project URL
- Copy the anon/public key
- Copy the service_role key (keep secret!)

## WordPress Configuration

### Update .env.local

Update your `.env.local` file with local Supabase credentials:

**For Local Supabase (Docker):**
```env
# Supabase Configuration (Local)
SUPABASE_URL=http://localhost:54321
SUPABASE_ANON_KEY=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9... # from supabase start output
SUPABASE_SERVICE_ROLE_KEY=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9... # from supabase start output

# Webhook Configuration
MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync
MGRNZ_WEBHOOK_SECRET=local-test-secret
```

**For Cloud Testing:**
```env
# Supabase Configuration (Staging)
SUPABASE_URL=https://your-staging-project.supabase.co
SUPABASE_ANON_KEY=your-staging-anon-key
SUPABASE_SERVICE_ROLE_KEY=your-staging-service-role-key

# Webhook Configuration
MGRNZ_WEBHOOK_URL=https://your-staging-project.supabase.co/functions/v1/wp-sync
MGRNZ_WEBHOOK_SECRET=staging-webhook-secret
```

### Verify WordPress Configuration

The `wp-config-local.php` file should automatically load these environment variables. Verify by checking:

```php
// These constants should be defined in wp-config-local.php
define('SUPABASE_URL', env('SUPABASE_URL', 'http://localhost:54321'));
define('SUPABASE_ANON_KEY', env('SUPABASE_ANON_KEY', 'test-key-local'));
define('MGRNZ_WEBHOOK_URL', env('MGRNZ_WEBHOOK_URL', 'http://localhost:54321/functions/v1/wp-sync'));
define('MGRNZ_WEBHOOK_SECRET', env('MGRNZ_WEBHOOK_SECRET', 'local-test-secret'));
```

## Testing Edge Functions

### Test with curl

Test edge functions directly using curl:

**Test wp-sync function:**
```powershell
curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "Content-Type: application/json" `
  -H "X-Webhook-Secret: local-test-secret" `
  -d '{\"event\":\"post_publish\",\"post_id\":123,\"post_title\":\"Test Post\"}'
```

**Test ai-intake function:**
```powershell
curl -X POST http://localhost:54321/functions/v1/ai-intake `
  -H "Content-Type: application/json" `
  -H "Authorization: Bearer YOUR_ANON_KEY" `
  -d '{\"name\":\"Test User\",\"email\":\"test@example.com\",\"message\":\"Test message\"}'
```

### Test from WordPress

1. Start your local WordPress site
2. Trigger an action that calls the webhook (e.g., publish a post)
3. Check edge function logs for activity

### View Edge Function Logs

**Local Supabase:**
```powershell
# View logs for all functions
supabase functions logs

# View logs for specific function
supabase functions logs wp-sync

# Follow logs in real-time
supabase functions logs --follow
```

**Cloud Testing:**
View logs in Supabase Dashboard > Edge Functions > Select function > Logs

## Common Commands

### Local Supabase Management

```powershell
# Start Supabase
supabase start

# Stop Supabase
supabase stop

# Restart Supabase
supabase stop
supabase start

# Check status
supabase status

# View all logs
supabase logs

# Reset database (WARNING: deletes all data)
supabase db reset

# Access Supabase Studio (web UI)
# Open http://localhost:54323 in browser
```

### Edge Function Development

```powershell
# Create new function
supabase functions new function-name

# Deploy function
supabase functions deploy function-name

# Deploy all functions
supabase functions deploy

# Serve functions locally
supabase functions serve

# Serve specific function
supabase functions serve function-name

# Delete function
supabase functions delete function-name
```

### Database Management

```powershell
# Run migrations
supabase db push

# Create new migration
supabase migration new migration-name

# Reset database to clean state
supabase db reset

# Dump database schema
supabase db dump -f schema.sql

# Connect to database
supabase db connect
```

## Troubleshooting

### Docker Issues

**Problem:** Docker is not running
```
Error: Cannot connect to the Docker daemon
```

**Solution:**
1. Start Docker Desktop
2. Wait for Docker to fully start (check system tray icon)
3. Run `docker ps` to verify
4. Try `supabase start` again

**Problem:** Port conflicts
```
Error: port 54321 is already in use
```

**Solution:**
1. Stop other services using those ports
2. Or modify ports in `supabase/config.toml`:
   ```toml
   [api]
   port = 54321  # Change to different port
   ```

### Supabase CLI Issues

**Problem:** Command not found
```
supabase: command not found
```

**Solution:**
1. Reinstall Supabase CLI: `npm install -g supabase`
2. Restart terminal/PowerShell
3. Verify installation: `supabase --version`

**Problem:** Functions not deploying
```
Error: Failed to deploy function
```

**Solution:**
1. Check function syntax for errors
2. Verify `supabase/functions/deno.json` exists
3. Check function has `index.ts` file
4. Review logs: `supabase functions logs`

### WordPress Connection Issues

**Problem:** WordPress cannot reach local Supabase
```
Error: Failed to connect to http://localhost:54321
```

**Solution:**
1. Verify Supabase is running: `supabase status`
2. Check `.env.local` has correct URL
3. Test with curl to verify endpoint is accessible
4. Check WordPress error logs: `wp-content/debug.log`

**Problem:** Webhook authentication fails
```
Error: Invalid webhook secret
```

**Solution:**
1. Verify `MGRNZ_WEBHOOK_SECRET` matches in:
   - `.env.local` (WordPress)
   - `supabase/.env.local` (Edge functions)
2. Restart both WordPress and Supabase
3. Check edge function logs for actual error

### Edge Function Errors

**Problem:** Function returns 500 error
```
Error: Internal Server Error
```

**Solution:**
1. Check function logs: `supabase functions logs function-name`
2. Verify environment variables are set
3. Test function logic locally
4. Check for missing dependencies in `deno.json`

**Problem:** Environment variables not available
```
Error: OPENAI_API_KEY is not defined
```

**Solution:**
1. Create `supabase/.env.local` with required variables
2. Restart functions: `supabase functions serve`
3. Verify variables in function code: `Deno.env.get('VARIABLE_NAME')`

## Best Practices

### Development Workflow

1. **Start Supabase first**
   ```powershell
   supabase start
   supabase functions serve
   ```

2. **Start WordPress**
   - Start Local by Flywheel or your local server
   - Access http://mgrnz.local

3. **Make changes to edge functions**
   - Edit function code in `supabase/functions/`
   - Functions auto-reload when using `supabase functions serve`

4. **Test changes**
   - Trigger from WordPress or use curl
   - Monitor logs: `supabase functions logs --follow`

5. **Stop services when done**
   ```powershell
   supabase stop
   ```

### Security

- **Never commit secrets** - Add `.env.local` to `.gitignore`
- **Use test credentials** - Don't use production API keys locally
- **Separate projects** - Use different Supabase projects for local/staging/production
- **Rotate secrets** - Change webhook secrets regularly

### Performance

- **Keep Docker running** - Avoid frequent start/stop cycles
- **Limit log output** - Use specific function logs instead of all logs
- **Clean up regularly** - Run `supabase db reset` to clear test data

## Additional Resources

- **Supabase Documentation:** https://supabase.com/docs
- **Supabase CLI Reference:** https://supabase.com/docs/reference/cli
- **Edge Functions Guide:** https://supabase.com/docs/guides/functions
- **Docker Documentation:** https://docs.docker.com/
- **Deno Documentation:** https://deno.land/manual (edge functions use Deno)

## Support

If you encounter issues not covered in this guide:

1. Check Supabase status: https://status.supabase.com/
2. Review Supabase GitHub issues: https://github.com/supabase/supabase/issues
3. Join Supabase Discord: https://discord.supabase.com/
4. Check project documentation in `System-Docs/`
