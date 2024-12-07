<?php

/*
        modelo: model.eliminar.php
        descripción: elimina cliente de la tabla
        
        Método GET:

            - id: id del cliente
    */

# Cargamos el id del alumno que vamos a editar
$id = $_GET['id'];

# Conecto con la base de datos gesbank
$conexion = new Class_tabla_clientes();

# Eliminar cliente
$cliente = $conexion->delete($id);
