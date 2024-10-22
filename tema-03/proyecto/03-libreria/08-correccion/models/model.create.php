<?php

/**
 * Modelo: model.create.php 
 * Añade un libro a la tabla
 * 
 * Metodo POST:
 *  -id  
 *  -titulo
 *  -autor
 *  -editorial
 *  -genero
 *  -precio
 */


#entraemos valores del formulario
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$genero = $_POST["genero"];
$precio = $_POST["precio"];

#cargar tabla alumnos
$libros = get_tabla_libros();

#Creo un array asociativo con los detalles del nuevo alumno
$registro =
  [
    'id' => $id,
    'titulo' =>  $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'genero' => $genero,
    'precio' => $precio
  ];

#Añado el libro a la tabla
$libros[] = $registro;

