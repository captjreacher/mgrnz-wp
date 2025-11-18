<?php

/**
 * Title: PRO: Portfolio Page
 * Slug: cozy-essential-addons/homelancer-page-portfolios
 * Description: Portfolio Page for Homelancer pro
 * Categories: homelancer-pages
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
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-giga-font-size"><?php esc_html_e('Portfolios / Works', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/featured-content-box {"blockClientId":"c6d93e9f-5b76-4001-8513-cb115e01c19b","gridOptions":{"enableMasonry":false,"columnCount":2,"gap":40}} -->
        <div class="cozy-block-featured-content-box display-grid layout-default   hover-show" id="cozyBlock_c6d93e9f_5b76_4001_8513_cb115e01c19b">
            <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"left","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px"><?php esc_html_e('Home Cleaning', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"left","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px"><?php esc_html_e('Home Cleaning', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[2]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"left","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px"><?php esc_html_e('Home Cleaning', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[3]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"left","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px"><?php esc_html_e('Home Cleaning', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[4]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"left","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px"><?php esc_html_e('Home Cleaning', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[5]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"left","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px"><?php esc_html_e('Home Cleaning', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
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

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"40px","right":"40px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"840px"}} -->
        <div class="wp-block-group has-primary-background-color has-background" style="border-radius:24px;padding-top:64px;padding-right:40px;padding-bottom:64px;padding-left:40px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}}},"textColor":"background-alt","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-text-align-center has-background-alt-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Inspired by Our Work? We’re Just a Message Away', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}}}} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Call +1 (000) 012-3456', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"placeholder":"Read More","backgroundColor":"secondary","className":"is-style-button-hover-primary-bgcolor","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}}}} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->