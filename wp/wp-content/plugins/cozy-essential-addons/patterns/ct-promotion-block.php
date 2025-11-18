<?php

/**
 * Title: CT Dynamic Promotion Block
 * Slug: cozy-essential-addons/ct-promotion-block
 * Categories: ct-patterns,ct-patterns-promotions
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"gradient":"third-primary-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-third-primary-gradient-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"x-large"} -->
        <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:500">Special Offer &amp; Promotions</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"textColor":"tertiary-light","fontSize":"small"} -->
        <p class="has-text-align-center has-tertiary-light-color has-text-color has-small-font-size" style="line-height:1.6">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's <em>De Finibus Bonorum</em></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cea_promotion","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"radius":"5px"}}} /-->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->