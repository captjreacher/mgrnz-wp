<?php

/**
 * Title: Latest Post Grid
 * Slug: saaslauncher/latest-post-grid
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/latest-post-grid","name":"Latest Post Grid"},"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:3rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center is-style-default has-light-color-color has-text-color has-link-color has-xxx-large-font-size"><?php esc_html_e('Latest News &amp; Articles', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-default" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#b6b1aa","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"18px","bottom":"18px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect-with-shadow" style="border-radius:20px;padding-top:18px;padding-right:20px;padding-bottom:18px;padding-left:20px;min-height:310px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b6b1aa"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"28px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:28px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:0px;margin-bottom:15px"><!-- wp:post-date {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /--></div>
                <!-- /wp:group -->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.5","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"5px"}}}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->