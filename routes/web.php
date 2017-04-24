<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('entrar', 'AuthController@logar');
Route::get('erro', function() {
	return view('erro');
});

Route::get('/home','CaixaController@index');
Route::get('/home/buscar','CaixaController@buscar');
Route::delete('/home/{id}', 'CaixaController@destroy');
Route::put('/home/{id}', 'SaidaController@update');
Route::get('/home/{id}/edit', 'SaidaController@edit');

Route::get('/extrato', 'ExtratoController@index');
Route::get('/extrato/gerar', 'ExtratoController@gerar');
Route::delete('/extrato/{id}', 'ExtratoController@destroy');
Route::put('/extrato/{id}', 'SaidaController@update');
Route::get('/extrato/{id}/edit', 'SaidaController@edit');

Route::get('/saida','SaidaController@index');
Route::post('/saida','SaidaController@store');

Route::get('/entrada','EntradaController@index');
Route::post('/entrada','EntradaController@store');