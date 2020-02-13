<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;

class PerfisController extends Controller
{

    public function index() {
        $perfis = Perfil::query()
                    ->orderBy('nome')
                    ->get();

        return view('perfis.index', compact('perfis'));
    }
    
    public function create()
    {
        return view('perfis.create');
    }

    public function store(Request $request){
        
        $perfil = new Perfil(); // Actived Record Pattern
        $perfil->nome = $request->nome; // $_POST["nome"]
        $perfil->save();

        $request->session()
        ->flash(
            'mensagem',
            "Perfil {$perfil->nome} criado com sucesso."
        );

        return redirect()->route('listar_perfis');

    }

    public function destroy(Request $request){
        Perfil::destroy($request->id);

        return redirect()->route('listar_perfis')

    }
}
