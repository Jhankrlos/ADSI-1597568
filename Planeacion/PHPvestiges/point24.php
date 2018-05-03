<?php

/**
 * The basic definition of a class begins with the reserved word class,
 *  followed by a class name, and continues with a pair of keys containing
 *  the definitions of the properties and methods belonging to that class.

 *The class name can be any valid tag, as long as it is not a PHP reserved word.
 *  A valid class name begins with a letter or underscore, followed by an
 *  arbitrary number of letters, numbers, or underscores.

 */

class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();
$b = new B();
$b->bar();

B::bar();