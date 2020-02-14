<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\User;
use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FuncionariosController extends Controller
{
    public function index(){
        $funcionarios = Funcionario::query()
                     ->orderBy('id')
                    ->get();

        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create(){
        $perfis = Perfil::all();
        return view('funcionarios.create', compact('perfis'));
    }

    public function store(Request $request){

        DB::beginTransaction();
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']); // Poderia utilizar o MD5, mas utilizamos o Hash.make
        $user = User::create($data);

        $funcionario = new Funcionario();
        $funcionario->nomeMae = $request->nomeMae;
        $funcionario->nomePai = $request->nomePai;
        $funcionario->perfil_id = $request->perfil_id;
        $funcionario->user_id = $user->id;

        $funcionario->save();

        DB::commit();
        
        request()->session()
        ->flash(
            "mensagem",
            "Funcionario {$funcionario->id} criado com sucesso."
        );

        return redirect()->route('listar_funcionarios');
    }

    public function destroy(Request $request){
        Funcionario::destroy($request->id);

        request()->session()
        ->flash(
            "mensagem",
            "Funcionario {$request->id} excluído com sucesso."
        );

        return redirect()->route('listar_funcionarios');
    }
}
