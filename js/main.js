$(function () {
  // catalog slider (swiper)
  let sliderCatalog = new Swiper('.category-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true,
  });

  // dragg slider (swiper)
  let sliderDragg = new Swiper('.dragg-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
  });

  // single slider (swiper)
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

  // product slider preview (swiper)
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

  // product slider main (swiper)
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

  // sidebar color collapse arrow
  $('.form-color-radio-toggler').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.form-color-radio-wrap').toggleClass('active');
  });

  // cookies alert
  $('.cookies-btn, .cookies-close-trigger').on('click', function (e) {
    e.preventDefault();
    $('.cookies').hide();
  });

  // header cart trigger
  $('.header-cart-trigger, .menu-search-trigger').on('click', function (e) {
    e.preventDefault();
    $('.header-cart').toggleClass('show');
    $('body').addClass('popup-is-open');
  });
  $('.header-cart-trigger-close').on('click', function (e) {
    e.preventDefault();
    $('.header-cart').removeClass('show');
    $('body').removeClass('popup-is-open');
  });

  // header search trigger
  $('.header-search-trigger').on('click', function (e) {
    e.preventDefault();
    $('.header-search').addClass('show');
    $('body').addClass('popup-is-open');
  });
  $('.header-search-close-btn').on('click', function (e) {
    e.preventDefault();
    $('.header-search').removeClass('show');
    $('body').removeClass('popup-is-open');
  });

  // header menu trigger
  $('.header-nav-trigger').on('click', function (e) {
    e.preventDefault();
    $('.menu').addClass('show');
    $('body').addClass('popup-is-open');
  });
  $('.popup-menu-close-trigger').on('click', function (e) {
    e.preventDefault();
    $('.menu').removeClass('show');
    $('body').removeClass('popup-is-open');
  });

  // header menu search
  $('.menu-search-trigger').on('click', function (e) {
    e.preventDefault();
    $('.menu').removeClass('show');
    $('.header-search').addClass('show');
    $('body').addClass('popup-is-open');
  });
  $('.header-search-close-btn').on('click', function (e) {
    e.preventDefault();
    $('.header-search').removeClass('show');
    $('body').removeClass('popup-is-open');
  });

  // faq
  $('.faq-item-top').on('click', function() {
    $(this).closest('.faq-item').addClass('active').siblings().removeClass('active')
  });

  // range slider length (noUiSlider + wNumb)
  var rangeSliderLength = document.querySelector('.sidebar-range-slider');
  if (rangeSliderLength) {
    noUiSlider.create(rangeSliderLength, {
      start: [5000, 25000],
      tooltips: true,
      connect: [false, true, false],
      step: 1,
      range: {
        'min': [1],
        'max': [30000]
      },
      format: wNumb({
        decimals: 0,
        thousand: ' '
      }),
    });
  }
  
});
