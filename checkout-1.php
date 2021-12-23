<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Корзина</title>
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
              <h2 class="checkout-title h2">Корзина</h2>
              <button class="checkout-empty-trigger" type="button">
                <span>Очистить корзину</span>
                <span class="checkout-empty-trigger-icon remove-icon">
                  <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                </span>
              </button>
            </div>
          </div>
          <div class="checkout-content-body">
            <div class="checkout-products">
              <div class="checkout-products-list">
                <div class="checkout-products-item product-2">
                  <div class="product-2-img">
                    <img src="img/product-2.png" alt="img">
                  </div>
                  <div class="product-2-info">
                    <a class="product-2-title link-black" href="">название товара<br> в две строки</a>
                    <div class="product-2-info-bottom">
                      <span class="product-2-size">50*70</span>
                      <span class="product-2-print">
                        <img src="img/radio-print-1.png" alt="img">
                      </span>
                      <span class="product-2-color" style="background-color: #497BB8;"></span>
                      <button class="product-2-arrow-trigger" type="button"><svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.999 1.002s1.2257.8856 1.9091 1.6666 1.591 2.3333 1.591 2.3333.9074-1.5522 1.5908-2.3333C6.7733 1.8876 7.999 1.002 7.999 1.002" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                    </div>
                  </div>
                  <div class="product-2-amount amount">
                    <button class="amount-trigger minus" type="button">-</button>
                    <input class="amount-input" type="text" maxlength="3" value="2">
                    <button class="amount-trigger plus" type="button">+</button>
                  </div>
                  <div class="product-2-info-2">
                    <span class="product-2-total">15 000 ₽</span>
                    <span class="product-2-sale-price">17 980</span>
                    <span class="product-2-number">2 × 6 990 ₽</span>
                  </div>
                  <button class="product-2-remove-btn remove-icon" type="button">
                    <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                  </button>
                </div>
              </div>
              <div class="checkout-complects">
                <div class="checkout-complects-top">
                  <p class="checkout-complects-title">Комплект односпального белья</p>
                  <div class="checkout-complects-amount amount">
                    <button class="amount-trigger minus" type="button">-</button>
                    <input class="amount-input" type="text" maxlength="3" value="1">
                    <button class="amount-trigger plus" type="button">+</button>
                  </div>
                  <span class="checkout-complects-total">20 000 ₽</span>
                  <button class="checkout-complects-remove-btn remove-icon" type="button">
                    <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5364 2.436a.468.468 0 0 0-.3469-.1547H.8145a.4687.4687 0 0 0-.3469.1546.4687.4687 0 0 0-.1218.361l.8625 8.5172a1.4064 1.4064 0 0 0 1.4062 1.2797h5.7797a1.4063 1.4063 0 0 0 1.4063-1.275l.8578-8.522a.4696.4696 0 0 0-.1219-.361ZM8.863 11.2296a.4687.4687 0 0 1-.4688.4265H2.6098a.4688.4688 0 0 1-.4687-.4312l-.8063-8.0062h8.3344l-.8062 8.0109ZM3.1563 1.3438h4.6875a.4688.4688 0 0 0 0-.9376H3.1563a.4688.4688 0 0 0 0 .9375Z" fill="#72716E"/><path d="M4.0938 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688ZM6.9063 9.7813a.4688.4688 0 0 0 .4687-.4688v-3.75a.4688.4688 0 0 0-.9375 0v3.75a.4688.4688 0 0 0 .4688.4688Z" fill="#72716E"/></svg>
                  </button>
                </div>
                <div class="checkout-complects-list">
                  <div class="checkout-complects-item product-2">
                    <div class="product-2-img">
                      <img src="img/product-2.png" alt="img">
                    </div>
                    <div class="product-2-info">
                      <a class="product-2-title link-black" href="">Наволочка<br> двухсторонняя</a>
                      <div class="product-2-info-bottom">
                        <span class="product-2-size">50*70</span>
                        <span class="product-2-print">
                          <img src="img/radio-print-1.png" alt="img">
                        </span>
                        <span class="product-2-color" style="background-color: #497BB8;"></span>
                      </div>
                    </div>
                    <div class="product-2-info-2">
                      <span class="product-2-total">15 000 ₽</span>
                      <span class="product-2-sale-price">17 980</span>
                      <span class="product-2-number">2 × 6 990 ₽</span>
                    </div>
                  </div>
                  <div class="checkout-complects-item product-2">
                    <div class="product-2-img">
                      <img src="img/product-2.png" alt="img">
                    </div>
                    <div class="product-2-info">
                      <a class="product-2-title link-black" href="">Пододеяльник<br> двухсторонний</a>
                      <div class="product-2-info-bottom">
                        <span class="product-2-size">50*70</span>
                        <span class="product-2-print">
                          <img src="img/radio-print-1.png" alt="img">
                        </span>
                        <span class="product-2-color" style="background-color: #497BB8;"></span>
                      </div>
                    </div>
                    <div class="product-2-info-2">
                      <span class="product-2-total">15 000 ₽</span>
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
                <span>Товаров на</span>
                <span>31 489 ₽</span>
              </li>
              <li class="checkout-sidebar-item">
                <span>Скидка</span>
                <span>31 489 ₽</span>
              </li>
              <li class="checkout-sidebar-item">
                <button class="checkout-delivery-trigger" data-mfp-src="#checkout-delivery-popup" type="button">Информация о доставке</button>
              </li>
            </ul>
            
            <label class="checkout-sidebar-checkbox-1 checkbox">
              <input class="checkbox-input" type="checkbox" checked>
              <span class="checkbox-custom">
                <svg width="8" height="6" viewBox="0 0 8 6" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.7.3c-.4-.4-1-.4-1.4 0L3 3.6 1.7 2.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l2 2c.2.2.4.3.7.3.3 0 .5-.1.7-.3l4-4c.4-.4.4-1 0-1.4Z"/></svg>
              </span>
              <span class="checkbox-text-2 checkbox-text">
                <span>Подарочная<br> упаковка</span>
                <span>500 ₽</span>
              </span>
            </label>

            <button class="checkbox-ordering-btn btn btn-large" type="button">
              <span class="btn-text">Оформить заказ</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- footer -->
  <?php include 'include-blocks/footer.php' ?>

  <div id="checkout-delivery-popup" class="popup-delivery mfp-hide popup-main">
    <button class="popup-close-trigger btn-close mfp-close" type="button">
      <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1.1765 7.1765-.6962-.6962L2.967 3.9936.4867 1.5133l.698-.698L3.665 3.2956 6.1372.8235l.6962.6962-2.4722 2.4721 2.4804 2.4804-.698.698-2.4804-2.4804-2.4867 2.4867Z" fill="#72716E"/></svg>
    </button>
    <p class="popup-delivery-title popup-title">Информация о доставке</p>
    
    <label class="input-wrap">
      <select class="input-select">
        <option value="0">Санкт-Петербург</option>
        <option value="0">Санкт-Петербург</option>
        <option value="0">Санкт-Петербург</option>
      </select>
      <span class="input-text">Город доставки:</span>
      <span class="input-border"></span>
      <span class="input-error">Имя должно содержать минимум 2 символа</span>
    </label>
    <div class="popup-list">
      <div class="popup-item">
        <div class="popup-item-content">
          <span class="popup-item-title">Почта России (EMS)</span>
          <p class="popup-item-text">Экспресс-отправления EMS — это самый быстрый и удобный способ доставить письмо или посылку по России и за границу. Курьер заберет отправление в удобном для вас месте и доставит его адресату домой или в офис. Экспресс-отправление является регистрируемым, его доставку и вручение можно отследить с помощью трек-номера. В городах, где нет курьерской службы EMS, отправить и получить экспресс-отправление можно через отделение Почты России</p>
        </div>
        <div class="popup-item-sidebar">
          <span class="popup-item-sidebar-title">500 ₽</span>
          <span class="popup-item-sidebar-text">до 1 раб. дня</span>
        </div>
      </div>
      <div class="popup-item">
        <div class="popup-item-content">
          <span class="popup-item-title">Самовывоз</span>
          <p class="popup-item-text">Вы можете самостоятельно забрать заказ из нашего магазина.</p>
        </div>
        <div class="popup-item-sidebar">
          <span class="popup-item-sidebar-title">бесплатно</span>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>