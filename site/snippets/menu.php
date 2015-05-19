<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
    <li>
      <a href="<?php echo $site->language()->url() ?>"><?php echo l::get('language') ?>: <?php echo $site->language()->name() ?></a>
      <ul class="submenu">
        <?php foreach($site->languages() as $lang): ?>
        <li>
          <a href="<?php echo $page->url($lang->code()) ?>"><?php echo $lang->name() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </li>
  </ul>

</nav>
