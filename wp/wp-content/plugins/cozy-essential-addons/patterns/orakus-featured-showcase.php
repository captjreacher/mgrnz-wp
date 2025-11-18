<?php

/**
 * Title: PRO: Featured Products Showcase
 * Slug: cozy-essential-addons/orakus-featured-showcase
 * Categories: orakus-store
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/featured_product_1.jpg',
    $orakus_url . 'assets/images/featured_product_2.jpg',
    $orakus_url . 'assets/images/featured_product_3.jpg',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["orakus"],"patternName":"cozy-essential-addons/orakus-featured-showcase","name":"Featured Categories Showcase"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"blockGap":{"top":"20px","left":"20px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":13570,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":790,"contentPosition":"top left","isDark":false,"className":"is-style-orakus-cover-hover-style","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-orakus-cover-hover-style" style="border-radius:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:790px"><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-13570" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"260px"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"textColor":"heading-color","fontSize":"xx-large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Premium Office Chair', 'orakus') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"textTransform":"none","fontStyle":"italic","fontWeight":"500"},"elements":{"link":{"color":{"text":"#6e6e6e"}}},"color":{"text":"#6e6e6e"}},"fontSize":"large"} -->
                        <p class="has-text-color has-link-color has-large-font-size" style="color:#6e6e6e;font-style:italic;font-weight:500;text-transform:none"><?php esc_html_e('From $750.00', 'orakus') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-default","style":{"spacing":{"margin":{"top":"10px"}}}} -->
                        <div class="wp-block-buttons is-style-default" style="margin-top:10px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"radius":"0px","width":"1px"},"left":{"radius":"0px","width":"0px","style":"none"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><?php esc_html_e('Shop Now', 'orakus') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"0px","left":"0px"}}}} -->
        <div class="wp-block-column" style="padding-right:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":13572,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":380,"contentPosition":"top left","isDark":false,"className":"is-style-orakus-cover-hover-style","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-orakus-cover-hover-style" style="border-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-13572" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"260px"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"textColor":"heading-color","fontSize":"xx-large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Soft Cushion Sitting Stool', 'orakus') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"textTransform":"none","fontStyle":"italic","fontWeight":"500"},"elements":{"link":{"color":{"text":"#6e6e6e"}}},"color":{"text":"#6e6e6e"}},"fontSize":"large"} -->
                        <p class="has-text-color has-link-color has-large-font-size" style="color:#6e6e6e;font-style:italic;font-weight:500;text-transform:none"><?php esc_html_e('From $450.00', 'orakus') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-default","style":{"spacing":{"margin":{"top":"10px"}}}} -->
                        <div class="wp-block-buttons is-style-default" style="margin-top:10px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"radius":"0px","width":"1px"},"left":{"radius":"0px","width":"0px","style":"none"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><?php esc_html_e('Shop Now', 'orakus') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:cover {"url":"<?php echo esc_url($orakus_images[2]) ?>","id":13573,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":380,"contentPosition":"top left","isDark":false,"className":"is-style-orakus-cover-hover-style","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-orakus-cover-hover-style" style="border-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-13573" alt="" src="<?php echo esc_url($orakus_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"260px"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"textColor":"heading-color","fontSize":"xx-large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Sustainable Bamboo Furniture', 'orakus') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"textTransform":"none","fontStyle":"italic","fontWeight":"500"},"elements":{"link":{"color":{"text":"#6e6e6e"}}},"color":{"text":"#6e6e6e"}},"fontSize":"large"} -->
                        <p class="has-text-color has-link-color has-large-font-size" style="color:#6e6e6e;font-style:italic;font-weight:500;text-transform:none"><?php esc_html_e('From $940.00', 'orakus') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-default","style":{"spacing":{"margin":{"top":"10px"}}}} -->
                        <div class="wp-block-buttons is-style-default" style="margin-top:10px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"radius":"0px","width":"1px"},"left":{"radius":"0px","width":"0px","style":"none"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><?php esc_html_e('Shop Now', 'orakus') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->