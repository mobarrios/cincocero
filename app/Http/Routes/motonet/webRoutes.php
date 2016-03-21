<?php
Route::group(['prefix' => 'sectores', 'namespace' => 'Sectores'], function() {
    Route::get('',[
        'as' => 'index',
        'uses' => 'webcontroller'
    ]);

});