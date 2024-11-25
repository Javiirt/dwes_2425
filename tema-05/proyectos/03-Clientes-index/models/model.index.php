<?php

    /*
        Modelo: model.index.php
        Descripción: muestra los clientes
    */

    # Símbolo monetario local
    setlocale(LC_MONETARY,"es_ES");

    # Creo un objeto de la clase tabla clientes
    $tabla_clientes = new Class_tabla_clientes(
        'localhost',
        'root',
        '',
        'fp');

    # Cargo tabla de clientes
    // $cliente es un objeto de la clase mysqli_result
    $clientes = $tabla_clientes->getClientes();

    
    