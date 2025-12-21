<?php

class ArticlePage extends Page {

  public function recommendation() {
    $maxIntersect = 0;

    $tags = $this->tags()->split(',');
    $siblings = $this->siblings(false);

    foreach ($siblings as $sibling) {
      $intersection = count(array_intersect($tags, $sibling->tags()->split(',')));

      if ($intersection > $maxIntersect) {
        $maxIntersect = $intersection;
        $recommendation = $sibling;
      }

    }

    if ($maxIntersect == 0) {
      $recommendation = $siblings->sortBy('date', 'desc')->first();
    }

    return $recommendation;

  }

}
