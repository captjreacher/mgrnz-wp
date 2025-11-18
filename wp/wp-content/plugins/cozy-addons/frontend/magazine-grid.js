(function ($) {
  window["cozyBlockMagazineGrid"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const attributes = window[`cozyBlock_${n}`];
    const blockID = `#cozyBlock_${n}`;
    if (
      !attributes.featuredPostOptions.enabled &&
      attributes.ajaxLoader.enabled
    ) {
      if (attributes.ajaxLoader.type === "default") {
        let offset = 0;
        $(blockID + " .cozy-block-magazine-grid__ajax-loader").click(
          function () {
            var button = $(this);
            button.addClass("show-spinner");
            $.ajax({
              url: attributes.ajaxUrl,
              method: "POST",
              data: {
                action: "cozy_block_magazine_grid_loader",
                nonce: attributes.nonce,
                offset: offset,
                attributes: JSON.stringify(attributes),
              },
              success: function (response) {
                if (!response.success) {
                  button.addClass("display-none");
                  return;
                }

                if (response.success && response.data) {
                  /* if (window.elementorFrontend) {
                    window.elementorFrontend.initElements();
                    console.log(window.elementorFrontend);
                  } */

                  var $newPosts = $(response.data.render).hide(); // Hide new posts initially
                  $(blockID + " .cozy-block-magazine-grid__posts").append(
                    $newPosts
                  );

                  // Fade in the new posts with animation
                  $newPosts.fadeIn(300); // Adjust duration as needed
                  button.removeClass("show-spinner");

                  offset += attributes.ajaxLoader.content;

                  if (parseInt(response.data.next_chunk_count) <= 0) {
                    button.addClass("display-none");
                  }
                }
              },
              error: function (error) {
                console.log("Unable to load data...");
              },
            });
          }
        );
      }

      if (attributes.ajaxLoader.type === "scroll") {
        const element = document.querySelector(
          blockID + ".has-infinite-scroll"
        );
        let isFetching = false; // Flag to prevent multiple AJAX requests
        let offset = 0; // Initialize offset
        let hasNextChunk = true;

        function isContainerNearingEnd(el) {
          var rect = el.getBoundingClientRect();
          var buffer = 200; // Adjust the buffer value as needed
          return (
            rect.bottom - buffer <=
            (window.innerHeight || document.documentElement.clientHeight)
          );
        }

        function fetchNewContent() {
          if (isFetching) return; // Exit if an AJAX request is already in progress

          isFetching = true; // Set the fetching flag to true
          $(".scroll-spinner").removeClass("display-none");
          $.ajax({
            url: attributes.ajaxUrl,
            method: "POST",
            data: {
              action: "cozy_block_magazine_grid_loader",
              nonce: attributes.nonce,
              offset: offset,
              attributes: JSON.stringify(attributes),
            },
            success: function (response) {
              if (!response.success) {
                $(".scroll-spinner").addClass("display-none");
              }
              if (response.success && response.data) {
                var $newPosts = $(response.data.render).hide(); // Hide new posts initially
                $(blockID + " .cozy-block-magazine-grid__posts").append(
                  $newPosts
                );

                // Fade in the new posts with animation
                $newPosts.fadeIn(600); // Adjust duration as needed

                offset += attributes.ajaxLoader.content;
                if (parseInt(response.data.next_chunk_count) <= 0) {
                  $(".scroll-spinner").addClass("display-none");
                  hasNextChunk = false;
                }
              }
            },
            error: function (error) {
              console.log("Unable to load data...");
            },
            complete: function () {
              isFetching = false; // Reset the fetching flag
              $(".scroll-spinner").addClass("display-none");
            },
          });
        }

        function debounce(func, wait) {
          let timeout;
          return function () {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, arguments), wait);
          };
        }

        const handleScroll = debounce(function () {
          if (isContainerNearingEnd(element) && hasNextChunk) {
            fetchNewContent();
          }
        }, 200); // Adjust the debounce delay as needed

        window.addEventListener("scroll", handleScroll);
      }
    }
  };
})(jQuery);
