<?php

/**
 * Array asociativo
 */


 $alumno =[
'id'=>1,
'nombre' => 'Javi',
'poblacion' => 'Villamartín',
'curso' => '2DAW'
 ];

 foreach ($alumno as $i => $valor){
  echo "[$i] = $valor";
  echo "<br>";
}