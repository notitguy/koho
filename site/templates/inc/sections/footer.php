<?php namespace ProcessWire;

$catecho = $assets ."images/partners/catecho-logo.png";
$saniplast = $assets ."images/partners/saniplast_logo.png";
$somoto = $assets ."images/partners/somotocz.png";
$vinpivo = $assets ."images/partners/vp-282.png";

$chevronIcon = $assets ."icons/chevron-down.svg";

?>

<div class="border --dark"><div></div></div>
<footer class="container" id="footer">
  <section>
    <h2><?= $businessName ?></h2>
      <?php include($components ."address.php"); ?>
    <div class="map">
    
    </div>
  </section>
  <section>
    <!-- <h3>Stay in touch</h3>
    <p>Get notified about our events and offers.</p>
    <form action="">
      <input type="text" placeholder="Email">
      <button><img src="<?= $chevronIcon ?>" alt="" width="24" height="24" ></button>
       <span><input type="checkbox" name="checkbox"> I agree to terms and conditions.</span>
    </form> -->
    <h3><?= $mediaLinksTitle ?></h3>
    <div class="press">
      <a href="https://www.podbean.com/ew/pb-5mr45-11216ca" target="_blank" rel="nofollow">Prague Times</a>
      <a href="https://www.expats.cz/czech-news/article/best-things-to-do-in-prague-this-weekend-june-18-20" target="_blank" rel="nofollow">Expats.cz</a>
      <a href="https://refresher.cz/103161-Jaka-jsou-nejlepsi-kureci-kridelka-v-Praze-Mame-poradne-paliveho-viteze" target="_blank" rel="nofollow">Refresher</a>
      <a href="https://praguemorning.cz/kohoutek-a-unique-slice-of-italy-serving-cockerel-in-the-heart-of-prague/" target="_blank" rel="nofollow">Prague morning</a>
      <a href="https://www.youtube.com/watch?v=FJwV71gPzTA" target="_blank" rel="nofollow">EATS - Kohoutek</a>
      <a href="https://www.praha3.cz/getFile/id:1164348/%C4%8Cervenec+-+srpen+2023.pdf" target="_blank" rel="nofollow">Radniční noviny</a>
    </div>
  </section>
  <section>
    <h3><?= $partnersTitle ?></h3>
    <div class="partners">
      <a href="http://saniplast.it/en/" target="_blank" rel="nofollow"><img src="<?= $saniplast ?>" width="100" alt="" loading="lazy"></a>
      <a href="http://www.cetecho.cz/" target="_blank" rel="nofollow"><img src="<?= $catecho ?>" width="100" alt="" loading="lazy"></a>
      <a href="https://www.somoto.cz/" target="_blank" rel="nofollow"><img src="<?= $somoto ?>" width="100" alt="" loading="lazy"></a>
      <a href="https://www.vinohradskypivovar.cz/" target="_blank" rel="nofollow"><img src="<?= $vinpivo ?>" width="100" alt="" loading="lazy"></a>
    </div>
  </section>
</footer>

<div class="overlay"></div>

<?php // https://medium.com/@erikritter/css-snippets-add-a-texture-overlay-to-an-entire-webpage-b0bfdfd02c45 ?>
<div class="pattern"></div>
<?php // https://stackoverflow.com/questions/14446677/how-to-make-3-corner-rounded-triangle-in-css/ ?>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 25 -9" result="goo" />
      <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
    </filter>
    <filter id="goo2"><feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />    
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 25 -9" result="goo" />
      <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
    </filter>
  </defs>
</svg>

<script src="<?php echo $dist; ?>_main.js" async defer ></script>