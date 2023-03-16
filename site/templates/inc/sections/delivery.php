<?php namespace ProcessWire;

$iconBag = $assets ."/icons/bag.svg";

?>
<div class="border --90"><div></div></div>
<section id="delivery">
  <article class="container">
    <div class="body">
      <h2>Kohoutek delivers!</h2>
      <div class="delivery__card">
        <h3>Take it home</h3>
        <ul>
          <li>- Free delivery within Prague 3</li>
          <li>- Another deal</li>
        </ul>
        <a href="#" class="btn">Order now <img src="<?= $iconBag ?>" alt=""></a>
      </div>
    </div>
    <div class="delivery-media frame">
      <img src="<?= $cockerelImage ?>" alt="">
    </div>
  </article>
</section>