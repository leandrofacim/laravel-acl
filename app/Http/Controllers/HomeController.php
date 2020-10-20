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
        $posts = $post->all();

        return view('home', compact('posts'));
    }

    public function update($idPost)
    {
        $post = Post::find($idPost);

        if (Gate::denies('update-post', $post))
            abort(403, 'Não autorizado');

        return view('update-post', compact('post'));
    }

    public function rolesPermissions()
    {
        $userName = auth()->user()->name;
        var_dump("<h1>{$userName}</h1>");
        foreach ( auth()->user()->roles as $role) {
            echo $role->name . '<br/>';

            $permissions = $role->permissions;
            foreach ($permissions as $permission) {
                echo "$permission->name" . '<br/>';
            }
        }
    }
}
