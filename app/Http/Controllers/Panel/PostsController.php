<?php

namespace App\Http\Controllers\Panel;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\postStore;

class PostsController extends Controller
{

	/**
     * Muestra el panel de alta/baja/modificacion de posts de un usuario especifico
     */
    public function index() {

    	//En la vista no está mal utilizar directamente Auth::user() para mostrar data del usuario, pero para dar información relacionada al usuario (como los posts) debemos irla a buscar en el controlador (o en un repositorio) y pasarsela a la vista

    	//Si quisiera pasarle a la vista los posts paginados seria:
    	// Auth::user()->posts()->paginate(3) <- con los parentesis despues de posts
    	$posts = Auth::user()->posts;

    	return view('panel.posts.index')->with('posts', $posts);
      // return view('panel.posts.crear')->with('crear', $posts);
    }

		public function detallepost() {
			$post = Auth::user()->posts;
			return view('panel.posts.detallepost')->with('posts', $post);
		}

		public function crear(postStore $request) {

			$newImg = uniqid().".".$request->imagenPost->extension();
			$folder = "imagenPost";

			$path = $request->imagenPost->storeAs($folder, $newImg, 'public');

			$post = Post::create([
				'title'=>$request->titulo, //title es el nombre de la columna. titulo es el name del input
				'content'=>$request->content,
				'pic'=>$path,
				'user_id' => Auth::user()->id,
			]);

			return redirect('posts');
		}

}
