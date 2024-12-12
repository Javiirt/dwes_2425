<?php

    /*
        Modelo: model.ordenar.php
        Descripción: ordena los clientes por algún criterio

        Parámetros:
            - criterio: el número que identifica la posición de la columna en
              en el select de getClientes()
    */

$criterio =  $_GET['criterio'];
    
# Creo un objeto de la clase Class_tabla_libros
$tabla_libros = new Class_tabla_libros();

# Obtengo un objeto de la clase pdostatement con los detalles de libros
$stmt_libros = $tabla_libros->order($criterio);