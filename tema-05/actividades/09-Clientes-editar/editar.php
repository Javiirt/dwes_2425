<?php
    /*
        controlador: editar.php
        descripción: muestra los detalles de cliente en modo edición

        parámetros:

            - Método GET:
                - id - cliente
    */

    # Archivos de configuración
    include 'config/configDB.php';

    # Clases
    include 'class/class.cliente.php';
    include 'class/class.conexion.php';
    include 'class/class.tabla_clientes.php';

    # Librerias

    # Model
    include 'models/model.editar.php';

    # Vista
    include 'views/view.editar.php';