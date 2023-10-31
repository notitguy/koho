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
      <a href="<?= $home->url ?>#menu"><?= $menuWord ?></a>
      <a href="<?= $home->url ?>#about"><?= $about ?></a>
      <a href="<?= $home->url ?>#delivery"><?= $delivery ?></a>
      <!-- <a href="<?= $home->url ?>#shop"><?= $shop ?></a> -->
      <a href="#footer"><?= $findUs ?></a>
    </nav>
    <a href="<?= $home->url?>" class="logo">
      <img src="<?= $logo ?>" width="115" alt="Kohoutek">
    </a>
    <nav class="mobile">
      <a href="<?= $home->url?>" class="mobile-logo">
        <img src="<?= $logoResponsive ?>" alt="Kohoutek" width="40">
      </a>
      <a href="<?= $info->reservation_link ?>" class="btn --secondary" target="_blank" rel="nofollow" data-event="reserveClickNav"><?= $reservationLinkText ?></a>
      <?php include ($components ."language-switcher.php") ?>
      <div class="nav-icon">
        <!-- <img src="<?= $legIcon ?>" width="24" alt=""><img src="<?= $legIcon ?>" width="24" alt=""> -->
        <span></span> <span></span> <span></span> <span></span>
      </div>
      <div class="quick-nav">
        <div class="links">
          <a href="<?= $home->url ?>#menu" style="--d: 0"><?= $menuWord ?></a>
          <a href="<?= $home->url ?>#about" style="--d: 1"><?= $about ?></a>
          <!-- <a href="<?= $home->url ?>#shop" style="--d: 2"><?= $shop ?></a> -->
          <a href="<?= $home->url ?>#delivery" style="--d: 2"><?= $delivery ?></a>
          <a href="#footer" style="--d: 3"><?= $findUs ?></a>
        </div>
        <a href="<?= $info->order_link ?>" class="btn --primary" target="_blank" rel="nofollow" data-event="orderClickNav">
          <?= $orderLinkText ?>
          <img src="<?= $bagIcon ?>" width="26" height="26" alt="">
        </a>
        <h3 style="margin-bottom:var(--gutter-s)"><?= $businessName ?></h3>
        <?php include($components ."address.php"); ?>
      </div>
    </nav>
  </div>
</header>