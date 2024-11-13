<?php

/*
    Modelo: model.update.php
    Descripción: actualiza los datos del registro a partir de los detalles del formulario

    Métod POST:
    - id
    - titulo
    - autor
    - editorial
    - fechaEdicion
    - materia (indice)
    - etiquetas[]
    - precio
    
    Método GET:
                - indice (indice de la tabla correspondiente a dicho registro)
*/

# Símbolo monetario local
setlocale(LC_MONETARY, "es_ES");

# Cargo los detalles del  formulario
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$fechaEdicion = $_POST['fechaEdicion'];
$materia = $_POST['materia'];
$array_etiquetas = $_POST['etiquetas'];
$precio = $_POST['precio'];

# Crear un objeto de la clase libro a partir de los detalles del formulario
$libro = new Class_libro(
    $id,
    $titulo,
    $autor,
    $editorial,
    $fechaEdicion,
    $materia,
    $array_etiquetas,
    $precio
);

# Cargo el índice de la tabla donde se encuentra el libro
$indice = $_GET['indice'];

# Creo un objeto de la clase tabla libros
$obj_tabla_libros = new Class_tabla_libros();

# Cargo los datos en el objeto de la clase tabla de libros
$obj_tabla_libros->getDatos();

# Actualizo la tabla 
$obj_tabla_libros->update($articulo, $indice);

# Extraer la tabla para la vista
$array_libros = $obj_tabla_libros->tabla;

# Extraer array de materias para la vista
$materias = $obj_tabla_libros->getMaterias();

# Extraer array de etiquetas para la vista
$etiquetas = $obj_tabla_libros->getEtiquetas();






