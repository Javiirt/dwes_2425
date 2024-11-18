<?php 

/*
    Modelo: model.delete.html 

    Descripción: elimina un profesor de la tabla

    Valores recibidos por parámetros con el método GET :
        - indice
 
 */

 #Definimos valores recibidos por el método GET
$indice = $_GET['indice'];

#inicializamos el objeto lista profesores
$obj_lista_profesores = new Class_tabla_profesor();

#cargamos los datos
$obj_lista_profesores->getDatos();

#añadimos el nuevo profesor a la lista de profesores
$obj_lista_profesores->delete($indice);

#asignamos la lista de profesores a una variable
$lista_profesores = $obj_lista_profesores->tabla;

#definimos la lista de especialidades
$lista_especialidades = $obj_lista_profesores->getEspecialidades();

#definimos la lista de asignaturas
$lista_asignaturas = $obj_lista_profesores->getAsignaturas();
