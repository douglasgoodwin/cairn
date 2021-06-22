<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  In this snippet the svg() helper is a great way to embed SVG
  code directly in your HTML. Pass the path to your SVG
  file to load it.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<span class="social">
  <a href="https://twitter.com/dgoodwin">
    <?= svg('assets/icons/twitter.svg') ?>
  </a>
  <a href="https://github.com/douglasgoodwin">
    <?= svg('assets/icons/github.svg') ?>
  </a>
  <a href="https://instagram.com/douglasrgoodwin">
    <?= svg('assets/icons/instagram.svg') ?>
  </a>
</span>
