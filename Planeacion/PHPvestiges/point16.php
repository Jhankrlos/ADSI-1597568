<?php

// sort- Order an array
$frutas = array("limón", "naranja", "banana", "albaricoque");
sort($frutas);
foreach ($frutas as $clave => $valor) {
    echo "frutas[" . $clave . "] = " . $valor . "\n";
}

echo '<br> <br>';

// rsort - Sort an array in reverse order
$fruits = array("limón", "naranja", "plátano", "manzana");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

echo '<br> <br>';

//asort - Sorts an array and maintains the index association
$fruits2 = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits2);
foreach ($fruits2 as $key2 => $val2) {
    echo "$key2 = $val2\n";
}

echo '<br> <br>';

// ksort - Sort an array by key
$fruits3 = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits3);
foreach ($fruits3 as $key3 => $val3) {
    echo "$key3 = $val3\n";
}

echo '<br> <br>';

//arsort - Sorts an array in reverse order and maintains index association
$fruits4 = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits4);
foreach ($fruits4 as $key4 => $val4) {
    echo "$key4 = $val4\n";
}

echo '<br> <br>';

// krsort - Sorts an array by key in reverse order
$fruits5 = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits5);
foreach ($fruits5 as $key5 => $val5) {
    echo "$key5 = $val5\n";
}