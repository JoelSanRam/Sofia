<?php

use Illuminate\Support\Facades\Route;

//cliente

Route::get('/', function () {
    return view('cliente.index');
});

//admin

Route::get('/administrador', function () {
    return view('MasterPage.admin');
});
