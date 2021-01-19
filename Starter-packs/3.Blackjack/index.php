
<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// So, you've reached the final stage huh?
// TODO: pat yourself on the back
// Great job! This means you've earned the freedom to build this exercise from scratch.
// One final word of advice: this game is much more complex, so you might want to use multiple classes in here.
session_start();



// Load you classes
require_once 'classes/Blackjack.php';
require_once 'classes/Player.php';
require_once 'classes/Deck.php';


// Start the game
$game = new Blackjack();

if (isset($_POST["hit"])) {
   $game->run();   
}
// if (isset($_POST["reset"])) {
//    $game->reset();
// }
require 'view.php';