<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Libreria;

Route::get('/libreria', [Libreria::class, 'listar']);
Route::post('/libreria', [Libreria::class, 'guardar']);
Route::put('/libreria/{id}/genero/{genero}/descuento/{descuento}', [Libreria::class, 'Mazivactualizacion']);
Route::patch('/libreria/{id}/titulo/{titulo}', [Libreria::class, 'actualizar']);
Route::delete('/libreria/{id}', [Libreria::class, 'eliminar']);
