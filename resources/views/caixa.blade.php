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
        <hr>
        <div>
            <table class="table" style="margin-left: 20px">
                <thead>
                    <tr>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Entrada</td>
                    <td>Ramalhete</td>
                    <td>R$89,90</td>
                  </tr>
                  <tr>
                    <td>Saida</td>
                    <td>Begonea</td>
                    <td>R$49,90</td>
                  </tr>
                  <tr>
                    <td>Entrada</td>
                    <td>Orquidea</td>
                    <td>R$99,90</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
