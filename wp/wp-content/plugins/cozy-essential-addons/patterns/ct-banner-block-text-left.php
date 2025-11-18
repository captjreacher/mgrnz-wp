<?php

/**
 * Title: PRO: Banner Block with Text Left
 * Slug: cozy-essential-addons/ct-banner-block-text-left
 * Categories: ct-patterns,fotawp-banner
 */
$ct_patterns_images = array(
	COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/ct_pattern_img.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( $ct_patterns_images[0] ); ?>","id":1175,"dimRatio":40,"minHeight":700} -->
<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1175" alt="" src="<?php echo esc_url( $ct_patterns_images[0] ); ?>" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"3px"}},"fontSize":"small"} -->
						<h5 class="wp-block-heading has-text-align-left has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">Welcome to CT PATTERNS</h5>
						<!-- /wp:heading -->

						<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0","bottom":"0","left":"0"}}},"textColor":"background"} -->
						<h1 class="wp-block-heading has-text-align-left has-background-color has-text-color" style="margin-top:var(--wp--preset--spacing--50);margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:500">The Ultimate Tools for Your Business.</h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}},"typography":{"lineHeight":1.7}},"fontSize":"small"} -->
						<p class="has-text-align-left has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60);line-height:1.7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
						<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"1rem","bottom":"1rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
							<div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:1rem;padding-right:var(--wp--preset--spacing--60);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--60)">Signup Now</a></div>
							<!-- /wp:button -->

							<!-- wp:button {"backgroundColor":"secondary","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"1rem","bottom":"1rem"}}},"className":"is-style-button-hover-primary-bgcolor"} -->
							<div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="padding-top:1rem;padding-right:var(--wp--preset--spacing--60);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--60)">Request a Demo</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->