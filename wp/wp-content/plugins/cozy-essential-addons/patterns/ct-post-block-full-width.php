<?php

/**
 * Title: PRO: Post Block Full Width Image
 * Slug: cozy-essential-addons/ct-post-block-full-width
 * Categories: ct-patterns, fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
        <h3 class="wp-block-heading has-text-align-left">Latest Post</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
        <p class="has-text-align-left has-small-font-size" style="line-height:1.6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":73,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
        <div class="wp-block-query"><!-- wp:post-template {"fontSize":"xx-small"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"var:preset|spacing|60","top":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|tertiary-light","width":"1px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:0px;padding-bottom:var(--wp--preset--spacing--60);padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"459px","align":"wide","style":{"border":{"radius":"5px"}}} /-->

                <!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"#817f84"}}}},"className":"is-style-categories-background-with-round"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2,"fontSize":"28px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-title-hover-secondary-color"} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->

                    <!-- wp:paragraph -->
                    <p>.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->