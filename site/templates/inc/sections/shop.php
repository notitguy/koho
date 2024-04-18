<?php namespace ProcessWire;

$iconShop = $assets ."icons/cart.svg";

$shopBike = $assets ."images/photos/shop-bike.jpg";
$shopArt = $assets ."images/photos/shop-art.jpg";
$shopChair = $assets ."images/photos/shop-chair.jpg";
$shopHelmet = $assets ."images/photos/shop-helmet.jpg";

$pdfMoto = $assets ."download/cenik.2023.pdf";
$pdfParfume = $assets ."download/cat_lpdo_2021.pdf";

?>
<div class="border --80"><div></div></div>
<section id="shop">
  <article class="container">
    <div class="body">
      <h2><?= $page->heading_shop ?></h2>
      <?= $page->body_shop ?>
      <!-- <a href="#" class="btn">Shop online <img src="<?= $iconShop ?>" width="24" height="24" alt="" loading="lazy"></a> -->
      <!-- <h3>Online shop coming soon!</h3> -->
    </div>
    <section class="shop__tiles">
    <?php foreach ($page->shop_repeater->find("limit=4") as $shop) : ?>
      <?php if($shop->shop_switcher === 0 && $shop->shop_pdf == null) : ?>
      <figure>
        <img src="<?= $shop->shop_image->webpUrl ?>" width="266" height="267" alt="Shop Kohoutek" loading="lazy">
        <figcaption><?= $shop->heading_shop ?></figcaption>
      </figure>
      <?php elseif($shop->shop_switcher === 0) : ?> 
      <figure>
        <a href="<?= $shop->shop_pdf->url ?>" class="shop__product">
          <img src="<?= $shop->shop_image->webpUrl ?>" width="266" height="267" alt="Shop Kohoutek" loading="lazy">
          <figcaption><?= $shop->heading_shop ?></figcaption>
        </a>
      </figure>
      <?php elseif($shop->shop_switcher === 1) : ?>
      <figure>
        <img src="<?= $shop->shop_image->webpUrl ?>" width="266" height="267" alt="Shop Kohoutek" loading="lazy">
        <figcaption><?= $shop->heading_shop ?></figcaption>
      </figure>
      <div class="gallery pswp-gallery" id="gallery--<?= $shop->id ?>" style="display: none;">
        <?php foreach ($shop->shop_gallery as $image) : ?>  
          <a href="<?= $image->url ?>"
          data-pswp-width="<?= $image->width(); ?>" 
          data-pswp-height="<?= $image->height(); ?>"
          target="_blank">
        </a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    <?php endforeach; ?>
    </section>

  </article>
</section>