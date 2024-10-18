<?php

/**
 * Modelo: model.edit.php 
 * Editar un alumno
 * 
 * Metodo GET:
 *  -id
 */


#Traemos valores del formulario
$id = $_GET["id"];

#Cargar tabla alumnos
$alumnos = get_tabla_alumnos();

#Elimino el registro que coincida con el id
$indice_editar = buscar_tabla($alumnos, 'id', $id);


#Validar la búsqueda

if ($indice_editar === false) {
    echo "ERROR: Alumno no encontrado";
    exit();

} 

#Creo el array registro con los detalles del alumno
$registro = $alumnos[$indice_editar];







