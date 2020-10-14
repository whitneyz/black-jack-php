<?php
declare(strict_types=1);
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);



class Player
{
    private $cards = [];
    private $lost;

    public function __construct(Deck $deck)//passed the Deck from the Blackjack constructor
    {
        array_push($this->cards,$deck->drawCard());
        array_push($this->cards,$deck->drawCard()); //player and dealer get 2 random cards
    }


//hit

    public function hit($deck)/*ask for one more card, stands down means the player does nothing
    it's the dealer turn now, the dealer will draw cards until he has 15 points or more
    than it's the player turn again
    if the dealer has more than 21 points he loses*/
    {
        array_push($this->cards,$deck->drawCard());
return $this->cards;
if ($this->cards >= 21) {
   return $this->hasLost();
}
    }


//surrender
    public function surrender($deck)// see also function hasLost
    {
//should stop the game because player lost
    }

//getScore
    public function getScore()
    {return $this->getScore();

    }

//hasLost
    public function hasLost()//player has more than 21 points
    {return $this->lost;
    echo "Player has lost";

    }
}


/*face card jack, king, or queen = 10
Ace = 11

object = properties and methods (also called instances)
properties = variables and constants (classmember variables) (also called fields, attributes)
The properties hold specific data and related with the class in which it has been defined
methods = functions

class is a construct from which objects are created
includes properties and methods/functions (objects)
To create an object out of a class, the new keyword must be used.

To create an instance of a class, the new keyword must be used.
An object will always be created unless the object has a constructor defined that throws an exception on error.
method
A class method is exactly similar to PHP functions.

construct
__construct ([ mixed $args = "" [, $... ]] ) : void*/
?>

