<?php
declare(strict_types=1);
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();

require 'Suit.php';
require 'Card.php';
require 'Deck.php';

$deck = new Deck();
$deck->shuffle();
foreach($deck->getCards() AS $card) { //this is what u use to display cards
    echo $card->getUnicodeCharacter(true);
    echo '';
}
