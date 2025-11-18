(function ($) {
	window["cozyBlockPortfolioGalleryInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const attributes = window[`cozyPortfolioGallery_${n}`];
		const portfolioClass = `#cozyBlock_${n}`;
		const element = $(portfolioClass);

		const $body = $("body");

		let loaderOffset = 0;

		const sliderAttr = {
			init: true,
			loop: attributes.sliderOptions.loop,
			autoplay: { ...attributes.sliderOptions.autoplay },
			speed: attributes.sliderOptions.speed,
			centeredSlides: attributes.sliderOptions.centeredSlides,
			slidesPerView: attributes.sliderOptions.slidesPerView,
			spaceBetween: attributes.sliderOptions.spaceBetween,
			navigation: {
				nextEl: `${portfolioClass} .swiper-button-next`,
				prevEl: `${portfolioClass} .swiper-button-prev`,
			},
			pagination: {
				clickable: true,
				el: `${portfolioClass} .swiper-pagination`,
			},
			breakpoints: {
				100: {
					slidesPerView: 1,
				},
				767: {
					slidesPerView:
						attributes.sliderOptions.slidesPerView <= 2
							? attributes.sliderOptions.slidesPerView
							: 2,
				},
				1024: {
					slidesPerView:
						attributes.sliderOptions.slidesPerView <= 3
							? attributes.sliderOptions.slidesPerView
							: 3,
				},
				1180: {
					slidesPerView: attributes.sliderOptions.slidesPerView,
				},
			},
		};

		if (attributes.sliderOptions.autoplay.status) {
			sliderAttr.autoplay = { ...attributes.sliderOptions.autoplay };
		} else {
			delete sliderAttr.autoplay;
		}

		let portfolioSlider = {};

		if (attributes.layout === "carousel") {
			portfolioSlider = new Swiper(
				portfolioClass +
					".layout-carousel.cozy-portfolio-gallery__swiper-container",
				sliderAttr,
			);
		}

		if (attributes.source === "template" && attributes.isPremium) {
			function addPopupEvent() {
				element
					.find(".cozy-portfolio.has-modal")
					.off("click")
					.on("click", function () {
						const $this = $(this);

						const $modal = $this.find(".cozy-portfolio__modal");
						$modal.removeClass("display__none");
						$body.addClass("overflow__hidden");

						function closePopupModal() {
							$modal.addClass("display__none");
							$body.removeClass("overflow__hidden");
						}

						// Add ESC key support
						$(document).on("keydown.escClose", function (e) {
							if (e.key === "Escape") {
								closePopupModal();
								$(document).off("keydown.escClose"); // Remove after closing
							}
						});

						// This will run only once, each time the modal opens
						$this
							.find(".close__icon, .modal__overlay")
							.off("click")
							.one("click", function (e) {
								e.preventDefault();
								e.stopPropagation();
								closePopupModal();
							});
					});
			}

			if (attributes.layout === "grid") {
				const layoutWrapper = element.find(
					".cozy-layout-wrapper.cozy-layout-grid",
				);
				// Tabs
				if (attributes.gridOptions.isotopeFilter) {
					element.find(".category__item").on("click", function () {
						const $this = $(this);
						element.find(".category__item").removeClass("active__tab");

						$this.addClass("active__tab");

						const termID = $this.data("tax-id");

						layoutWrapper.addClass("fade__out");

						setTimeout(() => {
							element.find(".cozy-portfolio.cozy-block-grid").each(function () {
								const $this = $(this);

								const postTaxonomies = $this.data("post-taxonomies");

								if (parseInt(termID) === 0) {
									$this.removeClass("display__none");
								} else if (!postTaxonomies.includes(parseInt(termID))) {
									$this.addClass("display__none");
								} else {
									$this.removeClass("display__none");
								}

								layoutWrapper.removeClass("fade__out");
							});
						}, 500);
					});
				}

				// Search Query
				$("#cozy-isotope-filter__search-bar").keyup(function () {
					const searchValue = $(this).val().toLowerCase();
				});

				// Layout Gallery
				if (attributes.layoutType === "gallery") {
					const galleryModal = element.find(".gallery__modal");

					let lightboxSlider = {};

					// Lightbox
					const lightboxAttr = {
						init: true,
						// loop: true,
						slidesPerView: 1,
						speed: 1500,
						spaceBetween: 40,
						effect: "fade",
						fadeEffect: {
							crossFade: true,
						},
						navigation: {
							prevEl: `${portfolioClass} .gallery__modal .swiper-button-prev`,
							nextEl: `${portfolioClass} .gallery__modal .swiper-button-next`,
						},
						pagination: {
							el: `${portfolioClass} .gallery__modal .swiper-pagination`,
							type: "fraction",
						},
						on: {
							init: function () {
								// Disable transitions on initialization
								this.setTransition(0);
							},
						},
					};

					// Function to add click event to the portfolio items and create gallery swiper
					function createItemClickEvent() {
						element
							.find(".cozy-portfolio")
							.off("click")
							.on("click", function () {
								$body.addClass("overflow__hidden");

								const $this = $(this);

								// Fix for image index calculation
								var currentWrapper = $this.closest(".cozy-layout-wrapper");
								var allItems = currentWrapper.find(
									".cozy-portfolio:not(.display__none)",
								);
								var index = allItems.index($this);

								// Destroy existing lightbox slider if it exists
								if (
									lightboxSlider &&
									typeof lightboxSlider.destroy === "function"
								) {
									lightboxSlider.destroy(true, true);
								}

								// Apply tab filter
								if (attributes.gridOptions.isotopeFilter) {
									const activeTab = element
										.find(".category__item.active__tab")
										.data("tax-id");
									galleryModal.find(".gallery__item").each(function () {
										const $this = $(this);

										const postTaxonomies = $this.data("post-taxonomies");

										if (parseInt(activeTab) === 0) {
											$this.removeClass("display__none");
										} else if (!postTaxonomies.includes(parseInt(activeTab))) {
											$this.addClass("display__none");
										} else {
											$this.removeClass("display__none");
										}
									});
								}

								// CRITICAL FIX: Force the active slide to be visible by manipulating the DOM
								// Hide all slides first
								element.find(".gallery__item.swiper-slide").css("opacity", "0");

								// Force only the target slide to be shown
								var targetSlide = element
									.find(".gallery__item.swiper-slide")
									.eq(index);
								targetSlide.css({
									opacity: "1",
									"z-index": "1",
								});

								// Show the lightbox with the manually prepared slide
								galleryModal.removeClass("display__none");

								// Now initialize the slider with proper settings
								setTimeout(function () {
									// Reset any manual styling we applied
									element.find(".gallery__item.swiper-slide").css({
										opacity: "",
										"z-index": "",
									});

									// Create the slider with initialSlide set
									const customLightboxAttr = Object.assign({}, lightboxAttr, {
										initialSlide: index,
										on: {
											init: function () {
												// Make sure we're on the right slide from the beginning
												this.slideTo(index, 0, false);
											},
										},
									});

									lightboxSlider = new Swiper(
										portfolioClass + " .gallery__body .swiper-container",
										customLightboxAttr,
									);

									lightboxSlider.update();
								}, 50);
							});
					}

					createItemClickEvent();

					function closeGallery() {
						// Destroy existing lightbox slider if it exists
						if (
							lightboxSlider &&
							typeof lightboxSlider.destroy === "function"
						) {
							lightboxSlider.destroy(true, true);
						}

						$body.removeClass("overflow__hidden");
						galleryModal.addClass("display__none");
					}

					galleryModal
						.find(".close__icon, .gallery__overlay")
						.off("click")
						.on("click", function () {
							closeGallery();
						});
					// Add ESC key support
					$(document).on("keydown.escClose", function (e) {
						if (e.key === "Escape") {
							closeGallery();
							$(document).off("keydown.escClose"); // Remove after closing
						}
					});
				}

				// Ajax Loader.
				if (attributes.ajaxButton.enabled) {
					element
						.find(".gallery__item")
						.slice(attributes.perPage)
						.addClass("display__none");
					const btnWrap = element.find(".cozy-portfolio__ajax-btn-wrap");
					element.find(".cozy-portfolio__ajax-btn").on("click", function () {
						const $this = $(this);

						const btnWidth = $this.outerWidth();

						$this.css("min-width", btnWidth);

						const btnLabel = $this.find(".btn__label");

						const btnSpinner = $this.find(".btn__spinner");

						// Remove style attr
						$.ajax({
							url: attributes.ajaxURL,
							method: "POST",
							data: {
								action: "cozy_block_portfolio_gallery_loader",
								nonce: attributes.nonce,
								offset: loaderOffset,
								attributes: JSON.stringify(attributes),
							},
							beforeSend: function () {
								btnLabel.addClass("display__none");
								btnSpinner.removeClass("display__none");
							},
							success: function (res) {
								// Hide the loader buttn if no posts to show further
								if (!res.data || !res.data.hasNext) {
									btnWrap.addClass("display__none");
								}

								if (res.data) {
									// Append with animation
									const $newContent = $(res.data.render).hide(); // step 1
									layoutWrapper.append($newContent); // step 2
									$newContent.fadeIn(500);

									// Update the loaderOffset with the new offset received from ajax request
									loaderOffset = res.data.offset;

									// Layout Type Gallery
									if (attributes.layoutType === "gallery") {
										createItemClickEvent();

										// Show Remaning Elements in the gallery wrapper
										element
											.find(".gallery__item.display__none")
											.slice(0, attributes.ajaxButton.contentLoad)
											.removeClass("display__none");
									}

									// Layout Type Overlay
									if (
										attributes.layoutType !== "gallery" &&
										attributes?.popup?.enabled
									) {
										addPopupEvent();
									}
								}
							},
							error: function (xhr, status, err) {
								btnWrap.addClass("display__none");
							},
							complete: function () {
								btnLabel.removeClass("display__none");
								btnSpinner.addClass("display__none");
							},
						});
					});
				}
			}

			// Layout Type Overlay
			if (attributes.layoutType !== "gallery" && attributes?.popup?.enabled) {
				addPopupEvent();
			}
		}
	};
})(jQuery);
