# Admin Guide: Monitoring Conversations and Quotes

## Overview

This guide provides administrators with instructions for monitoring AI workflow wizard conversations, tracking quote requests, analyzing user engagement, and managing the system effectively.

## Accessing Admin Dashboards

### Main Dashboard

Navigate to: **WordPress Admin → AI Workflow → Dashboard**

The main dashboard provides:
- Total wizard submissions
- Active conversations
- Completed blueprints
- Quote requests pending
- Conversion metrics

### Analytics Dashboard

Navigate to: **WordPress Admin → AI Workflow → Analytics**

The analytics dashboard shows:
- Conversation engagement metrics
- Upsell conversion rates
- Blueprint download statistics
- User journey analytics
- Time-based trends

### Logs Dashboard

Navigate to: **WordPress Admin → AI Workflow → Logs**

The logs dashboard displays:
- Error logs with severity levels
- API request logs
- Conversation state transitions
- System performance metrics

## Monitoring Conversations

### Viewing Active Conversations

**Location:** Dashboard → Active Conversations

**Information Displayed:**
- Session ID
- Assistant name
- Current conversation state
- Start time
- Last activity
- User email (if provided)

**Actions Available:**
- View full conversation transcript
- Export conversation data
- Manually intervene (send message as assistant)
- End conversation
- Flag for review

### Conversation States

Monitor conversations by state:

**CLARIFICATION**
- User is answering clarifying questions
- Check for timeout issues
- Review question quality

**UPSELL**
- User is being presented with service options
- Track which upsells are shown
- Monitor conversion rates

**BLUEPRINT_GENERATION**
- Blueprint is being generated
- Watch for generation failures
- Check generation time

**BLUEPRINT_PRESENTATION**
- Blueprint has been presented
- Monitor download attempts
- Track refinement requests

**COMPLETE**
- Conversation has ended
- Review final outcome
- Check satisfaction indicators

### Viewing Conversation Transcripts

**Steps:**
1. Go to Dashboard → Active Conversations
2. Click on session ID or "View Transcript"
3. Review full message history

**Transcript Information:**
- All messages (user and assistant)
- Timestamps
- Conversation state at each message
- Upsell interactions
- Timeout events
- Error occurrences

**Export Options:**
- Export as JSON
- Export as PDF
- Export as CSV

### Identifying Problem Conversations

**Red Flags:**
- Multiple timeout events
- API errors in transcript
- User frustration indicators
- Abandoned at blueprint presentation
- Failed blueprint generation

**Action Steps:**
1. Review conversation context
2. Check error logs for technical issues
3. Manually reach out to user if email provided
4. Create manual quote request if needed
5. Document issue for system improvement

## Managing Quote Requests

### Viewing Quote Requests

**Location:** Dashboard → Quote Requests

**Information Displayed:**
- Quote request ID
- User contact details (name, email, phone)
- Associated conversation session
- Blueprint summary
- Request timestamp
- Status (Pending, In Progress, Completed, Cancelled)
- Additional notes from user

### Quote Request Workflow

**1. New Quote Request Arrives**
- Email notification sent to admin
- Appears in "Pending" queue
- 24-hour SLA timer starts

**2. Review Quote Request**
- Click on quote request ID
- Review conversation transcript
- View generated blueprint
- Read user's additional notes
- Check wizard submission data

**3. Process Quote Request**
- Change status to "In Progress"
- Prepare detailed quote
- Contact user if clarification needed
- Update notes with internal comments

**4. Complete Quote Request**
- Send quote to user via email
- Change status to "Completed"
- Log completion time
- Track follow-up actions

### Quote Request Actions

**Available Actions:**
- View full conversation
- Download blueprint
- Export wizard data
- Send email to user
- Update status
- Add internal notes
- Create calendar reminder
- Mark as priority

### Quote Request Filters

Filter quote requests by:
- Status (Pending, In Progress, Completed)
- Date range
- Priority level
- Assigned team member
- Blueprint complexity
- Estimated value

### Quote Request Notifications

**Email Notifications:**
- New quote request received
- Quote request approaching 24-hour deadline
- Quote request overdue
- User follow-up received

**Configure Notifications:**
1. Go to Settings → Notifications
2. Enable/disable notification types
3. Set recipient email addresses
4. Configure notification frequency

## Analytics and Reporting

### Key Metrics to Monitor

**Conversion Funnel:**
```
Wizard Starts
    ↓ (Completion Rate)
Wizard Completions
    ↓ (Engagement Rate)
Chat Engagement
    ↓ (Upsell Rate)
Upsell Conversions
    ↓ (Download Rate)
Blueprint Downloads
```

