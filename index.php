<?php
declare(strict_types=1);
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

session_start();
//Save the instance of the enitre Blackjackobject in the session
/*$object = new sample_object();
$_SESSION['sample'] = serialize($object);*/

$game = new Blackjack();// create new variable and refer to class, step 9
$_SESSION["Black"] = $game;
$giveCards = new Deck();
$_SESSION["Decks"] = $giveCards;


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


var_dump(whatIsHappening());// todo correct?
//this is what u use to display cards
/*$deck = new Deck();
$deck->shuffle();
foreach($deck->getCards() AS $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
}
//Getting more than 21 points, means that you lose.

To win, you need to have more points than the dealer, but not more than 21.
if player has more than dealer && <= 21
else dealer won

//The dealer is obligated to keep taking cards until they have at least 15 points.

begin met iniset enzo

checck of ik ze wel class hebt gedefinieerd

set session for blackjack

form met post*/
require 'Blackjack.php';
require 'Suit.php';
require 'Card.php';
require 'Deck.php';
?>