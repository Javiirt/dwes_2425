<?php
    /*
        controlador: editar.php
        descripción: muestra los detalles de un libro en modo edición

        parámetros:

            - Método GET:
                - indice donde se ecuentra el libro dentro de la tabla
    */

    # Archivos de configuración
    include 'config/configDB.php';

    # Clases
    include 'class/class.alumno.php';
    include 'class/class.conexion.php';
    include 'class/class.tabla_alumnos.php';

    # Librerias

    # Model
    include 'models/model.editar.php';

    # Vista
    include 'views/view.editar.php';