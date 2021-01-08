<?php
use App\Equipologin;

Route::get('/', 'PanelControl@index');
Route::get('search', 'PanelControl@search');
Route::get('acta', 'PanelControl@generarpdf');
Route::post('uploadFile', 'PanelControl@uploadFile')->name('uploadFile');

Route::get('acta2','PanelControl@pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ==================  PAGINAS AUTENTIFICADAS ========================= 77

Route::group(['middleware' => ['auth']], function () {

    Route::get('ingreso', 'IngresoController@index')->name('ingreso.index');

    Route::group(['prefix'=>'ingreso','as'=>'ingreso.'],function () {

        Route::get('entrega', 'EntregaController@index')->name('entrega.index');        
        Route::get('entrega/file/{id}','EntregaController@file' )->name('entrega.file');
        Route::get('entrega/{id}', 'EntregaController@show')->name('entrega.show');
        Route::get('entrega/{id}/edit', 'EntregaController@edit')->name('entrega.edit');

    });

    Route::group(['prefix'=>'ingreso','as'=>'ingreso.'],function () {
        //Route::resource('devolucion', 'DevolucionController');
        Route::get('devolucion', 'DevolucionController@index' )->name('devolucion.index');
        Route::get('devolucion/file/{id}','DevolucionController@file' )->name('devolucion.file');
        Route::get('devolucion/{id}', 'DevolucionController@show')->name('devolucion.show');
        Route::get('devolucion/{id}/edit', 'DevolucionController@edit')->name('devolucion.edit');
        Route::delete('devolucion/{id}', 'DevolucionController@destroy')->name('devolucion.destroy');

    });

});