@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')
<div class="container" style="width: 95%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="text-align: center;" style="width: 50%">
            <h1>Controle de Caixa</h1>
        </div>
        <div class="form-inline" style="text-align: center;">
            {{Form::open(['url' => 'caixa/buscar', 'method' => 'POST'])}}
                {{Form::date('dataBusca', ' ', ['class' => 'form-control']) }}
                {{Form::submit('Buscar', ['class' => 'btn btn-default']) }}
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection
