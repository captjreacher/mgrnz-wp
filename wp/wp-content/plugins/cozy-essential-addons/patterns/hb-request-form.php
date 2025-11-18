<?php

/**
 * Title: PRO: Request Quote Form Section
 * Slug: cozy-essential-addons/hb-request-form
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/plumber.png',
);
?>
<!-- wp:group {"metadata":{"name":"Request Quote Form"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"47%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:47%"><!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-452" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"36px","bottom":"10px","left":"48px","right":"48px"}},"border":{"width":"2px"}},"borderColor":"border-light-color","className":"is-style-default"} -->
        <div class="wp-block-column is-style-default has-border-color has-border-light-color-border-color" style="border-width:2px;padding-top:36px;padding-right:48px;padding-bottom:10px;padding-left:48px"><!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></h2>
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