<?php

/* 
    Ejemplo clase genérica Exception

    Estructura try catch

*/

function division($valor1, $valor2){
    try {
        if($valor2 == 0){
            throw new Exception("ERROR: Division por 0 no permitida");
        }

        return ($valor1/$valor2);

    } catch (Exception $e) {
        echo "Mensaje: ".$e->getMessage();
        echo "<br>";
        echo "Fichero: ".$e->getFile();
        echo "<br>";
        echo "Linea: ".$e->getLine();
        
    }
}


echo division(4,0);
echo "<br> Hola";