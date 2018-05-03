<?php

// Operadores aritmeticos  funcionan igual a la aritmetica basica. Asi:
//+$a	        Identidad	Conversión de $a a int o float según el caso.
//$a + $b	Adición	        Suma de $a y $b.
//$a - $b	Sustracción	Diferencia de $a y $b.
//$a * $b	Multiplicación	Producto de $a y $b.
//$a / $b	División	Cociente de $a y $b.
//$a % $b	Módulo	        Resto de $a dividido por $b.
//$a ** $b	Exponenciación	Resultado de elevar $a a la potencia $bésima.

echo 'Operadores aritmeticos ';
echo (5 % 3)."\n";           // muestra 2
echo (5 % -3)."\n";          // muestra 2
echo (-5 % 3)."\n";          // muestra -2
echo (-5 % -3)."\n";         // muestra -2

echo '<br> <br>';

/**
 * Operadores de asginación
 * El operador básico de asignación es "=". Se podría inclinar a pensar primero
 *  que es como un "igual a". No lo es. Realmente significa que el operando de
 *  la izquierda se establece con el valor de la expresión de la derecha
 *  (es decir, "se define como").
 *  El valor de una expresión de asignación es el valor asignado.
 */

$a = ($b = 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.
echo 'Operadores de asignación';

echo '<br> <br>';

/**
 * Los operadores de comparación, como su nombre lo indica, permiten comparar
 *  dos valores. Si se compara un número con un string o la comparación implica
 *  strings numéricos, entonces cada string es convertido en un número y la
 *  comparación realizada numéricamente.
 */
 // Booleanos y null son comparados siempre coomo bool
echo 'Operadores de comparación ';
var_dump(1 == TRUE);  // TRUE - same as (bool)1 == TRUE
var_dump(0 == FALSE); // TRUE - same as (bool)0 == FALSE
var_dump(100 < TRUE); // FALSE - same as (bool)100 < TRUE
var_dump(-10 < FALSE);// FALSE - same as (bool)-10 < FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL - (bool)NULL < (bool)-100 is FALSE < TRUE


echo '<br> <br>';

/**
 * Operadores de incremento/decremento
 * ++$a	 Pre-incremento	   Incrementa $a en uno, y luego retorna $a.
 * $a++	 Post-incremento   Retorna $a, y luego incrementa $a en uno.
 * --$a	 Pre-decremento	   Decrementa $a en uno, luego retorna $a.
 * $a--	 Post-decremento   Retorna $a, luego decrementa $a en uno.
 * 
 */
echo 'Operadores de incremento/decremento';
echo "<h5>Postincremento</h5>";
$a2 = 5;
echo "Debe ser 5: " . $a++ . "<br />\n";
echo "Debe ser 6: " . $a . "<br />\n";

echo "<h5>Preincremento</h5>";
$a2 = 5;
echo "Debe ser 6: " . ++$a . "<br />\n";
echo "Debe ser 6: " . $a . "<br />\n";

echo "<h5>Postdecremento</h5>";
$a2 = 5;
echo "Debe ser 5: " . $a-- . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

echo "<h5>Predecremento</h5>";
$a2 = 5;
echo "Debe ser 4: " . --$a . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

echo '<br> <br>';


/**
 * Operadores lógicos
 * $a and $b	 And (y)	                TRUE si tanto $a como $b son TRUE.
 * $a or $b	 Or (o inclusivo)	        TRUE si cualquiera de $a o $b es TRUE.
 * $a xor $b	 Xor (o exclusivo)	        TRUE si $a o $b es TRUE, pero no ambos.
 * ! $a	         Not (no)	                TRUE si $a no es TRUE.
 * $a && $b	 And (y)	                TRUE si tanto $a como $b son TRUE.
 * $a || $b	 Or (o inclusivo)	        TRUE si cualquiera de $a o $b es TRUE.
 */
// --------------------
// foo() nunca será llamado ya que los operadores están en cortocircuito

echo 'Operadores lógicos ';
$a3 = (false && foo());
$b3 = (true  || foo());
$c3 = (false and foo());
$d3 = (true  or  foo());


// "||" tiene una precedencia mayor que "or"

// El resultado de la expresión (false || true) es asignado a $e
// Actúa como: ($e = (false || true))
$e3 = false || true;

// La constante false es asignada a $f antes de que suceda la operación "or"
// Actúa como: (($f = false) or true)
$f3 = false or true;

var_dump($e3, $f3);

// --------------------
// "&&" tiene una precedencia mayor que "and"

// El resultado de la expresión (true && false) es asignado a $g
// Actúa como: ($g = (true && false))
$g3 = true && false;

// La constante true es asignada a $h antes de que suceda la operación "and"
// Actúa como: (($h = true) and false)
$h3 = true and false;

var_dump($g3, $h3);



echo '<br> <br>';


/**
 * Operadores de cadenas(strings)
 * Existen dos operadores para datos tipo string. El primero es el operador
 *  de concatenación ('.'), el cual retorna el resultado de concatenar sus
 *  argumentos derecho e izquierdo. El segundo es el operador de asignación
 *  sobre concatenación ('.='), el cual añade el argumento del lado derecho
 *  al argumento en el lado izquierdo.
 */
echo 'Operadores de cadenas(strings) ';
$a4 = "Hello ";
$b4 = $a4 . "World!"; // ahora $b contiene "Hello World!"

$a4 = "Hello ";
$a4 .= "World!";     // ahora $a contiene "Hello World!"
echo $a4 ;


echo '<br> <br>';



/**
 * $a + $b	Unión	        Unión de $a y $b.
 * $a == $b	Igualdad	TRUE si $a i $b tienen las mismas parejas clave/valor.
 * $a === $b	Identidad	TRUE si $a y $b tienen las mismas parejas clave/valor en el mismo orden y de los mismos tipos.
 * $a != $b	Desigualdad	TRUE si $a no es igual a $b.
 * $a <> $b	Desigualdad	TRUE si $a no es igual a $b.
 * $a !== $b	No-identidad	TRUE si $a no es idéntica a $b.
 */

echo 'Operadores para arrays ';
$a5 = array("a5" => "apple", "b5" => "banana");
$b5 = array("a5" => "pear", "b5" => "strawberry", "c5" => "cherry");

$c5 = $a5 + $b5; // Unión de $a y $b
echo "Unión de \$a5 y \$b5: \n";
var_dump($c5);

$c5 = $b5 + $a5; // Unión de $b y $a
echo "Unión de \$b5 y \$a5: \n";
var_dump($c5);

$a5 += $b5; // Unión de $a += $b es $a y $b
echo "Unión de \$a5 += \$b5: \n";
var_dump($a5);