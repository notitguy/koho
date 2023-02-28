<section id="about">
  <div pw-id="content" class="container">
    Default content
    <h2><?php echo $page->title;?></h2>
    <?php
      $buttonText = $page->title;
      include ($components ."button.php")
    ?>
    <?php
      $buttonText = "New button";
      include ($components ."button.php")
    ?>
  </div>
  <div class="border"><div></div></div>
</section>