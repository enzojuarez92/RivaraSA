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

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('slider')->group(function () {

        Route::name('slider.admin.')
            ->group(function () {

                Route::get('/admin/listar', 'SliderController@index')
                    ->name('index');

                Route::get('/admin/crear', 'SliderController@create')
                    ->name('create');

                Route::post('/admin/guardar', 'SliderController@store')
                    ->name('store');

                Route::get('/admin/editar/{slider}', 'SliderController@edit')
                    ->name('edit');

                Route::put('/admin/actualizar/{slider}', 'SliderController@update')
                    ->name('update');

                Route::delete('/admin/eliminar/{slider}', 'SliderController@destroy')
                    ->name('destroy');

            });

        Route::name('slider.content.')
            ->group(function () {

                Route::post('/content/guardar/{slider}', 'SliderContentController@store')
                    ->name('store');

                Route::get('/content/editar/{slidercontent}', 'SliderContentController@edit')
                    ->name('edit');

                Route::put('/content/actualizar/{slidercontent}', 'SliderContentController@update')
                    ->name('update');

                Route::delete('/content/eliminar/{slidercontent}', 'SliderContentController@destroy')
                    ->name('destroy');

            });
    });

});
