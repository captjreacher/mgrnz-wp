<?php

/**
 * Title: PRO: Product Block Text Left
 * Slug: cozy-essential-addons/ct-product-block-text-left
 * Categories: ct-patterns, fotawp-products
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1220px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"10px","left":"10px","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:var(--wp--preset--spacing--40);padding-left:10px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"foreground","fontSize":"xx-small"} -->
        <h3 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-xx-small-font-size" style="margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase">Latest Products</h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:500">Visit our store to grab trending fashion kits</h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":177,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":4}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"minHeight":340,"contentPosition":"top right","isDark":false,"className":"is-style-default ct-product-featured-image-holder"} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-right is-style-default ct-product-featured-image-holder" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"x-small"} /-->

                    <!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left"} /-->
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
<!-- /wp:group -->