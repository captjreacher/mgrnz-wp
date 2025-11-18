<?php

/**
 * Title: PRO: Slider 2
 * Slug: cozy-essential-addons/modestra-slider-2
 * Categories: modestra-hero
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/slider_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/slider_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"43926565-b480-4bf3-b727-eed9281d2238","pagination":{"width":"10px","height":"10px","borderRadius":"100px","activeWidth":"10px","activeHeight":"10px","activeBorderRadius":"100px","bottom":15,"left":0,"right":0,"align":"center","gap":"4px","activeColor":"#FF598E","color":"#fff","activeColorHover":"#4F43FF","colorHover":"#FF598E","dynamicBullets":false},"navigation":{"iconSize":15,"iconRotate":0,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#4F43FF","backgroundColorHover":"#4F43FF","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"slidesPerView":1,"centeredSlides":false,"spaceBetween":26,"speed":1500,"effect":"fade"},"thumbMedia":["",""]} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_43926565_b480_4bf3_b727_eed9281d2238">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"6bb11c9d-dda9-4779-831e-93d789b439c5"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":7909,"dimRatio":40,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":760,"contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"68px","bottom":"68px","left":"28px","right":"28px"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:68px;padding-right:28px;padding-bottom:68px;padding-left:28px;min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7909" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
                        <div class="wp-block-columns"><!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","textTransform":"uppercase","fontSize":"48px"}},"textColor":"light-color"} -->
                                <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:48px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Transform, Empower, Inspire: Your Fitness Journey Awaits', 'cozy-essential-addons') ?></h1>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"bottom"} -->
                            <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","fontSize":"medium"} -->
                                <p class="has-text-align-left has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}}} -->
                                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-white-arrow-style","style":{"border":{"radius":"70px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"14px","bottom":"14px"}}},"fontSize":"medium"} -->
                                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:70px;padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"2b7f9e0a-0b49-4f7c-8d7d-0c49ab5f1e65"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":7905,"dimRatio":40,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":760,"contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"68px","bottom":"68px","left":"28px","right":"28px"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:68px;padding-right:28px;padding-bottom:68px;padding-left:28px;min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7905" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
                        <div class="wp-block-columns"><!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","textTransform":"uppercase","fontSize":"48px"}},"textColor":"light-color"} -->
                                <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:48px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Mission &amp; Goals: Shaping the Future, One Step at a Time', 'cozy-essential-addons') ?></h1>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"bottom"} -->
                            <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","fontSize":"medium"} -->
                                <p class="has-text-align-left has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}}} -->
                                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-white-arrow-style","style":{"border":{"radius":"70px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"14px","bottom":"14px"}}},"fontSize":"medium"} -->
                                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:70px;padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
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