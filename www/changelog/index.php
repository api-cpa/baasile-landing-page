<?php

include_once __DIR__.'/../../vendor/Parsedown/Parsedown.php';

$i = $_GET["i"];

$md = false;

$md_filepath = __DIR__.'/../../lib/public/changelogs/'.$i.'.md';
if (file_exists($md_filepath)) {
  $date = $i;
  $changelog_title = "CHANGELOG / ".$date;
  $text = file_get_contents($md_filepath);
  $Parsedown = new Parsedown();
  $md = $Parsedown-> text($text);
} else {
  $changelog_title = "Cette page n'existe pas!";
  http_response_code(404);
}

?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?php echo $changelog_title; ?> - Baasile IO</title>
  <meta name="description" content="">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">

  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.css">
  <link rel="stylesheet" href="/assets/css/main.css">

  <style>
    h2 {
      padding-top: 30px;
      margin-top: 30px;
      border-top: 1px solid #CCC;
    }
    h2:first-of-type {
      border: 0;
      margin-top: 0px;
    }
  </style>
</head>
<body>
<div class="ui vertical inverted center aligned segment">
  <div class="ui container">
    <div class="ui massive inverted secondary pointing menu">
      <a href="/" class="item"><img src="/assets/img/baasile-io-inverted-simple-x30.png"></a>
    </div>
  </div>
</div>
<div class="ui text container">
  <div class="ui stripe vertical segment">
    <?php if ($md === false) { ?>
      <h1 class="ui block header">
        <div class="content">
          <?php echo $changelog_title; ?>
        </div>
      </h1>

    <?php } else { ?>
      <h1 class="ui block header">
        <img src="/assets/img/baasile-io-200x200.png">
        <div class="content">
          Nouveautés
          <div class="sub header">CHANGELOG / <?php echo $date; ?></div>
        </div>
      </h1>
      <?php echo $md; ?>
    <?php } ?>
  </div>
</div>
<div class="ui inverted vertical footer segment">
  <div class="ui container">
    <div class="ui stackable inverted divided equal height stackable grid">
      <div class="three wide column">
      </div>
      <div class="three wide column">
      </div>
      <div class="seven wide column">
      </div>
    </div>
  </div>
</div>
</body>
</html>
