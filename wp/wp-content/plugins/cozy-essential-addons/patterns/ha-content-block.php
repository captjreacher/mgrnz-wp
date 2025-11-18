<?php

/**
 * Title: Content Block
 * Slug: cozy-essential-addons/ha-content-block
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/about_thumb_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/about_thumb_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:1rem"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
                <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
                <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Story', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html('Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. “It\'s not Latin, though it looks like it, and it actually says nothing,”&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, “Its ‘words’ loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.”', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html('Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lore</em>m ipsum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-top:30px"><!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"0"}}}} -->
                <div class="wp-block-buttons alignfull" style="margin-top:0"><!-- wp:button {"backgroundColor":"heading-color","textColor":"neutra-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"5px","width":"1px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"20px","bottom":"20px"}}},"borderColor":"heading-color","className":"is-style-fill hello-agency-fill-buttons","fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill hello-agency-fill-buttons has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-neutra-color-color has-heading-color-background-color has-text-color has-background has-border-color has-heading-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:20px;padding-right:30px;padding-bottom:20px;padding-left:30px"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":486,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-486" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"},"margin":{"top":"120px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:120px"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":486,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-486" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-bottom:1rem"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
                <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
                <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Mission', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html('Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. “It\'s not Latin, though it looks like it, and it actually says nothing,”&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, “Its ‘words’ loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.”', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php echo esc_html('Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lore</em>m ipsum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-top:30px"><!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"0"}}}} -->
                <div class="wp-block-buttons alignfull" style="margin-top:0"><!-- wp:button {"backgroundColor":"heading-color","textColor":"neutra-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"5px","width":"1px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"20px","bottom":"20px"}}},"borderColor":"heading-color","className":"is-style-fill hello-agency-fill-buttons","fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill hello-agency-fill-buttons has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-neutra-color-color has-heading-color-background-color has-text-color has-background has-border-color has-heading-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:20px;padding-right:30px;padding-bottom:20px;padding-left:30px"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->