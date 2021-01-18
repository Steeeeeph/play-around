<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $attempts = 0;
    public $userGuess;
    public $result;
    // public $errorMessageMaxGuess = "";
    // public $errorMessageGuess = "";

    // set a default amount of max guesses
    public function __construct(int $maxGuesses = 5)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = empty($_POST["max-guesses"]) ? $maxGuesses : $_POST["max-guesses"];

    }

    public function run()
    {
        if (isset($_POST["reset"])) {
            $this->reset();
        }
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)
        
        //TODO check functionality
        if (!empty($_SESSION["attempts"])) {
            $this->attempts = $_SESSION["attempts"];
        }

        // TODO: check if a secret number has been generated yet
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        
        if (empty($_SESSION["secretnumber"])) {
            $this->secretNumber = mt_rand(1, 10);
            $_SESSION["secretnumber"] = $this->secretNumber;
        } 
        
        // TODO: check if the player has submitted a guess
        if ($this->maxGuesses > $_SESSION["attempts"]) {
            if (!empty($_POST["user-guess"])) {
                $this->attempts++;
                $_SESSION["attempts"] = $this->attempts;
                $this->userGuess = $_POST["user-guess"];
                if ($this->maxGuesses == $_SESSION["attempts"]){
                    return 'Game over! <input type="submit" name="reset" value="Go again!">';
        
                }
                // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
                elseif ($_POST["user-guess"] == $_SESSION["secretnumber"]) {
                    return '<span>Yay! You guessed the number '.$_SESSION["secretnumber"].' in '.$this->attempts.' tries!</span><input type="submit" name="reset" value="Go again!">';
                
                } elseif ($_POST["user-guess"] > $_SESSION["secretnumber"]) {
                    return "<span>That's too high!</span>";
                
                } elseif ($_POST["user-guess"] < $_SESSION["secretnumber"]) {
                    return "<span>Nope, it's a higher number...</span>";
                }
                
            } else {
                return "Please enter a number between 1 and 10";
            }
        } else {
            return 'Game over! <input type="submit" name="reset" value="Go again!">';
        }

        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game

    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
        $_SESSION["attempts"] = 0;
        $_SESSION["secretnumber"] = "";
        $_POST["max-guesses"] = "";

    }
}
