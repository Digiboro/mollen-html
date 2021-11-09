<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Корзина выезжающая</title>
</head>

<body>
  <div class="header-cart">
    <div class="header-cart-inner">
      <div class="header-cart-head">
        <p class="header-cart-title">Корзина</p>
        <button class="header-cart-trigger btn-close">
          <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1.1765 7.1765-.6962-.6962L2.967 3.9936.4867 1.5133l.698-.698L3.665 3.2956 6.1372.8235l.6962.6962-2.4722 2.4721 2.4804 2.4804-.698.698-2.4804-2.4804-2.4867 2.4867Z" fill="#72716E"/></svg>
        </button>
      </div>
      <div class="header-cart-body">
        <div class="header-cart-list">
          <div class="header-cart-item product-2">
            <div class="product-2-img">
              <img src="img/header-cart-product.png" alt="img">
            </div>
            <div class="product-2-info">
              <a class="product-2-title link-black" href="">Название товара<br> в две строки</a>
              <div class="product-2-info-bottom">
                <span class="product-2-size">50*70</span>
                <span class="product-2-print">
                  <img src="img/radio-print-1.png" alt="img">
                </span>
                <span class="product-2-color" style="background-color: #497BB8;"></span>
                <button class="product-2-arrow-trigger" type="button"><svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.999 1.002s1.2257.8856 1.9091 1.6666 1.591 2.3333 1.591 2.3333.9074-1.5522 1.5908-2.3333C6.7733 1.8876 7.999 1.002 7.999 1.002" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
              </div>
              <div class="product-2-info-price-amount">
                <span class="product-2-total">18 000 ₽</span>
                <div class="amount">
                  <button class="amount-trigger minus" type="button">-</button>
                  <input class="amount-input" type="text" maxlength="3" value="1">
                  <button class="amount-trigger plus" type="button">+</button>
                </div>
              </div>
            </div>
          </div>
          <div class="header-cart-item product-2">
            <div class="product-2-img">
              <img src="img/header-cart-product.png" alt="img">
            </div>
            <div class="product-2-info">
              <a class="product-2-title link-black" href="">Название товара<br> в две строки</a>
              <div class="product-2-info-bottom">
                <span class="product-2-size">50*70</span>
                <span class="product-2-print">
                  <img src="img/radio-print-1.png" alt="img">
                </span>
                <span class="product-2-color" style="background-color: #497BB8;"></span>
                <button class="product-2-arrow-trigger" type="button"><svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.999 1.002s1.2257.8856 1.9091 1.6666 1.591 2.3333 1.591 2.3333.9074-1.5522 1.5908-2.3333C6.7733 1.8876 7.999 1.002 7.999 1.002" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
              </div>
              <div class="product-2-info-price-amount">
                <span class="product-2-total">18 000 ₽</span>
                <div class="amount">
                  <button class="amount-trigger minus" type="button">-</button>
                  <input class="amount-input" type="text" maxlength="3" value="1">
                  <button class="amount-trigger plus" type="button">+</button>
                </div>
              </div>
            </div>
          </div>
          <div class="header-cart-item product-2">
            <div class="product-2-img">
              <img src="img/header-cart-product.png" alt="img">
            </div>
            <div class="product-2-info">
              <a class="product-2-title link-black" href="">Название товара<br> в две строки</a>
              <div class="product-2-info-bottom">
                <span class="product-2-size">50*70</span>
                <span class="product-2-print">
                  <img src="img/radio-print-1.png" alt="img">
                </span>
                <span class="product-2-color" style="background-color: #497BB8;"></span>
                <button class="product-2-arrow-trigger" type="button"><svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.999 1.002s1.2257.8856 1.9091 1.6666 1.591 2.3333 1.591 2.3333.9074-1.5522 1.5908-2.3333C6.7733 1.8876 7.999 1.002 7.999 1.002" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
              </div>
              <div class="product-2-info-price-amount">
                <span class="product-2-total">18 000 ₽</span>
                <div class="amount">
                  <button class="amount-trigger minus" type="button">-</button>
                  <input class="amount-input" type="text" maxlength="3" value="1">
                  <button class="amount-trigger plus" type="button">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="header-cart-total-title">Сумма</p>
        <p class="header-cart-total">18 000₽</p>
        <a class="header-cart-btn btn btn-large" href="">
          <span class="btn-text">Перейти в корзину</span>
        </a>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>