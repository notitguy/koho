<?php namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->prependTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

$assets = $config->urls->templates . "assets/"; // not used? see _head
$dist = $config->urls->root . "dist/";
$sections = $config->paths->templates . "inc/sections/";
$components = $config->paths->templates . "inc/components/";

// Globals
$logo = $assets ."images/logo.svg";
$email = "info@kohoutekresto.cz";