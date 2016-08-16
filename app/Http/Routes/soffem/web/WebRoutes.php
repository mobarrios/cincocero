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

Route::get('reglamentoWeb',[
    'as' => 'reglamentoWeb',
    'uses' => 'soffem\WebController@reglamentoWeb'
]);


Route::get('historiaWeb',[
    'as' => 'historiaWeb',
    'uses' => 'soffem\WebController@historiaWeb'
]);

Route::get('{id}/sedesDetail',[
    'as' => 'sedesDetail',
    'uses' => 'soffem\WebController@sedesDetail'
]);








