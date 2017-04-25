@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')
<div class="m-b-md row">
    <div class="content" style="text-align: center;">
        <h2>Editando</h2>
    </div>

    <div class="panel panel-default col-md-6 col-md-offset-3 ">
        <div class="panel-body">

            {!! Form::open(['url' => '/editar/'.$caixas->id, 'method' => 'put']) !!}
                @if(isset($simples) and $simples)
                    {{Form::hidden('simples', true)}}
                @endif
                <div class="form-group row">
                    <div class="col-md-12">
                        {{ Form::label('descricao', 'Descrição') }}
                        {{ Form::text('descricao', $caixas->descricao, ['class' => 'form-control', 'required', 'id' => 'descricao']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        {{ Form::label('data', 'Data') }}
                        {{ Form::date('data', $caixas->data, ['class' => 'form-control', 'required', 'id' => 'data']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('preco', 'Valor') }}
                        {{ Form::number('preco', $caixas->preco, ['class' => 'form-control','step' => 0.01, 'required', 'id' => 'preco']) }}
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-md-12" style="text-align: center;">
                        {{  Form::submit('Salvar', ['class' => 'btn btn-default', 'OnClick' => 'funcaoEditar()']) }}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
