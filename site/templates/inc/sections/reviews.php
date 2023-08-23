<?php namespace ProcessWire;

$iconStar = $assets ."/icons/star.svg";

?>
<div class="border --80 gradient"><div></div></div>
<section>
  <article class="reviews container">
    <div class="body">
      <h2><?= $page->heading_reviews ?></h2>
      <?= $page->body_reviews ?>
    </div>
    <!-- Slider main container -->
    <div class="swiper reviews__slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($page->reviews as $review) : ?>
          <div class="swiper-slide">
            <span><?= $review->heading_reviews[0] ?></span>
            <h4><?= $review->heading_reviews ?></h4>
            <div class="stars"></div>
            <cite class="review__text"><?= $review->body_reviews ?></cite>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </article>
</section>