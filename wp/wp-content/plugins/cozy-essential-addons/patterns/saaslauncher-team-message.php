<?php

/**
 * Title: PRO: Team Message
 * Slug: cozy-essential-addons/saaslauncher-team-message
 * Categories: saaslauncher-team, saaslauncher-testimonial
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
    <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php esc_html_e('Together, we turn ideas into impactful solutions. Every line of code, every design choice, and every strategy is driven by our commitment to help clients succeed and grow.', 'cozy-essential-addons') ?></h4>
    <!-- /wp:heading -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"40px","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:40px;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px"><!-- wp:image {"id":759,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"80px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-759" style="border-radius:80px;object-fit:cover;width:80px;height:80px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('Robert Mathew', 'cozy-essential-addons') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder &amp; CEO', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->