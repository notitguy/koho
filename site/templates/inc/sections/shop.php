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
      <figure>
      <a href="<?= $pdfMoto ?>" class="shop__product">
        <img src="<?= $shopBike ?>" width="266" height="267" alt="Shop Kohoutek" loading="lazy">
        <figcaption>Motorcycles</figcaption>
      </a>
      </figure>
      <figure>
        <!-- <a href="" class="shop__product"> -->
          <img src="<?= $shopArt ?>" width="267" height="267" alt="Shop Kohoutek" loading="lazy">
          <figcaption>Art</figcaption>
        <!-- </a> -->
      </figure>
      <figure id="galFurniture">
      <!-- <a href="" class="shop__product"> -->
        <img src="<?= $shopChair ?>" width="267" height="267" alt="Shop Kohoutek" loading="lazy">
        <figcaption>Furniture</figcaption>
      <!-- </a> -->
      </figure>
      <figure>
      <a href="<?= $pdfParfume ?>" class="shop__product">
        <img src="<?= $shopHelmet ?>" width="266" height="267" alt="Shop Kohoutek" loading="lazy">
        <figcaption>Accessories</figcaption>
      </a>
      </figure>
    </section>
    <div class="gallery pswp-gallery" id="gallery--furniture" style="display: none;">

      <a href="<?= $assets ."download/chairs/Gliss_921_01_red.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Gliss 921 Red</span>
      </a>
      <a href="<?= $assets ."download/chairs/Gliss_921_04_transparent.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Gliss 921 Transparent</span>
      </a>
      <a href="<?= $assets ."download/chairs/Gliss_921_05_black.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Gliss 921 Black</span>
      </a>
      <a href="<?= $assets ."download/chairs/Queen_650_03.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Queen 650</span>
      </a>
      <a href="<?= $assets ."download/chairs/Queen_650_07.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Queen 650</span>
      </a>
      <a href="<?= $assets ."download/chairs/Queen_650_08.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Queen 650 Black</span>
      </a>
      <a href="<?= $assets ."download/chairs/Queen_650_09.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Queen 650 Black</span>
      </a>
      <a href="<?= $assets ."download/chairs/Young_426_01_wenge.jpg"; ?>"
        data-pswp-width="2000" 
        data-pswp-height="1373"
        target="_blank">
        <span>Young 426</span>
      </a>

    </div>
  </article>
</section>