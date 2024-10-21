<?php

/**
 * Modelo: model.edit.php 
 * Editar un libro
 * 
 * Metodo GET:
 *  -id
 */


#Traemos valores del formulario
$id = $_GET["id"];

#Cargar tabla libros
$libros = get_tabla_libros();

#Elimino el registro que coincida con el id
$indice_mostrar = buscar_tabla($libros, 'id', $id);


#Validar la búsqueda

if ($indice_mostrar === false) {
    echo "ERROR: Libro no encontrado";
    exit();

} 

#Creo el array registro con los detalles del libro
$registro = $libros[$indice_mostrar];







