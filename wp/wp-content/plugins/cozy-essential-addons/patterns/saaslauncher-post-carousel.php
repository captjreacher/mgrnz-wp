<?php

/**
 * Title: PRO: Latest Post Carousel
 * Slug: cozy-essential-addons/saaslauncher-post-carousel
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-post"],"patternName":"cozy-essential-addons/saaslauncher-post-carousel","name":"PRO: Latest Post Carousel"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"0","right":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="padding-top:7rem;padding-right:0;padding-bottom:7rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"},"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Latest News &amp; Articles', 'saaslauncher') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0"><!-- wp:cozy-block/post-carousel {"blockClientId":"1c5f10a5-d771-4ed0-8de4-ee509a9c6e1e","carouselOptions":{"pagination":{"enabled":false,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#AC5BFF","color":"#FFFFFE","activeColorHover":"#6967FF","colorHover":"#6967FF","align":"center","positionVertical":-20,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"backgroundColor":"#fff","color":"#AC5BFF","backgroundColorHover":"#6967FF","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":true,"centeredSlides":false,"slidesPerView":2.5,"spaceBetween":28,"speed":700}}} -->
        <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_1c5f10a5_d771_4ed0_8de4_ee509a9c6e1e"><!-- wp:query {"queryId":1,"query":{"perPage":7,"postType":"post","offset":0},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
            <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
                <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-default" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"380px","style":{"border":{"radius":"12px"}}} /-->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:40px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-date {"className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} /-->

                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.4","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"20px"}}}} /-->
                    </div>
                    <!-- /wp:group -->
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