@extends('adminlte::page')

@section('content')
    <h1>Nova ordem de serviço</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'servicos.store']) !!}
        <div class="form-group">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::text('numero', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('veiculo_id', 'Veículo:') !!}
            {!! Form::select('veiculo_id',
                            \App\Models\Veiculo::orderBy('placa')->pluck('placa', 'id')->toArray(),
                            null, ['class' => 'form-control', 'required']
            ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cliente_id', 'Cliente:') !!}
            {!! Form::select('cliente_id',
                            \App\Models\Cliente::orderBy('nome')->pluck('nome', 'id')->toArray(),
                            null, ['class' => 'form-control', 'required']
            ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observacoes:') !!}
            {!! Form::textarea('observacoes', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar serviço', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
