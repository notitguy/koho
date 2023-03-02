<?php namespace ProcessWire;

$runningText = "Upcoming events";

?>

<div class="border --80"><div></div></div>
<section id="about">
  <?php include ($components ."running-text.php") ?>
  <div class="events container --small">
    <div>
      <img src="<?= $assets . "icons/food.svg" ?>" alt="">
      <span>March 21, 18:00</span>
      <h3>Grill & Chill</h3>
      <img class="toggle" src="<?= $assets . "icons/chevron-down.svg" ?>" alt="">
    </div>
    <div>
      <img src="<?= $assets . "icons/football.svg" ?>" alt="">
      <span>March 29, 20:45</span>
      <h3>Champions League: Ajax vs Napoli</h3>
      <img class="toggle" src="<?= $assets . "icons/chevron-down.svg" ?>" alt="">
    </div>
    <div>
      <img src="<?= $assets . "icons/racing.svg" ?>" alt="">
      <span>April 2, 19:00</span>
      <h3>MotoGP: Red Bull Grand Prix</h3>
      <p>Get a free beer when ordering any menu! <a href="#">See more</a></p>
      <img class="toggle" src="<?= $assets . "icons/chevron-down.svg" ?>" alt="">
    </div>
  </div>
  
</section>