# API Documentation: REST Endpoints

## Overview

This document provides comprehensive documentation for all REST API endpoints used in the AI Workflow Wizard Enhancement system. Each endpoint includes authentication requirements, request/response formats, error handling, and usage examples.

## Base URL

```
https://your-domain.com/wp-json/mgrnz/v1
```

## Authentication

All endpoints require WordPress nonce verification for security.

### Getting a Nonce

```javascript
// Nonce is provided via wp_localize_script
const nonce = wpApiSettings.nonce;

// Include in request headers
headers: {
    'X-WP-Nonce': nonce
}
```

### Session Validation

Most endpoints require a valid `session_id` that is created when the wizard is submitted.

## Endpoints

### 1. Chat Message

Send a user message and receive an AI assistant response.

**Endpoint:** `POST /chat-message`

**Authentication:** Required (WordPress nonce)

**Rate Limiting:** 10 requests per minute per session, 50 total per session

#### Request

**Headers:**
```
Content-Type: application/json
X-WP-Nonce: {nonce}
```

**Body:**
```json
{
    "session_id": "sess_abc123xyz",
    "message": "I need more automation for email processing",
    "timestamp": 1700000000
}
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| session_id | string | Yes | Unique conversation session identifier |
| message | string | Yes | User's message content (max 5000 chars) |
| timestamp | integer | No | Unix timestamp of message send time |

#### Response

**Success (200 OK):**
```json
{
    "success": true,
    "assistant_response": "That's great! Can you tell me more about your current email volume and what specific tasks you'd like to automate?",
    "conversation_state": "CLARIFICATION",
    "next_action": null,
    "metadata": {
        "message_id": "msg_456def",
        "response_time": 1.23,
        "tokens_used": 150
    }
}
```

**Response Fields:**

| Field | Type | Description |
|-------|------|-------------|
| success | boolean | Whether the request was successful |
| assistant_response | string | AI-generated response message |
| conversation_state | string | Current conversation state (CLARIFICATION, UPSELL, etc.) |
| next_action | string\|null | Suggested next action (e.g., "show_upsell", "generate_blueprint") |
| metadata | object | Additional information about the response |

#### Error Responses

**Rate Limit Exceeded (429):**
```json
{
    "success": false,
    "error": "rate_limit_exceeded",
    "message": "You've sent too many messages. Please wait a moment.",
    "retry_after": 30
}
```

**Invalid Session (400):**
```json
{
    "success": false,
    "error": "invalid_session",
    "message": "Session not found or expired"
}
```

**AI Service Error (500):**
```json
{
    "success": false,
    "error": "ai_service_error",
    "message": "Unable to generate response. Please try again.",
    "retry": true
}
```

**Validation Error (400):**
```json
{
    "success": false,
    "error": "validation_error",
    "message": "Message content is required",
    "field": "message"
}
```

#### Usage Example

```javascript
async function sendChatMessage(sessionId, message) {
    try {
        const response = await fetch('/wp-json/mgrnz/v1/chat-message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': wpApiSettings.nonce
            },
            body: JSON.stringify({
                session_id: sessionId,
                message: message,
                timestamp: Math.floor(Date.now() / 1000)
            })
        });
        
        if (!response.ok) {
            throw new Error(`HTTP ${response.status}`);
        }
        
        const data = await response.json();
        
        if (data.success) {
            // Display assistant response
            chatInterface.addMessage(data.assistant_response, 'assistant');
            
            // Handle next action if specified
            if (data.next_action) {
                handleNextAction(data.next_action);
            }
        } else {
            // Handle error
            console.error('Chat error:', data.message);
        }
        
        return data;
        
    } catch (error) {
        console.error('Request failed:', error);
        throw error;
    }
}
```

---

### 2. Generate Estimate

Generate an AI-powered cost estimate for the workflow automation.

**Endpoint:** `POST /generate-estimate`

**Authentication:** Required (WordPress nonce)

**Rate Limiting:** 3 requests per session

#### Request

**Headers:**
```
Content-Type: application/json
X-WP-Nonce: {nonce}
```

**Body:**
```json
{
    "session_id": "sess_abc123xyz",
    "blueprint_id": "bp_789ghi"
}
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| session_id | string | Yes | Unique conversation session identifier |
| blueprint_id | string | No | Blueprint ID if already generated |

