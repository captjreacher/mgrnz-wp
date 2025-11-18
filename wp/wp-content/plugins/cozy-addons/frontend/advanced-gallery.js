(function ($) {
	window["cozyBlockAdvancedGallery"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const attributes = window[`cozyBlock_${n}`];
		const blockID = `#cozyBlock_${n}`;

		function changeTab(index) {
			// Get all tabs and tab contents
			var tabs = $(blockID + " .cozy-block-advanced-gallery__tab");
			var contents = $(blockID + " .cozy-block-advanced-gallery__body");
			var lightbox = $(blockID + " .cozy-block-advanced-gallery__lightbox");
			var lightboxWrapper = $(
				blockID + " .cozy-block-advanced-gallery__lightbox-swiper-wrapper",
			);

			// Remove active class from all tabs and contents
			tabs.removeClass("active-tab");
			contents.removeClass("active-content animation__fade-in");
			lightbox.removeClass("active-gallery");
			lightboxWrapper.removeClass("active-content");

			// Add active class to the selected tab and content
			tabs.eq(index).addClass("active-tab");
			contents.eq(index).addClass("active-content");
			setTimeout(() => {
				contents.eq(index).addClass("animation__fade-in");
			}, 100);
			lightbox.eq(index).addClass("active-gallery");
			lightboxWrapper.eq(index).addClass("active-content");
		}

		// Bind click event to tabs
		$(blockID + " .cozy-block-advanced-gallery__tab").click(function () {
			var tabIndex = $(this).data("index");
			changeTab(tabIndex);

			// Re-initialize lightbox events when changing tabs
			setTimeout(function () {
				if (typeof bindLightboxEvents === "function") {
					bindLightboxEvents();
				}
			}, 100);
		});

		let slider = {};

		if (attributes.display === "carousel") {
			const carouselAttr = {
				init: true,
				loop: attributes.sliderOptions.loop,
				autoplay: { ...attributes.sliderOptions.autoplay },
				speed: attributes.sliderOptions.speed,
				centeredSlides: attributes.sliderOptions.centeredSlides,
				slidesPerView: attributes.sliderOptions.slidesPerView,
				spaceBetween: attributes.sliderOptions.spaceBetween,
				effect: attributes.sliderOptions.effect,
				navigation: {
					nextEl: `${blockID} .swiper-button-next`,
					prevEl: `${blockID} .swiper-button-prev`,
				},
				pagination: {
					clickable: true,
					el: `${blockID} .swiper-pagination`,
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
				carouselAttr.autoplay = { ...attributes.sliderOptions.autoplay };
			} else {
				delete carouselAttr.autoplay;
			}

			slider = new Swiper(
				blockID + ".display-carousel .swiper-container",
				carouselAttr,
			);
		}

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
				prevEl: `${blockID} .swiper-button-prev.lightbox-button-prev`,
				nextEl: `${blockID} .swiper-button-next.lightbox-button-next`,
			},
			pagination: {
				el: `${blockID} .swiper-pagination.lightbox-pagination`,
				type: "fraction",
			},
			on: {
				init: function () {
					// Disable transitions on initialization
					this.setTransition(0);
				},
			},
		};

		let lightboxSlider = {};

		// if (attributes.display === "grid" && attributes.enableOptions.lightbox) {
		if (attributes.enableOptions.lightbox) {
			if (Object.keys(lightboxSlider).length > 0) {
				lightboxSlider.destroy();
			}

			lightboxSlider = new Swiper(
				blockID + " .cozy-block-advanced-gallery__lightbox.active-gallery",
				lightboxAttr,
			);

			function exitFullscreen() {
				if (document.fullscreenElement) {
					document.exitFullscreen();
					// document.mozCancelFullScreen();
					// document.webkitRequestFullscreen();
					// document.msExitFullscreen();
				}
			}

			function closeLightBox() {
				$(blockID + " .cozy-block-advanced-gallery__lightbox-wrapper").addClass(
					"display-none",
				);
				$("body").removeClass("cozy-block-advanced-gallery__overflow-hidden");

				exitFullscreen();

				if (
					attributes.display === "carousel" &&
					Object.keys(slider).length > 0 &&
					attributes.sliderOptions.autoplay.status
				) {
					slider.autoplay.start();
				}
			}

			// Close Lightbox
			$(
				blockID +
					" .cozy-block-advanced-gallery__toolbar-button.lightbox-close-button",
			).click(closeLightBox);
			// When the user presses the Escape key, close the modal
			$(document).keydown(function (event) {
				if (event.key === "Escape") {
					closeLightBox();
				}
			});

			// Fullscreen Lightbox
			$(
				blockID +
					" .cozy-block-advanced-gallery__toolbar-button.lightbox-fullscreen-button",
			).click(function () {
				const elem = document.querySelector(
					blockID + " .cozy-block-advanced-gallery__lightbox-wrapper",
				);

				if (!document.fullscreenElement) {
					if (elem.requestFullscreen) {
						elem.requestFullscreen();
					} else if (elem.mozRequestFullScreen) {
						// Firefox
						elem.mozRequestFullScreen();
					} else if (elem.webkitRequestFullscreen) {
						// Chrome, Safari, and Opera
						elem.webkitRequestFullscreen();
					} else if (elem.msRequestFullscreen) {
						// IE/Edge
						elem.msRequestFullscreen();
					}
				} else {
					if (document.exitFullscreen) {
						document.exitFullscreen();
					} else if (document.mozCancelFullScreen) {
						// Firefox
						document.mozCancelFullScreen();
					} else if (document.webkitExitFullscreen) {
						// Chrome, Safari, and Opera
						document.webkitExitFullscreen();
					} else if (document.msExitFullscreen) {
						// IE/Edge
						document.msExitFullscreen();
					}
				}
			});

			// Function to bind lightbox events consistently
			const bindLightboxEvents = function () {
				$(blockID + " .cozy-block-advanced-gallery__item")
					.off("click")
					.on("click", function () {
						$("body").addClass("cozy-block-advanced-gallery__overflow-hidden");

						// Fix for image index calculation
						var currentWrapper = $(this).closest(
							".cozy-block-advanced-gallery__grid-wrapper",
						);
						var allItems = currentWrapper.find(
							".cozy-block-advanced-gallery__item",
						);
						var index = allItems.index(this);

						// Stop autoplay for the slider if needed
						if (
							attributes.display === "carousel" &&
							Object.keys(slider).length > 0 &&
							attributes.sliderOptions.autoplay.status
						) {
							slider.autoplay.stop();
						}

						// Destroy existing lightbox slider if it exists
						if (
							lightboxSlider &&
							typeof lightboxSlider.destroy === "function"
						) {
							lightboxSlider.destroy(true, true);
						}

						// CRITICAL FIX: Force the active slide to be visible by manipulating the DOM
						// Hide all slides first
						$(
							blockID +
								" .cozy-block-advanced-gallery__lightbox.active-gallery .swiper-slide",
						).css("opacity", "0");

						// Force only the target slide to be shown
						var targetSlide = $(
							blockID +
								" .cozy-block-advanced-gallery__lightbox.active-gallery .swiper-slide",
						).eq(index);
						targetSlide.css({
							opacity: "1",
							"z-index": "1",
						});

						// Show the lightbox with the manually prepared slide
						$(
							blockID + " .cozy-block-advanced-gallery__lightbox-wrapper",
						).removeClass("display-none");

						// Now initialize the slider with proper settings
						setTimeout(function () {
							// Reset any manual styling we applied
							$(
								blockID +
									" .cozy-block-advanced-gallery__lightbox.active-gallery .swiper-slide",
							).css({
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
								blockID +
									" .cozy-block-advanced-gallery__lightbox.active-gallery",
								customLightboxAttr,
							);

							lightboxSlider.update();
						}, 50);
					});
			};

			// Call the function to initially bind events
			bindLightboxEvents();

			// Ajax Loader
			if (attributes.display === "grid" && attributes.ajaxLoader.enabled) {
				if (attributes.ajaxLoader.type === "default") {
					let offset = 0;

					$(blockID + " .cozy-block-advanced-gallery__ajax-loader").click(
						function () {
							var button = $(this);
							button.addClass("show-spinner");
							let tabSlug = $(
								blockID + " .cozy-block-advanced-gallery__tab.active-tab",
							).attr("data-slug");

							if (!tabSlug) {
								tabSlug = "all";
							}

							$.ajax({
								url: attributes.ajaxUrl,
								method: "POST",
								data: {
									action: "cozy_block_advanced_gallery_loader",
									nonce: attributes.nonce,
									offset: offset,
									tabSlug: tabSlug,
									attributes: JSON.stringify(attributes),
								},
								success: function (response) {
									if (!response.success) {
										button.addClass("display-none");
										return;
									}

									if (response.success && response.data) {
										var $newPosts = $(response.data.render).hide(); // Hide new posts initially

										if ("all" === tabSlug) {
											offset += attributes.ajaxLoader.content;
										} else {
											attributes.tabRemainingData[tabSlug].offset =
												parseInt(attributes.tabRemainingData[tabSlug].offset) +
												parseInt(attributes.ajaxLoader.content);
										}

										if (attributes.enableOptions.isotopeFilter) {
											$(
												blockID +
													" .active-content .cozy-block-advanced-gallery__grid-wrapper",
											).append($newPosts);
										} else {
											$(
												blockID + " .cozy-block-advanced-gallery__grid-wrapper",
											).append($newPosts);
										}

										// Fade in the new posts with animation
										$newPosts.fadeIn(600); // Adjust duration as needed
										button.removeClass("show-spinner");

										if (parseInt(response.data.next_chunk_count) <= 0) {
											button.addClass("display-none");
										}

										// Rebind lightbox events after new content is loaded
										bindLightboxEvents();
									}
								},
								error: function (error) {
									console.log("Unable to load data...");
								},
							});
						},
					);
				}

				if (attributes.ajaxLoader.type === "scroll") {
					const element = document.querySelector(
						blockID + ".has-infinite-scroll",
					);
					let isFetching = false; // Flag to prevent multiple AJAX requests
					let offset = 0; // Initialize offset
					let hasNextChunk = true;

					function isContainerNearingEnd(el) {
						var rect = el.getBoundingClientRect();
						var buffer = 200; // Adjust the buffer value as needed
						return (
							rect.bottom - buffer <=
							(window.innerHeight || document.documentElement.clientHeight)
						);
					}

					function fetchNewContent() {
						let tabSlug = $(
							blockID + " .cozy-block-advanced-gallery__tab.active-tab",
						).attr("data-slug");

						if (!tabSlug) {
							tabSlug = "all";
						}

						if (isFetching || tabSlug != "all") return; // Exit if an AJAX request is already in progress

						isFetching = true; // Set the fetching flag to true

						$(".scroll-spinner").removeClass("display-none");
						$.ajax({
							url: attributes.ajaxUrl,
							method: "POST",
							data: {
								action: "cozy_block_advanced_gallery_loader",
								nonce: attributes.nonce,
								offset: offset,
								tabSlug: tabSlug,
								attributes: JSON.stringify(attributes),
							},
							success: function (response) {
								if (!response.success) {
									$(".scroll-spinner").addClass("display-none");
								}
								if (response.success && response.data) {
									var $newPosts = $(response.data.render).hide(); // Hide new posts initially

									if (tabSlug === "all") {
										offset += attributes.ajaxLoader.content;
									} else {
										attributes.tabRemainingData[tabSlug].offset =
											parseInt(attributes.tabRemainingData[tabSlug].offset) +
											parseInt(attributes.ajaxLoader.content);
									}

									if (attributes.enableOptions.isotopeFilter) {
										$(
											blockID +
												" .active-content .cozy-block-advanced-gallery__grid-wrapper",
										).append($newPosts);
									} else {
										$(
											blockID + " .cozy-block-advanced-gallery__grid-wrapper",
										).append($newPosts);
									}

									// Fade in the new posts with animation
									$newPosts.fadeIn(600); // Adjust duration as needed

									if (parseInt(response.data.next_chunk_count) <= 0) {
										$(".scroll-spinner").addClass("display-none");
										hasNextChunk = false;
									}

									// Rebind lightbox events after new content is loaded with infinite scroll
									bindLightboxEvents();
								}
							},
							error: function (error) {
								console.log("Unable to load data...");
							},
							complete: function () {
								isFetching = false; // Reset the fetching flag
								$(".scroll-spinner").addClass("display-none");
							},
						});
					}

					function debounce(func, wait) {
						let timeout;
						return function () {
							clearTimeout(timeout);
							timeout = setTimeout(() => func.apply(this, arguments), wait);
						};
					}

					const handleScroll = debounce(function () {
						if (isContainerNearingEnd(element) && hasNextChunk) {
							fetchNewContent();
						}
					}, 200); // Adjust the debounce delay as needed

					window.addEventListener("scroll", handleScroll);
				}
			}
		}
	};
})(jQuery);
