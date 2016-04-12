<?php
Route::group(['namespace' => 'motonet'], function() {
    Route::get('web',[
        'as' => 'index',
        'uses' => 'webController@index'
    ]);

    Route::get('detail',[

        'as' => 'productDetail',
        'uses' => 'webController@detail'
    ]);

    Route::get('grid',[

        'as' => 'productGrid',
        'uses' => 'webController@grid'
    ]);

    Route::get('resumen',[
       'as' => 'resumen',
        'uses' => 'webController@resumen'
    ]);

});