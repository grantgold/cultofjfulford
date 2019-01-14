<?php snippet('header') ?>

  <main class="main" role="main">

      <?php snippet('menu') ?>
      <section class="wrap">

            <article class="article grid-container">

              <?php snippet('coverimage', $page) ?>

              <header class="article-header">
                <h2 class="article-title">
                  <?= $page->title()->html() ?>
                </h2>

                <p class="article-date"><?= $page->date('F jS, Y') ?></p>
                <div class="text">
                  <p>
                    <?= $page->text()->kirbytext() ?>
                  </p>
                </div>
              </header>

            </article>
      </section>
  </main>

<?php snippet('footer') ?>
