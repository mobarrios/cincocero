<?php

Route::post('postRegister','\App\Http\Controllers\ws\wsContentController@postRegister');


//Route::get('contentList/{id}','\App\Http\Controllers\ws\wsContentController@lista');

//Route::resource('content/{id?}','\App\Http\Controllers\ws\wsContentController@getWs');
Route::resource('publications/{id?}','\App\Http\Controllers\ws\wsContentController@publications');


