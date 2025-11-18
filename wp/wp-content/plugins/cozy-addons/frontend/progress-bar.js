(function ($) {
  window["cozyBlockProgressBarInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProgressBar_${n}`];
    const progressBarClass = `#cozyBlock_${n}`;
    const cozyProgressBar = document.querySelector(progressBarClass);

    let progress = cozyProgressBar.querySelector(".progress");

    if (progress === null) {
      const prevSiblingDiv = cozyProgressBar.previousElementSibling;
      progress = prevSiblingDiv.querySelector(".progress");
    }

    const progressBar = cozyProgressBar.querySelector(".cozy-progress-bar");

    let animationTriggered = false;

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

    function addCounterAnimation() {
      if (
        blockOptions.layout === "default" &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        progressBar.style.width = `${blockOptions.progress}%`;
        progressBar.style.height = ``;
      }

      if (
        blockOptions.layout === "vertical" &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        progressBar.style.height = `${blockOptions.progress}%`;
        progressBar.style.width = ``;
      }

      if (
        blockOptions.layout === "circle" &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        const circleProgressBarStyles = [
          {
            property: "--circleProgressPercentage",
            value: blockOptions.progress + "%",
          },
        ];

        function animateProgressBar() {
          let currentProgress = 0;

          function updateProgressBar() {
            if (currentProgress >= blockOptions.progress) {
              cozyProgressBar.style.setProperty(
                circleProgressBarStyles[0].property,
                blockOptions.progress + "%"
              );
              progressBar.style.setProperty(
                "background",
                `conic-gradient(${blockOptions.layoutCircle.primaryColor} ${blockOptions.progress}%, ${blockOptions.layoutCircle.secondaryColor} ${blockOptions.progress}%)`
              );
            } else {
              cozyProgressBar.style.setProperty(
                circleProgressBarStyles[0].property,
                currentProgress + "%"
              );
              progressBar.style.setProperty(
                "background",
                `conic-gradient(${blockOptions.layoutCircle.primaryColor} ${currentProgress}%, ${blockOptions.layoutCircle.secondaryColor} ${blockOptions.progress}%)`
              );

              currentProgress += 1; // You can adjust the increment value
              requestAnimationFrame(updateProgressBar);
            }
          }

          updateProgressBar();
        }

        // Call the function to start the animation
        animateProgressBar();
      }

      if (
        progress &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        animationTriggered = true;

        const time = 500;

        const endTarget = blockOptions.progress
          ? parseFloat(blockOptions.progress).toFixed(1)
          : 0;

        let cleanStartValue = 0;

        const increaseBy = ((endTarget - cleanStartValue) / time) * 53;
        let timeoutIdInside;

        const timeoutId = setTimeout(() => {
          function updateCount() {
            cleanStartValue += increaseBy;
            progress.innerHTML =
              parseFloat(cleanStartValue).toFixed(1).toLocaleString() + "%";
            if (cleanStartValue < endTarget) {
              timeoutIdInside = setTimeout(() => {
                updateCount();
              }, 53);
            } else {
              progress.innerHTML = endTarget.toLocaleString() + "%";
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
