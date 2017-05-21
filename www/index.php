<?php

$page_id = 'homepage';

include 'includes/header.php';
?>
<div class="cover-container header container-fluid">
  <div class="masthead">
    <div class="inner">
      <h3 class="masthead-brand">Baas<span class="b-io-special">ile</span> IO</h3>
      <nav class="nav nav-masthead">
        <a class="nav-link disappear active" href="/">Home</a>
        <a class="nav-link disappear" href="/discover">Discover</a>
        <a class="nav-link disappear" href="/contact">About us</a>
      </nav>
    </div>
  </div>
</div>

<div class="site-wrapper container">

  <div class="site-wrapper-inner">

    <div class="cover-container">

      <div class="inner cover pop">
        <h1 class="cover-heading">
          <img alt="Baasile IO" src="/assets/img/baasile-io-logo-blackbg.png" class="img-fluid mobile-no">
          <img alt="Baasile IO" src="/assets/img/baasile-io-logo-blackbg-mobile.png" class="img-fluid mobile-yes">
        </h1>
        <p class="lead b-io-subtitle">Augmented <span class="b-io-special">interconnection</span> platform</p>
        <p class="lead b-io-homepage-action">
          <a href="/discover" class="btn btn-lg btn-primary disappear">
            <i class="fa fa-rocket fa-lg fa-fw fa-inverse"></i>
            Discover our solution
          </a>
          &nbsp;
          <a href="/contact" class="btn btn-lg btn-secondary disappear">
            <i class="fa fa-users fa-lg fa-fw"></i>
            About us
          </a>
        </p>
      </div>

      <div class="mastfoot">
        <div class="inner">
          <p>
            Port Parallèle / Baasile IO<br />
            <i class="fa fa-map-marker fa-fw fa-inverse pop" aria-hidden="true"></i> 70, rue Amelot, 75011 Paris<br />
            <i class="fa fa-phone fa-fw fa-inverse pop" aria-hidden="true"></i> +33 6 51 15 98 82
            <i class="fa fa-envelope fa-fw fa-inverse pop" aria-hidden="true"></i> contact@baasile.io
          </p>
        </div>
      </div>

    </div>

  </div>

