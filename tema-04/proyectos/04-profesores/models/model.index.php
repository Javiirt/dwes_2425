<?php
/*
    Modelo: model.index.html 

    Descripción: cargar los datos de la tabla de profesores
 
 */

#inicializamos el objeto lista profesores
$obj_lista_profesores = new Class_tabla_profesor();

#cargamos los datos
$obj_lista_profesores->getDatos();

#asignamos la lista de profesores a una variable
$lista_profesores = $obj_lista_profesores->tabla;

#definimos la lista de especialidades
$lista_especialidades = $obj_lista_profesores->getEspecialidades();

#definimos la lista de asignaturas
$lista_asignaturas = $obj_lista_profesores->getAsignaturas();
