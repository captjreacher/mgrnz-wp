(function ($) {
	window["cozyBlockAdvancedTabInit"] = (e) => {
		const n = e.replace(/-/gi, "_");
		const advancedTabClass = `#cozyBlock_${n}`;
		const cozyAdvancedTab = document.querySelector(advancedTabClass);

		function openTab(childClientId) {
			const tabContents = cozyAdvancedTab.querySelectorAll(
				".cozy-block-advanced-tab-item",
			);
			tabContents.forEach((tab) => {
				tab.classList.remove("show");
				tab.classList.remove("fade-in");
			});
			// Deactivate all tab buttonsblockOptions
			const tabButtons = cozyAdvancedTab.querySelectorAll(".cozy-tab-button");
			tabButtons.forEach((button) => {
				button.classList.remove("active");
			});

			const selectedTab = cozyAdvancedTab.querySelector(
				`[data-client-id="${childClientId}"]`,
			);
			if (selectedTab) {
				selectedTab.classList.add("show");
				setTimeout(() => {
					selectedTab.classList.add("fade-in");
				}, 100);
			}

			// Activate the clicked tab button
			const activeTab = cozyAdvancedTab.querySelector(
				`[id="${childClientId}"]`,
			);
			if (activeTab) {
				activeTab.classList.add("active");
			}
		}

		const defaultTab = cozyAdvancedTab.querySelector(
			".cozy-tab-button:first-child",
		);
		if (defaultTab) {
			const tabId = defaultTab.getAttribute("id"); // Assuming you have a data attribute for tab name
			openTab(tabId);
		}

		//Adding Click Event to tab button
		const tabButtons = cozyAdvancedTab.querySelectorAll(".cozy-tab-button");
		tabButtons.forEach((button) => {
			const childClientId = button.getAttribute("id");
			button.addEventListener("click", function () {
				openTab(childClientId);
			});
		});
	};
})(jQuery);
