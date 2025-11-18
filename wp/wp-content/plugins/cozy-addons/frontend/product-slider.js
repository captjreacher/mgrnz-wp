(function ($) {
	window["cozyBlockProductSliderInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const blockOptions = window[`cozyProductSlider_${n}`];
		const productSliderClass = `#cozyBlock_${n}`;

		$(
			productSliderClass + " .cozy-block-product-slider__swiper-wrapper",
		).addClass("swiper-wrapper");

		$(productSliderClass + " .wp-block-post").addClass("swiper-slide");

		$(productSliderClass + " .swiper-slide .cozy-animation__initialized").hide(
			0,
		);

		$(productSliderClass + " .swiper-slide .cozy-animation__initialized").attr(
			"data-aos-init",
			false,
		);
		$(productSliderClass + " .swiper-slide .cozy-animation__initialized")
			.removeClass("aos-init")
			.removeClass("aos-animate");

		// Function to handle AOS initialization in the active slide
		function handleAosInit(swiper) {
			const $activeSlide = $(swiper.slides[swiper.activeIndex]); // Get the active slide as a jQuery object
			const $innerChild = $activeSlide.find(".cozy-animation__initialized"); // Find the inner child element

			const aosInitValue = $innerChild.length
				? $innerChild.attr("data-aos-init")
				: "false";
			const aosType = $innerChild.length
				? $innerChild.attr("data-aos")
				: "none";

			if (aosType !== "none") {
				if (aosInitValue === "false") {
					$activeSlide
						.find(".cozy-animation__initialized")
						.hide(0)
						.removeClass("aos-init aos-animate")
						.attr("data-aos-init", true);
				}
			}
		}

		// Function to activate AOS for the active slide
		function activateAos(swiperInstance) {
			const $activeSlide = $(swiperInstance.slides[swiperInstance.activeIndex]); // Get the active slide as a jQuery object
			$activeSlide
				.find(".cozy-animation__initialized")
				.show(0)
				.addClass("aos-init aos-animate");

			AOS.refresh(); // Refresh AOS to trigger animations
		}

		const sliderAttr = {
			init: true,
			loop: blockOptions.sliderOptions.loop,
			speed: blockOptions.sliderOptions.speed,
			centeredSlides: blockOptions.sliderOptions.centeredSlides,
			slidesPerView: blockOptions.sliderOptions.slidesPerView,
			spaceBetween: blockOptions.sliderOptions.spaceBetween,
			navigation: {
				nextEl: `${productSliderClass} .swiper-button-next.cozy-block-button-next`,
				prevEl: `${productSliderClass} .swiper-button-prev.cozy-block-button-prev`,
			},
			pagination: {
				clickable: true,
				el: `${productSliderClass} .swiper-pagination`,
			},
			breakpoints: {
				100: {
					slidesPerView: 1,
				},
				767: {
					slidesPerView:
						blockOptions.sliderOptions.slidesPerView <= 2
							? blockOptions.sliderOptions.slidesPerView
							: 2,
				},
				1024: {
					slidesPerView:
						blockOptions.sliderOptions.slidesPerView <= 3
							? blockOptions.sliderOptions.slidesPerView
							: 3,
				},
				1180: {
					slidesPerView: blockOptions.sliderOptions.slidesPerView,
				},
			},
			on: {
				afterInit: function (swiper) {
					handleAosInit(swiper);

					activateAos(swiper);
				},
				slideChangeTransitionStart: function (swiper) {
					handleAosInit(swiper);
				},
				slideChangeTransitionEnd: function (swiper) {
					activateAos(swiper);
				},
			},
		};

		if (blockOptions.sliderOptions.autoplay.status) {
			sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
		} else {
			delete sliderAttr.autoplay;
		}

		const slider = new Swiper(
			productSliderClass + " .cozy-product-slider__swiper-container",
			sliderAttr,
		);
	};
})(jQuery);
