<?php

/**
 * Title: PRO: Dynamic Testimonial Block Lite
 * Slug: cozy-essential-addons/ct-testomonial-block-lite
 * Categories: ct-patterns,fotawp-testimonials
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"10px","left":"10px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-left:10px"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="font-style:normal;font-weight:500">Testimonials</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":52,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cea_testimonial","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query"><!-- wp:post-template {"textColor":"sub-heading-color"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"10px","left":"10px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-right:10px;padding-left:10px"><!-- wp:post-content {"style":{"typography":{"fontSize":"18px"}}} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"isLink":true,"width":"60px","height":"60px","align":"wide","style":{"border":{"radius":"50px"}}} /-->

                    <!-- wp:post-title {"level":4,"textColor":"tertiary"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->