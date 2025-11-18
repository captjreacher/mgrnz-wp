(function ($) {
  window["cozyBlockToggleContent"] = (e) => {
    const attributes = window[e];
    const element = $(`#${e}`);

    function changeTab(index) {
      // Get all tabs and tab contents
      var tabs = element.find(".tab-item");
      var contents = element.find(".cozy-block-toggle-content-item");

      // Remove active class from all tabs and contents
      tabs.removeClass("active-tab");
      contents.removeClass("show-content");

      // Add active class to the selected tab and content
      tabs.eq(index).addClass("active-tab");
      contents.eq(index).addClass("show-content");
    }

    if (attributes.type === "tab") {
      element.find(".tab-item").click(function () {
        const tabIndex = $(this).data("index");

        changeTab(tabIndex);
      });
    }

    if (attributes.type === "toggle") {
      element.find("#toggle-switch").change(function () {
        if ($(this).is(":checked")) {
          changeTab(1);
        } else {
          changeTab(0);
        }
      });
    }
  };
})(jQuery);
