<?php

/**
 * Title: PRO: Latest Posts 2
 * Slug: cozy-essential-addons/modestra-posts-2
 * Categories: modestra
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column {"width":"35%"} -->
        <div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"780px","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"heading-color","fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color has-x-large-font-size" style="line-height:1.3"><?php esc_html_e('Latests Articles &amp; Insights', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"8px","bottom":"8px"}},"border":{"radius":"80px"}},"fontSize":"medium"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:80px;padding-top:8px;padding-right:24px;padding-bottom:8px;padding-left:24px"><?php esc_html_e('More Articles', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":22,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"48px"}},"layout":{"type":"default","columnCount":"2"}} -->
                <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"48px"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{},"right":{},"left":{}}}} -->
                <div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-bottom:48px"><!-- wp:column {"width":"33.33%"} -->
                    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:avatar {"size":60,"style":{"border":{"radius":"60px"}}} /-->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium","fontFamily":"sora"} /-->

                                <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"66.66%"} -->
                    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-faded-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} /--></div>
                            <!-- /wp:group -->

                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} /-->

                            <!-- wp:post-excerpt {"moreText":"","excerptLength":21,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} /-->

                            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:read-more {"content":"Read More","className":"is-style-readmore-hover-secondary-color","style":{"border":{"bottom":{"width":"1px"},"top":{},"right":{},"left":{}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->