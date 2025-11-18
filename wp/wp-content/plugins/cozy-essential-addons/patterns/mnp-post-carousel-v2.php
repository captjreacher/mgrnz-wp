<?php

/**
 * Title: PRO: Post Carousel Verticle 2
 * Slug: cozy-essential-addons/mnp-post-carousel-v2
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"16px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"460px"}} -->
<div class="wp-block-group magnewspresss-group-hover has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0px;margin-bottom:16px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
        <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Editor\'s Pick', 'cozy-essential-addons') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/news-ticker {"blockClientId":"7d19212f-e8e1-4095-8274-4f996785499c","height":560,"carouselOptions":{"navigation":{"enabled":true,"verticalGap":-60,"horizontalGap":42,"iconSize":12,"iconBoxWidth":30,"iconBoxHeight":30,"borderRadius":50,"backgroundColor":"#F0F1F4","color":"#0047B3","backgroundColorHover":"#0047B3","colorHover":"#fff"},"sliderOptions":{"loop":true,"autoplay":true,"slidesPerView":"3","spaceBetween":16,"speed":700}}} -->
        <div class="cozy-block-news-ticker-wrapper " id="cozyBlock_7d19212f_e8e1_4095_8274_4f996785499c"><!-- wp:query {"queryId":1,"query":{"perPage":"7","postType":"post"},"lock":{"move":false,"remove":true},"className":"swiper-container swiper-vertical"} -->
            <div class="wp-block-query swiper-container swiper-vertical"><!-- wp:post-template {"lock":{"move":false,"remove":true},"style":{"spacing":{"blockGap":"0px"}},"className":"swiper-wrapper"} -->
                <!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"overlayColor":"dark-box-background","isUserOverlayColor":true,"minHeight":180,"contentPosition":"bottom left","className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left magnewspress-translate-cover" style="min-height:180px"><span aria-hidden="true" class="wp-block-cover__background has-dark-box-background-background-color has-background-dim-40 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0px","right":"0px"}},"typography":{"fontSize":"10px","textTransform":"uppercase"}},"className":"is-style-categories-background"} /-->

                            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"0"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"}},"textColor":"heading-color","className":"is-style-default","fontSize":"big"} /-->

                            <!-- wp:post-date {"style":{"typography":{"fontSize":"12px"}},"className":"is-style-post-date-with-white-icon"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
            <div class="swiper-button-prev cozy-block-button-prev"></div>
            <div class="swiper-button-next cozy-block-button-next"></div>
        </div>
        <!-- /wp:cozy-block/news-ticker -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->