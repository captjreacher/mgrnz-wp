<?php

/**
 * Title: PRO: Hero / About 
 * Slug: cozy-essential-addons/orakus-about-hero
 * Categories: orakus-about,orakus-hero
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/about_page_featured.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"64px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"840px","wideSize":"780px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px","color":"#E7E6E6","radius":"60px"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:60px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":5,"fontSize":"small"} -->
                        <h5 class="wp-block-heading has-small-font-size"><?php esc_html_e('Welcome to Orakus', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"jumbo"} -->
                <h1 class="wp-block-heading has-text-align-left has-jumbo-font-size" style="line-height:1.3"><?php esc_html_e('Designing Spaces That Reflect You', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"","wideSize":"","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
                <p class="has-text-align-left has-medium-font-size"><?php esc_html_e('We are passionate interior designers who believe your home should tell your story. With a unique blend of creativity, precision, and warmth, we transform ordinary spaces into timeless, functional sanctuaries.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"18px","bottom":"18px"}}}} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:18px;padding-right:32px;padding-bottom:18px;padding-left:32px"><?php esc_html_e('View Portfolio', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"border":{"width":"1px","radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"32px","right":"32px","top":"17px","bottom":"17px"}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:17px;padding-right:32px;padding-bottom:17px;padding-left:32px"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":563,"dimRatio":0,"customOverlayColor":"#98b5c6","isUserOverlayColor":false,"minHeight":550,"isDark":false,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="margin-top:64px;min-height:550px"><img class="wp-block-cover__image-background wp-image-563 size-full" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#98b5c6"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->