<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'painel'], function () {
    Route::get('posts', 'Painel\PostController@index');
    Route::get('/', 'Painel\PainelController@index');
});

Route::get('/', 'Portal\SiteController@index');

Route::auth();

