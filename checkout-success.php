<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Успех (Оформление заказа)</title>
</head>

<body>
  <!-- header -->
  <?php include 'include-blocks/header.php' ?>

  <main class="main-checkout main">
    <div class="container no-padding-desktop">
      <div class="main-checkout-inner grid-2-cols">
        <div class="main-checkout-content-wrap col">
          <div class="breadcrumbs">
            <ul class="breadcrumbs-list">
              <li class="breadcrumbs-item">
                <a class="breadcrumbs-link" href="">Главная</a>
              </li>
              <li class="breadcrumbs-item">
                Контакты
              </li>
            </ul>
          </div>

          <h2 class="main-checkout-title">Заказ сформирован</h2>
          
          <div class="main-checkout-bottom">
            <p class="main-checkout-text">Ваш заказ №5127 от 25.08.2021 15:47 успешно создан.<br> Номер вашей оплаты: №5127/1</p>
            <p class="main-checkout-text">Вы можете следить за выполнением своего заказа в Персональном разделе сайта. Обратите внимание, что для входа в этот раздел вам необходимо будет ввести логин и пароль пользователя сайта.</p>
            <a class="main-checkout-btn btn btn-large" href="">
              <span class="btn-text">Личный кабинет</span>
            </a>
          </div>
        </div>

        <div class="col">
          <div class="main-checkout-img">
            <img width="720" height="739" src="img/checkout.jpg" alt="img">
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