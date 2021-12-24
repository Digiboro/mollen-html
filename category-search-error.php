<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Поисковая выдача без результата</title>
</head>

<body>
  <!-- header -->
  <?php include 'include-blocks/header.php' ?>

  <main class="category main-category main">
    <div class="container no-padding-desktop">
      <div class="category-inner grid-1-3-cols">
        <!-- sidebar -->
        <?php include 'include-blocks/sidebar.php' ?>
        
        <div class="category-content col">
          <div class="category-content-top">
            <div class="category-content-top-inner">
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
              <h2 class="category-title h2">Пододеяльник</h2>
              <p class="category-content-top-text">По запросу “подельник” не нашлось ничего, возможно вам понравится что-то другое из нашего каталога </p>
            </div>
          </div>

          <div class="category-content-filter">
            <button class="category-content-filter-trigger" type="button">
              <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h21M0 11h21M0 18h21" stroke="#222730"/><circle cx="14" cy="4" r="3" fill="#fff" stroke="#222730"/><circle cx="7" cy="11" r="3" fill="#fff" stroke="#222730"/><circle cx="14" cy="18" r="3" fill="#fff" stroke="#222730"/></svg>
              <span>Фильтры</span>
            </button>
          </div>
          
          <div class="category-content-actions">
            <div class="category-sort">
              <button class="category-filter-popular category-sort-btn" type="button">
                <span>По популярности</span>
                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 5s-1.2257-.8856-1.909-1.6667C5.4074 2.5523 4.5 1 4.5 1m0 0s-.9075 1.5523-1.591 2.3333C2.2258 4.1143 1 5 1 5m3.5-4v7" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
              <button class="category-filter-price category-sort-btn" type="button">
                <span>По цене</span>
                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 5s-1.2257-.8856-1.909-1.6667C5.4074 2.5523 4.5 1 4.5 1m0 0s-.9075 1.5523-1.591 2.3333C2.2258 4.1143 1 5 1 5m3.5-4v7" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
            </div>
            <div class="category-buttons">
              <button class="category-instock-btn btn-dot" type="button">В наличии</button>
              <button class="category-special-btn btn-dot btn-dot-blue" type="button">Спецпредложения</button>
            </div>
          </div>

          <div class="category-product-list">
            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-top">
                  <div class="product-top-first">
                    <span class="product-number">2C3M4104</span>
                    <span class="product-instock">есть в наличии (10+)</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-color-selected" style="background: url('img/product-print.png');" type="button">
                      </button>
                      <div class="product-color-list-wrap">
                        <div class="product-color-list">
                          <button class="product-color-item" style="background: #59C9D5;" type="button">
                          </button>
                          <button class="product-color-item" style="background: #497BB8" type="button">
                          </button>
                          <button class="product-color-item" style="background: #E6ECE0" type="button">
                          </button>
                          <button class="product-color-item" style="background: url('img/product-print.png');" type="button">
                          </button>
                        </div>
                      </div>
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

            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-top">
                  <div class="product-top-first">
                    <span class="product-number">2C3M4104</span>
                    <span class="product-instock">есть в наличии (10+)</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-color-selected" style="background: url('img/product-print.png');" type="button">
                      </button>
                      <div class="product-color-list-wrap">
                        <div class="product-color-list">
                          <button class="product-color-item" style="background: #59C9D5;" type="button">
                          </button>
                          <button class="product-color-item" style="background: #497BB8" type="button">
                          </button>
                          <button class="product-color-item" style="background: #E6ECE0" type="button">
                          </button>
                          <button class="product-color-item" style="background: url('img/product-print.png');" type="button">
                          </button>
                        </div>
                      </div>
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

            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-top">
                  <div class="product-top-first">
                    <span class="product-number">2C3M4104</span>
                    <span class="product-instock">есть в наличии (10+)</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-color-selected" style="background: url('img/product-print.png');" type="button">
                      </button>
                      <div class="product-color-list-wrap">
                        <div class="product-color-list">
                          <button class="product-color-item" style="background: #59C9D5;" type="button">
                          </button>
                          <button class="product-color-item" style="background: #497BB8" type="button">
                          </button>
                          <button class="product-color-item" style="background: #E6ECE0" type="button">
                          </button>
                          <button class="product-color-item" style="background: url('img/product-print.png');" type="button">
                          </button>
                        </div>
                      </div>
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

            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-top">
                  <div class="product-top-first">
                    <span class="product-number">2C3M4104</span>
                    <span class="product-instock">есть в наличии (10+)</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-color-selected" style="background: url('img/product-print.png');" type="button">
                      </button>
                      <div class="product-color-list-wrap">
                        <div class="product-color-list">
                          <button class="product-color-item" style="background: #59C9D5;" type="button">
                          </button>
                          <button class="product-color-item" style="background: #497BB8" type="button">
                          </button>
                          <button class="product-color-item" style="background: #E6ECE0" type="button">
                          </button>
                          <button class="product-color-item" style="background: url('img/product-print.png');" type="button">
                          </button>
                        </div>
                      </div>
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

            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-top">
                  <div class="product-top-first">
                    <span class="product-number">2C3M4104</span>
                    <span class="product-instock">есть в наличии (10+)</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-color-selected" style="background: url('img/product-print.png');" type="button">
                      </button>
                      <div class="product-color-list-wrap">
                        <div class="product-color-list">
                          <button class="product-color-item" style="background: #59C9D5;" type="button">
                          </button>
                          <button class="product-color-item" style="background: #497BB8" type="button">
                          </button>
                          <button class="product-color-item" style="background: #E6ECE0" type="button">
                          </button>
                          <button class="product-color-item" style="background: url('img/product-print.png');" type="button">
                          </button>
                        </div>
                      </div>
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
            
            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-top">
                  <div class="product-top-first">
                    <span class="product-number">2C3M4104</span>
                    <span class="product-instock">есть в наличии (10+)</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-color-selected" style="background: url('img/product-print.png');" type="button">
                      </button>
                      <div class="product-color-list-wrap">
                        <div class="product-color-list">
                          <button class="product-color-item" style="background: #59C9D5;" type="button">
                          </button>
                          <button class="product-color-item" style="background: #497BB8" type="button">
                          </button>
                          <button class="product-color-item" style="background: #E6ECE0" type="button">
                          </button>
                          <button class="product-color-item" style="background: url('img/product-print.png');" type="button">
                          </button>
                        </div>
                      </div>
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
    </div>
  </main>

  <!-- footer -->
  <?php include 'include-blocks/footer.php' ?>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>