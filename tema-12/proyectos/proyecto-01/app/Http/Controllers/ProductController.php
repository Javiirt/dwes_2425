<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Listado de productos";
    }

    public function create()
    {
        return "Formulario para crear un producto";
    }

    public function store(Request $request)
    {
        return "Guardando el producto en la base de datos";
    }

    public function show($id)
    {
        return "Mostrando detalles del producto con ID: $id";
    }

    public function edit($id)
    {
        return "Formulario para editar el producto con ID: $id";
    }

    public function update(Request $request, $id)
    {
        return "Actualizando el producto con ID: $id";
    }

    public function destroy($id)
    {
        return "Eliminando el producto con ID: $id";
    }
}