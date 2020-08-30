<?php

echo page('articles')->children()->listed()->flip()->limit(10)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description()
));