</div>
<?php /*<body class="b-io-homepage">
<div class="ui vertical inverted masthead masthead-homepage b-io-space-background center aligned segment">
    <div class="ui container">
        <div class="ui inverted massive secondary pointing menu">
            <a href="/" class="item"><img src="/assets/img/baasile-io-inverted-simple-x30.png" alt="www.baasile.io"></a>
        </div>
    </div>
    <div class="ui container">
        <div class="b-io-masthead-persona">
            <img alt="Baasile IO - Backend as a Service" src="/assets/img/basilio-homepage.png">
        </div>
        <img alt="Mascotte de Baasile IO" src="/assets/img/baasile-io-homepage.png">
        <h2>La plateforme <span class="b-io-special">d'interconnexion</span> augmentée</h2>
    </div>
</div>
<div class="ui text container">
    <div class="ui vertical stripe center aligned segment">
        <p>
            <a href="mailto:contact@baasile.io" title="Contacter l'équipe de Baasile IO" class="ui huge inverted left icon button">
                <i class="left mail icon"></i>
                Contactez-nous
            </a>
            <!--<a href="https://github.com/baasile-io/baasile-io" title="Téléchargez le code source de Baasile IO" class="ui huge inverted left icon button">
                <i class="left github icon"></i>
                Déployez maintenant !
            </a>-->
        </p>
        <p>
            <strong>Baas<span class="b-io-special">ile</span> IO</strong> simplifie les échanges de données
            entre les <strong>services</strong> et les <strong>fournisseurs de données</strong>.
            C'est une plateforme accessible en mode SaaS jouant le rôle d'un hub.
        </p>
    </div>
</div>
<!--
<div class="ui container">
    <div class="ui vertical stripe segment">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3 class="b-io-special">Productivité</h3>
                    <p>Gagnez en productivité grâce aux interfaces standardisées.</p>
                </div>
                <div class="column">
                    <h3 class="b-io-special">Simplicité</h3>
                    <p>Bénéficiez d'un tableau de bord ergonomique.</p>
                </div>
                <div class="column">
                    <h3 class="b-io-special">Rapidité</h3>
                    <p>Déployez votre propre plate-forme en quelques minutes.</p>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div class="b-io-space-background">
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid">
            <div class="row">
                <div class="column">
                    <div class="b-io-schema-container">
                        <div class="b-io-schema-image">
                            <img src="/assets/img/schemes/schema-flux.png" alt="Harmonisez, mesurez et contrôlez les échanges de données.">
                        </div>
                        <div class="b-io-schema-title">
                            Connectez
                        </div>
                        <div class="b-io-schema-description">
                            Harmonisez, mesurez et contrôlez les échanges de données.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="b-io-schema-container">
                        <div class="b-io-schema-image">
                            <img src="/assets/img/schemes/schema-partage.png" alt="Connectez votre service une seule fois et accédez à de multiples fournisseurs.">
                        </div>
                        <div class="b-io-schema-title">
                            Simplifiez
                        </div>
                        <div class="b-io-schema-description">
                            Connectez votre service une seule fois et accédez à de multiples fournisseurs.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="b-io-schema-container">
                        <div class="b-io-schema-image">
                            <img src="/assets/img/schemes/schema-droits.png" alt="Paramétrez les droits d'accès entre les services et les fournisseurs de données.">
                        </div>
                        <div class="b-io-schema-title">
                            Contrôlez
                        </div>
                        <div class="b-io-schema-description">
                            Paramétrez les droits d'accès entre les fournisseurs de données et les services.
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="column">
                    <div class="b-io-schema-container">
                        <div class="b-io-schema-image">
                            <img src="/assets/img/schemes/schema-fc.png" alt="Bénéficiez nativement du dispositif de l'État FranceConnect.">
                            <div class="b-io-schema-title">
                                FranceConnect
                            </div>
                        </div>
                        <div class="b-io-schema-description">
                            Bénéficiez nativement du dispositif de l'État FranceConnect.
                        </div>
                    </div>
                </div>
            </div>
            -->
            <div class="row">
                <div class="column">
                    <div class="b-io-schema-container">
                        <div class="b-io-schema-image">
                            <img src="/assets/img/schemes/schema-dashboard.png" alt="Supportez vos utilisateurs, administrez la plate-forme et mesurez son usage.">
                        </div>
                        <div class="b-io-schema-title">
                            Administrez
                        </div>
                        <div class="b-io-schema-description">
                            Supportez vos utilisateurs, administrez la plate-forme et mesurez son usage.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui text container">
    <div class="ui two column stackable grid">
        <div class="column">
            <div class="b-io-social-container b-io-fb">
                <div class="fb-like" data-href="https://www.facebook.com/BaasileIO/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
            </div>
        </div>
        <div class="column">
            <div class="b-io-social-container">
                <a href="https://twitter.com/BaasileIO" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-size="large">Suivre @BaasileIO</a>
            </div>
        </div>
        <!--
        <div class="column">
            <div class="b-io-social-container">
                <a class="github-button" data-style="mega" href="https://github.com/baasile-io/baasile-io" data-count-href="/baasile-io/baasile-io/stargazers" data-count-api="/repos/baasile-io/baasile-io#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star baasile-io/baasile-io on GitHub">Star</a>
            </div>
        </div>
        -->
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=242704516149951";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>*/ ?>
</div>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Baasile IO",
  "url": "http://baasile.io",
  "logo": "http://baasile.io/assets/img/baasile-io-logo-600x600.png",
  "sameAs": [
    "http://www.facebook.com/BaasileIO",
    "http://twitter.com/BaasileIO"
  ]
}
</script>
<script src="/assets/js/main.js"></script>
</body>
</html>