<?php namespace ProcessWire;

$plateImage = $assets ."images/main/plate.png";

?>
<section class="hero">
  <div class="container --small">
    <h1>Delicious Italian cockerel</h1>
    <div class="cta">
      <a href="#" class="btn --primary">Delivery
        <img src="<?= $assets ."icons/bag.svg" ?>" width="20" height="20" alt="">
      </a>
      <img src="<?= $assets ."icons/delivery-car.svg" ?>" width="75" height="75" alt="">
    </div>
    <div class="hero-image">
      <img src="<?= $plateImage ?>" width="800" alt="">
    </div>
  </div>
</section>
<div class="border --80"><div></div></div>