<?php
Route::group(['namespace' => 'motonet'], function() {
    Route::get('web',[
        'as' => 'index',
        'uses' => 'webController@index'
    ]);

    Route::get('detail',[
        'as' => 'detail',
        'uses' => 'webController@detail'
    ]);

});