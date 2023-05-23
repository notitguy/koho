<?php namespace ProcessWire;

$legIcon = $assets. "icons/leg.svg";
$bagIcon =  $assets ."icons/bag.svg";
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8CZBP2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
  <div class="container">
    <nav class="desktop">
      <a href="#menu"><?= $menuWord ?></a>
      <a href="#about"><?= $about ?></a>
      <a href="#delivery"><?= $delivery ?></a>
      <!-- <a href="#shop"><?= $shop ?></a> -->
      <a href="#footer"><?= $findUs ?></a>
    </nav>
    <a href="<?= $home->url?>" class="logo">
      <img src="<?= $logo ?>" alt="Kohoutek">
    </a>
    <nav class="mobile">
      <a href="<?= $home->url?>" class="mobile-logo">
        <img src="<?= $logoResponsive ?>" alt="Kohoutek" width="32">
      </a>
      <a href="<?= $reservationLink ?>" class="btn --secondary" target="_blank" rel="nofollow" data-event="reserveClickNav"><?= $reservationLinkText ?></a>
      <?php //include ($components ."language-switcher.php") ?>
      <div class="nav-icon">
        <!-- <img src="<?= $legIcon ?>" width="24" alt=""><img src="<?= $legIcon ?>" width="24" alt=""> -->
        <span></span> <span></span> <span></span> <span></span>
      </div>
      <div class="quick-nav">
        <div class="links">
          <a href="#menu" style="--d: 0"><?= $menuWord ?></a>
          <a href="#about" style="--d: 1"><?= $about ?></a>
          <!-- <a href="#shop" style="--d: 2"><?= $shop ?></a> -->
          <a href="#footer" style="--d: 3"><?= $findUs ?></a>
        </div>
        <a href="<?= $orderLink ?>" class="btn --primary" target="_blank" rel="nofollow" data-event="orderClickNav">
          <?= $orderLinkText ?>
          <img src="<?= $bagIcon ?>" width="26" height="26" alt="">
        </a>
        <h3><?= $businessName ?></h3>
        <address>
          <ul class="opening-hours">
            <li>Pondělí: <span>16:30 - 22:00</span></li>
            <li>Úterý-Neděle: <span>11:00 - 22:00</span></li>
          </ul>
          <a href="https://goo.gl/maps/fcWpzhbJtDf5yh3z7" target="_blank" rel="nofollow" class="location">
            <img src="<?= $locationIcon ?>" width="18" alt=""> <?= $address ?>
          </a>
          <a href="tel:<?= $phone ?>"><?= $phone ?></a>
          <a href="mailto:<?= $email ?>" style="margin-top: -0.5rem;"><?= $email ?></a>
          <div class="socials">
            <a href="https://www.instagram.com/kohoutek_resto/" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $instagramIcon ?>" alt=""></a>
            <a href="https://www.facebook.com/KohoutekResto/" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $facebookIcon ?>" alt=""></a>
            <a href="https://goo.gl/maps/fcWpzhbJtDf5yh3z7" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $googleIcon ?>" alt=""></a>
            <a href="https://www.tripadvisor.com/Restaurant_Review-g274707-d22888734-Reviews-Kohoutek_Restaurace-Prague_Bohemia.html" target="_blank" rel="nofollow"><img width="24" height="" src="<?= $tripadvisorIcon ?>" alt=""></a>
          </div>
        </address>
      </div>
    </nav>
  </div>
</header>