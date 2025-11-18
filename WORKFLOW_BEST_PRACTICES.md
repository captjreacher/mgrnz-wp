# Workflow Best Practices

Essential best practices for local development and production deployment.

---

## Table of Contents

1. [Development Workflow](#development-workflow)
2. [Git Workflow](#git-workflow)
3. [Testing Practices](#testing-practices)
4. [Deployment Practices](#deployment-practices)
5. [Security Practices](#security-practices)
6. [Performance Practices](#performance-practices)
7. [Maintenance Practices](#maintenance-practices)

---

## Development Workflow

### Daily Routine

**Morning Startup:**
```powershell
# 1. Start local services
supabase start
supabase functions serve

# 2. Pull latest changes
git checkout main
git pull origin main

# 3. Create/switch to feature branch
git checkout -b feature/my-feature
# or
git checkout feature/existing-feature

# 4. Start local WordPress
# (Local by Flywheel, XAMPP, or Docker)

# 5. Access local site
# http://mgrnz.local
```

**During Development:**
- Make small, focused changes
- Test frequently in browser
- Check debug.log for errors
- Commit often with clear messages
- Push to remote regularly

**End of Day:**
```powershell
# 1. Commit work in progress
git add .
git commit -m "wip: description of current state"
git push origin feature/my-feature

# 2. Stop services
supabase stop

# 3. Stop local WordPress
```

### Feature Development

**1. Plan Before Coding:**
- Define clear objectives
- Identify affected files
- Consider database changes
- Plan testing approach


**2. Implement Incrementally:**
```powershell
# Small commits for each logical change
git add specific-file.php
git commit -m "feat: add user profile field"

git add another-file.php
git commit -m "feat: add profile field validation"

git add template.php
git commit -m "feat: display profile field in template"
```

**3. Test Thoroughly:**
- Test in multiple browsers
- Test on different screen sizes
- Test with different user roles
- Test edge cases and error conditions
- Test integrations (Supabase, MailerLite)

**4. Document Changes:**
- Update README if needed
- Add code comments
- Document new features
- Update configuration examples

### Code Quality

**PHP Standards:**
```php
// Use WordPress coding standards
// Proper indentation (tabs, not spaces)
// Clear variable names
// Comprehensive comments

// Good example
function mgrnz_get_user_profile( $user_id ) {
    // Validate user ID
    if ( ! is_numeric( $user_id ) || $user_id < 1 ) {
        return new WP_Error( 'invalid_user_id', 'User ID must be a positive integer' );
    }
    
    // Get user data
    $user = get_userdata( $user_id );
    if ( ! $user ) {
        return new WP_Error( 'user_not_found', 'User not found' );
    }
    
    return $user;
}
```

**JavaScript Standards:**
```javascript
// Use modern ES6+ syntax
// Clear function names
// Handle errors properly
// Add JSDoc comments

/**
 * Fetch user profile data
 * @param {number} userId - The user ID
 * @returns {Promise<Object>} User profile data
 */
async function fetchUserProfile(userId) {
    try {
        const response = await fetch(`/api/users/${userId}`);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return await response.json();
    } catch (error) {
        console.error('Failed to fetch user profile:', error);
        throw error;
    }
}
```

---

## Git Workflow

### Branch Strategy

**Main Branches:**
- `main` - Production-ready code
- `develop` - Integration branch (optional)

**Feature Branches:**
- `feature/feature-name` - New features
- `fix/bug-name` - Bug fixes
- `refactor/component-name` - Code refactoring
- `docs/topic` - Documentation updates

### Commit Messages

**Format:**
```
type: short description

Longer description if needed.
Explains what and why, not how.

Refs: #issue-number
```

**Types:**
- `feat:` - New feature
- `fix:` - Bug fix
- `refactor:` - Code refactoring
- `docs:` - Documentation
- `style:` - Formatting, no code change
- `test:` - Adding tests
- `chore:` - Maintenance tasks

**Examples:**
```bash
# Good commits
git commit -m "feat: add user profile page with avatar upload"
git commit -m "fix: resolve database connection timeout on slow networks"
git commit -m "refactor: optimize post query to reduce database load"
git commit -m "docs: update deployment guide with rollback procedures"

# Bad commits
git commit -m "updates"
git commit -m "fix stuff"
git commit -m "wip"
git commit -m "asdf"
```

### Pull Request Process

**1. Create PR:**
- Clear title describing the change
- Detailed description of what and why
- Link to related issues
- Screenshots if UI changes
- Testing instructions

**2. Code Review:**
- Address reviewer feedback
- Make requested changes
- Push updates to same branch
- Re-request review

**3. Merge:**
- Squash commits if many small ones
- Use merge commit for feature branches
- Delete branch after merge

---

## Testing Practices

### Local Testing Checklist

**Before Every Commit:**
- [ ] Code runs without errors
- [ ] No PHP warnings or notices
- [ ] JavaScript console is clean
- [ ] Functionality works as expected
- [ ] No broken links or images

**Before Creating PR:**
- [ ] Test in Chrome, Firefox, Safari
- [ ] Test on desktop and mobile
- [ ] Test with different user roles
- [ ] Test edge cases
- [ ] Test error handling
- [ ] Check debug.log for issues

**Before Deployment:**
- [ ] All tests pass locally
- [ ] Code reviewed and approved
- [ ] Documentation updated
- [ ] Backup plan ready
- [ ] Rollback tested

### Testing Edge Functions

```powershell
# Test all functions
.\supabase\test-edge-functions.ps1 -Function all -Environment local

# Test specific function
.\supabase\test-edge-functions.ps1 -Function wp-sync -Environment local -ShowLogs

# Test with custom payload
curl -X POST http://localhost:54321/functions/v1/wp-sync `
  -H "Content-Type: application/json" `
  -H "X-Webhook-Secret: local-test-secret" `
  -d @custom-payload.json
```

### Database Testing

```powershell
# Test database operations
cd wp

# Check database integrity
wp db check

# Test search-replace
wp search-replace 'old-url' 'new-url' --dry-run

# Verify data
wp db query "SELECT COUNT(*) FROM wp_posts WHERE post_status='publish';"
```

---

## Deployment Practices

### Pre-Deployment Checklist

**Code Quality:**
- [ ] All changes committed to git
- [ ] No uncommitted files
- [ ] Code reviewed and approved
- [ ] Tests passing locally
- [ ] No debug code left in

**Environment:**
- [ ] Production credentials configured
- [ ] SFTP connection tested
- [ ] Backup space available
- [ ] Production site accessible

**Planning:**
- [ ] Deployment window scheduled
- [ ] Team notified
- [ ] Rollback plan ready
- [ ] Monitoring plan in place

### Deployment Process

**1. Pre-Deployment:**
```powershell
# Verify git status
git status

# Test connection
.\scripts\test-connection.ps1 -Environment production

# Dry run
.\scripts\deploy.ps1 -Environment production -DryRun
```

**2. Deployment:**
```powershell
# Deploy to production
.\scripts\deploy.ps1 -Environment production

# Script will:
# - Run pre-flight checks
# - Create backup
# - Show changes
# - Ask for confirmation
# - Upload files
# - Verify deployment
```

**3. Post-Deployment:**
```powershell
# Verify production site
curl https://mgrnz.com -UseBasicParsing

# Test critical functionality
# - Homepage loads
# - Admin accessible
# - Posts display correctly
# - Forms work
# - Webhooks trigger

# Monitor logs
ssh user@mgrnz.com "tail -f /path/to/wordpress/wp-content/debug.log"
```

### Deployment Frequency

**Recommended Schedule:**
- **Small changes:** Deploy as needed (daily/weekly)
- **Medium features:** Deploy weekly
- **Major features:** Deploy bi-weekly with staging
- **Critical fixes:** Deploy immediately

**Best Times to Deploy:**
- Early morning (low traffic)
- Late evening (low traffic)
- Avoid: Weekends, holidays, peak hours

### Rollback Procedures

**When to Rollback:**
- Site returns 500 errors
- Critical functionality broken
- Database corruption
- Security vulnerability introduced

**How to Rollback:**
```powershell
# Immediate rollback
.\scripts\rollback.ps1 -BackupTimestamp "latest" -Force

# Verify restoration
curl https://mgrnz.com -UseBasicParsing

# Test functionality
# Visit site and verify it works
```

---

## Security Practices

### Credential Management

**Never Commit:**
- `.env.local` - Local environment variables
- `.env.production` - Production credentials
- `.deploy-credentials.json` - SFTP credentials
- `supabase/.env.local` - Supabase secrets
- Any file with passwords or API keys

**Verify .gitignore:**
```bash
# Check these are in .gitignore
.env.local
.env.production
.deploy-credentials.json
supabase/.env.local
backups/
logs/
```

**Use Strong Secrets:**
```env
# Bad
WEBHOOK_SECRET=secret123
DB_PASSWORD=password

# Good
WEBHOOK_SECRET=aD7x@pK1tV9z#qM4nY6b!rE2cW8j^sH5
DB_PASSWORD=Xy9$mK2#pL8@nQ4!vR7
```

### SSH Key Authentication

**Generate SSH Key:**
```powershell
# Generate new key
ssh-keygen -t rsa -b 4096 -C "your-email@example.com"

# Add to SSH agent
ssh-add C:\Users\YourName\.ssh\id_rsa

# Copy public key to server
type C:\Users\YourName\.ssh\id_rsa.pub | ssh user@mgrnz.com "cat >> ~/.ssh/authorized_keys"
```

**Configure Deployment:**
```json
{
  "production": {
    "useKeyAuth": true,
    "privateKeyPath": "C:/Users/YourName/.ssh/id_rsa",
    "password": ""
  }
}
```

### File Permissions

**Local Development:**
```powershell
# Windows: Restrict credential files
# Right-click → Properties → Security
# Remove all users except yourself

# Verify
Get-Acl .deploy-credentials.json | Format-List
```

**Production:**
```bash
# Restrict sensitive files
chmod 600 .env.production
chmod 600 wp-config.php
chmod 755 wp-content
chmod 644 wp-content/themes/**/*.php
```

### Regular Security Tasks

**Weekly:**
- Review user access
- Check for suspicious activity
- Update plugins and themes
- Review error logs

**Monthly:**
- Rotate API keys
- Update passwords
- Review file permissions
- Audit database access

**Quarterly:**
- Security audit
- Penetration testing
- Backup restoration test
- Disaster recovery drill

---

## Performance Practices

### Database Optimization

**Regular Maintenance:**
```powershell
cd wp

# Optimize database
wp db optimize

# Clean up
wp transient delete --all
wp post delete $(wp post list --post_type=revision --format=ids) --force

# Check size
wp db size --tables
```

**Query Optimization:**
```php
// Use efficient queries
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'no_found_rows' => true,  // Skip pagination
    'update_post_meta_cache' => false,  // Skip if not needed
    'update_post_term_cache' => false,  // Skip if not needed
);
```

### Caching Strategy

**Object Caching:**
```php
// Cache expensive operations
$cache_key = 'expensive_operation_' . $id;
$result = wp_cache_get( $cache_key );

if ( false === $result ) {
    $result = expensive_operation( $id );
    wp_cache_set( $cache_key, $result, '', 3600 );
}

return $result;
```

**Transient API:**
```php
// Cache API responses
$cache_key = 'api_response_' . $endpoint;
$response = get_transient( $cache_key );

if ( false === $response ) {
    $response = wp_remote_get( $endpoint );
    set_transient( $cache_key, $response, HOUR_IN_SECONDS );
}
```

### File Size Management

**Optimize Images:**
- Use appropriate formats (WebP, JPEG, PNG)
- Compress before upload
- Use responsive images
- Lazy load images

**Minimize Assets:**
```bash
# Minify CSS and JavaScript
npm run build

# Remove source maps in production
# Remove console.log statements
```

**Exclude Large Files:**
```json
{
  "exclusions": {
    "uploads": [
      "*.mp4",
      "*.zip",
      "*.pdf"
    ]
  }
}
```

---

## Maintenance Practices

### Daily Tasks

```powershell
# Check for errors
tail -f wp-content/debug.log

# Monitor site status
curl https://mgrnz.com -UseBasicParsing

# Check disk space
Get-PSDrive C | Select-Object Used, Free
```

### Weekly Tasks

```powershell
# Pull production data
.\scripts\pull-from-production.ps1

# Update dependencies
composer update
npm update

# Clean up old backups
Get-ChildItem backups\*.sql | 
    Where-Object { $_.LastWriteTime -lt (Get-Date).AddDays(-7) } | 
    Remove-Item

# Review logs
Get-Content logs\deploy-*.log | Select-String "ERROR"
```

### Monthly Tasks

```powershell
# Database optimization
cd wp
wp db optimize
wp transient delete --all

# Plugin updates
wp plugin update --all

# Theme updates
wp theme update --all

# Security audit
wp plugin verify-checksums --all
wp core verify-checksums

# Backup verification
.\scripts\rollback.ps1 -ListBackups
```

### Quarterly Tasks

- Review and update documentation
- Audit user access and permissions
- Test disaster recovery procedures
- Review and optimize workflows
- Update dependencies and tools
- Security penetration testing

### Backup Management

**Retention Policy:**
```json
{
  "backup": {
    "retentionDays": 7,
    "maxBackups": 10
  }
}
```

**Cleanup Script:**
```powershell
# Remove backups older than 7 days
Get-ChildItem backups\*.sql | 
    Where-Object { $_.LastWriteTime -lt (Get-Date).AddDays(-7) } | 
    Remove-Item -Verbose

# Remove logs older than 30 days
Get-ChildItem logs\*.log | 
    Where-Object { $_.LastWriteTime -lt (Get-Date).AddDays(-30) } | 
    Remove-Item -Verbose
```

**Test Restoration:**
```powershell
# Monthly: Test backup restoration
.\scripts\rollback.ps1 -BackupTimestamp "latest" -DryRun

# Verify backup integrity
Get-ChildItem backups\*.sql | ForEach-Object {
    Write-Host "Testing: $($_.Name)"
    $content = Get-Content $_.FullName -TotalCount 10
    if ($content -match "MySQL dump") {
        Write-Host "  ✓ Valid SQL file" -ForegroundColor Green
    } else {
        Write-Host "  ✗ Invalid SQL file" -ForegroundColor Red
    }
}
```

---

## Documentation Practices

### Code Documentation

**PHP DocBlocks:**
```php
/**
 * Get user profile data
 *
 * Retrieves comprehensive profile information for a given user,
 * including metadata and custom fields.
 *
 * @since 1.0.0
 *
 * @param int $user_id User ID to retrieve profile for.
 * @return array|WP_Error User profile data or error object.
 */
function mgrnz_get_user_profile( $user_id ) {
    // Implementation
}
```

**Inline Comments:**
```php
// Validate user ID before database query
if ( ! is_numeric( $user_id ) || $user_id < 1 ) {
    return new WP_Error( 'invalid_user_id' );
}

// Cache the result to avoid repeated database queries
$cache_key = 'user_profile_' . $user_id;
$profile = wp_cache_get( $cache_key );
```

### README Updates

**When to Update:**
- New features added
- Configuration changes
- New dependencies
- Workflow changes
- Breaking changes

**What to Include:**
- Clear description of changes
- Updated installation steps
- New configuration options
- Migration instructions
- Examples and usage

### Change Log

**Maintain CHANGELOG.md:**
```markdown
# Changelog

## [1.2.0] - 2025-11-18

### Added
- User profile page with avatar upload
- Email notification system
- Backup rotation policy

### Changed
- Improved deployment script performance
- Updated database optimization routine

### Fixed
- Database connection timeout on slow networks
- File permission issues on Windows

### Security
- Updated authentication mechanism
- Rotated API keys
```

---

## Team Collaboration

### Communication

**Before Major Changes:**
- Notify team of planned deployment
- Schedule deployment window
- Coordinate with stakeholders
- Document expected downtime

**During Development:**
- Update issue tracker
- Comment on pull requests
- Share progress in team chat
- Ask for help when stuck

**After Deployment:**
- Announce completion
- Share deployment notes
- Report any issues
- Gather feedback

### Code Review

**As Reviewer:**
- Review within 24 hours
- Be constructive and specific
- Test the changes locally
- Approve or request changes
- Follow up on discussions

**As Author:**
- Respond to feedback promptly
- Make requested changes
- Explain design decisions
- Re-request review after updates
- Thank reviewers

### Knowledge Sharing

**Document Learnings:**
- Write post-mortems for incidents
- Share solutions to problems
- Update troubleshooting guide
- Create how-to guides
- Record video tutorials

**Regular Reviews:**
- Weekly team sync
- Monthly retrospectives
- Quarterly planning
- Annual strategy review

---

## Continuous Improvement

### Metrics to Track

**Development:**
- Time from commit to deployment
- Number of rollbacks
- Bug fix time
- Code review time

**Performance:**
- Page load times
- Database query times
- Backup creation time
- Deployment duration

**Quality:**
- Number of bugs found
- Test coverage
- Code review feedback
- User-reported issues

### Regular Reviews

**Weekly:**
- Review deployment logs
- Check error rates
- Monitor performance
- Identify bottlenecks

**Monthly:**
- Review metrics
- Identify improvements
- Update processes
- Plan optimizations

**Quarterly:**
- Major process review
- Tool evaluation
- Training needs assessment
- Strategic planning

---

## Quick Reference

### Daily Commands

```powershell
# Start development
supabase start && supabase functions serve
git pull origin main
git checkout -b feature/my-feature

# During development
git add . && git commit -m "feat: description"
git push origin feature/my-feature

# End of day
supabase stop
```

### Weekly Commands

```powershell
# Sync with production
.\scripts\pull-from-production.ps1

# Update dependencies
composer update
npm update

# Clean up
Get-ChildItem backups\*.sql | 
    Where-Object { $_.LastWriteTime -lt (Get-Date).AddDays(-7) } | 
    Remove-Item
```

### Deployment Commands

```powershell
# Pre-deployment
git status
.\scripts\test-connection.ps1 -Environment production
.\scripts\deploy.ps1 -Environment production -DryRun

# Deployment
.\scripts\deploy.ps1 -Environment production

# Post-deployment
curl https://mgrnz.com -UseBasicParsing

# Rollback if needed
.\scripts\rollback.ps1 -BackupTimestamp "latest"
```

---

**Last Updated:** November 2025  
**Version:** 1.0.0

For more information, see:
- [Local Development Guide](LOCAL_DEV_DEPLOYMENT_GUIDE.md)
- [Troubleshooting Guide](TROUBLESHOOTING.md)
- [Environment Setup](ENVIRONMENT_SETUP.md)
