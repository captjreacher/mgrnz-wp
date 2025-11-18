<?php

/**
 * Title: PRO: Latest Posts 
 * Slug: cozy-essential-addons/modestra-posts-1
 * Categories: modestra
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"780px","justifyContent":"left"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"border":{"width":"1px","radius":"60px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"10px","right":"10px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-modestra-group-gradient-border" style="border-width:1px;border-radius:60px;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px"><!-- wp:heading {"textAlign":"center","level":4,"className":"is-style-modestra-heading-gradient-effect","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
                <h4 class="wp-block-heading has-text-align-center is-style-modestra-heading-gradient-effect has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Blogs', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.4"}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="line-height:1.4"><?php esc_html_e('Latests Articles &amp; Insights', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":22,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"48px"}},"layout":{"type":"default","columnCount":"2"}} -->
                <!-- wp:group {"className":"is-style-default modestra-hover-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-default modestra-hover-box has-light-color-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":320,"gradient":"gradient-primary-secondary","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"top":"18px","bottom":"18px","left":"28px","right":"28px"}},"border":{"radius":"12px"},"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:12px;margin-bottom:0px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-primary-secondary-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} /--></div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"32px","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:32px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"32px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}}} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-date /-->

                            <!-- wp:paragraph -->
                            <p>//</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt {"moreText":"","excerptLength":21,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":22,"query":{"perPage":"2","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"grid","columnCount":"2"}} -->
                <!-- wp:group {"className":"is-style-default modestra-hover-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-default modestra-hover-box has-light-color-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":260,"gradient":"gradient-primary-secondary","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"top":"18px","bottom":"18px","left":"28px","right":"28px"}},"border":{"radius":"12px"},"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:12px;margin-bottom:0px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-primary-secondary-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} /--></div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"32px","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:32px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"big"} /-->

                        <!-- wp:post-date /-->

                        <!-- wp:post-excerpt {"moreText":"","excerptLength":21,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} /-->
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