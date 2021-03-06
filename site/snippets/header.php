<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132442353-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-132442353-1');
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $site->description() ?>" />

  <title><?= $site->title()->html() ?></title>

  <link rel="shortcut icon" href="assets/images/icon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/icon.ico" type="image/x-icon">

  <!-- Bulma CSS -->
  <?= css('assets/css/bulma.min.css') ?>

  <!-- Font Awesome // http://fortawesome.github.io/Font-Awesome/icons -->
  <?= css('assets/css/font-awesome.min.css') ?>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">

  <?= css('assets/css/style.css') ?>

</head>
<body>
  <div id="menuButton" class="menuButton" class="column">View All Entries</div>
  <?php snippet('menu') ?>
  <header class="header" role="banner">
    <section class="hero">
      <div class="hero-body">
        <div class="container">
          <ul><a href="http://cultofjfulford.grantagold.com"><img class="logo" src="http://cultofjfulford.grantagold.com/assets/images/logo.svg"/></a></ul>
          <ul><?= $site->description() ?></ul>
        </div>
      </div>
    </section>
  </header>