#### Response

**Success (200 OK):**
```json
{
    "success": true,
    "estimate": {
        "setup_cost": {
            "min": 2500,
            "max": 4000,
            "formatted": "$2,500 - $4,000"
        },
        "monthly_cost": {
            "min": 150,
            "max": 300,
            "formatted": "$150 - $300"
        },
        "timeline": {
            "min_weeks": 2,
            "max_weeks": 3,
            "formatted": "2-3 weeks"
        },
        "complexity": "Medium",
        "breakdown": {
            "development": "$1,500 - $2,500",
            "integration": "$500 - $1,000",
            "testing": "$300 - $500",
            "deployment": "$200 - $300"
        },
        "disclaimer": "This is an indicative estimate based on the information provided. A detailed quote will provide exact pricing based on your specific requirements."
    },
    "metadata": {
        "generated_at": 1700000000,
        "confidence": "medium",
        "factors": [
            "Number of integrations",
            "Workflow complexity",
            "Data volume"
        ]
    }
}
```

**Response Fields:**

| Field | Type | Description |
|-------|------|-------------|
| success | boolean | Whether the request was successful |
| estimate | object | Detailed cost estimate breakdown |
| estimate.setup_cost | object | One-time setup cost range |
| estimate.monthly_cost | object | Recurring monthly cost range |
| estimate.timeline | object | Estimated implementation timeline |
| estimate.complexity | string | Complexity level (Low, Medium, High) |
| estimate.breakdown | object | Cost breakdown by category |
| estimate.disclaimer | string | Legal disclaimer text |
| metadata | object | Additional information about the estimate |

#### Error Responses

**Insufficient Data (400):**
```json
{
    "success": false,
    "error": "insufficient_data",
    "message": "Not enough information to generate estimate. Please answer more clarifying questions."
}
```

**Rate Limit Exceeded (429):**
```json
{
    "success": false,
    "error": "rate_limit_exceeded",
    "message": "You've requested too many estimates. Please contact us for a detailed quote."
}
```

#### Usage Example

```javascript
async function generateEstimate(sessionId, blueprintId = null) {
    try {
        const response = await fetch('/wp-json/mgrnz/v1/generate-estimate', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': wpApiSettings.nonce
            },
            body: JSON.stringify({
                session_id: sessionId,
                blueprint_id: blueprintId
            })
        });
        
        const data = await response.json();
        
        if (data.success) {
            // Display estimate in chat
            displayEstimate(data.estimate);
        } else {
            console.error('Estimate generation failed:', data.message);
        }
        
        return data;
        
    } catch (error) {
        console.error('Request failed:', error);
        throw error;
    }
}

function displayEstimate(estimate) {
    const estimateHtml = `
        <div class="estimate-card">
            <h4>Cost Estimate</h4>
            <div class="estimate-row">
                <span>Setup Cost:</span>
                <strong>${estimate.setup_cost.formatted}</strong>
            </div>
            <div class="estimate-row">
                <span>Monthly Cost:</span>
                <strong>${estimate.monthly_cost.formatted}</strong>
            </div>
            <div class="estimate-row">
                <span>Timeline:</span>
                <strong>${estimate.timeline.formatted}</strong>
            </div>
            <div class="estimate-row">
                <span>Complexity:</span>
                <strong>${estimate.complexity}</strong>
            </div>
            <p class="disclaimer">${estimate.disclaimer}</p>
        </div>
    `;
    
    chatInterface.addMessage(estimateHtml, 'assistant', 'estimate');
}
```

