
@extends('layouts.app')

@section('section_name')
	Mis posts!
@endsection


@section('content')
<div class="container">
	<div class="row">
		{{-- Muestro los errores que llegan del formulario --}}
		<!-- @include('layouts.components.errors') -->
		{{--
			IMPORTANTE!

			Nunca olvidarse de especificar el atributo enctype="multipart/form-data" cuando en nuesro formulario tenemos carga de archivos
		--}}
		<form action="/crearpost" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

		    {{-- Nombre del usuario --}}
		    <div class="form-group">
		      <label for="name">Título</label>
		      <input type="text" name="titulo" value="" class="form-control">
		    </div>

				@if ($errors->has('titulo'))
						<span class="help-block">
								<strong>Ingrese un título</strong>
						</span>
				@endif

		    <!-- <div class="form-group">
		      <label for="name">Precio</label>
		      <input type="number" name="" value="" class="form-control">
		    </div> -->

				<div class="form-group">
		      <label for="name">Descripción</label>
					<textarea class="form-control" name="content" rows="8" cols="80"></textarea>
		    </div>

				@if ($errors->has('content'))
						<span class="help-block">
								<strong>Ingrese una descripción</strong>
						</span>
				@endif

			<div class="form-group">
		      <label for="name">Imagen</label>
		      <input type="file" name="imagenPost" value="" class="form-control">

			  {{-- Si tiene un avatar subido, lo mostramos --}}

		      	{{--
		      		El source de la imagen o de cualqquier ruta que utilicemos
					en nuestro HTML siempre es relativa a la carpeta public.
		      		Debo prefijarlo con storage porqque el link simbolico se
		      		encuentra en la carpeta public/storage
		      	--}}
		      	<div style="margin-top:20px; margin-bottom:20px; text-align:center">
		      		<img class="img-responsive img-thumbnail img-rounded" style="max-height:200px" src="">
		      	</div>

		    </div>

				@if ($errors->has('imagenPost'))
						<span class="help-block">
								<strong>Seleccione una imagen</strong>
						</span>
				@endif



		    <input type="submit" name="crearReceta" value="Guardar" class="btn btn-info">
	    </form>
    </div>
</div>
@endsection
