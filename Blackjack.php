<?php
declare(strict_types=1);
class Blackjack
{
    //properties
    private $player;
    private $dealer;
    private $deck;

    public function __construct($player, $dealer) //todo do I need to remove $player and $dealer
    {
        $deck = new Deck; //create a new deck object
        $this->deck = $deck; //make ik require this object in the Player class
        $this->deck->shuffle();
        $this->player = new Player($deck); // instantiate the Player class insert it into the player property
        $this->dealer = new Player($deck);//  instantiate the Player class insert it into the dealer property

    }

    // getDealer add public method
    public function getDealer()
    {

    }
    public function getPlayer()
    {

    }
}
//var_dump();

?>