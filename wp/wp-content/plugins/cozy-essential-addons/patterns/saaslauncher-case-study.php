<?php

/**
 * Title: PRO: Case Study
 * Slug: cozy-essential-addons/saaslauncher-case-study
 * Categories: saaslauncher-about,saaslauncher-service, saaslauncher
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_3.jpg',
    $saaslauncher_url . 'assets/images/about_5.jpg',
    $saaslauncher_url . 'assets/images/about_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}}},"gradient":"center-top-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-center-top-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group" style="margin-bottom:120px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"border":{"width":"1px","radius":"20px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Case Studies', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Success Stories That Speak for Themselves', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Get your website live fast with scalable SaaS tools designed to maximize performance and fuel seamless, sustainable business growth.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":47,"dimRatio":0,"customOverlayColor":"#a39d96","isUserOverlayColor":false,"minHeight":480,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-radius:20px;min-height:480px"><img class="wp-block-cover__image-background wp-image-47 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a39d96"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"border":{"width":"1px","radius":"20px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Growth Strategy', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"10px"}}},"textColor":"light-color"} -->
            <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('How We Helped a SaaS Brand Scale from 1K to 10K Users in 90 Days', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-twelve","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"60px"}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px"><?php esc_html_e('See the Full Story', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"84px"},"margin":{"top":"120px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:120px"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"border":{"width":"1px","radius":"20px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Startup Launch', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"10px"}}},"textColor":"light-color"} -->
            <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Launching a Full SaaS MVP from Scratch in Just One Month', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-twelve","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"60px"}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px"><?php esc_html_e('See the Full Story', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":1048,"dimRatio":0,"customOverlayColor":"#b8b7b8","isUserOverlayColor":false,"minHeight":480,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-radius:20px;min-height:480px"><img class="wp-block-cover__image-background wp-image-1048 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b8b7b8"></span>
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

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"84px"},"margin":{"top":"120px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:120px"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":20,"dimRatio":0,"customOverlayColor":"#a6a4a0","isUserOverlayColor":false,"minHeight":480,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-radius:20px;min-height:480px"><img class="wp-block-cover__image-background wp-image-20 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a6a4a0"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"border":{"width":"1px","radius":"20px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('SaaS UX Strategy', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"10px"}}},"textColor":"light-color"} -->
            <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Cutting Customer Churn by 42% with UX and Retention Strategy', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-twelve","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"60px"}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px"><?php esc_html_e('See the Full Story', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->