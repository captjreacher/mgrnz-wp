<?php

/**
 * Title: Logos Showcase
 * Slug: saaslauncher/logo-showcase
 * Categories: saaslauncher-logos
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/logo_1.png',
    $saaslauncher_url . 'assets/images/logo_2.png',
    $saaslauncher_url . 'assets/images/logo_3.png',
    $saaslauncher_url . 'assets/images/logo_4.png',
    $saaslauncher_url . 'assets/images/logo_5.png',
    $saaslauncher_url . 'assets/images/logo_6.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/logo-showcase","name":"Logos Showcase"},"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"5rem","left":"0","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"bottom":{"width":"0px","style":"none"}}},"gradient":"center-bottom-gradient","layout":{"type":"constrained","contentSize":"980px"}} -->
<div class="wp-block-group alignfull has-center-bottom-gradient-gradient-background has-background" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:4rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:5rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:40px"><!-- wp:heading {"textAlign":"center","level":4,"fontSize":"normal"} -->
        <h4 class="wp-block-heading has-text-align-center has-normal-font-size"><?php esc_html_e('Seamless Integration with Your Favorite Tools', 'saaslauncher') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-bottom:0px"><!-- wp:gallery {"columns":7,"imageCrop":false,"linkTo":"none","className":"saaslauncher-brands is-style-enable-grayscale-mode-on-image","style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"74px"}}}} -->
        <figure class="wp-block-gallery has-nested-images columns-7 saaslauncher-brands is-style-enable-grayscale-mode-on-image" style="margin-top:0px"><!-- wp:image {"id":2788,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2788" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":2789,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2789" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":2790,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2790" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":2791,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2791" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":2795,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2795" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":2793,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-2793" /></figure>
            <!-- /wp:image -->
        </figure>
        <!-- /wp:gallery -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->