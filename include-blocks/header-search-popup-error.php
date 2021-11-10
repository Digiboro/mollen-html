<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Поиск сверху (Ошибка)</title>
</head>

<body>
  <div class="header-search">
    <div class="header-search-head">
      <div class="container">
        <div class="header-search-head-inner">
          <button class="header-search-submit">
            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 7.5C2 4.4624 4.4624 2 7.5 2S13 4.4624 13 7.5 10.5376 13 7.5 13 2 10.5376 2 7.5ZM7.5 0C3.3579 0 0 3.3579 0 7.5S3.3579 15 7.5 15c2.0216 0 3.8565-.7999 5.2052-2.1004.056.0958.1289.1838.2184.2595l3.1412 2.6543.7638.6454 1.2909-1.5276-.7638-.6454-3.1412-2.6543a.996.996 0 0 0-.3344-.1869C14.5901 10.2986 15 8.9472 15 7.5 15 3.3579 11.6421 0 7.5 0Z" fill="#1E1E1E"/></svg>
          </button>
          <input class="header-search-input" type="text" placeholder="Что ищем?" value="ывап">
          <button class="header-search-close-btn close-btn"><svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1.1765 7.1765-.6962-.6962L2.967 3.9936.4867 1.5133l.698-.698L3.665 3.2956 6.1372.8235l.6962.6962-2.4722 2.4721 2.4804 2.4804-.698.698-2.4804-2.4804-2.4867 2.4867Z" fill="#72716E"/></svg></button>
        </div>
      </div>
    </div>

    <div class="header-search-body">
      <div class="container">
        <div class="header-search-body-inner">
          <p class="header-search-error-text">По вашему запросу ничего не найдено. Попробуйте снова или перейдите в каталог.</p>
          
          <a class="header-search-catalog btn btn-small" href="">
            <span class="btn-text">Каталог</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>