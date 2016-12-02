@extends('layouts.app')

@section('section_name')
	Mis posts!
@endsection

@section('content')
<link rel="stylesheet" href="css/style.css">
<div style="padding:20px 10px"class="panel panel-default">

			@if($posts->count() > 0)
				<div class="posts">
					<h3>Tenés {{ $posts->count() }} publicaciones</h3>

						@foreach($posts as $post)
	            <div class="col-md-2 post-box">
	              <div class="post-boxito-user">
	                <a>
	                  <h2>{{str_limit($post->title, 45)}}</h2>
	                  <p>{{str_limit($post->content, 15)}}</p>
	                  <!-- ({{$post->user->name}}) -->
	                  <!-- <img src="{{$post->pic}}" alt="" /> -->
	                  <a style="margin-bottom:10px"class="boton-post"href="{{ route('panel::posts.detallepost') }}">VER</a>
										<a style="margin-bottom:10px" class="boton-post"href="#">EDITAR</a>
										<a class="boton-post"href="#">BORRAR</a>
	                </a>
	              </div>
	            </div>
	          @endforeach

						<div style="clear:both"></div>
					<a href="{{ url('/crear') }}" class="btn btn-default">Publicar</a>
				</div>
			@else
				<div class="alert alert-danger">
					Todavia no tenés ninguna publicacion
				</div>

				<a href="{{ url('/crear') }}" class="btn btn-default">Empezá ahora</a>
			@endif


</div>

@endsection
