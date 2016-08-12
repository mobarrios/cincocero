<?php

$module = 'matches';
$controller = '\App\Http\Controllers\soffem\MatchesController';

Route::get('list'.$module,           ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module,'uses'=> $controller.'@getIndex']);
Route::get('edit'.$module.'/{id?}/{fases?}',   ['middleware'=>'roles','data'=> $module.'-edit' ,'as'=> $module.'GetEdit','uses'=> $controller.'@getEdit']);
Route::get('delete'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-delete' ,'as'=> $module.'GetDel','uses'=> $controller.'@getDel']);
Route::get('new'.$module,            ['middleware'=>'roles','data'=> $module.'-store' ,'as'=> $module.'GetNew', 'uses'=> $controller.'@getNew']);

Route::get('result'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-edit' ,'as' => $module.'GetResult','uses' => $controller.'@getResult']);

Route::get('ficha'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-list' ,'as' => $module.'GetFicha','uses' => $controller.'@getFicha']);

Route::post('postNew'.$module,          ['as'=> $module.'PostNew', 'uses'=> $controller.'@postNew']);
Route::post('postEdit'.$module.'/{id}', ['as'=> $module.'PostEdit', 'uses'=> $controller.'@postEdit']);
Route::post('postResult'.$module ,      ['as' => $module.'PostResult','uses'=>$controller.'@postResult']);

Route::post('editResult'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-edit' ,'as' => $module.'PostEditResult','uses' => $controller.'@postEditResult']);






