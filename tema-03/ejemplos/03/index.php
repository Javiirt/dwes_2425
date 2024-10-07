<?php

/**
 * Calificacion de una nota de 0 a 10
 * Mostrará: deficiente, insuficiente, suficiente, bien , notable o sobresaliente
 */


$a = 'a';

if ($a <= 10 && $a >= 0) {

  if ($a >= 9) {

    echo ("Sobresaliente");

  } elseif ($a >= 7) {

    echo ("Notable");

  } elseif ($a >= 6) {

    echo ("Bien");

  } elseif ($a >= 5) {

    echo ("Suficiente");

  } elseif ($a >= 2 ) {

    echo ("Insuficiente");

  } else{

    echo ("Deficiente");
  }

} else {

  echo ("Nota no valida");

}









//Corrección pizarra

if ($a <0) {

  echo ("Nota no valida");

}elseif ($a < 2) {

  echo ("Deficiente");

} elseif ($a < 5) {

  echo ("Insuficiente");

} elseif ($a < 6) {

  echo ("Suficiente");

} elseif ($a < 7) {

  echo ("Bien");

} elseif ($a < 8 ) {

  echo ("Notable");

} elseif($a<=10){

  echo ("Sobresaliente");

}elseif($a>10){

  echo ("Nota no valida");

}


