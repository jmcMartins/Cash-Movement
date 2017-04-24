@extends('template.template')

@section('title', 'Controle de caixa')

@section('content')
<div class="container" style="width: 95%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="text-align: center;" style="width: 50%">
            <h1>Controle de Caixa</h1>
        </div>
        <div class="form-inline" style="text-align: center;">
            {{Form::open(['url' => '/home/buscar', 'method' => 'GET'])}}
                {{Form::date('dataBusca', ' ', ['class' => 'form-control']) }}
                {{Form::submit('Buscar', ['class' => 'btn btn-default']) }}
            {{Form::close()}}
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table" style="margin-left: 5px">
            <thead>
                <tr>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($caixas as $caixa)
                  <tr>
                    @if($caixa->tipo == 1)
                        <td>Venda</td>
                    @else
                        <td>Saída</td>
                    @endif
                    <td>{{$caixa->descricao}}</td>
                    <td>R$ &nbsp;{{$caixa->preco}}</td>
                    <td>
                    <div class="form-inline">
                        <button class="edit-btn"><a href=""><i class="glyphicon glyphicon-pencil"></i></a></button>
                        <button class="edit-btn"><a href=""><i class="glyphicon glyphicon-remove-sign"></i></a></button>
                    </div>
                  </tr>
                @empty
                    <div style="text-align: center;">
                        <h3><b>Caixa em branco</b></h3>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
