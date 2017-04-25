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
                <div class="form-group row">
                    <div class="col-md-12">
                        {{ Form::label('descricao', 'Descrição') }}
                        {{ Form::text('descricao', $caixas->descricao, ['class' => 'form-control', 'required']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        {{ Form::label('data', 'Data') }}
                        {{ Form::date('data', $caixas->data, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('preco', 'Valor') }}
                        {{ Form::number('preco', $caixas->preco, ['class' => 'form-control', 'required']) }}
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-md-12" style="text-align: center;">
                        {{  Form::submit('Salvar', ['class' => 'btn btn-default']) }}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
