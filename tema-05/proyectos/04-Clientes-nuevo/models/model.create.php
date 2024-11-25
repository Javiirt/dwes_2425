<?php
/*
        apellidos: model.create.php
        descripción: añade el nuevo cliente a la tabla
        
        Métod POST (cliente):
            - id
            
    */

# Cargo los detalles del  formulario

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$provincia = $_POST['provincia'];
$nacionalidad = $_POST['nacionalidad'];
$dni = $_POST['dni'];
$fechaNac = $_POST['fechaNac'];
$id_curso = $_POST['id_curso'];

# Validación

# Creamos objeto de la clase Class_cliente
$cliente = new Class_cliente(
    null,
    $nombre ,
    $apellidos ,
    $email ,
    $telefono ,
    $direccion ,
    $poblacion ,
    $provincia ,
    $nacionalidad ,
    $dni ,
    $fechaNac ,
    $id_curso 
);

# Añadimos cliente a la tabla
$clientes = new Class_tabla_clientes('localhost', 'root', '', 'fp');

$clientes->create($cliente);

# Redirecciono al controlador index
header("location: index.php");
