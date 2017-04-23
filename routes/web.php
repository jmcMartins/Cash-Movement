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

Auth::routes();

Route::get('sair', 'AuthController@sair');
Route::post('entrar', 'AuthController@logar');

Route::get('/home','CaixaController@index');

Route::get('/extrato', 'ExtratoController@index');

Route::get('/saida','SaidaController@index');
Route::post('/saida','SaidaController@store');

Route::get('/entrada','EntradaController@index');
Route::post('/entrada','EntradaController@store');

