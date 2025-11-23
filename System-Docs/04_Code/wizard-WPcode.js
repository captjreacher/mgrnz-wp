document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("ai-wizard-form");
  if (!form) return; // not on this page

  const totalSteps = 5;
  let currentStep = 1;

  const formWrap = document.getElementById("ai-wizard-form-wrap");
  const blueprintWrap = document.getElementById("ai-wizard-blueprint-wrap");

  const statusEl = document.getElementById("ai-wizard-status");
  const decisionStatusEl = document.getElementById("ai-wizard-decision-status");
  const stepLabel = document.getElementById("ai-step-label");
  const stepCaption = document.getElementById("ai-step-caption");
  const progressFill = document.getElementById("ai-progress-fill");

  const prevBtn = document.getElementById("ai-prev-btn");
  const nextBtn = document.getElementById("ai-next-btn");
  const submitBtn = document.getElementById("ai-submit-btn");

  const summaryEl = document.getElementById("ai-wizard-summary");
  const markdownEl = document.getElementById("ai-wizard-blueprint-markdown");
  const subscribeBtn = document.getElementById("ai-wizard-subscribe");
  const consultBtn = document.getElementById("ai-wizard-consult");

  const goalInput = document.getElementById("goal");
  const workflowInput = document.getElementById("workflow");
  const toolsInput = document.getElementById("tools");
  const painInput = document.getElementById("pain_points");
  const emailInput = document.getElementById("email");

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

  function updateReview() {
    if (reviewGoal) reviewGoal.textContent = goalInput.value.trim() || "Not set yet.";
    if (reviewWorkflow) reviewWorkflow.textContent = workflowInput.value.trim() || "Not set yet.";
    if (reviewTools) reviewTools.textContent = toolsInput.value.trim() || "Not set yet.";
    if (reviewPain) reviewPain.textContent = painInput.value.trim() || "Not set yet.";
  }

  function setStep(step) {
    currentStep = step;

    const steps = document.querySelectorAll(".mgrnz-ai-step");
    steps.forEach(function (el) {
      const s = parseInt(el.getAttribute("data-step"), 10);
      el.classList.toggle("active", s === currentStep);
    });

    if (stepLabel) {
      stepLabel.textContent = "Step " + currentStep + " of " + totalSteps;
    }

    if (stepCaption) {
      stepCaption.textContent = stepCaptions[currentStep] || "";
    }

    if (progressFill) {
      const progress = (currentStep / totalSteps) * 100;
      progressFill.style.width = progress + "%";
    }

    if (prevBtn) {
      prevBtn.style.visibility = currentStep === 1 ? "hidden" : "visible";
    }
    if (nextBtn && submitBtn) {
      nextBtn.style.display = currentStep === totalSteps ? "none" : "inline-flex";
      submitBtn.style.display = currentStep === totalSteps ? "inline-flex" : "none";
    }

    // keep review panel updated as they move
    updateReview();
  }

  function validateCurrentStep() {
    if (!statusEl) return true;

    statusEl.textContent = "";
    statusEl.classList.remove("mgrnz-status-error");

    if (currentStep === 1 && !goalInput.value.trim()) {
      statusEl.textContent = "Give me at least a sentence about your goal.";
      statusEl.classList.add("mgrnz-status-error");
      return false;
    }

    if (currentStep === 2 && !workflowInput.value.trim()) {
      statusEl.textContent =
        "Describe your current workflow so I have something to improve.";
      statusEl.classList.add("mgrnz-status-error");
      return false;
    }

    if (currentStep === 5 && emailInput.value) {
      const val = emailInput.value.trim();
      const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);
      if (!isValid) {
        statusEl.textContent = "That email address doesn't look quite right.";
        statusEl.classList.add("mgrnz-status-error");
        return false;
      }
    }

    return true;
  }

  function buildLocalBlueprint(payload) {
    const parts = [];

    if (payload.goal) {
      parts.push("### 1. Goal\n" + payload.goal);
    } else {
      parts.push("### 1. Goal\nWe’ll clarify this together on a quick call.");
    }

    if (payload.workflow) {
      parts.push("### 2. Current workflow\n" + payload.workflow);
    } else {
      parts.push(
        "### 2. Current workflow\nYou haven’t described this yet, so I’ll map it with you."
      );
    }

    if (payload.tools) {
      parts.push("### 3. Tools in your stack\n" + payload.tools);
    }

    if (payload.pain_points) {
      parts.push("### 4. Pain points\n" + payload.pain_points);
    }

    parts.push(
      "### 5. Next steps\n" +
        "I'll turn this into a practical AI-enabled workflow that removes friction and repetitive work."
    );

    return parts.join("\n\n");
  }

  function setLoading(isLoading) {
    if (!statusEl) return;
    if (isLoading) {
      statusEl.textContent = "Building your AI workflow…";
      statusEl.classList.remove("mgrnz-status-error");
    }
  }

  function showDecision(message) {
    if (!decisionStatusEl) return;
    decisionStatusEl.textContent = message;
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", function (e) {
      e.preventDefault();
      if (currentStep > 1) {
        setStep(currentStep - 1);
      }
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener("click", function (e) {
      e.preventDefault();
      if (!validateCurrentStep()) return;
      if (currentStep < totalSteps) {
        setStep(currentStep + 1);
      }
    });
  }

  if (submitBtn) {
    submitBtn.addEventListener("click", function (e) {
      e.preventDefault();
      if (!validateCurrentStep()) return;

      setLoading(true);
      submitBtn.disabled = true;
      nextBtn && (nextBtn.disabled = true);
      prevBtn && (prevBtn.disabled = true);

      const payload = {
        goal: goalInput.value.trim(),
        workflow: workflowInput.value.trim(),
        tools: toolsInput.value.trim(),
        pain_points: painInput.value.trim(),
        email: emailInput.value.trim() || null
      };

      updateReview();

      // Fake “AI call” locally for now
      const blueprintMd = buildLocalBlueprint(payload);

      setTimeout(function () {
        if (summaryEl) {
          summaryEl.textContent =
            "Here’s a first-pass AI workflow outline based on what you told me. We can refine this together.";
        }
        if (markdownEl) {
          markdownEl.innerHTML = "<pre>" +
            blueprintMd
              .replace(/&/g, "&amp;")
              .replace(/</g, "&lt;")
              .replace(/>/g, "&gt;") +
            "</pre>";
        }

        if (statusEl) {
          statusEl.textContent =
            "Done. Review your workflow below – and feel free to book a consult if you want me to tune it.";
        }

        submitBtn.disabled = false;
        nextBtn && (nextBtn.disabled = false);
        prevBtn && (prevBtn.disabled = false);

        if (formWrap && blueprintWrap) {
          formWrap.classList.add("mgrnz-ai-wizard--completed");
          blueprintWrap.classList.add("mgrnz-ai-wizard--visible");
        }
      }, 800);
    });
  }

  if (subscribeBtn) {
    subscribeBtn.addEventListener("click", function (e) {
      e.preventDefault();
      // If MailerLite popup is available, trigger it (adjust ID as needed)
      try {
        if (window.ml) {
          // replace "qyrDmy" with your actual form ID if different
          window.ml("show", "qyrDmy", true);
        }
      } catch (err) {
        console.warn("MailerLite not available:", err);
      }
      showDecision("Nice. I’ll keep you in the loop with practical AI updates.");
    });
  }

  if (consultBtn) {
    consultBtn.addEventListener("click", function (e) {
      e.preventDefault();
      const calendlyUrl = "https://calendly.com/mike-mikerobinson";

      if (window.Calendly && window.Calendly.initPopupWidget) {
        window.Calendly.initPopupWidget({ url: calendlyUrl });
      } else {
        window.open(calendlyUrl, "_blank");
      }

      showDecision("Consult booked or opened – I’ll meet you there.");
    });
  }

  // initialise
  setStep(1);
});
