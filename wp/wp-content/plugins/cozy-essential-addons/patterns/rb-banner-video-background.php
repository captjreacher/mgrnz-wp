<?php

/**
 * Title: PRO BLOCK: Banner with Video Background
 * Slug: cozy-essential-addons/rb-banner-video-background
 * Categories: reshape-block-patterns, fotawp-banner
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/banner_video.mp4',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/video_icon.png',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":657,"dimRatio":70,"customOverlayColor":"#04163a","backgroundType":"video","minHeight":600,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#04163a"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover"></video>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|50","bottom":"20px","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:site-title {"level":3,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"2px","textTransform":"uppercase","lineHeight":"1.1"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"medium","fontFamily":"plus-jakarta-sans"} /-->

                <!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"background-alt","overlayTextColor":"sub-heading-color","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"dimensions":{"minHeight":"640px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
            <div class="wp-block-group" style="min-height:640px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"74px","lineHeight":"1.5"}}} -->
                    <h2 class="wp-block-heading has-text-align-center" style="font-size:74px;line-height:1.5"><?php echo esc_html('Digital Conquest: Unleashing the Power of Ideas', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                    <p class="has-text-align-center has-medium-font-size"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:32px"><!-- wp:image {"align":"center","id":674,"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"fota-popup-button"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized fota-popup-button"><a href="#"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-674" style="object-fit:cover;width:70px;height:70px" /></a></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"color":{"background":"#0550e8d9"}},"className":"fota-popup-modal","layout":{"type":"constrained","contentSize":"100%"}} -->
                        <div class="wp-block-group fota-popup-modal has-background" style="background-color:#0550e8d9"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"10px","left":"15px","right":"15px"}},"border":{"radius":"6px"}},"backgroundColor":"foregound-alt","className":"fota-popup-content","layout":{"type":"constrained","contentSize":"760px"}} -->
                            <div class="wp-block-group fota-popup-content has-foregound-alt-background-color has-background" style="border-radius:6px;padding-top:15px;padding-right:15px;padding-bottom:10px;padding-left:15px"><!-- wp:buttons {"className":"fota-modal-close","layout":{"type":"flex","justifyContent":"right"}} -->
                                <div class="wp-block-buttons fota-modal-close"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"primary","style":{"border":{"radius":"100px"},"spacing":{"padding":{"left":"16px","right":"16px","top":"10px","bottom":"10px"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-foregound-alt-background-color has-text-color has-background wp-element-button" style="border-radius:100px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px">X</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->

                                <!-- wp:video {"id":657} -->
                                <figure class="wp-block-video"><video autoplay controls src="<?php echo esc_url($ct_patterns_media[0]) ?>"></video></figure>
                                <!-- /wp:video -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->