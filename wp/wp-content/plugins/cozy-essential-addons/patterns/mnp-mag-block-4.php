<?php

/**
 * Title: PRO: Magazine Block 4
 * Slug: cozy-essential-addons/mnp-mag-block-4
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"20px"}}},"backgroundColor":"box-background","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group magnewspresss-group-hover has-box-background-background-color has-background" style="margin-top:0;margin-bottom:20px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"fontSize":"big"} -->
        <h5 class="wp-block-heading has-big-font-size"><?php esc_html_e('Today\'s Stories', 'cozy-essential-addons') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
            <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('View All', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"16px","bottom":"0"},"blockGap":{"top":"16px","left":"16px"}}}} -->
    <div class="wp-block-columns" style="margin-top:16px;margin-bottom:0"><!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":27,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"16px"}}} -->
                <!-- wp:post-featured-image {"isLink":true,"height":"330px","style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->

                <!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-categories-background-with-round is-style-categories-background"} /-->

                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"12px"}}},"fontSize":"big"} /-->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-author-name-with-icon","fontSize":"x-small"} /-->

                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-post-date-with-icon","fontSize":"x-small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"excerptLength":29} /-->

                <!-- wp:read-more {"content":"Read More","style":{"border":{"bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"}}}},"textColor":"dark-shade","className":"is-style-readmore-hover-primary-color"} /-->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":27,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"default","columnCount":2}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"16px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:16px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"16px","left":"16px"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"height":"100px","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"normal"} /-->

                                <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"x-small"} /-->

                                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"x-small"} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->