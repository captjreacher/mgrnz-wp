<?php

/**
 * Title: PRO: Featured Banner With Quote Form
 * Slug: cozy-essential-addons/mp-featured-banner-with-form
 * Categories: mighty-plumbers
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/banner_image.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Featured Banner with Form"},"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"657px"}},"gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-gradient-gradient-background has-background" style="min-height:657px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":57,"isUserOverlayColor":true,"minHeight":740,"gradient":"primary-gradient","contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40);min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-57" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"40px","left":"80px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"mighty-plumbers-slide-up","layout":{"type":"constrained","contentSize":""}} -->
                    <div class="wp-block-group mighty-plumbers-slide-up" style="padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.3"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xx-large"} -->
                        <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:10px;margin-bottom:24px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Expert Plumbing Solutions: Your Trusted Local Plumbers!', 'cozy-essential-addons') ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"secondary","textColor":"light-color","style":{"border":{"radius":"0px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-light-color-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"0px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request an Estimate', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","bottom":"5px","left":"54px","right":"54px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"backgroundColor":"light-color","textColor":"heading-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:54px;padding-bottom:5px;padding-left:54px"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:contact-form-7/contact-form-selector {"id":355,"hash":"5719fe2","title":"Quote Form","className":"banner-quote-form"} -->
                        <div class="wp-block-contact-form-7-contact-form-selector banner-quote-form">[contact-form-7 id="5719fe2" title="Quote Form"]</div>
                        <!-- /wp:contact-form-7/contact-form-selector -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->