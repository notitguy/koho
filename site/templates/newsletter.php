<?php namespace ProcessWire;

$deliveryImage = $assets ."/images/photos/delivery.jpg";

?>

<main pw-id="content">
  <div class="border --80"><div></div></div>
  <section>
    <article class="container" style="width: 100%">
      <div>
        <?= $page->body ?>
        <iframe
          style="width: 100%;" 
          src="https://docs.google.com/forms/d/e/1FAIpQLSe1nrL9aULy4ytArfj-5zgjEjQOeXecltlBjmwfuy6rnpq45Q/viewform?embedded=true"
          height="800"
          frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
      </div>
      <!-- <div class="delivery-media frame">
        <img src="<?= $deliveryImage ?>" alt="">
      </div> -->
    </article>
  </section>
</main>