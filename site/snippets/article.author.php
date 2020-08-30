<?php $georg = $kirby->user('info@georgobermayr.com') ?>

<article class="article__author">
  <h3>
    <?php echo $georg->firstName() . ' ' . $georg->lastName() ?>
  </h3>
  <?php echo $georg->biography() ?>
</article>
