@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')
<div class="m-b-md row">
    <div class="content" style="text-align: center;">
        <h2>Lançamento Saída</h2>
        <p>Lançamento de saídas no sistema:</p>
    </div>

    <div class="panel panel-default col-md-6 col-md-offset-3 ">
        <div class="panel-body">

            {!! Form::open(['url' => '/saida/nova', 'method' => 'post']) !!}
                {{ Form::hidden('tipo', '2')}}
                <div class="form-group row">
                    <div class="col-md-12">
                        {{ Form::label('desc', 'Descrição') }}
                        {{ Form::text('desc', '', ['class' => 'form-control', 'required']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        {{ Form::label('data', 'Data') }}
                        {{ Form::date('data', ' ', ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('valor', 'Valor') }}
                        {{ Form::number('valor', '', ['class' => 'form-control', 'required']) }}
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-md-12" style="text-align: center;" ">
                        {{  Form::submit('Cadastrar', ['class' => 'btn btn-default']) }}
                    </div>
                </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
