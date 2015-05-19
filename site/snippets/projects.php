<h2><?php echo l::get('latest-projects') ?></h2>

<ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>"><?php echo l::get('read-more') ?> →</a></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
