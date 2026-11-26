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
    public function actualizar(Request $request, $id) {}
    public function eliminar($id) {}
    public function Mazivactualizacion(Request $request) {}
}
