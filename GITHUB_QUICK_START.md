# GitHub Deployment - Quick Start

Get GitHub Actions deployment working in 10 minutes!

## Step 1: Generate SSH Key (2 minutes)

```powershell
# Generate key
ssh-keygen -t ed25519 -C "github-actions@mgrnz.com" -f github-actions-key

# Press Enter for no passphrase (3 times)
```

## Step 2: Add Key to Production (2 minutes)

```powershell
# Copy public key
Get-Content github-actions-key.pub | clip

# Connect to production
ssh -p 21098 hdmqglfetq@66.29.148.18

# On production, run these commands one by one:
mkdir -p ~/.ssh
echo "PASTE_YOUR_KEY_HERE" >> ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
exit
```

**Note:** Replace `PASTE_YOUR_KEY_HERE` with the actual key you copied (Ctrl+Shift+V to paste in SSH terminal)

## Step 3: Add Secrets to GitHub (3 minutes)

1. Go to: `https://github.com/YOUR_USERNAME/YOUR_REPO/settings/secrets/actions`
2. Click "New repository secret"
3. Add these 5 secrets:

**SSH_PRIVATE_KEY**
```powershell
Get-Content github-actions-key
# Copy entire output including BEGIN/END lines
```

**SSH_HOST**
```
66.29.148.18
```

**SSH_PORT**
```
21098
```

**SSH_USER**
```
hdmqglfetq
```

**PRODUCTION_PATH**
```
/home/hdmqglfetq/mgrnz.com/wp
```

## Step 4: Push to GitHub (3 minutes)

```powershell
# Initialize git (if not done)
git init
git remote add origin https://github.com/YOUR_USERNAME/mgrnz-wp.git

# Add files
git add .

# Commit
git commit -m "Setup GitHub Actions deployment"

# Push (this triggers deployment!)
git push -u origin main
```

## Step 5: Watch Deployment

1. Go to: `https://github.com/YOUR_USERNAME/YOUR_REPO/actions`
2. Click on the running workflow
3. Watch it deploy!

## Done! 🎉

Now every time you push to `main`, it automatically deploys to production!

## Your New Workflow

```powershell
# 1. Make changes locally
# Edit files...

# 2. Commit
git add .
git commit -m "Updated theme"

# 3. Push (auto-deploys!)
git push

# 4. Check GitHub Actions tab to see deployment
```

## Troubleshooting

**Deployment failed?**
- Check GitHub Actions logs
- Verify all 5 secrets are correct
- Test SSH key manually

**Need help?**
- See full guide: GITHUB_DEPLOYMENT_SETUP.md
- Check: TROUBLESHOOTING.md
