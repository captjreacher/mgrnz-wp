(function ($) {
  window["cozyBlockSidebarPanelInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const sidebarClass = `#cozyBlock_${n}`;
    const cozySidebar = $(sidebarClass);

    const body = $("body");

    function closeSidebarPanel() {
      cozySidebar.removeClass("sidebar-panel-active");

      cozySidebar.removeClass("has-overlay");
      body.removeClass("overflow-hidden");
    }

    const sidebarOpenBtn = cozySidebar.find(".open-icon-wrapper");
    sidebarOpenBtn.on("click", function () {
      cozySidebar.addClass("sidebar-panel-active");
      cozySidebar.addClass("has-overlay");

      body.addClass("overflow-hidden");

      $(sidebarClass + ".has-overlay").on("click", function (e) {
        if (e.target === this) {
          closeSidebarPanel();
        }
      });
    });

    const sidebarCloseBtn = cozySidebar.find(".close-icon-wrapper");
    sidebarCloseBtn.on("click", function () {
      closeSidebarPanel();
    });
    // When the user presses the Escape key, close the modal
    $(document).keydown(function (event) {
      if (event.key === "Escape") {
        closeSidebarPanel();
      }
    });
  };
})(jQuery);
