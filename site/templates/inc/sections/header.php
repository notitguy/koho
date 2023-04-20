<?php namespace ProcessWire;

$about = _x('Our story', 'header');
$menu = _x('Menu', 'header');
$shop = _x('Shop', 'header');
$findUs = _x('Find us', 'header');
$reservation = _x('Reservation', 'header');

$legIcon = $assets. "icons/leg.svg";
$bagIcon =  $assets ."icons/bag.svg";
?>

<header>
  <div class="container">
    <nav class="desktop">
      <a href="#"><?= $menu ?></a>
      <a href="#"><?= $about ?></a>
      <a href="#"><?= $shop ?></a>
      <a href="#"><?= $findUs ?></a>
    </nav>
    <a href="<?= $home->url?>" class="logo">
      <img src="<?= $logo ?>" alt="Kohoutek">
    </a>
    <nav class="mobile">
      <a href="<?= $home->url?>" class="mobile-logo">
        <img src="<?= $logoResponsive ?>" alt="Kohoutek" width="32">
      </a>
      <a href="#" class="btn --secondary"><?= $reservation ?></a>
      <?php include ($components ."language-switcher.php") ?>
      <div class="nav-icon">
        <!-- <img src="<?= $legIcon ?>" width="24" alt=""><img src="<?= $legIcon ?>" width="24" alt=""> -->
        <span></span> <span></span> <span></span> <span></span>
      </div>
      <div class="quick-nav">
        <div class="links">
          <a href="#" style="--d: 0"><?= $menu ?></a>
          <a href="#" style="--d: 1"><?= $about ?></a>
          <a href="#" style="--d: 2"><?= $shop ?></a>
          <a href="#" style="--d: 3"><?= $findUs ?></a>
        </div>
        <a href="" class="btn --primary">Order here
          <img src="<?= $bagIcon ?>" width="26" height="26" alt="">
        </a>
        <h3>Kohoutek Restaurant</h3>
        <address>
          <ul class="opening-hours">
            <li>Monday: <span>16:30 - 22:00</span></li>
            <li>Tuesday-Sunday: <span>11:00 - 22:00</span></li>
          </ul>
          <a href="https://goo.gl/maps/fcWpzhbJtDf5yh3z7" target="_blank" rel="nofollow" class="location">
            <img src="<?= $locationIcon ?>" width="18" alt=""> Slezská 780/49, Praha 3 - Vinohrady
          </a>
          <a href="tel:+420 602 760 996">+420 602 760 996</a>
          <a href="mailto:info@kohoutekresto.cz" style="margin-top: -0.5rem;">info@kohoutekresto.cz</a>
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
<main>