(function ($) {
	"use strict";
	$(document).ready(function () {
		// Check if there's a saved active tab in localStorage
		var activeTab = localStorage.getItem("activeTab");
		if (activeTab !== null) {
			changeTab(activeTab);
		} else {
			changeTab(0);
		}

		// Bind click event to tabs
		$(".ct-tab").click(function () {
			var tabIndex = $(this).data("index");
			changeTab(tabIndex);
		});

		//Enable/Disable blocks.
		const ajax_url = ajax_object.ajax_url;

		const isPremium = ajax_object.isPremium;
		const premiumBlocks = [
			"modal",
			"news-ticker",
			"post-slider",
			"related-post",
			"popular-post",
			"trending-post",
			"product-slider",
			"product-tab",
			"post-views",
			"post-comments",
			"featured-post-tabs",
			"advanced-categories",
			"featured-product-tabs",
			"categorized-post-tabs",
			"magazine-grid",
			"magazine-list",
			"featured-post",
			"wishlist",
			"quick-view",
			"featured-product",
			"toggle-content",
			"countdown-timer",
			"cf7-styler",
			"img-compare",
			"portfolio-gallery-meta",
		];

		$("#cozy-blocks-enable-super").click(function () {
			$(".cozy-block-active").each(function () {
				var blockName = $(this).attr("name");
				var checkboxId = $(this).attr("id");

				$.ajax({
					url: ajax_url,
					method: "POST",
					data: {
						action: "update_cozy_block_option",
						block_name: blockName,
						checked: !premiumBlocks.includes(blockName)
							? "1"
							: isPremium && premiumBlocks.includes(blockName)
							? "1"
							: "",
					},
					success: function (response) {
						if (!premiumBlocks.includes(blockName)) {
							$("#" + checkboxId).prop("checked", true);
						}

						if (isPremium && premiumBlocks.includes(blockName)) {
							$("#" + checkboxId).prop("checked", true);
						}
					},
					error: function (xhr, status, error) {
						console.log("Error:", error);
					},
				});
			});
		});

		$("#cozy-blocks-disable-super").click(function () {
			$(".cozy-block-active").each(function () {
				var blockName = $(this).attr("name");
				var checkboxId = $(this).attr("id");

				$.ajax({
					url: ajax_url,
					method: "POST",
					data: {
						action: "update_cozy_block_option",
						block_name: blockName,
						checked: "0",
					},
					success: function (response) {
						$("#" + checkboxId).prop("checked", false);
					},
					error: function (xhr, status, error) {
						console.log("Error:", error);
					},
				});
			});
		});

		// Event listener for changes in any checkbox
		$(".cozy-block-active").change(function () {
			var blockName = $(this).attr("name");
			var isChecked = $(this).is(":checked");

			// Perform AJAX call to update the option value on checkbox change
			$.ajax({
				url: ajax_url,
				method: "POST",
				data: {
					action: "update_cozy_block_option",
					block_name: blockName,
					checked: isChecked ? "1" : "0",
				},
				success: function (response) {
					// console.log(`${blockName}: Active status(${isChecked})`);
				},
				error: function (xhr, status, error) {
					console.log("Error:", error);
				},
			});
		});

		// Block CPT enable/disable
		$(".ca__block-cpt").change(function () {
			const templateName = $(this).attr("name");
			const isChecked = $(this).is(":checked");

			$.ajax({
				url: ajax_url,
				method: "POST",
				data: {
					action: "toggle_ca_cpt_enable",
					templateName: templateName,
					checked: isChecked ? "1" : "0",
				},
				success: function (response) {
					// console.log(`${templateName}: Active status(${isChecked})`);
				},
				error: function (xhr, status, error) {
					console.log("Error:", error);
				},
			});
		});

		// Utility functions enable/disable
		$(".ca__utility-function").change(function () {
			const functionName = $(this).attr("name");
			const isChecked = $(this).is(":checked");

			$.ajax({
				url: ajax_url,
				method: "POST",
				data: {
					action: "cozy_addons_toggle_ca_utility_function_status",
					nonce: ajax_object.utilityFunctionNonce,
					functionName: functionName,
					checked: isChecked ? "1" : "0",
				},
				success: function (response) {
					// console.log(`${templateName}: Active status(${isChecked})`);
				},
				error: function (xhr, status, error) {
					console.log("Error:", error);
				},
			});
		});

		//Cozy block upsell tooltop.
		$(".cozy-block-upsell").on("click", function (event) {
			event.preventDefault();
			if ($(this).next(".cozy-block-upsell-tooltip").is(":visible")) {
				$(this).next(".cozy-block-upsell-tooltip").hide();
				return;
			}
			$(".cozy-block-upsell-tooltip").hide();
			$(this).next(".cozy-block-upsell-tooltip").show();
		});

		$(".cozy-addons-admin-notice").on("click", ".notice-dismiss", function () {
			$.ajax({
				url: ajax_url,
				data: {
					action: "cozy_upsell_dismissble_notice",
				},
			});
		});

		$(".cozy-blocks-admin-notice").on("click", ".notice-dismiss", function () {
			$.ajax({
				url: ajax_url,
				data: {
					action: "cozy_blocks_dismissble_notice",
				},
			});
		});

		// Rollback btn
		const rollbackBtn = $("#cozy-addons-rollback-btn");
		$(".cozy-addons-rollback-version").change(function () {
			const selectedVal = $(this).val();

			let url = rollbackBtn.attr("href");

			let urlObj = new URL(url);
			urlObj.searchParams.set("version", selectedVal);

			const updatedURL = urlObj.toString();

			rollbackBtn.attr("href", updatedURL);
		});

		// Features list redirection
		$("#ca-features-list").on("click", function () {
			const lastTab = $(".ct-tab").last().data("index");

			changeTab(lastTab);
		});
	});

	function changeTab(index) {
		// Get all tabs and tab contents
		var tabs = $(".ct-tab");
		var contents = $(".tab-content");

		// Remove active class from all tabs and contents
		tabs.removeClass("active-tab");
		contents.removeClass("active-content");

		// Add active class to the selected tab and content
		tabs.eq(index).addClass("active-tab");
		contents.eq(index).addClass("active-content");

		// Save the active tab index to localStorage
		localStorage.setItem("activeTab", index);

		setTimeout(() => {
			localStorage.setItem("activeTab", 0);
		}, 8000);
	}
})(jQuery);
