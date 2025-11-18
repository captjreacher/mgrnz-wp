<?php

/**
 * Title: PRO: Hero Section Simple
 * Slug: cozy-essential-addons/saaslauncher-hero-simple
 * Categories: saaslauncher-hero
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-hero"],"patternName":"cozy-essential-addons/saaslauncher-hero-simple","name":"PRO: Hero Section Simple"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"primary-shade-2","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-saaslauncher-gradient-border has-border-color has-border-color-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"none"}},"textColor":"light-color","fontSize":"small"} -->
                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="text-transform:none"><?php esc_html_e('Welcome to SaasLauncher', 'cozy-essential-addons') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"giga"} -->
        <h1 class="wp-block-heading has-text-align-center has-giga-font-size" style="line-height:1.3"><?php esc_html_e('Create faster, launch sooner—powered by SaasLauncher.', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:44px"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"border":{"radius":"60px","width":"0px","style":"none"},"spacing":{"padding":{"left":"28px","right":"28px","top":"15px","bottom":"15px"}}},"fontSize":"medium"} -->
            <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-radius:60px;padding-top:15px;padding-right:28px;padding-bottom:15px;padding-left:28px"><?php esc_html_e('Start Free Trial', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-button-with-shadow-style-two","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}},"border":{"radius":"60px"},"color":{"background":"#29245d"}},"fontSize":"medium"} -->
            <div class="wp-block-button is-style-button-with-shadow-style-two"><a class="wp-block-button__link has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;background-color:#29245d;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Schedule Demo', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":12245,"dimRatio":0,"customOverlayColor":"#bfbdbc","isUserOverlayColor":false,"minHeight":600,"isDark":false,"align":"full","style":{"spacing":{"margin":{"top":"48px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover alignfull is-light" style="margin-top:48px;min-height:600px"><img class="wp-block-cover__image-background wp-image-12245" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bfbdbc"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->