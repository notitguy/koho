<section class="eventlist">
  <article class="container">
    <div class="eventlist__body">
      <!-- <img src="<?= $assets ."/images/photos/event.jpg"?>" alt=""> -->
      <h2>Kohoutek events</h2>
      <p>Ducimus similique sit explicabo ipsa minus aut.</p>
      <p>Magnam nemo laboriosam sed, veritatis voluptatibus quibusdam sapiente maiores deleniti voluptatem odit amet, quis distinctio!</p>
      <!-- <a href="#" class="btn">More events
        <img src="<?= $assets . "icons/calendar.svg" ?>" width="20" height="20" alt="">
      </a> -->
    </div>
    <?php
    $today = strtotime("-1 day");
    $limit = $page->template->name === "home" ? 3 : 20; 

    foreach ($page->eventlist->find("time>$today, limit=$limit") as $event) : ?>

      <?php 
        $locale = $user->language->getLocale();

        if ($locale === "cs_CZ.utf-8") {
          $pattern = "eeee, d. MMMM - kk:mm";
        } else {
          $pattern = "eeee, MMMM d - kk:mm";
        }
        
        $fmt = datefmt_create(
          $locale,
          IntlDateFormatter::FULL,
          IntlDateFormatter::FULL,
          date_default_timezone_get(),
          IntlDateFormatter::GREGORIAN,
          $pattern
        );
        $input = strtotime($event->time);
        $output = datefmt_format($fmt, $input);
      ?>

      <div class="event__card">
        <div class="event__header">
          <img src="<?= $assets . "icons/racing.svg" ?>" alt="">
          <span><?= $output ?></span>
          <h3><?= $event->heading ?></h3>
          <i></i>
        </div>
        <div class="body">
          <p><?= $event->body ?></p>
        </div>
      </div>

    <?php endforeach; ?>
    <!-- <div class="event__card">
      <div class="event__header">
        <img src="<?= $assets . "icons/football.svg" ?>" alt="">
        <span>June 10, 18:00</span>
        <h3>Champions League Final 2023</h3>
        <i></i>
      </div>
      <div class="body">
        <p>Come and watch with us the biggest footbal match in European club season. Live stream from Istanbul.</p>
      </div>
    </div>
    <div class="event__card">
      <div class="event__header">
      <img src="<?= $assets . "icons/food.svg" ?>" alt="">
        <span>June 17, 18:00</span>
        <h3>Wine Event</h3>
        <i></i>
      </div>
      <div class="body">
        <p>We are hosting a special wine event on Saturday, June 17!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolor fugit alias reprehenderit commodi, soluta quas mollitia nobis sunt, natus explicabo ipsam doloribus officia, minus molestias iusto itaque beatae laudantium?</p>
        <a href="" class="more">More info (we insert flyer here)</a>
      </div>
    </div> -->
  </article>

</section>