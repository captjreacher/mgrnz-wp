(function ($) {
  window["cozyBlockCategorizedPostTabs"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockID = `#cozyBlock_${n}`;

    function changeTab(index) {
      // Get all tabs and tab contents
      var tabs = $(blockID + " .cozy-block-categorized-post-tabs__tab");
      var contents = $(blockID + " .cozy-block-categorized-post-tabs__body");

      // Remove active class from all tabs and contents
      tabs.removeClass("active-tab");
      contents.removeClass("active-content");

      // Add active class to the selected tab and content
      tabs.eq(index).addClass("active-tab");
      contents.eq(index).addClass("active-content");
    }

    // Bind click event to tabs
    $(blockID + " .cozy-block-categorized-post-tabs__tab").click(function () {
      var tabIndex = $(this).data("index");
      changeTab(tabIndex);
    });
  };
})(jQuery);
