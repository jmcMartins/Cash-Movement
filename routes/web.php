<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('sair', 'AuthController@sair');
Route::post('entrar', 'AuthController@logar');

Route::get('/home','CaixaController@index');
Route::get('/home/buscar','CaixaController@buscar');


Route::get('/extrato', 'ExtratoController@index');
Route::get('/extrato/gerar', 'ExtratoController@gerar');

Route::get('/saida','SaidaController@index');
Route::post('/saida','SaidaController@store');
Route::delete('/saida/{id}', 'SaidaController@destroy');
Route::put('/saida/{id}', 'SaidaController@update');
Route::get('/saida/{id}/edit', 'SaidaController@edit');

Route::get('/entrada','EntradaController@index');
Route::post('/entrada','EntradaController@store');
Route::delete('/entrada/{id}', 'EntradaController@destroy');
Route::put('/entrada/{id}', 'EntradaController@update');
Route::get('/entrada/{id}/edit', 'EntradaController@edit');