<?php

/**
 * Title: PRO: About Us Alternate Content
 * Slug: cozy-essential-addons/modestra-about-alternate
 * Categories: modestra
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/about_21.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/about_22.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_3.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["about"],"patternName":"modestra/about-alternate-2","name":"About Us alternate Content 2"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"120px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php esc_html_e('Why Choose Us', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"60px","right":"60px"},"margin":{"top":"68px"}},"border":{"radius":"40px","width":"1px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group is-style-modestra-group-gradient-border" style="border-width:1px;border-radius:40px;margin-top:68px;padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"0px"},"padding":{"bottom":"0px"}},"border":{"bottom":{"width":"0px","style":"none"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":7774,"dimRatio":0,"customOverlayColor":"#938b85","isUserOverlayColor":true,"isDark":false,"style":{"color":{"duotone":"var:preset|duotone|white-primary"},"border":{"width":"0px","style":"none","radius":"30px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-style:none;border-width:0px;border-radius:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#938b85"></span><img class="wp-block-cover__image-background wp-image-7774" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"18px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="margin-bottom:18px"><!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"15px","right":"15px"}},"border":{"radius":"50px","width":"1px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-modestra-group-gradient-border has-transparent-background-color has-background" style="border-width:1px;border-radius:50px;padding-top:8px;padding-right:15px;padding-bottom:8px;padding-left:15px"><!-- wp:heading {"level":5,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
                        <h5 class="wp-block-heading is-style-default has-heading-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Our Story', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2"}}} -->
                <h2 class="wp-block-heading" style="font-size:40px;line-height:1.2"><?php esc_html_e('A Journey of Passion, Persistence, and Purpose', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","className":"is-style-button-hover-white-arrow-style","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"60px","width":"1px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"24px","right":"24px","top":"12px","bottom":"12px"}}},"fontSize":"normal","borderColor":"primary"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"60px","right":"60px"},"margin":{"top":"28px"}},"border":{"width":"1px","radius":"40px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group is-style-modestra-group-gradient-border" style="border-width:1px;border-radius:40px;margin-top:28px;padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"0px"},"padding":{"bottom":"0px"}},"border":{"bottom":{"width":"0px","style":"none"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"18px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="margin-bottom:18px"><!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"15px","right":"15px"}},"border":{"radius":"50px","width":"1px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-modestra-group-gradient-border has-transparent-background-color has-background" style="border-width:1px;border-radius:50px;padding-top:8px;padding-right:15px;padding-bottom:8px;padding-left:15px"><!-- wp:heading {"level":5,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
                        <h5 class="wp-block-heading is-style-default has-heading-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Mission &amp; Goal', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2"}}} -->
                <h2 class="wp-block-heading" style="font-size:40px;line-height:1.2"><?php esc_html_e('Shaping the Future, One Step at a Time', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","className":"is-style-button-hover-white-arrow-style","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"60px","width":"1px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"24px","right":"24px","top":"12px","bottom":"12px"}}},"fontSize":"normal","borderColor":"primary"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":4619,"dimRatio":0,"customOverlayColor":"#c3c3c6","isUserOverlayColor":true,"isDark":false,"style":{"color":{"duotone":"var:preset|duotone|secodnary-white"},"border":{"width":"0px","style":"none","radius":"30px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-style:none;border-width:0px;border-radius:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c3c3c6"></span><img class="wp-block-cover__image-background wp-image-4619" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
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

    <!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"60px","right":"60px"},"margin":{"top":"28px"}},"border":{"width":"1px","radius":"40px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group is-style-modestra-group-gradient-border" style="border-width:1px;border-radius:40px;margin-top:28px;padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"0px"},"padding":{"bottom":"0px"}},"border":{"bottom":{"width":"0px","style":"none"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":5979,"dimRatio":0,"customOverlayColor":"#706f72","isUserOverlayColor":true,"style":{"color":{"duotone":"var:preset|duotone|white-primary"},"border":{"width":"0px","style":"none","radius":"30px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover" style="border-style:none;border-width:0px;border-radius:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#706f72"></span><img class="wp-block-cover__image-background wp-image-5979" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"18px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="margin-bottom:18px"><!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"15px","right":"15px"}},"border":{"radius":"50px","width":"1px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-modestra-group-gradient-border has-transparent-background-color has-background" style="border-width:1px;border-radius:50px;padding-top:8px;padding-right:15px;padding-bottom:8px;padding-left:15px"><!-- wp:heading {"level":5,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
                        <h5 class="wp-block-heading is-style-default has-heading-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Our Commitment', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2"}}} -->
                <h2 class="wp-block-heading" style="font-size:40px;line-height:1.2"><?php esc_html_e('Dedicated to Delivering Unmatched Quality and Service', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","className":"is-style-button-hover-white-arrow-style","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"60px","width":"1px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"24px","right":"24px","top":"12px","bottom":"12px"}}},"fontSize":"normal","borderColor":"primary"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->