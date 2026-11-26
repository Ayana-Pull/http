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
    public function store(Request $request) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
    public function masiveupdate(Request $request) {}
}
