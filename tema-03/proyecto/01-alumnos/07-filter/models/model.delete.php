<?php

/**
 * Modelo: model.delete.php 
 * Elimina un alumno
 * 
 * Metodo GET:
 *  -id
 */


#Traemos valores del formulario
$id = $_GET["id"];

#Cargar tabla alumnos
$alumnos = get_tabla_alumnos();

#Elimino el registro que coincida con el id
$indice_eliminar = buscar_tabla($alumnos, 'id', $id);


#Validar la búsqueda
if ($indice_eliminar !== false) {
    #Eliminar
    unset($alumnos[$indice_eliminar]);
} else {
    echo "ERROR: Alumno no encontrado";
    exit();
}









