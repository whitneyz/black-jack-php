<?php
declare(strict_types=1);

class Blackjack
{
    //properties
    private $player;
    private $dealer;
    private $deck;

    public function __construct($player, $dealer)
    {
        $this->player = $player; // insert it into the player and dealer property
        $this->dealer = $dealer;
        $deck = new Deck;
        $this->deck = $deck;
        $this->deck->shuffle();
    }

    // getDealer add public method
    public function getDealer()
    {

    }
    public function getPlayer()
    {

    }
}


?>