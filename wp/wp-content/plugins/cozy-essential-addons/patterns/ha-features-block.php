<?php

/**
 * Title: Features block
 * Slug: cozy-essential-addons/ha-features-block
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/featured_img.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/features_icon.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Products', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
            <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Features', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"100px"},"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:100px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"70px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":949,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-949" style="height:60px" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"right","level":4} -->
                <h4 class="wp-block-heading has-text-align-right"><?php echo esc_html('100% Responsive', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.5"}}} -->
                <p class="has-text-align-right" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":949,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-949" style="height:60px" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"right","level":4} -->
                <h4 class="wp-block-heading has-text-align-right"><?php echo esc_html('100% Responsive', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.5"}}} -->
                <p class="has-text-align-right" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":949,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-949" style="height:60px" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"right","level":4} -->
                <h4 class="wp-block-heading has-text-align-right"><?php echo esc_html('100% Responsive', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.5"}}} -->
                <p class="has-text-align-right" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":934,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_html($ct_patterns_images[0]) ?>" alt="" class="wp-image-934" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"70px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":949,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-949" style="height:60px" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":4} -->
                <h4 class="wp-block-heading has-text-align-left"><?php echo esc_html('100% Responsive', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}}} -->
                <p class="has-text-align-left" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":949,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-949" style="height:60px" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":4} -->
                <h4 class="wp-block-heading has-text-align-left"><?php echo esc_html('100% Responsive', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}}} -->
                <p class="has-text-align-left" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":949,"height":60,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-949" style="height:60px" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":4} -->
                <h4 class="wp-block-heading has-text-align-left"><?php echo esc_html('100% Responsive', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}}} -->
                <p class="has-text-align-left" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->