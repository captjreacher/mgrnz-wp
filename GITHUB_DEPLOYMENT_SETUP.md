# GitHub Actions Deployment Setup

This guide will help you set up automatic deployment to production using GitHub Actions.

## Overview

Once configured, your workflow will be:
1. Make changes locally
2. Commit and push to GitHub
3. GitHub Actions automatically deploys to production
4. Done! No terminal commands needed.

## Prerequisites

- GitHub repository for your WordPress site
- SSH access to production server (already configured: port 21098)

## Setup Steps

### Step 1: Generate SSH Key for GitHub Actions

GitHub Actions needs its own SSH key to connect to your production server.

1. **Generate a new SSH key** (on your local machine):

```powershell
# Generate SSH key (no passphrase)
ssh-keygen -t ed25519 -C "github-actions@mgrnz.com" -f github-actions-key
```

This creates two files:
- `github-actions-key` (private key - for GitHub)
- `github-actions-key.pub` (public key - for production server)

2. **Add public key to production server**:

```powershell
# Copy the public key content
Get-Content github-actions-key.pub | clip

# Then add it to production server
ssh -p 21098 hdmqglfetq@66.29.148.18

# On production server, run:
mkdir -p ~/.ssh
echo "PASTE_PUBLIC_KEY_HERE" >> ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
exit
```

3. **Test the key works**:

```powershell
ssh -i github-actions-key -p 21098 hdmqglfetq@66.29.148.18 "echo 'Connection successful!'"
```

### Step 2: Add Secrets to GitHub

1. **Go to your GitHub repository**
2. **Click Settings** → **Secrets and variables** → **Actions**
3. **Click "New repository secret"** and add these secrets:

| Secret Name | Value | Description |
|------------|-------|-------------|
| `SSH_PRIVATE_KEY` | Contents of `github-actions-key` file | Private SSH key for deployment |
| `SSH_HOST` | `66.29.148.18` | Production server IP |
| `SSH_PORT` | `21098` | SSH port |
| `SSH_USER` | `hdmqglfetq` | SSH username |
| `PRODUCTION_PATH` | `/home/hdmqglfetq/mgrnz.com/wp` | WordPress installation path |

**To get the private key content:**

```powershell
Get-Content github-actions-key
```

Copy the entire output (including `-----BEGIN OPENSSH PRIVATE KEY-----` and `-----END OPENSSH PRIVATE KEY-----`)

### Step 3: Initialize Git Repository (if not already done)

```powershell
# Initialize git
git init

# Add remote (replace with your repository URL)
git remote add origin https://github.com/YOUR_USERNAME/mgrnz-wp.git

# Create .gitignore
```

### Step 4: Create .gitignore

Make sure sensitive files are not committed:

```
# WordPress
wp-config.php
wp-config-local.php

# Environment files
.env
.env.local
.env.production

# Uploads and cache
wp/wp-content/uploads/
wp/wp-content/cache/
wp/wp-content/upgrade/

# Backups and logs
backups/
logs/
temp/

# Node modules
node_modules/

# IDE
.vscode/
.idea/

# OS
.DS_Store
Thumbs.db

# SSH keys
*.pem
*-key
*-key.pub
github-actions-key*
```

### Step 5: First Deployment

```powershell
# Stage all files
git add .

# Commit
git commit -m "Initial commit with GitHub Actions deployment"

# Push to GitHub (this will trigger deployment)
git push -u origin main
```

## How It Works

### Automatic Deployment

When you push to the `main` branch:

1. **GitHub Actions starts** automatically
2. **Connects to production** via SSH
3. **Syncs WordPress files** (themes, plugins, mu-plugins)
4. **Deploys configuration** (.env file)
5. **Clears cache** on production
6. **Notifies you** of success/failure

### Manual Deployment

You can also trigger deployment manually:

1. Go to your GitHub repository
2. Click **Actions** tab
3. Click **Deploy to Production** workflow
4. Click **Run workflow** button
5. Select branch and click **Run workflow**

## What Gets Deployed

### ✅ Deployed:
- WordPress themes
- WordPress plugins
- MU-plugins
- Configuration files
- Custom code

### ❌ Not Deployed:
- Uploads folder (media files)
- Database changes
- Cache files
- Backup files
- Environment-specific files

## Workflow

### Daily Development:

```powershell
# 1. Make changes locally
# Edit files in your local WordPress

# 2. Test locally
# Visit http://mgrnz.local

# 3. Commit changes
git add .
git commit -m "Description of changes"

# 4. Push to GitHub (triggers deployment)
git push

# 5. Check deployment status
# Go to GitHub → Actions tab
# Watch the deployment progress

# 6. Verify on production
# Visit https://mgrnz.com
```

### For Database Changes:

Database changes still need to be handled separately:

```powershell
# Export local database
# Use Local's Database tab → Export

# Import to production
# Use phpMyAdmin on production server
# Or use the db-push.ps1 script
```

## Monitoring Deployments

### View Deployment Status:

1. Go to your GitHub repository
2. Click **Actions** tab
3. See all deployment runs
4. Click any run to see detailed logs

### Deployment Failed?

If deployment fails:

1. Check the error in GitHub Actions logs
2. Common issues:
   - SSH connection failed (check secrets)
   - Permission denied (check SSH key)
   - File not found (check paths)
3. Fix the issue
4. Push again or re-run the workflow

## Advanced Configuration

### Deploy Only Specific Files

Edit `.github/workflows/deploy-production.yml` to customize what gets deployed.

### Add Deployment Notifications

Add Slack/Discord/Email notifications:

```yaml
- name: Notify on success
  if: success()
  run: |
    # Add your notification command here
```

### Add Pre-deployment Tests

Add testing before deployment:

```yaml
- name: Run tests
  run: |
    # Add your test commands here
```

## Security Best Practices

1. **Never commit**:
   - SSH private keys
   - Passwords
   - API keys
   - `.env` files

2. **Use GitHub Secrets** for all sensitive data

3. **Rotate SSH keys** periodically

4. **Review deployment logs** regularly

5. **Use branch protection** rules on `main` branch

## Troubleshooting

### "Permission denied (publickey)"

- Check SSH_PRIVATE_KEY secret is correct
- Verify public key is in production server's `~/.ssh/authorized_keys`
- Test SSH key locally first

### "Connection refused"

- Check SSH_HOST and SSH_PORT secrets
- Verify production server allows SSH connections
- Check firewall settings

### "rsync: command not found"

- rsync should be available on most Linux servers
- If not, install it on production server

### Files not updating

- Check file paths in workflow
- Verify rsync exclude patterns
- Check file permissions on production

## Rollback

If deployment breaks something:

1. **Revert the commit**:
```powershell
git revert HEAD
git push
```

2. **Or deploy a previous version**:
```powershell
git checkout <previous-commit-hash>
git push -f
```

3. **Or use manual scripts**:
```powershell
.\scripts\rollback.ps1
```

## Next Steps

After setup:

1. ✅ Test deployment with a small change
2. ✅ Verify files updated on production
3. ✅ Set up branch protection rules
4. ✅ Configure deployment notifications
5. ✅ Document your team's workflow

## Support

- GitHub Actions docs: https://docs.github.com/en/actions
- SSH troubleshooting: See TROUBLESHOOTING.md
- Deployment scripts: See scripts/README.md
