<section class="eventlist">
  <article class="container">
    <div class="eventlist__body">
      <h2><?= $events->heading ?></h2>
      <?= $events->body_about ?>
      <?php
        $banner = $events->banner;
        if($banner) {
          // $thumb = $image->size(100, 100);
          echo "<img src='$banner->url' style='margin-block: var(--gutter);' alt='Kohoutek events'>";
        }
        ?>
      <!-- <a href="#" class="btn">More events
        <img src="<?= $assets . "icons/calendar.svg" ?>" width="20" height="20" alt="">
      </a> -->
      <!-- <a href="https://www.kohoutekresto.cz/site/assets/files/1070/menu-capodanno-2024.pdf" target="_blank" style="display:block; margin-top: 1.5rem" >
        <img src="<?= $assets ."/images/photos/events/NYE24-sm.jpg"?>" width="500" alt="">
      </a> -->
    </div>

    <?php
    $today = strtotime("-12 hours"); // get yesterday's date to hide expired events
    $limit = $page->template->name === "home" ? 3 : 20; // limit "homepage events to 3, events page to 20"
    
    foreach ($events->eventlist->find("time|time_end>$today, limit=$limit, sort=time") as $event) : ?>

      <?php
        // localised dates
        $locale = $user->language->getLocale();

        if ($locale === "cs_CZ.utf-8") {
          $pattern = "eeee, d.MM, kk:mm";
        } else {
          $pattern = "eeee, MMM d, kk:mm";
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
        $inputEnd = strtotime($event->time_end);

        $eventTimeLC = datefmt_format($fmt, $input); // format event time
        $eventEndTimeLC = datefmt_format($fmt, $inputEnd);
        
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
            
            // fully booked?
            $isFullyBooked = $event->booked;
            $bookedText = $isFullyBooked === 1 ? "<span class='booked'>$booked</span>" : null;
            
            // event flyer
            $flyer = $event->event_flyer;
            $flyerText = $flyer ? "<a href='$flyer->url' class='btn'>$seeMore</a>" : null;
          
            ?>

      <div class="event__card">
        <div class="event__header">
          
          <img src="<?= $eventIcon  ?>" alt="" width="24" height="24">
          <span><?= $eventTimeLC ?> 
            <?php if ($event->time_end) {
              echo "— $eventEndTimeLC";
            }
            ?>
            <?= $bookedText ?>
          </span>
          <h3><?= $event->heading ?></h3>
          <i></i>
        </div>
        <div class="body">
          <p><?= $event->body ?></p>
          <?= $flyerText ?>
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