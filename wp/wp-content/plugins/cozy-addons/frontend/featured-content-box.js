(function ($) {
	window["cozyBlockFeaturedContentBoxInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const blockOptions = window[`cozyFeaturedContentBox_${n}`];
		const featuredContentBoxClass = `#cozyBlock_${n}`;

		const sliderAttr = {
			init: true,
			loop: blockOptions.sliderOptions.loop,
			speed: blockOptions.sliderOptions.speed,
			centeredSlides: blockOptions.sliderOptions.centeredSlides,
			slidesPerView: blockOptions.sliderOptions.slidesPerView,
			spaceBetween: blockOptions.sliderOptions.spaceBetween,
			navigation: {
				nextEl: `${featuredContentBoxClass} .swiper-button-next.cozy-block-button-next`,
				prevEl: `${featuredContentBoxClass} .swiper-button-prev.cozy-block-button-prev`,
			},
			pagination: {
				clickable: true,
				el: `${featuredContentBoxClass} .swiper-pagination`,
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
		};

		if (blockOptions.sliderOptions.autoplay.status) {
			sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
			if (
				blockOptions.isPremium &&
				blockOptions.sliderOptions?.reverseDirection
			) {
				sliderAttr.autoplay = {
					...sliderAttr.autoplay,
					reverseDirection: true,
				};
			} else {
				delete sliderAttr.autoplay.reverseDirection;
			}
		} else {
			delete sliderAttr.autoplay;
		}

		let portfolioSlider = null;

		if (blockOptions.display === "carousel") {
			portfolioSlider = new Swiper(
				featuredContentBoxClass +
					".display-carousel.cozy-featured-content-box__swiper-container",
				sliderAttr,
			);

			if (blockOptions.sliderOptions.autoplay.status) {
				$(
					featuredContentBoxClass +
						".display-carousel.cozy-featured-content-box__swiper-container",
				).on("mouseover", () => {
					portfolioSlider.autoplay.stop();
				});

				$(
					featuredContentBoxClass +
						".display-carousel.cozy-featured-content-box__swiper-container",
				).on("mouseout", () => {
					portfolioSlider.autoplay.start();
				});
			}
		}
	};
})(jQuery);
