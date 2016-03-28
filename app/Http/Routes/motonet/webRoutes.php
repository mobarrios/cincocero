<?php
Route::group(['prefix'=>'web','namespace' => 'motonet'], function() {
    Route::get('',[
        'as' => 'index',
        'uses' => 'webController@index'
    ]);

});