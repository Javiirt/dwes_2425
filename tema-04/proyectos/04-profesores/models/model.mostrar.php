<?php 

/* 
    modelo: model.editar.php 

    descripción: carga los valores necesario para mostrar un profesor

    Valores recibidos por parámetros :
        - id

*/

#Definimos valores recibidos por el método _GET
$id = $_GET['indice'];

#inicializamos el objeto lista profesores
$obj_lista_profesores = new Class_tabla_profesor();

#cargamos los datos
$obj_lista_profesores->getDatos();

#obtenemos el profesor que se quiere editar
$profesor = $obj_lista_profesores->read($id);

#definimos la lista de especialidades
$lista_especialidades = $obj_lista_profesores->getEspecialidades();

#definimos la lista de asignaturas
$lista_asignaturas = $obj_lista_profesores->getAsignaturas();
