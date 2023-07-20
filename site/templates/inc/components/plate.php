<?php namespace ProcessWire;

  $plateImage = $assets ."images/hero/webp/plate.webp";
  $plateImage2 = $assets ."images/hero/webp/plate2.webp";
  $plateImage3 = $assets ."images/hero/webp/plate3.webp";

  $p1 = $assets ."images/hero/peanuts/webp/p1.webp";
  $p2 = $assets ."images/hero/peanuts/webp/p2.webp";
  $p3 = $assets ."images/hero/peanuts/webp/p3.webp";
  $p4 = $assets ."images/hero/peanuts/webp/p4.webp";
  $p5 = $assets ."images/hero/peanuts/webp/p5.webp";
  $p6 = $assets ."images/hero/peanuts/webp/p6.webp";
  $p7 = $assets ."images/hero/peanuts/webp/p7.webp";
  $p8 = $assets ."images/hero/peanuts/webp/p8.webp";
  $p9 = $assets ."images/hero/peanuts/webp/p9.webp";
  $p10 = $assets ."images/hero/peanuts/webp/p10.webp";
  $p11 = $assets ."images/hero/peanuts/webp/p11.webp";
  $p12 = $assets ."images/hero/peanuts/webp/p12.webp";
  $p13 = $assets ."images/hero/peanuts/webp/p13.webp";
  $p14 = $assets ."images/hero/peanuts/webp/p14.webp";
  $p15 = $assets ."images/hero/peanuts/webp/p15.webp";
  $p16 = $assets ."images/hero/peanuts/webp/p16.webp";
  $p17 = $assets ."images/hero/peanuts/webp/p17.webp";

?>

<div class="hero-cockerel container">
  <img src="<?= $p1 ?>" width="56" height="57" alt="" style="--d:12";>
  <img src="<?= $p2 ?>" width="56" height="39" alt="" style="--d:1";>
  <img src="<?= $p3 ?>" width="56" alt="" style="--d:5";>
  <img src="<?= $p4 ?>" width="60" height="" alt="" style="--d:10";>
  <img src="<?= $p5 ?>" width="56" alt="" style="--d:8";>
  <img src="<?= $p6 ?>" width="56" alt="" style="--d:1";>
  <img src="<?= $p7 ?>" width="56" height="" alt="" style="--d:6";>
  <img src="<?= $p8 ?>" width="56" alt="" style="--d:5";>
  <img src="<?= $p9 ?>" width="56" alt="" style="--d:5";>
  <img src="<?= $p10 ?>" width="56" height="49" alt="" style="--d:5";>
  <img src="<?= $p11 ?>" width="48" height="90" alt="" style="--d:7";>
  <img src="<?= $p12 ?>" width="80" height="45" alt="" style="--d:4";>
  <img src="<?= $p13 ?>" width="48" height="75" alt="" style="--d:3";>
  <img src="<?= $p14 ?>" width="56" height="39" alt="" style="--d:10";>
  <img src="<?= $p15 ?>" width="56" height="63" alt="" style="--d:8";>
  <img src="<?= $p16 ?>" width="38" height="70" alt="" style="--d:12";>
  <img src="<?= $p17 ?>" width="70" height="62" alt="" style="--d:9";>

  <div class="plates swiper" style="width:100%">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="<?= $plateImage ?>" width="800" class="plate" alt=""></div>
      <div class="swiper-slide"><img src="<?= $plateImage2 ?>" width="800" class="plate" alt="" loading="lazy"></div>
      <div class="swiper-slide"><img src="<?= $plateImage3 ?>" width="800" class="plate" alt="" loading="lazy"></div>
    </div>
  </div>
</div>