{{--

Separo esta vista de login.blade.php para poder reutilizar el formulario en la pagina principal (/) y en /login

--}}
<link rel="stylesheet" href="css/styles.css">

<div class="panel panel-default forms">
    <div class="panel-heading titulo-forms">Ingresar</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Email</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>Ingrese su email</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Contraseña</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>Ingrese su contraseña</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Mantener sesión iniciada
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary boton">
                        Ingresar
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                        Olvidé mi contraseña
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
