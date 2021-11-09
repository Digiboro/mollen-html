<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Информация о доставке (Popup)</title>
</head>

<body class="popup-is-open">
  <!-- header -->
  <?php include 'include-blocks/header-no-border.php' ?>


  <!-- footer -->
  <?php include 'include-blocks/footer.php' ?>

  <div class="popup popup-medium">
    <div class="popup-container">
      <div class="popup-inner">
        <form class="popup-callback-form">
          <button class="popup-close-trigger btn-close">
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
        </form>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>