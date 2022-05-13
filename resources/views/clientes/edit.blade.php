@extends('adminlte::page')

@section('content')
    <h1>Editando cliente: {{ $cliente->nome }}</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["clientes.update", "id" => $cliente->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $cliente->nome, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', $cliente->cpf, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('idade', 'Idade:') !!}
            {!! Form::text('idade', $cliente->idade, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::text('sexo', $cliente->sexo, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', $cliente->telefone, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $cliente->email, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cep', 'Cep:') !!}
            {!! Form::text('cep', $cliente->cep, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rua', 'Rua:') !!}
            {!! Form::text('rua', $cliente->rua, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', $cliente->bairro, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cidade', 'Cidade:') !!}
            {!! Form::text('cidade', $cliente->cidade, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estado', 'Estado:') !!}
            {!! Form::text('estado', $cliente->estado, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numero', 'Numero:') !!}
            {!! Form::text('numero', $cliente->numero, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar cliente', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
