<?php

/**
 * Title: PRO: Dynamic Portfolio Masonry Col 3 Dark
 * Slug: cozy-essential-addons/ct-portfolio-masonry-dark
 * Categories: ct-patterns, fotawp-portfolio
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#0d0c0c"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#0d0c0c;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
            <h2 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-style:normal;font-weight:500">Portfolio</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9},"color":{"text":"#e3e3e3"}},"fontSize":"small"} -->
            <p class="has-text-align-center has-text-color has-small-font-size" style="color:#e3e3e3;line-height:1.9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":80,"query":{"perPage":"7","pages":0,"offset":0,"postType":"cea_portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"list","columns":3},"className":"ct-portfolio-blocks ct-patterns-masonry"} -->
        <div class="wp-block-query ct-portfolio-blocks ct-patterns-masonry"><!-- wp:post-template -->
            <!-- wp:group {"className":"ct-product-featured-image-holder","layout":{"type":"constrained"}} -->
            <div class="wp-block-group ct-product-featured-image-holder"><!-- wp:post-featured-image /--></div>
            <!-- /wp:group -->

            <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"is-style-title-hover-secondary-color","fontSize":"large"} /-->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->