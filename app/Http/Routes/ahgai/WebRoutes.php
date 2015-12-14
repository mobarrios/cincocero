<?php


Route::get('index',['as'=>'webHome','uses'=>'\App\Http\Controllers\ahgai\WebController@getIndex']);

Route::get('institucional',['as'=>'institucional','uses'=>'\App\Http\Controllers\ahgai\WebController@getInstitucional']);

Route::get('hoteleria',['as'=>'hoteleria','uses'=>'\App\Http\Controllers\ahgai\WebController@getHoteleriaIndex']);

Route::get('gastronomia',['as'=>'gastronomia','uses'=>'\App\Http\Controllers\ahgai\WebController@getGastronomiaIndex']);

Route::get('galeria',['as'=>'galery','uses'=>'\App\Http\Controllers\ahgai\WebController@getGaleryIndex']);

Route::get('noticia/{id}',['as'=>'news_detail','uses'=>'\App\Http\Controllers\ahgai\WebController@getNewsDetail']);