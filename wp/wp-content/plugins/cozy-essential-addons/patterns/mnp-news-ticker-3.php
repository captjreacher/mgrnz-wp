<?php

/**
 * Title: PRO: News Ticker 3
 * Slug: cozy-essential-addons/mnp-news-ticker-3
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"16px","bottom":"16px"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:16px;padding-right:var(--wp--preset--spacing--40);padding-bottom:16px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Breaking News', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:cozy-block/icon-picker {"blockClientId":"fda2f070-3482-4ba0-aba4-49f960fd0351","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z","iconColor":"#0047B3"} -->
            <div class="cozy-block-icon-picker default" id="cozyBlock_fda2f070_3482_4ba0_aba4_49f960fd0351"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#0047B3">
                    <path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path>
                </svg></div>
            <!-- /wp:cozy-block/icon-picker -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cozy-block/post-carousel {"blockClientId":"322a4f4e-e464-49f1-b5b5-a9e190cc0983","carouselOptions":{"pagination":{"enabled":false,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","positionVertical":-20},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":50,"backgroundColor":"#0047B3","color":"#FFFFFF","backgroundColorHover":"#FF8E09","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":true,"centeredSlides":false,"slidesPerView":"4","spaceBetween":30,"speed":700}}} -->
        <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_322a4f4e_e464_49f1_b5b5_a9e190cc0983"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
            <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"16px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
                <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"60px"} -->
                    <div class="wp-block-column" style="flex-basis:60px"><!-- wp:post-featured-image {"width":"60px","height":"60px"} /--></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"10px"}}} -->
                    <div class="wp-block-column"><!-- wp:post-title {"level":5,"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontSize":"medium"} /-->

                        <!-- wp:post-date /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
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