<?php

/**
 * Array indexado
 */

//$numeros = array(3,4,7,9); hace lo mismo
$numeros = [3,4,7,9];

//Mostramos array
//print_r($numeros);

foreach ($numeros as $i => $valor){
  echo "[$i] = $valor";
  echo "<br>";
}