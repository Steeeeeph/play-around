<?php
//this class is the game engine 
class Blackjack
{
    public $deck;
    public $players = [];
    public $displayCards;
    public $displayText;

    public function run()
    {
        $this->deck = new Deck();
        shuffle($this->deck->cards);
        $this->players = [new Computer("Dealer"), new User("Player")];

        foreach ($this->players as $player) {
            $this->displayCards[] = $player->addCardToHand(array_shift($this->deck->cards));
            // $player->showHand();
            // echo "<br>";
            // echo "{$player->name} has {$player->calculateValueHand()}.<br>";
        }
        foreach ($this->players as $player) {
            $this->displayCards[] = $player->addCardToHand(array_shift($this->deck->cards));
            $player->showHand();
            // echo "<br>";
            $this->displayText[] = "{$player->name} has {$player->calculateValueHand()}.<br>";
        }
    }
    
}