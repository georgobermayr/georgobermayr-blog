<ul class="menu">
  <?php foreach ($site->find('category')->children()->visible() as $category) : ?>

    <li <?php e($category->isOpen(), ' class="menuitem--active"') ?>>
      <a href="<?php echo $category->url() ?>">
        <?php echo $category->title() ?>
      </a>
    </li>

  <?php endforeach ?>

  <?php $aboutPage = $site->find('about-georg-obermayr') ?>
  <li <?php e($aboutPage->isOpen(), ' class="menuitem--active"') ?>>
    <a href="<?php echo $aboutPage->url() ?>">
      <?php echo $aboutPage->title() ?>
    </a>
  </li>

  <?php
  // Leaving the book page as link instead of astorytelling page for now
  $bookPage = $site->find('book-agile-publishing') ?>
  <li <?php e($bookPage->isOpen(), ' class="menuitem--active"') ?>>
    <a href="http://www.agile-publishing.de/" target="_blank" rel="noopener">
      <?php echo $bookPage->title() ?>
    </a>
  </li>

  <li class="menu__twitter">
    <a href="https://twitter.com/georgobermayr" target="_blank" rel="noopener">
      <?php echo file_get_contents('assets/images/twitter.svg') ?>
    </a>
  </li>

</ul>
