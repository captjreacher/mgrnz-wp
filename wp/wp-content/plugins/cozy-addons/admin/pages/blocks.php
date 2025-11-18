<div style="display:flex;justify-content:space-between;align-items:center">
	<h2><?php esc_html_e( 'Control Settings for Blocks', 'cozy-addons' ); ?></h2>
	<div style="font-size:14px;font-weight:500;cursor:pointer;color:#fff">
		<span style="padding:12px 26px;border-radius:4px;background-color:#5566ca;" id="cozy-blocks-enable-super"><?php esc_html_e( 'Enable All', 'cozy-addons' ); ?></span>
		<span style="margin:0 4px;"></span>
		<span style="padding:12px 26px;border-radius:4px;background-color:#d63638;" id="cozy-blocks-disable-super"><?php esc_html_e( 'Disable All', 'cozy-addons' ); ?></span>
	</div>
</div>
<p><?php esc_html_e( 'Enable or Disable Block as Your Needs and Requirement.', 'cozy-addons' ); ?></p>

<ul class="blocks-holder">
	<li>
		<a href="https://cozyblock.cozythemes.com/accordion-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M21.0772 6.5L19.1024 4.52517C18.9659 4.38867 18.9659 4.16796 19.1024 4.03291L19.4305 3.70474C19.567 3.56825 19.7878 3.56825 19.9228 3.70474L21.3226 5.10455L22.7224 3.70474C22.8589 3.56825 23.0796 3.56825 23.2147 3.70474L23.5428 4.03291C23.6793 4.16941 23.6793 4.39013 23.5428 4.52517L21.568 6.5C21.4344 6.6365 21.2137 6.6365 21.0772 6.5Z" fill="#0C50FF" />
					<rect fill="none" x="1" y="1" width="25" height="8" stroke="#0C50FF" stroke-width="2" />
					<path d="M21.0772 18.5L19.1024 16.5252C18.9659 16.3887 18.9659 16.168 19.1024 16.0329L19.4305 15.7047C19.567 15.5682 19.7878 15.5682 19.9228 15.7047L21.3226 17.1046L22.7224 15.7047C22.8589 15.5682 23.0796 15.5682 23.2147 15.7047L23.5428 16.0329C23.6793 16.1694 23.6793 16.3901 23.5428 16.5252L21.568 18.5C21.4344 18.6365 21.2137 18.6365 21.0772 18.5Z" fill="#0C50FF" />
					<rect x="1" y="13" width="25" height="8" stroke="#0C50FF" stroke-width="2" fill="none" />
				</svg>
				<?php esc_html_e( 'Accordion', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--accordion' );
				?>
				<input type="checkbox" class="cozy-block-active" name="accordion" id="cozy-block--accordion" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/advanced-gallery-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="1" y="1" width="28" height="25" stroke="#0C50FF" stroke-width="2" fill="none" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15 13.0458C15 12.2381 15.6044 11.5833 16.35 11.5833H23.35C24.0956 11.5833 24.7 12.2381 24.7 13.0458V20.6292C24.7 21.4369 24.0956 22.0917 23.35 22.0917H16.35C15.6044 22.0917 15 21.4369 15 20.6292V13.0458ZM16.35 12.3417C15.991 12.3417 15.7 12.6569 15.7 13.0458V20.6292C15.7 21.0181 15.991 21.3333 16.35 21.3333H23.35C23.709 21.3333 24 21.0181 24 20.6292V13.0458C24 12.6569 23.709 12.3417 23.35 12.3417H16.35Z" fill="#0C50FF" />
					<path d="M21.35 16.2958L22.85 18.4625H19.35L21.35 16.2958Z" fill="#CED4FB" />
					<path d="M19.35 15.2125L21.35 18.4625H17.35L19.35 15.2125Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5 5.48877C5 4.66655 5.5608 4 6.25258 4H12.7474C13.4392 4 14 4.66655 14 5.48877V20.9279C14 21.7501 13.4392 22.4167 12.7474 22.4167H6.25258C5.5608 22.4167 5 21.7501 5 20.9279V5.48877ZM6.25258 4.77196C5.9195 4.77196 5.64948 5.09289 5.64948 5.48877V20.9279C5.64948 21.3238 5.9195 21.6447 6.25258 21.6447H12.7474C13.0805 21.6447 13.3505 21.3238 13.3505 20.9279V5.48877C13.3505 5.09289 13.0805 4.77196 12.7474 4.77196H6.25258Z" fill="#0C50FF" />
					<path d="M11 12.7344L12.5 15.0365H9.5L11 12.7344Z" fill="#CED4FB" />
					<path d="M9 11.5833L11 15.0365H7L9 11.5833Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15 5.4625C15 4.65478 15.6044 4 16.35 4H23.35C24.0956 4 24.7 4.65478 24.7 5.4625V8.7125C24.7 9.52022 24.0956 10.175 23.35 10.175H16.35C15.6044 10.175 15 9.52022 15 8.7125V5.4625ZM16.35 4.75833C15.991 4.75833 15.7 5.0736 15.7 5.4625V8.7125C15.7 9.1014 15.991 9.41667 16.35 9.41667H23.35C23.709 9.41667 24 9.1014 24 8.7125V5.4625C24 5.0736 23.709 4.75833 23.35 4.75833H16.35Z" fill="#0C50FF" />
					<path d="M20.85 7.08752L21.85 8.17086L19.35 8.17085L20.85 7.08752Z" fill="#CED4FB" />
					<path d="M19.35 6.00418L20.85 8.17085H17.85L19.35 6.00418Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Advanced Gallery', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--advanced-gallery' );
				?>
				<input type="checkbox" class="cozy-block-active" name="advanced-gallery" id="cozy-block--advanced-gallery" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/mega-menu-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<rect fill="none" x="5" y="5" width="17" height="4.47368" stroke="#0C50FF" />
					<path d="M19.3474 7.93656L18.4599 7.11199C18.3985 7.05499 18.3985 6.96283 18.4599 6.90645L18.6074 6.76942C18.6687 6.71243 18.7679 6.71243 18.8286 6.76942L19.4577 7.3539L20.0869 6.76942C20.1482 6.71243 20.2474 6.71243 20.3081 6.76942L20.4556 6.90645C20.5169 6.96344 20.5169 7.0556 20.4556 7.11199L19.568 7.93656C19.508 7.99356 19.4088 7.99356 19.3474 7.93656Z" fill="#0C50FF" />
					<path fill="none" d="M7.23685 17.5263V9.47369H22V17.5263H14.8421H7.23685Z" stroke="#0C50FF" />
					<path d="M9.47369 11.2631H14.3947V15.7368H9.47369V11.2631Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M6.78946 6.78949H13.0526V7.68423H6.78946V6.78949Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M15.2895 11.2631H19.7631V12.1579H15.2895V11.2631Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M15.2895 13.0526H19.7631V13.9473H15.2895V13.0526Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M15.2895 14.8422H19.7631V15.7369H15.2895V14.8422Z" fill="#0C50FF" fill-opacity="0.5" />
				</svg>
				<?php esc_html_e( 'Advanced Mega Menu', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--mega-menu' );
				?>
				<input type="checkbox" class="cozy-block-active" name="mega-menu" id="cozy-block--mega-menu" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/advanced-tabs-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill="none" d="M9 5V6H10H26V20H1V1.5H9V5Z" stroke="#0C50FF" stroke-width="2" />
					<path fill="none" d="M11.5 1H18.5V3.5H11.5V1Z" stroke="#0C50FF" />
					<rect x="10" y="12" width="8" height="2" fill="#0C50FF" />
					<rect x="13" y="17" width="3" height="2" transform="rotate(-90 13 17)" fill="#0C50FF" />
					<rect x="13" y="12" width="3" height="2" transform="rotate(-90 13 12)" fill="#0C50FF" />
				</svg>
				<?php esc_html_e( 'Advanced Tabs', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--advanced-tab' );
				?>
				<input type="checkbox" class="cozy-block-active" name="advanced-tab" id="cozy-block--advanced-tab" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/back-to-top-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<path d="M14.5143 7.63175V16H13.4857V7.63175L10.7272 11.3195L10 10.3474L14 5L18 10.3474L17.2728 11.3195L14.5143 7.63175Z" fill="#0C50FF" />
				</svg>


				<?php esc_html_e( 'Back to Top', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--back-to-top' );
				?>
				<input type="checkbox" class="cozy-block-active" name="back-to-top" id="cozy-block--back-to-top" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/related-post-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<path d="M7.40719 9.29713L5.16676 10.9921V12.8214C5.16676 12.8688 5.18724 12.9142 5.22371 12.9477C5.26017 12.9812 5.30962 13 5.36119 13L6.72292 12.9968C6.77432 12.9965 6.82353 12.9776 6.85978 12.9441C6.89603 12.9107 6.91638 12.8654 6.91638 12.8182V11.7499C6.91638 11.7025 6.93687 11.6571 6.97333 11.6236C7.00979 11.5901 7.05924 11.5713 7.11081 11.5713H7.88853C7.94009 11.5713 7.98955 11.5901 8.02601 11.6236C8.06247 11.6571 8.08296 11.7025 8.08296 11.7499V12.8174C8.08288 12.8409 8.08785 12.8642 8.09758 12.8859C8.10732 12.9076 8.12163 12.9274 8.13969 12.944C8.15775 12.9607 8.17921 12.9739 8.20284 12.9829C8.22647 12.9919 8.2518 12.9965 8.27739 12.9965L9.63864 13C9.6902 13 9.73966 12.9812 9.77612 12.9477C9.81258 12.9142 9.83307 12.8688 9.83307 12.8214V10.9908L7.59312 9.29713C7.56678 9.27763 7.53398 9.267 7.50016 9.267C7.46633 9.267 7.43353 9.27763 7.40719 9.29713ZM10.9462 10.4492L9.93028 9.67999V8.13394C9.93028 8.09842 9.91492 8.06435 9.88757 8.03923C9.86022 8.01411 9.82313 8 9.78446 8H9.10396C9.06528 8 9.02819 8.01411 9.00084 8.03923C8.9735 8.06435 8.95813 8.09842 8.95813 8.13394V8.94441L7.87018 8.12222C7.76577 8.04331 7.63476 8.00016 7.49955 8.00016C7.36434 8.00016 7.23332 8.04331 7.12892 8.12222L4.05292 10.4492C4.03816 10.4604 4.02594 10.4741 4.01697 10.4897C4.008 10.5052 4.00245 10.5223 4.00065 10.5398C3.99884 10.5573 4.00081 10.575 4.00645 10.5918C4.01208 10.6086 4.02126 10.6242 4.03348 10.6378L4.34335 10.9838C4.35553 10.9974 4.37051 11.0087 4.38744 11.017C4.40436 11.0252 4.4229 11.0304 4.44199 11.0321C4.46107 11.0338 4.48033 11.032 4.49867 11.0268C4.51701 11.0217 4.53405 11.0132 4.54884 11.002L7.40719 8.83949C7.43353 8.81999 7.46633 8.80936 7.50016 8.80936C7.53398 8.80936 7.56678 8.81999 7.59312 8.83949L10.4516 11.002C10.4664 11.0132 10.4834 11.0217 10.5017 11.0268C10.52 11.032 10.5392 11.0338 10.5583 11.0322C10.5774 11.0305 10.5959 11.0254 10.6128 11.0172C10.6298 11.0089 10.6448 10.9977 10.657 10.9841L10.9668 10.6381C10.979 10.6245 10.9882 10.6088 10.9937 10.5919C10.9993 10.575 11.0012 10.5573 10.9993 10.5397C10.9974 10.5221 10.9917 10.5051 10.9826 10.4896C10.9734 10.474 10.9611 10.4603 10.9462 10.4492Z" fill="#0C50FF" />
					<rect x="17" y="10" width="6" height="2" fill="#0C50FF" />
					<path d="M15.4936 11.2124L13.7941 12.9119C13.6767 13.0294 13.4867 13.0294 13.3705 12.9119L13.0881 12.6295C12.9706 12.512 12.9706 12.3221 13.0881 12.2059L14.2927 11.0012L13.0881 9.79663C12.9706 9.67916 12.9706 9.48922 13.0881 9.37301L13.3693 9.0881C13.4867 8.97063 13.6767 8.97063 13.7929 9.0881L15.4923 10.7876C15.6111 10.905 15.6111 11.095 15.4936 11.2124Z" fill="#0C50FF" />
				</svg>
				<?php esc_html_e( 'Breadcrumb', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--breadcrumb' );
				?>
				<input type="checkbox" class="cozy-block-active" name="breadcrumb" id="cozy-block--breadcrumb" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect fill="none" x="1" y="7.99997" width="23" height="10" stroke="#0C50FF" stroke-width="2" />
				<path d="M10.2668 18.0597L10.2667 18.0597C9.97547 17.9761 9.67184 18.0208 9.4142 18.1833L9.41414 18.1833C8.89155 18.5132 8.70203 19.2449 8.97358 19.8177L9.10912 19.7534L8.97323 19.8169C8.974 19.8186 8.97556 19.8219 8.97797 19.8271C9.02271 19.9232 9.35844 20.6445 10.3039 22.6337L10.4394 22.5693L10.3039 22.6337C10.7778 23.6307 11.3055 24.3617 11.88 24.7869C12.3351 25.1239 12.6626 25.15 12.7489 25.15H15.2494C15.7059 25.15 16.1288 25.0106 16.5035 24.737C16.8647 24.4738 17.1702 24.0936 17.4159 23.6141L17.4159 23.6141C17.9005 22.6672 18.15 21.3232 18.15 19.7366C18.15 19.0805 17.6414 18.5339 16.9998 18.5339H16.9354L16.933 18.5364C16.7838 18.5453 16.6425 18.584 16.5142 18.6467C16.3219 18.2698 15.9419 18.0081 15.499 18.0081C15.3253 18.0081 15.1611 18.0485 15.0139 18.1203C14.8216 17.7435 14.4416 17.4817 13.9987 17.4817C13.8766 17.4817 13.7589 17.5018 13.6486 17.5388V16.0527C13.6486 15.3966 13.1399 14.85 12.4983 14.85C11.8567 14.85 11.3481 15.3966 11.3481 16.0527V19.3477L10.9572 18.6346C10.8088 18.3512 10.5642 18.1453 10.2668 18.0597ZM15.2489 24.3242H12.7622C12.735 24.32 12.5614 24.2869 12.2986 24.08C12.0042 23.848 11.5311 23.343 11.022 22.2703L11.022 22.2702C10.5152 21.2035 10.184 20.5021 9.97906 20.0668C9.79608 19.678 9.71315 19.4998 9.69677 19.4646C9.69488 19.4605 9.69387 19.4583 9.69371 19.458C9.69371 19.458 9.69371 19.458 9.69371 19.458L9.69301 19.4565L9.69278 19.456L9.69276 19.456C9.69275 19.456 9.69274 19.4559 9.69273 19.4559C9.59612 19.2521 9.67188 18.9906 9.83181 18.8897L9.83194 18.8896C9.8999 18.8466 9.9773 18.8356 10.0532 18.8571C10.1347 18.8806 10.2076 18.9396 10.2548 19.0304L10.2543 19.0307L10.2592 19.0383L10.2594 19.0388C10.2597 19.0394 10.2601 19.0401 10.2606 19.0408L11.0392 20.461C11.1241 20.6239 11.222 20.7554 11.3377 20.8385C11.4594 20.9261 11.5988 20.9577 11.7439 20.9189C11.8892 20.8801 11.9949 20.7825 12.0602 20.6469C12.1229 20.5167 12.1487 20.3521 12.1487 20.165V16.0532C12.1487 15.8387 12.3133 15.6769 12.4988 15.6769C12.6844 15.6769 12.8489 15.8387 12.8489 16.0532V19.4744C12.8489 19.6952 13.021 19.8876 13.249 19.8876C13.477 19.8876 13.6491 19.6952 13.6491 19.4744V18.6849C13.6491 18.4704 13.8136 18.3086 13.9992 18.3086C14.1847 18.3086 14.3493 18.4704 14.3493 18.6849V19.4744C14.3493 19.6952 14.5213 19.8876 14.7493 19.8876C14.9773 19.8876 15.1494 19.6952 15.1494 19.4744V19.2113C15.1494 18.9968 15.3139 18.8349 15.4995 18.8349C15.6851 18.8349 15.8496 18.9968 15.8496 19.2113V20.0008C15.8496 20.2216 16.0216 20.414 16.2496 20.414C16.4776 20.414 16.6497 20.2216 16.6497 20.0008V19.7376C16.6497 19.5231 16.8142 19.3613 16.9998 19.3613C17.1854 19.3613 17.3499 19.5231 17.3499 19.7376C17.3499 21.175 17.1352 22.3546 16.7409 23.1645L16.7082 23.2285C16.4392 23.7549 15.9778 24.3242 15.2489 24.3242Z" fill="#0C50FF" stroke="white" stroke-width="0.3" />
				<path d="M5.14062 14V11.8182H6.08665C6.25284 11.8182 6.3924 11.8405 6.50533 11.8853C6.61896 11.93 6.70455 11.9932 6.76207 12.0749C6.82031 12.1566 6.84943 12.2528 6.84943 12.3636C6.84943 12.4439 6.83168 12.517 6.79616 12.5831C6.76136 12.6491 6.71236 12.7045 6.64915 12.7493C6.58594 12.7933 6.51207 12.8238 6.42756 12.8409V12.8622C6.52131 12.8657 6.60653 12.8895 6.68324 12.9336C6.75994 12.9769 6.82102 13.0369 6.86648 13.1136C6.91193 13.1896 6.93466 13.2791 6.93466 13.3821C6.93466 13.5014 6.90341 13.6076 6.84091 13.7006C6.77912 13.7936 6.69105 13.8668 6.5767 13.9201C6.46236 13.9733 6.32599 14 6.16761 14H5.14062ZM5.73295 13.527H6.00994C6.10938 13.527 6.18395 13.5085 6.23366 13.4716C6.28338 13.4339 6.30824 13.3785 6.30824 13.3054C6.30824 13.2542 6.29652 13.2109 6.27308 13.1754C6.24964 13.1399 6.21626 13.1129 6.17294 13.0944C6.13033 13.076 6.07884 13.0667 6.01847 13.0667H5.73295V13.527ZM5.73295 12.7003H5.97585C6.0277 12.7003 6.07351 12.6921 6.11328 12.6758C6.15305 12.6594 6.18395 12.636 6.20597 12.6054C6.22869 12.5742 6.24006 12.5362 6.24006 12.4914C6.24006 12.424 6.21591 12.3725 6.16761 12.337C6.11932 12.3008 6.05824 12.2826 5.98438 12.2826H5.73295V12.7003ZM8.73572 11.8182H9.32805V13.2159C9.32805 13.3821 9.28828 13.5259 9.20874 13.6473C9.1299 13.7681 9.01982 13.8615 8.87848 13.9275C8.73714 13.9929 8.57308 14.0255 8.38629 14.0255C8.19808 14.0255 8.03331 13.9929 7.89197 13.9275C7.75064 13.8615 7.64055 13.7681 7.56172 13.6473C7.48359 13.5259 7.44453 13.3821 7.44453 13.2159V11.8182H8.03686V13.1647C8.03686 13.2322 8.05178 13.2926 8.08161 13.3459C8.11143 13.3984 8.15263 13.4396 8.20518 13.4694C8.25845 13.4993 8.31882 13.5142 8.38629 13.5142C8.45447 13.5142 8.51484 13.4993 8.5674 13.4694C8.61996 13.4396 8.66115 13.3984 8.69098 13.3459C8.72081 13.2926 8.73572 13.2322 8.73572 13.1647V11.8182ZM9.84991 12.2954V11.8182H11.7462V12.2954H11.09V14H10.5062V12.2954H9.84991ZM12.2095 12.2954V11.8182H14.1058V12.2954H13.4495V14H12.8657V12.2954H12.2095ZM16.6398 12.9091C16.6398 13.152 16.5926 13.3569 16.4981 13.5238C16.4037 13.69 16.2762 13.816 16.1157 13.902C15.9551 13.9872 15.7762 14.0298 15.5787 14.0298C15.3799 14.0298 15.2002 13.9868 15.0397 13.9009C14.8799 13.8142 14.7527 13.6878 14.6583 13.5216C14.5645 13.3547 14.5176 13.1505 14.5176 12.9091C14.5176 12.6662 14.5645 12.4616 14.6583 12.2954C14.7527 12.1285 14.8799 12.0025 15.0397 11.9172C15.2002 11.8313 15.3799 11.7883 15.5787 11.7883C15.7762 11.7883 15.9551 11.8313 16.1157 11.9172C16.2762 12.0025 16.4037 12.1285 16.4981 12.2954C16.5926 12.4616 16.6398 12.6662 16.6398 12.9091ZM16.0304 12.9091C16.0304 12.7784 16.013 12.6683 15.9782 12.5788C15.9441 12.4886 15.8934 12.4204 15.8259 12.3743C15.7591 12.3274 15.6767 12.3039 15.5787 12.3039C15.4807 12.3039 15.398 12.3274 15.3305 12.3743C15.2637 12.4204 15.213 12.4886 15.1782 12.5788C15.1441 12.6683 15.127 12.7784 15.127 12.9091C15.127 13.0397 15.1441 13.1502 15.1782 13.2404C15.213 13.3299 15.2637 13.3981 15.3305 13.4449C15.398 13.4911 15.4807 13.5142 15.5787 13.5142C15.6767 13.5142 15.7591 13.4911 15.8259 13.4449C15.8934 13.3981 15.9441 13.3299 15.9782 13.2404C16.013 13.1502 16.0304 13.0397 16.0304 12.9091ZM19.1017 11.8182V14H18.6073L17.819 12.8537H17.8062V14H17.2139V11.8182H17.7167L18.4923 12.9602H18.5093V11.8182H19.1017Z" fill="#0C50FF" />
				<path fill-rule="evenodd" clip-rule="evenodd" d="M23.4556 6.22119C22.9222 6.07774 22.6062 5.5291 22.7496 4.99577L23.5672 1.956C23.7107 1.42267 24.2593 1.10661 24.7927 1.25006C25.326 1.39351 25.6421 1.94215 25.4986 2.47548L24.681 5.51525C24.5375 6.04858 23.9889 6.36464 23.4556 6.22119Z" fill="#0C50FF" />
				<path fill-rule="evenodd" clip-rule="evenodd" d="M25.698 6.64931C25.3858 6.21874 25.4658 5.61903 25.88 5.28535L29.3501 2.4896C29.7951 2.13105 30.4497 2.21838 30.7852 2.68105C31.0974 3.11162 31.0174 3.71133 30.6032 4.04501L27.1331 6.84076C26.6881 7.19931 26.0335 7.11198 25.698 6.64931Z" fill="#0C50FF" />
				<path fill-rule="evenodd" clip-rule="evenodd" d="M25.8462 9.2097C25.9044 8.6605 26.3968 8.2625 26.9461 8.32076L30.0763 8.65278C30.6255 8.71103 31.0235 9.20347 30.9653 9.75267C30.907 10.3019 30.4146 10.6999 29.8654 10.6416L26.7351 10.3096C26.1859 10.2513 25.7879 9.75891 25.8462 9.2097Z" fill="#0C50FF" />
			</svg>
			<?php esc_html_e( 'Cozy Button', 'cozy-addons' ); ?>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--button' );
				?>
				<input type="checkbox" class="cozy-block-active" name="button" id="cozy-block--button" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/contact-form-styler-gutenberg-block/" target="_blank" rel="noopener">
				<svg
					width="27"
					height="21"
					viewBox="0 0 27 21"
					fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M25.5 1.5H1.5V19.5H25.5V1.5ZM0 0V21H27V0H0Z"
						fill="#0C50FF" />
					<path d="M4 3H12V5H4V3Z" fill="#9DB5F4" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M11.8316 3.4H4.16842V4.6H11.8316V3.4ZM4 3V5H12V3H4Z"
						fill="#0C50FF" />
					<path d="M15 3H23V5H15V3Z" fill="#9DB5F4" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M22.8316 3.4H15.1684V4.6H22.8316V3.4ZM15 3V5H23V3H15Z"
						fill="#0C50FF" />
					<path d="M4 7H23V12H4V7Z" fill="#9DB5F4" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M22.6 7.4H4.4V11.6H22.6V7.4ZM4 7V12H23V7H4Z"
						fill="#0C50FF" />
					<path d="M4 14.5H12V17.5H4V14.5Z" fill="#0C50FF" />
				</svg>

				<p>
					<?php esc_html_e( 'Contact Form 7 Styler', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--cf7-styler' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="cf7-styler" id="cozy-block--cf7-styler" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/cozy-container-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<path d="M13.1429 9.71429V5H14.8571V9.71429H20V11.2857H14.8571V16H13.1429V11.2857H8V9.71429H13.1429Z" fill="#0C50FF" />
				</svg>
				<?php esc_html_e( 'Cozy Container', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--container' );
				?>
				<input type="checkbox" class="cozy-block-active" name="container" id="cozy-block--container" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/countdown-timer-gutenberg-block/" target="_blank" rel="noopener">
				<svg
					width="23"
					height="25"
					viewBox="0 0 23 25"
					fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M1.3125 14.5C1.3125 19.5741 5.42588 23.6875 10.5 23.6875C15.5741 23.6875 19.6875 19.5741 19.6875 14.5C19.6875 9.42588 15.5741 5.3125 10.5 5.3125C5.42588 5.3125 1.3125 9.42588 1.3125 14.5ZM10.5 4C4.70101 4 0 8.70101 0 14.5C0 20.299 4.70101 25 10.5 25C16.299 25 21 20.299 21 14.5C21 8.70101 16.299 4 10.5 4Z"
						fill="#0C50FF" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M10.5 3.5V0.5H11.5V3.5H10.5Z"
						fill="#0C50FF" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M14 1H8V0H14V0.5V1Z"
						fill="#0C50FF" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M17.8321 6.26588L19.8733 4.06738L20.6062 4.74779L18.5649 6.94629L17.8321 6.26588Z"
						fill="#0C50FF" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M22.098 6.81528L17.701 2.73283L18.3814 2L22.7784 6.08244L22.4382 6.44886L22.098 6.81528Z"
						fill="#0C50FF" />
					<path d="M11 9V15H17.5" stroke="#0C50FF" />
				</svg>

				<p>
					<?php esc_html_e( 'Countdown Timer', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--countdown-timer' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="countdown-timer" id="cozy-block--countdown-timer" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/counter-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<path d="M15.3636 17.9773C14.9053 17.9773 14.4981 17.8987 14.142 17.7415C13.7879 17.5824 13.5095 17.3636 13.3068 17.0852C13.1042 16.8068 13.0019 16.4867 13 16.125H14.5909C14.5928 16.2367 14.6269 16.3371 14.6932 16.4261C14.7614 16.5133 14.8542 16.5814 14.9716 16.6307C15.089 16.6799 15.2235 16.7045 15.375 16.7045C15.5208 16.7045 15.6496 16.679 15.7614 16.6278C15.8731 16.5748 15.9602 16.5019 16.0227 16.4091C16.0852 16.3163 16.1155 16.2102 16.1136 16.0909C16.1155 15.9735 16.0795 15.8693 16.0057 15.7784C15.9337 15.6875 15.8324 15.6165 15.7017 15.5653C15.571 15.5142 15.4205 15.4886 15.25 15.4886H14.6591V14.3977H15.25C15.4072 14.3977 15.5455 14.3722 15.6648 14.321C15.786 14.2699 15.8797 14.1989 15.946 14.108C16.0142 14.017 16.0473 13.9129 16.0455 13.7955C16.0473 13.6818 16.0199 13.5814 15.9631 13.4943C15.9062 13.4072 15.8267 13.339 15.7244 13.2898C15.6241 13.2405 15.5076 13.2159 15.375 13.2159C15.2311 13.2159 15.1023 13.2415 14.9886 13.2926C14.8769 13.3438 14.7888 13.4148 14.7244 13.5057C14.66 13.5966 14.6269 13.7008 14.625 13.8182H13.1136C13.1155 13.4621 13.2131 13.1477 13.4062 12.875C13.6013 12.6023 13.8684 12.3883 14.2074 12.233C14.5464 12.0777 14.9356 12 15.375 12C15.8049 12 16.1847 12.0729 16.5142 12.2188C16.8456 12.3646 17.1042 12.5653 17.2898 12.821C17.4773 13.0748 17.5701 13.3655 17.5682 13.6932C17.572 14.0189 17.4602 14.286 17.233 14.4943C17.0076 14.7027 16.7216 14.8258 16.375 14.8636V14.9091C16.8447 14.9602 17.1979 15.1042 17.4347 15.3409C17.6714 15.5758 17.7879 15.8712 17.7841 16.2273C17.786 16.5682 17.6837 16.8703 17.4773 17.1335C17.2727 17.3968 16.9877 17.6032 16.6222 17.7528C16.2585 17.9025 15.839 17.9773 15.3636 17.9773Z" fill="#2A65FE" />
					<path d="M8.08092 18V16.8636L10.2514 15.0682C10.3953 14.9489 10.5184 14.8371 10.6207 14.7329C10.7249 14.6269 10.8044 14.518 10.8593 14.4062C10.9161 14.2945 10.9446 14.1704 10.9446 14.0341C10.9446 13.8845 10.9124 13.7566 10.848 13.6506C10.7855 13.5445 10.6983 13.4631 10.5866 13.4062C10.4749 13.3475 10.3461 13.3182 10.2002 13.3182C10.0544 13.3182 9.92562 13.3475 9.81388 13.4062C9.70403 13.465 9.6188 13.5511 9.55819 13.6648C9.49759 13.7784 9.46729 13.9167 9.46729 14.0795H7.96729C7.96729 13.6704 8.05914 13.3182 8.24285 13.0227C8.42657 12.7273 8.68603 12.5 9.02126 12.3409C9.35649 12.1818 9.74948 12.1023 10.2002 12.1023C10.6661 12.1023 11.0696 12.1771 11.4105 12.3267C11.7533 12.4744 12.0175 12.6828 12.2031 12.9517C12.3906 13.2206 12.4843 13.536 12.4843 13.8977C12.4843 14.1212 12.4379 14.3437 12.3451 14.5653C12.2523 14.785 12.0857 15.0284 11.8451 15.2954C11.6046 15.5625 11.2627 15.8807 10.8196 16.25L10.2741 16.7045V16.7386H12.5468V18H8.08092Z" fill="#2A65FE" />
					<path d="M6.88636 12.1818V18H5.30682V13.6364H5.27273L4 14.3977V13.0568L5.43182 12.1818H6.88636Z" fill="#2A65FE" />
					<path d="M24 8.07647L22.8574 9.24094L20.8081 7.15247V18H19.1919V7.15247L17.1442 9.24094L16 8.07647L20 4L24 8.07647Z" fill="#0C50FF" />
				</svg>
				<?php esc_html_e( 'Counter', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--counter' );
				?>
				<input type="checkbox" class="cozy-block-active" name="counter" id="cozy-block--counter" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/call-to-action-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<path d="M11 6.5C11 5.11929 12.1193 4 13.5 4C14.8807 4 16 5.11929 16 6.5C16 7.88071 14.8807 9 13.5 9C12.1193 9 11 7.88071 11 6.5Z" fill="#0C50FF" />
					<path d="M5 10.5H15V11.5H5V10.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="12.5" y="12" width="10" height="1" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M7.5 13.5H19.5V14.5H7.5V13.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M15.5 10.5H21.5V11.5H15.5V10.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M4 12H12V13H4V12Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="10" y="16" width="7" height="2" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Call to Action(CTA)', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--cta' );
				?>
				<input type="checkbox" class="cozy-block-active" name="cta" id="cozy-block--cta" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/date-and-time-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2H27V12H25V4H2V20H17V22H0V2Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5 6.5V0H7V6.5H5Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M20 6.5V0H22V6.5H20Z" fill="#0C50FF" />
					<rect x="5" y="10" width="3" height="3" rx="1.5" fill="#0C50FF" />
					<rect x="5" y="14" width="3" height="3" rx="1.5" fill="#0C50FF" fill-opacity="0.25" />
					<rect x="9" y="10" width="3" height="3" rx="1.5" fill="#0C50FF" fill-opacity="0.75" />
					<rect x="9" y="14" width="3" height="3" rx="1.5" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23.5 21C23.2239 21 23 20.7761 23 20.5L23 17.5C23 17.2239 23.2239 17 23.5 17C23.7761 17 24 17.2239 24 17.5L24 20.5C24 20.7761 23.7761 21 23.5 21Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M26 20.5C26 20.7761 25.7761 21 25.5 21H23.5C23.2239 21 23 20.7761 23 20.5C23 20.2239 23.2239 20 23.5 20H25.5C25.7761 20 26 20.2239 26 20.5Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 19C19.5 21.4853 21.5147 23.5 24 23.5C26.4853 23.5 28.5 21.4853 28.5 19C28.5 16.5147 26.4853 14.5 24 14.5C21.5147 14.5 19.5 16.5147 19.5 19ZM24 13C20.6863 13 18 15.6863 18 19C18 22.3137 20.6863 25 24 25C27.3137 25 30 22.3137 30 19C30 15.6863 27.3137 13 24 13Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Date & Time', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--current-time' );
				?>
				<input type="checkbox" class="cozy-block-active" name="current-time" id="cozy-block--current-time" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/featured-content-box-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<path d="M5 4H22V12H5V4Z" fill="#0C50FF" />
					<path d="M10 16.5H17V18.5H10V16.5Z" fill="#0C50FF" />
					<path d="M6 15H20" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M8 13.5L18 13.5" stroke="#0C50FF" stroke-opacity="0.5" />
				</svg>
				<?php esc_html_e( 'Featured Content Box', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--featured-content-box' );
				?>
				<input type="checkbox" class="cozy-block-active" name="featured-content-box" id="cozy-block--featured-content-box" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/icon-list-gutenberg-block/" target="_blank" rel="noopener">

			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<path d="M10 6L22 6" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M10 11L22 11" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M10 16L22 16" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M9 6C9 7.10457 8.10457 8 7 8C5.89543 8 5 7.10457 5 6C5 4.89543 5.89543 4 7 4C8.10457 4 9 4.89543 9 6ZM6.76866 7.05898L8.25253 5.57511C8.30292 5.52473 8.30292 5.44302 8.25253 5.39264L8.07006 5.21016C8.01967 5.15977 7.93797 5.15977 7.88757 5.21016L6.67742 6.42031L6.11243 5.85531C6.06204 5.80493 5.98034 5.80493 5.92994 5.85531L5.74747 6.03779C5.69708 6.08818 5.69708 6.16988 5.74747 6.22027L6.58618 7.05898C6.63657 7.10937 6.71827 7.10937 6.76866 7.05898Z" fill="#0C50FF" />
					<path d="M9 11C9 12.1046 8.10457 13 7 13C5.89543 13 5 12.1046 5 11C5 9.89543 5.89543 9 7 9C8.10457 9 9 9.89543 9 11ZM6.76866 12.059L8.25253 10.5751C8.30292 10.5247 8.30292 10.443 8.25253 10.3926L8.07006 10.2102C8.01967 10.1598 7.93797 10.1598 7.88757 10.2102L6.67742 11.4203L6.11243 10.8553C6.06204 10.8049 5.98034 10.8049 5.92994 10.8553L5.74747 11.0378C5.69708 11.0882 5.69708 11.1699 5.74747 11.2203L6.58618 12.059C6.63657 12.1094 6.71827 12.1094 6.76866 12.059Z" fill="#0C50FF" />
					<path d="M9 16C9 17.1046 8.10457 18 7 18C5.89543 18 5 17.1046 5 16C5 14.8954 5.89543 14 7 14C8.10457 14 9 14.8954 9 16ZM6.76866 17.059L8.25253 15.5751C8.30292 15.5247 8.30292 15.443 8.25253 15.3926L8.07006 15.2102C8.01967 15.1598 7.93797 15.1598 7.88757 15.2102L6.67742 16.4203L6.11243 15.8553C6.06204 15.8049 5.98034 15.8049 5.92994 15.8553L5.74747 16.0378C5.69708 16.0882 5.69708 16.1699 5.74747 16.2203L6.58618 17.059C6.63657 17.1094 6.71827 17.1094 6.76866 17.059Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Icon List', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--icon-list' );
				?>
				<input type="checkbox" class="cozy-block-active" name="icon-list" id="cozy-block--icon-list" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/icon-picker-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<path d="M12.5962 5.41743L11.0659 8.52017L7.64212 9.01933C7.02813 9.10838 6.78207 9.86532 7.22733 10.2989L9.70436 12.7126L9.1185 16.1224C9.01304 16.7387 9.66218 17.2004 10.2059 16.9121L13.2688 15.3021L16.3317 16.9121C16.8754 17.198 17.5245 16.7387 17.419 16.1224L16.8332 12.7126L19.3102 10.2989C19.7555 9.86532 19.5094 9.10838 18.8954 9.01933L15.4716 8.52017L13.9413 5.41743C13.6672 4.86438 12.8727 4.85735 12.5962 5.41743Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Icon Picker', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--icon-picker' );
				?>
				<input type="checkbox" class="cozy-block-active" name="icon-picker" id="cozy-block--icon-picker" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/before-after-image-gutenberg-block/" target="_blank" rel="noopener">
				<svg
					width="28"
					height="20"
					viewBox="0 0 28 20"
					fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M26.5 1.5H1.5V18.5H26.5V1.5ZM0 0V20H28V0H0Z"
						fill="#0C50FF" />
					<path d="M1.5 1.5H13.5V18.5H1.5V1.5Z" fill="#DAE4FF" />
					<path
						d="M11.5 10C11.5 8.61929 12.6193 7.5 14 7.5C15.3807 7.5 16.5 8.61929 16.5 10C16.5 11.3807 15.3807 12.5 14 12.5C12.6193 12.5 11.5 11.3807 11.5 10Z"
						fill="white" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M12.5 10C12.5 10.8284 13.1716 11.5 14 11.5C14.8284 11.5 15.5 10.8284 15.5 10C15.5 9.17157 14.8284 8.5 14 8.5C13.1716 8.5 12.5 9.17157 12.5 10ZM14 7.5C12.6193 7.5 11.5 8.61929 11.5 10C11.5 11.3807 12.6193 12.5 14 12.5C15.3807 12.5 16.5 11.3807 16.5 10C16.5 8.61929 15.3807 7.5 14 7.5Z"
						fill="#0C50FF" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M13.5 19V1H14.5V19H13.5Z"
						fill="#0C50FF" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M20.3029 7.87864L22.2121 9.78783C22.3293 9.90499 22.3293 10.0949 22.2121 10.2121L20.3029 12.1213C20.1858 12.2384 19.9958 12.2384 19.8787 12.1213C19.7615 12.0041 19.7615 11.8142 19.8787 11.697L21.2757 10.3H17V9.69996L21.2757 9.69996L19.8787 8.3029C19.7615 8.18575 19.7615 7.9958 19.8787 7.87864C19.9958 7.76148 20.1858 7.76148 20.3029 7.87864Z"
						fill="#0C50FF" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M7.69706 7.87864L5.78787 9.78783C5.67071 9.90499 5.67071 10.0949 5.78787 10.2121L7.69706 12.1213C7.81421 12.2384 8.00416 12.2384 8.12132 12.1213C8.23848 12.0041 8.23848 11.8142 8.12132 11.697L6.72426 10.3H11V9.69996L6.72426 9.69996L8.12132 8.3029C8.23848 8.18575 8.23848 7.9958 8.12132 7.87864C8.00416 7.76148 7.81421 7.76148 7.69706 7.87864Z"
						fill="#0C50FF" />
				</svg>

				<p>
					<?php esc_html_e( 'Before/After Image', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--img-compare' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="img-compare" id="cozy-block--img-compare" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/popup-builder-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="3" width="25" height="17" stroke="#0C50FF" stroke-width="2" />
					<path d="M5 8H7.75H10.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M6 10H9.5H13.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M8 12L13.1333 12L19 12" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M14 10H17.5L21 10" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M11 8H16.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M17 8H22" stroke="#0C50FF" stroke-opacity="0.5" />
					<rect x="10" y="15" width="7" height="2" fill="#0C50FF" />
					<rect x="21" width="7" height="7" rx="3.5" fill="#80A2FA" />
					<path d="M25.0686 3.5L25.9215 2.64713C26.0262 2.54247 26.0262 2.37278 25.9215 2.26804L25.732 2.07849C25.6273 1.97384 25.4576 1.97384 25.3529 2.07849L24.5 2.93136L23.6471 2.07849C23.5425 1.97384 23.3728 1.97384 23.268 2.07849L23.0785 2.26804C22.9738 2.3727 22.9738 2.54239 23.0785 2.64713L23.9314 3.5L23.0785 4.35287C22.9738 4.45753 22.9738 4.62722 23.0785 4.73196L23.268 4.92151C23.3727 5.02616 23.5425 5.02616 23.6471 4.92151L24.5 4.06864L25.3529 4.92151C25.4575 5.02616 25.6273 5.02616 25.732 4.92151L25.9215 4.73196C26.0262 4.6273 26.0262 4.45761 25.9215 4.35287L25.0686 3.5Z" fill="white" />
				</svg>

				<p>
					<?php esc_html_e( 'Popup Builder', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--modal' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="modal" id="cozy-block--modal" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/portfolio-gallery-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<rect x="5.5" y="7.5" width="14" height="9" stroke="#0C50FF" />
					<path fill="none" d="M7 6H21V15" stroke="#0C50FF" />
					<path d="M11 14L13.5 11L16 14H11Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M8 14L11 10L14 14H8Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Portfolio Gallery', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--portfolio-gallery' );
				?>
				<input type="checkbox" class="cozy-block-active" name="portfolio-gallery" id="cozy-block--portfolio-gallery" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/pricing-table-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 1.5H9.5V20.5H17.5V1.5ZM8 0V22H19V0H8Z" fill="#0C50FF" />
					<path d="M13.3921 10.7273V3.45459H13.858V10.7273H13.3921ZM14.7358 5.78129C14.7093 5.53319 14.5975 5.34001 14.4006 5.20175C14.2055 5.06349 13.9517 4.99436 13.6392 4.99436C13.4195 4.99436 13.2311 5.02751 13.0739 5.09379C12.9167 5.16008 12.7964 5.25004 12.7131 5.36368C12.6297 5.47732 12.5871 5.60705 12.5852 5.75289C12.5852 5.8741 12.6127 5.97921 12.6676 6.06823C12.7244 6.15724 12.8011 6.233 12.8977 6.2955C12.9943 6.35611 13.1013 6.40724 13.2188 6.44891C13.3362 6.49058 13.4546 6.52561 13.5739 6.55402L14.1193 6.69039C14.339 6.74152 14.5502 6.81065 14.7529 6.89777C14.9574 6.98489 15.1402 7.09474 15.3011 7.22732C15.464 7.35989 15.5928 7.51993 15.6875 7.70743C15.7822 7.89493 15.8296 8.11463 15.8296 8.36652C15.8296 8.70743 15.7424 9.00762 15.5682 9.26709C15.394 9.52467 15.1421 9.72637 14.8125 9.8722C14.4849 10.0161 14.0881 10.0881 13.6222 10.0881C13.1695 10.0881 12.7765 10.018 12.4432 9.87789C12.1118 9.73773 11.8523 9.53319 11.6648 9.26425C11.4792 8.99531 11.3788 8.66766 11.3636 8.28129H12.4006C12.4157 8.48395 12.4782 8.65251 12.5881 8.78698C12.6979 8.92145 12.8409 9.02182 13.0171 9.08811C13.1951 9.1544 13.394 9.18754 13.6136 9.18754C13.8428 9.18754 14.0436 9.15345 14.2159 9.08527C14.3902 9.0152 14.5265 8.91861 14.625 8.7955C14.7235 8.6705 14.7737 8.52467 14.7756 8.358C14.7737 8.20648 14.7292 8.08148 14.6421 7.983C14.5549 7.88262 14.4328 7.79929 14.2756 7.733C14.1203 7.66482 13.9385 7.60421 13.7301 7.55118L13.0682 7.38073C12.589 7.25762 12.2102 7.07107 11.9318 6.82107C11.6553 6.56917 11.5171 6.23489 11.5171 5.81823C11.5171 5.47542 11.6099 5.17523 11.7955 4.91766C11.983 4.66008 12.2377 4.46027 12.5597 4.31823C12.8816 4.17429 13.2462 4.10232 13.6534 4.10232C14.0663 4.10232 14.428 4.17429 14.7386 4.31823C15.0511 4.46027 15.2964 4.65819 15.4744 4.91198C15.6525 5.16387 15.7443 5.45364 15.75 5.78129H14.7358Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M16 14H11V13H16V14Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M16 16H11V15H16V16Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M16 18H11V17H16V18Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 3.25H8V4.75H1.75V17.25H8V18.75H0.25V3.25Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M26.75 3.25H19V4.75H25.25V17.25H19V18.75H26.75V3.25Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8 9H1V7.5H8V9Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M26 9H19V7.5H26V9Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Pricing Table', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--pricing-table' );
				?>
				<input type="checkbox" class="cozy-block-active" name="pricing-table" id="cozy-block--pricing-table" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/progress-bar-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="27" height="9" fill="#0C50FF" />
					<rect x="2" y="2" width="14" height="5" fill="white" />
					<rect y="11" width="27" height="9" fill="#0C50FF" />
					<rect x="2" y="13" width="20" height="5" fill="white" />
					<path fill="none" d="M2 19L7 12.5" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M5 18.5L10 12" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M7 19L12 12.5" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M10 18.5L15 12" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M12 19L17 12.5" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M15 18.5L20 12" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M17 19L22 12.5" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M19 19.5L24 13" stroke="#0C50FF" stroke-width="0.5" />
					<path fill="none" d="M1 17.5L6 11" stroke="#0C50FF" stroke-width="0.5" />
				</svg>
				<?php esc_html_e( 'Progress Bar', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--progress-bar' );
				?>
				<input type="checkbox" class="cozy-block-active" name="progress-bar" id="cozy-block--progress-bar" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/sidebar-panel-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="17" height="20" stroke="#0C50FF" stroke-width="2" />
					<line x1="4" y1="4.5" x2="15" y2="4.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<line x1="4" y1="6.5" x2="13" y2="6.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<line x1="4" y1="8.5" x2="15" y2="8.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<line x1="4" y1="10.5" x2="11" y2="10.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<line x1="4" y1="12.5" x2="13" y2="12.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<rect x="20" width="7" height="7" fill="#0C50FF" />
					<path d="M24.0686 3.5L24.9215 2.64713C25.0262 2.54247 25.0262 2.37278 24.9215 2.26804L24.732 2.07849C24.6273 1.97384 24.4576 1.97384 24.3529 2.07849L23.5 2.93136L22.6471 2.07849C22.5425 1.97384 22.3728 1.97384 22.268 2.07849L22.0785 2.26804C21.9738 2.3727 21.9738 2.54239 22.0785 2.64713L22.9314 3.5L22.0785 4.35287C21.9738 4.45753 21.9738 4.62722 22.0785 4.73196L22.268 4.92151C22.3727 5.02617 22.5425 5.02617 22.6471 4.92151L23.5 4.06864L24.3529 4.92151C24.4575 5.02617 24.6273 5.02617 24.732 4.92151L24.9215 4.73196C25.0262 4.6273 25.0262 4.45761 24.9215 4.35287L24.0686 3.5Z" fill="white" />
				</svg>

				<?php esc_html_e( 'Sidebar Panel', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--sidebar-panel' );
				?>
				<input type="checkbox" class="cozy-block-active" name="sidebar-panel" id="cozy-block--sidebar-panel" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/slider-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22 2H5V15H22V2ZM3 0V17H24V0H3Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 14V3H2V14H0Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M25 14V3H27V14H25Z" fill="#0C50FF" />
					<path d="M20.117 8.76554L17.9927 10.8899C17.8458 11.0367 17.6084 11.0367 17.4631 10.8899L17.1101 10.5369C16.9633 10.39 16.9633 10.1526 17.1101 10.0073L18.6159 8.50156L17.1101 6.99578C16.9633 6.84895 16.9633 6.61153 17.1101 6.46626L17.4616 6.11012C17.6084 5.96329 17.8458 5.96329 17.9911 6.11012L20.1154 8.23446C20.2638 8.38129 20.2638 8.61871 20.117 8.76554Z" fill="#0C50FF" />
					<path d="M7.10993 8.76554L9.23427 10.8899C9.3811 11.0367 9.61853 11.0367 9.76379 10.8899L10.1168 10.5369C10.2636 10.39 10.2636 10.1526 10.1168 10.0073L8.61103 8.50156L10.1168 6.99578C10.2636 6.84895 10.2636 6.61153 10.1168 6.46626L9.76535 6.11012C9.61853 5.96329 9.3811 5.96329 9.23583 6.11012L7.1115 8.23446C6.9631 8.38129 6.9631 8.61871 7.10993 8.76554Z" fill="#0C50FF" />
					<path d="M10 19C10 18.4477 10.4477 18 11 18C11.5523 18 12 18.4477 12 19C12 19.5523 11.5523 20 11 20C10.4477 20 10 19.5523 10 19Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M13 19C13 18.4477 13.4477 18 14 18C14.5523 18 15 18.4477 15 19C15 19.5523 14.5523 20 14 20C13.4477 20 13 19.5523 13 19Z" fill="#0C50FF" />
					<path d="M16 19C16 18.4477 16.4477 18 17 18C17.5523 18 18 18.4477 18 19C18 19.5523 17.5523 20 17 20C16.4477 20 16 19.5523 16 19Z" fill="#0C50FF" fill-opacity="0.5" />
				</svg>

				<?php esc_html_e( 'Slider', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--slider' );
				?>
				<input type="checkbox" class="cozy-block-active" name="slider" id="cozy-block--slider" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect width="13" height="11" fill="#0C50FF" />
				<rect y="12" width="13" height="11" fill="#0C50FF" />
				<rect x="14" width="13" height="11" fill="#0C50FF" />
				<rect x="14" y="12" width="13" height="11" fill="#0C50FF" />
				<path d="M22.5128 2H23.5861L21.2411 4.96547L24 9H21.8399L20.1482 6.55276L18.2122 9H17.1382L19.6466 5.82801L17 2.00032H19.2149L20.7441 4.23717L22.5128 2ZM22.1363 8.28945H22.731L18.8917 2.67344H18.2536L22.1363 8.28945Z" fill="white" />
				<path d="M5.65446 8.92242V6.58636H4.93287V5.51288H5.65446V5.05035C5.65446 3.85451 6.19346 3.30035 7.36304 3.30035C7.48 3.30035 7.64158 3.31265 7.79121 3.3305C7.90328 3.34208 8.01446 3.36115 8.124 3.38759V4.36095C8.06067 4.35502 7.99714 4.3515 7.93354 4.35041C7.86229 4.34855 7.79102 4.34768 7.71975 4.34778C7.51354 4.34778 7.35254 4.37588 7.23121 4.43823C7.14964 4.47931 7.08107 4.54235 7.03317 4.62032C6.95792 4.74327 6.92408 4.91159 6.92408 5.1332V5.51288H8.06712L7.95454 6.12851L7.87083 6.58636H6.92408V9C8.65717 8.78981 10 7.30884 10 5.51288C10 3.57289 8.43287 2 6.5 2C4.56712 2 3 3.57289 3 5.51288C3 7.16042 4.12992 8.54274 5.65446 8.92242Z" fill="white" />
				<path d="M24.3328 15.7823C24.2408 15.4744 23.9697 15.2319 23.6255 15.1496C23.0017 15 20.5 15 20.5 15C20.5 15 17.9983 15 17.3745 15.1496C17.0303 15.2319 16.7592 15.4744 16.6672 15.7823C16.5 16.3405 16.5 17.5051 16.5 17.5051C16.5 17.5051 16.5 18.6696 16.6672 19.2278C16.7592 19.5357 17.0303 19.7681 17.3745 19.8504C17.9983 20 20.5 20 20.5 20C20.5 20 23.0017 20 23.6255 19.8504C23.9697 19.7681 24.2408 19.5357 24.3328 19.2278C24.5 18.6696 24.5 17.5051 24.5 17.5051C24.5 17.5051 24.5 16.3405 24.3328 15.7823ZM19.6818 18.5624V16.4477L21.7727 17.5051L19.6818 18.5624Z" fill="white" />
				<path d="M6.48522 15.977C5.63391 15.977 4.94724 16.6638 4.94724 17.5153C4.94724 18.3668 5.63391 19.0537 6.48522 19.0537C7.33653 19.0537 8.0232 18.3668 8.0232 17.5153C8.0232 16.6638 7.33653 15.977 6.48522 15.977ZM6.48522 18.5155C5.93508 18.5155 5.48533 18.0669 5.48533 17.5153C5.48533 16.9637 5.93374 16.5152 6.48522 16.5152C7.0367 16.5152 7.48511 16.9637 7.48511 17.5153C7.48511 18.0669 7.03536 18.5155 6.48522 18.5155ZM8.44484 15.9141C8.44484 16.1136 8.28422 16.2729 8.08611 16.2729C7.88667 16.2729 7.72738 16.1122 7.72738 15.9141C7.72738 15.7159 7.88801 15.5553 8.08611 15.5553C8.28422 15.5553 8.44484 15.7159 8.44484 15.9141ZM9.46347 16.2783C9.44071 15.7976 9.33095 15.3719 8.97892 15.0211C8.62822 14.6703 8.20257 14.5605 7.72203 14.5364C7.22677 14.5083 5.74233 14.5083 5.24707 14.5364C4.76788 14.5592 4.34222 14.669 3.99018 15.0197C3.63815 15.3705 3.52973 15.7963 3.50563 16.2769C3.47752 16.7723 3.47752 18.2571 3.50563 18.7524C3.52839 19.2331 3.63815 19.6588 3.99018 20.0096C4.34222 20.3604 4.76654 20.4702 5.24707 20.4943C5.74233 20.5224 7.22677 20.5224 7.72203 20.4943C8.20257 20.4715 8.62822 20.3617 8.97892 20.0096C9.32962 19.6588 9.43938 19.2331 9.46347 18.7524C9.49158 18.2571 9.49158 16.7736 9.46347 16.2783ZM8.82365 19.2839C8.71924 19.5464 8.51712 19.7485 8.25343 19.8543C7.85856 20.0109 6.92158 19.9748 6.48522 19.9748C6.04886 19.9748 5.11054 20.0096 4.71701 19.8543C4.45466 19.7499 4.25254 19.5477 4.14679 19.2839C3.99018 18.889 4.02632 17.9518 4.02632 17.5153C4.02632 17.0789 3.99152 16.1404 4.14679 15.7467C4.2512 15.4843 4.45332 15.2822 4.71701 15.1764C5.11188 15.0197 6.04886 15.0559 6.48522 15.0559C6.92158 15.0559 7.8599 15.0211 8.25343 15.1764C8.51578 15.2808 8.7179 15.483 8.82365 15.7467C8.98026 16.1417 8.94412 17.0789 8.94412 17.5153C8.94412 17.9518 8.98026 18.8903 8.82365 19.2839Z" fill="white" />
			</svg>
			<?php esc_html_e( 'Social Icons', 'cozy-addons' ); ?>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--social-icon' );
				?>
				<input type="checkbox" class="cozy-block-active" name="social-icon" id="cozy-block--social-icon" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/related-post-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<path d="M14.3838 13.2322L10.9771 11.4904C10.6501 11.7947 10.2344 12.0014 9.7822 12.0845C9.33005 12.1676 8.86178 12.1234 8.43642 11.9573C8.01107 11.7913 7.64767 11.5109 7.39204 11.1515C7.13641 10.7921 7 10.3698 7 9.93787C7 9.50592 7.13641 9.08363 7.39204 8.72424C7.64767 8.36486 8.01107 8.08448 8.43642 7.91844C8.86178 7.7524 9.33005 7.70814 9.7822 7.79123C10.2344 7.87433 10.6501 8.08106 10.9771 8.38537L14.3838 6.6435C14.267 6.12958 14.3514 5.59341 14.6215 5.13303C14.8917 4.67265 15.3296 4.31883 15.8552 4.13627C16.3808 3.95371 16.9589 3.95461 17.4838 4.1388C18.0087 4.323 18.4454 4.67818 18.7139 5.1394C18.9825 5.60062 19.065 6.13705 18.9463 6.6506C18.8277 7.16414 18.5158 7.62049 18.0677 7.93619C17.6197 8.25188 17.0654 8.40583 16.5062 8.36987C15.947 8.33392 15.4204 8.11046 15.0225 7.74037L11.6158 9.48225C11.6839 9.78243 11.6839 10.0927 11.6158 10.3929L15.0225 12.1354C15.4204 11.7653 15.947 11.5418 16.5062 11.5059C17.0654 11.4699 17.6197 11.6239 18.0677 11.9396C18.5158 12.2553 18.8277 12.7116 18.9463 13.2252C19.065 13.7387 18.9825 14.2751 18.7139 14.7364C18.4454 15.1976 18.0087 15.5527 17.4838 15.7369C16.9589 15.9211 16.3808 15.922 15.8552 15.7395C15.3296 15.5569 14.8917 15.2031 14.6215 14.7427C14.3514 14.2823 14.267 13.7462 14.3838 13.2322Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Social Share', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--social-share' );
				?>
				<input type="checkbox" class="cozy-block-active" name="social-share" id="cozy-block--social-share" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/team-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="20" stroke="#0C50FF" stroke-width="2" />
					<path d="M8.14286 10.2857C8.9308 10.2857 9.57143 9.64509 9.57143 8.85714C9.57143 8.0692 8.9308 7.42857 8.14286 7.42857C7.35491 7.42857 6.71429 8.0692 6.71429 8.85714C6.71429 9.64509 7.35491 10.2857 8.14286 10.2857ZM18.1429 10.2857C18.9308 10.2857 19.5714 9.64509 19.5714 8.85714C19.5714 8.0692 18.9308 7.42857 18.1429 7.42857C17.3549 7.42857 16.7143 8.0692 16.7143 8.85714C16.7143 9.64509 17.3549 10.2857 18.1429 10.2857ZM18.8571 11H17.4286C17.0357 11 16.6808 11.1585 16.4219 11.4152C17.3214 11.9085 17.9598 12.7991 18.0982 13.8571H19.5714C19.9665 13.8571 20.2857 13.5379 20.2857 13.1429V12.4286C20.2857 11.6406 19.6451 11 18.8571 11ZM13.1429 11C14.5246 11 15.6429 9.8817 15.6429 8.5C15.6429 7.1183 14.5246 6 13.1429 6C11.7612 6 10.6429 7.1183 10.6429 8.5C10.6429 9.8817 11.7612 11 13.1429 11ZM14.8571 11.7143H14.6719C14.2076 11.9375 13.692 12.0714 13.1429 12.0714C12.5937 12.0714 12.0804 11.9375 11.6138 11.7143H11.4286C10.0089 11.7143 8.85714 12.8661 8.85714 14.2857V14.9286C8.85714 15.5201 9.33705 16 9.92857 16H16.3571C16.9487 16 17.4286 15.5201 17.4286 14.9286V14.2857C17.4286 12.8661 16.2768 11.7143 14.8571 11.7143ZM9.86384 11.4152C9.60491 11.1585 9.25 11 8.85714 11H7.42857C6.64062 11 6 11.6406 6 12.4286V13.1429C6 13.5379 6.3192 13.8571 6.71429 13.8571H8.18527C8.32589 12.7991 8.96429 11.9085 9.86384 11.4152Z" fill="#0C50FF" />
				</svg>

				<?php esc_html_e( 'Teams', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--teams' );
				?>
				<input type="checkbox" class="cozy-block-active" name="teams" id="cozy-block--teams" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/testimonial-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="31" height="24" viewBox="0 0 31 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12 5.5H4V4.5H12V5.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 7.5H4V6.5H10.5V7.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 9.5H4V8.5H9.5V9.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M18 9.5L10 9.5V8.5L18 8.5V9.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 11.5L4 11.5V10.5L14 10.5V11.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M21 5.5H12.5V4.5H21V5.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23 7.5L11 7.5V6.5L23 6.5V7.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H27V8.4H25V2H2V14.6H4.94118V18.5015L8.6599 14.6H19.3824V16.6H9.51657L2.94118 23.4985V16.6H0V0Z" fill="#0C50FF" />
					<path d="M25.0557 18.327C23.6546 16.5756 23.9611 14.3865 24.2895 13.5108C24.2019 13.3356 23.7422 13.3648 23.5233 13.4013C22.4725 13.664 22.5017 13.0729 22.6476 12.7446C22.8227 12.1316 23.6692 11.3216 24.0706 10.9932C24.8733 10.3365 24.9463 10.0446 25.0557 9.78918C25.1433 8.91351 24.3989 8.8892 23.9611 9.13243C22.3849 10.0081 21.0422 12.0513 20.5679 12.9635C19.3639 16.0283 20.349 17.4148 21.0057 18.1081C22.5381 19.2027 24.326 18.8743 25.0557 18.327Z" fill="#0C50FF" />
					<path d="M24.8369 14.3865C25.1871 12.46 26.3693 11.0298 26.9166 10.5555C27.7922 9.67978 28.4929 9.20546 28.7774 9.13249C29.653 8.69464 30.0909 9.67978 29.5436 10.2271C28.9963 10.9933 27.9382 11.9054 27.5733 12.4163C26.6976 13.5546 27.7922 13.6203 28.449 13.5108C30.463 13.7735 30.8936 15.4446 30.8571 16.2473C30.8571 18.6992 28.522 19.0933 27.3544 18.9838C24.6179 18.7272 24.545 15.5541 24.8369 14.3865Z" fill="#0C50FF" />
				</svg>
				<?php esc_html_e( 'Testimonials', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--testimonial' );
				?>
				<input type="checkbox" class="cozy-block-active" name="testimonial" id="cozy-block--testimonial" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/pricing-table-gutenberg-block/#toggle-content" target="_blank" rel="noopener">
				<svg
					width="27"
					height="13"
					viewBox="0 0 27 13"
					fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						fill-rule="evenodd"
						clipRule="evenodd"
						d="M20.5 1.5H6.5C3.73858 1.5 1.5 3.73858 1.5 6.5C1.5 9.26142 3.73858 11.5 6.5 11.5H20.5C23.2614 11.5 25.5 9.26142 25.5 6.5C25.5 3.73858 23.2614 1.5 20.5 1.5ZM6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13H20.5C24.0899 13 27 10.0899 27 6.5C27 2.91015 24.0899 0 20.5 0H6.5Z"
						fill="#0C50FF" />
					<path
						d="M3 6.5C3 4.29086 4.79086 2.5 7 2.5C9.20914 2.5 11 4.29086 11 6.5C11 8.70914 9.20914 10.5 7 10.5C4.79086 10.5 3 8.70914 3 6.5Z"
						fill="#0c50ff" />
				</svg>

				<p>
					<?php esc_html_e( 'Toggle Content', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--toggle-content' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="toggle-content" id="cozy-block--toggle-content" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>
</ul>

<!-- Post and Magazine Blocks -->
<h2 class="mt-34"><?php esc_html_e( 'Post and Magazine Blocks', 'cozy-addons' ); ?></h2>
<ul class="blocks-holder">
	<li>
		<a href="https://cozyblock.cozythemes.com/advertisement-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="33" height="24" viewBox="0 0 33 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H27V9.95238H25V1.80952H2V17.1905H18V19H0V0Z" fill="#0C50FF" />
					<rect x="5" y="6" width="17" height="8" rx="0.4" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M25.0035 11.959C25.7356 12.2234 26.6238 12.9612 27.6409 14.5716C28.4696 15.8838 28.8261 16.9462 28.8771 17.7348C28.927 18.5076 28.6788 19.0983 28.1916 19.2932C27.7845 19.456 27.3566 19.4208 26.9509 19.2799C26.5472 19.1397 26.1504 18.8902 25.7855 18.5989C25.0557 18.0166 24.4116 17.2339 24.0393 16.6897L24.0339 16.6819L24.0292 16.6738C23.279 15.3781 22.9961 14.3759 22.9615 13.6373C22.9274 12.9065 23.1378 12.4066 23.4132 12.1705L23.4132 12.1705C23.7002 11.9245 24.2544 11.6884 25.0035 11.959ZM24.8328 12.4315C24.2713 12.2286 23.9044 12.4112 23.7402 12.5519C23.6249 12.6507 23.4334 12.9714 23.4634 13.6138C23.493 14.2471 23.7393 15.1682 24.4592 16.4138C24.8134 16.93 25.4225 17.6665 26.0989 18.2063C26.4387 18.4775 26.7851 18.6905 27.1158 18.8053C27.4445 18.9195 27.7423 18.9318 28.005 18.8267C28.1878 18.7536 28.4204 18.4588 28.3757 17.7672C28.3321 17.0915 28.0187 16.1107 27.2161 14.8399C26.2236 13.2684 25.4114 12.6405 24.8328 12.4315Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M21.0339 16.7175L23.1845 12.4164L23.6339 12.6411L21.4303 17.0483L20.0306 18.098L20.017 18.1058C19.7959 18.2321 19.6305 18.4712 19.5517 18.7685C19.473 19.0651 19.4877 19.3963 19.6018 19.6772C19.714 19.9535 19.9205 20.1787 20.2342 20.2881C20.547 20.3973 20.9977 20.4021 21.6158 20.1758L22.8189 19.3165L27.5959 18.8925L27.9141 19.3949L22.9947 19.8083L21.8536 20.6233L21.8227 20.6349C21.1168 20.8996 20.5305 20.9237 20.0687 20.7625C19.6026 20.5998 19.2962 20.2598 19.1363 19.8663C18.9783 19.4772 18.9615 19.0339 19.066 18.6397C19.169 18.2514 19.3966 17.8878 19.7535 17.6779L21.0339 16.7175Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8673 19.7047L21.0251 17.0252L21.4391 16.7406L23.2813 19.4201L22.8673 19.7047Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23.6162 19.2527L25.4604 21.9351C25.6424 22.2081 25.7905 22.5424 25.8158 22.8716C25.8421 23.2127 25.734 23.5619 25.3907 23.7907C25.1869 23.9266 24.9805 23.9934 24.7772 23.9996C24.5751 24.0057 24.3918 23.9515 24.2331 23.8693C23.9228 23.7087 23.6871 23.4316 23.5397 23.2253L23.5371 23.2216L21.695 20.5421L22.109 20.2575L23.9498 22.9351C24.0815 23.119 24.2604 23.3178 24.4641 23.4232C24.5627 23.4742 24.6616 23.5005 24.762 23.4974C24.861 23.4944 24.9774 23.4624 25.112 23.3727C25.2712 23.2666 25.3305 23.1133 25.3149 22.9102C25.2984 22.6955 25.1957 22.4443 25.0433 22.2153L23.2022 19.5373L23.6162 19.2527Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M25.3394 14.9774C25.1923 14.9676 25.0502 14.9855 24.9303 15.0147C24.7955 15.0475 24.6436 14.9974 24.5815 14.8733V14.8733C24.5195 14.7492 24.57 14.5975 24.7026 14.5566C24.8914 14.4983 25.1261 14.4597 25.3728 14.4761C25.7445 14.5009 26.1536 14.6527 26.4572 15.0575C26.8204 15.5418 26.8838 15.9962 26.7826 16.3882C26.7141 16.6534 26.5745 16.8732 26.4354 17.0424C26.3474 17.1496 26.1868 17.1485 26.0887 17.0504V17.0504C25.9906 16.9523 25.9929 16.7948 26.0778 16.6851C26.1729 16.5625 26.2553 16.4206 26.2961 16.2626C26.3558 16.0317 26.3354 15.7325 26.0553 15.3589C25.8564 15.0939 25.5957 14.9945 25.3394 14.9774Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M32.285 15.7106C32.2594 15.847 32.1282 15.9368 31.9918 15.9112L29.8061 15.5014C29.6697 15.4758 29.5799 15.3446 29.6055 15.2082V15.2082C29.6311 15.0718 29.7623 14.982 29.8987 15.0076L32.0844 15.4174C32.2207 15.443 32.3106 15.5742 32.285 15.7106V15.7106Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.9308 12.5287C27.7924 12.5195 27.6877 12.3998 27.6969 12.2614L27.8309 10.2506C27.8402 10.1122 27.9599 10.0075 28.0983 10.0167V10.0167C28.2367 10.0259 28.3415 10.1456 28.3322 10.2841L28.1982 12.2948C28.1889 12.4332 28.0692 12.538 27.9308 12.5287V12.5287Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M31.4477 12.1938C31.5267 12.3078 31.4982 12.4643 31.3841 12.5433L29.6201 13.7645C29.5061 13.8435 29.3496 13.8151 29.2706 13.701V13.701C29.1916 13.5869 29.2201 13.4304 29.3342 13.3515L31.0982 12.1302C31.2122 12.0513 31.3687 12.0797 31.4477 12.1938V12.1938Z" fill="#0C50FF" />
					<path d="M17.107 9.04496C17.0934 8.90834 17.0353 8.80221 16.9325 8.72656C16.8298 8.65091 16.6903 8.61309 16.5142 8.61309C16.3945 8.61309 16.2935 8.63002 16.211 8.6639C16.1286 8.69664 16.0654 8.74237 16.0214 8.80108C15.9785 8.85979 15.957 8.9264 15.957 9.00092C15.9547 9.06302 15.9677 9.11722 15.996 9.16351C16.0253 9.2098 16.0654 9.24988 16.1162 9.28376C16.167 9.3165 16.2257 9.34529 16.2923 9.37013C16.359 9.39384 16.4301 9.41416 16.5057 9.4311L16.8174 9.50562C16.9687 9.53949 17.1075 9.58465 17.234 9.64111C17.3604 9.69756 17.47 9.767 17.5625 9.84942C17.6551 9.93184 17.7268 10.0289 17.7776 10.1407C17.8296 10.2525 17.8561 10.3807 17.8572 10.5252C17.8561 10.7374 17.8019 10.9215 17.6946 11.0773C17.5885 11.232 17.435 11.3522 17.234 11.438C17.0341 11.5227 16.7931 11.565 16.5108 11.565C16.2308 11.565 15.9869 11.5221 15.7792 11.4363C15.5726 11.3505 15.4111 11.2235 15.2948 11.0553C15.1796 10.8859 15.1192 10.6765 15.1136 10.4269H15.8232C15.8311 10.5432 15.8644 10.6403 15.9231 10.7182C15.983 10.795 16.0626 10.8532 16.1619 10.8927C16.2624 10.9311 16.3759 10.9503 16.5023 10.9503C16.6265 10.9503 16.7344 10.9322 16.8258 10.8961C16.9184 10.8599 16.9901 10.8097 17.0409 10.7453C17.0917 10.681 17.1171 10.607 17.1171 10.5235C17.1171 10.4456 17.094 10.3801 17.0477 10.327C17.0025 10.274 16.9359 10.2288 16.8478 10.1915C16.7609 10.1543 16.6542 10.1204 16.5278 10.0899L16.1501 9.99507C15.8576 9.92394 15.6268 9.81273 15.4574 9.66143C15.288 9.51014 15.2039 9.30634 15.205 9.05004C15.2039 8.84003 15.2598 8.65656 15.3727 8.49962C15.4867 8.34267 15.6431 8.22017 15.8418 8.1321C16.0406 8.04403 16.2664 8 16.5193 8C16.7767 8 17.0014 8.04403 17.1933 8.1321C17.3864 8.22017 17.5366 8.34267 17.6438 8.49962C17.7511 8.65656 17.8064 8.83834 17.8098 9.04496H17.107Z" fill="white" />
					<path d="M12.9852 11.5159H11.7556V8.04742H12.9953C13.3442 8.04742 13.6446 8.11686 13.8963 8.25574C14.1481 8.39349 14.3418 8.59164 14.4772 8.8502C14.6139 9.10875 14.6822 9.41812 14.6822 9.77829C14.6822 10.1396 14.6139 10.4501 14.4772 10.7098C14.3418 10.9695 14.147 11.1687 13.893 11.3076C13.64 11.4465 13.3374 11.5159 12.9852 11.5159ZM12.4889 10.8876H12.9547C13.1715 10.8876 13.3538 10.8492 13.5017 10.7724C13.6508 10.6945 13.7625 10.5743 13.8371 10.4117C13.9127 10.248 13.9505 10.0369 13.9505 9.77829C13.9505 9.52199 13.9127 9.31255 13.8371 9.14996C13.7625 8.98738 13.6513 8.8677 13.5034 8.79092C13.3555 8.71414 13.1732 8.67575 12.9564 8.67575H12.4889V10.8876Z" fill="white" />
					<path d="M8.78584 11.5159H8L9.19738 8.04742H10.1424L11.3381 11.5159H10.5523L9.68345 8.84003H9.65635L8.78584 11.5159ZM8.73672 10.1526H10.5929V10.725H8.73672V10.1526Z" fill="white" />
					<path d="M18.9886 10.5C18.848 10.5 18.7273 10.4503 18.6264 10.3509C18.527 10.25 18.4773 10.1293 18.4773 9.98864C18.4773 9.84943 18.527 9.73011 18.6264 9.63068C18.7273 9.53125 18.848 9.48153 18.9886 9.48153C19.125 9.48153 19.2443 9.53125 19.3466 9.63068C19.4489 9.73011 19.5 9.84943 19.5 9.98864C19.5 10.0824 19.4759 10.1683 19.4276 10.2464C19.3807 10.3232 19.3189 10.3849 19.2422 10.4318C19.1655 10.4773 19.081 10.5 18.9886 10.5Z" fill="#FFAA05" />
				</svg>
				<?php esc_html_e( 'Advertisement', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--ad' );
				?>
				<input type="checkbox" class="cozy-block-active" name="ad" id="cozy-block--ad" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/advanced-categories-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="18" stroke="#0C50FF" stroke-width="2" />
					<path d="M7 10V6H21V10" stroke="#0C50FF" />
					<path d="M14 6V9.5" stroke="#0C50FF" />
					<path d="M4.5 11.5H9.08621V13.5H4.5V11.5Z" stroke="#0C50FF" />
					<path d="M11.5 10.5H16.0862V12.5H11.5V10.5Z" stroke="#0C50FF" />
					<path d="M18.5 11.5H23.0862V13.5H18.5V11.5Z" stroke="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Advanced Categories', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--advanced-categories' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="advanced-categories" id="cozy-block--advanced-categories" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/categorized-post-tabs-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.5 4.5V5.5H10.5H26V21H1V1H9.5V4.5Z" stroke="#0C50FF" stroke-width="2" fill="none" />
					<path d="M4 8H15V15H4V8Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13 17H4V16H13V17Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15 18.5H4V17.5H15V18.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M16 8H19V11H16V8Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M24 9H19.5V8H24V9Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23 10.5H19.5V9.5H23V10.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M16 12H19V15H16V12Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M24 13H19.5V12H24V13Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23 14.5H19.5V13.5H23V14.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M16 16H19V19H16V16Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M24 17H19.5V16H24V17Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23 18.5H19.5V17.5H23V18.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M11.5 0.5H18.5V3.5H11.5V2V0.5Z" stroke="#0C50FF" fill="none" />
				</svg>
				<p>
					<?php esc_html_e( 'Categorized Post Tabs', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--categorized-post-tabs' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="categorized-post-tabs" id="cozy-block--categorized-post-tabs" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/featured-post-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" fill="none" />
					<path d="M3.5 4.5H9.5V10.5H3.5V4.5Z" fill="#0C50FF" />
					<path d="M10.5 4.5H16.5V10.5H10.5V4.5Z" fill="#0C50FF" />
					<path d="M17.5 4.5H23.5V10.5H17.5V4.5Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 13H3.5V12H8.5V13Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 14.5H3.5V13.5H9.5V14.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M7 16H3.5V15H7V16Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 13H10.5V12H15.5V13Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 13H17.5V12H22.5V13Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 14.5H10.5V13.5H16.5V14.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23.5 14.5H17.5V13.5H23.5V14.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 16H10.5V15H14V16Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M21 16H17.5V15H21V16Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M7.78571 7.17857H6.82143V6.21429C6.82143 6.09596 6.72547 6 6.60714 6H6.39286C6.27453 6 6.17857 6.09596 6.17857 6.21429V7.17857H5.21429C5.09596 7.17857 5 7.27453 5 7.39286V7.60714C5 7.72547 5.09596 7.82143 5.21429 7.82143H6.17857V8.78571C6.17857 8.90404 6.27453 9 6.39286 9H6.60714C6.72547 9 6.82143 8.90404 6.82143 8.78571V7.82143H7.78571C7.90404 7.82143 8 7.72547 8 7.60714V7.39286C8 7.27453 7.90404 7.17857 7.78571 7.17857Z" fill="white" />
					<path d="M14.7857 7.17857H13.8214V6.21429C13.8214 6.09596 13.7255 6 13.6071 6H13.3929C13.2745 6 13.1786 6.09596 13.1786 6.21429V7.17857H12.2143C12.096 7.17857 12 7.27453 12 7.39286V7.60714C12 7.72547 12.096 7.82143 12.2143 7.82143H13.1786V8.78571C13.1786 8.90404 13.2745 9 13.3929 9H13.6071C13.7255 9 13.8214 8.90404 13.8214 8.78571V7.82143H14.7857C14.904 7.82143 15 7.72547 15 7.60714V7.39286C15 7.27453 14.904 7.17857 14.7857 7.17857Z" fill="white" />
					<path d="M21.7857 7.17857H20.8214V6.21429C20.8214 6.09596 20.7255 6 20.6071 6H20.3929C20.2745 6 20.1786 6.09596 20.1786 6.21429V7.17857H19.2143C19.096 7.17857 19 7.27453 19 7.39286V7.60714C19 7.72547 19.096 7.82143 19.2143 7.82143H20.1786V8.78571C20.1786 8.90404 20.2745 9 20.3929 9H20.6071C20.7255 9 20.8214 8.90404 20.8214 8.78571V7.82143H21.7857C21.904 7.82143 22 7.72547 22 7.60714V7.39286C22 7.27453 21.904 7.17857 21.7857 7.17857Z" fill="white" />
				</svg>
				<p>
					<?php esc_html_e( 'Featured Post', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--featured-post' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="featured-post" id="cozy-block--featured-post" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/featured-post-tabs-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill="none" d="M9.5 4.5V5.5H10.5H26V21H1V1H9.5V4.5Z" stroke="#0C50FF" stroke-width="2" />
					<path d="M4 9H8V13H4V9Z" fill="#0C50FF" />
					<path fill="none" d="M9 10H23" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M9 12H19" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M4 14H8V18H4V14Z" fill="#0C50FF" />
					<path fill="none" d="M9 15H23" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M9 17H19" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M11.5 0.5H18.5V3.5H11.5V2V0.5Z" stroke="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Featured Post Tabs', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--featured-post-tabs' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="featured-post-tabs" id="cozy-block--featured-post-tabs" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/magazine-grid-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" fill="none" />
					<rect x="4" y="4" width="9" height="8" fill="#0C50FF" />
					<rect x="14" y="4" width="4" height="4" fill="#0C50FF" />
					<path d="M14 8.5H17V9.5H14V8.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="19" y="4" width="4" height="4" fill="#0C50FF" />
					<path d="M19 8.5H22V9.5H19V8.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="14" y="11" width="4" height="4" fill="#0C50FF" />
					<path d="M14 15.5H17V16.5H14V15.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="19" y="11" width="4" height="4" fill="#0C50FF" />
					<path d="M19 15.5H22V16.5H19V15.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M10 14H4V13H10V14Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13 15.5H4V14.5H13V15.5Z" fill="#0C50FF" fill-opacity="0.5" />
				</svg>
				<p>
					<?php esc_html_e( 'Magazine Grid', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--magazine-grid' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="magazine-grid" id="cozy-block--magazine-grid" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/magazine-list-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" fill="none" />
					<rect x="4" y="4" width="7" height="6" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15 6H12V5H15V6Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M17 7.5H12V6.5H17V7.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19 9H12V8H19V9Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 6V5H23V6H15.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 7.5V6.5H21V7.5H17.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M7 13H4V12H7V13Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.5H4V13.5H9V14.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M11 16H4V15H11V16Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 13V12H15V13H7.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 14.5V13.5H13V14.5H9.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="16" y="11" width="7" height="6" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Magazine List', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--magazine-list' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="magazine-list" id="cozy-block--magazine-list" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/news-ticker-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<path fill="none" d="M4 16H9" stroke="#0C50FF" stroke-width="2" />
					<path fill="none" d="M10 16H17" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M18 16H23" stroke="#0C50FF" stroke-opacity="0.5" />
					<rect x="4" y="4" width="10" height="10" rx="5" fill="#0C50FF" />
					<path d="M10.7001 7.875H9.25761L9.7901 6.35391C9.8401 6.17578 9.69635 6 9.5001 6H7.70012C7.55013 6 7.42263 6.1043 7.40263 6.24375L7.00263 9.05625C6.97888 9.225 7.11888 9.375 7.30013 9.375H8.78386L8.20762 11.6543C8.16262 11.8324 8.30762 12 8.49887 12C8.60386 12 8.70386 11.9484 8.75886 11.8594L10.9588 8.29688C11.0751 8.11055 10.9313 7.875 10.7001 7.875Z" fill="white" />
				</svg>
				<p>
					<?php esc_html_e( 'News Ticker', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--news-ticker' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="news-ticker" id="cozy-block--news-ticker" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/popular-post-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<rect x="4" y="7" width="8" height="8" fill="#0C50FF" />
					<path d="M6.5138 10.6875H5.73255C5.60311 10.6875 5.49817 10.7924 5.49817 10.9219V13.2656C5.49817 13.3951 5.60311 13.5 5.73255 13.5H6.5138C6.64324 13.5 6.74817 13.3951 6.74817 13.2656V10.9219C6.74817 10.7924 6.64324 10.6875 6.5138 10.6875ZM6.12317 13.1094C5.99373 13.1094 5.8888 13.0044 5.8888 12.875C5.8888 12.7456 5.99373 12.6406 6.12317 12.6406C6.25262 12.6406 6.35755 12.7456 6.35755 12.875C6.35755 13.0044 6.25262 13.1094 6.12317 13.1094ZM9.24818 9.29543C9.24818 9.70965 8.99456 9.94199 8.92321 10.2188H9.91659C10.2427 10.2188 10.4966 10.4897 10.4982 10.7861C10.499 10.9613 10.4245 11.1499 10.3083 11.2666L10.3073 11.2676C10.4033 11.4955 10.3877 11.8149 10.2164 12.0437C10.3011 12.2966 10.2157 12.6072 10.0564 12.7737C10.0984 12.9456 10.0783 13.0919 9.99634 13.2096C9.79702 13.496 9.30302 13.5 8.88528 13.5L8.85749 13.5C8.38594 13.4998 8.00001 13.3281 7.68991 13.1902C7.53408 13.1208 7.33033 13.035 7.17574 13.0322C7.11188 13.031 7.06067 12.9789 7.06067 12.915V10.8274C7.06067 10.7962 7.07319 10.7662 7.09542 10.7442C7.48228 10.3619 7.64862 9.95723 7.9657 9.63961C8.11028 9.49477 8.16285 9.27598 8.21368 9.06439C8.25711 8.88372 8.34795 8.5 8.54505 8.5C8.77943 8.5 9.24818 8.57812 9.24818 9.29543Z" fill="white" />
					<path fill="none" d="M13 8.5H17" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M13 10H19" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M13 11.5H15H17" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M17.5 11.5H20H21" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M17.5 8.5H19.75H23" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M13 13H19" stroke="#0C50FF" stroke-opacity="0.5" />
				</svg>
				<p>
					<?php esc_html_e( 'Popular Post', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--popular-post' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="popular-post" id="cozy-block--popular-post" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/post-carousel-gutenberg-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="11" height="14" stroke="#0C50FF" stroke-width="2" />
					<rect x="3" y="3" width="7" height="5" fill="#0C50FF" fill-opacity="0.5" />
					<path fill="none" d="M3 9H8" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M3 10.5H10" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M3 12H7" stroke="#0C50FF" stroke-opacity="0.5" />
					<rect fill="none" x="15" y="1" width="11" height="14" stroke="#0C50FF" stroke-width="2" />
					<rect x="17" y="3" width="7" height="5" fill="#0C50FF" fill-opacity="0.5" />
					<path fill="none" d="M17 9H22" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M17 10.5H24" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M17 12H21" stroke="#0C50FF" stroke-opacity="0.5" />
					<rect x="9" y="18" width="2" height="2" rx="1" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="12" y="18" width="2" height="2" rx="1" fill="#0C50FF" />
					<rect x="15" y="18" width="2" height="2" rx="1" fill="#0C50FF" fill-opacity="0.5" />
				</svg>
				<?php esc_html_e( 'Post Grid/Carousel', 'cozy-addons' ); ?>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php
				$checked = get_option( 'cozy-block--post-carousel' );
				?>
				<input type="checkbox" class="cozy-block-active" name="post-carousel" id="cozy-block--post-carousel" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<span class="cozy-toggle-slider round"></span>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/post-comments-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.7778 7.5C18.7778 3.35625 14.5753 0 9.38889 0C4.20243 0 0 3.35625 0 7.5C0 9.10781 0.636458 10.5891 1.71528 11.8125C1.11042 13.2281 0.112847 14.3531 0.0993056 14.3672C0 14.475 -0.0270833 14.6344 0.0315972 14.775C0.0902778 14.9156 0.216667 15 0.361111 15C2.01319 15 3.3809 14.4234 4.36493 13.8281C5.8184 14.5641 7.53819 15 9.38889 15C14.5753 15 18.7778 11.6438 18.7778 7.5ZM24.2847 17.8125C25.3635 16.5938 26 15.1078 26 13.5C26 10.3641 23.5851 7.67812 20.1635 6.55781C20.2042 6.86719 20.2222 7.18125 20.2222 7.5C20.2222 12.4641 15.3608 16.5 9.38889 16.5C8.90139 16.5 8.42743 16.4625 7.95799 16.4109C9.37986 19.1063 12.7201 21 16.6111 21C18.4618 21 20.1816 20.5688 21.6351 19.8281C22.6191 20.4234 23.9868 21 25.6389 21C25.7833 21 25.9142 20.9109 25.9684 20.775C26.0271 20.6391 26 20.4797 25.9007 20.3672C25.8872 20.3531 24.8896 19.2328 24.2847 17.8125Z" fill="#0C50FF" />
					<rect x="4" y="6" width="3" height="3" rx="1.5" fill="white" />
					<rect x="8" y="6" width="3" height="3" rx="1.5" fill="white" fill-opacity="0.5" />
					<rect x="12" y="6" width="3" height="3" rx="1.5" fill="white" fill-opacity="0.25" />
				</svg>
				<p>
					<?php esc_html_e( 'Post Comments', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--post-comments' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="post-comments" id="cozy-block--post-comments" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/post-slider-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="5" y="1" width="17" height="13" stroke="#0C50FF" stroke-width="2" />
					<rect x="7" y="5" width="5" height="5" fill="#0C50FF" fill-opacity="0.5" />
					<path fill="none" d="M13 6H18" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M13 7.5H20" stroke="#0C50FF" stroke-opacity="0.5" />
					<path fill="none" d="M13 9H17" stroke="#0C50FF" stroke-opacity="0.5" />
					<rect x="10" y="17" width="2" height="2" rx="1" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="13" y="17" width="2" height="2" rx="1" fill="#0C50FF" />
					<rect x="16" y="17" width="2" height="2" rx="1" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M27 8.21243L25.3005 9.9119C25.1831 10.0294 24.9931 10.0294 24.8769 9.9119L24.5945 9.62949C24.477 9.51203 24.477 9.32209 24.5945 9.20587L25.7991 8.00125L24.5945 6.79663C24.477 6.67916 24.477 6.48922 24.5945 6.37301L24.8757 6.0881C24.9931 5.97063 25.1831 5.97063 25.2993 6.0881L26.9988 7.78757C27.1175 7.90503 27.1175 8.09497 27 8.21243Z" fill="#0C50FF" />
					<path d="M0.0879517 8.21243L1.78742 9.9119C1.90488 10.0294 2.09482 10.0294 2.21104 9.9119L2.49345 9.62949C2.61091 9.51203 2.61091 9.32209 2.49345 9.20587L1.28883 8.00125L2.49345 6.79663C2.61091 6.67916 2.61091 6.48922 2.49345 6.37301L2.21229 6.0881C2.09482 5.97063 1.90488 5.97063 1.78867 6.0881L0.0892015 7.78757C-0.0295115 7.90503 -0.0295117 8.09497 0.0879517 8.21243Z" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Post Slider', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--post-slider' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="post-slider" id="cozy-block--post-slider" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/post-views-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<path d="M20.9094 10.6198C19.4971 7.86432 16.7013 6 13.5 6C10.2987 6 7.50207 7.86563 6.09061 10.6201C6.03104 10.7379 6 10.8681 6 11.0001C6 11.1322 6.03104 11.2624 6.09061 11.3802C7.50285 14.1357 10.2987 16 13.5 16C16.7013 16 19.4979 14.1344 20.9094 11.3799C20.9689 11.2621 21 11.1319 21 10.9999C21 10.8678 20.9689 10.7376 20.9094 10.6198ZM13.5 14.75C12.7583 14.75 12.0333 14.5301 11.4166 14.118C10.7999 13.706 10.3193 13.1203 10.0354 12.4351C9.75161 11.7498 9.67735 10.9958 9.82204 10.2684C9.96674 9.54098 10.3239 8.8728 10.8483 8.34835C11.3728 7.8239 12.041 7.46675 12.7684 7.32206C13.4958 7.17736 14.2498 7.25162 14.935 7.53545C15.6203 7.81928 16.2059 8.29993 16.618 8.91661C17.0301 9.5333 17.25 10.2583 17.25 11C17.2502 11.4925 17.1534 11.9803 16.965 12.4353C16.7767 12.8904 16.5004 13.3039 16.1522 13.6522C15.8039 14.0005 15.3904 14.2767 14.9353 14.465C14.4803 14.6534 13.9925 14.7502 13.5 14.75ZM13.5 8.5C13.2768 8.50312 13.0551 8.53632 12.8409 8.5987C13.0175 8.83872 13.1022 9.13408 13.0798 9.43124C13.0573 9.72839 12.9291 10.0076 12.7183 10.2184C12.5076 10.4291 12.2284 10.5573 11.9312 10.5798C11.6341 10.6023 11.3387 10.5175 11.0987 10.3409C10.962 10.8444 10.9867 11.3781 11.1692 11.8669C11.3518 12.3557 11.683 12.7749 12.1163 13.0656C12.5496 13.3563 13.0631 13.5038 13.5846 13.4873C14.1061 13.4708 14.6093 13.2912 15.0234 12.9738C15.4375 12.6563 15.7416 12.217 15.8929 11.7177C16.0442 11.2184 16.0352 10.6842 15.867 10.1903C15.6988 9.69635 15.38 9.26761 14.9554 8.9644C14.5307 8.66119 14.0217 8.49877 13.5 8.5Z" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Post Views', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--post-views' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="post-views" id="cozy-block--post-views" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/related-post-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<rect x="4" y="4" width="9" height="7" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4 13.5V12.5H10V13.5H4Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4 15V14H13V15H4Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4 16.5V15.5H8V16.5H4Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="14" y="4" width="9" height="7" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 13.5V12.5H20V13.5H14Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 15V14H23V15H14Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 16.5V15.5H18V16.5H14Z" fill="#0C50FF" fill-opacity="0.5" />
				</svg>
				<p>
					<?php esc_html_e( 'Related Post', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--related-post' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="related-post" id="cozy-block--related-post" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/trending-post-gutenberg-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="1" y="1" width="25" height="19" stroke="#0C50FF" stroke-width="2" />
					<rect x="4" y="4" width="9" height="6" fill="#0C50FF" />
					<path d="M7.20086 6.30443L5.34313 8.00181C5.1264 8.25642 4.88072 8.48581 5.06447 8.76564C5.25025 9.04854 5.55987 9.04854 5.7766 8.90709L7.57241 7.26628L8.28454 8.25642C8.60655 8.6638 8.99667 8.42616 9.15148 8.25642L11.0092 6.53074C10.9597 6.96075 11.3188 7.12483 11.5046 7.15312C11.9009 7.13049 12 6.82307 12 6.67219V5.42744C12 5.0427 11.6285 4.98424 11.4427 5.0031H10.1732C9.80169 5.0031 9.68816 5.28599 9.67784 5.42744C9.65307 5.85745 10.0803 5.92723 10.2971 5.90837L8.74897 7.32286L8.09877 6.30443C7.77676 5.94232 7.366 6.15355 7.20086 6.30443Z" fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 6V5H20V6H14Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 7.5V6.5H23V7.5H14Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 9V8H18V9H14Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="4" y="11" width="9" height="6" fill="#0C50FF" />
					<path d="M7.20086 13.3044L5.34313 15.0018C5.1264 15.2564 4.88072 15.4858 5.06447 15.7656C5.25025 16.0485 5.55987 16.0485 5.7766 15.9071L7.57241 14.2663L8.28454 15.2564C8.60655 15.6638 8.99667 15.4262 9.15148 15.2564L11.0092 13.5307C10.9597 13.9607 11.3188 14.1248 11.5046 14.1531C11.9009 14.1305 12 13.8231 12 13.6722V12.4274C12 12.0427 11.6285 11.9842 11.4427 12.0031H10.1732C9.80169 12.0031 9.68816 12.286 9.67784 12.4274C9.65307 12.8574 10.0803 12.9272 10.2971 12.9084L8.74897 14.3229L8.09877 13.3044C7.77676 12.9423 7.366 13.1535 7.20086 13.3044Z" fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 13V12H20V13H14Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 14.5V13.5H23V14.5H14Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 16V15H18V16H14Z" fill="#0C50FF" fill-opacity="0.5" />
				</svg>

				<p>
					<?php esc_html_e( 'Trending Post', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--trending-post' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="trending-post" id="cozy-block--trending-post" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this block!', 'cozy-addons' ); ?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>
</ul>

<!-- WooCommerce Blocks -->
<h2 class="mt-34"><?php esc_html_e( 'WooCommerce Blocks', 'cozy-addons' ); ?></h2>
<ul class="blocks-holder">
	<li>
		<a href="https://cozyblock.cozythemes.com/product-add-to-cart-woocommerce-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M26 14V1H1V20.5H17.5" stroke="#0C50FF" stroke-width="2" />
					<rect x="22" y="23.5" width="2" height="2" rx="1" stroke="#0C50FF" stroke-width="0.6" fill="none" />
					<rect x="26" y="23.5" width="2" height="2" rx="1" stroke="#0C50FF" stroke-width="0.6" fill="none" />
					<path d="M22.5 17H29L27.5 22H21.5L19 14.5H17" stroke="#0C50FF" fill="none" />
					<rect x="12" y="5" width="2" height="10" fill="#0C50FF" />
					<rect width="2" height="10" transform="matrix(0 -1 -1 0 18 11)" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Add to Cart', 'cozy-addons' ); ?>
				</p>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo ! is_woocommerce_active() ? '<span class="cozy-toggle-slider round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--add-to-cart' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="add-to-cart" id="cozy-block--add-to-cart" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<?php if ( ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/featured-product-woocommerce-block/" target="_blank" rel="noopener">
				<svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="0.75"
						y="0.75"
						width="25.5"
						height="18.5"
						fill="none"
						stroke="#0C50FF"
						stroke-width="1.5" />
					<path
						d="M2.79309 4.21057H9.31033V13.3053H2.79309V4.21057Z"
						fill="#0C50FF" />
					<path
						d="M5.18275 10.5452C5.18275 10.3953 5.30432 10.2737 5.4543 10.2737V10.2737C5.60427 10.2737 5.72585 10.3953 5.72585 10.5452V10.8442C5.72585 10.9942 5.60427 11.1158 5.4543 11.1158V11.1158C5.30432 11.1158 5.18275 10.9942 5.18275 10.8442V10.5452Z"
						fill="none"
						stroke="white"
						stroke-width="0.3" />
					<rect
						x="6.48621"
						y="10.2737"
						width="0.543103"
						height="0.842105"
						rx="0.271552"
						fill="none"
						stroke="white"
						stroke-width="0.3" />
					<path
						d="M5.59003 7.2842H7.35512L6.94779 9.38946H5.31848L4.6396 6.23157H4.0965"
						fill="none"
						stroke="white"
						stroke-width="0.6" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M7.35512 16.8422H4.0965V15.8317H5.72581H7.35512V16.8422Z"
						fill="#0C50FF"
						fill-opacity="0.5" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M8.00689 15.3263H3.44482V14.3158H8.00689V15.3263Z"
						fill="#0C50FF"
						fill-opacity="0.5" />
					<path
						d="M17.6896 4.21057H24.2069V13.3053H17.6896V4.21057Z"
						fill="#0C50FF" />
					<path
						d="M20.0793 10.5452C20.0793 10.3953 20.2009 10.2737 20.3508 10.2737V10.2737C20.5008 10.2737 20.6224 10.3953 20.6224 10.5452V10.8442C20.6224 10.9942 20.5008 11.1158 20.3508 11.1158V11.1158C20.2009 11.1158 20.0793 10.9942 20.0793 10.8442V10.5452Z"
						fill="none"
						stroke="white"
						stroke-width="0.3" />
					<rect
						x="21.3828"
						y="10.2737"
						width="0.543103"
						height="0.842105"
						rx="0.271552"
						fill="none"
						stroke="white"
						stroke-width="0.3" />
					<path
						d="M20.4866 7.2842H22.2517L21.8443 9.38946H20.215L19.5361 6.23157H18.993"
						fill="none"
						stroke="white"
						stroke-width="0.6" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M22.2517 16.8422H18.993V15.8317H20.6224H22.2517V16.8422Z"
						fill="#0C50FF"
						fill-opacity="0.5" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M22.9034 15.3263H18.3414V14.3158H22.9034V15.3263Z"
						fill="#0C50FF"
						fill-opacity="0.5" />
					<path
						d="M10.2414 4.21057H16.7586V13.3053H10.2414V4.21057Z"
						fill="#0C50FF" />
					<path
						d="M12.631 10.5452C12.631 10.3953 12.7526 10.2737 12.9026 10.2737V10.2737C13.0526 10.2737 13.1742 10.3953 13.1742 10.5452V10.8442C13.1742 10.9942 13.0526 11.1158 12.9026 11.1158V11.1158C12.7526 11.1158 12.631 10.9942 12.631 10.8442V10.5452Z"
						fill="none"
						stroke="white"
						stroke-width="0.3" />
					<rect
						x="13.9345"
						y="10.2737"
						width="0.543103"
						height="0.842105"
						rx="0.271552"
						fill="none"
						stroke="white"
						stroke-width="0.3" />
					<path
						d="M13.0383 7.2842H14.8034L14.3961 9.38946H12.7668L12.0879 6.23157H11.5448"
						fill="none"
						stroke="white"
						stroke-width="0.6" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M14.8034 16.8422H11.5448V15.8317H13.1741H14.8034V16.8422Z"
						fill="#0C50FF"
						fill-opacity="0.5" />
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M15.4552 15.3263H10.8931V14.3158H15.4552V15.3263Z"
						fill="#0C50FF"
						fill-opacity="0.5" />
				</svg>
				<p>
					<?php esc_html_e( 'Featured Product', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--featured-product' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="featured-product" id="cozy-block--featured-product" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						if ( false === cozy_addons_premium_access() ) {
							esc_html_e( 'Please', 'cozy-addons' );
							?>
							<a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a>
							<?php
							esc_html_e( ' to enable this block!', 'cozy-addons' );
						}
						if ( ! is_woocommerce_active() ) {
							esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						}
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/featured-products-tab-woocommerce-block/" target="_blank" rel="noopener">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="0.75" y="2.75" width="25.5" height="17.5" stroke="#0C50FF" stroke-width="1.5" />
					<path d="M8 1H11" stroke="#0C50FF" />
					<path d="M11.5 1H14.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M15.5 1H18.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M3 5H13V14H3V5Z" fill="#80A2FA" />
					<path d="M6.66667 11.4167C6.66667 11.1865 6.85321 11 7.08333 11V11C7.31345 11 7.5 11.1865 7.5 11.4167V11.4167C7.5 11.6468 7.31345 11.8333 7.08333 11.8333V11.8333C6.85321 11.8333 6.66667 11.6468 6.66667 11.4167V11.4167Z" stroke="white" stroke-width="0.3" />
					<rect fill="none" x="8.66666" y="11" width="0.833333" height="0.833333" rx="0.416667" stroke="white" stroke-width="0.3" />
					<path fill="none" d="M7.29167 8.04167H10L9.375 10.125H6.875L5.83333 7H5" stroke="white" stroke-width="0.6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M10 17.5H5V16.5H7.5H10V17.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M11 16H4V15H11V16Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M14 5H24V14H14V5Z" fill="#80A2FA" />
					<path fill="none" d="M17.6667 11.4167C17.6667 11.1865 17.8532 11 18.0833 11V11C18.3135 11 18.5 11.1865 18.5 11.4167V11.4167C18.5 11.6468 18.3135 11.8333 18.0833 11.8333V11.8333C17.8532 11.8333 17.6667 11.6468 17.6667 11.4167V11.4167Z" stroke="white" stroke-width="0.3" />
					<rect fill="none" x="19.6667" y="11" width="0.833333" height="0.833333" rx="0.416667" stroke="white" stroke-width="0.3" />
					<path fill="none" d="M18.2917 8.04167H21L20.375 10.125H17.875L16.8333 7H16" stroke="white" stroke-width="0.6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M21 17.5H16V16.5H18.5H21V17.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22 16H15V15H22V16Z" fill="#0C50FF" fill-opacity="0.5" />
				</svg>
				<p>
					<?php esc_html_e( 'Featured Product Tabs', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--featured-product-tabs' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="featured-product-tabs" id="cozy-block--featured-product-tabs" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						if ( false === cozy_addons_premium_access() ) {
							esc_html_e( 'Please', 'cozy-addons' );
							?>
							<a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a>
							<?php
							esc_html_e( ' to enable this block!', 'cozy-addons' );
						}
						if ( ! is_woocommerce_active() ) {
							esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						}
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/product-categories-woocommerce-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="22" y="23" width="2" height="2" rx="1" stroke="#0C50FF" stroke-width="0.6" />
					<rect fill="none" x="26" y="23" width="2" height="2" rx="1" stroke="#0C50FF" stroke-width="0.6" />
					<path fill="none" d="M22.5 16.5H29L27.5 21.5H21.5L19 14H17" stroke="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H27V14.5H25V2H2V18H18V20H0V0Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M9 10H5V11H9V10ZM4 9V12H10V9H4Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 10H11.5V11H15.5V10ZM10.5 9V12H16.5V9H10.5Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22 10H18V11H22V10ZM17 9V12H23V9H17Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 4.5H20V8H19V5.5H6.5V8H5.5V4.5Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13 8V5H14V8H13Z" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Product Category', 'cozy-addons' ); ?>
				</p>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo ! is_woocommerce_active() ? '<span class="cozy-toggle-slider round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--product-category' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-category" id="cozy-block--product-category" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<?php if ( ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/product-carousel-woocommerce-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="0.75" y="2.75" width="25.5" height="17.5" stroke="#0C50FF" stroke-width="1.5" />
					<path d="M8 1H11" stroke="#0C50FF" />
					<path d="M11.5 1H14.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M15.5 1H18.5" stroke="#0C50FF" stroke-opacity="0.5" />
					<path d="M3 5H13V14H3V5Z" fill="#80A2FA" />
					<path d="M6.66667 11.4167C6.66667 11.1865 6.85321 11 7.08333 11V11C7.31345 11 7.5 11.1865 7.5 11.4167V11.4167C7.5 11.6468 7.31345 11.8333 7.08333 11.8333V11.8333C6.85321 11.8333 6.66667 11.6468 6.66667 11.4167V11.4167Z" fill="none" stroke="white" stroke-width="0.3" />
					<rect x="8.66666" y="11" fill="none" width="0.833333" height="0.833333" rx="0.416667" stroke="white" stroke-width="0.3" />
					<path d="M7.29167 8.04167H10L9.375 10.125H6.875L5.83333 7H5" fill="none" stroke="white" stroke-width="0.6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M10 17.5H5V16.5H7.5H10V17.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M11 16H4V15H11V16Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M14 5H24V14H14V5Z" fill="#80A2FA" />
					<path d="M17.6667 11.4167C17.6667 11.1865 17.8532 11 18.0833 11V11C18.3135 11 18.5 11.1865 18.5 11.4167V11.4167C18.5 11.6468 18.3135 11.8333 18.0833 11.8333V11.8333C17.8532 11.8333 17.6667 11.6468 17.6667 11.4167V11.4167Z" fill="none" stroke="white" stroke-width="0.3" />
					<rect x="19.6667" y="11" width="0.833333" height="0.833333" rx="0.416667" fill="none" stroke="white" stroke-width="0.3" />
					<path d="M18.2917 8.04167H21L20.375 10.125H17.875L16.8333 7H16" fill="none" stroke="white" stroke-width="0.6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M21 17.5H16V16.5H18.5H21V17.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22 16H15V15H22V16Z" fill="#0C50FF" fill-opacity="0.5" />
				</svg>
				<p>
					<?php esc_html_e( 'Product Grid/Carousel', 'cozy-addons' ); ?>
				</p>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo ! is_woocommerce_active() ? '<span class="cozy-toggle-slider round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--product-carousel' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-carousel" id="cozy-block--product-carousel" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<?php if ( ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<a href="https://cozyblock.cozythemes.com/all-product-reviews-woocommerce-block/" target="_blank" rel="noopener">
			<div class="cozy-display-flex">
				<svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="22" y="23" width="2" height="2" rx="1" stroke="#0C50FF" stroke-width="0.6" />
					<rect fill="none" x="26" y="23" width="2" height="2" rx="1" stroke="#0C50FF" stroke-width="0.6" />
					<path d="M22.5 16.5H29L27.5 21.5H21.5L19 14H17" stroke="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H27V14.5H25V2H2V18H18V20H0V0Z" fill="#0C50FF" />
					<path d="M7.33175 6.17393L6.69413 7.46674L5.26755 7.67472C5.01172 7.71183 4.9092 8.02722 5.09472 8.20786L6.12682 9.21359L5.88271 10.6343C5.83877 10.8911 6.10924 11.0835 6.33578 10.9634L7.61199 10.2926L8.8882 10.9634C9.11473 11.0825 9.3852 10.8911 9.34127 10.6343L9.09715 9.21359L10.1293 8.20786C10.3148 8.02722 10.2123 7.71183 9.95642 7.67472L8.52984 7.46674L7.89223 6.17393C7.77798 5.94349 7.44697 5.94056 7.33175 6.17393Z" fill="#0C50FF" />
					<path d="M13.5109 6.17393L12.8733 7.46674L11.4467 7.67472C11.1909 7.71183 11.0884 8.02722 11.2739 8.20786L12.306 9.21359L12.0619 10.6343C12.0179 10.8911 12.2884 11.0835 12.5149 10.9634L13.7912 10.2926L15.0674 10.9634C15.2939 11.0825 15.5644 10.8911 15.5204 10.6343L15.2763 9.21359L16.3084 8.20786C16.4939 8.02722 16.3914 7.71183 16.1356 7.67472L14.709 7.46674L14.0714 6.17393C13.9572 5.94349 13.6261 5.94056 13.5109 6.17393Z" fill="#0C50FF" />
					<path d="M19.6901 6.17393L19.0525 7.46674L17.6259 7.67472C17.3701 7.71183 17.2675 8.02722 17.4531 8.20786L18.4852 9.21359L18.241 10.6343C18.1971 10.8911 18.4676 11.0835 18.6941 10.9634L19.9703 10.2926L21.2465 10.9634C21.4731 11.0825 21.7435 10.8911 21.6996 10.6343L21.4555 9.21359L22.4876 8.20786C22.6731 8.02722 22.5706 7.71183 22.3148 7.67472L20.8882 7.46674L20.2506 6.17393C20.1363 5.94349 19.8053 5.94056 19.6901 6.17393Z" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'All Product Reviews', 'cozy-addons' ); ?>
				</p>
			</div>
		</a>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo ! is_woocommerce_active() ? '<span class="cozy-toggle-slider round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--product-review' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-review" id="cozy-block--product-review" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
				<?php if ( ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;align-items:center;gap:10px;" href="https://cozyblock.cozythemes.com/product-slider-woocommerce-block/" target="_blank" rel="noopener">
				<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" x="5" y="1" width="17" height="13" stroke="#0C50FF" stroke-width="2" />
					<path d="M7.5 4H15V11H7.5V4Z" fill="#0C50FF" />
					<path fill="none" d="M10.3333 9.53328C10.3333 9.34919 10.4826 9.19995 10.6667 9.19995V9.19995C10.8507 9.19995 11 9.34919 11 9.53328V9.53328C11 9.71738 10.8507 9.86662 10.6667 9.86662V9.86662C10.4826 9.86662 10.3333 9.71738 10.3333 9.53328V9.53328Z" stroke="white" stroke-width="0.3" />
					<rect x="11.9333" y="9.19995" fill="none" width="0.666667" height="0.666667" rx="0.333333" stroke="white" stroke-width="0.3" />
					<path d="M10.8333 6.83333H13L12.5 8.5H10.5L9.66667 6H9" fill="none" stroke="white" stroke-width="0.6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 6.5H15.5V5.5H18.5V6.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M20 8H15.5V7H20V8Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M18 9.5H15.5V8.5H18V9.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="10" y="17" width="2" height="2" rx="1" fill="#0C50FF" fill-opacity="0.5" />
					<rect x="13" y="17" width="2" height="2" rx="1" fill="#0C50FF" />
					<rect x="16" y="17" width="2" height="2" rx="1" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M27 8.21243L25.3005 9.9119C25.1831 10.0294 24.9931 10.0294 24.8769 9.9119L24.5945 9.62949C24.477 9.51203 24.477 9.32209 24.5945 9.20587L25.7991 8.00125L24.5945 6.79663C24.477 6.67916 24.477 6.48922 24.5945 6.37301L24.8757 6.0881C24.9931 5.97063 25.1831 5.97063 25.2993 6.0881L26.9988 7.78757C27.1175 7.90503 27.1175 8.09497 27 8.21243Z" fill="#0C50FF" />
					<path d="M0.0879517 8.21243L1.78742 9.9119C1.90488 10.0294 2.09482 10.0294 2.21104 9.9119L2.49345 9.62949C2.61091 9.51203 2.61091 9.32209 2.49345 9.20587L1.28883 8.00125L2.49345 6.79663C2.61091 6.67916 2.61091 6.48922 2.49345 6.37301L2.21229 6.0881C2.09482 5.97063 1.90488 5.97063 1.78867 6.0881L0.0892015 7.78757C-0.0295115 7.90503 -0.0295117 8.09497 0.0879517 8.21243Z" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Product Slider', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--product-slider' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-slider" id="cozy-block--product-slider" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						if ( false === cozy_addons_premium_access() ) {
							esc_html_e( 'Please', 'cozy-addons' );
							?>
							<a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a>
							<?php
							esc_html_e( ' to enable this block!', 'cozy-addons' );
						}
						if ( ! is_woocommerce_active() ) {
							esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						}
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/product-showcase-tabs-woocommerce-block/" target="_blank" rel="noopener">
				<svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.5 4.5V5.5H10.5H26V21H1V1H9.5V4.5Z" fill="none" stroke="#0C50FF" stroke-width="2" />
					<path d="M4 8H13V15H4V8Z" fill="#0C50FF" />
					<path d="M7.33332 13.5333C7.33332 13.3492 7.48256 13.2 7.66665 13.2V13.2C7.85075 13.2 7.99999 13.3492 7.99999 13.5333V13.5333C7.99999 13.7174 7.85075 13.8666 7.66665 13.8666V13.8666C7.48256 13.8666 7.33332 13.7174 7.33332 13.5333V13.5333Z" fill="none" stroke="white" stroke-width="0.3" />
					<rect x="8.93332" y="13.2" width="0.666667" height="0.666667" rx="0.333333" fill="none" stroke="white" stroke-width="0.3" />
					<path d="M7.83333 10.8333H10L9.5 12.5H7.5L6.66667 10H6" fill="none" stroke="white" stroke-width="0.6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M10 17H4V16H10V17Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13 18.5H4V17.5H13V18.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M14 8H23V15H14V8Z" fill="#0C50FF" />
					<path d="M17.3333 13.5333C17.3333 13.3492 17.4826 13.2 17.6667 13.2V13.2C17.8507 13.2 18 13.3492 18 13.5333V13.5333C18 13.7174 17.8507 13.8666 17.6667 13.8666V13.8666C17.4826 13.8666 17.3333 13.7174 17.3333 13.5333V13.5333Z" fill="none" stroke="white" stroke-width="0.3" />
					<rect x="18.9333" y="13.2" width="0.666667" height="0.666667" rx="0.333333" fill="none" stroke="white" stroke-width="0.3" />
					<path d="M17.8333 10.8333H20L19.5 12.5H17.5L16.6667 10H16" fill="none" stroke="white" stroke-width="0.6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M20 17H14V16H20V17Z" fill="#0C50FF" fill-opacity="0.5" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M23 18.5H14V17.5H23V18.5Z" fill="#0C50FF" fill-opacity="0.5" />
					<path d="M11.5 0.5H18.5V3.5H11.5V2V0.5Z" fill="none" stroke="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Product Showcase Tabs', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--product-tab' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-tab" id="cozy-block--product-tab" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						if ( false === cozy_addons_premium_access() ) {
							esc_html_e( 'Please', 'cozy-addons' );
							?>
							<a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a>
							<?php
							esc_html_e( ' to enable this block!', 'cozy-addons' );
						}
						if ( ! is_woocommerce_active() ) {
							esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						}
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/product-quick-view-woocommerce-block/" target="_blank" rel="noopener">
				<svg width="31" height="24" viewBox="0 0 31 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M7.9855 15.1047C7.9855 14.4595 8.50851 13.9365 9.15367 13.9365C9.79883 13.9365 10.3218 14.4595 10.3218 15.1047C10.3218 15.7498 9.79883 16.2729 9.15367 16.2729C8.50851 16.2729 7.9855 15.7498 7.9855 15.1047ZM9.15367 14.555C8.85006 14.555 8.60394 14.8011 8.60394 15.1047C8.60394 15.4083 8.85006 15.6544 9.15367 15.6544C9.45727 15.6544 9.70339 15.4083 9.70339 15.1047C9.70339 14.8011 9.45727 14.555 9.15367 14.555Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M11.4213 15.1047C11.4213 14.4595 11.9443 13.9365 12.5895 13.9365C13.2346 13.9365 13.7576 14.4595 13.7576 15.1047C13.7576 15.7498 13.2346 16.2729 12.5895 16.2729C11.9443 16.2729 11.4213 15.7498 11.4213 15.1047ZM12.5895 14.555C12.2859 14.555 12.0397 14.8011 12.0397 15.1047C12.0397 15.4083 12.2859 15.6544 12.5895 15.6544C12.8931 15.6544 13.1392 15.4083 13.1392 15.1047C13.1392 14.8011 12.8931 14.555 12.5895 14.555Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4 6H6.08934L8.2367 12.4421H12.6355L13.6147 9.17809H8.72419V8.14736H15L13.4024 13.4728H7.49379L5.34643 7.03073H4V6Z" fill="#0C50FF" />
					<path d="M24.6429 15.9643H23.0357V14.3571C23.0357 14.1599 22.8758 14 22.6786 14H22.3214C22.1242 14 21.9643 14.1599 21.9643 14.3571V15.9643H20.3571C20.1599 15.9643 20 16.1242 20 16.3214V16.6786C20 16.8758 20.1599 17.0357 20.3571 17.0357H21.9643V18.6429C21.9643 18.8401 22.1242 19 22.3214 19H22.6786C22.8758 19 23.0357 18.8401 23.0357 18.6429V17.0357H24.6429C24.8401 17.0357 25 16.8758 25 16.6786V16.3214C25 16.1242 24.8401 15.9643 24.6429 15.9643Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 16.5C18.5 18.7091 20.2909 20.5 22.5 20.5C24.7091 20.5 26.5 18.7091 26.5 16.5C26.5 14.2909 24.7091 12.5 22.5 12.5C20.2909 12.5 18.5 14.2909 18.5 16.5ZM22.5 11C19.4624 11 17 13.4624 17 16.5C17 19.5376 19.4624 22 22.5 22C25.5376 22 28 19.5376 28 16.5C28 13.4624 25.5376 11 22.5 11Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M29.5 23.5L25.5 20L26.4878 18.8711L30.4878 22.3711L29.5 23.5Z" fill="#0C50FF" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H27V10H25V2H2V20H16.1296V22H0V0Z" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Quick View', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--quick-view' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="quick-view" id="cozy-block--quick-view" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						if ( false === cozy_addons_premium_access() ) {
							esc_html_e( 'Please', 'cozy-addons' );
							?>
							<a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a>
							<?php
							esc_html_e( ' to enable this block!', 'cozy-addons' );
						}
						if ( ! is_woocommerce_active() ) {
							esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						}
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>

	<li>
		<div class="cozy-display-flex">
			<a style="display:flex;gap:10px;align-items:center;" href="https://cozyblock.cozythemes.com/product-wishlist-woocommerce-block/" target="_blank" rel="noopener">
				<svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1071 2.0202C9.44281 -0.444265 5.38564 -0.75193 2.6215 1.64103C-0.69016 4.51241 -0.86418 9.66589 2.09943 12.7783L12.3033 23.4817C12.9625 24.1728 14.033 24.1728 14.6922 23.4817L24.8961 12.7783C27.865 9.66589 27.6909 4.51241 24.3793 1.64103C21.615 -0.75203 17.5625 -0.444239 14.894 2.02051C14.7728 2.13244 14.6545 2.24882 14.5392 2.36959L13.5004 3.45707L12.4615 2.36959C12.3464 2.2487 12.2282 2.13222 12.1071 2.0202ZM23.0697 3.1527C21.0836 1.43373 17.994 1.64574 15.9863 3.75015L13.5004 6.35246L11.0131 3.74871C9.0119 1.64691 5.91796 1.43305 3.93103 3.1527C1.49712 5.26369 1.35778 9.09871 3.54752 11.3988C3.5474 11.3987 3.54763 11.3989 3.54752 11.3988L13.4978 21.8361L23.4485 11.3983C25.6423 9.09838 25.5036 5.26364 23.0697 3.1527Z" fill="#0C50FF" />
					<rect x="14.75" y="10.75" width="10.5" height="10.5" rx="5.25" fill="#F5F5F5" stroke="#0C50FF" stroke-width="1.5" />
					<path d="M22.5714 15.3571H20.6429V13.4286C20.6429 13.1919 20.4509 13 20.2143 13H19.7857C19.5491 13 19.3571 13.1919 19.3571 13.4286V15.3571H17.4286C17.1919 15.3571 17 15.5491 17 15.7857V16.2143C17 16.4509 17.1919 16.6429 17.4286 16.6429H19.3571V18.5714C19.3571 18.8081 19.5491 19 19.7857 19H20.2143C20.4509 19 20.6429 18.8081 20.6429 18.5714V16.6429H22.5714C22.8081 16.6429 23 16.4509 23 16.2143V15.7857C23 15.5491 22.8081 15.3571 22.5714 15.3571Z" fill="#0C50FF" />
				</svg>
				<p>
					<?php esc_html_e( 'Wishlist', 'cozy-addons' ); ?>
				</p>
			</a>
			<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
		</div>
		<div class="cozy-block-toggle">
			<label class="switch">
				<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
				<?php
				$checked = get_option( 'cozy-block--wishlist' );
				?>
				<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="wishlist" id="cozy-block--wishlist" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
				<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
					<div class="cozy-block-upsell-tooltip">
						<?php
						if ( false === cozy_addons_premium_access() ) {
							esc_html_e( 'Please', 'cozy-addons' );
							?>
							<a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a>
							<?php
							esc_html_e( ' to enable this block!', 'cozy-addons' );
						}
						if ( ! is_woocommerce_active() ) {
							esc_html_e( 'This block requires the WooCommerce plugin to be installed and activated.', 'cozy-addons' );
						}
						?>
					</div>
				<?php } else { ?>
					<span class="cozy-toggle-slider cozy-pro-block round"></span>
				<?php } ?>
			</label>
		</div>
	</li>
</ul>