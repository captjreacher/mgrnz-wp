<?php

/**
 * Title: PRO: Offer & Promotion Grid
 * Slug: cozy-essential-addons/homelancer-offer-grid
 * Description: Offer Grid for Homelancer pro
 * Categories: homelancer-offer
 * Inserter: true
 */
$homelancer_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/homelancer/offer_1.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/homelancer/offer_2.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/homelancer/offer_3.png',
);
?>
<!-- wp:group {"metadata":{"categories":["homelancer-offer"],"patternName":"cozy-essential-addons/homelancer-offer-grid","name":"Offer Grid"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"84px","bottom":"84px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:84px;padding-right:var(--wp--preset--spacing--40);padding-bottom:84px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"54px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:54px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Offer &amp; Promotions', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"48bc7071-88c2-4d79-bb6f-6ee1f698596b","gridOptions":{"enableMasonry":false,"columnCount":3,"gap":24}} -->
    <div class="cozy-block-featured-content-box display-grid layout-default   hover-show" id="cozyBlock_48bc7071_88c2_4d79_bb6f_6ee1f698596b">
        <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1872,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1872" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1873,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1873" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1872,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1872" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1873,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1873" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1872,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1872" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1874,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1874" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->
        </div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->