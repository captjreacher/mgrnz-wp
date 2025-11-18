<?php

/**
 * Title: PRO: Banner with parallax background
 * Slug: cozy-essential-addons/modestra-banner-parallax
 * Categories: modestra-hero
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/rocket.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":7743,"hasParallax":true,"isUserOverlayColor":true,"minHeight":780,"gradient":"primarydark-gradient","className":"is-style-modestra-cover-modestra-parallax-effect","style":{"color":{"duotone":"var:preset|duotone|white-primary"}},"layout":{"type":"constrained","contentSize":"980px"}} -->
    <div class="wp-block-cover has-parallax is-style-modestra-cover-modestra-parallax-effect" style="min-height:780px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primarydark-gradient-gradient-background"></span>
        <div class="wp-block-cover__image-background wp-image-7743 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($ct_patterns_media[0]) ?>)"></div>
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","fontSize":"64px","textTransform":"uppercase"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Building Digital Experiences That Make an Impact', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:40px"><!-- wp:button {"backgroundColor":"light-color","textColor":"primary","className":"is-style-button-hover-simple-arrow","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}},"border":{"radius":"80px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-simple-arrow has-medium-font-size"><a class="wp-block-button__link has-primary-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:80px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Discover More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->