<?php

namespace Aldhix\Adminlte;
use Route;

class AdminlteDemo
{
 
   public static function routes()
   {
       Route::group([
            'prefix' => 'demo',
            'namespace'=>'Adminlte',
        ], function() {
            Route::get('/','DemoController@index')->name('demo.index');
            Route::get('about','DemoController@about')->name('demo.about');
            Route::get('form','DemoController@form')->name('demo.form');
            Route::post('form','DemoController@store')->name('demo.store');
            Route::get('table','DemoController@table')->name('demo.table');
            Route::delete('destroy/{id}','DemoController@destroy')->name('demo.destroy');
        });
   }
}
