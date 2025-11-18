(function ($) {
  window["cozyBlockProductCategoryInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProductCategory_${n}`];
    const productCategoryClass = `#cozyBlock_${n}`;

    const sliderAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${productCategoryClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${productCategoryClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${productCategoryClass} .swiper-pagination`,
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
    }

    new Swiper(
      productCategoryClass +
        ".display-carousel.cozy-product-category__swiper-container",
      sliderAttr
    );
  };
})(jQuery);
