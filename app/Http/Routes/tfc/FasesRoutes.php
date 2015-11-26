<?php

$module = 'fases';
$controller = '\App\Http\Controllers\tfc\FasesController';

Route::get('list'.$module,           ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module,'uses'=> $controller.'@getIndex']);
Route::get('edit'.$module.'/{id?}',   ['middleware'=>'roles','data'=> $module.'-edit' ,'as'=> $module.'GetEdit','uses'=> $controller.'@getEdit']);
Route::get('delete'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-delete' ,'as'=> $module.'GetDel','uses'=> $controller.'@getDel']);
Route::get('new'.$module.'/{id?}',    ['middleware'=>'roles','data'=> $module.'-store' ,'as'=> $module.'GetNew', 'uses'=> $controller.'@getNew']);
Route::get('fixture'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module.'Fixture', 'uses'=> $controller.'@getDetail']);


Route::post('postNew'.$module,          ['as'=> $module.'PostNew', 'uses'=> $controller.'@postNew']);
Route::post('postEdit'.$module.'/{id?}', ['as'=>$module.'PostEdit', 'uses'=> $controller.'@postEdit']);







