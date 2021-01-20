<?php
class Card
{
   public $key;
   public $value;
   public $suit;
   public $pathToImage;


   public function __construct()
   {
   }

   public function createImageSrc() 
   {
      $this->pathToImage = "assets/{$this->key}{$this->suit}.png";
      // return $this->pathToImage;
   }
}