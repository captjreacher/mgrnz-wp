# Supabase Local Development - Quick Start

This is a condensed guide to get Supabase running locally in under 5 minutes.

## Prerequisites

- **Docker Desktop** - Must be installed and running
- **Node.js** - For installing Supabase CLI

## Quick Setup (5 Steps)

### 1. Install Supabase CLI

```powershell
npm install -g supabase
```

### 2. Start Docker Desktop

Make sure Docker Desktop is running (check system tray).

### 3. Start Supabase

```powershell
cd path\to\mgrnz-project
supabase start
```

**First time:** This will download ~2-3 GB of Docker images (takes 5-10 minutes).

**Save the output!** You'll need the `anon key` and `service_role key`.

### 4. Configure Environment Variables

Copy the example file:
```powershell
copy supabase\.env.local.example supabase\.env.local
```

Edit `supabase/.env.local` and add your API keys:
```env
OPENAI_API_KEY=sk-proj-your-key-here
MAILERLITE_API_KEY=your-key-here
MGRNZ_WEBHOOK_SECRET=local-test-secret
```

Update `.env.local` (WordPress) with Supabase credentials from step 3:
```env
SUPABASE_URL=http://localhost:54321
SUPABASE_ANON_KEY=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...
MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync
MGRNZ_WEBHOOK_SECRET=local-test-secret
```

### 5. Deploy and Serve Functions

```powershell
# Deploy functions to local Supabase
supabase functions deploy

# Start the functions server
supabase functions serve
```

## You're Done! 🎉

Your local Supabase is now running at:
- **API:** http://localhost:54321
- **Studio (Web UI):** http://localhost:54323
- **Database:** postgresql://postgres:postgres@localhost:54322/postgres

## Test It

Test the wp-sync function:
```powershell
curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "Content-Type: application/json" `
  -H "X-Webhook-Secret: local-test-secret" `
  -d '{\"event\":\"test\",\"message\":\"Hello from local!\"}'
```

## Daily Workflow

**Start working:**
```powershell
supabase start
supabase functions serve
```

**Stop when done:**
```powershell
supabase stop
```

## Common Commands

```powershell
# Check status
supabase status

# View logs
supabase functions logs

# View logs in real-time
supabase functions logs --follow

# Access web UI
start http://localhost:54323
```

## Troubleshooting

**Docker not running?**
- Start Docker Desktop and wait for it to fully start
- Check system tray for Docker icon

**Port already in use?**
- Stop other services using ports 54321-54324
- Or change ports in `supabase/config.toml`

**Functions not working?**
- Check logs: `supabase functions logs`
- Verify environment variables in `supabase/.env.local`
- Restart functions: `supabase functions serve`

## Need More Help?

See the full guide: [LOCAL_DEVELOPMENT.md](./LOCAL_DEVELOPMENT.md)
