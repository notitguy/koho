<?php namespace ProcessWire;

$runningText = "Upcoming events";

$menuIcon = $assets ."/icons/menu.svg";
$locationIcon = $assets ."/icons/location.svg";
$galleryIcon = $assets ."/icons/gallery.svg";
?>

<div class="border --80"><div></div></div>
<section>
  <!-- <div class="banner container">This is a place for a<span>BANNER/FLYER</span>It won't show, if there is no banner.</div> -->
  <?php include ($components ."menu.php") ?>
  <?php // include ($components ."running-text.php") ?>
  <?php // include ($components ."eventlist-home.php") ?>
  <article id="about" class="container">
    <div class="about__video" style="padding:50vmin 50% 0 50%;position:relative;">
      <iframe src="https://player.vimeo.com/video/772986451?h=5ed232e1ec&autoplay=1&loop=1&byline=0&portrait=0&muted=1&controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
      <script src="https://player.vimeo.com/api/player.js" async defer></script>
    </div>
    <div class="about__body">
      <h2><?= $page->heading_about ?></h2>
      <?= $page->body_about ?>
      <div class="tiles">
        <?php $menuUrl = $page->menu_repeater->first()->menu_file->url;
        ?>
        <a href="<?= $menuUrl ?>" target="_blank" class="btn">
          <img src="<?= $menuIcon ?>" width="32" height="32" alt="">
          Menu
        </a>
        <a href="#footer" class="btn">
          <img src="<?= $locationIcon ?>" width="32" height="32" alt="">
          <?= $findUs ?>
        </a>
        <!-- <a href="#">
          <img src="<?= $galleryIcon ?>" width="32" height="32" alt="">
          Gallery
        </a> -->
      </div>
      </div>
    <div class="gallery pswp-gallery" id="gallery--home">
    <?php foreach ($page->gallery as $image) : ?>
      <a href="<?= $image->url ?>"
      data-pswp-width="<?= $image->width(); ?>" 
      data-pswp-height="<?= $image->height(); ?>"
      target="_blank">
        <div>
        <?php if($image === $page->gallery->first()) { 
          $imgHeight = 432;
        } else {
          $imgHeight = 192;
        } ?>
          <img src="<?= $image->size(288, $imgHeight)->url ?>" width="288" height="<?= $imgHeight ?>" alt="Kohoutek Restaurant">
        </div>
        <?php if($image === $page->gallery->eq(2)) {
          $qty = $page->gallery->count();
          echo "<span>+". ($qty-3). "</span>";
        } ?>
      </a>
    <?php endforeach; ?>
    </div>

  </article>
</section>