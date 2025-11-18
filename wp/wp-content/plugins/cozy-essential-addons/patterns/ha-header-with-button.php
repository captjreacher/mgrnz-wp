<?php

/**
 * Title: Header layout with CTA button and nav centered
 * Slug: cozy-essential-addons/ha-header-with-button
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

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"heading-color","textColor":"background","style":{"spacing":{"padding":{"left":"25px","right":"25px","top":"15px","bottom":"15px"}}},"className":"is-style-button-hover-primary-bgcolor"} -->
            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-background-color has-heading-color-background-color has-text-color has-background wp-element-button" style="padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px"><?php echo esc_html('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->