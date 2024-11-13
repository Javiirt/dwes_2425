<?php

/**
 * clase: Class_tabla_articulos.php 
 * 
 * Propiedades o atributos de la clase:
 * - tabla
 * 
 * Métodos de la clase:  
 * - constructor. Inicializa la tabla a un array vacío.
 * - getters() y setters()
 * - create() - añade un nuevo objeto a la tabla.
 * - read() - Devuelve un objeto a partir del índice
 * - update() - Actualiza los detalles de un articulo, los parámetros son el objeto usuario y el índice.
 * - delete() - Elimina un objeto a partir del índice.
 * 
 * Otros métodos de la clase:  
 * - propiedadesObjeto(). Devuelve un array con las propiedades que tiene un objeto
 * 
 * Otros métodos opcionales:  
 * - ordenar(). Ordena la tabla usando como criterio una de sus propiedades.
 * - filtrar(). Filtra la tabla a partir de una expresión.
 * 
 */

include 'Class_articulo.php';

class Class_tabla_articulos
{
    #Atributos de la clase
    private $tabla;


    #Constructor
    //Método que se ejecuta automaticamente cuando se crea un objeto a partir de dicha clase
    public function __construct(
        $tabla = []
    ) {
        $this->tabla = $tabla;
    }

    #Métodos get y set
    public function getTable()
    {
        return $this->tabla;
    }

    public function setTable($value)
    {
        $this->tabla = $value;
    }

    #create() - añade un nuevo objeto a la tabla.
    public function create(Class_articulo $value)
    {
        $this->tabla[] = $value;
        return  $this->tabla;
    }

    #read() - Devuelve un objeto a partir del índice
    public function read($id)
    {
        $objeto = null;

        foreach ($this->tabla as $value) {
            if ($value->getId() == $id) {
                $objeto = $value;
            }
        }
        return $objeto;
    }


    #update() - Actualiza los detalles de un articulo, los parámetros son el objeto usuario y el índice.
    public function update(Class_articulo $articulo, $id)
    {
        foreach ($this->tabla as $key => $value) {
            if ($value->getId() == $id) {
                $this->tabla[$key] = $articulo;
            }
        }
        return $this->tabla;
    }

    #delete() - Elimina un objeto a partir del índice.
    public function delete($id)
    {
        foreach ($this->tabla as $key => $value) {
            if ($value->getId() == $id) {
                unset($this->tabla[$key]);
                break;
            }
        }
        return $this->tabla;
    }

    #propiedadesObjeto(). Devuelve un array con las propiedades que tiene un objeto
    public function propiedadesObjeto($id)
    {
        $registro = $this->read($id);

        $array = [];
        $array[] = $registro->getId();
        $array[] = $registro->getDescripcion();
        $array[] = $registro->getModelo();
        $array[] = $registro->getMarca();
        $array[] = $registro->getCategorias();
        $array[] = $registro->getUnidades();
        $array[] = $registro->getPrecio();


        return $array;
    }


    #ordenar(). Ordena la tabla usando como criterio una de sus propiedades.
    public function ordenar($criterio)
    {
        $aux = [];

        foreach ($this->tabla as $key => $articulo) {
            switch ($criterio) {
                case 'id':
                    $aux[] = $articulo->getId();
                    break;
                case 'descripcion':
                    $aux[] = $articulo->getDescripcion();
                    break;
                case 'modelo':
                    $aux[] = $articulo->getModelo();
                    break;
                case 'marca':
                    $aux[] = $articulo->getMarca();
                    break;
                case 'unidades':
                    $aux[] = $articulo->getUnidades();
                    break;
                case 'precio':
                    $aux[] = $articulo->getPrecio();
                    break;
                default:
                    break;
            }
        }

        array_multisort($aux, SORT_ASC, $this->tabla);

        return $this->tabla;
    }

    #filtrar(). Filtra la tabla a partir de una expresión.
    public function filtrar($expresion)
    {
        $aux = [];

        foreach ($this->tabla as $registro) {
            // Comprobar si alguna propiedad es exactamente igual a la expresión
            if (
                $registro->getId() == $expresion ||
                $registro->getDescripcion() == $expresion ||
                $registro->getModelo() == $expresion ||
                $registro->getMarca() == $expresion ||
                $registro->getUnidades() == $expresion ||
                $registro->getPrecio() == $expresion
            ) {
                // Si encuentra coincidencia, añade el registro a $aux
                $aux[] = $registro;
            }
        }

        return  $aux;
    }
}