---

### 3. Request Quote

Submit a formal quote request with contact details.

**Endpoint:** `POST /request-quote`

**Authentication:** Required (WordPress nonce)

**Rate Limiting:** 5 requests per session

#### Request

**Headers:**
```
Content-Type: application/json
X-WP-Nonce: {nonce}
```

**Body:**
```json
{
    "session_id": "sess_abc123xyz",
    "blueprint_id": "bp_789ghi",
    "contact_details": {
        "name": "John Doe",
        "email": "john@example.com",
        "phone": "+1234567890",
        "company": "Acme Corp"
    },
    "additional_notes": "We need this implemented by end of Q1. Please include training costs.",
    "preferred_contact_method": "email",
    "urgency": "high"
}
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| session_id | string | Yes | Unique conversation session identifier |
| blueprint_id | string | No | Blueprint ID if already generated |
| contact_details | object | Yes | User contact information |
| contact_details.name | string | Yes | Full name |
| contact_details.email | string | Yes | Email address |
| contact_details.phone | string | No | Phone number |
| contact_details.company | string | No | Company name |
| additional_notes | string | No | Additional requirements or notes |
| preferred_contact_method | string | No | "email" or "phone" |
| urgency | string | No | "low", "medium", or "high" |

#### Response

**Success (200 OK):**
```json
{
    "success": true,
    "message": "Quote request received. We'll send a detailed quote within 24 hours.",
    "quote_id": "qt_123abc",
    "confirmation": {
        "email_sent": true,
        "expected_response": "2024-01-15T10:00:00Z",
        "reference_number": "QT-2024-001"
    },
    "next_steps": [
        "You'll receive a confirmation email shortly",
        "Our team will review your requirements",
        "Expect a detailed quote within 24 hours",
        "We may contact you for clarification if needed"
    ]
}
```

**Response Fields:**

| Field | Type | Description |
|-------|------|-------------|
| success | boolean | Whether the request was successful |
| message | string | Confirmation message |
| quote_id | string | Unique quote request identifier |
| confirmation | object | Confirmation details |
| confirmation.email_sent | boolean | Whether confirmation email was sent |
| confirmation.expected_response | string | ISO 8601 timestamp of expected response |
| confirmation.reference_number | string | Human-readable reference number |
| next_steps | array | List of next steps for the user |

#### Error Responses

**Invalid Email (400):**
```json
{
    "success": false,
    "error": "invalid_email",
    "message": "Please provide a valid email address",
    "field": "contact_details.email"
}
```

**Duplicate Request (409):**
```json
{
    "success": false,
    "error": "duplicate_request",
    "message": "You've already requested a quote for this session",
    "existing_quote_id": "qt_456def"
}
```

#### Usage Example

```javascript
async function requestQuote(sessionId, contactDetails, additionalNotes = '') {
    try {
        const response = await fetch('/wp-json/mgrnz/v1/request-quote', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': wpApiSettings.nonce
            },
            body: JSON.stringify({
                session_id: sessionId,
                contact_details: contactDetails,
                additional_notes: additionalNotes,
                urgency: 'medium'
            })
        });
        
        const data = await response.json();
        
        if (data.success) {
            // Display confirmation
            displayQuoteConfirmation(data);
        } else {
            console.error('Quote request failed:', data.message);
        }
        
        return data;
        
    } catch (error) {
        console.error('Request failed:', error);
        throw error;
    }
}

