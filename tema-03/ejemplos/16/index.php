<?php 
 /**
  * Función explode()
  */

  $cadena_equipo = 'portero, laterales, centrale, mediocentros, interiores, delanteros';

  $array_equipo = explode(', ',  $cadena_equipo);

  print_r(  $array_equipo );