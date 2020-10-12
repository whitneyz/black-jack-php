<?php
declare(strict_types=1);

class Blackjack {
    //properties
    private $player;
    private $dealer;
    private $deck;
    public function __construct  ($player, $dealer, $deck) {
        $this-> player = $player; // insert it into the player and dealer property
        $this-> dealer = $dealer;
        $this-> deck = $deck;}
        // getDealer add public method
        public function getDealer () {
            $this-> player = $player;
            $this -> dealer = $dealer;
            $this -> deck = $deck;}
            public function getPlayer () {

        }

    }

}
$player = new Blackjack ($player, $dealer, $deck);
//getPlayer add public method


}





?>