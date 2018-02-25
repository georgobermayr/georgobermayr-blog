<?php

class HomePage extends Page {

  public function categories() {
    return $this->site()->find('category')->children()->visible();
  }

}
