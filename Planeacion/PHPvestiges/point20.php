<?php

/**
 * Anonymous functions, also known as closures, allow the creation of functions
 *  that do not have a specified name. They are most useful as a value for
 *  callback parameters, but they have many other uses.
 * Anonymous functions are implemented using the Closure class.
 */

echo preg_replace_callback('~-([a-z])~', function ($overlap) {
    return strtoupper($overlap[1]);
}, 'Hello-World');
// print HelloWorld