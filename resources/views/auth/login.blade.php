@extends('layouts.app')
@section('title')
Ingresar
@stop
@section('content')
<div style="padding:100px 0"class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('auth.components.login')
        </div>
    </div>
</div>
@endsection
