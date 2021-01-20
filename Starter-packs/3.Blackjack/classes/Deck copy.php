<?php
// require "classes/Card.php";
class Deck
{
   public $cards = [];
   protected $keys = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];
   public $key;
   public $value;
   protected $suits = ["C", "D", "H", "S"];
   public $suit;
   protected $pathToImage;

   public function __construct()
   {
      $this->key = $key;
      $this->suit = $suit;
      $this->value = $value;

      foreach ($this->keys as $key) {
         foreach ($this->suits as $suit) {
            switch ($key) {
               case "J":
               case "Q":
               case "K":
                  $value = 10;
                  break;
               case "A":
                  $value = 11; //Value 1 implementation
                  break;
               default:
                  if (is_numeric($key)) {
                     $value = $key;
                  } else {
                     $value = 1;
                  }
            }
         }

         $card = new Card();
         $card->key = $key;
         $card->suit = $suit;
         $card->value = $value;

         array_push($this->cards, $card);
      }
   }
   public function showCards()
   {
      foreach ($this->cards as $card) {
         $card->createImageSrc("");
      }
   }

   public function showScore ()
   {
      foreach ($this->cards as $card) {
         $card->getCardValue();
      }
   }

      class Card extends Deck
      {
         protected $key;
         protected $suit;

         public function __construct($key, $suit)
         {
            $this->key = $key;
            $key = array_rand($this->keys, 1);
            $this->suit = $suit;
            $suit = array_rand($this->suits, 1);


         }
         public function createImageSrc($pathToImage) {
            $this->pathToImage = $pathToImage;
            $pathToImage = "assets/{$this->key}{$this->suit}.png";
            return $pathToImage;
         }
      }
}
