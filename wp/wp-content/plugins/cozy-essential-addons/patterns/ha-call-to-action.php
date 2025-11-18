<?php

/**
 * Title: Call to Action style 2
 * Slug: cozy-essential-addons/ha-call-to-action
 * Categories: ha-patterns-pro
 */
// $hello_agency_url = trailingslashit(get_template_directory_uri());
// $hello_agency_images = array(
//     $hello_agency_url . 'assets/images/about_img.jpg',
// );
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"64px"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600"><?php echo esc_html('Let\'s Connect Today', 'cozy-essential-addons') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}}} -->
    <p class="has-text-align-center" style="line-height:1.7"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"textAlign":"center","backgroundColor":"heading-color","textColor":"background","style":{"spacing":{"padding":{"left":"35px","right":"35px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
        <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-background-color has-heading-color-background-color has-text-color has-background has-text-align-center wp-element-button" style="padding-top:20px;padding-right:35px;padding-bottom:20px;padding-left:35px"><?php echo esc_html('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->