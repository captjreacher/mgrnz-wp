<?php

/**
 * Title: PRO: Services Grid
 * Slug: cozy-essential-addons/orakus-services-grid
 * Categories: orakus-service
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/service_1.jpg',
    $orakus_url . 'assets/images/service_2.jpg',
    $orakus_url . 'assets/images/service_3.jpg',
    $orakus_url . 'assets/images/service_4.jpg',
    $orakus_url . 'assets/images/service_5.jpg',
    $orakus_url . 'assets/images/service_6.jpg',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["orakus-service"],"patternName":"cozy-essential-addons/orakus-services-grid","name":"Services Grid"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px","color":"#E7E6E6","radius":"60px"},"spacing":{"padding":{"right":"10px","left":"10px","top":"5px","bottom":"5px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:60px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Our Services', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","fontSize":"jumbo"} -->
        <h2 class="wp-block-heading has-text-align-center has-jumbo-font-size"><?php esc_html_e('All-in-One Interior Design &amp; Décor Services', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"45px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":13655,"dimRatio":0,"customOverlayColor":"#cfc9c6","isUserOverlayColor":false,"minHeight":380,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-13655" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cfc9c6"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Interior Design & Styling', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"black-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px","bottom":{"width":"1px"},"top":[],"right":[],"left":[]}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-black-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":13655,"dimRatio":0,"customOverlayColor":"#cfc9c6","isUserOverlayColor":false,"minHeight":380,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-13655" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cfc9c6"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Home Renovation Planning', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"black-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px","bottom":{"width":"1px"},"top":[],"right":[],"left":[]}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-black-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[2]) ?>","id":13655,"dimRatio":0,"customOverlayColor":"#cfc9c6","isUserOverlayColor":false,"minHeight":380,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-13655" alt="" src="<?php echo esc_url($orakus_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cfc9c6"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Space Planning & Layouts', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"black-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px","bottom":{"width":"1px"},"top":[],"right":[],"left":[]}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-black-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"45px"},"margin":{"top":"45px","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:45px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[3]) ?>","id":13655,"dimRatio":0,"customOverlayColor":"#cfc9c6","isUserOverlayColor":false,"minHeight":380,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-13655" alt="" src="<?php echo esc_url($orakus_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cfc9c6"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Wall Decor & Artwork', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"black-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px","bottom":{"width":"1px"},"top":[],"right":[],"left":[]}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-black-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[4]) ?>","id":13655,"dimRatio":0,"customOverlayColor":"#cfc9c6","isUserOverlayColor":false,"minHeight":380,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-13655" alt="" src="<?php echo esc_url($orakus_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cfc9c6"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Furniture & Decor Sourcing', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"black-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px","bottom":{"width":"1px"},"top":[],"right":[],"left":[]}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-black-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[5]) ?>","id":13655,"dimRatio":0,"customOverlayColor":"#cfc9c6","isUserOverlayColor":false,"minHeight":380,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-13655" alt="" src="<?php echo esc_url($orakus_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cfc9c6"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Color Consultation', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"black-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px","bottom":{"width":"1px"},"top":[],"right":[],"left":[]}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-black-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->