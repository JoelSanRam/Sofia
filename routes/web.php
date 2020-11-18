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

Route::get('/detalleblog', function () {
    return view('cliente.detalleblog');
});

Route::get('/detalleproyecto', function () {
    return view('cliente.detalleproject');
});

//admin

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// routes Obras
Route::get('/dashboard/obras', 'ObraController@index')->name('obras');
Route::get('/dashboard/obra/show/details/{id}', 'ObraController@details')->name('obra-details');
Route::get('/dashboard/obra/create/view', 'ObraController@create')->name('obra-create-view');
Route::post('/dashboard/obra/create/post', 'ObraController@store')->name('obra-post');
Route::get('/dashboard/obra/view-update/{id}', 'ObraController@edit')->name('obra-view-update');
Route::put('/dashboard/obra/update/{id}', 'ObraController@update')->name('obra-update');
Route::delete('/dashboard/obra/delete/{id}', 'ObraController@destroy')->name('obra-delete');
Route::get('/dashboard/image-obra/delete/{id}', 'ObraController@deleteImage')->name('obra-image-delete'); // delete image



Route::get('/home', 'HomeController@index')->name('home');
