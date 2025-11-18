# Quick Start: Pull Production Database to Local

## Current Status
- ✅ Local WordPress running (Local by Flywheel)
- ✅ Production site accessible at https://mgrnz.com
- ❌ SSH not currently accessible
- ❌ No migration plugins installed

## Fastest Solution: Manual Export/Import

### Step 1: Export from Production (5 minutes)

1. **Log into Spaceship Hosting Control Panel**
   - Go to your hosting provider's website
   - Log in with your credentials

2. **Find phpMyAdmin**
   - Look for "Databases" or "MySQL Databases" section
   - Click on "phpMyAdmin" link

3. **Export the Database**
   - In phpMyAdmin, select your database (likely named `MGRNZ`)
   - Click the **"Export"** tab at the top
   - Choose **"Quick"** export method (default)
   - Format: **SQL** (default)
   - Click **"Go"** button
   - Save the file (e.g., `mgrnz-production.sql`)

4. **Save to Your Project**
   - Move the downloaded file to: `C:\DEV_LOCAL\mgrnz-wp\backups\`
   - Or remember the path where you saved it

### Step 2: Import to Local (2 minutes)

Open PowerShell in your project directory and run:

```powershell
.\scripts\manual-db-import.ps1 -SqlFile "C:\DEV_LOCAL\mgrnz-wp\backups\mgrnz-production.sql"
```

**Or if you saved it elsewhere:**

```powershell
.\scripts\manual-db-import.ps1 -SqlFile "C:\Users\YourName\Downloads\mgrnz-production.sql"
```

The script will automatically:
- ✅ Backup your current local database
- ✅ Import production data
- ✅ Replace URLs (https://mgrnz.com → http://mgrnz.local)
- ✅ Reset admin password to "admin"

### Step 3: Access Your Local Site

Open your browser and go to:
- **URL**: http://mgrnz.local
- **Username**: (your production admin username)
- **Password**: admin

---

## Alternative: Use Local's Built-in Import

If the PowerShell script doesn't work:

1. **Open Local by Flywheel app**
2. **Click on your "mgrnz" site**
3. **Go to "Database" tab**
4. **Click "ADMINER" button** (opens database management)
5. **Click "Import"** in the left menu
6. **Choose your SQL file**
7. **Click "Execute"**

After import, you'll need to:
- Fix URLs using "Better Search Replace" plugin
- Reset admin password manually

---

## Option 2: Install Migration Plugin (If You Prefer)

### On Production Site:

1. **Log into WordPress Admin**
   - Go to https://mgrnz.com/wp-admin
   - Log in with your credentials

2. **Install Plugin**
   - Go to Plugins → Add New
   - Search for "All-in-One WP Migration"
   - Click "Install Now" then "Activate"

3. **Export Database**
   - Go to All-in-One WP Migration → Export
   - Choose "Export To" → File
   - Select "Database Only" (to keep file size small)
   - Download the export file

4. **Import Locally**
   - Install the same plugin on your local site
   - Go to All-in-One WP Migration → Import
   - Upload the export file
   - The plugin handles URL replacement automatically

---

## Troubleshooting

### "MySQL client not found" Error

If the PowerShell script can't find MySQL:

1. Use Local's built-in import (see Alternative above)
2. Or install MySQL Workbench and import manually

### "Database import failed" Error

- Check that the SQL file isn't corrupted (should be several MB)
- Try using Local's Adminer tool instead
- Make sure Local site is running

### Can't Access Local Site After Import

1. Make sure Local site is started (green indicator in Local app)
2. Check that URLs were replaced correctly
3. Clear your browser cache
4. Try accessing http://mgrnz.local/wp-admin directly

### Need to Re-import

If something goes wrong, you can always re-run the import:

```powershell
.\scripts\manual-db-import.ps1 -SqlFile "path\to\your\file.sql"
```

The script creates backups automatically, so you can always restore.

---

## Next Steps After Import

Once you have production data locally:

1. **Verify the import**
   - Check that posts/pages are visible
   - Verify plugins are showing correctly
   - Test admin access

2. **Update local environment variables**
   - Make sure `.env.local` has correct settings
   - Test Supabase integration locally

3. **Start developing**
   - Make changes locally
   - Test thoroughly
   - Deploy to production when ready

---

## Need Help?

If you run into issues:

1. Check the log files in `logs/` directory
2. Look at the backup files in `backups/` directory
3. Try the alternative methods listed above
4. Check Local by Flywheel's logs (Help → Reveal Logs)

---

## Quick Commands Reference

```powershell
# Import database
.\scripts\manual-db-import.ps1 -SqlFile "path\to\file.sql"

# Check local database status
.\scripts\check-local-db.ps1

# Test production access
.\scripts\check-production-access.ps1

# Test SSH connection (if you enable it later)
.\scripts\test-ssh-connection.ps1
```
