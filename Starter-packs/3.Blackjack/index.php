<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('memory_limit', '1000M');
error_reporting(E_ALL);

// So, you've reached the final stage huh?
// TODO: pat yourself on the back
// Great job! This means you've earned the freedom to build this exercise from scratch.
// One final word of advice: this game is much more complex, so you might want to use multiple classes in here.
session_start();



// Load you classes
require_once 'classes/Deck.php';
require_once 'classes/Player.php';
require_once 'classes/Blackjack.php';

// Start the game
$game = new Blackjack();
$deck = new Deck();
$card = new Card();
echo "<pre>";
var_dump($deck->cards);
// var_dump($game->run());
// var_dump($game);

// var_dump($deckGame);
echo "</pre>";
// if (isset($_POST["hit"])) {
    $game->run();    
// }
// if (isset($_POST["reset"])) {
//     $game->reset();
// }

require 'view.php';


function whatIsHappening() {
    // echo '<h2>$_GET</h2>';
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    // echo '<h2>$_COOKIE</h2>';
    // var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
// whatIsHappening();