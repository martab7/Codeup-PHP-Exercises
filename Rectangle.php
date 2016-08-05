<?php

class Rectangle
{
  private $height;
  private $width;

  public function __construct($height, $width){
    $this->height = $height;
    $this->width = $width;
  }

  public function area(){
    return 'The area is: ' . $this->height * $this->width;
  }

  public function perimeter(){
    $area = ( $this->height * 2 ) + ( $this->width * 2 );
    return 'This is not a square but the area is: ' . $area;
  }

  public function setHeight($height){
      $this->height = (int) $height;
  }

  public function setWidth($width){
    $this->width = (int) $width;
  }

  public function getHeight(){
    return $this->height;
  }
}
?>
