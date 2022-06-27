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
            {!! Form::label('nome', 'Itens:') !!}
            <td>
                @foreach($orcamento->pecas as $p)
                    <li>{{ $p->peca->nome }}</li>
                @endforeach
            </td>
        </div>

        {{-- <hr>
        <h4>Peças</h4>
        <div class="input_fields_wrap"></div>
        <br>

        <button style="float: right;" class="add_field_button btn btn-default">Adicionar peça</button>
        
        <br>
        <hr> --}}

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

{{-- @section('js')
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
@stop --}}