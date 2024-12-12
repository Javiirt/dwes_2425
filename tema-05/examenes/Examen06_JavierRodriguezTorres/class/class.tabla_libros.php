<?php

/*
    clase: class.tabla_libros.php
    descripcion: define la clase que va a contener el array de objetos de la clase libro.
*/



class Class_tabla_libros extends Class_conexion
{


    /*
        método: getLibros()
        descripcion: devuelve un objeto pdostatement con los detalles de los libros
    */

    public function get_libros()
    {
        try {
            //Sentencia sql
            $sql = "
                SELECT 
                    li.id,
                    li.titulo,
                    au.nombre as autor,
                    ed.nombre as editorial,
                    fecha_edicion,
                    generos_id,
                    stock,
                    precio
                FROM 
                    libros li
                INNER JOIN  
                    autores au
                ON 
                    au.id = li.autor_id
                INNER JOIN 
                    editoriales ed
                ON 
                    ed.id = li.editorial_id
                ORDER BY
                    li.id
                ASC
            
            ;";

            //sentencia preparada
            $stmt = $this->pdo->prepare($sql);

            // establezco tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // ejectuto
            $stmt->execute();

            // devuelvo pdostatement
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
        método: get_generos()
        descripcion: devuelve un array clave valor con la tabla géneros
    */

    public function get_generos()
    {
        try {
            //Sentencia sql
            $sql = "
                SELECT 
                    id,
                    tema
                FROM 
                    generos
                ORDER BY
                    tema ASC        
            ;";

            //sentencia preparada
            $stmt = $this->pdo->prepare($sql);

            // establezco tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_KEY_PAIR);

            // ejectuto
            $stmt->execute();

            // devuelvo array de tipo clave/valor
            return $stmt->fetchAll();


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
        método: get_generos_asociados()
        descripcion: devuelve un array con los géneros asociados a un libro

        Parámetros:
        - $generos_id - lista indice de géneros asociados a un libro
    */

    public function get_generos_asociados($generos_id)
    {
        try {

            //Defino el areray de nombres asociados
            $array_nombre_generos = [];

            //Obtengo la lista de generos disponibles
            $array_generos = $this->get_generos();

            //Recorro la lista y añado el valor a  $array_nombre_generos
            foreach (explode(',', $generos_id) as $key) {
                $array_nombre_generos[] = $array_generos[$key];
            }

            //Ordena el array alfabéticamente
            sort($array_nombre_generos,  $sort_flags = SORT_STRING );

            
            return $array_nombre_generos;


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
        método: get_autores()
        descripcion: devuelve un pdostatement par clave valor
    */

    public function get_autores()
    {
        try {

            //Sentencia sql
            $sql = "
            SELECT 
                id,
                nombre
            FROM 
                autores
            ORDER BY
                nombre ASC        
        ;";

            //sentencia preparada
            $stmt = $this->pdo->prepare($sql);

            // establezco tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_KEY_PAIR);

            // ejectuto
            $stmt->execute();

            // devuelvo array de tipo clave/valor
            return $stmt->fetchAll();


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
        método: get_editoriales()
        descripcion: devuelve un pdostatement par clave valor
    */

    public function get_editoriales()
    {
        try {
            //sentencia sql
            $sql = "
            SELECT 
                id,
                nombre
            FROM 
                editoriales
            ORDER BY
                nombre ASC        
        ;";

            //sentencia preparada
            $stmt = $this->pdo->prepare($sql);

            // establezco tipo de fetch
            $stmt->setFetchMode(PDO::FETCH_KEY_PAIR);

            // ejectuto
            $stmt->execute();

            // devuelvo array de tipo clave/valor
            return $stmt->fetchAll();


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
        descripcion: permite añadir un nuevo libro a la tabla
        
        parámetros:

            - $libro - objeto de la clase libro

    */
    public function create(Class_libro $libro)
    {
        try {

            // sentencia sql
            $sql = "
            INSERT INTO 
                libros(
                    titulo,
                    precio,
                    stock,
                    fecha_edicion,
                    isbn,
                    autor_id, 
                    editorial_id, 
                    generos_id
                    )
            VALUES    (
                :titulo,
                :precio,
                :stock,
                :fecha_edicion,
                :isbn,
                :autor_id, 
                :editorial_id, 
                :generos_id
                    )                            
            ";

            // ejecuto la sentenecia preprada
            $stmt = $this->pdo->prepare($sql);

            // vinculación de parámetros
            $stmt->bindParam(':titulo', $libro->titulo, PDO::PARAM_STR, 100 );
            $stmt->bindParam(':precio', $libro->precio, PDO::PARAM_STR, 10);
            $stmt->bindParam(':stock', $libro->stock, PDO::PARAM_INT);
            $stmt->bindParam(':fecha_edicion', $libro->fecha_edicion, PDO::PARAM_STR, 10);
            $stmt->bindParam(':isbn', $libro->isbn, PDO::PARAM_INT);
            $stmt->bindParam(':autor_id', $libro->autor_id, PDO::PARAM_INT);
            $stmt->bindParam(':editorial_id', $libro->editorial_id, PDO::PARAM_INT);
            $stmt->bindParam(':generos_id', $libro->generos_id, PDO::PARAM_STR,50);

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
        método: order()
        descripcion: devuelve un objeto de la clase pdostatement con los 
        detalles de los libros  ordenados por un criterio.

        Parámetros:

            - criterio: posición de la columna en la tabla libros
                        por la que quiero ordenar
    */

    public function order(int $criterio)
    {

        try {

            // sentencia sql
            $sql = " 
           SELECT 
                    li.id,
                    li.titulo,
                    au.nombre as autor,
                    ed.nombre as editorial,
                    fecha_edicion,
                    generos_id,
                    stock,
                    precio
                FROM 
                    libros li
                INNER JOIN  
                    autores au
                ON 
                    au.id = li.autor_id
                INNER JOIN 
                    editoriales ed
                ON 
                    ed.id = li.editorial_id
                ORDER BY
                    :criterio
                ASC
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

}
