<?php

/**
 * Title: PRO: Photo Gallery
 * Slug: cozy-essential-addons/sv-photo-gallery
 * Categories: smartversity
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/g1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/g2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/g3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/g4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/g5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"50px"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:50px"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"smartversity-header"} -->
            <h1 class="wp-block-heading smartversity-header" style="font-style:normal;font-weight:400"><?php echo esc_html_e('Photo Gallery', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"fontSize":"normal"} -->
            <p class="has-normal-font-size"><?php echo esc_html_e('At University’s beautiful campus, you’ll find a diverse and welcoming community that will teach you life skills along with having fun. McClintock\'s eye for detail certainly helped with competing theories and timelines.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"color":{"background":"#ffffff00"},"border":{"radius":"0px","width":"1px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;background-color:#ffffff00"><?php echo esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:gallery {"linkTo":"none"} -->
    <figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"lightbox":{"enabled":true},"id":1834,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-1834" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"id":1821,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-1821" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"id":1522,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-1522" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"id":1386,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-1386" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"id":799,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($ct_patterns_images[4]) ?>" alt="" class="wp-image-799" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->