<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;

// Ruta principal
Route::get('/', function () {
    return view('welcome'); 
});

// Rutas para Técnicos
Route::resource('tecnicos', TecnicoController::class);

// Rutas para Equipos
Route::resource('equipos', EquipoController::class);

// Rutas para Servicios
Route::resource('servicios', ServicioController::class);

// Rutas para Clientes
Route::resource('clientes', ClienteController::class);

// Rutas para Marcas
Route::resource('marcas', MarcaController::class);