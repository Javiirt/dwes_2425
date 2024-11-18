<?php

/*  
    model: model.nuevo.php 

    decripcion: genera los datos necesario para el formulario de crear un nuevo profesor

 */


 #inicializamos el objeto lista profesores
$obj_lista_profesores = new Class_tabla_profesor();

#definimos la lista de especialidades
$lista_especialidades = $obj_lista_profesores->getEspecialidades();

#definimos la lista de asignaturas
$lista_asignaturas = $obj_lista_profesores->getAsignaturas();