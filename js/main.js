$(function () {
  // catalog slider
  let sliderCatalog = new Swiper('.category-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true,
  });

  // dragg slider
  let sliderDragg = new Swiper('.dragg-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
  });

  // single slider
  let sliderSingle = new Swiper('.single-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 1,
    spaceBetween: 80,
    loop: true,
    navigation: {
      nextEl: '.slider-arrow.next',
      prevEl: '.slider-arrow.prev',
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
  });
});
