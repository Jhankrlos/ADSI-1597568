<?php

/**
 * Properties and methods of a class live in different "name spaces", so it
 *  is possible to have a property and method with the same name. When
 *  referring to both a property and a method, the same notation is used,
 *  and whether the property is accessed or the method is called depends
 *  only on the context, i.e. whether the use is access to a variable or a
 *  function call.
 */

class Foo
{
    public $bar = 'property';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;