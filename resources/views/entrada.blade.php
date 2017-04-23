@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')
<div class="m-b-md row">
    <div class="content" style="text-align: center;">
        <h2>Lançamento Entrada</h2>
        <p>Lançamento de entradas no sistema:</p>
    </div>

    <div class="panel panel-default col-md-6 col-md-offset-3 ">
        <div class="panel-body">

            {!! Form::open(['url' => '/entrada', 'method' => 'post']) !!}
                {{ Form::hidden('tipo', '1')}}
                <div class="form-group row">
                    <div class="col-md-12">
                        {{ Form::label('descricao', 'Descrição') }}
                        {{ Form::text('descricao', '', ['class' => 'form-control', 'required']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        {{ Form::label('data', 'Data') }}
                        {{ Form::date('data', ' ', ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('preco', 'Valor') }}
                        {{ Form::number('preco', '', ['class' => 'form-control', 'required', 'step' => 0.01]) }}
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-md-12" style="text-align: center;" ">
                        {{  Form::submit('Cadastrar', ['class' => 'btn btn-default', 'OnClick' => 'funcao1()']) }}
                    </div>
                </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
