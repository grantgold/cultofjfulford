<?php snippet('header') ?>

<main class="main" role="main">

    <?php $articles = page('blog')->children()->visible()->flip()->paginate(1) ?>

    <section class="wrap">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article grid-container">

            <?php snippet('coverimage', $article) ?>
            <?php
            // Images for the "project" template are sortable. You
            // can change the display by clicking the 'edit' button
            // above the files list in the sidebar.
            foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
              <figure>
                <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
              </figure>
            <?php endforeach ?>

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
