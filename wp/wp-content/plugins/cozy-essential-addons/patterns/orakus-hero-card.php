<?php

/**
 * Title: PRO: Hero Card
 * Slug: cozy-essential-addons/orakus-hero-card
 * Categories: orakus-hero,orakus-cta
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/about_3.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":606,"dimRatio":10,"customOverlayColor":"#bdb0a7","isUserOverlayColor":false,"minHeight":550,"contentPosition":"bottom right","isDark":false,"sizeSlug":"large","style":{"spacing":{"padding":{"right":"64px","left":"64px","top":"64px","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-right" style="padding-top:64px;padding-right:64px;padding-bottom:64px;padding-left:64px;min-height:550px"><img class="wp-block-cover__image-background wp-image-606 size-large" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#bdb0a7"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"64px","left":"64px","top":"54px","bottom":"54px"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"540px","wideSize":"580px"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="padding-top:54px;padding-right:64px;padding-bottom:54px;padding-left:64px"><!-- wp:heading {"level":1,"fontSize":"jumbo"} -->
                <h1 class="wp-block-heading has-jumbo-font-size"><?php esc_html_e('Elevated Interiors Tailored to Your Life', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('From single-room makeovers to complete home transformations, our services are designed to make your dream space a reality.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"18px","bottom":"18px"}},"border":{"radius":"0px"}}} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->