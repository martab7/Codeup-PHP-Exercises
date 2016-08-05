<?php

class Square extends Rectangle{

  public function __construct($height){
    parent::__construct($height, $height);
  }

  public function perimeter(){
      $area = ( $this->getHeight() * 4 );
      return 'This is a square! Area: ' . $area;
  }

  public function area(){
    return 'The area is: ' . ($this->getHeight() * $this->getHeight());
  }

}

?>
