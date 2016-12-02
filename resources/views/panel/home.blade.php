@extends('layouts.app')

@section('content')
<div style="padding:100px 0px"class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
            	<div class="panel-heading">Bienvenido <b>{{Auth::user()->name}}</b>!</div>
              <div class="panel-body">
                <p>Gracias por ingresar a Gaming House. Podrás editar tu perfil a tu gusto y ver y crear tus propias publicaciones. Si tienes algún problema, no dudes en contactarnos.</p>

                <div style="border:none"class="panel panel-default forms">
                    <div class="panel-heading titulo-forms">Contacto</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="asunto" class="col-md-4 control-label">Asunto</label>

                                <div class="col-md-6">
                                    <input id="asunto" type="text" class="form-control" name="asunto">
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="mensaje" class="col-md-4 control-label">Mensaje</label>
                              <div class="col-md-6">
                                <textarea style="border-radius:5px;padding:12px;width:100%"id="mensaje"name="name" rows="8" cols="38"></textarea>
                              </div>
                            </div>




                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary boton">
                                        Enviar
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <a class="boton-user" href="{{ route('panel::posts.index') }}">MIS PUBLICACIONES</a>
                <a class="boton-user" href="{{ url('/crear') }}">PUBLICAR</a>
                <a class="boton-user" href="{{ route('panel::profile.edit') }}">EDITAR PERFIL</a>
                <a class="boton-user" href="{{ url('/logout') }}"onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">SALIR</a>
              </div>
            </div>
        </div>
    </div>


</div>
@endsection
