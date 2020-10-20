<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $posts = auth()->user()->posts;

        return view('home', compact('posts'));
    }

    public function update($idPost)
    {
        $post = Post::find($idPost);

        // $this->authorize('update-post', $post);

        if (Gate::denies('update-post', $post))
            abort(403, 'Não autorizado');

        return view('update-post', compact('post'));
    }
}
