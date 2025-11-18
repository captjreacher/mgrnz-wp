<?php

/**
 * Title: Latest Post Block Style 2
 * Slug: cozy-essential-addons/ha-latest-post-style-2
 * Categories: ha-patterns-pro
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"80px","top":"80px"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"62px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:62px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
        <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Latest', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
        <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Articles', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":25,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0px"}},"className":"hello-agency-latestposts","layout":{"type":"grid","columnCount":2}} -->
        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":{"top":"0","left":"20px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:post-featured-image {"isLink":true,"height":"100px","align":"wide"} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"80%","style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","lineHeight":"1.5","fontSize":"16px"}}} /-->

                <!-- wp:post-date {"style":{"spacing":{"padding":{"top":"15px","bottom":"0px"}}}} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->