<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Libreria;

Route::get('/libreria', [Libreria::class, 'listarLibros']);
Route::post('/libreria', [Libreria::class, 'nuevoLibro']);
Route::put('/libreria/{id}/genero/{genero}/descuento/{descuento}', [Libreria::class, 'DescuentoGenero']);
Route::put('/libreria/vN/{id}/genero/{genero}/descuento/{descuento}', [Libreria::class, 'DescuentoGeneroN']);
Route::patch('/libreria/{id}/titulo/{titulo}', [Libreria::class, 'actualizarTitulo']);
Route::delete('/libreria/{id}', [Libreria::class, 'eliminarLibro']);
