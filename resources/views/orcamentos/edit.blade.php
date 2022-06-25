@extends('adminlte::page')

@section('content')
    <h1>Editando orçamento: {{$orcamento->nome}}</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["orcamentos.update", "id" => $orcamento->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::text('numero',  $orcamento->numero, ['class'=>'form-control', 'required']) !!}
        </div>

        {{-- <div class="form-group">
            {!! Form::label('veiculo', 'Veículo:') !!}
            {!! Form::text('veiculo',  $orcamento->veiculo->placa, ['class'=>'form-control', 'required']) !!}
        </div> --}}

        <div class="form-group">
            {!! Form::label('placa', 'Veículo:') !!}
            {!! Form::select('placa',
                            \App\Models\Veiculo::orderBy('placa')->pluck('placa', 'id')->toArray(),
                            $orcamento->veiculo_id, ['class' => 'form-control', 'required']
            ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::text('cliente',  $orcamento->veiculo->cliente->nome, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data',  $orcamento->data, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('itens', 'Itens:') !!}
            {!! Form::text('itens',  $orcamento->itens, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor',  $orcamento->valor, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Orçamento', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop
