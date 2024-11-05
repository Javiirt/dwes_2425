<?php

class Producto
{
    private $id;
    private $titulo;
    private $precio;
    private $nombreAutor;
    private $apellidosAutor;

    static $portada = 'Ninguna';

    function __construct(
        $id = null,
        $titulo = null,
        $precio = null,
        $nombreAutor = null,
        $apellidosAutor = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->nombreAutor = $nombreAutor;
        $this->apellidosAutor = $apellidosAutor;
        $this->precio = $precio;
    }
    public function getNombreAutor()
    {
        return $this->nombreAutor;
    }
    public function getApellidosAutor()
    {
        return $this->apellidosAutor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($pTitulo)
    {
        $this->titulo = $pTitulo;
    }
    public function getPrecio()
    {
        return $this->precio;
    }

    static function mostrarPortada()
    {
        echo 'Portada: ' . self::$portada;
    }
}


#Definicion de la clase hija
class Libro extends Producto
{
    private $numPaginas;
    private $editorial;


    function __construct(
        $id = null,
        $titulo = null,
        $precio = null,
        $nombreAutor = null,
        $apellidosAutor = null,
        $numPaginas = null,
        $editorial = null
    ) {
        //Llama al constructor padre
        parent::__construct(
            $id,
            $titulo,
            $precio,
            $nombreAutor,
            $apellidosAutor
        );
        $this->numPaginas = $numPaginas;
        $this->editorial = $editorial;
    }

    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    public function getResumen()
    {
        $resumen = "Titulo: " . $this->getTitulo() . "\n";
        $resumen .= "Precio: " . $this->getPrecio() . "\n";
        $resumen .= "Autor: " . $this->getNombreAutor() . " " . $this->getApellidosAutor() . "\n";
        $resumen .= "Núm. páginas: " . $this->getNumPaginas() . "\n";
        $resumen .= "Editorial: " . $this->editorial;
        return $resumen;
    }

    public function muestraTitulo()
    {
        echo $this->getTitulo() . ' , ' . $this->editorial;
    }

}


