@extends('template.template')

@section('title', 'Entrar no sistema')

@section('content')

<div class="m-b-md row" style="align-items: center;">
    <div class="content" style="text-align: center;">
        <h2>Entrar no Sistema</h2>
        <p>Acesse o sistema para poder fazer todo o seu controle de caixa:</p>
    </div>

    <div class="panel panel-default col-md-6 col-md-offset-3 ">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Senha</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-succes">
                            Entrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
