<?php

/**
 * Title: Portfolio Section
 * Slug: cozy-essential-addons/ha-portfolio-section
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p5.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p6.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"80px","top":"80px"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
                <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
                <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Portfolios', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:paragraph -->
                <p><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-color","style":{"color":{"background":"#ffffff00"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"className":"is-style-fill hello-agency-buttons","fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill hello-agency-buttons has-normal-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-text-color has-background wp-element-button" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('view all Projects', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:gallery {"linkTo":"none","style":{"spacing":{"margin":{"top":"60px"}}},"className":"hello-agency-portfolio-gallery"} -->
    <figure class="wp-block-gallery has-nested-images columns-default is-cropped hello-agency-portfolio-gallery" style="margin-top:60px"><!-- wp:image {"id":487,"sizeSlug":"large","linkDestination":"custom"} -->
        <figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-487" /></a>
            <figcaption class="wp-element-caption"><?php echo esc_html('SaaS Development', 'cozy-essential-addons') ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":485,"sizeSlug":"large","linkDestination":"custom"} -->
        <figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-485" /></a>
            <figcaption class="wp-element-caption"><?php echo esc_html('Light Detection app', 'cozy-essential-addons') ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":486,"sizeSlug":"large","linkDestination":"custom"} -->
        <figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-486" /></a>
            <figcaption class="wp-element-caption"><?php echo esc_html('Seminar on AI Impact', 'cozy-essential-addons') ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":484,"sizeSlug":"large","linkDestination":"custom"} -->
        <figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-484" /></a>
            <figcaption class="wp-element-caption"><?php echo esc_html('Public Speaking Coach', 'cozy-essential-addons') ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":490,"sizeSlug":"large","linkDestination":"custom"} -->
        <figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url($ct_patterns_images[4]) ?>" alt="" class="wp-image-490" /></a>
            <figcaption class="wp-element-caption"><?php echo esc_html('Public Speaking Seminar', 'cozy-essential-addons') ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":492,"sizeSlug":"large","linkDestination":"custom"} -->
        <figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url($ct_patterns_images[5]) ?>" alt="" class="wp-image-492" /></a>
            <figcaption class="wp-element-caption"><?php echo esc_html('Architect Model Case Study', 'cozy-essential-addons') ?></figcaption>
        </figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->