<?php

/**
 * Title: PRO: Newsletter Block style 2
 * Slug: cozy-essential-addons/ct-newsletter-layout-2
 * Categories: ct-patterns,ct-patterns-newsletter
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"7rem","top":"7rem"}}},"backgroundColor":"tertiary-light","layout":{"type":"constrained","contentSize":"660px"}} -->
<div class="wp-block-group has-tertiary-light-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color"} -->
        <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color" style="font-style:normal;font-weight:500">Signup Newsletter</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"sub-heading-color","fontSize":"small"} -->
        <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);line-height:1.7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        <!-- /wp:paragraph -->

        <!-- wp:contact-form-7/contact-form-selector {"id":93,"title":"Newsletter","className":"ct-newsletter-blockwithform"} -->
        <div class="wp-block-contact-form-7-contact-form-selector ct-newsletter-blockwithform">[contact-form-7 id="93" title="Newsletter"]</div>
        <!-- /wp:contact-form-7/contact-form-selector -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->