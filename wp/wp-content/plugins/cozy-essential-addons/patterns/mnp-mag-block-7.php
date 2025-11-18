<?php

/**
 * Title: PRO: Magazine Block 7
 * Slug: cozy-essential-addons/mnp-mag-block-7
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"20px"},"blockGap":"16px"}},"backgroundColor":"box-background","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"100%"}} -->
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

    <!-- wp:cozy-block/post-carousel {"blockClientId":"9f690349-f7eb-47f8-b774-c0b01774722c","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","positionVertical":10},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":50,"backgroundColor":"#0047B3","color":"#FFFFFF","backgroundColorHover":"#FF8E09","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":true,"centeredSlides":false,"slidesPerView":"1","spaceBetween":24,"speed":700}}} -->
    <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_9f690349_f7eb_47f8_b774_c0b01774722c"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
        <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"second-box-background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-second-box-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"isUserOverlayColor":true,"focalPoint":{"x":0.49,"y":0.08},"minHeight":480,"gradient":"primary-gradient-btm","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"16px","bottom":"40px","left":"16px","right":"16px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:16px;padding-right:16px;padding-bottom:40px;padding-left:16px;min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim has-background-gradient has-primary-gradient-btm-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-categories-background-with-round is-style-categories-background"} /-->

                        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"12px"}}},"fontSize":"large"} /-->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","className":"is-style-author-name-with-white-icon","fontSize":"x-small"} /-->

                            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","className":"is-style-post-date-with-white-icon","fontSize":"x-small"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/post-carousel -->

    <!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"second-box-background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-second-box-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"isUserOverlayColor":true,"minHeight":190,"gradient":"dark-gradient-btm","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;min-height:190px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim has-background-gradient has-dark-gradient-btm-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-categories-background-with-round is-style-categories-background"} /--></div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"16px","left":"16px","right":"16px","top":"5px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"12px"}}},"fontSize":"normal"} /-->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-author-name-with-icon","fontSize":"x-small"} /-->

                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-post-date-with-icon","fontSize":"x-small"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->