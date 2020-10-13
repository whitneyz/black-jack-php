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
class Player
{
    private $cards = [];
    private $lost = False;


//hit

    public function hit()
    {

    }


//surrender
public function surrender ()
{

}

//getScore
public function getScore ()
{

}

//hasLost
public function  hasLost()
{

}
}
//var_dump();
?>
// todo google some basic OOP articles
//todo First spent some time reading these classes and really understand what they are doing.

// face card jack, king, or queen = 10
// Ace = 11

//  object = properties and methods (also called instances)
/*  properties = variables and constants (classmember variables) (also called fields, attributes)
    The properties hold specific data and related with the class in which it has been defined*/
//  methods = functions

// class is a construct from which objects are created
//includes properties and methods/functions (objects)
// To create an object out of a class, the new keyword must be used.

/*To create an instance of a class, the new keyword must be used.
An object will always be created unless the object has a constructor defined that throws an exception on error.*/
//method
//A class method is exactly similar to PHP functions.

//construct
//__construct ([ mixed $args = "" [, $... ]] ) : void