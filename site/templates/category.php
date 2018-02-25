<?php snippet('metadata') ?>

<header>

  <?php snippet('header', array('color' => 'red')) ?>

  <?php snippet('category.header') ?>

</header>

<main class="category">

  <?php foreach ($page->articles($page->slug()) as $article): ?>
    <?php snippet('article.teaser', $arrayName = array('article' => $article)) ?>
  <?php endforeach ?>

</main>

<footer>

  <?php snippet('footer') ?>

</footer>

<?php snippet('end') ?>
