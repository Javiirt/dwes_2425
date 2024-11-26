<?php

// Manejar errores específicos de MySQL
echo "ERROR DE BASE DE DATOS: <br>
<hr>";
echo "Mensaje: " . $e->getMessage();
echo "<br>";
echo "Fichero: " . $e->getFile();
echo "<br>";
echo "Linea: " . $e->getLine();
echo "<br>";
echo "Trace: " . $e->getTraceAsString();
echo "<br>";
echo "Codigo: " . $e->getCode();