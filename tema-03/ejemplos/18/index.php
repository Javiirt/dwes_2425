<?php  
 /**
  * funciones y procedimientos
  */

#Defino la funcion sumar (si no tipifico los valores de entrada, devuelve un valor mixed)
  function sumar(int $valor1, int $valor2){
    $resultado = $valor1 + $valor2;
    return $resultado;
  }

  #Uso la funcion sumar
  $calculo = sumar(4,5);

  echo($calculo);