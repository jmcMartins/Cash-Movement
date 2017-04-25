@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')
<div class="container" style="width: 95%">
    <div class="row">
        <div style="text-align: center;">
            <h2>Extrato Por Período</h2>
        </div>
        <div class="form-inline" style="text-align: center;">
            {{Form::open(['url' => 'extrato/gerar', 'method' => 'GET'])}}
                {{Form::label('dataInic', 'De: ') }}
                {{Form::date('dataInic', isset($_GET['dataInic']) ? $_GET['dataInic'] : date('Y-m-d'), ['class' => 'form-control', 'required']) }}
                {{Form::label('dataFinal', 'Até: ') }}
                {{Form::date('dataFinal', isset($_GET['dataFinal']) ? $_GET['dataFinal'] : date('Y-m-d'), ['class' => 'form-control', 'required']) }}
                {{Form::submit('Gerar Extrato', ['class' => 'btn btn-default']) }}
            {{Form::close()}}
        </div>
        <hr>
        <div>
            @php
                $entrada = 0;
                $saida = 0;
            @endphp
            @foreach($caixas as $caixa)
                @if($caixa->tipo == 1)
                    @php
                        $entrada += $caixa->preco;
                    @endphp
                @endif
                @if($caixa->tipo == 2)
                    @php
                        $saida += $caixa->preco;
                    @endphp
                @endif
            @endforeach

            <h4>Entrada: &nbsp; R${{$entrada}}</h4>
            <h4>&nbsp;&nbsp;&nbsp;Saída: &nbsp; R${{$saida}}</h4>
        </div>
        <hr>
        <div class="row">
            <table class="table" style="margin-left: 5px">
                <thead>
                    <tr>
                    <th>Tipo</th>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($caixas as $caixa)
                      <tr>
                        @if($caixa->tipo == 1)
                            <td>Entrada</td>
                        @else
                            <td>Saída</td>
                        @endif
                        <td> {{date('d/m/Y', strtotime($caixa->data))}} </td>
                        <td>{{$caixa->descricao}}</td>
                        <td>R$ &nbsp;{{$caixa->preco}}</td>
                        <td>
                        <div class="form-inline">
                            <button class="edit-btn"><a href="{{ url('extrato/'.$caixa->id.'/edit') }}"><i class="glyphicon glyphicon glyphicon-edit"></i></a></button>
                            <button class="delete-btn"><a href="{{ url('extrato/'.$caixa->id.'/delete') }}"><i class="glyphicon glyphicon glyphicon-trash"></i></a></button>
                        </div>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection
