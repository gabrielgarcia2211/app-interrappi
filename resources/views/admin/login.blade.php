@extends('layouts.login')

@section('content')
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab">Iniciar
                Sesion</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}" id="login-form">
                    {{ csrf_field() }}
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="login_email" class="label">Correo Electronico</label>
                            <input type="email" class="input" id="login_email" name="email">
                        </div>
                        <div class="group" style="margin-top: 20px">
                            <label for="login_password" class="label">Contraseña</label>
                            <input type="password" class="input" data-type="password" id="login_password" name="password">
                        </div>
                        @isset($ingresoError)
                            <span style="margin-bottom: 50px; color:red">
                                <strong> {{ $ingresoError[0] }}</strong>
                            </span>
                        @endisset

                        <div class="hr"></div>
                        <div class="group">
                            <input type="submit" class="button" value="Ingresar">
                        </div>
                    </div>
                </form>

                <div class="sign-up-htm">
                </div>
            </div>
        </div>
    </div>
@endsection
