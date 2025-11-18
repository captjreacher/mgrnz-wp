<?php

/**
 * Title: PRO: Upcoming Events & Notices
 * Slug: cozy-essential-addons/sv-upcoming-events
 * Categories: smartversity
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"backgroundColor":"neutral-color","textColor":"heading-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-heading-color-color has-neutral-color-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"50px"}}}} -->
    <h1 class="wp-block-heading has-text-align-center" style="margin-bottom:50px;font-style:normal;font-weight:400"><?php echo esc_html_e('Upcoming Events', 'cozy-essential-addons') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":23,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"default","columnCount":2}} -->
        <!-- wp:columns {"verticalAlignment":"center","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"bottom":"30px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-bottom:30px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
                <h5 class="wp-block-heading" style="font-style:normal;font-weight:400"><?php echo esc_html_e('Published On', 'cozy-essential-addons') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:post-date /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"big"} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-excerpt {"excerptLength":13} /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"textColor":"heading-color","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"0px","width":"1px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;background-color:#ffffff00"><?php echo esc_html_e('View all Events', 'cozy-essential-addons') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->