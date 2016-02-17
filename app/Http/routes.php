<?php

Route::group(['prefix' => 'api/v1'], function() {
    Route::get('/', 'ApiController@indexGET');
});
