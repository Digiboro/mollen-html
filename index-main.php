<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Главная</title>
</head>

<body>
  <!-- header -->
  <?php include 'include-blocks/header-white.php' ?>

  <main class="main-index index main">
    <div class="container no-padding-desktop">
      <div class="main-index-inner">
        <div class="intro">
          <nav class="intro-nav">
            <a class="intro-nav-link" href="">Одежда</a>
            <a class="intro-nav-link" href="">Принты</a>
            <a class="intro-nav-link" href="">Постельное белье</a>
            <a class="intro-nav-link" href="">Ароматы</a>
            <a class="intro-nav-link" href="">Комплекты</a>
          </nav>
          <button class="intro-btn" type="button">
            <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M30.3656 24.0174c.6187.4528 1.4656.5085 2.3932.5386 1.1683.0422 2.4872.1843 3.8229.3798 1.2113.1763 2.6347.5509 3.8235 1.0291 2.2126.9236 4.156 2.0579 6.2666 4.2494.1305.1356.3323.1888.5077.1228 2.286-.8539 3.6074-2.5145 4.1743-3.9811.5934-1.5285.6668-3.1826.1264-4.811-.4894-1.4683-1.405-2.7061-2.6877-3.5266.5527-1.4157.5649-2.9541.0938-4.4279-.522-1.6345-1.5579-2.929-2.9385-3.8189-1.3805-.8898-3.5482-1.4701-6.0116-.747-2.3838.6978-4.9247 2.4785-6.5267 4.2271-1.7115 1.8715-2.8461 3.9734-3.6494 5.9994-.3052.8053-.6054 1.9041-.5012 2.786.114.8197.4527 1.5091 1.1067 1.9803Zm-1.727 5.1839c-.2411.7264-.0325 1.5463.2253 2.435.3208 1.1207.5928 2.4146.8189 3.7412.2062 1.2027.2884 2.6671.1997 3.9423-.1974 2.3831-.6795 4.5758-2.1181 7.2539-.0892.1658-.0777.3725.0399.5197 1.5211 1.903 3.5136 2.6418 5.0887 2.7268 1.6413.0886 3.2421-.3518 4.6288-1.3681 1.25-.9163 2.1493-2.1677 2.5347-3.6378 1.5213.088 2.9936-.3764 4.2538-1.2785 1.3989-1.0002 2.3146-2.3821 2.7367-3.9652.4221-1.5833.3059-3.8191-1.1461-5.9309-1.4009-2.0433-3.8847-3.9008-6.0503-4.8799-2.3145-1.0439-4.6698-1.4699-6.8514-1.6055-.8626-.0404-2.0039.0147-2.8133.3858-.7469.3614-1.3.8955-1.5473 1.6612Zm-5.4804-.0354c-.7674-.0038-1.4856.4472-2.2538.9663-.97.6504-2.1208 1.3081-3.3168 1.9325-1.0838.5671-2.4556 1.0974-3.6999 1.4073-2.3351.5494-4.5762.7699-7.5761.2338-.1858-.0332-.3795.0414-.4835.1983-1.3459 2.0301-1.4352 4.1472-1.0296 5.6665.4227 1.5833 1.3377 2.965 2.736 3.9652 1.2607.9021 2.7322 1.3665 4.2544 1.2785.3863 1.4701 1.2841 2.7215 2.5344 3.6378 1.3866 1.0163 2.9878 1.4567 4.6292 1.3681 1.6414-.0886 3.7387-.89 5.3052-2.9185 1.5164-1.9606 2.5213-4.8892 2.7868-7.2429.2808-2.5169-.0408-4.8819-.5857-6.9917-.2279-.8302-.6329-1.8951-1.2374-2.5475-.5756-.5964-1.2561-.9555-2.0632-.9537Zm2.7947-8.3878c.6232-.4463.9381-1.2321 1.2535-2.102.4013-1.0945.9444-2.3006 1.5437-3.5065.5424-1.0937 1.3396-2.3266 2.1634-3.3063 1.5651-1.8124 3.2477-3.3039 5.9904-4.6277.1713-.0819.2835-.2558.2753-.4437-.1081-2.4309-1.2847-4.1959-2.5082-5.1874-1.2764-1.0333-2.8315-1.615-4.5526-1.6054-1.5518.0091-3.0162.4955-4.1957 1.4585C24.7433.4946 23.2789.0082 21.727-.0009c-1.7211-.0096-3.2764.5721-4.5519 1.6054-1.2755 1.0334-2.4997 2.9106-2.5708 5.4694-.0706 2.4743.8434 5.4325 2.0168 7.492 1.2569 2.2008 2.9118 3.9258 4.5968 5.3134.6739.5383 1.6297 1.1624 2.5035 1.336.8173.1453 1.5798.0372 2.2315-.4372Zm-4.4544 3.1821c-.2333-.7288-.8857-1.2701-1.6184-1.8378-.9205-.7187-1.9036-1.6063-2.8689-2.5471-.8761-.8521-1.806-1.9886-2.4863-3.0724-1.2457-2.0437-2.1489-4.0998-2.5641-7.1093-.0257-.1864-.1568-.347-.3389-.3972-2.353-.6484-4.4006-.0788-5.7249.7752-1.3801.8899-2.4156 2.1844-2.938 3.8189-.4713 1.4736-.4597 3.0122.0945 4.4279-1.2832.8205-2.1999 2.0583-2.6878 3.5266-.5413 1.6284-.4668 3.2825.125 4.811.5917 1.5284 2.0047 3.2689 4.4242 4.127 2.3394.8315 5.4443.8793 7.7723.4035 2.4883-.5114 4.6455-1.5472 6.4904-2.7155.7219-.4728 1.6126-1.186 2.0484-1.9604.3913-.73.5237-1.4861.2725-2.2504Z" fill="#fff"/></svg>
          </button>
        </div>

        <div class="intro-slider">
          <div class="intro-slider-inner">
            <div class="intro-slider-item">
              <div class="intro-slider-img">
                <img src="img/intro-slider-1.jpg" alt="img">
                <span class="intro-slider-label label-pos-top">для детей</span>
              </div>
              <p class="intro-slider-title">В незапамятные времена<br> наши предки-славяне<br> называли</p>
            </div>

            <div class="intro-slider-item">
              <div class="intro-slider-img">
                <img src="img/intro-slider-2.jpg" alt="img">
                <span class="intro-slider-label label-pos-bottom">для детей</span>
              </div>
              <p class="intro-slider-title">В незапамятные времена<br> наши предки-славяне<br> называли</p>
            </div>

            <div class="intro-slider-item">
              <div class="intro-slider-img">
                <img src="img/intro-slider-3.jpg" alt="img">
                <span class="intro-slider-label label-circle">-20%</span>
              </div>
              <p class="intro-slider-title">В незапамятные времена<br> наши предки-славяне<br> называли</p>
            </div>

            <div class="intro-slider-item">
              <div class="intro-slider-img">
                <img src="img/intro-slider-4.jpg" alt="img">
                <span class="intro-slider-label label-pos-top">для дома</span>
              </div>
              <p class="intro-slider-title">В незапамятные времена<br> наши предки-славяне<br> называли</p>
            </div>
          </div>
          <div class="arrow-wrap">
            <button class="arrow" type="button">
              <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.6758 1S3.7902 2.2257 3.009 2.909C2.2281 3.5926.6758 4.5.6758 4.5s1.5523.9075 2.3333 1.591C3.7901 6.7742 4.6758 8 4.6758 8" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <button class="arrow" type="button">
              <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7.6797s.8856-1.2257 1.6667-1.9091C3.4477 5.0872 5 4.1796 5 4.1796s-1.5523-.9074-2.3333-1.5908C1.8857 1.9054 1 .6797 1 .6797" stroke="#72716E" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <div class="intro-constructor">
          <div class="intro-constructor-inner">
            <div class="intro-constructor-content">
              <p class="intro-constructor-title">Собери свой<br> комплект на<br> конструкторе</p>
              <a class="intro-constructor-btn btn btn-extra-small btn-white btn-dot-2" href="">
                <span class="btn-text">собрать</span>
              </a>
            </div>
            <div class="intro-constructor-products">
              <div class="intro-constructor-product product hover-effect">
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
                    <button class="btn btn-medium" type="button">
                      <span class="btn-text">В корзину</span>
                    </button>
                    <button class="product-quickbuy" type="button">Быстрая покупка</button>
                  </div>
                </div>
              </div>
              <div class="intro-constructor-product product hover-effect">
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
                    <button class="btn btn-medium" type="button">
                      <span class="btn-text">В корзину</span>
                    </button>
                    <button class="product-quickbuy" type="button">Быстрая покупка</button>
                  </div>
                </div>
              </div>
              <div class="intro-constructor-product product hover-effect">
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
                    <button class="btn btn-medium" type="button">
                      <span class="btn-text">В корзину</span>
                    </button>
                    <button class="product-quickbuy" type="button">Быстрая покупка</button>
                  </div>
                </div>
              </div>
              <div class="intro-constructor-product product hover-effect">
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
  </main>

  <!-- footer -->
  <?php include 'include-blocks/footer.php' ?>

  <script src="js/main.js"></script>
</body>

</html>