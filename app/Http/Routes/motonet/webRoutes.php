<?php
Route::group(['namespace' => 'motonet'], function() {


    Route::get('webNueva',[
        'as' => 'indexNueva',
        'uses' => 'webController@indexNuevo'
    ]);

    Route::get('web',[
        'as' => 'index',
        'uses' => 'webController@index'
    ]);

    Route::get('{id}/web',[
        'as' => 'privateExpired',
        'uses' => 'webController@index'
    ]);

    Route::get('detail/{id?}',[
        'as' => 'productDetail',
        'uses' => 'webController@detailNuevo'
    ]);

    Route::get('find',[
        'as' => 'productFind',
        'uses' => 'webController@find'
    ]);

    Route::get('{id}/resumen',[
       'as' => 'resumen',
        'uses' => 'webController@resumen'
    ]);

    Route::get('{id}/sucursal',[
       'as' => 'sucursal.detail',
        'uses' => 'webController@sucursalDetail'
    ]);

    Route::get('amail',[
        'as' => 'envioMail',
        'uses' => 'webController@mail'
    ]);

});