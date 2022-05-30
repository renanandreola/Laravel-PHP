@extends('layouts.default')

@section('content')
    <h1>Veículos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Cliente</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Ação</th>
        </thead>

        <tbody>
            @foreach($veiculos as $veiculo)
                <tr>
                    <td>{{ isset($veiculo->cliente->nome) ? $veiculo->cliente->nome : "Cliente não informado" }}</td>
                    <td>{{ $veiculo->marca }}</td>
                    <td>{{ $veiculo->modelo }}</td>
                    <td>{{ $veiculo->placa }}</td>
                    <td>
                        <a href="{{ route('veiculos.edit', ['id' => $veiculo->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return confirmaExclusao({{$veiculo->id}});" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    {{ $veiculos->links("pagination::bootstrap-4") }}

    <a href="{{ route('veiculos.create', []) }}" class="btn-sm btn-info">Adicionar</a>

@stop

@section('table-delete')
"veiculos"
@endsection