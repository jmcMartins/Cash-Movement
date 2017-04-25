<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>

        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/template.css') }}
        <title>Cash Movement</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body class="container-fluid">
        <div class="flex-center position-ref full-height">
            <header class="top-right links">
                @if(auth()->check())
                    <a href="{{ url('#') }}">Olá, {{ explode(' ', auth()->user()->name)[0] }}</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sair
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif

                @section('header')
                @show
            </header>

            <div class="content text-justify row">
                <div class="m-b-md">
                    <aside class="col-md-2">
                        <ul class="list-group side-menu" style="text-align: center;">

                            @if(auth()->check())
                                <li class="list-group-item">
                                    <a href="{{url('/home')}}">
                                        Caixa
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{url('/extrato')}}">
                                        Extrato
                                    </a>
                                </li>
                                <hr>
                                <li class="list-group-item">
                                    <a href="{{url('/entrada')}}">
                                        Entrada
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{url('/saida')}}">
                                        Saída
                                    </a>
                                </li>
                            @else
                                <li class="list-group-item">
                                    <a href="{{url('/')}}">
                                        Controle de Caixa
                                    </a>
                                </li>
                            @endif
                            <hr>

                            @section('sidebar')
                            @show
                        </ul>
                     </aside>

                    <article class="col-md-10" style="border-left: 1px solid #eee">
                        @yield('content')

                        <footer>
                            <hr>
                            <div style="text-align: center;">&copy; 2017 - Desenvolvido por Júnior Martins da Costa - ADS</div>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
        {{ Html::script('js/app.js') }}
        {{ Html::script('js/jquery.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        {{ Html::script('js/componentes.js') }}
    </body>
</html>