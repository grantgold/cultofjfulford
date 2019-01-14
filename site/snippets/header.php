<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $site->description() ?>" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

  <!-- Bulma CSS -->
  <?= css('assets/css/bulma.min.css') ?>

  <!-- Font Awesome // http://fortawesome.github.io/Font-Awesome/icons -->
  <?= css('assets/css/font-awesome.min.css') ?>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">

  <?= css('assets/css/style.css') ?>
  <?= js('assets/js/script.js') ?>

</head>
<body>
  <?php snippet('menu') ?>
  <header class="header" role="banner">
    <div id="menuButton" class="menuButton" class="column">All Interpretations</div>
    <section class="hero">
      <div class="hero-body">
        <div class="container">
          <ul><a href="<? $site->url() ?>"><img class="logo" src="http://www.cultofjfulford.org/assets/images/logo.svg"/></a></ul>
          <ul><?= $site->description() ?></ul>
        </div>
      </div>
    </section>
  </header>
