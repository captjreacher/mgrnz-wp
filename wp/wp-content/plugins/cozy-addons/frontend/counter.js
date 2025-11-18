(function ($) {
  window["cozyBlockCounterInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyCounter_${n}`];
    const counterClass = `#cozyBlock_${n}`;
    const cozyCounter = document.querySelector(counterClass);

    const counter = cozyCounter.querySelector("span");

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
          (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    let animationTriggered = false;

    function addCounterAnimation() {
      if (!animationTriggered && isElementInViewport(cozyCounter)) {
        animationTriggered = true;

        const time =
          blockOptions.animationDuration &&
          Math.floor(Math.abs(blockOptions.animationDuration)) > 499
            ? Math.floor(Math.abs(blockOptions.animationDuration)) - 200
            : 300;

        const endTarget = blockOptions.endNumber
          ? Math.floor(Math.abs(blockOptions.endNumber))
          : 0;

        let cleanStartValue = 0;

        const increaseBy = ((endTarget - cleanStartValue) / time) * 53;
        let timeoutIdInside;

        const timeoutId = setTimeout(() => {
          function updateCount() {
            cleanStartValue += increaseBy;
            counter.innerHTML = Math.floor(cleanStartValue).toLocaleString();
            if (cleanStartValue < endTarget) {
              timeoutIdInside = setTimeout(() => {
                updateCount();
              }, 53);
            } else {
              counter.innerHTML = Math.floor(endTarget).toLocaleString();
            }
          }
          updateCount();
        }, 200);

        return () => {
          clearTimeout(timeoutId);
          clearTimeout(timeoutIdInside);
        };
      }
    }
    addCounterAnimation();

    window.addEventListener("scroll", addCounterAnimation);
  };
})(jQuery);
