@extends('adminlte::page')

@section('content')
    <h1>Editando serviço: {{$servico->nome}}</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["servicos.update", "id" => $servico->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::text('numero',  $servico->numero, ['class'=>'form-control', 'required']) !!}
        </div>

        {{-- <div class="form-group">
            {!! Form::label('veiculo', 'Veículo:') !!}
            {!! Form::text('veiculo',  $servico->veiculo->placa, ['class'=>'form-control', 'required']) !!}
        </div> --}}

        <div class="form-group">
            {!! Form::label('veiculo_id', 'Veículo:') !!}
            {!! Form::select('veiculo_id',
                            \App\Models\Veiculo::orderBy('placa')->pluck('placa', 'id')->toArray(),
                            $servico->veiculo_id, ['class' => 'form-control', 'required']
            ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::text('cliente',  $servico->veiculo->cliente->nome, ['class'=>'form-control', 'required']) !!}
        </div>
{{-- 
        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::select('cliente',
                            \App\Models\Veiculo::orderBy('cliente->nome')->pluck('cliente->nome', 'id')->toArray(),
                            $servico->veiculo->cliente->nome, ['class' => 'form-control', 'required']
            ) !!}
        </div> --}}

        <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data',  $servico->data, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observações:') !!}
            {!! Form::textarea('observacoes',  $servico->observacoes, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar serviço', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
