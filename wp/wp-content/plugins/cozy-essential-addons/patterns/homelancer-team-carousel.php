<?php

/**
 * Title: PRO: Team Carousel
 * Slug: cozy-essential-addons/homelancer-team-carousel
 * Description: Team for Homelancer pro
 * Categories: homelancer-team
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/team_21.jpg',
    $homelancer_url . 'assets/images/team_22.jpg',
    $homelancer_url . 'assets/images/team_23.jpg',
    $homelancer_url . 'assets/images/team_1.jpg',
    $homelancer_url . 'assets/images/team_2.jpg'
);
?>
<!-- wp:group {"metadata":{"categories":["homelancer-team"],"patternName":"homelancer/team-section","name":"Team Section"},"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(180deg,rgb(17,60,61) 26%,rgb(255,255,255) 70%)"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(180deg,rgb(17,60,61) 26%,rgb(255,255,255) 70%);margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:48px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"54px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:54px;font-style:normal;font-weight:600"><?php esc_html_e('Meet Our Team', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
        <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/teams {"blockClientId":"2900b292-46a7-4145-80aa-f6b8d1ea8303","layout":"carousel","gridOptions":{"displayColumn":3,"masonryEnabled":false,"columnGap":24},"carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":28,"activeHeight":10,"activeBorder":{"width":"","style":"","color":""},"activeOffset":0,"gap":4,"activeBorderRadius":10,"activeColor":"#F3752B","color":"#113C3D","activeColorHover":"#113C3D","colorHover":"#F3752B","activeBorderHover":"","align":"center","positionVertical":-40,"left":"0px","right":"0px"},"navigation":{"enabled":false,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"speed":700,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":0}}} -->
    <div class="cozy-block-teams display-carousel  swiper-container hover-show" id="cozyBlock_2900b292_46a7_4145_80aa_f6b8d1ea8303">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-radius:24px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":3886,"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-3886" style="border-radius:50%;object-fit:cover;width:150px;height:150px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Denial Fireway', 'cozy-essential-addons') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Plumber', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                            <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"x"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-radius:24px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":3886,"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-3886" style="border-radius:50%;object-fit:cover;width:150px;height:150px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Olivia Tayler', 'cozy-essential-addons') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Electrician', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                            <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"x"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-radius:24px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":3886,"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-3886" style="border-radius:50%;object-fit:cover;width:150px;height:150px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Alexander Wogtone ', 'cozy-essential-addons') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Electrician', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                            <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"x"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-radius:24px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":3886,"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-3886" style="border-radius:50%;object-fit:cover;width:150px;height:150px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Elva M', 'cozy-essential-addons') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Project Manager', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                            <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"x"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-radius:24px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":3886,"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[4]) ?>" alt="" class="wp-image-3886" style="border-radius:50%;object-fit:cover;width:150px;height:150px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                            <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"x"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->
        </div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/teams -->
</div>
<!-- /wp:group -->