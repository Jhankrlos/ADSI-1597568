<?php

/**
 * Magic methods allow you to perform actions on objects when certain events 
 * occur that trigger them. These methods, called double low slash __method(),
 *  determine how the object will react to these events.
 */

/**
 * __construct(): a method that is called automatically when the object is 
 * created. Allows you to inject parameters and dependencies to construct the
 *  object.
 */

class Tweet {
    protected $id;
    protected $text;
    public function __construct ($id, $text){
        $this->id = $id;
        $this->text = $text;
    }
}
$tweet = new Tweet(54, "Hello how are you?");



/**
 * __destruct():  The destructive method will be called as soon as there are no
 *  other references to a particular object, or in any other circumstances of
 *  termination.
 */
class Destruct {
public function __destruct(){
    $this->connection->destroy();
} }




/**
 * __tostring(): The __toString()_ method allows you to return the represented
 *  object as a string.
 */

class string23 {
    public function __toString(){
    return $this->text;

$tweet2 = new Tweet2(12, "Hi, how are you?");
echo $tweet2;
} }