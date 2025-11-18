<?php

/**
 * Title: PRO: Newsletter Block
 * Slug: cozy-essential-addons/ct-newsletter-block
 * Categories: ct-patterns,ct-patterns-newsletter
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"7rem","top":"7rem"}},"color":{"gradient":"linear-gradient(135deg,rgb(89,162,204) 0%,rgb(177,123,228) 100%)"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(135deg,rgb(89,162,204) 0%,rgb(177,123,228) 100%);padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
            <h2 class="wp-block-heading has-text-align-left has-background-color has-text-color" style="font-style:normal;font-weight:500">Signup Newsletter</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.7}},"textColor":"tertiary-light","fontSize":"small"} -->
            <p class="has-tertiary-light-color has-text-color has-small-font-size" style="line-height:1.7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30","right":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70)"><!-- wp:contact-form-7/contact-form-selector {"id":93,"title":"Newsletter","className":"ct-newsletter-blockwithform"} -->
                <div class="wp-block-contact-form-7-contact-form-selector ct-newsletter-blockwithform">[contact-form-7 id="93" title="Newsletter"]</div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->