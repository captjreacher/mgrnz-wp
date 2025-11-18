<?php

/**
 * Title: PRO: Testimonials List
 * Slug: cozy-essential-addons/orakus-testimonial-list
 * Categories: orakus-testimonial
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/rating_star.png',
    $orakus_url . 'assets/images/testimonial_1.jpg',
    $orakus_url . 'assets/images/team_2.jpg',
    $orakus_url . 'assets/images/testimonial_3.jpg',
    $orakus_url . 'assets/images/team_21.jpg',
    $orakus_url . 'assets/images/team_22.jpg',
    $orakus_url . 'assets/images/team_23.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["orakus-testimonial"],"patternName":"orakus/orakus-testimonial-list","name":"Testimonials Grid"},"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
        <div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"blockGap":"var:preset|spacing|40"},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
                <h5 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Testimonials &amp; Reviews', 'cozy-essential-addons') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
                <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:400;line-height:1.4"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E7E6E6"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Matt Droplet', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E7E6E6"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"> <?php esc_html_e('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert Linken', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Counseller', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E7E6E6"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[3]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Kristine Perrak', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Blogger', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E7E6E6"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[4]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Lorena Pot', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E7E6E6"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[5]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Yoga Coach', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E7E6E6"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[6]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Alexa Raffle', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
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