<?php
class Player
{
    public $hand = [];
    public $hitMe = true;
    public $name;
    public $cardVisible;
    public $scoreVisible;

    function __construct($name) 
    {
        $this->name = $name;
    }

    public function addCardToHand($card)
    {
        array_push($this->hand, $card);
        return $this->hand;
    }

    public function showHand()
    {
        foreach ($this->hand as $card) {
            if ($this->cardVisible) {
                echo '<img src="'.$card->pathToImage.'" height="300px" width="auto">';
            } else {
                echo '<img src="assets/blank.png" height="300px" width="auto">';
            }
        }
    }

    public function calculateValueHand()
    {
        $totalValueHand = 0;

        foreach ($this->hand as $cardValue) {
            $totalValueHand += $cardValue->value;
        }
        return $totalValueHand;
    }
}

class Computer extends Player
{
    public function __construct($name)
    {
        $this->cardVisible = false;
        $this->scoreVisible = false;
        parent::__construct($name);
    }
}
class User extends Player
{
    public function __construct($name)
    {
        $this->cardVisible = true;
        $this->scoreVisible = true;
        parent::__construct($name);
    }
}