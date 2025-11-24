<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI Workflow Wizard</title>
  
  <!-- MailerLite Universal Script -->
  <script>
    (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
    .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
    n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
    (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
    ml('account', '1849787');
  </script>
  
  <style>
    /* ============================================
       MGRNZ AI Workflow Wizard - Complete Styles
       ============================================ */
    
    :root {
      --color-bg: #0f172a;
      --color-card: #0b0b0b;
      --color-border: #1f1f1f;
      --color-accent: #ff4f00;
      --color-text: #ffffff;
      --color-text-muted: #bbb;
      --color-text-dim: #666;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
      background: var(--color-bg);
      color: var(--color-text);
      line-height: 1.6;
      padding: 2rem 1rem;
    }
    
    .wizard-container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    /* Wizard Header */
    .wizard-header {
      text-align: center;
      margin-bottom: 2rem;
    }
    
    .wizard-header h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: var(--color-text);
    }
    
    .wizard-header p {
      font-size: 1.125rem;
      color: var(--color-text-muted);
    }
    
    /* Wizard Form */
    .wizard-form {
      background: var(--color-card);
      border: 1px solid var(--color-border);
      border-radius: 16px;
      padding: 2rem;
      margin-bottom: 2rem;
    }
    
    /* Progress Bar */
    .wizard-progress {
      margin-bottom: 2rem;
    }
    
    .wizard-progress-bar {
      height: 8px;
      background: var(--color-accent);
      border-radius: 4px;
      transition: width 0.3s ease;
      margin-bottom: 0.5rem;
    }
    
    .wizard-progress-text {
      text-align: center;
      color: var(--color-text-muted);
      font-size: 0.875rem;
    }
    
    /* Wizard Steps */
    .wizard-step {
      display: none;
    }
    
    .wizard-step.active {
      display: block;
      animation: fadeIn 0.3s ease;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .wizard-step h2 {
      color: var(--color-text);
      margin-bottom: 0.5rem;
      font-size: 1.5rem;
    }
    
    .wizard-step p {
      color: var(--color-text-muted);
      margin-bottom: 1.5rem;
    }
    
    .wizard-step textarea,
    .wizard-step input[type="email"] {
      width: 100%;
      padding: 1rem;
      background: #000;
      border: 1px solid var(--color-border);
      border-radius: 8px;
      color: var(--color-text);
      font-family: inherit;
      font-size: 1rem;
      resize: vertical;
      margin-bottom: 0.5rem;
    }
    
    .wizard-step textarea:focus,
    .wizard-step input[type="email"]:focus {
      outline: none;
      border-color: var(--color-accent);
    }
    
    .char-count {
      text-align: right;
      color: var(--color-text-dim);
      font-size: 0.875rem;
      margin-bottom: 1.5rem;
    }
    
    /* Tools Categories */
    .tools-category {
      margin-bottom: 2rem;
      padding: 1.5rem;
      background: rgba(255, 255, 255, 0.02);
      border: 1px solid var(--color-border);
      border-radius: 12px;
    }
    
    .category-title {
      color: var(--color-accent);
      font-size: 1.125rem;
      font-weight: 600;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    
    /* Checkbox Group */
    .checkbox-group {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 0.75rem;
      margin-bottom: 0;
    }
    
    .checkbox-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.75rem 1rem;
      background: #000;
      border: 2px solid var(--color-border);
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.2s;
      user-select: none;
    }
    
    .checkbox-item:hover {
      border-color: var(--color-accent);
      background: #0a0a0a;
    }
    
    .checkbox-item input[type="checkbox"] {
      width: 20px;
      height: 20px;
      cursor: pointer;
      accent-color: var(--color-accent);
    }
    
    .checkbox-item span {
      color: var(--color-text);
      font-size: 0.9375rem;
    }
    
    .checkbox-item:has(input:checked) {
      border-color: var(--color-accent);
      background: rgba(255, 79, 0, 0.1);
    }
    
    /* Buttons */
    .wizard-buttons {
      display: flex;
      gap: 1rem;
      justify-content: space-between;
    }
    
    .btn {
      padding: 0.75rem 1.5rem;
      background: var(--color-accent);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s;
      font-size: 1rem;
    }
    
    .btn:hover {
      filter: brightness(1.1);
      transform: translateY(-1px);
    }
    
    .btn:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }
    
    .btn-secondary {
      background: transparent;
      border: 1px solid var(--color-border);
      color: var(--color-text);
    }
    
    .btn-secondary:hover {
      background: #1f1f1f;
    }
    
    /* Progress Animation */
    .progress-container {
      background: var(--color-card);
      border: 1px solid var(--color-border);
      border-radius: 16px;
      padding: 3rem 2rem;
      text-align: center;
      display: none;
      opacity: 0;
      transition: opacity 0.5s ease;
    }
    
    .progress-container.show {
      display: block;
      opacity: 1;
    }
    
    .progress-messages {
      margin-bottom: 2rem;
      min-height: 120px;
    }
    
    .progress-message {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.4s ease, transform 0.4s ease;
      margin: 1rem 0;
    }
    
    .progress-message.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    .progress-icon {
      font-size: 1.5rem;
      animation: pulse 2s ease-in-out infinite;
    }
    
    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.1); opacity: 0.8; }
    }
    
    .progress-text {
      color: var(--color-text);
      font-size: 1.125rem;
      font-weight: 500;
    }
    
    .progress-bar-container {
      width: 100%;
      height: 8px;
      background: #1f1f1f;
      border-radius: 4px;
      overflow: hidden;
      position: relative;
    }
    
    .progress-bar-fill {
      height: 100%;
      background: linear-gradient(90deg, var(--color-accent), #ff7a3d);
      border-radius: 4px;
      width: 0%;
      transition: width 0.6s ease;
      position: relative;
    }
    
    .progress-bar-fill::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      animation: shimmer 2s infinite;
    }
    
    @keyframes shimmer {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }
    
    /* Blueprint Section */
    .blueprint-section {
      background: var(--color-card);
      border: 1px solid var(--color-border);
      border-radius: 16px;
      padding: 2rem;
      display: none;
      opacity: 0;
      transition: opacity 0.5s ease;
    }
    
    .blueprint-section.show {
      display: block;
      opacity: 1;
    }
    
    .blueprint-header {
      text-align: center;
      margin-bottom: 2rem;
    }
    
    .blueprint-header h2 {
      color: var(--color-text);
      margin-bottom: 0.5rem;
    }
    
    .blueprint-content {
      color: var(--color-text);
      line-height: 1.7;
      margin-bottom: 2rem;
    }
    
    .blueprint-content h3 {
      color: var(--color-text);
      margin-top: 1.5rem;
      margin-bottom: 0.75rem;
    }
    
    .blueprint-content ul {
      margin-left: 1.5rem;
      margin-bottom: 1rem;
    }
    
    .blueprint-content li {
      margin-bottom: 0.5rem;
    }
    
    .blueprint-content strong {
      color: var(--color-accent);
    }
    
    /* Flow Diagram Styles */
    .flow-diagram {
      background: #000;
      border: 1px solid var(--color-border);
      border-radius: 12px;
      padding: 2rem;
      margin: 2rem 0;
      overflow-x: auto;
    }
    
    .flow-step {
      display: flex;
      align-items: center;
      margin: 1rem 0;
      gap: 1rem;
    }
    
    .flow-box {
      background: linear-gradient(135deg, #1f1f1f, #2a2a2a);
      border: 2px solid var(--color-accent);
      border-radius: 8px;
      padding: 1rem 1.5rem;
      min-width: 200px;
      text-align: center;
      position: relative;
    }
    
    .flow-box-title {
      font-weight: 600;
      color: var(--color-accent);
      font-size: 0.875rem;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
    }
    
    .flow-box-content {
      color: var(--color-text);
      font-size: 0.9375rem;
    }
    
    .flow-arrow {
      color: var(--color-accent);
      font-size: 2rem;
      flex-shrink: 0;
    }
    
    .flow-section {
      margin: 2rem 0;
    }
    
    .flow-section-title {
      color: var(--color-accent);
      font-size: 1.125rem;
      font-weight: 600;
      margin-bottom: 1rem;
      text-align: center;
    }
    
    @media (max-width: 768px) {
      .flow-step {
        flex-direction: column;
      }
      
      .flow-arrow {
        transform: rotate(90deg);
      }
      
      .flow-box {
        width: 100%;
      }
    }
    
    /* Completion Screen */
    .completion-screen {
      background: var(--color-card);
      border: 1px solid var(--color-border);
      border-radius: 16px;
      padding: 3rem 2rem;
      text-align: center;
      display: none;
      opacity: 0;
      transition: opacity 0.5s ease;
      margin-top: 2rem;
    }
    
    .completion-screen.show {
      display: block;
      opacity: 1;
    }
    
    .completion-message h2 {
      color: var(--color-text);
      font-size: 1.75rem;
      margin-bottom: 2rem;
      font-weight: 600;
    }
    
    .completion-action-buttons {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.25rem;
      max-width: 900px;
      margin: 0 auto;
    }
    
    .completion-action-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      padding: 1.25rem 1.5rem;
      font-size: 1rem;
      font-weight: 500;
      border: 2px solid var(--color-accent);
      background: transparent;
      color: var(--color-text);
      border-radius: 12px;
      cursor: pointer;
      transition: all 0.3s ease;
      min-height: 64px;
      position: relative;
      overflow: hidden;
    }
    
    .completion-action-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 100%;
      background: var(--color-accent);
      transition: width 0.3s ease;
      z-index: 0;
    }
    
    .completion-action-btn:hover::before {
      width: 100%;
    }
    
    .completion-action-btn:hover {
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 79, 0, 0.3);
    }
    
    .completion-action-btn .btn-icon,
    .completion-action-btn .btn-text {
      position: relative;
      z-index: 1;
    }
    
    .completion-action-btn .btn-icon {
      font-size: 1.5rem;
    }
    
    /* Modal Overlay */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.75);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 10000;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .modal-overlay.show {
      display: flex;
      opacity: 1;
    }
    
    .modal-content {
      background: var(--color-card);
      border: 1px solid var(--color-border);
      border-radius: 16px;
      padding: 2.5rem;
      max-width: 500px;
      width: 90%;
      position: relative;
      transform: scale(0.9);
      transition: transform 0.3s ease;
    }
    
    .modal-overlay.show .modal-content {
      transform: scale(1);
    }
    
    .modal-close {
      position: absolute;
      top: 1rem;
      right: 1rem;
      background: transparent;
      border: none;
      font-size: 1.75rem;
      color: var(--color-text-dim);
      cursor: pointer;
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 4px;
      transition: all 0.2s;
    }
    
    .modal-close:hover {
      background: #1f1f1f;
      color: var(--color-text);
    }
    
    .modal-content h3 {
      color: var(--color-text);
      font-size: 1.5rem;
      margin-bottom: 0.75rem;
    }
    
    .modal-content p {
      color: var(--color-text-muted);
      margin-bottom: 1.5rem;
    }
    
    .modal-content input,
    .modal-content textarea {
      width: 100%;
      padding: 0.875rem 1rem;
      background: #000;
      border: 1px solid var(--color-border);
      border-radius: 8px;
      color: var(--color-text);
      font-family: inherit;
      font-size: 1rem;
      margin-bottom: 1rem;
    }
    
    .modal-content input:focus,
    .modal-content textarea:focus {
      outline: none;
      border-color: var(--color-accent);
    }
    
    .modal-content textarea {
      resize: vertical;
      min-height: 100px;
    }
    
    /* MailerLite Form Block */
    #workflow-quote-form {
      background: var(--color-card);
      border: 1px solid var(--color-border);
      border-radius: 16px;
      padding: 2rem;
      margin-top: 2rem;
      display: none;
      opacity: 0;
      transition: opacity 0.5s ease;
    }
    
    #workflow-quote-form.show {
      display: block;
      opacity: 1;
    }
    
    #workflow-quote-form h3 {
      color: var(--color-text);
      margin-bottom: 1rem;
      text-align: center;
    }
    
    /* Mobile Responsive */
    @media (max-width: 768px) {
      body {
        padding: 1rem 0.5rem;
      }
      
      .wizard-header h1 {
        font-size: 1.75rem;
      }
      
      .wizard-form {
        padding: 1.5rem;
      }
      
      .wizard-buttons {
        flex-direction: column;
      }
      
      .checkbox-group {
        grid-template-columns: 1fr;
      }
      
      .tools-category {
        padding: 1rem;
      }
      
      .category-title {
        font-size: 1rem;
      }
      
      .completion-action-buttons {
        grid-template-columns: 1fr;
      }
      
      .modal-content {
        padding: 2rem 1.5rem;
        width: 95%;
      }
    }
  </style>
