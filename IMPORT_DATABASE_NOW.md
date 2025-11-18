# Import Production Database - Final Step

## ✅ Success So Far!

Your production database has been successfully:
- ✅ Exported from production server
- ✅ Downloaded to your local machine (10.6MB)
- ✅ Saved to: `.\backups\mgrnz-prod-20251118-193144.sql`

## 🎯 Final Step: Import to Local

Since the automated import script can't find MySQL, use Local's built-in database tools:

### Method 1: Using Local's Database Tab (EASIEST)

1. **Open Local by Flywheel app**
2. **Click on your "mgrnz" site** in the left sidebar
3. **Click the "Database" tab** at the top
4. **Click "ADMINER" button** (opens in browser)
5. In Adminer:
   - Click **"Import"** in the left menu
   - Click **"Choose Files"**
   - Select: `C:\DEV_LOCAL\mgrnz-wp\backups\mgrnz-prod-20251118-193144.sql`
   - Click **"Execute"**
6. Wait for import to complete (may take 1-2 minutes)

### Method 2: Using Local's Import Feature

1. **Open Local by Flywheel app**
2. **Click on your "mgrnz" site**
3. **Click the "Database" tab**
4. **Click "IMPORT SQL"** button
5. **Select the file**: `C:\DEV_LOCAL\mgrnz-wp\backups\mgrnz-prod-20251118-193144.sql`
6. **Click "Import"**

## 🔧 After Import: Fix URLs

After importing, you need to replace production URLs with local URLs:

### Option A: Using WP-CLI (if available in Local)

1. Open Local's **"Open Site Shell"** (in the site menu)
2. Run these commands:

```bash
wp search-replace 'https://mgrnz.com' 'http://mgrnz.local' --all-tables
wp user update 1 --user_pass=admin
```

### Option B: Using Better Search Replace Plugin

1. Go to http://mgrnz.local/wp-admin
2. Install "Better Search Replace" plugin
3. Go to Tools → Better Search Replace
4. Search for: `https://mgrnz.com`
5. Replace with: `http://mgrnz.local`
6. Select all tables
7. Check "Run as dry run" first to test
8. Then uncheck and click "Run Search/Replace"

### Option C: Manual SQL (in Adminer)

In Adminer, go to "SQL command" and run:

```sql
-- Replace URLs in options table
UPDATE wp_options SET option_value = REPLACE(option_value, 'https://mgrnz.com', 'http://mgrnz.local');

-- Replace URLs in posts
UPDATE wp_posts SET post_content = REPLACE(post_content, 'https://mgrnz.com', 'http://mgrnz.local');
UPDATE wp_posts SET guid = REPLACE(guid, 'https://mgrnz.com', 'http://mgrnz.local');

-- Replace URLs in postmeta
UPDATE wp_postmeta SET meta_value = REPLACE(meta_value, 'https://mgrnz.com', 'http://mgrnz.local');

-- Reset admin password (user ID 1)
UPDATE wp_users SET user_pass = MD5('admin') WHERE ID = 1;
```

## ✨ Access Your Local Site

After import and URL replacement:

- **Site URL**: http://mgrnz.local
- **Admin URL**: http://mgrnz.local/wp-admin
- **Username**: (your production admin username)
- **Password**: admin (if you reset it)

## 🎉 You're Done!

Your local WordPress now has all your production data!

## 📝 Notes

- The SQL file is saved in `.\backups\` for future use
- You can re-import anytime if needed
- Local automatically backs up before imports
- Production data is NOT affected - this is one-way sync

## 🔄 Future Database Pulls

Now that SSH is configured (port 21098), you can pull fresh data anytime:

```powershell
.\scripts\db-pull-simple.ps1
```

This will:
1. Export from production
2. Download to local
3. You'll still need to import manually via Local's tools

## ❓ Need Help?

If you run into issues:
1. Check Local's logs (Help → Reveal Logs)
2. Make sure the mgrnz site is running (green indicator)
3. Try restarting the Local site
4. Check that the SQL file isn't corrupted (should be ~10MB)
