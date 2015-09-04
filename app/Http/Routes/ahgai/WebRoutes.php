<?php


Route::get('index',['as'=>'webHome','uses'=>'\App\Http\Controllers\ahgai\WebController@getIndex']);

Route::get('hoteleria',['as'=>'hoteleria','uses'=>'\App\Http\Controllers\ahgai\WebController@getHoteleriaIndex']);

Route::get('galeria',['as'=>'galery','uses'=>'\App\Http\Controllers\ahgai\WebController@getGaleryIndex']);
