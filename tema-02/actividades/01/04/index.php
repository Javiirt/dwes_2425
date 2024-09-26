<?php

        /**
         * Ejercicio 4.

        * Este ejercicio se guardará en la carpeta DWES/Tema-02/Actividades/01/04/index.php

        * Crear en un script Php que cree dos variables una de tipo float y otra de tipo int. 
        * Almacenar en nuevas variables el resultado de la suma, resta, división, producto y potencia. 
        * Mostrar mediante var_dump() las variables con los resultados de las operaciones anteriores.
        */

        $varFloat = 0.14159;
        $varInt = 3;

        $varSuma = $varFloat + $varInt;
        echo("<br>Suma:");
        var_dump(value: $varSuma);
        

        $varResta = $varFloat - $varInt;
        echo("<br>Resta:");
        var_dump(value: $varResta);
        

        $varDivision = $varFloat / $varInt;
        echo("<br>Division:");
        var_dump(value: $varDivision);
        

        $varProducto = $varFloat * $varInt;
        echo("<br>Producto:");
        var_dump(value: $varProducto);

        $varPotencia = $varFloat ** $varInt;
        echo("<br>Potencia:");
        var_dump(value: $varPotencia);