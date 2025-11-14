<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para PaginaController
Route::get('/bienvenida', 'App\\Http\\Controllers\\PaginaController@bienvenida');
Route::get('/saludo/{nombre}', 'App\\Http\\Controllers\\PaginaController@saludo');
