<section class="about__publications">
  <h2>
    Publications
  </h2>

  <?php foreach ($page->publications()->toStructure()->filterBy('featured', '1')->flip() as $publication): ?>
    <article class="publication__featured">
      <img
        src="<?php echo $publication->picture()->toFile()->crop(300, 300)->url() ?>"
        alt="<?php echo $publication->name() ?>">
      <h3>
        <?php echo $publication->name() ?>
      </h3>
      <p>
        <span>
          <?php echo $publication->year() ?>
        </span>
        <?php echo 'for ' . $publication->client() ?>
      </p>
    </article>
  <?php endforeach ?>

  <ul class="publications__regular">
    <?php foreach ($page->publications()->toStructure()->filterBy('featured', '0')->flip() as $publication): ?>
      <li>
        <h3>
          <?php echo $publication->name() ?>
        </h3>
        <p>
          <span>
            <?php echo $publication->year() ?>
          </span>
          <?php echo 'for ' . $publication->client() ?>
        </p>
      </li>
    <?php endforeach ?>

    <li>
      <h3>And many more …</h3><br>
      <p>
        <strong><a href="mailto:info@georgobermayr.de" class="about__ctaLink">Interested in hiring me for a publication? Contact me!</a></strong>
      </p>
    </li>

  </ul>

</section>
