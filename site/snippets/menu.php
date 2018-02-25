<ul class="menu">
  <?php foreach ($site->find('category')->children()->visible() as $category) : ?>

  <li <?php e($category->isOpen(), ' class="menuitem--active"') ?>>
    <a href="<?php echo $category->url() ?>">
      <?php echo $category->title() ?>
    </a>
  </li>

  <?php endforeach ?>

  <?php $aboutPage = $site->find('about-georg-obermayr') ?>
  <li>
    <a href="<?php echo $aboutPage->url() ?>">
      <?php echo $aboutPage->title() ?>
    </a>
  </li>

  <?php $aboutPage = $site->find('book-agile-publishing') ?>
  <li>
    <a href="<?php echo $aboutPage->url() ?>">
      <?php echo $aboutPage->title() ?>
    </a>
  </li>

</ul>
