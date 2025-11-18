<?php

/**
 * Title: PRO: Magazine Featured List Block
 * Slug: cozy-essential-addons/ct-magazine-featured-list
 * Categories: ct-patterns, fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px"}},"textColor":"primary","fontSize":"medium"} -->
            <h3 class="wp-block-heading has-primary-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">Featured Heading</h3>
            <!-- /wp:heading -->

            <!-- wp:separator {"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
            <div class="wp-block-group" style="padding-top:0"><!-- wp:query {"queryId":21,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":4}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":460,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","isDark":false,"align":"center","className":"is-style-default"} -->
                        <div class="wp-block-cover aligncenter is-light has-custom-content-position is-position-bottom-left is-style-default" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"is-style-categories-background-with-round"} /--></div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"40px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0","bottom":"var:preset|spacing|30","left":"0"}}},"className":"is-style-title-hover-secondary-color"} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"textColor":"light-gray","fontSize":"normal"} /-->

                            <!-- wp:paragraph -->
                            <p>.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:post-date {"textColor":"light-gray","fontSize":"normal"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt /-->

                        <!-- wp:read-more {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|40","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"background","className":"is-style-readmore-hover-secondary-fill"} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
            <div class="wp-block-group" style="padding-top:0"><!-- wp:query {"queryId":21,"query":{"perPage":"5","pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
                        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":120,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","isDark":false,"className":"is-style-default"} -->
                                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-default" style="min-height:120px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                        <p class="has-text-align-center has-large-font-size"></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                </div>
                                <!-- /wp:cover -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","width":"72%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:72%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px","lineHeight":1.2},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|30","left":"0"}}},"className":"is-style-title-hover-secondary-color"} /-->

                                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"textColor":"light-gray","fontSize":"normal"} /-->

                                        <!-- wp:post-date {"textColor":"light-gray","fontSize":"normal"} /-->
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
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->