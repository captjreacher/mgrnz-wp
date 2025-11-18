<?php

/**
 * Title: PRO: Services Section with sticky style
 * Slug: cozy-essential-addons/modestra-services-2
 * Categories: modestra
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|80"}},"position":{"type":""}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"40px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"dimensions":{"minHeight":"0px"},"border":{"width":"1px","radius":"60px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-modestra-group-gradient-border" style="border-width:1px;border-radius:60px;min-height:0px;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px"><!-- wp:paragraph -->
                        <p><?php esc_html_e('What We Offer', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"x-large"} -->
                <h3 class="wp-block-heading has-x-large-font-size" style="line-height:1.3"><?php esc_html_e('Tailored Services Crafted to Meet Your Unique Needs', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"48px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:48px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":5979,"dimRatio":0,"customOverlayColor":"#706f72","isUserOverlayColor":true,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|secodnary-white"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover" style="border-radius:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#706f72"></span><img class="wp-block-cover__image-background wp-image-5979" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"large"} -->
                <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Business Strategy', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:64px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":4619,"dimRatio":0,"customOverlayColor":"#c3c3c6","isUserOverlayColor":true,"isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|white-primary"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c3c3c6"></span><img class="wp-block-cover__image-background wp-image-4619" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"large"} -->
                <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Digital Marketing', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:64px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":4375,"dimRatio":0,"customOverlayColor":"#b4aeae","isUserOverlayColor":true,"isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|primary-black"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b4aeae"></span><img class="wp-block-cover__image-background wp-image-4375" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"large"} -->
                <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Branding', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->