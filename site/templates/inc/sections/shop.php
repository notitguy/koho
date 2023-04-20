<?php namespace ProcessWire;

$iconShop = $assets ."/icons/cart.svg";

$shopBike = $assets ."/images/photos/shop-bike.jpg";
$shopArt = $assets ."/images/photos/shop-art.jpg";
$shopChair = $assets ."/images/photos/shop-chair.jpg";
$shopHelmet = $assets ."/images/photos/shop-helmet.jpg";

?>
<div class="border --80"><div></div></div>
<section id="shop">
  <article class="container">
    <div class="body">
      <h2>Exclusive <br>concept store</h2>
      <p>Kohoutek is more than just a restaurant - it is a place where we share our passion.</p>
      <p>All items you find in our restaurant are presented for sale. Visit our online shop and get your favorite piece from Kohoutek!</p>
      <a href="#" class="btn">Shop online <img src="<?= $iconShop ?>" width="24" height="24" alt=""></a>
    </div>
    <section class="shop__tiles">
      <figure>
        <a href="" class="shop__product">
          <img src="<?= $shopBike ?>" width="266" height="267" alt="Shop Kohoutek">
          <figcaption>Motorcycles</figcaption>
        </a>
        </figure>
        <figure>
          <a href="" class="shop__product">
            <img src="<?= $shopArt ?>" width="267" height="267" alt="Shop Kohoutek">
            <figcaption>Art</figcaption>
          </a>
        </figure>
        <figure>
        <a href="" class="shop__product">
          <img src="<?= $shopChair ?>" width="267" height="267" alt="Shop Kohoutek">
          <figcaption>Furniture</figcaption>
        </a>
      </figure>
      <figure>
        <a href="" class="shop__product">
          <img src="<?= $shopHelmet ?>" width="266" height="267" alt="Shop Kohoutek">
          <figcaption>Accessoires</figcaption>
        </a>
        </figure>
    </section>
  </article>
</section>