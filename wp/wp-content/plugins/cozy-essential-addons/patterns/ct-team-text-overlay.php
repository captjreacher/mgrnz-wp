<?php

/**
 * Title: PRO: Dynamic Team Block with Name Overlay
 * Slug: cozy-essential-addons/ct-team-text-overlay
 * Categories: ct-patterns,fotawp-teams
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"x-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:500">Our Team</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9}},"textColor":"sub-heading-color","fontSize":"small"} -->
            <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":30,"query":{"perPage":"3","pages":0,"offset":0,"postType":"cea_team","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"minHeight":480,"customGradient":"linear-gradient(135deg,rgba(0,0,0,0.04) 0%,rgb(1,1,1) 100%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-bottom:var(--wp--preset--spacing--50);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient" style="background:linear-gradient(135deg,rgba(0,0,0,0.04) 0%,rgb(1,1,1) 100%)"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /--></div>
            </div>
            <!-- /wp:cover -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->