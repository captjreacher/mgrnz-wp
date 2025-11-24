# Conversation Flow Logic and Predetermined Paths

## Overview

This document describes the conversation flow logic, state management, and predetermined paths used in the AI Workflow Wizard Enhancement system. The conversation system guides users through clarification, upselling, and blueprint presentation phases using intelligent state transitions and timeout handling.

## Conversation States

The conversation manager uses a state machine with the following states:

### 1. CLARIFICATION
**Purpose:** Gather additional information to refine the workflow blueprint

**Entry Condition:** Wizard submission complete, chat interface loaded

**Activities:**
- AI generates 2-5 clarifying questions based on wizard data
- User responds to questions or timeout triggers predetermined path
- System collects additional context about workflow requirements

**Exit Conditions:**
- User answers all clarifying questions → Transition to UPSELL
- User timeout (60 seconds) → Follow predetermined path
- User explicitly requests to skip → Transition to UPSELL

**Example Questions:**
```
- "You mentioned email processing takes too long. How many emails do you handle daily?"
- "For your CRM updates, are you currently using any automation tools?"
- "What would success look like for this automation project?"
```

### 2. UPSELL
**Purpose:** Present service opportunities naturally within conversation

**Entry Condition:** Clarification phase complete or skipped

**Activities:**
- Present consultation booking opportunity
- Offer indicative cost estimate
- Suggest formal quote request
- Propose additional workflow creation

**Exit Conditions:**
- User engages with upsell → Process action, continue conversation
- User declines all upsells → Transition to BLUEPRINT_GENERATION
- Timeout → Transition to BLUEPRINT_GENERATION

**Upsell Sequence:**
1. Consultation booking (Calendly integration)
2. Indicative cost estimate (AI-generated)
3. Formal quote request (24-hour turnaround)
4. Additional workflow option

### 3. BLUEPRINT_GENERATION
**Purpose:** Generate the workflow automation blueprint

**Entry Condition:** Clarification and upsell phases complete

**Activities:**
- AI processes all collected information
- Generates detailed workflow blueprint
- Creates visual diagram representation
- Prepares presentation sequence

**Exit Conditions:**
- Blueprint generation successful → Transition to BLUEPRINT_PRESENTATION
- Blueprint generation fails → Error handling, manual review notification

**Timeout:** Maximum 60 seconds for generation

### 4. BLUEPRINT_PRESENTATION
**Purpose:** Present the completed blueprint to the user

**Entry Condition:** Blueprint generation complete

**Activities:**
- Display sequential completion messages
- Show blueprint with diagram and text
- Offer refinement options
- Enable download with subscription

**Exit Conditions:**
- User downloads blueprint → Transition to COMPLETE
- User requests changes → Return to BLUEPRINT_GENERATION
- User satisfied without download → Transition to COMPLETE

**Presentation Sequence:**
```
1. "Agent reports Mission Complete..." (2s delay)
2. "Assistant Finalising Blueprint..." (2s delay)
3. "Assistant completing blueprint..." (2s delay)
4. "I'm pleased to present your Blueprint..."
5. Display blueprint content
```

### 5. COMPLETE
**Purpose:** Conversation ended, all objectives achieved

**Entry Condition:** User satisfied with blueprint or conversation naturally concluded

**Activities:**
- Store final conversation state
- Log analytics data
- Provide next steps information

**Exit Conditions:** None (terminal state)

## Predetermined Conversation Paths

### Path 1: No Response Timeout

**Trigger:** User doesn't respond within 60 seconds

**Logic:**
```javascript
const timeoutHandler = {
  duration: 60000, // 60 seconds
  action: 'continueWithDefaults',
  message: 'I haven\'t heard from you. Shall I continue with the information you\'ve provided?',
  quickActions: [
    { text: 'Yes, continue', action: 'proceed' },
    { text: 'Wait, I have more info', action: 'wait' }
  ]
};
```

**Flow:**
1. Timer starts when assistant sends message
2. Timer resets on any user input
3. At 60 seconds, display timeout message with quick actions
4. If user clicks "Yes, continue" → Proceed to next state
5. If user clicks "Wait" → Reset timer, continue current state
6. If no response for additional 30 seconds → Auto-proceed

### Path 2: Clarification Complete

**Trigger:** User has answered all clarifying questions

**Logic:**
```javascript
const clarificationComplete = {
  action: 'transitionToUpsell',
  message: 'Great! I have everything I need. While the analysis is running, let me share some ways I can help you further...',
  nextState: 'UPSELL'
};
```

**Flow:**
1. System detects all questions answered
2. Display transition message
3. Begin blueprint generation in background
4. Present first upsell opportunity
5. Continue conversation while generation runs

### Path 3: Upsell Declined

**Trigger:** User declines all upsell opportunities

**Logic:**
```javascript
const upsellDeclined = {
  action: 'proceedToBlueprint',
  message: 'No problem! Let me finalize your blueprint...',
  nextState: 'BLUEPRINT_GENERATION'
};
```

