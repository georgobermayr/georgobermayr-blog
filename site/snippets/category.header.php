<div class="category__header">

  <div class="category__information">
    <h1>
      <?php echo $page->title() ?>
    </h1>

    <p>
      <?php echo $page->description() ?>
    </p>
  </div>

  <img
    src="<?php echo $page->file('icon.svg')->url() ?>"
    alt="<?php echo $page->title() ?>">

</div>
