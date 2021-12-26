<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Категория 1 уровень</title>
</head>

<body>
  <!-- header -->
  <?php include 'include-blocks/header.php' ?>
  <!-- category -->
  <main class="category main-category main">
    <div class="container no-padding-desktop">
      <div class="category-slider-wrap">
        <div class="category-slider swiper-container">
          <div class="category-slider-inner swiper-wrapper">
            <div class="category-slider-item swiper-slide">
              <img class="category-slider-item-img" src="img/category-slider-1.jpg" alt="img">
              <div class="category-slider-item-content">
                <p class="category-slider-title">новая<br> коллекция</p>
                <p class="category-slider-text">У каждого принта «Моллен» есть своя история,<br> которую мы вам сейчас расскажем.</p>
                <a class="category-slider-btn btn btn-extra-small btn-white btn-dot-2" href="">
                  <span class="btn-text">перейти</span>
                </a>
              </div>
            </div>
            
            <div class="category-slider-item swiper-slide">
              <img class="category-slider-item-img" src="img/category-slider-1.jpg" alt="img">
              <div class="category-slider-item-content">
                <p class="category-slider-title">новая<br> коллекция</p>
                <p class="category-slider-text">У каждого принта «Моллен» есть своя история,<br> которую мы вам сейчас расскажем.</p>
                <a class="category-slider-btn btn btn-extra-small btn-white btn-dot-2" href="">
                  <span class="btn-text">перейти</span>
                </a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
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
              <h2 class="category-title h2">Популярные товары</h2>
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

          <div class="category-product-list category-bottom-margin">
            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-labels">
                  <span class="product-label new">new</span>
                  <span class="product-label hit">хит</span>
                  <span class="product-label sale">-10%</span>
                </div>
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
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
                    <span class="btn-text">В корзину</span>
                  </button>
                  <button class="product-quickbuy" type="button">Быстрая покупка</button>
                </div>
              </div>
            </div>

            <div class="product disabled">
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
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
                    <span class="btn-text">В корзину</span>
                  </button>
                  <button class="product-quickbuy" type="button">Быстрая покупка</button>
                </div>
              </div>
            </div>
          </div>

          <p class="category-complects-title">Готовые комплекты</p>
          
          <div class="category-complects-list category-bottom-margin">
            <div class="product hover-effect">
              <div class="product-inner">
                <div class="product-top">
                  <div class="product-top-first">
                    <span class="product-complect-title">комплект Mollen</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-complect-trigger" type="button">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9346 13.4503c.3451.2536.8174.2847 1.3347.3016.6516.0237 1.3871.1032 2.132.2127.6756.0987 1.4694.3085 2.1324.5763 1.2339.5172 2.3177 1.1524 3.4948 2.3797.0728.0759.1854.1057.2832.0687 1.2748-.4782 2.0118-1.4081 2.3279-2.2294.331-.8559.3719-1.7822.0705-2.6942-.2729-.8222-.7835-1.5154-1.4989-1.9749.3082-.7927.315-1.6542.0523-2.4796-.2911-.9153-.8688-1.6402-1.6387-2.1386-.77-.4982-1.9789-.8232-3.3527-.4182-1.3294.3907-2.7464 1.3879-3.6399 2.3671-.9545 1.048-1.5872 2.225-2.0352 3.3597-.1703.4509-.3377 1.0662-.2795 1.5601.0635.459.2524.8451.6171 1.109Zm-.9631 2.903c-.1344.4068-.0181.8659.1257 1.3635.1789.6277.3306 1.3522.4567 2.0952.115.6734.1608 1.4935.1113 2.2076-.1101 1.3346-.3789 2.5625-1.1812 4.0622-.0497.0929-.0434.2086.0223.291.8482 1.0657 1.9594 1.4795 2.8379 1.5271.9153.0496 1.8081-.1971 2.5814-.7662.6972-.5131 1.1987-1.2139 1.4136-2.0371.8484.0492 1.6695-.2108 2.3723-.716.7802-.5601 1.2908-1.334 1.5262-2.2205.2354-.8867.1706-2.1387-.6391-3.3213-.7813-1.1443-2.1665-2.1845-3.3742-2.7327-1.2908-.5846-2.6044-.8232-3.821-.8991-.481-.0227-1.1176.0082-1.5689.216-.4166.2024-.725.5015-.863.9303Zm-3.0564-.0198c-.4279-.0022-.8285.2504-1.2569.5411-.541.3642-1.1827.7325-1.8497 1.0822-.6045.3175-1.3695.6145-2.0634.7881-1.3023.3076-2.5522.4311-4.2252.1309-.1036-.0186-.2116.0232-.2696.1111-.7506 1.1368-.8004 2.3224-.5742 3.1732.2357.8867.746 1.6604 1.5258 2.2205.703.5052 1.5237.7652 2.3727.716.2154.8232.7161 1.524 1.4134 2.0371.7733.5691 1.6663.8158 2.5817.7662.9153-.0497 2.085-.4985 2.9586-1.6344.8457-1.0979 1.4061-2.738 1.5542-4.056.1566-1.4095-.0227-2.7339-.3266-3.9154-.1272-.4649-.353-1.0612-.6901-1.4266-.321-.3339-.7005-.5351-1.1507-.534Zm1.5586-4.6972c.3476-.25.5232-.69.6991-1.1771.2238-.613.5267-1.2884.8609-1.9637.3025-.6125.7471-1.3029 1.2065-1.8515.8729-1.015 1.8112-1.8502 3.3408-2.5915.0956-.0459.1581-.1433.1536-.2485-.0603-1.3613-.7165-2.3497-1.3989-2.905-.7118-.5786-1.579-.9043-2.5389-.899-.8654.0051-1.6821.2775-2.3399.8168-.6578-.5393-1.4744-.8117-2.3399-.8167-.9598-.0054-1.8272.3203-2.5386.899-.7113.5787-1.394 1.63-1.4337 3.0628-.0394 1.3857.4704 3.0422 1.1247 4.1956.701 1.2324 1.6239 2.1984 2.5636 2.9755.3759.3014.9089.6509 1.3962.7481.4559.0814.8811.0209 1.2445-.2448Zm-2.4842 1.782c-.1301-.4082-.4939-.7113-.9025-1.0292-.5134-.4025-1.0616-.8995-1.6-1.4264-.4886-.4771-1.0072-1.1136-1.3865-1.7205-.6948-1.1445-1.1985-2.2959-1.43-3.9813-.0144-.1043-.0875-.1943-.189-.2224-1.3123-.363-2.4542-.0441-3.1928.4341-.7697.4984-1.3472 1.2233-1.6385 2.1386-.2628.8252-.2564 1.6869.0527 2.4796-.7156.4595-1.2268 1.1527-1.499 1.9749-.3018.912-.2603 1.8383.0697 2.6942.33.8559 1.118 1.8306 2.4674 2.3111 1.3047.4657 3.0363.4924 4.3346.226 1.3876-.2864 2.5907-.8664 3.6196-1.5207.4026-.2647.8994-.6641 1.1424-1.0978.2182-.4088.292-.8323.1519-1.2602Z" fill="#4E76C6"/></svg>
                      </button>
                    </div>
                  </div>
                </div>
                
                <a class="product-img" href="">
                  <img src="img/product.png" alt="img">
                </a>

                <div class="product-info">
                  <a class="product-title link-black" href="">название комплекта<br> в две строки</a>
                  <span class="product-amount">>5 шт – 16 000₽/шт</span>
                  <span class="product-price">15 000 ₽</span>
                </div>

                <div class="product-bottom">
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                    <span class="product-complect-title">комплект Mollen</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-complect-trigger" type="button">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9346 13.4503c.3451.2536.8174.2847 1.3347.3016.6516.0237 1.3871.1032 2.132.2127.6756.0987 1.4694.3085 2.1324.5763 1.2339.5172 2.3177 1.1524 3.4948 2.3797.0728.0759.1854.1057.2832.0687 1.2748-.4782 2.0118-1.4081 2.3279-2.2294.331-.8559.3719-1.7822.0705-2.6942-.2729-.8222-.7835-1.5154-1.4989-1.9749.3082-.7927.315-1.6542.0523-2.4796-.2911-.9153-.8688-1.6402-1.6387-2.1386-.77-.4982-1.9789-.8232-3.3527-.4182-1.3294.3907-2.7464 1.3879-3.6399 2.3671-.9545 1.048-1.5872 2.225-2.0352 3.3597-.1703.4509-.3377 1.0662-.2795 1.5601.0635.459.2524.8451.6171 1.109Zm-.9631 2.903c-.1344.4068-.0181.8659.1257 1.3635.1789.6277.3306 1.3522.4567 2.0952.115.6734.1608 1.4935.1113 2.2076-.1101 1.3346-.3789 2.5625-1.1812 4.0622-.0497.0929-.0434.2086.0223.291.8482 1.0657 1.9594 1.4795 2.8379 1.5271.9153.0496 1.8081-.1971 2.5814-.7662.6972-.5131 1.1987-1.2139 1.4136-2.0371.8484.0492 1.6695-.2108 2.3723-.716.7802-.5601 1.2908-1.334 1.5262-2.2205.2354-.8867.1706-2.1387-.6391-3.3213-.7813-1.1443-2.1665-2.1845-3.3742-2.7327-1.2908-.5846-2.6044-.8232-3.821-.8991-.481-.0227-1.1176.0082-1.5689.216-.4166.2024-.725.5015-.863.9303Zm-3.0564-.0198c-.4279-.0022-.8285.2504-1.2569.5411-.541.3642-1.1827.7325-1.8497 1.0822-.6045.3175-1.3695.6145-2.0634.7881-1.3023.3076-2.5522.4311-4.2252.1309-.1036-.0186-.2116.0232-.2696.1111-.7506 1.1368-.8004 2.3224-.5742 3.1732.2357.8867.746 1.6604 1.5258 2.2205.703.5052 1.5237.7652 2.3727.716.2154.8232.7161 1.524 1.4134 2.0371.7733.5691 1.6663.8158 2.5817.7662.9153-.0497 2.085-.4985 2.9586-1.6344.8457-1.0979 1.4061-2.738 1.5542-4.056.1566-1.4095-.0227-2.7339-.3266-3.9154-.1272-.4649-.353-1.0612-.6901-1.4266-.321-.3339-.7005-.5351-1.1507-.534Zm1.5586-4.6972c.3476-.25.5232-.69.6991-1.1771.2238-.613.5267-1.2884.8609-1.9637.3025-.6125.7471-1.3029 1.2065-1.8515.8729-1.015 1.8112-1.8502 3.3408-2.5915.0956-.0459.1581-.1433.1536-.2485-.0603-1.3613-.7165-2.3497-1.3989-2.905-.7118-.5786-1.579-.9043-2.5389-.899-.8654.0051-1.6821.2775-2.3399.8168-.6578-.5393-1.4744-.8117-2.3399-.8167-.9598-.0054-1.8272.3203-2.5386.899-.7113.5787-1.394 1.63-1.4337 3.0628-.0394 1.3857.4704 3.0422 1.1247 4.1956.701 1.2324 1.6239 2.1984 2.5636 2.9755.3759.3014.9089.6509 1.3962.7481.4559.0814.8811.0209 1.2445-.2448Zm-2.4842 1.782c-.1301-.4082-.4939-.7113-.9025-1.0292-.5134-.4025-1.0616-.8995-1.6-1.4264-.4886-.4771-1.0072-1.1136-1.3865-1.7205-.6948-1.1445-1.1985-2.2959-1.43-3.9813-.0144-.1043-.0875-.1943-.189-.2224-1.3123-.363-2.4542-.0441-3.1928.4341-.7697.4984-1.3472 1.2233-1.6385 2.1386-.2628.8252-.2564 1.6869.0527 2.4796-.7156.4595-1.2268 1.1527-1.499 1.9749-.3018.912-.2603 1.8383.0697 2.6942.33.8559 1.118 1.8306 2.4674 2.3111 1.3047.4657 3.0363.4924 4.3346.226 1.3876-.2864 2.5907-.8664 3.6196-1.5207.4026-.2647.8994-.6641 1.1424-1.0978.2182-.4088.292-.8323.1519-1.2602Z" fill="#4E76C6"/></svg>
                      </button>
                    </div>
                  </div>
                </div>
                
                <a class="product-img" href="">
                  <img src="img/product.png" alt="img">
                </a>

                <div class="product-info">
                  <a class="product-title link-black" href="">название комплекта<br> в две строки</a>
                  <span class="product-amount">>5 шт – 16 000₽/шт</span>
                  <span class="product-price">15 000 ₽</span>
                </div>

                <div class="product-bottom">
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                    <span class="product-complect-title">комплект Mollen</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-complect-trigger" type="button">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9346 13.4503c.3451.2536.8174.2847 1.3347.3016.6516.0237 1.3871.1032 2.132.2127.6756.0987 1.4694.3085 2.1324.5763 1.2339.5172 2.3177 1.1524 3.4948 2.3797.0728.0759.1854.1057.2832.0687 1.2748-.4782 2.0118-1.4081 2.3279-2.2294.331-.8559.3719-1.7822.0705-2.6942-.2729-.8222-.7835-1.5154-1.4989-1.9749.3082-.7927.315-1.6542.0523-2.4796-.2911-.9153-.8688-1.6402-1.6387-2.1386-.77-.4982-1.9789-.8232-3.3527-.4182-1.3294.3907-2.7464 1.3879-3.6399 2.3671-.9545 1.048-1.5872 2.225-2.0352 3.3597-.1703.4509-.3377 1.0662-.2795 1.5601.0635.459.2524.8451.6171 1.109Zm-.9631 2.903c-.1344.4068-.0181.8659.1257 1.3635.1789.6277.3306 1.3522.4567 2.0952.115.6734.1608 1.4935.1113 2.2076-.1101 1.3346-.3789 2.5625-1.1812 4.0622-.0497.0929-.0434.2086.0223.291.8482 1.0657 1.9594 1.4795 2.8379 1.5271.9153.0496 1.8081-.1971 2.5814-.7662.6972-.5131 1.1987-1.2139 1.4136-2.0371.8484.0492 1.6695-.2108 2.3723-.716.7802-.5601 1.2908-1.334 1.5262-2.2205.2354-.8867.1706-2.1387-.6391-3.3213-.7813-1.1443-2.1665-2.1845-3.3742-2.7327-1.2908-.5846-2.6044-.8232-3.821-.8991-.481-.0227-1.1176.0082-1.5689.216-.4166.2024-.725.5015-.863.9303Zm-3.0564-.0198c-.4279-.0022-.8285.2504-1.2569.5411-.541.3642-1.1827.7325-1.8497 1.0822-.6045.3175-1.3695.6145-2.0634.7881-1.3023.3076-2.5522.4311-4.2252.1309-.1036-.0186-.2116.0232-.2696.1111-.7506 1.1368-.8004 2.3224-.5742 3.1732.2357.8867.746 1.6604 1.5258 2.2205.703.5052 1.5237.7652 2.3727.716.2154.8232.7161 1.524 1.4134 2.0371.7733.5691 1.6663.8158 2.5817.7662.9153-.0497 2.085-.4985 2.9586-1.6344.8457-1.0979 1.4061-2.738 1.5542-4.056.1566-1.4095-.0227-2.7339-.3266-3.9154-.1272-.4649-.353-1.0612-.6901-1.4266-.321-.3339-.7005-.5351-1.1507-.534Zm1.5586-4.6972c.3476-.25.5232-.69.6991-1.1771.2238-.613.5267-1.2884.8609-1.9637.3025-.6125.7471-1.3029 1.2065-1.8515.8729-1.015 1.8112-1.8502 3.3408-2.5915.0956-.0459.1581-.1433.1536-.2485-.0603-1.3613-.7165-2.3497-1.3989-2.905-.7118-.5786-1.579-.9043-2.5389-.899-.8654.0051-1.6821.2775-2.3399.8168-.6578-.5393-1.4744-.8117-2.3399-.8167-.9598-.0054-1.8272.3203-2.5386.899-.7113.5787-1.394 1.63-1.4337 3.0628-.0394 1.3857.4704 3.0422 1.1247 4.1956.701 1.2324 1.6239 2.1984 2.5636 2.9755.3759.3014.9089.6509 1.3962.7481.4559.0814.8811.0209 1.2445-.2448Zm-2.4842 1.782c-.1301-.4082-.4939-.7113-.9025-1.0292-.5134-.4025-1.0616-.8995-1.6-1.4264-.4886-.4771-1.0072-1.1136-1.3865-1.7205-.6948-1.1445-1.1985-2.2959-1.43-3.9813-.0144-.1043-.0875-.1943-.189-.2224-1.3123-.363-2.4542-.0441-3.1928.4341-.7697.4984-1.3472 1.2233-1.6385 2.1386-.2628.8252-.2564 1.6869.0527 2.4796-.7156.4595-1.2268 1.1527-1.499 1.9749-.3018.912-.2603 1.8383.0697 2.6942.33.8559 1.118 1.8306 2.4674 2.3111 1.3047.4657 3.0363.4924 4.3346.226 1.3876-.2864 2.5907-.8664 3.6196-1.5207.4026-.2647.8994-.6641 1.1424-1.0978.2182-.4088.292-.8323.1519-1.2602Z" fill="#4E76C6"/></svg>
                      </button>
                    </div>
                  </div>
                </div>
                
                <a class="product-img" href="">
                  <img src="img/product.png" alt="img">
                </a>

                <div class="product-info">
                  <a class="product-title link-black" href="">название комплекта<br> в две строки</a>
                  <span class="product-amount">>5 шт – 16 000₽/шт</span>
                  <span class="product-price">15 000 ₽</span>
                </div>

                <div class="product-bottom">
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                    <span class="product-complect-title">комплект Mollen</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-complect-trigger" type="button">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9346 13.4503c.3451.2536.8174.2847 1.3347.3016.6516.0237 1.3871.1032 2.132.2127.6756.0987 1.4694.3085 2.1324.5763 1.2339.5172 2.3177 1.1524 3.4948 2.3797.0728.0759.1854.1057.2832.0687 1.2748-.4782 2.0118-1.4081 2.3279-2.2294.331-.8559.3719-1.7822.0705-2.6942-.2729-.8222-.7835-1.5154-1.4989-1.9749.3082-.7927.315-1.6542.0523-2.4796-.2911-.9153-.8688-1.6402-1.6387-2.1386-.77-.4982-1.9789-.8232-3.3527-.4182-1.3294.3907-2.7464 1.3879-3.6399 2.3671-.9545 1.048-1.5872 2.225-2.0352 3.3597-.1703.4509-.3377 1.0662-.2795 1.5601.0635.459.2524.8451.6171 1.109Zm-.9631 2.903c-.1344.4068-.0181.8659.1257 1.3635.1789.6277.3306 1.3522.4567 2.0952.115.6734.1608 1.4935.1113 2.2076-.1101 1.3346-.3789 2.5625-1.1812 4.0622-.0497.0929-.0434.2086.0223.291.8482 1.0657 1.9594 1.4795 2.8379 1.5271.9153.0496 1.8081-.1971 2.5814-.7662.6972-.5131 1.1987-1.2139 1.4136-2.0371.8484.0492 1.6695-.2108 2.3723-.716.7802-.5601 1.2908-1.334 1.5262-2.2205.2354-.8867.1706-2.1387-.6391-3.3213-.7813-1.1443-2.1665-2.1845-3.3742-2.7327-1.2908-.5846-2.6044-.8232-3.821-.8991-.481-.0227-1.1176.0082-1.5689.216-.4166.2024-.725.5015-.863.9303Zm-3.0564-.0198c-.4279-.0022-.8285.2504-1.2569.5411-.541.3642-1.1827.7325-1.8497 1.0822-.6045.3175-1.3695.6145-2.0634.7881-1.3023.3076-2.5522.4311-4.2252.1309-.1036-.0186-.2116.0232-.2696.1111-.7506 1.1368-.8004 2.3224-.5742 3.1732.2357.8867.746 1.6604 1.5258 2.2205.703.5052 1.5237.7652 2.3727.716.2154.8232.7161 1.524 1.4134 2.0371.7733.5691 1.6663.8158 2.5817.7662.9153-.0497 2.085-.4985 2.9586-1.6344.8457-1.0979 1.4061-2.738 1.5542-4.056.1566-1.4095-.0227-2.7339-.3266-3.9154-.1272-.4649-.353-1.0612-.6901-1.4266-.321-.3339-.7005-.5351-1.1507-.534Zm1.5586-4.6972c.3476-.25.5232-.69.6991-1.1771.2238-.613.5267-1.2884.8609-1.9637.3025-.6125.7471-1.3029 1.2065-1.8515.8729-1.015 1.8112-1.8502 3.3408-2.5915.0956-.0459.1581-.1433.1536-.2485-.0603-1.3613-.7165-2.3497-1.3989-2.905-.7118-.5786-1.579-.9043-2.5389-.899-.8654.0051-1.6821.2775-2.3399.8168-.6578-.5393-1.4744-.8117-2.3399-.8167-.9598-.0054-1.8272.3203-2.5386.899-.7113.5787-1.394 1.63-1.4337 3.0628-.0394 1.3857.4704 3.0422 1.1247 4.1956.701 1.2324 1.6239 2.1984 2.5636 2.9755.3759.3014.9089.6509 1.3962.7481.4559.0814.8811.0209 1.2445-.2448Zm-2.4842 1.782c-.1301-.4082-.4939-.7113-.9025-1.0292-.5134-.4025-1.0616-.8995-1.6-1.4264-.4886-.4771-1.0072-1.1136-1.3865-1.7205-.6948-1.1445-1.1985-2.2959-1.43-3.9813-.0144-.1043-.0875-.1943-.189-.2224-1.3123-.363-2.4542-.0441-3.1928.4341-.7697.4984-1.3472 1.2233-1.6385 2.1386-.2628.8252-.2564 1.6869.0527 2.4796-.7156.4595-1.2268 1.1527-1.499 1.9749-.3018.912-.2603 1.8383.0697 2.6942.33.8559 1.118 1.8306 2.4674 2.3111 1.3047.4657 3.0363.4924 4.3346.226 1.3876-.2864 2.5907-.8664 3.6196-1.5207.4026-.2647.8994-.6641 1.1424-1.0978.2182-.4088.292-.8323.1519-1.2602Z" fill="#4E76C6"/></svg>
                      </button>
                    </div>
                  </div>
                </div>
                
                <a class="product-img" href="">
                  <img src="img/product.png" alt="img">
                </a>

                <div class="product-info">
                  <a class="product-title link-black" href="">название комплекта<br> в две строки</a>
                  <span class="product-amount">>5 шт – 16 000₽/шт</span>
                  <span class="product-price">15 000 ₽</span>
                </div>

                <div class="product-bottom">
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                    <span class="product-complect-title">комплект Mollen</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-complect-trigger" type="button">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9346 13.4503c.3451.2536.8174.2847 1.3347.3016.6516.0237 1.3871.1032 2.132.2127.6756.0987 1.4694.3085 2.1324.5763 1.2339.5172 2.3177 1.1524 3.4948 2.3797.0728.0759.1854.1057.2832.0687 1.2748-.4782 2.0118-1.4081 2.3279-2.2294.331-.8559.3719-1.7822.0705-2.6942-.2729-.8222-.7835-1.5154-1.4989-1.9749.3082-.7927.315-1.6542.0523-2.4796-.2911-.9153-.8688-1.6402-1.6387-2.1386-.77-.4982-1.9789-.8232-3.3527-.4182-1.3294.3907-2.7464 1.3879-3.6399 2.3671-.9545 1.048-1.5872 2.225-2.0352 3.3597-.1703.4509-.3377 1.0662-.2795 1.5601.0635.459.2524.8451.6171 1.109Zm-.9631 2.903c-.1344.4068-.0181.8659.1257 1.3635.1789.6277.3306 1.3522.4567 2.0952.115.6734.1608 1.4935.1113 2.2076-.1101 1.3346-.3789 2.5625-1.1812 4.0622-.0497.0929-.0434.2086.0223.291.8482 1.0657 1.9594 1.4795 2.8379 1.5271.9153.0496 1.8081-.1971 2.5814-.7662.6972-.5131 1.1987-1.2139 1.4136-2.0371.8484.0492 1.6695-.2108 2.3723-.716.7802-.5601 1.2908-1.334 1.5262-2.2205.2354-.8867.1706-2.1387-.6391-3.3213-.7813-1.1443-2.1665-2.1845-3.3742-2.7327-1.2908-.5846-2.6044-.8232-3.821-.8991-.481-.0227-1.1176.0082-1.5689.216-.4166.2024-.725.5015-.863.9303Zm-3.0564-.0198c-.4279-.0022-.8285.2504-1.2569.5411-.541.3642-1.1827.7325-1.8497 1.0822-.6045.3175-1.3695.6145-2.0634.7881-1.3023.3076-2.5522.4311-4.2252.1309-.1036-.0186-.2116.0232-.2696.1111-.7506 1.1368-.8004 2.3224-.5742 3.1732.2357.8867.746 1.6604 1.5258 2.2205.703.5052 1.5237.7652 2.3727.716.2154.8232.7161 1.524 1.4134 2.0371.7733.5691 1.6663.8158 2.5817.7662.9153-.0497 2.085-.4985 2.9586-1.6344.8457-1.0979 1.4061-2.738 1.5542-4.056.1566-1.4095-.0227-2.7339-.3266-3.9154-.1272-.4649-.353-1.0612-.6901-1.4266-.321-.3339-.7005-.5351-1.1507-.534Zm1.5586-4.6972c.3476-.25.5232-.69.6991-1.1771.2238-.613.5267-1.2884.8609-1.9637.3025-.6125.7471-1.3029 1.2065-1.8515.8729-1.015 1.8112-1.8502 3.3408-2.5915.0956-.0459.1581-.1433.1536-.2485-.0603-1.3613-.7165-2.3497-1.3989-2.905-.7118-.5786-1.579-.9043-2.5389-.899-.8654.0051-1.6821.2775-2.3399.8168-.6578-.5393-1.4744-.8117-2.3399-.8167-.9598-.0054-1.8272.3203-2.5386.899-.7113.5787-1.394 1.63-1.4337 3.0628-.0394 1.3857.4704 3.0422 1.1247 4.1956.701 1.2324 1.6239 2.1984 2.5636 2.9755.3759.3014.9089.6509 1.3962.7481.4559.0814.8811.0209 1.2445-.2448Zm-2.4842 1.782c-.1301-.4082-.4939-.7113-.9025-1.0292-.5134-.4025-1.0616-.8995-1.6-1.4264-.4886-.4771-1.0072-1.1136-1.3865-1.7205-.6948-1.1445-1.1985-2.2959-1.43-3.9813-.0144-.1043-.0875-.1943-.189-.2224-1.3123-.363-2.4542-.0441-3.1928.4341-.7697.4984-1.3472 1.2233-1.6385 2.1386-.2628.8252-.2564 1.6869.0527 2.4796-.7156.4595-1.2268 1.1527-1.499 1.9749-.3018.912-.2603 1.8383.0697 2.6942.33.8559 1.118 1.8306 2.4674 2.3111 1.3047.4657 3.0363.4924 4.3346.226 1.3876-.2864 2.5907-.8664 3.6196-1.5207.4026-.2647.8994-.6641 1.1424-1.0978.2182-.4088.292-.8323.1519-1.2602Z" fill="#4E76C6"/></svg>
                      </button>
                    </div>
                  </div>
                </div>
                
                <a class="product-img" href="">
                  <img src="img/product.png" alt="img">
                </a>

                <div class="product-info">
                  <a class="product-title link-black" href="">название комплекта<br> в две строки</a>
                  <span class="product-amount">>5 шт – 16 000₽/шт</span>
                  <span class="product-price">15 000 ₽</span>
                </div>

                <div class="product-bottom">
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                    <span class="product-complect-title">комплект Mollen</span>
                  </div>
                  <div class="product-top-second">
                    <div class="product-color">
                      <button class="product-complect-trigger" type="button">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9346 13.4503c.3451.2536.8174.2847 1.3347.3016.6516.0237 1.3871.1032 2.132.2127.6756.0987 1.4694.3085 2.1324.5763 1.2339.5172 2.3177 1.1524 3.4948 2.3797.0728.0759.1854.1057.2832.0687 1.2748-.4782 2.0118-1.4081 2.3279-2.2294.331-.8559.3719-1.7822.0705-2.6942-.2729-.8222-.7835-1.5154-1.4989-1.9749.3082-.7927.315-1.6542.0523-2.4796-.2911-.9153-.8688-1.6402-1.6387-2.1386-.77-.4982-1.9789-.8232-3.3527-.4182-1.3294.3907-2.7464 1.3879-3.6399 2.3671-.9545 1.048-1.5872 2.225-2.0352 3.3597-.1703.4509-.3377 1.0662-.2795 1.5601.0635.459.2524.8451.6171 1.109Zm-.9631 2.903c-.1344.4068-.0181.8659.1257 1.3635.1789.6277.3306 1.3522.4567 2.0952.115.6734.1608 1.4935.1113 2.2076-.1101 1.3346-.3789 2.5625-1.1812 4.0622-.0497.0929-.0434.2086.0223.291.8482 1.0657 1.9594 1.4795 2.8379 1.5271.9153.0496 1.8081-.1971 2.5814-.7662.6972-.5131 1.1987-1.2139 1.4136-2.0371.8484.0492 1.6695-.2108 2.3723-.716.7802-.5601 1.2908-1.334 1.5262-2.2205.2354-.8867.1706-2.1387-.6391-3.3213-.7813-1.1443-2.1665-2.1845-3.3742-2.7327-1.2908-.5846-2.6044-.8232-3.821-.8991-.481-.0227-1.1176.0082-1.5689.216-.4166.2024-.725.5015-.863.9303Zm-3.0564-.0198c-.4279-.0022-.8285.2504-1.2569.5411-.541.3642-1.1827.7325-1.8497 1.0822-.6045.3175-1.3695.6145-2.0634.7881-1.3023.3076-2.5522.4311-4.2252.1309-.1036-.0186-.2116.0232-.2696.1111-.7506 1.1368-.8004 2.3224-.5742 3.1732.2357.8867.746 1.6604 1.5258 2.2205.703.5052 1.5237.7652 2.3727.716.2154.8232.7161 1.524 1.4134 2.0371.7733.5691 1.6663.8158 2.5817.7662.9153-.0497 2.085-.4985 2.9586-1.6344.8457-1.0979 1.4061-2.738 1.5542-4.056.1566-1.4095-.0227-2.7339-.3266-3.9154-.1272-.4649-.353-1.0612-.6901-1.4266-.321-.3339-.7005-.5351-1.1507-.534Zm1.5586-4.6972c.3476-.25.5232-.69.6991-1.1771.2238-.613.5267-1.2884.8609-1.9637.3025-.6125.7471-1.3029 1.2065-1.8515.8729-1.015 1.8112-1.8502 3.3408-2.5915.0956-.0459.1581-.1433.1536-.2485-.0603-1.3613-.7165-2.3497-1.3989-2.905-.7118-.5786-1.579-.9043-2.5389-.899-.8654.0051-1.6821.2775-2.3399.8168-.6578-.5393-1.4744-.8117-2.3399-.8167-.9598-.0054-1.8272.3203-2.5386.899-.7113.5787-1.394 1.63-1.4337 3.0628-.0394 1.3857.4704 3.0422 1.1247 4.1956.701 1.2324 1.6239 2.1984 2.5636 2.9755.3759.3014.9089.6509 1.3962.7481.4559.0814.8811.0209 1.2445-.2448Zm-2.4842 1.782c-.1301-.4082-.4939-.7113-.9025-1.0292-.5134-.4025-1.0616-.8995-1.6-1.4264-.4886-.4771-1.0072-1.1136-1.3865-1.7205-.6948-1.1445-1.1985-2.2959-1.43-3.9813-.0144-.1043-.0875-.1943-.189-.2224-1.3123-.363-2.4542-.0441-3.1928.4341-.7697.4984-1.3472 1.2233-1.6385 2.1386-.2628.8252-.2564 1.6869.0527 2.4796-.7156.4595-1.2268 1.1527-1.499 1.9749-.3018.912-.2603 1.8383.0697 2.6942.33.8559 1.118 1.8306 2.4674 2.3111 1.3047.4657 3.0363.4924 4.3346.226 1.3876-.2864 2.5907-.8664 3.6196-1.5207.4026-.2647.8994-.6641 1.1424-1.0978.2182-.4088.292-.8323.1519-1.2602Z" fill="#4E76C6"/></svg>
                      </button>
                    </div>
                  </div>
                </div>
                
                <a class="product-img" href="">
                  <img src="img/product.png" alt="img">
                </a>

                <div class="product-info">
                  <a class="product-title link-black" href="">название комплекта<br> в две строки</a>
                  <span class="product-amount">>5 шт – 16 000₽/шт</span>
                  <span class="product-price">15 000 ₽</span>
                </div>

                <div class="product-bottom">
                  <button class="product-click-btn btn btn-medium" type="button">
                    <span class="product-click-amount amount">
                      <span class="amount-trigger minus" type="button">-</span>
                      <input class="amount-input" type="text" maxlength="3" value="1">
                      <span class="amount-trigger plus" type="button">+</span>
                    </span>
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
                <a class="category-recently-viewed-item-title" href="">название комплекта</a>
              </div>
              
              <div class="category-recently-viewed-item">
                <a class="category-recently-viewed-item-img" href="">
                  <img src="img/recently-viewed.png" alt="img">
                </a>
                <a class="category-recently-viewed-item-title" href="">название комплекта</a>
              </div>
              
              <div class="category-recently-viewed-item">
                <a class="category-recently-viewed-item-img" href="">
                  <img src="img/recently-viewed.png" alt="img">
                </a>
                <a class="category-recently-viewed-item-title" href="">название комплекта</a>
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