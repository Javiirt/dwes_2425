<?php 

/**
 * Funcion con valor por referencia
 */


 function sumar( $valor1,  $valor2, &$resultado){
    $resultado = $valor1 + $valor2;
     $resultado;
  }

  $v1 = 5;
  $v2 = 6;
  $resultado = 0;

  #Uso la funcion sumar
    sumar($v1,$v2,$resultado);

  echo($resultado);