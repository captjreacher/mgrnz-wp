(function ($) {
  window["cozyBlockTrendingPostsInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyBlock_${n}`];
    const blockID = `#cozyBlock_${n}`;

    if (blockOptions.display === "ticker") {
      const tickerAttr = {
        init: true,
        direction: "vertical",
        loop: blockOptions.sliderOptions.loop,
        autoplay: blockOptions.sliderOptions.autoplay,
        speed: blockOptions.sliderOptions.speed,
        slidesPerView: blockOptions.sliderOptions.slidesPerView,
        spaceBetween: blockOptions.sliderOptions.spaceBetween,
        navigation: {
          nextEl: `${blockID} .swiper-button-next`,
          prevEl: `${blockID} .swiper-button-prev`,
        },
      };

      if (blockOptions.sliderOptions.autoplay.status) {
        tickerAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
      } else {
        delete tickerAttr.autoplay;
      }

      new Swiper(blockID, tickerAttr);
    }

    if (blockOptions.display === "carousel") {
      const carouselAttr = {
        init: true,
        loop: blockOptions?.carouselOptions?.loop,
        autoplay: blockOptions?.carouselOptions?.autoplay,
        speed: blockOptions?.carouselOptions?.speed,
        slidesPerView: blockOptions?.carouselOptions?.slidesPerView,
        spaceBetween: blockOptions?.carouselOptions?.spaceBetween,
        navigation: {
          nextEl: `${blockID} .swiper-button-next`,
          prevEl: `${blockID} .swiper-button-prev`,
        },
        pagination: {
          el: `${blockID} .swiper-pagination`,
          clickable: true,
        },
        effect: blockOptions?.carouselOptions?.effect,
        breakpoints: {
          100: {
            slidesPerView: 1,
          },
          767: {
            slidesPerView:
              blockOptions.carouselOptions.slidesPerView <= 2
                ? blockOptions.carouselOptions.slidesPerView
                : 2,
          },
          1024: {
            slidesPerView:
              blockOptions.carouselOptions.slidesPerView <= 3
                ? blockOptions.carouselOptions.slidesPerView
                : 3,
          },
          1180: {
            slidesPerView: blockOptions.carouselOptions.slidesPerView,
          },
        },
      };

      if (blockOptions?.carouselOptions?.autoplay?.status) {
        carouselAttr.autoplay = {
          ...blockOptions?.carouselOptions?.autoplay,
        };
      } else {
        delete carouselAttr.autoplay;
      }

      new Swiper(blockID, carouselAttr);
    }

    if (
      (blockOptions.display === "grid" || blockOptions.display === "list") &&
      blockOptions?.ajaxLoader?.enabled
    ) {
      if (blockOptions?.ajaxLoader?.type === "default") {
        let offset = 0;
        $(blockID + " .cozy-block-trending-posts__ajax-loader").click(
          function () {
            var button = $(this);
            button.addClass("show-spinner");
            $.ajax({
              url: blockOptions.ajaxUrl,
              method: "POST",
              data: {
                action: "cozy_block_trending_posts_loader",
                nonce: blockOptions.nonce,
                offset: offset,
                attributes: JSON.stringify(blockOptions),
              },
              success: function (response) {
                if (!response.success) {
                  button.addClass("display-none");
                  return;
                }

                if (response.success && response.data) {
                  var $newPosts = $(response.data.render).hide(); // Hide new posts initially

                  if (blockOptions.display === "grid") {
                    $(
                      blockID + " .cozy-block-trending-posts__grid-wrapper"
                    ).append($newPosts);
                  }

                  if (blockOptions.display === "list") {
                    $(
                      blockID + " .cozy-block-trending-posts__list-wrapper"
                    ).append($newPosts);
                  }

                  // Fade in the new posts with animation
                  $newPosts.fadeIn(600); // Adjust duration as needed
                  button.removeClass("show-spinner");

                  offset += blockOptions.ajaxLoader.content;

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

      if (blockOptions?.ajaxLoader?.type === "scroll") {
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
            url: blockOptions.ajaxUrl,
            method: "POST",
            data: {
              action: "cozy_block_trending_posts_loader",
              nonce: blockOptions.nonce,
              offset: offset,
              attributes: JSON.stringify(blockOptions),
            },
            success: function (response) {
              if (!response.success) {
                $(".scroll-spinner").addClass("display-none");
              }
              if (response.success && response.data) {
                var $newPosts = $(response.data.render).hide(); // Hide new posts initially

                if (blockOptions.display === "grid") {
                  $(
                    blockID + " .cozy-block-trending-posts__grid-wrapper"
                  ).append($newPosts);
                }

                if (blockOptions.display === "list") {
                  $(
                    blockID + " .cozy-block-trending-posts__list-wrapper"
                  ).append($newPosts);
                }

                // Fade in the new posts with animation
                $newPosts.fadeIn(600); // Adjust duration as needed

                offset += blockOptions.ajaxLoader.content;
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
