<?php

/**
 * Title: PRO: Hero with Video PopUp
 * Slug: cozy-essential-addons/modestra-hero-with-popupvid
 * Categories: modestra-hero
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/hero_img_filter.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/play_icon.png',
);
?>
<!-- wp:group {"metadata":{"categories":["modestra-hero"],"patternName":"modestra/hero-section-stats","name":"Hero Section with Stats Counter"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"120px"}},"border":{"bottom":{"color":"#e3e2f0","width":"1px"},"top":[],"right":[],"left":[]}},"gradient":"gradient-light","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-gradient-light-gradient-background has-background" style="border-bottom-color:#e3e2f0;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"980px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"68px","fontStyle":"normal","fontWeight":"700","textTransform":"none","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:68px;font-style:normal;font-weight:700;line-height:1.3;text-transform:none"><?php esc_html_e('Simplifying Your', 'cozy-essential-addons') ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('Business with Cutting-Edge', 'cozy-essential-addons') ?></mark> <?php esc_html_e('Technology', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ullamco laboris.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"40px"}}},"fontSize":"medium","layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons has-custom-font-size is-style-buttons-hover-translate-effect has-medium-font-size" style="margin-top:40px;font-style:normal;font-weight:500"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-gradient-background-style","style":{"spacing":{"padding":{"left":"44px","right":"44px","top":"23px","bottom":"23px"}},"border":{"radius":"60px"}}} -->
            <div class="wp-block-button is-style-button-gradient-background-style"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:60px;padding-top:23px;padding-right:44px;padding-bottom:23px;padding-left:44px"><?php esc_html_e('Download Now', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"is-style-modestra-group-content-vertical-center","style":{"dimensions":{"minHeight":"640px"},"background":{"backgroundImage":{"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":6587,"source":"file","title":"hero_img-2"},"backgroundPosition":"50% 0"},"border":{"radius":"30px"},"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group is-style-modestra-group-content-vertical-center" style="border-radius:30px;min-height:640px;margin-top:64px"><!-- wp:cozy-block/modal {"blockClientId":"f093323e-6e33-4eed-ade5-58a195d22bb1","boxWidth":675,"modalEvent":"click","backgroundOverlayColor":"#4f42ffc9","iconStyles":{"enabled":true,"alignment":"right","horizontalSpacing":-50,"verticalSpacing":-50,"boxWidth":36,"boxHeight":36,"radius":100,"iconSize":10,"bg":"#FFFFFE","bgHover":"#FF598E","iconColor":"#4F43FF","iconColorHover":"","border":"1px solid #000","borderRadius":20},"clickButtonStyles":{"padding":{"top":10,"right":10,"bottom":10,"left":10},"content":"image","label":"Open Popup","imgURL":"<?php echo esc_url($ct_patterns_media[1]) ?>","imgWidth":100,"imgHeight":100,"imgRadius":0,"imgHasPulse":true,"fontSize":14,"justify":"center","borderType":"none","borderWidth":{"top":1,"right":1,"bottom":1,"left":1},"borderColor":"#000","borderRadius":60,"color":"#ffffff00","colorHover":"","bgColor":"#ffffff00","bgColorHover":""},"padding":{"top":0,"right":0,"bottom":0,"left":0}} -->
        <a class="cozy-modal-open" data-type="f093323e-6e33-4eed-ade5-58a195d22bb1">
            <figure class="cozy-modal-open__img has-pulse-animation"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" /></figure>
        </a>
        <div class="cozy-block-modal  type-default event-click display-none icon-align-right" id="cozyBlock_f093323e_6e33_4eed_ade5_58a195d22bb1">
            <div class="close-icon-wrapper">
                <div class="modal-icon-wrapper"><svg class="modal-close-icon" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"></path>
                    </svg></div>
            </div><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
            <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:embed {"url":"https://www.youtube.com/watch?v=GP4NxSbikS4","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-4-3 wp-has-aspect-ratio","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-4-3 wp-has-aspect-ratio" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
                    <div class="wp-block-embed__wrapper">
                        https://www.youtube.com/watch?v=GP4NxSbikS4
                    </div>
                </figure>
                <!-- /wp:embed -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:cozy-block/modal -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"48px","bottom":"48px","left":"0","right":"0"},"blockGap":{"left":"48px"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:48px;padding-right:0;padding-bottom:48px;padding-left:0"><!-- wp:column {"width":"48%","style":{"spacing":{"padding":{"top":"14px"}}}} -->
        <div class="wp-block-column" style="padding-top:14px;flex-basis:48%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-xx-large-font-size" style="line-height:1.2"><?php esc_html_e('Incredible Stats That Showcase Our Progress and Impact!', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"26%","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column" style="flex-basis:26%"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":1,"className":"is-style-modestra-heading-gradient-effect","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"74px"}},"textColor":"primary"} -->
                <h1 class="wp-block-heading is-style-modestra-heading-gradient-effect has-primary-color has-text-color has-link-color" style="font-size:74px"><?php esc_html_e('20k+', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"26%"} -->
        <div class="wp-block-column" style="flex-basis:26%"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":1,"className":"is-style-modestra-heading-gradient-effect","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"74px"}},"textColor":"primary"} -->
                <h1 class="wp-block-heading is-style-modestra-heading-gradient-effect has-primary-color has-text-color has-link-color" style="font-size:74px"><?php esc_html_e('78%', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->