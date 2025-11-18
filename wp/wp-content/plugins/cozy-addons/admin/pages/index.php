<div class="dashboard-box">
	<div class="dashboard-main">
		<div class="dasboard-content">
			<h2 class="welcome-title"><strong><em><?php esc_html_e( 'Welcome! ', 'cozy-addons' ); ?></em></strong><?php esc_html_e( 'Supercharge Your Site with 50+ Advanced Gutenberg Blocks', 'cozy-addons' ); ?></h2>
			<p class="ca__has-light-color"><?php esc_html_e( 'Design faster and smarter with over 50 beautifully crafted blocks—from dynamic content layouts and WooCommerce tools to engaging sliders, popups, and animation features. Fully compatible with Gutenberg and Full Site Editing.', 'cozy-addons' ); ?></p>

			<div class="ct-dashboard-row">
				<a class="ca__primary-btn btn-large ct-plugin-link" href="https://cozythemes.com/cozy-addons" target="_blank"><?php echo esc_html_e( 'Explore All Blocks', 'cozy-addons' ); ?></a>
				<?php
				if ( ! cozy_addons_premium_access() ) {
					?>
					<div class="row__separator"></div>
					<a class="ca__secondary-btn btn-large ct-plugin-link" href="https://cozythemes.com/pricing-and-plans" target="_blank"><?php echo esc_html_e( 'Upgrade to Pro', 'cozy-addons' ); ?></a>
					<?php
				}
				?>
			</div>

			<iframe
				width="100%"
				height="452"
				src="https://www.youtube.com/embed/GP4NxSbikS4"
				frameborder="0"
				allowfullscreen>
			</iframe>
		</div>
		<div class="dashboard-sidebar">
			<div class="sidebar-box need-support">
				<h3><?php esc_html_e( 'Need Support', 'cozy-addons' ); ?></h3>
				<p><?php esc_html_e( 'Still, having problems after reading all the documentation? No Problem!! Please create a support ticket. Our dedicated support team will help you to solve your problem.', 'cozy-addons' ); ?></p>
				<a class="sidebar-btn ca__primary-btn btn-md ct-plugin-link" href="https://cozythemes.com/support/" target="_blank"><?php esc_html_e( 'Create a Ticket', 'cozy-addons' ); ?></a>
				<span class="support-note">
					<p><?php esc_html_e( 'Note: The support ticket has consistently received responses within a 24-hour timeframe.', 'cozy-addons' ); ?></p>
				</span>
			</div>
			<div class="sidebar-box leave-review">
				<h3><?php esc_html_e( 'Leave a Review', 'cozy-addons' ); ?></h3>
				<p><?php esc_html_e( 'We kindly kindly request your review and feedback, to help us continue to enhance our product. Your feedback and review would be greatly appreciated!', 'cozy-addons' ); ?></p>
				<a class="sidebar-btn ca__primary-btn btn-md ct-plugin-link" href="https://wordpress.org/support/plugin/cozy-addons/reviews/" target="_blank"><?php esc_html_e( 'Rate and Review', 'cozy-addons' ); ?></a>
				<a class="sidebar-btn ca__secondary-btn btn-md ct-plugin-link" href="https://cozythemes.com/feedback-form/" target="_blank"><?php esc_html_e( 'Leave Feedback!', 'cozy-addons' ); ?></a>
			</div>
		</div>
	</div>
</div>
<?php
if ( ! cozy_addons_premium_access() ) :
	?>
<div class="ca__upsell-section">
	<h2>
		<figure class="ca__primary-crown">
			<img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" />
		</figure>
		<?php esc_html_e( 'Design Without Limits — Upgrade to Pro', 'cozy-addons' ); ?>
	</h2>

	<p>
		<?php esc_html_e( 'Access 50+ premium blocks, advanced design controls, dynamic content, and WooCommerce-ready elements — everything you need to build stunning websites faster.', 'cozy-addons' ); ?>
	</p>

	<ul class="features-list">
		<li><?php esc_html_e( 'Post Grid / Carousel', 'cozy-addons' ); ?></li>
		<li><?php esc_html_e( 'Advanced Gallery / Lightbox', 'cozy-addons' ); ?></li>
		<li><?php esc_html_e( 'Magazine Grid / List (Pro)', 'cozy-addons' ); ?></li>
		<li><?php esc_html_e( 'Animation On Scroll', 'cozy-addons' ); ?></li>
		<li><?php esc_html_e( 'Product Grid / Carousel (WooCommerce)', 'cozy-addons' ); ?></li>
		<li><?php esc_html_e( 'Tabs with Featured Content', 'cozy-addons' ); ?></li>
		<li><?php esc_html_e( 'Slider / Hero Carousel Block', 'cozy-addons' ); ?></li>
		<li><?php esc_html_e( 'Countdown Timer / Flash Offer (Pro)', 'cozy-addons' ); ?></li>
	</ul>


	<div class="ct-plugin-link">
		<a class="ca__primary-btn btn-large" href="<?php echo ! cozy_addons_premium_access() ? 'https://cozythemes.com/cozy-addons/' : '#'; ?>" target="<?php echo ! cozy_addons_premium_access() ? '_blank' : ''; ?>">
			<img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" />
			<?php esc_html_e( 'Upgrade to Pro', 'cozy-addons' ); ?></a>

			<a href="#" id="ca-features-list" class="ca__secondary-btn btn-large"><?php esc_html_e( 'See Full Comparison List', 'cozy-addons' ); ?></a>
	</div>
</div>
	<?php
endif;
?>
