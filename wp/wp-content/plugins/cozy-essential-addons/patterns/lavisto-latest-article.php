<?php

/**
 * Title: PRO: Latest Article Carousel
 * Slug: cozy-essential-addons/lavisto-latest-article
 * Categories: lavisto
 */
?>
<!-- wp:group {"metadata":{"name":"Latest Post Articles"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"80px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","className":"lavisto-fade-up","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group lavisto-fade-up has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:0;padding-bottom:100px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"bottom"} -->
        <div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
            <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"54px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"heading-color","className":"lavisto-header"} -->
                <h1 class="wp-block-heading has-text-align-left lavisto-header has-heading-color-color has-text-color has-link-color" style="margin-bottom:0px;font-size:54px;font-style:normal;font-weight:400"><?php esc_html_e('Articles and Insights', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"bottom","width":"33.33%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:0;padding-bottom:0;flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"18px","bottom":"18px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:18px;padding-right:35px;padding-bottom:18px;padding-left:35px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/post-carousel {"blockClientId":"bfb31400-ae86-42e6-aa83-b406d0c8f743","carouselOptions":{"pagination":{"enabled":true,"width":20,"height":7,"borderRadius":20,"activeWidth":20,"activeBorderRadius":10,"activeColor":"#FF8000","color":"#0039CA","activeColorHover":"#0039CA","colorHover":"#FF8000","positionVertical":-40},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"backgroundColor":"#203B80","color":"#FFFFFF","backgroundColorHover":"#FF8000","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":false,"centeredSlides":true,"slidesPerView":"3","spaceBetween":40,"speed":700}}} -->
    <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_bfb31400_ae86_42e6_aa83_b406d0c8f743"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
        <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
            <!-- wp:post-featured-image {"isLink":true,"height":"380px"} /-->

            <!-- wp:post-terms {"term":"category"} /-->

            <!-- wp:post-title {"level":4,"isLink":true,"linkTarget":"_blank","style":{"spacing":{"margin":{"bottom":"10px"}},"typography":{"lineHeight":"1.4"}},"fontSize":"big"} /-->

            <!-- wp:post-date /-->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/post-carousel -->
</div>
<!-- /wp:group -->