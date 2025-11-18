<?php

/**
 * Title: Product Blocks with Offer style 2
 * Slug: cozy-essential-addons/ha-products-block-with-offer-2
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/featured_img.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"80px","top":"80px"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Featured', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
            <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Products', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":66,"query":{"perPage":"6","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:group {"style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"hello-agency-products","layout":{"type":"constrained"}} -->
                <div class="wp-block-group hello-agency-products" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-default","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                        <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p><?php echo esc_html('Products not found!', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":1304,"dimRatio":50,"minHeight":620,"style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1304" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xxx-large"} -->
                    <h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html('Flat 50% Discount on Summer Sale!', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"heading-color","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-button-hover-primary-bgcolor","fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-medium-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-heading-color-background-color has-background wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px"><?php echo esc_html('Visit Store', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->