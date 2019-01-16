<?php snippet('header') ?>

<main class="main" role="main">

    <?php snippet('menu') ?>
    <?php $articles = page('blog')->children()->visible()->flip()->paginate(1) ?>

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
                </p>
              </div>
            </header>

          </article>

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

</main>

<?php snippet('footer') ?>
