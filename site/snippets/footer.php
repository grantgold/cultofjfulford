  <section class="bottom">
    <div class="container">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

    </div>
  </section>
  <?= js('assets/js/jquery-3.3.1.slim.min.js') ?>
  <?= js('assets/js/script.js') ?>

</body>
</html>
