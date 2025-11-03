# End-to-End Test Checklist

Complete this checklist before merging to main branch.

## Pre-Merge Testing

### Homepage Tests
- [ ] Homepage loads without errors
- [ ] Header responsive on mobile/tablet/desktop
- [ ] Logo and menu display correctly
- [ ] Sidebar image loads
- [ ] Subscribe button works
- [ ] Settings button links to admin
- [ ] Footer displays properly

### Authentication Tests
- [ ] Can log in with correct credentials (mike@mgrnz.com / admin)
- [ ] Cannot log in with incorrect credentials
- [ ] Error message displays on failed login
- [ ] Auth persists on page refresh
- [ ] Can logout successfully
- [ ] Redirected to login when accessing admin without auth
- [ ] Session expires appropriately

### Admin Console Tests
- [ ] Admin dashboard loads after login
- [ ] All 5 tabs accessible (Posts, Scheduling, Integrations, Users, Diagnostics)
- [ ] Posts tab shows existing posts
- [ ] Can create blog post
- [ ] Can create social media post
- [ ] Can edit post
- [ ] Can delete post
- [ ] Can schedule posts
- [ ] Users tab shows all users
- [ ] Can add new user
- [ ] Can delete non-admin users
- [ ] Cannot delete admin user
- [ ] Integrations tab shows all services
- [ ] Can connect/disconnect integrations
- [ ] Diagnostics tab shows system health

### Browser Compatibility
- [ ] Works in Chrome
- [ ] Works in Firefox
- [ ] Works in Safari
- [ ] Works in Edge
- [ ] Responsive on mobile (320px width)
- [ ] Responsive on tablet (768px width)
- [ ] Responsive on desktop (1920px width)

### Performance Tests
- [ ] Homepage loads in < 2 seconds
- [ ] Admin dashboard loads in < 1.5 seconds
- [ ] No console errors
- [ ] No console warnings
- [ ] No memory leaks

### Security Tests
- [ ] Sensitive data not in localStorage (except auth token)
- [ ] Passwords not logged
- [ ] API endpoints protected
- [ ] CSRF protection in place
- [ ] XSS protection enabled

### Accessibility Tests
- [ ] Can navigate with keyboard only
- [ ] Screen reader friendly
- [ ] Color contrast meets WCAG AA standards
- [ ] Form labels associated with inputs
- [ ] Error messages accessible

### GitHub Integration Tests
- [ ] GitHub Actions workflow triggers on push
- [ ] Build succeeds
- [ ] Tests pass
- [ ] Linting passes
- [ ] Site deploys to GitHub Pages
- [ ] Deployed site is accessible
- [ ] Site updates after commits

### Data Tests
- [ ] Posts persist after page refresh
- [ ] Users persist after page refresh
- [ ] Auth persists after page refresh
- [ ] No data loss on logout/login cycle

## Sign-Off

- [ ] All tests passed
- [ ] No critical issues remaining
- [ ] Performance acceptable
- [ ] Ready for production merge

**Tester Name:** ________________
**Test Date:** ________________
**Notes:** ________________________________________________

\`\`\`
