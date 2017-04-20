@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')

<div class="m-b-md row" style="align-items: lef">
    <h2>Entrar no Sistema</h2>
    <p>Acesse o sistema para poder fazer todo o seu controle de caixa:</p>

    <div class="panel panel-default col-md-6 col-md-offset-3 ">
        <div class="panel-body">
        {!! Form::open(['url' => '/login', 'method' => 'POST']) !!}

            <div class="form-group">
                {{ Form::label('email', 'Endereço de email') }}
                {{ Form::text('email', '', ['class' => 'form-control', 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Senha no sistema') }}
                {{ Form::password('password', ['class' => 'form-control', 'required']) }}
            </div>

            <hr>
            <div class="row">
                <div class="col-md-8 text-danger">
                @if(isset($erro))
                    {{$erro}}
                @endif

                @if(session('erro'))
                    {{ session('erro') }}
                @endif
                </div>

                <div class="col-md-4 text-right">
                    {{  Form::submit('Entrar no sistema', ['class' => 'btn btn-default']) }}
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
