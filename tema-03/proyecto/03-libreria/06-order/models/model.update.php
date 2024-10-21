<?php

/**
 * Modelo: model.create.php 
 * Añade un alumno
 * 
 * Metodo POST:
 *  -id
 *  -nombre
 *  -poblacion
 *  -curso
 * 
 *  Metodo GET_
 *  -id
 */


#entraemos valores del formulario
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$genero = $_POST['genero'];
$precio = $_POST['precio'];



$idGet = $_GET['id']; 

#Creo un array asociativo con los detalles del nuevo alumno
$registro =
[
    'id'=>$id ,
    'titulo' => $titulo ,
    'autor' => $autor ,
    'editorial' => $editorial ,
    'genero' => $genero ,
    'precio' => $precio 
];



#cargar tabla libros
$libros = get_tabla_libros();

$indice_editar = buscar_tabla($libros, 'id', $idGet);

#Añado el alumno a la tabla
$libros[$indice_editar] = $registro;




