<?php

/**
 * Title: CT Service Page Template Pattern Layout 1
 * Slug: cozy-essential-addons/ct-page-template-service-1
 * Categories: ct-patterns, ct-patterns-innerpage
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_pattern_service_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_pattern_service_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_1.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_2.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_3.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_4.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_5.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_6.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_7.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_8.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/pro_icon_9.png'
);
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#5f40cc"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background" style="background-color:#5f40cc;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"6rem"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":1.1}},"textColor":"foregound-alt"} -->
                <h1 class="wp-block-heading has-foregound-alt-color has-text-color" style="line-height:1.1">Our Services</h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"}},"textColor":"foregound-alt"} -->
                <p class="has-foregound-alt-color has-text-color" style="font-size:18px;line-height:1.6">I was going to say something extremely rough to Lorem Ipsum, to its family, and I said to myself, "I can't do it. I just can't do it. It's inappropriate. It's not nice."</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":471,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-471" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"6rem","bottom":"6rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"foregound-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-foregound-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center">What We Offer</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":391,"width":52,"height":58,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-391" width="52" height="58" /></figure>
                <!-- /wp:image -->

                <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"heading-color","className":"is-style-hide-bullet-list-link-hover-style-secondary","fontSize":"large"} -->
                <ul class="is-style-hide-bullet-list-link-hover-style-secondary has-heading-color-color has-text-color has-link-color has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item -->
                    <li><a href="#">Sea Transport Service</a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Following the quality of our service thus having gained trust of our many clients.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":395,"width":57,"height":58,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-395" width="57" height="58" /></figure>
                <!-- /wp:image -->

                <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"heading-color","className":"is-style-hide-bullet-list-link-hover-style-secondary","fontSize":"large"} -->
                <ul class="is-style-hide-bullet-list-link-hover-style-secondary has-heading-color-color has-text-color has-link-color has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item -->
                    <li><a href="#">Warehousing Services</a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Following the quality of our service thus having gained trust of our many clients.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":396,"width":74,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[4]) ?>" alt="" class="wp-image-396" width="74" height="56" /></figure>
                <!-- /wp:image -->

                <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"heading-color","className":"is-style-hide-bullet-list-link-hover-style-secondary","fontSize":"large"} -->
                <ul class="is-style-hide-bullet-list-link-hover-style-secondary has-heading-color-color has-text-color has-link-color has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item -->
                    <li><a href="#">Air Flight Services</a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Following the quality of our service thus having gained trust of our many clients.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":475,"width":52,"height":59,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[5]) ?>" alt="" class="wp-image-475" width="52" height="59" /></figure>
                <!-- /wp:image -->

                <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"heading-color","className":"is-style-hide-bullet-list-link-hover-style-secondary","fontSize":"large"} -->
                <ul class="is-style-hide-bullet-list-link-hover-style-secondary has-heading-color-color has-text-color has-link-color has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item -->
                    <li><a href="#">Project &amp; Exhibition</a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Following the quality of our service thus having gained trust of our many clients.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":476,"width":56,"height":58,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[6]) ?>" alt="" class="wp-image-476" width="56" height="58" /></figure>
                <!-- /wp:image -->

                <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"heading-color","className":"is-style-hide-bullet-list-link-hover-style-secondary","fontSize":"large"} -->
                <ul class="is-style-hide-bullet-list-link-hover-style-secondary has-heading-color-color has-text-color has-link-color has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item -->
                    <li><a href="#">Local Shipping Services</a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Following the quality of our service thus having gained trust of our many clients.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":477,"width":56,"height":58,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[7]) ?>" alt="" class="wp-image-477" width="56" height="58" /></figure>
                <!-- /wp:image -->

                <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"heading-color","className":"is-style-hide-bullet-list-link-hover-style-secondary","fontSize":"large"} -->
                <ul class="is-style-hide-bullet-list-link-hover-style-secondary has-heading-color-color has-text-color has-link-color has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item -->
                    <li><a href="#">Customer Clearance</a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Following the quality of our service thus having gained trust of our many clients.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"color":{"background":"#faf9fd"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background" style="background-color:#faf9fd;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">How It Works?</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"id":472,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-472" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":479,"width":50,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[8]) ?>" alt="" class="wp-image-479" width="50" height="56" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Warehousing Services</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
                        <p class="has-small-font-size" style="line-height:1.6">Leverage agile frameworks to provide a robust synopsis for strategy foster collaborative thinking</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":480,"width":50,"height":53,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[9]) ?>" alt="" class="wp-image-480" width="50" height="53" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Safety and Quality</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
                        <p class="has-small-font-size" style="line-height:1.6">Leverage agile frameworks to provide a robust synopsis for strategy foster collaborative thinking</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":481,"width":50,"height":51,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[10]) ?>" alt="" class="wp-image-481" width="50" height="51" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Care for Environment</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
                        <p class="has-small-font-size" style="line-height:1.6">Leverage agile frameworks to provide a robust synopsis for strategy foster collaborative thinking</p>
                        <!-- /wp:paragraph -->
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
</main>
<!-- /wp:group -->