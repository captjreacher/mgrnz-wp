<?php

/**
 * Title: PRO: Call to Action Text Center
 * Slug: cozy-essential-addons/orakus-cta-text-center
 * Categories: orakus-cta
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/about_3.jpg',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["orakus-cta"],"patternName":"cozy-essential-addons/orakus-cta-cover","name":"Call to Action Cover"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":13556,"dimRatio":50,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":540,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-cover" style="min-height:540px"><img class="wp-block-cover__image-background wp-image-13556" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","bottom":"0"}}},"fontSize":"mega"} -->
                <h1 class="wp-block-heading has-text-align-center has-mega-font-size" style="margin-top:0px;margin-bottom:0;line-height:1.3"><?php esc_html_e('Let’s Create Something Beautiful Together', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"typography":{"textTransform":"uppercase"}}} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px;text-transform:uppercase"><?php esc_html_e('Schedule an appointment', 'cozy-essential-addons') ?></a></div>
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