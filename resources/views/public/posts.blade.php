<div class="panel panel-default cajas">
  <div class="panel-heading titulo-cajas">
    <h2>Últimas Publicaciones</h2>
  </div>
  <div class="panel-body">

      @if($posts->count() > 0)
        {{-- Muestro un listado de posts de todos los usuarios --}}

          @foreach($posts as $post)
            <div class="col-md-6 post-box">
              <div class="post-boxito">
                <a href="{{ route('panel::posts.detallepost') }}">
                  <h2>{{str_limit($post->title, 45)}}</h2>
                  <p>{{str_limit($post->content, 15)}}</p>
                  <!-- ({{$post->user->name}}) -->
                  <!-- <img src="{{$post->pic}}" alt="" /> -->
                  <a class="boton-post"href="{{ route('panel::posts.detallepost') }}">VER MAS</a>
                </a>
              </div>

            </div>
          @endforeach

      @else
        <div>
          No hay ningun post aun :(
        </div>

        <div>
          <img src="{{asset('img/sorry.jpg')}}" style="max-width:100%; max-height:100%">
        </div>

        <div>
          <s>¿Ejecutaste php artisan migrate --seed?</s>
        </div>
      @endif
  </div>
</div>
