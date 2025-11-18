(function ($) {
  window["cozyBlockAdvancedCategories"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyBlock_${n}`];
    const blockID = `#cozyBlock_${n}`;

    const carouselAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      autoplay: { ...blockOptions.sliderOptions.autoplay },
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${blockID} .swiper-button-next`,
        prevEl: `${blockID} .swiper-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${blockID} .swiper-pagination`,
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
      carouselAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    } else {
      delete carouselAttr.autoplay;
    }

    let carousel = null;

    if (blockOptions.display === "carousel") {
      carousel = new Swiper(
        blockID + ".display-carousel.swiper-container",
        carouselAttr
      );
    }
  };
})(jQuery);