**Flow:**
1. Track upsell responses
2. After 3 declines or explicit "no thanks"
3. Display transition message
4. Move to blueprint presentation
5. Skip remaining upsell opportunities

### Path 4: Immediate Blueprint Request

**Trigger:** User explicitly requests to skip to blueprint

**Logic:**
```javascript
const skipToBlueprint = {
  keywords: ['skip', 'just show me', 'blueprint now', 'no questions'],
  action: 'skipClarification',
  message: 'Understood! I\'ll generate your blueprint right away.',
  nextState: 'BLUEPRINT_GENERATION'
};
```

**Flow:**
1. Detect skip keywords in user message
2. Confirm skip action
3. Bypass clarification and upsell
4. Proceed directly to blueprint generation

### Path 5: Change Request After Blueprint

**Trigger:** User requests modifications to presented blueprint

**Logic:**
```javascript
const blueprintRevision = {
  action: 'regenerateBlueprint',
  message: 'I\'ll update the blueprint based on your feedback...',
  nextState: 'BLUEPRINT_GENERATION',
  preserveHistory: true
};
```

**Flow:**
1. Capture change request details
2. Add to conversation context
3. Return to BLUEPRINT_GENERATION state
4. Regenerate with modifications
5. Present updated blueprint

## State Transition Logic

### Transition Rules

```php
class Conversation_Manager {
    private function can_transition($from_state, $to_state) {
        $allowed_transitions = [
            'CLARIFICATION' => ['UPSELL', 'BLUEPRINT_GENERATION'],
            'UPSELL' => ['BLUEPRINT_GENERATION'],
            'BLUEPRINT_GENERATION' => ['BLUEPRINT_PRESENTATION', 'CLARIFICATION'],
            'BLUEPRINT_PRESENTATION' => ['COMPLETE', 'BLUEPRINT_GENERATION'],
            'COMPLETE' => []
        ];
        
        return in_array($to_state, $allowed_transitions[$from_state] ?? []);
    }
    
    private function transition_to($new_state) {
        if (!$this->can_transition($this->conversation_state, $new_state)) {
            throw new Exception("Invalid state transition");
        }
        
        $this->conversation_state = $new_state;
        $this->execute_state_entry_actions($new_state);
        $this->save_session();
    }
}
```

### State Entry Actions

**CLARIFICATION Entry:**
- Generate initial clarifying questions
- Start timeout timer
- Log state entry

**UPSELL Entry:**
- Prepare upsell messages
- Track upsell presentation
- Continue blueprint generation in background

**BLUEPRINT_GENERATION Entry:**
- Call AI service for blueprint generation
- Display progress indicators
- Set generation timeout

**BLUEPRINT_PRESENTATION Entry:**
- Format blueprint content
- Generate diagram
- Prepare download options

**COMPLETE Entry:**
- Log conversation completion
- Store analytics data
- Clean up session resources

## Timeout Handling

### Message-Level Timeouts

```javascript
class ChatInterface {
    startMessageTimeout() {
        this.clearMessageTimeout();
        
        this.timeoutId = setTimeout(() => {
            this.handleTimeout();
        }, 60000); // 60 seconds
    }
    
    clearMessageTimeout() {
        if (this.timeoutId) {
            clearTimeout(this.timeoutId);
            this.timeoutId = null;
        }
    }
    
    handleTimeout() {
        // Send timeout event to backend
        this.sendTimeoutEvent();
        
        // Display timeout message
        this.addMessage(
            "I haven't heard from you. Shall I continue with the information you've provided?",
            'assistant'
        );
        
        // Show quick action buttons
        this.addQuickActions([
            { text: 'Yes, continue', action: 'proceed' },
            { text: 'Wait, I have more info', action: 'wait' }
        ]);
    }
}
```

### Generation Timeouts

```php
class Conversation_Manager {
    private function generate_blueprint_with_timeout() {
        $timeout = 60; // seconds
        $start_time = time();
        
        try {
            $blueprint = $this->ai_service->generate_blueprint(
                $this->wizard_data,
                $this->message_history
            );
            
            if (time() - $start_time > $timeout) {
                throw new Exception('Blueprint generation timeout');
            }
            
            return $blueprint;
            
        } catch (Exception $e) {
            $this->handle_generation_failure($e);
            return $this->get_fallback_blueprint();
        }
    }
}
```

## Context Management

### Conversation Context

The system maintains context throughout the conversation:

```php
class Conversation_Session {
    public function get_context() {
        return [
            'wizard_data' => $this->wizard_data,
            'message_history' => $this->message_history,
            'clarifications' => $this->extract_clarifications(),
            'upsell_responses' => $this->upsell_responses,
            'user_preferences' => $this->user_preferences,
            'conversation_state' => $this->conversation_state
        ];
    }
    
    private function extract_clarifications() {
        $clarifications = [];
        
        foreach ($this->message_history as $message) {
            if ($message->sender === 'user' && 
                $this->conversation_state === 'CLARIFICATION') {
                $clarifications[] = $message->content;
            }
        }
        
        return $clarifications;
    }
}
```

