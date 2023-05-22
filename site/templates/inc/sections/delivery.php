<?php namespace ProcessWire;

$iconBag = $assets ."/icons/bag.svg";
$deliveryImage = $assets ."/images/photos/delivery.jpg";

?>
<div class="border --90"><div></div></div>
<section id="delivery">
  <article class="container">
    <div class="body">
      <h2>Doručení Kohout!</h2>
      <div class="delivery__card">
        <h3>Si ji můžete dopřat doma</h3>
        <ul>
          <li>- Doručení zdarma v rámci Prahy 3</li>
          <li>- Nápoj zdarma </li>
        </ul>
        <a href="<?= $orderLink ?>" class="btn" target="_blank" rel="nofollow" style="margin-top:var(--gutter-s)">Objednat <img src="<?= $iconBag ?>" alt=""></a>
      </div>
    </div>
    <div class="delivery-media frame">
      <img src="<?= $deliveryImage ?>" alt="">
    </div>
  </article>
</section>