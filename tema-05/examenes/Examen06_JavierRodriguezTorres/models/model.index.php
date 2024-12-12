<?php

/*
    Modelo: model.index.php
    Descripción: muestra los detalles de libros

*/

# Creo un objeto de la clase Class_tabla_libros
$tabla_libros = new Class_tabla_libros();

# Obtengo un objeto de la clase pdostatement con los detalles de libros
$stmt_libros = $tabla_libros->get_libros();