<?php

/**
 * Title: PRO: How We Work 2
 * Slug: cozy-essential-addons/orakus-how-we-work-2
 * Categories: orakus-about, orakus
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/icon_21.png',
    $orakus_url . 'assets/images/icon_22.png',
    $orakus_url . 'assets/images/icon_23.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"6rem"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px","color":"#E7E6E6","radius":"60px"},"spacing":{"padding":{"right":"10px","left":"10px","top":"5px","bottom":"5px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:60px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('How we Works', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","fontSize":"jumbo"} -->
        <h2 class="wp-block-heading has-text-align-center has-jumbo-font-size"><?php esc_html_e('Our Working Process', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column"><!-- wp:image {"id":627,"width":"100px","height":"100px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-627" style="object-fit:contain;width:100px;height:100px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
            <h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:28px"><?php esc_html_e('Consultation', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column"><!-- wp:image {"id":632,"width":"100px","height":"100px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($orakus_images[1]) ?>" alt="" class="wp-image-632" style="object-fit:contain;width:100px;height:100px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
            <h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:28px"><?php esc_html_e('Design &amp; Proposal', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column"><!-- wp:image {"id":633,"width":"100px","height":"100px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($orakus_images[2]) ?>" alt="" class="wp-image-633" style="object-fit:contain;width:100px;height:100px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
            <h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:28px"><?php esc_html_e('Execution &amp; Deliver', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->