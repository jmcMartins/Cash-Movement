@extends('template.template')

@section('title', 'Entrar no sistema')

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
                    @forelse($caixas as $caixa)
                      <tr>
                        @if($caixa->tipo == 1)
                            <td>Venda</td>
                        @else
                            <td>Saída</td>
                        @endif
                        <td>{{$caixa->descricao}}</td>
                        <td>R$ &nbsp;{{$caixa->preco}}</td>
                      </tr>
                    @empty
                        <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
