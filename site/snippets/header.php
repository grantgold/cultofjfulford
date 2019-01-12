<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Interpreting the teachings from my leader, JFulford." />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- Bulma CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css"/>

  <!-- Font Awesome // http://fortawesome.github.io/Font-Awesome/icons -->
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"/>

  <?= css('assets/css/style.css') ?>

</head>
<body>

  <header class="header" role="banner">
    <section class="hero">
      <div class="hero-body">
        <div class="container">
          <ul><img class="logo" src="assets/images/logo.svg"/></ul>
          <ul>Interpreting the teachings from my leader, JFulford.</ul>
        </div>
      </div>
    </section>
    </div>
  </header>
