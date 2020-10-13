<?php
declare(strict_types=1);
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);
require 'Blackjack.php';
require 'code/Suit.php';
require 'code/Card.php';
require 'code/Deck.php';
require 'player.php';

session_start(); // should always come after require
//Save the instance of the enitre Blackjackobject in the session
/*$object = new sample_object();
$_SESSION['sample'] = serialize($object);*/



/*function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}*/

//whatIsHappening();


//var_dump(whatIsHappening());// todo correct?
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






form met post*/

if(!isset($_SESSION["Black"])){
    $_SESSION["Black"]= new Blackjack();
}


if(isset($_POST["hit"])) {
    $deck =  $_SESSION["Black"]->getDeck();
    $player =  $_SESSION["Black"]->getPlayer();
 var_dump($player->hit($deck));
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>21</title>
</head>
<body>
<form method="post">
    <button type="submit" name="hit" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <button type="submit" name="stand" class="btn btn-secondary btn-lg btn-block">Block level button</button>
    <button type="submit" name="surrender" class="btn btn-secondary btn-lg btn-block">Block level button</button>
</form>

</body>
</html>