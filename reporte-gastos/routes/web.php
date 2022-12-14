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

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('/gastos', 'GastoController');
// Route::resource('/detalleGastos', 'DetalleGastoController');
Route::get('/gastos/{gasto}/confirmarEnvioEmail', 'GastoController@confirmarEnvioEmail')->name('gastos.confirmarEnvioEmail');
Route::post('/gastos/{gasto}/enviarEmail', 'GastoController@enviarEmail')->name('gastos.enviarEmail');
Route::get('/gastos/{gasto}/detalleGastos/create', 'DetalleGastoController@create')->name('detalleGastos.create');
Route::post('/gastos/{gasto}/detalleGastos', 'DetalleGastoController@store')->name('detalleGastos.store');

Route::get('/test', function () {return 'Hola test'; });

Route::get('/array', function () {return ['saludo'=>'Hola', 'nombre'=>'Platzi'];});

Route::get('/vista', function () {return view('vista');});

Route::get('/otherview', function() {return view('vista', ['nombre'=>'Hola Platzi']);});
