@extends('adminlte::page')

@section('content')
    <h1>Editando veículo: {{$veiculo->placa}}</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["veiculos.update", "id" => $veiculo->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('cliente_id', 'Cliente:') !!}
            {!! Form::select('cliente_id',  
                            \App\Models\Cliente::orderBy('nome')->pluck('nome', 'id')->toArray(),
                            $veiculo->cliente_id, ['class' => 'form-control', 'required']
            ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('placa', 'Placa:') !!}
            {!! Form::text('placa',  $veiculo->placa, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cor', 'Cor:') !!}
            {!! Form::text('cor',  $veiculo->cor, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('marca', 'Marca:') !!}
            {!! Form::text('marca',  $veiculo->marca, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('modelo', 'Modelo:') !!}
            {!! Form::text('modelo',  $veiculo->modelo, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('motorizacao', 'Motorizacao:') !!}
            {!! Form::text('motorizacao',  $veiculo->motorizacao, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ano', 'Ano:') !!}
            {!! Form::text('ano',  $veiculo->ano, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar veículo', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
