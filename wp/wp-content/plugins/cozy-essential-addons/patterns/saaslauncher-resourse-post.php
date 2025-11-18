<?php

/**
 * Title: PRO: Resources and Articles
 * Slug: cozy-essential-addons/saaslauncher-resource-post
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-post"],"patternName":"saaslauncher/latest-post-grid","name":"Latest Articles"},"align":"full","style":{"spacing":{"padding":{"bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"7rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Resources &amp; Articles', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-default" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#b6b1aa","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:12px;padding-top:7px;padding-right:20px;padding-bottom:7px;padding-left:20px;min-height:310px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b6b1aa"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|light-color"}}}}},"textColor":"light-color","fontSize":"x-small"} /--></div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"28px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:28px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"3px"}}},"fontSize":"big"} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"16px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:16px"><!-- wp:paragraph -->
                    <p><?php esc_html_e('Posted On', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"60px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:60px"><!-- wp:button {"gradient":"gradient-thirteen","className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"20px","bottom":"20px"}},"border":{"radius":"60px"}},"fontSize":"normal"} -->
        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-thirteen-gradient-background has-background has-normal-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:var(--wp--preset--spacing--60);padding-bottom:20px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Explore More Resources', 'cozy-essential-addons') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->