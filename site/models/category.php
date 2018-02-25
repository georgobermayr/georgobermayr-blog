<?php

class CategoryPage extends Page {

  public function articles($category) {
    return $this->site()->find('articles')->children()->filterBy('category', $category)->visible()->sortBy('date', 'desc');
  }

  public function articlesTeaser($category) {
    return $this->articles($category)->limit(4);
  }

}
