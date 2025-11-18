(function ($) {
	window["cozyBlockScrollTopInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const scrollTopClass = `#cozyBlock_${n}`;
		const cozyScrollTop = document.querySelector(scrollTopClass);

		let scrollTimeout;
		let isHovered = false;

		function scrollFunction() {
			if (
				document.body.scrollTop > 10 ||
				document.documentElement.scrollTop > 10
			) {
				cozyScrollTop.classList.add("visibility-visible");
				cozyScrollTop.classList.remove("visibility-hidden");
			} else {
				cozyScrollTop.classList.add("visibility-hidden");
				cozyScrollTop.classList.remove("visibility-visible");
			}
		}

		function handleScroll() {
			// Run while scrolling
			scrollFunction();

			// Clear previous timeout
			clearTimeout(scrollTimeout);

			// Set new timeout (fires when scrolling has stopped for 150ms)
			scrollTimeout = setTimeout(() => {
				if (!isHovered) {
					cozyScrollTop.classList.add("visibility-hidden");
					cozyScrollTop.classList.remove("visibility-visible");
				}
				// you can call another function here
			}, 3000);
		}

		// attach listener
		window.addEventListener("scroll", handleScroll);

		// hover listeners
		cozyScrollTop.addEventListener("mouseenter", () => {
			isHovered = true;
		});

		cozyScrollTop.addEventListener("mouseleave", () => {
			isHovered = false;
			handleScroll();
		});

		cozyScrollTop.addEventListener("click", function () {
			jQuery("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});
	};
})(jQuery);
