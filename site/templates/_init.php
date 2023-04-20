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

$businessName = _x('Kohoutek Restaurant', 'header');
$address = "Slezská 780/49, Praha 3 - Vinohrady";
$phone = "+420 602 760 996";
$email = "info@kohoutekresto.cz";

$logo = $assets ."images/logo.svg";
$logoResponsive = $assets ."icons/kok.svg";

$locationIcon = $assets ."/icons/location.svg";
$instagramIcon = $assets ."/icons/instagram.svg";
$googleIcon = $assets ."/icons/google.svg";
$facebookIcon = $assets ."/icons/facebook.svg";
$tripadvisorIcon = $assets ."/icons/tripadvisor.svg";

$reservationLink = "https://kohoutek-restaurace.reservio.com/";
$orderLink = "https://speedlo.cz/app/kohoutek/wb/home";