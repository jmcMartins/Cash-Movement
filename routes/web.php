<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('entrar', 'AuthController@logar');
Route::get('erro', function() {
	return view('erro');
});

Route::put('/editar/{id}', 'CaixaController@update');
Route::get('/editar', 'CaixaController@editIndex');

Route::get('/home','CaixaController@index');
Route::get('/home/buscar','CaixaController@buscar');
Route::get('/home/{id}/delete', 'CaixaController@destroy');
Route::get('/home/{id}/edit', 'CaixaController@edit');

Route::get('/extrato', 'ExtratoController@index');
Route::get('/extrato/gerar', 'ExtratoController@gerar');
Route::get('/extrato/{id}/delete', 'ExtratoController@destroy');
Route::get('/extrato/{id}/edit', 'ExtratoController@edit');

Route::get('/saida','SaidaController@index');
Route::post('/saida','SaidaController@store');

Route::get('/entrada','EntradaController@index');
Route::post('/entrada','EntradaController@store');