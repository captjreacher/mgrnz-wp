<?php

/**
 * Title: About Us Full Block
 * Slug: cozy-essential-addons/ha-aboutus-block
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/about_thumb_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/about_thumb_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"},"blockGap":"0"}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"60px","right":"60px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;flex-basis:45%"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"4px"}},"textColor":"primary"} -->
            <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600;letter-spacing:4px;text-transform:uppercase"><?php echo esc_html('About Us', 'cozy-essential-addons') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-bottom:1rem"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"60px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
                <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:60px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"60px","letterSpacing":"1.5px"}}} -->
                <h2 class="wp-block-heading" style="font-size:60px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Story', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. “It\'s not Latin, though it looks like it, and it actually says nothing,” <em>Before &amp; After</em> magazine answered a curious reader, “Its ‘words’ loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.”', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons alignfull" style="margin-top:40px"><!-- wp:button {"backgroundColor":"heading-color","textColor":"neutra-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"5px","width":"1px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"20px","bottom":"20px"}}},"borderColor":"heading-color","className":"is-style-fill hello-agency-fill-buttons","fontSize":"normal"} -->
                <div class="wp-block-button has-custom-font-size is-style-fill hello-agency-fill-buttons has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-neutra-color-color has-heading-color-background-color has-text-color has-background has-border-color has-heading-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:20px;padding-right:30px;padding-bottom:20px;padding-left:30px"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"53.8%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:53.8%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":486,"dimRatio":0,"minHeight":640,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-486" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
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

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"53.8%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:53.8%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":486,"dimRatio":0,"minHeight":640,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-486" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"60px","right":"60px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;flex-basis:45%"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"4px"}},"textColor":"primary"} -->
            <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600;letter-spacing:4px;text-transform:uppercase"><?php echo esc_html('Our Goal', 'cozy-essential-addons') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-bottom:1rem"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"60px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
                <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:60px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"60px","letterSpacing":"1.5px"}}} -->
                <h2 class="wp-block-heading" style="font-size:60px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Mission', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. “It\'s not Latin, though it looks like it, and it actually says nothing,” <em>Before &amp; After</em> magazine answered a curious reader, “Its ‘words’ loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.”', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons alignfull" style="margin-top:40px"><!-- wp:button {"backgroundColor":"heading-color","textColor":"neutra-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"5px","width":"1px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"20px","bottom":"20px"}}},"borderColor":"heading-color","className":"is-style-fill hello-agency-fill-buttons","fontSize":"normal"} -->
                <div class="wp-block-button has-custom-font-size is-style-fill hello-agency-fill-buttons has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-neutra-color-color has-heading-color-background-color has-text-color has-background has-border-color has-heading-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:20px;padding-right:30px;padding-bottom:20px;padding-left:30px"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->