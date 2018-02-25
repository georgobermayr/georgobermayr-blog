<?php snippet('metadata') ?>

<header>

  <?php snippet('header') ?>

  <?php snippet('home.header') ?>

</header>

<main class="home">

  <?php foreach ($page->categories() as $category): ?>

    <?php snippet('home.category', array('category' => $category)); ?>

  <?php endforeach ?>

</main>

<footer>

  <?php snippet('footer') ?>

</footer>

<?php snippet('end') ?>
