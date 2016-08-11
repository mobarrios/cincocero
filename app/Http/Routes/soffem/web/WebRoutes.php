<?php

Route::get('index',function(){

    return view('soffem.web.home');
});


Route::get('fasesDetalle',[
    'as' => 'fasesDetalle',
    'uses' => 'soffem\WebController@fasesDetalle'
]);






