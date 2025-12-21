<a
  href="<?php echo $article->url() ?>"
  class="article__teaser <?php echo $article->essential()->bool() ? 'article__teaser--essential' : '' ?>">

  <h4>

    <?php if ($article->essential()->bool()) : ?>
      <span>
        Essential reading
      </span>
    <?php endif ?>

    <?php echo $article->title() ?>
  </h4>

  <p>
    <?php echo $article->excerpt()  ?>
    <strong>
      Read more …
    </strong>
  </p>

</a>
