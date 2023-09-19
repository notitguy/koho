<?php namespace ProcessWire;

  $forbesLogo = $assets ."images/partners/forbes.svg";
  $refresherLogo = $assets ."images/partners/refresher.svg";
  $expatsLogo = $assets ."images/partners/expats.svg";
  $prgMornLogo = $assets ."images/partners/prg-morning.webp";
  $prgTimesLogo = $assets ."images/partners/prg-times.svg";

?>

<div class="featured-media container">
  <p><?= $featuredMediaTitle ?></p>
  <img src="<?= $forbesLogo ?>" width="100" height="26" alt="">
  <img src="<?= $refresherLogo ?>" width="120" height="31" alt="" style="margin-top: 0.1rem;">
  <img src="<?= $prgMornLogo ?>" width="150" height="19" alt="">
  <img src="<?= $expatsLogo ?>" width="110" height="25" alt="" style="margin-top: 0.4rem;">
  <img src="<?= $prgTimesLogo ?>" width="30" height="54" alt="" style="margin-top: -0.8rem;">
</div>