<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {return 'Hola test'; });

Route::get('/array', function () {return ['saludo'=>'Hola', 'nombre'=>'Platzi'];});

Route::get('/vista', function () {return view('vista');});

Route::get('/otherview', function() {return view('vista', ['nombre'=>'Hola Platzi']);});
