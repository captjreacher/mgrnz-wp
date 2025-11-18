<?php

/**
 * Title: PRO: Featured Section
 * Slug: cozy-essential-addons/saaslauncher-featured-section
 * Categories: saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_2.jpg',
    $saaslauncher_url . 'assets/images/about_3.jpg',
    $saaslauncher_url . 'assets/images/about_4.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"patternName":"cozy-essential-addons/saaslauncher-featured-section","name":"PRO: Featured Section"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"860px","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"primary-shade-2","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-saaslauncher-gradient-border has-border-color has-border-color-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"none"}},"textColor":"light-color","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="text-transform:none"><?php esc_html_e('Welcome to SaasLauncher', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"800","fontSize":"74px"}}} -->
            <h1 class="wp-block-heading" style="font-size:74px;font-style:normal;font-weight:800;line-height:1.3"><?php esc_html_e('Creative Strategies, Digital Excellence—Unleash Your Potential', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"big"} -->
            <p class="has-big-font-size"><?php esc_html_e('From branding to web development, we create seamless digital experiences that captivate audiences and leave a lasting impact.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
        <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}},"border":{"radius":"80px"}},"fontSize":"medium"} -->
            <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:80px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Get Started Today', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"64px","bottom":"0"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":13223,"dimRatio":0,"customOverlayColor":"#adaba9","isUserOverlayColor":false,"minHeight":530,"isDark":false,"className":"is-style-saaslauncher-cover-hover-effect","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light is-style-saaslauncher-cover-hover-effect" style="border-radius:20px;min-height:530px"><img class="wp-block-cover__image-background wp-image-13223" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#adaba9"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":13224,"dimRatio":0,"customOverlayColor":"#d3c2b9","isUserOverlayColor":false,"minHeight":530,"isDark":false,"className":"is-style-saaslauncher-cover-hover-effect","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light is-style-saaslauncher-cover-hover-effect" style="border-radius:20px;min-height:530px"><img class="wp-block-cover__image-background wp-image-13224" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3c2b9"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":13225,"dimRatio":0,"customOverlayColor":"#837c76","isUserOverlayColor":false,"minHeight":530,"className":"is-style-saaslauncher-cover-hover-effect","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-style-saaslauncher-cover-hover-effect" style="border-radius:20px;min-height:530px"><img class="wp-block-cover__image-background wp-image-13225" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#837c76"></span>
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
</div>
<!-- /wp:group -->