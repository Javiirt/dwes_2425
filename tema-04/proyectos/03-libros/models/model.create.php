<?php
/*
    modelo: model.create.php
    descripción: añade el nuevo libro a la tabla
    
    Métod POST:
        - id
        - titulo
        - autor
        - editorial
        - fechaEdicion
        - materia (indice)
        - etiquetas[]
        - precio
*/


# Cargo los detalles del  formulario
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$fechaEdicion = $_POST['fechaEdicion'];
$materia = $_POST['materia'];
$array_etiquetas = $_POST['etiquetas'];
$precio = $_POST['precio'];

# Validación

# Creo un objeto de la clase tabla libro
$obj_tabla_libros = new Class_tabla_libros();

# Relleno el array de objetos
$obj_tabla_libros->getDatos();

# Cargo tabla de materias
$materias = $obj_tabla_libros->getMaterias();

# Cargo tabla de etiquetas
$etiquetas = $obj_tabla_libros->getEtiquetas();

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

# Añadir el artículo a la tabla
$obj_tabla_libros->create($libro);

# Obtener tabla de libro
$array_libros = $obj_tabla_libros->tabla;