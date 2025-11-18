(function ($) {
  window["cozyBlockContainerInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyContainer_${n}`];
    const containerClass = `#cozyBlock_${n}`;
    const cozyContainer = document.querySelector(containerClass);

    if (blockOptions.animation.effect === "none" && cozyContainer) {
      cozyContainer.classList.remove("visibility-none");
      // $(containerClass).removeClass('visibility-none');
    }
    const containerStyles = [
      {
        property: "--cozyContainerMargin",
        value: `${blockOptions.margin.top}px ${blockOptions.margin.right}px ${blockOptions.margin.bottom}px ${blockOptions.margin.left}px`,
      },
      {
        property: "--cozyContainerPadding",
        value: `${blockOptions.padding.top}px ${blockOptions.padding.right}px ${blockOptions.padding.bottom}px ${blockOptions.padding.left}px`,
      },
      {
        property: "--cozyContainerBorderRadius",
        value: `${blockOptions.borderRadius.topL}px ${blockOptions.borderRadius.topR}px ${blockOptions.borderRadius.bottomR}px ${blockOptions.borderRadius.bottomL}px`,
      },
      {
        property: "--cozyContainerBorderRadiusHover",
        value: `${
          blockOptions.borderRadiusHover.topL.length !== 0
            ? blockOptions.borderRadiusHover.topL
            : blockOptions.borderRadius.topL
        }px ${
          blockOptions.borderRadiusHover.topR.length !== 0
            ? blockOptions.borderRadiusHover.topR
            : blockOptions.borderRadius.topR
        }px ${
          blockOptions.borderRadiusHover.bottomR.length !== 0
            ? blockOptions.borderRadiusHover.bottomR
            : blockOptions.borderRadius.bottomR
        }px ${
          blockOptions.borderRadiusHover.bottomL.length !== 0
            ? blockOptions.borderRadiusHover.bottomL
            : blockOptions.borderRadius.bottomL
        }px`,
      },
      {
        property: "--cozyContainerZIndex",
        value: blockOptions.zIndex,
      },
      {
        property: "--cozyContainerEffectFade",
        value: `cozyFade ${blockOptions.animation.duration}s forwards ${blockOptions.animation.delay}s`,
      },
    ];

    if (blockOptions.backgroundColorHover.length > 0) {
      containerStyles.push({
        property: "--cozyContainerBgColorHover",
        value: blockOptions.backgroundColorHover,
      });
    } else {
      containerStyles.push({
        property: "--cozyContainerBgColorHover",
        value: blockOptions.backgroundColor,
      });
    }

    if (blockOptions.border.type !== "none") {
      containerStyles.push({
        property: "--cozyContainerBorderWidth",
        value: `${blockOptions.border.widthDimension.top}px ${blockOptions.border.widthDimension.right}px ${blockOptions.border.widthDimension.bottom}px ${blockOptions.border.widthDimension.left}px`,
      });
      containerStyles.push({
        property: "--cozyContainerBorderType",
        value: blockOptions.border.type,
      });
      containerStyles.push({
        property: "--cozyContainerBorderColor",
        value: blockOptions.border.color,
      });
    }

    if (blockOptions.borderHover.type !== "none") {
      containerStyles.push({
        property: "--cozyContainerBorderWidthHover",
        value: `${blockOptions.borderHover.widthDimension.top}px ${blockOptions.borderHover.widthDimension.right}px ${blockOptions.borderHover.widthDimension.bottom}px ${blockOptions.borderHover.widthDimension.left}px`,
      });
      containerStyles.push({
        property: "--cozyContainerBorderTypeHover",
        value: blockOptions.borderHover.type,
      });
      if (blockOptions.borderHover.color.length > 0) {
        containerStyles.push({
          property: "--cozyContainerBorderColorHover",
          value: blockOptions.borderHover.color,
        });
      } else {
        containerStyles.push({
          property: "--cozyContainerBorderColorHover",
          value: blockOptions.border.color,
        });
      }
    }

    if (blockOptions.boxShadow.position.length > 0) {
      containerStyles.push({
        property: "--cozyContainerBoxShadow",
        value: `${blockOptions.boxShadow.horizontal}px ${blockOptions.boxShadow.vertical}px ${blockOptions.boxShadow.blur}px ${blockOptions.boxShadow.spread}px ${blockOptions.boxShadow.color} inset`,
      });
    } else {
      containerStyles.push({
        property: "--cozyContainerBoxShadow",
        value: `${blockOptions.boxShadow.horizontal}px ${blockOptions.boxShadow.vertical}px ${blockOptions.boxShadow.blur}px ${blockOptions.boxShadow.spread}px ${blockOptions.boxShadow.color}`,
      });
    }

    if (blockOptions.boxShadowHover.position.length > 0) {
      containerStyles.push({
        property: "--cozyContainerBoxShadowHover",
        value: `${blockOptions.boxShadowHover.horizontal}px ${blockOptions.boxShadowHover.vertical}px ${blockOptions.boxShadowHover.blur}px ${blockOptions.boxShadowHover.spread}px ${blockOptions.boxShadowHover.color} inset`,
      });
    } else {
      containerStyles.push({
        property: "--cozyContainerBoxShadowHover",
        value: `${blockOptions.boxShadowHover.horizontal}px ${blockOptions.boxShadowHover.vertical}px ${blockOptions.boxShadowHover.blur}px ${blockOptions.boxShadowHover.spread}px ${blockOptions.boxShadowHover.color}`,
      });
    }

    if (blockOptions.animation.effect === "fade") {
      switch (blockOptions.animation.direction) {
        case "left":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateX(-${blockOptions.animation.gap}px)`,
          });
          break;

        case "right":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateX(${blockOptions.animation.gap}px)`,
          });
          break;

        case "top":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateY(-${blockOptions.animation.gap}px)`,
          });
          break;

        case "bottom":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateY(${blockOptions.animation.gap}px)`,
          });
          break;

        default:
          break;
      }
    }

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

    function addFadeAnimation() {
      if (isElementInViewport(cozyContainer)) {
        if (blockOptions.animation.effect !== "none") {
          cozyContainer.classList.add(
            "effect-" + blockOptions.animation.effect
          );
          cozyContainer.classList.remove("visibility-none");
        }
      }
    }

    function observeCozyContainer(entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          cozyContainer.classList.add(
            "effect-" + blockOptions.animation.effect
          );
          cozyContainer.classList.remove("visibility-none");
        }
      });
    }
    // addFadeAnimation();
    const observer = new IntersectionObserver(observeCozyContainer, {
      root: null, // Use the viewport as the root
      rootMargin: "0px",
      threshold: 0.5,
    });

    function observeElement() {
      observer.observe(cozyContainer);
    }
    observeElement();

    const observerConfig = {
      childList: true, // Watch for changes in the children of the observed element
      subtree: true, // Watch for changes in the entire subtree
    };

    const domObserver = new MutationObserver(() => {
      // Disconnect the previous observer
      observer.disconnect();
      // Re-observe the target element
      observeElement();
    });

    // Start observing the document's DOM changes
    domObserver.observe(document, observerConfig);

    window.addEventListener("scroll", addFadeAnimation);

    containerStyles.forEach((style) => {
      cozyContainer.style.setProperty(style.property, style.value);
      // $(containerClass).css(style.property, style.value);
    });

    if (
      blockOptions.position === "sticky" ||
      blockOptions.position === "fixed"
    ) {
      window.addEventListener("scroll", function () {
        // For fixed positioning:
        if (blockOptions.position === "fixed") {
          const stickyDiv = $(containerClass).find(
            ".wp-block-cozy-block-container"
          );

          if (this.window.scrollY > 0) {
            // The stickyDiv has touched or passed the top of the window
            stickyDiv.attr("style", function (i, style) {
              /// If no background property exists, just add the background style
              if (!style || !style.includes("background")) {
                return (
                  style +
                  `;background: ${blockOptions.stickyStyles.bgColor} !important;`
                );
              }
              // If background already exists, replace it with the new one
              return (
                style.replace(/background:[^;]+;/, "") +
                `background: ${blockOptions.stickyStyles.bgColor} !important;`
              );
            });
          } else {
            // Reset the background if the element is back at the top
            stickyDiv.css("background", "initial");
          }
        }

        // For sticky positioning:
        if (blockOptions.position === "sticky") {
          const stickyDiv = document.querySelector(
            ".cozy-block-wrapper.position-sticky " + containerClass
          );
          const rect = stickyDiv.getBoundingClientRect();

          if (rect.top <= 0) {
            // The cozyContainer background is set when stickyDiv is at top
            cozyContainer.style.setProperty(
              "background",
              blockOptions.stickyStyles.bgColor
            );
          } else {
            // Reset the cozyContainer background if stickyDiv is not at the top
            cozyContainer.style.setProperty("background", "");
          }
        }
      });
    }
  };
})(jQuery);
