<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Оформление</title>
</head>

<body>
  <!-- header -->
  <?php include 'include-blocks/header.php' ?>

  <main class="checkout main-checkout main">
    <div class="container no-padding-desktop">
      <div class="checkout-inner grid-3-1-cols">
        <div class="checkout-content col">
          <div class="checkout-content-head">
            <div class="breadcrumbs">
              <ul class="breadcrumbs-list">
                <li class="breadcrumbs-item">
                  <a class="breadcrumbs-link" href="">Главная</a>
                </li>
                <li class="breadcrumbs-item">
                  Корзина
                </li>
              </ul>
            </div>
            <div class="checkout-title-wrap">
              <h2 class="checkout-title h2">Оформить заказ</h2>
            </div>
          </div>
          <div class="checkout-content-body">
            <div class="checkout-list">
              <div class="checkout-item">
                <p class="checkout-item-title">Личные данные</p>
                
                <div class="checkout-item-content">
                  <p class="checkout-item-title-mobile">Личные данные</p>
                  <div class="checkout-item-top">
                    <label class="checkout-item-top-radio form-circle-radio">
                      <input class="form-circle-radio-input" type="radio" name="order-1" checked>
                      <span class="form-circle-radio-custom"></span>
                      <span class="form-circle-radio-text">Физ. лицо</span>
                    </label>

                    <label class="checkout-item-top-radio form-circle-radio">
                      <input class="form-circle-radio-input" type="radio" name="order-1">
                      <span class="form-circle-radio-custom"></span>
                      <span class="form-circle-radio-text">Юр. лицо</span>
                    </label>
                  </div>
                  <div class="checkout-item-body">
                    <label class="input-wrap">
                      <input class="input" type="text" placeholder="Иван">
                      <span class="input-text">Имя</span>
                      <span class="input-border"></span>
                      <span class="input-error">Текст ошибки</span>
                    </label>

                    <label class="input-wrap">
                      <input class="input" type="text" placeholder="Иванов">
                      <span class="input-text">Фамилия</span>
                      <span class="input-border"></span>
                      <span class="input-error">Текст ошибки</span>
                    </label>

                    <label class="input-wrap">
                      <input class="input" type="text" placeholder="+ 7 (_______)  _________  -  _____  -  _____">
                      <span class="input-text">Телефон</span>
                      <span class="input-border"></span>
                      <span class="input-error">Текст ошибки</span>
                    </label>

                    <label class="input-wrap">
                      <select class="input-select">
                        <option value="0">Telegram</option>
                        <option value="0">Telegram</option>
                        <option value="0">Telegram</option>
                      </select>
                      <span class="input-text">Способ связи</span>
                      <span class="input-border"></span>
                      <span class="input-error">Текст ошибки</span>
                    </label>

                    <label class="input-wrap">
                      <select class="input-select">
                        <option value="0">Санкт-Петербург</option>
                        <option value="0">Санкт-Петербург</option>
                        <option value="0">Санкт-Петербург</option>
                      </select>
                      <span class="input-text">Город</span>
                      <span class="input-border"></span>
                      <span class="input-error">Текст ошибки</span>
                    </label>

                    <label class="input-wrap">
                      <input class="input" type="text" placeholder="Улица, дом, квартира">
                      <span class="input-text">Адрес</span>
                      <span class="input-border"></span>
                      <span class="input-error">Текст ошибки</span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="checkout-item checkout-item-delivery">
                <p class="checkout-item-title">Доставка</p>

                <div class="checkout-item-content">
                  <p class="checkout-item-title-mobile">Доставка</p>
                  <div class="checkout-radio-list">
                    <label class="checkout-radio form-circle-radio">
                      <input class="form-circle-radio-input" type="radio" name="delivery-1" checked>
                      <span class="form-circle-radio-custom"></span>
                      <span class="form-circle-radio-text">
                        <span class="checkout-radio-inner">
                          <span class="checkout-radio-content">
                            <span class="checkout-radio-title">Почта России (EMS)</span>
                            
                            <span class="checkout-radio-text">Экспресс-отправления EMS — это самый быстрый и удобный способ доставить письмо или посылку по России и за границу. Курьер заберет отправление в удобном для вас месте и доставит его адресату домой или в офис. Экспресс-отправление является регистрируемым, его доставку и вручение можно отследить с помощью трек-номера. В городах, где нет курьерской службы EMS, отправить и получить экспресс-отправление можно через отделение Почты России</span>
                          </span>

                          <span class="checkout-radio-sidebar">
                            <span class="checkout-radio-sidebar-title">500 ₽</span>
                            
                            <span class="checkout-radio-sidebar-text">до 1 раб. дня</span>
                          </span>
                        </span>
                      </span>
                    </label>

                    <label class="checkout-radio form-circle-radio">
                      <input class="form-circle-radio-input" type="radio" name="delivery-1">
                      <span class="form-circle-radio-custom"></span>
                      <span class="form-circle-radio-text">
                        <span class="checkout-radio-inner">
                          <span class="checkout-radio-content">
                            <span class="checkout-radio-title">Самовывоз</span>
                            
                            <span class="checkout-radio-text">Вы можете самостоятельно забрать заказ из нашего магазина.</span>
                          </span>

                          <span class="checkout-radio-sidebar">
                            <span class="checkout-radio-sidebar-title">бесплатно</span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="checkout-item">
                <p class="checkout-item-title">Способ оплаты</p>

                <div class="checkout-item-content">
                  <p class="checkout-item-title-mobile">Способ оплаты</p>
                  <div class="checkout-radio-list">
                    <label class="checkout-radio form-circle-radio">
                      <input class="form-circle-radio-input" type="radio" name="pay-1" checked>
                      <span class="form-circle-radio-custom"></span>
                      <span class="form-circle-radio-text">
                        <span class="checkout-radio-inner-2">
                          <span class="checkout-radio-content-2">
                            <span class="checkout-radio-title">Онлайн</span>
                          </span>

                          <span class="checkout-radio-sidebar-2">
                            <span class="checkout-radio-sidebar-text">Картами Visa, MasterCard, Мир</span>
                          </span>
                        </span>
                      </span>
                    </label>
                    <label class="checkout-radio form-circle-radio">
                      <input class="form-circle-radio-input" type="radio" name="pay-1">
                      <span class="form-circle-radio-custom"></span>
                      <span class="form-circle-radio-text">
                        <span class="checkout-radio-inner-2">
                          <span class="checkout-radio-content-2">
                            <span class="checkout-radio-title">Электронными деньгами</span>
                          </span>

                          <span class="checkout-radio-sidebar-2">
                            <span class="checkout-radio-sidebar-text">ЮMoney, QIWI Wallet</span>
                          </span>
                        </span>
                      </span>
                    </label>
                    <label class="checkout-radio form-circle-radio">
                      <input class="form-circle-radio-input" type="radio" name="pay-1">
                      <span class="form-circle-radio-custom"></span>
                      <span class="form-circle-radio-text">
                        <span class="checkout-radio-inner-2">
                          <span class="checkout-radio-content-2">
                            <span class="checkout-radio-title">При получении</span>
                          </span>

                          <span class="checkout-radio-sidebar-2">
                            <span class="checkout-radio-sidebar-text">Наличными или картой</span>
                          </span>
                        </span>
                      </span>
                    </label>

                  </div>
                </div>
              </div>

              <div class="checkout-item">
                <p class="checkout-item-title">Товары в корзине</p>

                <div class="checkout-item-content checkout-product-wrap">
                  <p class="checkout-item-title-mobile">Товары в корзине</p>
                  <div class="checkout-product-list">
                    <div class="product checkout-product">
                      <div class="product-inner">
                      <button class="checkout-product-remove-btn remove-icon" type="button">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                      </button>
                        <a class="product-img" href="">
                          <img src="img/product.png" alt="img">
                        </a>

                        <div class="product-info">
                          <a class="product-title link-black" href="">название товара<br> в две строки</a>
                          <span class="product-amount">1 шт</span>
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
                    <div class="product checkout-product">
                      <div class="product-inner">
                      <button class="checkout-product-remove-btn remove-icon" type="button">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                      </button>
                        <a class="product-img" href="">
                          <img src="img/product.png" alt="img">
                        </a>

                        <div class="product-info">
                          <a class="product-title link-black" href="">название товара<br> в две строки</a>
                          <span class="product-amount">1 шт</span>
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
                    <div class="product checkout-product">
                      <div class="product-inner">
                      <button class="checkout-product-remove-btn remove-icon" type="button">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                      </button>
                        <a class="product-img" href="">
                          <img src="img/product.png" alt="img">
                        </a>

                        <div class="product-info">
                          <a class="product-title link-black" href="">название товара<br> в две строки</a>
                          <span class="product-amount">1 шт</span>
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
                    <div class="product checkout-product">
                      <div class="product-inner">
                      <button class="checkout-product-remove-btn remove-icon" type="button">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                      </button>
                        <a class="product-img" href="">
                          <img src="img/product.png" alt="img">
                        </a>

                        <div class="product-info">
                          <a class="product-title link-black" href="">название товара<br> в две строки</a>
                          <span class="product-amount">1 шт</span>
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
                    <div class="product checkout-product">
                      <div class="product-inner">
                      <button class="checkout-product-remove-btn remove-icon" type="button">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                      </button>
                        <a class="product-img" href="">
                          <img src="img/product.png" alt="img">
                        </a>

                        <div class="product-info">
                          <a class="product-title link-black" href="">название товара<br> в две строки</a>
                          <span class="product-amount">1 шт</span>
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
            </div>
          </div>
        </div>
        <div class="checkout-sidebar col">
          <div class="checkout-sidebar-head">
            <p class="checkout-sidebar-title">Итого</p>
            <p class="checkout-sidebar-total">18 000 ₽</p>
          </div>
          <div class="checkout-sidebar-body">
            <ul class="checkout-sidebar-list">
              <li class="checkout-sidebar-item">
                <span>2 товара <a href="">изменить</a></span>
                <span>31 489 ₽</span>
              </li>
              <li class="checkout-sidebar-item">
                <span>Скидка</span>
                <span>31 489 ₽</span>
              </li>
              <li class="checkout-sidebar-item">
                <span>Подарочная упаковка</span>
                <span>500 ₽</span>
              </li>
              <li class="checkout-sidebar-item">
                <span>Доставка</span>
                <span>Бесплатно</span>
              </li>
            </ul>

            <button class="checkbox-ordering-btn btn btn-large" type="button" disabled>
              <span class="btn-text">Оплатить</span>
            </button>

            <label class="checkout-sidebar-checkbox-2 checkbox">
              <input class="checkbox-input" type="checkbox" checked>
              <span class="checkbox-custom">
                <svg width="8" height="6" viewBox="0 0 8 6" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.7.3c-.4-.4-1-.4-1.4 0L3 3.6 1.7 2.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l2 2c.2.2.4.3.7.3.3 0 .5-.1.7-.3l4-4c.4-.4.4-1 0-1.4Z"/></svg>
              </span>
              <span class="checkbox-text-1 checkbox-text">
                <span>Я согласен на <a class="checkbox-link" href="">обработку персональных данных</a> и <a class="checkbox-link" href="">публичной офертой</a></span>
              </span>
            </label>
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