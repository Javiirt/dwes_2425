<?php

/**
 * Modelo: model.delete.php 
 * Descripción: Elimina un libro de la tabla
 * 
 * Metodo GET:
 *  -id
 */


#Traemos valores del formulario
$id = $_GET["id"];

#Cargar tabla libros
$libros = get_tabla_libros();

#Elimino el registro que coincida con el id
$indice_eliminar = buscar_tabla($libros, 'id', $id);


#Validar la búsqueda
if ($indice_eliminar !== false) {
    #Eliminar
    unset($libros[$indice_eliminar]);
} else {
    echo "ERROR: Libro no encontrado";
    exit();
}









