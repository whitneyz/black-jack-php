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
class Deck
{
    private const CARDS_PER_SUIT = 14;//including the knight card.
    private const KNIGHT_CARD = 12;//In italian & spanish decks there is a knight card, but we don't need it

    /** @var Card[] */
    private array $cards = [];

    public function __construct() {
        $suits = [
            Suit::SPADE(),
            Suit::HEART(),
            Suit::CLUB(),
            Suit::DIAMOND(),
        ];

        foreach ($suits AS $suit) {
            foreach(range(1, self::CARDS_PER_SUIT) AS $i) {
                if($i === self::KNIGHT_CARD) continue;

                $this->cards[] = new Card($suit, $i);
            }
        }
    }

    public function shuffle() : void {
        shuffle($this->cards);
    }

    /** @return Card[] */
    public function getCards() : array
    {
        return $this->cards;
    }

    public function drawCard() :? Card
    {
        return array_shift($this->cards);
    }
}