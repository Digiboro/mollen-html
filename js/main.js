$(function () {
  // print big slider (swiper)
  let sliderPrintBig = new Swiper('.print-slider-big', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 1,
    spaceBetween: 150,
    loop: false,
    mousewheel: {
      invert: false
    },
    speed: 700,
  });

  // print slider (swiper)
  let sliderPrint = new Swiper('.print-list', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    loopAdditionalSlides: 1,
    mousewheel: {
      invert: false
    },
  });

  // catalog slider (swiper)
  let sliderCatalog = new Swiper('.category-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 'auto',
    spaceBetween: 5,
    loop: true,
    breakpoints: {
      // when window width is >= 320px
      577: {
        slidesPerView: 'auto',
        spaceBetween: 20
      }
    }
  });

  // dragg slider (swiper)
  let sliderDragg = new Swiper('.dragg-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1211: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    }
  });

  // dragg slider intro (swiper)
  let sliderDraggIntro = new Swiper('.intro-dragg-slider', {
    touchEventsTarget: 'wrapper',
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: '.intro-dragg-slider-arrow.next',
      prevEl: '.intro-dragg-slider-arrow.prev',
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1211: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    }
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
  $('.header-cart-trigger').on('click', function (e) {
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
  $('.header-search-trigger, .menu-search-trigger').on('click', function (e) {
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
    //page jump fix start
    document.body.style.top = `-${window.scrollY}px`;
    //page jump fix end
    $('.menu').addClass('show');
    $('body').addClass('popup-is-open');
  });
  $('.popup-menu-close-trigger').on('click', function (e) {
    e.preventDefault();
    $('.menu').removeClass('show');
    $('body').removeClass('popup-is-open');
    //page jump fix start
    const scrollY = document.body.style.top;
    document.body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    //page jump fix end
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
  let rangeSliderLength = document.querySelector('.sidebar-range-slider');
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

  // index animations
  // step 1
  if ($('body, html').hasClass('index-animation')) {
    window.setTimeout(function() {
      $('.doors-line').hide();
    }, 700);
  
    // step 2
    window.setTimeout(function() {
      $('body').removeClass('index-animation');
      //$('body, html').scrollTop(0);
    }, 2700);

    //header white
    $(window).scroll(function () {
      if ($(this).scrollTop() > 1) {
        $('.header').addClass("header-bg-white");
      } else {
        $('.header').removeClass("header-bg-white");
      }
    });
  }

  if (window.matchMedia("(max-width: 991px)").matches) {
    $('body').removeClass('index-animation');
  } else {
    
  }

  $('.category-content-filter-trigger').on('click', function () {
    $('.sidebar').show();
    $('body').addClass('popup-is-open');
  });
  $('.sidebar-close-trigger').on('click', function () {
    $('.sidebar').hide();
    $('body').removeClass('popup-is-open');
  });

  // popups
  $('.checkout-delivery-trigger').magnificPopup({
    type: 'inline',
  });
  $('.footer-callback-trigger').magnificPopup({
    type: 'inline',
  });
  $('.complect-page-guide-trigger').magnificPopup({
    type: 'inline',
  });
  $('.sidebar-size-guide-trigger').magnificPopup({
    type: 'inline',
  });
  // text page video
  $('.video').magnificPopup({
    type: 'iframe',
    closeMarkup: '<button class="popup-close-trigger btn-close mfp-close" type="button"><svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1.1765 7.1765-.6962-.6962L2.967 3.9936.4867 1.5133l.698-.698L3.665 3.2956 6.1372.8235l.6962.6962-2.4722 2.4721 2.4804 2.4804-.698.698-2.4804-2.4804-2.4867 2.4867Z" fill="#72716E"/></svg></button>'
  });
  // text page profile cards
  $('.card-list').magnificPopup({
    delegate: 'a',
    type: 'inline',
  });

});