**Engagement Metrics:**
- Average messages per conversation
- Average conversation duration
- Timeout occurrence rate
- User response time
- Assistant response time

**Upsell Metrics:**
- Consultation booking rate
- Estimate request rate
- Quote request rate
- Additional workflow rate
- Overall upsell conversion rate

**Blueprint Metrics:**
- Generation success rate
- Generation time (average)
- Download rate
- Refinement request rate
- Subscription completion rate

### Generating Reports

**Weekly Summary Report:**
1. Go to Analytics → Reports
2. Select "Weekly Summary"
3. Choose date range
4. Click "Generate Report"

**Report Contents:**
- Total conversations started
- Completion rate
- Upsell conversions
- Quote requests
- Revenue potential
- Top pain points identified
- Common workflow types

**Export Formats:**
- PDF (for presentations)
- CSV (for analysis)
- Excel (for detailed review)

### Custom Reports

**Create Custom Report:**
1. Go to Analytics → Custom Reports
2. Click "New Report"
3. Select metrics to include
4. Set filters and date range
5. Save report template
6. Schedule automatic generation

**Available Metrics:**
- Conversation metrics
- Upsell metrics
- Blueprint metrics
- User behavior metrics
- System performance metrics
- Error rates

## System Health Monitoring

### Performance Metrics

**Monitor:**
- API response times
- Blueprint generation times
- Database query performance
- Error rates
- Timeout occurrences

**Thresholds:**
- API response time: < 3 seconds (95th percentile)
- Blueprint generation: < 60 seconds
- Error rate: < 1% of requests
- Timeout rate: < 10% of conversations

**Alerts:**
- Email alert when thresholds exceeded
- Dashboard warning indicators
- Slack integration (if configured)

### Error Monitoring

**Error Categories:**
- API failures (OpenAI/Anthropic)
- Database errors
- Blueprint generation failures
- Email delivery failures
- Rate limit exceeded

**Error Dashboard:**
1. Go to Logs → Errors
2. View errors by severity
3. Filter by category and date
4. Review error details and stack traces

**Error Actions:**
- Mark as resolved
- Assign to team member
- Create issue ticket
- Add to known issues
- Document resolution

### Rate Limiting Status

**Monitor Rate Limits:**
- API calls per minute
- Messages per session
- Conversations per IP
- Quote requests per day

**View Rate Limit Status:**
1. Go to Dashboard → System Status
2. Check "Rate Limiting" section
3. View current usage vs. limits
4. Review blocked requests

**Adjust Rate Limits:**
1. Go to Settings → Rate Limiting
2. Modify limits as needed
3. Save changes
4. Monitor impact

## User Management

### Viewing User Activity

**User List:**
1. Go to Dashboard → Users
2. View all users who've used wizard
3. See activity summary per user

**User Details:**
- Email address
- Total conversations
- Quote requests
- Blueprints downloaded
- Last activity date
- Subscription status

### Managing Subscriptions

**Subscription List:**
1. Go to Dashboard → Subscriptions
2. View all blueprint subscriptions
3. Filter by date, status, or user

**Subscription Actions:**
- Resend download link
- Update email address
- Export subscriber list
- Remove subscription (GDPR)

### Data Privacy and GDPR

**User Data Retention:**
- Conversations: 30 days (configurable)
- Subscriptions: Indefinite (until user requests deletion)
- Quote requests: 1 year (configurable)

**Data Deletion Requests:**
1. Go to Dashboard → Privacy
2. Click "New Deletion Request"
3. Enter user email
4. Confirm deletion scope
5. Process deletion

**Data Export Requests:**
1. Go to Dashboard → Privacy
2. Click "Export User Data"
3. Enter user email
4. Generate export package
5. Send to user

## Troubleshooting Common Issues

### Issue: Conversations Not Starting

**Symptoms:**
- Wizard submits but chat doesn't load
- Progress animation stuck

**Check:**
1. Browser console for JavaScript errors
2. Network tab for failed API requests
3. Error logs for backend issues
4. Database connection status

**Resolution:**
- Clear browser cache
- Check API endpoint availability
- Verify database tables exist
- Review error logs for specifics

### Issue: Blueprint Generation Failing

**Symptoms:**
- Generation timeout
- Error message displayed to user
- Manual review notification sent

**Check:**
1. AI service API key validity
2. API rate limits
3. Error logs for specific failure
4. Wizard data completeness

**Resolution:**
- Verify API credentials
- Check API service status
- Manually generate blueprint
- Contact user with timeline

### Issue: High Timeout Rate

**Symptoms:**
- Many conversations timing out
- Users not responding

