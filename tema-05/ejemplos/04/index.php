<?php

/* 
    Ejemplo clase genérica Exception

    Estructura try catch

*/


try {
    // Habilitar el modo de excepciones en mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fp");

    // Intentar ejecutar una consulta inválida
    $result = $conexion->query("SELECT * FROM alumnos ORDER BY id");

} catch (mysqli_sql_exception $e) {

    // Manejar errores específicos de MySQL
    echo "Mensaje: " . $e->getMessage();
    echo "<br>";
    echo "Fichero: " . $e->getFile();
    echo "<br>";
    echo "Linea: " . $e->getLine();

    exit();

}

print_r($result->fetch_all(MYSQLI_ASSOC));
