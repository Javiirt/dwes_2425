<?php 
 /**
  * Función implode()
  */

  $array_equipo = [
    'portero',
    'laterales',
    'centrale',
    'mediocentros',
    'interiores',
    'delanteros'
  ];

  $cadena_equipo = implode(', ', $array_equipo );

  echo( $cadena_equipo );