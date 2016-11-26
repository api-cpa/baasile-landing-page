<?php

include_once __DIR__.'/../../vendor/Parsedown/Parsedown.php';

$i = $_GET["i"];

$md = false;
$page_canonical = 'http://baasile.io/changelog';
$page_title = "Baasile IO : Actualités";

if ($i === "") {
  $changelog_title = "Actualités";
} else {
  $md_filepath = __DIR__.'/../../lib/public/changelogs/'.$i.'.md';
  if (file_exists($md_filepath)) {
    $date = $i;
    $changelog_title = "CHANGELOG / ".$date;
    $text = file_get_contents($md_filepath);
    $Parsedown = new Parsedown();
    $md = $Parsedown->text($text);
    $page_canonical = $page_canonical.'/'.$i;
    $page_title = $page_title.' '.$date;
  } else {
    $changelog_title = "Cette page n'existe pas!";
    http_response_code(404);
  }
}

$page_styles = '
  h2 {
    padding-top: 30px;
    margin-top: 30px;
    border-top: 1px solid #CCC;
  }
  h2:first-of-type {
    border: 0;
    margin-top: 0px;
  }
';

$page_description = "Quoi de neuf sur la solution Baasile IO ? Découvrez toutes les nouveautés.";

include '../includes/header.php';
?>
<body>
<div class="ui vertical inverted center aligned segment b-io-space-background">
  <div class="ui container">
    <div class="ui massive inverted secondary pointing menu">
      <a href="/" class="item"><img src="/assets/img/baasile-io-inverted-simple-x30.png" alt="www.baasile.io"></a>
    </div>
  </div>
</div>
<?php if ($i === "") { ?>
  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <div class="ui aligned stackable grid">
        <div class="row">
          <div class="six wide column">
            <div class="ui segment center aligned b-io-space-background">
              <img src="/assets/img/basilio-homepage.png" alt="Avatar Baasile IO">
            </div>
          </div>
          <div class="ten wide column">
            <h1>Actualités</h1>
            <div class="ui list">
              <div class="item">
                <div>Novembre 2016</div>
                <div class="list">
                  <a class="item" href="/changelog/2016-11-23" title="Nouveautés du 23/11/2016">CHANGELOG / 2016-11-23</a>
                </div>
              </div>
              <div class="item">
                <div>Octobre 2016</div>
                <div class="list">
                  <a class="item" href="/changelog/2016-10-13" title="Nouveautés du 13/10/2016">CHANGELOG / 2016-10-13</a>
                  <a class="item" href="/changelog/2016-10-06" title="Nouveautés du 06/10/2016">CHANGELOG / 2016-10-06</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } else { ?>
<div class="ui text container">
  <div class="ui stripe vertical segment">
    <?php if ($md === false) { ?>
      <h1 class="ui block header">
        <div class="content">
          <?php echo $changelog_title; ?>
        </div>
      </h1>

    <?php } else { ?>
      <a href="/changelog" title="Toute l'actualité de la plate-forme baasile IO">Retourner aux actualités</a>
      <h1 class="ui block header b-io-space-background">
        <img src="/assets/img/basilio-avatar-small.png">
        <div class="content">
          Actualités
          <div class="sub header b-io-special">CHANGELOG / <?php echo $date; ?></div>
        </div>
      </h1>
      <?php echo $md; ?>
    <?php } ?>
  </div>
</div>
<?php } ?>

<?php include '../includes/footer.php'; ?>
</body>
</html>
