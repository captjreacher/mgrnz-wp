<?php

/**
 * Title: Testimonial Section
 * Slug: musicmantra/mm-testimonial-section
 * Categories: musicmantra-patterns
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_1.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_2.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_3.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
        <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Good Words', 'cozy-essential-addons') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-bottom:40px"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Reviews &amp;', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
            <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color"><?php esc_html_e('Feedback', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#161616"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background" style="background-color:#161616;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1374,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-1374" style="border-radius:60px;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php esc_html_e('Harry Lotham', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading"><?php esc_html_e('Happy Audience', 'cozy-essential-addons') ?></h6>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#161616"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background" style="background-color:#161616;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1381,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-1381" style="border-radius:60px;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php esc_html_e('Harry Lotham', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading"><?php esc_html_e('Happy Audience', 'cozy-essential-addons') ?></h6>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#161616"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background" style="background-color:#161616;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1384,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-1384" style="border-radius:60px;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading"><?php esc_html_e('Harry Lotham', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading"><?php esc_html_e('Happy Audience', 'cozy-essential-addons') ?></h6>
                        <!-- /wp:heading -->
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