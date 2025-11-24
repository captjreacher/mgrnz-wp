# Post-Submission Action Handlers

This document describes the implementation of post-submission action handlers for the AI Workflow Wizard.

## Overview

After users complete the wizard and receive their AI workflow blueprint, they have two action options:
1. **Subscribe to Newsletter** - Subscribe to blog updates via MailerLite
2. **Book a Consultation** - Schedule a consultation via Calendly with pre-filled context

## Features Implemented

### 1. Subscribe Button Handler

**Location:** `themes/mgrnz-theme/assets/js/wizard-controller.js`

The subscribe button redirects users to a subscription page (blog or MailerLite form) with their email pre-filled.

**Behavior:**
- If user provided email in wizard, it's passed as URL parameter
- Redirects to configured subscribe URL (default: `/blog`)
- Can redirect to MailerLite form URL or blog page with embedded form

**Configuration:**
- Set subscribe URL in WordPress Admin → Settings → AI Workflow
- Field: "Subscribe Page URL"
- Default: Site's blog page

### 2. Newsletter Subscription API Endpoint

**Location:** `mu-plugins/mgrnz-ai-workflow-endpoint.php`

REST API endpoint for handling newsletter subscriptions via MailerLite.

**Endpoint:** `POST /wp-json/mgrnz/v1/subscribe`

**Request Body:**
```json
{
  "email": "user@example.com",
  "submission_id": 123,
  "source": "ai_workflow_wizard"
}
```

**Response:**
```json
{
  "status": "success",
  "message": "Successfully subscribed to newsletter",
  "email": "user@example.com"
}
```

**MailerLite Integration:**
- Uses MailerLite API v2
- Subscribes users to main list or specific group
- Handles duplicate subscriptions gracefully
- Logs all subscription attempts

### 3. Consult Button Handler

**Location:** `themes/mgrnz-theme/assets/js/wizard-controller.js`

The consult button opens Calendly booking page with pre-filled context from the user's submission.

**Behavior:**
- Opens Calendly in new tab
- Passes submission_id as URL parameter
- Pre-fills email if provided
- Passes workflow goal as custom field (a1)

**URL Format:**
```
https://calendly.com/your-username/consultation?submission_id=123&email=user@example.com&a1=Goal+text
```

**Configuration:**
- Set Calendly URL in WordPress Admin → Settings → AI Workflow
- Field: "Calendly Booking URL"
- Example: `https://calendly.com/your-username/consultation`

### 4. Consultation Booking Page Template

**Location:** `themes/mgrnz-theme/page-consultation.php`

WordPress page template that handles URL parameters and displays Calendly widget.

**Features:**
- Reads `submission_id` from URL parameter
- Fetches submission data from database
- Displays submission context to user
- Embeds Calendly widget with pre-filled data
- Falls back gracefully if Calendly not configured

**Usage:**
1. Create a new page in WordPress (e.g., "Book Consultation")
2. Set page slug to `book-consultation`
3. Assign "Consultation Booking" template
4. Publish page

## Configuration

### MailerLite Setup

1. Get API Key:
   - Go to [MailerLite Dashboard](https://dashboard.mailerlite.com/integrations/api)
   - Navigate to Integrations → API
   - Generate new API key

2. Configure in WordPress:
   - Go to Settings → AI Workflow
   - Scroll to "MailerLite Integration" section
   - Enter API Key
   - (Optional) Enter Group ID to add subscribers to specific group
   - Set Subscribe Page URL

3. Test:
   - Complete wizard submission
   - Click "Subscribe & get updates" button
   - Verify subscription in MailerLite dashboard

### Calendly Setup

1. Get Calendly URL:
   - Log into [Calendly](https://calendly.com)
   - Go to your event type (e.g., "Consultation")
   - Copy the booking page URL

2. Configure in WordPress:
   - Go to Settings → AI Workflow
   - Scroll to "Calendly Integration" section
   - Enter Calendly Booking URL
   - Save settings

3. Create Booking Page:
   - Create new page: "Book Consultation"
   - Assign "Consultation Booking" template
   - Publish

4. Test:
   - Complete wizard submission
   - Click "Book an AI consult" button
   - Verify Calendly opens with pre-filled data

## Custom Fields in Calendly

To capture submission context in Calendly:

1. Go to Calendly event settings
2. Add custom question: "Workflow Context"
3. Set field name to `a1`
4. Make it optional or hidden
5. The wizard will automatically populate this field

## Error Handling

### Subscribe Button
- If MailerLite API key not configured: Shows error message
- If email invalid: Shows validation error
- If API request fails: Shows user-friendly error, logs details
- If user already subscribed: Treats as success

### Consult Button
- If Calendly URL not configured: Uses default placeholder
- If submission_id not available: Opens Calendly without context
- Always opens in new tab to preserve wizard state

## Logging

All subscription attempts are logged to WordPress error log:

```
[SUBSCRIPTION SUCCESS] Email: user@example.com | Source: ai_workflow_wizard | Submission ID: 123
[SUBSCRIPTION ERROR] Email: user@example.com | Error: API connection failed
```

## Security

- All endpoints require WordPress nonce verification
- Email addresses are sanitized and validated
- API keys stored securely in WordPress options
- CORS headers restrict endpoint access to same origin
- Submission IDs validated as integers

## Testing

### Test Subscribe Flow
1. Complete wizard with email
2. Click "Subscribe & get updates"
3. Verify redirect to subscribe page
4. Check MailerLite dashboard for new subscriber

### Test Consult Flow
1. Complete wizard
2. Click "Book an AI consult"
3. Verify Calendly opens in new tab
4. Check that email and context are pre-filled
5. Complete booking to test end-to-end

### Test API Endpoint
```bash
curl -X POST https://yoursite.com/wp-json/mgrnz/v1/subscribe \
  -H "Content-Type: application/json" \
  -H "X-WP-Nonce: YOUR_NONCE" \
  -d '{"email":"test@example.com","source":"test"}'
```

## Troubleshooting

### Subscriptions Not Working
1. Check MailerLite API key is correct
2. Verify API key has proper permissions
3. Check WordPress error log for details
4. Test API connection manually

### Calendly Not Loading
1. Verify Calendly URL is correct
2. Check page template is assigned
3. Ensure Calendly script loads (check browser console)
4. Test Calendly URL directly in browser

### Context Not Pre-filling
1. Verify submission_id is in URL
2. Check submission exists in database
3. Verify custom field name matches Calendly settings
4. Check browser console for JavaScript errors

## Future Enhancements

Potential improvements:
- Add ConvertKit integration as alternative to MailerLite
- Support multiple newsletter lists
- Add subscription preferences (frequency, topics)
- Track conversion rates (subscriptions, bookings)
- Add webhook support for real-time notifications
- Implement double opt-in for GDPR compliance
