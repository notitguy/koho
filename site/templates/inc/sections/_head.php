<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <!-- <title>Kohoutek Restaurant ~ Italian Cockerel</title> -->
  <?php if ($page->hasField('seo')) {
      echo $page->seo; 
    }
    else {echo "<title>Kohoutek Restaurant ~ Italian Cockerel</title>";}
  ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $dist; ?>_main.css" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TR9C8MLN');</script>
<!-- End Google Tag Manager -->
  
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $assets. "favicon/apple-touch-icon.png"; ?>" >
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $assets. "favicon/favicon-32x32.png"; ?>" >
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $assets. "favicon/favicon-16x16.png"; ?>" >
  <link rel="manifest" href="<?= $assets. "favicon/site.webmanifest"; ?>" >
</head>