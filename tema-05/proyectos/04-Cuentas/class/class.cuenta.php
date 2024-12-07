<?php

/*
    archivo:class.cuenta.php
    titulo: define la clase cuenta sin encapsulamiento
*/

class Class_cuenta
{

    public $id;
    public $num_cuenta;
    public $cliente;
    public $fecha_alta;
    public $fecha_ul_mov;
    public $saldo;

    public function __construct(
        $id = null,
        $num_cuenta = null,
        $cliente = null,
        $fecha_alta = null,
        $fecha_ul_mov = null,
        $saldo = null
    ) {
        $this->id = $id;
        $this->num_cuenta = $num_cuenta;
        $this->cliente = $cliente;
        $this->fecha_alta = $fecha_alta;
        $this->fecha_ul_mov = $fecha_ul_mov;
        $this->saldo = $saldo;
    }
}
