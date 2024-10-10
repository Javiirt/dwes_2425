<?php

/**
 * Array de dos dimensiones con indices numericos
 */


$matriz = [
  [2,5,3,5,9],
  [1,4,6,8,0], 
  [5,2,4,8,9]
];

//Muestro el 6
//echo $matriz[1][3];

foreach ($matriz as $i => $valor1){
  foreach ($valor1 as $a => $valor2){
    echo "[$i][$a] = $valor2";
    echo "<br>";
  }
}