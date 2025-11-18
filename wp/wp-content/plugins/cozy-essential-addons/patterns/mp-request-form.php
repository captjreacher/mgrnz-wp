<?php

/**
 * Title: PRO:Request a Quote Section
 * Slug: cozy-essential-addons/mp-request-form
 * Categories: mighty-plumbers
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/plumber.png',
);
?>
<!-- wp:group {"metadata":{"name":"Request Quote"},"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"40px","left":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-452" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"10px","left":"50px","right":"50px"},"blockGap":"var:preset|spacing|30"},"border":{"width":"2px"}},"borderColor":"light-shade","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-light-shade-border-color" style="border-width:2px;padding-top:40px;padding-right:50px;padding-bottom:10px;padding-left:50px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"bottom":"32px"}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color" style="margin-bottom:32px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

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
<!-- /wp:group -->