@extends('layouts.default')

@section('content')
    <h1>Veículos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Código</th>
            <th>Fornecedor</th>
            <th>Aplicação</th>
            <th>Estoque</th>
            <th>Ação</th>
        </thead>

        <tbody>
            @foreach($pecas as $peca)
                <tr>
                    <td>{{ $peca->nome }}</td>
                    <td>{{ $peca->codigo }}</td>
                    <td>{{ $peca->fornecedor }}</td>
                    <td>{{ $peca->aplicacao }}</td>
                    <td>{{ $peca->estoque }}</td>
                    <td>
                        <a href="{{ route('pecas.edit', ['id' => $peca->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return confirmaExclusao({{$peca->id}});" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    {{ $pecas->links("pagination::bootstrap-4") }}

    <a href="{{ route('pecas.create', []) }}" class="btn-sm btn-info">Adicionar</a>

@stop

@section('table-delete')
"pecas"
@endsection