<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request, User $user, Post $post)//Este user no sirve porque es el creador del post, no el usuario 
                                                                   //logeado que va a publicar el comentario
    {
        $this->validate($request, [
            'comentario' => 'required|max:225'
        ]);

        Comentario::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'comentario' => $request->comentario
        ]);

        return back()->with('mensaje', 'Comentario Realizado Correctamente');
    }
}
