@extends('adminlte::page')

@section('content')
    <h1>Editando funcionário: {{ $funcionario->nome }}</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["funcionarios.update", "id" => $funcionario->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $funcionario->nome, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('funcao', 'Função:') !!}
            {!! Form::text('funcao', $funcionario->funcao, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', $funcionario->cpf, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('idade', 'Idade:') !!}
            {!! Form::text('idade', $funcionario->idade, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::text('sexo', $funcionario->sexo, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', $funcionario->telefone, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $funcionario->email, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cep', 'Cep:') !!}
            {!! Form::text('cep', $funcionario->cep, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rua', 'Rua:') !!}
            {!! Form::text('rua', $funcionario->rua, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', $funcionario->bairro, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cidade', 'Cidade:') !!}
            {!! Form::text('cidade', $funcionario->cidade, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estado', 'Estado:') !!}
            {!! Form::text('estado', $funcionario->estado, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numero', 'Numero:') !!}
            {!! Form::text('numero', $funcionario->numero, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar funcionário', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
