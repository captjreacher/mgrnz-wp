<?php

/**
 * Title: PRO: Service Grid
 * Slug: cozy-essential-addons/homelancer-service-grid
 * Description: Service Grid Section with Counter for Homelancer pro
 * Categories: homelancer-service
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/p101.jpg',
    $homelancer_url . 'assets/images/p102.jpg',
    $homelancer_url . 'assets/images/p103.jpg',
    $homelancer_url . 'assets/images/p104.jpg',
    $homelancer_url . 'assets/images/p105.jpg',
    $homelancer_url . 'assets/images/p106.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"giga"} -->
        <h1 class="wp-block-heading has-text-align-center has-giga-font-size"><?php esc_html_e('Our Services', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"6256230d-a479-43e3-8b0a-82ac81405b57"} -->
    <div class="cozy-block-featured-content-box display-grid layout-default   hover-show" id="cozyBlock_6256230d_a479_43e3_8b0a_82ac81405b57">
        <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-radius:20px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Home Repair', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-radius:20px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Cleaning Services', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[2]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-radius:20px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Painting Services', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[3]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-radius:20px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Electrical Services', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[4]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-radius:20px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Plumbing Services', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[5]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-radius:20px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Maintenance Services', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->
        </div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->