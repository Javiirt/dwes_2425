<?php

/**
 * clase: class.artiuclo.php 
 * 
 * Crear en un fichero class.noticia.php la clase noticia. Dicho archivo php quedará almacenado en class de nuestro proyecto. 
 * 
 * La clase noticia se tendrá que crear a partir de los siguientes atributos:
 * 
 * -id
 * -titulo
 * -extracto (o Introducción 2 o 3 líneas)
 * -cuerpo (contenido o texto de la noticia, formado por array de párrafos)
 * -autor
 * -fechaEdicion
 * -fotografia
 * -epigrafe (comentario a cerca de la fotografía)
 * 
 * 
 * Crear en dicha clase los siguientes métodos: 
 * - __construct. Inicializa todos los atributos de la clase a null
 * - setterrs y getters
 * - método inParrafo(), que añade un párrafo al texto de la noticia.
 * - método showTexto(), que muestra todo el texto de una noticia.
 * 
 * */

class Class_noticia
{
    #Atributos de la clase
    private $id;
    private $titulo;
    private $extracto;
    private $cuerpo;
    private $autor;
    private $fechaEdicion;
    private $fotografia;
    private $epigrafe;


    #Constructor
    //Método que se ejecuta automaticamente cuando se crea un objeto a partir de dicha clase
    public function __construct(
        $id = null,
        $titulo = null,
        $extracto = null,
        $cuerpo = null,
        $autor = null,
        $fechaEdicion = null,
        $fotografia = null,
        $epigrafe = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->extracto = $extracto;
        $this->cuerpo = $cuerpo;
        $this->autor = $autor;
        $this->fechaEdicion = $fechaEdicion;
        $this->fotografia = $fotografia;
        $this->epigrafe = $epigrafe;
    }


    #Métodos get y set  
    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($value)
    {
        $this->titulo = $value;
    }

    public function getExtracto()
    {
        return $this->extracto;
    }

    public function setExtracto($value)
    {
        $this->extracto = $value;
    }

    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    public function setCuerpo($value)
    {
        $this->cuerpo = $value;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($value)
    {
        $this->autor = $value;
    }

    public function getFechaEdicion()
    {
        return $this->fechaEdicion;
    }

    public function setFechaEdicion($value)
    {
        $this->fechaEdicion = $value;
    }

    public function getFotografia()
    {
        return $this->fotografia;
    }

    public function setFotografia($value)
    {
        $this->fotografia = $value;
    }

    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    public function setEpigrafe($value)
    {
        $this->epigrafe = $value;
    }


    #método inParrafo(), que añade un párrafo al texto de la noticia.
    public function inParrafo($value)
    {
        $this->cuerpo[] = $value;
    }

    #método showTexto(), que muestra todo el texto de una noticia.
    public function showTexto($value)
    {
        $texto = "Título: $this->titulo \n";

        $texto .= "Extracto: $this->extracto \n";

        $texto .= "Noticia: \n";

        foreach ($this->cuerpo as $parrafo) {
            $texto .= "- $parrafo \n";
        }

        $texto .= "Autor: $this->autor \n";
        $texto .= "Fecha de edición: $this->fechaEdicion \n";
        
        return $texto;
    }
}
