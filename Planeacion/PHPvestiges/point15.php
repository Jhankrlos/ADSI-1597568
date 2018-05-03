<?php

// Associative arrays are arrays whose keys are custom strings. To access the
//  values of an associative array it is done in the same way as with numeric
//   arrays, using square brackets:

$animales = [
    "Muffinhead" => 14,
    "Peter" => 4,
    "Monnie" => 7,
    "Banh" => 10
];
echo $animales["Muffinhead"] . PHP_EOL; // return 14
echo $animales["Monnie"] . PHP_EOL; // return 7