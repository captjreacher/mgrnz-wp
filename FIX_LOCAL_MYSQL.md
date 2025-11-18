# Fix Local WordPress MySQL Extension Error

## The Error

```
Your PHP installation appears to be missing the MySQL extension which is required by WordPress.
```

## Quick Fix

This happens when Local by Flywheel's PHP configuration is incorrect.

### Solution 1: Restart Local Site (Easiest)

1. Open **Local by Flywheel** app
2. Click on your **"mgrnz"** site
3. Click **"Stop"** button
4. Wait 5 seconds
5. Click **"Start"** button
6. Try accessing http://mgrnz.local again

### Solution 2: Change PHP Version

1. Open **Local** app
2. Right-click your **"mgrnz"** site
3. Click **"Change PHP version"**
4. Select **PHP 8.0** or **PHP 8.1**
5. Click **"Apply"**
6. Restart the site

### Solution 3: Recreate Site

If above doesn't work:

1. **Export your database first!**
   - Local app → Database tab → Export
   - Save the SQL file

2. **Delete the site**
   - Right-click site → Delete

3. **Create new site**
   - Same name: "mgrnz"
   - Same domain: "mgrnz.local"
   - PHP 8.1, MySQL 8.0

4. **Import database**
   - Database tab → Import
   - Select your exported SQL file

## Verify It's Fixed

Visit: http://mgrnz.local

You should see your WordPress site!

## Still Having Issues?

Check Local's logs:
- Local app → Help → Reveal Logs
- Look for PHP or MySQL errors
