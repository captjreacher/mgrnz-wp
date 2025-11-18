<?php

/**
 * Title: PRO: Services Carousel
 * Slug: cozy-essential-addons/mp-services-carousel
 * Categories: mighty-plumbers
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/s1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/s2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/s3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/s4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/s5.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/s6.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/icon_4.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/icon_5.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/icon_6.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/icon_7.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/icon_8.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/icon_9.png',
);
?>
<!-- wp:group {"metadata":{"name":"Services Carousel"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group mighty-plumbers-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->

            <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
            <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('Services', 'cozy-essential-addons') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color"><?php esc_html_e('What We Do', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"c0eb7799-c303-49fa-85a1-03e1a353094b","display":"carousel","pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#EB7100","color":"#252525","activeColorHover":"#062A60","colorHover":"#EB7100","verticalPosition":-33},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"backgroundColor":"#062A60","color":"#FFFFFF","backgroundColorHover":"#EB7100","colorHover":"#fff"},"sliderOptions":{"loop":true,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"metadata":{"name":"Services Carousel"}} -->
    <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_c0eb7799_c303_49fa_85a1_03e1a353094b">
        <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group service-media"><!-- wp:image {"id":415,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                            <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-415" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($ct_patterns_media[6]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Drain Cleaning', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group service-media"><!-- wp:image {"id":416,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                            <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-416" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($ct_patterns_media[7]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Leak Detection &amp; Repair', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group service-media"><!-- wp:image {"id":417,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                            <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-417" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($ct_patterns_media[8]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Plumbing Inspection', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group service-media"><!-- wp:image {"id":418,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                            <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-418" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($ct_patterns_media[9]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Water Line Installation/Repair', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group service-media"><!-- wp:image {"id":419,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                            <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-419" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($ct_patterns_media[10]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Sewer Installation &amp; Repair', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group service-media"><!-- wp:image {"id":420,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                            <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[5]) ?>" alt="" class="wp-image-420" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($ct_patterns_media[11]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Bathroom Installation &amp; Repair', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->
        </div>
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->