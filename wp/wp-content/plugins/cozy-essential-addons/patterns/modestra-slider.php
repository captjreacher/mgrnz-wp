<?php

/**
 * Title: PRO: Slider
 * Slug: cozy-essential-addons/modestra-slider
 * Categories: modestra-hero
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/slider_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/slider_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"f407f766-4acb-46e9-bdb5-83f7f4f05fe4","pagination":{"width":"10px","height":"10px","borderRadius":"100px","activeWidth":"10px","activeHeight":"10px","activeBorderRadius":"100px","bottom":15,"left":0,"right":0,"align":"center","gap":"4px","activeColor":"#FF598E","color":"#fff","activeColorHover":"#4F43FF","colorHover":"#FF598E","dynamicBullets":false},"navigation":{"iconSize":15,"iconRotate":0,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#4F43FF","backgroundColorHover":"#4F43FF","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"slidesPerView":1,"centeredSlides":false,"spaceBetween":26,"speed":1500,"effect":"cube"},"thumbMedia":["",""]} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_f407f766_4acb_46e9_bdb5_83f7f4f05fe4">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"39cfeeb3-c1c7-43af-9e6d-78ce0bf53e11"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":7909,"dimRatio":40,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":740,"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
                <div class="wp-block-cover" style="min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7909" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","textTransform":"uppercase"}},"textColor":"light-color","fontSize":"xxx-large"} -->
                        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="line-height:1.3;text-transform:uppercase"><?php esc_html_e('Simplify pipeline like never before', 'cozy-essential-addons') ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","fontSize":"medium"} -->
                        <p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:40px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-gradient-background-style","style":{"border":{"radius":"70px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-gradient-background-style has-medium-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:70px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"70px","width":"1px"},"spacing":{"padding":{"left":"39px","right":"39px","top":"19px","bottom":"19px"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="border-width:1px;border-radius:70px;padding-top:19px;padding-right:39px;padding-bottom:19px;padding-left:39px"><?php esc_html_e('Request Demo', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"a3556915-2f3a-496a-98cd-5cb6ccaecce2"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":7905,"dimRatio":40,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":740,"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
                <div class="wp-block-cover" style="min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7905" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","textTransform":"uppercase"}},"textColor":"light-color","fontSize":"xxx-large"} -->
                        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="line-height:1.3;text-transform:uppercase"><?php esc_html_e('Empowering Businesses Through Design', 'cozy-essential-addons') ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","fontSize":"medium"} -->
                        <p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:40px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-gradient-background-style","style":{"border":{"radius":"70px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-gradient-background-style has-medium-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:70px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"70px","width":"1px"},"spacing":{"padding":{"left":"39px","right":"39px","top":"19px","bottom":"19px"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="border-width:1px;border-radius:70px;padding-top:19px;padding-right:39px;padding-bottom:19px;padding-left:39px"><?php esc_html_e('Request Demo', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->
            </div>
            <div class="swiper-button-prev cozy-block-button-prev"></div>
            <div class="swiper-button-next cozy-block-button-next"></div>
            <div class="swiper-pagination cozy-pagination"></div>
        </div>
    </div>
    <!-- /wp:cozy-block/slider -->
</div>
<!-- /wp:group -->