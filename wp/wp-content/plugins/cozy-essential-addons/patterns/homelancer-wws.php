<?php

/**
 * Title: PRO: Who We Serve
 * Slug: cozy-essential-addons/homelancer-wws
 * Description:Who We Serve for Homelancer pro
 * Categories: homelancer-service
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_01.png',
    $homelancer_url . 'assets/images/icon_02.png',
    $homelancer_url . 'assets/images/icon_03.png',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"54px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}}} -->
            <h1 class="wp-block-heading" style="font-size:54px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Who We Serve', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('We proudly serve residential, commercial, and industrial clients with reliable, professional services tailored to meet every unique space and need.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"},"margin":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-orakus-boxshadow-hover is-style-homelancer-boxshadow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-orakus-boxshadow-hover is-style-homelancer-boxshadow has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1758,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1758" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Residential', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Reliable home services tailored to keep your living space safe, functional, and comfortable—one fix at a time.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-orakus-boxshadow-hover is-style-homelancer-boxshadow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-orakus-boxshadow-hover is-style-homelancer-boxshadow has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1759,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1759" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Commercial', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Expert solutions for offices, shops, and businesses—minimizing downtime and keeping your workspace running smoothly.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-orakus-boxshadow-hover is-style-homelancer-boxshadow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-orakus-boxshadow-hover is-style-homelancer-boxshadow has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1760,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1760" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Industrial', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Heavy-duty maintenance and repair services designed for factories, warehouses, and industrial-grade facilities.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
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