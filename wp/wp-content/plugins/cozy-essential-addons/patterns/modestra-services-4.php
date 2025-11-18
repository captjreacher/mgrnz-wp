<?php

/**
 * Title: PRO: Services Section with sticky style 4
 * Slug: cozy-essential-addons/modestra-services-4
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
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"className":"is-style-modestra-heading-gradient-effect","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"x-large"} -->
                <h2 class="wp-block-heading is-style-modestra-heading-gradient-effect has-heading-color-color has-text-color has-link-color has-x-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Branding', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum (“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum (“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero. In particular, the garbled words of&nbsp;<em>lorem ipsum</em>&nbsp;bear an unmistakable resemblance to sections 1.10.32–33 of Cicero’s work, with the most notable passage excerpted below.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Book Service', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"40px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":4375,"dimRatio":0,"customOverlayColor":"#b4aeae","isUserOverlayColor":true,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|primary-black"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b4aeae"></span><img class="wp-block-cover__image-background wp-image-4375" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Branding', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"className":"is-style-modestra-heading-gradient-effect","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"x-large"} -->
                <h2 class="wp-block-heading is-style-modestra-heading-gradient-effect has-heading-color-color has-text-color has-link-color has-x-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Digital Marketing', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum (“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum (“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('In particular, the garbled words of&nbsp;<em>lorem ipsum</em>&nbsp;bear an unmistakable resemblance to sections 1.10.32–33 of Cicero’s work, with the most notable passage excerpted below.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Book Service', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"40px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":4619,"dimRatio":0,"customOverlayColor":"#b4aeae","isUserOverlayColor":true,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|white-primary"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b4aeae"></span><img class="wp-block-cover__image-background wp-image-4619" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Digital Marketing', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"className":"is-style-modestra-heading-gradient-effect","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"x-large"} -->
                <h2 class="wp-block-heading is-style-modestra-heading-gradient-effect has-heading-color-color has-text-color has-link-color has-x-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Business Strategy', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum (“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php esc_html_e('In particular, the garbled words of&nbsp;<em>lorem ipsum</em>&nbsp;bear an unmistakable resemblance to sections 1.10.32–33 of Cicero’s work, with the most notable passage excerpted below.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Book Service', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"40px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":4620,"dimRatio":0,"customOverlayColor":"#b4aeae","isUserOverlayColor":true,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|secodnary-white"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b4aeae"></span><img class="wp-block-cover__image-background wp-image-4620" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                        <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Business Strategy', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->