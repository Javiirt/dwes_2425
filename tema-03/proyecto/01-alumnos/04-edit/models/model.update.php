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
$nombre = $_POST["nombre"];
$poblacion = $_POST["poblacion"];
$curso = $_POST["curso"];


$idGet = $_GET['id']; 

#Creo un array asociativo con los detalles del nuevo alumno
$registro =
    [
        'id' => $id,
        'nombre' => $nombre,
        'poblacion' => $poblacion,
        'curso' => $curso
    ];



#cargar tabla alumnos
$alumnos = get_tabla_alumnos();

$indice_editar = buscar_tabla($alumnos, 'id', $idGet);

#Añado el alumno a la tabla
$alumnos[$indice_editar] = $registro;




