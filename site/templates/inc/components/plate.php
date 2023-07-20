<?php namespace ProcessWire;

  $plateImage = $assets ."images/hero/plate.png";
  $plateImage2 = $assets ."images/hero/plate2.png";
  $plateImage3 = $assets ."images/hero/plate3.png";

  $p1 = $assets ."images/hero/peanuts/p1.png";
  $p2 = $assets ."images/hero/peanuts/p2.png";
  $p3 = $assets ."images/hero/peanuts/p3.png";
  $p4 = $assets ."images/hero/peanuts/p4.png";
  $p5 = $assets ."images/hero/peanuts/p5.png";
  $p6 = $assets ."images/hero/peanuts/p6.png";
  $p7 = $assets ."images/hero/peanuts/p7.png";
  $p8 = $assets ."images/hero/peanuts/p8.png";
  $p9 = $assets ."images/hero/peanuts/p9.png";
  $p10 = $assets ."images/hero/peanuts/p10.png";
  $p11 = $assets ."images/hero/peanuts/p11.png";
  $p12 = $assets ."images/hero/peanuts/p12.png";
  $p13 = $assets ."images/hero/peanuts/p13.png";
  $p14 = $assets ."images/hero/peanuts/p14.png";
  $p15 = $assets ."images/hero/peanuts/p15.png";
  $p16 = $assets ."images/hero/peanuts/p16.png";
  $p17 = $assets ."images/hero/peanuts/p17.png";

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