**Check:**
1. Timeout duration setting (60 seconds)
2. Question quality and clarity
3. User engagement patterns
4. Time of day patterns

**Resolution:**
- Review and improve questions
- Adjust timeout duration if needed
- Add more engaging prompts
- Provide clearer instructions

### Issue: Low Upsell Conversion

**Symptoms:**
- Users declining all upsells
- Low quote request rate

**Check:**
1. Upsell message quality
2. Timing of upsell presentation
3. Value proposition clarity
4. Pricing perception

**Resolution:**
- A/B test upsell messages
- Adjust upsell timing
- Improve value communication
- Review pricing strategy

## Best Practices

### Daily Tasks

**Morning:**
- Review overnight conversations
- Check pending quote requests
- Review error logs
- Check system health metrics

**Throughout Day:**
- Monitor active conversations
- Respond to quote requests within SLA
- Address critical errors
- Review user feedback

**Evening:**
- Generate daily summary
- Plan follow-ups for next day
- Review analytics trends
- Document issues and resolutions

### Weekly Tasks

- Generate weekly report
- Review conversion metrics
- Analyze user feedback
- Update conversation templates
- Review and improve questions
- Team meeting to discuss insights

### Monthly Tasks

- Comprehensive analytics review
- System performance analysis
- User satisfaction survey
- Feature improvement planning
- Documentation updates
- Training for new team members

## Configuration Settings

### Accessing Settings

Navigate to: **WordPress Admin → AI Workflow → Settings**

### Key Settings

**Conversation Settings:**
- Timeout duration (default: 60 seconds)
- Maximum messages per session (default: 50)
- Auto-proceed delay (default: 30 seconds)
- Assistant name generation style

**Upsell Settings:**
- Enable/disable specific upsells
- Upsell message templates
- Calendly integration URL
- Quote request email recipients

**Blueprint Settings:**
- Generation timeout (default: 60 seconds)
- Diagram style preferences
- PDF generation options
- Download link expiration (default: 7 days)

**Notification Settings:**
- Admin email addresses
- Notification types enabled
- Email templates
- Slack webhook URL (optional)

**Privacy Settings:**
- Data retention periods
- GDPR compliance options
- Cookie consent requirements
- Data export format

## Support and Resources

### Getting Help

**Documentation:**
- Developer documentation: `mu-plugins/DEVELOPER-DOCUMENTATION.md`
- API documentation: `mu-plugins/API-DOCUMENTATION.md`
- Troubleshooting guide: `mu-plugins/TROUBLESHOOTING-GUIDE.md`

**Support Channels:**
- Email: support@example.com
- Slack: #ai-workflow-support
- Issue tracker: GitHub repository

### Training Resources

**Video Tutorials:**
- Dashboard overview
- Monitoring conversations
- Processing quote requests
- Generating reports

**Written Guides:**
- Quick start guide
- Advanced features guide
- Best practices guide
- FAQ document

## Appendix

### Database Tables

**Conversation Sessions:**
- Table: `wp_mgrnz_conversation_sessions`
- Stores: Session data, state, timestamps

**Chat Messages:**
- Table: `wp_mgrnz_chat_messages`
- Stores: Message content, sender, timestamps

**Quote Requests:**
- Table: `wp_mgrnz_quote_requests`
- Stores: Contact details, status, notes

**Subscriptions:**
- Table: `wp_mgrnz_blueprint_subscriptions`
- Stores: User details, download info

### API Endpoints Used

- `POST /wp-json/mgrnz/v1/chat-message`
- `POST /wp-json/mgrnz/v1/generate-estimate`
- `POST /wp-json/mgrnz/v1/request-quote`
- `POST /wp-json/mgrnz/v1/subscribe-blueprint`

### Useful SQL Queries

**Active conversations in last hour:**
```sql
SELECT * FROM wp_mgrnz_conversation_sessions 
WHERE updated_at > DATE_SUB(NOW(), INTERVAL 1 HOUR)
AND conversation_state != 'COMPLETE';
```

**Quote requests pending:**
```sql
SELECT * FROM wp_mgrnz_quote_requests 
WHERE status = 'pending'
ORDER BY created_at ASC;
```

**Conversion rate by day:**
```sql
SELECT 
    DATE(created_at) as date,
    COUNT(*) as total_conversations,
    SUM(CASE WHEN conversation_state = 'COMPLETE' THEN 1 ELSE 0 END) as completed,
    (SUM(CASE WHEN conversation_state = 'COMPLETE' THEN 1 ELSE 0 END) / COUNT(*)) * 100 as completion_rate
FROM wp_mgrnz_conversation_sessions
GROUP BY DATE(created_at)
ORDER BY date DESC;
```
