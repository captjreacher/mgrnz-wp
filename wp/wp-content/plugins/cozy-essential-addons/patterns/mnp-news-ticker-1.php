<?php

/**
 * Title: PRO: News Ticker 1
 * Slug: cozy-essential-addons/mnp-news-ticker-1
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"16px","bottom":"16px"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:16px;padding-right:var(--wp--preset--spacing--40);padding-bottom:16px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"160px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:160px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Breaking News', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:cozy-block/icon-picker {"blockClientId":"92f48a27-2344-4cb9-935f-f341bb14d7d5","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z","iconColor":"#0047B3"} -->
                    <div class="cozy-block-icon-picker default" id="cozyBlock_92f48a27_2344_4cb9_935f_f341bb14d7d5"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#0047B3">
                            <path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path>
                        </svg></div>
                    <!-- /wp:cozy-block/icon-picker -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":""} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cozy-block/news-ticker {"blockClientId":"10a4be2c-30df-4114-8a1c-8e2d6277a89e","height":25,"carouselOptions":{"navigation":{"enabled":true,"verticalGap":2,"horizontalGap":40,"iconSize":15,"iconBoxWidth":20,"iconBoxHeight":20,"borderRadius":1,"backgroundColor":"#ffffff00","color":"#091F44","backgroundColorHover":"#ffffff00","colorHover":"#0047B3"},"sliderOptions":{"loop":true,"autoplay":true,"slidesPerView":"1","spaceBetween":30,"speed":700}}} -->
                <div class="cozy-block-news-ticker-wrapper " id="cozyBlock_10a4be2c_30df_4114_8a1c_8e2d6277a89e"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"swiper-container swiper-vertical"} -->
                    <div class="wp-block-query swiper-container swiper-vertical"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"swiper-wrapper"} -->
                        <!-- wp:post-title {"fontSize":"medium"} /-->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                    <div class="swiper-button-prev cozy-block-button-prev"></div>
                    <div class="swiper-button-next cozy-block-button-next"></div>
                </div>
                <!-- /wp:cozy-block/news-ticker -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->