<section class="about__talks">
  <h2>
    Speaking engagements
  </h2>

  <?php foreach ($page->speaking()->toStructure()->filterBy('featured', '1')->flip() as $talk): ?>
    <article class="talk__featured">
      <img
        src="<?php echo $talk->picture()->toFile()->crop(300, 300)->url() ?>"
        alt="<?php echo $talk->name() ?>">
      <h3>
        <?php echo $talk->name() ?>
      </h3>
      <p>
        <span>
          <?php echo $talk->year() ?>
        </span>
        <?php echo 'for ' . $talk->client() ?>
        <?php if($talk->event()->isNotEmpty() && $talk->client()->value() !== $talk->event()->value()): ?>
          <?php echo ' at ' . $talk->event() ?>
        <?php endif ?>
      </p>
    </article>
  <?php endforeach ?>

  <ul class="talks__regular">
    <?php foreach ($page->speaking()->toStructure()->filterBy('featured', '0')->flip() as $talk): ?>
      <li>
        <h3>
          <?php echo $talk->name() ?>
        </h3>
        <p>
          <span>
            <?php echo $talk->year() ?>
          </span>
          <?php echo 'for ' . $talk->client() ?>
          <?php if($talk->event()->isNotEmpty() && $talk->client()->value() !== $talk->event()->value()): ?>
            <?php echo ' at ' . $talk->event() ?>
          <?php endif ?>
        </p>
      </li>
    <?php endforeach ?>

    <li>
      <h3>And many more …</h3><br>
      <p>
        <strong><a href="mailto:info@georgobermayr.de" class="about__ctaLink">Interested in hiring me for a talk? Contact me!</a></strong>
      </p>
    </li>

  </ul>

</section>
