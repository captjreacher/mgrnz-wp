<?php

/**
 * Title: PRO: Banner With Booking Form
 * Slug: cozy-essential-addons/lavisto-banner-with-form
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/banner_bg.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Banner with Booking Form"},"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"lavisto-header","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group lavisto-header has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":807,"isUserOverlayColor":true,"minHeight":700,"gradient":"primary-gradient","contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:30px;padding-right:var(--wp--preset--spacing--60);padding-bottom:30px;padding-left:var(--wp--preset--spacing--60);min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-807" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:cover {"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":700,"isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-100 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"74px"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:24px;font-size:74px;text-transform:uppercase"><?php esc_html_e('Lavisto for Luxury', 'lavisto') ?></h1>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'lavisto') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons -->
                                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"className":"is-style-button-hover-hard-black-shadow","fontFamily":"montagu-slab"} -->
                                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow has-montagu-slab-font-family" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e('Explore More', 'lavisto') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"20px","bottom":"1px","left":"48px","right":"48px"}}},"backgroundColor":"light-color"} -->
                            <div class="wp-block-column is-vertically-aligned-center has-light-color-background-color has-background" style="padding-top:20px;padding-right:48px;padding-bottom:1px;padding-left:48px"><!-- wp:contact-form-7/contact-form-selector {"id":1195,"hash":"809ec50","title":"Booking Enquiry","className":"booking-enquiry-section-form"} -->
                                <div class="wp-block-contact-form-7-contact-form-selector booking-enquiry-section-form">[contact-form-7 id="809ec50" title="Booking Enquiry"]</div>
                                <!-- /wp:contact-form-7/contact-form-selector -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->