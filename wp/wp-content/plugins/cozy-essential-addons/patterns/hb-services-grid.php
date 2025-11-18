<?php

/**
 * Title: PRO: Services Grid Style 2
 * Slug: cozy-essential-addons/hb-services-grid
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/s1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/s2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/s3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/s4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/s5.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/s6.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Services Grid"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1} -->
        <h1 class="wp-block-heading has-text-align-center"><?php esc_html_e('Our Services', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"f4906459-7f41-4c42-b183-cc21dde57319","galleryOptions":{"overlayOpacity":0.6,"overlayColorHover":"#0D0C0A"}} -->
    <div class="cozy-block-featured-content-box display-grid layout-default   hover-show" id="cozyBlock_f4906459_7f41_4c42_b183_cc21dde57319">
        <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"borderColor":"border-light-color","className":"cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium has-border-color has-border-light-color-border-color" style="border-width:1px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:image {"lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" /></figure>
                        <!-- /wp:image -->


                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <h4 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('General Repairs', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"borderColor":"border-light-color","className":"cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium has-border-color has-border-light-color-border-color" style="border-width:1px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:image {"lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" /></figure>
                        <!-- /wp:image -->


                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <h4 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Painting & Drywall', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"borderColor":"border-light-color","className":"cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium has-border-color has-border-light-color-border-color" style="border-width:1px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:image {"lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" /></figure>
                        <!-- /wp:image -->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <h4 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Carpentry', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"borderColor":"border-light-color","className":"cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium has-border-color has-border-light-color-border-color" style="border-width:1px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:image {"lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" /></figure>
                        <!-- /wp:image -->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <h4 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Plumbing Services', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"borderColor":"border-light-color","className":"cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium has-border-color has-border-light-color-border-color" style="border-width:1px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:image {"lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[4]) ?>" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <h4 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Electrical Work', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"borderColor":"border-light-color","className":"cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-handyman-blocks-boxshadow-medium has-border-color has-border-light-color-border-color" style="border-width:1px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:image {"lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[5]) ?>" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <h4 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Home Repair/Rennovation', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->
        </div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->