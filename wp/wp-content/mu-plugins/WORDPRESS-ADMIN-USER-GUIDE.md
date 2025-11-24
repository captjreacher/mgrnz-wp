# WordPress Admin User Guide
## AI Workflow Wizard System

This guide explains how to use the WordPress admin features for managing the AI Workflow Wizard system.

---

## Table of Contents

1. [Accessing Admin Features](#accessing-admin-features)
2. [Managing Submissions](#managing-submissions)
3. [Configuring AI Settings](#configuring-ai-settings)
4. [Viewing Error Logs](#viewing-error-logs)
5. [Using the Dashboard](#using-the-dashboard)
6. [Common Admin Tasks](#common-admin-tasks)

---

## Accessing Admin Features

After logging into WordPress admin, you'll find AI Workflow features in the left sidebar:

### Main Menu Items

- **AI Workflow Submissions** - View and manage all wizard submissions
- **AI Workflow** (submenu)
  - Dashboard - Analytics and statistics
  - Error Logs - System errors and API issues
- **Settings > AI Workflow Settings** - Configure AI provider and API keys

---

## Managing Submissions

### Viewing All Submissions

1. Click **AI Workflow Submissions** in the admin menu
2. You'll see a list of all submissions with:
   - **Submission Date** - When the form was submitted
   - **Email** - User's email address (if provided)
   - **Goal** - Preview of the user's goal (truncated)
   - **Email Sent** - Whether blueprint was emailed successfully

### Searching Submissions

Use the search box at the top right to find submissions by:
- Email address
- Goal keywords
- Pain points
- Tools mentioned

**Example searches:**
- `automation` - Find all submissions mentioning automation
- `user@example.com` - Find submissions from specific email
- `customer support` - Find customer support related workflows

### Filtering Submissions

Use the date filter dropdown to view submissions from:
- All dates
- Today
- This week
- This month
- Custom date range

### Viewing Individual Submissions

Click on any submission title to view full details:

**Submission Information:**
- **Goal** - User's stated goal
- **Workflow Description** - Current workflow details
- **Tools** - Tools currently being used
- **Pain Points** - Challenges and frustrations
- **Email** - Contact email (if provided)

**Generated Blueprint:**
- **Summary** - Brief overview of the blueprint
- **Full Content** - Complete AI-generated blueprint in markdown format
- **Generated At** - Timestamp of blueprint creation
- **AI Model** - Which AI model generated the blueprint
- **Tokens Used** - API usage for cost tracking

**Metadata:**
- **Submission Date** - When form was submitted
- **IP Address** - User's IP (for security/rate limiting)
- **User Agent** - Browser information
- **Email Sent** - Email delivery status

### Editing Submissions

You can edit submission data if needed:

1. Click **Edit** on any submission
2. Modify fields in the editor
3. Update custom fields in the meta boxes
4. Click **Update** to save changes

**Note:** Editing a submission does NOT regenerate the blueprint or resend emails.

### Deleting Submissions

To delete a submission:

1. Hover over the submission in the list
2. Click **Trash**
3. Or use bulk actions to delete multiple submissions

**Warning:** Deleted submissions cannot be recovered unless you have a backup.

### Exporting Submissions

To export submission data:

1. Go to **AI Workflow > Dashboard**
2. Scroll to the **Export** section
3. Select date range (optional)
4. Click **Export to CSV**
5. Save the downloaded file

**CSV includes:**
- Submission ID
- Date
- Email
- Goal
- Workflow description
- Tools
- Pain points
- Blueprint summary
- Email sent status

---

## Configuring AI Settings

### Accessing Settings

1. Go to **Settings > AI Workflow Settings**
2. You'll see the configuration page

### AI Provider Selection

**Choose your AI provider:**

**OpenAI:**
- Best for: General purpose, well-documented
- Models available:
  - `gpt-4` - Highest quality, slower, more expensive
  - `gpt-4-turbo` - Balanced quality and speed
  - `gpt-3.5-turbo` - Fastest, cheapest, good quality
- Cost: ~$0.004 to $0.06 per blueprint

**Anthropic:**
- Best for: Detailed analysis, longer responses
- Models available:
  - `claude-3-opus-20240229` - Highest quality
  - `claude-3-sonnet-20240229` - Balanced
  - `claude-3-haiku-20240307` - Fastest
- Cost: ~$0.01 to $0.08 per blueprint

### API Key Configuration

**Method 1: Admin Settings (Easier)**

1. Select your AI provider
2. Enter your API key in the field
3. Click **Save Changes**

**Method 2: wp-config.php (More Secure)**

Add to your `wp-config.php` file:

```php
// For OpenAI
define('MGRNZ_AI_PROVIDER', 'openai');
define('MGRNZ_AI_API_KEY', 'sk-your-key-here');
define('MGRNZ_AI_MODEL', 'gpt-4');

// For Anthropic
define('MGRNZ_AI_PROVIDER', 'anthropic');
define('MGRNZ_AI_API_KEY', 'sk-ant-your-key-here');
define('MGRNZ_AI_MODEL', 'claude-3-opus-20240229');
```

**Note:** Settings in `wp-config.php` override admin settings for security.

### Advanced Settings

**Max Tokens:**
- Controls maximum length of blueprint
- Default: 2000
- Range: 500 - 4000
- Higher = longer blueprints = higher cost

**Temperature:**
- Controls creativity of AI responses
- Default: 0.7
- Range: 0.0 - 1.0
- Lower (0.3) = More focused and consistent
- Higher (0.9) = More creative and varied

**Caching:**
- Enable to cache identical submissions
- Reduces API costs
- Cache duration: 7 days
- Recommended: Enabled

**Rate Limiting:**
- Prevents abuse
- Default: 3 submissions per hour per IP
- Adjust based on your needs
- Set to 999 to effectively disable

### Testing Connection

After configuring your API key:

1. Click **Test Connection** button
2. Wait for the test to complete
3. You'll see either:
   - ✅ **Success** - Connection working
   - ❌ **Error** - Connection failed with details

**Common test errors:**
- "Invalid API key" - Check your key is correct
- "Rate limit exceeded" - Wait a few minutes
- "Timeout" - Check your internet connection
- "Model not found" - Select a different model

### Saving Settings

1. Make your changes
2. Click **Save Changes** at the bottom
3. You'll see a success message
4. Test the wizard to verify changes work

---

## Viewing Error Logs

### Accessing Error Logs

1. Go to **AI Workflow > Error Logs**
2. You'll see a list of recent errors

### Understanding Error Types

**API Errors:**
- Failed AI service calls
- Authentication issues
- Rate limit exceeded
- Timeout errors

**Email Errors:**
- Failed email delivery
- SMTP configuration issues
- Invalid email addresses

**Validation Errors:**
- Invalid form data
- Missing required fields
- Rate limit violations

**System Errors:**
- PHP errors
- Database issues
- Configuration problems

### Error Log Details

Each error entry shows:
- **Timestamp** - When error occurred
- **Type** - Category of error
- **Message** - Error description
- **Context** - Additional information (email, submission ID, etc.)
- **Stack Trace** - Technical details (for developers)

### Filtering Logs

Use the filters to find specific errors:

**By Type:**
- All errors
- API errors only
- Email errors only
- Validation errors only
- System errors only

**By Date:**
- Today
- Last 7 days
- Last 30 days
- Custom range

**By Search:**
- Search error messages
- Search by email address
- Search by submission ID

### Clearing Logs

To clear old logs:

1. Select date range to clear
2. Click **Clear Logs** button
3. Confirm the action
4. Logs will be permanently deleted

**Recommendation:** Clear logs older than 30 days monthly to maintain performance.

### Exporting Logs

To export error logs:

1. Select date range
2. Click **Export Logs**
3. Save the CSV file
4. Share with developers for troubleshooting

---

## Using the Dashboard

### Accessing Dashboard

1. Go to **AI Workflow > Dashboard**
2. You'll see analytics and statistics

### Dashboard Sections

#### Submission Statistics

**Total Submissions:**
- All-time submission count
- Submissions today
- Submissions this week
- Submissions this month

**Submission Trends:**
- Graph showing submissions over time
- Daily, weekly, or monthly view
- Identify peak usage times

#### Email Statistics

**Email Delivery:**
- Total emails sent
- Successful deliveries
- Failed deliveries
- Success rate percentage

**Email Engagement:**
- Emails with provided addresses
- Emails without addresses
- Percentage of users providing emails

#### AI Usage Statistics

**API Calls:**
- Total API calls made
- Cached responses (saved calls)
- Cache hit rate
- Cost savings from caching

**Token Usage:**
- Total tokens used
- Average tokens per blueprint
- Estimated costs
- Usage trends

**Model Distribution:**
- Which models are being used
- Performance by model
- Cost by model

#### Common Insights

**Top Pain Points:**
- Most frequently mentioned challenges
- Word cloud or list view
- Helps identify common user needs

**Popular Tools:**
- Most mentioned tools
- Tool categories
- Integration opportunities

**Goal Categories:**
- Common goal types
- Industry patterns
- Use case distribution

### Using Dashboard Data

**For Marketing:**
- Identify common pain points for content creation
- Understand user needs for product development
- Track conversion from wizard to consultation

**For Sales:**
- Identify high-value leads (specific pain points)
- Follow up with users who provided emails
- Understand prospect challenges

**For Product:**
- Identify feature requests
- Understand tool integration needs
- Prioritize development based on user needs

**For Support:**
- Anticipate common questions
- Create help content for frequent issues
- Improve wizard based on user feedback

### Exporting Dashboard Data

Export data for further analysis:

1. Select the metric to export
2. Choose date range
3. Click **Export**
4. Open in Excel, Google Sheets, or analytics tools

---

## Common Admin Tasks

### Task 1: Check Recent Submissions

**Frequency:** Daily

1. Go to **AI Workflow Submissions**
2. Filter by "Today"
3. Review new submissions
4. Follow up with high-value leads

### Task 2: Monitor Error Logs

**Frequency:** Weekly

1. Go to **AI Workflow > Error Logs**
2. Filter by "Last 7 days"
3. Check for recurring errors
4. Address any API or email issues

### Task 3: Review API Usage

**Frequency:** Weekly

1. Go to **AI Workflow > Dashboard**
2. Check AI Usage Statistics
3. Monitor costs
4. Adjust settings if needed (model, caching)

### Task 4: Test AI Connection

**Frequency:** After any configuration change

1. Go to **Settings > AI Workflow Settings**
2. Click **Test Connection**
3. Verify success
4. Test wizard on frontend

### Task 5: Clear Old Logs

**Frequency:** Monthly

1. Go to **AI Workflow > Error Logs**
2. Select logs older than 30 days
3. Click **Clear Logs**
4. Confirm deletion

### Task 6: Export Submissions

**Frequency:** Monthly or as needed

1. Go to **AI Workflow > Dashboard**
2. Select date range
3. Click **Export to CSV**
4. Save for records or analysis

### Task 7: Update API Keys

**Frequency:** As needed (key rotation, provider change)

1. Go to **Settings > AI Workflow Settings**
2. Update API key
3. Click **Save Changes**
4. Click **Test Connection**
5. Test wizard on frontend

### Task 8: Adjust Rate Limits

**Frequency:** As needed (abuse, high traffic)

1. Go to **Settings > AI Workflow Settings**
2. Adjust rate limit value
3. Click **Save Changes**
4. Monitor submission patterns

---

## Best Practices

### Security

- **Rotate API keys** every 90 days
- **Use wp-config.php** for API keys in production
- **Monitor error logs** for suspicious activity
- **Review rate limits** regularly
- **Backup submissions** before bulk deletions

### Performance

- **Enable caching** to reduce API costs
- **Clear old logs** monthly
- **Monitor token usage** to optimize costs
- **Use appropriate AI models** (don't always use most expensive)
- **Test changes** in staging before production

### User Experience

- **Review submissions** to understand user needs
- **Follow up** with users who provide emails
- **Monitor error rates** to ensure wizard works smoothly
- **Test wizard** regularly from user perspective
- **Update prompts** based on blueprint quality

### Cost Management

- **Enable caching** (can save 30-50% on API costs)
- **Choose appropriate model** (gpt-3.5-turbo for most cases)
- **Monitor usage** weekly
- **Set rate limits** to prevent abuse
- **Review token usage** to optimize prompts

---

## Troubleshooting Admin Issues

### Can't Access Admin Pages

**Problem:** Menu items not showing

**Solutions:**
1. Check user role has admin capabilities
2. Verify plugin is activated
3. Clear WordPress cache
4. Check for plugin conflicts

### Settings Not Saving

**Problem:** Changes don't persist

**Solutions:**
1. Check file permissions
2. Verify database connection
3. Check for JavaScript errors in console
4. Try different browser

### Test Connection Fails

**Problem:** API test returns error

**Solutions:**
1. Verify API key is correct
2. Check API key has credits/quota
3. Verify internet connection
4. Check firewall isn't blocking API calls
5. Try different AI provider

### Submissions Not Showing

**Problem:** List is empty but submissions exist

**Solutions:**
1. Check date filter settings
2. Clear search box
3. Check user permissions
4. Verify custom post type is registered
5. Check database for posts

### Dashboard Shows No Data

**Problem:** Analytics are empty

**Solutions:**
1. Verify submissions exist
2. Check date range filter
3. Clear WordPress cache
4. Check JavaScript console for errors
5. Verify database queries are working

---

## Getting Help

If you encounter issues not covered in this guide:

1. **Check Error Logs** - Often provides specific error details
2. **Review Main Documentation** - See AI-WORKFLOW-WIZARD-README.md
3. **Enable Debug Mode** - Add to wp-config.php:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```
4. **Contact Developer** - Provide error logs and steps to reproduce
5. **Check External Services** - Verify AI provider status pages

---

## Appendix: Keyboard Shortcuts

When viewing submissions list:

- `j` - Move to next submission
- `k` - Move to previous submission
- `e` - Edit selected submission
- `t` - Move to trash
- `/` - Focus search box

When editing submission:

- `Ctrl/Cmd + S` - Save changes
- `Ctrl/Cmd + Z` - Undo
- `Ctrl/Cmd + Y` - Redo

---

## Appendix: User Roles and Capabilities

**Administrator:**
- Full access to all features
- Can configure AI settings
- Can view all submissions
- Can export data
- Can clear logs

**Editor:**
- Can view submissions
- Can edit submissions
- Cannot change AI settings
- Cannot clear logs

**Author/Contributor:**
- No access to AI Workflow features

**Subscriber:**
- No access to AI Workflow features

To grant custom access, use a role management plugin to add these capabilities:
- `manage_ai_workflow` - Access to all features
- `view_ai_submissions` - View submissions only
- `edit_ai_submissions` - Edit submissions
- `manage_ai_settings` - Configure AI settings

---

*Last Updated: November 2024*
*Version: 1.0.0*
