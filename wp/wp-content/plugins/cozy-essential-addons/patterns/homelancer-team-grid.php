<?php

/**
 * Title: PRO: Team Grid 2
 * Slug: cozy-essential-addons/homelancer-team-grid
 * Description: Team for Homelancer pro
 * Categories: homelancer-team
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/team_21.jpg',
    $homelancer_url . 'assets/images/team_22.jpg',
    $homelancer_url . 'assets/images/team_23.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["homelancer-team"],"patternName":"homelancer/team-section","name":"Team Section"},"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","fontSize":"54px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:54px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Meet the Experts Behind Our Home Services', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"homelancer-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group homelancer-hover-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":1932,"width":"auto","height":"450px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1932" style="border-radius:20px;width:auto;height:450px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Alexander Wogtone', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Plumber', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                    <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></p>
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
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"homelancer-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group homelancer-hover-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":1939,"width":"auto","height":"450px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1939" style="border-radius:20px;width:auto;height:450px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Olivia Tayler', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Project Manager', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                    <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></p>
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
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"homelancer-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group homelancer-hover-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":1940,"width":"auto","height":"450px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1940" style="border-radius:20px;width:auto;height:450px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Denial Fireway', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Electrician', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                    <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></p>
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
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->