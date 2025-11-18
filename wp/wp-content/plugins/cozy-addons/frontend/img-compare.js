(function ($) {
  window["cozyBlockImgCompare"] = (e) => {
    const element = $(`#${e}`);

    const attributes = window[e];

    // If the comparison slider is present on the page lets initialise it, this is good you will include this in the main js to prevent the code from running when not needed
    if (element.find(".comparison-slider")[0]) {
      if (attributes.direction === "horizontal") {
        let compSlider = element.find(".comparison-slider");

        //let's loop through the sliders and initialise each of them
        compSlider.each(function () {
          let compSliderWidth = $(this).width() + "px";
          $(this).find(".resize img").css({ width: compSliderWidth });
          setElementDragHorizontal(
            $(this).find(".divider"),
            $(this).find(".resize"),
            $(this)
          );
        });

        //if the user resizes the windows lets update our variables and resize our images
        $(window).on("resize", function () {
          let compSliderWidth = compSlider.width() + "px";
          compSlider.find(".resize img").css({ width: compSliderWidth });
        });
      }

      if (attributes.direction === "vertical") {
        let compSlider = element.find(".comparison-slider");

        //let's loop through the sliders and initialise each of them
        compSlider.each(function () {
          let compSliderWidth = $(this).height() + "px";
          $(this).find(".resize img").css({ height: compSliderWidth });
          setElementDragVertical(
            $(this).find(".divider"),
            $(this).find(".resize"),
            $(this)
          );
        });

        //if the user resizes the windows lets update our variables and resize our images
        $(window).on("resize", function () {
          let compSliderWidth = compSlider.height() + "px";
          compSlider.find(".resize img").css({ height: compSliderWidth });
        });
      }
    }

    // This is where all the magic happens
    // This is a modified version of the pen from Ege Görgülü - https://codepen.io/bamf/pen/jEpxOX - and you should check it out too.
    function setElementDragHorizontal(dragElement, resizeElement, container) {
      dragElement.on("mousedown touchstart", function (e) {
        e.preventDefault();
        dragElement.addClass("draggable");
        resizeElement.addClass("resizable");

        let startX = e.pageX || e.originalEvent.touches[0].pageX;
        let dragWidth = dragElement.outerWidth();
        let posX = dragElement.offset().left + dragWidth - startX;
        let containerOffset = container.offset().left;
        let containerWidth = container.outerWidth();
        let minLeft = containerOffset + 10;
        let maxLeft = containerOffset + containerWidth - dragWidth - 10;

        // Bind move events only within the current container.
        container.on("mousemove touchmove", function (e) {
          let moveX = e.pageX || e.originalEvent.touches[0].pageX;
          let leftValue = moveX + posX - dragWidth;

          if (leftValue < minLeft) leftValue = minLeft;
          if (leftValue > maxLeft) leftValue = maxLeft;

          let widthValue =
            ((leftValue + dragWidth / 2 - containerOffset) * 100) /
              containerWidth +
            "%";

          dragElement.css("left", widthValue);
          resizeElement.css("width", widthValue);
        });

        // Unbind events when interaction ends.
        $(document).on("mouseup touchend touchcancel", function () {
          dragElement.removeClass("draggable");
          resizeElement.removeClass("resizable");
          container.off("mousemove touchmove");
        });
      });
    }

    function setElementDragVertical(dragElement, resizeElement, container) {
      dragElement.on("mousedown touchstart", function (e) {
        e.preventDefault();
        dragElement.addClass("draggable");
        resizeElement.addClass("resizable");

        let startY = e.pageY || e.originalEvent.touches[0].pageY;
        let dragHeight = dragElement.outerHeight();
        let posY = dragElement.offset().top + dragHeight - startY;
        let containerOffset = container.offset().top;
        let containerHeight = container.outerHeight();
        let minTop = containerOffset + 10;
        let maxTop = containerOffset + containerHeight - dragHeight - 10;

        // Bind move events only within the current container.
        container.on("mousemove touchmove", function (e) {
          let moveY = e.pageY || e.originalEvent.touches[0].pageY;
          let topValue = moveY + posY - dragHeight;

          if (topValue < minTop) topValue = minTop;
          if (topValue > maxTop) topValue = maxTop;

          let heightValue =
            ((topValue + dragHeight / 2 - containerOffset) * 100) /
              containerHeight +
            "%";

          dragElement.css("top", heightValue);
          resizeElement.css("height", heightValue);
        });

        // Unbind events when interaction ends.
        $(document).on("mouseup touchend touchcancel", function () {
          dragElement.removeClass("draggable");
          resizeElement.removeClass("resizable");
          container.off("mousemove touchmove");
        });
      });
    }
  };
})(jQuery);
