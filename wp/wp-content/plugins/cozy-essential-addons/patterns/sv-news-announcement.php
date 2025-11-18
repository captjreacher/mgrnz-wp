<?php

/**
 * Title: PRO: News and Announcement Section
 * Slug: cozy-essential-addons/sv-news-announcement
 * Categories: smartversity
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"}}},"backgroundColor":"primary-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-shade-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"50px"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:50px"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"smartversity-header"} -->
            <h1 class="wp-block-heading smartversity-header" style="font-style:normal;font-weight:400"><?php esc_html_e('News &amp; Announcement', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"fontSize":"normal"} -->
            <p class="has-normal-font-size"><?php esc_html_e('At University’s beautiful campus, you’ll find a diverse and welcoming community that will teach you life skills along with having fun. McClintock\'s eye for detail certainly helped with competing theories and timelines.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"color":{"background":"#ffffff00"},"border":{"radius":"0px","width":"1px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;background-color:#ffffff00"><?php esc_html_e('Explore all Artilces', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"24px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-radius:24px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:query {"queryId":23,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"default","columnCount":3}} -->
                    <!-- wp:post-featured-image {"isLink":true,"height":"357px","align":"wide","style":{"spacing":{"margin":{"bottom":"30px"}},"border":{"radius":"19px"}}} /-->

                    <!-- wp:post-terms {"term":"category","textAlign":"center"} /-->

                    <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"x-large"} /-->

                    <!-- wp:post-excerpt {"textAlign":"center","excerptLength":13} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><?php esc_html_e('Published Date', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:post-date {"format":"M j, Y"} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":23,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"blockGap":"15px"},"border":{"radius":"12px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-radius:12px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-featured-image {"isLink":true,"height":"160px","align":"wide","style":{"spacing":{"margin":{"bottom":"15px"}},"border":{"radius":"10px"}}} /-->

                    <!-- wp:post-terms {"term":"category","textAlign":"center"} /-->

                    <!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"18px"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><?php esc_html_e('Published Date', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:post-date {"format":"M j, Y"} /-->
                    </div>
                    <!-- /wp:group -->
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