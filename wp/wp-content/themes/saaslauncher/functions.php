<?php
if (! defined('SAASLAUNCHER_VERSION')) {
	// Replace the version number of the theme on each release.
	define('SAASLAUNCHER_VERSION', wp_get_theme()->get('Version'));
}
define('SAASLAUNCHER_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('SAASLAUNCHER_DIR', trailingslashit(get_template_directory()));
define('SAASLAUNCHER_URL', trailingslashit(get_template_directory_uri()));

if (! function_exists('saaslauncher_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function saaslauncher_support()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		// Add support for block styles.
		add_theme_support('wp-block-styles');
		add_theme_support('post-thumbnails');
		// Enqueue editor styles.
		add_editor_style('style.css');
		// Removing default patterns.
		remove_theme_support('core-block-patterns');

		load_theme_textdomain('saaslauncher', get_template_directory());
	}

endif;
add_action('after_setup_theme', 'saaslauncher_support');

// print_r( get_template_directory() );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (! function_exists('saaslauncher_styles')) :
	function saaslauncher_styles()
	{
		// registering style for theme
		wp_enqueue_style('saaslauncher-style', get_stylesheet_uri(), array(), SAASLAUNCHER_VERSION);
		wp_enqueue_style('saaslauncher-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
		wp_enqueue_style('saaslauncher-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
		wp_enqueue_style('saaslauncher-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.1.0');
		if (is_rtl()) {
			wp_enqueue_style(
				'saaslauncher-rtl-css',
				get_template_directory_uri() . '/assets/css/rtl.css',
				array(),
				SAASLAUNCHER_VERSION
			);
		}
		wp_enqueue_script('saaslauncher-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), SAASLAUNCHER_VERSION, true);
		wp_enqueue_script('saaslauncher-scripts', get_template_directory_uri() . '/assets/js/saaslauncher-scripts.js', array('jquery'), SAASLAUNCHER_VERSION, true);
	}
endif;
// === Match Gutenberg + Site Editor background to MGRNZ site colors ===
add_action('enqueue_block_editor_assets', function () {
    ?>
    <style>
      /* Editor canvas background (post editor + Site Editor) */
      .editor-styles-wrapper {
        background-color: #0f172a !important; /* MGRNZ dark navy */
        color: #ffffff !important;
      }

      .editor-styles-wrapper p,
      .editor-styles-wrapper h1,
      .editor-styles-wrapper h2,
      .editor-styles-wrapper h3,
      .editor-styles-wrapper h4,
      .editor-styles-wrapper h5,
      .editor-styles-wrapper h6 {
        color: #ffffff !important;
      }

      .editor-styles-wrapper a {
        color: #ff4f00 !important;
      }

      .editor-styles-wrapper a:hover {
        color: #ff6a26 !important;
      }

      /* Placeholder text visibility */
      .editor-styles-wrapper .block-editor-rich-text__editable[contenteditable]:empty:before {
        color: rgba(255, 255, 255, 0.4) !important;
      }
    </style>
    <?php
});

add_action('wp_enqueue_scripts', 'saaslauncher_styles');

/**
 * Enqueue scripts for admin area
 */
function saaslauncher_admin_style()
{
	if (function_exists('get_current_screen')) {
		$saaslauncher_notice_current_screen = get_current_screen();
	}
	if ((! empty($_GET['page']) && 'about-saaslauncher' === $_GET['page']) || $saaslauncher_notice_current_screen->id === 'themes' || $saaslauncher_notice_current_screen->id === 'dashboard' || $saaslauncher_notice_current_screen->id === 'plugins') {
		wp_enqueue_style('saaslauncher-admin-style', get_template_directory_uri() . '/inc/admin/css/admin-style.css', array(), SAASLAUNCHER_VERSION, 'all');
		wp_enqueue_script('saaslauncher-admin-scripts', get_template_directory_uri() . '/inc/admin/js/saaslauncher-admin-scripts.js', array('jquery'), SAASLAUNCHER_VERSION, true);
		wp_localize_script(
			'saaslauncher-admin-scripts',
			'saaslauncher_admin_localize',
			array(
				'ajax_url'     => admin_url('admin-ajax.php'),
				'nonce'        => wp_create_nonce('saaslauncher_admin_nonce'),
				'welcomeNonce' => wp_create_nonce('saaslauncher_welcome_nonce'),
				'redirect_url' => admin_url('themes.php?page=about-saaslauncher'),
				'scrollURL'    => admin_url('plugins.php?cozy-addons-scroll=true'),
				'demoURL'      => admin_url('themes.php?page=advanced-import'),
			)
		);
	}
}
add_action('admin_enqueue_scripts', 'saaslauncher_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function saaslauncher_block_assets()
{
	wp_enqueue_style('saaslauncher-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'saaslauncher_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (! function_exists('saaslauncher_excerpt_more_postfix')) {
	function saaslauncher_excerpt_more_postfix($more)
	{
		if (is_admin()) {
			return $more;
		}
		return '...';
	}
	add_filter('excerpt_more', 'saaslauncher_excerpt_more_postfix');
}
function saaslauncher_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'saaslauncher_add_woocommerce_support');

/**
 * Load Wizard JavaScript inline - ONLY on wizard page
 */
add_action('wp_footer', function() {
    if (!is_page('start-using-ai')) return;
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        console.log('Wizard JavaScript loaded');
        const form = document.getElementById("ai-wizard-form");
        if (!form) { console.error('Form not found!'); return; }
        
        const totalSteps = 5; let currentStep = 1;
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
        const goalInput = document.getElementById("goal");
        const workflowInput = document.getElementById("workflow");
        const painInput = document.getElementById("pain_points");
        const emailInput = document.getElementById("email");
        const reviewGoal = document.getElementById("review-goal");
        const reviewWorkflow = document.getElementById("review-workflow");
        const reviewTools = document.getElementById("review-tools");
        const reviewPain = document.getElementById("review-pain");
        
        const stepCaptions = {1:"Your goal",2:"Current workflow",3:"Tools you use",4:"Pain points",5:"Review & email"};
        
        function getSelectedTools(){const checkboxes=document.querySelectorAll('input[name="tools"]:checked');const selected=Array.from(checkboxes).map(cb=>cb.value);return selected.length>0?selected.join(', '):'None selected';}
        function updateReview(){if(reviewGoal)reviewGoal.textContent=goalInput.value.trim()||"Not yet.";if(reviewWorkflow)reviewWorkflow.textContent=workflowInput.value.trim()||"Not set yet.";if(reviewTools)reviewTools.textContent=getSelectedTools();if(reviewPain)reviewPain.textContent=painInput.value.trim()||"Not set yet.";}
        function setStep(step){currentStep=step;document.querySelectorAll(".mgrnz-ai-step").forEach(function(el){const s=parseInt(el.getAttribute("data-step"),10);el.classList.toggle("active",s===currentStep);});if(stepLabel)stepLabel.textContent="Step "+currentStep+" of "+totalSteps;if(stepCaption)stepCaption.textContent=stepCaptions[currentStep]||"";if(progressFill)progressFill.style.width=((currentStep/totalSteps)*100)+"%";if(prevBtn)prevBtn.style.visibility=currentStep===1?"hidden":"visible";if(nextBtn&&submitBtn){nextBtn.style.display=currentStep===totalSteps?"none":"inline-flex";submitBtn.style.display=currentStep===totalSteps?"inline-flex":"none";}updateReview();}
        function validateCurrentStep(){if(!statusEl)return true;statusEl.textContent="";statusEl.classList.remove("mgrnz-status-error");statusEl.style.display="none";if(currentStep===1&&!goalInput.value.trim()){statusEl.textContent="Give me at least a sentence about your goal.";statusEl.classList.add("mgrnz-status-error");statusEl.style.display="block";return false;}if(currentStep===2&&!workflowInput.value.trim()){statusEl.textContent="Describe your current workflow so I have something to improve.";statusEl.classList.add("mgrnz-status-error");statusEl.style.display="block";return false;}if(currentStep===5&&emailInput.value){const isValid=/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim());if(!isValid){statusEl.textContent="That email address doesn't look quite right.";statusEl.classList.add("mgrnz-status-error");statusEl.style.display="block";return false;}}return true;}
        function showProgress(messages){if(!progressContainer)return;formWrap.style.display="none";progressContainer.style.display="block";messages.forEach((msg,index)=>{const msgEl=document.getElementById('progress-msg-'+(index+1));if(msgEl){msgEl.textContent=msg;setTimeout(()=>msgEl.classList.add('active'),index*1000);}});}
        function hideProgress(){if(progressContainer)progressContainer.style.display="none";}
        function showCompletionScreen(){hideProgress();if(!completionScreen)return;const existingBlueprint=completionScreen.querySelector('.blueprint-preview');if(existingBlueprint)existingBlueprint.remove();if(window.wizardSessionData&&window.wizardSessionData.blueprint){const blueprintContainer=document.createElement('div');blueprintContainer.className='blueprint-preview';blueprintContainer.style.cssText='background:#131c32;border:1px solid rgba(255,255,255,0.12);border-radius:12px;padding:1.5rem;margin-bottom:2rem;max-height:400px;overflow-y:auto;text-align:left;';const blueprintTitle=document.createElement('h3');blueprintTitle.textContent='Your AI Workflow Blueprint';blueprintTitle.style.cssText='margin-top:0;color:#ffcf00;font-size:1.3rem;';const blueprintContent=document.createElement('div');blueprintContent.innerHTML=window.wizardSessionData.blueprint;blueprintContent.style.cssText='color:rgba(255,255,255,0.9);line-height:1.6;';blueprintContainer.appendChild(blueprintTitle);blueprintContainer.appendChild(blueprintContent);const completionMessage=completionScreen.querySelector('.completion-message');if(completionMessage){completionMessage.parentNode.insertBefore(blueprintContainer,completionMessage);}}completionScreen.style.display="block";completionScreen.classList.add('show');}
        
        if(prevBtn){prevBtn.addEventListener("click",(e)=>{e.preventDefault();if(currentStep>1)setStep(currentStep-1);});}
        if(nextBtn){nextBtn.addEventListener("click",(e)=>{e.preventDefault();if(!validateCurrentStep())return;if(currentStep<totalSteps)setStep(currentStep+1);});}
        if(submitBtn){submitBtn.addEventListener("click",(e)=>{e.preventDefault();if(!validateCurrentStep())return;submitBtn.disabled=true;if(nextBtn)nextBtn.disabled=true;if(prevBtn)prevBtn.disabled=true;const payload={goal:goalInput.value.trim(),workflow:workflowInput.value.trim(),tools:getSelectedTools(),pain_points:painInput.value.trim(),email:emailInput.value.trim()||null};localStorage.setItem('mgrnz_wizard_data',JSON.stringify(payload));showProgress(['🤖 Creating your AI workflow assistant...','🔍 Analyzing your workflow...','📝 Generating your personalized blueprint...']);const nonce=(typeof wpApiSettings!=='undefined'&&wpApiSettings.nonce)||(typeof wp!=='undefined'&&wp.apiFetch&&wp.apiFetch.nonceMiddleware&&wp.apiFetch.nonceMiddleware.nonce)||'';fetch('/wp-json/mgrnz/v1/ai-workflow',{method:'POST',headers:{'Content-Type':'application/json','X-WP-Nonce':nonce},body:JSON.stringify(payload)}).then(response=>response.text().then(text=>{if(!response.ok)throw new Error('HTTP error '+response.status);try{return JSON.parse(text);}catch(e){throw new Error('Invalid JSON response');}})).then(data=>{if(data.success&&data.blueprint){window.wizardSessionData={sessionId:data.session_id||'unknown',blueprint:data.blueprint,wizardData:payload};setTimeout(()=>showCompletionScreen(),3000);}else{throw new Error('Invalid response from server');}}).catch(error=>{hideProgress();formWrap.style.display="block";if(statusEl){statusEl.textContent=error.message||'Unable to generate blueprint. Please try again.';statusEl.classList.add("mgrnz-status-error");statusEl.style.display="block";}submitBtn.disabled=false;if(nextBtn)nextBtn.disabled=false;if(prevBtn)prevBtn.disabled=false;});});}
        
        
        const editBtn=document.getElementById('btn-edit-workflow');
        if(editBtn){editBtn.addEventListener('click',()=>{const storedData=localStorage.getItem('mgrnz_wizard_data');if(storedData){const data=JSON.parse(storedData);if(goalInput)goalInput.value=data.goal||'';if(workflowInput)workflowInput.value=data.workflow||'';if(painInput)painInput.value=data.pain_points||'';if(emailInput)emailInput.value=data.email||'';if(data.tools){const selectedTools=data.tools.split(', ');document.querySelectorAll('input[name="tools"]').forEach(checkbox=>{checkbox.checked=selectedTools.includes(checkbox.value);});}}completionScreen.style.display='none';formWrap.style.display='block';setStep(1);if(submitBtn)submitBtn.disabled=false;if(nextBtn)nextBtn.disabled=false;if(prevBtn)prevBtn.disabled=false;});}
        
        const downloadBtn=document.getElementById('btn-download-blueprint');
        if(downloadBtn){downloadBtn.addEventListener('click',()=>{try{if(window.ml){window.ml('show','nRV0LZ',true);}else{alert('Subscribe form unavailable. Please refresh.');}}catch(err){console.error('MailerLite error:',err);alert('Subscribe form unavailable.');}});}
        
        const goBackBtn=document.getElementById('btn-go-back');
        if(goBackBtn){goBackBtn.addEventListener('click',()=>{const popup=document.getElementById('blog-popup');if(popup){popup.style.display='flex';popup.classList.add('show');}});}
        
        function checkDebugMode(){const urlParams=new URLSearchParams(window.location.search);if(urlParams.get('debug')==='true'){const debugBtn=document.createElement('button');debugBtn.textContent='🤖 Fill Test Data';debugBtn.className='mgrnz-btn mgrnz-btn-secondary';debugBtn.style.cssText='margin-top:1rem;font-size:0.85rem;padding:0.65rem 1.2rem;background-color:#ff00ff;border-color:#ff00ff;color:white;';debugBtn.addEventListener('click',(e)=>{e.preventDefault();if(goalInput)goalInput.value="I want to automate my daily reporting process to save 2 hours a day.";if(workflowInput)workflowInput.value="Currently I log into 3 different portals, download CSVs, merge them in Excel, and email a PDF summary to my boss.";const exampleTools=['Gmail','Google Sheets','Make.com','OpenAI (ChatGPT)'];document.querySelectorAll('input[name="tools"]').forEach(checkbox=>{checkbox.checked=exampleTools.includes(checkbox.value);});if(painInput)painInput.value="It's boring, prone to copy-paste errors, and takes time away from real work.";if(emailInput)emailInput.value="test@example.com";debugBtn.textContent='✅ Data Filled!';setTimeout(()=>debugBtn.textContent='🤖 Fill Test Data',2000);});if(formWrap)formWrap.insertBefore(debugBtn,formWrap.firstChild);}}
        
        checkDebugMode();
        setStep(1);
    });
    </script>
    <?php
}, 999);

/**
 * AI Workflow Wizard Shortcode
 * 
 * Renders the complete AI workflow wizard
 * Usage: [ai_workflow_wizard]
 */
function mgrnz_ai_workflow_wizard_shortcode() {
    ob_start();
    
    // Get the wizard PHP file (WordPress-compatible version)
    $wizard_file = get_template_directory() . '/templates/ai-workflow-wizard-wp.php';
    
    if (file_exists($wizard_file)) {
        include $wizard_file;
    } else {
        echo '<div class="wizard-error" style="padding: 2rem; background: #fee; border: 1px solid #fcc; border-radius: 8px; color: #c00;">';
        echo '<strong>Error:</strong> AI Workflow Wizard template not found. Please ensure the file exists at: <code>themes/saaslauncher/templates/ai-workflow-wizard-wp.php</code>';
        echo '</div>';
    }
    
    return ob_get_clean();
}
add_shortcode('ai_workflow_wizard', 'mgrnz_ai_workflow_wizard_shortcode');

/**
 * Register AI Workflow Wizard Block Pattern
 * 
 * Makes the wizard available as a reusable block pattern in Gutenberg
 */
function mgrnz_register_wizard_pattern() {
    register_block_pattern(
        'mgrnz/ai-workflow-wizard',
        array(
            'title'       => __('AI Workflow Wizard', 'saaslauncher'),
            'description' => __('Complete 5-step AI workflow wizard with blueprint generation', 'saaslauncher'),
            'content'     => '<!-- wp:shortcode -->[ai_workflow_wizard]<!-- /wp:shortcode -->',
            'categories'  => array('featured', 'mgrnz'),
            'keywords'    => array('wizard', 'ai', 'workflow', 'form'),
        )
    );
}
add_action('init', 'mgrnz_register_wizard_pattern');

/**
 * Register Custom Block Pattern Category
 * 
 * Creates a custom category for MGRNZ patterns
 */
function mgrnz_register_pattern_category() {
    register_block_pattern_category(
        'mgrnz',
        array(
            'label' => __('MGRNZ', 'saaslauncher'),
        )
    );
}
add_action('init', 'mgrnz_register_pattern_category');
