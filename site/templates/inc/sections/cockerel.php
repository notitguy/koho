<?php namespace ProcessWire;
  $cockerelImage = $assets ."images/photos/cockerel.jpg";
  $alpsImage = $assets ."images/photos/alps.jpg";
?>

<div class="border --90"><div></div></div>
<section>
  <article id="cockerel" class="container">
    <h2><?= $page->heading_cockerel ?></h2>
    <div class="body">
      <?= $page->body_cockerel ?>
    </div>
    <div class="cockerel-media frame">
      <img src="<?= $cockerelImage ?>" alt="" loading="lazy">
    </div>
    <ul>
    <?php foreach ($page->cockerel_repeater as $item) : ?>
      <li>
        <h3><?= $item->heading ?></h3>
        <span><?= $item->heading_cockerel ?></span>
      </li>
    <?php endforeach; ?>
    </ul>
  </article>

</section>