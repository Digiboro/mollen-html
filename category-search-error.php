<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Поисковая выдача без результата</title>
</head>

<body>
  <!-- header -->
  <?php include 'include-blocks/header.php' ?>

  <main class="main-category main">
    <div class="container no-padding-desktop">
      <div class="main-category-inner row-1-3">
        <div class="main-category-sidebar sidebar row-1-3-col-1">
          <div class="sidebar-item">
            <p class="sidebar-main-title">Категории</p>
            
            <div class="main-category-radio-wrap form-circle-radio-wrap">
              <label class="form-circle-radio">
                <input class="form-circle-radio-input" type="radio" name="category">
                <span class="form-circle-radio-custom"></span>
                <span class="form-circle-radio-text">Постельное белье</span>
              </label>
            </div>

            <div class="main-category-radio-wrap form-circle-radio-wrap">
              <label class="form-circle-radio">
                <input class="form-circle-radio-input" type="radio" name="category">
                <span class="form-circle-radio-custom"></span>
                <span class="form-circle-radio-text">Одежда</span>
              </label>
            </div>

            <div class="main-category-radio-wrap form-circle-radio-wrap">
              <label class="form-circle-radio">
                <input class="form-circle-radio-input" type="radio" name="category">
                <span class="form-circle-radio-custom"></span>
                <span class="form-circle-radio-text">Ароматы</span>
              </label>
            </div>

            <div class="main-category-radio-wrap form-circle-radio-wrap">
              <label class="form-circle-radio">
                <input class="form-circle-radio-input" type="radio" name="category">
                <span class="form-circle-radio-custom"></span>
                <span class="form-circle-radio-text">Аксессуары</span>
              </label>
            </div>
          </div>

          <div class="sidebar-item">
            <p class="sidebar-item-title">Размер, см</p>
            
            <div class="main-category-size-radio-wrap form-size-radio-wrap">
              <label class="form-size-radio">
                <input class="form-size-radio-input" type="radio" name="size" checked>
                <span class="form-size-radio-custom"></span>
                <b class="form-size-radio-text">50*70</b>
              </label>
            
              <label class="form-size-radio">
                <input class="form-size-radio-input" type="radio" name="size">
                <span class="form-size-radio-custom"></span>
                <b class="form-size-radio-text">50*70</b>
              </label>
            
              <label class="form-size-radio">
                <input class="form-size-radio-input" type="radio" name="size">
                <span class="form-size-radio-custom"></span>
                <b class="form-size-radio-text">60*70</b>
              </label>
            
              <label class="form-size-radio">
                <input class="form-size-radio-input" type="radio" name="size">
                <span class="form-size-radio-custom"></span>
                <b class="form-size-radio-text">90*120</b>
              </label>
            </div>
          </div>

          <div class="sidebar-item">
            <p class="sidebar-item-title">Принт</p>
            
            <div class="main-category-print-radio-wrap form-print-radio-wrap">
              <label class="form-print-radio">
                <input class="form-print-radio-input" type="radio" name="print" checked>
                <span class="form-print-radio-custom"></span>
                <span class="form-print-radio-list">
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-1.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-2.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-3.png" alt="img">
                  </span>
                </span>
              </label>
              
              <label class="form-print-radio">
                <input class="form-print-radio-input" type="radio" name="print">
                <span class="form-print-radio-custom"></span>
                <span class="form-print-radio-list">
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-1.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-2.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-3.png" alt="img">
                  </span>
                </span>
              </label>
              
              <label class="form-print-radio">
                <input class="form-print-radio-input" type="radio" name="print">
                <span class="form-print-radio-custom"></span>
                <span class="form-print-radio-list">
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-1.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-2.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-3.png" alt="img">
                  </span>
                </span>
              </label>
              
              <label class="form-print-radio">
                <input class="form-print-radio-input" type="radio" name="print">
                <span class="form-print-radio-custom"></span>
                <span class="form-print-radio-list">
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-1.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-2.png" alt="img">
                  </span>
                  <span class="form-print-radio-item">
                    <img src="img/radio-print-3.png" alt="img">
                  </span>
                </span>
              </label>
            </div>
          </div>

          <div class="sidebar-item">
            <p class="sidebar-item-title">Цвета</p>
            
            <div class="main-category-color-radio-wrap form-color-radio-wrap active">
              <div class="form-color-radio-list">
                <div class="form-color-radio-list-shown">
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #497BB8;"></span>
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
                    <span class="form-color-radio-custom" style="background-color: #59C9D5;"></span>
                  </label>

                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #FF988F;"></span>
                  </label>
                </div>
                <div class="form-color-radio-list-hidden">
                  <label class="form-color-radio">
                    <input class="form-color-radio-input" type="radio" name="color">
                    <span class="form-color-radio-custom" style="background-color: #59C9D5;"></span>
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
                    <span class="form-color-radio-custom" style="background-color: #FFD55D;"></span>
                  </label>
                </div>
              </div>
              <button class="form-color-radio-toggler" type="button"><svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.6758 1.3398s1.2257.8857 1.909 1.6667c.6835.781 1.591 2.3333 1.591 2.3333s.9075-1.5522 1.5909-2.3333c.6834-.781 1.909-1.6667 1.909-1.6667" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
              
            </div>
          </div>

          <div class="sidebar-item">
            <p class="sidebar-item-title">Цена, ₽</p>
            Сюда добавить Select
          </div>

          <div class="sidebar-item">
            <button class="sidebar-size-guide-trigger" type="button">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#72716E" d="M1 1h28v28H1z"/><path d="M23 17V7H13M7 23V13m0 10h10M7 23 23 7" stroke="#72716E"/></svg>
              <span>Размерный гид</span>
          </button>
            
          </div>

        </div>

        <div class="main-category-content row-1-3-col-2">
          <div class="main-category-content-top">
            <div class="main-category-content-top-inner">
              <div class="breadcrumbs">
                <ul class="breadcrumbs-list">
                  <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="">Главная</a>
                  </li>
                  <li class="breadcrumbs-item">
                    Каталог
                  </li>
                </ul>
              </div>
              <h2 class="main-category-title h2">Пододеяльник</h2>
              <p class="main-category-content-top-text">По запросу “подельник” не нашлось ничего, возможно вам понравится что-то другое из нашего каталога </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- footer -->
  <?php include 'include-blocks/footer.php' ?>

  <script src="js/main.js"></script>
</body>

</html>