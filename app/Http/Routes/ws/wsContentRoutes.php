<?php

//Route::get('contentList/{id}','\App\Http\Controllers\ws\wsContentController@lista');

//Route::resource('content/{id?}',   '\App\Http\Controllers\ws\wsContentController');
//Route::get('content/{id?}');
Route::get('teams/{id}', '\App\Http\Controllers\ws\wsContentController@getTeams');

