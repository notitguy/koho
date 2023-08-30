<?php namespace ProcessWire;

$deliveryImage = $assets ."/images/photos/delivery.jpg";

?>

<main pw-id="content">
  <div class="border --80"><div></div></div>
  <section>
    <article class="container">
      <div class="special-offer">
        <?= $page->body ?>
        <a href="<?= $orderLink ?>"
          class="btn --primary"
          style="padding: 0.8rem 1.5rem;"
          rel="nofollow"
          target="_blank"
          data-event="orderClickOffers">
          <?= $orderLinkText ?>
          <img src="/site/templates/assets/icons/bag.svg" alt="" loading="lazy">
        </a>
      </div>
      <div class="delivery-media frame">
        <img src="<?= $deliveryImage ?>" alt="">
      </div>
    </article>
  </section>
</main>