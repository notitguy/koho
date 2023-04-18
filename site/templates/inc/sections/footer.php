<?php namespace ProcessWire;

$locationIcon = $assets ."/icons/location.svg";
$instagramIcon = $assets ."/icons/instagram.svg";
$googleIcon = $assets ."/icons/google.svg";
$facebookIcon = $assets ."/icons/facebook.svg";
$tripadvisorIcon = $assets ."/icons/tripadvisor.svg";

$catecho = $assets ."/images/partners/catecho-logo.png";
$saniplast = $assets ."/images/partners/saniplast_logo.png";
$somoto = $assets ."/images/partners/somotocz.png";
$vinpivo = $assets ."/images/partners/vp-282.png";

?>

</main>

<div class="border --dark"><div></div></div>
<footer class="container">
  <section>
    <h2>Kohoutek Restaurant</h2>
    <address>
      <ul class="opening-hours">
        <li>Monday: <span>16:30 - 22:00</span></li>
        <li>Tuesday-Sunday: <span>11:00 - 22:00</span></li>
      </ul>
      <a href="https://goo.gl/maps/fcWpzhbJtDf5yh3z7" target="_blank" rel="nofollow" class="location">
        <img src="<?= $locationIcon ?>" width="18" alt=""> Slezská 780/49, Praha 3 - Vinohrady
      </a>
      <a href="tel:+420 602 760 996">+420 602 760 996</a>
      <a href="mailto:info@kohoutekresto.cz" style="margin-top: -1rem;">info@kohoutekresto.cz</a>
      <div class="socials">
        <a href="https://www.instagram.com/kohoutek_resto/" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $instagramIcon ?>" alt=""></a>
        <a href="https://www.facebook.com/KohoutekResto/" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $facebookIcon ?>" alt=""></a>
        <a href="https://goo.gl/maps/fcWpzhbJtDf5yh3z7" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $googleIcon ?>" alt=""></a>
        <a href="https://www.tripadvisor.com/Restaurant_Review-g274707-d22888734-Reviews-Kohoutek_Restaurace-Prague_Bohemia.html" target="_blank" rel="nofollow"><img width="24" height="" src="<?= $tripadvisorIcon ?>" alt=""></a>
      </div>
    </address>
    <div class="map">
    
    </div>
  </section>
  <section>
    <h3>Stay in touch</h3>
    <p>Get notified about our events and offers.</p>
    <form action="">
      <input type="text" placeholder="Email">
      <span><input type="checkbox" name="checkbox"> I agree to terms and conditions.</span>
    </form>
    <h3 style="margin-top:var(--gutter);margin-bottom:var(--gutter-s)">Press about us</h3>
    <div class="press">
      <a href="https://www.podbean.com/ew/pb-5mr45-11216ca" target="_blank" rel="nofollow">Prague Times</a>
      <a href="https://www.expats.cz/czech-news/article/best-things-to-do-in-prague-this-weekend-june-18-20" target="_blank" rel="nofollow">Expats.cz</a>
      <a href="https://refresher.cz/103161-Jaka-jsou-nejlepsi-kureci-kridelka-v-Praze-Mame-poradne-paliveho-viteze" target="_blank" rel="nofollow">Refresher</a>
      <a href="https://praguemorning.cz/kohoutek-a-unique-slice-of-italy-serving-cockerel-in-the-heart-of-prague/" target="_blank" rel="nofollow">Prague morning</a>
      <a href="https://www.youtube.com/watch?v=FJwV71gPzTA" target="_blank" rel="nofollow">EATS - Kohoutek</a>
    </div>
  </section>
  <section>
    <h3>Our partners</h3>
    <div class="partners">
      <a href="http://saniplast.it/en/" target="_blank" rel="nofollow"><img src="<?= $saniplast ?>" width="100" alt=""></a>
      <a href="http://www.cetecho.cz/" target="_blank" rel="nofollow"><img src="<?= $catecho ?>" width="100" alt=""></a>
      <a href="https://www.somoto.cz/" target="_blank" rel="nofollow"><img src="<?= $somoto ?>" width="100" alt=""></a>
      <a href="https://www.vinohradskypivovar.cz/" target="_blank" rel="nofollow"><img src="<?= $vinpivo ?>" width="100" alt=""></a>
    </div>
  </section>
</footer>

<?php // https://medium.com/@erikritter/css-snippets-add-a-texture-overlay-to-an-entire-webpage-b0bfdfd02c45 ?>
<div class="pattern"></div>
<?php // https://stackoverflow.com/questions/14446677/how-to-make-3-corner-rounded-triangle-in-css/ ?>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 25 -9" result="goo" />
      <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
    </filter>
  </defs>
</svg>