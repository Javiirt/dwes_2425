<?php

/*
    modelo: model.editar.php
    descripción: carga los datos de la cuenta que deseo actualizar

    Método GET:

        - id de la cuenta
*/

# Cargamos el id de la cuenta que vamos a mostrar
$id = $_GET['id'];

# Creo un objeto de la clase tabla cuentas
$conexion = new Class_tabla_cuentas();

# Obtener los detalles de la cuenta 
$cuenta = $conexion->read($id);

# Creo una lista de clientes
$clientes = $conexion->getClientes();



