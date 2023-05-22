<section id="menu" class="container">
  <h3>
    <img src="<?= $assets ."/icons/splash-left.svg" ?>" width="32" height="60" alt="">
    <?= $menuTitle ?>
    <img src="<?= $assets ."/icons/splash-right.svg" ?>" width="32" height="55" alt="">
  </h3>
  <?php foreach ($page->menu_repeater as $menu) : ?>
    <a href="<?= $menu->menu_file->url ?>" target="_blank">
      <img src="<?= $menu->menu_image->url ?>" alt="">
      <div class="body">
        <h2><?= $menu->heading ?></h2>
        <i><?= $menuOpen ?></i>
      </div>
    </a>
  <?php endforeach; ?>
</section>