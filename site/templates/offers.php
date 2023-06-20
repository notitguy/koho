<?php namespace ProcessWire;

?>

<main pw-id="content">
  <div class="border --80"><div></div></div>
  <section>
    <aricle class="container">
      <?= $page->body ?>
      <a href="<?= $orderLink ?>" class="btn" rel="nofollow"><?= $orderLinkText ?></a>
    </aricle>
  </section>
</main>