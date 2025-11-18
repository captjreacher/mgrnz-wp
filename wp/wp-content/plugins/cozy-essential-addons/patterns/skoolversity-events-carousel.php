<?php

/**
 * Title: PRO: Academic Events Carousel
 * Slug: cozy-essential-addons/skoolversity-events-carousel
 * Categories: skoolversity-post
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"40px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:40px"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase">Upcoming Events</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"jumbo"} -->
        <h1 class="wp-block-heading has-text-align-center has-jumbo-font-size">Recent Important Stories Updated</h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/post-carousel {"blockClientId":"b13a9920-3e6e-416f-8ecd-d707a2ac37f3","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeHeight":10,"activeBorder":{"width":"","style":"","color":""},"activeOffset":0,"gap":4,"activeBorderRadius":10,"activeColor":"#3E11D1","color":"#3E11D1","activeColorHover":"#059EA3","colorHover":"#059EA3","align":"center","positionVertical":-40,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":50,"iconBoxHeight":40,"border":{"width":"","style":"","color":""},"borderRadius":27,"backgroundColor":"#fff","color":"#3E11D1","backgroundColorHover":"#3E11D1","colorHover":"#fff","borderHover":""},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":true,"centeredSlides":false,"slidesPerView":3,"spaceBetween":28,"speed":700}}} -->
    <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_b13a9920_3e6e_416f_8ecd_d707a2ac37f3"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
        <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
            <!-- wp:post-featured-image {"height":"260px"} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:20px"><!-- wp:group {"className":"is-style-skoolversity-overlap","style":{"layout":{"selfStretch":"fixed","flexSize":"64px"},"dimensions":{"minHeight":"64px"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group is-style-skoolversity-overlap has-primary-background-color has-background" style="min-height:64px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:post-date {"textAlign":"center","format":"j","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"xx-large"} /-->

                        <!-- wp:post-date {"textAlign":"center","format":"M","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"}},"textColor":"light-color","fontSize":"small"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"large"} /-->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/post-carousel -->
</div>
<!-- /wp:group -->