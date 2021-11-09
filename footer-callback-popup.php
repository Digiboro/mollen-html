<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Заказать звонок (Popup)</title>
</head>

<body class="popup-is-open">
  <!-- header -->
  <?php include 'include-blocks/header-no-border.php' ?>


  <!-- footer -->
  <?php include 'include-blocks/footer.php' ?>

  <div class="popup popup-small">
    <div class="popup-container">
      <div class="popup-inner">
        <form class="popup-callback-form">
          <button class="popup-close-trigger btn-close">
            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1.1765 7.1765-.6962-.6962L2.967 3.9936.4867 1.5133l.698-.698L3.665 3.2956 6.1372.8235l.6962.6962-2.4722 2.4721 2.4804 2.4804-.698.698-2.4804-2.4804-2.4867 2.4867Z" fill="#72716E"/></svg>
          </button>
          <p class="popup-title">Заказать звонок</p>
          
          <label class="input-wrap">
            <input class="input error" type="text" placeholder="Иван">
            <span class="input-text">Имя *</span>
            <span class="input-border"></span>
            <span class="input-error">Имя должно содержать минимум 2 символа</span>
          </label>
          
          <label class="input-wrap">
            <input class="input" type="text" placeholder="+ 7 (_______)  _________  -  _____  -  _____" disabled>
            <span class="input-text">Телефон *</span>
            <span class="input-border"></span>
          </label>
          
          <label class="input-wrap">
            <input class="input" type="text", placeholder="Ваш комментарий">
            <span class="input-text">Комментарий</span>
            <span class="input-border"></span>
          </label>

          <label class="popup-callback-checkbox checkbox">
            <input class="checkbox-input" type="checkbox" checked>
            <span class="checkbox-custom">
              <svg width="8" height="6" viewBox="0 0 8 6" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.7.3c-.4-.4-1-.4-1.4 0L3 3.6 1.7 2.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l2 2c.2.2.4.3.7.3.3 0 .5-.1.7-.3l4-4c.4-.4.4-1 0-1.4Z"/></svg>
            </span>
            <span class="checkbox-text-1 checkbox-text">
              <span>Я согласен на <a class="checkbox-link" href="">обработку персональных данных</a></span>
            </span>
          </label>
          
          <button class="btn btn-medium" type="submit">
            <span class="btn-text">Отправить</span>
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>