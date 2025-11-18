<?php

/**
 * Title: PRO: Modestra Popup On Load
 * Slug: cozy-essential-addons/modestra-popup-onload
 * Categories: modestra
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/popup_ads.png',
);
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/modal {"blockClientId":"60416dc1-ff64-4b0f-b182-f44229ebcf48","loadOnRefresh":true,"backgroundOverlayColor":"#5f5a96cc","iconStyles":{"enabled":true,"alignment":"right","horizontalSpacing":-50,"verticalSpacing":-50,"boxWidth":36,"boxHeight":36,"radius":100,"iconSize":10,"bg":"#FFFFFE","bgHover":"#FF598E","iconColor":"#4F43FF","iconColorHover":"","border":"1px solid #000","borderRadius":20},"clickButtonStyles":{"padding":{"top":10,"right":28,"bottom":10,"left":28},"content":"default","label":"Click Me","imgURL":"Open Popup","imgWidth":100,"imgHeight":100,"imgRadius":0,"imgHasPulse":0,"fontSize":14,"justify":"center","borderType":"none","borderWidth":{"top":1,"right":1,"bottom":1,"left":1},"borderColor":"#000","borderRadius":60,"color":"#FFFFFE","colorHover":"","bgColor":"#4F43FF","bgColorHover":"#FF598E"},"padding":{"top":0,"right":0,"bottom":0,"left":0}} -->
    <div class="cozy-block-modal  type-default event-load display-none icon-align-right" id="cozyBlock_60416dc1_ff64_4b0f_b182_f44229ebcf48">
        <div class="close-icon-wrapper">
            <div class="modal-icon-wrapper"><svg class="modal-close-icon" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"></path>
                </svg></div>
        </div><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"736px"}} -->
        <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":8395,"dimRatio":0,"customOverlayColor":"#3a3f32","isUserOverlayColor":true,"minHeight":460,"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3a3f32"></span><img class="wp-block-cover__image-background wp-image-8395" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","level":4,"placeholder":"Looking for Best  Theme for your Agency?","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"normal"} -->
                    <h4 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Popup Demo', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":3,"placeholder":"Looking for Best  Theme for your Agency?","fontSize":"big"} -->
                    <h3 class="wp-block-heading has-text-align-left has-big-font-size"><?php esc_html_e('🎉 Get 35% OFF Today! 🎉 Don\'t Miss Out on Huge Savings – Limited Time Only!', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","placeholder":"Meet the Blockpage  - The Ultimate Multipurpose block base FSE WordPress theme with 120+ pre-build ready to use patterns library with homepage and inner page layout with one click demo import"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:contact-form-7/contact-form-selector {"id":253,"hash":"f245613","title":"Newsletter","className":" modestra-newsletter-1"} -->
                    <div class="wp-block-contact-form-7-contact-form-selector  modestra-newsletter-1">[contact-form-7 id="f245613" title="Newsletter"]</div>
                    <!-- /wp:contact-form-7/contact-form-selector -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:cozy-block/modal -->
</div>
<!-- /wp:group -->