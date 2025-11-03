# Integration Testing Guide

This document outlines the end-to-end integration tests for the mgrnz WordPress site.

## Test Environment Setup

1. Clone the `wordpress` branch
2. Install dependencies: `npm install`
3. Start dev server: `npm run dev`
4. Open browser to `http://localhost:3000`

## Test Scenarios

### Scenario 1: Homepage & Subscription Flow

**Objective:** Verify homepage loads and subscription modal works

**Steps:**
1. Navigate to homepage (/)
2. Verify header with logo and navigation menu loads
3. Verify sidebar with image displays
4. Click "Subscribe" button in sidebar
5. Verify modal opens
6. Enter email address in subscription form
7. Click "Subscribe" button
8. Verify success message appears
9. Verify modal closes after 2 seconds

**Expected Result:** Subscription form submits successfully

---

### Scenario 2: Settings Navigation & Admin Login

**Objective:** Test navigation from homepage to admin console

**Steps:**
1. On homepage, scroll to footer
2. Click "Settings" button (bottom right of footer)
3. Redirected to `/admin` page
4. Login form displays
5. Enter credentials:
   - Email: `mike@mgrnz.com`
   - Password: `admin`
6. Click "Sign In" button
7. Verify loading spinner appears briefly
8. Redirected to admin dashboard

**Expected Result:** Successful authentication and admin dashboard access

---

### Scenario 3: Admin Dashboard - Posts Tab

**Objective:** Test post creation, viewing, and management

**Steps:**
1. From admin dashboard, verify on "Posts" tab
2. Click "Create Blog Post" button
3. Fill form:
   - Title: "Test Blog Post"
   - Content: "This is test content"
   - Status: "Draft"
4. Click "Create Post"
5. Verify post appears in posts table
6. Click "Edit" icon on post
7. Change status to "Published"
8. Click "Update Post"
9. Verify status changed in table
10. Click "Delete" (trash icon)
11. Confirm post removed from list

**Expected Result:** Full CRUD operations work for blog posts

---

### Scenario 4: Social Media Posts

**Objective:** Test creation of social media posts with character limit

**Steps:**
1. On admin dashboard, click "Create Social Post"
2. Fill form:
   - Content: "Check out our latest updates! #mgrnz"
   - Status: "Draft"
3. Verify character counter shows "38/280"
4. Click "Create Post"
5. Verify post appears in table with type "social"
6. Verify post can be edited and deleted like blog posts

**Expected Result:** Social posts work with character limit validation

---

### Scenario 5: Post Scheduling

**Objective:** Test scheduling posts for future publication

**Steps:**
1. Click "Scheduling" tab in admin dashboard
2. Fill schedule form:
   - Post Type: "Blog Post"
   - Title: "Future Post"
   - Schedule Date: Pick tomorrow's date at 9:00 AM
   - Content: "This is scheduled content"
3. Click "Schedule Post"
4. Verify post appears in "Scheduled Posts" table
5. Status shows "pending"
6. Verify post can be cancelled

**Expected Result:** Posts can be scheduled for future publication

---

### Scenario 6: User Management

**Objective:** Test adding and managing team members

**Steps:**
1. Click "Users" tab
2. Verify admin user (mike@mgrnz.com) displays
3. Click "Add User" button
4. Fill form:
   - Email: "editor@mgrnz.com"
   - Role: "Editor"
5. Click "Add User"
6. Verify new user appears in list
7. Try to delete primary admin user
8. Verify delete button is disabled for admin
9. Delete the editor user
10. Verify user removed from list

**Expected Result:** User management works with proper role protection

---

### Scenario 7: Social Media Integrations

**Objective:** Test integrations tab

**Steps:**
1. Click "Integrations" tab
2. Verify integration table shows:
   - MailerLite: Connected
   - GitHub: Connected
   - Twitter: Disconnected
   - LinkedIn: Disconnected
3. Click "Disconnect" on MailerLite
4. Verify status changes to "Disconnected"
5. Click "Connect" to reconnect
6. Verify status returns to "Connected"

