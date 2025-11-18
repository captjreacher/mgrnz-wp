<?php

/**
 * Title: PRO: Slider
 * Slug: cozy-essential-addons/saaslauncher-slider
 * Categories: saaslauncher-hero
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/slider_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/slider_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/slider_3.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-hero"],"patternName":"cozy-essential-addons/saaslauncher-slider","name":"PRO: Slider"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"a4f0f275-d44b-40f0-bc2f-f3862e19e847","pagination":{"width":"10px","height":"10px","borderRadius":"100px","activeWidth":"10px","activeHeight":"10px","activeBorderRadius":"100px","bottom":24,"left":0,"right":0,"align":"center","gap":"4px","activeColor":"#4A3AFD","color":"#FFFFFE","activeColorHover":"#6F79FF","colorHover":"#4A3AFD","dynamicBullets":false},"navigation":{"iconSize":15,"iconRotate":0,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#4A3AFD","backgroundColorHover":"#4A3AFD","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"thumbMedia":["","",""]} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_a4f0f275_d44b_40f0_bc2f_f3862e19e847">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"bbe10c5d-3ab9-4f74-bcb5-fdb8e52ae902"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":13171,"dimRatio":60,"customOverlayColor":"#1c100e","isUserOverlayColor":true,"minHeight":790,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"1260px"}} -->
                <div class="wp-block-cover" style="min-height:790px"><img class="wp-block-cover__image-background wp-image-13171" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#1c100e"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"fontSize":"giga"} -->
                            <h1 class="wp-block-heading has-text-align-left has-giga-font-size" style="font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Launch Faster, Scale Smarter – Transform Your Website!', 'cozy-essential-addons') ?></h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Quickly launch a powerful, scalable SaaS or business agency website to boost performance and drive growth effortlessly.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:40px"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                                <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Start Free Trial', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->

                                <!-- wp:button {"backgroundColor":"light-color","textColor":"black-color","className":"is-style-button-with-shadow-style-two","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"21px","bottom":"21px"}},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"fontSize":"medium"} -->
                                <div class="wp-block-button is-style-button-with-shadow-style-two"><a class="wp-block-button__link has-black-color-color has-light-color-background-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:21px;padding-right:40px;padding-bottom:21px;padding-left:40px"><?php esc_html_e('Schedule Demo', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"4765b481-c101-4571-939a-dc224189c81f"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":13184,"dimRatio":60,"customOverlayColor":"#1c100e","isUserOverlayColor":true,"minHeight":790,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"1260px"}} -->
                <div class="wp-block-cover" style="min-height:790px"><img class="wp-block-cover__image-background wp-image-13184" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#1c100e"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"fontSize":"giga"} -->
                            <h1 class="wp-block-heading has-text-align-left has-giga-font-size" style="font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('From Concept to Launch: We Engineer World-Class SaaS', 'cozy-essential-addons') ?></h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Quickly launch a powerful, scalable SaaS or business agency website to boost performance and drive growth effortlessly.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:40px"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                                <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Start Free Trial', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->

                                <!-- wp:button {"backgroundColor":"light-color","textColor":"black-color","className":"is-style-button-with-shadow-style-two","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"21px","bottom":"21px"}},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"fontSize":"medium"} -->
                                <div class="wp-block-button is-style-button-with-shadow-style-two"><a class="wp-block-button__link has-black-color-color has-light-color-background-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:21px;padding-right:40px;padding-bottom:21px;padding-left:40px"><?php esc_html_e('Schedule Demo', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"f61c5d27-7487-4561-8a88-6945c412216b"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":13187,"dimRatio":60,"customOverlayColor":"#1c100e","isUserOverlayColor":true,"minHeight":790,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"1260px"}} -->
                <div class="wp-block-cover" style="min-height:790px"><img class="wp-block-cover__image-background wp-image-13187" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#1c100e"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"fontSize":"giga"} -->
                            <h1 class="wp-block-heading has-text-align-left has-giga-font-size" style="font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Transforming Ideas into Scalable SaaS Solutions', 'cozy-essential-addons') ?></h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Quickly launch a powerful, scalable SaaS or business agency website to boost performance and drive growth effortlessly.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:40px"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                                <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Start Free Trial', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->

                                <!-- wp:button {"backgroundColor":"light-color","textColor":"black-color","className":"is-style-button-with-shadow-style-two","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"21px","bottom":"21px"}},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"fontSize":"medium"} -->
                                <div class="wp-block-button is-style-button-with-shadow-style-two"><a class="wp-block-button__link has-black-color-color has-light-color-background-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:21px;padding-right:40px;padding-bottom:21px;padding-left:40px"><?php esc_html_e('Schedule Demo', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
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