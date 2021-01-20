<?php

class Blackjack
{
   public $deck;
   public $players = [];

   public function run()
   {
      $this->deck = new Deck();
      shuffle($this->deck->cards);
      $this->players = [new Computer("Dealer"), new User("You")];

      foreach($this->players as $player) {
         $player->addCardToHand(array_shift($this->deck->cards));
      }
      // foreach($this->players as $player) {
      //    $player->addCardToHand(array_shift($this->deck->cards));
      // }
      echo "{$this->players[0]->name} has {$this->players[0]->calculateValueHand()}.";
      echo "{$this->players[1]->name} have {$this->players[1]->calculateValueHand()}.";
      $this->players[0]->showCards($deck->pathToImage);
   }
}