**Expected Result:** Integration status displays and toggles correctly

---

### Scenario 8: Diagnostics & Monitoring

**Objective:** Test system health checks

**Steps:**
1. Click "Diagnostics" tab
2. Verify all health indicators display:
   - Database Connection: Healthy
   - GitHub Integration: Healthy
   - MailerLite API: Healthy
   - Backup Status: Healthy
3. Verify each shows green checkmark

**Expected Result:** All systems report healthy status

---

### Scenario 9: Admin Logout

**Objective:** Test logout functionality

**Steps:**
1. Click "Logout" button (top right)
2. Redirected to login form
3. Verify localStorage is cleared
4. Try to access `/admin` directly
5. Redirected to login form
6. Verify cannot access admin without re-authenticating

**Expected Result:** Logout properly clears session and protects admin area

---

### Scenario 10: GitHub Integration & Deployment

**Objective:** Test GitHub Actions workflow

**Steps:**
1. Create a branch: `git checkout -b test-feature`
2. Make a small change (e.g., update homepage text)
3. Commit and push: `git push origin test-feature`
4. Create pull request to `wordpress` branch
5. GitHub Actions workflow triggers
6. Verify all checks pass:
   - Build succeeds
   - Tests pass
   - Linting passes
7. Merge PR to `wordpress`
8. Verify deployment workflow starts
9. Check site at GitHub Pages URL

**Expected Result:** Automated build, test, and deployment works

---

## Test Checklist

### Frontend (Homepage)
- [ ] Header displays with logo and menu
- [ ] Sidebar displays with image
- [ ] Featured content section loads
- [ ] Subscribe button opens modal
- [ ] Subscription form accepts email
- [ ] Footer displays with Settings button

### Authentication
- [ ] Valid credentials accepted
- [ ] Invalid credentials rejected
- [ ] Auth data stored in localStorage
- [ ] Session persists on page refresh
- [ ] Logout clears session
- [ ] Unauthenticated users redirected to login

### Admin Dashboard
- [ ] Admin only accessible to authenticated users
- [ ] All tabs (Posts, Scheduling, Integrations, Users, Diagnostics) load
- [ ] Logout button works

### Post Management
- [ ] Blog posts can be created with title and content
- [ ] Social posts have character limit
- [ ] Posts display in table
- [ ] Posts can be edited (title, status, scheduled date)
- [ ] Posts can be deleted
- [ ] Post status updates reflect in table
- [ ] Posts can be scheduled for future date
- [ ] Scheduled posts show in scheduling tab

### User Management
- [ ] Users display in list
- [ ] New users can be added
- [ ] User roles can be selected
- [ ] Duplicate emails prevented
- [ ] Users can be removed
- [ ] Admin user cannot be deleted

### Integrations
- [ ] Integration status displays
- [ ] Integrations can be connected/disconnected
- [ ] Status updates on toggle

### Diagnostics
- [ ] All health checks display
- [ ] Status indicators show correct state
- [ ] No errors in console

### GitHub & Deployment
- [ ] GitHub Actions workflow triggers on push
- [ ] Tests run automatically
- [ ] Build succeeds
- [ ] Site deploys to GitHub Pages
- [ ] Deployed site is accessible

---

## Performance Benchmarks

- Homepage load time: < 2 seconds
- Admin dashboard load time: < 1.5 seconds
- Login response time: < 500ms
- Post operations (CRUD): < 300ms each

---

## Browser Compatibility

Test in:
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

---

## Known Limitations

1. MailerLite integration is placeholder (script to be provided)
2. Supabase auth uses demo credentials for testing
3. Scheduled posts use localStorage (not persisted to server in test mode)

---

## Next Steps for Production

1. Integrate actual Supabase authentication
2. Implement MailerLite subscription script
3. Connect GitHub Actions to production deployment
4. Set up monitoring and alerting
5. Configure CORS for cross-origin requests
\`\`\`
