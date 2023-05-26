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
    $today = strtotime("-12 hours"); // get yesterday's date to hide expired events
    $limit = $page->template->name === "home" ? 3 : 20; // limit "homepage events to 3, events page to 20"

    foreach ($page->eventlist->find("time>$today, limit=$limit, sort=time") as $event) : ?>

      <?php
        // localised dates
        $locale = $user->language->getLocale();

        if ($locale === "cs_CZ.utf-8") {
          $pattern = "eeee, d. MMMM - kk:mm";
        } else {
          $pattern = "eeee, MMMM d - kk:mm";
        }
        
        $fmt = datefmt_create( // Time formatter
          $locale,
          IntlDateFormatter::FULL,
          IntlDateFormatter::FULL,
          date_default_timezone_get(),
          IntlDateFormatter::GREGORIAN,
          $pattern
        );
        $input = strtotime($event->time); // get event time
        $eventTimeLC = datefmt_format($fmt, $input); // format event time

        // icons
        $eventIconType = $event->event_icon->title;
        $eventIcon = '';
        
        switch ($eventIconType) {
          case 'Food':
            $eventIcon = $assets . "icons/food.svg";
            break;
          case 'Football':
            $eventIcon = $assets . "icons/football.svg";
            break;
          case 'Racing':
            $eventIcon = $assets . "icons/racing.svg";
            break;
          case 'Wine':
            $eventIcon = $assets . "icons/wine-glass.svg";
            break;
          
          default:
          $eventIcon = $assets . "icons/calendar-filled.svg";
            break;
        }
      ?>

      <div class="event__card">
        <div class="event__header">

          <img src="<?= $eventIcon  ?>" alt="" width="24" height="24">
          <span><?= $eventTimeLC ?></span>
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