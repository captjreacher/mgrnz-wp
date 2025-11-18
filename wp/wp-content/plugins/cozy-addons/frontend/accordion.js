(function ($) {
	window["cozyBlockAccordionInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const blockOptions = window[`cozyAccordion_${n}`];
		const accordionClass = `#cozyBlock_${n}`;
		const cozyAccordion = document.querySelector(accordionClass);

		const cozyAccordionItem = cozyAccordion.querySelectorAll(
			".cozy-block-accordion-item",
		);

		cozyAccordionItem.forEach((item) => {
			const title = item.querySelector(".cozy-accordion-title");

			const icon = item.querySelector(".accordion-icon-wrapper svg");
			const iconPath = item.querySelector(".accordion-icon-wrapper svg path");

			title.addEventListener("click", function () {
				const isActive = this.classList.contains("active");

				// Remove active class from all
				$(cozyAccordion).find(".cozy-accordion-title").removeClass("active");
				$(cozyAccordion)
					.find(".cozy-accordion-content")
					.removeClass("display-block");

				if (!isActive) {
					// Open clicked accordion
					this.classList.add("active");
					const content = this.nextElementSibling;
					if (content) {
						content.classList.add("display-block");
					}

					// Update to active icon
					icon.setAttribute(
						"viewBox",
						`${blockOptions.icon.activeViewBox.vx} ${blockOptions.icon.activeViewBox.vy} ${blockOptions.icon.activeViewBox.vw} ${blockOptions.icon.activeViewBox.vh}`,
					);
					iconPath.setAttribute("d", blockOptions.icon.activePath);
				} else {
					// Reset icon when closing
					icon.setAttribute(
						"viewBox",
						`${blockOptions.icon.viewBox.vx} ${blockOptions.icon.viewBox.vy} ${blockOptions.icon.viewBox.vw} ${blockOptions.icon.viewBox.vh}`,
					);
					iconPath.setAttribute("d", blockOptions.icon.path);
				}
			});
		});
	};
})(jQuery);
