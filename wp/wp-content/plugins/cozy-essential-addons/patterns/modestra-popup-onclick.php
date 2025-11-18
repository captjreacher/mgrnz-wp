<?php

/**
 * Title: PRO: Modestra Popup On Click
 * Slug: cozy-essential-addons/modestra-popup-onclick
 * Categories: modestra
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/popup_ads_2.png',
);
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/modal {"blockClientId":"b4c52961-1c8b-4c8a-806b-6a3e57cf834e","boxWidth":540,"modalEvent":"click","backgroundOverlayColor":"#5f5a96cc","iconStyles":{"enabled":true,"alignment":"right","horizontalSpacing":-50,"verticalSpacing":-50,"boxWidth":36,"boxHeight":36,"radius":100,"iconSize":10,"bg":"#FFFFFE","bgHover":"#FF598E","iconColor":"#4F43FF","iconColorHover":"","border":"1px solid #000","borderRadius":20},"clickButtonStyles":{"padding":{"top":10,"right":28,"bottom":10,"left":28},"content":"default","label":"Click Me","imgURL":"Open Popup","imgWidth":100,"imgHeight":100,"imgRadius":0,"imgHasPulse":0,"fontSize":14,"justify":"center","borderType":"none","borderWidth":{"top":1,"right":1,"bottom":1,"left":1},"borderColor":"#000","borderRadius":60,"color":"#FFFFFE","colorHover":"","bgColor":"#4F43FF","bgColorHover":"#FF598E"},"padding":{"top":0,"right":0,"bottom":0,"left":0}} -->
    <a class="cozy-modal-open" data-type="b4c52961-1c8b-4c8a-806b-6a3e57cf834e"><?php esc_html_e('Click Me', 'cozy-essential-addons') ?></a>
    <div class="cozy-block-modal  type-default event-click display-none icon-align-right" id="cozyBlock_b4c52961_1c8b_4c8a_806b_6a3e57cf834e">
        <div class="close-icon-wrapper">
            <div class="modal-icon-wrapper"><svg class="modal-close-icon" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"></path>
                </svg></div>
        </div><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"540px"}} -->
        <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":8418,"dimRatio":0,"customOverlayColor":"#c2bec1","isUserOverlayColor":true,"minHeight":210,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"28px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:28px;min-height:210px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c2bec1"></span><img class="wp-block-cover__image-background wp-image-8418" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"460px"}} -->
            <div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":3,"placeholder":"Looking for Best  Theme for your Agency?","fontSize":"big"} -->
                <h3 class="wp-block-heading has-text-align-left has-big-font-size"><?php esc_html_e('Create an offer and promotion popup to boost engagement and drive more interaction with our Popup builder!', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","placeholder":"Meet the Blockpage  - The Ultimate Multipurpose block base FSE WordPress theme with 120+ pre-build ready to use patterns library with homepage and inner page layout with one click demo import"} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:contact-form-7/contact-form-selector {"id":253,"hash":"f245613","title":"Newsletter","className":"modestra-newsletter-1"} -->
                <div class="wp-block-contact-form-7-contact-form-selector modestra-newsletter-1">[contact-form-7 id="f245613" title="Newsletter"]</div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:cozy-block/modal -->
</div>
<!-- /wp:group -->