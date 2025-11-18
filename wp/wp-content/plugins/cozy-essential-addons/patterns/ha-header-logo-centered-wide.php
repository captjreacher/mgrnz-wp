<?php

/**
 * Title: Header layout with icons and logo centered full width
 * Slug: cozy-essential-addons/ha-header-logo-centered-wide
 * Categories: ha-patterns-pro
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:navigation {"ref":35,"layout":{"type":"flex","justifyContent":"left"}} /--></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":70,"shouldSyncIcon":true} /-->

                <!-- wp:site-title {"level":3,"fontSize":"big"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group"><!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"behance"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:woocommerce/mini-cart /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->