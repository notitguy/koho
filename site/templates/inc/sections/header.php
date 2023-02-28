<?php namespace ProcessWire;

$about = _x('About', 'header');
$menu = _x('Menu', 'header');
$shop = _x('Shop', 'header');
$findUs = _x('Find us', 'header');
$reservation = _x('Reservation', 'header');


?>

<header class="container">
  <nav>
    <a href="#"><?= $about ?></a>
    <a href="#"><?= $menu ?></a>
    <a href="#"><?= $shop ?></a>
    <a href="#"><?= $findUs ?></a>
  </nav>
  <a href="<?= $home->url?>">
    <img src="<?= $logo ?>" class="logo" alt="Kohoutek">
  </a>
  <nav class="mobile">
    <?php include ($components ."language-switcher.php") ?>
    <a href="mailto:<?= $email; ?>" class="secondary"><?= $reservation ?></a>
    <span>Menu</span>
  </nav>
</header>