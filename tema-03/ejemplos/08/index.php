<?php

/**
 * Calificacion de una nota de 0 a 10
 * Mostrará: deficiente, insuficiente, suficiente, bien , notable o sobresaliente
 */


$calif = 3.7;


switch (true) {
  case ($calif > 10 ):
    $calif = 'Nota no valida';
    break;
  case ($calif >= 9):
    $calif = 'Sobresaliente';
    break;
  case ($calif >= 7):
    $calif = 'Notable';
    break;
  case ($calif >= 6):
    $calif = 'Bien';
    break;
  case ($calif >= 5):
    $calif = 'Suficiente';
    break;
  case ($calif >= 2):
    $calif = 'Insuficiente';
    break;
  case ($calif >= 0):
    $calif = 'Deficiente';
    break;
  default:
    $calif = 'Nota no valida';
}

echo $calif;


