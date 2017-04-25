<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('erro', function() {
	return view('erro');
});

Route::group(['middlware' => 'auth' ], function () {

	Route::group(['prefix' => 'editar'], function() {
		Route::get('', 				'CaixaController@editIndex');
		Route::put('{id}', 			'CaixaController@update');
	});

	Route::group(['prefix' => 'home'], function() {
		Route::get('',				'CaixaController@index');
		Route::get('buscar',		'CaixaController@buscar');
		Route::get('{id}/delete', 	'CaixaController@destroy');
		Route::get('{id}/edit', 	'CaixaController@edit');
	});

	Route::group(['prefix' => 'extrato'], function() {
		Route::get('', 				'ExtratoController@index');
		Route::get('gerar', 		'ExtratoController@gerar');
		Route::get('{id}/delete', 	'ExtratoController@destroy');
		Route::get('{id}/edit', 	'ExtratoController@edit');
	});

	Route::group(['prefix' => 'saida'], function() {
		Route::get('',				'SaidaController@index');
		Route::post('',				'SaidaController@store');
	});

	Route::group(['prefix' => 'entrada'], function() {
		Route::get('',				'EntradaController@index');
		Route::post('',				'EntradaController@store');
	});
});