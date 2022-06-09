@extends('layouts.default')

@section('content')
    <h1>Ordens de Serviço</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Número</th>
            <th>Veiculo</th>
            <th>Cliente</th>
            <th>Data</th>
            <th>Observações</th>
            <th>Ação</th>
        </thead>

        <tbody>
            @foreach($servicos as $servico)
                <tr>
                    <td>{{ $servico->numero }}</td>
                    <td>{{ $servico->veiculo->placa }}</td>
                    <td>{{ $servico->veiculo->cliente->nome }}</td>
                    <td>{{ Carbon\Carbon::parse($servico->data)->format('d/m/Y') }}</td>
                    {{-- <td>{{ $servico->data }}</td> --}}
                    <td>{{ $servico->observacoes }}</td>
                    <td>
                        <a href="{{ route('servicos.edit', ['id' => $servico->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return confirmaExclusao({{$servico->id}});" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    {{ $servicos->links("pagination::bootstrap-4") }}

    <a href="{{ route('servicos.create', []) }}" class="btn-sm btn-info">Adicionar</a>

@stop

@section('table-delete')
"servicos"
@endsection