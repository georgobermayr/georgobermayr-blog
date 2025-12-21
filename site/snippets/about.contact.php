<section class="about__contact">

  <h3>
    Contact me:
  </h3>

  <article class="about__contacts">
    <?php foreach ($page->profiles()->toStructure() as $profile): ?>

      <a href="<?php echo $profile->link() ?>" target="_blank" rel="noopener">
        <?php echo $profile->name() ?>
      </a>

    <?php endforeach ?>
  </article>

</section>
