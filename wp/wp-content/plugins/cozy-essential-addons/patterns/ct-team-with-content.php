<?php

/**
 * Title: PRO: Dynamic Team with Excerpt
 * Slug: cozy-essential-addons/ct-team-with-content
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

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":30,"query":{"perPage":"3","pages":0,"offset":0,"postType":"cea_team","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3},"className":"ct-patterns-team"} -->
        <div class="wp-block-query ct-patterns-team"><!-- wp:post-template -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"7px","width":"1px"}},"borderColor":"tertiary-light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-tertiary-light-border-color" style="border-width:1px;border-radius:7px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"width":"160px","height":"160px","align":"center","style":{"border":{"radius":"50%"}}} /--></div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem","left":"1rem","top":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:0px;padding-right:1rem;padding-left:1rem"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"fontSize":"28px"}},"className":"is-style-title-hover-secondary-color"} /-->

                    <!-- wp:post-excerpt {"style":{"typography":{"lineHeight":1.6}},"fontSize":"small"} /-->
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