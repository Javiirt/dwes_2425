<?php

/**
 * Modelo: model.create.php 
 * Descripción: carga la tabla inicial
 * 
 * 
 * Datos recibidos por el formulario:
 * - id;
 * - descripcion;
 * - modelo;
 * - marca;
 * - categorias;
 * - unidades;
 * - precio;
 */

#Recogemos los valores recibidos por el método POST
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$categorias = explode(',', $_POST['categorias']);
$unidades = $_POST['unidades'];
$precio = $_POST['precio'];

#Creamos un objeto a partir de los valores recibidos
$articulo_nuevo = new Class_articulo(
    $id,
    $descripcion,
    $modelo,
    $marca,
    $categorias,
    $unidades,
    $precio
);

#Añadimos el objeto a la tabla y definimos la tabla
$tabla_articulos = $tabla->create($articulo_nuevo);

#Mostramos un alert sobre la creacion
echo "<script>alert('Artículo creado');</script>";
