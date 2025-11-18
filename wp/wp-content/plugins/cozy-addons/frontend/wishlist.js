(function ($) {
  window["cozyBlockWishlist"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const attributes = window[`cozyBlock_${n}`];
    const blockID = `#cozyBlock_${n}`;

    function getLocalWishlist() {
      let wishlist =
        JSON.parse(localStorage.getItem("cozy_block_wishlist_data")) || [];
      return wishlist;
    }

    // Function to toggle product ID in the wishlist
    function removeLocalWishlist(productId) {
      let wishlist =
        JSON.parse(localStorage.getItem("cozy_block_wishlist_data")) || [];

      // Check if productId is already in the wishlist
      if (wishlist.includes(productId)) {
        // Remove the productId from the wishlist
        wishlist = wishlist.filter(
          (id) => parseInt(id) !== parseInt(productId)
        );
      }

      // Update the localStorage with the new wishlist
      localStorage.setItem(
        "cozy_block_wishlist_data",
        JSON.stringify(wishlist)
      );
    }

    function addToCart(el) {
      const productId = $(el).attr("data-product-id");
      $.ajax({
        url: attributes.ajaxUrl,
        method: "POST",
        data: {
          action: "cozy_block_wishlist_add_to_cart",
          cartNonce: attributes.cartNonce,
          productId: productId,
        },
        success: function (response) {
          // Add to Cart
          $(blockID + " .cozy-block-wishlist__sidebar-button.add__cart").on(
            "click",
            function () {
              addToCart(this);
            }
          );

          // Trigger Toast Message
          const variationClass = "variation-" + attributes.variation;
          $(
            ".cozy-block-wishlist." +
              variationClass +
              " .cozy-block-wishlist__toast"
          ).html("Cart Updated!");
          $(
            ".cozy-block-wishlist." +
              variationClass +
              " .cozy-block-wishlist__toast"
          ).removeClass("visibility-hidden");
          setTimeout(() => {
            $(
              ".cozy-block-wishlist." +
                variationClass +
                " .cozy-block-wishlist__toast"
            ).addClass("visibility-hidden");
          }, 2000);
        },
        error: function (error) {
          console.log("Unable to add to cart...");
        },
      });
    }

    function arraysAreDifferent(array1, array2) {
      if (array1.length !== array2.length) {
        return true;
      }

      let set2 = new Set(array2);
      return (
        array1.some((item) => !set2.has(item)) ||
        array2.some((item) => !new Set(array1).has(item))
      );
    }

    if (attributes.variation === "sidebar") {
      function closeSidebar() {
        $(blockID + " .cozy-block-wishlist__sidebar-wrapper").addClass(
          "visibility-hidden"
        );
        $("body").removeClass("overflow-hidden");
      }

      function updateSidebarRender(wishlistData = []) {
        if (!attributes.isUserLoggedIn) {
          const wishlistData = getLocalWishlist();

          if (wishlistData.length > 0) {
            $.ajax({
              url: attributes.ajaxUrl,
              method: "POST",
              data: {
                action: "cozy_block_wishlist_render_data_sidebar",
                sidebarNonce: attributes.sidebarNonce,
                attributes: attributes,
                wishlistData: JSON.stringify(wishlistData),
              },
              success: function (response) {
                if (response.data) {
                  $(blockID + " .cozy-block-wishlist__sidebar-body").append(
                    response.data.render
                  );
                }

                // Add to Cart
                $(
                  blockID + " .cozy-block-wishlist__sidebar-button.add__cart"
                ).on("click", function () {
                  addToCart(this);
                });

                // Remove from Wishlist
                $(
                  blockID +
                    " .cozy-block-wishlist__sidebar-button.remove__wishlist"
                ).on("click", function (e) {
                  $(this).addClass("opacity-50");
                  console.log("Removing from Local...");

                  const productId = $(this).attr("data-product-id");
                  removeLocalWishlist(parseInt(productId));
                  $(
                    ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__product-data.post-" +
                      productId
                  ).remove();

                  const updatedWishlistData = getLocalWishlist();

                  $(
                    ".cozy-block-wishlist.variation-wishlist .post-" + productId
                  ).removeClass("is-active");

                  if (attributes.sidebar.count?.enabled) {
                    if (updatedWishlistData.length > 0) {
                      if (
                        $(
                          ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
                        ).length
                      ) {
                        // If it exists, update its content
                        $(
                          ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
                        ).html(updatedWishlistData.length);
                      } else {
                        // If it does not exist, create it and append it to the parent container
                        $(
                          ".cozy-block-wishlist.variation-sidebar .sidebar__icon-wrapper"
                        ).append(
                          `<span class="cozy-block-wishlist__count">${updatedWishlistData.length}</span>`
                        );
                      }
                    } else {
                      $(
                        ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
                      ).remove();
                    }
                  }
                });
              },
              error: function (error) {
                console.log("Unable to load data...");
              },
            });
          }
        }

        if (attributes.isUserLoggedIn) {
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
                  $(
                    blockID + " .cozy-block-wishlist__sidebar-button.add__cart"
                  ).on("click", function () {
                    addToCart(this);
                  });

                  // Remove from Wishlist
                  $(
                    blockID +
                      " .cozy-block-wishlist__sidebar-button.remove__wishlist"
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
      }

      function removeFromWishlist(el) {
        const productId = $(el).attr("data-product-id");

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
              if (response.data.user_wishlist.includes(parseInt(productId))) {
                $(
                  ".cozy-block-wishlist.variation-wishlist .post-" + productId
                ).addClass("is-active");
              } else {
                $(
                  ".cozy-block-wishlist.variation-wishlist .post-" + productId
                ).removeClass("is-active");
              }

              if (attributes.sidebar.count?.enabled) {
                if (response.data.user_wishlist.length > 0) {
                  if (
                    $(
                      ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
                    ).length
                  ) {
                    // If it exists, update its content
                    $(
                      ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
                    ).html(response.data.user_wishlist.length);
                  } else {
                    // If it does not exist, create it and append it to the parent container
                    $(
                      ".cozy-block-wishlist.variation-sidebar .sidebar__icon-wrapper"
                    ).append(
                      `<span class="cozy-block-wishlist__count">${response.data.user_wishlist.length}</span>`
                    );
                  }
                } else {
                  $(
                    ".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
                  ).remove();
                }
              }

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

      let oldWishlistData = getLocalWishlist();
      updateSidebarRender();

      // Open Sidebar
      $(blockID + " .sidebar__icon-wrapper").click(function (e) {
        const updatedWishlistData = getLocalWishlist();
        if (arraysAreDifferent(oldWishlistData, updatedWishlistData)) {
          $(blockID + " .cozy-block-wishlist__sidebar-body").empty();
          oldWishlistData = updatedWishlistData;
          updateSidebarRender();
        }

        $(blockID + " .cozy-block-wishlist__sidebar-wrapper").removeClass(
          "visibility-hidden"
        );
        $("body").addClass("overflow-hidden");
      });

      // Close Sidebar
      $(
        blockID + " .cozy-block-wishlist__toolbar-button.sidebar-close-button"
      ).click(function () {
        closeSidebar();
      });
      $(blockID + " .cozy-block-wishlist__sidebar-wrapper").on(
        "click",
        function (event) {
          if (event.target === event.currentTarget) {
            closeSidebar();
          }
        }
      );

      // Sidebar buttons
      // Add to Cart
      $(blockID + " .cozy-block-wishlist__sidebar-button.add__cart").on(
        "click",
        function () {
          addToCart(this);
        }
      );

      // Remove from wishlist
      $(blockID + " .cozy-block-wishlist__sidebar-button.remove__wishlist").on(
        "click",
        function (e) {
          $(this).addClass("opacity-50");
          removeFromWishlist(this);
        }
      );
    }
  };
})(jQuery);
