<?php

/**
 * Modelo: model.create.php 
 * Descripción: carga la tabla inicial
 * 
 * 
 * Datos recibidos por el método POST:
 * - id;
 * - descripcion;
 * - modelo;
 * - marca;
 * - categorias;
 * - unidades;
 * - precio;
 * 
 * Datos recibidos por el método GET:
 * - id
 */

#Recogemos los valores recibidos por lo métodos
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$categorias = explode(',', $_POST['categorias']);
$unidades = $_POST['unidades'];
$precio = $_POST['precio'];

$id_inicial = $_GET['id'];

#Creamos un objeto a partir de los valores recibidos
$articulo_actualizado = new Class_articulo(
    $id,
    $descripcion,
    $modelo,
    $marca,
    $categorias,
    $unidades,
    $precio
);

#Actualizamos el artículo y definimos la tabla
$tabla_articulos = $tabla->update($articulo_actualizado, $id_inicial);

#Mostramos un alert sobre la actualizacion
echo "<script>alert('Artículo actualizado');</script>";