function displayQuoteConfirmation(data) {
    const confirmationHtml = `
        <div class="quote-confirmation">
            <h4>✓ Quote Request Received</h4>
            <p>${data.message}</p>
            <p><strong>Reference:</strong> ${data.confirmation.reference_number}</p>
            <div class="next-steps">
                <h5>Next Steps:</h5>
                <ul>
                    ${data.next_steps.map(step => `<li>${step}</li>`).join('')}
                </ul>
            </div>
        </div>
    `;
    
    chatInterface.addMessage(confirmationHtml, 'assistant', 'confirmation');
}
```

---

### 4. Subscribe Blueprint

Subscribe to receive blueprint download access.

**Endpoint:** `POST /subscribe-blueprint`

**Authentication:** Required (WordPress nonce)

**Rate Limiting:** 10 requests per hour per IP

#### Request

**Headers:**
```
Content-Type: application/json
X-WP-Nonce: {nonce}
```

**Body:**
```json
{
    "session_id": "sess_abc123xyz",
    "name": "John Doe",
    "email": "john@example.com",
    "consent": true,
    "source": "chat_interface"
}
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| session_id | string | Yes | Unique conversation session identifier |
| name | string | Yes | Subscriber's full name |
| email | string | Yes | Subscriber's email address |
| consent | boolean | Yes | Marketing consent (must be true) |
| source | string | No | Source of subscription ("chat_interface", "modal", etc.) |

#### Response

**Success (200 OK):**
```json
{
    "success": true,
    "message": "Subscription successful! Your blueprint is ready to download.",
    "subscription_id": "sub_789xyz",
    "download_url": "https://your-domain.com/downloads/blueprint-abc123.pdf?token=secure_token_here",
    "download_expires": "2024-01-22T10:00:00Z",
    "blueprint_info": {
        "title": "Email Processing Automation Blueprint",
        "pages": 12,
        "file_size": "2.4 MB",
        "includes_diagram": true
    }
}
```

**Response Fields:**

| Field | Type | Description |
|-------|------|-------------|
| success | boolean | Whether the request was successful |
| message | string | Success message |
| subscription_id | string | Unique subscription identifier |
| download_url | string | Secure URL to download blueprint PDF |
| download_expires | string | ISO 8601 timestamp when download link expires |
| blueprint_info | object | Information about the blueprint |

#### Error Responses

**Invalid Email (400):**
```json
{
    "success": false,
    "error": "invalid_email",
    "message": "Please provide a valid email address",
    "field": "email"
}
```

**Missing Consent (400):**
```json
{
    "success": false,
    "error": "consent_required",
    "message": "You must agree to receive the blueprint"
}
```

**Blueprint Not Ready (404):**
```json
{
    "success": false,
    "error": "blueprint_not_found",
    "message": "Blueprint is not yet generated for this session"
}
```

**Already Subscribed (409):**
```json
{
    "success": false,
    "error": "already_subscribed",
    "message": "This email is already subscribed",
    "existing_download_url": "https://your-domain.com/downloads/blueprint-abc123.pdf?token=existing_token"
}
```

#### Usage Example

```javascript
async function subscribeBlueprint(sessionId, name, email) {
    try {
        const response = await fetch('/wp-json/mgrnz/v1/subscribe-blueprint', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': wpApiSettings.nonce
            },
            body: JSON.stringify({
                session_id: sessionId,
                name: name,
                email: email,
                consent: true,
                source: 'chat_interface'
            })
        });
        
        const data = await response.json();
        
        if (data.success) {
            // Trigger download
            window.location.href = data.download_url;
            
            // Show success message
            displaySubscriptionSuccess(data);
        } else {
            console.error('Subscription failed:', data.message);
        }
        
        return data;
        
    } catch (error) {
        console.error('Request failed:', error);
        throw error;
    }
}

function displaySubscriptionSuccess(data) {
    const successHtml = `
        <div class="subscription-success">
            <h4>✓ ${data.message}</h4>
            <div class="blueprint-info">
                <p><strong>${data.blueprint_info.title}</strong></p>
                <p>${data.blueprint_info.pages} pages • ${data.blueprint_info.file_size}</p>
                ${data.blueprint_info.includes_diagram ? '<p>✓ Includes visual diagram</p>' : ''}
            </div>
            <p class="download-note">
                Your download should start automatically. 
                <a href="${data.download_url}">Click here</a> if it doesn't.
            </p>
            <p class="expiry-note">
                Download link expires: ${new Date(data.download_expires).toLocaleDateString()}
            </p>
        </div>
    `;
    
    chatInterface.addMessage(successHtml, 'assistant', 'subscription_success');
}
```

