@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')
<div class="container" style="width: 95%">
    <div class="row">
        <div style="text-align: center;">
            <h2>Extrato Por Período</h2>
        </div>
        <div class="form-inline" style="text-align: center;">
            {{Form::open(['url' => 'extrato/gerar', 'method' => 'POST'])}}
                {{Form::label('dataInic', 'De: ') }}
                {{Form::date('dataInic', ' ', ['class' => 'form-control', 'required']) }}
                {{Form::label('dataFinal', 'Até: ') }}
                {{Form::date('dataFinal', ' ', ['class' => 'form-control', 'required']) }}
                {{Form::submit('Gerar Extrato', ['class' => 'btn btn-default']) }}
            {{Form::close()}}
        </div>
        <div class="form-inline" style="text-align: left; margin-left: 20px">
            <hr>
            <h4>Entrada: </h4>
            <h4>Saída: </h4>
            <hr>
        </div>
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
