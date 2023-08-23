<?php namespace ProcessWire;

// remember what language is set to
$savedLanguage = $user->language;

foreach($languages as $language) {

  // if user is already viewing the page in this language, skip it
  if($language->id == $savedLanguage->id) continue;

  // if this page isn't viewable (active) for the language, skip it
  if(!$page->viewable($language)) continue;

  // set the user's language, so that the $page->url and any other
  // fields we access from it will be reflective of the $language
  $user->language = $language;

  // output a link to this page in the other language
  echo "<a href='$page->url'>$language->title</a>";
}

// restore the original language setting
$user->language = $savedLanguage;