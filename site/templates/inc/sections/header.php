<header>
  <?php echo $home->and($home->children)->implode(" / ", "<a href='{url}'>{title}</a>"); ?>
</header>