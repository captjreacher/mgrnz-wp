<?php

/**
 * Title: PRO: Featured Section 2
 * Slug: cozy-essential-addons/saaslauncher-featured-section-2
 * Categories: saaslauncher-about
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about_2.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"patternName":"cozy-essential-addons/saaslauncher-featured-section-2","name":"PRO: Featured Section 2"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"860px","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500","fontSize":"74px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:74px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Everything You Need to Build, Launch &amp; Scale', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"big"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('From branding to web development, we create seamless digital experiences that captivate audiences and leave a lasting impact.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
        <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"gradient":"gradient-thirteen","className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"18px","bottom":"18px"}},"border":{"radius":"80px"}},"fontSize":"medium"} -->
            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-thirteen-gradient-background has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:80px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px"><?php esc_html_e('Get Started Today', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"64px","bottom":"0"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px;margin-bottom:0"><!-- wp:column {"width":"67%"} -->
        <div class="wp-block-column" style="flex-basis:67%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":12245,"dimRatio":0,"customOverlayColor":"#bfbdbc","isUserOverlayColor":false,"minHeight":530,"isDark":false,"style":{"border":{"radius":{"topLeft":"70px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-top-left-radius:70px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;min-height:530px"><img class="wp-block-cover__image-background wp-image-12245" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bfbdbc"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":13223,"dimRatio":0,"customOverlayColor":"#adaba9","isUserOverlayColor":false,"minHeight":530,"isDark":false,"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"70px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:70px;min-height:530px"><img class="wp-block-cover__image-background wp-image-13223" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#adaba9"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('10x Faster Results', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('60% Less Manual Work', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Up to 75% Cost Savings', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('300% ROI Increase', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->