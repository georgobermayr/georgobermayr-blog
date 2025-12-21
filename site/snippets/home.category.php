<section class="home__category">

  <img
    src="<?php echo $category->file('icon.svg')->url() ?>"
    alt="<?php echo $category->title() ?>">

  <div class="home__category__content">
    <h3>
      <?php echo $category->teaserheadline() ?>
    </h3>

    <p>
      <?php echo $category->teasertext() ?>
    </p>

    <?php foreach ($category->articlesTeaser($category->slug()) as $article): ?>
      <?php snippet('article.teaser', $arrayName = array('article' => $article)) ?>
    <?php endforeach ?>

    <a
      class="home__category__teasers__more"
      href="<?php echo $category->url() ?>">
      Read more about <?php echo $category->title() ?> ...
    </a>
  </div>

</section>
