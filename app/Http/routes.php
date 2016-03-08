<?php

Route::group(['prefix' => 'api/v1'], function() {
    Route::get('/', 'ApiController@indexGET');
    Route::get('/lesson/{id}', 'ApiController@lessonGET');
    Route::post('/store', 'ApiController@storePOST');
});
