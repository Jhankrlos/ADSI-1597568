<?php

/**
 * Polymorphism, as its name suggests, suggests multiple forms. In programming
 *  when we talk about polymorphism we are referring to the ability to access
 *  multiple functions through the same interface. That is to say that the same
 *  identifier, or function can have different behaviors depending on the 
 * context in which it is executed.
 */

/*
Empezaremos definiendo la jerarquia de clases
*/
class classPoligono
{
  function calculo()
  {
  echo 'El area depende del tipo de poligono';
  }
}

class classCuadrado extends classPoligono
{
  function calculo()
  {
  echo 'area de un cuadrado : a=l*l<br>';
  }
}

class classRectangulo extends classPoligono
{
  function calculo()
  {
  echo 'area de un rectangulo : a=b*h<br>';
  }
}

class classTriangulo extends classPoligono
{
  function calculo()
  {
  echo 'area de un triangulo : a=(b*h)/2<br>';
  }
}
/* fin definicion de la jerarquia de clases */

/* 
definicion de la funcion encargada de realizar las llamada 
polimorfica al metodo "calculo"
A destacar que en la definicion de la funcion definimos el tipo 
parametro que pasamos por referencia, esto no es obligatorio 
en PHP, pero nos ayuda a entender el concepto y asi poder aplicarlo 
en otros lenguajes mas estrictos.
 */
function area(classPoligono $obj)
{
  $obj->calculo();
}

/*
Creamos los objetos necesarios
*/
$cuadrado = new classCuadrado;
$rectangulo = new classRectangulo;
$triangulo = new classTriangulo;

/*
Ejecutamos la funcion encargada 
de realizar la llamada polimorfica
*/
area($cuadrado);
area($rectangulo);
area($triangulo);