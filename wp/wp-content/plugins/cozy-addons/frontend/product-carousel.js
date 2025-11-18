(function ($) {
	window["cozyBlockProductCarouselInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const blockOptions = window[`cozyProductCarousel_${n}`];
		const productCarouselClass = `#cozyBlock_${n}`;
		const cozyProductCarousel = document.querySelector(productCarouselClass);

		const innerBlocks = cozyProductCarousel.querySelectorAll(".wp-block-post");

		innerBlocks.forEach((block) => {
			if (blockOptions.layout === "carousel") {
				$(productCarouselClass).find(".wp-block-post").addClass("swiper-slide");
			}

			const price = block.querySelector(
				".wc-block-components-product-price ins .amount bdi",
			);
			const regularPrice = block.querySelector(
				".wc-block-components-product-price del .amount bdi",
			);

			if (price && blockOptions.saleBadge.enabled) {
				let saleBadge = block.querySelector(".cozy-sale-badge");

				if (!saleBadge) {
					// Create a new div element
					saleBadge = document.createElement("div");
					saleBadge.className = "cozy-sale-badge";
				}

				// Appending contents inside cozy-sale-badge
				let labelBefore = saleBadge.querySelector(".label-before");
				if (!labelBefore) {
					labelBefore = document.createElement("div");
					labelBefore.className = "label-before";
				}
				labelBefore.textContent = blockOptions.saleBadge.labelBefore;

				let content = saleBadge.querySelector(".content");
				if (!content) {
					content = document.createElement("div");
					content.className = "content";
				}
				content.textContent = "";
				const priceNumberOnly = parseFloat(
					price.textContent.replace(/[^\d.]/g, ""),
				);
				const regularNumberOnly = parseFloat(
					regularPrice.textContent.replace(/[^\d.]/g, ""),
				);
				if (blockOptions.saleBadge.contentType === "default") {
					content.textContent = "Sale";
				}
				if (blockOptions.saleBadge.contentType === "amount") {
					switch (blockOptions.currencyPosition) {
						case "left":
							content.textContent =
								blockOptions.currencySymbol +
								(regularNumberOnly - priceNumberOnly);
							break;
						case "left_space":
							content.textContent =
								blockOptions.currencySymbol +
								" " +
								(regularNumberOnly - priceNumberOnly);
							break;
						case "right":
							content.textContent =
								regularNumberOnly -
								priceNumberOnly +
								blockOptions.currencySymbol;
							break;
						case "right_space":
							content.textContent =
								regularNumberOnly -
								priceNumberOnly +
								" " +
								blockOptions.currencySymbol;
							break;

						default:
							break;
					}
				}
				if (blockOptions.saleBadge.contentType === "percent") {
					const percent =
						((regularNumberOnly - priceNumberOnly) / regularNumberOnly) * 100;
					content.textContent = Number(percent.toFixed(2)).toString() + "%";
				}

				let labelAfter = saleBadge.querySelector(".label-after");
				if (!labelAfter) {
					labelAfter = document.createElement("div");
					labelAfter.className = "label-after";
				}
				labelAfter.textContent = blockOptions.saleBadge.labelAfter;

				saleBadge.appendChild(labelBefore);
				saleBadge.appendChild(content);
				saleBadge.appendChild(labelAfter);

				if (block.querySelector(".wp-block-post-featured-image")) {
					block
						.querySelector(".wp-block-post-featured-image")
						.appendChild(saleBadge);
				}
			}
		});

		const sliderAttr = {
			init: true,
			loop: blockOptions.sliderOptions.loop,
			speed: blockOptions.sliderOptions.speed,
			centeredSlides: blockOptions.sliderOptions.centeredSlides,
			slidesPerView: blockOptions.sliderOptions.slidesPerView,
			spaceBetween: blockOptions.sliderOptions.spaceBetween,
			navigation: {
				nextEl: `${productCarouselClass} .swiper-button-next.cozy-block-button-next`,
				prevEl: `${productCarouselClass} .swiper-button-prev.cozy-block-button-prev`,
			},
			pagination: {
				clickable: true,
				el: `${productCarouselClass} .swiper-pagination`,
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
		} else {
			delete sliderAttr.autoplay;
		}

		new Swiper(
			productCarouselClass + " .cozy-product-carousel__swiper-container",
			sliderAttr,
		);
	};
})(jQuery);
