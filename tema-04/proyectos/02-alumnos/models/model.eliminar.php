<?php

/*
        modelo: model.eliminar.php
        descripción: elimina un alumno de la tabla
        
        Método GET:

            - indice: de la tabla donde se encuentra el alumno que voy a eliminar
    */

# Cargamos el indice del alumno
$indice = $_GET['id'];

# Creo un objeto de la clase tabla de alumnos
$obj_tabla_alumnos = new Class_tabla_alumnos();

# Cargo la tabla de cursos
$cursos = $obj_tabla_alumnos->getCurso();

# Cargo la tabla de asignaturas
$asignaturas = $obj_tabla_alumnos->getAsignaturas();

# Obtengo los articulos
$obj_tabla_alumnos->getAlumnos();

# Obtener el objeto de la clase alumno correspondiente a ese índice
$obj_tabla_alumnos->delete($indice);

# Obtengo la tabla de alumnos actualizada para la vista
$array_alumnos = $obj_tabla_alumnos->getTabla();