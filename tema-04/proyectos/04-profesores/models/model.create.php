<?php

/*
    Modelo: model.index.html 

    Descripción: cargar los datos de la tabla de profesores

    Valores recibidos por prámetros :
        - id
        - nombre
        - apellidos
        - nrp
        - fecha_nacimiento
        - poblacion
        - especialidad
        - asignaturas[]
 
 */

#Definimos valores recibidos por el método POST
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$nrp = $_POST['nrp'];
$fecha_nacimiento = $_POST['fechaNacimiento'];
$poblacion = $_POST['poblacion'];
$especialidad = $_POST['especialidad'];
$asignaturas = $_POST['asignaturas'];

#Cresamo un profesor con los valores recibidos
$nuevo_profesor = new Class_profesor(
    $id,
    $nombre,
    $apellidos,
    $nrp,
    $fecha_nacimiento,
    $poblacion,
    $especialidad,
    $asignaturas,
);

#inicializamos el objeto lista profesores
$obj_lista_profesores = new Class_tabla_profesor();

#cargamos los datos
$obj_lista_profesores->getDatos();

#añadimos el nuevo profesor a la lista de profesores
$obj_lista_profesores->create($nuevo_profesor);

#asignamos la lista de profesores a una variable
$lista_profesores = $obj_lista_profesores->tabla;

#definimos la lista de especialidades
$lista_especialidades = $obj_lista_profesores->getEspecialidades();

#definimos la lista de asignaturas
$lista_asignaturas = $obj_lista_profesores->getAsignaturas();
