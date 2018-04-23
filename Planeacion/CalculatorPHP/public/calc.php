<?php

require '../src/calculator.php';

use calculatorPHP\calculator;

/**
 * Get the number of number1
 */
$number1 = (float) $_GET['number1'];

/**
 * Get the number of number2
 */
$number2 = (float) $_GET['number2'];

/**
 * Get the number of the operation
 */
$operation = (integer) $_GET['operation'];


$calc = new calculator();

$calc->setNumber1($number1);
$calc->setNumber2($number2);

if ($operation === 1) {
   $message = 'The sum between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->sum();
} else if ($operation === 2) {
   $message = 'The subtraction between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->rest(); 
} else if ($operation === 3) {
   $message = 'The multiplication between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->mult();
} else if ($operation === 4) {
   $message = 'The division between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->div(); 
} else if ($operation === 5) {
   $message = 'The module between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->mod();
} else if ($operation === 6) {
   $message = 'The logarithm between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->loga();
} else if ($operation === 7) {
   $message = 'The pow between' . $number1 . ' and ' . $number2 . ' is ' . $calc->pow(); 
} else if ($operation === 8) {
   $message = 'The pow between' . $number1 . ' and ' . $number2 . ' is ' . $calc->pow();
} else if ($operation === 9) {
   $message = 'Error: the division between zero is mathematically impossible'; 
} else if ($operation === 10) {
   $message = 'The square root of the ' . $number1 . ' is ' . $calc->square(); 
} else if ($operation === 11) {
   $message = 'The root between ' . $number1 . ' and ' . $number2 . ' is ' . $calc->squarex();
}

else  {
   $message = 'Error: No operation selected'; 
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/styleresult.php">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <title>Result</title>
    </head>    
    <body>
        <div class="result">
<?php echo $message; ?>
        </div>
    </body>
</html>
        
