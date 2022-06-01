@extends('layouts.default')

@section('content')
    <h1>Funcionários</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Função</th>
            <th>Cpf</th>
            <!-- <th>Idade</th> -->
            <!-- <th>Sexo</th> -->
            <!-- <th>Telefone</th> -->
            <th>Email</th>
            <!-- <th>Cep</th> -->
            <!-- <th>Rua</th> -->
            <!-- <th>Bairro</th> -->
            <!-- <th>Cidade</th> -->
            <!-- <th>Estado</th> -->
            <!-- <th>Numero</th> -->
            <th>Ação</th>
        </thead>

        <tbody>
            @foreach($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->funcao }}</td>
                    <td>{{ $funcionario->cpf }}</td>
                    <!-- <td>{{ $funcionario->idade }}</td> -->
                    <!-- <td>{{ $funcionario->sexo }}</td> -->
                    <!-- <td>{{ $funcionario->telefone }}</td> -->
                    <td>{{ $funcionario->email }}</td>
                    <!-- <td>{{ $funcionario->cep }}</td> -->
                    <!-- <td>{{ $funcionario->rua }}</td> -->
                    <!-- <td>{{ $funcionario->bairro }}</td> -->
                    <!-- <td>{{ $funcionario->cidade }}</td> -->
                    <!-- <td>{{ $funcionario->estado }}</td> -->
                    <!-- <td>{{ $funcionario->numero }}</td> -->
                    <td>
                        <a href="{{ route('funcionarios.edit', ['id' => $funcionario->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return confirmaExclusao({{$funcionario->id}});" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    {{ $funcionarios->links("pagination::bootstrap-4") }}

    <a href="{{ route('funcionarios.create', []) }}" class="btn-sm btn-info">Adicionar</a>

@stop

@section('table-delete')
"funcionarios"
@endsection