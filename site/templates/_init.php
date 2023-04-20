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
$logoResponsive = $assets ."icons/kok.svg";
$email = "info@kohoutekresto.cz";

$locationIcon = $assets ."/icons/location.svg";
$instagramIcon = $assets ."/icons/instagram.svg";
$googleIcon = $assets ."/icons/google.svg";
$facebookIcon = $assets ."/icons/facebook.svg";
$tripadvisorIcon = $assets ."/icons/tripadvisor.svg";