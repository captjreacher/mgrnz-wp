<?php

/**
 * Title: PRO: Call to Action 4
 * Slug: cozy-essential-addons/orakus-cta-4
 * Categories: orakus-cta
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/cta_bg_1.jpg',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["orakus-cta"],"patternName":"cozy-essential-addons/orakus-cta-cover","name":"Call to Action Cover"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":13556,"dimRatio":50,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":360,"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-cover" style="min-height:360px"><img class="wp-block-cover__image-background wp-image-13556" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","bottom":"0"}}},"fontSize":"mega"} -->
                    <h1 class="wp-block-heading has-text-align-left has-mega-font-size" style="margin-top:0px;margin-bottom:0;line-height:1.3"><?php esc_html_e('Let’s Create Something Beautiful Together', 'cozy-essential-addons') ?></h1>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:0px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"typography":{"textTransform":"uppercase"}}} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;text-transform:uppercase"><?php esc_html_e('Explore Collections', 'cozy-essential-addons') ?></a></div>
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