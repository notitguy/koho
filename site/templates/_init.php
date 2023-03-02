<?php namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->prependTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

$home = $pages->get('/'); // homepage

// Folder paths
$assets = $config->urls->templates . "assets/";
$dist = $config->urls->root . "dist/";
$sections = $config->paths->templates . "inc/sections/";
$components = $config->paths->templates . "inc/components/";

// Globals
$logo = $assets ."images/logo.svg";
$logoResponsive = $assets ."images/logo-responsive.svg";
$email = "info@kohoutekresto.cz";