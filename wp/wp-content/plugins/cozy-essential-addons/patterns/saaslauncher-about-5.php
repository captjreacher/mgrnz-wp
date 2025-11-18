<?php

/**
 * Title: PRO: About Layout 5
 * Slug: cozy-essential-addons/saaslauncher-about-5
 * Categories: saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_2.jpg',
    $saaslauncher_url . 'assets/images/icon_101.png',
    $saaslauncher_url . 'assets/images/icon_102.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"patternName":"cozy-essential-addons/saaslauncher-about-5","name":"PRO: About Layout 5"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-saaslauncher-animated-border","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"}},"border":{"width":"1px","color":"#292929","radius":"60px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-saaslauncher-animated-border has-border-color has-dark-shade-background-color has-background" style="border-color:#292929;border-width:1px;border-radius:60px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"0px"}},"typography":{"lineHeight":"1.3","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Our Story', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.4"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="line-height:1.4"><?php esc_html_e('Building Smarter Solutions SaaS Experts', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-twelve","style":{"border":{"radius":"70px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}}},"fontSize":"medium"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:70px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px"><?php esc_html_e('Discover More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"padding":{"top":"28px"},"blockGap":{"left":"24px"}},"border":{"top":{"width":"0px","style":"none"}}}} -->
            <div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;margin-top:24px;margin-bottom:0;padding-top:28px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"20px"}},"backgroundColor":"background-alt"} -->
                <div class="wp-block-column has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"id":2291,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2291" style="object-fit:contain;width:40px;height:40px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"20px"}},"backgroundColor":"background-alt"} -->
                <div class="wp-block-column has-background-alt-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"id":2290,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2290" style="object-fit:contain;width:40px;height:40px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":11919,"dimRatio":0,"customOverlayColor":"#b9b6b5","isUserOverlayColor":false,"minHeight":640,"isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-radius:20px;min-height:640px"><img class="wp-block-cover__image-background wp-image-11919" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b6b5"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->