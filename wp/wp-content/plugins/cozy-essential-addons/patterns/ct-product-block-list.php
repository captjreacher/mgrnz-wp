<?php

/**
 * Title: PRO: Product Block List 
 * Slug: cozy-essential-addons/ct-product-block-list
 * Categories: ct-patterns, fotawp-products
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"10px","left":"10px","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:var(--wp--preset--spacing--40);padding-left:10px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"foreground","fontSize":"xx-small"} -->
        <h3 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-xx-small-font-size" style="margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase">Latest Products</h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:500">Visit our store to grab trending fashion kits</h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":177,"query":{"perPage":"3","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"list","columns":2}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem","top":"1rem","right":"1rem","left":"1rem"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns {"verticalAlignment":"center"} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"minHeight":218,"minHeightUnit":"px","contentPosition":"top right","isDark":false,"className":"is-style-fotawp-cover-round-style"} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-right is-style-fotawp-cover-round-style" style="min-height:218px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"primary","layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group has-primary-color has-text-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"x-small"} /-->

                            <!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                            <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left"} /-->

                            <!-- wp:post-excerpt {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"foreground","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

                            <!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"is-style-fill","style":{"layout":{"selfStretch":"fit"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"13px"}}} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
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
<!-- /wp:group -->