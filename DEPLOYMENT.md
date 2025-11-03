# Deployment Guide

## Pre-Deployment Checklist

### Code Quality
- [ ] All tests passing (unit and integration)
- [ ] Linting passes without errors
- [ ] No console errors or warnings
- [ ] Code reviewed and approved
- [ ] No hardcoded secrets or credentials

### Security
- [ ] Admin credentials changed from defaults
- [ ] CORS properly configured
- [ ] API endpoints secured
- [ ] Environment variables properly set
- [ ] GitHub Actions secrets configured

### Performance
- [ ] Bundle size acceptable
- [ ] Images optimized
- [ ] No memory leaks
- [ ] Load times meet targets

### Documentation
- [ ] README updated
- [ ] API documentation complete
- [ ] Deployment process documented
- [ ] Known issues documented

## Deployment Steps

### 1. Prepare WordPress Branch

\`\`\`bash
# Ensure on wordpress branch
git checkout wordpress

# Pull latest changes
git pull origin wordpress

# Verify branch is up to date
git log --oneline -5
\`\`\`

### 2. Run Final Tests

\`\`\`bash
# Install dependencies
npm install

# Run unit tests
npm run test

# Build locally
npm run build

# Check for errors
npm run lint
\`\`\`

### 3. Merge to Main

\`\`\`bash
# Switch to main branch
git checkout main

# Merge wordpress branch
git merge wordpress

# Push to GitHub
git push origin main
\`\`\`

### 4. Verify Deployment

- [ ] GitHub Actions workflow triggered
- [ ] All checks passing
- [ ] Site deployed to GitHub Pages
- [ ] Homepage loads correctly
- [ ] Admin login works
- [ ] No console errors

### 5. Post-Deployment Verification

\`\`\`bash
# Test in different browsers:
# - Chrome
# - Firefox
# - Safari
# - Edge

# Test on different devices:
# - Desktop (1920px)
# - Tablet (768px)
# - Mobile (320px)

# Test functionality:
# - Homepage loads
# - Subscribe button works
# - Admin login works
# - Posts can be created
# - Settings accessible
\`\`\`

## Environment Variables

### Required Variables

Set these in GitHub repository secrets:

\`\`\`
NEXT_PUBLIC_SUPABASE_URL=https://jqfodlzcsgfocyuawzyx.supabase.co
NEXT_PUBLIC_SUPABASE_ANON_KEY=[YOUR_ANON_KEY]
SUPABASE_SERVICE_KEY=[YOUR_SERVICE_KEY]
\`\`\`

### Optional Variables

For future integrations:
\`\`\`
MAILERLITE_API_KEY=[KEY]
GITHUB_TOKEN=[TOKEN]
\`\`\`

## Rollback Procedure

If issues occur after deployment:

\`\`\`bash
# Option 1: Revert to previous commit
git revert [commit-hash]
git push origin main

# Option 2: Reset to previous state
git reset --hard [previous-commit]
git push origin main --force

# Option 3: Manual revert on GitHub Pages
# Rebuild from previous wordpress branch state
git checkout wordpress
git reset --hard [previous-commit]
git push origin wordpress --force
git merge wordpress into main
\`\`\`

## Post-Launch Tasks

### Week 1
- [ ] Monitor error logs
- [ ] Check performance metrics
- [ ] Gather user feedback
- [ ] Fix critical bugs

### Week 2-4
- [ ] Optimize based on usage data
- [ ] Add missing integrations
- [ ] Enhance documentation
- [ ] Plan next features

## Support & Monitoring

### Error Tracking
- Check browser console for errors
- Review GitHub Actions logs
- Monitor site uptime

### Performance Monitoring
- Check page load times
- Monitor bundle size
- Track user interactions

## Contacts & Resources

- **GitHub Repo:** mgrnz-blog
- **Supabase Project:** jqfodlzcsgfocyuawzyx
- **GitHub Pages:** [deployed-url]
- **Main Branch:** Production
- **WordPress Branch:** Staging/Development

\`\`\`
