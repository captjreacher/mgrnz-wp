<?php

/**
 * Title: PRO: Post Carousel 1
 * Slug: cozy-essential-addons/mnp-post-carousel
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-box-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Breaking News', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:cozy-block/icon-picker {"blockClientId":"f6dbac72-ad43-418c-9bdb-4198a2212798","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z","iconColor":"#2D2D2D"} -->
            <div class="cozy-block-icon-picker default" id="cozyBlock_f6dbac72_ad43_418c_9bdb_4198a2212798"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#2D2D2D">
                    <path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path>
                </svg></div>
            <!-- /wp:cozy-block/icon-picker -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cozy-block/post-carousel {"blockClientId":"dce7724d-5e71-4380-9536-6c7b92820ba2","carouselOptions":{"pagination":{"enabled":false,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","positionVertical":-20},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":50,"backgroundColor":"#0047B3","color":"#FFFFFF","backgroundColorHover":"#FF8E09","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":true,"centeredSlides":false,"slidesPerView":"4","spaceBetween":24,"speed":700}}} -->
            <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_dce7724d_5e71_4380_9536_6c7b92820ba2"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
                <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"height":"280px"} /-->

                        <!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|second-cat-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                        <!-- wp:post-title {"level":5,"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"4px","bottom":"12px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontSize":"medium"} /-->

                        <!-- wp:post-date /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
                <div class="swiper-button-prev cozy-block-button-prev"></div>
                <div class="swiper-button-next cozy-block-button-next"></div>
            </div>
            <!-- /wp:cozy-block/post-carousel -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->