<?php

/**
 * Title: Banner Section with Text Cebter
 * Slug: cozy-essential-addons/ha-banner-text-center
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/banner_img_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/banner_img_2.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"30px","right":"30px"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:120px;padding-right:30px;padding-bottom:120px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"60px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-bottom:60px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-bottom:1rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"120px","letterSpacing":"1px","lineHeight":"1"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading has-text-align-center hello-agency-text-stroke" style="font-size:120px;letter-spacing:1px;line-height:1;text-transform:uppercase"><?php echo esc_html('Welcome to', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"120px","letterSpacing":"0px","lineHeight":"1"}},"textColor":"primary"} -->
            <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:120px;letter-spacing:0px;line-height:1;text-transform:uppercase"><?php echo esc_html('Hello Agency', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"normal"} -->
            <p class="has-text-align-center has-normal-font-size" style="line-height:1.5"><?php echo esc_html('Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lore</em>m ipsum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
        <div class="wp-block-buttons alignfull" style="margin-top:40px"><!-- wp:button {"backgroundColor":"heading-color","textColor":"neutra-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"5px","width":"1px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"20px","bottom":"20px"}}},"borderColor":"heading-color","className":"is-style-fill hello-agency-fill-buttons","fontSize":"normal"} -->
            <div class="wp-block-button has-custom-font-size is-style-fill hello-agency-fill-buttons has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-neutra-color-color has-heading-color-background-color has-text-color has-background has-border-color has-heading-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:20px;padding-right:30px;padding-bottom:20px;padding-left:30px"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":689,"dimRatio":0,"minHeight":560,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-689" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":746,"dimRatio":0,"minHeight":560,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-746" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
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