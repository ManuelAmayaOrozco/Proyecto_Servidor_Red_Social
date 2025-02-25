<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function showPosts() {
        $posts = DB::table('posts')->get();
        return view('home', compact('posts'));
    }

    public function showRegisterPost() {
        return view('user_views.insertPosts');
    }

    public function doRegisterPost(Request $request) {
    
        // VALIDAR DATOS DE ENTRADA.
        $validator = Validator::make(
            $request->all(),
            [
                "title"=>"required",
                "description"=> "required"
            ],[
                "title.required" => "The :attribute is required.",
                "description.required" => "The :attribute is required."
            ]
        );
    
        // SI LOS DATOS SON INVÁLIDOS, DEVOLVER A LA PÁGINA ANTERIOR E IMPRIMIR LOS ERRORES DE VALIDACIÓN
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // SI EL USUARIO NO EXISTE, DEVOLVER A LA PÁGINA ANTERIOR E IMPRIMIR LOS ERRORES DE VALIDACIÓN
        $user = Auth::user();
        if(!$user) {
            $validator->errors()->add('credentials', 'This user does not exist, use a different ID.');
            return redirect()->route('user_views.insertChores')->withErrors($validator)->withInput();
        }

        // SI LOS DATOS SON VÁLIDOS (SI EL REGISTRO SE HA REALIZADO CORRECTAMENTE) CARGAR LA VIEW
        $datosPost = $request->all();
        $post = new Post();
        $post->title = $datosPost['title'];
        $post->description = $datosPost['description'];
        $post->publish_date = date('d-m-y h:i:s');
        $post->n_likes = 0;
        $post->belongs_to = Auth::id();
        $post->save();

        return redirect()->route('home');

    }

}