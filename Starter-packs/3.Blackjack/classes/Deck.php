<?php
require "classes/Card.php";

// Make a deck of cards
class Deck
{
    private $cards = [];
    private $keys = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];
    private $suits = ["C", "D", "H", "S"];
    private $cardValue;

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
                $card->setKey($key);
                $card->setSuit($suit);
                $card->setValue($value);
                $card->createImageSrc();
                $this->cards[] = $card;
            }
            // return $this->cards;
        }
    }

    // TODO link to game delete function showCards() in other files

    // public function showCards()
    // {
    //     foreach ($this->cards as $card) {
    //         $card->createImageSrc();
    //     }
    // }

    //GETTERS
    public function getCards()
    {
       return $this->cards;
    }

    //SETTERS
    public function setCards($cards)
    {
       $this->cards = $cards;
    }



   //  public function showScore()
   //  {
   //      foreach ($this->cards as $card) {
   //          $this->cardValue = $card->value;
   //      }
   //  }
}

