<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
  </main>

  <footer class="footer">
    <div class="grid">
      <div class="column" style="--columns: 8">
        <h2><a href="https://getkirby.com">Made with open source</a></h2>
      </div>
      <div class="column" style="--columns: 2">
        <h2>pages</h2>
        <ul>
          <?php foreach ($site->children()->listed() as $example): ?>
          <li><a href="<?= $example->url() ?>"><?= $example->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="column" style="--columns: 2">
        <h2>Douglas Goodwin</h2>
        <ul>
          <li><a href="https://cairn.com">Website</a></li>
          <li><a href="https://instagram.com/douglasrgoodwin">Instagram</a></li>
          <li><a href="https://github.com/douglasgoodwin">GitHub</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <?= js([
    'assets/js/prism.js',
    'assets/js/lightbox.js',
    'assets/js/index.js',
    '@auto'
  ]) ?>

</body>
</html>
