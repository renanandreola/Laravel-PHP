@extends('adminlte::page')

@section('content')
    <h1>Novo veículo</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'veiculos.store']) !!}
        <div class="form-group">
            {!! Form::label('cliente_id', 'Cliente:') !!}
            {!! Form::select('cliente_id',
                            \App\Models\Cliente::orderBy('nome')->pluck('nome', 'id')->toArray(),
                            null, ['class' => 'form-control', 'required']
            ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('placa', 'Placa:') !!}
            {!! Form::text('placa', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cor', 'Cor:') !!}
            {!! Form::text('cor', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('marca', 'Marca:') !!}
            {!! Form::text('marca', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('modelo', 'Modelo:') !!}
            {!! Form::text('modelo', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('motorizacao', 'Motorizacao:') !!}
            {!! Form::text('motorizacao', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ano', 'Ano:') !!}
            {!! Form::text('ano', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar veículo', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
