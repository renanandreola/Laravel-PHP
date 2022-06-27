@extends('layouts.default')

@section('content')
    <h1>Orcamentos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Número</th>
            <th>Veiculo</th>
            <th>Cliente</th>
            <th>Data</th>
            <th>Itens</th>
            <th>Valor</th>
            <th>Ação</th>
        </thead>

        <tbody>
            @foreach($orcamentos as $orcamento)
                <tr>
                    <td>{{ $orcamento->numero }}</td>
                    <td>{{ $orcamento->veiculo->placa }}</td>
                    <td>{{ $orcamento->veiculo->cliente->nome }}</td>
                    <td>{{ Carbon\Carbon::parse($orcamento->data)->format('d/m/Y') }}</td>
                    {{-- <td>{{ $orcamento }}</td> --}}
                    <td>
                        @foreach($orcamento->pecas as $p)
                            <li>{{ $p->peca->nome }}</li>
                        @endforeach
                    </td>
                    <td>R${{ $orcamento->valor }},00</td>
                    <td>
                        <a href="{{ route('orcamentos.edit', ['id' => $orcamento->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return confirmaExclusao({{$orcamento->id}});" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    {{ $orcamentos->links("pagination::bootstrap-4") }}

    <a href="{{ route('orcamentos.create', []) }}" class="btn-sm btn-info">Adicionar</a>

@stop

@section('table-delete')
"orcamentos"
@endsection