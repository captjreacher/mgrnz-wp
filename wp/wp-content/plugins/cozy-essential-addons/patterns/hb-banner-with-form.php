<?php

/**
 * Title: PRO: Banner With Form
 * Slug: cozy-essential-addons/hb-banner-with-form
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/banner_bg.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Banner With Quote Form"},"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":1993,"isUserOverlayColor":true,"minHeight":800,"gradient":"gradient-alternate","contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-cover" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40);min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-alternate-gradient-background"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"24px","left":"80px"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"handyman-blocks-slide-up","layout":{"type":"constrained","contentSize":"880px"}} -->
                        <div class="wp-block-group handyman-blocks-slide-up" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"48px","lineHeight":"1.4"},"spacing":{"margin":{"top":"8px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="margin-top:8px;margin-bottom:24px;font-size:48px;line-height:1.4;text-transform:uppercase"><?php esc_html_e('Expert Handyman Services at Your Doorstep!', 'cozy-essential-addons') ?></h1>
                            <!-- /wp:heading -->

                            <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                            <h2 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></h2>
                            <!-- /wp:heading -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                            <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-color","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->

                                <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"2px","left":"48px","right":"48px","top":"34px"}}},"backgroundColor":"light-color"} -->
                    <div class="wp-block-column is-vertically-aligned-center has-light-color-background-color has-background" style="padding-top:34px;padding-right:48px;padding-bottom:2px;padding-left:48px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-color","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Request Quote', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:contact-form-7/contact-form-selector {"id":355,"hash":"5719fe2","title":"Quote Form","className":"banner-booking-form"} -->
                        <div class="wp-block-contact-form-7-contact-form-selector banner-booking-form">[contact-form-7 id="5719fe2" title="Quote Form"]</div>
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
<!-- /wp:group -->