<?php

Route::get('index',function(){

    return view('soffem.web.home');
});


Route::get('index',[
    'as' => 'webIndex',
    'uses' => 'soffem\WebController@index'
]);

Route::get('fasesDetalle',[
    'as' => 'fasesDetalle',
    'uses' => 'soffem\WebController@fasesDetalle'
]);


Route::get('equiposDetail',[
    'as' => 'equiposDetail',
    'uses' => 'soffem\WebController@equiposDetail'
]);



Route::get('jugadoresDetail',[
    'as' => 'jugadoresDetail',
    'uses' => 'soffem\WebController@jugadoresDetail'
]);






