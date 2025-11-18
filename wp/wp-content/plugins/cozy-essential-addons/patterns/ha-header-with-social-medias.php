<?php

/**
 * Title: Header layout with Social Icons and nav centered
 * Slug: cozy-essential-addons/ha-header-with-social-medias
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

        <!-- wp:navigation {"ref":35,"layout":{"type":"flex","justifyContent":"center"}} /-->

        <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}},"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

            <!-- wp:social-link {"url":"#","service":"behance"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->