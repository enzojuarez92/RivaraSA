<?php

Route::middleware(['auth'])->prefix('dvsadmin')->name('dvsadmin')->group(function () {
    Route::get('/', 'DvsAdminController@index')->name('.index');

    Route::get('/testEmail', 'DvsAdminController@testEmail')
        ->name('.testEmail');

    Route::get('/logClear', 'DvsAdminController@logClear')
        ->name('.logClear');

    Route::get('/queueRestart', 'DvsAdminController@queueRestart')
        ->name('.queueRestart');

    Route::get('/telescopeRestart', 'DvsAdminController@telescopeRestart')
        ->name('.telescopeRestart');

    Route::get('/migrateFresh', 'DvsAdminController@migrateFresh')
        ->name('.migrateFresh');

    Route::get('/cacheClear', 'DvsAdminController@cacheClear')
        ->name('.cacheClear');

    Route::get('/failedJobs', 'DvsAdminController@failedJobs')
        ->name('.failedJobs');

    Route::post('/failedJobsRetry', 'DvsAdminController@failedJobsRetry')
        ->name('.failedJobsRetry');

    Route::post('/failedJobsReset', 'DvsAdminController@failedJobsReset')
        ->name('.failedJobsReset');

    Route::get('/provisorias', 'DvsAdminController@notiProvisorias')
        ->name('.provisorias');

    Route::get('/desarrollo', 'DvsAdminController@desarrollo')
        ->name('.desarrollo');

});
