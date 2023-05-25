<?php namespace ProcessWire;

if ($info->business_hours->isNowOpen()) {
  echo "<span>{$openNow}</span>";
} else {
  echo "<span>It's closed</span>";
}

?>

