<?php namespace ProcessWire;

$bagIcon =  $assets ."icons/bag.svg";
$deliveryIcon =  $assets ."icons/delivery-car.svg";
$santaKok = $assets ."images/hero/christmas/santa-kok.svg";

$page = $pages->get(1);

?>
<section class="hero christmas">
  <img src="<?= $santaKok ?>" width="500" alt="">
  <div class="body container --small">
      <h1><?= $page->heading ?></h1>
    <div class="cta">
      <a href="<?= $info->order_link ?>" class="btn --primary" target="_blank" rel="nofollow" data-event="orderClickHero">
        <?= $page->button_text_hero ?>
        <img src="<?= $bagIcon ?>" width="26" height="26" alt="">
      </a>
      <img src="<?= $deliveryIcon ?>" width="75" height="75" class="car" alt="">
    </div>
  </div>
  <?php include ($components ."plate.php") ?>
</section>