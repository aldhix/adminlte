<?php

Route::group([
	'prefix' => 'demo',
	'middleware'=>['web'],
	'namespace'=>'Aldhix\Adminlte\App\Controllers'
], function() {
    Route::get('/','DemoController@index');
	Route::get('/about','DemoController@about');
	Route::get('/form','DemoController@form');
	Route::post('/form','DemoController@store');
	Route::get('/table','DemoController@table');
	Route::delete('/delete/{id}','DemoController@destroy');
});