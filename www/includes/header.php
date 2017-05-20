<?php

  if (!isset($page_title))
    $page_title = 'Baasile IO : La plate-forme d\'interconnexion augmentée';

  if (!isset($page_description))
    $page_description = "Baasile IO est une solution BaaS pour administrer des échanges de données entre des services web et des applications.";

  if (!isset($page_canonical))
    $page_canonical = "http://baasile.io";

  if (!isset($page_image))
    $page_image = "http://baasile.io/assets/img/baasile-io-og-image.jpg";

?><!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="canonical" href="<?php echo $page_canonical; ?>">

  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:url" content="<?php echo $page_canonical; ?>">
  <meta property="og:site_name" content="Baasile IO">
  <meta property="og:description" content="<?php echo $page_description; ?>">
  <meta property="og:image" content="<?php echo $page_image; ?>">
  <meta property="fb:app_id" content="242704516149951">

  <!--[if IE]><link rel="shortcut icon" href="/assets/img/favicon/favicon.ico"><![endif]-->
  <link rel="apple-touch-icon" href="/assets/img/favicon/apple-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="msapplication-TileImage" content="/assets/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#000000">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,500">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/1677a856f7.js"></script>
  <link rel="stylesheet" href="/assets/css/main.min.css">

  <?php if (isset($page_styles)) { ?>
    <style>
      <?php echo $page_styles; ?>
    </style>
  <?php } ?>
</head>
<body id="<?php echo $page_id; ?>">