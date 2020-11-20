<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//cliente
Route::get('/', 'DataController@index');
Route::get('/contacto', 'DataController@contacto');
Route::get('/proyectos', 'DataController@proyectos');
Route::get('/blog', 'DataController@blog');
Route::get('/blog/detalles/{id}', 'DataController@detallesBlog');
Route::get('/proyecto/detalles/{id}', 'DataController@detallesProject');

// email
Route::post('/post/send/email/sofia/cona', 'EmailController@sendMail')->name('send-mail');


/*Route::get('/login', function () {
    return view('cliente.login');
});*/

//admin
Route::middleware('auth')->group(function () {

	Route::get('/dashboard', function () { return view('admin.index'); })->name('dashboard');

	// routes Obras
	Route::get('/dashboard/obras', 'ObraController@index')->name('obras');
	Route::get('/dashboard/obra/show/details/{id}', 'ObraController@details')->name('obra-details');
	Route::get('/dashboard/obra/create/view', 'ObraController@create')->name('obra-create-view');
	Route::post('/dashboard/obra/create/post', 'ObraController@store')->name('obra-post');
	Route::get('/dashboard/obra/view-update/{id}', 'ObraController@edit')->name('obra-view-update');
	Route::put('/dashboard/obra/update/{id}', 'ObraController@update')->name('obra-update');
	Route::delete('/dashboard/obra/delete/{id}', 'ObraController@destroy')->name('obra-delete');
	Route::get('/dashboard/image/cover/{id}', 'ObraController@coverImage')->name('obra-image-cover'); // cover image
	Route::get('/dashboard/image-obra/delete/{id}', 'ObraController@deleteImage')->name('obra-image-delete'); // delete image
	Route::post('/dashboard/image-obra/upload/{id}', 'ObraController@uploadImages')->name('obra-upload-images'); // upload images

	// routes Posts
	Route::get('/dashboard/posts', 'PostController@index')->name('posts');
	Route::get('/dashboard/post/show/details/{id}', 'PostController@details')->name('post-details');
	Route::get('/dashboard/post/create/view', 'PostController@create')->name('post-create-view');
	Route::post('/dashboard/post/create/post', 'PostController@store')->name('post-post-create');
	Route::get('/dashboard/post/view-update/{id}', 'PostController@edit')->name('post-view-update');
	Route::put('/dashboard/post/update/{id}', 'PostController@update')->name('post-update');
	Route::delete('/dashboard/post/delete/{id}', 'PostController@destroy')->name('post-delete');
	Route::get('/dashboard/post/delete-img/{id}', 'PostController@deleteImage')->name('post-delete-img');
	Route::get('/dashboard/post/upload/imagen/{id}', 'PostController@uploadImage')->name('post-upload-img'); //view
	Route::post('/dashboard/post/update/imagen/{id}', 'PostController@updateImage')->name('post-update-img'); //load data

});


