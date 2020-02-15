@extends('layout')

@section('cabecalho')
    Gestão de Funcionário
@endsection

@section('conteudo')

@include('shared/mensagem') 

<a href="{{ route('criar_funcionario') }}" class="btn btn-success mb-2">Adicionar</a>
<a href="/funcionarios/csv" class="btn btn-success mb-2" style="float: right"><i class="fas fa-file-excel"> DOWNLOAD</i></a>
<a href="/funcionarios/email" class="btn btn-success mb-2" style="float: right; margin-right: 10px"><i class="fas fa-file-excel"> Email</i></a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Perfil</th>
        <th scope="col">Ações</th>        
      </tr>
    </thead>
    <tbody>
        @foreach($funcionarios as $funcionario)
            <tr>
                <th scope="row">{{$funcionario->id}}</th>
                <td>{{$funcionario->nome}}</td>
                <td>{{$funcionario->email}}</td>
                <td>{{$funcionario->perfil}}</td>
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
    <tfoot>
        <tr>
            <td colspan="5">
                <ul class="pagination" style="display: flex;justify-content: center;">
                    <li class="page-item"><a class="page-link" href="/funcionarios/?to={{$pagination['from']}}&from={{$pagination['to']}}&per_page=10">Anterior</a></li>
 
                    @for ($i = 1; $i <= $pagination['total']; $i++)
                        <li class="page-item @if($i == $pagination['to']) active @endif"><a class="page-link" href="/funcionarios/?to={{$i}}&from={{$pagination['to']}}&per_page=10">{{$i}}</a></li>
                    @endfor
                    <li class="page-item"><a class="page-link" href="/funcionarios/?to={{$pagination['to'] + 1}}&from={{$pagination['to']}}&per_page=10">Próximo</a></li>
                </ul>
            </td>
        </tr>
    </tfoot>
  </table>

@endsection