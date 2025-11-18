<?php

/**
 * Title: PRO: Latest Posts Carousel
 * Slug: cozy-essential-addons/modestra-post-carousel
 * Categories: modestra
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"48px"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"780px"}} -->
    <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-align-left has-large-font-size"><?php esc_html_e('Post Carousel', 'cozy-essential-addons') ?></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/post-carousel {"blockClientId":"058f6d65-1d7a-4022-b47a-a92387e6630d","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#4F43FF","color":"#252525","activeColorHover":"#FF598E","colorHover":"#a5a5a5","align":"center","positionVertical":-47,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":1,"backgroundColor":"#4F43FF","color":"#FFFFFE","backgroundColorHover":"#FF598E","colorHover":"#fff"},"sliderOptions":{"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"loop":false,"centeredSlides":false,"slidesPerView":3,"spaceBetween":28,"speed":700}}} -->
    <div class="cozy-block-post-carousel-wrapper  hover-show" id="cozyBlock_058f6d65_1d7a_4022_b47a_a92387e6630d"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
        <div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper","style":{"spacing":{"blockGap":"28px"}}} -->
            <!-- wp:post-featured-image {"isLink":true,"height":"280px","style":{"color":{"duotone":"var:preset|duotone|white-primary"},"border":{"radius":"20px"}}} /-->

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