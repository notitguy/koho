<address>
  <ul class="opening-hours">
    <li><?= $info->days_open1 ?>: <span><?= $info->hours_open1 ?></span></li>
    <li><?= $info->days_open2 ?>: <span><?= $info->hours_open2 ?></span></li>
  </ul>
  <a href="https://goo.gl/maps/fcWpzhbJtDf5yh3z7" target="_blank" rel="nofollow" class="location">
    <img src="<?= $locationIcon ?>" width="18" alt="" loading="lazy"> <?= $address ?>
  </a>
  <a href="tel:<?= $phone ?>"><?= $phone ?></a>
  <a href="mailto:<?= $email ?>" style="margin-top: -1rem;"><?= $email ?></a>
  <div class="socials">
    <a href="https://www.instagram.com/kohoutek_resto/" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $instagramIcon ?>" alt="" loading="lazy"></a>
    <a href="https://www.facebook.com/KohoutekResto/" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $facebookIcon ?>" alt="" loading="lazy"></a>
    <a href="https://goo.gl/maps/fcWpzhbJtDf5yh3z7" target="_blank" rel="nofollow"><img width="18" height="18" src="<?= $googleIcon ?>" alt="" loading="lazy"></a>
    <a href="https://www.tripadvisor.com/Restaurant_Review-g274707-d22888734-Reviews-Kohoutek_Restaurace-Prague_Bohemia.html" target="_blank" rel="nofollow"><img width="24" height="" src="<?= $tripadvisorIcon ?>" alt="" loading="lazy"></a>
  </div>
</address>