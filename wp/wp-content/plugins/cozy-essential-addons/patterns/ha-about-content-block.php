<?php

/**
 * Title: About Content Block Style 3
 * Slug: cozy-essential-addons/ha-about-us
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/about_thumb_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/features_icon.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":1190,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-1190" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:1rem"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
                <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
                <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Story', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"35px"}}}} -->
            <div class="wp-block-buttons alignfull" style="margin-top:35px"><!-- wp:button {"textColor":"foreground","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"18px","bottom":"18px"}},"color":{"background":"#ffffff00"}},"borderColor":"foreground","className":"hello-agency-fill-buttons is-style-button-hover-primary-bgcolor","fontSize":"normal"} -->
                <div class="wp-block-button has-custom-font-size hello-agency-fill-buttons is-style-button-hover-primary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-text-color has-background has-border-color has-foreground-border-color wp-element-button" style="border-width:1px;border-radius:0px;background-color:#ffffff00;padding-top:18px;padding-right:40px;padding-bottom:18px;padding-left:40px"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|neutral-color","width":"1px"}},"spacing":{"padding":{"top":"40px"},"margin":{"top":"60px"}}}} -->
            <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--neutral-color);border-top-width:1px;margin-top:60px;padding-top:40px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":1182,"height":29,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-1182" style="height:29px" height="29" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":1182,"height":29,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-1182" style="height:29px" height="29" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->