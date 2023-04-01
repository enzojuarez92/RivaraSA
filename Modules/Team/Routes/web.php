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
    Route::prefix('team')->group(function () {
        // Team
        // --------------------------------------------------------------------------------------
        Route::name('team.')
            ->group(function () {

                Route::get('/listar', 'TeamController@index')
                    ->name('index');

                Route::get('/crear', 'TeamController@create')
                    ->name('create');

                Route::post('/guardar', 'TeamController@store')
                    ->name('store');

                Route::get('/editar/{team}', 'TeamController@edit')
                    ->name('edit');

                Route::post('/actualizar/{team}', 'TeamController@update')
                    ->name('update');

                Route::post('/eliminar/{team}', 'TeamController@destroy')
                    ->name('delete');

            });
    });
});