---

### 5. AI Workflow (Existing Endpoint)

Submit wizard data to generate initial blueprint and start conversation.

**Endpoint:** `POST /ai-workflow`

**Authentication:** Required (WordPress nonce)

**Rate Limiting:** 10 requests per hour per IP

#### Request

**Headers:**
```
Content-Type: application/json
X-WP-Nonce: {nonce}
```

**Body:**
```json
{
    "goal": "Automate email processing and CRM updates",
    "workflow": "Receive emails, extract data, update CRM, send confirmations",
    "tools": "Gmail, Salesforce, Slack",
    "pain_points": "Manual data entry takes 3 hours daily, errors in data transfer",
    "email": "john@example.com"
}
```

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| goal | string | Yes | User's automation goal |
| workflow | string | Yes | Description of current workflow |
| tools | string | Yes | Tools and systems currently used |
| pain_points | string | Yes | Current challenges and pain points |
| email | string | Yes | User's email address |

#### Response

**Success (200 OK):**
```json
{
    "success": true,
    "message": "Wizard submitted successfully",
    "session_id": "sess_abc123xyz",
    "assistant_name": "Alex",
    "initial_state": "CLARIFICATION",
    "progress_messages": [
        "Your Assistant Alex has been created...",
        "Your Assistant Alex has deployed a business analysis agent...",
        "Building Chat..."
    ]
}
```

#### Usage Example

```javascript
async function submitWizard(formData) {
    try {
        const response = await fetch('/wp-json/mgrnz/v1/ai-workflow', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': wpApiSettings.nonce
            },
            body: JSON.stringify(formData)
        });
        
        const data = await response.json();
        
        if (data.success) {
            // Start progress animation
            startProgressAnimation(data.assistant_name, data.progress_messages);
            
            // Store session ID for future requests
            sessionStorage.setItem('conversation_session_id', data.session_id);
        }
        
        return data;
        
    } catch (error) {
        console.error('Wizard submission failed:', error);
        throw error;
    }
}
```

---

## Error Handling

### Standard Error Response Format

All endpoints return errors in a consistent format:

```json
{
    "success": false,
    "error": "error_code",
    "message": "Human-readable error message",
    "field": "field_name",
    "details": {}
}
```

### Common Error Codes

| Code | HTTP Status | Description |
|------|-------------|-------------|
| invalid_nonce | 403 | WordPress nonce verification failed |
| invalid_session | 400 | Session ID not found or expired |
| validation_error | 400 | Request data validation failed |
| rate_limit_exceeded | 429 | Too many requests |
| ai_service_error | 500 | AI service unavailable or failed |
| database_error | 500 | Database operation failed |
| insufficient_data | 400 | Not enough data to process request |
| duplicate_request | 409 | Duplicate request detected |
| blueprint_not_found | 404 | Blueprint not generated yet |
| already_subscribed | 409 | Email already subscribed |

### Retry Logic

Implement exponential backoff for failed requests:

```javascript
async function fetchWithRetry(url, options, maxRetries = 3) {
    let lastError;
    
    for (let attempt = 0; attempt < maxRetries; attempt++) {
        try {
            const response = await fetch(url, options);
            
            // Don't retry client errors (4xx)
            if (response.status >= 400 && response.status < 500) {
                return response;
            }
            
            // Retry server errors (5xx)
            if (response.ok) {
                return response;
            }
            
            throw new Error(`HTTP ${response.status}`);
            
        } catch (error) {
            lastError = error;
            
            if (attempt < maxRetries - 1) {
                // Exponential backoff: 1s, 2s, 4s
                const delay = Math.pow(2, attempt) * 1000;
                await new Promise(resolve => setTimeout(resolve, delay));
            }
        }
    }
    
    throw lastError;
}
```

