<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libreria extends Controller
{
    public function listarLibros(Request $request)
    {
        $titulo = $request->input('titulo');
        $autor = $request->input('autor');
        return response()->json([
            'titulo' => $titulo,
            'autor' => $autor
        ], 200);
    }
    public function nuevoLibro(Request $request)
    {
        $titulo = $request->Json('titulo');
        $autor = $request->Json('autor');
        return response()->Json([
            'titulo' => $titulo,
            'autor' => $autor
        ], 201);
    }
    public function actualizarTitulo(Request $request)
    {
        $id = $request->route('id');
        $titulo = $request->route('titulo');
        return response()->Json([
            'id' => $id,
            'titulo' => $titulo
        ], 200);
    }
    public function eliminarLibro(Request $request)
    {
        $id = $request->Json()->get('id');
        return response()->Json([
            'id' => $id
        ], 200);
    }
    // normal version
    public function DescuentoGeneroN(Request $request)
    {
        $id = $request->route('id');
        $genero = $request->route('genero');
        $descuento = $request->route('descuento');
        return response()->Json([
            'id' => $id,
            'genero' => $genero,
            'descuento' => $descuento
        ], 200);
    }


    public function DescuentoGenero(Request $request)
    {
        $libros = $request->Json()->all();

        return response()->Json($libros, 200);
    }
}
