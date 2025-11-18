<?php

/**
 * Title: PRO: About Us with Counter
 * Slug: cozy-essential-addons/hb-about-us
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/about_image.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"About With Counter"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":2459,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-2459" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
            <h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Our Story', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
            <h1 class="wp-block-heading" style="margin-bottom:24px"><?php esc_html_e('Your Go-To Handyman Agency', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
            <p style="margin-bottom:20px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:cozy-block/counter {"blockClientId":"e97aed13-30b9-478d-9315-f05a2d4ba2ab","endNumber":"20","styles":{"fontFamily":"default","fontSize":48,"color":"#FFB84F","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_e97aed13_30b9_478d_9315_f05a2d4ba2ab"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xx-large"} -->
                        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-xx-large-font-size"><?php esc_html_e('+', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
                    <h5 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Year\'s in Industry!', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:cozy-block/counter {"blockClientId":"4b8c807b-b3ee-4415-a2fa-c8628b9eaa29","endNumber":"100","styles":{"fontFamily":"default","fontSize":48,"color":"#FFB84F","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_4b8c807b_b3ee_4415_a2fa_c8628b9eaa29"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xx-large"} -->
                        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-xx-large-font-size"><?php esc_html_e('+', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
                    <h5 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Experts Team', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"background-alt","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"18px","bottom":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"7px"}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-light-color-color has-background-alt-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:7px;padding-top:18px;padding-right:var(--wp--preset--spacing--60);padding-bottom:18px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->