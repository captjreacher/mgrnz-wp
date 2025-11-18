<?php

/**
 * Title: Team Section 3
 * Slug: saaslauncher/team-section-3
 * Categories: saaslauncher-team
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/team_1.jpg',
    $saaslauncher_url . 'assets/images/team_2.jpg',
    $saaslauncher_url . 'assets/images/team_3.jpg',
    $saaslauncher_url . 'assets/images/team_23.jpg'
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-team"],"patternName":"saaslauncher/team-section","name":"Team Section 3"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Meet Our Team', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"48px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":749,"width":"240px","height":"240px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-749" style="border-radius:50%;object-fit:cover;width:240px;height:240px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"20px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:20px"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":758,"width":"240px","height":"240px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-758" style="border-radius:50%;object-fit:cover;width:240px;height:240px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Emily R', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - EmTech', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"20px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:20px"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":759,"width":"240px","height":"240px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-759" style="border-radius:50%;object-fit:cover;width:240px;height:240px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert M', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Robert Tech', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"20px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:20px"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":2241,"width":"240px","height":"240px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2241" style="border-radius:50%;object-fit:cover;width:240px;height:240px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Lexy P', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Lexy Industries', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"20px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:20px"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->