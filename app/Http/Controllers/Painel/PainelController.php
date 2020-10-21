<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class PainelController extends Controller
{
    public function index()
    {
        return 'Dashboard inicial';
    }
}
