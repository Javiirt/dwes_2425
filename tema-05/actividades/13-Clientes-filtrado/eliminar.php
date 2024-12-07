<?php
/*
        controlador: eliminar.php
        descripción: elimina un cliente de la tabla

        parámetros:

            - Método GET:
                - id - id del cliente
    */

# Archivos de configuración
include 'config/configDB.php';

# Clases
include 'class/class.cliente.php';
include 'class/class.conexion.php';
include 'class/class.tabla_clientes.php';

# Librerias

# Model
include 'models/model.eliminar.php';


# Redirecciono  controlador index
header("location: index.php");
