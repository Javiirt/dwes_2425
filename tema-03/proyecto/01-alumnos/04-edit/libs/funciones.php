<?php
/**
 * Librería Proyecto 3.1 - CRUD Alumnos Array
 */

#Obtiene la tabla de alumnos
function get_tabla_alumnos()
{
  $alumnos = [
    [
      'id' => 1,
      'nombre' => 'Javi',
      'poblacion' => 'Villamartín',
      'curso' => '2DAW'
    ],
    [
      'id' => 2,
      'nombre' => 'Pepe',
      'poblacion' => 'Ubrique',
      'curso' => '2DAW'
    ],
    [
      'id' => 3,
      'nombre' => 'Jose',
      'poblacion' => 'Villamartín',
      'curso' => '2DAW'
    ]

  ];

  return $alumnos;

}


function buscar_tabla($tabla, $columna, $valor){
  $columna_id = array_column($tabla, $columna);
  $indice = array_search($valor, $columna_id, false);
  return $indice;
}