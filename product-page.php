<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Страница товара</title>
</head>

<body>
  <!-- header -->
  <?php include 'include-blocks/header.php' ?>

  <main class="main-product-page complect-page main">
    <div class="complect-page-inner">
      <div class="container">
        <div class="complect-page-sliders-content-wrap">
          <div class="complect-page-sliders-actions">
            <div class="complect-page-sliders">
              <div class="complect-page-slider-small-wrap">
                <div class="complect-page-arrow-wrap arrow-wrap">
                  <button class="complect-page-arrow arrow next" type="button">
                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7.6797s.8856-1.2257 1.6667-1.9091C3.4477 5.0872 5 4.1796 5 4.1796s-1.5523-.9074-2.3333-1.5908C1.8857 1.9054 1 .6797 1 .6797" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </button>
                  <button class="complect-page-arrow arrow prev" type="button">
                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.6758 1S3.7902 2.2257 3.009 2.909C2.2281 3.5926.6758 4.5.6758 4.5s1.5523.9075 2.3333 1.591C3.7901 6.7742 4.6758 8 4.6758 8" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </button>
                </div>
                <div class="complect-page-preview-slider">
                  <div class="complect-page-preview-slider-inner">
                    <div class="complect-page-preview-item">
                      <img src="img/complect-page-preview-1.jpg" alt="img">
                    </div>
                    <div class="complect-page-preview-item">
                      <img src="img/complect-page-preview-1.jpg" alt="img">
                    </div>
                    <div class="complect-page-preview-item">
                      <img src="img/complect-page-preview-1.jpg" alt="img">
                    </div>
                    <div class="complect-page-preview-item">
                      <img src="img/complect-page-preview-1.jpg" alt="img">
                    </div>
                    <div class="complect-page-preview-item">
                      <img src="img/complect-page-preview-1.jpg" alt="img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="complect-page-slider-big">
                <div class="complect-page-slider-big-inner">
                  <div class="complect-page-slider-big-item">
                    <img src="img/complect-page-slider-big-1.jpg" alt="img">
                  </div>
                </div>
              </div>
            </div>
            <div class="complect-page-actions">
              <button class="complect-page-share" type="button">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="3" transform="rotate(-90 15 15)" stroke="#1E1E1E"/><circle cx="4" cy="15" r="3" transform="rotate(-90 4 15)" stroke="#1E1E1E"/><circle cx="4" cy="4" r="3" transform="rotate(-90 4 4)" stroke="#1E1E1E"/><path d="M4 12V7M7 15h5" stroke="#1E1E1E"/></svg>
              </button>
              <button class="complect-page-guide-trigger link-sidebar" type="button">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#72716E" d="M1 1h28v28H1z"/><path d="M23 17V7H13M7 23V13m0 10h10M7 23 23 7" stroke="#72716E"/></svg>
                <span>Размерный гид</span>
              </button>
              <button class="complect-page-delivery-trigger link-sidebar" type="button">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#222730" d="M1 1h28v28H1z"/><path d="M7 7.125h16" stroke="#000"/><path stroke="#222730" d="M7 14h16v9H7z"/></svg>
                <span>Условия доставки</span>
              </button>
            </div>
          </div>
          <div class="complect-page-content">
            <div class="breadcrumbs">
              <ul class="breadcrumbs-list">
                <li class="breadcrumbs-item">
                  <a class="breadcrumbs-link" href="">Главная</a>
                </li>
                <li class="breadcrumbs-item">
                  <a class="breadcrumbs-link" href="">Каталог</a>
                </li>
                <li class="breadcrumbs-item">
                  <a class="breadcrumbs-link" href="">Постельное белье</a>
                </li>
                <li class="breadcrumbs-item">
                  Наволочка двухсторонняя
                </li>
              </ul>
            </div>
            <h2 class="complect-page-title h2">Наволочка двухсторонняя</h2>
            <p class="complect-page-id">ID: 23452265</p>
            <p class="complect-page-text">Наволочка двухсторонняя: светло-серый сатин и шелк<br> с узором "волшебный лес" 50*70 см</p>
            <p class="complect-page-price">18 000₽</p>
            <div class="complect-page-buttons">
              <a class="complect-page-btn btn btn-medium" href="">
                <span class="btn-text">В корзину</span>
              </a>
              <a class="complect-page-btn btn btn-medium btn-opacity" href="">
                <span class="btn-text">Быстрая покупка</span>
              </a>
            </div>
            <div class="complect-page-info">
              <label class="input-wrap">
                <select class="input-select">
                  <option value="0">50*70</option>
                  <option value="0">50*70</option>
                  <option value="0">50*70</option>
                </select>
                <span class="input-text">Размер, см</span>
                <span class="input-border"></span>
                <span class="input-error">Текст ошибки</span>
              </label>
              <label class="input-wrap">
                <select class="input-select">
                  <option value="0">название ткани</option>
                  <option value="0">название ткани</option>
                  <option value="0">название ткани</option>
                </select>
                <span class="input-text">Ткань</span>
                <span class="input-border"></span>
                <span class="input-error">Текст ошибки</span>
              </label>
              <label class="input-wrap">
                <select class="input-select">
                  <option value="0">Тут будет принт</option>
                  <option value="0">Тут будет принт</option>
                  <option value="0">Тут будет принт</option>
                </select>
                <span class="input-text">Принт</span>
                <span class="input-border"></span>
                <span class="input-error">Текст ошибки</span>
              </label>
              <label class="input-wrap">
                <div class="input-colors-wrap">
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #FFD55D;"></span>
                  </label>
        
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #497BB8;"></span>
                  </label>
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #FFD55D;"></span>
                  </label>
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #FF988F;"></span>
                  </label>
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #59C9D5;"></span>
                  </label>
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #FF988F;"></span>
                  </label>
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #59C9D5;"></span>
                  </label>
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #FFD55D;"></span>
                  </label>
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #FF988F;"></span>
                  </label>
                </div>
                <span class="input-text">Цвета</span>
                <span class="input-border"></span>
                <span class="input-error">Текст ошибки</span>
              </label>
            </div>
          </div>
        </div>
        <div class="complect-page-main-content">
          <div class="complect-page-dragg-slider dragg-slider swiper-container">
            <div class="dragg-slider-inner swiper-wrapper">
              <div class="dragg-slider-item swiper-slide">
                <img src="img/drag-slider-1.jpg" alt="img">
              </div>
              <div class="dragg-slider-item swiper-slide">
                <img src="img/drag-slider-2.jpg" alt="img">
              </div>
              <div class="dragg-slider-item swiper-slide">
                <img src="img/drag-slider-3.jpg" alt="img">
              </div>
              <div class="dragg-slider-item swiper-slide">
                <img src="img/drag-slider-4.jpg" alt="img">
              </div>
            </div>
          </div>
          <div class="container-small">
            <div class="complect-page-single-slider single-slider-wrap">
              <div class="single-slider-arrows slider-arrows">
                <button class="slider-arrow next"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.6758 7.6797s.8856-1.2257 1.6666-1.9091c.7811-.6834 2.3334-1.591 2.3334-1.591s-1.5523-.9074-2.3333-1.5908C1.5614 1.9054.6757.6797.6757.6797" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button class="slider-arrow prev"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.6758.6797s-.8856 1.2257-1.6667 1.909c-.781.6835-2.3333 1.591-2.3333 1.591s1.5523.9075 2.3333 1.5909c.781.6834 1.6667 1.909 1.6667 1.909" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
              </div>
              <div class="single-slider swiper-container">
                <div class="single-slider-inner swiper-wrapper">
                  <div class="single-slider-item swiper-slide">
                    <div class="single-slider-img">
                      <img src="img/single-slider.jpg" alt="img">
                      <svg class="single-slider-icon" width="73" height="69" viewBox="0 0 73 69" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M62.8427 59.8676 48.2453 69c-5.8843-6.5392-8.8264-14.6569-8.8264-24.3529 0-20.5196 8.3737-35.402 25.1212-44.6471l8.1474 8.1176C61.598 15.1078 56.0532 25.9314 56.0532 40.5882c0 7.6667 2.2632 14.0932 6.7895 19.2794Zm-38.7314 0L9.5139 69C3.6296 62.4608.6875 54.3431.6875 44.6471.6875 24.1275 9.0612 9.2451 25.8087 0l8.1474 8.1176c-11.0895 6.9902-16.6343 17.8138-16.6343 32.4706 0 7.6667 2.2632 14.0932 6.7895 19.2794Z" fill="#ECEAE7"/></svg>
                    </div>
                    <div class="single-slider-content">
                      <p class="single-slider-title">Имя Фамилия 1</p>
                      <p class="single-slider-text">В незапамятные времена наши предки-славяне называли лазоревыми цветами то купавку,<br> то шиповник, то дикий пион. Лазоревый — не значит «голубой», лазоревый — это цвет зари.</p>
                    </div>
                  </div>
                  <div class="single-slider-item swiper-slide">
                    <div class="single-slider-img">
                      <img src="img/single-slider.jpg" alt="img">
                      <svg class="single-slider-icon" width="73" height="69" viewBox="0 0 73 69" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M62.8427 59.8676 48.2453 69c-5.8843-6.5392-8.8264-14.6569-8.8264-24.3529 0-20.5196 8.3737-35.402 25.1212-44.6471l8.1474 8.1176C61.598 15.1078 56.0532 25.9314 56.0532 40.5882c0 7.6667 2.2632 14.0932 6.7895 19.2794Zm-38.7314 0L9.5139 69C3.6296 62.4608.6875 54.3431.6875 44.6471.6875 24.1275 9.0612 9.2451 25.8087 0l8.1474 8.1176c-11.0895 6.9902-16.6343 17.8138-16.6343 32.4706 0 7.6667 2.2632 14.0932 6.7895 19.2794Z" fill="#ECEAE7"/></svg>
                    </div>
                    <div class="single-slider-content">
                      <p class="single-slider-title">Имя Фамилия</p>
                      <p class="single-slider-text">В незапамятные времена наши предки-славяне называли лазоревыми цветами то купавку,<br> то шиповник, то дикий пион. Лазоревый — не значит «голубой», лазоревый — это цвет зари.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p>“При выборе варианта оплаты наличными, вы дожидаетесь приезда курьера и<br> передаёте ему сумму за товар в рублях. Курьер предоставляет товар, который<br> можно осмотреть на предмет повреждений, соответствие указанным<br> условиям. Покупатель подписывает товаросопроводительные документы,<br> вносит денежные средства и получает чек.</p>
            <br>
            <p>Также оплата наличными доступна при самовывозе из магазина, оплаты по почте или использовании постамата.</p>
          </div>
        </div>
      </div>

      <div class="container no-padding-desktop">
        <div class="intro-constructor category-bottom-margin">
          <div class="intro-constructor-inner">
            <div class="intro-constructor-content" style="background-image: url('img/intro-constructor-2.jpg');">
              <p class="intro-constructor-title">С этим товаром<br> покупают</p>
            </div>
            <div class="intro-constructor-products">
              <div class="intro-constructor-product product hover-effect">
                <div class="product-inner">
                  <div class="product-top">
                    <div class="product-top-first">
                      <span class="product-number">2C3M4104</span>
                      <span class="product-instock">есть в наличии (10+)</span>
                    </div>
                    <div class="product-top-second">
                      <div class="product-color">
                        <button class="product-color-selected" style="background: #FF988F;" type="button">
                        </button>
                      </div>
                    </div>
                  </div>
        
                  <a class="product-img" href="">
                    <img src="img/product.png" alt="img">
                  </a>
                  <div class="product-info">
                    <a class="product-title link-black" href="">название товара<br> в две строки</a>
                    <span class="product-amount">>5 шт – 16 000₽/шт</span>
                    <span class="product-price">15 000 ₽</span>
                  </div>
                  <div class="product-bottom">
                    <button class="btn btn-medium" type="button">
                      <span class="btn-text">В корзину</span>
                    </button>
                    <button class="product-quickbuy" type="button">Быстрая покупка</button>
                  </div>
                </div>
              </div>
              <div class="intro-constructor-product product hover-effect">
                <div class="product-inner">
                  <div class="product-top">
                    <div class="product-top-first">
                      <span class="product-number">2C3M4104</span>
                      <span class="product-instock">есть в наличии (10+)</span>
                    </div>
                    <div class="product-top-second">
                      <div class="product-color">
                        <button class="product-color-selected" style="background: #FF988F;" type="button">
                        </button>
                      </div>
                    </div>
                  </div>
        
                  <a class="product-img" href="">
                    <img src="img/product.png" alt="img">
                  </a>
                  <div class="product-info">
                    <a class="product-title link-black" href="">название товара<br> в две строки</a>
                    <span class="product-amount">>5 шт – 16 000₽/шт</span>
                    <span class="product-price">15 000 ₽</span>
                  </div>
                  <div class="product-bottom">
                    <button class="btn btn-medium" type="button">
                      <span class="btn-text">В корзину</span>
                    </button>
                    <button class="product-quickbuy" type="button">Быстрая покупка</button>
                  </div>
                </div>
              </div>
              <div class="intro-constructor-product product hover-effect">
                <div class="product-inner">
                  <div class="product-top">
                    <div class="product-top-first">
                      <span class="product-number">2C3M4104</span>
                      <span class="product-instock">есть в наличии (10+)</span>
                    </div>
                    <div class="product-top-second">
                      <div class="product-color">
                        <button class="product-color-selected" style="background: #FF988F;" type="button">
                        </button>
                      </div>
                    </div>
                  </div>
        
                  <a class="product-img" href="">
                    <img src="img/product.png" alt="img">
                  </a>
                  <div class="product-info">
                    <a class="product-title link-black" href="">название товара<br> в две строки</a>
                    <span class="product-amount">>5 шт – 16 000₽/шт</span>
                    <span class="product-price">15 000 ₽</span>
                  </div>
                  <div class="product-bottom">
                    <button class="btn btn-medium" type="button">
                      <span class="btn-text">В корзину</span>
                    </button>
                    <button class="product-quickbuy" type="button">Быстрая покупка</button>
                  </div>
                </div>
              </div>
              <div class="intro-constructor-product product hover-effect">
                <div class="product-inner">
                  <div class="product-top">
                    <div class="product-top-first">
                      <span class="product-number">2C3M4104</span>
                      <span class="product-instock">есть в наличии (10+)</span>
                    </div>
                    <div class="product-top-second">
                      <div class="product-color">
                        <button class="product-color-selected" style="background: #FF988F;" type="button">
                        </button>
                      </div>
                    </div>
                  </div>
        
                  <a class="product-img" href="">
                    <img src="img/product.png" alt="img">
                  </a>
                  <div class="product-info">
                    <a class="product-title link-black" href="">название товара<br> в две строки</a>
                    <span class="product-amount">>5 шт – 16 000₽/шт</span>
                    <span class="product-price">15 000 ₽</span>
                  </div>
                  <div class="product-bottom">
                    <button class="btn btn-medium" type="button">
                      <span class="btn-text">В корзину</span>
                    </button>
                    <button class="product-quickbuy" type="button">Быстрая покупка</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="category-complects-title">Другие товары</p>
        
        <div class="complect-page-product-list-2 category-bottom-margin">
          <div class="complect-page-product-2 product hover-effect">
            <div class="product-inner">
              <div class="product-top">
                <div class="product-top-first">
                  <span class="product-number">2C3M4104</span>
                  <span class="product-instock">есть в наличии (10+)</span>
                </div>
                <div class="product-top-second">
                  <div class="product-color">
                    <button class="product-color-selected" style="background: #FF988F;" type="button">
                    </button>
                  </div>
                </div>
              </div>
        
              <a class="product-img" href="">
                <img src="img/product.png" alt="img">
              </a>
              <div class="product-info">
                <a class="product-title link-black" href="">название товара<br> в две строки</a>
                <span class="product-amount">>5 шт – 16 000₽/шт</span>
                <span class="product-price">15 000 ₽</span>
              </div>
              <div class="product-bottom">
                <button class="btn btn-medium" type="button">
                  <span class="btn-text">В корзину</span>
                </button>
                <button class="product-quickbuy" type="button">Быстрая покупка</button>
              </div>
            </div>
          </div>
          <div class="complect-page-product-2 product hover-effect">
            <div class="product-inner">
              <div class="product-top">
                <div class="product-top-first">
                  <span class="product-number">2C3M4104</span>
                  <span class="product-instock">есть в наличии (10+)</span>
                </div>
                <div class="product-top-second">
                  <div class="product-color">
                    <button class="product-color-selected" style="background: #FF988F;" type="button">
                    </button>
                  </div>
                </div>
              </div>
        
              <a class="product-img" href="">
                <img src="img/product.png" alt="img">
              </a>
              <div class="product-info">
                <a class="product-title link-black" href="">название товара<br> в две строки</a>
                <span class="product-amount">>5 шт – 16 000₽/шт</span>
                <span class="product-price">15 000 ₽</span>
              </div>
              <div class="product-bottom">
                <button class="btn btn-medium" type="button">
                  <span class="btn-text">В корзину</span>
                </button>
                <button class="product-quickbuy" type="button">Быстрая покупка</button>
              </div>
            </div>
          </div>
          <div class="complect-page-product-2 product hover-effect">
            <div class="product-inner">
              <div class="product-top">
                <div class="product-top-first">
                  <span class="product-number">2C3M4104</span>
                  <span class="product-instock">есть в наличии (10+)</span>
                </div>
                <div class="product-top-second">
                  <div class="product-color">
                    <button class="product-color-selected" style="background: #FF988F;" type="button">
                    </button>
                  </div>
                </div>
              </div>
        
              <a class="product-img" href="">
                <img src="img/product.png" alt="img">
              </a>
              <div class="product-info">
                <a class="product-title link-black" href="">название товара<br> в две строки</a>
                <span class="product-amount">>5 шт – 16 000₽/шт</span>
                <span class="product-price">15 000 ₽</span>
              </div>
              <div class="product-bottom">
                <button class="btn btn-medium" type="button">
                  <span class="btn-text">В корзину</span>
                </button>
                <button class="product-quickbuy" type="button">Быстрая покупка</button>
              </div>
            </div>
          </div>
          <div class="complect-page-product-2 product hover-effect">
            <div class="product-inner">
              <div class="product-top">
                <div class="product-top-first">
                  <span class="product-number">2C3M4104</span>
                  <span class="product-instock">есть в наличии (10+)</span>
                </div>
                <div class="product-top-second">
                  <div class="product-color">
                    <button class="product-color-selected" style="background: #FF988F;" type="button">
                    </button>
                  </div>
                </div>
              </div>
        
              <a class="product-img" href="">
                <img src="img/product.png" alt="img">
              </a>
              <div class="product-info">
                <a class="product-title link-black" href="">название товара<br> в две строки</a>
                <span class="product-amount">>5 шт – 16 000₽/шт</span>
                <span class="product-price">15 000 ₽</span>
              </div>
              <div class="product-bottom">
                <button class="btn btn-medium" type="button">
                  <span class="btn-text">В корзину</span>
                </button>
                <button class="product-quickbuy" type="button">Быстрая покупка</button>
              </div>
            </div>
          </div>
        </div>
        <div class="category-recently-viewed">
          <p class="category-recently-viewed-title">Недавно смотрели</p>
          <div class="category-recently-viewed-list">
            <div class="category-recently-viewed-item">
              <a class="category-recently-viewed-item-img" href="">
                <img src="img/recently-viewed.png" alt="img">
              </a>
              <a class="category-recently-viewed-item-title" href="">название<br> комплекта</a>
            </div>
        
            <div class="category-recently-viewed-item">
              <a class="category-recently-viewed-item-img" href="">
                <img src="img/recently-viewed.png" alt="img">
              </a>
              <a class="category-recently-viewed-item-title" href="">название<br> комплекта</a>
            </div>
        
            <div class="category-recently-viewed-item">
              <a class="category-recently-viewed-item-img" href="">
                <img src="img/recently-viewed.png" alt="img">
              </a>
              <a class="category-recently-viewed-item-title" href="">название<br> комплекта</a>
            </div>
        
            <div class="category-recently-viewed-item">
              <a class="category-recently-viewed-item-img" href="">
                <img src="img/recently-viewed.png" alt="img">
              </a>
              <a class="category-recently-viewed-item-title" href="">название<br> комплекта</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- footer -->
  <?php include 'include-blocks/footer.php' ?>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>