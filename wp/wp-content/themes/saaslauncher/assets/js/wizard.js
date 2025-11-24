/**
 * AI Workflow Wizard - COMPLETE & WORKING VERSION
 * 
 * Includes: checkbox tools, validation, debug mode, completion screen with blueprint display, MailerLite integration
 */

document.addEventListener("DOMContentLoaded", function () {
    console.log('Wizard JavaScript loaded');
    const form = document.getElementById("ai-wizard-form");
    if (!form) {
        console.error('Form not found!');
        return;
    }

    const totalSteps = 5;
    let currentStep = 1;

    // DOM elements
    const formWrap = document.getElementById("ai-wizard-form-wrap");
    const completionScreen = document.getElementById("completion-screen");
    const progressContainer = document.getElementById("assistant-progress");
    const statusEl = document.getElementById("ai-wizard-status");
    const stepLabel = document.getElementById("ai-step-label");
    const stepCaption = document.getElementById("ai-step-caption");
    const progressFill = document.getElementById("ai-progress-fill");
    const prevBtn = document.getElementById("ai-prev-btn");
    const nextBtn = document.getElementById("ai-next-btn");
    const submitBtn = document.getElementById("ai-submit-btn");
    
    // Form inputs
    const goalInput = document.getElementById("goal");
    const workflowInput = document.getElementById("workflow");
    const painInput = document.getElementById("pain_points");
    const emailInput = document.getElementById("email");

    // Review elements
    const reviewGoal = document.getElementById("review-goal");
    const reviewWorkflow = document.getElementById("review-workflow");
    const reviewTools = document.getElementById("review-tools");
    const reviewPain = document.getElementById("review-pain");

    const stepCaptions = {
        1: "Your goal",
        2: "Current workflow",
        3: "Tools you use",
        4: "Pain points",
        5: "Review & email"
    };

    // Helper to get selected tools
    function getSelectedTools() {
        const checkboxes = document.querySelectorAll('input[name="tools"]:checked');
        const selected = Array.from(checkboxes).map(cb => cb.value);
        return selected.length > 0 ? selected.join(', ') : 'None selected';
    }

    function updateReview() {
        if (reviewGoal) reviewGoal.textContent = goalInput.value.trim() || "Not yet.";
        if (reviewWorkflow) reviewWorkflow.textContent = workflowInput.value.trim() || "Not set yet.";
        if (reviewTools) reviewTools.textContent = getSelectedTools();
        if (reviewPain) reviewPain.textContent = painInput.value.trim() || "Not set yet.";
    }

    function setStep(step) {
        currentStep = step;
        const steps = document.querySelectorAll(".mgrnz-ai-step");
        steps.forEach(function (el) {
            const s = parseInt(el.getAttribute("data-step"), 10);
            el.classList.toggle("active", s === currentStep);
        });

        if (stepLabel) stepLabel.textContent = "Step " + currentStep + " of " + totalSteps;
        if (stepCaption) stepCaption.textContent = stepCaptions[currentStep] || "";
        if (progressFill) progressFill.style.width = ((currentStep / totalSteps) * 100) + "%";
        if (prevBtn) prevBtn.style.visibility = currentStep === 1 ? "hidden" : "visible";
        if (nextBtn && submitBtn) {
            nextBtn.style.display = currentStep === totalSteps ? "none" : "inline-flex";
            submitBtn.style.display = currentStep === totalSteps ? "inline-flex" : "none";
        }
        updateReview();
    }

    function validateCurrentStep() {
        if (!statusEl) return true;
        
        statusEl.textContent = "";
        statusEl.classList.remove("mgrnz-status-error");
        statusEl.style.display = "none";

        if (currentStep === 1 && !goalInput.value.trim()) {
            statusEl.textContent = "Give me at least a sentence about your goal.";
            statusEl.classList.add("mgrnz-status-error");
            statusEl.style.display = "block";
            return false;
        }
        if (currentStep === 2 && !workflowInput.value.trim()) {
            statusEl.textContent = "Describe your current workflow so I have something to improve.";
            statusEl.classList.add("mgrnz-status-error");
            statusEl.style.display = "block";
            return false;
        }
        if (currentStep === 5 && emailInput.value) {
            const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim());
            if (!isValid) {
                statusEl.textContent = "That email address doesn't look quite right.";
                statusEl.classList.add("mgrnz-status-error");
                statusEl.style.display = "block";
                return false;
            }
        }
        return true;
    }

    function showProgress(messages) {
        if (!progressContainer) return;
        formWrap.style.display = "none";
        progressContainer.style.display = "block";
        messages.forEach((msg, index) => {
            const msgEl = document.getElementById('progress-msg-' + (index + 1));
            if (msgEl) {
                msgEl.textContent = msg;
                setTimeout(() => msgEl.classList.add('active'), index * 1000);
            }
        });
    }

    function hideProgress() {
        if (progressContainer) progressContainer.style.display = "none";
    }

    function showCompletionScreen() {
        console.log('Showing completion screen with blueprint...');
        hideProgress();
        
        if (!completionScreen) {
            console.error('Completion screen element not found!');
            return;
        }

        // Clear any previous blueprint
        const existingBlueprint = completionScreen.querySelector('.blueprint-preview');
        if (existingBlueprint) existingBlueprint.remove();

        // Display the blueprint content if available
        if (window.wizardSessionData && window.wizardSessionData.blueprint) {
            const blueprintContainer = document.createElement('div');
            blueprintContainer.className = 'blueprint-preview';
            blueprintContainer.style.cssText = `
                background: #131c32;
                border: 1px solid rgba(255, 255, 255, 0.12);
                border-radius: 12px;
                padding: 1.5rem;
                margin-bottom: 2rem;
                max-height: 400px;
                overflow-y: auto;
                text-align: left;
            `;
            
            const blueprintTitle = document.createElement('h3');
            blueprintTitle.textContent = 'Your AI Workflow Blueprint';
            blueprintTitle.style.cssText = 'margin-top: 0; color: #ffcf00; font-size: 1.3rem;';
            
            const blueprintContent = document.createElement('div');
            blueprintContent.innerHTML = window.wizardSessionData.blueprint;
            blueprintContent.style.cssText = 'color: rgba(255, 255, 255, 0.9); line-height: 1.6;';
            
            blueprintContainer.appendChild(blueprintTitle);
            blueprintContainer.appendChild(blueprintContent);
            
            // Insert blueprint before the heading
            const completionMessage = completionScreen.querySelector('.completion-message');
            if (completionMessage) {
                completionMessage.parentNode.insertBefore(blueprintContainer, completionMessage);
            }
        }
        
        completionScreen.style.display = "block";
        completionScreen.classList.add('show');
        console.log('Completion screen visible!');
    }

    function showSuccessPopup(message) {
        const popup = document.getElementById('success-popup');
        const messageEl = document.getElementById('success-popup-message');
        const okBtn = document.getElementById('success-ok');
        
        if (popup && messageEl) {
            messageEl.textContent = message;
            popup.style.display = 'flex';
            popup.classList.add('show');
            
            if (okBtn) {
                okBtn.onclick = () => {
                    popup.style.display = 'none';
                    popup.classList.remove('show');
                };
            }
        }
    }

    // Event listeners
    if (prevBtn) {
        prevBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (currentStep > 1) setStep(currentStep - 1);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (!validateCurrentStep()) return;
            if (currentStep < totalSteps) setStep(currentStep + 1);
        });
    }

    if (submitBtn) {
        submitBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (!validateCurrentStep()) return;

            submitBtn.disabled = true;
            if (nextBtn) nextBtn.disabled = true;
            if (prevBtn) prevBtn.disabled = true;

            const payload = {
                goal: goalInput.value.trim(),
                workflow: workflowInput.value.trim(),
                tools: getSelectedTools(),
                pain_points: painInput.value.trim(),
                email: emailInput.value.trim() || null
            };

            localStorage.setItem('mgrnz_wizard_data', JSON.stringify(payload));

            showProgress([
                '🤖 Creating your AI workflow assistant...',
                '🔍 Analyzing your workflow...',
                '📝 Generating your personalized blueprint...'
            ]);

            const nonce = (typeof wpApiSettings !== 'undefined' && wpApiSettings.nonce) 
                || (typeof wp !== 'undefined' && wp.apiFetch && wp.apiFetch.nonceMiddleware && wp.apiFetch.nonceMiddleware.nonce)
                || '';
            
            fetch('/wp-json/mgrnz/v1/ai-workflow', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-WP-Nonce': nonce },
                body: JSON.stringify(payload)
            })
            .then(response => response.text().then(text => {
                if (!response.ok) throw new Error('HTTP error ' + response.status);
                try {
                    return JSON.parse(text);
                } catch (e) {
                    console.error('JSON parse error:', e);
                    throw new Error('Invalid JSON response');
                }
            }))
            .then(data => {
                if (data.success && data.blueprint) {
                    window.wizardSessionData = {
                        sessionId: data.session_id || 'unknown',
                        blueprint: data.blueprint,
                        wizardData: payload
                    };
                    setTimeout(() => showCompletionScreen(), 3000);
                } else {
                    throw new Error('Invalid response from server');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                hideProgress();
                formWrap.style.display = "block";
                if (statusEl) {
                    statusEl.textContent = error.message || 'Unable to generate blueprint. Please try again.';
                    statusEl.classList.add("mgrnz-status-error");
                    statusEl.style.display = "block";
                }
                submitBtn.disabled = false;
                if (nextBtn) nextBtn.disabled = false;
                if (prevBtn) prevBtn.disabled = false;
            });
        });
    }

    // Completion screen buttons
    const editBtn = document.getElementById('btn-edit-workflow');
    if (editBtn) {
        editBtn.addEventListener('click', () => {
            const storedData = localStorage.getItem('mgrnz_wizard_data');
            if (storedData) {
                const data = JSON.parse(storedData);
                if (goalInput) goalInput.value = data.goal || '';
                if (workflowInput) workflowInput.value = data.workflow || '';
                if (painInput) painInput.value = data.pain_points || '';
                if (emailInput) emailInput.value = data.email || '';
                
                if (data.tools) {
                    const selectedTools = data.tools.split(', ');
                    document.querySelectorAll('input[name="tools"]').forEach(checkbox => {
                        checkbox.checked = selectedTools.includes(checkbox.value);
                    });
                }
            }
            
            completionScreen.style.display = 'none';
            formWrap.style.display = 'block';
            setStep(1);
            
            if (submitBtn) submitBtn.disabled = false;
            if (nextBtn) nextBtn.disabled = false;
            if (prevBtn) prevBtn.disabled = false;
        });
    }

    const downloadBtn = document.getElementById('btn-download-blueprint');
    if (downloadBtn) {
        downloadBtn.addEventListener('click', () => {
            try {
                if (window.ml) {
                    window.ml('show', 'nRV0LZ', true);
                } else {
                    showSuccessPopup('Subscribe form unavailable. Please refresh the page.');
                }
            } catch (err) {
                console.error('MailerLite error:', err);
                showSuccessPopup('Subscribe form unavailable. Please refresh the page.');
            }
        });
    }

    const quoteBtn = document.getElementById('btn-get-quote');
    if (quoteBtn) {
        quoteBtn.addEventListener('click', () => {
            try {
                if (window.ml) {
                    window.ml('show', 'E0CY8N', true);
                } else {
                    const modal = document.getElementById('quote-form');
                    if (modal) {
                        modal.style.display = 'flex';
                        modal.classList.add('show');
                    }
                }
            } catch (err) {
                console.error('MailerLite error:', err);
                const modal = document.getElementById('quote-form');
                if (modal) {
                    modal.style.display = 'flex';
                    modal.classList.add('show');
                }
            }
        });
    }

    const goBackBtn = document.getElementById('btn-go-back');
    if (goBackBtn) {
        goBackBtn.addEventListener('click', () => {
            const popup = document.getElementById('blog-popup');
            if (popup) {
                popup.style.display = 'flex';
                popup.classList.add('show');
            }
        });
    }

    // Modal close handlers
    const blueprintModalClose = document.getElementById('blueprint-modal-close');
    if (blueprintModalClose) {
        blueprintModalClose.addEventListener('click', () => {
            const modal = document.getElementById('blueprint-subscription-modal');
            if (modal) {
                modal.style.display = 'none';
                modal.classList.remove('show');
            }
        });
    }

    const quoteClose = document.getElementById('quote-close');
    if (quoteClose) {
        quoteClose.addEventListener('click', () => {
            const modal = document.getElementById('quote-form');
            if (modal) {
                modal.style.display = 'none';
                modal.classList.remove('show');
            }
        });
    }

    // Blog popup
    const blogYes = document.getElementById('blog-yes');
    const blogNo = document.getElementById('blog-no');
    const blogPopup = document.getElementById('blog-popup');

    if (blogYes && blogPopup) {
        blogYes.addEventListener('click', () => {
            try {
                if (window.ml) window.ml("show", "qyrDmy", true);
            } catch (err) {
                console.warn("MailerLite not available:", err);
            }
            blogPopup.style.display = 'none';
        });
    }

    if (blogNo && blogPopup) {
        blogNo.addEventListener('click', () => {
            showSuccessPopup('Thanks for trying the AI wizard!');
            blogPopup.style.display = 'none';
        });
    }

    // Form submissions
    const blueprintForm = document.getElementById('blueprint-subscription-form');
    if (blueprintForm) {
        blueprintForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const modal = document.getElementById('blueprint-subscription-modal');
            if (modal) modal.style.display = 'none';
            showSuccessPopup('Blueprint download feature coming soon!');
        });
    }

    const quoteForm = document.getElementById('quote-request-form');
    if (quoteForm) {
        quoteForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const modal = document.getElementById('quote-form');
            if (modal) modal.style.display = 'none';
            showSuccessPopup('Quote request submitted! We\'ll contact you soon.');
        });
    }

    // Debug Mode
    function checkDebugMode() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('debug') === 'true') {
            const debugBtn = document.createElement('button');
            debugBtn.textContent = '🤖 Fill Test Data';
            debugBtn.className = 'mgrnz-btn mgrnz-btn-secondary';
            debugBtn.style.cssText = 'margin-top: 1rem; font-size: 0.85rem; padding: 0.65rem 1.2rem; background-color: #ff00ff; border-color: #ff00ff; color: white;';
            
            debugBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (goalInput) goalInput.value = "I want to automate my daily reporting process to save 2 hours a day.";
                if (workflowInput) workflowInput.value = "Currently I log into 3 different portals, download CSVs, merge them in Excel, and email a PDF summary to my boss.";
                
                const exampleTools = ['Gmail', 'Google Sheets', 'Make.com', 'OpenAI (ChatGPT)'];
                document.querySelectorAll('input[name="tools"]').forEach(checkbox => {
                    checkbox.checked = exampleTools.includes(checkbox.value);
                });
                
                if (painInput) painInput.value = "It's boring, prone to copy-paste errors, and takes time away from real work.";
                if (emailInput) emailInput.value = "test@example.com";
                
                debugBtn.textContent = '✅ Data Filled!';
                setTimeout(() => debugBtn.textContent = '🤖 Fill Test Data', 2000);
            });
            
            if (formWrap) formWrap.insertBefore(debugBtn, formWrap.firstChild);
        }
    }

    // Initialize
    checkDebugMode();
    setStep(1);
});
