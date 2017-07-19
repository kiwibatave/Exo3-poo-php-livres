<?php

class Livre {

  private $title;
  private $author;
  private $pages;
  private $price;


  public function __construct($var, $var1, $var2) {
    $this->title=$var;
    $this->author=$var1;
    $this->pages=$var2;
  }
  public function show() {
    return ($this->title.' - '.$this->author.' - '.$this->pages);
  }
 //
 //  public function __construct($sell) {
 //    $this->price=$sell;
 // }
}
