<?php

/**
 * Title: PRO: Product Block Featured Product Display 
 * Slug: cozy-essential-addons/ct-product-block-featured
 * Categories: ct-patterns, fotawp-products
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"foreground","fontSize":"xx-small"} -->
        <h3 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-xx-small-font-size" style="margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase">Men's Collection</h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:500">Visit our store to grab trending fashion kits</h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"><!-- wp:woocommerce/featured-product {"dimRatio":70,"editMode":false,"focalPoint":{"x":0.5,"y":0.5},"imageFit":"cover","minHeight":582,"overlayColor":"#25133F","productId":382,"backgroundColor":"background-alt","textColor":"background","style":{"border":{"radius":"0px"}}} -->
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"foregound-alt","style":{"border":{"radius":"2px"}},"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foregound-alt-color has-text-color wp-element-button" href="http://localhost:8888/dowp/product/cap/" style="border-radius:2px">Shop now</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
            <!-- /wp:woocommerce/featured-product -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":177,"query":{"perPage":"6","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0","top":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"minHeight":210,"contentPosition":"top right","isDark":false,"className":"is-style-default"} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-right is-style-default" style="min-height:210px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="margin-top:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                            <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->