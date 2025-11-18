<?php

/**
 * Title: PRO: Latest Articles Carousel
 * Slug: cozy-essential-addons/hb-latest-articles
 * Categories: handyman-blocks
 */
?>
<!-- wp:group {"metadata":{"name":"Latest Articles Carousel"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"80px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"className":"handyman-blocks-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group handyman-blocks-fade-up" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"handyman-blocks-header"} -->
        <h1 class="wp-block-heading has-text-align-center handyman-blocks-header" style="font-style:normal;font-weight:600"><?php esc_html_e('Latest Blogs and Insights', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/post-carousel {"blockClientId":"e7d7dc6a-9ee0-440f-94c1-a1ef13e283c8","carouselOptions":{"pagination":{"enabled":true,"width":7,"height":3,"borderRadius":1,"activeWidth":15,"activeBorderRadius":1,"activeColor":"#FFB84F","color":"#0D0C0A","activeColorHover":"#FF4F4F","colorHover":"#FF4F4F","positionVertical":-50},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"backgroundColor":"#FFB84F","color":"#FFFFFF","backgroundColorHover":"#FF4F4F","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":true,"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700}}} -->
    <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_e7d7dc6a_9ee0_440f_94c1_a1ef13e283c8"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
        <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px","width":"1px","color":"#F1ECE6"}},"backgroundColor":"light-color","className":"handyman-blocks-post-featuredimg is-style-default","layout":{"type":"constrained"}} -->
            <div class="wp-block-group handyman-blocks-post-featuredimg is-style-default has-border-color has-light-color-background-color has-background" style="border-color:#F1ECE6;border-width:1px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}},"border":{"radius":"0px"}}} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"28px","left":"28px","right":"28px","top":"28px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|light-color"}}}}},"textColor":"light-color","className":"is-style-categories-background-with-round","fontSize":"small"} /--></div>
                    <!-- /wp:group -->

                    <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"big"} /-->

                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} /-->

                    <!-- wp:post-excerpt {"excerptLength":21} /-->
                </div>
                <!-- /wp:group -->
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

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"100px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:100px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"20px","bottom":"20px"}},"border":{"radius":"7px"},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:7px;padding-top:20px;padding-right:var(--wp--preset--spacing--60);padding-bottom:20px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Explore All Articles', 'cozy-essential-addons') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->