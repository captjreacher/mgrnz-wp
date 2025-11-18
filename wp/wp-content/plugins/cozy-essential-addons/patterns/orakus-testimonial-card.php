<?php

/**
 * Title: PRO: Testimonial Card
 * Slug: cozy-essential-addons/orakus-testimonial-card
 * Categories: orakus-testimonial
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/testimonial_1.jpg',
    $orakus_url . 'assets/images/rating_star.png',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["orakus-testimonial"],"patternName":"cozy-essential-addons/orakus-testimonial-card","name":"Testimonials Grid"},"style":{"spacing":{"padding":{"top":"84px","bottom":"84px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:84px;padding-right:var(--wp--preset--spacing--40);padding-bottom:84px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"orakus-hover-box","style":{"border":{"radius":"0px","top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"radius":"0px","width":"0px","style":"none"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"84px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group orakus-hover-box" style="border-radius:0px;border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:84px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"100px","height":"100px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;object-fit:contain;width:100px;height:100px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"textColor":"black-color"} -->
                <h5 class="wp-block-heading has-black-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert Kelpmen', 'cozy-essential-addons') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"foreground","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-color has-text-color has-link-color has-medium-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($orakus_images[1]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->