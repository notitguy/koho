<?php namespace ProcessWire;

$runningText = "Upcoming events";

$menuIcon = $assets ."/icons/menu.svg";
$locationIcon = $assets ."/icons/location.svg";
$galleryIcon = $assets ."/icons/gallery.svg";
?>

<div class="border --80"><div></div></div>
<section>
  <div class="banner container">This is a place for a<span>BANNER/FLYER</span>It won't show, if there is no banner.</div>
  <?php include ($components ."running-text.php") ?>
  <?php include ($components ."eventlist-home.php") ?>
  <article id="about" class="container">
    <div class="about__video" style="padding:56.25% 0 0 0;position:relative;">
      <iframe src="https://player.vimeo.com/video/772986451?h=5ed232e1ec&autoplay=1&loop=1&byline=0&portrait=0&muted=1&controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
      <script src="https://player.vimeo.com/api/player.js" async defer></script>
    </div>
    <div class="about__body">
      <h2>We are Kohoutek!</h2>
      <p>We are the first restaurant in Czech republic to bring young rooster - an Italian specialty. Kohoutek is also a concept store restaurant - all items you see inside is available to purchase. <a href="#">See our online shop.</a></p>
      <p>It’s our mission to serve only the best quality Italian cockerel.</p>
      <p>Give it a taste and let us know what you think!</p>
      <div class="tiles">
        <a href="#" class="btn">
          <img src="<?= $menuIcon ?>" width="32" height="32" alt="">
          Menu
        </a>
        <a href="#" class="btn">
          <img src="<?= $locationIcon ?>" width="32" height="32" alt="">
          Find us
        </a>
        <!-- <a href="#">
          <img src="<?= $galleryIcon ?>" width="32" height="32" alt="">
          Gallery
        </a> -->
      </div>
      </div>
    <div class="gallery">
      <a href="#"><img src="<?= $assets ."/images/photos/about5.jpg" ?>" width="388" alt="Kohoutek Restaurant"></a>
      <a href="#"><img src="<?= $assets ."/images/photos/about1.jpg" ?>" alt="Kohoutek Restaurant"></a>
      <a href="#">
        <img src="<?= $assets ."/images/photos/about3.jpg" ?>" alt="Kohoutek Restaurant">
        <span>+12</span>
      </a>
    </div>
    <!-- <div class="card">
      <img src="<?= $assets ."/images/photos/about1.jpg" ?>" alt="Kohoutek Restaurant">
      <h3>Dipisicing elit</h3>
      <p>Amet consectetur adipisicing elit. At excepturi perferendis ab recusandae, iure possimus fugit voluptatum, deserunt ratione consequuntur numquam est sapiente voluptates veniam ullam, nisi sunt. Totam, quam.</p>
    </div>
    <div class="card">
    <img src="<?= $assets ."/images/photos/about3.jpg" ?>" alt="Kohoutek Restaurant">
      <h3>Quod explicabo</h3>
      <p>Consectetur adipisicing elit. Dolorum inventore ipsam quod explicabo molestias accusantium. Itaque similique maiores commodi debitis nulla quam placeat! Harum dolore laudantium praesentium quidem aliquam. Quo?</p>
    </div> -->
    <!-- <div class="card">
      <p>Magnam exercitationem quidem voluptatem suscipit laborum hic! Deleniti dolores debitis ut explicabo quisquam culpa itaque recusandae, saepe error rerum officia, earum odio.</p>
    </div> -->

  </article>
</section>