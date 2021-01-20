<?php
require "classes/Card.php";

// Make a deck of cards
class Deck
{
   public $cards = [];
   public $keys = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];
   public $suits = ["C", "D", "H", "S"];
   public $cardValue;

   public function __construct()
   {
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
            $card = new Card();
            $card->key = $key;
            $card->suit = $suit;
            $card->value = $value;
            $card->createImageSrc();
            $this->cards[] = $card;
         }
         // return $this->cards;
      }
   }
   public function showCards()
   {
      foreach ($this->cards as $card) {
         $card->createImageSrc();
      }
   }

   public function showScore()
   {
      foreach ($this->cards as $card) {
         $this->cardValue = $card->value;
      }
   }
}

