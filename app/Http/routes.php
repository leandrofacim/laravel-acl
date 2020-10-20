<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('post/{id}/update', 'HomeController@update');

Route::get('roles-permissions', 'HomeController@rolesPermissions');
