<?php

/**
 * Title: PRO: Amentites and Services Carousel
 * Slug: cozy-essential-addons/lavisto-amentites-carousel
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_11.png',
);
?>
<!-- wp:group {"metadata":{"name":"Amenities and Services Carousel"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"140px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:140px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"54px","textTransform":"none"},"spacing":{"margin":{"bottom":"80px"}}}} -->
    <h1 class="wp-block-heading has-text-align-center" style="margin-bottom:80px;font-size:54px;text-transform:none"><?php esc_html_e('Services &amp; Amenities', 'cozy-essential-addons') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"6ed51b26-160a-4592-916a-30ad1affaf65","display":"carousel","gridOptions":{"enableMasonry":false,"columnCount":3,"gap":64},"pagination":{"enabled":true,"width":20,"height":7,"borderRadius":10,"activeWidth":20,"activeBorderRadius":10,"activeColor":"#FF8000","color":"#0039CA","activeColorHover":"#0039CA","colorHover":"#FF8000","verticalPosition":-60},"navigation":{"enabled":false,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":60,"speed":700}} -->
    <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_6ed51b26_160a_4592_916a_30ad1affaf65">
        <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Airport Transfer', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Laundry Service', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Wifi &amp; Internet', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Swimming Pool', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Gym &amp; Yoga', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Spa &amp; Massage', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Diving &amp; snorkeling', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Boat Tours', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1466,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1466" style="object-fit:contain;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:28px"><?php esc_html_e('Private Beach', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->
        </div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->