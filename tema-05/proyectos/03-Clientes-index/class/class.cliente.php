<?php

/*
        archivo:class.cliente.php
        descripcion: define la clase clientes sin encapsulamiento
    */

class Class_cliente
{

        public $id;
        public $nombre;
        public $apellidos;
        public $email;
        public $telefono;
        public $direccion;
        public $poblacion;
        public $provincia;
        public $nacionalidad;
        public $dni;
        public $fechaNac;
        public $id_curso;


        public function __construct(
                $id = null,
                $nombre = null,
                $apellidos = null,
                $email = null,
                $telefono = null,
                $direccion = null,
                $poblacion = null,
                $provincia = null,
                $nacionalidad = null,
                $dni = null,
                $fechaNac = null,
                $id_curso = null
        ) {
                $this->id = $id;
                $this->nombre = $nombre;
                $this->apellidos = $apellidos;
                $this->email = $email;
                $this->telefono = $telefono;
                $this->direccion = $direccion;
                $this->poblacion = $poblacion;
                $this->provincia = $provincia;
                $this->nacionalidad = $nacionalidad;
                $this->dni = $dni;
                $this->fechaNac = $fechaNac;
                $this->id_curso = $id_curso;
        }

        public function edad()
        {
                $fechaActual = new DateTime();
                $fechaNacimiento = new DateTime($this->fechaNac);
                $edad = $fechaNacimiento->diff($fechaActual);
                return $edad->y;
        }
}
