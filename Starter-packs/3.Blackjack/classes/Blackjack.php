<?php
//this class is the game engine 
class Blackjack
{
    private $deck;
    private $players = [];
    private $displayCards;
    private $displayText;

    public function run()
    {
        $this->deck = new Deck();
        shuffle($this->deck->getCards());
        $this->players = [new Computer("Dealer"), new User("Player")];

        foreach ($this->players as $player) {
            $this->displayCards[] = $player->addCardToHand(array_shift($this->deck->getCards()));
            // $player->showHand();
            // echo "<br>";
            // echo "{$player->name} has {$player->calculateValueHand()}.<br>";
        }
        foreach ($this->players as $player) {
            $this->displayCards[] = $player->addCardToHand(array_shift($this->deck->getCards()));
            $player->showHand();
            // echo "<br>";
            $this->displayText[] = "{$player->name} has {$player->calculateValueHand()}.<br>";
        }
    }
    
}