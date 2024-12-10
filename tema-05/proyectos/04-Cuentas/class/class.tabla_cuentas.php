<?php

/*
    clase: class.tabla_php
    descripcion: define la clase que va a contener el array de objetos de la clase 
*/

class Class_tabla_cuentas extends Class_conexion
{


    /*
        método: getCuentas()
        descripcion: devuelve un objeto pdostatement con los detalles de las ceuntas
    */

    public function getCuentas()
    {
        try {

            // sentencia sql
            $sql = "
            SELECT 
                cuentas.id,
                cuentas.num_cuenta,
                CONCAT_WS(', ', clientes.apellidos, clientes.nombre) as cliente,
                cuentas.fecha_alta,
                cuentas.fecha_ul_mov,
                cuentas.saldo
            FROM
                cuentas
            INNER JOIN
                clientes on clientes.id = cuentas.id_cliente
            ORDER BY cuentas.id;
        ";

            // sentencia preparada
            // obtengo objeto clase pdostatement
            $stmt = $this->pdo->prepare($sql);

            // establezco tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // ejectuto
            $stmt->execute();

            // devuelvo objeto clase pdostatement
            return $stmt;
        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero pdostatement
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }


    /*
        método: getClientes()
        descripcion: devuelve un objeto pdostatement con los detalles de los clientes
    */

    public function getClientes()
    {
        try {

            // sentencia sql
            $sql = "
            SELECT 
                clientes.id,
                CONCAT_WS(', ', clientes.apellidos, clientes.nombre) as cliente
            FROM
                clientes
            ORDER BY clientes.id;
        ";

            // sentencia preparada
            // obtengo objeto clase pdostatement
            $stmt = $this->pdo->prepare($sql);

            // establezco tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_KEY_PAIR

            // ejectuto
            $stmt->execute();

            // devuelvo objeto clase pdostatement
            return $stmt; //return $stmt->fetchAll();

        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero pdostatement
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }


    /*
        método: create()
        descripcion: permite añadir un objeto de la clase cuenta a la tabla
        
        parámetros:

            - $cuenta - objeto de la clase cuenta
    */

    public function create(Class_cuenta $cuenta)
    {
        try {

            // Crear la sentencia preparada
            $sql = "
            INSERT INTO 
                cuentas( 
                        num_cuenta,
                        id_cliente,
                        saldo
                    )
            VALUES    (
                        :num_cuenta,
                        :id_cliente,
                        :saldo
                    )                            
            ";

            // ejecuto la sentenecia preprada
            $stmt = $this->pdo->prepare($sql);

            // vinculación de parámetros
            $stmt->bindParam(':num_cuenta', $cuenta->num_cuenta, PDO::PARAM_INT);
            $stmt->bindParam(':id_cliente', $cuenta->cliente, PDO::PARAM_INT);
            $stmt->bindParam(':saldo', $cuenta->saldo, PDO::PARAM_STR, 10);

            // ejecutamos
            $stmt->execute();
        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero sentencia preprada
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }

    /*
        método: read()
        descripcion: permite obtener el objeto de la clase cuenta a partir del id de la cuenta

        parámetros:

            - $id - id de la cuenta
    */

    public function read($id)
    {
        try {

            // Crear la sentencia sql
            $sql = "
            SELECT 
                cuentas.id,
                cuentas.num_cuenta,
                cuentas.id_cliente,
                cuentas.saldo
            FROM
                cuentas
            WHERE 
                id = :id
            ORDER BY cuentas.id
            LIMIT 1;
        ";

            // Creo la sentencia preprada objeto clase pdostmt
            $stmt = $this->pdo->prepare($sql);

            // vinculación de parámetros
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // Establecemos el tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // ejecutamos
            $stmt->execute();

            // Devolvemos un objeto de la clase cliente
            return $stmt->fetch();

        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero sentencia preprada
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }

    /*
        método: update()
        descripcion: permite actualizar los detalles de una cuenta

        parámetros:

            - $cuenta - objeto de Class_cuenta
            - $id - id de la cuenta
    */

    public function update(Class_cuenta $cuenta, $id)
    {
        try {

            // Crear la sentencia preparada
            $sql = "
            UPDATE cuentas SET 
                    num_cuenta = :num_cuenta,
                    id_cliente = :id_cliente,
                    saldo = :saldo
            WHERE 
                    id = :id
            ";

            // ejecuto la sentenecia preprada
            $stmt = $this->pdo->prepare($sql);

            // vinculación de parámetros
            $stmt->bindParam(':num_cuenta', $cuenta->num_cuenta, PDO::PARAM_INT);
            $stmt->bindParam(':id_cliente', $cuenta->cliente, PDO::PARAM_INT);
            $stmt->bindParam(':saldo', $cuenta->saldo, PDO::PARAM_STR, 10);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // ejecutamos
            $stmt->execute();


        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero result
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }


    /*
        método: delete()
        descripcion: elimina una cuenta

        Parámetros:

            - id de la cuenta
    */

    public function delete(int $id)
    {
        try {

            // sentencia sql
            $sql = "DELETE FROM cuentas WHERE id = :id LIMIT 1";

            // ejecuto prepare
            $stmt = $this->pdo->prepare($sql);

            // vincular parámetros
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            /// Establecemos el tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // ejecutamos
            $stmt->execute();

            // Devolvemos un objeto de la clase cliente
            return $stmt;

        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero stmt
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }

    /*
        método: order()
        descripcion: devuelve un objeto de la clase pdostatement con los 
        detalles de las cuentas ordenados por un criterio.

        Parámetros:

            - criterio: posición de la columna en la tabla cuenta
                        por la que quiero ordenar
    */

    public function order(int $criterio)
    {
        try {

            // sentencia sql
            $sql = " 
            SELECT 
                cuentas.id,
                cuentas.num_cuenta,
                CONCAT_WS(', ', clientes.apellidos, clientes.nombre) as cliente,
                cuentas.fecha_alta,
                cuentas.fecha_ul_mov,
                cuentas.saldo
            FROM
                cuentas
            INNER JOIN
                clientes on clientes.id = cuentas.id_cliente
            GROUP BY cuentas.id
            ORDER BY :criterio;
        ";


            // ejecuto prepare
            $stmt = $this->pdo->prepare($sql);

            // vincular parámetros
            $stmt->bindParam(':criterio', $criterio, PDO::PARAM_INT);

            // Tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // ejecutamos
            $stmt->execute();

            // Devolvemos stmt
            return $stmt;

        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero stmt
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }

    /*
        método: filter()
        descripcion: devuelve un objeto de la clase PSOStatement con los 
        detalles de las cuentas ordenadas por un criterio.

        Parámetros:

            - expresion
    */

    public function filter($expresion)
    {
        try {

            // sentencia sql
            $sql = "

            SELECT 
                cuentas.id,
                cuentas.num_cuenta,
                CONCAT_WS(', ', clientes.apellidos, clientes.nombre) as cliente,
                cuentas.fecha_alta,
                cuentas.fecha_ul_mov,
                cuentas.saldo
            FROM
                cuentas
            INNER JOIN
                clientes on clientes.id = cuentas.id_cliente
            WHERE
                CONCAT_WS(' ',
                    cuentas.id,
                    cuentas.num_cuenta,
                    CONCAT_WS(', ', clientes.apellidos, clientes.nombre),
                    cuentas.fecha_alta,
                    cuentas.fecha_ul_mov,
                    cuentas.saldo
                )
            LIKE :expresion
            ORDER BY cuentas.id;
        ";

            // ejecuto prepare
            $stmt = $this->pdo->prepare($sql);

            // arreglamos expresión para operador like
            $expresion = '%' . $expresion . '%';

            // vincular parámetros
            $stmt->bindParam(':expresion', $expresion, PDO::PARAM_STR, 255);

            // Tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // ejecutamos
            $stmt->execute();

            // Devolvemos stmt
            return $stmt;

        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // libero stmt
            $stmt = null;

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }


}
