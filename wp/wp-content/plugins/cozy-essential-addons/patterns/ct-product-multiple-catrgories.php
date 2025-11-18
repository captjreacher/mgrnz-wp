<?php

/**
 * Title: PRO: Product Multiple Categories Display
 * Slug: cozy-essential-addons/ct-product-multiple-categories
 * Categories: ct-patterns, fotawp-products
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1220px"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"borderColor":"tertiary-light"} -->
    <div class="wp-block-columns has-border-color has-tertiary-light-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"},"blockGap":"0"},"border":{"bottom":{"color":"var:preset|color|tertiary-light","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary-light);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"2px"}},"fontSize":"small"} -->
                <h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px;text-transform:uppercase">Category One</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":177,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"list","columns":2}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","top":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"minHeight":95,"minHeightUnit":"px","contentPosition":"top right","isDark":false,"className":"is-style-fotawp-cover-round-style"} -->
                            <div class="wp-block-cover is-light has-custom-content-position is-position-top-right is-style-fotawp-cover-round-style" style="min-height:95px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"#9b9898"}}},"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"x-small"} /-->

                                    <!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","right":"0","bottom":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left"} /-->
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
        <!-- /wp:column -->

        <!-- wp:column {"width":"","style":{"border":{"right":{"color":"var:preset|color|tertiary-light","width":"1px"},"left":{"color":"var:preset|color|tertiary-light","width":"1px"}},"spacing":{"padding":{"left":"2%","right":"2%"}}}} -->
        <div class="wp-block-column" style="border-right-color:var(--wp--preset--color--tertiary-light);border-right-width:1px;border-left-color:var(--wp--preset--color--tertiary-light);border-left-width:1px;padding-right:2%;padding-left:2%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"},"blockGap":"0"},"border":{"bottom":{"color":"var:preset|color|tertiary-light","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary-light);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"2px"}},"fontSize":"small"} -->
                <h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px;text-transform:uppercase">Category Two</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":177,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"list","columns":2}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","top":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"minHeight":95,"minHeightUnit":"px","contentPosition":"top right","isDark":false,"className":"is-style-fotawp-cover-round-style"} -->
                            <div class="wp-block-cover is-light has-custom-content-position is-position-top-right is-style-fotawp-cover-round-style" style="min-height:95px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"#9b9898"}}},"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"x-small"} /-->

                                    <!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","right":"0","bottom":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left"} /-->
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
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"},"blockGap":"0"},"border":{"bottom":{"color":"var:preset|color|tertiary-light","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary-light);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"2px"}},"fontSize":"small"} -->
                <h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px;text-transform:uppercase">Category Three</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":177,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"list","columns":2}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","top":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"minHeight":95,"minHeightUnit":"px","contentPosition":"top right","isDark":false,"className":"is-style-fotawp-cover-round-style"} -->
                            <div class="wp-block-cover is-light has-custom-content-position is-position-top-right is-style-fotawp-cover-round-style" style="min-height:95px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"#9b9898"}}},"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"x-small"} /-->

                                    <!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","right":"0","bottom":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left"} /-->
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
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->