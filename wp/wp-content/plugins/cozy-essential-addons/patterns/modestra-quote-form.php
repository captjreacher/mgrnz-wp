<?php

/**
 * Title: PRO: Request Quote Form Section
 * Slug: cozy-essential-addons/modestra-quote-form
 * Categories: modestra-contacts
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/about_30.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-column" style="padding-top:0;padding-bottom:0"><!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:contact-form-7/contact-form-selector {"id":4031,"hash":"2420281","title":"Contact Form for Home","className":"request-quote-form"} -->
            <div class="wp-block-contact-form-7-contact-form-selector request-quote-form">[contact-form-7 id="2420281" title="Contact Form for Home"]</div>
            <!-- /wp:contact-form-7/contact-form-selector -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":7774,"dimRatio":60,"isUserOverlayColor":true,"minHeight":700,"gradient":"primarydark-alter-gradient","style":{"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primarydark-alter-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-7774" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->