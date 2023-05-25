<?php namespace ProcessWire;

$iconBag = $assets ."/icons/bag.svg";
$deliveryImage = $assets ."/images/photos/delivery.jpg";

?>
<div class="border --90"><div></div></div>
<section id="delivery">
  <article class="container">
    <div class="body">
      <h2><?= $page->heading_delivery ?></h2>
      <div class="delivery__card">
        <?= $page->body_delivery ?>
        <a href="<?= $info->order_link ?>" class="btn" target="_blank" rel="nofollow" style="margin-top:var(--gutter-s)" data-event="orderClickDelivery">
          <?= $orderLinkText ?> <img src="<?= $iconBag ?>" alt="">
        </a>
      </div>
    </div>
    <div class="delivery-media frame">
      <img src="<?= $deliveryImage ?>" alt="">
    </div>
  </article>
</section>