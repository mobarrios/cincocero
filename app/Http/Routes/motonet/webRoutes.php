<?php
Route::group(['namespace' => 'motonet'], function() {

    Route::get('web',[
        'as' => 'index',
        'uses' => 'webController@index'
    ]);

    Route::get('detail/{id?}',[
        'as' => 'productDetail',
        'uses' => 'webController@detail'
    ]);

    Route::get('find',[
        'as' => 'productFind',
        'uses' => 'webController@find'
    ]);

    Route::get('{id}/resumen',[
       'as' => 'resumen',
        'uses' => 'webController@resumen'
    ]);

});