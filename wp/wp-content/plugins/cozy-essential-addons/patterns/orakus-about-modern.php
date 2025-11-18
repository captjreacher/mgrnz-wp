<?php

/**
 * Title: PRO: Modern About Layout
 * Slug: cozy-essential-addons/orakus-about-modern
 * Categories: orakus-about
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/about_101.jpg',
    $orakus_url . 'assets/images/about_102.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":10931,"dimRatio":0,"customOverlayColor":"#908f84","isUserOverlayColor":false,"minHeight":720,"isDark":false,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="margin-top:0px;margin-bottom:0;min-height:720px"><img class="wp-block-cover__image-background wp-image-10931 size-full" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#908f84"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"12px","padding":{"right":"0px","left":"0px"}}}} -->
        <div class="wp-block-column" style="padding-right:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":10932,"dimRatio":0,"customOverlayColor":"#dddddc","isUserOverlayColor":false,"minHeight":340,"isDark":false,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:32px;min-height:340px"><img class="wp-block-cover__image-background wp-image-10932 size-full" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#dddddc"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"10px","bottom":"0"}}},"fontSize":"jumbo"} -->
            <h1 class="wp-block-heading has-jumbo-font-size" style="margin-top:10px;margin-bottom:0;font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e('Crafting Luxury Through Modern Aesthetics', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
            <p style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"24px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:24px"><!-- wp:button {"backgroundColor":"heading-color","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"typography":{"textTransform":"uppercase"}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-heading-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;text-transform:uppercase"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->