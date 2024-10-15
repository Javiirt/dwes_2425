<?php 
     
/**
 * Funcion array_keys()
 */


     $array_equipo = [
        'portero',
        'laterales',
        'centrale',
        'mediocentros',
        'interiores',
        'delanteros'
      ];


      $array_indices = array_keys($array_equipo);

      print_r($array_indices);