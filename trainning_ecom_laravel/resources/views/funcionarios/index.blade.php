@extends('layout')

@section('cabecalho')
    Gestão de Funcionário
@endsection

@section('conteudo')

@include('shared/mensagem') 

<a href="{{ route('criar_funcionario') }}" class="btn btn-success mb-2">Adicionar</a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Pai</th>
        <th scope="col">Nome Mae</th>
        <th scope="col">Ações</th>        
      </tr>
    </thead>
    <tbody>
        @foreach($funcionarios as $funcionario)
            <tr>
                <th scope="row">{{$funcionario->id}}</th>
                <td>{{$funcionario->nomePai}}</td>
                <td>{{$funcionario->nomeMae}}</td>
                <td>
                    <form method="post" action="/funcionarios/{{ $funcionario->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>    
        @endforeach
    </tbody>
  </table>

@endsection