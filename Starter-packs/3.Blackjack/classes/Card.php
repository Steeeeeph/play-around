<?php
class Card
{
    private $key;
    private $value;
    private $suit;
    private $pathToImage;


    public function __construct()
    {
    }
   //  GETTERS
    public function getKey()
    {
        return $this->key;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function getSuit()
    {
        return $this->suit;
    }
   //  SETTERS
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function setSuit($suit)
    {
        $this->suit = $suit;
    }

    public function createImageSrc() 
    {
        $this->pathToImage = "assets/{$this->key}{$this->suit}.png";
        return $this->pathToImage;
    }
}