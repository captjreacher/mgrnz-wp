<?php

/**
 * Title: Testimonial Block Text Centered
 * Slug: cozy-essential-addons/ha-testimonials-text-centered
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_1.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_2.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_3.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/reviews_star.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"80px","right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"80px"},"margin":{"top":"0","bottom":"0"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Customer', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
            <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Reviews', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"64px"},"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"32px"}},"borderColor":"foreground-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-foreground-alt-border-color" style="border-width:1px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":353,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-353" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":354,"height":80,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-354" style="border-radius:50%;height:80px" height="80" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Melinda M', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size"><?php echo esc_html('HR Manager, Melinda Tech', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"32px"}},"borderColor":"foreground-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-foreground-alt-border-color" style="border-width:1px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":353,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-353" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":363,"height":80,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-363" style="border-radius:50%;height:80px" height="80" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Moxley Kole', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size"><?php echo esc_html('HR Manager, Melinda Tech', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"32px"}},"borderColor":"foreground-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-foreground-alt-border-color" style="border-width:1px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":353,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-353" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":364,"height":80,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-364" style="border-radius:50%;height:80px" height="80" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Alexa Mol', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size"><?php echo esc_html('HR Manager, Melinda Tech', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->