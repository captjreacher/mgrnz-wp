(function ($) {
	window["cozyBlockSliderInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const blockOptions = window[`slider_${n}`];
		const swiperClass = `#cozyBlock_${n}`;
		const element = document.querySelector(swiperClass);

		let thumbs = {};

		$(swiperClass + " .swiper-slide .cozy-animation__initialized").hide(0);
		$(swiperClass + " .swiper-slide .cozy-animation__initialized").attr(
			"data-aos-init",
			false,
		);
		$(swiperClass + " .swiper-slide .cozy-animation__initialized")
			.removeClass("aos-init")
			.removeClass("aos-animate");

		// Function to handle AOS initialization in the active slide
		function handleAosInit(swiper) {
			const activeIndex = swiper.activeIndex; // Gets the true logical index

			const $activeSlide = $(swiper.slides[activeIndex]); // Get the active slide as a jQuery object

			const $innerChild = $activeSlide.find(".cozy-animation__initialized"); // Find the inner child element

			const aosInitValue = $innerChild.length
				? $innerChild.data("aos-init")
				: "false";
			const aosType = $innerChild.length ? $innerChild.data("aos") : "none";

			if (aosType !== "none" && aosInitValue === "false") {
				$activeSlide.find(".cozy-animation__initialized").hide(0);
			}
		}

		// Function to activate AOS for the active slide
		function activateAos(swiper) {
			const activeIndex = swiper.activeIndex;

			const $activeSlide = $(swiperClass).find(".swiper-slide").eq(activeIndex); // Get the active slide as a jQuery object

			const animateEl = $activeSlide.find(".cozy-animation__initialized");

			const aosInit = animateEl.attr("data-aos-init");

			if (aosInit === "false") {
				// Tweak to remove the class and animate after 100 milliseconds.
				animateEl.removeClass("aos-init aos-animate").show(0);

				setTimeout(() => {
					animateEl.addClass("aos-init aos-animate");
				}, 100);

				AOS.refresh();

				animateEl.attr("data-aos-init", "true");
			}
		}

		let swiperAttr = {
			init: true,
			loop: blockOptions.sliderOptions.loop,
			loopAddBlankSlides: false,
			centeredSlides: blockOptions.sliderOptions.centeredSlides,
			speed: blockOptions.sliderOptions.speed,
			slidesPerView: blockOptions.sliderOptions.slidesPerView,
			spaceBetween: blockOptions.sliderOptions.spaceBetween,
			navigation: {
				nextEl: `${swiperClass} .cozy-block-button-next`,
				prevEl: `${swiperClass} .cozy-block-button-prev`,
			},
			pagination: {
				clickable: true,
				el: `${swiperClass} .swiper-pagination`,
			},
			effect: blockOptions.sliderOptions.effect,
			fadeEffect: {
				crossFade: true,
			},
			direction: blockOptions.direction,
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
			// parallax: true,

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
			swiperAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
		}

		if (blockOptions.layout === "thumbs") {
			thumbs = new Swiper(swiperClass + " .thumb-slider", {
				spaceBetween: blockOptions?.thumbOptions?.gap,
				loop: blockOptions?.thumbOptions?.loop,
				slidesPerView: blockOptions?.thumbOptions?.slidesPerView
					? blockOptions?.thumbOptions?.slidesPerView
					: 3,
				centeredSlides: blockOptions?.thumbOptions?.centeredSlides,
				watchSlidesProgress: true,
				freeMode: true,
			});

			swiperAttr.thumbs = {
				swiper: thumbs,
			};
		}

		new Swiper(swiperClass, swiperAttr);

		const blockStyles = [
			{
				property: "--cozyHeight",
				value:
					blockOptions.direction === "vertical"
						? blockOptions.height + "px"
						: "",
			},
			{
				property: "--cozyNavSize",
				value: blockOptions.navigation.iconSize + "px",
			},
			{
				property: "--cozyNavBoxWidth",
				value: blockOptions.navigation.iconBoxWidth + "px",
			},
			{
				property: "--cozyNavBoxHeight",
				value: blockOptions.navigation.iconBoxHeight + "px",
			},
			{
				property: "--cozyNavRadius",
				value: blockOptions.navigation.borderRadius + "px",
			},
			{
				property: "--cozyNavBorderStyle",
				value: blockOptions.navigation.borderType,
			},
			{
				property: "--cozyNavBorderWidth",
				value: blockOptions.navigation.borderWidth + "px",
			},
			{
				property: "--cozyNavBorderColor",
				value: blockOptions.navigation.borderColor,
			},
			{
				property: "--cozyNavColor",
				value: blockOptions.navigation.color,
			},
			{
				property: "--cozyNavBgColor",
				value: blockOptions.navigation.backgroundColor,
			},
			{
				property: "--cozyNavBorderColorHover",
				value: blockOptions.navigation.borderColorHover,
			},
			{
				property: "--cozyNavColorHover",
				value: blockOptions.navigation.colorHover,
			},
			{
				property: "--cozyNavBgColorHover",
				value: blockOptions.navigation.backgroundColorHover,
			},
			{
				property: "--cozyNavRotate",
				value: blockOptions.navigation.iconRotate + "deg",
			},
			{
				property: "--cozyBulletsBottom",
				value: blockOptions.pagination.bottom + "px",
			},
			{
				property: "--cozyBulletsWidth",
				value: blockOptions.pagination.width,
			},
			{
				property: "--cozyBulletsHeight",
				value: blockOptions.pagination.height,
			},
			{
				property: "--cozyBulletsRadius",
				value: blockOptions.pagination.borderRadius,
			},
			{
				property: "--cozyBulletsColor",
				value: blockOptions.pagination.color,
			},
			{
				property: "--cozyBulletsColorHover",
				value: blockOptions.pagination.colorHover,
			},
			{
				property: "--cozyBulletsActiveWidth",
				value: blockOptions.pagination.activeWidth
					? blockOptions.pagination.activeWidth
					: "10px",
			},
			{
				property: "--cozyBulletsActiveHeight",
				value: blockOptions.pagination.activeHeight
					? blockOptions.pagination.activeHeight
					: "10px",
			},
			{
				property: "--cozyBulletsActiveRadius",
				value: blockOptions.pagination.activeBorderRadius,
			},
			{
				property: "--cozyBulletsActiveColor",
				value: blockOptions.pagination.activeColor,
			},
			{
				property: "--cozyBulletsActiveColorHover",
				value: blockOptions.pagination.activeColorHover,
			},
			{
				property: "--cozyBulletsAlign",
				value: blockOptions.pagination?.align
					? blockOptions.pagination?.align
					: "center",
			},
			{
				property: "--cozyBulletsLeft",
				value:
					blockOptions.pagination?.align === "left"
						? blockOptions.pagination?.left + "px"
						: "",
			},
			{
				property: "--cozyBulletsRight",
				value:
					blockOptions.pagination?.align === "right"
						? blockOptions.pagination?.right + "px"
						: "",
			},
			{
				property: "--cozyBulletsGap",
				value: blockOptions.pagination.gap
					? blockOptions.pagination.gap
					: "4px",
			},
			{
				property: "--cozyShapeMargin",
				value: `${blockOptions.shapeDivider.margin.top}px ${blockOptions.shapeDivider.margin.right}px ${blockOptions.shapeDivider.margin.bottom}px ${blockOptions.shapeDivider.margin.left}px`,
			},
			{
				property: "--cozyShapeHeight",
				value: blockOptions.shapeDivider.height + "px",
			},
			{
				property: "--cozyShapeFill",
				value: blockOptions.shapeDivider.color,
			},
			{
				property: "--cozyThumbHorizontalJustify",
				value: blockOptions?.thumbOptions?.horizontalJustify,
			},
			{
				property: "--cozyThumbVerticalJustify",
				value: blockOptions?.thumbOptions?.verticalJustify,
			},
			{
				property: "--cozyThumbGap",
				value: blockOptions?.thumbOptions?.gap,
			},
			{
				property: "--cozyThumbWidth",
				value: blockOptions?.thumbOptions?.width,
			},
			{
				property: "--cozyThumbHeight",
				value: blockOptions?.thumbOptions?.height,
			},
			{
				property: "--cozyThumbHorizontalSpacing",
				value: blockOptions?.thumbOptions?.horizontalSpacing,
			},
			{
				property: "--cozyThumbVerticalSpacing",
				value: blockOptions?.thumbOptions?.verticalSpacing,
			},
			{
				property: "--cozyThumbRadius",
				value: blockOptions?.thumbOptions?.radius,
			},
			{
				property: "--cozyThumbOutline",
				value:
					blockOptions?.thumbOptions?.default?.border?.width +
					" " +
					blockOptions?.thumbOptions?.default?.border?.style +
					" " +
					blockOptions?.thumbOptions?.default?.border?.color,
			},
			{
				property: "--cozyThumbOutlineOffset",
				value: blockOptions?.thumbOptions?.default?.offset,
			},
			{
				property: "--cozyThumbActiveOutline",
				value:
					blockOptions?.thumbOptions?.active?.border?.width +
					" " +
					blockOptions?.thumbOptions?.active?.border?.style +
					" " +
					blockOptions?.thumbOptions?.active?.border?.color,
			},
			{
				property: "--cozyThumbActiveOutlineOffset",
				value: blockOptions?.thumbOptions?.active?.offset,
			},
			{
				property: "--cozyThumbOpacity",
				value: parseFloat(blockOptions?.thumbOptions?.default?.opacity) / 100,
			},
			{
				property: "--cozyThumbActiveOpacity",
				value: parseFloat(blockOptions?.thumbOptions?.active?.opacity) / 100,
			},
			// {
			//   property: "--cozyThumbResponsiveViewport",
			//   value: blockOptions?.thumbOptions?.responsive?.viewport + "px",
			// },
			{
				property: "--cozyThumbResponsiveWidth",
				value: blockOptions?.thumbOptions?.responsive?.width,
			},
			{
				property: "--cozyThumbResponsiveHeight",
				value: blockOptions?.thumbOptions?.responsive?.height,
			},
		];

		if (element) {
			blockStyles.forEach((style) => {
				element.style.setProperty(style.property, style.value);
			});
		}
	};
})(jQuery);
