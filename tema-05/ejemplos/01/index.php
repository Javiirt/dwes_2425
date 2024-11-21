<?php

/*
   Conexion:
      -servidor: localhost
      -usuario: root
      -passwrod: 
      -bbdd: fp  
 */

#variables de conexion
$server = 'localhost'; //127.0.0.1:3306
$usuario = 'root';
$password = '';
$bbdd = 'fp';


#establecemos las conexion
$conexion = new mysqli($server, $usuario, $password, $bbdd);

#verificamos conexion
if ($conexion->connect_errno) {
    echo 'ERROR DE CONEXION Nº: ' . $conexion->connect_errno;
    echo '<br>';
    echo 'ERROR DE CONEXION Nº: ' . $conexion->connect_error;
}

echo 'Coneción establecida con exito';

#ejecuto sql
$sql = 'select * from alumnos order by id';
$result = $conexion->query($sql); //$result objeto de class mysqli_result

#Manejo de resultado
while($alumno = $result->fetch_assoc()){
    echo '<br>';
    echo 'id: '. $alumno['id'] ;
    echo '<br>';
    echo 'nombre: '. $alumno['nombre'] ;
    echo '<br>';
    echo 'poblacion: '. $alumno['poblacion'] ;
    echo '<br>';
}


#libero memoria y cierro conexion
$result->free();
$conexion->close();