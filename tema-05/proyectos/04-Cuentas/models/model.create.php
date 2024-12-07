<?php
/*
    apellidos: model.create.php
    descripción: añade la nueva cuenta a la tabla
    
    Métod POST (cuenta):
        - num_cuenta
        - id_cliente
        - saldo
        
*/

# Cargo los detalles del  formulario
$num_cuenta = $_POST['num_cuenta'];
$id_cliente = $_POST['id_cliente'];
$saldo = $_POST['saldo'];



# Creamos objeto de la clase Class_cuenta
$cuenta = new Class_cuenta(
    null,
    $num_cuenta,
    $id_cliente,
    null,
    null,
    $saldo
);

# Añadimos cuenta a la tabla
$conexion = new Class_tabla_cuentas();

$conexion->create($cuenta);
