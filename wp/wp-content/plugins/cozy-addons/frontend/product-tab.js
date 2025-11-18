(function ($) {
  window["cozyBlockProductTab"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const attributes = window[`cozyBlock_${n}`];
    const blockID = `#cozyBlock_${n}`;

    function changeTab(index) {
      // Get all tabs and tab contents
      var tabs = $(blockID + " .cozy-block__product-tab");
      var contents = $(blockID + " .cozy-block-product-tab__body");

      // Remove active class from all tabs and contents
      tabs.removeClass("active-tab");
      contents.removeClass("active-content");

      // Add active class to the selected tab and content
      tabs.eq(index).addClass("active-tab");
      contents.eq(index).addClass("active-content");
    }

    // Bind click event to tabs
    $(blockID + " .cozy-block__product-tab").click(function () {
      var tabIndex = $(this).data("index");
      changeTab(tabIndex);
    });

    /* Add to cart button */
    if (attributes.enableOptions.cartButton) {
      $(blockID + " .post__cart-button").on("click", function () {
        const productId = $(this).attr("data-product-id");
        const itemContainer = $(
          `.cozy-block-product[data-product-id="${productId}"]`
        );
        const loaderIcon = $(this).find(".loader-icon");
        const buttonLabel = $(this).find(".cart-button__label");

        $(buttonLabel).addClass("display-none");
        $(loaderIcon).removeClass("display-none");

        $.ajax({
          url: attributes.ajaxUrl,
          method: "POST",
          data: {
            action: "cozy_block_wishlist_add_to_cart",
            cartNonce: attributes.cartNonce,
            productId: productId,
          },
          success: function (response) {
            $(loaderIcon).addClass("display-none");
            $(buttonLabel).removeClass("display-none");

            if (response.success) {
              // Trigger Toast Message
              $(itemContainer).find("#cross-icon").css("display", "none");
              $(itemContainer)
                .find(".post__toast")
                .removeClass("visibility-hidden");
              $(itemContainer).find(".post__toast").addClass("is-success");
              $(itemContainer).find("#tick-icon").css("display", "inline-flex");
              $(itemContainer).find(".toast__message").html("Cart Updated!");

              setTimeout(() => {
                $(itemContainer)
                  .find(".post__toast")
                  .addClass("visibility-hidden");
                $(itemContainer).find(".post__toast").removeClass("is-success");
              }, 2500);
            } else {
              // Trigger Toast Message
              $(itemContainer).find("#tick-icon").css("display", "none");
              $(itemContainer)
                .find(".post__toast")
                .removeClass("visibility-hidden");
              $(itemContainer).find(".post__toast").addClass("is-error");
              $(itemContainer)
                .find("#cross-icon")
                .css("display", "inline-flex");
              $(itemContainer)
                .find(".toast__message")
                .html("Sorry! Cannot purchase this product.");

              setTimeout(() => {
                $(itemContainer)
                  .find(".post__toast")
                  .addClass("visibility-hidden");
                $(itemContainer).find(".post__toast").removeClass("is-error");
              }, 2500);
            }
          },
          error: function (error) {
            console.log("Unable to add to cart...");
          },
        });
      });
    }

    /* Icon Clicks */
    // Cart Icon
    if (attributes.enableOptions.cart) {
      $(
        blockID + " .cozy-block-product-tab__icon-wrapper.cart__icon-wrapper"
      ).on("click", function () {
        const productId = $(this).attr("data-product-id");
        const itemContainer = $(
          `.cozy-block-product[data-product-id="${productId}"]`
        );

        $.ajax({
          url: attributes.ajaxUrl,
          method: "POST",
          data: {
            action: "cozy_block_wishlist_add_to_cart",
            cartNonce: attributes.cartNonce,
            productId: productId,
          },
          success: function (response) {
            if (response.success) {
              // Trigger Toast Message
              $(itemContainer).find("#cross-icon").css("display", "none");
              $(itemContainer)
                .find(".post__toast")
                .removeClass("visibility-hidden");
              $(itemContainer).find(".post__toast").addClass("is-success");
              $(itemContainer).find("#tick-icon").css("display", "inline-flex");
              $(itemContainer).find(".toast__message").html("Cart Updated!");

              setTimeout(() => {
                $(itemContainer)
                  .find(".post__toast")
                  .addClass("visibility-hidden");
                $(itemContainer).find(".post__toast").removeClass("is-success");
              }, 2500);
            } else {
              // Trigger Toast Message
              $(itemContainer).find("#tick-icon").css("display", "none");
              $(itemContainer)
                .find(".post__toast")
                .removeClass("visibility-hidden");
              $(itemContainer).find(".post__toast").addClass("is-error");
              $(itemContainer)
                .find("#cross-icon")
                .css("display", "inline-flex");
              $(itemContainer)
                .find(".toast__message")
                .html("Sorry! Cannot purchase this product.");

              setTimeout(() => {
                $(itemContainer)
                  .find(".post__toast")
                  .addClass("visibility-hidden");
                $(itemContainer).find(".post__toast").removeClass("is-error");
              }, 2500);
            }
          },
          error: function (error) {
            console.log("Unable to add to cart...");
          },
        });
      });
    }

    // Wishlist Icon
    if (attributes.enableOptions.wishlist) {
      function getLocalWishlist() {
        let wishlist =
          JSON.parse(localStorage.getItem("cozy_block_wishlist_data")) || [];
        return wishlist;
      }

      // Add/remove active class from the wishlist icon wrapper div local data.
      if (!attributes.isUserLoggedIn) {
        const wishlistData = getLocalWishlist();

        wishlistData.forEach((productID) => {
          if (wishlistData.includes(productID)) {
            $(
              blockID +
                ' .wishlist__icon-wrapper[data-product-id="' +
                productID +
                '"]'
            ).addClass("is-active");
          } else {
            $(
              blockID +
                ' .wishlist__icon-wrapper[data-product-id="' +
                productID +
                '"]'
            ).removeClass("is-active");
          }
        });
      }

      $(
        blockID +
          " .cozy-block-product-tab__icon-wrapper.wishlist__icon-wrapper"
      ).on("click", function () {
        const productId = parseInt($(this).attr("data-product-id"));

        const itemContainer = $(
          `.cozy-block-product[data-product-id="${productId}"]`
        );

        if (!attributes.isUserLoggedIn) {
          // Function to toggle product ID in the wishlist
          function updateLocalWishlist(productId) {
            let wishlist =
              JSON.parse(localStorage.getItem("cozy_block_wishlist_data")) ||
              [];

            // Check if productId is already in the wishlist
            if (wishlist.includes(productId)) {
              // Remove the productId from the wishlist
              wishlist = wishlist.filter(
                (id) => parseInt(id) !== parseInt(productId)
              );
            } else {
              // Add the productId to the wishlist
              wishlist.push(productId);
            }

            // Update the localStorage with the new wishlist
            localStorage.setItem(
              "cozy_block_wishlist_data",
              JSON.stringify(wishlist)
            );
          }

          updateLocalWishlist(productId);

          const wishlistData = getLocalWishlist();

          if (wishlistData.includes(productId)) {
            $(
              '.wishlist__icon-wrapper[data-product-id="' + productId + '"]'
            ).addClass("is-active");
          } else {
            $(
              '.wishlist__icon-wrapper[data-product-id="' + productId + '"]'
            ).removeClass("is-active");
          }

          // Update Sidebar Count
          const wishlistCount = document.querySelector(
            ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
          );
          if (wishlistCount) {
            wishlistCount.innerHTML = wishlistData.length;
          }

          // Trigger Toast Message
          $(itemContainer).find("#cross-icon").css("display", "none");
          $(itemContainer)
            .find(".post__toast")
            .removeClass("visibility-hidden");
          $(itemContainer).find(".post__toast").addClass("is-success");
          $(itemContainer).find("#tick-icon").css("display", "inline-flex");
          $(itemContainer).find(".toast__message").html("Wishlist Updated!");

          setTimeout(() => {
            $(itemContainer).find(".post__toast").addClass("visibility-hidden");
            $(itemContainer).find(".post__toast").removeClass("is-success");
          }, 2500);
        } else {
          function removeFromWishlist(el) {
            if (attributes.isUserLoggedIn) {
              $.ajax({
                url: attributes.ajaxUrl,
                method: "POST",
                data: {
                  action: "cozy_block_wishlist_update_user_wishlist",
                  wishlistNonce: attributes.wishlistNonce,
                  productId: productId,
                  userId: attributes.userID,
                },
                success: function (response) {
                  if (
                    response.data.user_wishlist.includes(parseInt(productId))
                  ) {
                    $(
                      '.wishlist__icon-wrapper[data-product-id="' +
                        productId +
                        '"]'
                    ).addClass("is-active");
                  } else {
                    $(
                      '.wishlist__icon-wrapper[data-product-id="' +
                        productId +
                        '"]'
                    ).removeClass("is-active");
                  }

                  $(
                    ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
                  ).html(response.data.user_wishlist.length);

                  if (response.data.user_wishlist.length <= 0) {
                    $(".cozy-block-wishlist__sidebar-body").html("");
                  }

                  updateSidebarRender(response.data.user_wishlist);
                },
                error: function (error) {
                  console.log("Unable to update wishlist...");
                },
              });
            }
          }

          // Update Sidebar Render Data
          function updateSidebarRender(wishlistData) {
            if (wishlistData.length > 0) {
              $.ajax({
                url: attributes.ajaxUrl,
                method: "POST",
                data: {
                  action: "cozy_block_wishlist_render_data_sidebar",
                  sidebarNonce: attributes.sidebarNonce,
                  wishlistData: JSON.stringify(wishlistData),
                },
                success: function (response) {
                  if (response.data) {
                    $(".cozy-block-wishlist__sidebar-body").html(
                      response.data.render
                    );

                    // Add to Cart
                    $(".cozy-block-wishlist__sidebar-button.add__cart").on(
                      "click",
                      function () {
                        addToCart(this);
                      }
                    );

                    // Remove from Wishlist
                    $(
                      ".cozy-block-wishlist__sidebar-button.remove__wishlist"
                    ).on("click", function (e) {
                      $(this).addClass("opacity-50");
                      removeFromWishlist(this);
                    });
                  }
                },
                error: function (error) {
                  console.log("Unable to load data...");
                },
              });
            }
          }

          // Update Wishlist Ajax Call
          $.ajax({
            url: attributes.ajaxUrl,
            method: "POST",
            data: {
              action: "cozy_block_wishlist_update_user_wishlist",
              wishlistNonce: attributes.wishlistNonce,
              productId: productId,
              userId: attributes.userID,
            },
            success: function (response) {
              if (response.data.user_wishlist.includes(productId)) {
                $(
                  '.wishlist__icon-wrapper[data-product-id="' + productId + '"]'
                ).addClass("is-active");
              } else {
                $(
                  '.wishlist__icon-wrapper[data-product-id="' + productId + '"]'
                ).removeClass("is-active");
              }

              $(
                ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
              ).html(response.data.user_wishlist.length);

              updateSidebarRender(response.data.user_wishlist);

              // Trigger Toast Message
              $(itemContainer).find("#cross-icon").css("display", "none");
              $(itemContainer)
                .find(".post__toast")
                .removeClass("visibility-hidden");
              $(itemContainer).find(".post__toast").addClass("is-success");
              $(itemContainer).find("#tick-icon").css("display", "inline-flex");
              $(itemContainer)
                .find(".toast__message")
                .html("Wishlist Updated!");

              setTimeout(() => {
                $(itemContainer)
                  .find(".post__toast")
                  .addClass("visibility-hidden");
                $(itemContainer).find(".post__toast").removeClass("is-success");
              }, 2500);
            },
            error: function (error) {
              console.log("Unable to update wishlist...");
            },
          });
        }
      });
    }

    // Quick View
    if (attributes.enableOptions.quickView) {
      $(blockID + " .quick-view__icon-wrapper").on("click", function () {
        const productId = parseInt($(this).attr("data-product-id"));

        $(blockID + " .spinner").removeClass("visibility-hidden");

        if (attributes.display === "carousel") {
          carousel.autoplay.stop();
        }

        let lightboxWrapper = $(blockID + " .quick-view__lightbox-wrapper");
        let body = $("body");
        lightboxWrapper.removeClass("visibility-hidden");
        body.addClass("overflow-hidden");

        $(blockID + " .quick-view__lightbox-body-wrapper").on(
          "click",
          function (event) {
            if (event.target === this) {
              $(blockID + " .quick-view__lightbox-wrapper").addClass(
                "visibility-hidden"
              );
              $("body").removeClass("overflow-hidden");

              $(blockID + " .quick-view__lightbox-body").html("");
            }
          }
        );

        // Get the render data
        $.ajax({
          url: attributes.ajaxUrl,
          method: "POST",
          data: {
            action: "cozy_block_quick_view_lightbox_render",
            quickViewNonce: attributes.quickViewNonce,
            productId: productId,
            attributes: JSON.stringify(attributes),
          },
          success: function (response) {
            $(blockID + " .spinner").addClass("visibility-hidden");

            $(blockID + " .quick-view__lightbox-body").html(
              response.data.render
            );

            // Close lightbox
            $(blockID + " .lightbox__close-button").on("click", function () {
              console.log("Closing Lightbox...");

              lightboxWrapper.addClass("visibility-hidden");
              body.removeClass("overflow-hidden");

              $(blockID + " .quick-view__lightbox-body").html("");

              if (attributes.display === "carousel") {
                carousel.autoplay.start();
              }
            });

            // Increase quantity
            $(blockID + " .quantity__increase").on("click", function () {
              console.log("Adding 1...");

              let quantity = Math.abs(
                parseInt($(blockID + " .quick-view__quantity-input").val())
              );
              $(blockID + " .quick-view__quantity-input").val(quantity + 1);

              const newQuantity = quantity + 1;

              if (newQuantity > 1) {
                $(blockID + " .quantity__decrease").removeClass("opacity-50");
              }
            });

            // Decrease quantity
            $(blockID + " .quantity__decrease").click(function () {
              let quantity = Math.abs(
                parseInt($(blockID + " .quick-view__quantity-input").val())
              );
              const newQuantity = quantity - 1;

              if (newQuantity > 0) {
                $(blockID + " .quick-view__quantity-input").val(quantity - 1);
              } else {
                $(blockID + " .quick-view__quantity-input").val(1);
              }

              if (newQuantity <= 1) {
                $(this).addClass("opacity-50");
              } else {
                $(this).removeClass("opacity-50");
              }
            });

            // Add to cart
            $(blockID + " .quick-view__cart-button").on("click", function () {
              const loaderIcon = $(this).find(".loader-icon");
              const buttonLabel = $(this).find(".cart-button__label");

              $(loaderIcon).removeClass("display-none");
              $(buttonLabel).addClass("display-none");

              $.ajax({
                url: attributes.ajaxUrl,
                method: "POST",
                data: {
                  action: "cozy_block_wishlist_add_to_cart",
                  cartNonce: attributes.cartNonce,
                  productId: productId,
                  productQuantity: parseInt(
                    $(blockID + " .quick-view__quantity-input").val()
                  ),
                },
                success: function (response) {
                  $(loaderIcon).addClass("display-none");
                  $(buttonLabel).removeClass("display-none");

                  if (response.success) {
                    // Trigger Toast Message
                    $(blockID + " .quick-view__cart-tooltip").removeClass(
                      "is-error"
                    );
                    $(blockID + " .quick-view__cart-tooltip").removeClass(
                      "visibility-hidden"
                    );
                    $(blockID + " .quick-view__cart-tooltip").addClass(
                      "is-success"
                    );
                    $(blockID + " .quick-view__cart-tooltip").html(
                      "Cart Updated!"
                    );
                    setTimeout(() => {
                      $(blockID + " .quick-view__cart-tooltip").addClass(
                        "visibility-hidden"
                      );
                    }, 2000);
                  } else {
                    // Trigger Toast Message
                    $(blockID + " .quick-view__cart-tooltip").removeClass(
                      "is-success"
                    );
                    $(blockID + " .quick-view__cart-tooltip").removeClass(
                      "visibility-hidden"
                    );
                    $(blockID + " .quick-view__cart-tooltip").addClass(
                      "is-error"
                    );
                    $(blockID + " .quick-view__cart-tooltip").html(
                      "Sorry! Cannot purchase this product."
                    );
                    setTimeout(() => {
                      $(blockID + " .quick-view__cart-tooltip").addClass(
                        "visibility-hidden"
                      );
                    }, 2000);
                  }
                },
                error: function (error) {
                  console.log("Unable to add to cart...");
                },
              });
            });

            const swiperContainer = document.querySelector(
              blockID + " .quick-view__rating.swiper__container"
            );
            const prev = document.querySelector(
              blockID + " .quick-view__lightbox-body .swiper-button-prev"
            );
            const next = document.querySelector(
              blockID + " .quick-view__lightbox-body .swiper-button-next"
            );
            const bullets = document.querySelector(
              blockID + " .quick-view__lightbox-body .swiper-pagination"
            );

            /* Rating Slider */
            const sliderAttr = {
              init: true,
              slidesPerView: 1,
              loop: true,
              autoplay: {
                delay: 1500,
                pauseOnMouseEnter: true,
              },
              speed: 2000,
              // navigation: {
              //   prevEl: prev,
              //   nextEl: next,
              // },
              pagination: {
                el: bullets,
                clickable: true,
              },
            };

            const ratingSlider = new Swiper(swiperContainer, sliderAttr);
          },
          error: function (error) {
            console.log("Unable to add to cart...");
          },
        });
      });
    }
  };
})(jQuery);
