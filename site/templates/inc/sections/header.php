<?php namespace ProcessWire;

$about = _x('About', 'header');
$menu = _x('Menu', 'header');
$shop = _x('Shop', 'header');
$findUs = _x('Find us', 'header');
$reservation = _x('Reservation', 'header');

?>

<header class="container">
  <ul>
    <li><?= $about ?></li>
    <li><?= $menu ?></li>
    <li><?= $shop ?></li>
    <li><?= $findUs ?></li>
  </ul>
  <a href="<?= $home->url ?>">Home</a>
  <?php include ($components ."language-switcher.php") ?>
  <a href="mailto:<?= $email; ?>" class="secondary"><?= $reservation ?></a>
</header>