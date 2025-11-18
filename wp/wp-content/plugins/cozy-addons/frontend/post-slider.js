(function ($) {
	window["cozyBlockPostSliderInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const blockOptions = window[`cozyPostSlider_${n}`];
		const postSliderClass = `#cozyBlock_${n}`;
		const cozyPostSlider = document.querySelector(postSliderClass);

		$(postSliderClass + " .cozy-block-post-slider__swiper-wrapper").addClass(
			"swiper-wrapper",
		);

		$(postSliderClass + " .wp-block-post").addClass("swiper-slide");

		const postSliderStyles = [
			{
				property: "--cozyNavIconSize",
				value: `${blockOptions.carouselOptions.navigation.iconSize}px`,
			},
			{
				property: "--cozyNavWidth",
				value: `${blockOptions.carouselOptions.navigation.iconBoxWidth}px`,
			},
			{
				property: "--cozyNavHeight",
				value: `${blockOptions.carouselOptions.navigation.iconBoxHeight}px`,
			},
			{
				property: "--cozyNavBorderRadius",
				value: `${blockOptions.carouselOptions.navigation.borderRadius}px`,
			},
			{
				property: "--cozyNavIconColor",
				value: blockOptions.carouselOptions.navigation.color,
			},
			{
				property: "--cozyNavIconColorHover",
				value: blockOptions.carouselOptions.navigation.colorHover,
			},
			{
				property: "--cozyNavBgColor",
				value: blockOptions.carouselOptions.navigation.backgroundColor,
			},
			{
				property: "--cozyNavBgColorHover",
				value: blockOptions.carouselOptions.navigation.backgroundColorHover,
			},
			{
				property: "--cozyPaginationWidth",
				value: `${blockOptions.carouselOptions.pagination.width}px`,
			},
			{
				property: "--cozyPaginationHeight",
				value: `${blockOptions.carouselOptions.pagination.height}px`,
			},
			{
				property: "--cozyPaginationBorderRadius",
				value: `${blockOptions.carouselOptions.pagination.borderRadius}px`,
			},
			{
				property: "--cozyPaginationActiveWidth",
				value: `${blockOptions.carouselOptions.pagination.activeWidth}px`,
			},
			{
				property: "--cozyPaginationActiveBorderRadius",
				value: `${blockOptions.carouselOptions.pagination.activeBorderRadius}px`,
			},
			{
				property: "--cozyPaginationColor",
				value: blockOptions.carouselOptions.pagination.color,
			},
			{
				property: "--cozyPaginationColorHover",
				value: blockOptions.carouselOptions.pagination.colorHover,
			},
			{
				property: "--cozyPaginationActiveColor",
				value: blockOptions.carouselOptions.pagination.activeColor,
			},
			{
				property: "--cozyPaginationActiveColorHover",
				value: blockOptions.carouselOptions.pagination.activeColorHover,
			},
			{
				property: "--cozyPaginationPositionVertical",
				value: `${blockOptions.carouselOptions.pagination.positionVertical}px`,
			},
			{
				property: "--cozyPaginationAlign",
				value: blockOptions.carouselOptions.pagination?.align
					? blockOptions.carouselOptions.pagination?.align
					: "center",
			},
			{
				property: "--cozyPaginationLeft",
				value:
					blockOptions.carouselOptions.pagination?.align === "left"
						? blockOptions.carouselOptions.pagination?.left
						: "",
			},
			{
				property: "--cozyPaginationRight",
				value:
					blockOptions.carouselOptions.pagination?.align === "right"
						? blockOptions.carouselOptions.pagination?.right
						: "",
			},
		];

		postSliderStyles.forEach((style) => {
			cozyPostSlider.style.setProperty(style.property, style.value);
		});

		$(postSliderClass + " .swiper-slide .cozy-animation__initialized").hide(0);
		$(postSliderClass + " .swiper-slide .cozy-animation__initialized").attr(
			"data-aos-init",
			false,
		);
		$(postSliderClass + " .swiper-slide .cozy-animation__initialized")
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
			loop: blockOptions.carouselOptions.sliderOptions.loop,
			speed: blockOptions.carouselOptions.sliderOptions.speed,
			centeredSlides: blockOptions.carouselOptions.sliderOptions.centeredSlides,
			slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
			spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
			navigation: {
				nextEl: `${postSliderClass} .swiper-button-next.cozy-block-button-next`,
				prevEl: `${postSliderClass} .swiper-button-prev.cozy-block-button-prev`,
			},
			pagination: {
				clickable: true,
				el: `${postSliderClass} .swiper-pagination`,
			},
			breakpoints: {
				100: {
					slidesPerView: 1,
				},
				767: {
					slidesPerView:
						blockOptions.carouselOptions.sliderOptions.slidesPerView <= 2
							? blockOptions.carouselOptions.sliderOptions.slidesPerView
							: 2,
				},
				1024: {
					slidesPerView:
						blockOptions.carouselOptions.sliderOptions.slidesPerView <= 3
							? blockOptions.carouselOptions.sliderOptions.slidesPerView
							: 3,
				},
				1180: {
					slidesPerView:
						blockOptions.carouselOptions.sliderOptions.slidesPerView,
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

		if (blockOptions.carouselOptions.sliderOptions.autoplay.enabled) {
			sliderAttr.autoplay = {
				...blockOptions.carouselOptions.sliderOptions.autoplay,
			};
		} else {
			delete sliderAttr.autoplay;
		}

		const slider = new Swiper(
			postSliderClass + " .swiper-container",
			sliderAttr,
		);
	};
})(jQuery);
