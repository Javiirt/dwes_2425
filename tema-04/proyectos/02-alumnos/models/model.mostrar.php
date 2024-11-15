<?php

/*
        modelo: model.mostrar.php
        descripción: carga los datos del alumno

        Método GET:
            - indice de la tabla en la que se encuentra el alumno
    */

# Cargamos el id del alumno
$indice = $_GET['id'];

# Crear un objeto de la clase tabla_alumnos
$obj_tabla_alumnos = new Class_tabla_alumnos();

# Obtengo los articulos
$obj_tabla_alumnos->getAlumnos();

# Obtengo el array de marcas
$cursos = $obj_tabla_alumnos->getCurso();

# Obtengo el array de categorias
$asignaturas = $obj_tabla_alumnos->getAsignaturas();

# Obtener el objeto de la clase alumno correspondiente a ese índice
$alumno = $obj_tabla_alumnos->read($indice);