### AI Prompt Context

```php
class AI_Service {
    private function build_conversation_prompt($session) {
        $context = $session->get_context();
        
        $prompt = "You are an AI workflow automation consultant.\n\n";
        $prompt .= "Original wizard submission:\n";
        $prompt .= "- Goal: {$context['wizard_data']['goal']}\n";
        $prompt .= "- Workflow: {$context['wizard_data']['workflow']}\n";
        $prompt .= "- Tools: {$context['wizard_data']['tools']}\n";
        $prompt .= "- Pain Points: {$context['wizard_data']['pain_points']}\n\n";
        
        if (!empty($context['clarifications'])) {
            $prompt .= "Additional clarifications:\n";
            foreach ($context['clarifications'] as $clarification) {
                $prompt .= "- {$clarification}\n";
            }
            $prompt .= "\n";
        }
        
        $prompt .= "Current conversation state: {$context['conversation_state']}\n";
        $prompt .= "Generate an appropriate response.\n";
        
        return $prompt;
    }
}
```

## Error Recovery Paths

### API Failure Recovery

```javascript
async function sendMessageWithRetry(message, maxRetries = 3) {
    let attempt = 0;
    
    while (attempt < maxRetries) {
        try {
            const response = await fetch('/wp-json/mgrnz/v1/chat-message', {
                method: 'POST',
                body: JSON.stringify({ message })
            });
            
            if (response.ok) {
                return await response.json();
            }
            
            throw new Error('API request failed');
            
        } catch (error) {
            attempt++;
            
            if (attempt >= maxRetries) {
                // Show error message to user
                chatInterface.addMessage(
                    "I'm having trouble connecting. Please try again in a moment.",
                    'assistant'
                );
                return null;
            }
            
            // Exponential backoff
            await new Promise(resolve => 
                setTimeout(resolve, Math.pow(2, attempt) * 1000)
            );
        }
    }
}
```

### Blueprint Generation Failure

```php
private function handle_generation_failure($exception) {
    // Log error
    error_log('Blueprint generation failed: ' . $exception->getMessage());
    
    // Notify admin
    $this->email_service->send_admin_notification(
        'Blueprint Generation Failure',
        $this->format_error_details($exception)
    );
    
    // Store for manual review
    $this->store_failed_request();
    
    // Return user-friendly message
    return [
        'success' => false,
        'message' => 'I encountered an issue generating your blueprint. Our team has been notified and will reach out within 24 hours with your custom blueprint.',
        'fallback_action' => 'manual_review',
        'quote_request_id' => $this->create_manual_quote_request()
    ];
}
```

## Best Practices

### 1. Always Maintain Context
- Store all user inputs in session
- Include conversation history in AI prompts
- Preserve context across state transitions

### 2. Handle Timeouts Gracefully
- Always provide clear timeout messages
- Offer quick action buttons for recovery
- Auto-proceed after extended inactivity

### 3. Natural Conversation Flow
- Use conversational language
- Avoid robotic responses
- Acknowledge user inputs explicitly

### 4. Error Recovery
- Implement retry logic for API failures
- Provide fallback options
- Never leave user in broken state

### 5. State Validation
- Validate state transitions
- Check prerequisites before transitions
- Log all state changes for debugging

## Debugging Conversation Flow

### Enable Debug Logging

```php
// In wp-config.php
define('MGRNZ_CONVERSATION_DEBUG', true);

// In Conversation_Manager
private function log_debug($message, $data = []) {
    if (defined('MGRNZ_CONVERSATION_DEBUG') && MGRNZ_CONVERSATION_DEBUG) {
        error_log(sprintf(
            '[Conversation Debug] %s: %s',
            $message,
            json_encode($data)
        ));
    }
}
```

### Monitor State Transitions

```javascript
// In chat-interface.js
if (window.MGRNZ_DEBUG) {
    console.log('State transition:', {
        from: oldState,
        to: newState,
        timestamp: new Date().toISOString(),
        context: conversationContext
    });
}
```

### Test Predetermined Paths

```php
// Test timeout path
$manager = new Conversation_Manager($session_id, $wizard_data);
$manager->simulate_timeout();

// Test skip path
$manager->process_user_response('skip to blueprint');

// Test error recovery
$manager->simulate_api_failure();
```

## Summary

The conversation flow system provides:
- Clear state machine with defined transitions
- Predetermined paths for common scenarios
- Timeout handling with user recovery options
- Context preservation throughout conversation
- Error recovery mechanisms
- Natural, conversational user experience

For implementation details, see:
- `mu-plugins/includes/class-conversation-manager.php`
- `themes/mgrnz-theme/assets/js/chat-interface.js`
- `themes/mgrnz-theme/assets/js/chat-api-integration.js`
