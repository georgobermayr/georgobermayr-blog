<div class="footer__wrapper">

  <ul class="legalmenu">
    <?php foreach($site->index()->filterBy('intendedTemplate', 'footer')->visible() as $footer): ?>
      <li>
        <a href="<?php echo $footer->url() ?>">
          <?php echo $footer->title() ?>
        </a>
      </li>
    <?php endforeach ?>

    <li>
      © Georg Obermayr <?php echo date("Y") ?>
    </li>

  </ul>

  <?php snippet('menu') ?>

  <?php snippet('pagetitle') ?>

</div>
