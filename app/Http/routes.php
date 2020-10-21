<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'painel'], function () {
    Route::get('/', 'Painel\PainelController@index');
});

Route::get('/', 'SiteController@index');

Route::auth();