## Rate Limiting

### Rate Limit Headers

Responses include rate limit information in headers:

```
X-RateLimit-Limit: 10
X-RateLimit-Remaining: 7
X-RateLimit-Reset: 1700000060
```

### Handling Rate Limits

```javascript
async function handleRateLimitedRequest(url, options) {
    const response = await fetch(url, options);
    
    if (response.status === 429) {
        const retryAfter = response.headers.get('Retry-After') || 60;
        
        // Show user-friendly message
        showRateLimitMessage(retryAfter);
        
        // Wait and retry
        await new Promise(resolve => setTimeout(resolve, retryAfter * 1000));
        return handleRateLimitedRequest(url, options);
    }
    
    return response;
}
```

## Webhooks (Future Feature)

### Webhook Events

Future versions will support webhooks for:
- `conversation.started`
- `conversation.completed`
- `quote.requested`
- `blueprint.downloaded`
- `upsell.converted`

### Webhook Payload Example

```json
{
    "event": "quote.requested",
    "timestamp": "2024-01-15T10:00:00Z",
    "data": {
        "quote_id": "qt_123abc",
        "session_id": "sess_abc123xyz",
        "contact_details": {
            "name": "John Doe",
            "email": "john@example.com"
        }
    }
}
```

## Testing

### Test Endpoints

Use these test endpoints in development:

```
POST /wp-json/mgrnz/v1/test/create-session
POST /wp-json/mgrnz/v1/test/simulate-conversation
POST /wp-json/mgrnz/v1/test/reset-rate-limits
```

### Example Test Request

```bash
curl -X POST https://your-domain.com/wp-json/mgrnz/v1/chat-message \
  -H "Content-Type: application/json" \
  -H "X-WP-Nonce: your_nonce_here" \
  -d '{
    "session_id": "sess_test123",
    "message": "Test message"
  }'
```

## Best Practices

### 1. Always Handle Errors

```javascript
try {
    const data = await sendChatMessage(sessionId, message);
    // Handle success
} catch (error) {
    // Show user-friendly error
    showErrorMessage('Unable to send message. Please try again.');
    // Log for debugging
    console.error('Chat error:', error);
}
```

### 2. Implement Loading States

```javascript
// Show loading indicator
chatInterface.showTypingIndicator();

try {
    const response = await sendChatMessage(sessionId, message);
    // Process response
} finally {
    // Always hide loading indicator
    chatInterface.hideTypingIndicator();
}
```

### 3. Validate Before Sending

```javascript
function validateMessage(message) {
    if (!message || !message.trim()) {
        return { valid: false, error: 'Message cannot be empty' };
    }
    
    if (message.length > 5000) {
        return { valid: false, error: 'Message too long (max 5000 characters)' };
    }
    
    return { valid: true };
}
```

### 4. Cache Session Data

```javascript
// Store session ID
sessionStorage.setItem('conversation_session_id', sessionId);

// Retrieve for subsequent requests
const sessionId = sessionStorage.getItem('conversation_session_id');
```

### 5. Monitor Performance

```javascript
const startTime = performance.now();

const response = await sendChatMessage(sessionId, message);

const duration = performance.now() - startTime;
console.log(`Request took ${duration}ms`);

// Track slow requests
if (duration > 3000) {
    trackSlowRequest('chat-message', duration);
}
```

## Support

For API support:
- Documentation: https://docs.example.com/api
- Email: api-support@example.com
- Slack: #api-support

## Changelog

### Version 1.0.0 (2024-01-15)
- Initial API release
- Chat message endpoint
- Estimate generation endpoint
- Quote request endpoint
- Blueprint subscription endpoint

### Future Versions
- Webhook support
- GraphQL API
- Batch operations
- Real-time updates via WebSocket
