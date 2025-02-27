<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Listado de usuarios:';
    }

    public function show($id){
        return "Detalle del usuario: {$id}";
    }	

    public function create(){
        return "Crear usuario";
    }

    public function edit($id){
        return "Editar usuario: {$id}";
    }

    public function store($request){
        return "Guardar ususario";
    }

    public function update($id, $request){
        return "Actualizar usuario: {$id}";
    }

    public function destroy($id){
        return "Eliminar usuario: {$id}";
    }
}
