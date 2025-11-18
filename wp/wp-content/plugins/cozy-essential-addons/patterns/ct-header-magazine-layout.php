<?php

/**
 * Title: PRO: Header Magazine Layout
 * Slug: cozy-essential-addons/ct-header-magazine-layout
 * Categories: ct-patterns
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pattern_adv.png',
);
?>
<!-- wp:group {"className":"ct-header-magazine","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group ct-header-magazine"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|40","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|tertiary-light","width":"1px"}}},"backgroundColor":"foregound-alt","className":"is-style-default","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group is-style-default has-foregound-alt-background-color has-background" style="border-bottom-color:var(--wp--preset--color--tertiary-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>+1 (012) 345-6789</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>| </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>info@yoursite.com</strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:social-links {"iconColor":"sub-heading-color","iconColorValue":"#515151","iconBackgroundColor":"tertiary-light","iconBackgroundColorValue":"#EFEAF7","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
                    <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none","letterSpacing":"5px"}},"fontSize":"x-large"} /-->

            <!-- wp:image {"id":1195,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-1195" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"var:preset|spacing|40","bottom":"0px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|tertiary-light","width":"1px"},"bottom":{"color":"var:preset|color|tertiary-light","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--tertiary-light);border-top-width:1px;border-bottom-color:var(--wp--preset--color--tertiary-light);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"ref":837,"style":{"typography":{"lineHeight":2}}} /-->

            <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}},"backgroundColor":"transparent","textColor":"sub-heading-color","className":"ct-header-search"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->