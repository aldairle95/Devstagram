<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Auth\Events\Validated;

class ComentarioController extends Controller
{
    public function store(Request $request, User $user, Post $post)
    {
        $this->Validate($request,[
            'comentario'=>'required|max:255'
        ]);

        Comentario::create([
            'user_id'=> auth()->user()->id,
            'post_id'=> $post->id,
            'comentario'=>$request->comentario
        ]);

        return back()->with('mensaje','comentario Realizado Correctamente');
    }
}
