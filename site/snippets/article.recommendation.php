<?php $recommendation = $page->recommendation() ?>

<a
  href="<?php echo $recommendation->url()?>"
  class="article__recommendation">
  <h3>
    <span>
      Read next
    </span>
    <?php echo $recommendation->title() ?>
  </h3>
  <p>
    <?php echo $recommendation->excerpt() ?>
    <strong>Read more&thinsp;…</strong>
  </p>
</a>
