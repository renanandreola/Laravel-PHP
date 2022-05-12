@extends('layouts.default')

@section('content')
    <h1>Clientes</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Cep</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Numero</th>
        </thead>

        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->idade }}</td>
                    <td>{{ $cliente->sexo }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->cep }}</td>
                    <td>{{ $cliente->rua }}</td>
                    <td>{{ $cliente->bairro }}</td>
                    <td>{{ $cliente->cidade }}</td>
                    <td>{{ $cliente->estado }}</td>
                    <td>{{ $cliente->numero }}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>
@endsection
