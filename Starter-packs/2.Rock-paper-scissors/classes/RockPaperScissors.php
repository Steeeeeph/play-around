
<?php

class RockPaperScissors
{
      private $weapons = ["rock", "paper", "scissors"];
      public $computerWeapon;
      public $userWeapon;
      public $result;
      public $userScore = 0;
      public $computerScore = 0;
      public $attempts = 0;
      private $win = "You win! :)";
      private $lose = "You lose! :(";
      private $draw = "It's a draw :|";
      private $computerWin = "Game over! You've been beaten by the computer.";
      private $userWin = "Hell yeah! You've won this set!";

      public function __construct()
      {

      }

      public function run()
      {
            // This function functions as your game "engine"
            // Now it's on to you to take the steering wheel and determine how it will work

            $this->userScore = $_SESSION["user-score"];
            $this->computerScore = $_SESSION["computer-score"];

            // Selecting user weapon
            if ($_POST["user-weapon"] === $this->weapons[0]) {
                  $this->userWeapon = $this->weapons[0];

            } elseif ($_POST["user-weapon"] === $this->weapons[1]) {
                  $this->userWeapon = $this->weapons[1];

            } elseif ($_POST["user-weapon"] === $this->weapons[2]) {
                  $this->userWeapon = $this->weapons[2];
            }

            // Randomize weapon from array
            $this->computerWeapon = $this->weapons[array_rand($this->weapons,1)];

            // Evaluate the game
            if (isset($this->userWeapon)) {
      
                  if ($this->userWeapon === "rock" && $this->computerWeapon === "scissors") {
                        $this->userScore++;
                        $_SESSION["user-score"] = $this->userScore;
                        $this->youWin();

                  } elseif ($this->userWeapon === "paper" && $this->computerWeapon === "rock") {
                        $this->userScore++;
                        $_SESSION["user-score"] = $this->userScore;
                        $this->youWin();
                              
                  } elseif ($this->userWeapon === "scissors" && $this->computerWeapon === "paper") {
                        $this->userScore++;
                        $_SESSION["user-score"] = $this->userScore;
                        $this->youWin();
                              
                  } elseif ($this->userWeapon === "scissors" && $this->computerWeapon === "rock") {
                        $this->computerScore++;
                        $_SESSION["computer-score"] = $this->computerScore;
                        $this->youLose();
                              
                  } elseif ($this->userWeapon === "rock" && $this->computerWeapon === "paper") {
                        $this->computerScore++;
                        $_SESSION["computer-score"] = $this->computerScore;
                        $this->youLose();
                                    
                  } elseif ($this->userWeapon === "paper" && $this->computerWeapon === "scissors") {
                        $this->computerScore++;
                        $_SESSION["computer-score"] = $this->computerScore;
                        $this->youLose();
                                    
                  } elseif ($this->userWeapon === $this->computerWeapon) {
                        $this->userScore = $_SESSION["user-score"];
                        $this->computerScore = $_SESSION["computer-score"];
                        return $this->result = $this->draw;

                  }      
            }

            // Attempts
            $this->attempts++;
            $_SESSION["attempts"] = $this->attempts;
                        
      }

      public function youWin() {
            if ($this->userScore == 5) {
                  $this->reset();
                  return $this->result = $this->userWin;

            } else {
                  return $this->result = $this->win;
            }
      }
      public function youLose() {
            if ($this->computerScore == 5) {
                  $this->reset();
                  return $this->result = $this->computerWin;
            } else {
                  return $this->result = $this->lose;
            }
      }

      public function reset()
      {
            $_SESSION["user-score"] = 0;
            $_SESSION["computer-score"] = 0;
      }
}