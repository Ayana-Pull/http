<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libreria extends Controller
{
    public function listar(Request $request)
    {
        $titulo = $request->input('titulo');
        $autor = $request->input('autor');
        return response()->json([
            'titulo' => $titulo,
            'autor' => $autor
        ], 200);
    }
    public function guardar(Request $request)
    {
        $titulo = $request->Json('titulo');
        $autor = $request->Json('autor');
        return response()->Json([
            'titulo' => $titulo,
            'autor' => $autor
        ], 201);
    }
    public function actualizar(Request $request)
    {
        $id = $request->route('id');
        $titulo = $request->route('titulo');
        return response()->Json([
            'id' => $id,
            'titulo' => $titulo
        ], 200);
    }
    public function eliminar($id) {}
    /* normal version
    public function Mazivactualizacion(Request $request)
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
*/

    public function Mazivactualizacion(Request $request)
    {
        $libros = $request->Json()->all();

        return response()->Json($libros, 200);
    }
}
