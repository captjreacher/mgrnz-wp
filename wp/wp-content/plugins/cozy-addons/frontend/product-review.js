(function ($) {
  window["cozyBlockProductReviewInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProductReview_${n}`];
    const productReviewClass = `#cozyBlock_${n}`;
    const cozyProductReview = document.querySelector(productReviewClass);

    const sliderAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${productReviewClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${productReviewClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${productReviewClass} .swiper-pagination`,
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView: blockOptions.sliderOptions.slidesPerView,
        },
      },
    };

    if (blockOptions.sliderOptions.autoplay.status) {
      sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    } else {
      delete sliderAttr.autoplay;
    }

    new Swiper(
      productReviewClass +
        ".layout-carousel .cozy-product-review__swiper-container",
      sliderAttr
    );

    const reviewWrapper = cozyProductReview.querySelector(
      ".woo-product-review-wrapper"
    );

    const loaderButton = cozyProductReview.querySelector(
      ".cozy-dynamic-loader"
    );
    const commentIDs = [];
    let commentsToShow = [];
    if (loaderButton) {
      const initialShownReviews = cozyProductReview.querySelectorAll(
        ".woo-product-review"
      );
      initialShownReviews.forEach((review) => {
        const commentID = review.getAttribute("data-comment-id");

        if (commentID) {
          // Check if the attribute value exists before pushing it to the array
          commentIDs.push(commentID);
        }
      });

      const initialFilteredComments = blockOptions.woo_product_comments.filter(
        (comment) => !commentIDs.includes(comment.comment_ID)
      );

      const initalShow = initialFilteredComments.slice(
        commentsToShow.length,
        commentsToShow.length + blockOptions.ajaxButton.contentLoad
      );
      if (initalShow.length <= 0) {
        loaderButton.classList.add("display-none");
      }

      loaderButton.addEventListener("click", function () {
        const shownReviews = cozyProductReview.querySelectorAll(
          ".woo-product-review"
        );
        shownReviews.forEach((review) => {
          const commentID = review.getAttribute("data-comment-id");

          if (commentID) {
            // Check if the attribute value exists before pushing it to the array
            commentIDs.push(commentID);
          }
        });

        const filteredComments = blockOptions.woo_product_comments.filter(
          (comment) => !commentIDs.includes(comment.comment_ID)
        );

        if (blockOptions.woo_product_comments.length > 0) {
          commentsToShow = filteredComments.slice(
            0,
            blockOptions.ajaxButton.contentLoad
          );

          const reviewTemplate = generateReviewTemplate(
            commentsToShow,
            blockOptions,
            productReviewClass
          );
          reviewTemplate.map((template, index) => {
            const tempContainer = document.createElement("li");

            // Set the HTML content of the container
            tempContainer.innerHTML = template;
            tempContainer.className = "woo-product-review visibility-hidden";
            tempContainer.setAttribute(
              "data-comment-id",
              commentsToShow[index].comment_ID
            );

            reviewWrapper.appendChild(tempContainer);

            setTimeout(() => {
              tempContainer.classList.remove("visibility-hidden");
              tempContainer.classList.add("visibility-visible");
            }, 230);
          });

          const nextShow = filteredComments.slice(
            commentsToShow.length,
            commentsToShow.length + blockOptions.ajaxButton.contentLoad
          );
          if (nextShow.length <= 0) {
            loaderButton.classList.add("display-none");
          }
        }
      });
    }

    function generateReviewTemplate(
      commentsToShow,
      blockOptions,
      productReviewClass
    ) {
      const reviewTemplateString = [];

      const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];

      commentsToShow.map((review) => {
        const dateString = review.comment_date;
        const dateObject = new Date(dateString);

        const day = dateObject.getDate();
        let month = months[dateObject.getMonth()];
        const year = dateObject.getFullYear();

        const formattedDay = day < 10 ? "0" + day : day;

        let formattedDate = "";

        if (blockOptions.reviewTitle.dateAbbr) {
          month = month.slice(0, 3);
        }

        if (blockOptions.reviewTitle.dateFormat === "d-m-y") {
          formattedDate = `${formattedDay} ${month}, ${year}`;
        }

        if (blockOptions.reviewTitle.dateFormat === "m-d-y") {
          formattedDate = `${month} ${formattedDay}, ${year}`;
        }

        const htmlTemplateString = `
            <style>
              ${productReviewClass} .product-rating-wrapper[data-rating="${
          review.product_rating
        }"]:before {
                --percent: calc(${parseFloat(review.product_rating)}/5*100%);
                background: linear-gradient(90deg, ${
                  blockOptions.reviewTitle.ratingColor
                } var(--percent), rgba(0,0,0,0.2) var(--percent));
    
              }
            </style>
            ${
              blockOptions.enableOptions.reviewContent &&
              blockOptions.reviewContent.position === "top"
                ? `
                  <div class="review-content-wrapper">
                    <div class="review-content">
                      ${wp.i18n.__(review.comment_content, "cozy-addons")}
                    </div>
                  </div>
                `
                : ""
            }
          
            <div class="display-grid">
              ${
                blockOptions.enableOptions.image
                  ? `
                    <figure class="review-image">
                      ${
                        blockOptions.imageType === "user"
                          ? `<img src=${review.user_avatar} />`
                          : ""
                      }
                      ${
                        blockOptions.imageType === "product"
                          ? `<img src=${review.product_image_url} />`
                          : ""
                      }
                    </figure>
                  `
                  : ""
              }
          
              <div class="display-flex flex-column align-start">
                <div class="display-flex">
                  ${
                    blockOptions.enableOptions.productName
                      ? `
                        <a
                          class="product-name"
                          href=${review.product_url}
                          rel="noopener"
                          target="_blank"
                        >
                          ${wp.i18n.__(review.product_name, "cozy-addons")}
                        </a>
                      `
                      : ""
                  }
          
                  ${
                    blockOptions.enableOptions.productRating
                      ? `
                        <div
                          class="product-rating-wrapper"
                          data-rating=${review.product_rating}
                        ></div>
                      `
                      : ""
                  }
                </div>
          
                <div class="display-flex">
                  ${
                    blockOptions.enableOptions.reviewerName
                      ? `<div class="reviewer-name">${review.reviewer_name}</div>`
                      : ""
                  }
          
                  ${
                    blockOptions.enableOptions.reviewDate
                      ? `<time class="review-date">${formattedDate}</time>`
                      : ""
                  }
                </div>
              </div>
            </div>
          
            ${
              blockOptions.enableOptions.reviewContent &&
              blockOptions.reviewContent.position === "bottom"
                ? `
                  <div class="review-content-wrapper">
                    <div class="review-content">
                      ${wp.i18n.__(review.comment_content, "cozy-addons")}
                    </div>
                  </div>
                `
                : ""
            }
          `;

        reviewTemplateString.push(htmlTemplateString);
      });

      return reviewTemplateString;
    }
  };
})(jQuery);
