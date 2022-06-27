@extends('adminlte::page')

@section('content')
    <h1>Novo Orçamento</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'orcamentos.store']) !!}
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
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor', null, ['class'=>'form-control', 'required']) !!}
        </div>
        
        <hr>
        <h4>Peças</h4>
        <div class="input_fields_wrap"></div>
        <br>

        <button style="float: right;" class="add_field_button btn btn-default">Adicionar peça</button>
        
        <br>
        <hr>

        {{-- <div class="form-group">
            {!! Form::label('itens', 'Itens:') !!}
            {!! Form::text('itens', null, ['class'=>'form-control', 'required']) !!}
        </div> --}}

        <div class="form-group">
            {!! Form::submit('Criar orçamento', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop

@section('js')
    <script>
        $(document).ready(function() {
            var wrapper = $(".input_fields_wrap");
            var add_button = $(".add_field_button");

            var x = 0;

            $(add_button).click(function(e) {
                x++;
                var newField = '<div><div style="width: 94%; float: left;" id="peca">{!! Form::select("pecas[]", \App\Models\Peca::orderBy("nome")->pluck("nome", "id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione uma peça"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
                $(wrapper).append(newField);
            });
            $(wrapper).on("click", ".remove_field", function(e) {
               e.preventDefault();
               $(this).parent('div').remove();
               x--; 
            });
        });
    </script>
@stop