<?php

/**
 * Title: PRO: Hero with Text Center
 * Slug: cozy-essential-addons/saaslauncher-hero-center
 * Categories: saaslauncher-hero
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"gradient":"gradient-one","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-gradient-one-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Join the Force Behind Scalable Software!', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image {"id":267,"sizeSlug":"large","linkDestination":"none","align":"wide","style":{"border":{"radius":"12px"}}} -->
    <figure class="wp-block-image alignwide size-large has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-267" style="border-radius:12px" /></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->