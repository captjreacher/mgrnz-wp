(function ($) {
  window["cozyBlockCountdownTimer"] = (e) => {
    const element = $(`.${e}`);
    const attributes = window[e];

    function updateCounter(attributes, element) {
      const now = new Date();

      let endDate = new Date();
      if (attributes.endDate) {
        endDate = new Date(attributes.endDate);
      }

      if (endDate <= now) {
        // Countdown ends
        element.find(".day").html("00");
        element.find(".hour").html("00");
        element.find(".minute").html("00");
        element.find(".second").html("00");

        if (attributes.endOptions.type === "text") {
          element.find("#offer-wrap").addClass("display-none");
          element
            .find(".countdown-timer__end-text-wrap")
            .removeClass("display-none");
        }

        return;
      }

      let remainingMs = endDate - now;

      let days = 0;
      let hours = 0;
      let minutes = 0;
      let seconds = 0;

      days = Math.floor(remainingMs / (1000 * 60 * 60 * 24));
      remainingMs %= 1000 * 60 * 60 * 24;

      hours = Math.floor(remainingMs / (1000 * 60 * 60));
      remainingMs %= 1000 * 60 * 60;

      minutes = Math.floor(remainingMs / (1000 * 60));
      remainingMs %= 1000 * 60;

      seconds = Math.floor(remainingMs / 1000);

      element.find(".day").html(String(days).padStart(2, "0"));
      element.find(".hour").html(String(hours).padStart(2, "0"));
      element.find(".minute").html(String(minutes).padStart(2, "0"));
      element.find(".second").html(String(seconds).padStart(2, "0"));

      setTimeout(() => updateCounter(attributes, element), 1000);
    }

    updateCounter(attributes, element);
  };
})(jQuery);
