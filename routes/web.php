<?php

use Illuminate\Support\Facades\Route;

//cliente

Route::get('/', function () {
    return view('cliente.index');
});

//admin

Route::get('/administrador', function () {
    return view('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
