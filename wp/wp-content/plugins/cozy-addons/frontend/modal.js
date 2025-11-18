(function ($) {
  window["cozyBlockModalInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyModal_${n}`];
    const modalClass = `#cozyBlock_${n}`;
    const cozyModal = $(modalClass);

    function getCookieValue(cookieName) {
      const name = cookieName + "=";
      const decodedCookie = decodeURIComponent(document.cookie);
      const cookieArray = decodedCookie.split(";");

      for (let i = 0; i < cookieArray.length; i++) {
        let cookie = cookieArray[i];
        while (cookie.charAt(0) === " ") {
          cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) === 0) {
          return cookie.substring(name.length, cookie.length);
        }
      }
      return "";
    }

    const body = $("body");

    const cozyOverlay = cozyModal.siblings(".cozy-block-modal__overlay");

    function showModal(flag = true) {
      if (flag) {
        cozyOverlay.removeClass("display-none");
        body.addClass("overflow-hidden");
        cozyModal.removeClass("display-none");
      } else {
        cozyOverlay.addClass("display-none");
        body.removeClass("overflow-hidden");
        cozyModal.addClass("display-none");
      }
    }
    if (
      blockOptions.modalType === "default" &&
      blockOptions.modalEvent === "load"
    ) {
      const modalShown = getCookieValue(`cozyModal_${n}`);
      if (!blockOptions.loadOnRefresh && modalShown.length > 0) {
        return;
      }

      showModal();

      if (!blockOptions.loadOnRefresh && modalShown.length <= 0) {
        const now = new Date();
        const expirationTime = new Date(now.getTime() + 30 * 60 * 1000);
        document.cookie = `cozyModal_${n}=true; expires=${expirationTime.toUTCString()}; path=/`;
      }
    }

    const closeButton = cozyModal.find(`.modal-icon-wrapper`);
    closeButton.on("click", function () {
      if (blockOptions.modalType === "default") {
        showModal(false);
      }

      cozyModal.addClass("display-none");
    });

    // When the user presses the Escape key, close the modal
    $(document).keydown(function (event) {
      if (event.key === "Escape") {
        showModal(false);
      }
    });

    if (
      blockOptions.modalType === "default" &&
      blockOptions.modalEvent === "click"
    ) {
      const openButton = cozyModal.siblings(".cozy-modal-open");

      openButton.on("click", function () {
        if (
          blockOptions.modalType === "default" &&
          blockOptions.modalEvent === "click"
        ) {
          showModal();
        }

        cozyModal.removeClass("display-none");
      });
    }

    //Overlay click closes modal for modal type default only
    if (blockOptions.modalType === "default") {
      cozyOverlay.on("click", function () {
        showModal(false);
      });
    }
  };
})(jQuery);
