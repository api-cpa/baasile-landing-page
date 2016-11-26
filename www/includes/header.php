<?php

  if (!isset($page_title))
    $page_title = 'Baasile IO : Créez votre propre galaxie de services';

  if (!isset($page_description))
    $page_description = "Baasile IO est une solution BaaS pour administrer des échanges de données entre des services web et des applications.";

  if (!isset($page_canonical))
    $page_canonical = "http://baasile.io";

  if (!isset($page_image))
    $page_image = "http://baasile.io/assets/img/baasile-io-og-image.jpg";

?><!DOCTYPE html>
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

  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.css">
  <link rel="stylesheet" href="/assets/css/main.css">

  <?php if (isset($page_styles)) { ?>
    <style>
      <?php echo $page_styles; ?>
    </style>
  <?php } ?>
</head>