<div class="category__header">

  <div class="category__information">
    <h1>
      <?php echo $page->title() ?>
    </h1>

    <p>
      <?php echo $page->description() ?>
    </p>
  </div>

  <div class="category__header_iconWrapper">
    <?php echo svg($page->file('icon.svg')) ?>
  </div>

</div>
