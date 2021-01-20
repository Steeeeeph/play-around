<?php

class Blackjack
{
   public $deck;
   public $players = [];

   public function run()
   {
      $this->deck = new Deck();
      shuffle($this->deck->cards);
      $this->players = [new Computer("Dealer"), new User("Player")];

      foreach($this->players as $player) {
         $player->addCardToHand(array_shift($this->deck->cards));
         // $player->showHand();
         // echo "<br>";
         // echo "{$player->name} has {$player->calculateValueHand()}.<br>";
      }
      foreach($this->players as $player) {
         $player->addCardToHand(array_shift($this->deck->cards));
         $player->showHand();
         echo "<br>";
         echo "{$player->name} has {$player->calculateValueHand()}.<br>";
      }
   }
}