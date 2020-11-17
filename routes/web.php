<?php

use Illuminate\Support\Facades\Route;

//cliente

Route::get('/', function () {
    return view('cliente.index');
});

Route::get('/contacto', function () {
    return view('cliente.contact');
});

Route::get('/proyectos', function () {
    return view('cliente.project');
});

Route::get('/blog', function () {
    return view('cliente.blog');
});

Route::get('/detalleproyecto', function () {
    return view('cliente.detalleproject');
});

//admin

Route::get('/administrador', function () {
    return view('admin.index');
});



Route::get('/home', 'HomeController@index')->name('home');
