<?php namespace ProcessWire;
  $cockerelImage = $assets ."images/photos/cockerel.jpg";
?>

<div class="border --90"><div></div></div>
<section>
  <article id="cockerel" class="container">
    <h2>It's cockerel, not a chicken</h2>
    <div class="body">
      <h3>What even is a cockerel?</h3>
      <p>While a rooster is an adult male bird, a cockerel is a younger male (a chicken is a lady bird). It is an Italian specialty.</p>
      <h3>It's organic!</h3>
      <p>The cockerel you find at our restaurant comes from the Italian Alps. They are sustainably-raised in large spaces, with mountain air and clean water, making them 100% BIO.</p>
      <div class="flavours">
        <img src="<?= $assets ."icons/flavour-original.svg" ?>" width="64" alt="">
        <img src="<?= $assets ."icons/flavour-spicy.svg" ?>" width="64" alt="">
        <img src="<?= $assets ."icons/flavour-bbq.svg" ?>" width="64" alt="">
      </div>
      <p>Each cockerel served weighs approximately 500 grams and is the perfect serving size for one person.</p>
    </div>
    <div class="cockerel-media frame">
      <img src="<?= $cockerelImage ?>" alt="">
    </div>
    <!-- <div style="padding:56.25% 0 0 0;position:relative;">
      <iframe src="https://player.vimeo.com/video/772986451?h=5ed232e1ec&autoplay=1&loop=1&byline=0&portrait=0&muted=1&controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
    </div> -->
    <ul>
      <li>
        <!-- <img src="<?= $assets ."icons/bio.svg" ?>" width="44" alt=""> -->
        <h3>100% BIO</h3>
        <span>The cockerels are sustainably raised in Italian Alps.</span>
      </li>
      <li>
        <!-- <img src="<?= $assets ."icons/secret.svg" ?>" width="44" alt=""> -->
        <h3>Our secret recipe</h3>
        <span>We have developed it for years. Don't ask for it :)</span>
      </li>
      <li>
        <!-- <img src="<?= $assets ."icons/first.svg" ?>" width="44" alt=""> -->
        <h3>Only one in CZ</h3>
        <span>We are the first and only restaurant in Czech republic to bring Italian cockerel.</span>
      </li>
    </ul>
  </article>

</section>