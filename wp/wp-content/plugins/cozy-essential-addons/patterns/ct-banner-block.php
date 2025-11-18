<?php

/**
 * Title: PRO: Banner Block
 * Slug: cozy-essential-addons/ct-banner-block
 * Categories: ct-patterns,fotawp-banner
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pattern_small_dark.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"0px"}},"fontSize":"x-small"} -->
            <h5 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase">Welcome to CT PATTERNS</h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"heading-color","fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--60);font-style:normal;font-weight:500;line-height:1">The Ultimate Tools for Your Business.</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"1rem","bottom":"1rem"}},"border":{"radius":"2px"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-heading-color-background-color has-background wp-element-button" style="border-radius:2px;padding-top:1rem;padding-right:var(--wp--preset--spacing--60);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--60)">Signup Now</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"secondary","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"1rem","bottom":"1rem"}},"border":{"radius":"2px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-radius:2px;padding-top:1rem;padding-right:var(--wp--preset--spacing--60);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--60)">Request a Demo</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":424,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-424" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->