@extends('layout')

@section('cabecalho')
    Adicionar Funcionário
@endsection

@section('conteudo')
<form method="post">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" required class="form-control">
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" required min="1" class="form-control">
    </div>

    <div class="form-group">
        <label for="nome" class="">Nome da Mãe</label>
        <input type="text" class="form-control" name="nomeMae" id="nomeMae">
    </div>

    <div class="form-group">
        <label for="nome" class="">Nome do Pai</label>
        <input type="text" class="form-control" name="nomePai" id="nomePai">
    </div>

    <div class="form-group">
        <label for="perfil_id">Perfil:</label>
        <select class="form-control" id="perfil_id" name="perfil_id">
            @foreach ($perfis as $perfil)
                <option value="{{$perfil->id}}">{{$perfil->nome}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection