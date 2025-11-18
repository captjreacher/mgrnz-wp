<?php

/**
 * Title: PRO: Latest Posts Carousel 2
 * Slug: cozy-essential-addons/modestra-post-carousel-2
 * Categories: modestra
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"7rem","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:7rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"48px"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"780px"}} -->
        <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-text-align-left has-large-font-size"><?php esc_html_e('Post Carousel Style 2', 'cozyesssential-addons') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right","wideSize":""}} -->
    <div class="wp-block-group"><!-- wp:cozy-block/post-carousel {"blockClientId":"e9e3b14c-a615-4324-a724-dba65808c85c","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#4F43FF","color":"#252525","activeColorHover":"#FF598E","colorHover":"#a5a5a5","align":"center","positionVertical":-47,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":1,"backgroundColor":"#4F43FF","color":"#FFFFFE","backgroundColorHover":"#FF598E","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":false,"centeredSlides":true,"slidesPerView":3.8,"spaceBetween":28,"speed":700}}} -->
        <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_e9e3b14c_a615_4324_a724_dba65808c85c"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
            <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper","style":{"spacing":{"blockGap":"28px"}}} -->
                <!-- wp:post-featured-image {"isLink":true,"height":"280px","style":{"color":{"duotone":"unset"},"border":{"radius":"20px"}}} /-->

                <!-- wp:post-title {"level":4,"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|50"}}},"fontSize":"medium"} /-->

                <!-- wp:post-date /-->

                <!-- wp:post-excerpt {"excerptLength":24} /-->
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
</div>
<!-- /wp:group -->