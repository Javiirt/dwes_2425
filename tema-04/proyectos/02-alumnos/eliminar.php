<?php
/*
        controlador: eliminar.php
        descripción: elimina un alumno de la tabla

        parámetros:

            - Método GET:
                - indice - indice del alumno que voy a eliminar
    */

# Clases
include 'class/class.alumno.php';
include 'class/class.tabla_alumnos.php';

# Librerias

# Model
include 'models/model.eliminar.php';

# Vista
include 'views/view.index.php';
