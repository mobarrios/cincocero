<?php
Route::group(['namespace' => 'motonet'], function() {


    Route::get('resumenNueva/{id?}',[
        'as' => 'resumenNueva',
        'uses' => 'webController@resumenNueva'
    ]);


    Route::get('checkout',[
        'as' => 'checkout',
        'uses' => 'webController@checkout'
    ]);

    Route::get('cartList',[
        'as' => 'cartList',
        'uses' => 'webController@cartList'
    ]);
    
    Route::get('searchNueva',[
        'as' => 'searchNueva',
        'uses' => 'webController@searchNueva'
    ]);
    Route::get('webNueva',[
        'as' => 'indexNueva',
        'uses' => 'webController@indexNuevo'
    ]);

    Route::get('web',[
        'as' => 'index',
        'uses' => 'webController@indexNuevo'
    ]);

    Route::get('{id}/web',[
        'as' => 'privateExpired',
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

    Route::get('{id}/sucursal',[
       'as' => 'sucursal.detail',
        'uses' => 'webController@sucursalDetail'
    ]);

    Route::get('amail',[
        'as' => 'envioMail',
        'uses' => 'webController@mail'
    ]);

    Route::get('{id}/addToCart',[
        'as' => 'addToCart',
        'uses' => 'webController@addToCart'
    ]);

    Route::get('{id}/deleteFromCart',[
        'as' => 'deleteFromCart',
        'uses' => 'webController@deleteFromCart'
    ]);

    Route::get('contact',[
        'as' => 'contact',
        'uses' => 'webController@contact'
    ]);

});