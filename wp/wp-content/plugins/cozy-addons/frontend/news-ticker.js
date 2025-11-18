(function ($) {
  window["cozyBlockNewsTickerInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyNewsTicker_${n}`];
    const newsTickerClass = `#cozyBlock_${n}`;
    const cozyNewsTicker = $(newsTickerClass);

    cozyNewsTicker.find(".wp-block-post").addClass("swiper-slide");

    const carouselAttr = {
      init: true,
      direction: "vertical",
      loop: blockOptions.carouselOptions.sliderOptions.loop,
      autoplay: blockOptions.carouselOptions.sliderOptions.autoplay,
      speed: blockOptions.carouselOptions.sliderOptions.speed,
      slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${newsTickerClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${newsTickerClass} .swiper-button-prev.cozy-block-button-prev`,
      },
    };

    new Swiper(newsTickerClass + " .swiper-container", carouselAttr);
  };
})(jQuery);
