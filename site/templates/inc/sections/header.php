<?php namespace ProcessWire;

$about = _x('Our story', 'header');
$menu = _x('Menu', 'header');
$shop = _x('Shop', 'header');
$findUs = _x('Find us', 'header');
$reservation = _x('Reservation', 'header');

$legIcon = $assets. "icons/leg.svg";
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
      <?php include ($components ."language-switcher.php") ?>
      <a href="#" class="btn --secondary"><?= $reservation ?></a>
      <!-- <span class="nav-icon"><img src="<?= $legIcon ?>" width="24" alt=""><img src="<?= $legIcon ?>" width="24" alt=""></span> -->
    </nav>
  </div>
</header>
<main>