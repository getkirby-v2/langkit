<nav class="languages" role="navigation">
  <ul class="languages-menu">
    <?php foreach($site->languages() as $language): ?>
    <li class="languages-item<?php e($site->language() == $language, ' is-active') ?>">
      <a href="<?= $page->url($language->code()) ?>" data-code="<?= $language->code() ?>">
        <span><?= str::upper($language->code()) ?></span>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>