<?php

/**
 * Title: PRO: Product Shop/Showcase
 * Slug: cozy-essential-addons/hb-product-showcase
 * Categories: handyman-blocks
 */
?>
<!-- wp:group {"metadata":{"name":"Product Shop"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Shop', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":73,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"grid","columnCount":4}} -->
        <!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"border-light-color","className":"is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-handyman-blocks-boxshadow-medium has-border-color has-border-light-color-border-color" style="border-width:1px"><!-- wp:post-featured-image {"isLink":true,"height":"300px"} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"10px","bottom":"24px","left":"24px","right":"24px"},"blockGap":"var:preset|spacing|30"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:10px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"bottom":"10px","top":"20px"}}},"fontSize":"medium"} /-->

                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
        <p></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"54px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:54px"><!-- wp:button {"textColor":"heading-color","style":{"spacing":{"padding":{"left":"54px","right":"54px","top":"18px","bottom":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button" style="padding-top:18px;padding-right:54px;padding-bottom:18px;padding-left:54px"><?php esc_html_e('Explore Store', 'cozy-essential-addons') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->