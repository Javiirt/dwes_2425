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
 */


 #entraemos valores del formulario
 $id = $_POST["id"];
 $nombre = $_POST["nombre"];
 $poblacion = $_POST["poblacion"];
 $curso = $_POST["curso"];

 #cargar tabla alumnos
 $alumnos = get_tabla_alumnos();

 #Creo un array asociativo con los detalles del nuevo alumno
 $registro = 
 [
    'id'=>$id,
    'nombre' =>  $nombre,
    'poblacion' =>  $poblacion,
    'curso' =>  $curso
 ];

#Añado el alumno a la tabla
$alumnos[] = $registro;

//array_push($alumnos, $registro);




