(function ($) {
  window["cozyBlockPricingTable"] = (n) => {
    const attributes = window[n];

    const list = $(`#${n}`).find(".pricing-table__list");

    const loaderBtn = $(`#${n}`).find("#feature-list__ajax-loader");
    loaderBtn.click(function () {
      list
        .find(
          `.pricing-table__list-item.display-none:lt(${attributes.list.ajaxLoader.loadCount})`
        )
        .each(function () {
          const $this = $(this);
          $this.removeClass("display-none"); // Remove the display-none class
          setTimeout(() => {
            $this.addClass("show"); // Add the show class to trigger animation
          }, 100); // Small delay to ensure CSS transition triggers
        });

      if (
        list.find(
          `.pricing-table__list-item.display-none:lt(${attributes.list.ajaxLoader.loadCount})`
        ).length <= 0
      ) {
        $(this).addClass("display-none");
      }
    });
  };
})(jQuery);
