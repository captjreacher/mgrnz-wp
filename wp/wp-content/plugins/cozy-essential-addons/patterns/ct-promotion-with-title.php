<?php

/**
 * Title: CT Dynamic Promotion Block with Title
 * Slug: cozy-essential-addons/ct-promotion-with-title
 * Categories: ct-patterns,ct-patterns-promotions
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"x-large"} -->
        <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:500">Special Offer &amp; Promotions</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"textColor":"sub-heading-color","fontSize":"small"} -->
        <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.6">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's&nbsp;<em>De Finibus Bonorum</em></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":12,"query":{"perPage":"4","pages":0,"offset":0,"postType":"cea_promotion","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":2}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"height":"450px","align":"wide","style":{"border":{"radius":"0px"}}} /-->

                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"2rem"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-title-hover-secondary-color","fontSize":"large"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->