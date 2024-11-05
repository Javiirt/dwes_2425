<?php

/**
 * clase: class.artiuclo.php 
 * 
 * Propiedades o atributos de la clase:
 * - id
 * - descripcion
 * - modelo
 * - marca 
 * - categorias []
 * - unidades
 * - precio
 * 
 * 
 * Métodos de la clase:
 * - constructor. Permitirá que se le pasen los valores de las propiedades. 
 * - getters y setters
 * 
 * */

class Class_articulo
{
    #Atributos de la clase
    private $id;
    private $descripcion;
    private $modelo;
    private $marca;
    private $categorias;
    private $unidades;
    private $precio;


    #Constructor
    //Método que se ejecuta automaticamente cuando se crea un objeto a partir de dicha clase
    public function __construct(
        $id = null,
        $descripcion = null,
        $modelo = null,
        $marca = null,
        $categorias = [],
        $unidades = 0,
        $precio = 0
    ) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->categorias = $categorias;
        $this->unidades = $unidades;
        $this->precio = $precio;
    }


    #Métodos get y set    
	public function getId() {
		return $this->id;
	}

	public function setId($value) {
		$this->id = $value;
	}

	public function getDescripcion() {
		return $this->descripcion;
	}

	public function setDescripcion($value) {
		$this->descripcion = $value;
	}

	public function getModelo() {
		return $this->modelo;
	}

	public function setModelo($value) {
		$this->modelo = $value;
	}

	public function getMarca() {
		return $this->marca;
	}

	public function setMarca($value) {
		$this->marca = $value;
	}

	public function getCategorias() {
		return $this->categorias;
	}

	public function setCategorias($value) {
		$this->categorias = $value;
	}

	public function getUnidades() {
		return $this->unidades;
	}

	public function setUnidades($value) {
		$this->unidades = $value;
	}

	public function getPrecio() {
		return $this->precio;
	}

	public function setPrecio($value) {
		$this->precio = $value;
	}
}