<?php
declare(strict_types=1);
class Blackjack
{
    //properties
    private $player;
    private $dealer;
    private $deck;

    public function __construct()
    {
        $deck = new Deck; //create a new deck object
        $this->deck = $deck; //make ik require this object in the Player class
        $deck->shuffle();
        $this->player = new Player($deck); // instantiate the Player class insert it into the player property
        $this->dealer = new Player($deck);//  instantiate the Player class insert it into the dealer property

    }

    // getDealer add public method
    public function getDealer()
    {
        return $this->dealer;
    }
    public function getPlayer()
    {
return $this->player;
    }
    public function getDeck()
    {
        return $this->deck;
    }
}
//var_dump();

?>