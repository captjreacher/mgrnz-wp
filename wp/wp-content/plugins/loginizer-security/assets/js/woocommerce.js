/* https://wordpress.stackexchange.com/questions/342148/list-of-js-events-in-the-woocommerce-frontend/352171#352171 */
jQuery(document).ready(function() {
	jQuery(document.body).on('update_checkout updated_checkout applied_coupon_in_checkout removed_coupon_in_checkout', function() {
		if(jQuery('#lz-turnstile-div').is(':empty') && turnstile) {
			turnstile.remove('#lz-turnstile-div');
			turnstile.render('#lz-turnstile-div');
		}
		
		if(jQuery('.g-recaptcha').is(':empty') && grecaptcha) {
			let container = jQuery('.lz-recaptcha'),
			siteKey = container.data('sitekey');

			if(siteKey){
				grecaptcha.render(container[0], {'sitekey': siteKey});
			}
		}
	});
});