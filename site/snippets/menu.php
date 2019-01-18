<nav id="navigation" data-role="navigation" class="menu closed">
  <div class="inner-element">
    <ul class="menu article-list">
      <?php $articles = page('blog')->children()->visible()->flip() ?>
      <?php foreach($articles->visible() as $item): ?>
      <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
        <a href="<?= $item->url() ?>"><?= $item->title()->html() ?> -></a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</nav>
