<?php namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->prependTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

// Page variables
$home = $pages->get('/'); // homepage
$info = $pages->get(1049);
$events = $pages->get(1050);

// Folder paths
$assets = $config->urls->templates . "assets/";
$dist = $config->urls->root . "dist/";
$sections = $config->paths->templates . "inc/sections/";
$components = $config->paths->templates . "inc/components/";

// Globals

$businessName = _x('Kohoutek Restaurant', 'site');
$address = "Slezská 780/49, Praha 3 - Vinohrady";
$phone = "+420 602 760 996";
$email = "info@kohoutekresto.cz";

$logo = $assets ."images/logo.svg";
$logoResponsive = $assets ."images/logo-responsive.svg";
$logoGay = $assets ."images/logo-gay.svg";
$logoResponsiveGay = $assets ."images/logo-responsive-gay.svg";

$locationIcon = $assets ."icons/location.svg";
$instagramIcon = $assets ."icons/instagram.svg";
$googleIcon = $assets ."icons/google.svg";
$facebookIcon = $assets ."icons/facebook.svg";
$tripadvisorIcon = $assets ."icons/tripadvisor.svg";

$reservationLink = "https://kohoutek-restaurace.reservio.com/";
$orderLink = "https://speedlo.cz/app/kohoutek/wb/home";

// Translations

$runningText = _x('Upcoming events', 'site');

$about = _x('Our story', 'site');
$menuWord = _x('Menu', 'site');
$shop = _x('Shop', 'site');
$delivery = _x('Delivery', 'site');
$findUs = _x('Find us', 'site');
$reservationLinkText = _x('Reservation', 'site');
$orderLinkText = _x('Order Now', 'site');

$menuTitle = _x('Choose your menu', 'site');
$menuOpen = _x('Open', 'site');
$booked = _x('Fully booked', 'site');
$seeMore = _x('More info', 'site');

// $openNow = _x('Open now', 'site');

$mediaLinksTitle = _x('They wrote about us', 'site');
$partnersTitle = _x('Our Partners', 'site');

// Multi video text

$videoBlockTitle = _x('Kohoutek around you', 'other text');
$videoBlockBody = _x('We regularly participate in food markets and various festivals. Be sure not to miss it!', 'other text');