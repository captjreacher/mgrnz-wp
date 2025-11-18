<?php

/**
 * Title: Header layout with Cart Icon
 * Slug: cozy-essential-addons/ha-header-with-cart-icon
 * Categories: ha-patterns-pro
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":70,"shouldSyncIcon":true} /-->

            <!-- wp:site-title {"level":3,"fontSize":"big"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"ref":35,"layout":{"type":"flex","justifyContent":"center"}} /-->

            <!-- wp:woocommerce/mini-cart /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->