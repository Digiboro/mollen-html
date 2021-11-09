<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include 'include-blocks/head.php' ?>
  <title>Burger menu (Popup)</title>
</head>

<body class="popup-is-open">
  <div class="menu popup popup-full">
    <div class="container no-padding-desktop">
      <div class="menu-inner popup-inner">
        <button class="popup-menu-close-trigger btn-close">
          <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1.1765 7.1765-.6962-.6962L2.967 3.9936.4867 1.5133l.698-.698L3.665 3.2956 6.1372.8235l.6962.6962-2.4722 2.4721 2.4804 2.4804-.698.698-2.4804-2.4804-2.4867 2.4867Z" fill="#72716E"/></svg>
        </button>
        <div class="grid-1-3-cols">
          <div class="menu-sidebar col">
            <div class="menu-sidebar-body">
              <div class="menu-title">Меню</div>
              <nav class="menu-nav">
                <ul class="menu-nav-list">
                  <li class="menu-nav-item">
                    <a class="menu-nav-link link-black" href="">Размерный гид</a>
                  </li>
                  <li class="menu-nav-item">
                    <a class="menu-nav-link link-black" href="">Доставка и оплата</a>
                  </li>
                  <li class="menu-nav-item">
                    <a class="menu-nav-link link-black" href="">Гарантия и возврат </a>
                  </li>
                  <li class="menu-nav-item">
                    <a class="menu-nav-link link-black" href="">Частые вопросы</a>
                  </li>
                  <li class="menu-nav-item">
                    <a class="menu-nav-link link-black" href="">О бренде</a>
                  </li>
                  <li class="menu-nav-item">
                    <a class="menu-nav-link link-black" href="">Контакты</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="menu-social social">
              <a class="social-link" href="">
                <span>VK</span>
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9046 10.1381a1.2238 1.2238 0 0 0-.061-.1172c-.3123-.5625-.9091-1.2528-1.79-2.0713l-.0187-.0188-.0093-.0092-.0094-.0094h-.0094c-.3999-.3811-.653-.6374-.7591-.7686-.194-.25-.2374-.503-.1314-.7592.0749-.1937.3563-.6027.8435-1.2276.2562-.3312.4592-.5966.6091-.7966 1.081-1.437 1.5496-2.3554 1.4058-2.7553l-.0558-.0935c-.0375-.0562-.1344-.1077-.2904-.1546-.1564-.0469-.3562-.0546-.6-.0234l-2.699.0186c-.0437-.0155-.1061-.014-.1875.0048l-.1219.0282-.0469.0234-.0373.0282c-.0313.0187-.0656.0515-.1032.0983a.6454.6454 0 0 0-.0935.164c-.2938.756-.6279 1.459-1.0029 2.1087-.2312.3874-.4435.7232-.6374 1.0075-.1936.2842-.3561.4936-.4872.6278-.1313.1343-.2498.242-.3562.3233-.1062.0813-.1873.1157-.2435.1031a6.882 6.882 0 0 1-.1595-.0375c-.0874-.0563-.1577-.1328-.2107-.2296-.0533-.0968-.0891-.2187-.1079-.3655-.0186-.147-.0296-.2734-.0328-.3796-.0029-.1061-.0016-.2562.0048-.45.0065-.1937.0094-.3248.0094-.3935 0-.2375.0046-.4952.0139-.7732.0095-.278.0171-.4983.0235-.6606.0064-.1625.0093-.3344.0093-.5156 0-.1812-.011-.3233-.0328-.4264a1.4602 1.4602 0 0 0-.0981-.3c-.0439-.0968-.108-.1717-.1922-.2248-.0843-.0531-.1891-.0953-.314-.1266-.331-.075-.7528-.1155-1.2652-.1218-1.162-.0125-1.9088.0626-2.2399.225-.1312.0687-.25.1625-.356.281-.1126.1376-.1283.2126-.047.225.3749.0561.6403.1905.7965.4029l.0563.1126c.0438.0812.0875.225.1313.431.0437.2062.0719.4343.0843.684.0311.4562.0311.8467 0 1.1716-.0313.325-.0609.578-.089.7591-.0282.1812-.0704.328-.1266.4405-.0563.1124-.0937.1812-.1125.2061-.0188.025-.0344.0407-.0468.0469a.702.702 0 0 1-.253.047c-.0876 0-.1938-.0439-.3187-.1314-.125-.0875-.2545-.2077-.3889-.3608-.1343-.1531-.2859-.3671-.4546-.642-.1686-.2749-.3436-.5997-.5248-.9746l-.15-.2719c-.0936-.1749-.2217-.4295-.3841-.7637a14.728 14.728 0 0 1-.4311-.9701c-.05-.1312-.125-.2311-.225-.2999l-.0468-.0282c-.0312-.0249-.0813-.0514-.15-.0796a.9945.9945 0 0 0-.2155-.0609L.5999 1.333c-.2624 0-.4404.0594-.5342.1781l-.0375.0562C.0095 1.5985 0 1.6485 0 1.7172s.0187.1531.0563.253c.3748.881.7825 1.7307 1.223 2.5492.4404.8185.8231 1.4777 1.148 1.9773.3248.4999.656.9717.9934 1.4151.3374.4437.5607.728.67.8529.1094.1251.1953.2187.2578.2811l.2343.225c.15.1499.3702.3295.6607.5388.2906.2094.6123.4155.9653.6187.3531.2029.7638.3685 1.2325.4965.4686.1282.9246.1797 1.3683.1548h1.0778c.2185-.0188.3842-.0876.4967-.2062l.0373-.047c.0251-.0373.0485-.0952.0702-.1732.0219-.078.0328-.1641.0328-.2577-.0064-.2686.0141-.5107.0608-.7262.0467-.2155.1-.378.1595-.4873.0595-.1093.1267-.2016.2014-.2763.075-.075.1283-.1204.1596-.136a.6125.6125 0 0 1 .0748-.0328c.1499-.05.3264-.0016.5296.1454.2031.1468.3936.3281.5718.5436.178.2156.392.4576.6419.7262.25.2687.4686.4684.656.5998l.1873.1125c.1252.075.2876.1438.4876.2063.1996.0624.3745.078.5247.0468l2.3991-.0374c.2373 0 .4219-.0393.5529-.1173.1312-.0781.2092-.1641.2343-.2577.0251-.0937.0265-.2.0048-.3188-.0222-.1185-.0441-.2014-.0659-.2482Z" fill="#4E76C6"/></svg>
              </a>
              <a class="social-link" href="">
                <span>Pinterest</span>
                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.2445 0C3.3102.0008.6875 3.162.6875 6.609c0 1.5983.8933 3.5925 2.3235 4.2248.408.1837.354-.0405.705-1.383.0277-.1118.0135-.2085-.0765-.3128-2.0445-2.3647-.399-7.2263 4.3133-7.2263 6.8197 0 5.5455 9.4366 1.1865 9.4366-1.1235 0-1.9606-.882-1.6958-1.9733.321-1.2997.9495-2.697.9495-3.6338 0-2.361-3.5175-2.0107-3.5175 1.1175 0 .9668.342 1.6193.342 1.6193s-1.1318 4.572-1.3418 5.4263c-.3555 1.446.048 3.7867.0833 3.9885.0217.111.1462.1462.216.0547.1117-.1462 1.4798-2.0977 1.863-3.5085.1395-.5137.7117-2.5987.7117-2.5987.3773.681 1.4648 1.251 2.6236 1.251 3.447 0 5.9385-3.03 5.9385-6.7898C15.2998 2.697 12.215 0 8.2445 0Z" fill="#4E76C6"/></svg>
              </a>
              <a class="social-link" href="">
                <span>Telegram</span>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m7.0629 10.3861-.2978 4.188c.426 0 .6105-.183.8318-.4028l1.9972-1.9087 4.1385 3.0307c.759.423 1.2938.2003 1.4985-.6982l2.7165-12.729.0008-.0008c.2407-1.122-.4058-1.5607-1.1453-1.2855L.8356 6.693C-.254 7.116-.2376 7.7237.6504 7.9989l4.0822 1.2697 9.4823-5.9332c.4462-.2955.852-.132.5182.1635l-7.6702 6.8873Z" fill="#4E76C6"/></svg>
              </a>
              <a class="social-link" href="">
                <span>Facebook</span>
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.4157 18H3.043V9H.793V5.8983l2.25-.001L3.0393 4.07c0-2.5304.6862-4.07 3.6668-4.07h2.4816v3.1023h-1.551c-1.1606 0-1.2165.4334-1.2165 1.2425l-.0046 1.5525h2.7895L8.8763 8.999 6.418 9l-.0023 9Z" fill="#4E76C6"/></svg>
              </a>
              <a class="social-link" href="">
                <span>Youtube</span>
                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.082 2.7824c-.1945-.723-.7645-1.2928-1.4873-1.4875C14.2742.9336 8.992.9336 8.992.9336s-5.282 0-6.6025.3476c-.709.1945-1.2928.7784-1.4873 1.5012C.5547 4.1028.5547 6.8412.5547 6.8412s0 2.7522.3475 4.0588a2.1145 2.1145 0 0 0 1.4874 1.4874c1.3343.3614 6.6026.3614 6.6026.3614s5.282 0 6.6025-.3476a2.1145 2.1145 0 0 0 1.4875-1.4873c.3474-1.3205.3474-4.0588.3474-4.0588s.0139-2.7523-.3476-4.0727ZM7.3102 9.371V4.3114l4.3925 2.5298L7.3102 9.371Z" fill="#4E76C6"/></svg>
              </a>
              <a class="social-link social-inst" href="">
                <span>Instagram</span>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.7499 1.5h-7.5c-2.0711 0-3.75 1.679-3.75 3.75v7.5c0 2.0711 1.6789 3.75 3.75 3.75h7.5c2.071 0 3.75-1.6789 3.75-3.75v-7.5c0-2.071-1.679-3.75-3.75-3.75Z" stroke="#4E76C6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.9988 8.5287a3 3 0 1 1-5.9352.88 3 3 0 0 1 5.9352-.88Z" stroke="#4E76C6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </div>
          <div class="menu-content col">
            <div class="menu-content-head">
              <div class="menu-logo">
                <svg width="103" height="18" viewBox="0 0 103 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".2" fill-rule="evenodd" clip-rule="evenodd" d="M97.7849.3328v7.452L87.7272.4784c-.1452-.104-.2473-.1456-.3925-.1456-.1641 0-.3913.104-.3913.4159v16.22h5.2151V9.7693l10.0595 7.0746c.123.0831.247.1248.371.1248.225 0 .411-.1248.411-.416V.3328h-5.2151Zm-79.1102 0c-.1442 0-.2474.0624-.3298.1456L9.5229 8.505.7009.4785C.5977.3952.5153.3328.371.3328.1855.3328 0 .4576 0 .7487v16.22h5.215v-6.0256l4.3079 3.9044 4.2874-3.884v6.0052h5.2149V.7487c0-.312-.1855-.4159-.3505-.4159Zm15.5769 8.297c0-2.2666-1.5458-3.8677-3.7927-3.8677-2.2466 0-3.7926 1.6011-3.7926 3.8677 0 2.2667 1.546 3.9095 3.7926 3.9095 2.2469 0 3.7927-1.6428 3.7927-3.9095Zm5.3386 0c0 5.0948-3.6484 8.6716-9.1313 8.6716-5.4623 0-9.1312-3.5768-9.1312-8.6716C21.3277 3.535 24.9966 0 30.4589 0c5.4829 0 9.1313 3.5351 9.1313 8.6298ZM47.087.3328h-5.1943v16.6359h12.5117v-4.8868H47.087V.3329Zm14.1683 0h-5.1945v16.6359h12.5123v-4.8868h-7.3178V.3329ZM75.5964 12.082h8.513v4.8868H70.3813V.3328h13.6259v4.4708h-8.4108v1.8716h7.4831v3.4936h-7.4831v1.9131Z" fill="#1E1E1E"/></svg>
              </div>
              <button class="menu-search-trigger"><svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 7.5C2 4.4624 4.4624 2 7.5 2S13 4.4624 13 7.5 10.5376 13 7.5 13 2 10.5376 2 7.5ZM7.5 0C3.3579 0 0 3.3579 0 7.5S3.3579 15 7.5 15c2.0216 0 3.8565-.7999 5.2052-2.1004.056.0958.1289.1838.2184.2595l3.1412 2.6543.7638.6454 1.2909-1.5276-.7638-.6454-3.1412-2.6543a.996.996 0 0 0-.3344-.1869C14.5901 10.2986 15 8.9472 15 7.5 15 3.3579 11.6421 0 7.5 0Z" fill="#72716E"/></svg></button>
            </div>
            <div class="menu-content-body">
              <div class="menu-title">Категории Mollen</div>
              <nav class="menu-category">
                <ul class="menu-category-list">
                  <li class="menu-category-item">
                    <a class="menu-category-link link-black" href="">Постельное белье</a>
                  </li>
                  <li class="menu-category-item">
                    <a class="menu-category-link link-black" href="">Одежда</a>
                  </li>
                  <li class="menu-category-item">
                    <a class="menu-category-link link-black" href="">Ароматы</a>
                  </li>
                  <li class="menu-category-item">
                    <a class="menu-category-link link-black" href="">Аксессуары</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="menu-content-foot">
              <a class="menu-tel link-black" href="tel:88002222222">8 800 222 22 22</a>
              <button class="menu-callback-trigger" type="button">Заказать звонок</button>
              <button class="menu-constructor-trigger">
                <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.0054 5.6992H.9945c-.5484 0-.9945.4462-.9945.9945v5.7734c0 .5484.4461.9945.9945.9945h.414l-.4892 1.3806a.5525.5525 0 1 0 1.0416.369l.62-1.7496h19.8383l.6199 1.7496a.5527.5527 0 0 0 .7053.3363.5526.5526 0 0 0 .3363-.7053l-.4892-1.3806h.414c.5484 0 .9945-.4461.9945-.9945V6.6937c0-.5483-.4461-.9945-.9946-.9945Z" fill="#fff"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2.2764 1.6048C2.2764.7185 2.9949 0 3.8812 0h17.2387c.8863 0 1.6048.7185 1.6048 1.6048v1.7083c0 .8864-.7185 1.6049-1.6048 1.6049h-.0563c-.053-.8658-.4813-1.503-.9269-1.8594-.4621-.3696-1.0255-.5776-1.649-.5742-.5621.0033-1.0926.1772-1.5199.5217-.4272-.3445-.9577-.5184-1.5199-.5217-.6234-.0034-1.1868.2046-1.6491.5742-.4433.3546-.8695.986-.9087 1.8554l-.0001.004h-.7781l-.0001-.0035c-.0391-.8694-.4654-1.5007-.9086-1.8554-.4624-.3695-1.0257-.5776-1.6492-.5741-.5621.0032-1.0926.1772-1.5199.5216-.4272-.3445-.9577-.5184-1.5199-.5217-.6234-.0034-1.1868.2047-1.649.5742-.4454.3564-.8736.9934-.9268 1.8589h-.0572c-.8863 0-1.6048-.7185-1.6048-1.6049V1.6048Z" fill="#fff"/></svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <?php include 'include-blocks/scripts.php' ?>
</body>

</html>