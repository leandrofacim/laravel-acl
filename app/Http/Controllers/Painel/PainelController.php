<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Permission;
use App\Post;
use App\Role;
use App\User;

class PainelController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalRoles = Role::count();
        $totalPermissions = Permission::count();
        $totalPosts = Post::count();
        return view('painel.home.index', compact('totalUsers', 'totalRoles', 'totalPermissions', 'totalPosts'));
    }
}
