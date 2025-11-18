(function ($) {
  window["cozyBlockFeaturedPost"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const attributes = window[`cozyBlock_${n}`];
    const blockID = `#cozyBlock_${n}`;

    if (attributes.display === "carousel") {
      const carouselAttr = {
        init: true,
        loop: attributes.sliderOptions.loop,
        autoplay: { ...attributes.sliderOptions.autoplay },
        speed: attributes.sliderOptions.speed,
        centeredSlides: attributes.sliderOptions.centeredSlides,
        slidesPerView: attributes.sliderOptions.slidesPerView,
        spaceBetween: attributes.sliderOptions.spaceBetween,
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
              attributes.sliderOptions.slidesPerView <= 2
                ? attributes.sliderOptions.slidesPerView
                : 2,
          },
          1024: {
            slidesPerView:
              attributes.sliderOptions.slidesPerView <= 3
                ? attributes.sliderOptions.slidesPerView
                : 3,
          },
          1180: {
            slidesPerView: attributes.sliderOptions.slidesPerView,
          },
        },
      };

      if (attributes.sliderOptions.autoplay.status) {
        carouselAttr.autoplay = { ...attributes.sliderOptions.autoplay };
      } else {
        delete carouselAttr.autoplay;
      }

      const carousel = new Swiper(blockID + " .swiper-container", carouselAttr);
    }
  };
})(jQuery);
