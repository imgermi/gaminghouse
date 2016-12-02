@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">

    <div class="col-xs-12 col-md-6">
      @include('public.posts')
    </div>

    {{--
      En caso de que el usuario no esté logueado muestro el formulario de login

      Para cheuqear que un usuario esté logueado utilizamos Auth::check()
    --}}
    <!-- @if(Auth::guest())
      <div class="col-md-6 hidden-sm">
        @include('auth.components.login')
      </div>

      <div class="clearfix"></div>
    @endif -->

    <div class="col-xs-12 col-md-6">
      <div class="panel panel-default cajas">
        <div class="panel-heading titulo-cajas">
          <h2>Acerca de Gaming House</h2>
        </div>
        <div class="panel-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="boton" href="{{ url('/about') }}">Ver más</a>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
