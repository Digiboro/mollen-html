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

  // product slider preview
  let sliderProductPreview = new Swiper('.complect-page-preview-slider', {
    touchEventsTarget: 'wrapper',
    direction: 'vertical',
    // simulateTouch: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    slidesPerView: 5,
    touchRatio: 0,
    spaceBetween: 20,
  });

  // product slider main
  let sliderProductMain = new Swiper('.complect-page-slider-big', {
    touchEventsTarget: 'wrapper',
    // simulateTouch: false,
    slidesPerView: 1,
    spaceBetween: 40,
    navigation: {
      nextEl: '.complect-page-arrow.next',
      prevEl: '.complect-page-arrow.prev',
    },
    thumbs: {
      swiper: sliderProductPreview
    }
  });
});


