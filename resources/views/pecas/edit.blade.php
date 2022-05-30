@extends('adminlte::page')

@section('content')
    <h1>Editando peça: {{$peca->nome}}</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["pecas.update", "id" => $peca->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome',  $peca->nome, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('codigo', 'Código:') !!}
            {!! Form::text('codigo',  $peca->codigo, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fornecedor', 'Fornecedor:') !!}
            {!! Form::text('fornecedor',  $peca->fornecedor, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('aplicacao', 'Aplicacao:') !!}
            {!! Form::text('aplicacao',  $peca->aplicacao, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estoque', 'Estoque:') !!}
            {!! Form::text('estoque',  $peca->estoque, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar peça', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