</head>
<body>
  <div class="wizard-container">
    <!-- Wizard Header -->
    <header class="wizard-header">
      <h1>AI Workflow Wizard</h1>
      <p>Let's build your personalized AI workflow in 5 simple steps</p>
      <div id="debug-button-container"></div>
    </header>

    <!-- Wizard Form -->
    <form class="wizard-form" id="wizard-form">
      <!-- Progress Indicator -->
      <div class="wizard-progress">
        <div class="wizard-progress-bar" id="progress-bar" style="width: 20%;"></div>
        <div class="wizard-progress-text">Step <span id="current-step">1</span> of 5</div>
      </div>

      <!-- Step 1: Goal -->
      <div class="wizard-step active" data-step="1">
        <h2>What's your main goal?</h2>
        <p>Tell us what you're trying to achieve with AI in your workflow.</p>
        <textarea 
          id="goal" 
          name="goal" 
          rows="4" 
          maxlength="500" 
          placeholder="Example: I want to automate my customer support responses and reduce response time from hours to minutes."
          required
        ></textarea>
        <div class="char-count"><span id="goal-count">0</span>/500</div>
        <button type="button" class="btn wizard-next">Next →</button>
      </div>

      <!-- Step 2: Current Workflow -->
      <div class="wizard-step" data-step="2">
        <h2>Describe your current workflow</h2>
        <p>How do you currently handle this process? What tools do you use?</p>
        <textarea 
          id="workflow" 
          name="workflow" 
          rows="6" 
          maxlength="2000" 
          placeholder="Example: Currently, I manually check emails every hour, copy questions into a spreadsheet, research answers, and type responses. It takes 3-4 hours daily."
          required
        ></textarea>
        <div class="char-count"><span id="workflow-count">0</span>/2000</div>
        <div class="wizard-buttons">
          <button type="button" class="btn-secondary btn wizard-back">← Back</button>
          <button type="button" class="btn wizard-next">Next →</button>
        </div>
      </div>

      <!-- Step 3: Tools -->
      <div class="wizard-step" data-step="3">
        <h2>What tools are you currently using?</h2>
        <p>Select all that apply from each category.</p>
        
        <!-- Operating Systems -->
        <div class="tools-category">
          <h3 class="category-title">💻 Operating Systems</h3>
          <div class="checkbox-group">
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Windows" />
              <span>Windows</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="macOS" />
              <span>macOS</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Linux/Unix" />
              <span>Linux/Unix</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Android" />
              <span>Android</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="iOS" />
              <span>iOS</span>
            </label>
          </div>
        </div>

        <!-- Office Tools -->
        <div class="tools-category">
          <h3 class="category-title">📄 Office & Productivity</h3>
          <div class="checkbox-group">
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Google Workspace" />
              <span>Google Workspace</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Microsoft 365" />
              <span>Microsoft 365</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="LibreOffice" />
              <span>LibreOffice</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Notion" />
              <span>Notion</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Slack" />
              <span>Slack</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Microsoft Teams" />
              <span>Microsoft Teams</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Zoom" />
              <span>Zoom</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Asana" />
              <span>Asana</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Trello" />
              <span>Trello</span>
            </label>
          </div>
        </div>

        <!-- Marketing Tools -->
        <div class="tools-category">
          <h3 class="category-title">📧 Marketing & Email</h3>
          <div class="checkbox-group">
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="ActiveCampaign" />
              <span>ActiveCampaign</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="HubSpot Marketing" />
              <span>HubSpot Marketing</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Salesforce Marketing Cloud" />
              <span>Salesforce Marketing Cloud</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="MailChimp" />
              <span>MailChimp</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Monday.com" />
              <span>Monday.com</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Outlook" />
              <span>Outlook</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Gmail" />
              <span>Gmail</span>
            </label>
          </div>
        </div>

        <!-- CRM Tools -->
        <div class="tools-category">
          <h3 class="category-title">🤝 CRM & Sales</h3>
          <div class="checkbox-group">
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Salesforce CRM" />
              <span>Salesforce CRM</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="HubSpot CRM" />
              <span>HubSpot CRM</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Pipedrive" />
              <span>Pipedrive</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Monday CRM" />
              <span>Monday CRM</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Zoho CRM" />
              <span>Zoho CRM</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Zendesk" />
              <span>Zendesk</span>
            </label>
          </div>
        </div>

        <!-- Integration Tools -->
        <div class="tools-category">
          <h3 class="category-title">🔗 Integration & Automation</h3>
          <div class="checkbox-group">
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Make.com (Integromat)" />
              <span>Make.com</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="n8n" />
              <span>n8n</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Power Automate" />
              <span>Power Automate</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="Zapier" />
              <span>Zapier</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" name="tools" value="IFTTT" />
              <span>IFTTT</span>
            </label>
          </div>
        </div>

        <!-- Other Tools -->
        <div style="margin-top: 1.5rem;">
          <label for="tools-other" style="display: block; color: var(--color-text-muted); margin-bottom: 0.5rem; font-size: 0.9375rem;">
            Other tools (comma separated):
          </label>
          <input 
            type="text" 
            id="tools-other" 
            placeholder="e.g., Jira, Airtable, Custom Software"
            style="width: 100%; padding: 0.875rem 1rem; background: #000; border: 1px solid var(--color-border); border-radius: 8px; color: var(--color-text); font-family: inherit; font-size: 1rem;"
          />
        </div>
        <div class="wizard-buttons">
          <button type="button" class="btn-secondary btn wizard-back">← Back</button>
          <button type="button" class="btn wizard-next">Next →</button>
        </div>
      </div>

      <!-- Step 4: Pain Points -->
      <div class="wizard-step" data-step="4">
        <h2>What are your biggest pain points?</h2>
        <p>What frustrates you most about your current process?</p>
        <textarea 
          id="pain_points" 
          name="pain_points" 
          rows="5" 
          maxlength="1000" 
          placeholder="Example: It's time-consuming, repetitive, and I often miss urgent requests. I can't scale this as we grow."
          required
        ></textarea>
        <div class="char-count"><span id="pain-count">0</span>/1000</div>
        <div class="wizard-buttons">
          <button type="button" class="btn-secondary btn wizard-back">← Back</button>
          <button type="button" class="btn wizard-next">Next →</button>
        </div>
      </div>

      <!-- Step 5: Email (Optional) -->
      <div class="wizard-step" data-step="5">
        <h2>Get your personalized blueprint</h2>
        <p>We'll generate a custom AI workflow blueprint for you. Optionally, enter your email to receive a copy.</p>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="your@email.com (optional)"
          maxlength="254"
        />
        <div class="wizard-buttons">
          <button type="button" class="btn-secondary btn wizard-back">← Back</button>
          <button type="submit" class="btn wizard-submit">Build my AI workflow</button>
        </div>
      </div>
    </form>

    <!-- Progress Animation (Hidden Initially) -->
    <div class="progress-container" id="progress-animation">
      <div class="progress-messages" id="progress-messages"></div>
      <div class="progress-bar-container">
        <div class="progress-bar-fill" id="progress-fill"></div>
      </div>
    </div>

    <!-- Blueprint Section (Hidden Initially) -->
    <div class="blueprint-section" id="blueprint-section">
      <header class="blueprint-header">
        <h2>Your AI Workflow Blueprint</h2>
        <p>Here's your personalized plan to transform your workflow with AI.</p>
      </header>
      <div class="blueprint-content" id="blueprint-content">
        <!-- Blueprint will be inserted here -->
      </div>
    </div>

    <!-- Completion Screen (Hidden Initially) -->
    <div class="completion-screen" id="completion-screen">
      <div class="completion-message">
        <h2>What do you want to do next?</h2>
      </div>
      <div class="completion-action-buttons">
        <button class="completion-action-btn" id="btn-edit-workflow">
          <span class="btn-icon">✏️</span>
          <span class="btn-text">Edit my Workflow</span>
        </button>
        <button class="completion-action-btn" id="btn-download-blueprint">
          <span class="btn-icon">⬇️</span>
          <span class="btn-text">Download My Blueprint</span>
        </button>
        <a href="/quote-my-workflow" class="completion-action-btn">
          <span class="btn-icon">💰</span>
          <span class="btn-text">Get a Quote for this Workflow</span>
        </a>
        <button class="completion-action-btn" id="btn-go-back">
          <span class="btn-icon">↩️</span>
          <span class="btn-text">Go Back</span>
        </button>
      </div>
    </div>

    <!-- MailerLite Quote Form Block (Hidden Initially) -->
    <div id="workflow-quote-form">
      <h3>Request a Quote for Your AI Workflow</h3>
      <p style="text-align: center; color: var(--color-text-muted); margin-bottom: 2rem;">
        Fill out the form below and we'll send you a detailed quote within 24 hours
      </p>
      
      <!-- MailerLite Universal Form -->
      <div id="mlb2-33155148" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-33155148">
        <div class="ml-form-align-center">
          <div class="ml-form-embedWrapper embedForm">
            <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
              <div class="ml-form-embedContent">
                <h4>Get Your Custom Quote</h4>
                <p>We'll analyze your workflow and provide a detailed proposal</p>
              </div>
              <form class="ml-block-form" action="https://assets.mailerlite.com/jsonp/XXXXX/forms/XXXXX/subscribe" data-code="" method="post" target="_blank">
                <div class="ml-form-formContent">
                  <div class="ml-form-fieldRow ml-last-item">
                    <div class="ml-field-group ml-field-name">
                      <input aria-label="name" type="text" class="form-control" data-inputmask="" name="fields[name]" placeholder="Name" autocomplete="name" required>
                    </div>
                  </div>
                  <div class="ml-form-fieldRow ml-last-item">
                    <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                      <input aria-label="email" aria-required="true" type="email" class="form-control" data-inputmask="" name="fields[email]" placeholder="Email" autocomplete="email" required>
                    </div>
                  </div>
                  <div class="ml-form-fieldRow ml-last-item">
                    <div class="ml-field-group ml-field-phone">
                      <input aria-label="phone" type="text" class="form-control" data-inputmask="" name="fields[phone]" placeholder="Phone (optional)" autocomplete="tel">
                    </div>
                  </div>
                  <div class="ml-form-fieldRow ml-last-item">
                    <div class="ml-field-group ml-field-company">
                      <input aria-label="company" type="text" class="form-control" data-inputmask="" name="fields[company]" placeholder="Company (optional)" autocomplete="organization">
                    </div>
                  </div>
                </div>
                <div class="ml-form-embedSubmit">
                  <button type="submit" class="primary">Request Quote</button>
                  <button disabled="disabled" style="display:none" type="button" class="loading"> <div class="ml-form-embedSubmitLoad"></div> <span class="sr-only">Loading...</span> </button>
                </div>
                <input type="hidden" name="ml-submit" value="1">
              </form>
            </div>
            <div class="ml-form-successBody row-success" style="display:none">
              <div class="ml-form-successContent">
                <h4>Thank you!</h4>
                <p>We've received your request and will send you a detailed quote within 24 hours.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- MailerLite Form Styling -->
      <style>
        #mlb2-33155148 * {
          box-sizing: border-box;
        }
        
        #mlb2-33155148 .ml-form-embedWrapper {
          max-width: 600px;
          margin: 0 auto;
        }
        
        #mlb2-33155148 .ml-form-embedBody {
          padding: 0;
        }
        
        #mlb2-33155148 .ml-form-embedContent h4 {
          color: var(--color-text);
          font-size: 1.5rem;
          margin-bottom: 0.5rem;
          text-align: center;
        }
        
        #mlb2-33155148 .ml-form-embedContent p {
          color: var(--color-text-muted);
          text-align: center;
          margin-bottom: 2rem;
        }
        
        #mlb2-33155148 .ml-form-fieldRow {
          margin-bottom: 1.25rem;
        }
        
        #mlb2-33155148 .form-control {
          width: 100%;
          padding: 0.875rem 1rem;
          background: #000;
          border: 1px solid var(--color-border);
          border-radius: 8px;
          color: var(--color-text);
          font-family: inherit;
          font-size: 1rem;
          transition: border-color 0.2s;
        }
        
        #mlb2-33155148 .form-control:focus {
          outline: none;
          border-color: var(--color-accent);
        }
        
        #mlb2-33155148 .form-control::placeholder {
          color: var(--color-text-dim);
        }
        
        #mlb2-33155148 .ml-form-embedSubmit {
          text-align: center;
          margin-top: 1.5rem;
        }
        
        #mlb2-33155148 button.primary {
          width: 100%;
          padding: 0.875rem 1.5rem;
          background: var(--color-accent);
          color: #fff;
          border: none;
          border-radius: 8px;
          font-size: 1rem;
          font-weight: 600;
          cursor: pointer;
          transition: all 0.2s;
        }
        
        #mlb2-33155148 button.primary:hover {
          filter: brightness(1.1);
          transform: translateY(-1px);
        }
        
        #mlb2-33155148 button.primary:disabled {
          opacity: 0.5;
          cursor: not-allowed;
        }
        
        #mlb2-33155148 .ml-form-successContent {
          text-align: center;
          padding: 2rem;
        }
        
        #mlb2-33155148 .ml-form-successContent h4 {
          color: #4ade80;
          font-size: 1.75rem;
          margin-bottom: 1rem;
        }
        
        #mlb2-33155148 .ml-form-successContent p {
          color: var(--color-text);
          font-size: 1.125rem;
        }
        
        #mlb2-33155148 .loading {
          display: inline-block;
        }
        
        #mlb2-33155148 .ml-form-embedSubmitLoad {
          display: inline-block;
          width: 20px;
          height: 20px;
          border: 3px solid rgba(255, 255, 255, 0.3);
          border-radius: 50%;
          border-top-color: white;
          animation: spin 0.8s linear infinite;
        }
        
        @keyframes spin {
          to { transform: rotate(360deg); }
        }
      </style>
      
      <!-- MailerLite Universal Script -->
      <script>
        (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
        .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
        n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
        (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
        ml('account', '1052498'); // Replace with your MailerLite account ID
      </script>
      
      <p style="text-align: center; color: var(--color-text-dim); font-size: 0.875rem; margin-top: 2rem;">
        <strong>Note:</strong> Replace the form action URL and account ID with your actual MailerLite credentials
      </p>
    </div>

    <!-- Quote Modal (Alternative to MailerLite) -->
    <div class="modal-overlay" id="quote-modal">
      <div class="modal-content">
        <button class="modal-close" id="quote-close">&times;</button>
        <h3>Request a Quote</h3>
        <p>We'll send you a detailed quote within 24 hours</p>
        <form id="quote-form">
          <input type="text" id="quote-name" placeholder="Name" required />
          <input type="email" id="quote-email" placeholder="Email" required />
          <input type="tel" id="quote-phone" placeholder="Phone (optional)" />
          <textarea id="quote-notes" placeholder="Additional notes" rows="4"></textarea>
          <button type="submit" class="btn">Request Quote</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    // ============================================
    // AI Workflow Wizard - Complete JavaScript
    // ============================================
    
    (function() {
      'use strict';
      
      // State
      let currentStep = 1;
      const totalSteps = 5;
      let wizardData = {};
      
      // Elements
      const form = document.getElementById('wizard-form');
      const progressBar = document.getElementById('progress-bar');
      const currentStepEl = document.getElementById('current-step');
      const steps = document.querySelectorAll('.wizard-step');
      const nextBtns = document.querySelectorAll('.wizard-next');
      const backBtns = document.querySelectorAll('.wizard-back');
      const submitBtn = document.querySelector('.wizard-submit');
      
      const progressAnimation = document.getElementById('progress-animation');
      const progressMessages = document.getElementById('progress-messages');
      const progressFill = document.getElementById('progress-fill');
      
      const blueprintSection = document.getElementById('blueprint-section');
      const blueprintContent = document.getElementById('blueprint-content');
      
      const completionScreen = document.getElementById('completion-screen');
      
      const quoteModal = document.getElementById('quote-modal');
      const quoteClose = document.getElementById('quote-close');
      const quoteForm = document.getElementById('quote-form');
      
      // Character counters
      const counters = [
        { field: 'goal', counter: 'goal-count' },
        { field: 'workflow', counter: 'workflow-count' },
        { field: 'pain_points', counter: 'pain-count' }
      ];
      
      counters.forEach(({ field, counter }) => {
        const textarea = document.getElementById(field);
        const counterEl = document.getElementById(counter);
        if (textarea && counterEl) {
          textarea.addEventListener('input', () => {
            counterEl.textContent = textarea.value.length;
          });
        }
      });
      
      // ============================================
      // Step Navigation
      // ============================================
      
      function setStep(step) {
        currentStep = step;
        
        steps.forEach(stepEl => {
          const stepNum = parseInt(stepEl.getAttribute('data-step'));
          stepEl.classList.toggle('active', stepNum === currentStep);
        });
        
        currentStepEl.textContent = currentStep;
        const progress = (currentStep / totalSteps) * 100;
        progressBar.style.width = progress + '%';
        
        // Scroll to top of wizard
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
      
      function validateCurrentStep() {
        if (currentStep === 1) {
          const goal = document.getElementById('goal').value.trim();
          if (!goal) {
            alert('Please tell us about your goal.');
            return false;
          }
        }
        if (currentStep === 2) {
          const workflow = document.getElementById('workflow').value.trim();
          if (!workflow) {
            alert('Please describe your current workflow.');
            return false;
          }
        }
        if (currentStep === 3) {
          const checkedBoxes = document.querySelectorAll('input[name="tools"]:checked');
          const otherTools = document.getElementById('tools-other').value.trim();
          if (checkedBoxes.length === 0 && !otherTools) {
            alert('Please select at least one tool or enter your own.');
            return false;
          }
        }
        if (currentStep === 5) {
          const email = document.getElementById('email').value.trim();
          if (email && !isValidEmail(email)) {
            alert('Please enter a valid email address.');
            return false;
          }
        }
        return true;
      }
      
      function getSelectedTools() {
        const checkedBoxes = document.querySelectorAll('input[name="tools"]:checked');
        const selected = Array.from(checkedBoxes).map(cb => cb.value);
        const otherTools = document.getElementById('tools-other').value.trim();
        
        if (otherTools) {
          const otherArray = otherTools.split(',').map(t => t.trim()).filter(t => t);
          selected.push(...otherArray);
        }
        
        return selected.join(', ');
      }
      
      function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      }
      
      // Next button handlers
      nextBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          if (!validateCurrentStep()) return;
          if (currentStep < totalSteps) {
            setStep(currentStep + 1);
          }
        });
      });
      
      // Back button handlers
      backBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          if (currentStep > 1) {
            setStep(currentStep - 1);
          }
        });
      });
      
      // ============================================
      // Form Submission
      // ============================================
      
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (!validateCurrentStep()) return;
        
        // Collect wizard data
        wizardData = {
          goal: document.getElementById('goal').value.trim(),
          workflow: document.getElementById('workflow').value.trim(),
          tools: getSelectedTools(),
          pain_points: document.getElementById('pain_points').value.trim(),
          email: document.getElementById('email').value.trim()
        };
        
        // Store in localStorage for edit functionality
        localStorage.setItem('mgrnz_wizard_data', JSON.stringify(wizardData));
        
        // Hide wizard form
        form.style.transition = 'opacity 0.3s ease';
        form.style.opacity = '0';
        setTimeout(() => {
          form.style.display = 'none';
          showProgressAnimation();
        }, 300);
      });
      
      // ============================================
      // Progress Animation
      // ============================================
      
      function showProgressAnimation() {
        progressAnimation.classList.add('show');
        
        const messages = [
          { icon: '🤖', text: 'Your AI Assistant is being created...' },
          { icon: '🔍', text: 'Analyzing your workflow...' },
          { icon: '📝', text: 'Generating your personalized blueprint...' }
        ];
        
        let messageIndex = 0;
        
        function showNextMessage() {
          if (messageIndex < messages.length) {
            const msg = messages[messageIndex];
            const messageEl = document.createElement('div');
            messageEl.className = 'progress-message';
            messageEl.innerHTML = `
              <span class="progress-icon">${msg.icon}</span>
              <span class="progress-text">${msg.text}</span>
            `;
            progressMessages.appendChild(messageEl);
            
            setTimeout(() => {
              messageEl.classList.add('active');
            }, 100);
            
            // Update progress bar
            const progress = ((messageIndex + 1) / messages.length) * 100;
            progressFill.style.width = progress + '%';
            
            messageIndex++;
            setTimeout(showNextMessage, 2000);
          } else {
            // Animation complete
            setTimeout(() => {
              hideProgressAnimation();
              showBlueprint();
            }, 1000);
          }
        }
        
        showNextMessage();
      }
      
      function hideProgressAnimation() {
        progressAnimation.style.opacity = '0';
        setTimeout(() => {
          progressAnimation.classList.remove('show');
          progressAnimation.style.opacity = '1';
        }, 500);
      }
      
      // ============================================
      // Blueprint Generation
      // ============================================
      
      function showBlueprint() {
        const blueprint = generateBlueprint(wizardData);
        blueprintContent.innerHTML = blueprint;
        
        blueprintSection.classList.add('show');
        blueprintSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        
        // Show completion screen after brief delay
        setTimeout(() => {
          showCompletionScreen();
        }, 1000);
      }
      
      function generateDataFlowDiagram(tools) {
        if (!tools || tools.length === 0) {
          return `
            <div class="flow-step">
              <div class="flow-box">
                <div class="flow-box-title">Current System</div>
                <div class="flow-box-content">Manual Process</div>
              </div>
              <div class="flow-arrow">→</div>
              <div class="flow-box">
                <div class="flow-box-title">AI Layer</div>
                <div class="flow-box-content">Automation Engine</div>
              </div>
              <div class="flow-arrow">→</div>
              <div class="flow-box">
                <div class="flow-box-title">Output</div>
                <div class="flow-box-content">Automated Results</div>
              </div>
            </div>
          `;
        }
        
        // Create sequential flow with actual tools
        let flowHtml = '';
        
        // Add each tool as a step in the flow
        tools.forEach((tool, index) => {
          const isLast = index === tools.length - 1;
          
          flowHtml += `
            <div class="flow-step">
              <div class="flow-box">
                <div class="flow-box-title">Step ${index + 1}</div>
                <div class="flow-box-content">${tool}</div>
              </div>
              ${!isLast ? '<div class="flow-arrow">→</div>' : ''}
              ${!isLast ? `
                <div class="flow-box" style="background: linear-gradient(135deg, #ff4f00, #ff7a3d); border-color: #fff;">
                  <div class="flow-box-title" style="color: #fff;">AI Processing</div>
                  <div class="flow-box-content" style="color: #fff;">Data Transform</div>
                </div>
                <div class="flow-arrow">→</div>
              ` : ''}
            </div>
          `;
        });
        
        // Add final output step
        flowHtml += `
          <div class="flow-step">
            <div class="flow-box" style="background: linear-gradient(135deg, #4ade80, #22c55e); border-color: #fff;">
              <div class="flow-box-title" style="color: #000;">Final Output</div>
              <div class="flow-box-content" style="color: #000;">Automated Result</div>
            </div>
          </div>
        `;
        
        return flowHtml;
      }
      
      function generateBlueprint(data) {
        // Extract tools as array
        const toolsList = data.tools.split(',').map(t => t.trim()).filter(t => t);
        const toolsHtml = toolsList.map(tool => `<li><strong>${tool}</strong></li>`).join('');
        
        return `
          <h3>🎯 Your Primary Objective</h3>
          <p style="font-size: 1.125rem; line-height: 1.8; margin-bottom: 1.5rem;">
            ${data.goal}
          </p>
          <p style="color: var(--color-text-muted); margin-bottom: 2rem;">
            This goal represents a significant opportunity for AI-powered transformation. By implementing 
            intelligent automation and workflow optimization, we can help you achieve measurable improvements 
            in efficiency, accuracy, and scalability.
          </p>
          
          <h3>� Current S tate Analysis</h3>
          <p style="font-size: 1.0625rem; line-height: 1.8; margin-bottom: 1rem;">
            <strong>Your Current Process:</strong><br>
            ${data.workflow}
          </p>
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>Key Observations:</strong>
          </p>
          <ul style="margin-bottom: 2rem;">
            <li>Your workflow involves multiple manual touchpoints that can be automated</li>
            <li>Time-consuming repetitive tasks are reducing your productivity</li>
            <li>Current process lacks scalability for future growth</li>
            <li>Manual data handling increases risk of errors and inconsistencies</li>
            <li>Opportunity to leverage AI for intelligent decision-making and routing</li>
          </ul>
          
          <h3>🛠️ Technology Stack & Integration Strategy</h3>
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>Your Current Tools:</strong>
          </p>
          <ul style="margin-bottom: 1.5rem;">
            ${toolsHtml || '<li>No specific tools mentioned</li>'}
          </ul>
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>Recommended Integration Approach:</strong>
          </p>
          <ul style="margin-bottom: 2rem;">
            <li><strong>API Connectivity:</strong> Establish secure connections between your existing tools to enable seamless data flow</li>
            <li><strong>Data Synchronization:</strong> Implement real-time or scheduled sync to keep all systems updated automatically</li>
            <li><strong>AI Orchestration Layer:</strong> Deploy intelligent middleware to coordinate actions across multiple platforms</li>
            <li><strong>Webhook Integration:</strong> Set up event-driven triggers to automate responses to specific actions</li>
            <li><strong>Custom Connectors:</strong> Build specialized integrations for tools without native API support</li>
            <li><strong>Monitoring Dashboard:</strong> Create centralized visibility into all automated workflows</li>
          </ul>
          
          <h3>💡 Addressing Your Pain Points</h3>
          <p style="font-size: 1.0625rem; line-height: 1.8; margin-bottom: 1rem;">
            <strong>Challenges You're Facing:</strong><br>
            ${data.pain_points}
          </p>
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>Our Proposed Solutions:</strong>
          </p>
          <ul style="margin-bottom: 2rem;">
            <li><strong>Intelligent Automation:</strong> Reduce manual work by 60-80% through AI-powered task automation and smart routing</li>
            <li><strong>Priority Management:</strong> Implement ML-based prioritization to ensure urgent items get immediate attention</li>
            <li><strong>Error Reduction:</strong> Eliminate human error with automated validation and quality checks</li>
            <li><strong>Scalable Architecture:</strong> Build systems that grow with your business without proportional cost increases</li>
            <li><strong>Real-time Insights:</strong> Deploy analytics dashboards for instant visibility into workflow performance</li>
            <li><strong>Continuous Learning:</strong> Leverage AI that improves over time based on patterns and outcomes</li>
            <li><strong>Time Savings:</strong> Free up 10-20 hours per week for high-value strategic work</li>
          </ul>
          
          <h3>📈 Expected Outcomes & Benefits</h3>
          <ul style="margin-bottom: 2rem;">
            <li><strong>Time Efficiency:</strong> Reduce processing time by 60-80% through intelligent automation</li>
            <li><strong>Cost Savings:</strong> Lower operational costs by minimizing manual labor and errors</li>
            <li><strong>Accuracy Improvement:</strong> Achieve 95%+ accuracy with AI-powered validation</li>
            <li><strong>Scalability:</strong> Handle 5-10x volume without proportional resource increases</li>
            <li><strong>Response Speed:</strong> Reduce turnaround time from hours to minutes or seconds</li>
            <li><strong>Employee Satisfaction:</strong> Free team from repetitive tasks to focus on meaningful work</li>
            <li><strong>Data Insights:</strong> Gain actionable intelligence from automated analytics</li>
            <li><strong>Competitive Advantage:</strong> Outpace competitors with faster, smarter operations</li>
          </ul>
          
          <h3>🚀 The D.R.I.V.E.™ Implementation Framework</h3>
          <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">
            We use our proven D.R.I.V.E.™ methodology to ensure your AI workflow transformation delivers measurable results and continuous improvement.
          </p>
          
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>D - Discover & Define (Weeks 1-2)</strong>
          </p>
          <ul style="margin-bottom: 1.5rem;">
            <li><strong>Assess Current State:</strong> Deep dive into your existing systems, processes, and workflows</li>
            <li><strong>Identify Pain Points:</strong> Pinpoint bottlenecks, inefficiencies, and areas of frustration</li>
            <li><strong>Assess Capabilities:</strong> Evaluate current tools, team skills, and resource gaps</li>
            <li><strong>Uncover Opportunities:</strong> Identify high-impact areas for AI automation and optimization</li>
            <li><strong>Define Strategy:</strong> Create a clear roadmap with measurable objectives and success metrics</li>
          </ul>
          
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>R - Ready & Resource (Weeks 3-4)</strong>
          </p>
          <ul style="margin-bottom: 1.5rem;">
            <li><strong>Technical Infrastructure:</strong> Set up domains, hosting, and integration architecture</li>
            <li><strong>Brand & Digital Assets:</strong> Prepare any necessary branding or interface elements</li>
            <li><strong>Identify Champions:</strong> Train and empower key team members (Superusers)</li>
            <li><strong>Resource Allocation:</strong> Organize financial, technological, and human resources</li>
            <li><strong>Prepare Data:</strong> Clean, structure, and prepare data for AI model training</li>
          </ul>
          
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>I - Ignite & Implement (Weeks 5-7)</strong>
          </p>
          <ul style="margin-bottom: 1.5rem;">
            <li><strong>Build & Develop:</strong> Create the automation workflows and AI integrations</li>
            <li><strong>Integration Testing:</strong> Connect all systems and ensure seamless data flow</li>
            <li><strong>Model Training:</strong> Train AI models on your specific data and use cases</li>
            <li><strong>Process Implementation:</strong> Deploy automated processes and workflows</li>
            <li><strong>Go-Live Preparation:</strong> Final testing and deployment readiness</li>
          </ul>
          
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>V - Validate & Value-Add (Weeks 8-9)</strong>
          </p>
          <ul style="margin-bottom: 1.5rem;">
            <li><strong>User Acceptance Testing:</strong> Validate with real users and gather feedback</li>
            <li><strong>Documentation:</strong> Create comprehensive guides and training materials</li>
            <li><strong>Monitor & Support:</strong> Track performance and provide immediate support</li>
            <li><strong>Change Management:</strong> Ensure smooth adoption across your organization</li>
            <li><strong>Initial Optimization:</strong> Make data-driven improvements based on early results</li>
          </ul>
          
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            <strong>E - Elevate & Evolve (Ongoing - The Level Up™ Engine)</strong>
          </p>
          <ul style="margin-bottom: 2rem;">
            <li><strong>Continuous Monitoring:</strong> Track KPIs and system health in real-time</li>
            <li><strong>Regular Updates:</strong> Implement improvements and new features</li>
            <li><strong>Analytics & Insights:</strong> Deep-dive analysis for strategic planning</li>
            <li><strong>Extended Scope:</strong> Identify and implement additional automation opportunities</li>
            <li><strong>Next Level Planning:</strong> Feed learnings into the next D.R.I.V.E. cycle for continuous ascent</li>
          </ul>
          
          <p style="color: var(--color-accent); font-size: 1.0625rem; margin-bottom: 2rem;">
            <strong>The D.R.I.V.E.™ framework is cyclical:</strong> Each cycle builds on the previous one, propelling your organization to higher levels of efficiency and capability. Like a rocket making staged ascents, we continuously elevate your operations.
          </p>
          
          <h3>💰 Investment & ROI</h3>
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            Based on similar implementations, clients typically see:
          </p>
          <ul style="margin-bottom: 2rem;">
            <li><strong>ROI Timeline:</strong> Break-even within 3-6 months of deployment</li>
            <li><strong>Time Savings:</strong> 10-20 hours per week freed up for strategic work</li>
            <li><strong>Cost Reduction:</strong> 40-60% decrease in operational costs</li>
            <li><strong>Revenue Impact:</strong> Ability to handle 3-5x more volume with same team</li>
            <li><strong>Error Reduction:</strong> 90%+ reduction in manual errors and rework</li>
          </ul>
          
          <h3>🚀 Your Next Steps</h3>
          <p style="color: var(--color-text-muted); margin-bottom: 1rem;">
            Ready to transform your workflow with AI? Here's how to move forward:
          </p>
          <ul style="margin-bottom: 2rem;">
            <li><strong>Review This Blueprint:</strong> Take time to review these recommendations and note any questions</li>
            <li><strong>Schedule a Consultation:</strong> Book a 30-minute call to discuss your specific needs and timeline</li>
            <li><strong>Get a Detailed Quote:</strong> Receive a customized proposal with exact pricing and deliverables</li>
            <li><strong>Start Your Pilot:</strong> Begin with a focused pilot project to prove value quickly</li>
            <li><strong>Scale Your Success:</strong> Expand automation to other workflows based on proven results</li>
          </ul>
          
          <p style="text-align: center; font-size: 1.125rem; color: var(--color-accent); margin-top: 2rem;">
            <strong>This blueprint is customized for your specific workflow. Let's discuss how to bring it to life.</strong>
          </p>
        `;
      }
      
      // ============================================
      // Completion Screen
      // ============================================
      
      function showCompletionScreen() {
        completionScreen.classList.add('show');
        completionScreen.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
      
      // Button 1: Edit my Workflow
      document.getElementById('btn-edit-workflow').addEventListener('click', () => {
        // Hide completion screen and blueprint
        completionScreen.classList.remove('show');
        blueprintSection.classList.remove('show');
        
        // Reload wizard with stored data
        const storedData = JSON.parse(localStorage.getItem('mgrnz_wizard_data') || '{}');
        if (storedData.goal) document.getElementById('goal').value = storedData.goal;
        if (storedData.workflow) document.getElementById('workflow').value = storedData.workflow;
        
        // Restore tools checkboxes
        if (storedData.tools) {
          const toolsArray = storedData.tools.split(',').map(t => t.trim());
          const checkboxes = document.querySelectorAll('input[name="tools"]');
          checkboxes.forEach(cb => {
            cb.checked = toolsArray.includes(cb.value);
          });
        }
        
        if (storedData.pain_points) document.getElementById('pain_points').value = storedData.pain_points;
        if (storedData.email) document.getElementById('email').value = storedData.email;
        
        // Show wizard form
        form.style.display = 'block';
        form.style.opacity = '1';
        setStep(1);
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
      
      // Button 2: Download My Blueprint - Open subscribe page in new tab
      document.getElementById('btn-download-blueprint').addEventListener('click', () => {
        // Save blueprint HTML to localStorage so it can be downloaded as PDF after subscription
        const blueprintHTML = blueprintContent.innerHTML;
        localStorage.setItem('mgrnz_blueprint_download', blueprintHTML);
        
        // Open subscribe page in new tab
        window.open('/wizard-subscribe-page', '_blank');
      });
      
      // Button 3: Get a Quote - Simple link, no JavaScript
      
      // Button 4: Go Back
      document.getElementById('btn-go-back').addEventListener('click', () => {
        blueprintSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
      
      // ============================================
      // Quote Modal Handlers
      // ============================================
      
      quoteClose.addEventListener('click', () => {
        quoteModal.classList.remove('show');
      });
      
      quoteModal.addEventListener('click', (e) => {
        if (e.target === quoteModal) {
          quoteModal.classList.remove('show');
        }
      });
      
      quoteForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const name = document.getElementById('quote-name').value.trim();
        const email = document.getElementById('quote-email').value.trim();
        const phone = document.getElementById('quote-phone').value.trim();
        const notes = document.getElementById('quote-notes').value.trim();
        
        if (!name || !email) {
          alert('Please fill in all required fields.');
          return;
        }
        
        if (!isValidEmail(email)) {
          alert('Please enter a valid email address.');
          return;
        }
        
        // Here you would normally send this to your backend
        console.log('Quote request:', { name, email, phone, notes, wizardData });
        
        alert('Thank you! We\'ll send you a quote within 24 hours.');
        quoteModal.classList.remove('show');
        quoteForm.reset();
      });
      
      // Debug Mode: Fill Test Data
      function checkDebugMode() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('debug') === 'true') {
          const container = document.getElementById('debug-button-container');
          if (container) {
            const debugBtn = document.createElement('button');
            debugBtn.textContent = '🤖 Fill Test Data';
            debugBtn.className = 'btn-secondary btn';
            debugBtn.style.cssText = 'margin-top: 1rem; font-size: 0.875rem; padding: 0.65rem 1.2rem;';
            
            debugBtn.addEventListener('click', (e) => {
              e.preventDefault();
              
              // Fill text fields
              document.getElementById('goal').value = "I want to automate my daily reporting process to save 2 hours a day.";
              document.getElementById('workflow').value = "Currently I log into 3 different portals, download CSVs, merge them in Excel, and email a PDF summary to my boss.";
              document.getElementById('pain_points').value = "It's boring, prone to copy-paste errors, and takes time away from real work.";
              document.getElementById('email').value = "test@example.com";
              
              // Check some tools
              const toolsToCheck = ['Windows', 'Google Workspace', 'Gmail', 'Salesforce CRM', 'Make.com (Integromat)'];
              document.querySelectorAll('input[name="tools"]').forEach(checkbox => {
                if (toolsToCheck.includes(checkbox.value)) {
                  checkbox.checked = true;
                }
              });
              
              // Add other tools
              const otherTools = document.getElementById('tools-other');
              if (otherTools) {
                otherTools.value = 'Jira, Airtable';
              }
              
              debugBtn.textContent = '✅ Data Filled!';
              setTimeout(() => debugBtn.textContent = '🤖 Fill Test Data', 2000);
            });
            
            container.appendChild(debugBtn);
          }
        }
      }
      
      // Initialize
      checkDebugMode();
      setStep(1);
      
    })();
  </script>
</body>
</html>
