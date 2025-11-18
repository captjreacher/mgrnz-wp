<?php

/**
 * Title: PRO: Offer Display Section
 * Slug: cozy-essential-addons/lavisto-offer-section
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/offerbg.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Offer Section"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1957,"hasParallax":true,"dimRatio":30,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":740,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover has-parallax" style="min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-30 has-background-dim"></span>
        <div class="wp-block-cover__image-background wp-image-1957 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($ct_patterns_media[0]) ?>)"></div>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
                <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size"><?php esc_html_e('Exclusive Offer!', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px","bottom":"0"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"18px","textTransform":"uppercase"},"spacing":{"padding":{"left":"45px","right":"45px","top":"18px","bottom":"18px"}},"border":{"radius":"0px","width":"1px"}},"className":"is-style-button-hover-hard-black-shadow","fontFamily":"montagu-slab"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:18px;padding-right:45px;padding-bottom:18px;padding-left:45px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->