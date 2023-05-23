<?php namespace ProcessWire;

if(!defined("PROCESSWIRE")) die();

/** @var ProcessWire $wire */

/**
 * ProcessWire Bootstrap API Ready
 * ===============================
 * This ready.php file is called during ProcessWire bootstrap initialization process.
 * This occurs after the current page has been determined and the API is fully ready
 * to use, but before the current page has started rendering. This file receives a
 * copy of all ProcessWire API variables.
 *
 */

 // Remove meta generator from SeoMaestro
 $wire->addHookAfter('SeoMaestro::renderMetatags', function (HookEvent $event) {
  $tags = $event->arguments(0);
  $group = $event->arguments(1);

  if ($group === null) {
      unset($tags['meta_generator']);
      $event->return = $tags;
  }
});