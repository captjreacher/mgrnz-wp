<?php

/**
 * Title: Testimonials Grid
 * Slug: saaslauncher/testimonials-grid
 * Categories: saaslauncher-testimonial
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/rating_star.png',
    $saaslauncher_url . 'assets/images/team_2.jpg',
    $saaslauncher_url . 'assets/images/testimonial_1.jpg',
    $saaslauncher_url . 'assets/images/testimonial_2.jpg',
    $saaslauncher_url . 'assets/images/testimonial_3.jpg',
    $saaslauncher_url . 'assets/images/team_21.jpg',
    $saaslauncher_url . 'assets/images/team_22.jpg',
    $saaslauncher_url . 'assets/images/team_1.jpg',
    $saaslauncher_url . 'assets/images/team_23.jpg',
    $saaslauncher_url . 'assets/images/team_3.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/testimonials-grid","name":"Testimonials Grid"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"4rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                <h5 class="wp-block-heading is-style-default has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Testimonials &amp; Reviews', 'saaslauncher') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"heading-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center is-style-default has-heading-color-color has-text-color has-link-color has-xxx-large-font-size" style="line-height:1.3"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
        <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"className":"is-style-saaslauncher-folumns-fade-style","style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns is-style-saaslauncher-folumns-fade-style" style="margin-top:0px"><!-- wp:column {"style":{"spacing":{"blockGap":"24px"}}} -->
        <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Emily R.', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Marketing Lead', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"auto","aspectRatio":"5","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="aspect-ratio:5;object-fit:contain;width:100px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('We switched from a legacy tool, and I can’t believe the difference. Setup was a breeze, and every question I had was answered within minutes. That level of care is rare.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Mark T', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Startup Founder', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('I love how everything just works. No steep learning curve, no messy configurations—just a clean, powerful product that delivers what it promises.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Founder', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Beyond the robust features, what really impressed me was the onboarding support. They walked me through everything step-by-step and made us feel valued.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"24px"}}} -->
        <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"left":"32px","right":"32px","top":"32px","bottom":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Jason M', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Product Manager', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free. It feels like we have a real partner, not just a service.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Lena K', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('UX Consultant', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('This SaaS solution is a gem. It adapts perfectly to our needs, scales effortlessly, and the team behind it feels more like a partner than a provider.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[6]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Aliana Lorel', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Founder - Lorel Technology', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('As someone who\'s tried countless tools, this one stands out. Performance is solid, updates are regular, and customer service? Simply outstanding.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"24px"}}} -->
        <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[7]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Sara D', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Freelancer', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('This platform completely transformed how we manage our workflow. The intuitive UI, along with a support team that truly cares, makes it one of the best SaaS experiences I’ve had.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[8]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('David V', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('IT Director', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Smooth, fast, and reliable. Our team instantly became more productive. The personalized help during onboarding made a huge difference.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"24px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:24px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[9]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Peter Brandson', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"x-small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Owner - Brandson Industry', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"8px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:8px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('User-friendly, beautifully designed, and packed with functionality. I’ve never experienced such responsive support. Worth every penny.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:24px"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}}},"fontSize":"medium"} -->
        <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('View All Reviews', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->