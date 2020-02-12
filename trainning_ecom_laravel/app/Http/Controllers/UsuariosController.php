<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function listar(){
        $usuarios = ["Marco", "Rafa", "Eventon"];        
        //return view('usuarios.index', ['usuarios'=>$usuarios]);
        return view('usuarios.index', compact('usuarios'));
    }

    public function listarComFiltros(Request $request){
        var_dump($request->url());
        var_dump($request->query('nome'));
    }
}
