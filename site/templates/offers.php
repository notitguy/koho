<?php namespace ProcessWire;

$deliveryImage = $assets ."/images/photos/delivery.jpg";

?>

<main pw-id="content">
  <div class="border --80"><div></div></div>
  <section>
    <article class="container">
      <div>
        <?= $page->body ?>
        <a href="<?= $orderLink ?>" class="btn" rel="nofollow"><?= $orderLinkText ?></a>
      </div>
      <div class="delivery-media frame">
        <img src="<?= $deliveryImage ?>" alt="">
      </div>
    </article>
  </section>
</main>