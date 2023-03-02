<?php namespace ProcessWire;

$about = _x('About', 'header');
$menu = _x('Menu', 'header');
$shop = _x('Shop', 'header');
$findUs = _x('Find us', 'header');
$reservation = _x('Reservation', 'header');

$legIcon = $assets. "images/leg.svg";
?>

<header>
  <div class="container">
    <nav class="desktop">
      <a href="#"><?= $about ?></a>
      <a href="#"><?= $menu ?></a>
      <a href="#"><?= $shop ?></a>
      <a href="#"><?= $findUs ?></a>
    </nav>
    <nav class="mobile">
      <?php include ($components ."language-switcher.php") ?>
      <a href="mailto:<?= $email; ?>" class="btn --secondary"><?= $reservation ?></a>
      <span class="nav-icon"></span>
    </nav>
  </div>
</header>
<main>