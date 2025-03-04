<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Ruta para listar usuarios
Route::get('/users', [UserController::class, 'index']);

// Ruta para mostrar un usuario específico
Route::get('/users/{id}', [UserController::class, 'show']);

// Ruta para crear un nuevo usuario
Route::get('/users/create', [UserController::class, 'create']);

// Ruta para editar un usuario específico
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

// Ruta para almacenar un nuevo usuario
Route::post('/users', [UserController::class, 'store']);

// Ruta para actualizar un usuario específico
Route::put('/users/{id}', [UserController::class, 'update']);

// Ruta para eliminar un usuario específico
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// Ruta para el controlador UserController
Route::resource('clients', UserController::class);

// Ruta para el controlador HomeController
Route::get('/', HomeController::class);

// Ruta para el controlador ProductController
Route::resource('products', ProductController::class);

