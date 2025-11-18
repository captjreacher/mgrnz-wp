# Production Data Pull Guide

## Current Situation

Your local WordPress environment is running but has no production data. SSH connection to your production server is timing out, which is common with shared hosting providers.

## Your Production Server Details

From your Spaceship hosting panel:
- **Username**: `hdmqglfetq`
- **Home Directory**: `/home/hdmqglfetq`
- **IP Address**: `66.29.148.18`
- **Domain**: `mgrnz.com`

## Why SSH Isn't Working

Shared hosting providers like Spaceship often:
1. Disable SSH access by default for security
2. Require SSH to be enabled in the control panel
3. Use a different SSH port (not the standard port 22)
4. Require SSH key authentication instead of passwords

## Alternative Methods to Pull Production Data

### Option 1: Enable SSH Access (Recommended)

1. **Log into your Spaceship hosting control panel**
2. **Look for SSH/Shell Access settings**
   - Usually under "Advanced" or "Security" section
   - May be called "SSH Access", "Terminal Access", or "Shell Access"
3. **Enable SSH access**
   - Note any special hostname or port number
   - Check if you need to generate an SSH key
4. **Get SSH connection details**
   - Hostname (might be different from your domain)
   - Port (might not be 22)
   - Authentication method (password or key)

Once enabled, update the test script with the correct details.

### Option 2: Manual Database Export/Import (Easiest for Now)

If SSH is not available or too complex to set up, you can manually pull the database:

#### Step 1: Export Database from Production

1. **Log into your Spaceship hosting control panel**
2. **Open phpMyAdmin** (usually under "Databases" section)
3. **Select your WordPress database** (likely named `MGRNZ` or similar)
4. **Click "Export" tab**
5. **Choose "Quick" export method**
6. **Format: SQL**
7. **Click "Go" to download the SQL file**
8. **Save it to your local machine** (e.g., `C:\DEV_LOCAL\mgrnz-wp\backups\production-manual-export.sql`)

#### Step 2: Import Database to Local

1. **Open PowerShell in your project directory**
2. **Run the manual import script**:

```powershell
.\scripts\manual-db-import.ps1 -SqlFile "C:\path\to\your\exported-file.sql"
```

This will:
- Backup your current local database
- Import the production database
- Replace URLs (https://mgrnz.com → http://mgrnz.local)
- Reset admin password to "admin"

### Option 3: Use Spaceship's Built-in Tools

Some hosting providers offer:
- **Database sync tools** in the control panel
- **Backup/restore features** that can download databases
- **Migration plugins** that work without SSH

Check your Spaceship control panel for these features.

### Option 4: Use a WordPress Plugin

Install a migration plugin on production:
1. **All-in-One WP Migration** (free, easy to use)
2. **Duplicator** (free, more features)
3. **WP Migrate DB** (specifically for database sync)

These plugins can export your database and let you download it, then import it locally.

## Next Steps

**What would you like to do?**

1. **Try to enable SSH** - I can help you configure it once you have the details
2. **Manual export/import** - I'll create a script to make this easy
3. **Check for Spaceship tools** - Look in your control panel for database management
4. **Use a plugin** - Install a migration plugin on production

Let me know which approach you'd like to take, and I'll help you through it!

## Quick Manual Import Script

I'll create a script that makes manual import easy. You just need to:
1. Export the database from phpMyAdmin
2. Run the script with the path to the SQL file
3. The script handles everything else (backup, import, URL replacement, password reset)
