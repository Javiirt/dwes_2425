<?php
 /**
  * Definicion de constantes
  */


  #Usuario

  define('USUARIO', 'root'); //Se define en mayusculas
  echo USUARIO; //No hace falta $ para llamarla
  echo "<br>";
  echo "El nombre del usuario es USUARIO";// Así no llama a la constante
  echo "<br>";
  echo "El nombre del usuario es " . USUARIO;// Así aparece sin problemas
