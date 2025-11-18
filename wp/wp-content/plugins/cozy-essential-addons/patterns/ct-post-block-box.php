<?php

/**
 * Title: PRO: Post Block Box Style
 * Slug: cozy-essential-addons/ct-post-block-box
 * Categories: ct-patterns, fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"border-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-border-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
        <h3 class="wp-block-heading has-text-align-center">Latest Post</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size" style="line-height:1.6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":73,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query"><!-- wp:post-template {"fontSize":"xx-small"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"isLink":true,"height":"280px","align":"wide","style":{"border":{"radius":"10px"}}} /-->

                <!-- wp:post-terms {"term":"category","textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"#817f84"}}}},"className":"is-style-categories-background-with-round"} /-->

                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2,"fontSize":"28px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-title-hover-secondary-color"} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->

                    <!-- wp:paragraph -->
                    <p>.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"textAlign":"center","fontSize":"small"} /-->

                <!-- wp:read-more {"content":"Read More","style":{"border":{"radius":"4px","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"background","textColor":"sub-heading-color","className":"is-style-readmore-hover-secondary-fill"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->