<?php

/**
 * Title: PRO: Booking Enquiry Form Section
 * Slug: cozy-essential-addons/lavisto-booking-enquiry
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/banner_bg_2.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Booking Enquiry Section"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1184,"hasParallax":true,"isUserOverlayColor":true,"minHeight":640,"gradient":"primary-gradient","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-cover has-parallax" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span>
        <div class="wp-block-cover__image-background wp-image-1184 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($ct_patterns_media[0]) ?>)"></div>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"5px","left":"48px","right":"48px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:32px;padding-right:48px;padding-bottom:5px;padding-left:48px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Booking Enquiry', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:contact-form-7/contact-form-selector {"id":1195,"hash":"809ec50","title":"Booking Enquiry","className":"booking-enquiry-section-form"} -->
                    <div class="wp-block-contact-form-7-contact-form-selector booking-enquiry-section-form">[contact-form-7 id="809ec50" title="Booking Enquiry"]</div>
                    <!-- /wp:contact-form-7/contact-form-selector -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->