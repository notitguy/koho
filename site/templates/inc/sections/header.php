<?php namespace ProcessWire;

$about = _x('Our story', 'header');
$menu = _x('Menu', 'header');
$shop = _x('Shop', 'header');
$findUs = _x('Find us', 'header');
$reservation = _x('Reservation', 'header');

$legIcon = $assets. "icons/leg.svg";
$kokIcon = $assets. "icons/kok.svg";
?>

<header>
  <div class="container">
    <nav class="desktop">
      <a href="#"><?= $about ?></a>
      <a href="#"><?= $menu ?></a>
      <a href="#"><?= $shop ?></a>
      <a href="#"><?= $findUs ?></a>
    </nav>
    <a href="<?= $home->url?>" class="logo">
      <img src="<?= $logo ?>" alt="Kohoutek">
    </a>
    <nav class="mobile">
      <a href="<?= $home->url?>" class="mobile-logo">
        <img src="<?= $kokIcon ?>" alt="Kohoutek" width="32">
      </a>
      <a href="#" class="btn --secondary"><?= $reservation ?></a>
      <?php include ($components ."language-switcher.php") ?>
      <div class="nav-icon">
        <!-- <img src="<?= $legIcon ?>" width="24" alt=""><img src="<?= $legIcon ?>" width="24" alt=""> -->
        <span></span> <span></span> <span></span> <span></span>
      </div>
      <div class="quick-nav">
        <a href="#" style="--d: 0"><?= $about ?></a>
        <a href="#" style="--d: 1"><?= $menu ?></a>
        <a href="#" style="--d: 2"><?= $shop ?></a>
        <a href="#" style="--d: 3"><?= $findUs ?></a>
      </div>
    </nav>
  </div>
</header>
<main>