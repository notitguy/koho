<?php namespace ProcessWire;

$spider = $assets ."images/hero/halloween/EtCPE3S.webp";
$pumpkin01 = $assets ."images/hero/halloween/VlAEovB.webp";
$pumpkin02 = $assets ."images/hero/halloween/z1sM4My.webp";
$spiderweb = $assets ."images/hero/halloween/7XIEQS1.webp";

?>
  <section class="halloween hero">
    <img src="<?= $spider ?>" class="spider">
    <img src="<?= $pumpkin01 ?>" class="pumpkin01">
    <img src="<?= $pumpkin02 ?>" class="pumpkin02">
    <img src="<?= $spiderweb ?>" class="spiderWeb">
    <div class="body container --small">
      <h2>
        <span style="--i:1;">H</span>
        <span style="--i:2;">a</span>
        <span style="--i:3;">l</span>
        <span style="--i:4;">l</span>
        <span style="--i:5;">o</span>
        <span style="--i:6;">w</span>
        <span style="--i:7;">e</span>
        <span style="--i:8;">e</span>
        <span style="--i:9;">k</span>
      </h2>
      <h3>20.10 - 31.10</h3>
      <p><?= $halloweenP ?> <span><?= $halloweenSpan ?></span></p>
      <div class="cta">
        <a href="https://kohoutek-restaurace.reservio.com/" class="btn --primary" target="_blank" rel="nofollow" data-event="orderClickHero">
          <?= $halloweenButton ?>
        </a>
      </div>
    </div>
    <img src="<?= $assets ."images/hero/halloween/halloween-cock-top.webp"; ?>" width="450" height="401" alt="" style="z-index: 1;">
  </section>