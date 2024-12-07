<?php

/*
    Modelo: model.update.php
    Descripción: actualiza los datos de la cuenta

    Métod POST (cuenta):
            - num_cuenta
            - id_cliente
            - saldo
    
    Método GET:

        - id de la cuenta
*/

# Símbolo monetario local
setlocale(LC_MONETARY, "es_ES");

# Cargo el id del cliente
$id = $_GET['id'];

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

# Actualizamos la cuenta
$conexion = new Class_tabla_cuentas();

$conexion->update($cuenta, $id);


