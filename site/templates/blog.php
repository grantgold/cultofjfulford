<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="intro text">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>

    </header>

    <section class="wrap">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article grid-container">

            <?php snippet('coverimage', $article) ?>

            <header class="article-header">
              <h2 class="article-title">
                <?= $article->title()->html() ?>
              </h2>

              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
              <div class="text">
                <p>
                  <?= $article->text()->kirbytext() ?>
                  <!-- <a href="<?= $article->url() ?>" class="article-more">read more</a> -->
                </p>
              </div>
            </header>

          </article>

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>
