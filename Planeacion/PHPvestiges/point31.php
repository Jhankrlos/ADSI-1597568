<?php

/**
 * It refers to the ability to group and condense different elements in an 
 * environment with well-defined boundaries. How do I relate it to the POO?
 *  Automatically, we first generalize -abstraction- and then set the limits 
 * -encapsulation. Yes, encapsulation is linked to abstraction.
 */

class people {
        var $age;
        function people($name)
                {
                echo "People $name created";
                }
        function get_age() {
                return $this->age;
        }
        function set_age($valor) {
                $this->age=$valor;
        }
 
}
$a=new people("Pepe");
$a->set_age(25);
echo $a->get_age();
