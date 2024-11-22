<?php

/*
    Ejemplo de sentencia preparada

    Conexion:
        -servidor: localhost
        -usuario: root
        -password: 
        -bbdd: fp  
*/

# Variables de conexión
$server = 'localhost'; // 127.0.0.1:3306
$usuario = 'root';
$password = '';
$bbdd = 'fp';

# Conexión a la base de datos
$db = new mysqli($server, $usuario, $password, $bbdd);

# Verificamos conexión
if ($db->connect_errno) {
    die('ERROR DE CONEXIÓN Nº: ' . $db->connect_errno . ' - ' . $db->connect_error);
}

# Preparar la sentencia
$sql = "INSERT INTO 
    alumnos (
        id, 
        nombre, 
        apellidos,
        email,
        telefono,
        nacionalidad,
        dni,
        fechaNac,
        id_curso
    ) 
    VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?);";

$stmt = $db->prepare($sql);

# Verificar la sentencia preparada
if (!$stmt) { // La verificación correcta es que $stmt sea false si ocurre un error
    die('ERROR AL PREPARAR SQL: ' . $db->error);
}

# Vincular los parámetros
$stmt->bind_param(
    'sssisssi',
    $nombre,
    $apellidos,
    $email,
    $telefono,
    $nacionalidad,
    $dni,
    $fechaNac,
    $id_curso
);

# Datos de prueba
$nombre = "Juan";
$apellidos = "Pérez García";
$email = "juan.perez@example.com";
$telefono = 612345678;
$nacionalidad = "Española";
$dni = "12345678A";
$fechaNac = "2000-05-15";
$id_curso = 3; // Por ejemplo, el ID de un curso existente en la base de datos

# Ejecutar la sentencia
$stmt->execute();
echo "Registro insertado correctamente" ;

# Cerramos la sentencia y la conexión a la base de datos
$stmt->close();
$db->close();
