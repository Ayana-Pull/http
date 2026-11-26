<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Libreria;

Route::get('/libreria', [Libreria::class, 'listar']);
Route::post('/libreria', [Libreria::class, 'store']);
Route::put('/libreria', [Libreria::class, 'masiveupdate']);
Route::patch('/libreria/{id}', [Libreria::class, 'update']);
Route::delete('/libreria/{id}', [Libreria::class, 'destroy']);
